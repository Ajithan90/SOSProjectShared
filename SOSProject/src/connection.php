<?php
$username = "root";
$password = "";
$hostname = "127.0.0.1";
$db_name="sos";

//connection to the database
$con=mysqli_connect("$hostname", "$username", "$password","$db_name") or die("cannot connect");
echo "Connected to MySQL<br>";

$result = mysqli_query($con,"SELECT * FROM villages");

//fetch tha data from the database
while ($row = mysqli_fetch_array($result)) {
    echo "ID:".$row{'Village_ID'}."<br>";
}
//close the connection
mysqli_close($con);

?>