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
    <meta charset="utf-8">
    <title>Village Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/sos.css" rel="stylesheet" type="text/css"/>
    <script src="../../script/jquery-1.7.1.min.js"></script>
    <script src="../../script/bootstrap.min.js"></script>
    <script src="../../script/sections/villages.js"></script>
</head>
<body>
<div class="container" id="container">

    <form class="well form-horizontal" action="proccessvillagedata.php" method="post"  id="village_form">
        <fieldset>
            <div class="panel-heading">
                <div class="row">
                    <div class="col col-xs-6">
                        <h3 class="panel-title"><b>Villages</b></h3>
                    </div>


                </div>

            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Village Id</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input disabled name="villageid" placeholder="Village Id" class="form-control" id="villageid" type="text" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Village Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="villagename" placeholder="Village Name" id="villagename" class="form-control"  type="text" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Address 1</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="address1" placeholder="Address 1" class="form-control" id="address1" type="text" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Address 2</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="address2" placeholder="Address 2" id="address2" class="form-control"  type="text" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">City</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="city" placeholder="City" id="city" class="form-control"  type="text" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Zip Code</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="zipcode" placeholder="Zip Code" id="zipcode" class="form-control"  type="text" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">District Id</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="districtid" placeholder="District Id" id="districtid" class="form-control"  type="text" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Telephone Number</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="telephone" placeholder="Telephone Number" id="telephone" class="form-control"  type="text" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Email Address</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="email" placeholder="Email Address" id="email" class="form-control"  type="text" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Web Address</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="web" placeholder="Web Address" id="web" class="form-control"  type="text" required>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="button" id="save" value="add" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
                </div>
            </div>


        </fieldset>
    </form>
</div>

<?php
include ('../controllers/SQLFunctions.php');

$result=GetData('village');//returns data in json format

?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<div class="container" id="tableContainer" style="width: 110%">
    <div class="row">
        <p>&nbsp;</p><p>&nbsp;</p>

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                            <h3 class="panel-title"><b>Village Details</b></h3>
                            <input type="text" placeholder="Search.." name="search">
                            <button type="button" ><i class="fa fa-search"></i></button>
                            <button id="showForm" class="btn btn-default"><em class="fa fa-user-plus"></em></button>


                        </div>


                    </div>

                </div>

                <div class="panel-body">
                    <table class="table table-striped table-bordered table-list">
                        <thead>
                        <tr>
                            <th><em class="fa fa-cog"></em></th>
                            <th>Village Id</th>
                            <th>Village Name</th>
                            <th>Address 1</th>
                            <th>Address 2</th>
                            <th>City</th>
                            <th>Zip Code</th>
                            <th>District Id</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Web</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        require '../controllers/connection.php';

                        $query="select * from village";
                        if($result=mysqli_query($con,$query)){
                            while($row=mysqli_fetch_assoc($result)){
                                $id=$row['villageid'];
                                $data= '<tr><td align="center"><a class="btn btn-default"><em class="fa  fa-pencil"></em></a>'.
                                    '<a class="btn btn-danger" id="'.$id.'" onclick="deleteItem(this.id)"><em class="fa fa-trash"></em></a></td>';
                                foreach ($row as $r){
                                    $data.= "<td>$r</td>";
                                }
                                $data.= '</tr>';
                                echo $data;
                            }
                        }
                        ?>
                        </tbody>
                    </table>

                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col col-xs-4">Page 1 of 5
                        </div>
                        <div class="col col-xs-8">
                            <ul class="pagination hidden-xs pull-right">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                            </ul>
                            <ul class="pagination visible-xs pull-right">
                                <li><a href="#">&laquo;</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div></div></div>
<script type="text/javascript">

</script>
</body>
</html>
