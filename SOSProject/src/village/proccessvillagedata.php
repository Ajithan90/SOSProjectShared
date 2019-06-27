<?php
include ('../SQLFunctions.php');
$vname=$_POST['village_name'];
$adl1=$_POST['address_line1'];
$adl2=$_POST['address_line2'];
$city=$_POST['city'];
$zip=$_POST['zip'];
$dname=$_POST['director_name'];
$pnum=$_POST['phone_number'];
$email=$_POST['email'];

$id=$_POST['pid'];
$tablename ="villages";

$form_data=array(
    
    'Village_ID' => $Tid,
    'Village' => $vname,
    'Address_Line1' => $adl1,
    'Address_Line2' => $adl2,
    'City' => $city,
    'ZIP' => $zip,
    'Director_Name' => $dname,
    'Telephone_NO' => $pnum,
    'Email_ID' => $email
);

if($id==null){
    
    include ('../CommonFunctions.php');
    
  
    
    
    
    
    GeneratID("Village_ID","$tablename","V");
        
       
    InsertData($tablename, $form_data);
}
else {
    dbRowUpdate($tablename, $form_data, 'Village_ID ='.$Tid);
}


echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
echo "<script language='javascript' type='text/javascript'>window.open('Village.php','_self')</script>";

?>