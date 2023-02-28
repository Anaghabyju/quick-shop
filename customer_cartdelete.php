<?php
include 'connectr.php';
$tex=$_GET['id'];
mysqli_query($con,"DELETE FROM cart_tbl WHERE product_id='$tex'");
header("location:customer_cart.php");
?>