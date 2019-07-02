<?php
require("../controllers/CommonFunctions.php");

$class=$_POST['class'];
$Action=$_POST['action'];
$id=$_POST['classid'];
$Tid =$id;
$tablename ="agecatagory";
$Where ='classid ='."'".$id."'";

if ($id==null){
    
  $id=  GeneratID("classid","$tablename","CLS");
    
}

$form_data=array(
    
    'classid' => $id,
    'class' => $class
   
);


ProccessData($Tid,$tablename,$form_data,$Where,$Action);



?>