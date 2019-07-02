
<?php
require("../controllers/CommonFunctions.php");

$form_data=$_POST;

$form_data[password]=md5($form_data[password]);
$form_data[confirm]=md5($form_data[confirm]);


$id=$form_data['employeeno'];

$Tid=$id;

$tablename ="user";
$Where ='employeeno ='."'".$id."'";


ProccessData($Tid,$tablename,$form_data,$Where);


echo "<script language='javascript' type='text/javascript'>window.open('user.php','_self')</script>";



?>
