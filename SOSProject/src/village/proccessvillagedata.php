<?php
require("../controllers/CommonFunctions.php");

$form_data=$_POST;


$id=array_search("villageid",$form_data);
echo($id);
$Tid=$id;

$tablename ="village";
$Where ='villageid ='."'".$id."'";


if (!(array_key_exists("villageid",$form_data))){
    
  $id=  GeneratID("villageid","$tablename","V");
  $form_data['villageid']=$id;
}

ProccessData($Tid,$tablename,$form_data,$Where);

echo "<script language='javascript' type='text/javascript'>window.open('Village.php','_self')</script>";



?>