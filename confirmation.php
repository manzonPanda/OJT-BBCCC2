<!DOCTYPE html>
<html lang="en">
	<head>
	    <!-- Font-Awesome -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		
    <!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

	</head>
<body>

	
<div class="container text-center">
	<div class="row" >
		<div class="col-sm-12" >

			<i class="fa fa-cog fa-spin  fa-5x"></i>

			<h1 class="successDetailsHeading" style="color:red;background-color:black">DATA RESET</h1>
			
	<form class="form-horizontal" action="reset.php" method="post">
		<div class="form-group">
			<label class="control-label col-sm-5" >Password:</label>
			<div class="col-sm-2">
				<input type="password" name="password" class="form-control" value="" required>
			</div>
		</div>
			<div class="form-group"> 
				<button type="submit" class="btn btn-danger">Continue</button>
			</div>
	</form>

			<div class="form-group">
				<a href="index.php">
					<button class="btn btn-success">GO HOME</button>
				</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>