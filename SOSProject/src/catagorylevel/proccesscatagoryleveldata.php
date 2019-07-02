<?php
require("../controllers/CommonFunctions.php");

$catagory=$_POST['catagory'];
$Action=$_POST['action'];
$id=$_POST['catagoryid'];
$Tid =$id;
$tablename ="agecatagory";
$Where ='catagoryid ='."'".$id."'";

if ($id==null){
    
  $id=  GeneratID("catagoryid","$tablename","CAT");
    
}

$form_data=array(
    
    'catagoryid' => $id,
    'agecatagory' => $catagory
   
);


ProccessData($Tid,$tablename,$form_data,$Where,$Action);



?>