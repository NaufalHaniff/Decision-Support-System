<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BYD Indonesia | Recovery Account</title>
  <link rel="stylesheet" href="app/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="app/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="app/dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="app/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
</head>
<body class="hold-transition login-page" style="background-image: url('byd.jpg'); background-size: cover;">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Recovery</b><br>Account</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">BYD Indonesia<br>Sistem Penunjang Keputusan<br>Metode MOORA</p>
      <form action="conf/recov.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-user"></span></div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="New Password">
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-lock"></span></div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="confirm" class="form-control" placeholder="Confirm Password">
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-lock"></span></div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Change password</button>
          </div>
        </div>
      </form>
      <p class="mt-3 mb-1">
        <a href="index.php">Login</a>
      </p>
    </div>
  </div>
</div>

<!-- JS -->
<script src="app/plugins/jquery/jquery.min.js"></script>
<script src="app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="app/dist/js/adminlte.min.js"></script>
<script src="app/plugins/sweetalert2/sweetalert2.min.js"></script>

<!-- SweetAlert2 Notifications -->
<script>
<?php
if (isset($_GET['error'])) {
    $err = $_GET['error'];
    if ($err == 'empty') {
        echo "
        Swal.fire({
            toast: true,
            position: 'center-top',
            icon: 'warning',
            title: 'Semua field wajib diisi!',
            showConfirmButton: false,
            timer: 3000
        });";
    } else if ($err == 'mismatch') {
        echo "
        Swal.fire({
            toast: true,
            position: 'center-top',
            icon: 'error',
            title: 'Konfirmasi password tidak cocok!',
            showConfirmButton: false,
            timer: 3000
        });";
    } else if ($err == 'notfound') {
        echo "
        Swal.fire({
            toast: true,
            position: 'center-top',
            icon: 'error',
            title: 'Username tidak ditemukan!',
            showConfirmButton: false,
            timer: 3000
        });";
    }
} else if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo "
    Swal.fire({
        toast: true,
        position: 'center-top',
        icon: 'success',
        title: 'Password berhasil diubah!',
        showConfirmButton: false,
        timer: 2000
    });
    setTimeout(() => {
        window.location.href = 'index.php';
    }, 2000);";
}
?>
</script>
</body>
</html>
