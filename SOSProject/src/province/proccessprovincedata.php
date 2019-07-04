<?php
require("../controllers/CommonFunctions.php");

$form_data=$_POST;


$id=$form_data['countryid'];

$Tid=$id;

$tablename ="province";
$Where ='provinceid ='."'".$id."'";


if (!(array_key_exists("provinceid",$form_data))){
    
    $id=  GeneratID("provinceid","$tablename","P");
    $form_data['provinceid']=$id;
}

ProccessData($Tid,$tablename,$form_data,$Where);

echo "<script language='javascript' type='text/javascript'>window.open('province.php','_self')</script>";



?>