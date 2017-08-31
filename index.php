<!DOCTYPE html>
<html lang="en">

<head>
    <script src="js/jquery.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BBCCC - Inventory System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Font-Awesome -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<link href="style.css" rel="stylesheet">


	<!--jquery-->
	<script src="js/jquery-1.12.4.js"></script>
	<!--plugin DataTable-->
    <script src="js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
	
	<!--button extension for DataTable-->
 	<script src="js/dataTables.buttons.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css">
    <script src="js/buttons.html5.min.js"></script>
    <script src="js/jszip.min.js"></script>
    <script src="js/pdfmake.min.js"></script>
    <script src="js/buttons.print.min.js"></script>
    <script src="js/vfs_fonts.js"></script>
    <script src="js/buttons.flash.min.js"></script>

	<!--Column Reorder for DataTable-->
	<link rel="stylesheet" type="text/css" href="css/colReorder.dataTables.min.css"/>
	<script type="text/javascript" src="js/dataTables.colReorder.min.js"></script>

	<!--Responsiveness for DataTable-->
	<link rel="stylesheet" type="text/css" href="css/responsive.dataTables.min.css"/>
	<script type="text/javascript" src="js/dataTables.responsive.min.js"></script>

	<!--Key Table for DataTable-->
	<link rel="stylesheet" type="text/css" href="css/keyTable.dataTables.min.css"/>
	<script type="text/javascript" src="js/dataTables.keyTable.min.js"></script>

	<!--AngularJs-->
	<script src="js/angular.min.js"></script>
	
</head>

<body ng-app="ourAngularJsApp" >

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">BBCCC - Inventory System</a>
            </div>
            <!-- Top Menu Items -->
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard" aria-hidden="true"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="stocks.php"><i class="glyphicon glyphicon-list"></i>Stocks</a>
                    </li>
					<li>
                        <a href="itemLists.php"><i class="glyphicon glyphicon-list"></i>Item Lists</a>
                    </li>

					<li>
                        <a href="report.php"><i class="fa fa-pie-chart"></i>Reports</a>
                    </li>
					<li>
                        <a href="history.php"><i class="fa fa-history"></i>History</a>
                    </li>
					<li>
                        <img src="bbccc-Logo.png" style="width:200px;height:200px;margin-top:35px;margin-left:10px">
                    </li>
					

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
				<button class="btn btn-default btn-lg btn-success" id="add-stock" onclick="clearValuesIn()" data-toggle="modal" data-target="#modal-new-stock">IN
						<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
				</button>

				<button class="btn btn-default btn-lg btn-success" id="add-request" onclick="clearValuesOut()" data-toggle="modal" data-target="#modal-new-request">OUT
					<span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span>
				</button>
							
				<button class="btn btn-default btn-lg btn-info" id="add-stock" data-toggle="modal" data-target="#modal-new-item">Add Item
					<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
				</button>	
							
				<a href='confirmation.php'><button style="float:right" class="btn btn-default btn-lg btn-danger" id="reset">RESET
					<i class="fa fa-cog fa-spin"></i>
				</button></a>
							
                        </h1>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div  class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">

									<div class="col-xs-5 text-left">
                                        <div class="medium">Main</div>
                                        <i class="fa fa fa-file-word-o fa-5x"></i>
                                    </div>
                                    <div  class="col-xs-7 text-right">
<!--                                        <div class="huge">-->
										<?php
											require ("connectDB.php");
											$sql = "SELECT item_id, name from items where type='main'";
											$sqlResult = mysqli_query($con,$sql);
											$total_stocks = 0;
											$counter = 0;

											if( $sqlResult->num_rows > "0" ){

												while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
													$item_id = $rows['item_id'];
													$name = $rows['name'];

													$sqlResultB = mysqli_query($con,"Select quantity from beginning_inv where item_id='$item_id'");
													$begInv = mysqli_fetch_assoc($sqlResultB);

													$sqlResultS = mysqli_query($con,"Select quantity from stocks where item_id='$item_id'");
													$stock = mysqli_fetch_assoc($sqlResultS);

													$total_stocks = $begInv['quantity'] + $stock['quantity'];
													
													if($total_stocks<5){
														$counter++;
													}
												}
											}
										
											echo "<span class='badge' style='font-size:30px;background-color:grey;color:white'>$counter</span>";			
										?>
