<?php


class UserManager
{
    private ?PDO $db;

    /**
     * ArticleManager constructor.
     */

    public function __construct(){
        $this->db = DB::getInstance();
    }

    /**
     * Return all Articles.
     */
    public function getUsers(): array{
        $users = [];
        $conn = $this->db->prepare("SELECT * FROM stagemicka.user");
        if($conn->execute()){
            foreach($conn->fetchAll() as $item){
                $user = new User($item["id"]);
                $user
                    ->setMail($item["mail"])
                    ->setPrenom($item["prenom"])
                    ->setNom($item["nom"])
                    ->setPass($item["pass"]);
                $users[] = $user;
            }
        }
        return $users;
    }

    /**
     * Return a single user based on provided ID.
     * @param int $id
     * @return User
     */
    public function getUser(int $id): User {
        $stmt = DB::getInstance()->prepare("SELECT * FROM user WHERE id=:id");
        $stmt->bindValue(':id', $id);
        $user = new User();
        if($stmt->execute()) {
            $udata = $stmt->fetch();
            $user = new User();
            $user->setId($udata['id']);
            $user->setMail($udata['mail']);
            $user->setNom($udata['nom']);
            $user->setPrenom($udata['prenom']);
            $user->setPass($udata['pass']);
        }
        return $user;
    }

    /**
     * @param User $user
     */
    public function insertUser(User $user) : void{
        $conn = $this->db->prepare("INSERT INTO stagemicka.user (nom, prenom, mail, pass) VALUES (:nom, :prenom, :mail, :pass)");
        $conn->bindValue(":nom", $user->getNom());
        $conn->bindValue(":prenom", $user->getPrenom());
        $conn->bindValue(":mail", $user->getMail());
        $conn->bindValue(":pass", $user->getPass());
        $conn->execute();
    }

    /**
     * @param string $mail
     * @return array
     */
    public function getUserByMail(string $mail){
        $conn = $this->db->prepare("SELECT * FROM stagemicka.user where mail = :mail");
        $conn->bindValue(":mail", $mail);
        $conn->execute();
        $users = [];
        foreach($conn->fetchAll() as $item){
            $user = new User($item["id"]);
            $user
                ->setPass($item["pass"])
                ->setMail($item["mail"])
                ->setNom($item["nom"])
                ->setPrenom($item["prenom"]);
            $users[] = $user;
        }
        return $users;
    }
}