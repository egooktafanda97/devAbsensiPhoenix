<div class="pcoded-content">

    <div class="page-header card">
        <div class="row">
            <div class="col-lg-9">
                <div class="page-header-title">
                    <div class="d-inline">
                        <?php foreach ($dataDesa->result() as $row) { ?>
                            <h5 style="font-size: 45px; font-weight: bold;">Desa <?php echo $row->namaDesa; ?></h5>
                            <span style="font-size: 17px;">Berada di Kec. <?php echo $row->namaKecamatan; ?>, Kab. <?php echo $row->namaKabupaten; ?>, <?php echo $row->namaProvinsi; ?></span>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right float-right" style="float: right;">

                <div class="row text-right">
                    <div class="clock-col" style="margin: auto;">
                        <p class="clock-label">
                            Hari
                        </p>
                        <p class="clock-day clock-timer">
                        </p>

                    </div>
                    <div class="clock-col" style="margin: auto;">
                        <p class="clock-label">
                            Jam
                        </p>
                        <p class="clock-hours clock-timer">
                        </p>

                    </div>
                    <div class="clock-col" style="margin: auto;">
                        <p class="clock-label">
                            Menit
                        </p>
                        <p class="clock-minutes clock-timer">
                        </p>

                    </div>
                    <div class="clock-col" style="margin: auto;">
                        <p class="clock-label">
                            Detik
                        </p>
                        <p class="clock-seconds clock-timer">
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <h5 style="font-size: 35px;margin-bottom: 15px;">Akses Cepat</h5>
                    <div class="row">

                        <div class="col-xl-3 col-md-6">
                            <a href="<?php echo site_url('Managements/request_layanan'); ?>">
                                <div class="card prod-p-card card-green" style="box-shadow: 0px 0px 20px #d6d6d6;">
                                    <div class="card-body">
                                        <div class="row align-items-center m-b-30">
                                            <div class="col" style="font-size: 35px; display: block;text-align: center;">

                                                <i class="fas fa-bell text-c-green" style="width: 60px; height: 60px; font-size: 40px; margin-top: 15px;"></i>

                                                <h3 class="f-w-700 text-white" style="display: block; margin-top: 15px;">Request Surat</h3>
                                                <p class="text-white">Beberapa masyarakat memerlukan aksi tanggap untuk persuratan mereka</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <a href="<?php echo site_url('Managements/market_place'); ?>">
                                <div class="card prod-p-card card-blue" style="box-shadow: 0px 0px 20px #d6d6d6;">
                                    <div class="card-body">
                                        <div class="row align-items-center m-b-30">
                                            <div class="col" style="font-size: 35px; display: block;text-align: center;">

                                                <i class="fas fa-shopping-basket text-c-blue" style="width: 60px; height: 60px; font-size: 40px; margin-top: 15px;"></i>

                                                <h3 class="f-w-700 text-white" style="display: block; margin-top: 15px;">Market Place</h3>
                                                <p class="text-white">Daftarkan produk UMKM kebanggaan desa melalui halaman ini</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <a href="<?php echo site_url('Managements/berita_desa'); ?>">
                                <div class="card prod-p-card card-yellow" style="box-shadow: 0px 0px 20px #d6d6d6;">
                                    <div class="card-body">
                                        <div class="row align-items-center m-b-30">
                                            <div class="col" style="font-size: 35px; display: block;text-align: center;">

                                                <i class="fas fa-clone text-c-yellow" style="width: 60px; height: 60px; font-size: 40px; margin-top: 15px;"></i>

                                                <h3 class="f-w-700 text-white" style="display: block; margin-top: 15px;">Blog Desa</h3>
                                                <p class="text-white">Berikan informasi terbaru seputar perkembangan desa untuk masyarakat desa</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <a href="<?php echo site_url('Managements/monografi'); ?>">
                                <div class="card prod-p-card card-red" style="box-shadow: 0px 0px 20px #d6d6d6;">
                                    <div class="card-body">
                                        <div class="row align-items-center m-b-30">
                                            <div class="col" style="font-size: 35px; display: block;text-align: center;">

                                                <i class="fas fa-pie-chart text-c-red" style="width: 60px; height: 60px; font-size: 40px; margin-top: 15px;"></i>

                                                <h3 class="f-w-700 text-white" style="display: block; margin-top: 15px;">Monografi</h3>
                                                <p class="text-white">Menampilkan rangkuman data seputar statistik dalam bentuk grafis</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-12">

                        </div>
                        <div class="col-xl-12">
                            <h5 style="font-size: 35px;margin-bottom: 15px;">Layanan Surat</h5>
                            <div class="card product-progress-card">
                                <div class="card-block">
                                    <div class="row pp-main">
                                        <div class="col-xl-3 col-md-6">
                                            <div class="pp-cont">
                                                <div class="row align-items-center m-b-10">
                                                    <div class="col-auto">
                                                        <!-- <i class="fas fa-cube f-24 text-mute"></i> -->
                                                        <p class="m-b-0">Hari Ini</p>
                                                    </div>
                                                    <div class="col text-right">
                                                        <h2 class="m-b-0 text-c-blue"><?php echo $dataToday->num_rows(); ?></h2>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center m-b-15">
                                                    <div class="col-auto">
                                                        <!-- <p class="m-b-0">Hari Ini</p> -->
                                                    </div>
                                                    <div class="col text-right">
                                                        <p class="m-b-0 text-c-blue">surat</p>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-c-blue" style="width:45%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <div class="pp-cont">
                                                <div class="row align-items-center m-b-10">
                                                    <div class="col-auto">
                                                        <!-- <i class="fas fa-cube f-24 text-mute"></i> -->
                                                        <p class="m-b-0">Minggu Ini</p>
                                                    </div>
                                                    <div class="col text-right">
                                                        <h2 class="m-b-0 text-c-red"><?php echo $dataWeek->num_rows(); ?></h2>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center m-b-15">
                                                    <div class="col-auto">
                                                        <!-- <p class="m-b-0">Hari Ini</p> -->
                                                    </div>
                                                    <div class="col text-right">
                                                        <p class="m-b-0 text-c-red">surat</p>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-c-red" style="width:45%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <div class="pp-cont">
                                                <div class="row align-items-center m-b-10">
                                                    <div class="col-auto">
                                                        <!-- <i class="fas fa-cube f-24 text-mute"></i> -->
                                                        <p class="m-b-0">Bulan Ini</p>
                                                    </div>
                                                    <div class="col text-right">
                                                        <h2 class="m-b-0 text-c-yellow"><?php echo $dataMonth->num_rows(); ?></h2>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center m-b-15">
                                                    <div class="col-auto">
                                                        <!-- <p class="m-b-0">Hari Ini</p> -->
                                                    </div>
                                                    <div class="col text-right">
                                                        <p class="m-b-0 text-c-yellow">surat</p>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-c-yellow" style="width:45%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <div class="pp-cont">
                                                <div class="row align-items-center m-b-10">
                                                    <div class="col-auto">
                                                        <!-- <i class="fas fa-cube f-24 text-mute"></i> -->
                                                        <p class="m-b-0">Tahun Ini</p>
                                                    </div>
                                                    <div class="col text-right">
                                                        <h2 class="m-b-0 text-c-green"><?php echo $dataYear->num_rows(); ?></h2>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center m-b-15">
                                                    <div class="col-auto">
                                                        <!-- <p class="m-b-0">Hari Ini</p> -->
                                                    </div>
                                                    <div class="col text-right">
                                                        <p class="m-b-0 text-c-green">surat</p>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-c-green" style="width:45%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="card table-card" style="min-height: 465px;">
                                <div class="card-header">
                                    <h5 style="font-size: 19px">Request Menunggu</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                            <li><i class="feather icon-maximize full-card"></i></li>
                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                            <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                            <li><i class="feather icon-trash close-card"></i></li>
                                            <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block ">

                                    <?php
                                    $no = 1;
                                    if (!$showLayananRequest->result()) {
                                    ?>
                                        <img src="<?php echo base_url(); ?>/assets/svg/assetsmobile/inbox.svg" height="150" style="margin: auto; padding-top: 20px; display: block; margin-top: 35px;">
                                        <p style="display: block;margin: auto; text-align: center; margin-top: 15px;">Tidak ada request untuk sekarang</p>
                                        <?php } else {
                                        foreach ($showLayananRequest->result() as $row) { ?>
                                            <div class="col-md-12" style="margin-top: 20px;">
                                                <div class="card" style="background-color: #f2f2f2;background: rgb(245,245,245);
                              background: linear-gradient(242deg, rgba(245,245,245,1) 0%, rgba(255,255,255,1) 83%, rgba(245,245,245,1) 100%);">
                                                    <div class="card-body" style="padding: 10px;">
                                                        <div class="row">
                                                            <div class="col-md-2 text-center" style="font-weight: bold;"><?php echo $no++; ?></div>
                                                            <div class="col-md-10">
                                                                <?php echo $row->ketx; ?>
                                                                <p style="font-size: 13px; margin: 0px;" class="text-muted"><?php echo $row->namaLengkap; ?></p>
                                                                <p style="font-size: 11px; margin: 0px;font-style: italic;" class="text-muted">
                                                                    <?php

                                                                    setlocale(LC_ALL, 'IND');
                                                                    echo $row->tglLahirFormat;
                                                                    ?>
                                                                </p>
                                                                <?php
                                                                if ($row->statusNotif == 'belum_dibaca') { ?>
                                                                    <label class="badge badge-danger">Menunggu tindakan</label>
                                                                <?php } else if ($row->statusNotif == 'proses') { ?>
                                                                    <label class="badge badge-warning">Dalam pemrosesan</label>
                                                                <?php } else if ($row->statusNotif == 'selesai') { ?>
                                                                    <label class="badge badge-success">Selesai</label>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    <?php }
                                    } ?>


                                    <?php
                                    if ($showLayananRequestAll->result() > 3) { ?>
                                    <?php } else { ?>
                                        <div class="col-md-12 text-center">
                                            <button class="btn waves-effect waves-light hor-grd btn-grd-inverse">Lihat <?php echo $showLayananRequestAll->num_rows() - 3; ?> data lainnya</button>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h5 style="font-size: 19px">Data Surat Terlayani</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                            <li><i class="feather icon-maximize full-card"></i></li>
                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                            <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                            <li><i class="feather icon-trash close-card"></i></li>
                                            <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block " style="margin-top: 40px; padding-bottom: 40px;">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12 text-center">
                                            <div id="chart2"></div>
                                        </div>

                                        <div class="col-md-6 col-xs-12 text-center">
                                            <div id="chart3"></div>
                                        </div>

                                        <div class="col-md-6">

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
</div>

<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>


<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>/assets/js/waves.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/css-scrollbars.js"></script>

<script src="<?php echo base_url(); ?>/assets/js/jquery.datatables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/assets/js/datatables.buttons.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/assets/js/jszip.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/assets/js/pdfmake.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/assets/js/vfs_fonts.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/assets/js/buttons.print.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/assets/js/buttons.html5.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/assets/js/datatables.bootstrap4.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/assets/js/datatables.responsive.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/assets/js/responsive.bootstrap4.min.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>/assets/js/data-table-custom.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/assets/js/pcoded.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/assets/js/vertical-layout.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery.mcustomscrollbar.concat.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/script.js"></script>

<script src="<?php echo base_url(); ?>/assets/js/d3.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/assets/js/c3.js" type="text/javascript"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="text/javascript"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
<script type="text/javascript">
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

<script type="text/javascript">
    "use strict";
    $(document).ready(function() {

        setTimeout(function() {
            var chart = c3.generate({
                bindto: "#chart2",
                data: {
                    columns: [
                        ["Selesai", 11],
                        ["Proses", 100],
                        ["Belum di lihat", 34],
                    ],
                    type: "donut",
                    onclick: function(d, i) {
                        console.log("onclick", d, i);
                    },
                    onmouseover: function(d, i) {
                        console.log("onmouseover", d, i);
                    },
                    onmouseout: function(d, i) {
                        console.log("onmouseout", d, i);
                    },
                },
                color: {
                    pattern: ["#11c14f", "#536d8b", "#7767fe"]
                },
                donut: {
                    title: "Perbandingan Bulanan"
                },
            });
        }, 350);

        setTimeout(function() {
            var chart = c3.generate({
                bindto: "#chart3",
                data: {
                    columns: [
                        ["Selesai", 45],
                        ["Proses", 11],
                        ["Belum di lihat", 67],
                    ],
                    type: "donut",
                    onclick: function(d, i) {
                        console.log("onclick", d, i);
                    },
                    onmouseover: function(d, i) {
                        console.log("onmouseover", d, i);
                    },
                    onmouseout: function(d, i) {
                        console.log("onmouseout", d, i);
                    },
                },
                color: {
                    pattern: ["#11c14f", "#536d8b", "#7767fe"]
                },
                donut: {
                    title: "Perbandingan Mingguan"
                },
            });
        }, 350);


    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        requestAnimationFrame(updateTime)
    });

    var d = new Date();
    var zxczxc = d.getDay();

    var xxx = 0;
    var xxr = "";

    if (zxczxc == 0) {
        xxr = "MINGGU";
    } else if (zxczxc == 1) {
        xxr = "SENIN";
    } else if (zxczxc == 2) {
        xxr = "SELASA";
    } else if (zxczxc == 3) {
        xxr = "RABU";
    } else if (zxczxc == 4) {
        xxr = "KAMIS";
    } else if (zxczxc == 5) {
        xxr = "JUMAT";
    } else {
        xxr = "SABTU";
    }

    function updateTime() {
        document.documentElement.style.setProperty(
            "--timer-day",
            "'" + xxr + "'"
        );
        document.documentElement.style.setProperty(
            "--timer-hours",
            "'" + moment().format("H") + "'"
        );
        document.documentElement.style.setProperty(
            "--timer-minutes",
            "'" + moment().format("mm") + "'"
        );
        document.documentElement.style.setProperty(
            "--timer-seconds",
            "'" + moment().format("ss") + "'"
        );
        requestAnimationFrame(updateTime);
    }
</script>
<!-- <script src="<?php echo base_url(); ?>/assets/js/rocket-loader.min.js" data-cf-settings="|49" defer=""></script></body> -->

<!-- Mirrored from colorlib.com/polygon/admindek/default/menu-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:35 GMT -->

</html>