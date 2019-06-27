<?php
require("../controllers/CommonFunctions.php");

$hname=$_POST['home_name'];
$mother=$_POST['mother'];
$vid=$_POST['vid'];
$id=$_POST['home_id'];

$Tid =$id;
$tablename ="home";
$Where ='Village_ID ='."'".$id."'";
$Action="";
if ($id==null){
    
  $id=  GeneratID("Home_ID","$tablename","H");
    
}

$form_data=array(
    
    'Home_ID' => $id,
    'Name' => $hname,
    'MotherInCharge' => $mother,
    'Village_ID' => $vid,
);


ProccessData($Tid,$tablename,$form_data,$Where,$Action);



?>