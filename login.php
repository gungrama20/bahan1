
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Pembayaran SPP</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/dist/css/custom.css">
  <link rel="Sohrtcut Icon" type="image/png" href="img/Logo_spp-removebg-preview.png" style="width:260px;height:260px;">
</head>
<body class="hold-transition login-page" style="background-image: url(img/gambar1.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
  <div class="login-box">
    <div class="login-logo">
      <background>
      <img src="img/Logo-SPP-removebg-preview.png" style="width:300px;height:auto;"><br>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body" style="background-color: #eff0ff;">
      <h6><b><p class="login-box-msg">Halaman Login Untuk Admin dan Petugas</p><b></h6>
        <hr>
        <?php 
        if(isset($_GET['info'])){
          if($_GET['info'] == "gagal"){ ?>
            <div class="alert alert-warning alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h6><i class="icon fas fa-exclamation-triangle"></i> Mohon Maaf</h6>
              Login gagal! username dan password salah!
            </div>
          <?php } else if($_GET['info'] == "logout"){ ?>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h6><i class="icon fas fa-check"></i> Terima Kasih</h6>
              Anda telah berhasil logout
            </div>
          <?php }else if($_GET['info'] == "login"){ ?>
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h6><i class="icon fas fa-info"></i> Mohon Maaf</h6>
              Anda harus login terlebih dahulu
            </div>
          <?php } } ?>
          <br>

          <form action="cek_login_petugas.php" method="post">
            <div class="input-group mb-3">
              <input type="text" name="username" class="form-control" placeholder="Username">
              <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- /.col -->
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Masuk</button>
              </div>
              <div class="col-12">
                <hr>
                <a href="index.php" class="btn btn-info btn-block">Halaman Login Siswa</a>
              </div>
              <!-- /.col -->
            </div>
          </form>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
  </body>
  </html>
