<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Login</title>


    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" href="https://2.bp.blogspot.com/-WgYca52-aB0/WBAmMRTlhPI/AAAAAAAAAFA/x61osPsU8d0mWSA0-9RTI9DtgCCOq_WzwCLcB/s200/ponpes.jpg" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Raleway, sans-serif;
        }

        body {
            background: linear-gradient(90deg, #bbf2c5, #6bcc8b);
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .screen {
            background: linear-gradient(90deg, #54a470, #78b881);
            position: relative;
            margin: auto;
            margin-top: 5%;
            height: 600px;
            width: 360px;
            box-shadow: 0px 0px 24px #569659;
            border-radius: 10px;
        }

        .screen__content {
            z-index: 1;
            position: relative;
            height: 100%;
        }

        .screen__background {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
            -webkit-clip-path: inset(0 0 0 0);
            clip-path: inset(0 0 0 0);
        }

        .screen__background__shape {
            transform: rotate(45deg);
            position: absolute;
        }

        .screen__background__shape1 {
            height: 520px;
            width: 520px;
            background: #FFF;
            top: -50px;
            right: 120px;
            border-radius: 0 72px 0 0;
        }

        .screen__background__shape2 {
            height: 220px;
            width: 220px;
            background: #63ac65;
            top: -172px;
            right: 0;
            border-radius: 32px;
        }

        .screen__background__shape3 {
            height: 540px;
            width: 190px;
            background: linear-gradient(270deg, #54a458, #679e6c);
            top: -24px;
            right: 0;
            border-radius: 32px;
        }

        .screen__background__shape4 {
            height: 400px;
            width: 200px;
            background: #7bb982;
            top: 420px;
            right: 50px;
            border-radius: 60px;
        }

        .login {
            width: 320px;
            padding: 30px;
            padding-top: 32%;
        }

        .login__field {
            padding: 20px 0px;
            position: relative;
        }

        .login__icon {
            position: absolute;
            top: 30px;
            color: #75b584;
        }

        .login__input {
            border: none;
            border-bottom: 2px solid #d1d4d1;
            background: none;
            padding: 10px;
            padding-left: 24px;
            font-weight: 700;
            width: 75%;
            transition: .2s;
        }

        .login__input:active,
        .login__input:focus,
        .login__input:hover {
            outline: none;
            border-bottom-color: #679e77;
        }

        .login__submit {
            background: #fff;
            font-size: 14px;
            margin-top: 30px;
            padding: 16px 20px;
            border-radius: 26px;
            border: 1px solid #d4e8d3;
            text-transform: uppercase;
            font-weight: 700;
            display: flex;
            align-items: center;
            width: 100%;
            color: #489d51;
            box-shadow: 0px 2px 2px #56965f;
            cursor: pointer;
            transition: .2s;
        }

        .login__submit:active,
        .login__submit:focus,
        .login__submit:hover {
            border-color: #679e6c;
            outline: none;
        }

        .button__icon {
            font-size: 24px;
            margin-left: auto;
            color: #75b582;
        }

        .social-login {
            position: absolute;
            height: 140px;
            width: 160px;
            text-align: center;
            bottom: 0px;
            right: 0px;
            color: #fff;
        }

        .social-icons {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .social-login__icon {
            padding: 20px 10px;
            color: #fff;
            text-decoration: none;
            text-shadow: 0px 0px 8px #7875B5;
        }

        .social-login__icon:hover {
            transform: scale(1.5);
        }

        /* Absolute Center Spinner */
        .loading {
            position: fixed;
            z-index: 999;
            overflow: show;
            margin: auto;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 50px;
            height: 50px;
        }

        /* Transparent Overlay */
        .loading:before {
            content: '';
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.5);
        }

        /* :not(:required) hides these rules from IE9 and below */
        .loading:not(:required) {
            /* hide "loading..." text */
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0;
        }

        .loading:not(:required):after {
            content: '';
            display: block;
            font-size: 10px;
            width: 50px;
            height: 50px;
            margin-top: -0.5em;
            margin-left: -20px;

            border: 15px solid rgba(72, 157, 81, 1.0);
            border-radius: 100%;
            border-bottom-color: transparent;
            -webkit-animation: spinner 1s linear 0s infinite;
            animation: spinner 1s linear 0s infinite;


        }

        /* Animation */

        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-moz-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-o-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }

        }

        input[type='password'] {
            letter-spacing: 10px;
        }

        h2 {
            color: #75b584;
            margin-top: 15px;
        }

        *::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            /*border-radius: 10px;*/
            background-color: #F5F5F5;
        }

        *::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        *::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
            background-color: #c2c2c2;
        }
    </style>
