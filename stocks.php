<!DOCTYPE html>
<html lang="en">

<head>
    <script src="js/jquery.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
		Stocks as of
		<?php
			echo date('F d Y', strtotime(date("Y-m-d")));
		?>
	</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Custom Fonts -->
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

	<script src="js/main.js"></script>
    <script>
        function addInfoInForm(a){
            document.getElementById("itemName").value = a.parentNode.parentNode.childNodes[1].id;
            document.getElementById("oldPurchase").value = a.parentNode.parentNode.childNodes[5].id;
            document.getElementById("oldUnitCost").value = a.parentNode.parentNode.childNodes[13].id;
        }
    
    </script>
</head>

<body>

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
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="active">
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
            
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>STOCKS as of  
							<?php
								echo date('F d Y', strtotime(date("Y-m-d")));
							?>
							</small>
                        </h1>

                    </div>
                </div>
        


                <div class="row">
                    
					<div class="col-lg-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Main</h3>
                            </div>
                            <div class="panel-body">
                                
                                <div class="text-center">
									<div class="huge">
									<?php
										require ("connectDB.php");
										$sqlResult = mysqli_query($con,"SELECT count(*) from items where type='main'");
										$rows = mysqli_fetch_assoc($sqlResult);
										echo $rows['count(*)'];
									?>
									</div>
									<p>items</p>
							<p id="viewButtonMain">View Details <i class="fa fa-arrow-circle-down"></i></p>
                                </div>
                            </div>
                        </div>
                    </div> 
					
                    <div class="col-lg-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Grocery</h3>
                            </div>
                            <div class="panel-body">
                                <div class="text-center">
									<div class="huge">
										<?php
											require ("connectDB.php");
											$sqlResult = mysqli_query($con,"SELECT count(*) from items where type='grocery'");
											$rows = mysqli_fetch_assoc($sqlResult);
											echo $rows['count(*)'];
										?>
									
									</div>
									<p>items</p>
							<p id="viewButtonGrocery">View Details <i class="fa fa-arrow-circle-down"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>               
	
                    <div class="col-lg-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Office Supplies</h3>
                            </div>
                            <div class="panel-body">
                               
                                 <div class="text-center">
									<div class="huge">
										<?php
											require ("connectDB.php");
											$sqlResult = mysqli_query($con,"SELECT count(*) from items where type='office supplies'");
											$rows = mysqli_fetch_assoc($sqlResult);
											echo $rows['count(*)'];
										?>
									 
									 </div>
									 <p>items</p>
						<p id="viewButtonOfficeSupplies">View Details <i class="fa fa-arrow-circle-down"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Office Equipment</h3>
                            </div>
                            <div class="panel-body">
                               
                                 <div class="text-center">
									<div class="huge">
										<?php
											require ("connectDB.php");
											$sqlResult = mysqli_query($con,"SELECT count(*) from items where type='office equipments'");
											$rows = mysqli_fetch_assoc($sqlResult);
											echo $rows['count(*)'];
										?>
									 
									 </div>
									 <p>items</p>
						<p id="viewButtonOfficeEquipment">View Details <i class="fa fa-arrow-circle-down"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
	
                </div>
               

					<div id="main" class="col-lg-12">
						<h2>Main</h2>

							<table id="categoryMainTable" class="table table-bordered table-hover table-striped">
								<thead>
									<tr>
										<th>Item name</th> 
										<th>Beginning Inventory</th>
										<th>Purchase</th> 
										<th>Total Quantity</th> 
										<th>Total Used</th> 
										<th>Total Stock</th>
										<th>Unit Cost</th>
										<th>Total Cost</th>
                                        <th>Action</th>


									</tr>
								</thead>

								<tbody>
								</tbody>
							</table>

				  </div>
				
				
				     <div id="grocery" class="col-lg-12">
                        <h2>Grocery</h2>

                            <table id="categoryGroceryTable" class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
										<th>Item name</th> 
										<th>Beginning Inventory</th>
										<th>Purchase</th> 
										<th>Total Quantity</th> 
										<th>Total Used</th> 
										<th>Total Stock</th>
										<th>Unit Cost</th>
										<th>Total Cost</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>

                    </div>
             
       

               
                    <div id="officeSupplies" class="col-lg-12">
                        <h2>Office Supplies</h2>

                            <table id="categoryOfficeSuppliesTable" class="table table table-bordered table-hover">
                                <thead>
                                    <tr>
                                       <th>Item name</th> 
										<th>Beginning Inventory</th>
										<th>Purchase</th> 
										<th>Total Quantity</th> 
										<th>Total Used</th> 
										<th>Total Stock</th>
										<th>Unit Cost</th>
										<th>Total Cost</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>

                    </div>
				
                    <div id="officeEquipment" class="col-lg-12">
                        <h2>Office Equipment</h2>

                            <table id="categoryOfficeEquipmentTable" class="table table-hover table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Item name</th> 
										<th>Beginning Inventory</th>
										<th>Purchase</th> 
										<th>Total Quantity</th> 
										<th>Total Used</th> 
										<th>Total Stock</th>
										<th>Unit Cost</th>
										<th>Total Cost</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                    </div>
				
					</div>
						
            </div>
		
        </div>
     
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

//modal
<div class="modal fade" id="modal-edit-stock">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				
			</div>
			
			<div class="modal-body" >
                <form class="form-horizontal" action="editStock.php" method="post">
                        Item Name:<input id="itemName" type="text" class="form-control" name="itemName" readonly>
                        Old Purchase:<input id="oldPurchase" type="text" class="form-control" name="oldPurchase" readonly>
                        Old Unit Cost:<input id="oldUnitCost" type="text" class="form-control" name="oldUnitCost" readonly>
                        <hr>
                        <h4 class="modal-title" style="color:red">EDIT</h4>
						<div class="form-group">
							<label class="control-label col-sm-3" >Purchase:</label>
								<div class="col-sm-4"> 
									<input type="number" name="newPurchase" class="form-control"  required>
								</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-sm-3" >Unit Cost:</label>
								<div class="col-sm-4"> 
									<input type="" name="newUnitCost" class="form-control" required>
								</div>
						</div>
						<div class=" modal-footer"> 
							<button type="submit" class="btn btn-default " >Save</button>
						</div>
						
					</form>
            </div>
        </div>
    </div>
</div>
    
    
</body>

</html>
