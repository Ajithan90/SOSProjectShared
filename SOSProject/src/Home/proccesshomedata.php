<?php
require("../controllers/CommonFunctions.php");

$hname=$_POST['home_name'];
$phone=$_POST['phone'];
$vid=$_POST['vid'];
$id=$_POST['home_id'];
$email=$_POST['email'];
$Tid =$id;
$tablename ="home";
$Where ='homeid ='."'".$id."'";
$Action=$_POST['action'];


if ($id==null){
    
  $id=  GeneratID("homeid","$tablename","H");
    
}

$form_data=array(
    
    'homeid' => $id,
    'home' => $hname,
    'telephone' => $phone,
    'villlageid' => $vid,
    'email' => $email
);


ProccessData($Tid,$tablename,$form_data,$Where,$Action);



?>