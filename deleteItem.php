<?php
require_once("connectDB.php");
$item_name = file_get_contents("php://input");

//sql


$sqlDelete = mysqli_query($con,"Delete from items where name='$item_name'");

?>