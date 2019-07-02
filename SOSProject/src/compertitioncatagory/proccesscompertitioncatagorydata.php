<?php
require("../controllers/CommonFunctions.php");

$form_data=$_POST;


$id=$form_data['compertitionid'];

$Tid=$id;

$tablename ="compertitioncatagory";
$Where ='compertitionid ='."'".$id."'";


if (!(array_key_exists("compertitionid",$form_data))){
    
    $id=  GeneratID("compertitionid","$tablename","COCAT");
    $form_data['compertitionid']=$id;
}

ProccessData($Tid,$tablename,$form_data,$Where);

echo "<script language='javascript' type='text/javascript'>window.open('compertitioncatagory.php','_self')</script>";



?>