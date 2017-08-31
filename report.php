<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BBCCC - Inventory System Report </title>

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
        
	
 	<!--button extension for DataTable-->
 	<script src="js/dataTables.buttons.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css">
    <script src="js/buttons.html5.min.js"></script>
    <script src="js/jszip.min.js"></script>
    <script src="js/pdfmake.min.js"></script>
    <script src="js/buttons.print.min.js"></script>
    <script src="js/vfs_fonts.js"></script>
    <script src="js/buttons.flash.min.js"></script>
    <script src="js/buttons.colVis.min.js"></script>
    

    
    
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

					<li class="active">
                        <a href="report.php"><i class="fa fa-pie-chart"></i>Reports</a>
                    </li>
					<li >
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
                        <h2 class="page-header" >
                           OFFICE SUPPLIES & EQUIPMENT EXPENSE
                        </h2>

                    </div>
                </div>
				
				<div class="row">
                    <div style="float:right" class="col-lg-2">
						<select class="form-control" onchange="showDepartments(this)">
							<option value='all'>Show All</option>
							
							<?php
								require ("connectDB.php");
								$year = date("Y");
								$sqlResultPrevDate = mysqli_query($con,"SELECT date from prevdate");
								$resultDate = mysqli_fetch_assoc($sqlResultPrevDate);
								$prevDate = $resultDate['date'];

								$sql = "SELECT distinct(requests.dept_id) as dept_id, name from departments join requests using(dept_id) where date>'$prevDate'";
								$sqlResult = mysqli_query($con,$sql);

								while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
									$dept_id = $rows['dept_id'];
									$name = $rows['name'];

									echo "<option value='$name'>$name</option>";
									
								}
							
							?>
						</select>
					</div>
				</div>

				<div id="departments">
					<?php
					require ("connectDB.php");
					$year = date("Y");
					$sqlResultPrevDate = mysqli_query($con,"SELECT date from prevdate");
					$resultDate = mysqli_fetch_assoc($sqlResultPrevDate);
					$prevDate = $resultDate['date'];
	
					$sql = "SELECT distinct(requests.dept_id) as dept_id, name from departments join requests using(dept_id) where date>'$prevDate'";
					$sqlResult = mysqli_query($con,$sql);

					if( $sqlResult->num_rows > "0" ){
						$counter = 0;
						
						while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
							$dept_id = $rows['dept_id'];
							$name = $rows['name'];
							$month = "";
							$total = 0;
							$counter++;
							
							echo "<div name='$name'>";
								echo "<h2 style='color:blue'>$name</h2>";
							echo "</div";
							
							for($i=1; $i<13; $i++){
								$sqlResultMonth = mysqli_query($con,"SELECT * from items join requests using(item_id) where dept_id='$dept_id' AND MONTH(`date`)='$i'  AND date>'$prevDate'");
								
								
								if( $sqlResultMonth->num_rows > "0" ){
									
									switch($i){
										case 1:
											$month = "JANUARY";
											
											break;
										case 2:
											$month = "FEBRUARY";
											
											break;
										case 3:
											$month = "MARCH";
											
											break;
										case 4:
											$month = "APRIL";
											
											break;
										case 5:
											$month = "MAY";
											
											break;
										case 6:
											$month = "JUNE";
											
											break;
										case 7:
											$month = "JULY";
											
											break;
										case 8:
											$month = "AUGUST";
											
											break;
										case 9:
											$month = "SEPTEMBER";
											
											break;
										case 10:
											$month = "OCTOBER";
											
											break;
										case 11:
											$month = "NOVEMBER";
											
											break;
										case 12:
											$month = "DECEMBER";
											
											break;
									}
									echo "<div id='$name' class='department' name='$name' class='col-lg-12'>";

									echo "<table id='$name$i' class='table table-bordered table-hover table-striped'>";
									echo "	<thead>";
									echo "		<tr>";
									echo "			<th colspan='5' style='text-align:center'><h4>$month</h4></th>";
									echo "		</tr>";
									echo "		<tr>";
									echo "			<th>Items</th>";
									echo "			<th>Quantity</th>";
									echo "			<th>Date</th>";
									echo "			<th>Unit Cost</th>";
									echo "			<th>Total Cost</th>";
									echo "		</tr>";
									echo "	</thead>";

									echo "	<tbody>";

									$sqlResultItems = mysqli_query($con,"SELECT items.item_id as item, items.name as name, date, quantity from items join requests using(item_id) where dept_id='$dept_id' AND MONTH(`date`)='$i' AND date>'$prevDate' order by date");

									$total_amount = "0";

									while ( $row2 = mysqli_fetch_assoc($sqlResultItems)  ) {
										$item_id = $row2['item'];
										$item_name = $row2['name'];
										$date = $row2['date'];
										$quantity = $row2['quantity'];


										$sqlResultPrice = mysqli_query($con,"SELECT price from purchase where item_id='$item_id' order by date desc limit 1");
										$result3 = mysqli_fetch_assoc($sqlResultPrice);

										$price = $result3['price'];
										$total_cost = $quantity * $price;
										$total_amount += $total_cost;
										
										echo "
											<tr>
												<td>$item_name</td>
												<td>$quantity</td>	
												<td>$date</td>
												<td>$price</td>	
												<td>$total_cost</td>
											</tr>	
										";
									}
									$total += $total_amount;

									echo "	</tbody>";
									echo "</table>";
									echo "<h4><b>Total amount for $month: &#8369</b>$total_amount</h4>";
									echo "<input type='hidden' id='counter' value='$counter'>";
									echo "<br/>";
									echo "</div>";
								}
							}
							echo "<div name='$name'>";
								echo "<h3 id='$name.2'><b>Total: &#8369</b>$total</h3>";
								echo "<br/><hr/>";
							echo "</div>";
							
						}

					}else{
						echo "no result";
					}
					
					?>
					

                </div>
			</div>
		</div>
	</div>

	<script src="js/main.js"></script>

