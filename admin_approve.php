<?php 
include 'connectr.php';
$del=$_GET['id'];
$drow=mysqli_query($con,"UPDATE shop_tbl SET status='approve' WHERE shop_id='$del'");
header("location:admin_shop.php");
?>