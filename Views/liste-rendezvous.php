<?php
require "../Controllers/liste-rendezvousController.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/style.css" />
    <title>Document</title>
</head>

<body>

    <form method="post" action="search.php">
        Recherche : <input type="text" name="q" />
        <input type="submit" value="Cherche" />
    </form>

    <table>
        <thead>
            <tr class="mb-4">
                <th colspan="3">RENDEZ-VOUS:</th>
            </tr>
        </thead>
        <tbody>
            <td colspan="3">Liste des rendez-vous
                <?php
                $appointmentsList = $appointments->getAllAppointment();
                foreach ($appointmentsList as $key => $value) {
                ?>
                    <p><?= $value['dateHour']  ?></p>
                <?php
                }
                ?>
            </td>
        </tbody>
    </table>
    <div><a href="ajout-rendezvous.php">Prendre un nouveau rendez-vous</a></div>
    <div><a href="../index.php">Retour à l'accueil</a></div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>