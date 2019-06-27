<?php
require("../controllers/CommonFunctions.php");

$vname=$_POST['village_name'];
$adl1=$_POST['address_line1'];
$adl2=$_POST['address_line2'];
$city=$_POST['city'];
$zip=$_POST['zip'];
$dname=$_POST['director_name'];
$pnum=$_POST['phone_number'];
$email=$_POST['email'];
$Action="";
$id=$_POST['village_id'];
$Tid =$id;
$tablename ="villages";
$Where ='Village_ID ='."'".$id."'";

if ($id==null){
    
  $id=  GeneratID("Village_ID","$tablename","V");
    
}

$form_data=array(
    
    'Village_ID' => $id,
    'Village' => $vname,
    'Address_Line1' => $adl1,
    'Address_Line2' => $adl2,
    'City' => $city,
    'ZIP' => $zip,
    'Director_Name' => $dname,
    'Telephone_NO' => $pnum,
    'Email_ID' => $email
);


ProccessData($Tid,$tablename,$form_data,$Where,$Action);



?>