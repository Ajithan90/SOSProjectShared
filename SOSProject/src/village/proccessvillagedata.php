<?php
require("../controllers/CommonFunctions.php");
$form_data=$_POST;

$id="";
$Tid="";
$Where="";
if($form_data['Action']!="add"){

  $id=$form_data['villageid'];
  $Where ='villageid ='."'".$id."'";
}

//echo $Where.''.$form_data['Action'];

=======
$id=$form_data['villageid'];



if (!(array_key_exists("villageid",$form_data))){
    
    $id=  GeneratID("villageid","$tablename","V");
    $form_data['villageid']=$id;
}
ProccessData($Tid,$tablename,$form_data,$Where);
echo "<script language='javascript' type='text/javascript'>window.open('Village.php','_self')</script>";
?>