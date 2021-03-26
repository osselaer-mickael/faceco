<?php

class ConsommationTypeManager {

    /**
     * Get consommations types from database.
     * @return array
     */
    public function getConsommationsType(): array {
        $consommationsType = [];
        $stmt = Db::getInstance()->prepare("SELECT * FROM consommation_type");
        if($stmt->execute()) {
            $result = $stmt->fetchAll();
            foreach ($result as $ligneTable) {
                $consommationType = new ConsommationType();
                $consommationType->setId($ligneTable['id']);
                $consommationType->setName($ligneTable['name']);
                $consommationType->setUnity($ligneTable['unite']);
                $consommationType->setUnitPrice($ligneTable['unite_price']);
                $consommationsType[] = $consommationType;
            }
        }
        return $consommationsType;
    }


    /**
     * Return the asked consommetion type.
     * @param string $name
     * @return ConsommationType
     */
    public function getByName(string $name): ConsommationType {
        $consommationType = new ConsommationType();
        $stmt = DB::getInstance()->prepare("SELECT * FROM consommation_type WHERE name=:name");
        $stmt->bindValue(':name', $name);
        if($stmt->execute()) {
            $data = $stmt->fetch();
            if($data) {
                $consommationType->setId($data['id']);
                $consommationType->setUnitPrice($data['unite_price']);
                $consommationType->setUnity($data['unite']);
                $consommationType->setName($data['name']);
            }
        }
        return $consommationType;
    }


    /**
     * Return the consommation type matching provided id.
     * @param int $id
     * @return ConsommationType
     */
    public function getConsommationType(int $id): ConsommationType {
        $stmt = DB::getInstance()->prepare("SELECT * FROM consommation_type WHERE id=:id");
        $stmt->bindValue(':id', $id);
        $consommationType = new ConsommationType();
        if($stmt->execute()) {
            $cdata = $stmt->fetch();
            $consommationType->setId($cdata['id']);
            $consommationType->setName($cdata['name']);
            $consommationType->setUnity($cdata['unite']);
            $consommationType->setUnitPrice($cdata['unite_price']);
        }
        return $consommationType;
    }

}