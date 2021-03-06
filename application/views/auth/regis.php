<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url('assets/stisla'); ?>/node_modules/selectric/public/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/stisla'); ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url('assets/stisla'); ?>/assets/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <!-- <div class="login-brand">
              <img src="<?= base_url('assets/stisla'); ?>/assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div> -->

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form class="user" method="POST" action="<?= base_url('register');?>">
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Nama</label>
                      <input id="nama" type="text" class="form-control" name="nama" autofocus placeholder="nama" value="<?= set_value('nama') ?>">
                      <?= form_error('nama', '<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    <div class="form-group col-6">
                      <label>Username</label>
                      <input id="username" type="text" class="form-control" name="username" autofocus placeholder="username" value="<?= set_value('username') ?>">
                      <?= form_error('username', '<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                  </div>

                    <div class="form-group">
                      <label>Alamat</label>
                      <input id="alamat" type="text" class="form-control" name="alamat" autofocus placeholder="alamat" value="<?= set_value('alamat') ?>">
                      <?= form_error('alamat', '<small class="text-danger pl-3">','</small>'); ?>
                    </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label>Email</label>
                      <input id="email" type="email" class="form-control" name="email" placeholder="email" value="<?= set_value('email') ?>">
                      <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    <div class="form-group col-6">
                      <label>No Telepon</label>
                      <input id="no_telp" type="number" class="form-control" name="no_telp" placeholder="No Telepon" value="<?= set_value('no_telp') ?>">
                      <?= form_error('no_telp', '<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label>Password</label>
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="password"> 
                      <?= form_error('password', '<small class="text-danger pl-3">','</small>'); ?>
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="repeat password">
                      <?= form_error('password2', '<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="<?= base_url('auth/login');?>">Already have a Account!</a>
                </div>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?= base_url('assets/stisla'); ?>/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="<?= base_url('assets/stisla'); ?>/node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?= base_url('assets/stisla'); ?>/node_modules/selectric/public/jquery.selectric.min.js"></script>

  <!-- Template JS File -->
  <script src="<?= base_url('assets/stisla'); ?>/assets/js/scripts.js"></script>
  <script src="<?= base_url('assets/stisla'); ?>/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?= base_url('assets/stisla'); ?>/assets/js/page/auth-register.js"></script>
</body>
</html>




<!-- 
    <div class="container">
        <div class="img">
            <img src="<?= base_url('assets/sb_admin/')?>/img/amikom.jpg" alt="">
        </div>
        <div class="login-content">
            <h4 class="text-center">Registrasi</h4>
            <form class="user" method="POST" action="<?= base_url('auth/regis');?>">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="full name" value="<?= set_value('name') ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="email" value="<?= set_value('email') ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <div class="form-group row">
                    <label>Password</label>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="password"> 
                    <?= form_error('password1', '<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="repeat password">
                    <?= form_error('password2', '<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">Register</button>
            </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="<?= base_url('auth/login');?>">Already have a Account!</a>
                </div>
        </div>
    </div>
     -->