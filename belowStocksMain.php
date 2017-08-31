<?php
require_once("connectDB.php");

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
			echo "
					<tr>
						<td>$name</td>				
						<td bgcolor='#ff8080'>$total_stocks</td>
					</tr>	
				";
			
		}else{
		
				
			
		}
	}
	
}		
?>