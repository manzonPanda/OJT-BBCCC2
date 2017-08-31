<?php
require_once("connectDB.php");
$year = date('Y');
$sqlResult = mysqli_query($con,"SELECT dept_id, item_id, quantity, date, total_cost FROM requests where YEAR(date)=$year order by date");
						  
if( $sqlResult->num_rows > "0" ){

	
	while ( $rows = mysqli_fetch_assoc($sqlResult)  ) {
        $dept_id= $rows['dept_id'];
		$item_id = $rows["item_id"];
		$quantity = $rows["quantity"];
		$total_cost = $rows["total_cost"];
		$date = $rows["date"];
		
		$sqlResultDept = mysqli_query($con,"SELECT name FROM departments where dept_id='$dept_id'");
		$rows2 = mysqli_fetch_assoc($sqlResultDept);
		$dept_name = $rows2['name'];
		
		$sqlResultItem = mysqli_query($con,"SELECT name FROM items where item_id='$item_id'");
		$rows3 = mysqli_fetch_assoc($sqlResultItem);
		$item_name = $rows3['name'];
		
		echo "
			<tr>
				<td>$dept_name</td>				
				<td>$item_name</td>
				<td>$quantity</td>
				<td>$total_cost</td>
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
		</tr>
	";
}


?>