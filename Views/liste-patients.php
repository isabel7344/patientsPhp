<?php
require "../Controllers/liste-patientsController.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/style.css" />
    <title>Document</title>
</head>

<body>

    <form method="get" action="search.php">
        Recherche : <input type="text" name="q" />
        <input type="submit" value="Cherche" />
    </form>

    <h2>Patients : </h2>
    <table>
        <thead>
            <tr>
                <th colspan="3">Liste des patients</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($patient->getAllPatients() as $patient) { ?>
                <tr style="border: 1px solid black; display: flex; flex-direction: column;">
                    <td>
                        <p><?= $patient['lastname'] . " " . $patient['firstname'] ?></p>
                    </td>
                    <td>
                        <a href="profil-patients.php?id=<?= $patient['id'] ?>">Plus d'informations sur le patient</a>
                    </td>
                    <td>
                        <a href="suppression-patient.php?id=<?= $patient['id'] ?>">supprimer le patient et ses rendez-vous</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>


    <div><a href="ajout-patient.php">Enregistrer un patient</a></div>
    <div><a href="../index.php">Retour à l'accueil</a></div>

</body>

</html>