<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<?php 
session_start();

// Check, if username session is NOT set then this page will jump to login page
if ((!isset($_SESSION['user_id']) && (!isset($_SESSION['logd_in'])))) {
header('Location:login.php');
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>DashBoard</title>
</head>
    <body>
    <div>
    	<?php 
    	echo($_SESSION['user_id']);
    	?>
    </div>
    <div>
    	<a href="village/Village.php">Village</a>
    	
    	</div>
    	<div>
    	<a href="logout.php">Log out</a>
    	
    	</div>
    </body>
    
</html>