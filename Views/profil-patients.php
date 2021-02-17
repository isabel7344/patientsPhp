<?php
require "../Controllers/profil-patientsController.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil patient</title>
</head>

<body>
    <form enctype="multipart/form-data" action="../Controllers/update-patientController.php" method="post">
        <?php $onePatient = $patient->getOnePatients($patientId); ?>
        <input name="id" type="hidden" value="<?= $patientId ?>" />
        <p>Nom : <input name="lastname" value="<?= $onePatient["lastname"] ?>" /> </p>
        <p>prénom : <input name="firstname" value="<?= $onePatient["firstname"] ?>" /> </p>
        <p>Date de naissance : <input name="birthdate" value="<?= $onePatient["birthdate"] ?>" /> </p>
        <p>numéro de téléphone : <input name="phone" alue="<?= $onePatient["phone"] ?>" /> </p>
        <p>mail : <input name="mail" value="<?= $onePatient["mail"] ?>" /> </p>
        <button href="submit">Enregistrer les modifs</button>
    </form>
    <div><a href="ajout-patient.php">Enregistrer un patient</a></div>
    <div><a href="../index.php">Retour à l'accueil</a></div>
</body>

</html>











<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container mx-auto">
        <form action="" method="post" class="">
            <div class="mb-3">
                <label for="firstname">Prénom : </label>
                <input type="text" name="firstname" id="" value="<?= $fiche['firstname'] ?>">
            </div>

            <div class="mb-3">
                <label for="lastname">Nom : </label>
                <input type="text" name="lastname" id="" value="<?= $fiche['lastname'] ?>">
            </div>
            <div class="mb-3">
                <label for="birthdate">Date de naissance : </label>
                <input type="date" name="birthdate" id="" value="<?= $fiche['birthdate'] ?>">
            </div>
            <div class="mb-3">
                <label for="phone">Numéro de Téléphone : </label>
                <input type="text" name="phone" id="" value="<?= $fiche['phone'] ?>">
            </div>
            <div class="mb-3">
                <label for="mail">Adresse Mail : </label>
                <input type="text" name="mail" id="" value="<?= $fiche['mail'] ?>">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit" name="id" value="<?= $_POST['id'] ?>">Enregistrer</button>
                <button class="btn btn-danger" type="submit" name="delete" value="<?= $_POST['id'] ?>">Supprimer</button>
            </div>
        </form>
    </div>
</body>

</html> -->