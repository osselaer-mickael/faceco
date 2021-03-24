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

    public function insertUser(User $user) : void{
        $conn = $this->db->prepare("INSERT INTO stagemicka.user (nom, prenom, mail, pass) VALUES (:nom, :prenom, :mail, :pass)");
        $conn->bindValue(":nom", $user->getNom());
        $conn->bindValue(":prenom", $user->getPrenom());
        $conn->bindValue(":mail", $user->getMail());
        $conn->bindValue(":pass", $user->getPass());
        $conn->execute();
    }

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