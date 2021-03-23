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
    $_POST["mail"],
    $_POST["pass"]
)){
    $mail = $_POST["mail"];
    $pass = $_POST["pass"];
    if(checkLen($mail) && checkLen($pass)){
        $users = $userManager->getUserByMail($mail);
        $find = false;
        foreach($users as $user){
            if($user->getMail() === $mail){
                if(password_verify($pass,$user->getPass())){
                    $userVerif = $user;
                    $find = true;
                    break;
                }
            }
        }
        if($find){
            printR($userVerif);
        }
        else{
            echo "mauvaise information";
        }
    }
    else{
        echo "les champs ne sont pas remplis";
    }
}