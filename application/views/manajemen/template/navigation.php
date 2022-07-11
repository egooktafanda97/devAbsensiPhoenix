<script type="text/javascript">
    function launch_toast(icon, message) {
        $('#img').html('<i class="fa fa-' + icon + '"></i>');
        $('#desc').html(message);
        var x = document.getElementById("toast")
        x.className = "show";
        setTimeout(function() {
            x.className = x.className.replace("show", "");
        }, 5000);
    }
</script>
<script type="text/javascript">
    function btnClick() {
        $('.btnContact').toggleClass('active');
        $('.title').toggleClass('active');
        $('.navContact').toggleClass('active');
    }

    var timeout;
    document.onmousemove = function() {
        clearTimeout(timeout);
        timeout = setTimeout(function() {
            $('#relogModal').modal('show');;
        }, 900000); //15mins
    }

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

<script type="text/javascript">

    function syncData(){
        console.log('ok');
        $('.loading-overlay').addClass('is-active');
        
          const save = async (str) => {
                const posts = await axios.get('<?= api_url(); ?>sync/data', {
                    headers: {
                        'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                    }
                }).catch((err) => {
                    Toastify({
                      text: "Sinkronisasi gagal! Mohon ulang kembali!",
                      duration: 3000,
                      close :true,
                      gravity:"bottom",
                      position:"right",
                      className: "errorMessage",
                      
                    }).showToast();
                    $('.loading-overlay').removeClass('is-active');
                });
                
                let tidakHadirCount = 0;
                
                if (posts.status == 200) {
                    
                    $('.loading-overlay').removeClass('is-active');
                    
                    
                    Toastify({
                      text: "Sinkronisasi selesai!",
                      duration: 3000,
                      close :true,
                      gravity:"bottom",
                      position:"right",
                      className: "successMessage",
                      
                    }).showToast();
                    
                } else {
                    Toastify({
                      text: "Sinkronisasi gagal! Mohon ulang kembali",
                      duration: 3000,
                      close :true,
                      gravity:"bottom",
                      position:"right",
                      className: "errorMessage",
                      
                    }).showToast();
                    $('.loading-overlay').removeClass('is-active');
                }
            }
    
            save();
        
        
    }
</script>


<div class="loading-overlay">
  <span class="fas fa-spinner fa-3x fa-spin"></span>
</div>

<body id="page-top">
    <div class="loading">Loading&#8230;</div>
    <div id="toast">
        <div id="img">Icon</div>
        <div id="desc">A notification message..</div>
    </div>
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
                    <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times text-light"></i></span>
                    </button>
                </div>
                <div class="modal-body" style="color:#fff; border-bottom:none">Tekan <b>"Logout"</b> dibawah ini untuk mengakhiri sesi login yang anda lakukan.</div>
                <div class="modal-footer" style="border-top:none">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal Keluar</button>
                    <a class="btn btn-danger" onclick="logoutBtn()">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Manajemen'); ?>">
                <div class="sidebar-brand-icon ">
                    <!--<i class="fa fa-laptop"></i>-->
                    <img src="https://oncard.phoenixkreatifdigital.com//assets_landingpage/images/oncard_white.png" width="50" class="mr-3" />
                </div>
                <!--<div class="sidebar-brand-text mx-3"><?= $namaInstansi; ?></div>-->
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Manajemen'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Monitoring Absen</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Manajemen/manual'); ?>">
                    <i class="las la-edit"></i>
                    <span>Entry Manual</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading mb-1 mt-2">
                Extra
            </div>
            
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Manajemen'); ?>">
                    <i class="las la-file"></i>
                    <span>Report</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="#/" onclick="syncData();">
                    <i class="las la-sync"></i>
                    <span>Sinkronisasi</span></a>
            </li>
            
            
            <hr class="sidebar-divider">
            
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Manajemen/konfigurasi'); ?>">
                    <i class="las la-cog"></i>
                    <span>Konfigurasi</span></a>
            </li>
            
            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    
                    SISTEM ABSENSI SEKOLAH

                    <!-- Topbar Search -->
                    <!--<form-->
                    <!--    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">-->
                    <!--    <div class="input-group">-->
                    <!--        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."-->
                    <!--            aria-label="Search" aria-describedby="basic-addon2">-->
                    <!--        <div class="input-group-append">-->
                    <!--            <button class="btn btn-success" type="button">-->
                    <!--                <i class="fas fa-search fa-sm"></i>-->
                    <!--            </button>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</form>-->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="oncard_template/#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-success" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="oncard_template/#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <!--<span class="badge badge-danger badge-counter">3+</span>-->
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <!--<a class="dropdown-item d-flex align-items-center" href="oncard_template/#">-->
                                <!--    <div class="mr-3">-->
                                <!--        <div class="icon-circle bg-success">-->
                                <!--            <i class="fas fa-file-alt text-white"></i>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--    <div>-->
                                <!--        <div class="small text-gray-500">December 12, 2019</div>-->
                                <!--        <span class="font-weight-bold">A new monthly report is ready to download!</span>-->
                                <!--    </div>-->
                                <!--</a>-->

                                <!--<a class="dropdown-item text-center small text-gray-500" href="oncard_template/#">Show All Alerts</a>-->
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="oncard_template/#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <!--<span class="badge badge-danger badge-counter">7</span>-->
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <!--<a class="dropdown-item d-flex align-items-center" href="oncard_template/#">-->
                                <!--    <div class="dropdown-list-image mr-3">-->
                                <!--        <img class="rounded-circle" src="img/undraw_profile_1.svg"-->
                                <!--            alt="...">-->
                                <!--        <div class="status-indicator bg-success"></div>-->
                                <!--    </div>-->
                                <!--    <div class="font-weight-bold">-->
                                <!--        <div class="text-truncate">Hi there! I am wondering if you can help me with a-->
                                <!--            problem I've been having.</div>-->
                                <!--        <div class="small text-gray-500">Emily Fowler 路 58m</div>-->
                                <!--    </div>-->
                                <!--</a>-->

                                <!--<a class="dropdown-item text-center small text-gray-500" href="oncard_template/#">Read More Messages</a>-->
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="oncard_template/#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Sistem Absensi</span>
                                <img class="img-profile rounded-circle" src="<?= base_url(); ?>oncard_template/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown" style="z-index:338731;">
                                <a class="dropdown-item" href="<?= base_url(); ?>Manajemen/profil">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <!--<a class="dropdown-item" href="#">-->
                                <!--    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>-->
                                <!--    Settings-->
                                <!--</a>-->
                                <!--<a class="dropdown-item" href="#">-->
                                <!--    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>-->
                                <!--    Activity Log-->
                                <!--</a>-->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->



                <div class="contactUs" style="display: none;">
                    <main>
                        <section>
                            <div class="content">
                                <img src="https://www.clipartmax.com/png/full/293-2934886_the-just-right-it-solution-call-center-icon-gif.png" alt="Profile Image">

                                <aside>
                                    <h1 style="font-size:1em!important;">Customer Care</h1>
                                    <p style="font-size:.75em!important;">Hai, apakah ada yang bisa kami bantu?</p>
                                </aside>

                                <button class="btnContact" onclick="btnClick();">
                                    <span style="font-size:1em!important;">Hubungi Sekarang</span>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                                        <g class="nc-icon-wrapper" fill="#fff">
                                            <path d="M14.83 30.83L24 21.66l9.17 9.17L36 28 24 16 12 28z"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>

                            <div class="title">
                                <p>Pilih narahubung terkait<br />keluhan Anda</p>
                            </div>
                        </section>


                    </main>

                    <nav class="navContact">
                        <a href="mailto:cs@oncard.phoenixkreatifdigital.com?subject = CS-Call&body = Hello" class="gmail">
                            <div class="icon">
                                <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 3v10c0 .567-.433 1-1 1h-1V4.925L8 9.233 2 4.925V14H1c-.567 0-1-.433-1-1V3c0-.283.108-.533.287-.712C.467 2.107.718 2 1 2h.333L8 6.833 14.667 2H15c.283 0 .533.108.713.288.179.179.287.429.287.712z" fill-rule="evenodd" />
                                </svg>
                            </div>

                            <div class="content">
                                <h1>Email</h1>
                                <span>cs@oncard.id</span>
                            </div>

                            <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                                <g class="nc-icon-wrapper" fill="#444444">
                                    <path d="M17.17 32.92l9.17-9.17-9.17-9.17L20 11.75l12 12-12 12z"></path>
                                </g>
                            </svg>
                        </a>

                        <a href="https://wa.me/6282250913941?text=Saya%20ingin%20menanyakan%20tentang%20...%20" class="facebook">
                            <div class="icon">
                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                    <path d="M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="nonzero" />
                                </svg>
                            </div>

                            <div class="content">
                                <h1>Whatsapp</h1>
                                <span>Lapor Oncard di Whatsapp</span>
                            </div>

                            <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                                <g class="nc-icon-wrapper" fill="#444444">
                                    <path d="M17.17 32.92l9.17-9.17-9.17-9.17L20 11.75l12 12-12 12z"></path>
                                </g>
                            </svg>
                        </a>

                        <a href="tel:6282250913941" class="twitter">
                            <div class="icon">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                    <path d="M16 22.621l-3.521-6.795c-.007.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.082-1.026-3.492-6.817-2.106 1.039c-1.639.855-2.313 2.666-2.289 4.916.075 6.948 6.809 18.071 12.309 18.045.541-.003 1.07-.113 1.58-.346.121-.055 2.102-1.029 2.11-1.033zm-2.5-13.621c.828 0 1.5.672 1.5 1.5s-.672 1.5-1.5 1.5-1.5-.672-1.5-1.5.672-1.5 1.5-1.5zm9 0c.828 0 1.5.672 1.5 1.5s-.672 1.5-1.5 1.5-1.5-.672-1.5-1.5.672-1.5 1.5-1.5zm-4.5 0c.828 0 1.5.672 1.5 1.5s-.672 1.5-1.5 1.5-1.5-.672-1.5-1.5.672-1.5 1.5-1.5z" fill-rule="nonzero" />
                                </svg>
                            </div>

                            <div class="content">
                                <h1>Hubungi</h1>
                                <span>+62 822 5091 3941</span>
                            </div>

                            <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                                <g class="nc-icon-wrapper" fill="#444444">
                                    <path d="M17.17 32.92l9.17-9.17-9.17-9.17L20 11.75l12 12-12 12z"></path>
                                </g>
                            </svg>
                        </a>
                    </nav>
                </div>