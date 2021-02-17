<?php

class Patients extends Database
{
    private $Id;
    private $lastname;
    private $firstname;
    private $birthdate;
    private $phone;
    private $mail;

    /**
     * Get the value of Id
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set the value of Id
     *
     * @return  self
     */
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }
    /**
     * Get the value of lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of birthdate
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set the value of birthdate
     *
     * @return  self
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get the value of phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of mail
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }
    public function __construct()
    {
        parent::__construct();
    }
    //exo1 ajout patients
    public function addPatient($lastname, $firstname, $birthdate, $phone, $mail)
    {
        $query = "INSERT INTO patients (lastname, firstname, birthdate, phone, mail) VALUES (:lastname, :firstname, :birthdate, :phone, :mail)";
        $queryAddPatient = parent::getDb()->prepare($query);
        $queryAddPatient->bindValue("lastname", $lastname, PDO::PARAM_STR);
        $queryAddPatient->bindValue("firstname", $firstname, PDO::PARAM_STR);
        $queryAddPatient->bindValue("birthdate", $birthdate, PDO::PARAM_STR);
        $queryAddPatient->bindValue("phone", $phone, PDO::PARAM_STR);
        $queryAddPatient->bindValue("mail", $mail, PDO::PARAM_STR);


        if ($queryAddPatient->execute()) {
            return true;
        } else {
            return false;
        }
    }
    // exo 2 liste patients
    public function getAllPatients()
    {
        $query = "SELECT * FROM `patients`";
        $queryGetAllPatients = parent::getDb()->prepare($query);
        $queryGetAllPatients->execute();
        $resultsQuery = $queryGetAllPatients->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }
    // exo3 affichage d'un patient
    public function getOnePatients($patientId)
    {
        $query = "SELECT * FROM Patients WHERE id = :patientId";
        $queryGetOnePatients = parent::getDb()->prepare($query);
        $queryGetOnePatients->bindValue("patientId", $patientId, PDO::PARAM_INT);
        $queryGetOnePatients->execute();
        $resultsQuery = $queryGetOnePatients->fetch();
        if (!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }
    // public function updatePatient($id, $lastname, $firstname, $birthdate, $phone, $mail)
    // {
    //     $query = "UPDATE `patients` SET `lastname` = :lastname , `firstname` = :firstname , `birthdate` = :birthdate , `phone` = :phone ,  `mail` = :mail WHERE `id` = :id";
    //     $updates = parent::getDb()->prepare($query);
    //     $updates->bindValue("id", $id, PDO::PARAM_INT);
    //     $updates->bindValue("lastname", $lastname, PDO::PARAM_STR);
    //     $updates->bindValue("firstname", $firstname, PDO::PARAM_STR);
    //     $updates->bindValue("birthdate", $birthdate, PDO::PARAM_STR);
    //     $updates->bindValue("phone", $phone, PDO::PARAM_STR);
    //     $updates->bindValue("mail", $mail, PDO::PARAM_STR);
    //     return $updates->execute();
    // }
    //exo4 modification des infos d'un patient
    public function updatePatient(
        $patientId,
        $lastname,
        $firstname,
        $birthdate,
        $phone,
        $mail
    ) {
        $query = "UPDATE Patients SET
            lastname = :lastname,
            firstname = :firstname,
            birthdate = :birthdate,
            phone = :phone,
            mail = :mail 
            WHERE id = :patientId";
        $queryUpdatePatient = parent::getDb()->prepare($query);
        $parameters = array(
            ':patientId' => $patientId,
            ':lastname' => $lastname,
            ':firstname' => $firstname,
            ':birthdate' => $birthdate,
            ':phone' => $phone,
            ':mail' => $mail
        );
        $queryUpdatePatient->execute($parameters);
    }
}
