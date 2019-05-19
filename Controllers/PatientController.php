<?php

      if (isset($_POST['ping'])) {
         
         echo pingPatient($_POST);

    }

function updateMedicalHistory(array $request)
{
 require_once 'Model/DbConnection.php';
$db= new  DatabaseConnection();
$status = $db->updateMedicalHistory($request);
return $status;
    
}

function updateProfile(array $request)
{
 require_once 'Model/DbConnection.php';
$db= new  DatabaseConnection();
$status = $db->updateProfile($request);
return $status;
    
}
function reloadProfile()
{
require_once 'Model/DbConnection.php';
$db= new  DatabaseConnection();
$status = $db->reloadProfile();
return $status;
    
}
function pingPatient(array $data){


require_once '../Model/DbConnection.php';
$db= new  DatabaseConnection();
 $state=$db->pingPatient($data);
return $state;


}
function pingPatientOut(array $data){


require_once '../Model/DbConnection.php';
$db= new  DatabaseConnection();
 $state=$db->pingPatientOut($data);
return $state;
}


?>

