  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Administrator</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['username']; ?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- side bat content -->

         
            <li class="nav-item">
              <a href="dashboard.php" class="nav-link success">  
                <p>  
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                     DASHBOARD
                  </i>
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="sale.php" class="nav-link success">  
                <p>  
                  <i class="nav-icon fas fa-shopping-cart"></i>
                     SALES
                  </i>
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="purchase.php" class="nav-link success">  
                <p>  
                  <i class="nav-icon fas fa-credit-card"></i>
                     PURCHASE
                  </i>
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="inventory.php" class="nav-link success">  
                <p>  
                  <i class="nav-icon fas fa-table"></i>
                    INVENTORY SYSTEM 
                  </i>
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link success">  
                <p>  
                  <i class="nav-icon fas fa-truck"></i>
                    DELIVERY 
                  </i>
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="client info.php" class="nav-link success">  
                <p>  
                  <i class="nav-icon fas fa-users"></i>
                    CLIENT
                  </i>
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="supplier info.php" class="nav-link success">  
                <p>  
                  <i class="nav-icon fas fa-industry"></i>
                    SUPPLIER
                  </i>
                </p>
              </a>
            </li>
       
            <li class="nav-item">
              <a href="receivable.php" class="nav-link success">  
                <p>  
                  <i class="nav-icon fas fa-industry"></i>
                    Account Receivable
                  </i>
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="logout.php" class="nav-link success">  
                <p>  
                  <i class="nav-icon fas fa-industry"></i>
                    Logout
                  </i>
                </p>
              </a>
            </li>

           
       
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>