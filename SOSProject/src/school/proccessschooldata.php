<?php
require("../controllers/CommonFunctions.php");
$form_data=$_POST;
$id=$form_data['schoolid'];


$Tid=$id;
$tablename ="school";

$Where ='schoolid ='."'".$id."'";

if (!(array_key_exists("schoolid",$form_data))){
    
    $id=  GeneratID("schoolid","$tablename","SCL");
    $form_data['schoolid']=$id;
}
ProccessData($Tid,$tablename,$form_data,$Where);
echo "<script language='javascript' type='text/javascript'>window.open('school.php','_self')</script>";
?>