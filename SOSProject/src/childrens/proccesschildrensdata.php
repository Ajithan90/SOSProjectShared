
<?php
require("../controllers/CommonFunctions.php");

$form_data=$_POST;


$id=$form_data['admissionno'];

$Tid=$id;

$tablename ="childrens";
$Where ='admissionno ='."'".$id."'";


ProccessData($Tid,$tablename,$form_data,$Where);

echo "<script language='javascript' type='text/javascript'>window.open('achivement.php','_self')</script>";



?>