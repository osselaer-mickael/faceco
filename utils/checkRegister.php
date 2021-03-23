<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

require_once "../Classes/DB.php";
require_once "../Entity/User.php";
require_once "../Manager/UserManager.php";


function checkLen(string $data){
    return strlen($data) > 0;
}
function sanitize(string $data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = addslashes($data);

    return $data;
}
function printR($object){
    echo "<pre>";
    print_r($object);
    echo "</pre>";
}

$userManager = new UserManager();


if(isset($_POST,
    $_POST["nom"],
    $_POST["prenom"],
    $_POST["mail"],
    $_POST["pass"],
    $_POST["verif_pass"]
)){
    $nom = sanitize($_POST["nom"]);
    $prenom = sanitize($_POST["prenom"]);
    $mail = sanitize($_POST["mail"]);
    $pass = sanitize($_POST["pass"]);
    $verif_pass = sanitize($_POST["verif_pass"]);
    if(checkLen($nom) && checkLen($prenom) && checkLen($mail) && checkLen($pass) && checkLen($verif_pass)){
        if($pass === $verif_pass){
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $users = $userManager->getUsers();
            printR($users);
            $alreadyUsedMail = false;
            printR($userManager->getUserByMail($mail));
            if(!count($userManager->getUserByMail($mail)) > 0){
                $user = new User();
                $user
                    ->setNom($nom)
                    ->setMail($mail)
                    ->setPass($pass)
                    ->setPrenom($prenom);
                $userManager->insertUser($user);
                session_start();
                $_SESSION["user"] = $user;
                echo "User inserted";
            }
            else{
                echo "mail deja utilisé";
            }
        }
        else{
            echo "pass different";
        }
    }
    else{
        echo "Tout les champs ne sont pas remplis";
    }
}
else{
    echo "Tout les champs ne sont pas remplis";
}