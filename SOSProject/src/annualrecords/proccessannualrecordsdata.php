<?php
require("../controllers/CommonFunctions.php");

$year=$_POST['year'];
$age=$_POST['age'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$grade=$_POST['grade'];

$Action=$_POST['action'];
$id=$_POST['admissiionno'];
$Tid =$id;
$tablename ="annualrecords";
$Where ='admissiionno ='."'".$id."'";

$form_data=array(
    
    'admissiionno' => $id,
    'year' => $year,
    'age' => $age,
    'height' => $height,
    'weight' => $weight,
    'grade' => $grade
);


ProccessData($Tid,$tablename,$form_data,$Where,$Action);



?>