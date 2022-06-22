<script type="text/javascript">
    // $('#sidebar a').on('click', function() {
    //     // $(".loading").fadeIn();
    //     console.log('clicked');
    //     return false;
    // });

    // var timeout;
    // document.onmousemove = function() {
    //     clearTimeout(timeout);
    //     timeout = setTimeout(function() {
    //         $('#relogModal').modal('show');;
    //     }, 900000); //15mins
    // }
    
    

    function continueActivity() {


        $(".loading").fadeIn();

        var getvalue = $('#pass').val();

        var form_data = new FormData();
        form_data.append('pass', getvalue);

        const save = async (form_data) => {
            const posts = await axios.post('<?= base_url("Manajemen/checkAuth"); ?>', form_data).catch((err) => {

                $(".loading").fadeOut();


            });

            if (posts.data.status == 200) {
                document.getElementById("xmein").reset();

                $(".loading").fadeOut();

                $('#relogModal').modal('hide');


            } else {
                $(".loading").fadeOut();
                $('#errmsgs').fadeIn();

            }
        }

        save(form_data);

    }
</script>


<!--<div class="lockscreen">-->
<!--    <svg>-->
<!--        <defs>-->


<!--            <radialGradient id="backHoleBelowClock" cx="50%" cy="50%" r="50%" fx="50%" fy="50%">-->
<!--                <stop offset="50%" style="stop-color:rgb(0,0,0);stop-opacity:0.7" />-->
<!--                <stop offset="100%" style="stop-color:rgb(0,0,0);stop-opacity:0" />-->
<!--            </radialGradient>-->



<!--            <filter id="glow">-->
<!--                <feGaussianBlur stdDeviation="2.5" result="coloredBlur" />-->
<!--                <feMerge>-->
<!--                    <feMergeNode in="coloredBlur" />-->
<!--                    <feMergeNode in="SourceGraphic" />-->
<!--                </feMerge>-->
<!--            </filter>-->

<!--            <filter id="shadow" x="-20%" y="-20%" width="140%" height="140%">-->
<!--                <feGaussianBlur in="SourceAlpha" stdDeviation="3" result="shadow" />-->
<!--                <feOffset dx="1" dy="1" />-->
<!--                <feMerge>-->
<!--                    <feMergeNode />-->
<!--                    <feMergeNode in="SourceGraphic" />-->
<!--                </feMerge>-->
<!--            </filter>-->

<!--        </defs>-->


        <!-- Clock objects -->
<!--        <circle class="clockCircle hour" cx="500" cy="240" r="150" stroke-width="6" />-->
<!--        <path id="arcHour" class="clockArc hour" stroke-width="6" stroke-linecap="round" filter="url(#glow)" />-->
<!--        <circle class="clockDot hour" r="8" filter="url(#glow)" />-->

<!--        <circle class="clockCircle minute" cx="500" cy="240" r="170" stroke-width="3" />-->
<!--        <path id="arcMinute" class="clockArc minute" stroke-width="3" stroke-linecap="round" filter="url(#glow)" />-->
<!--        <circle class="clockDot minute" r="5" filter="url(#glow)" />-->

        <!-- Caption objects -->
<!--        <text id="time" class="caption timeText" x="500" y="240" stroke-width="0" text-anchor="middle" alignment-baseline="middle" filter="url(#shadow)"></text>-->

<!--        <text id="day" class="caption dayText" x="300" y="210" stroke-width="0" text-anchor="end" alignment-baseline="middle" filter="url(#shadow)"></text>-->
<!--        <text id="date" class="caption dateText" x="300" y="250" stroke-width="0" text-anchor="end" alignment-baseline="middle" filter="url(#shadow)"></text>-->

<!--    </svg>-->
<!--</div>-->

