<?php
require_once("connectDB.php");
$oldName = ($_POST['oldName']);
$newName = ($_POST['newName']);

//sql
$sqlResult = mysqli_query($con,"update items set name='$newName' where name='$oldName'");

?>