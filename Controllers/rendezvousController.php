<?php
require "../Models/Database.php";
require "../Models/patients.php";
require "../Models/appointements.php";
$patient = new Patients();
$appointment = new appointments();


isset($_GET['id']) ? $appointmentId = $_GET['id'] : "";