</head>

<body>
    <div class="loading">Loading&#8230;</div>

    <!--<div class="loading">Loading&#8230;</div>-->
    <div class="screen">
        <div class="screen__content">

            <form class="login" id="main">
                <img src="https://2.bp.blogspot.com/-WgYca52-aB0/WBAmMRTlhPI/AAAAAAAAAFA/x61osPsU8d0mWSA0-9RTI9DtgCCOq_WzwCLcB/s200/ponpes.jpg" width="70" />
                <h2><b style="font-size:.8em;display:block;">Oncard</b> Ponpes KH. Ahmad Dahlan</h2>
                <div class="login__field">
                    <i class="login__icon fas fa-user"></i>
                    <input type="text" name="username" class="login__input" placeholder="Username" maxlength="20" required>
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input type="password" name="password" class="login__input" placeholder="PIN" maxlength="17" required>
                </div>
                <button type="button" class="button login__submit" id="btnSbmtReg">
                    <span class="button__text">Login</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button>
            </form>
            <!--<div class="social-login">-->
            <!--	<h3>log in via</h3>-->
            <!--	<div class="social-icons">-->
            <!--		<a href="#" class="social-login__icon fab fa-instagram"></a>-->
            <!--		<a href="#" class="social-login__icon fab fa-facebook"></a>-->
            <!--		<a href="#" class="social-login__icon fab fa-twitter"></a>-->
            <!--	</div>-->
            <!--</div>-->
        </div>
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape3"></span>
            <span class="screen__background__shape screen__background__shape2"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>
    </div>
    </div>




    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url(); ?>/assets/js/waves.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/modernizr.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/css-scrollbars.js"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js"></script>

    <!-- ------------- axios --------------------------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.4/axios.min.js" integrity="sha512-lTLt+W7MrmDfKam+r3D2LURu0F47a3QaW5nF0c6Hl0JDZ57ruei+ovbg7BrZ+0bjVJ5YgzsAWE+RreERbpPE1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script type="text/javascript">
        $(".loading").hide();

        $("#usernameLog").on({
            keydown: function(e) {
                if (e.which === 32)
                    return false;
            },
            change: function() {
                this.value = this.value.replace(/\s/g, "");
            }
        });


        $("#usernameReg").on({
            keydown: function(e) {
                if (e.which === 32)
                    return false;
            },
            change: function() {
                this.value = this.value.replace(/\s/g, "");
            }
        });

        $("#emailReg").on({
            keydown: function(e) {
                if (e.which === 32)
                    return false;
            },
            change: function() {
                this.value = this.value.replace(/\s/g, "");
            }
        });


        $('#btnSbmtReg').on('click', function() {
            $(".loading").fadeIn();


            //validasi formulir terlebih dahulu
            var allAreFilled = true;
            document.getElementById("main").querySelectorAll("[required]").forEach(function(i) {
                if (!allAreFilled) return;
                if (!i.value) allAreFilled = false;
                if (i.type === "radio") {
                    var radioValueCheck = false;
                    document.getElementById("main").querySelectorAll('[name=${i.name}]').forEach(function(r) {
                        if (r.checked) radioValueCheck = true;
                    })
                    allAreFilled = radioValueCheck;
                }
            })
            if (!allAreFilled) {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Data tidak lengkap',
                    text: 'Mohon lengkapi data pada formulir',
                    showConfirmButton: true,

                });
                $(".loading").fadeOut();
            } else {

                // window.location = '<?= base_url(); ?>Inisiasi';
                var username = $("[name='username']").val();
                var password = $("[name='password']").val();

                var form_data = new FormData();
                form_data.append('username', username);
                form_data.append('password', password);

                $("#btnSbmtReg").html('<span class="button__text">Memproses...</span><i class="button__icon fas fa-chevron-right"></i>');
                $('#btnSbmtReg').prop("disabled", true);
                $("#btnSbmtReg").attr('style', 'cursor:not-allowed');

                const ajaxAxiosLogin = async () => {
                    const login = await axios.post("<?= base_url('Login/LoginActions') ?>", form_data).catch((err) => {
                        // kesalahan login
                        console.log(err.response.data);
                    });
                    $(".loading").fadeOut();
                    if (login.data.status == 200) {

                        $("#btnSbmtReg").html('<span class="button__text">Mengalihkan halaman...</span><i class="button__icon fas fa-chevron-right"></i>');
                        $('#btnSbmtReg').prop("disabled", true);
                        $("#btnSbmtReg").attr('style', 'cursor:not-allowed');

                        $(".loading").fadeOut();
                        // console.log(login.data.result.user);
                        sessionStorage.setItem('_token', login.data.result.access_token);
                        sessionStorage.setItem('_user_id', login.data.result.user.id);

                        if (login.data.result.user.role == 'KANTIN') {
                            window.location.href = "<?= base_url('Kantin/kasir') ?>";
                        } else if (login.data.result.user.role == 'WALI') {
                            window.location.href = "<?= base_url('Orangtua/beranda') ?>";
                        } else {
                            if (login.data.result.user.user_join == 1) {
                                window.location.href = "<?= base_url('Manajemen') ?>";
                            } else {
                                window.location.href = "<?= base_url('Inisiasi') ?>";
                            }
                        }

                    } else {

                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Username dan password tidak sesuai',
                            showConfirmButton: true,

                        });

                        $("#btnSbmtReg").html('<span class="button__text">Login</span><i class="button__icon fas fa-chevron-right"></i>');
                        $('#btnSbmtReg').prop("disabled", false);
                        $("#btnSbmtReg").attr('style', 'cursor:pointer');
                    }
                }
                ajaxAxiosLogin();
            }






        });


        $('#btnSbmtLog').on('click', function() {


            //validasi formulir terlebih dahulu
            var allAreFilled = true;
            document.getElementById("main2").querySelectorAll("[required]").forEach(function(i) {
                if (!allAreFilled) return;
                if (!i.value) allAreFilled = false;
                if (i.type === "radio") {
                    var radioValueCheck = false;
                    document.getElementById("main").querySelectorAll('[name=${i.name}]').forEach(function(r) {
                        if (r.checked) radioValueCheck = true;
                    })
                    allAreFilled = radioValueCheck;
                }
            })
            if (!allAreFilled) {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Data tidak lengkap',
                    text: 'Username dan password harus diisi',
                    showConfirmButton: true,

                });
            } else {

                var username = $("#usernameLog").val();
                var password = $("#passwordLog").val();

                var form_data = new FormData();
                form_data.append('username', username);
                form_data.append('password', password);

                $("#btnSbmtLog").html('<div class="lds-facebook"><div></div><div></div><div></div></div>');
                $('#btnSbmtLog').prop("disabled", true);
                $("#btnSbmtLog").attr('style', 'cursor:not-allowed');

                jQuery.ajax({
                    type: "POST",
                    url: "<?php echo api_url('auth/login'); ?>",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    dataType: 'json', // what to expect back from the PHP script, if anything
                    beforeSend: function() {

                    },
                    success: function(e) {
                        // console.log(e.statusText);

                    }

                });
            }

        });
    </script>

</body>

</html>