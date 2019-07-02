<?php
require("../controllers/CommonFunctions.php");

$form_data=$_POST;


$id=$form_data['religonid'];

$Tid=$id;

$tablename ="religon";
$Where ='religonid ='."'".$id."'";


if (!(array_key_exists("religonid",$form_data))){
    
    $id=  GeneratID("religonid","$tablename","REL");
    $form_data['religonid']=$id;
}

ProccessData($Tid,$tablename,$form_data,$Where);

echo "<script language='javascript' type='text/javascript'>window.open('religon.php','_self')</script>";



?>