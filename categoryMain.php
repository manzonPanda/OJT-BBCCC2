<?php
require ("connectDB.php");
$year = date("Y");
$sqlResultPrevDate = mysqli_query($con,"SELECT date from prevdate");
$resultDate = mysqli_fetch_assoc($sqlResultPrevDate);
$prevDate = $resultDate['date'];

$sql = "SELECT items.item_id as item_id, name from items where type='Main'";
$sqlResult = mysqli_query($con,$sql);

if( $sqlResult->num_rows > "0" ){

	while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
        $item_id = $rows['item_id'];
		$name = $rows['name'];
		
		$sqlResultBeg = mysqli_query($con,"SELECT quantity from beginning_inv where item_id='$item_id'");
		$result1 = mysqli_fetch_assoc($sqlResultBeg);
		
		$sqlResultStocks = mysqli_query($con,"SELECT sum(quantity) from purchase where item_id='$item_id' and date>'$prevDate'");
		$result2 = mysqli_fetch_assoc($sqlResultStocks);
		
		$sqlResultRequest = mysqli_query($con,"SELECT sum(quantity) from requests where item_id='$item_id' and date>'$prevDate'");
		$result3 = mysqli_fetch_assoc($sqlResultRequest);
		
		$sqlResultPrice = mysqli_query($con,"SELECT price from purchase where item_id='$item_id' order by date desc limit 1");
		$result4 = mysqli_fetch_assoc($sqlResultPrice);
		
		$beginning_inv = $result1['quantity'];
		$stocks = $result2['sum(quantity)'];
		$request = $result3['sum(quantity)'];
		$price = $result4['price'];
		
		if( $request == null){
			$request = 0;
		}
		
		if( $stocks == null){
			$stocks = 0;
		}
		
		$total_quantity = $beginning_inv + $stocks;
        $total_stocks = $total_quantity - $request;
		$total_cost = $request * $price;
		
		
		echo "
			<tr>
				<td id='$name'>$name</td>
				<td>$beginning_inv</td>		
				<td id='$stocks'>$stocks</td>	
				<td>$total_quantity</td>
				<td>$request</td>
				<td>$total_stocks</td>
				<td id='$price'>$price</td>
				<td>$total_cost</td>
				<td>
					<button onclick='addInfoInForm(this)' data-toggle='modal'' data-target='#modal-edit-stock' class='btn btn-danger btn-xs'>Edit
						<span class='glyphicon glyphicon-edit' aria-hidden='true'></span>
					</button>
				</td>
                
			</tr>	
		";

//				<td>
//					<button type='button' class='btn btn-warning btn-xs'>Edit
//						<span class='glyphicon glyphicon-edit' aria-hidden='true'></span>
//					</button>
//				</td>

		
	}
	
	


	
}else{
	echo "
		<tr>
				<td></td>				
				<td></td>
				<td></td>				
				<td></td>
				<td></td>				
				<td></td>
				<td></td>				
				<td></td>
		</tr>
	";
}


?>