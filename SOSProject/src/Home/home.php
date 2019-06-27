<html>
<head>
<?php 
session_start();

// Check, if username session is NOT set then this page will jump to login page
if ((!isset($_SESSION['user_id']) && (!isset($_SESSION['logd_in'])))) {
header('Location:../login.php');
}
?>

</head>
<body>
<?php 
include ('../controllers/SQLFunctions.php'); 

$result=GetData('home');//returns data in json format
 echo($result);
?>

<form method="post" name="frmvillage" action="proccessvillagedata.php">
    	
    
    <table>
    		<tr>
    			<td>Village ID:</td><td><input type = "text" name = "village_id"  ><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
     
         <tr>
    			<td>Village Name:</td><td><input type = "text" name = "village_name" required="required" ><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		
    		<tr>
    			<td>Address Line1: </td><td><input type = "text" name = "address_line1" required="required" /><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Address Line2: </td><td><input type = "text" name = "address_line2" /><br/></td>
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
    			<td>ZIP: </td><td><input type = "number" name = "zip" required="required" /><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Director Name: </td><td><input type = "text" name = "director_name" required="required" /><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Phone Number: </td><td><input type = "tel" name = "phone_number" required="required" /><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Email: </td><td><input type ="email"  name = "email"/><br/></td>
    		</tr>
    		<tr><td></td><td></td><td><input type="submit" value="Save" name = "Action"/></td></tr>
    	
    	</table>
    	 
    	
   </form>

	
</body>
</html>