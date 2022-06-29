<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>ONCARD - By Phoenix Kreatif Digital</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets_landingpage/images/oncard.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets_landingpage/plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets_landingpage/plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets_landingpage/plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets_landingpage/plugins/slick/slick.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets_landingpage/plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets_landingpage/plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets_landingpage/css/style2.css">
  
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

  <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<style type="text/css">
  
  :root {
  --surface-color: #fff;
  --curve: 40;
  }

  * {
    box-sizing: border-box;
  }

  body {
    font-family: "Noto Sans JP", sans-serif;
    background-color: #fef8f8;
  }
  
  .modal {
          backdrop-filter: blur(10px)!important;

  }
  
  .inputPass {
      border-radius:3px;
      border:1px solid rgba(0,0,0,0.1);
      text-align:center;
      width:100%;
      padding:2vh;
      font-size:3.4vh!important;
  }

  .cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    /*margin: 4rem 5vw;*/
    padding: 0;
    list-style-type: none;
  }

  .card {
    position: relative;
    display: block;
    height: 100%;
    border-radius: calc(var(--curve) * 1px);
    overflow: hidden;
    text-decoration: none;
  }

  .card__image {
    width: 100%;
    height: auto;
  }

  .card__overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1;
    border-radius: calc(var(--curve) * 1px);
    /*fill: var(--surface-color);*/
    background-color: #000;
    transform: translateY(100%);
    transition: 0.2s ease-in-out;
  }

  .card:hover .card__overlay {
    transform: translateY(0);
  }

  .card__header {
    position: relative;
    display: flex;
    align-items: center;
    gap: 2em;
    padding: 1em;
    border-radius: calc(var(--curve) * 1px) 0 0 0;
    /*fill: var(--surface-color);*/
    background-color: #000;
    transform: translateY(-100%);
    transition: 0.2s ease-in-out;
  }

  .card__arc {
    width: 80px;
    height: 80px;
    position: absolute;
    bottom: 100%;
    right: 0;
    z-index: 1;
  }

  .card__arc path {
    /*fill: var(--surface-color);*/
    fill: #000;
    d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
  }

  .card:hover .card__header {
    transform: translateY(0);
  }

  .card__thumb {
    flex-shrink: 0;
    width: 50px;
    height: 50px;
    border-radius: 0%;
  }

  .card__title {
    font-size: 1.2em;
    margin: 0 0 0.3em;
    color: #5FCF88;
    font-family: "Open Sans", sans-serif;
  }

  .card__tagline {
    display: block;
    margin: 1em 0;
    font-family: "MockFlowFont";
    font-size: 0.8em;
    color: #d7bdca;
  }

  .card__description {
    padding: 0 2em 2em;
    margin: 0;
    color: #fff;
    font-size: 1.1em;
    font-family: "Open Sans", sans-serif;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
    overflow: hidden;
  }

  .main-button {
    background-color: #5fcf88 !important;
  }

  .main-button:hover {
    background-color: #000000 !important; 
  }
</style>

<style type="text/css">
  @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap");
  * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
  }
  
  /*card style /////////*/
  .card-wrapper {
    --color-primary: #00768b;
    --color-secondary: #01a188;
    --box-shadow: 7px 7px 5px 0px rgba(50, 50, 50, 0.5);
    width: 100%;
  }
  .card-header {
    width: 90%;
    background: #fff;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px 15px;
    border-top-left-radius: 70px;
    z-index: 2;
    position: relative;
    box-shadow: var(--box-shadow);
  }

  .card-header i {
    font-size: 40px;
    color: var(--color-primary);
  }
  .card-header h1,
  .card-header h2 {
    text-transform: uppercase;
    color: var(--color-primary);
    line-height: 10px;
  }
  .card-header h1 {
    font-size: 18px;
  }
  .card-header h2 {
    font-size: 14px;
    margin-top: 15px;
  }
  .card-header p {
    
    line-height: 20px;
  }
  .card-footer {
    width: 100%;
    height: 230px;
    background-image: linear-gradient(
      to right bottom,
      var(--color-secondary),
      var(--color-primary)
    );
    display: flex;
    flex-direction: column;
    justify-content: end;
    align-items: start;
    margin-top: -150px;
    border-radius: 5px 5px 70px 0px;
    color: #fff;
    overflow: hidden;
  }
  .card-footer .footer-content-wrap {
    padding: 0px 0px 0px 0px;

    display: flex;
    justify-content: space-between;
    width: 100%;
    align-items: center;
  }
  .card-footer .footer-text-wrap {
    text-align: center;
    color: rgba(255, 255, 255, 0.3);
  }
  .card-footer i {
    font-size: 48px;
    color: rgba(255, 255, 255, 0.7);
  }
  .card-footer h1 {
    font-size: 22px;
    line-height: 0.85;
    font-weight: 400;
  }
  /*set card color ///////*/

  .card-wrapper.one {
    --color-primary: #45b649;
    --color-secondary: #dce35b;
  }
  .card-wrapper.two {
    --color-primary: #fc4a1a;
    --color-secondary: #f7b733;
  }

