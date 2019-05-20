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
<script>
        
        function ValidaeData(){
                
					
                	var pass=document.getElementById("password").value;
                    var cpass=document.getElementById("confirmPassword").value;
                    var fname=document.getElementById("fname").value;
                    var lname=document.getElementById("lname").value;
                    var email=document.getElementById("email").value;
                    var user=document.getElementById("user").value;
                    var status=document.getElementById("status").value;

                    
					
					if(fname ==""){

						x="Please Fill Required Fields";
						document.getElementById("error").innerHTML = x;
                    	document.getElementById("fname").style.borderColor="red";
                    	document.getElementById("fname").style.backgroundColor="#ffcccc";
                    	return false;

					}
					else if(lname ==""){

						x="Please Fill Required Fields";
						document.getElementById("error").innerHTML = x;
                    	document.getElementById("lname").style.borderColor="red";
                    	document.getElementById("lname").style.backgroundColor="#ffcccc";
                    	return false;

					}
					else if(email ==""){

						x="Please Fill Required Fields";
						document.getElementById("error").innerHTML = x;
                    	document.getElementById("email").style.borderColor="red";
                    	document.getElementById("email").style.backgroundColor="#ffcccc";
                    	return false;

					}
					else if(user ==""){

						x="Please Fill Required Fields";
						document.getElementById("error").innerHTML = x;
                    	document.getElementById("user").style.borderColor="red";
                    	document.getElementById("user").style.backgroundColor="#ffcccc";
                    	return false;

					}
					else if(pass ==""){
						x="Please Fill Required Fields";
						document.getElementById("error").innerHTML = x;
                    	document.getElementById("password").style.borderColor="red";
                    	document.getElementById("password").style.backgroundColor="#ffcccc";
                    	return false;
					}
					else if(cpass ==""){

						x="Please Fill Required Fields";
						document.getElementById("error").innerHTML = x;
                    	document.getElementById("confirmPassword").style.borderColor="red";
                    	document.getElementById("confirmPassword").style.backgroundColor="#ffcccc";
                    	return false;

					}

					else if(status ==""){

						x="Please Fill Required Fields";
						document.getElementById("error").innerHTML = x;
                    	document.getElementById("status").style.borderColor="red";
                    	document.getElementById("status").style.backgroundColor="#ffcccc";
                    	return false;

					}



					else if(pass!=cpass){

                    	var x="Invalid Password Combination";
                    	document.getElementById("error").innerHTML = x;
                    	document.getElementById("password").style.borderColor="red";
                        document.getElementById("confirmPassword").style.borderColor="red";
                        document.getElementById("password").style.backgroundColor="#ffcccc";
                        document.getElementById("confirmPassword").style.backgroundColor="#ffcccc";
                    	return false;

                    	

                    }
					
                }
    </script>
</head>

<body>
    <form onsubmit="return ValidaeData();" method="post" name="frmvillage" action="saveuser.php">
    	<h3 align="center"> Add New User </h3>
    <input type="hidden" name="pid" value="<?php echo $ppid; ?>"/>
    <table>
     
         <tr>
    			<td>First Name:</td><td><input type = "text" name = "f_name" id="fname" /><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		
    		<tr>
    			<td>Last Name: </td><td><input type = "text" name = "l_name" id="lname" /><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Email: </td><td><input type = "email" name = "email" id="email" /><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		
    		<tr>
    			<td>User Name: </td><td><input type = "text" name = "u_name" id="user" /><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Password: </td><td><input type = "password" name = "pass"  id="password" /><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Confirm Password: </td><td><input type = "password" name = "cpass"  id="confirmPassword" /><br/></td>
    			
    		</tr>
    		<tr>
    			<td ></td>
    		</tr>
    		<tr>
    			<td>Status: </td><td>
    			<select name = "status" required="required" id="status">
  					<option value="1">Active</option>
  					<option value="0">Deactive</option>
  
					</select>
    			
    			</td>
    		</tr>
    		<tr style="color:red">
    			<td id="error"></td>
    		</tr>
    		
    		<tr><td></td><td></td><td><input type="submit" class="myButton" value="Save" id="submitButton"/></td></tr>
    	
    	</table>
    	 
    	
    	</form>
</body>
</html>
