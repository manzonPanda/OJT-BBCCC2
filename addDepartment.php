<?php

$name = $_POST['name'];
require_once("connectDB.php");

$sqlResult = mysqli_query($con,"insert into departments(name) values ('$name')");
header("location:index.php");
?>