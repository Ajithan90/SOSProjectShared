<!DOCTYPE html>
<?php
require_once("../controllers/connection.php");
$addmis=$_POST['admissionno'];
$year=$_POST['year'];
$term=$_POST['term'];
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

<div id="ban" ><img src="../../images/sos.png" width="20%"/></div>
	<div id="addr">
	
    
	Date:<?php echo(date("Y-m-d")); ?>
    <div id="da">
    Addmision NO :<?php echo($addmis); ?>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
    Year :<?php echo($year); ?>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
    Term :<?php echo($term); ?>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    </div>
<hr width="1000"/>
<h2 align="center"> Student Term Report</h2>
<div id="rep">
<?php




$result = mysqli_query($con,"SELECT * FROM educationmarks where admissionno ='".$addmis."' AND year ='".$year."' AND term ='".$term."'");


echo "<table border='1' align='center' width='100%'>
<tr>
<th>subjectid</th>
<th>marks</th>
<th>catagory</th>

</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
	 echo "<td>" . $row['subjectid'] . "</td>";
	 echo "<td>" . $row['marks'] . "</td>";
	 echo "<td>" . $row['catagory'] . "</td>";
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
