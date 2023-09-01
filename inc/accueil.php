<?php
session_start(); // a mettre avant le html c'est pour demarrer une session
require_once '../inc/function.php';
if (!isset($_SESSION['id'])) { // si il n y a pas de session active
    header("Location: ../connexion.php"); // rediriger vers le formulaire de connexion
}
// echo"<pre>";
// print_r($listPost);
// echo"<pre>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./css/style1.css">
    <title>Document</title>
</head>

<body>
    <?php include_once "../inc/nav.php"; ?>

    <div class="container">

    </div>
</body>

</html>