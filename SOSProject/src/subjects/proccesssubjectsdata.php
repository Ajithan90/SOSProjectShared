<?php
require("../controllers/CommonFunctions.php");

$form_data=$_POST;


$id=$form_data['subjectid'];

$Tid=$id;

$tablename ="subjects";
$Where ='subjectid ='."'".$id."'";


if (!(array_key_exists("subjectid",$form_data))){
    
    $id=  GeneratID("subjectid","$tablename","SUB");
    $form_data['subjectid']=$id;
}

ProccessData($Tid,$tablename,$form_data,$Where);

echo "<script language='javascript' type='text/javascript'>window.open('subjects.php','_self')</script>";



?>