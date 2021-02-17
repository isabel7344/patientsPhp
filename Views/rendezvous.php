<?php
require "../Controllers/rendezvousController.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Infos du rendez-vous</h2>


    <?php
    $appointmentList = $appointment->getOneAppointments($appointmentId);
    foreach ($appointmentList as $key => $value) {
        echo "Date et heure du rendez-vous : " . $value["dateHour"] . "<br>";
        echo "Nom : " . $value["lastname"] . "<br>";
        echo "prénom : " . $value["firstname"] . "<br>";
        echo "Date de naissance : " . $value["birthdate"] . "<br>";
        echo "numéro de téléphone : " . $value["phone"] . "<br>";
        echo "mail : " . $value["mail"] . "<br><br>";
    }


    ?>


    <div><a href="modification-rendezvous.php?id=<?= $value['id'] ?>">Modifier le rendez-vous</a></div>
    <div><a href="suppression-rendezvous.php?id=<?= $value['id'] ?>">supprimer le rendez-vous</a></div>
    <div><a href="liste-rendezvous.php">Retour à la liste de rendez-vous</a></div>
    <div><a href="../index.php">Retour à l'accueil</a></div>

</body>

</html>