<?php 
include 'connectr.php';
session_start();
$row=$_GET['id'];
$cust= $_SESSION['log'];  
$data=mysqli_query($con,"SELECT * FROM complaint_tbl INNER JOIN product_tbl ON complaint_tbl.product_id=product_tbl.product_id WHERE  complaint_tbl.login_id='$cust'AND product_tbl.product_id='$row' ");
// var_dump($data);
// exit();
if(isset($_POST['b1'])){
    $complaint=$_POST['p1'];
    $cust= $_SESSION['log'];  
    $id=$_GET['id'];
    mysqli_query($con,"INSERT INTO complaint_tbl(login_id,product_id,complaint)VALUES('$cust','$id','$complaint') ");

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: bottom;
  width: 900px;
  
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 60px;
  height: auto;
}

div.desc {
  padding: 17px;
  /* text-align: center; */
}
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <?php
  include 'customer_navbar.php';
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
  include 'customer_sidebar.php';
  ?>
      <!-- /.sidebar-menu -->
    
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Dashboard</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right"> -->
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="col-sm-18">
    <div class="card-body login-card-body">
    <div class="col-sm-6">
    <div class="card-body register-card-body">

    <?php
    while($var=mysqli_fetch_assoc($data)){?>
    <tr>

    <div class="gallery">
     <img src="./img/<?php echo $var['image']?> "height='30px'width='30px'><div class="desc"><b><?php echo $var['name']?></b><br>
    complaint: <?php echo $var['complaint']?><br> Replay:<?php echo $var['replay']?></div></td><br>
    
     </div>
     </tr>
      <?php
    }?>

      
       
          <div class="input-group-append">
            <!-- <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div> -->
          </div>
        </div>

      <form  method="post">
    <div class="input-group mb-3">
          <textarea rows="3" cols="8" required class="form-control" name="p1"placeholder="add complaint"></textarea>
          <div class="input-group-append">
        
          </div>
        </div>
        <div class="col-4">
            <button type="submit" name="b1"class="btn btn-primary btn-block">ADD</button>
          </div>
</form>
    <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
