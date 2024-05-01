<?php include("../functions/functions.php");


if (!isset($_SESSION['id'])) {
  header("Location: ../index.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>DABAR | Website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
  <meta content="DABAR_IMS" name="author" />

  <!-- App favicon -->
  <link rel="shortcut icon" href="../assets/images/favicon.png">

  <!-- Theme Config Js -->
  <script src="../assets/js/config.js"></script>

  <!-- Quill css -->
  <!-- <link href="../assets/vendor/quill/quill.core.css" rel="stylesheet" type="text/css" />
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet" type="text/css" />
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet" type="text/css" /> -->

  <!-- Datatables css -->
  <link href="../assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />

  <!-- App css -->
  <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />
  <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

  <!-- Icons css -->
  <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <!-- Begin page -->
  <div class="wrapper">
    <!-- ========== Topbar Start ========== -->
    <div class="navbar-custom">
      <div class="topbar container-fluid">
        <div class="d-flex align-items-center gap-1">
          <!-- Topbar Brand Logo -->
          <div class="logo-topbar">
            <!-- Logo light -->
            <a href="#" class="logo-light">
              <span class="logo-lg">
                <img src="../assets/images/logo-dark.png" alt="logo">
              </span>
              <span class="logo-sm">
                <img src="../assets/images/logo-sm.png" alt="small logo">
              </span>
            </a>

            <!-- Logo Dark -->
            <a href="#" class="logo-dark">
              <span class="logo-lg">
                <img src="../assets/images/logo-dark.png" alt="dark logo">
              </span>
              <span class="logo-sm">
                <img src="../assets/images/logo-sm.png" alt="small logo">
              </span>
            </a>
          </div>

          <!-- Sidebar Menu Toggle Button -->
          <button class="button-toggle-menu">
            <i class="mdi mdi-menu"></i>
          </button>

          <!-- Page Title -->
          <h4 class="page-title d-none d-sm-block">Content Management System</h4>
        </div>

        <ul class="topbar-menu d-flex align-items-center gap-3">
          <li class="d-none d-sm-inline-block">
            <div class="nav-link" id="light-dark-mode">
              <i class="ri-moon-line fs-22"></i>
            </div>
          </li>

          <li class="dropdown">
            <a class="nav-link dropdown-toggle arrow-none nav-user" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              <span class="account-user-avatar">
                <img src="../assets/images/users/avatar-1.jpg" alt="user-image" width="32" class="rounded-circle">
              </span>
              <span class="d-lg-block d-none">
                <h5 class="my-0 fw-normal">
                  <?= $_SESSION['name'] ?>
                  <i class="ri-arrow-down-s-line fs-22 d-none d-sm-inline-block align-middle"></i>
                </h5>
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
              <!-- item-->
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome</h6>
              </div>

              <!-- item-->
              <a href="profile.php" class="dropdown-item">
                <i class="ri-account-pin-circle-line fs-16 align-middle me-1 "></i>
                <span>My Account</span>
              </a>

              <!-- item-->
              <a class="dropdown-item logoutItem" data-bs-toggle="modal" data-bs-target="#logout">
                <i class="ri-logout-circle-r-line align-middle me-1"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>


<form action="../process/logout.php" class="outUser" id="outUser" method="POST" enctype="multipart/form-data">
  <div class="modal fade" id="logout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="user" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-dark text-light">
          <h3 class="modal-title">Logout account?</h3>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <input type="hidden" name="id" value="<?= $_SESSION['id'] ?>">
          <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal"><i class="ri-close-line"></i>No</button>
          <button type="submit" class="btn btn-lg btn-success"><i class="ri-check-line"></i> Yes</button>
        </div>
      </div>
    </div>
  </div>
</form>

    <!-- ========== Topbar End ========== -->