<?php
require("../controllers/CommonFunctions.php");

$country=$_POST['cocountryuntry'];
$Action=$_POST['action'];
$id=$_POST['countryid'];
$Tid =$id;
$tablename ="country";
$Where ='countryid ='."'".$id."'";

if ($id==null){
    
  $id=  GeneratID("countryid","$tablename","CN");
    
}

$form_data=array(
    
    'countryid' => $id,
    'country' => $country
   
);


ProccessData($Tid,$tablename,$form_data,$Where,$Action);



?>