<!--										</div>-->
                                        <div>items low in stock</div>
                                    </div>

                                </div>
                            </div>
                        
                                <div  class="panel-footer">
									<p id="viewStocksButtonMain">View Details <i class="fa fa-arrow-circle-down"></i></p>
                                </div>
                          
                        </div>
                    </div>
                    <div  class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-5 text-left">
                                        <div class="medium">Grocery</div>
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div  class="col-xs-7 text-right">
<!--                                        <div class="huge">-->
										<?php
											require ("connectDB.php");
											$sql = "SELECT item_id, name from items where type='grocery'";
											$sqlResult = mysqli_query($con,$sql);
											$total_stocks = 0;
											$counter = 0;

											if( $sqlResult->num_rows > "0" ){

												while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
													$item_id = $rows['item_id'];
													$name = $rows['name'];

													$sqlResultB = mysqli_query($con,"Select quantity from beginning_inv where item_id='$item_id'");
													$begInv = mysqli_fetch_assoc($sqlResultB);

													$sqlResultS = mysqli_query($con,"Select quantity from stocks where item_id='$item_id'");
													$stock = mysqli_fetch_assoc($sqlResultS);

													$total_stocks = $begInv['quantity'] + $stock['quantity'];
													
													if($total_stocks<5){
														$counter++;
													}
												}
											}
										
											echo "<span class='badge' style='font-size:30px;background-color:grey;color:white'>$counter</span>";			
										?>
<!--										</div>-->
                                        <div>items low in stock</div>
                                    </div>
                                </div>
                            </div>
                       
                                <div class="panel-footer">
									<p id="viewStocksButtonGrocery">View Details <i class="fa fa-arrow-circle-down"></i></p>
                                </div>
                          
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                   <div class="col-xs-7 text-left">
                                        <div class="medium">Office Supplies</div>
                                        <i class="fa  fa-folder-open fa-5x"></i>
                                    </div>
                                    <div class="col-xs-5 text-right">

											<?php
											require ("connectDB.php");
											$sql = "SELECT item_id, name from items where type='office supplies'";
											$sqlResult = mysqli_query($con,$sql);
											$total_stocks = 0;
											$counter = 0;

											if( $sqlResult->num_rows > "0" ){

												while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
													$item_id = $rows['item_id'];
													$name = $rows['name'];

													$sqlResultB = mysqli_query($con,"Select quantity from beginning_inv where item_id='$item_id'");
													$begInv = mysqli_fetch_assoc($sqlResultB);

													$sqlResultS = mysqli_query($con,"Select quantity from stocks where item_id='$item_id'");
													$stock = mysqli_fetch_assoc($sqlResultS);

													$total_stocks = $begInv['quantity'] + $stock['quantity'];
													
													if($total_stocks<5){
														$counter++;
													}
												}
											}
										
											echo "<span class='badge' style='font-size:30px;background-color:grey;color:white'>$counter</span>";			
										?>
										
									
                                        <div>items low in stock</div>
                                    </div>
                                </div>
                            </div>
                                <div class="panel-footer">
                                   	<p id="viewStocksButtonOfficeSupplies">View Details <i class="fa fa-arrow-circle-down"></i></p>
                                </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-7 text-left">
                                        <div class="medium">Office Equipment</div>
                                        <i class="fa fa fa-desktop fa-5x"></i>
                                    </div>
                                    <div  class="col-xs-5 text-right">

											<?php
											require ("connectDB.php");
											$sql = "SELECT item_id, name from items where type='office equipments'";
											$sqlResult = mysqli_query($con,$sql);
											$total_stocks = 0;
											$counter = 0;

											if( $sqlResult->num_rows > "0" ){

												while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
													$item_id = $rows['item_id'];
													$name = $rows['name'];

													$sqlResultB = mysqli_query($con,"Select quantity from beginning_inv where item_id='$item_id'");
													$begInv = mysqli_fetch_assoc($sqlResultB);

													$sqlResultS = mysqli_query($con,"Select quantity from stocks where item_id='$item_id'");
													$stock = mysqli_fetch_assoc($sqlResultS);

													$total_stocks = $begInv['quantity'] + $stock['quantity'];
													
													if($total_stocks<5){
														$counter++;
													}
												}
											}
										
											echo "<span class='badge' style='font-size:30px;background-color:grey;color:white'>$counter</span>";			
										?>

                                        <div>items low in stock</div>
                                    </div>
                                </div>
                            </div>
                                <div class="panel-footer">
  									<p id="viewStocksButtonOfficeEquipment">View Details <i class="fa fa-arrow-circle-down"></i></p>
                                </div>

                        </div>
                    </div>
                </div>
             
				
					<div id="belowStocksMainDiv" class="col-lg-12">
						<h2>Main</h2>

							<table id="belowStocksMainTable" class="table table-bordered table-hover table-striped">
								<thead>
									<tr>
										<th>Item name</th> 
										<th>Inventory</th>

									</tr>
								</thead>

								<tbody>
								</tbody>
							</table>

				  </div>
				
				
				     <div id="belowStocksGroceryDiv" class="col-lg-12">
                        <h2>Grocery</h2>

                            <table id="belowStocksGroceryTable" class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
										<th>Item name</th> 
										<th>Inventory</th>		
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>

                    </div>
             
       

               
                    <div id="belowStocksOfficeSuppliesDiv" class="col-lg-12">
                        <h2>Office Supplies</h2>

                            <table id="belowStocksOfficeSuppliesTable" class="table table table-bordered table-hover">
                                <thead>
                                    <tr>
                                       <th>Item name</th> 
										<th>Inventory</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>

                    </div>
				
                    <div id="belowStocksOfficeEquipmentDiv" class="col-lg-12">
                        <h2>Office Equipment</h2>

                            <table id="belowStocksOfficeEquipmentTable" class="table table-hover table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Item name</th> 
										<th>Inventory</th>
	
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                    </div>

                </div>
 
        </div>
   
    </div>


