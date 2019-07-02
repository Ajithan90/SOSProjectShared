<?php
require("../controllers/CommonFunctions.php");

$agecatagory=$_POST['agecatagory'];
$Action=$_POST['action'];
$id=$_POST['ageid'];
$Tid =$id;
$tablename ="agecatagory";
$Where ='ageid ='."'".$id."'";

if ($id==null){
    
  $id=  GeneratID("ageid","$tablename","AGCAT");
    
}

$form_data=array(
    
    'ageid' => $id,
    'agecatagory' => $agecatagory
   
);


ProccessData($Tid,$tablename,$form_data,$Where,$Action);



?>