<?php

class ConsommationManager {

    /**
     * Add a new consommation.
     * @param User $user
     * @param ConsommationType $consommationType
     * @param int $amount
     * @param string $month
     * @return Consommation
     */
    public function addConsommation(User $user, ConsommationType $consommationType, int $amount, string $month): Consommation {
        $consommation = new Consommation();
        $consommation->setQuantity($amount);
        $consommation->setConsommationType($consommationType);
        $consommation->setMonth($month);
        $consommation->setUser($user);
        return $consommation;
    }


    /**
     * Save consommation to the database.
     * @param Consommation $conso
     * @return bool
     */
    public function save(Consommation $conso): bool {
        // On cherche ue consommation ayant le même mois que la consommation à sauvegarder.
        $existingConsommation = $this->getConsommation($conso->getUser(), $conso->getMonth(), $conso->getConsommationType());
        // Si la consommation existe ( si l'id n'est pas null c'est qu'elle existe ).
        if($existingConsommation->getId()) {
            // Alors on ajoute amount à la consommation existante.
            $stmt = DB::getInstance()->prepare("
                UPDATE consommation SET quantity = :quantity WHERE id=:id
            ");

            $stmt->bindValue(':quantity', $existingConsommation->getQuantity() + $conso->getQuantity());
            $stmt->bindValue(':id', $existingConsommation->getId());
            if($stmt->execute()) {
                return true;
            }
        }
        // L'id de consommation récupéré en base de données est null, la consommation n'existe pas, on peut en créer une.
        else {
            $stmt = DB::getInstance()->prepare("
                INSERT INTO consommation (user_fk, consommation_type_fk, quantity, month) 
                VALUES (:user_fk, :conso_type, :quantity, :month) 
            ");

            $stmt->bindValue(':user_fk', $conso->getUser()->getId(), PDO::PARAM_INT);
            $stmt->bindValue(':conso_type', $conso->getConsommationType()->getId(), PDO::PARAM_INT);
            $stmt->bindValue(':quantity', $conso->getQuantity(), PDO::PARAM_INT);
            $stmt->bindValue(':month', mb_strtolower($conso->getMonth()));
            if($stmt->execute()) {
                return true;
            }
        }

        return false;
    }


    /**
     * Return all user consommations.
     * @param User $user
     * @param ConsommationType $consommationType
     * @return array
     */
    public function getConsommations(User $user, ConsommationType $consommationType): array {
        $consos = [];

        $stmt = DB::getInstance()->prepare("SELECT * FROM consommation WHERE user_fk=:id AND consommation_type_fk=:conso_type");
        $stmt->bindValue(':id', $user->getId());
        $stmt->bindValue(':conso_type', $consommationType->getId());

        if($stmt->execute()) {
            $data = $stmt->fetchAll();
            if($data) {
                foreach($data as $userData) {
                    $conso = new Consommation();
                    $conso->setId($userData['id']);
                    $conso->setUser($user);
                    $conso->setMonth($userData['month']);
                    $conso->setConsommationType($consommationType);
                    $conso->setQuantity($userData['quantity']);
                    $consos[$conso->getMonth()] = $conso;
                }
            }
        }
        /**
         * Retourne un tableau associatif avec le nom du mois en clé.
         * $conso['janvier'] => Consommation Objet.
         */
        return $consos;
    }


    /**
     * Return a consommation base on mont name.
     * @param User $user
     * @param string $month
     * @return Consommation
     */
    public function getConsommation(User $user, string $month, ConsommationType $consommationType): Consommation {
        $conso = new Consommation();

        $stmt = DB::getInstance()->prepare("SELECT * FROM consommation WHERE month = :month AND user_fk = :user_fk AND consommation_type_fk=:conso_type");
        $stmt->bindValue(':month', $month);
        $stmt->bindValue(':user_fk', $user->getId());
        $stmt->bindValue(':conso_type', $consommationType->getId());

        if($stmt->execute()) {
            $data = $stmt->fetch();
            if($data) {
                $conso->setId($data['id']);
                $conso->setQuantity($data['quantity']);
                $conso->setConsommationType($consommationType);
                $conso->setMonth($month);
                $conso->setUser($user);
            }
        }
        return $conso;
    }
}