<?php
require("../controllers/CommonFunctions.php");

$form_data=$_POST;


$id=$form_data['catagoryid'];

$Tid=$id;

$tablename ="eventcatagory";
$Where ='eventid ='."'".$id."'";


if (!(array_key_exists("eventid",$form_data))){
    
  $id=  GeneratID("eventid","$tablename","EV");
  $form_data['eventid']=$id;
}

ProccessData($Tid,$tablename,$form_data,$Where);

echo "<script language='javascript' type='text/javascript'>window.open('eventcatagory.php','_self')</script>";



?>