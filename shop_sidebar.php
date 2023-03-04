<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ShopLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               category
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="shop_addcategory.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>add category</p>
                </a>
              </li>
               </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="shop_viewcategory.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view category</p>
                </a>
              </li>
               </ul>
          </li>
          <li class="nav-item">
            <a href="a" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
              product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="shop_addproduct.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>add product</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="shop_viewproduct.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view product</p>
                </a>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
               order
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="shop_approve.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view $approve order</p>
                </a>
              </li>
             </ul>
             
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
               history
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="shop_orderhistory.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view order history</p>
                </a>
              </li>
             </ul>
          </li>
         
          <li class="nav-item">
          <a href="pages/examples/profile.html" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Profile
            <i class="fas fa-angle-left right"></i>
            </p>
             </a>
               <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="shop_viewprofile.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view profile</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register 
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="login.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="shop_registration.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register </p>
                    </a>
                  </li>
                 
           
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->