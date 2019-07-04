<?php
require("../controllers/CommonFunctions.php");

$form_data=$_POST;


$id=$form_data['classid'];

$Tid=$id;

$tablename ="classcatagory";
$Where ='classid ='."'".$id."'";


if (!(array_key_exists("classid",$form_data))){
    
    $id=  GeneratID("classid","$tablename","CLS");
    $form_data['classid']=$id;
}

ProccessData($Tid,$tablename,$form_data,$Where);

echo "<script language='javascript' type='text/javascript'>window.open('classcatagory.php','_self')</script>";



?>