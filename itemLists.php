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
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!--jquery-->
	<script src="js/jquery-1.12.4.js"></script>
		<link href="style.css" rel="stylesheet">

	
	<script>
		function myFunction() {
		  // Declare variables
		  var input, filter, table, tr, td, i;
		  input = document.getElementById("myInputItem");
		  filter = input.value.toUpperCase();
		  table = document.getElementById("lists");
		  tr = table.getElementsByTagName("tr");

		  // Loop through all table rows, and hide those who don't match the search query
		  for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[0];
			if (td) {
			  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
			  } else {
				tr[i].style.display = "none";
			  }
			}
		  }
		}
		function addItemInForm(a){
			document.getElementById("oldName").value = a.id;
		}
		function deleteItem(a){
			var user = confirm(a.id + " will be removed.\nDo you want to continue ?");
			 if( user ){
				  var ajaxRequest;  // The variable that makes Ajax possible!
                        
                        try{
                          // Opera 8.0+, Firefox, Safari
                          ajaxRequest = new XMLHttpRequest();
                        } catch (e){
                          // Internet Explorer Browsers
                          try{
                            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                          } catch (e) {
                            try{
                              ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                            } catch (e){
                              // Something went wrong
                              alert("Your browser broke!");
                              return false;
                            }
                          }
                        }
                        // Create a function that will receive data sent from the server
                        ajaxRequest.onreadystatechange = function(){
                          if(ajaxRequest.readyState == 4){            
                            location.reload();

                          }
                        }
                        ajaxRequest.open("POST", "deleteItem.php",true);

                        var string = a.id;
                        ajaxRequest.send(string);

			 }else{
                  return false;
               }
		}
	</script>
</head>

<body >

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
					<li class="active">
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
				 <input class="form-control input-lg myInput" type="text" id="myInputItem" onkeyup="myFunction()" placeholder="Search item..." style="width:98%;border: 2px solid black">
			
				<?php
					require_once("connectDB.php");
					echo "
					 <table class='table table-hover table-responsive' id='lists'>
							
							<tr class='info' >
									<th colspan='3'>Item Name</th>
	
									
							</tr>
					";
					$sqlResult = mysqli_query($con,"SELECT name,item_id from items");
					while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
						$item_name = $rows['name'];
						$item_id = $rows['item_id'];
							echo "
							
								<tr>
									<td>$item_name</td>
									<td>
										<button id='$item_name' style='float:right; margin-right:5px' class='btn btn-danger'  data-toggle='modal' data-target='#modal-edit-stock' onclick='addItemInForm(this)'>Edit</button>
									</td>
								
									<td>
										<button id='$item_name' onclick='deleteItem(this)' margin-right:5px' class='btn btn-danger '><span class='glyphicon glyphicon-remove-sign'>Delete</button>
									</td>
								</tr>
							";
					}
				
				echo"</table>";
				
				?>
			</div>
		</div>
		
		
		
	</div>
	
	
<div class="modal fade" id="modal-edit-stock">
	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">EDIT</h4>
				</div>

				<div class="modal-body" >
					<form class="form-horizontal" action="editItem.php" method="post">
						<input id="oldName" type="text" class="form-control" name="oldName" readonly>
						<div class="form-group">
							<label class="control-label col-sm-3" >New name:</label>
								<div class="col-sm-6"> 
									<input type="text" name="newName" class="form-control" required>
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
	
	
	
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>	
</body>
		<script src="js/main.js"></script>
</html>