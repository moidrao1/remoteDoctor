<?php
//Database class to connect to database and fire queries
class DatabaseConnection {

public $_db="";
public $_client="";

 
function DatabaseConnection()
{
     try{
            $this->_client=new MongoClient("mongodb://heroku_nbqgfv95:snr7o8sorlp0g28pbdjdfr2i1d@ds113636.mlab.com:13636/heroku_nbqgfv95");
        	$this->_db= $this->_client->selectDB('heroku_nbqgfv95');
	          
	      }  catch (PDOException $e){
        exit;
	      }
}

	
	function loginDB(array $request)
	{
	 
  try{
  $message="";
  $userObj;
     $col = $this->_db->selectCollection('Users');
		 
	
		 //  Checking if User already Exists
        $criteria = array(
        "email" => $request['username'] ,
        "password" => $request['password']);
         $doc = $col->findOne($criteria);

      if(empty($doc)) {
       $doc['message']='FAIL';
  
      return $doc;
  
      } else {
 
 $doc['message']='SUCCESS';

if($doc['userType'] == 'patient')
{
   $col2 = $this->_db->selectCollection('Patient');
		 $col3 = $this->_db->selectCollection('MedicalHistory');
		 
        $criteria = array(
        "username" => $doc['username']);
        
         $userObj = $col2->findOne($criteria);
         $userMedical = $col3->findOne($criteria);
         
  if(empty($userObj)) {
      $userObj['message']='NO USER EXISTS IN PATIENT';
      } else {
       $userObj['message']='SUCCESS';
      
       if(!empty($userMedical))
       {
         $userObj['MedicalHistory']=$userMedical;
       }
       
       
      }
}
if($doc['userType'] == 'doctor')
{
 
 $col2 = $this->_db->selectCollection('Doctor');
		 
        $criteria = array(
        "username" => $doc['username']);
        
         $userObj = $col2->findOne($criteria);
  if(empty($userObj)) {
      $userObj['message']='NO USER EXISTS IN Doctor';
      } else {
       $userObj['message']='SUCCESS';
      }
}
    
    
	
	     }   

	}
	
	 catch (Exception $ex)
	{
	 $message='Some Error Occurred';
	 return $message;
	}
	
return $userObj;
	}
	function signupDB(array $request)
	{
		$message='';
		try {
		 $col = $this->_db->selectCollection('Users');
		 
		 
		 //  Checking if User already Exists
        $criteria = array(
        "email" => $request['emailID'] );
         $doc = $col->findOne($criteria);

      if(!empty($doc)) {
      	$message='User already exists with this email Address';
      } else {
      	
  // User not exists, Adding new User
  
   $criteria2 = array(
        "username" => $request['userName'] );
         $doc2 = $col->findOne($criteria2);
if(!empty($doc2))
{
		$message='Username already taken ,Username should be unique ';
}
  else{
 
         $document = array( 
         "username" => $request['userName'], 
         "password" => $request['password'], 
         "email" => $request['emailID'] , 
         "userType" =>$request['userType']
   );
   $col->insert($document);
   
   if($request['userType'] =="patient")
{
  $col = $this->_db->selectCollection('Patient');
  $Medcol = $this->_db->selectCollection('MedicalHistory');
  $Percol = $this->_db->selectCollection('Prescription');

 
   $document = array( 
         "username" => $request['userName'], 
         "firstName" => $request['firstName'], 
         "lastName" => $request['lastName'], 
         "phoneNumber" => $request['phoneNumber'],
         "age" => $request['age'],
         "gender" => $request['gender'],
         "userType" =>$request['userType']
   );
   $MedicalHistory = array(
    "username"=> $request['userName']);
    
  $col->insert($document);
  $Percol->insert($MedicalHistory);
  $Medcol->insert($MedicalHistory);

}   
   
   if($request['userType'] =="doctor")
{
 $col = $this->_db->selectCollection('Doctor');	
   $document = array( 
         "username" => $request['userName'], 
         "firstName" => $request['firstName'], 
         "lastName" => $request['lastName'], 
         "phoneNumber" => $request['phoneNumber'],
         "age" => $request['age'],
         "gender" => $request['gender'],
         "userType" =>$request['userType']
   );
   $col->insert($document);
 
}   
   
   	$message='SUCCESS';
 	
  }
  
  

}
	
return $message;
 }catch(Exception $e)
{
	
	return 0;
}
}

function pingPatient(array $data){
 
date_default_timezone_set("Asia/Karachi");
 

	$col = $this->_db->selectCollection('Patient');
      $criteria = array(
        "username" => $data['username'] );
		 $newdata = array('$set' => array(
		         "active" => "true",
		          "lastActive"=>date("h:i:sa") ));
 $doc=$col->update($criteria, $newdata);
 
}


function pingPatientOut(array $data){
 $col = $this->_db->selectCollection('Patient');
      $criteria = array(
        "username" => $data['username'] );
		 $newdata = array('$set' => array(
		         "active" => "false"
		         ));
 $doc=$col->update($criteria, $newdata);
 
}

function reloadProfile(){

$obj=$_SESSION ['user'];
		$message='';
		try {
		 $col = $this->_db->selectCollection('Patient');
		 $col2 = $this->_db->selectCollection('MedicalHistory');
		     $criteria = array(
        "username" => $obj['username'] );
       
$doc=$col->findOne($criteria);

$doc2=$col2->findOne($criteria);
		 if(empty($doc))
		 {
$doc['message']='FAIL';
		 
		 }
else {

$doc['message']='SUCCESS';
if(!empty($doc2))
{
$doc['MedicalHistory']=$doc2;
 
}
}
return $doc;
}
catch(Exception $ex)
{
$doc['message']='FAIL';
 
return $doc;
 
}
 
}

 function updateMedicalHistory(array $request){
 
$obj=$_SESSION ['user'];
		try {
		 $col = $this->_db->selectCollection('MedicalHistory');
		 
		 
       $criteria = array(
        "username" => $obj['username'] );
   

		 $newdata = array('$set' => array(
		       "PatientName" => $request['patID'], 
         "Date" => $request['lastmodifieddate'], 
         "Weight" => $request['patweight'],
		       "Height" => $request['patheight'],
	        "MedicalProblems" => $request['problems'], 
         "Medication" => $request['allergicalmedications'],
         "AllergyExists" => $request['allergy'],
         "Diseases" => $request['Checkproblems']
       ));
$doc=$col->update($criteria, $newdata);
 
		 if(empty($doc))
		 {
		  $doc['message']='FAIL';
		 }
		 else{
		 
		 $doc['message']='SUCCESS';
		  
		  
		 }
		return $doc; 
		}
catch(Exception $ex)
{
 $doc['message']='FAIL';
		 return $doc;
}
 
 
}

function updateProfile(array $request){
 
 
$obj=$_SESSION ['user'];
		$message='';
		try {
		 $col = $this->_db->selectCollection('Patient');
		 
		 
       $criteria = array(
        "username" => $obj['username'] );
       

		 $newdata = array('$set' => array(
		       "firstName" => $request['firstName'], 
         "lastName" => $request['lastName'], 
         "phoneNumber" => $request['phoneNumber'],
         "age" => $request['age'],
         "gender" => $request['gender']
       ));
$doc=$col->update($criteria, $newdata);
 
		 if(empty($doc))
		 {
		  $doc['message']='FAIL';
		 }
		 else{
		 
		 $doc['message']='SUCCESS';
		  
		  
		 }
		return $doc; 
		}
catch(Exception $ex)
{
 $doc['message']='FAIL';
		 return $doc;
}
 
 
}

}
?>