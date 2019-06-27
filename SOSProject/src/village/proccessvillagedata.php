<?php
include ('../controllers/SQLFunctions.php');
$vname=$_POST['village_name'];
$adl1=$_POST['address_line1'];
$adl2=$_POST['address_line2'];
$city=$_POST['city'];
$zip=$_POST['zip'];
$dname=$_POST['director_name'];
$pnum=$_POST['phone_number'];
$email=$_POST['email'];
$Action="";

$id=$_POST['village_id'];

$Tid =$id;
$tablename ="villages";
if ($id==null){
    require("../controllers/CommonFunctions.php");
    
    
  $id=  GeneratID("Village_ID","$tablename","V");
    
}



$form_data=array(
    
    'Village_ID' => $id,
    'Village' => $vname,
    'Address_Line1' => $adl1,
    'Address_Line2' => $adl2,
    'City' => $city,
    'ZIP' => $zip,
    'Director_Name' => $dname,
    'Telephone_NO' => $pnum,
    'Email_ID' => $email
);

if($Tid==null){
    
       
    InsertData($tablename, $form_data);
    echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
}
else if($Tid!=null && $Action=="Update") {
    dbRowUpdate($tablename, $form_data, 'Village_ID ='."'".$id."'");
    echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
}
else{
    dbRowDelete($tablename, 'Village_ID ='."'".$id."'");
    echo "<script language='javascript' type='text/javascript'>alert('Successfully Deleted!')</script>";
    
}


//echo "<script language='javascript' type='text/javascript'>window.open('Village.php','_self')</script>";

?>