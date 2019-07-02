<?php
require("../controllers/CommonFunctions.php");

$form_data=$_POST;


$id=$form_data['countryid'];

$Tid=$id;

$tablename ="country";
$Where ='countryid ='."'".$id."'";


if (!(array_key_exists("countryid",$form_data))){
    
    $id=  GeneratID("countryid","$tablename","CON");
    $form_data['countryid']=$id;
}

ProccessData($Tid,$tablename,$form_data,$Where);

echo "<script language='javascript' type='text/javascript'>window.open('country.php','_self')</script>";



?>