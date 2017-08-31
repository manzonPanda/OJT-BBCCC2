<?php
require_once("connectDB.php");
$itemName   = ($_POST['itemName']);
$oldPurchase = ($_POST['oldPurchase']);
$oldUnitCost = ($_POST['oldUnitCost']);
$newPurchase = ($_POST['newPurchase']);
$newUnitCost = ($_POST['newUnitCost']);

//sql
$sqlResult = mysqli_query($con,"SELECT item_id from items where name='$itemName'");
$result1 = mysqli_fetch_assoc($sqlResult);
$item_id = $result1['item_id'];

$sqlUpdate = mysqli_query($con,"update purchase set price='$newUnitCost', quantity='$newPurchase' WHERE item_id='$item_id' and price='$oldUnitCost' and quantity='$oldPurchase'");

header("location: http://localhost/OJT-BBCCC-2.2/stocks.php");
?>