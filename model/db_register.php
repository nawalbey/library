<?php
require_once('../inc/db_connection.php');
require_once('../inc/function.php');

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mdp = $_POST["mdp"];
    $confirm = $_POST["confirm_mdp"];
    $civility = $_POST["civility"];
    $pays = $_POST["pays"];
    $tel = $_POST["phone"];
    $birthday = $_POST["birthday"];
    $message = $_POST["message"];
    $conditions = null;


    if (isset($_POST["conditions"])) {
        $conditions = $_POST["conditions"];
    } else {
        echo "Conditions obligatoires !";
    }


    // Cryptage mdp
    $mdpHash = password_hash($mdp, PASSWORD_DEFAULT);

    // Connexion base de données : 
    $db = dbConnexion();

    // Préparation requête :
    $request = $db->prepare("INSERT INTO user (civility,firstname,lastname,email,password,country,phone,birthday,message,conditions) VALUES (?,?,?,?,?,?,?,?,?,?)");

    // Execution de la requete 
    try {
        $request->execute(array($civility, $prenom, $nom, $email, $mdpHash, $pays, $tel, $birthday, $message, $conditions));
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}