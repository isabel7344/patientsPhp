<?php

class Appointments extends Database
{
    private $id;
    private $dateHour;
    private $idPatients;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of dateHour
     */
    public function getDateHour()
    {
        return $this->dateHour;
    }

    /**
     * Set the value of dateHour
     *
     * @return  self
     */
    public function setDateHour($dateHour)
    {
        $this->dateHour = $dateHour;

        return $this;
    }

    /**
     * Get the value of idPatients
     */
    public function getIdPatients()
    {
        return $this->idPatients;
    }

    /**
     * Set the value of idPatients
     *
     * @return  self
     */
    public function setIdPatients($idPatients)
    {
        $this->idPatients = $idPatients;

        return $this;
    }
    public function __construct()
    {
        parent::__construct();
    }
    //exo5 creation d'un rendez-vous pour un patient dans la liste deroulante du formulaire
    public function createAppointment($dateHour, $idPatient)
    {
        $query = "INSERT INTO `appointments` (`dateHour` , `idPatients`) VALUES (:dateHour , :idPatient)";
        $createAppointment = parent::getDb()->prepare($query);
        $createAppointment->bindValue("dateHour", $dateHour, PDO::PARAM_STR);
        $createAppointment->bindValue("idPatient", $idPatient, PDO::PARAM_STR);
        return $createAppointment->execute();
    }
    // exo 6 liste des rendez-vous
    public function getAllAppointment()
    {
        $query = "SELECT * FROM `appointments`INNER JOIN patients ON patients.id = appointments.idPatients";
        $queryGetAllAppointment = parent::getDb()->prepare($query);
        $queryGetAllAppointment->execute();
        $resultsQuery = $queryGetAllAppointment->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }


    public function getOneAppointments($appointmentId)
    {
        $query = "SELECT appointments.id, appointments.dateHour, appointments.idPatients AS patientsNumber,  patients.lastname, patients.firstname, patients.birthdate, patients.phone, patients.mail
        FROM `appointments` INNER JOIN patients ON patients.id = appointments.idPatients WHERE appointments.id = :appointmentId";
        $queryGetOneAppointment = parent::getDb()->prepare($query);
        $queryGetOneAppointment->bindValue("appointmentId", $appointmentId, PDO::PARAM_INT);
        $queryGetOneAppointment->execute();
        $resultsQuery = $queryGetOneAppointment->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }








    // public function AddAppointement($patientId, $lastname, $firstname, $dateHour)
    // {
    //     $query = "SELECT * FROM `appointement`INNER JOIN `patients`ON `appointement.id  = patients.fk_id`";
    //     $queryAddAppointement = parent::getDb()->prepare($query);
    //     $queryAddAppointement->execute();
    //     $resultsQuery = $queryAddAppointement->fetchAll(PDO::FETCH_ASSOC);
    //     if (!empty($resultsQuery)) {
    //         return $resultsQuery;
    //     } else {
    //         return false;
    //     }
    // }
}
