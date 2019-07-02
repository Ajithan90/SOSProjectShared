<html>
<head>
<?php 
session_start();

 //Check, if username session is NOT set then this page will jump to login page
//if ((!isset($_SESSION['user_id']) && (!isset($_SESSION['logd_in'])))) {
//header('Location:../login.php');
//}
?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<script src="../../script/jquery.min.js"></script>
	<script src="../../script/bootstrap.min.js"></script>

</head>
<body>
<?php 
include ('../controllers/SQLFunctions.php'); 

$result=GetData('village');//returns data in json format
 echo($result);
?>

<div class="tab-content">
	<!--Sales-->
	<div class="tab-pane fade in active" id="packages" name="packages" role="tabpanel"
		 style="float: left;width: 100%;padding: 0">
		<div class="bs-callout bs-callout-danger">
			<div class="container">
				<div id="signupbox" style=" margin-top:50px"
					 class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-info">
						<div class="panel-heading">
							<div class="panel-title">Villages
							</div>

						</div>
						<div class="panel-body">
							<form id="salesForm" method="post" onsubmit=""
								  autocomplete="off"
								  action="dashboard.php#packages" enctype="multipart/form-data">

								<div id="div_id_select" class="form-group required">
									<label for="villagename"
										   class="control-label col-md-4  requiredField">
                                        Village Name<span class="asteriskField">*</span> </label>

									<div class="controls col-md-8 " style="margin-bottom: 10px">
										<input class="input-md  textinput textInput form-control" type="text"
											   min="1" name="villagename" id="villagename"
                                               style="margin-bottom: 10px" required placeholder="Village Name">
									</div>
								</div>

								<div id="div_id_address1" class="form-group required">
									<label for="address1" class="control-label col-md-4  requiredField">Address Line 1<span
											class="asteriskField">*</span> </label>

									<div class="controls col-md-8 ">

										<input class="input-md  textinput textInput form-control"
											   type="text"
											   id="address1" name="address1"
											   required
                                               style="margin-bottom: 10px" placeholder="Address Line 1"/>
									</div>
								</div>

								<div id="div_id_address2" class="form-group required">
									<label for="address2"
										   class="control-label col-md-4  requiredField">Address Line 2<span
											class="asteriskField">*</span> </label>

									<div class="controls col-md-8 ">

										<input class="input-md  textinput textInput form-control"
											   type="text" name="address2"
											   id="address2"
											    required
                                               style="margin-bottom: 10px" placeholder="Address Line 2"/>
									</div>
								</div>
                                <div id="div_id_city" class="form-group required">
                                    <label for="id_sales_productName"
                                           class="control-label col-md-4  requiredField">
                                        City<span class="asteriskField">*</span> </label>

                                    <div class="controls col-md-8 ">

                                        <input class="input-md  textinput textInput form-control" type="text"
                                               name="city" id="city"
                                               style="margin-bottom: 10px" required placeholder="City">
                                    </div>
                                </div>
								<div id="div_id_password1" class="form-group required">
									<label for="id_sales_branch" class="control-label col-md-4  requiredField">ZIP Code<span
											class="asteriskField">*</span> </label>

									<div class="controls col-md-8 ">

										<input class="input-md  textinput textInput form-control"
											   type="number" step="0.01" name="zipcode"
											   id="zipcode"
											   style="margin-bottom: 10px" required
											   placeholder="ZIP Code"/>
									</div>
								</div>
                                <div id="div_id_districtid" class="form-group required">
                                    <label for="id_sales_productName"
                                           class="control-label col-md-4  requiredField">
                                        District Id<span class="asteriskField">*</span> </label>

                                    <div class="controls col-md-8 ">

                                        <input class="input-md  textinput textInput form-control" type="text"
                                               name="districtid" id="districtid"
                                               style="margin-bottom: 10px" required placeholder="District Id">
                                    </div>
                                </div>
                                <div id="div_id_districtid" class="form-group required">
                                    <label for="telephone"
                                           class="control-label col-md-4  requiredField">
                                       Phone Number<span class="asteriskField">*</span> </label>

                                    <div class="controls col-md-8 ">

                                        <input class="input-md  textinput textInput form-control" type="text"
                                               name="telephone" id="telephone"
                                               style="margin-bottom: 10px" required placeholder="Phone Number">
                                    </div>
                                </div>
                                <div id="div_id_districtid" class="form-group required">
                                    <label for="email"
                                           class="control-label col-md-4  requiredField">
                                        Email<span class="asteriskField">*</span> </label>

                                    <div class="controls col-md-8 ">

                                        <input class="input-md  textinput textInput form-control" type="text"
                                               name="email" id="email"
                                               style="margin-bottom: 10px" required placeholder="Email">
                                    </div>
                                </div>
                                <div id="div_id_districtid" class="form-group required">
                                    <label for="web"
                                           class="control-label col-md-4  requiredField">
                                        Web Address<span class="asteriskField">*</span> </label>

                                    <div class="controls col-md-8 ">

                                        <input class="input-md  textinput textInput form-control" type="text"
                                               name="web" id="web"
                                               style="margin-bottom: 10px" required placeholder="Web Address">
                                    </div>
                                </div>
								<div class="form-group">
									<div class="aab controls col-md-4 "></div>
									<div class="controls col-md-8 ">
										<button class="btn btn-primary btn btn-info" id="addBtnSales"
												onclick="processSale($('#id_sales_productId').val())"
												name="submit" type="button">Add
										</button>
										<button class="btn btn-primary btn btn-info" type="reset" name="clear"
												id="btnClearSales" onclick="setClear()">
											Clear
										</button>


									</div>
								</div>
								<datalist id="existingPackages">

								</datalist>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


	
</body>
</html>