<?php
require("../controllers/CommonFunctions.php");

$agecatagory=$_POST['compertition'];
$Action=$_POST['action'];
$id=$_POST['compertitionid'];
$Tid =$id;
$tablename ="compertitioncatagory";
$Where ='compertitionid ='."'".$id."'";

if ($id==null){
    
  $id=  GeneratID("compertitionid","$tablename","COCAT");
    
}

$form_data=array(
    
    'compertitionid' => $id,
    'compertition' => $agecatagory
   
);


ProccessData($Tid,$tablename,$form_data,$Where,$Action);



?>