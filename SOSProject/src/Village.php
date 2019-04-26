<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
 <link rel="stylesheet" type="text/css" href="css/main.css" />
<title>Village</title>
</head>
    
    <body>
    <div id="table">
    <table width="60%" border="1">
    <tr align="center">
    <td>Village ID</td>
    <td>Village Name</td>
	<td>Address</td>
    <td>Director Name</td>
    <td>Phone Number</td>
    <td>Email ID</td>
    </tr>
    <?php
	include 'connection.php';
 $sql="SELECT * FROM villages";
 $result_set=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['Village_ID'] ?></td>
        <td align="center"><?php echo $row['Village'] ?></td>
		<td align="center"><?php echo $row['Address_Line1']." ".$row['Address_Line2']." ".$row['City']." ".$row['ZIP']?></td>
        <td align="center"><?php echo $row['Director_Name'] ?></td>
        <td align="center"><?php echo $row['Telephone_NO'] ?></td>
        <td align="center"><?php echo $row['Email_ID'] ?></td>
        </tr>
        <?php
 }
 ?>
</table>
        
        </div>
    	
    </body>
  
</html>