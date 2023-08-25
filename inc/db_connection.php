<?php

function dbConnexion()
{
    $connexion = null;
    $host = 'localhost';
    $dbName = "library";
    $identify = "root";
    $password = "";
    try {
        $connexion = new PDO("mysql:host=$host;dbname=$dbName", $identify, $password);
    } catch (PDOException $e) {
        $connexion = $e->getMessage();
    }

    return $connexion;
}

define("RACINE_SITE", "/library/");

require_once('../inc/function.php');