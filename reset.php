<!DOCTYPE html>
<html lang="en">
<body>
	
	<?php
	require ("connectDB.php");
	$prevDate = date("Y-m-d");
	$password = $_POST['password'];

	if($password == "admin"){

		$sql = "SELECT item_id, quantity from stocks";
		$sqlResult = mysqli_query($con,$sql);

		if( $sqlResult->num_rows > "0" ){

			while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
				$item_id = $rows['item_id'];
				$quantity = $rows['quantity'];

				$updateBI = mysqli_query($con,"Update beginning_inv set quantity='$quantity' where item_id='$item_id'");
				$updateStocks = mysqli_query($con,"Update stocks set quantity='0' where item_id='$item_id'");
				$updateDate = mysqli_query($con,"Update prevdate set date='$prevDate'");
			}
		}

		header ("location:success.php");

	}else{
		header("location:error.php");
	}


	?>
	
</body>
</html>

