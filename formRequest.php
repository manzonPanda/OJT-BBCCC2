<?php
require_once("connectDB.php");

$date = $_POST['date'];
$item = $_POST['item'];
$department = $_POST['department'];
$quantity = $_POST['quantity'];

$sqlResult = mysqli_query($con,"SELECT item_id from items where name='$item'");
$row = mysqli_fetch_assoc($sqlResult);
$item_id = $row['item_id'];

$sqlResult2 = mysqli_query($con,"SELECT quantity from stocks where item_id='$item_id'");
$row2 = mysqli_fetch_assoc($sqlResult2);
$stock = $row2['quantity'];

$sqlResult3 = mysqli_query($con,"SELECT dept_id from departments where name='$department'");
$row3 = mysqli_fetch_assoc($sqlResult3);
$dept_id = $row3['dept_id'];

$sqlResult4 = mysqli_query($con,"SELECT price from purchase join items using(item_id) where name='$item' order by date desc limit 1");
$row4 = mysqli_fetch_assoc($sqlResult4);
$price = $row4['price'];

$total_cost = $quantity * $price;
$total_stocks = $stock - $quantity;
//echo $date . " " . $item_id . " " . $price . " " . $quantity . " " . $department . " " . $total_cost ;

$sqlResult = mysqli_query($con,"insert into requests(date,dept_id,item_id,quantity,total_cost) values ('$date','$dept_id','$item_id','$quantity','$total_cost')");
$sqlResult = mysqli_query($con,"update stocks set quantity='$total_stocks' where item_id=$item_id");
header('location:index.php');


?>