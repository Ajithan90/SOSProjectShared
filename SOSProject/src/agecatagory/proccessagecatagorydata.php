<?php
require("../controllers/CommonFunctions.php");

$form_data=$_POST;


$id=$form_data['ageid'];

$Tid=$id;

$tablename ="agecatagory";
$Where ='ageid ='."'".$id."'";


if (!(array_key_exists("ageid",$form_data))){
    
    $id=  GeneratID("ageid","$tablename","AGCAT");
    $form_data['ageid']=$id;
}

ProccessData($Tid,$tablename,$form_data,$Where);

echo "<script language='javascript' type='text/javascript'>window.open('agecatagory.php','_self')</script>";



?>