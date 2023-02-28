<?php
include 'connectr.php';
$data=mysqli_query($con,"SELECT *FROM category_tbl");
if(isset($_POST['button'])){
    $name=$_POST['name'];
    $quantity=$_POST['quant'];
    $price=$_POST['price'];
    $date=$_POST['date'];
    $stock=$_POST['stock'];
    $category=$_POST['category'];
    $image=$_FILES['image']['name'];
    if($image != "")
    {
        $filearray=pathinfo($_FILES['image']['name']);
        $file1=rand();
        $file_ext=$filearray["extension"];

        $filenew=basename($_FILES['image']['name']);
        $target='C:/xampp1/htdocs/ADMINLTE-master/img/'.basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'],"$target");
    }
mysqli_query($con,"INSERT INTO product_tbl(name,quantity,price,expire_date,stock,category_id,image)VALUES('$name','$quantity','$price','$date','$stock','$category','$filenew')");
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
            <h1 class="m-0">Dashboard</h1>
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
     
    <div class="col-sm-4" style="margin-left:20%;">
    <div class="card-body register-card-body">
      <p class="login-box-msg"><b>ADD PRODUCT</b></p>

      <form  method="post"enctype="multipart/form-data">
       <div class="row">
                    <div class="col-sm-12">
                      <!-- select -->
                      <div class="form-group">
                       
                        
                        <select class="form-control" name="category">
                          <option>category</option>
                          <?php
                          while($var=mysqli_fetch_assoc($data)){?>
                          <option value="<?php echo $var['category_id']?>"><?php echo $var['category']?></option>
                         </div>
                      <?php
                        }?> 
                          </select>
                   </div>
                    </div>
                    </div>
            <div class="input-group mb-3">
          <input type="text" class="form-control"name="name" placeholder="item name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
    
          <input type="equantity" class="form-control" name="quant"placeholder="quantity">
          <div class="input-group-append">
            <div class="input-group-text">
            <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="phone" class="form-control" name="price"placeholder="price">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="date" class="form-control" name="date">
          <div class="input-group-append">
            <div class="input-group-text">
              <!-- <span class="fas fa-envelope"></span> -->
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="stock" class="form-control" name="stock"placeholder="stock">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="file" class="form-control" name="image">
          <div class="input-group-append">
            
          </div>
        </div>
                    
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block"name="button">ADD</button>
            
         

       
      </form>

      

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
