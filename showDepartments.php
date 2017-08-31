<?php
	require ("connectDB.php");
	$month = file_get_contents("php://input");

	$sql = "SELECT dept_id, name from departments";
	$sqlResult = mysqli_query($con,$sql);

	if( $sqlResult->num_rows > "0" ){

		while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
			$dept_id = $rows['dept_id'];
			$name = $rows['name'];

			echo "<div id='$name' class='department' class='col-lg-12'>";
			echo "<h2>$name</h2>";

			echo "<table id='historyTable' class='table table-bordered table-hover table-striped'>";
			echo "	<thead>";
			echo "		<tr>";
			echo "			<th>Items</th>";
			echo "			<th>Quantity</th>";
			echo "			<th>Unit Cost</th>";
			echo "			<th>Total Cost</th>";
			echo "		</tr>";
			echo "	</thead>";

			echo "	<tbody>";

			$sqlResultItems = mysqli_query($con,"SELECT items.item_id as item, items.name as name from items join requests using(item_id) where dept_id='$dept_id'");

			$total_amount = "0";

			while ( $row2 = mysqli_fetch_assoc($sqlResultItems)  ) {
				$item_id = $row2['item'];
				$name = $row2['name'];

				$sqlResultRequest = mysqli_query($con,"SELECT sum(quantity) from requests where item_id='$item_id'");
				$result2 = mysqli_fetch_assoc($sqlResultRequest);

				$sqlResultPrice = mysqli_query($con,"SELECT price from purchase where item_id='$item_id' order by date desc limit 1");
				$result3 = mysqli_fetch_assoc($sqlResultPrice);

				$request = $result2['sum(quantity)'];
				$price = $result3['price'];
				$total_cost = $request * $price;
				$total_amount += $total_cost;

				echo "
					<tr>
						<td>$name</td>
						<td>$request</td>		
						<td>$price</td>	
						<td>$total_cost</td>
					</tr>	
				";
			}


			echo "	</tbody>";

			echo "</table>";

			echo "<h3><b>Total Amount: &#8369</b>$total_amount</h3>";

			echo "<br/><hr/>";

			echo "</div>";
		}


	}else{
		echo "no result";
	}

?>