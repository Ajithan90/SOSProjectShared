<?php
require("../controllers/CommonFunctions.php");

$form_data=$_POST;


$id=$form_data['receivedid'];

$Tid=$id;

$tablename ="receivedcatagory";
$Where ='receivedid ='."'".$id."'";


if (!(array_key_exists("receivedid",$form_data))){
    
    $id=  GeneratID("receivedid","$tablename","P");
    $form_data['receivedid']=$id;
}

ProccessData($Tid,$tablename,$form_data,$Where);

echo "<script language='javascript' type='text/javascript'>window.open('receivedcatagory.php','_self')</script>";



?>