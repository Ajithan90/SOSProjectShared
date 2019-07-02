
<?php
require("../controllers/CommonFunctions.php");

$form_data=$_POST;


$id=$form_data['villageid'];
$eid=$form_data['employeeid'];

$Tid=$id;

$tablename ="director";
$Where ='villageid ='."'".$id."'". 'AND employeeid =' ."'".$eid."'";


ProccessData($Tid,$tablename,$form_data,$Where);

echo "<script language='javascript' type='text/javascript'>window.open('director.php','_self')</script>";



?>