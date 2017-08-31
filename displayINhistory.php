<?php
require_once("connectDB.php");
$year = date('Y');
$sqlResult = mysqli_query($con,"SELECT name, price, quantity, total_cost, supplier, date FROM purchase join items using(item_id) where YEAR(date)=$year order by date");
						  
if( $sqlResult->num_rows > "0" ){

	
	while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
        $name = $rows['name'];
		$price = $rows["price"];
		$quantity = $rows["quantity"];
		$total_cost = $rows["total_cost"];
		$supplier = $rows["supplier"];
		$date = $rows["date"];
		
		echo "
			<tr>
				<td>$name</td>				
				<td>$price</td>
				<td>$quantity</td>
				<td>$total_cost</td>
				<td>$supplier</td>
				<td>$date</td>
			</tr>	
		";
		
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
		</tr>
	";
}


?>