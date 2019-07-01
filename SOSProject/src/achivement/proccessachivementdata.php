<?php
require("../controllers/CommonFunctions.php");

$receiveddate=$_POST['receiveddate'];
$eventid=$_POST['eventid'];
$achivementid=$_POST['achivementid'];
$catagoryidIndex=$_POST['catagoryidIndex'];
$comperttionid=$_POST['comperttionid'];
$ageid=$_POST['ageid'];
$receivedid=$_POST['receivedid'];
$points=$_POST['points'];
$Action=$_POST['action'];
$id=$_POST['admissionno'];
$Tid =$id;
$tablename ="achivement";
$Where ='admissionno ='."'".$id."'";


$form_data=array(
    
    'admissionno' => $id,
    'receiveddate' => $receiveddate,
    'eventid' => $eventid,
    'achivementid' => $achivementid,
    'catagoryidIndex' => $catagoryidIndex,
    'comperttionid' => $comperttionid,
    'ageid' => $ageid,
    'receivedid' => $receivedid,
    'points' => $points
    
);


ProccessData($Tid,$tablename,$form_data,$Where,$Action);



?>