<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Reset Password</title>
        <!-- for Google -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Investasi cerdas berdampak sosial masyarakat."/>
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <meta name="copyright" content="" />
        <meta name="application-name" content="" />

        <!-- for Facebook -->
        <meta property="og:url" content="" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="" />
        <meta property="og:description" content="" />
        <meta property="og:image" content="" />

        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>assets2/images/favicon/apple-touch-icon-57x57.png"> 
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>assets2/images/favicon/apple-touch-icon-60x60.png"> 
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets2/images/favicon/apple-touch-icon-72x72.png"> 
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets2/images/favicon/apple-touch-icon-76x76.png"> 
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets2/images/favicon/apple-touch-icon-114x114.png"> 
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>assets2/images/favicon/apple-touch-icon-120x120.png"> 
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>assets2/images/favicon/apple-touch-icon-144x144.png"> 
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>assets2/images/favicon/apple-touch-icon-152x152.png"> 
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets2/images/favicon/apple-touch-icon-180x180.png"> 
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets2/images/favicon/favicon-32x32.png" sizes="32x32"> 
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets2/images/favicon/favicon-194x194.png" sizes="194x194"> 
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets2/images/favicon/favicon-96x96.png" sizes="96x96"> 
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets2/images/favicon/android-chrome-192x192.png" sizes="192x192"> 
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets2/images/favicon/favicon-16x16.png" sizes="16x16"> 

        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets_nidautama/lib/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets_login/css/style.css">

        <style type="text/css">
            body {
                height: 100%;
                width: 100%;
            }
            .register-box {
                padding: 50px;
            }
            .register-page {
                position: relative;
            }
            .register-page img {
                text-align: center;
                margin: auto;
                display: block;
                width: 100px; 
                height: 100px;

            }
            .register-box-body {
                position: relative;
            }
            .register-box-body h3 {

            }
        </style>
        <!-- iCheck -->
        <!-- Google Analytics-->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-82776023-1', 'auto');
          ga('send', 'pageview');

        </script>

        <!-- Chatra {literal} -->
        
    </head>
    <body class="hold-transition register-page" style="width: 30%; margin: auto;background-image: url(<?php echo base_url(); ?>/assets_nidautama/img/bg_login.jpg); background-position: center; padding: 0; background-repeat: repeat;">
    <?php
        if (empty($errormsg) && empty($greet2) && empty($selamat)) {?>
        <div class="register-box">
            <div class="register-box-body" style="box-shadow: -0.09px 0px 12px #cecece; padding: 50px; border-radius: 10px; text-align: center; background-color: #fff">
                <div class="register-logo">
                    <a href="<?php echo base_url(); ?>"><img class="img-responsive"src="<?php echo base_url(); ?>assets_nidautama/img/logo.jpg" alt="logo mungu"></a>
                </div>
                <h5 class="login-box-msg">Lupa Password</h5>
                <?php 
                    if (!empty($this->session->flashdata('gagalmasuk'))) { ?>
                        <div class="alert alert-danger">
                            <strong>Oops! </strong><?php echo $this->session->flashdata('gagalmasuk'); ?>
                        </div>
                <?php
                    }
                ?>
                    <form action="<?php echo site_url("Forgot/checkEmail"); ?>" method="post">
                        <div class="form-group has-feedback">
                            <input required type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control" placeholder="Username" style="margin-bottom: 15px;">
                            <input required type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control" placeholder="Email">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Kirim</button>
                        
                    </form>
                    <section style="padding-top: 5px;">
                        <a href="<?php echo site_url("Login"); ?>" class="text-center"><b>Sudah punya akun?</b> Masuk</a>
                    </section>
            </div>

            <!-- /.form-box -->
        </div>
        <!-- /.login-box -->
    <?php
        }elseif (!empty($errormsg) && $errormsg == "Please reset your password!" || !empty($errormsg) && $errormsg == "Please reset your password2!") {?>
        <div class="register-box">
            <div class="register-box-body" style="box-shadow: -0.09px 0px 12px #cecece; padding: 50px; border-radius: 10px; text-align: center; background-color: #fff">
                <div class="register-logo">
                    <a href="<?php echo base_url(); ?>"><img class="img-responsive"src="<?php echo base_url(); ?>assets_nidautama/img/logo.jpg" alt="logo mungu"></a>
                </div>
                <h3 class="login-box-msg">Password Baru</h3>
                <?php 
                    if (!empty($this->session->flashdata('gagalmasuk'))) { ?>
                        <div class="alert alert-danger">
                            <strong>Oops! </strong><?php echo $this->session->flashdata('gagalmasuk'); ?>
                        </div>
                <?php
                    }
                ?>
                    <form action="<?php echo site_url("Forgot/resetPass"); ?>" method="post">
                        <div class="form-group has-feedback">
                            <input type="hidden" name="verificationText" id="verificationText" value="<?php echo $verificationText;?>" />
                            <input required type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" placeholder="Password">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input required type="password" name="passConf" value="<?php echo set_value('passconf'); ?>" class="form-control" placeholder="Retype password">
                            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Kirim</button>
                        </div>
                    </form>
                    <a href="<?php echo site_url("Login"); ?>" class="text-center"><b>Sudah punya akun?</b> Masuk</a>
            </div>
            <!-- /.form-box -->
        </div>
        <!-- /.login-box -->
        <?php    
        }elseif(!empty($greet2) || !empty($selamat)) {?>
        <div class="register-box">
            <div class="register-box-body" style="box-shadow: -0.09px 0px 12px #cecece; padding: 50px; border-radius: 10px; text-align: center; background-color: #fff">
                <div class="register-logo">
                    <a href="<?php echo base_url(); ?>"><img class="img-responsive"src="<?php echo base_url(); ?>assets_nidautama/img/logo.jpg" alt="logo agivest"></a>
                </div>
                <?php 
                    if (!empty($greet2)) { ?>
                        <div class="alert alert-success">
                            <strong>Silahkan </strong><?php echo $greet2; ?>
                        </div>
                <?php
                    }
                ?>
                <?php 
                    if (!empty($selamat)) { ?>
                        <div class="alert alert-success">
                            <strong>Password </strong><?php echo $selamat; ?>
                        </div>
                <?php
                    }
                ?>
                <a class="btn btn-primary btn-block btn-flat" href="<?php echo site_url('Login');?>">Kembali</a>
            </div>
            <!-- /.form-box -->
        </div>
        <!-- /.login-box -->
        <?php
        }?>
            
    </body>
</html>