</style>

</head>
<body>
  <div class="body-inner">

<div id="top-bar" class="top-bar" style="padding-top: 0px;padding-bottom: 0px;">
<header id="header" class="header-one">
  <div class="bg-white">
    <div class="container">
      <div class="logo-area" style="padding-top: 0px;padding-bottom: 0px;">
          
  
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div>

  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto" style="width:100%;">
                      <li class="nav-item dropdown">
                        <a class="d-block" href="#">
                          <img loading="lazy" src="<?php echo base_url(); ?>/assets_landingpage/images/oncard_white.png" style="width: 80px;height: auto;">
                        </a>
                      </li>
                     
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->

        <!-- <div class="nav-search">
          <span id="search"><i class="fa fa-search"></i></span>
        </div> -->
        <!-- Search end -->

        <div class="search-block" style="display: none;">
          <label for="search-field" class="w-100 mb-0">
            <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
          </label>
          <span class="search-close">&times;</span>
        </div><!-- Site search end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
</div>
<!--/ Header end -->

<div class="banner-carousel banner-carousel-1 mb-0">
  <div class="banner-carousel-item" style="background-image:url(<?php echo base_url(); ?>/assets_landingpage/images/slider-main/background1.png)">
    <div class="slider-content" style="margin-top: -30px;">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-8">
                <img  data-animation-in="slideInDown" loading="lazy" src="<?php echo base_url(); ?>/assets_landingpage/images/oncard.png" style="width: 220px;height: auto;padding-bottom: 10px;">
                <!--<h3 class="" data-animation-in="slideInLeft" style="font-size: 32pt;color: #000; font-family: 'Lucida Handwriting', cursive;">"All System In One Card"</h3>-->
                <h3 class="slide-sub-title" data-animation-in="slideInLeft" style="color:#000;">All System in<br> One Card</h3>
                <h3 class="slide-title" data-animation-in="slideInLeft" style="font-size: 18pt;color: #000;margin-top:-20px;margin-bottom:0px; ">Sebuah Karya untuk Sekolah Maju</h3>
                <p data-animation-in="slideInRight">
                    <a href="#pesansekarang" class="slider btn btn-primary main-button" aria-label="contact-with-us">Lihat Selengkapnya <i class="fa fa-arrow-down"></i></a>
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url(<?php echo base_url(); ?>/assets_landingpage/images/slider-main/background2.png)">
    <div class="slider-content text-right">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <img data-animation-in="slideInDown" src="<?php echo base_url(); ?>/assets_landingpage/images/oncard.png" style="width: 220px;height: auto;padding-bottom: 10px;float: right;margin-top:-100px;">
                <h3 class="slide-sub-title" data-animation-in="slideInLeft" style="color:#fff;">Creative<br>Solution</h3>
                <h3 class="slide-title" data-animation-in="fadeIn" style="color:#FFDE00;text-shadow: 2px 2px #000;">Lebih Cepat, Mudah, dan Efisien</h3>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url(<?php echo base_url(); ?>/assets_landingpage/images/slider-main/background3.png)">
    <div class="slider-content text-left" style="margin-top: -20px;">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h3 class="slide-title" data-animation-in="slideInLeft" style="color:#ffc400;font-weight:bold;font-size:32pt;">Let's go Back</h3>
                <h3 class="slide-sub-title" data-animation-in="slideInLeft" style="color:#3c276b;font-size:45pt;line-height:1em;">to SCHOOL</h3>
                <div class="row">
                    <div class="col-md-1">
                        <h2 class="" data-animation-in="slideInLeft">with</h2>
                    </div>
                    <div class="col-md-11">
                        <img  data-animation-in="slideInDown" src="<?php echo base_url(); ?>/assets_landingpage/images/oncard.png" style="width: 220px;height: auto;">
                    </div>
                </div>
                
                </div>
                
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<section class="call-to-action-box no-padding" id="pesansekarang" style="margin-top:-150px;">
  <div class="container">
    <div class="action-style-box">
        <div class="row align-items-center">
          <div class="col-md-8 text-center text-md-left">
              <div class="call-to-action-text">
                <h3 class="action-title">Tinjau dan kelola sistem absen melalui portal berikut ini.</h3>
              </div>
          </div><!-- Col end -->
          <div class="col-md-4 text-center text-md-right mt-3 mt-md-0" >
              <div class="call-to-action-btn">
                <a class="btn btn-dark" href="#/" onclick="openPass();">Masuk ke sistem absen</a>
              </div>
          </div><!-- col end -->
        </div><!-- row end -->
    </div><!-- Action style box -->
  </div><!-- Container end -->
