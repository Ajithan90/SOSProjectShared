<?php 
session_start();

// Check, if username session is NOT set then this page will jump to login page
if ((!isset($_SESSION['user_id']) && (!isset($_SESSION['logd_in'])))) {
    header('Location:../login.php');
}
?>
<?php require_once ("../connection.php");
$ppid="";
$hname="";
$vid="";
$mother="";
$hid="";

if(isset($_GET['ppid'])){
    $ppid = $_GET['ppid'];
    $sqlLoader="Select from home where Home_ID=?";
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
<body>
    <form method="post" name="frmvillage" action="savehome.php">
    	<h3 align="center"> ADD New Home </h3>
    <input type="hidden" name="pid" value="<?php echo $ppid; ?>"/>
    <table>
     
         <tr>
    			<td>Home Name:</td><td><input type = "text" name = "home_name" required="required"><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		
    		<tr>
    			<td>Mother In Charge </td><td><input type = "text" name = "mother" required="required" /><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td> Village ID</td>
    			<td>
    			
                 <select name="vid" id="">
	<option value="">--Select here--</option>
<?php
require_once ("../connection.php");
$sql = "SELECT Village_ID FROM villages;";
$res=$db->prepare($sql);
$res->execute();

while($rec = $res->fetch(PDO::FETCH_ASSOC)){
    echo("<option value='".$rec["Village_ID"]."'selected>".$rec["Village_ID"]."</option>");
}
	
?>
</select>
    			
    			
               </td>
  </tr>
               <tr><td></td><td></td><td><input type="submit" class="myButton" value="Save"/></td></tr>
    	
    	</table>
    	
    	
    	</form>
</body>
</html>