<!--Add stock modal-->
<div class="modal fade" id="modal-new-stock">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Add stock</h4>
			</div>
			
			<div class="modal-body" >
					
				<label >Select Category:</label>
					<div class="btn-group">
						<button id="formMain" class="btn btn-default">Main</button>
						<button id="formGrocery" class="btn btn-default">Grocery</button>
						<button id="formOfficeSupplies" class="btn btn-default">Office Supplies</button>
						<button id="formOfficeEquipment" class="btn btn-default">Office Equipment</button>
					</div>
				<br><br>

			<!--form for adding stock in main category div-->
				<div id="formMainDiv" style="display:none" ng-controller="mainAddAppCtrl">
					<form class="form-horizontal" action="formAdd.php" method="POST">
						
						<div class="form-group">
							<label class="control-label col-sm-3" >Date:</label>
								<div class="col-sm-4"> 
									<input type="date" name="date" class="form-control" required>
								</div>
						</div>

						
						<div class="form-group">
						  <label class="control-label col-sm-3">Select Item:</label>
							<div class="col-sm-8"> 
								<select id="idSelectMainAdd" class="form-control" name="item" required onchange="selectItemChangeMain(this)">
									<option selected disabled value=""></option>
									<?php
										require ("connectDB.php");
										$sqlResult = mysqli_query($con,"SELECT name from items where type='Main'");

										while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
											$itemDescription = $rows['name'];
											echo " <option value='$itemDescription'> $itemDescription</option> ";
										}
									?>
								</select>
							</div>
							
							
						</div>

						<div class="form-group">
							<label class="control-label col-sm-3">Price:</label>
								<div class="col-sm-3">
									<input id="itemPriceMain" class="form-control" name="price">
								</div>
								
						</div>
						
						<div class="form-group" >
							<label class="control-label col-sm-3" >Remaining Stocks:</label>
							<div class="col-sm-3" > 
								<h4 id="displayItemStockMainAdd" class="form-control"></h4>
							</div>
							
							<label class="control-label col-sm-2" >New Stocks:</label>
							<div class="col-sm-3"> 
								<h4 class="form-control" style="color:green">{{newStock}}</h4>
							</div>
							
						</div>	
						
						<!--suppliers-->
						<div class="form-group">
						  <label class="control-label col-sm-3">Supplier:</label>
							<div class="col-sm-8"> 
								<input class="form-control" type="text" name="supplier" required>
							</div>
						</div>
						
						<div class="form-group" >
							<label class="control-label col-sm-3" >Quantity: </label>
								<div class="col-sm-3"> 
									<input id="idQuantityNewStockMain" ng-model="newQuantity" ng-change="myFunction()"  type="number" name="quantity" class="form-control" min="1" required>
								</div>
						</div>
						
						<div class=" modal-footer"> 
							<button type="submit" class="btn btn-default ">Add</button>
						</div>
						
					</form>
				</div>
			<!--form for adding stock in grocery category div-->
				<div id="formGroceryDiv" style="display:none" ng-controller="groceryAddAppCtrl">
					<form class="form-horizontal" action="formAdd.php" method="POST">
						
						<div class="form-group">
							<label class="control-label col-sm-3" >Date:</label>
								<div class="col-sm-4"> 
									<input type="date" name="date" class="form-control" required>
								</div>
						</div>
						
						<div class="form-group">
						  <label class="control-label col-sm-3">Select Item:</label>
							<div class="col-sm-8"> 				
								<select id="idSelectGroceryAdd"  class="form-control" name="item" required onchange="selectItemChangeGrocery(this)">
									<option selected disabled value=""></option>
									<?php
										require ("connectDB.php");
										$sqlResult = mysqli_query($con,"SELECT name from items where type='grocery'");

										while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
											$itemDescription = $rows['name'];
											echo " <option value='$itemDescription'> $itemDescription</option> ";
										}
									?>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3">Price:</label>
								<div class="col-sm-3">
									<input id="itemPriceGrocery" class="form-control" name="price">
								</div>
								
						</div>
						
						<div class="form-group">
						  <label class="control-label col-sm-3">Remaining Stock:</label>
							<div class="col-sm-3"> 
								<h4 id="displayItemStockGroceryAdd" class="form-control"></h4>
							</div>
							
							<label class="control-label col-sm-2" >New Stocks:</label>
							<div class="col-sm-3"> 
								<h4 class="form-control" style="color:green">{{newStock}}</h4>
							</div>
						</div>
						
						<!--suppliers-->
						<div class="form-group">
						  <label class="control-label col-sm-3">Supplier:</label>
							<div class="col-sm-8"> 
								<input class="form-control" type="text" name="supplier" required>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3" >Quantity:</label>
								<div class="col-sm-3"> 
									<input id="idQuantityNewStockGrocery" ng-model="newQuantity" ng-change="myFunction()" type="number" name="quantity" class="form-control" min="1" required>
								</div>
						</div>
						<div class=" modal-footer"> 
							<button type="submit" class="btn btn-default ">Add</button>
						</div>
						
					</form>
				</div>
			<!--form for adding stock in office supplies category div-->
				<div id="formOfficeSuppliesDiv" style="display:none" ng-controller="officeSuppliesAddAppCtrl">
					<form class="form-horizontal" action="formAdd.php"  method="POST">
						
						<div class="form-group">
							<label class="control-label col-sm-3" >Date:</label>
								<div class="col-sm-4"> 
									<input type="date" name="date" class="form-control" required>
								</div>
						</div>
						
						<div class="form-group">
						  <label class="control-label col-sm-3">Select Item:</label>
							<div class="col-sm-8"> 
								<select id="idSelectOfficeSuppliesAdd"  class="form-control" name="item" required onchange="selectItemChangeOfficeSupplies(this)">
									<option selected disabled value=""></option>
									<?php
										require ("connectDB.php");
										$sqlResult = mysqli_query($con,"SELECT name from items where type='office supplies'");

										while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
											$itemDescription = $rows['name'];
											echo " <option value='$itemDescription'> $itemDescription</option> ";
										}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-3">Price:</label>
								<div class="col-sm-3">
									<input id="itemPriceOfficeSupplies" class="form-control" name="price">
								</div>
								
						</div>
						
						<div class="form-group">
						  <label class="control-label col-sm-3">Remaining Stock:</label>
							<div class="col-sm-3"> 
								<h4 id="displayItemStockOfficeSuppliesAdd" class="form-control"></h4>
							</div>
							<label class="control-label col-sm-2" >New Stocks:</label>
							<div class="col-sm-3"> 
								<h4 class="form-control" style="color:green">{{newStock}}</h4>
							</div>
						</div>
						
					<!--suppliers-->
						<div class="form-group">
						  <label class="control-label col-sm-3">Supplier:</label>
							<div class="col-sm-8"> 
								<input class="form-control" type="text" name="supplier" required>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3" >Quantity:</label>
								<div class="col-sm-3	"> 
									<input id="idQuantityNewStockOfficeSupplies" ng-model="newQuantity" ng-change="myFunction()" type="number" name="quantity" class="form-control" min="1"  required>
								</div>

						</div>
						
						<div class=" modal-footer"> 
							<button type="submit" class="btn btn-default ">Add</button>
						</div>
						
					</form>
				</div>
			<!--form for adding stock in office equipment category div-->	
				<div id="formOfficeEquipmentDiv" style="display:none" ng-controller="officeEquipmentAddAppCtrl">
					<form class="form-horizontal" action="formAdd.php" method="POST">
						
						<div class="form-group">
							<label class="control-label col-sm-3" >Date:</label>
								<div class="col-sm-4"> 
									<input type="date" name="date" class="form-control" required>
								</div>
						</div>
						
						<div class="form-group">
						  <label class="control-label col-sm-3">Select Item:</label>
							<div class="col-sm-8"> 
								<select id="idSelectOfficeEquipmentAdd"  class="form-control" name="item" required onchange="selectItemChangeOfficeEquipment(this)">
									<option selected disabled value=""></option>
									<?php
										require ("connectDB.php");
										$sqlResult = mysqli_query($con,"SELECT name from items where type='office equipments'");

										while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
											$itemDescription = $rows['name'];
											echo " <option value='$itemDescription'> $itemDescription</option> ";
										}
									?>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3">Price:</label>
								<div class="col-sm-3">
									<input id="itemPriceOfficeEquipment" class="form-control" name="price">
								</div>
								
						</div>
						
						<div class="form-group">
						  <label class="control-label col-sm-3">Remaining Stock:</label>
							<div class="col-sm-3"> 
								<h4  id="displayItemStockOfficeEquipmentAdd" class="form-control"> </h4>
							</div>
						<label class="control-label col-sm-2" >New Stocks:</label>
							<div class="col-sm-3"> 
								<h4 class="form-control" style="color:green">{{newStock}}</h4>
							</div>
						</div>
						
					<!--suppliers-->
						<div class="form-group">
						  <label class="control-label col-sm-3">Supplier:</label>
							<div class="col-sm-8"> 
								<input class="form-control" type="text" name="supplier" required>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3" >Quantity:</label>
								<div class="col-sm-3	"> 
									<input id="idQuantityNewStockOfficeEquipment" ng-model="newQuantity" ng-change="myFunction()" type="number" name="quantity" class="form-control" min="1"  required>
								</div>

						</div>
						
						<div class=" modal-footer"> 
							<button type="submit" class="btn btn-default ">Add</button>
						</div>
						
					</form>
				</div>
			</div>
		
			

		</div>
	</div>
