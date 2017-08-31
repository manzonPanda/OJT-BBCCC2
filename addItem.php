<?php
require_once("connectDB.php");
 $itemName = $_POST["itemName"];
 $itemType = $_POST["itemType"];

$sqlResult = mysqli_query($con,"insert into items(name,type) values ('$itemName','$itemType')");

$sqlResultID = mysqli_query($con,"select max(item_id) from items");
$result = mysqli_fetch_assoc($sqlResultID);
$id = $result['max(item_id)'];

$sqlb = mysqli_query($con,"insert into beginning_inv(item_id,quantity) values ('$id',0)");
$sqls = mysqli_query($con,"insert into stocks(item_id,quantity) values ('$id',0)");

header('location:index.php');









?>