<?php
require("../controllers/CommonFunctions.php");

$form_data=$_POST;


$id=$form_data['catagoryid'];

$Tid=$id;

$tablename ="catagorylevel";
$Where ='catagoryid ='."'".$id."'";


if (!(array_key_exists("catagoryid",$form_data))){
    
    $id=  GeneratID("catagoryid","$tablename","CAT");
    $form_data['catagoryid']=$id;
}

ProccessData($Tid,$tablename,$form_data,$Where);

echo "<script language='javascript' type='text/javascript'>window.open('catagorylevel.php','_self')</script>";



?>