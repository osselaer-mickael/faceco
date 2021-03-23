<?php

session_start();

if(session_status() === PHP_SESSION_ACTIVE){
    session_destroy();
    $_SESSION["user"] = null;
    header("Location: ../index.php");
}
else{
    header("Location: ../index.php");
}