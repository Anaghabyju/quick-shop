<?php
include 'connectr.php';

$oid=$_GET['id']; 
$del=mysqli_query($con,"UPDATE order_tbl SET status='reject' WHERE order_id='$oid'");
header("location:shop_approve.php");
?>