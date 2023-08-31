<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style1.css">
    <title>Document</title>
</head>

<body>
    <?php include_once "./inc/nav.php"; ?>

    <div class="container">
        <form action="model./security.php" method="post" enctype="multipart/form-data">
            <div>
                <input type="email" name="email" placeholder="Votre email">

                <div>
                    <input type="password" name="mdp" placeholder="Votre mot de passe">
                </div>

                <div>
                    <button name="valider">Inscription</button>
                </div>
        </form>
    </div>

</body>

</html>