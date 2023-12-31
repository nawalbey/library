<?php
session_start();
include_once("../inc/db_connection.php");

if (isset($_POST['valider'])) {
$email = $_POST['email'];
$mdp = $_POST['mdp'];
// etablir la connexion avec la bd
$connect = dbConnexion();
// preparer la requete
$connexionRequest = $connect->prepare("SELECT * FROM user WHERE email = ?");
// executer la requete
$connexionRequest->execute(array($email));
// recupere le resultat de la requete
$utilisateur = $connexionRequest->fetch(PDO::FETCH_ASSOC); // convertir le resultat de la requete en tableau pour le manipuler facilement
// echo " <pre>";
    // print_r($utilisateur);
    // echo "<pre>";

    if (empty($utilisateur)) { // si le tableau $utilisateur est vide
        echo "Utilisateur inconnu...";
    } else { // sinon
        // on verifie le mot de passe
        if (password_verify($mdp, $utilisateur['password'])) {
            //creer les variable de session
            $_SESSION["id"] = $utilisateur['id_membres'];
            $_SESSION["pseudo"] = $utilisateur['pseudonyme'];
            $_SESSION["img"] = $utilisateur['images'];
            //creation du cookie qui va stocker la valeur l'edentifiant de l'utilisateur pour permetre une meilleure experience
            //c a d on va la connecter automatiquement apres verification du cookie
            // setcookie("id_user", $utilisateur['id_membres'], time() + 3600, '/', 'cours.com', false, true);
            header("Location: ../inc/accueil.php");

        } else {
            echo "mot de passe incorrect";
        }
    }}