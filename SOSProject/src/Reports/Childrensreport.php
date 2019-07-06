<!DOCTYPE html>
<?php
require_once("../controllers/connection.php");
$fdate=$_POST['fdate'];
$tdate=$_POST['tdate'];

?>

<html>
<head>
	<title></title>
<body>
<head>
<script type="text/javascript">
function prnt(){
	document.getElementById("divpanel").style.display='none';
	window.print();
}
function bak(){
	window.open('StudentTermReportMain.php','_self');
}
</script>
<link rel="stylesheet" type="text/css" href="../css/report.css" />
</head>

<body>

<div id="ban"><img src="../../images/sos.png" width="20%"/></div>
	<div id="addr">
    
	Date:<?php echo(date("Y-m-d")); ?>
    <div id="da">
    From :<?php echo($fdate); ?>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
    To :<?php echo($tdate); ?>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
    
    </div>
    </div>
<hr width="1000"/>
<h2 align="center"> Childerns Data Report</h2>
<div id="rep">
<?php




$result = mysqli_query($con,"SELECT * FROM childrens where dateofadmission between '".$fdate."' AND '".$tdate."' ");


echo "<table border='1' align='center' width='100%'>
<tr>
<th>Admissionno</th>
<th>Name</th>
<th>Dateofbirth</th>
<th>Gender</th>
<th>homeid</th>
<th>schoolid</th>
<th>contact</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
	 echo "<td>" . $row['admissionno'] . "</td>";
	 echo "<td>" . $row['name'] . "</td>";
	 echo "<td>" . $row['dateofbirth'] . "</td>";
	 echo "<td>" . $row['gender'] . "</td>";
	 echo "<td>" . $row['homeid'] . "</td>";
	 echo "<td>" . $row['schoolid'] . "</td>";
	 echo "<td>" . $row['contact'] . "</td>";
  echo "</tr>";
}

echo "</table>";

mysqli_close($con);
	?>
</div>
<div id="divpanel">
<input type="button" value="Print" onclick="prnt();" />&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" value="Back" onclick="bak();" />
</div>
<div id="foot">
<hr width="1000"/>
</div>
</body>
</html>
