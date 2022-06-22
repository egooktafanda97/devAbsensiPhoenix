<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Demo OnCard by PhoenixKD</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="colorlib" />

<link rel="icon" href="https://cdn.pixabay.com/photo/2019/12/08/04/55/box-4680467_960_720.png" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/waves.min.css" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/feather.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/font-awesome-n.min.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/chartist.css" type="text/css" media="all">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/widget.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;700;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&display=swap');
</style>
<style type="text/css">
    html,
body {
    width:100%;
  /*height: 100vh;*/
  background:none!important;
  font-family: 'Nunito', sans-serif!important;
}

html {
  background: #eee;
}


.box {
  width: 300px;
  height: 300px;
  border-radius: 5px;
  box-shadow: 0 2px 30px rgba(0, 0, 0, 0.2);
  background: #fbfcee;
  position: relative;
  overflow: hidden;
  margin:auto;
  margin-top:15%;
  transform: translate3d(0, 0, 0);
}

.wave {
  opacity: 0.4;
  position: absolute;
  top: 3%;
  left: 50%;
  background: #0af;
  width: 250px;
  height: 250px;
  margin-left: -125px;
  margin-top: 25px;
  transform-origin: 50% 48%;
  border-radius: 43%;
  -webkit-animation: drift 3000ms infinite linear;
          animation: drift 3000ms infinite linear;
}

.wave.-three {
  -webkit-animation: drift 5000ms infinite linear;
          animation: drift 5000ms infinite linear;
}

.wave.-two {
  -webkit-animation: drift 7000ms infinite linear;
          animation: drift 7000ms infinite linear;
  opacity: 0.1;
  background: yellow;
}

.box:after {
  content: "";
  display: block;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, #2ed8b6, rgba(255, 248, 221, 0) 80%, rgba(255, 255, 255, 0.5));
  z-index: 11;
  transform: translate3d(0, 0, 0);
}

.title {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  z-index: 1;
  line-height: 300px;
  text-align: center;
  transform: translate3d(0, 0, 0);
  color: white;
  text-transform: uppercase;
  /*font-family: "Playfair Display", serif;*/
  letter-spacing: 0.4em;
  font-size: 24px;
  text-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
  text-indent: 0.3em;
}

@-webkit-keyframes drift {
  from {
    transform: rotate(0deg);
  }
  from {
    transform: rotate(360deg);
  }
}

@keyframes drift {
  from {
    transform: rotate(0deg);
  }
  from {
    transform: rotate(360deg);
  }
}
b {
    font-weight:bolder!important;
}
</style>

<script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
</head>
<body>

<div class="loader-bg">
<div class="loader-bar"></div>
</div>

<div class='box'>
  <div class='wave -one'></div>
  <div class='wave -two'></div>
  <div class='wave -three'></div>
  <input type="text" id="horeee" style="color:transparent; border:none;position:absolute;"/>
  <div id="output"  class='title' autocomplete="off">Scan Kartu</div>
  <button id="next" class="btn btn-info" style="position:absolute; bottom:-100px;margin-left:30%;display:none;border-radius:0px;margin-top:20px;">Lanjutkan</button>  
</div>

<div class="row box2" style="padding:120px;">
    
</div>


<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/popper.min.js"></script>

<script data-cfasync="false" src="<?php echo base_url(); ?>/assets/js/email-decode.min.js"></script><script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-ui.min.js"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="<?php echo base_url(); ?>/assets/js/popper.min.js"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>/assets/js/waves.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.slimscroll.js"></script>

<script src="<?php echo base_url(); ?>/assets/js/jquery.flot.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery.flot.categories.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="<?php echo base_url(); ?>/assets/js/curvedlines.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery.flot.tooltip.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

<script src="<?php echo base_url(); ?>/assets/js/chartist.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

<script src="<?php echo base_url(); ?>/assets/js/amcharts.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="<?php echo base_url(); ?>/assets/js/serial.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="<?php echo base_url(); ?>/assets/js/light.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

