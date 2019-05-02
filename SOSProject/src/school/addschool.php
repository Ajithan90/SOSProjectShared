<?php require_once ("../connection.php");
$ppid="";
$sname="";
$adl1="";
$adl2="";
$city="";
$zip="";
$dname="";
$pnum="";
$sid="";

if(isset($_GET['ppid'])){
    $ppid = $_GET['ppid'];
    $sqlLoader="Select from school where School_ID=?";
    $resLoader=$db->prepare($sqlLoader);
    $resLoader->execute(array($ppid));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
.myButton {
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf));
	background:-moz-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	background:-webkit-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	background:-o-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	background:-ms-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	background:linear-gradient(to bottom, #ededed 5%, #dfdfdf 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf',GradientType=0);
	background-color:#ededed;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#777777;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffffff;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed));
	background:-moz-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	background:-webkit-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	background:-o-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	background:-ms-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	background:linear-gradient(to bottom, #dfdfdf 5%, #ededed 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed',GradientType=0);
	background-color:#dfdfdf;
}
.myButton:active {
	position:relative;
	top:1px;
}
</style>
</head>
<?php


$sqladd="Select from school where School_ID=?";
	$resadd=$db->prepare($sqladd);
	$resadd->execute(array($ppid));
		while($rowadd = $resadd->fetch(PDO::FETCH_ASSOC)){
				
				$vname=$rowadd['School_name'];
				$adl1=$rowadd['Address_Line1'];
				$adl2=$rowadd['Address_Line2'];
				$city=$rowadd['City'];
				$zip=$rowadd['ZIP'];
				$dname=$rowadd['District'];
				$pnum=$rowadd['Telephone_NO'];
				
				
}
	

	
?>
<body>
    <form method="post" name="frmvillage" action="saveschool.php">
    	<h3 align="center"> ADD New School </h3>
    <input type="hidden" name="pid" value="<?php echo $ppid; ?>"/>
    <table>
     
         <tr>
    			<td>School Name:</td><td><input type = "text" name = "school_name" required="required" value="<?php echo $sname; ?>" ><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		
    		<tr>
    			<td>Address Line1: </td><td><input type = "text" name = "address_line1" required="required" value="<?php echo $adl1; ?>"/><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Address Line2: </td><td><input type = "text" name = "address_line2" value="<?php echo $adl2; ?>"/><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>City: </td><td><input type = "text" name = "city" required="required" value="<?php echo $city; ?>"/><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>ZIP: </td><td><input type = "number" name = "zip" required="required" value="<?php echo $zip; ?>"/><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>District: </td><td><input type = "text" name = "district" required="required" value="<?php echo $dname; ?>"/><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Phone Number: </td><td><input type = "tel" name = "phone_number" required="required" value="<?php echo $pnum; ?>"/><br/></td>
    		</tr>
    		<tr>
    		
    		
    	
    	</table>
    	 <div align="right" id="subbtn">
    	 <input type ="submit"/>
    	 
    	 </div>
    	
    	</form>
</body>
</html>