</section><!-- Action end -->


  <footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">Kontak Kami</h3>
            <img loading="lazy" width="150px" class="footer-logo" src="<?php echo base_url(); ?>/assets_landingpage/images/oncard_white.png" alt="Constra">
            <p>Jl. Achmad Yani, Koto Taluk, Kuantan Tengah, Kabupaten Kuantan Singingi, Riau, 29562</p>
            <div class="footer-social">
            <ul>
                <li><a href="https://www.facebook.com/ptphoenixkreatifdigital" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <!--<li><a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>-->
                <li><a href="https://www.instagram.com/phoenix.kd/" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                <li><a href="mailto:contact@phoenixkreatifdigital.com" aria-label="GooglePlus"><i class="fas fa-envelope"></i></a></li>
                <li><a href="tel:+6282250913941" aria-label="Phone"><i class="fas fa-phone"></i></a></li>
              </ul>
            </div><!-- Footer social end -->
          </div><!-- Col end -->

          <div class="col-lg-8 col-md-6 footer-widget mt-5 mt-md-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d498.70575028751784!2d101.57002433600407!3d-0.532510297120224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2a4d55cf51c4d5%3A0x31545c9345fa9a0a!2sPT.%20Phoenix%20Kreatif%20Digital!5e0!3m2!1sid!2sid!4v1634007369860!5m2!1sid!2sid" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div><!-- Col end -->

        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="copyright-info text-center text-md-left">
              Developed by <b>Tim Super Oncard.id</b>
            </div>
          </div>

          <div class="col-md-6">
            <div class="footer-menu text-center text-md-right">
              <span>&copy; Copyright <b>PT. Phoenix Kreatif Digital</b></span>
            </div>
          </div>
        </div><!-- Row end -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer><!-- Footer end -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header" style="border:none!important;">
            <h5 class="modal-title" id="exampleModalLabel">Masukkan kode akses</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="las la-times"></i>
            </button>
          </div>
          <div class="modal-body">
              <form id="mod">
                <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:10px;">
                    <input type="password" class="inputPass" maxlength="1"/>
                    <input type="password" class="inputPass" maxlength="1"/>
                    <input type="password" class="inputPass" maxlength="1"/>
                    <input type="password" class="inputPass" maxlength="1"/>
                    
                </div>
              </form>
          </div>
          <div class="modal-footer" style="border:none!important;">
            <button type="button" id="btnSbmtLog" class="btn btn-primary">
                <span class="button__text">MASUK </span><i class="button__icon fas fa-chevron-right"></i>
                </button>
          </div>
        </div>
      </div>
    </div>

  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="<?php echo base_url(); ?>/assets_landingpage/plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="<?php echo base_url(); ?>/assets_landingpage/plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="<?php echo base_url(); ?>/assets_landingpage/plugins/slick/slick.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets_landingpage/plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="<?php echo base_url(); ?>/assets_landingpage/plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="<?php echo base_url(); ?>/assets_landingpage/plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="<?php echo base_url(); ?>/assets_landingpage/plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="<?php echo base_url(); ?>/assets_landingpage/js/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js" integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <script type="text/javascript">
  
    function openPass(){
        $('#exampleModal').modal('toggle');
    }
    
    $('#exampleModal').on('shown.bs.modal', function () {
        $('.inputPass')[0].focus();
    }) 
    
    $('#exampleModal').on('hidden.bs.modal', function () {
        $('#mod')[0].reset();
    })
    var elts = document.getElementsByClassName('inputPass')
    Array.from(elts).forEach(function(elt){
      elt.addEventListener("keyup", function(event) {
        // Number 13 is the "Enter" key on the keyboard
        if (elt.value.length == 1 ) {
          // Focus on the next sibling
          elt.nextElementSibling.focus()
        }
      });
    });
    
    $(':input').keydown(function(e) {
        if ((e.which == 8 || e.which == 46) && $(this).val() =='') {
            $(this).prev('input').focus();
        }
    });
    
    $("#studentoncard").hide();
    $("#inetofthing").hide();
    $("#monitoringdashboard").hide();

    $("#btnmain1").click(function() {
      var elem = $("#btnmain1").text();
      if (elem == "SELENGKAPNYA") {
        //Stuff to do when btn is in the read more state
        $("#btnmain1").text("Tampilkan lebih sedikit");
        $("#studentoncard").show();
      } else {
        //Stuff to do when btn is in the read less state
        $("#btnmain1").text("SELENGKAPNYA");
        $("#studentoncard").hide();
      }
    });

    $("#btnmain2").click(function() {
      var elem = $("#btnmain2").text();
      if (elem == "SELENGKAPNYA") {
        //Stuff to do when btn is in the read more state
        $("#btnmain2").text("Tampilkan lebih sedikit");
        $("#inetofthing").show();
      } else {
        //Stuff to do when btn is in the read less state
        $("#btnmain2").text("SELENGKAPNYA");
        $("#inetofthing").hide();
      }
    });

    $("#btnmain3").click(function() {
      var elem = $("#btnmain3").text();
      if (elem == "SELENGKAPNYA") {
        //Stuff to do when btn is in the read more state
        $("#btnmain3").text("Tampilkan lebih sedikit");
        $("#monitoringdashboard").show();
      } else {
        //Stuff to do when btn is in the read less state
        $("#btnmain3").text("SELENGKAPNYA");
        $("#monitoringdashboard").hide();
      }
    });
    
    $('#btnSbmtLog').on('click', function() {
        
        
        //validasi formulir terlebih dahulu
        var allAreFilled = true;
        document.getElementById("mod").querySelectorAll("[required]").forEach(function(i) {
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
            
            let getpin = '';
            $(".inputPass").each(function(){
                   getpin += $(this).val();
            })  
            // window.location = '<?= base_url(); ?>Inisiasi';
            var username = "ahmaddahlan";
            var password = "oncardppad";

            var form_data = new FormData();
            form_data.append('username', username);
            form_data.append('password', password);

            $("#btnSbmtLog").html('<span class="button__text">Memproses </span><i class="button__icon fas fa-chevron-right"></i>');
            $('#btnSbmtLog').prop("disabled", true);
            $("#btnSbmtLog").attr('style', 'cursor:not-allowed');

            const ajaxAxiosLogin = async () => {
                const login = await axios.post("<?= base_url('Login/LoginActions') ?>", form_data).catch((err) => {
                    // kesalahan login
                    console.log(err.response.data);
                    
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Username dan password tidak sesuai',
                        showConfirmButton: true,

                    });
                    
                    $("#btnSbmtLog").html('<span class="button__text">MASUK </span><i class="button__icon fas fa-chevron-right"></i>');
                    $('#btnSbmtLog').prop("disabled", false);
                    $("#btnSbmtLog").attr('style', 'cursor:pointer');
                    
                });
                $(".loading").fadeOut();
                
                    if(login.data.result.access_token){
                        // console.log(login.data.result.user);
                        sessionStorage.setItem('_token', login.data.result.access_token);
                        localStorage.setItem('_token', login.data.result.access_token);
                        sessionStorage.setItem('_user_id', login.data.result.user);
                        localStorage.setItem('_user_id', login.data.result.user);
                        
                        
                        if(login.data.result.user.status_user!='isActive'){
                            window.location.href = "<?= base_url('Manajemen/install') ?>";        
                        }else {
                            window.location.href = "<?= base_url('Manajemen') ?>";
                        }
                        
                    }else {
                        
                        $("#btnSbmtLog").html('<span class="button__text">MASUK </span><i class="button__icon fas fa-chevron-right"></i>');
                        $('#btnSbmtLog').prop("disabled", false);
                        $("#btnSbmtLog").attr('style', 'cursor:pointer');
                        
                        Toastify({
                          text: "Kombinasi username dan password tidak sesuai",
                          duration: 3000,
                          close :true,
                          gravity:"bottom",
                          position:"left",
                          className: "errorMessage",
                          
                        }).showToast();
                        
                    }
                
                    
                    
                    
                    
            }
            ajaxAxiosLogin();
        }

    });

  </script>

  </div><!-- Body inner end -->
  </body>

  </html>