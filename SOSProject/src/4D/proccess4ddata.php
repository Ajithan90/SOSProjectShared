<?php
require("../controllers/CommonFunctions.php");


$disc=$_POST['discovery'];
$dream=$_POST['dream'];
$design=$_POST['design'];
$destiny=$_POST['destiny'];
$Action=$_POST['action'];
$id=$_POST['admissionno'];
$Tid =$id;
$tablename ="4d";
$Where ='admissionno ='."'".$id."'";

if ($id==null){
    
  $id=  GeneratID("admissionno","$tablename","AD");
    
}

$form_data=array(
    
    'admissionno' => $id,
    'discovery' => $disc,
    'dream' => $dream,
    'design' => $design,
    'destiny' => $destiny
    
);


ProccessData($Tid,$tablename,$form_data,$Where,$Action);



?>