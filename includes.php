<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "./Classes/DB.php";

// Entités
require_once $_SERVER['DOCUMENT_ROOT'] . "./Entity/User.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "./Entity/Consommation.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "./Entity/ConsommationType.php";

// Managers.
require_once $_SERVER['DOCUMENT_ROOT'] . "./Manager/UserManager.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "./Manager/ConsommationManager.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "./Manager/ConsommationTypeManager.php";

session_start();
$connected = false;
if(isset($_SESSION["user"])){
    $user = $_SESSION["user"];
    $connected = true;
}