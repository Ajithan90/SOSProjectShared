<?php
require("../controllers/CommonFunctions.php");

$form_data=$_POST;


$id=$form_data['orphanid'];

$Tid=$id;

$tablename ="orphen";
$Where ='orphanid ='."'".$id."'";


if (!(array_key_exists("orphanid",$form_data))){
    
  $id=  GeneratID("orphanid","$tablename","OR");
  $form_data['orphanid']=$id;
}

ProccessData($Tid,$tablename,$form_data,$Where);

echo "<script language='javascript' type='text/javascript'>window.open('orphen.php','_self')</script>";



?>