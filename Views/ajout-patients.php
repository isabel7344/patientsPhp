<?php
require "../Controllers/ajout-patientsController.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/style.css" />
    <title>FORMULAIRE</title>
</head>

<body>


    <div class="container justify-content-center bg-dark rounded person-shadow mt-2">

        <h1 class="text-center">FORMULAIRE PATIENTS </h1>
        <h2 class="text-center text-uppercase"> Veuillez remplir le formulaire</h2>
    </div>
    <div class="container d-flex justify-content bg-dark rounded person-shadow mt-4 mb-2 ">

        <form enctype="multipart/form-data" action="ajout-patients.php" method="post">
            <div class=" mt-5 ">
                <label for="lastname">NOM</label>
            </div>
            <div>
                <input type="text" id="lastname" name="lastname" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>" placeholder="ex : Doe">
            </div>
            <p class="displayMessage">
                <?= isset($messageError['lastname']) ? $messageError['lastname'] : '' ?><?= isset($messageSuccess['lastname']) ? $messageSuccess['lastname'] : '' ?>
            </p>
            <div>
                <label for="firstname">Prénom</label>
            </div>
            <div>
                <input type="text" id="firstname" name="firstname" value="<?= (isset($_POST['firstname'])) ? $_POST['firstname'] : '' ?>" placeholder="ex : John">
            </div>
            <div class="displayMessage">
                <?= (isset($messageError['firstname'])) ? $messageError['firstname'] : '' ?>
            </div>
            <div>
                <label for="birthdate">Date de naissance</label>
            </div>
            <div>
                <input type="text" id="birthdate" name="birthdate" value="<?= (isset($_POST['birthdate'])) ? $_POST['birthdate'] : '1990-10-08' ?>">
            </div>
            <div class="displayMessage">
                <?= (isset($messageError['birthdate'])) ? $messageError['birthdate'] : '' ?>
            </div>
            <div>
                <label for="mail">E-MAIL</label>
                <div>
                    <input type="text" id="mail" name="mail" value="<?= (isset($_POST['mail'])) ? $_POST['mail'] : 'johnDoe@gmail.com' ?>">
                </div>
                <div ">
                    <label for=" phone">TELEPHONE</label>
                </div>
                <div>
                    <input type="text" id="phone" name="phone" value="<?= (isset($_POST['phone'])) ? $_POST['phone'] : '' ?>" placeholder="06050403">
                </div>
                <div class="displayMessage">
                    <?= (isset($messageError['phone'])) ? $messageError['phone'] : '' ?>
                </div>
                <div class="row justify-content-end mt-4">
                    <button type="submit" class="btn btn-primary mt-4 mb-4 text-center  ">ENVOYER</button>
                </div>

                <a href="../index.php">Retour à l'accueil</a>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
                </script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
                </script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
                </script>
</body>

</html>