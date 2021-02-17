<?php
require "../Models/Database.php";
require "../Models/appointements.php";
require "../Models/patients.php";

$patient = new patients();
$appointment = new Appointements();

$patientList = $patient->getAllPatients();

if (isset($_POST) && !empty($_POST)) {
    if (isset($_POST["date"]) && isset($_POST["time"])) {
        $dateHour = $_POST["date"] . " " . $_POST["time"];
    }

    if (isset($_POST["patientId"]) && !empty($_POST["patientId"])) {
        $idPatient = $_POST["patientId"];
    }

    if (isset($dateHour) && !empty($dateHour) && isset($idPatient) && !empty($idPatient)) {
        $appointment->createAppointment($dateHour, $idPatient);
    }
}
