<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BYD Indonesia | Registration Account</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="app/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="app/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="app/dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="app/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
</head>
<body class="hold-transition register-page" style="background-image: url('byd.jpg'); background-size: cover;">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>Register</b>&nbsp;Account</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">BYD Indoensia<br>Sistem Penunjang Keputusan<br>Metode MOORA</p>
      <form action="conf/regist.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="nama">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <!-- <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div> -->
        <div class="row">
          <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <div class="col-4">
            <a href="index.php" class="btn btn-danger btn-block">Keluar</a>
          </div>

          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->

      <!-- <a href="login.html" class="text-center">I already have a membership</a> -->
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="app/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="app/dist/js/adminlte.min.js"></script>
<!-- SweetAlert2 -->
<script src="app/plugins/sweetalert2/sweetalert2.min.js"></script>
<?php
if (isset($_GET['error'])) {
  $err = $_GET['error'];
  if ($err == 'empty') {
    echo "
    <script>
    Swal.fire({
      toast: true,
      position: 'center-top',
      icon: 'warning',
      title: 'Semua field wajib diisi!',
      showConfirmButton: false,
      timer: 3000
    });
    </script>";
  } else if ($err == 'duplicate') {
    echo "
    <script>
    Swal.fire({
      toast: true,
      position: 'center-top',
      icon: 'error',
      title: 'Username sudah digunakan!',
      showConfirmButton: false,
      timer: 3000
    });
    </script>";
  } else if ($err == 'register') {
    echo "
    <script>
    Swal.fire({
      toast: true,
      position: 'center-top',
      icon: 'error',
      title: 'Gagal mendaftarkan akun!',
      showConfirmButton: false,
      timer: 3000
    });
    </script>";
  }
} else if (isset($_GET['success'])) {
  echo "
  <script>
  Swal.fire({
    toast: true,
    position: 'center-top',
    icon: 'success',
    title: 'Akun berhasil diregistrasi!',
    showConfirmButton: false,
    timer: 3000
  });
  </script>";
}
?>
</body>
</html>