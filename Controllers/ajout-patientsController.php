<?php
require "../Models/Database.php";
require "../Models/patients.php";


$patient = new Patients();

$messageError = [];
$messageSuccess = [];

$regexName = '/^\D{2,19}$/';
$regexDate = '/^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/';
//prend 0 ou +33 ou 0033 puis un chiffre de 1à9 ensuite 8 chiffres
$regexPhoneNumber = '/^(0|\\+33|0033)[1-9][0-9]{8}$/';

//On test si les $_POST sont bien en place via des ternaires, si ils y sont, alors le $_POST = la variable correspondant

isset($_POST['lastname']) ? $lastname = $_POST['lastname'] : "";
isset($_POST['firstname']) ? $firstname = $_POST['firstname'] : "";
isset($_POST['birthdate']) ? $birthdate = $_POST['birthdate'] : "";
isset($_POST['phone']) ? $phone = $_POST['phone'] : "";
isset($_POST['mail']) ? $mail = $_POST['mail'] : "";

//si les variables existent, alors on lance la requete

if (isset($lastname) && isset($firstname) && isset($birthdate) && isset($phone) && isset($mail)) {
    if ($patient->addPatient($lastname, $firstname, $birthdate, $phone, $mail)) {
        echo '<script>alert("le patient a bien été enregistré")</script>';
    };
}