</div>
	
<!-- REQUEST modals -->
<div class="modal fade" id="modal-new-request" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Request</h4>
			</div>
			
			<div class="modal-body" >
					
				<label >Select Category:</label>
					<div class="btn-group">
						<button id="formMainRequest" class="btn btn-default">Main</button>
						<button id="formGroceryRequest" class="btn btn-default">Grocery</button>
						<button id="formOfficeSuppliesRequest" class="btn btn-default">Office Supplies</button>
						<button id="formOfficeEquipmentRequest" class="btn btn-default">Office Equipment</button>
					</div>
				<br><br>

			<!--form for request in main category div-->
				<div id="formMainDivRequest" style="display:none" ng-controller="mainRequestAppCtrl">
					<form class="form-horizontal" action="formRequest.php" method="post">
						
						<div class="form-group">
							<label class="control-label col-sm-3" >Date:</label>
								<div class="col-sm-4"> 
									<input type="date" name="date" class="form-control" required>
								</div>
						</div>
						

						
						<div class="form-group">
						  <label class="control-label col-sm-3">Select Item:</label>
							<div class="col-sm-8"> 
								<select id="idSelectMainRequest"  class="form-control" name="item" required onchange="selectItemChangeMain(this)">
									<option selected disabled value=""></option>
									<?php
										require ("connectDB.php");
										$sqlResult = mysqli_query($con,"SELECT name from items where type='main'");

										while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
											$itemDescription = $rows['name'];
											echo " <option value='$itemDescription'> $itemDescription</option> ";
										}
									?>
								</select>
							</div>
						</div>
						
						<div class="form-group">
						  <label class="control-label col-sm-3">Available Stock:</label>
							<div class="col-sm-3"> 
								<h4 id="displayItemStockMainRequest" class="form-control"></h4>
							</div>
							<label class="control-label col-sm-2" >New Stocks:</label>
							<div class="col-sm-3"> 
								<h4 class="form-control" style="color:red">{{newStock}}</h4>
							</div>
						</div>	

						<!--Departments-->
						<div class="form-group">
						  <label class="control-label col-sm-3">Department:</label>
							<div class="col-sm-5"> 
								<select id="selectDepartment1" class="form-control" name="department" required>
									<option selected disabled value=""></option>
									<?php
										require ("connectDB.php");
										$sqlResult = mysqli_query($con,"SELECT name from departments");

										while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
											$itemDescription = $rows['name'];
											echo " <option value='$itemDescription'> $itemDescription</option> ";
										}
									?>
								</select>
							</div>
							<a href="" data-toggle="modal" data-target="#modal-new-department">Add department</a>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3" >Quantity:</label>
								<div class="col-sm-3"> 
									<input id="idQuantityRequestMain" ng-model="newQuantity" ng-change="myFunction()" id="maxQuantityMain" type="number" name="quantity" class="form-control" min="1" required>
								</div>

						</div>
						
						<div class=" modal-footer"> 
							<button type="submit" class="btn btn-default ">Checkout</button>
						</div>
					</form>
				</div>
			<!--form for request in grocery category div-->
				<div id="formGroceryDivRequest" style="display:none" ng-controller="groceryRequestAppCtrl">
					<form class="form-horizontal" action="formRequest.php" method="post">
						
						<div class="form-group">
							<label class="control-label col-sm-3" >Date:</label>
								<div class="col-sm-4"> 
									<input type="date" name="date" class="form-control">
								</div>
						</div>

						
						<div class="form-group">
						  <label class="control-label col-sm-3">Select Item:</label>
							<div class="col-sm-8"> 
								<select id="idSelectGroceryRequest" class="form-control" name="item" required onchange="selectItemChangeGrocery(this)">
									<option selected disabled value=""></option>
									<?php
										require ("connectDB.php");

										$sqlResult = mysqli_query($con,"SELECT name from items where type='grocery'");
										while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
											$itemDescription = $rows['name'];
											echo " <option value='$itemDescription'> $itemDescription</option> ";
										}
									?>
								</select>
							</div>
						</div>
						
						<div class="form-group">
						  <label class="control-label col-sm-3">Available Stock:</label>
							<div class="col-sm-3"> 
								<h4 id="displayItemStockGroceryRequest" class="form-control"></h4>
							</div>
							<label class="control-label col-sm-2" >New Stocks:</label>
							<div class="col-sm-3"> 
								<h4 class="form-control" style="color:red">{{newStock}}</h4>
							</div>
						</div>	

				<!--Departments-->
						<div class="form-group">
						  <label class="control-label col-sm-3">Department:</label>
							<div class="col-sm-5"> 
								<select id="selectDepartment2" class="form-control" name="department" required>
									<option selected disabled value=""></option>
									<?php
										require ("connectDB.php");
										$sqlResult = mysqli_query($con,"SELECT name from departments");

										while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
											$itemDescription = $rows['name'];
											echo " <option value='$itemDescription'> $itemDescription</option> ";
										}
									?>
								</select>
							</div>
							<a href="" data-toggle="modal" data-target="#modal-new-department">Add department</a>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3" >Quantity:</label>
								<div class="col-sm-3	"> 
									<input id="idQuantityRequestGrocery" ng-model="newQuantity" ng-change="myFunction()" id="maxQuantityGrocery" type="number" name="quantity" class="form-control" min="1" required>
								</div>
							
							
						</div>
							<div class=" modal-footer"> 
									<button type="submit" class="btn btn-default " >Checkout</button>
								</div>

						
					</form>
				</div>
			<!--form for request in office supplies category div-->
				<div id="formOfficeSuppliesDivRequest" style="display:none" ng-controller="officeSuppliesRequestAppCtrl">
					<form class="form-horizontal" method="post" action="formRequest.php">
						
						<div class="form-group">
							<label class="control-label col-sm-3" >Date:</label>
								<div class="col-sm-4"> 
									<input type="date" name="date" class="form-control" required>
								</div>
						</div>

						
						<div class="form-group">
						  <label class="control-label col-sm-3">Select Item:</label>
							<div class="col-sm-8"> 
								<select id="idSelectOfficeSuppliesRequest" class="form-control" name="item" required onchange="selectItemChangeOfficeSupplies(this)">
									<option selected disabled value=""></option>
									<?php
										require ("connectDB.php");
										$sqlResult = mysqli_query($con,"SELECT name from items where type='office supplies'");

										while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
											$itemDescription = $rows['name'];
											echo " <option value='$itemDescription'> $itemDescription</option> ";
										}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
						  <label class="control-label col-sm-3">Available Stock:</label>
							<div class="col-sm-3"> 
								<h4 id="displayItemStockOfficeSuppliesRequest" class="form-control"></h4>
							</div>
							<label class="control-label col-sm-2" >New Stocks:</label>
							<div class="col-sm-3"> 
								<h4 class="form-control" style="color:red">{{newStock}}</h4>
							</div>
						</div>	
			<!--Departments-->
						<div class="form-group">
						  <label class="control-label col-sm-3">Department:</label>
							<div class="col-sm-5"> 
								<select id="selectDepartment3" class="form-control" name="department" required>
									<option selected disabled value=""></option>
									<?php
										require ("connectDB.php");
										$sqlResult = mysqli_query($con,"SELECT name from departments");

										while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
											$itemDescription = $rows['name'];
											echo " <option value='$itemDescription'> $itemDescription</option> ";
										}
									?>
								</select>
							</div>
							<a href="" data-toggle="modal" data-target="#modal-new-department">Add department</a>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3" >Quantity:</label>
								<div class="col-sm-3	"> 
									<input id="idQuantityRequestOfficeSupplies" ng-model="newQuantity" ng-change="myFunction()" id="maxQuantityOfficeSupplies" type="number" name="quantity" class="form-control" min="1" required>
								</div>
								
						</div>
						
							<div class=" modal-footer"> 
									<button type="submit" class="btn btn-default " >Checkout</button>
								</div>
					</form>
				</div>
			<!--form for request in office equipment category div-->	
				<div id="formOfficeEquipmentDivRequest" style="display:none" ng-controller="officeEquipmentRequestAppCtrl">
					<form class="form-horizontal" action="formRequest.php" method="post">
						
						<div class="form-group">
							<label class="control-label col-sm-3" >Date:</label>
								<div class="col-sm-4"> 
									<input type="date" name="date" class="form-control" required>
								</div>
						</div>
						
						<div class="form-group">
						  <label class="control-label col-sm-3">Select Item:</label>
							<div class="col-sm-8"> 
								<select id="idSelectOfficeEquipmentRequest" required class="form-control" name="item" onchange="selectItemChangeOfficeEquipment(this)">
									<option selected disabled value=""></option>
									<?php
										require ("connectDB.php");
										$sqlResult = mysqli_query($con,"SELECT name from items where type='office equipments'");

										while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
											$itemDescription = $rows['name'];
											echo " <option value='$itemDescription'> $itemDescription</option> ";
										}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
						  <label class="control-label col-sm-3">Available Stock:</label>
							<div class="col-sm-3"> 
								<h4 id="displayItemStockOfficeEquipmentRequest" class="form-control"></h4>
							</div>
							<label class="control-label col-sm-2" >New Stocks:</label>
							<div class="col-sm-3"> 
								<h4 class="form-control" style="color:red">{{newStock}}</h4>
							</div>
						</div>	
		<!--Departments-->
						<div class="form-group">
						  <label class="control-label col-sm-3">Department:</label>
							<div class="col-sm-5"> 
								<select id="selectDepartment4" class="form-control" name="department" required>
									<option selected disabled value=""></option>
									<?php
										require ("connectDB.php");
										$sqlResult = mysqli_query($con,"SELECT name from departments");

										while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
											$itemDescription = $rows['name'];
											echo " <option value='$itemDescription'> $itemDescription</option> ";
										}
									?>
								</select>
							</div>
							
							<a href="" data-toggle="modal" data-target="#modal-new-department">Add department</a>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-3" >Quantity:</label>
								<div class="col-sm-3	"> 
									<input id="idQuantityRequestOfficeEquipment" ng-model="newQuantity" ng-change="myFunction()" type="number" name="quantity" class="form-control" min="1" required>
								</div>
								

						</div>
							<div class=" modal-footer"> 
									<button type="submit" class="btn btn-default " >Checkout</button>
								</div>
						
					</form>
				</div>
			</div>
		
			
		</div>
	</div>
