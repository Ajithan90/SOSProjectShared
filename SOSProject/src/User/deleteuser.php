<?php
include '../connection.php';

$pid=$_GET['pid'];
$sql="DELETE FROM users where uid=?";
$qry=$db->prepare($sql);
$qry->execute(array($pid));
echo "<script language='javascript' type='text/javascript'>alert('Successfully Deleted!')</script>";
echo "<script language='javascript' type='text/javascript'>window.open('user.php','_self')</script>";


?>