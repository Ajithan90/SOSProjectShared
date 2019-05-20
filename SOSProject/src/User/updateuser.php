
<?php 
session_start();

// Check, if username session is NOT set then this page will jump to login page
if ((!isset($_SESSION['user_id']) && (!isset($_SESSION['logd_in'])))) {
    header('Location:../login.php');
}
?>
<?php require_once ("../connection.php");
$ppid="";
$fname="";
$lname="";
$email="";
$user="";
$status="";

if(isset($_GET['ppid'])){
    $ppid = $_GET['ppid'];
    $sqlLoader="Select from users where uid=?";
    $resLoader=$db->prepare($sqlLoader);
    $resLoader->execute(array($ppid));
    
    
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script>
        function checkupdatePass()
        {
           
            if(document.getElementById('upassy').checked){
               document.getElementById("pass").style.visibility = 'visible';
               document.getElementById("cpass").style.visibility = 'visible';
               document.getElementById("passtxt").required="required";
               document.getElementById("cpasstxt").required="required";
               
            }
            else if(document.getElementById('upassn').checked){
                document.getElementById("pass").style.visibility = 'hidden';
                document.getElementById("cpass").style.visibility = 'hidden';
                document.getElementById("passtxt").required="";
                document.getElementById("cpasstxt").required="";
            
            }
        }
        function ValidaePass(){
                if(document.getElementById('upassy').checked){
					
                	var pass=document.getElementById("passtxt").value;
                    var cpass=document.getElementById("cpasstxt").value;
                    
                    if(pass!=cpass){

                    	var x="Invalid Password Combination";
                    	document.getElementById("error").innerHTML = x;
                    	document.getElementById("passtxt").style.borderColor="red";
                        document.getElementById("cpasstxt").style.borderColor="red";
                        document.getElementById("passtxt").style.backgroundColor="#ffcccc";
                        document.getElementById("cpasstxt").style.backgroundColor="#ffcccc";
                    	return false;

                    	

                     }

                }


            }
    </script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<title></title>
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


$sqladd="Select * from users where uid=?";
$resadd=$db->prepare($sqladd);
$resadd->execute(array($ppid));
while($rowadd = $resadd->fetch(PDO::FETCH_ASSOC)){
    $fname=$rowadd['First_Name'];
    $lname=$rowadd['Last_Name'];
    $email=$rowadd['Email_ID'];
    $user=$rowadd['username'];
    $pass=$rowadd['password'];
    $status=$rowadd['Status'];
    
    
				
}
	
?>

<body>
<h1 align="center">Update User Details</h1>
    <form onsubmit="return ValidaePass();" method="post" name="frmvillagee" action="saveuser.php">
    <input type="hidden" name="pid" value="<?php echo $ppid; ?>"/>
    <table>
    		<tr>
    			<td>First Name:</td><td><input type = "text" name = "f_name" required="required" value="<?php echo $fname; ?>"/><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
        
    			<td>Last Name:</td><td><input type = "text" name = "l_name" required="required" value="<?php echo $lname; ?>" /><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		
    		<tr>
    			<td>Email: </td><td><input type = "email" name = "email" required="required" value="<?php echo $email; ?>"/><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>User Name: </td><td><input type = "text" name = "u_name" required="required" value="<?php echo $user; ?>"/><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Status</td><td>
    			<select name = "status" required="required"  value='<?php echo("<option value='".$status."'selected='selected'>".$status."</option>");?>' >
    			
  					<option value="1">Active</option>
  					<option value="0">Deactive</option>
  
					</select>
               </td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Do you want to update password?</td>
    			<td>
    			<input type="radio" name="passrad" value="Yes" required="required" id="upassy" onchange="checkupdatePass()"/> Yes
  				<input type="radio" name="passrad" value="No" required="required" id="upassn" onchange="checkupdatePass()"/> No 
  				</td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr id="pass" style="visibility:hidden">
    			<td>Password: </td><td><input type = "password" name = "pass" id="passtxt"/><br/></td>
    		</tr>
    		<tr >
    			<td></td>
    		</tr>
    		<tr id="cpass" style="visibility:hidden">
    			<td>Confirm Password: </td><td><input type = "password" name = "cpass" id="cpasstxt"/><br/></td>
    		</tr>
    		<tr style="color:red">
    			<td id="error"></td>
    		</tr>
    		
    		<tr><td></td><td></td><td><input type="submit" class="myButton" value="Save"/></td></tr>
        
		
		</table>
    </form>

</body>
</html>