</body>
	<script>
		//	//create data tables for all tables in report.php
		var ids = document.querySelectorAll('table[id]');
		var allId = ids.length;
		for(var i = 0; i< allId;i++){
			var tables = (ids[i]);
			var tableId = tables.getAttribute("id");
            var department = tableId.substring(0,tableId.length-1);
            var month = document.getElementById(tableId).childNodes[1].childNodes[1].childNodes[1].textContent;
            var amouontForMonth = document.getElementById(tableId).nextSibling.innerText;

            
            //if tableId has character of '&', change the '&' to 'and'
            if(/&/.test(tableId)){
                var oldId = tableId;
                tableId = tableId.replace(/ /g,'');
                var myArray = tableId.split("&");
                
                document.getElementById(oldId).setAttribute("id",myArray[0]+"and"+myArray[1]);
                var newId = myArray[0]+"and"+myArray[1];
               // alert(newId.length);
                 $('#'+newId).DataTable({
                    destroy: true, //destroy DataTable for reinitialization
                    colReorder: true,   
                    dom: 'Bfrtip',
                    buttons: [{
                        extend:'excel',
                        title: "BBCCC Inventory Report-"+newId.substring(0,newId.length-1)+"("+month+")",
                        // messageTop: amouontForMonth
                        
                        },{
                        extend: 'pdf',
                         title: "BBCCC Inventory Report-"+newId.substring(0,newId.length-1)+"("+month+")",
                            message: amouontForMonth
                        },
                         {
                            extend:'print',
                            title:"BBCCC Inventory Report-"+department+"("+month+")",
                             message: "<h4>" + amouontForMonth + "</h4>",
                            customize: function ( win ) {
                                    $(win.document.body)
                                        .css( 'font-size', '11pt' )

                                    $(win.document.body).find( 'table' )
                                        .addClass( 'compact' )
                                        .css( 'font-size', 'inherit' );
                                }
                            
                        },'colvis'],
                    columnDefs: [ {
                        targets: -1,
                        visible: false
                    } ],
                    responsive: true,
                    keys: true
			     });
            continue;
              
            }
            //if tableId has character of ' ', change the ' ' to '_'
            if(/ /.test(tableId)){
                var oldId = tableId;
                tableId = tableId.replace(/ /g,'_');
                
                document.getElementById(oldId).setAttribute("id",tableId);
               // alert(newId.length);
                 $('#'+tableId).DataTable({
                    destroy: true, //destroy DataTable for reinitialization
                    colReorder: true,   
                    dom: 'Bfrtip',
                    buttons: [{
                        extend:'excel',
                        title: "BBCCC Inventory Report-"+department+"("+month+")",
                        // messageTop: amouontForMonth
                        
                        },{
                        extend: 'pdf',
                         title: "BBCCC Inventory Report-"+department+"("+month+")",
                        message: amouontForMonth
                        },
                         {
                            extend:'print',
                            title:"BBCCC Inventory Report-"+department+"("+month+")",
                             message: "<h4>" + amouontForMonth + "</h4>",
                             customize: function ( win ) {
                                    $(win.document.body)
                                        .css( 'font-size', '11pt' )

                                    $(win.document.body).find( 'table' )
                                        .addClass( 'compact' )
                                        .css( 'font-size', 'inherit' );
                                }
                            
                        },'colvis'],
                    columnDefs: [ {
                        targets: -1,
                        visible: false
                    } ],
                    responsive: true,
                    keys: true
			     });
            }

            
            
			$('#'+tableId).DataTable({
				destroy: true, //destroy DataTable for reinitialization
				colReorder: true,   
				dom: 'Bfrtip',
				buttons: [{
                            extend:'excel',
                            title: "BBCCC Inventory Report-"+department+"("+month+")",
                            // messageTop: amouontForMonth
                           
                        
                        }, {
                             extend: 'pdf',
                             title: "BBCCC Inventory Report-"+department+"("+month+")",
                            message: amouontForMonth
                            
                            
                        },
                        {
                            extend:'print',
                            title:"BBCCC Inventory Report-"+department+"("+month+")",
                            message: "<h4>" + amouontForMonth + "</h4>",
                             customize: function ( win ) {
                                    $(win.document.body)
                                        .css( 'font-size', '11pt' )

                                    $(win.document.body).find( 'table' )
                                        .addClass( 'compact' )
                                        .css( 'font-size', 'inherit' );
                                }
                            
                        }
                          ,{
                              extend:'colvis',
                              collectionLayout: 'fixed two-column'
                          }],
                columnDefs: [ {
                    targets: -1,
                    visible: false
                } ],
				responsive: true,
				keys: true
			});

		}
	</script>

</html>
