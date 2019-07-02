<?php
require("../controllers/CommonFunctions.php");

$form_data=$_POST;


$id=$form_data['districtid'];

$Tid=$id;

$tablename ="district";
$Where ='districtid ='."'".$id."'";


if (!(array_key_exists("districtid",$form_data))){
    
    $id=  GeneratID("districtid","$tablename","D");
    $form_data['districtid']=$id;
}

ProccessData($Tid,$tablename,$form_data,$Where);

echo "<script language='javascript' type='text/javascript'>window.open('district.php','_self')</script>";



?>