<?php

function singup(array $request)
{
 require_once 'Model/DbConnection.php';
$db= new  DatabaseConnection();
$status = $db->signupDB($request);
return $status;
    
}
function login(array $request)
{

require_once 'Model/DbConnection.php';
$db= new  DatabaseConnection();
$status = $db->loginDB($request);
return $status;
    
    
}

?>