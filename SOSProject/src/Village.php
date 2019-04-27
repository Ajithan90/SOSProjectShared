<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Village</title>
<link rel="stylesheet" type="text/css" href="../css/subpage.css"/>

</head>
    
    <body>
    <div id="ADBtn">
    <button id="myBtn">Add</button>

        <!-- The Modal -->
		<div id="myModal" class="modal">

           <!-- Modal content -->
  		<div class="modal-content">
    	<span class="close">&times;</span>
    	<h3>Add Village</h3>
    	<form method="post" action="savevillage.php">
    	<table align="center">
    		<tr>
    			<td>Village Name:</td><td><input type = "text" name = "village_name" required/><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		
    		<tr>
    			<td>Address Line1: </td><td><input type = "text" name = "address_line1" required/><br/></td>
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
    			<td>City: </td><td><input type = "text" name = "city" required/><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>ZIP: </td><td><input type = "number" name = "zip" required/><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Director Name: </td><td><input type = "text" name = "director_name" required/><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Phone Number: </td><td><input type = "tel" name = "phone_number" required/><br/></td>
    		</tr>
    		<tr>
    			<td></td>
    		</tr>
    		<tr>
    			<td>Email: </td><td><input type ="email"  name = "email" /><br/></td>
    		</tr>
    		
    	
    	</table>
    	 <div align="right" id="subbtn">
    	 <input type ="submit"/>
    	 
    	 </div>
    	
    	</form>
  </div>

</div>
    </div>
<script src="../script/modelwindow.js"></script>
   
    
    <div id="table">
    <table width="70%" border="1">
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