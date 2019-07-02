<html>
<head>
<?php 
session_start();

 //Check, if username session is NOT set then this page will jump to login page
if ((!isset($_SESSION['user_id']) && (!isset($_SESSION['logd_in'])))) {
header('Location:../login.php');
}
?>

</head>
<body>
<?php 
include ('../controllers/SQLFunctions.php'); 

$result=GetData('village');//returns data in json format
 echo($result);
?>

<form method="post" name="frmvillage" action="proccessvillagedata.php">
    	
    	<h3 align="center"> ADD New Village </h3>
    <table>
     
         <tr>
    			<td>Village Name:</td><td><input type = "text" name = "villagename" required="required" ><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		
    		<tr>
    			<td>Address Line1: </td><td><input type = "text" name = "address1" required="required" /><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Address Line2: </td><td><input type = "text" name = "address2" /><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>City: </td><td><input type = "text" name = "city" required="required" /><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>ZIP: </td><td><input type = "number" name = "zipcode" required="required" /><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Director Name: </td><td><input type = "text" name = "districtid" required="required" /><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Phone Number: </td><td><input type = "tel" name = "telephone" required="required" /><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Email: </td><td><input type ="email"  name = "email"/><br/></td>
    		</tr>
    		<tr>
    			<td>web: </td><td><input type ="email"  name = "web"/><br/></td>
    		</tr>
    		
    		<tr><td></td><td></td><td><input type="submit" class="myButton" value="Save"/></td></tr>
    	
    	</table>
    	 
    	
    
    
    	 
</form>

	
</body>
</html>