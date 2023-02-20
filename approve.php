<?php
include 'connectr.php';
$uid=$_GET['id']; 
$del=mysqli_query($con,"UPDATE order_tbl SET status='approve' WHERE order_id='$uid'");
header("location:shop_approve.php");
?>