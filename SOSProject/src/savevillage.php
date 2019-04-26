<?php
include 'connection.php';
$vname=$_POST['village_name'];
$adl1=$_POST['address_line1'];
$adl2=$_POST['address_line2'];
$city=$_POST['city'];
$zip=$_POST['zip'];
$dname=$_POST['director_name'];
$pnum=$_POST['phone_number'];
$email=$_POST['email'];
$vid=rand();


$sql="INSERT INTO villages(Village_ID,Village,Address_Line1,Address_Line2,City,ZIP,Director_Name,Telephone_NO,Email_ID) 
VALUES('$vid','$vname','$adl1','$adl2','$city','$zip','$dname','$pnum','$email')";
mysqli_query($con,$sql);

echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
echo "<script language='javascript' type='text/javascript'>window.open('Village.php','_self')</script>";
?>