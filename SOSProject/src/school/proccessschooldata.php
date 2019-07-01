<?php
require("../controllers/CommonFunctions.php");

$sname=$_POST['school'];
$adl1=$_POST['address1'];
$adl2=$_POST['address2'];
$city=$_POST['city'];
$did=$_POST['districtid'];
$pnum=$_POST['telephone'];
$email=$_POST['email'];
$Action=$_POST['action'];
$id=$_POST['schoolid'];
$Tid =$id;
$tablename ="school";
$Where ='schoolid ='."'".$id."'";

if ($id==null){
    
  $id=  GeneratID("schoolid","$tablename","S");
    
}

$form_data=array(
    
    'schoolid' => $id,
    'school' => $sname,
    'address1' => $adl1,
    'address2' => $adl2,
    'city' => $city,
    'districtid' => $did,
    'telephone' => $pnum,
    'email' => $email
);


ProccessData($Tid,$tablename,$form_data,$Where,$Action);



?>