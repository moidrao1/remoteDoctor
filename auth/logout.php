<?php
session_start();

        require_once '../Controllers/PatientController.php';
        pingPatientOut($_SESSION['user']);


        session_destroy();


        header("Location: ../index.php"); /* Redirect browser */
       exit();

?>