<body id="page-top">
    <div class="loading">Loading&#8230;</div>
    <div class="modal fade" id="relogModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width:400px!important;border:none;border-radius:0px;" role="document">
            <div class="modal-content" style="background: rgb(27,27,27); background: linear-gradient(0deg, rgba(27,27,27,1) 0%, rgba(80,80,80,1) 100%);;border:none!important;border-radius:0px;">
                <div class="modal-header" style="color:#fff; border-bottom:none">
                    <h5 class="modal-title" id="exampleModalLabel">Keamanan </h5>

                </div>
                <div class="modal-body" style="color:#fff; border-bottom:none">
                    <p>Anda disarankan untuk memasukkan password kembali karena tidak ada kegiatan apapun selama 15 menit terakhir.</p>

                    <form id="xmein">
                        <div class="form-group">

                            <input type="password" class="form-control" id="pass" placeholder="Masukkan password" style="width:100%;">
                            <p class="text-danger" style="font-size:.77em; padding-top:5px;padding-left:5px;" id="errmsgs">Password salah!</p>
                        </div>
                    </form>

                </div>
                <div class="modal-footer" style="border-top:none">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-12 text-center">
                            <button class="btn btn-success" onclick="continueActivity()">Lanjutkan Aktifitas</button>
                            <button class="btn btn-danger" type="button" data-dismiss="modal" onclick="logoutBtn()"><i class="fa fa-long-arrow-alt-left"></i></button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width:400px!important;border:none;border-radius:0px;" role="document">
            <div class="modal-content" style="background: rgb(27,27,27); background: linear-gradient(0deg, rgba(27,27,27,1) 0%, rgba(80,80,80,1) 100%);;border:none!important;border-radius:0px;">
                <div class="modal-header" style="color:#fff; border-bottom:none">
                    <h5 class="modal-title text-light" id="exampleModalLabel">Yakin ingin keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times text-light"></i></span>
                    </button>
                </div>
                <div class="modal-body" style="color:#fff; border-bottom:none">Tekan <b>"Logout"</b> dibawah ini untuk mengakhiri sesi login yang anda lakukan.</div>
                <div class="modal-footer" style="border-top:none">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal Keluar</button>
                    <a class="btn btn-danger text-light" onclick="logoutBtn()">Logout</a>
                </div>
            </div>
        </div>
    </div>



    <div class="wrapper d-flex align-items-stretch " style="background:#e3e3e3">
        <nav id="sidebar" class="active ">
            <h1><a href="#" class="logo"><i class="fa fa-shopping-cart"></i></a></h1>
            <ul class="list-unstyled components mb-5 ">
                <li>
                    <a href="<?= base_url(); ?>Kantin/kasir"><span class="fa fa-calculator"></span> Kasir</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>Kantin/menu"><span class="fa fa-stream"></span> Menu</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>Kantin/struk"><span class="fa fa-sticky-note"></span> Struk</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>Kantin/profile"><span class="fa fa-user"></span> Profile</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#logoutModal"><span class="fa fa-power-off"></span> Keluar</a>
                </li>
            </ul>
            <div class="footer">
                <p>
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved PT. Phoenix Kreatif Digital</a>
                </p>
            </div>
        </nav>

        <div id="content" class="p-3 p-md-3">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-radius:1000px; z-index: 999;">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-success mr-3" style="border-radius:1000px;">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>

                    <form id="searchItem">
                        <input type="text" class="form-control" id="setTextSearch" style="width:300px; border-radius:100px;height:30px;display:inline" placeholder="Cari item...">
                        <button type="button" onclick="searchItem()" class="btn btn-sm btn-success" style="border-radius:100px; display:inline"><i class="fa fa-search"></i></button>
                    </form>

                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">

                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="oncard_template/#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600"><?= $namaInstansi; ?></span>
                                    <img class="img-profile rounded-circle" style="width:30px; height:30px;" src="<?= base_url(); ?>oncard_template/img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="<?= base_url('Kantin/profile') ?>">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="oncard_template/#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>