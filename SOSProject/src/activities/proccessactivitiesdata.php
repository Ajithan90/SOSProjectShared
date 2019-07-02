<?php
require("../controllers/CommonFunctions.php");

$vname=$_POST['villagename'];
$adl1=$_POST['address1'];
$adl2=$_POST['address2'];
$city=$_POST['city'];
$zip=$_POST['zipcode'];
$did=$_POST['districtid'];
$pnum=$_POST['telephone'];
$email=$_POST['email'];
$web=$_POST['web'];
$Action=$_POST['action'];
$id=$_POST['villageid'];
$Tid =$id;
$tablename ="village";
$Where ='villageid ='."'".$id."'";

if ($id==null){
    
  $id=  GeneratID("villageid","$tablename","V");
    
}

$form_data=array(
    
    'villageid' => $id,
    'villagename' => $vname,
    'address1' => $adl1,
    'address2' => $adl2,
    'city' => $city,
    'zipcode' => $zip,
    'districtid' => $did,
    'telephone' => $pnum,
    'email' => $email,
    'web' => $web
);


ProccessData($Tid,$tablename,$form_data,$Where,$Action);



?>