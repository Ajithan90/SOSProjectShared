
<?php
require("../controllers/CommonFunctions.php");

$form_data=$_POST;


$id=$form_data['admissionno'];

$Tid=$id;

$tablename ="specialreport";
$Where ='admissionno ='."'".$id."'";


ProccessData($Tid,$tablename,$form_data,$Where);

echo "<script language='javascript' type='text/javascript'>window.open('specialreport.php','_self')</script>";



?>