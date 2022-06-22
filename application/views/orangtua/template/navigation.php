<script type="text/javascript">
    
    
    var timeout;
        document.onmousemove = function(){
          clearTimeout(timeout);
          timeout = setTimeout(function(){$('#relogModal').modal('show'); ;}, 900000); //15mins
        }
    
</script>
<body id="page-top" style="background-color:#fff; background:none;">
    <div id="toast"><div id="img">Icon</div><div id="desc">A notification message..</div></div>
    <img src="https://img.freepik.com/free-vector/gradient-dynamic-blue-lines-background_23-2148995756.jpg?size=626&ext=jpg" id="topBg" width="100%" height="240" style="object-fit:cover; position:absolute; top:50px;z-index:0; border-bottom-left-radius:100px;"/>
    <div class="loading">Loading&#8230;</div>
    
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
    <div id="wrapper" style="z-index:1!important;;">
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                
                <nav class="bottom-nav">
                  <div class="bottom-nav-item active">
                    <div class="bottom-nav-link">
                      <i class="fa fa-home"></i>
                      <span>Beranda</span>
                    </div>
                  </div>
                  <div class="bottom-nav-item">
                    <div class="bottom-nav-link">
                      <i class="fa fa-user-graduate"></i>
                      <span>Anak</span>
                    </div>
                  </div>
                  
                  <div class="bottom-nav-item">
                    <div class="bottom-nav-link">
                      <i class="fa fa-bell"></i>
                      <span>Notifikasi</span>
                    </div>
                  </div>
                  
                  <div class="bottom-nav-item">
                    <div class="bottom-nav-link">
                      <i class="fa fa-file-invoice"></i>
                      <span>Pembayaran</span>
                    </div>
                  </div>
                  
                  <div class="bottom-nav-item disabled">
                    <div class="bottom-nav-link">
                      <i class="fa fa-cog"></i>
                      <span>Setting</span>
                    </div>
                  </div>
                </nav>
                
                <!-- Topbar -->
                <nav class="navbar fixed-top navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    
                    <img src="https://oncard.phoenixkreatifdigital.com//assets_landingpage/images/oncard.png" width="50" class="mr-3"/>
                    Portal Orangtua
                    <!-- Sidebar Toggle (Topbar) -->
                    <!--<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">-->
                    <!--    <i class="fa fa-bars"></i>-->
                    <!--</button>-->

                    <ul class="navbar-nav ml-auto">

                        
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="oncard_template/#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$namaInstansi;?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?=base_url();?>engine/Assets/img/user/<?=$foto;?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="oncard_template/#">
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

                </nav>
                <!-- End of Topbar -->
