<?php
$item = file_get_contents("php://input");
require_once("connectDB.php");

$sqlResult = mysqli_query($con,"SELECT quantity from stocks join items using(item_id) where type='office equipments' AND name='$item' ");
$sqlResultPrice = mysqli_query($con,"SELECT price from purchase join items using(item_id) where name='$item' order by date desc limit 1");
$row = mysqli_fetch_assoc($sqlResult);
$rowPrice = mysqli_fetch_assoc($sqlResultPrice);

if($rowPrice < "1"){
	echo $row['quantity']."-0.00";

}else{
	echo $row['quantity']."-".$rowPrice['price'];

}



?>