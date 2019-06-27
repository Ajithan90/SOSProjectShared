<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title></title>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
      <?php

include 'SQLFunctions.php';

    $obj = GetData("home");
    ?>
           <br />
	<div class="container" style="width: 500px;">
		<form method="post">  
                     <?php
                    if (isset($error)) {
                        echo $error;
                    }
                    ?>  
                     <br /> <label>Home ID</label> <input type="text"
				name="name" class="form-control" /><br /> <label>Name</label> <input
				type="text" name="gender" class="form-control" /><br /> <label>Village
				ID</label> <input type="text" name="designation"
				class="form-control" /><br /> <label>Mother In Charge</label> <input
				type="text" name="designation" class="form-control" /><br /> <input
				type="submit" name="submit" value="Append" class="btn btn-info" /><br />                      
                     <?php
                    if (isset($message)) {
                        echo $message;
                    }
                    ?>  
                </form>


	</div>
	<div class="container" style="width: 500px;">


		<div class="table-responsive">
			<h1>Details</h1>
			<br />
			<table class="table table-bordered table-striped" >
				<tr>
					<th>Home ID</th>
					<th>Name</th>
					<th>Village ID</th>
					<th>Mother In Charge</th>
				</tr>
				<tbody id="employee_table">
				
				</tbody>

			</table>
		</div>
	</div>
	<br />
</body>


<script>
$(document).ready(function() {
	 $.post("home.php", function(data){
		 tData="";
		 res=JSON.parse(data);
		 $.each(res, function(key, value) {
             tData+="<tr>";
             $.each(value, function(k, v) {
                 tData+="<td>"+v+"</td>";

         });
             tData+="</tr>"

     });
$('#employee_table').html(tData);
		  });
	
});
 </script>
</html>
