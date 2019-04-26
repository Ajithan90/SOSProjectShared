<?php
$username = "root";
$password = "";
$hostname = "127.0.0.1";
$db_name="sos";

//connection to the database
$con=mysqli_connect("$hostname", "$username", "$password","$db_name") or die("cannot connect");

?>