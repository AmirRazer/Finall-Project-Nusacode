
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/star-admin2-free/template/vendors/feather/feather.css">
  <link rel="stylesheet" href="/star-admin2-free/template/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/star-admin2-free/template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="/star-admin2-free/template/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="/star-admin2-free/template/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="/star-admin2-free/template/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/star-admin2-free/template/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/star-admin2-free/template/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="/star-admin2-free/template/images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="fw-light">Sign in to continue.</h6>
              <form class="pt-3" action="/login" method="post">
                @csrf
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" value="Login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Login</button>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="/star-admin2-free/template/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="/star-admin2-free/template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/star-admin2-free/template/js/off-canvas.js"></script>
  <script src="/star-admin2-free/template/js/hoverable-collapse.js"></script>
  <script src="/star-admin2-free/template/js/template.js"></script>
  <script src="/star-admin2-free/template/js/settings.js"></script>
  <script src="/star-admin2-free/template/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
