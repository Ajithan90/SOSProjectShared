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

$result=GetData('director');//returns data in json format
 echo($result);
?>

<form method="post" name="frmvillage" action="proccessdirectordata.php">
    	
    
    
    	 
    	
   </form>

	
</body>
</html>