<?php
include 'connectr.php';
$data=mysqli_query($con,"SELECT * FROM order_tbl INNER JOIN customer_tbl ON order_tbl.customer_id=customer_tbl.login_id INNER JOIN product_tbl ON order_tbl.product_id=product_tbl.product_id where status='booking'");
 if(isset($_POST['approve'])){
 $oid=$_POST['order_id']; 
  // var_dump($oid);
  // exit();
 $del=mysqli_query($con,"UPDATE order_tbl SET status='approve' WHERE order_id='$oid'");
  if(mysqli_num_rows($del)){
    echo "<script>alert('this order was approved')</script>";
 }
 else{
  echo "<script>alert('this order was reject')</script>";
}
 }
?>


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
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <?php
  include 'shop_navbar.php';
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php
 include 'shop_sidebar.php';
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
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-11">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                <form method="post">
                <table class="table table-bordered" >
                  <thead>
                    <tr>
                      <th>oid</th>
                      <th>customer name</th>
                      <th>district</th>
                      <th>phone</th>
                      <th>product</th>
                      <th>quantity</th>
                      <th>order date</th>
                      <th>approve</th>
                      <th>reject</th>
                    
                      
                     
                    </tr>
                    <?php
                    while($var=mysqli_fetch_assoc($data)){?>
                  </thead>
                  <tbody>
                    <tr>
                    <td><?php echo $var['order_id']?></td>
                <!-- <td>  <input type="text" value="<?php echo $var['order_id']?>" name="oid"></td>  -->
                      <td><?php echo $var['customer_name']?></td>
                     
                      <td><?php echo $var['district']?></td>
                      <td><?php echo $var['phone']?></td>
                      <td><img src="./img/<?php echo $var['image']?> "height='80px'width='100px'></td>
                      <td><?php echo $var['available_quantity']?></td> 
                      <td><?php echo $var['date']?></td>
                      
                      <td><a href="approve.php?id=<?php echo $var['order_id']?>" class="btn btn-block btn-danger" name="b1">approve</button></a></td>
                      <td><a href="reject.php?id=<?php echo $var['order_id']?>" class="btn btn-block btn-success">reject</button></td>
                    </tr>
                  <?php
                    }
                    ?>
                </tbody>
                </table>
              </div>
                  </form>
              <!-- /.card-body -->
             
            </div>
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
