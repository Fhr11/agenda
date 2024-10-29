
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zie Agenda</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">


</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Search Form -->
        <li class="nav-item">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <span class="brand-text font-weight-bold">Zie Agenda</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="users.php" class="d-block">Sekretaris</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
            <!-- Home -->
            <li class="nav-item">
              <a href="index.php" class="nav-link">
                <i class="fas fa-home nav-icon"></i>
                <p>Home</p>
              </a>
            </li>
            <!-- Input Absen -->
            <li class="nav-item">
              <a href="absen.php" class="nav-link">
                <i class="fas fa-pencil-alt nav-icon"></i> <!-- Ikon Input Absen -->
                <p>Input Absen</p>
              </a>
            </li>
            <!-- Rekap Absen -->
            <li class="nav-item">
              <a href="rekap.php" class="nav-link">
                <i class="fas fa-chart-line nav-icon"></i> <!-- Ikon Rekap Absen -->
                <p>Rekap Absen</p>
              </a>
            </li>
            <!-- Users -->
            <li class="nav-item">
              <a href="users.php" class="nav-link">
                <i class="fas fa-users nav-icon"></i> <!-- Ikon Users -->
                <p>Users</p>
              </a>
            </li>
            <!-- Logout -->
            <li class="nav-item">
              <a href="logout.php" class="nav-link">
                <i class="fas fa-sign-out-alt nav-icon"></i> <!-- Ikon Logout -->
                <p>Logout</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content -->

    <!-- /.content-wrapper -->

