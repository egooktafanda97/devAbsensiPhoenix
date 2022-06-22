
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DabalPro | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="<?php echo base_url(); ?>/assets/img/icons/logo.png" rel="icon" type="image/png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets_dabalpro/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets_dabalpro/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets_dabalpro/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url(); ?>/assets_dabalpro/index2.html"><b>Dabal</b>PRO</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?php echo site_url('Login/selectLogin');?>" method="post">
        <div class="input-group mb-3">
          <input type="username" name="username" class="form-control" placeholder="Username">
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
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

      
    </div>
    <!-- /.login-card-body -->

          <div class="text-center p-t-100">
                <?php 
                        if (!empty($greet)) { 
                            if ($greet != "a") {?>
                                <div class="alert alert-success" style="text-align: center; font-size: 10px; margin-left: 20px; margin-right: 20px;">
                                    <strong>Selamat! </strong><?php echo $greet; ?>
                                </div>
                            <?php
                            }
                            ?>
                        <?php
                        }else if (!empty($greet2)) {
                            if ($greet2 != "a") {?>
                            <div class="alert alert-success" style="text-align: center; font-size: 10px; margin-left: 20px; margin-right: 20px;">
                                <strong>Selamat anda </strong><?php echo $greet; ?>
                            </div>
                            <?php
                            }
                            ?>
                        <?php    
                        }
                        ?>
                        <?php 
                            if (!empty($this->session->flashdata('gagalmasuk'))) {?>
                                <div class="alert alert-danger" style="text-align: center; font-size: 10px; margin-left: 20px; margin-right: 20px;">
                                    <strong>Oops! </strong><?php echo $this->session->flashdata('gagalmasuk');?>
                                </div>
                        <?php
                            }
                        ?>
              </div>

  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>/assets_dabalpro/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>/assets_dabalpro/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/assets_dabalpro/dist/js/adminlte.min.js"></script>

</body>
</html>
