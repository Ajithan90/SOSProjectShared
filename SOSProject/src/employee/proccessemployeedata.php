<?php
require("../controllers/CommonFunctions.php");

$form_data=$_POST;


$id=$form_data['employeeid'];

$Tid=$id;

$tablename ="employee";
$Where ='employeeid ='."'".$id."'";


if (!(array_key_exists("employeeid",$form_data))){
    
    $id=  GeneratID("employeeid","$tablename","EMP");
    $form_data['employeeid']=$id;
}

ProccessData($Tid,$tablename,$form_data,$Where);

echo "<script language='javascript' type='text/javascript'>window.open('employee.php','_self')</script>";



?>