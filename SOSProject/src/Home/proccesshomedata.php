<?php
require("../controllers/CommonFunctions.php");

$form_data=$_POST;


$id=$form_data['homeid'];

$Tid=$id;

$tablename ="home";
$Where ='homeid ='."'".$id."'";


if (!(array_key_exists("homeid",$form_data))){
    
    $id=  GeneratID("homeid","$tablename","H");
    $form_data['homeid']=$id;
}

ProccessData($Tid,$tablename,$form_data,$Where);

echo "<script language='javascript' type='text/javascript'>window.open('home.php','_self')</script>";



?>