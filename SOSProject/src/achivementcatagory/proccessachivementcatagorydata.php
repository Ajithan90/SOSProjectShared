<?php
require("../controllers/CommonFunctions.php");

$achivement=$_POST['achivement'];
$Action=$_POST['action'];
$id=$_POST['achivementid'];
$Tid =$id;
$tablename ="achivementcatagory";
$Where ='achivementid ='."'".$id."'";

if ($id==null){
    
  $id=  GeneratID("achivementid","$tablename","ACAT");
    
}

$form_data=array(
    
    'achivementid' => $id,
    'achivement' => $achivement,
    
);


ProccessData($Tid,$tablename,$form_data,$Where,$Action);



?>