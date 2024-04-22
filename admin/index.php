<?php include("../admin/functions/function.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>DABAR | Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="DABAR_IMS" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="../admin/assets/images/favicon.png">

    <!-- Theme Config Js -->
    <script src="../admin/assets/js/config.js"></script>

    <!-- Quill css -->
    <link href="../admin/assets/vendor/quill/quill.core.css" rel="stylesheet" type="text/css" />
    <link href="../admin/assets/vendor/quill/quill.snow.css" rel="stylesheet" type="text/css" />
    <link href="../admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="../admin/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="../admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  </head>

  <body class="authentication-bg position-relative">
    <div class="account-pages p-sm-5 position-relative">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-9 col-lg-11">
            <div class="card overflow-hidden">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="d-flex flex-column h-100">
                    <!-- <div class="auth-brand p-4 text-center">
                      <a href="index.php" class="logo-dark">
                        <img src="../admin/assets/images/logo.png" alt="logo" height="180">
                      </a>
                    </div> -->
                    <div class="p-4 my-auto text-center">
                      <h4 class="fs-20">Sign In</h4>
                      <form action="views/index.php" class="text-start">
                        <div class="mb-3">
                          <label for="username" class="form-label">Username</label>
                          <input class="form-control" type="text" id="username" required="" placeholder="Enter your username">
                        </div>
                        <div class="mb-3">
                          <label for="password" class="form-label">Password</label>
                          <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                        </div>
                        <div class="mb-0 text-start">
                          <button class="btn btn-soft-primary w-100" type="submit"><i class="ri-login-circle-fill me-1"></i> <span class="fw-bold">Log In</span> </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                  <img src="../admin/assets/images/auth-img.jpg" alt="" class="img-fluid rounded h-100">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Vendor js -->
    <script src="../admin/assets/js/vendor.min.js"></script>
    <script src="../admin/assets/vendor/lucide/umd/lucide.min.js"></script>

    <!-- App js -->
    <script src="../admin/assets/js/app.min.js"></script>

</body>
</html>