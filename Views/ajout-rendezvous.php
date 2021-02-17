<?php
require "../Controllers/ajout-rendezvousController.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendez-Vous Patient</title>
</head>

<body>
    <form action="ajout-rendezvous.php" method="post">


        <select name="patientId">
            <?php
            foreach ($patientList as $patients) {
            ?>
                <option value="<?= $patients["id"] ?>"><?= $patients["lastname"] . " " . $patients["firstname"]  ?></option>
            <?php
            }

            ?>
        </select>
        <input type="date" name="date">
        <input type="time" name="time">
        <button href="submit">Enregistrer le rendez-vous</button>
    </form>
    <a href="../index.php">Retour à l'accueil</a>
</body>

</html>