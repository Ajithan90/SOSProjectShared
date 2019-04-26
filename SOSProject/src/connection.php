<?php
$username = "root";
$password = "";
$hostname = "localhost";
$db_name="sos";

//connection to the database
$con=mysqli_connect("$hostname", "$username", "$password","$db_name") or die("cannot connect")

?>