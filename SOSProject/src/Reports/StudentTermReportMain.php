<html>

<head></head>


<body>
<?php 
require_once("../controllers/connection.php");
?>
<div id="termreport">
<h1>Student Term Report</h1>
<form action="Studenttermreport.php" method="post" >

<table>

<tr>

        <td>Addmision NO:</td><td><select name='admissionno' required="required">
	<option value="">--Select here--</option>
<?php

	$sql = "SELECT DISTINCT admissionno FROM educationmarks;";
	$result = mysqli_query($con,$sql);
	$nor = $result->num_rows;
	if($nor>0){
		while($rec = mysqli_fetch_assoc($result)){
			echo("<option value='".$rec["admissionno"]."'>".$rec["admissionno"]."</option>");
		}
	}
	
?>
</select></td>
<td>Year:</td>
<td>
<select name='year' required="required">
	<option value="">--Select here--</option>
<?php
	$sql = "SELECT DISTINCT year FROM educationmarks;";
	$result = mysqli_query($con,$sql);
	$nor = $result->num_rows;
	if($nor>0){
		while($rec = mysqli_fetch_assoc($result)){
			echo("<option value='".$rec["year"]."'>".$rec["year"]."</option>");
		}
	}
	
?>
</select>
</td>

<td>Term:</td><td>
        
        <select name='term' required="required">
	<option value="">--Select here--</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
</select>
        
        
        
        </td>
        <td></td><td></td><td><input type="submit"  value="Genarate"/></td>
</tr>



</table>






</form>

</div>
<div id="termreport">
<h1> Childrens Report</h1>
<form action="Childrensreport.php" method="post" >

<table>

<tr>

        <td> Registration Date From:</td><td><input type="date" name="fdate"></td>
        
        <td> Registration Date To:</td><td><input type="date" name="tdate"></td>

       
        <td></td><td></td><td><input type="submit"  value="Genarate"/></td>
</tr>



</table>






</form>

</div>

</body>







</html>