<?php
require "../Models/Database.php";
require "../Models/patients.php";

// ! On Recupere les differentes input de notre page profil_utilisateur
if (isset($_POST['id'])) { // si dans l'url on a le param id
    $patientId = $_POST['id']; //on met a jour l'id du patient
} else {
    echo "impossible de recup l'id du patient";
}

if (isset($_POST['lastname'])) { // si dans l'url on a le param id
    $patientLastName = $_POST['lastname']; //on met a jour l'id du patient
} else {
    echo "impossible de recup name du patient";
}
if (isset($_POST['firstname'])) { // si dans l'url on a le param id
    $patientFirstName = $_POST['firstname']; //on met a jour l'id du patient
} else {
    echo "impossible de recup firstname du patient";
}
if (isset($_POST['birthdate'])) { // si dans l'url on a le param id
    $patientBirthDate = $_POST['birthdate']; //on met a jour l'id du patient
} else {
    echo "impossible de recup birthdate du patient";
}
if (isset($_POST['phone'])) { // si dans l'url on a le param id
    $patientPhone = $_POST['phone']; //on met a jour l'id du patient
} else {
    echo "impossible de recup phone du patient";
}
if (isset($_POST['mail'])) { // si dans l'url on a le param id
    $patientMail = $_POST['mail']; //on met a jour l'id du patient
} else {
    echo "impossible de recup mail du patient";
}

$patients = new patients();

// ! on apelle notre methode qui update le patient avec toute les nouvelle valeur
$patients->updatePatient(
    $patientId,
    $patientLastName,
    $patientFirstName,
    $patientBirthDate,
    $patientPhone,
    $patientMail
);

//! on redirige sur la page du patient que l'on vien de mettre a jour (grace a son id)
header('Location: /Views/profil-patients.php?id=' . $patientId);







// $errors = [];
// $regexName = "/^\D*$/";
// $regexMail = "/^\w*[@]\w*[.]\w{1,4}$/";
// $regexBirth = "/^[1-2][0-9]{3}[-][0-1][0-9][-]([0-2][0-9]|[3][0-1])$/";

// $patient = new patients();
// $fiche = $patient->getOnePatients($_POST['id']);

// if (isset($_POST) && !empty($_POST)) {

//     if (empty($_POST["firstname"])) {
//         $errors["firstname"] = "Remplir cette case";
//     } else if (!preg_match($regexName, $_POST["firstname"])) {
//         $errors["firstname"] = "Le format n'est pas bon";
//     } else {
//         $errors["firstname"] = "";
//         $firstname = htmlspecialchars($_POST["firstname"]);
//     }

//     if (empty($_POST["lastname"])) {
//         $errors["lastname"] = "Remplir cette case";
//     } else if (!preg_match($regexName, $_POST["lastname"])) {
//         $errors["lastname"] = "Le format n'est pas bon";
//     } else {
//         $errors["lastname"] = "";
//         $lastname = htmlspecialchars($_POST["lastname"]);
//     }

//     if (empty($_POST["birthdate"])) {
//         $errors["birthdate"] = "Remplir cette case";
//     } else if (!preg_match($regexBirth, $_POST["birthdate"])) {
//         $errors["birthdate"] = "Le format n'est pas bon";
//     } else {
//         $errors["birthdate"] = "";
//         $birthdate = htmlspecialchars($_POST["birthdate"]);
//     }

//     if (empty($_POST["mail"])) {
//         $errors["mail"] = "Remplir cette case";
//     } else if (!preg_match($regexMail, $_POST["mail"])) {
//         $errors["mail"] = "Le format n'est pas bon";
//     } else {
//         $errors["mail"] = "";
//         $mail = htmlspecialchars($_POST["mail"]);
//     }

//     empty($_POST["phone"]) ? $errors["phone"] = "Remplir cette case" : $phone = $_POST["phone"];

//     if (!isset($_POST['delete']) && isset($_POST['firstname'])) {
//         $patient->updatePatient($_POST['id'], $lastname, $firstname, $birthdate, $phone, $mail);
//         header("Location: listePatient.php");
//     } else if (isset($_POST['delete'])) {
//         $patient->deletePatient($_POST['delete']);
//         header("Location: listePatient.php");
//     }
// }
