<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Inisiasi Data KH. Ahmad Dahlan by Oncard</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Kasir untuk sekolah" />
    <meta name="keywords" content="kantin, sekolah, kantin sekolah online, online cashier, kasir online">
    <meta name="author" content="phoenixkd" />

    <link rel="icon" href="#" type="image/x-icon">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- tambahan ego  -->
    <link rel="stylesheet" href="https://www.jqueryscript.net/demo/Bootstrap-4-Dropdown-Select-Plugin-jQuery/dist/css/bootstrap-select.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- ------------- -->
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;0,900;1,900&display=swap');

        body {
            color: #000;
            overflow-x: hidden;
            /*height: 100%;*/
            background: rgb(0, 255, 106);
            background: linear-gradient(90deg, rgba(0, 255, 106, 1) 0%, rgba(28, 126, 25, 1) 100%);
            /*background-repeat: no-repeat*/
            font-family: Montserrat, sans-serif;
        }

        .drag-area {
            border: 1px dashed #e0e0e0;
            height: 380px;
            width: 100%;
            border-radius: 0px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .drag-area.active {
            border: 2px solid #00ed6a;
        }

        .drag-area .icon {
            font-size: 100px;
            color: #e0e0e0;
        }

        .drag-area header {
            font-size: 20px;
            font-weight: 500;
            color: #e0e0e0;
        }

        .drag-area span {
            font-size: 25px;
            font-weight: 500;
            color: #e0e0e0;
            margin: 10px 0 15px 0;
        }

        .drag-area button {
            padding: 10px 25px;
            font-size: 20px;
            font-weight: 500;
            border: none;
            outline: none;
            background: #00ed6a;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        .drag-area img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 5px;
        }

        .bg-tile {
            background: url('https://www.freeiconspng.com/thumbs/grid-png/triangulated-grid-png-22.png');
            position: fixed;
            z-index: 0;
            background-repeat: repeat;
            opacity: .22;
            width: 100vw;
            height: 100vh;
        }

        .card,
        .btn,
        .form-control {
            border-radius: 0px;
            padding-bottom: 30px;
        }

        .card0 {
            background-color: #F5F5F5;
            border-radius: 0px;
            z-index: 0 padding-bottom:20px;
        }

        .left-corner {
            background: url('https://www.fsplifestyle.com/upload/VIVA/s02_bg_left.png');
            background-repeat: no-repeat;
            position: absolute;
            right: 0px;
            top: 0px;
            width: 323px;
            height: 303px;
            z-index: -3;
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1);
        }

        .card00 {
            z-index: 0
        }

        .card1 {
            margin-left: 140px;
            z-index: 0;
            border-right: 1px solid #F5F5F5
        }

        .card2 {
            display: none
        }

        .card2.show {
            display: block
        }

        .social {
            border-radius: 50%;
            background-color: #cdffe2;
            color: #35e576;
            height: 47px;
            width: 47px;
            padding-top: 16px;
            cursor: pointer
        }

        input,
        select {
            border-radius: 0px;
            box-sizing: border-box;
            color: #9E9E9E;
            border: 1px solid #BDBDBD;
            font-size: 16px;
            letter-spacing: 1px;
            height: 50px !important;
            padding-bottom: 0px !important;
        }

        input:focus {
            border: 1px solid #35e576 !important;
        }

        select {
            width: 100%;
            margin-bottom: 85px
        }

        input:focus,
        select:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #35e576 !important;
            outline-width: 0 !important;
        }

        .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
            background-color: #35e576
        }

        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
            width: 100%
        }

        .form-control-placeholder {
            position: absolute;
            top: 0px;
            padding: 12px 0px 0 2px;
            transition: all 300ms;
            opacity: 0.5
        }

        .form-control:focus+.form-control-placeholder,
        .form-control:valid+.form-control-placeholder {
            font-size: 75%;
            top: 10px;
            transform: translate3d(0, -100%, 0);
            opacity: 1;
            background-color: #fff;
        }

        .next-button {
            width: 100%;
            height: auto;
            background-color: #BDBDBD;
            color: #fff;
            border-radius: 0px;
            padding: 20px;
            cursor: pointer
        }

        .next-button:hover {
            background-color: #35e576;
            color: #fff
        }

        .get-bonus {
            margin-left: 154px
        }

        .pic {
            width: 230px;
            height: 110px
        }

        #progressbar {
            position: absolute;
            left: 35px;
            overflow: hidden;
            color: #35e576
        }

        #progressbar li {
            list-style-type: none;
            font-size: 8px;
            font-weight: 400;
            margin-bottom: 36px;


        }

        #progressbar li:nth-child(3) {
            margin-bottom: 33px
        }

        #progressbar .step0:before {
            content: "";
            color: #fff
        }

        #progressbar li:before {
            width: 30px;
            height: 30px;
            line-height: 30px;
            display: block;
            font-size: 20px;
            background: #fff;
            border: 2px solid #35e576;
            border-radius: 50%;
            margin: auto;
            z-index: 66;
        }

        #progressbar li:last-child:before {
            width: 30px;
            height: 30px;
        }

        #progressbar li:after {
            content: '';
            width: 3px;
            height: 66px;
            background: #BDBDBD;
            position: absolute;
            left: 54px;
            top: 15px;
            z-index: -1;
        }

        #progressbar li:last-child:after {
            top: 66px;
            height: 132px
        }

        #progressbar li:nth-child(3):after {
            top: 0px
        }

        #progressbar li:nth-child(2):after {
            top: 0px
        }

        #progressbar li:first-child:after {
            position: absolute;
            top: -66px
        }

        #progressbar li.active:after {
            background: #35e576
        }

        #progressbar li.active:before {
            background: #35e576;
            font-family: FontAwesome;
            content: "\f00c"
        }

        .tick {
            width: 100px;
            height: 100px
        }

        .prev {
            display: block;
            position: absolute;
            left: 40px;
            top: 20px;
            cursor: pointer
        }

        .prev:hover {
            color: #D50000 !important
        }

        @media screen and (max-width: 912px) {
            .card00 {
                padding-top: 30px
            }

            .card1 {
                border: none;
                margin-left: 50px
            }

            .card2 {
                border-bottom: 1px solid #F5F5F5;
                margin-bottom: 25px
            }

            .social {
                height: 30px;
                width: 30px;
                font-size: 15px;
                padding-top: 8px;
                margin-top: 7px
            }

            .get-bonus {
                margin-top: 40px !important;
                margin-left: 75px
            }
            
            

            #progressbar {
                left: -25px
            }
        }
        @media screen and (max-width:500px){
            .fixed-header {
                display:none;
            }
        }
        .fixed-header {
            position: fixed;
            top: 50px;
            display:block-inline;
            width: 100%; 
            left: 140px;
            z-index: 0;
            border-right: 1px solid #F5F5F5
        }
        .fixed-header h6 {
            margin-left:150px;
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
    </style>
</head>

<body style="margin:0px!important;">
    
    <div class="loading">Loading&#8230;</div>
    
    <div class="bg-tile"></div>
    <div class="container-fluid px-1 px-md-4 py-5 mx-auto">
        <div class="row d-flex justify-content-center" style="background:transparent!important;">
            <div class="col-12 col-md-11 col-lg-10 col-xl-9" style="background:transparent!important;">
                <div class="card card0 border-0" style="background:transparent!important;">
                    <div class="row" style="background:transparent!important;">
                        <div class="col-12" style="background:transparent!important;">
                            <div class="card card00 m-2 border-0">
                                <div class="left-corner"></div>
                                <div class="row text-left justify-content-center px-3 pl-5" style="padding-left:9%!important;">
                                    <p class="prev text-success" style=" position:absolute; left:2%; top:5%;background-color:#35e576;color:#fff!important; border-radius:0px;padding:5px; padding-left:10px; padding-right:2px; z-index:77"><span class="fa fa-arrow-left mr-2"> </span></p id="back">
                                    <h5 class="mt-4" style="display:block;position:relative;width:100%;">Inisiasi Oncard</h5>
                                    <h4 class="" style="display:block;position:relative;width:100%; font-weight:bolder;">Ponpes KH. Ahmad Dahlan</h4>
                                    <h6 class="mb-5" style="display:block;position:relative;width:100%;">Kabupaten Kuantan Singingi</h6>
                                </div>
                                <div class="row px-3 mt-4 ">
                                    <div class="col-md-4 ">
                                        <div class="followbottom card1 ">
                                            <ul id="progressbar" class="text-center ">
                                                <li class="active step0"></li>
                                                <li class="step0"></li>
                                                <li class="step0"></li>
                                                

                                            </ul>
                                            <h6 class="mb-5">Data Umum Instansi</h6>
                                            <h6 class="mb-5">Siswa & Kantin</h6>
                                            <h6 class="mb-5">Konfirmasi</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <form id="main">
                                        <div class="card2 first-screen show ml-2">
                                            <div class="row px-3">
                                                <div class="form-group mt-1 mb-1"> <input type="text" id="namaInstansi" class="form-control" required> <label class="ml-3 form-control-placeholder" for="namaInstansi">Nama Instansi</label> </div>

                                            </div>

                                            <div class="row px-3 mt-4">
                                                <div class="form-group mt-1 mb-1"> <input type="text" id="email" class="form-control" required> <label class="ml-3 form-control-placeholder" for="email">Email</label> </div>

                                            </div>

                                            <div class="row px-3 mt-4">
                                                <div class="form-group mt-1 mb-1"> <textarea type="text" id="about" class="form-control" required></textarea><label class="ml-3 form-control-placeholder" for="about">Tentang Instansi</label> </div>

                                            </div>

                                            <div class="row px-3 mt-4">
                                                <div class="form-group mt-1 mb-1"> <input type="text" id="visi" class="form-control" required> <label class="ml-3 form-control-placeholder" for="visi">Visi</label> </div>

                                            </div>

                                            <div class="row px-3 mt-4">
                                                <div class="form-group mt-1 mb-1"> <textarea type="text" id="misi" class="form-control" required rows="7"></textarea><label class="ml-3 form-control-placeholder" for="misi">Misi</label> </div>
                                            </div>
                                            <!-- tambahan wilayah -->
                                            
                                            <div class="row mt-4">
                                                <div class="col-md-12 col-lg-12 col-12">
                                                    <div class="form-group mt-1 mb-1"> <input type="text" id="alamatInstansi" class="form-control" required> <label class="ml-3 form-control-placeholder" for="alamat">Alamat instansi</label> </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-12 ">
                                                    <div class="form-group" >
                                                        <label>Provinsi</label>
                                                        <select data-size="7" data-live-search="true" class="form-conntrol selectpicker selectpicker_prov fill_selectbtn_in own_selectbox" data-title="Location" id="prov_list" data-width="100%" required>
                                                            <option value="" selected>Pilih Provinsi</option>
                                                            <?php foreach ($prov as $value) : ?>
                                                                <option value="<?= $value['id'] ?>"><?= $value['nama'] ?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-4 col-lg-4 col-12">
                                                    <div class="form-group c-kab">
                                                        <label>Kabupaten/ Kota</label>
        
                                                        <select data-size="7" data-live-search="true" class="form-conntrol selectpicker selectpicker_kab fill_selectbtn_in own_selectbox" data-title="Location" id="kab_list" data-width="100%" required>
                                                            <option value="" selected>Pilih Kabupaten Kota</option>
        
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-4 col-lg-4 col-12">
                                                    <div class="form-group c-kec">
                                                        <label>Kecamatan</label>
                                                        <select data-size="7" data-live-search="true" class="form-conntrol selectpicker selectpicker_kec fill_selectbtn_in own_selectbox" data-title="Location" id="kec_list" data-width="100%" required>
                                                            <option value="" selected>Pilih Kecamatan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            

                                            

                                            
                                            <!-- ---------------- -->

                                            <div class="row px-3 mt-4">
                                                <div class="drag-area">
                                                    <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                                    <header>Drag & Drop Logo Instansi</header>
                                                    <span>OR</span>
                                                    <button>Pilih Logo Instansi</button>
                                                    <input type="file" id="uploadFile" hidden required>
                                                </div>

                                            </div>

                                            <div class="row px-3 mt-4">
                                                <div class="next-button text-center mt-1"> <span class="fa fa-arrow-right mr-3"></span> Selanjutnya </div>
                                            </div>

                                        </div>
                                        <div class="card2 ml-2">
                                            <div class="row px-3">
                                                    
                                                    <div class="form-group mt-1 mb-1"> <input type="text" id="jumlahSiswa" class="form-control" required> <label class="ml-3 form-control-placeholder" for="jumlahSiswa">Jumlah Siswa</label> </div>
                                                    <div class="row" style="font-size:.8em; color:#b5b5b5;">
                                                        <div class="col-md-1 col-lg-1 col-1 text-right">
                                                            <i class="fa fa-info"></i>
                                                        </div>
                                                        <div class="col-md-10 col-lg-10 col-10" >
                                                            Jumlah siswa disini akan secara otomatis me-<i>create</i> jumlah akun atau kartu siswa. Jadi, kami sarankan untuk memasukkan data jumlah siswa dengan benar dan tepat. 
                                                        </div>
                                                    </div>
    
                                            </div>
                                            
                                            <div class="row px-3 mt-3">
                                                
                                                    <div class="form-group mt-1 mb-1"> <input type="text" id="jumlahKantin" class="form-control" required> <label class="ml-3 form-control-placeholder" for="jumlahKantin">Jumlah Kantin</label> </div>
                                                    <div class="row" style="font-size:.8em; color:#b5b5b5;">
                                                        <div class="col-md-1 col-lg-1 col-1 text-right">
                                                            <i class="fa fa-info"></i>
                                                        </div>
                                                        <div class="col-md-10 col-lg-10 col-10" >
                                                            Jumlah kantin disini akan secara otomatis me-<i>create</i> jumlah akun untuk kantin. Jadi, kami sarankan untuk memasukkan data jumlah kantin dengan benar dan tepat. 
                                                        </div>
                                                    </div>
                                                
                                            </div>
                                            <div class="row px-3 mt-3">
                                                <div class="next-button text-center mt-4"> <span class="fa fa-arrow-right mr-3"></span> Selanjutnya </div>
                                            </div>
                                        </div>
                                        <!--<div class="card2 ml-2">-->
                                        <!--    <div class="row px-3 mt-3">-->
                                        <!--        <p class="mb-0 w-100">Select your Country</p>-->
                                        <!--        <div class="form-group mt-3 mb-4">-->
                                        <!--            <div class="select mb-3"> <select name="account" class="form-control custom-select">-->
                                        <!--                    <option>India</option>-->
                                        <!--                    <option>USA</option>-->
                                        <!--                    <option>Germany</option>-->
                                        <!--                    <option>Mexico</option>-->
                                        <!--                </select> </div>-->
                                        <!--        </div>-->
                                        <!--        <div class="next-button text-center mt-1"> <span class="fa fa-arrow-right mr-3"></span> Selanjutnya </div>-->
                                        <!--    </div>-->


                                        <!--</div>-->
                                        <div class="card2">
                                            <div class="row mb-4 text-center">
                                                
                                                <h2 class="col-12 text-success"><strong style="text-shadow:2px 2px 0px #fff;">Yakin telah mengisikan data dengan benar?</strong></h2>
                                                
                                                <h6 class="col-12 mt-2"><i>Kami menyarankan Anda untuk dapat meninjau kembali dan memastikan bahwa data yang diinputkan sudah benar. </i></h6>
                                                <div class="col-12 text-center"><img style="width:50%;" src="https://i.pinimg.com/originals/09/b0/08/09b008ceb45878eb34180d23506e4212.gif"></div>
                                            </div>
                                            <div class="row mb-4 text-center" style="margin-top:-5%;">
                                                <div class="col-md-12 col-lg-12 col-12  text-center"><div class="next-button text-center mt-4" id="btnSubmitNext" style="display:block; margin:auto; width:100%;"> <span class="fa fa-arrow-right mr-3"></span> Submit Data </div></div>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/popper.min.js"></script>
    
    <!-- tambahan ego -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
    <script src="https://www.jqueryscript.net/demo/Bootstrap-4-Dropdown-Select-Plugin-jQuery/dist/js/bootstrap-select.js"></script>
    <!-- ------------ -->

    <script type="text/javascript">
    
        $(document).ready(function() {
            
            $(".loading").hide();

            $('#btnSubmitNext').on('click', function(){

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
                              text: 'Harap isi semua formulir inputan yang dibutuhkan.',
                              showConfirmButton: true,
                              
                            });
                            $(".loading").fadeOut();
                        }else {
                          
                          var namaInstansi = $("#namaInstansi").val();
                          var email = $("#email").val();
                          var about = $("#about").val();
                          var visi = $("#visi").val();
                          var misi = $("#misi").val();
                          var alamatInstansi = $("#alamatInstansi").val();
                          var prov_list = $("#prov_list").val();
                          var kab_list = $("#kab_list").val();
                          var kec_list = $("#kec_list").val();
                          var uploadFile = $("#uploadFile").val();
                          var jumlahSiswa = $("#jumlahSiswa").val();
                          var jumlahKantin = $("#jumlahKantin").val();
                          
                          var file_data = $('#uploadFile').prop('files')[0];
                          
                          var form_data = new FormData();     
                          form_data.append('filesss', file_data);
                          form_data.append('nama_instansi', namaInstansi);
                          form_data.append('email_instansi', email);
                          form_data.append('about', about);
                          form_data.append('visi', visi);
                          form_data.append('misi', misi);
                          form_data.append('alamat', alamatInstansi);
                          form_data.append('provinsi', prov_list);
                          form_data.append('kabupaten', kab_list);
                          form_data.append('kecamatan', kec_list);
                          form_data.append('uploadFile', uploadFile);
                          form_data.append('jumlahSiswa', jumlahSiswa);
                          form_data.append('jumlahKantin', jumlahKantin);
                          
                          const save = async (form_data)=>{
                              const posts = await axios.post('https://oncard.phoenixkreatifdigital.com/engine/api/instansi/create', form_data, {
                                  headers: {'Authorization': 'Bearer '+ sessionStorage.getItem('_token')}
                              }).catch((err)=>{
                                  
                                  $(".loading").fadeOut();
                                  Swal.fire({
                                      position: 'center',
                                      icon: 'error',
                                      title: 'Gagal Menyimpan',
                                      text: 'Data sudah ada dan tidak dapat ditambahkan lagi',
                                      showConfirmButton: true,
                                      
                                    });
                              });
                              
                              if(posts.status==200){
                                  if(posts.data.status_actions==true){
                                    $(".loading").fadeOut();
                                    window.location = "http://google.com";
                                  }else {
                                      $(".loading").fadeOut();
                                    Swal.fire({
                                      position: 'center',
                                      icon: 'error',
                                      title: 'Gagal Menyimpan',
                                      text: 'Data tidak dapat disimpan dalam saat ini, ulangi dilain waktu.',
                                      showConfirmButton: true,
                                      
                                    });
                                  }
                                  
                              }else {
                                  $(".loading").fadeOut();
                                  Swal.fire({
                                      position: 'center',
                                      icon: 'error',
                                      title: 'Gagal Menyimpan',
                                      text: 'Data sudah ada dan tidak dapat ditambahkan lagi',
                                      showConfirmButton: true,
                                      
                                    });
                              }
                          }
                          
                          save(form_data);
       
                        }

            });
            var current_fs, next_fs, previous_fs;

            // No BACK button on first screen
            if ($(".show").hasClass("first-screen")) {
                $(".prev").css({
                    'display': 'none'
                });
            }

            // Next button
            $(".next-button").click(function() {

                current_fs = $(this).parent().parent();
                next_fs = $(this).parent().parent().next();

                $(".prev").css({
                    'display': 'block'
                });

                $(current_fs).removeClass("show");
                $(next_fs).addClass("show");

                $("#progressbar li").eq($(".card2").index(next_fs)).addClass("active");

                current_fs.animate({}, {
                    step: function() {

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });

                        next_fs.css({
                            'display': 'block'
                        });
                    }
                });
            });

            // Previous button
            $(".prev").click(function() {

                current_fs = $(".show");
                previous_fs = $(".show").prev();

                $(current_fs).removeClass("show");
                $(previous_fs).addClass("show");

                $(".prev").css({
                    'display': 'block'
                });

                if ($(".show").hasClass("first-screen")) {
                    $(".prev").css({
                        'display': 'none'
                    });
                }

                $("#progressbar li").eq($(".card2").index(current_fs)).removeClass("active");

                current_fs.animate({}, {
                    step: function() {

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });

                        previous_fs.css({
                            'display': 'block'
                        });
                    }
                });
            });

        });

        //selecting all required elements
        const dropArea = document.querySelector(".drag-area"),
            dragText = dropArea.querySelector("header"),
            button = dropArea.querySelector("button"),
            input = dropArea.querySelector("input");
        let file; //this is a global variable and we'll use it inside multiple functions

        button.onclick = () => {
            input.click(); //if user click on the button then the input also clicked
        }

        input.addEventListener("change", function() {
            //getting user select file and [0] this means if user select multiple files then we'll select only the first one
            file = this.files[0];
            dropArea.classList.add("active");
            showFile(); //calling function
        });


        //If user Drag File Over DropArea
        dropArea.addEventListener("dragover", (event) => {
            event.preventDefault(); //preventing from default behaviour
            dropArea.classList.add("active");
            dragText.textContent = "Release to Upload File";
        });

        //If user leave dragged File from DropArea
        dropArea.addEventListener("dragleave", () => {
            dropArea.classList.remove("active");
            dragText.textContent = "Drag & Drop to Upload File";
        });

        //If user drop File on DropArea
        dropArea.addEventListener("drop", (event) => {
            event.preventDefault(); //preventing from default behaviour
            //getting user select file and [0] this means if user select multiple files then we'll select only the first one
            file = event.dataTransfer.files[0];
            showFile(); //calling function
        });

        function showFile() {
            let fileType = file.type; //getting selected file type
            let validExtensions = ["image/jpeg", "image/jpg", "image/png"]; //adding some valid image extensions in array
            if (validExtensions.includes(fileType)) { //if user selected file is an image file
                let fileReader = new FileReader(); //creating new FileReader object
                fileReader.onload = () => {
                    let fileURL = fileReader.result; //passing user file source in fileURL variable
                    // UNCOMMENT THIS BELOW LINE. I GOT AN ERROR WHILE UPLOADING THIS POST SO I COMMENTED IT
                    // let imgTag = `<img src="${fileURL}" alt="image">`; //creating an img tag and passing user selected file source inside src attribute
                    dropArea.innerHTML = imgTag; //adding that created img tag inside dropArea container
                }
                fileReader.readAsDataURL(file);
            } else {
                alert("This is not an Image File!");
                dropArea.classList.remove("active");
                dragText.textContent = "Drag & Drop to Upload File";
            }
        }


        // wilayah ajax request 
        $(".selectpicker_prov").change(function() {
            var selectedItem = $('.selectpicker_prov').val();

            var ruta = "<?= base_url() ?>/Wilayah/Kabupaten/" + selectedItem;
            var $select = $('.selectpicker_kab');
            $("#loads").css('display', 'block');

            const kabs = async (ruta) => {
                const get = await axios.get(ruta);
                if (get.status == 200) {
                    $select.html('');
                    get.data.map((prv, io) => {
                        if (io == 0) {
                            $select.append('<option value="" selected>Pilih Kabupaten</option>');
                            $select.append('<option value="' + prv.id + '">' + prv.nama + '</option>');
                        } else {
                            $select.append('<option value="' + prv.id + '">' + prv.nama + '</option>');
                        }

                    });
                    $("#loads").css('display', 'none');
                    $(".c-kab").show();
                    $('.selectpicker_kab').selectpicker('refresh');
                }
            }
            kabs(ruta);
        });

        $(".selectpicker_kab").change(function() {
            var selectedItem = $('.selectpicker_kab').val();

            var ruta = "<?= base_url() ?>/Wilayah/kecamatan/" + selectedItem;
            var $select = $('.selectpicker_kec');
            $("#loads").css('display', 'block');
            const func__kec = async (ruta) => {
                const get = await axios.get(ruta);
                if (get.status == 200) {
                    $select.html('');
                    get.data.map((prv, io) => {
                        if (io == 0) {
                            $select.append('<option value="" selected>Pilih Kecamatan</option>');
                            $select.append('<option value="' + prv.id + '">' + prv.nama + '</option>');
                        } else {
                            $select.append('<option value="' + prv.id + '">' + prv.nama + '</option>');
                        }

                    });
                    $(".c-kec").show();
                    $("#loads").css('display', 'none');
                    $('.selectpicker_kec').selectpicker('refresh');
                }
            }
            func__kec(ruta);
        });

        $(".selectpicker_kec").change(function() {
            var selectedItem = $('.selectpicker_kec').val();

            var ruta = "<?= base_url() ?>/Wilayah/Desa/" + selectedItem;
            var $select = $('.selectpicker_desa');
            $("#loads").css('display', 'block');
            const func__desa = async (ruta) => {
                const get = await axios.get(ruta);
                if (get.status == 200) {
                    $select.html('');
                    get.data.map((prv, io) => {
                        if (io == 0) {
                            $select.append('<option value="" selected>Pilih Desa</option>');
                            $select.append('<option value="' + prv.id + '" >' + prv.nama + '</option>');
                        } else {
                            $select.append('<option value="' + prv.id + '">' + prv.nama + '</option>');
                        }
                    });
                    $(".c-desa").show();
                    $("#loads").css('display', 'none');
                    $("#saves").attr('disabled', false);
                    $('.selectpicker_desa').selectpicker('refresh');
                }
            }
            func__desa(ruta);
        });
        
        $(window).scroll(function(){
            if ($(window).scrollTop() >= 300) {
                $('.followbottom').addClass('fixed-header');
                
            }
            else {
                $('.followbottom').removeClass('fixed-header');
                
            }
        });

    </script>

</body>
<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:25 GMT -->

</html>