</div>	
	
<!--Add item modal-->
<div class="modal fade" id="modal-new-item">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Add Item</h4>
			</div>
			
			<div class="modal-body">
				
				<div >
					<form class="form-horizontal" action="addItem.php" method="POST">
							<div class="form-group">
								<label class="control-label col-sm-3" >Name:</label>
									<div class="col-sm-8"> 
										<input type="text" name="itemName" class="form-control" required>
									</div>
							</div>
						<div class="form-group">
							<label class="control-label col-sm-3">Type:</label>
								<div class="col-sm-4">
									<select class="form-control" name="itemType" required>
										<option selected disabled value=""></option>
										<option value="Main">Main</option>
										<option value="Grocery">Grocery</option>
										<option value="Office Supplies">Office Supplies</option>
										<option value="Office Equipments">Office Equipments</option>
									</select>
								</div>

						</div>
	
						<div class=" modal-footer"> 
							<button type="submit" class="btn btn-default ">Add</button>
						</div>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>

<!-- DEPARTMENT modals -->
<div class="modal fade" id="modal-new-department" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">NEW DEPARTMENT</h4>
			</div>
			
			<div class="modal-body" >
				<form action="addDepartment.php" method="post">
				<div class="form-group">
					<label class="control-label col-sm-3" >Name:</label>
						<div class="col-sm-4"> 
							<input id="departmentId" type="text" name="name" class="form-control" required>
						</div>
				</div>
				<br>
				<div class=" modal-footer"> 
					<button type="submit" class="btn btn-default" >add</button>
				</div>
				
				</form>
			</div>
			
			
			
			
		</div>
	</div>
</div>
	
		
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<!--AngularJs javascript-->
	<script src="js/myApps.js"></script>
	<script src="js/myControllers.js"></script>

</body>
	<script src="js/main.js"></script>
</html>