<script src="<?php echo base_url(); ?>/assets/js/pcoded.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="<?php echo base_url(); ?>/assets/js/vertical-layout.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="<?php echo base_url(); ?>/assets/js/custom-dashboard.min.js"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="<?php echo base_url(); ?>/assets/js/script.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" integrity="sha512-Rd5Gf5A6chsunOJte+gKWyECMqkG8MgBYD1u80LOOJBfl6ka9CtatRrD4P0P5Q5V/z/ecvOCSYC8tLoWNrCpPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="<?php echo base_url(); ?>/assets/js/rocket-loader.min.js" data-cf-settings="d2d1d6e2f87cbebdf4013b26-|49" defer=""></script>


<script type="text/javascript">

    $(document).ready(function() {
        $('#horeee').focus();
    });
    
    $('#horeee').keyup(function() {
        if(this.value.length==10){
            
            runTextSearchCard(this.value);
                    
        }
    });
    
    function btnOut(){
        window.location.reload();
    };
    
    $('#next').on('click', function(){
        
        let nama = $('#horeee').val();
        
        
        if(nama=='0003919497'){
            nama = 'Cyndi';
        }else if(nama=='0003920058'){
            nama = 'Ridho';
        }else if(nama=='0003920599'){
            nama = 'Preti Epira';
        }else if(nama=='0003920866'){
            nama = 'Argeomerta Lisva';
        }else if(nama=='0003920058'){
            nama = 'Ridho';
        }else if(nama=='0003920333'){
            nama = 'Ego';
        }else if(nama=='0003918937'){
            nama = 'M. Fikri';
        }else if(nama=='0003921401'){
            nama = 'Hawari Putri';
        }else if(nama=='0003921133'){
            nama = 'Faiz Azka';
        }
        
        
        let htmlnya =`
            <div class="col-md-12 col-12 text-center mb-5">
                <h4>Hi, selamat datang <font id="namaUser" style="border-bottom:2px solid #000;font-weight:900;">${nama},</font></h4>
                <h2 style="line-height:1em;">OnCard berkomitmen dalam menyediakan <br/><b>1 Kartu</b> untuk <b>Seluruh</b> Kegiatan Siswa</h2>
                <h5>Fitur yang tersedia</h5>
                
            </div>
            <div class="col-md-3 col-lg-6 col-3 text-center  animate__animated animate__bounce" data-wow-duration="2s" data-wow-delay="5s" >
                <div class="card">
                    <div class="card-body">
                        
                        <lord-icon
                            src="https://cdn.lordicon.com/iltqorsz.json"
                            trigger="loop"
                            colors="primary:#121331,secondary:#08a88a"
                            style="width:60px;height:60px;display:block;margin:auto;">
                        </lord-icon>
                        <h4 class="mt-3">Sistem Kantin Modern</h4>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-lg-3 col-3 text-center  animate__animated animate__bounce" data-wow-duration="2s" data-wow-delay="5s" >
                <div class="card">
                    <div class="card-body">
                        
                        <lord-icon
                              src="https://cdn.lordicon.com/gqzfzudq.json"
                            trigger="loop"
                            colors="primary:#121331,secondary:#08a88a"
                            style="width:60px;height:60px;display:block;margin:auto;">
                        </lord-icon>
                        <h4 class="mt-3">Perpustakaan Digital</h4>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-lg-3 col-3 text-center  animate__animated animate__bounce" data-wow-duration="2s" data-wow-delay="5s" >
                <div class="card">
                    <div class="card-body">
                        
                        <lord-icon
                             src="https://cdn.lordicon.com/nocovwne.json"
                            trigger="loop"
                            colors="primary:#121331,secondary:#08a88a"
                            style="width:60px;height:60px;display:block;margin:auto;">
                        </lord-icon>
                        <h4 class="mt-3">Rapor Digital</h4>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-lg-3 col-3 text-center  animate__animated animate__bounce" data-wow-duration="2s" data-wow-delay="5s" >
                <div class="card">
                    <div class="card-body">
                        
                        <lord-icon
                             src="https://cdn.lordicon.com/eszyyflr.json"
                            trigger="loop"
                            colors="primary:#121331,secondary:#08a88a"
                            style="width:60px;height:60px;display:block;margin:auto;">
                        </lord-icon>
                        <h4 class="mt-3">Sistem Penerimaan Siswa Baru</h4>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-lg-3 col-3 text-center  animate__animated animate__bounce" data-wow-duration="2s" data-wow-delay="5s" >
                <div class="card">
                    <div class="card-body">
                        
                        <lord-icon
                            src="https://cdn.lordicon.com/tyounuzx.json"
                            trigger="loop"
                            colors="primary:#121331,secondary:#08a88a"
                            style="width:60px;height:60px;display:block;margin:auto;">
                        </lord-icon>
                        <h4 class="mt-3">Sistem Monitoring dari Orangtua</h4>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-lg-3 col-3 text-center  animate__animated animate__bounce" data-wow-duration="2s" data-wow-delay="5s" >
                <div class="card">
                    <div class="card-body">
                        
                        <lord-icon
                              src="https://cdn.lordicon.com/nxaaasqe.json"
                            trigger="loop"
                            colors="primary:#121331,secondary:#08a88a"
                            style="width:60px;height:60px;display:block;margin:auto;">
                        </lord-icon>
                        <h4 class="mt-3">Manajemen Keuangan</h4>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-lg-3 col-3 text-center  animate__animated animate__bounce" data-wow-duration="2s" data-wow-delay="5s" >
                <div class="card">
                    <div class="card-body">
                        
                        <lord-icon
                            src="https://cdn.lordicon.com/nxaaasqe.json"
                            trigger="loop"
                            colors="primary:#121331,secondary:#08a88a"
                            style="width:60px;height:60px;display:block;margin:auto;">
                        </lord-icon>
                        <h4 class="mt-3">Sistem Rajin Menabung</h4>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12 col-lg-12 mt-5 text-center">
                <button type="button" class="btn btn-danger btn-lg" onclick="btnOut()">Keluar</button>
            </div>
        `;
       $('.box').attr('style','display:none');
       $('.box2').html(htmlnya);
    //   $('#secondDiv').fadeIn();
      
    });
    
    function runTextSearchCard(str){
        
        
            
        var theLetters = "abcdefghijklmnopqrstuvwxyz#%&^+=-"; //You can customize what letters it will cycle through
        var ctnt = str; // Your text goes here
        var speed = 10; // ms per frame
        var increment = 3; // frames per step. Must be >2
        
            
        var clen = ctnt.length;       
        var si = 0;
        var stri = 0;
        var block = "";
        var fixed = "";
        //Call self x times, whole function wrapped in setTimeout
        (function rustle (i) {          
        setTimeout(function () {
          if (--i){rustle(i);}
          nextFrame(i);
          si = si + 1;        
        }, speed);
        })(clen*increment+1); 
        function nextFrame(pos){
          for (var i=0; i<clen-stri; i++) {
            //Random number
            var num = Math.floor(theLetters.length * Math.random());
            //Get random letter
            var letter = theLetters.charAt(num);
            block = block + letter;
          }
          if (si == (increment-1)){
            stri++;
          }
          if (si == increment){
          // Add a letter; 
          // every speed*10 ms
          fixed = fixed +  ctnt.charAt(stri - 1);
          si = 0;
          }
          $("#output").html(fixed + block);
          
          block = "";
        }
        $('#next').fadeIn();
        $('#next').attr('style','position:absolute;bottom:0px; margin-left:30%;display:block;border-radius:0px;margin-top:20px;z-index:19339;');
    }
</script>
<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:25 GMT -->
</body>
</html>