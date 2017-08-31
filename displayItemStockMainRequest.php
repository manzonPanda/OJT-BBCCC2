<?php
$item = file_get_contents("php://input");
require_once("connectDB.php");

$sqlResult = mysqli_query($con,"SELECT quantity from stocks join items using(item_id) where type='Main' AND name='$item' ");
$sqlResultBeg = mysqli_query($con,"SELECT quantity from beginning_inv join items using(item_id) where type='Main' AND name='$item' ");
$sqlResultPrice = mysqli_query($con,"SELECT price from purchase join items using(item_id) where name='$item' order by date desc limit 1");
$row = mysqli_fetch_assoc($sqlResult);
$rowBeg = mysqli_fetch_assoc($sqlResultBeg);
$rowPrice = mysqli_fetch_assoc($sqlResultPrice);
$quantity = $row['quantity'] + $rowBeg['quantity'];

if($rowPrice < "1"){
	echo $quantity."-0.00";

}else{
	echo $quantity."-".$rowPrice['price'];

}



?>