
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="height: 100vh;">
    <!-- Brand Logo -->
    <a href="../server/dashboard.php" class="brand-link">
      <!-- <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight">Varshney Samaj Community</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="height: 80vh;">

      <!-- SidebarSearch Form -->
      <div class="form-inline mt-1">
        <div class="input-group " data-widget="sidebar-search">
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
          <li class="nav-item">
            <a href="../server/dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <?php
         
          if($_SESSION['user']=="member"){?>
          <li class="nav-item">
            <a href="../server/memberProfile.php" class="nav-link">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
                Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <?php } ?>
          <?php if(isset($_SESSION['login']) && $_SESSION['user']=='admin'){ ?>
          <li class="nav-item">
            <a href="../server/member_form.php" class="nav-link">
              <i class="nav-icon fas fa-user-plus"></i>
              <p>
                Add New Member
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <?php } ?>
          <li class="nav-item">
            <a href="../server/member_table.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                View All Members
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

          </li>
          
          <li class="nav-item">
            <a href="../server/child_new.php" class="nav-link">
              <i class="nav-icon fas  fa-graduation-cap"></i>
              <p>
                Add New Child
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="../server/childTables.php" class="nav-link">
              <i class="nav-icon fas  fa-user-graduate"></i>
              <p>
                View All Children
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
        </ul> 
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>