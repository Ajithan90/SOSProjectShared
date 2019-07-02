<?php
require("../controllers/CommonFunctions.php");

$form_data=$_POST;


$id=$form_data['achivementid'];

$Tid=$id;

$tablename ="achivementcatagory";
$Where ='achivementid ='."'".$id."'";


if (!(array_key_exists("achivementid",$form_data))){
    
    $id=  GeneratID("achivementid","$tablename","ACH");
    $form_data['achivementid']=$id;
}

ProccessData($Tid,$tablename,$form_data,$Where);

echo "<script language='javascript' type='text/javascript'>window.open('Village.php','_self')</script>";



?>