<?php
require_once("connectDB.php");

$date = ($_POST['date']);
$item = ($_POST['item']);
$price = ($_POST['price']);
$supplier = ($_POST['supplier']);
$quantity = ($_POST['quantity']);

$sqlResult = mysqli_query($con,"SELECT item_id from items where name='$item'");
$row = mysqli_fetch_assoc($sqlResult);
$item_id = $row['item_id'];

$sqlResult = mysqli_query($con,"SELECT quantity from stocks where item_id='$item_id'");
$row2 = mysqli_fetch_assoc($sqlResult);
$stock = $row2['quantity'];

$total_cost = $quantity * $price;
$total_stocks = $stock + $quantity;
//echo $date . " " . $item_id . " " . $price . " " . $quantity . " " . $supplier . " " . $total_cost ;

$sqlResult = mysqli_query($con,"insert into purchase(date,item_id,price,quantity,supplier,total_cost) values ('$date','$item_id','$price','$quantity','$supplier','$total_cost')");
$sqlResult = mysqli_query($con,"update stocks set quantity='$total_stocks' where item_id=$item_id");
header('location:index.php');


?>