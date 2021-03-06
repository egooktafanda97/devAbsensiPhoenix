<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Instalasi Sistem</title>

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
  @import url('https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,400;0,500;0,700;0,800;0,900;1,100;1,900&display=swap');

  * {
    box-sizing: border-box;
  }

  body {
    font-family: 'Overpass', sans-serif;
    background-color: #fef8f8;
    display:block;
    padding:50px;
    background:url(<?=base_url();?>assets/jpg/bginstall.jpeg);
    background-size:cover;
    background-position:center;
  }
  
  .modal {
          backdrop-filter: blur(10px)!important;

  }
  
  .konten {
      margin:auto;
      width:70%;
      height:76vh;
      overflow-y:auto;
      border-radius:10px;
      padding:5vh;
      background: rgb(59,207,118);
      background: linear-gradient(0deg, rgba(59,207,118,0.48503151260504207) 0%, rgba(189,255,215,0.5158438375350141) 96%);
      box-shadow:0px 0px 15px rgba(189,255,215,1);
      backdrop-filter:blur(10px);

  }
  
  .konten::-webkit-scrollbar-track
    {
    	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    	background-color: #F5F5F5;
    	border-radius:50px;
    	overflow:hidden!important;
    }
    
    .konten::-webkit-scrollbar
    {
    	width: 1.5vh;
    	background-color: #F5F5F5;
    	border-radius:50px;
    }
    
    .konten::-webkit-scrollbar-thumb
    {
    	background-color: rgba(59,207,118,0.48503151260504207);
    	border-radius:50px;
    }
  
  .sider {
      display:grid;
      grid-template-columns:repeat(7,1fr);
      gap:20px;
  }
  
  .sidebarKonten {
      display:block;
  }
  
  .activeSider {
      width:50px!important;
      height:50px!important;
      border:5px solid #bfffbb!important;
      background:transparent!important;
      padding-top:9px!important;
  }
  
  .logoutSess {
      position:relative;
      display:block;
      margin:auto;
      z-index:69;
      text-align:center;
      margin-top:20px;
      
  }
  
    h1 { font-size:5vh!important; }
    h2 { font-size:4vh!important; }
    h3 { font-size:3vh!important; }
    h4 { font-size:2vh!important; }
    p { font-size:1.6vh!important; }
    
  @media (max-width:820px){
        h1 { font-size:3.5vh!important; }
        h2 { font-size:2vh!important; }
        h3 { font-size:2vh!important; }
        h4 { font-size:2vh!important; }
        p { font-size:2vh!important; }
        
        body{
            padding:0px;
        }
        .konten {
            width:100%;
            display:block;
            height:auto;
            padding:6vh;
            border-radius:0vh;
            border-bottom-right-radius:3vh;
            border-bottom-left-radius:3vh;
        }
        .sider {
            display:block;
        }
        
        .sidebarKonten {
            display:grid;
            margin-bottom:30px;
            grid-template-columns:repeat(5,1fr);
        }
        .penghubung {
            width:100%!important;
            height:3px!important;
        }
    }
    
    .progress {
      margin:0px auto;
      padding:0;
      width:100%;
      height:10px;
      overflow:hidden;
      background:#e5e5e5;
      border-radius:6px;
    }
    
    .bar {
    	position:relative;
      float:left;
      min-width:1%;
      height:100%;
      background:#4ad481;
    }
    
    .percent {
    	position:absolute;
      top:50%;
      left:50%;
      transform:translate(-50%,-50%);
      margin:0;
      font-family:tahoma,arial,helvetica;
      font-size:8px!important;
      color:white;
    }
    .imp1,.imp2,.imp3 {
        margin-right: 20px;
    }
    .datago {
        width: 20px;
        height: 20px;
        background: url(<?=base_url();?>assets/gif/loading-2.gif);
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        padding: 10px;
    }
    
    #step2,#step3 {
        display: none;
    }
    .errorMessage {
            background: rgb(176, 0, 71);
            background: linear-gradient(180deg, rgba(176, 0, 71, 1) 0%, rgba(131, 32, 32, 1) 100%);
        }

        .successMessage {
            background: linear-gradient(to right, #00b09b, #96c93d);
        }

</style>

</head>
<body>
    
    <div class="konten">
        <h1 style="line-height:1.5vh;">Instalasi sistem</h1>
        
        <h3 style="text-transform:lowercase!important;font-weight:400;">Selamat datang <span style="border-bottom:3px solid #4ad481;"></span></h3>
        
        <div class="sider">
            <div class="sidebarKonten" style="border-radius:10px; background:#4ad481;color:#fff; text-align:center; padding:25px;">
                <div class="nombor1 activeSider" style="width:30px;height:30px;border-radius:1000px; text-align:center; background:#61eb7f;margin:auto;padding-top:5px;">1</div>
                <div class="penghubung" style="width:3px;height:50px;border-radius:0px; text-align:center; background:#bfffbb;margin:auto;padding-top:5px;"></div>
                <div class="nombor2 " style="width:30px;height:30px;border-radius:1000px; text-align:center; background:#61eb7f;margin:auto;padding-top:5px;">2</div>
                <div class="penghubung" style="width:3px;height:50px;border-radius:0px; text-align:center; background:#bfffbb;margin:auto;padding-top:5px;"></div>
                <div class="nombor3" style="width:30px;height:30px;border-radius:1000px; text-align:center; background:#61eb7f;margin:auto;padding-top:5px;">3</div>
            </div>
            <div style="grid-column:2/span 6;display:block;">
                
                <div id="step1" style="padding:5px; border-radius:5px; margin-bottom:20px;">
                    <p style="padding:5px; padding-left:15px; padding-right:15px; border-radius:5px; color:#fff; background:#f78b25;font-size:1.3vh; margin-bottom:20px; display:inline-block;">Step 1 - Lisensi</p>
                    <h4 style="text-transform:initial;line-height:1vh;">Masukkan kode lisensi</h4>
                    <p style="line-height:1.8vh;">10 digit kode lisensi yang diberikan oleh pihak Oncard.id</p>
                    <div style="display:flex; align-items:center;">
                    <input type="text" id="putLisensi" class="form-control" style="border-radius:5px; font-size:2vh;padding:14px; letter-spacing:10px;background:#fff; border:2px solid #61eb7f;width:auto; margin-right:10px;" maxlength="10"/>
                    <button type="button" class="btn btn-lg btn-success" id="btnSbmtLog"><i class="las la-check" style="line-height:1.8vh;"></i></button>
                    </div>
                </div>
                
                <div id="step2" style="padding:5px; border-radius:5px; margin-bottom:20px;">
                    <p style="padding:5px; padding-left:15px; padding-right:15px; border-radius:5px; color:#fff; background:#f78b25;font-size:1.3vh; margin-bottom:20px; display:inline-block;">Step 2 - Import data</p>
                    <h4 style="text-transform:initial;line-height:1vh;">Importing data</h4>
                    <p style="line-height:1.8vh;">Harap menunggu hingga proses import data selesai.</p>

                    <p class="poin1"><span class="imp1"></span> Mengimport data instansi</p>
                    <p class="poin2"><font class="imp2"></font> Mengimport data siswa</p>
                    <p class="poin3"><font class="imp3"></font> Mengimport data staff & guru</p>

                    <div style="display:flex; align-items:center;">
                        <div class="progress">
                        	<div class="bar" style="width:100%">
                        		<p class="percent">100%</p>
                        	</div>
                        </div>
                    </div>
                </div>
                
                
                <div id="step3" style="padding:5px; border-radius:5px; margin-bottom:20px;">
                    <p style="padding:5px; padding-left:15px; padding-right:15px; border-radius:5px; color:#fff; background:#f78b25;font-size:1.3vh; margin-bottom:20px; display:inline-block;">Step 3 - Selesai</p>
                    <h4 style="text-transform:initial;line-height:1vh;">Congratulations!</h4>
                    <p style="line-height:1.8vh;">Proses instalasi sistem telah berhasil dilakukan.<br/>Silahkan gunakan tombol berikut ini untuk login ke sistem absensi.</p>
                    <button type="button" class="btn btn-success" onclick="window.location.href='<?=base_url();?>'">Login ke sistem absensi sekarang.</button>
                </div>
                
                
            </div>
        </div>
        
        
        
    </div>

    <div class="logoutSess">
            <button type="button" class="btn btn-sm btn-danger" onclick="logoutBtn();">
                <i class="las la-power-off"></i> Batal instalasi
            </button>
        </div>

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
    
    function logoutBtn() {
        sessionStorage.removeItem('_token');
        window.location.href = '<?= base_url("Login/logoutUser"); ?>';
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
    $('#btnSbmtLog').on('click', function() {
        
            var username = $("#putLisensi").val();
            
            var form_data = new FormData();
            form_data.append('secret', username);
            
            $("#btnSbmtLog").attr('class','btn btn-lg btn-secondary');
            $('#btnSbmtLog').prop("disabled", true);
            $("#btnSbmtLog").attr('style', 'cursor:not-allowed');

            const ajaxAxiosLogin = async () => {
                const login = await axios.post("<?=base_url();?>rest/api/sync/import/check", form_data).catch((err) => {
                    // kesalahan login
                    console.log(err.response.data);
                    
                    Toastify({
                          text: "Kode lisensi tidak valid!",
                          duration: 3000,
                          close :true,
                          gravity:"bottom",
                          position:"left",
                          className: "errorMessage",
                          
                        }).showToast();
                    
                    $("#btnSbmtLog").attr('class','btn btn-lg btn-success');
                    $('#btnSbmtLog').prop("disabled", false);
                    $("#btnSbmtLog").attr('style', 'cursor:pointer');

                });
                $(".loading").fadeOut();
            if (login.status == 200) {

                if(login.data.check_lisensi == true){
                    // console.log(login.data.result.user);
                    Toastify({
                      text: "Kode lisensi valid!",
                      duration: 3000,
                      close :true,
                      gravity:"bottom",
                      position:"left",
                      className: "successMessage",
                      
                    }).showToast();

                    $("#putLisensi").attr('disabled','disabled');
                    $("#btnSbmtLog").attr('class','btn btn-lg btn-secondary');
                    $('#btnSbmtLog').prop("disabled", true);
                    $("#btnSbmtLog").attr('style', 'cursor:pointer');

                    $("#step2").attr("style","display:block!important;");
                    $(".nombor1").removeClass("activeSider");
                    $(".nombor2").addClass("activeSider");

                    $('.bar').css('width','0%');
                    $('.percent').text('0%');

                    
                    
                    $(".poin1").css('display','block');
                    $(".poin2").css('display','none');
                    $(".poin3").css('display','none');

                    $(".imp1").addClass('datago');
                    

                    runFunctionImportingInstansi();
                    
                }else {
                    
                    $("#btnSbmtLog").attr('class','btn btn-lg btn-success');
                    $('#btnSbmtLog').prop("disabled", false);
                    $("#btnSbmtLog").attr('style', 'cursor:pointer');
                    
                    Toastify({
                      text: "Kode lisensi tidak valid!",
                      duration: 3000,
                      close :true,
                      gravity:"bottom",
                      position:"left",
                      className: "errorMessage",
                      
                    }).showToast();
                    
                }
            }

            }
            ajaxAxiosLogin();

    });

    function runFunctionImportingInstansi(){
            var username = $("#putLisensi").val();
            
            var form_data = new FormData();
            form_data.append('secret', username);
            
            const ajaxAxiosLogin = async () => {
                const login = await axios.post("<?=base_url();?>rest/api/sync/import/instansi", form_data).catch((err) => {
                    // kesalahan login
                    console.log(err.response.data);
                    
                    Toastify({
                          text: "Proses import gagal! Ulangi kembali...",
                          duration: 3000,
                          close :true,
                          gravity:"bottom",
                          position:"left",
                          className: "errorMessage",
                          
                        }).showToast();

                    $(".imp1").html("<i class='las la-times text-danger'></i>");
                    
                });
                $(".loading").fadeOut();
            if (login.status == 200) {

                if(login.data.status == true){
                    // console.log(login.data.result.user);
                    
                    $(".poin1").css('display','block');
                    $(".poin2").css('display','block');
                    $(".poin3").css('display','none');

                    $(".imp1").removeClass('datago');
                    $(".imp1").html("<i class='las la-check text-success'></i>");
                    $(".imp2").addClass('datago');

                    $('.bar').css('width','33%');
                    $('.percent').text('33%');
                    

                    runFunctionImportingSiswa();
                    
                }else {
                    
                    
                    Toastify({
                      text: "Proses import gagal! Ulangi kembali...",
                      duration: 3000,
                      close :true,
                      gravity:"bottom",
                      position:"left",
                      className: "errorMessage",
                      
                    }).showToast();

                    $(".imp1").html("<i class='las la-times text-danger'></i>");
                    $(".imp1").removeClass('datago');
                    
                }
            }

            }
            ajaxAxiosLogin();
    }

    function runFunctionImportingSiswa(){
            var username = $("#putLisensi").val();
            
            var form_data = new FormData();
            form_data.append('secret', username);
            
            const ajaxAxiosLogin = async () => {
                const login = await axios.post("<?=base_url();?>rest/api/sync/import/siswa", form_data).catch((err) => {
                    // kesalahan login
                    console.log(err.response.data);
                    
                    Toastify({
                          text: "Proses import gagal! Ulangi kembali...",
                          duration: 3000,
                          close :true,
                          gravity:"bottom",
                          position:"left",
                          className: "errorMessage",
                          
                        }).showToast();
                    
                });
                $(".loading").fadeOut();
            if (login.status == 200) {

                if(login.data.status == true){
                    // console.log(login.data.result.user);
                    
                    $(".poin1").css('display','block');
                    $(".poin2").css('display','block');
                    $(".poin3").css('display','block');

                    $(".imp1").html("<i class='las la-check text-success'></i>");
                    $(".imp2").removeClass('datago');
                    $(".imp2").html("<i class='las la-check text-success'></i>");
                    $(".imp3").addClass('datago');

                    $('.bar').css('width','66%');
                    $('.percent').text('66%');
                    

                    runFunctionImportingStaff();
                    
                }else {
                    
                    
                    Toastify({
                      text: "Proses import gagal! Ulangi kembali...",
                      duration: 3000,
                      close :true,
                      gravity:"bottom",
                      position:"left",
                      className: "errorMessage",
                      
                    }).showToast();

                    $(".imp2").html("<i class='las la-times text-danger'></i>");
                    $(".imp2").removeClass('datago');
                    
                }
            }

            }
            ajaxAxiosLogin();
    }

    function runFunctionImportingStaff(){
            var username = $("#putLisensi").val();
            
            var form_data = new FormData();
            form_data.append('secret', username);
            
            const ajaxAxiosLogin = async () => {
                const login = await axios.post("<?=base_url();?>rest/api/sync/import/staff", form_data).catch((err) => {
                    // kesalahan login
                    console.log(err.response.data);
                    
                    Toastify({
                          text: "Proses import gagal! Ulangi kembali...",
                          duration: 3000,
                          close :true,
                          gravity:"bottom",
                          position:"left",
                          className: "errorMessage",
                          
                        }).showToast();
                    
                });
                $(".loading").fadeOut();
            if (login.status == 200) {

                if(login.data.status == true){
                    // console.log(login.data.result.user);

                    $(".imp1").html("<i class='las la-check text-success'></i>");
                    $(".imp2").html("<i class='las la-check text-success'></i>");
                    $(".imp3").removeClass('datago');
                    $(".imp3").html("<i class='las la-check text-success'></i>");
                    

                    $("#step3").attr("style","display:block!important;");
                    $(".nombor2").removeClass("activeSider");
                    $(".nombor3").addClass("activeSider");

                    $('.bar').css('width','100%');
                    $('.percent').text('100%');
                    
                }else {
                    
                    
                    Toastify({
                      text: "Proses import gagal! Ulangi kembali...",
                      duration: 3000,
                      close :true,
                      gravity:"bottom",
                      position:"left",
                      className: "errorMessage",
                      
                    }).showToast();

                    $(".imp3").html("<i class='las la-times text-danger'></i>");
                    $(".imp3").removeClass('datago');
                    
                }
            }

            }
            ajaxAxiosLogin();
    }

  </script>

  </div><!-- Body inner end -->
  </body>

  </html>