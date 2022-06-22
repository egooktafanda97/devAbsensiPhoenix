<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Daftar Akun Baru</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets_login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets_login/css/style.css">
</head>
<body style="background-image: url(<?php echo base_url(); ?>/assets_nidautama/img/bg_login.jpg); background-position: center; padding: 0; margin: 0; background-repeat: repeat;">

    <div class="main" style="background: rgb(255,255,255);
background: linear-gradient(0deg, rgba(255,255,255,0) 0%, rgba(171,171,171,0.7) 66%, rgba(129,129,129,0.7) 100%);">

        <!-- Sign up form -->
                

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title" style="line-height: 40px;">Daftar
                          <font style="font-size: 12px; font-weight: normal; display: block;line-height: 16px;">Daftar dengan mudah disini. Silahkan masukkan data berikut dengan benar.</font>
                        </h2>
                        <form action="<?php echo site_url('Register/selectRegister');?>" method="post" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re_pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="passconf" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="<?php echo site_url('Welcome/termsCondition');?>"  target="_blank" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>

                        <div style="margin-top: 25px; color: red">
                                <?php 
                                if (!empty($this->session->flashdata('duplikasi'))) {?>
                                    <div class="alert alert-danger">
                                        <strong>Oops! </strong><?php echo $this->session->flashdata('duplikasi');?>
                                    </div>
                                <?php
                                    }
                                ?>

                                <?php 
                                    if (!empty($this->session->flashdata('gagalmasuk'))) { ?>
                                        <div class="alert alert-danger">
                                            <strong>Oops! </strong><?php echo $this->session->flashdata('gagalmasuk'); ?>
                                        </div>
                                <?php
                                    }
                                ?>

                                <?php 
                                if (!empty($greet)) { ?>
                                    <div class="alert alert-success">
                                        <strong>Terimakasih </strong><?php echo $greet; ?>
                                    </div>
                                    <?php
                                }
                                ?>

                                <?php 
                                if (!empty(form_error('username'))) { ?>
                                    <div class="alert alert-danger">
                                        <strong>Oops! </strong><?php echo form_error('username'); ?>
                                    </div>
                                    <?php
                                }
                                ?>

                                <?php 
                                if (!empty(form_error('email'))) { ?>
                                    <div class="alert alert-danger">
                                        <strong>Oops! </strong><?php echo form_error('email'); ?>
                                    </div>
                                <?php 
                                }
                                ?>

                                <?php 
                                    if (!empty(form_error('password'))) { ?>
                                        <div class="alert alert-danger">
                                            <strong>Oops! </strong><?php echo form_error('password'); ?>
                                        </div>
                                <?php
                                    }
                                ?>

                                    <?php 
                                    if (!empty(form_error('passconf'))) { ?>
                                        <div class="alert alert-danger">
                                            <strong>Oops! </strong><?php echo form_error('passconf'); ?>
                                        </div>
                                        <?php
                                    }
                    ?>
                        </div>
                    </div>
                    <div class="signup-image" style="text-align: center;">
                        <figure style="text-align: center;"><img src="<?php echo base_url(); ?>/assets_login/images/haj2.jpg" alt="sing up image"></figure>
                        Saya sudah mempunyai akun<br/><a href="<?php echo site_url('login');?>" class="signup-image-link">Login sekarang.</a>
                    </div>
                </div>
            </div>
        </section>

       
    </div>

    <!-- JS -->
    <script src="<?php echo base_url(); ?>/assets_login/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets_login/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>