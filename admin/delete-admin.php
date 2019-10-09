<?php 
include("includes/header.php");
include("includes/config.php");

$id=$_GET['del'];
mysqli_query($con,"DELETE FROM users WHERE id='$id'");
header("location:admin.php");

$id=$_GET['del'];
mysqli_query($con,"DELETE FROM application WHERE id='$id'");
header("location:admin.php");
?>