<?php
require "../Models/Database.php";
require "../Models/patients.php";
// require "../Models/Appointments.php";

$patient = new Patients();
// $appointment = new Appointements();

$patientId = ""; // on init l'id du patient a rien

if (isset($_GET['id'])) { // si dans l'url on a le param id
    $patientId = $_GET['id']; //on met a jour l'id du patient
} else {
    echo "impossible de recup l'id du patient";
}
