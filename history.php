<!DOCTYPE html>
<html lang="en">

<head>
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
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!--jquery-->
	<script src="js/jquery-1.12.4.js"></script>
	<!--plugin DataTable-->
    <script src="js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">

	<!--Column Reorder for DataTable-->
	<link rel="stylesheet" type="text/css" href="css/colReorder.dataTables.min.css"/>
	<script type="text/javascript" src="js/dataTables.colReorder.min.js"></script>

	<!--Responsiveness for DataTable-->
	<link rel="stylesheet" type="text/css" href="css/responsive.dataTables.min.css"/>
	<script type="text/javascript" src="js/dataTables.responsive.min.js"></script>

	<!--Key Table for DataTable-->
	<link rel="stylesheet" type="text/css" href="css/keyTable.dataTables.min.css"/>
	<script type="text/javascript" src="js/dataTables.keyTable.min.js"></script>

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
            <!-- Top Menu Items -->
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
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
					<li class="active">
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
                        <h2 class="page-header">
                            Detailed Withdrawal & Purchase of Office Supplies & Equipment
							<br>
							<small>As of  
							<?php
								echo date('F d Y', strtotime(date("Y-m-d")));
							?>
							</small>

                        </h2>

                    </div>
                </div>

				<div id="main" class="col-lg-12">
	
				<button class="btn btn-default btn-lg " id="displayINhistory">IN
				
				</button>
				<button class="btn btn-default btn-lg " id="displayOUThistory">OUT

				</button>

				<br><br><br>
				  </div>
				
					<div id="displayINhistoryDiv" class="col-lg-12" style="display:none">
							<table id="displayINhistoryTable" class="table table-bordered table-hover table-striped">
								<thead>
									<tr>
										<th>Item</th> 
										<th>Unit Cost</th>
										<th>Quantity</th>
										<th>Total Cost</th>
										<th>Supplier</th>
										<th>Date</th>
									</tr>
								</thead>

								<tbody>
								</tbody>
							</table>

				  </div>
				
				<div id="displayOUThistoryDiv" class="col-lg-12" style="display:none">
							<table id="displayOUThistoryTable" class="table table-bordered table-hover table-striped">
								<thead>
									<tr>
										<th>Department</th> 
										<th>Item</th>
										<th>Quantity</th>
										<th>Total Cost</th>
										<th>Date</th>
									</tr>
								</thead>

								<tbody>
								</tbody>
							</table>

				  </div>

                </div>

            </div>

    </div>

</body>
	<script src="js/main.js"></script>
</html>
