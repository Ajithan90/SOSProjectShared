
<?php 
session_start();

// Check, if username session is NOT set then this page will jump to login page
if ((!isset($_SESSION['user_id']) && (!isset($_SESSION['logd_in'])))) {
header('Location:../login.php');
}
?>
<?php require_once ("../connection.php");//db connection 


	
$hname="";
$vid="";
$mother="";
$hid="";
	
		if(isset($_GET['ppid'])){
			$ppid = $_GET['ppid'];
			$sqlLoader="Select from home where Home_ID=?";
			$resLoader=$db->prepare($sqlLoader);
			$resLoader->execute(array($ppid));		
			while($rowLoader = $resLoader->fetch(PDO::FETCH_ASSOC)){
			    $vid=$rowLoader['Village_ID'];
			    $hname=$rowLoader['Name'];
			    $mother=$rowLoader['MotherInCharge'];
			    $hid=$rowLoader['Home_ID'];
			    
				
				
			}
	} 
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>

<script type="text/javascript" src="../../script/jquery.min.js"></script>
<script type="text/javascript" src="../../script/fancybox/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="../../script/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="../../script/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="../../script/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" type="text/css" href="../../script/fancybox/jquery.fancybox-buttons.css?v=1.0.5" />

<script type="text/javascript" src="../../script/fancybox/jquery.fancybox-buttons.js?v=1.0.5"></script>

<script type="text/javascript">
$(document).ready(function() {
	$(".fancybox").fancybox();
});
</script>	
    <style type="text/css" title="currentStyle">
			@import "../../css/demo_page.css";
			@import "../../css/demo_table_jui.css";
			@import "../../css/jquery-ui-1.8.4.custom.css";
		</style>
<script src="../../script/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			jQuery(document).ready(function() {
				oTable = jQuery('#tbl').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
								} );
				});		
		</script>
        
<style>
#myButton {
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
#myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed));
	background:-moz-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	background:-webkit-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	background:-o-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	background:-ms-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	background:linear-gradient(to bottom, #dfdfdf 5%, #ededed 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed',GradientType=0);
	background-color:#dfdfdf;
}
#myButton:active {
	position:relative;
	top:1px;
}
a:link {
	color: #000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000;
}
a:hover {
	text-decoration: none;
	color: #FFF;
}
a:active {
	text-decoration: none;
	color: #FFF;
}


#header img {
  float: left;
  border-radius: 50%;
  height:50px;
  width:10%;
}

#header h1 {
  position: relative;
  top: 3px;
  left: 10px;
  font-weight: 600;
  font-family: 'Titillium Web', sans-serif;  
  font-size: 36px;
  color: #ffffff;
  
}
</style>
 <link rel="stylesheet" href="../../css/menu.css">
 
</head>

<body style="background-color:#40c3ce;">

<div id='cssmenu'>
<ul>
   <li><a href='../DashBoard.php'><span>Home</span></a></li>
   <li class='active has-sub'><a href='#'><span>Category</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Village</span></a>
         </li>
         <li class='has-sub'><a href='#'><span>School</span></a>
         </li>
      </ul>
   </li>
   <li><a href='#'><span>About US</span></a></li>
   <li class='last'><a href='#'><span>Contact US</span></a></li>
   <li class='last'><a href='../logout.php'><span>Log Out</span></a></li>
</ul>
</div>




<div id="header">   
 


<h1 align="center">Home Details</h1>
</div>

<a href="addnewhome.php" id="myButton" class="fancybox fancybox.ajax">Add</a>
<br/><br/>


<?php //Search Start
					$sql="Select * from home";
					$res=$db->prepare($sql);
					$res->execute();		
					$str="<div class='demo_jui'><table cellpadding='0' cellspacing='0' border='0' class='display' id='tbl' class='jtable'>";
					$str.="<thead><tr><th>Home ID</th><th>Home Name</th><th>Mother in charge</th><th>Village ID</th><th>Action</th></tr></thead><tbody>";
						
						
						while($row = $res->fetch(PDO::FETCH_ASSOC)){
						    $str.="<td>".$row['Home_ID']."</td>";
						    $str.="<td>".$row['Name']."</td>";
							$str.="<td>".$row['MotherInCharge']."</td>";
							$str.="<td>".$row['Village_ID']."</td>";
							
							
							
							
							//Edit,Delete link
							$str.="<td><center><a class='fancybox fancybox.ajax' 
							href='updatehome.php?ppid=".$row['Home_ID']."' onclick='return update()'>
							<img src = '../../images/update.png' alt = 'edit' title = 'edit'/></a>
							


                            <a href='deletehome.php?pid=".$row['Home_ID']."' onclick='return bura()' >
							<img src = '../../images/delete.png' alt = 'delete' 
							title = 'delete'/></a></center></td></tr>";
						}
						echo $str;
						echo "</tbody></table></div>";
               //SEARCH END ?>


</body>
</html>