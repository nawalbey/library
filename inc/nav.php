<?php

if (isset($_SESSION['id'])) { ?>

    <nav>

        <a class="publier" href="post.php">publier</a>

        <div class="profil">

            <img src="img/<?php echo $_SESSION["img"]; ?>" alt="profil">

        </div>

        <form method="post">

            <button class="logout" name="logout">Deconnexion</button>

        </form>

    </nav>

<?php } else { ?>

    <nav>

        <button><a href="connexion.php">Connexion</a></button>

    </nav>

<?php } ?>



<?php

if (isset($_POST['logout'])) {

    session_destroy();

    // header("Location: connexion.php");

    echo "<script>location.href='connexion.php'</script>";

}

?>