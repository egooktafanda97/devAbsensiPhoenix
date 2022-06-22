<body>
    
  

  <div class="loading" id="loadingID">&#8230;</div>

  <div class="loader-bg">
    <div class="loader-bar"></div>
  </div>

  <div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

      <nav class="navbar header-navbar pcoded-header">
        <div class="navbar-wrapper">
          <div class="navbar-logo">
            <a href="<?php echo site_url('Managements/');?>" class="text-center">
                <?php 
                    foreach ($getDataDesa->result() as $row) {
                    if($row->logo!=""){?>    
                        <img  src="<?php echo base_url(); ?>/<?php echo $row->logo;?>" alt="Theme-Logo" style="width: 25px; margin-right: 5px; display: inline-table;"  >
                    <?php }else { ?>
                        <img  src="<?php echo base_url(); ?>/assets/svg/logo_white.svg" alt="Theme-Logo" style="width: 25px; margin-right: 5px; display: inline-table;"  >
                <?php } } ?>
              <!--<img src="<?php echo base_url(); ?>/assets/png/logo1.png" alt="Theme-Logo" style="width: 25px; margin-right: 5px; display: inline-table;" />-->
              <strong><b style="font-weight: bolder;"><?php 
                    foreach ($getDataDesa->result() as $row) { echo $row->namaDesa;}?></b></strong>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!">
              <i class="feather icon-menu icon-toggle-right"></i>
            </a>
            <a class="mobile-options waves-effect waves-light">
              <i class="feather icon-more-horizontal"></i>
            </a>
          </div>
          <div class="navbar-container container-fluid">
            <ul class="nav-left">
              <li class="header-search">
                <div class="main-search morphsearch-search">
                  <div class="input-group">
                    <span class="input-group-prepend search-close">
                      <i class="feather icon-x input-group-text"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Enter Keyword">
                    <span class="input-group-append search-btn">
                      <i class="feather icon-search input-group-text"></i>
                    </span>
                  </div>
                </div>
              </li>
              <!-- <li>
                <a href="#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()" class="waves-effect waves-light" data-cf-modified-="">
                  <i class="full-screen feather icon-maximize"></i>
                </a>
              </li> -->
            </ul>
            <ul class="nav-right">
              
             <!--  <li class="header-notification">
                <div class="dropdown-primary dropdown">
                  <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                    <i class="feather icon-message-square"></i>
                    <span class="badge bg-c-green">3</span>
                  </div>
                </div>
              </li> -->
              <li class="user-profile header-notification">
                <div class="dropdown-primary dropdown">
                  <div class="dropdown-toggle" data-toggle="dropdown">
                        <?php if($pictureUserGiven!=""){?>
                            <img src="<?php echo base_url(); ?>/<?php echo $pictureUserGiven;?>" class="img-radius" alt="User-Profile-Image" id="profpicmini">
                    <?php } else { ?>
                            <img src="<?php echo base_url(); ?>/assets/png/default.png" class="img-radius" alt="User-Profile-Image" id="profpicmini">
                    <?php } ?>
                    <span><?php echo $namaLengkap;?></span>
                    <i class="feather icon-chevron-down"></i>
                  </div>
                  <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                    <div class="col-md-12 text-center">
                        <?php if($pictureUserGiven!=""){?>
                      <img src="<?php echo base_url(); ?>/<?php echo $pictureUserGiven;?>" class="img-radius" style="display: block;width: 100px;height: 100px; margin: auto;" alt="User-Profile-Image" id="profpicbig">
                      <?php } else { ?>
                      <img src="<?php echo base_url(); ?>/assets/png/default.png" class="img-radius" style="display: block;width: 100px;height: 100px; margin: auto;" alt="User-Profile-Image" id="profpicbig">
                      <?php } ?>
                      <span style="line-height: 0px; font-size: 17px; font-weight: bold;"><?php echo $namaLengkap;?>
                        
                        <font style="font-size: 11px; margin: 0px; padding: 0px; margin-top: -10px; padding-bottom: 30px; font-weight: normal;display: block;" class="text-muted"><?php echo $jabatan;?></font>
                      </span>
                      
                      
                    </div>
                    <!-- <li>
                      <a href="#!">
                        <i class="feather icon-settings"></i> Settings
                      </a>
                    </li> -->
                    <li>
                      <a href="<?php echo site_url('LandingPage/');?>">
                        <i class="icon-screen-desktop"></i> Lihat Website Desa
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('Managements/pengaturan_profil');?>">
                        <i class="feather icon-user"></i> Pengaturan Profil
                      </a>
                    </li>
                    <!-- <li>
                      <a href="email-inbox.html">
                        <i class="feather icon-mail"></i> My Messages
                      </a>
                    </li>
                    <li>
                      <a href="auth-lock-screen.html">
                        <i class="feather icon-lock"></i> Lock Screen
                      </a>
                    </li> -->
                    <li>
                      <a href="<?php echo site_url('Login/logoutUser');?>">
                        <i class="feather icon-log-out"></i> Logout
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <div class="pcoded-main-container">
        <div class="pcoded-wrapper">

          <nav class="pcoded-navbar" pcoded-header-position="relative">
            <div class="nav-list">
              <div class="pcoded-inner-navbar main-menu">
                
                <ul class="pcoded-item pcoded-left-item">
                  <li class="">
                    <a href="<?php echo site_url('Managements/');?>" class="waves-effect waves-dark">
                      <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                      <span class="pcoded-mtext">Dashboard</span>
                    </a>
                  </li>

                  <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark" style="height: 70px;">
                      <span class="pcoded-micon">
                        <i class="fa fa-gg"></i>
                      </span>
                      <span class="pcoded-mtext">Daftar Buku Desa</span>
                    </a>
                    <ul class="pcoded-submenu">
                      
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/buku_induk_penduduk');?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Buku Induk Penduduk</span>
                        </a>
                      </li>
                      
                    </ul>
                  </li>

                  <hr style="margin-top: -10px; margin-bottom: 20px;">


                  <div class="pcoded-navigation-label" style="margin-top: -25px;">Persuratan</div>
                  <li class="pcoded-hasmenu ">
                    <a href="javascript:void(0)" class="waves-effect waves-dark" style="height: 70px;">
                      <span class="pcoded-micon">
                        <i class="feather icon-sidebar"></i>
                      </span>
                      <span class="pcoded-mtext">Pelayanan Administrasi Kependudukan</span>
                    </a>
                    <ul class="pcoded-submenu">
                      <li class=" pcoded-hasmenu">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Biodata Penduduk</span>
                        </a>
                        <ul class="pcoded-submenu">
                          <li class="">
                            <a href="<?php echo site_url('Managements/f1_kartu_keluarga');?>" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">Formulir Kartu Keluarga(Pengganti F-1.01)</span>
                            </a>
                          </li>
                          <li class="">
                            <a href="<?php echo site_url('Managements/f2_pendaftaran_peristiwa_kependudukan');?>" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">Formulir Pendaftaran Peristiwa Kependudukan (F-1.01)</span>
                            </a>
                          </li>

                          <li class="">
                            <a href="<?php echo site_url('Managements/f3_perubahan_data_kependudukan');?>" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">Surat Pernyataan Perubahan Data Kependudukan (F-1.05)</span>
                            </a>
                          </li>

                          <li class="">
                            <a href="<?php echo site_url('Managements/f4_formulir_permohonan_ktp');?>" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">Formulir Permohonan KTP (F-1.21)</span>
                            </a>
                          </li>

                          <li class="">
                            <a href="<?php echo site_url('Managements/f5_surat_keterangan_domisili');?>" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">Surat Keterangan Domisili</span>
                            </a>
                          </li>

                          <li class="">
                            <a href="<?php echo site_url('Managements/f6_surat_ket_hilang_kk');?>" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">Surat Keterangan Hilang Kartu Keluarga</span>
                            </a>
                          </li>
                          
                        </ul>
                      </li>
                      <li class=" pcoded-hasmenu">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Pindah</span>
                        </a>
                        <ul class="pcoded-submenu">
                          <li class="">
                            <a href="<?php echo site_url('Managements/f7_kepindahan');?>" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">Surat Keterangan Pindah</span>
                            </a>
                          </li>
                          
                        </ul>
                      </li>
                      <li class=" pcoded-hasmenu">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Kelahiran</span>
                        </a>
                        <ul class="pcoded-submenu">
                          <li class="">
                            <a href="<?php echo site_url('Managements/f8_suket_kelahiran');?>" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">Surat Keterangan Kelahiran (F-2.01)</span>
                            </a>
                          </li>
                          <li class="">
                            <a href="<?php echo site_url('Managements/f9_kebenaran_data_kelahiran') ?>" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">SPTJM Kebenaran Data Kelahiran</span>
                            </a>
                          </li>
                          <li class="">
                            <a href="<?php echo site_url('Managements/f10_kebenaran_pasangan_suamiistri') ?>" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">SPTJM Kebenaran Sebagai Pasangan Suami Istri</span>
                            </a>
                          </li>
                          <li class="">
                            <a href="<?php echo site_url('Managements/f11_pernyataan_belummemiliki_aktalahir') ?>" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">Surat Pernyataan Belum Memiliki Akta Kelahiran</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class=" pcoded-hasmenu">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Kematian</span>
                        </a>
                        <ul class="pcoded-submenu">
                          <li class="">
                            <a href="<?php echo site_url('Managements/f12_surat_keterangan_kematian') ?>" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">Surat Keterangan Kematian (F-2.29)</span>
                            </a>
                          </li>
                          <li class="">
                            <a href="<?php echo site_url('Managements/f13_surat_kematian') ?>" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">Surat Kematian (A-5)</span>
                            </a>
                          </li>
                          <li class="">
                            <a href="<?php echo site_url('Managements/f14_surat_keterangan_penguburan');?>" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">Surat Keterangan Penguburan</span>
                            </a>
                          </li>
                          
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark" style="height: 70px;">
                      <span class="pcoded-micon">
                        <i class="feather icon-user"></i>
                      </span>
                      <span class="pcoded-mtext">Pelayanan Administrasi <br/>Nikah</span>
                    </a>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f15_surat_keterangan_pengantar_nikah') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Pengantar Nikah (N1 - N5)</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f16_surat_keterangan_pernah_nikah') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Keterangan Pernah Nikah</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f17_surat_keterangan_belumpernahnikah') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Keterangan Belum Pernah Nikah</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f18_surat_keterangan_dudajanda') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Keterangan Duda/Janda</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  
                  <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark" style="height: 70px;">
                      <span class="pcoded-micon">
                        <i class="fa fa-gg"></i>
                      </span>
                      <span class="pcoded-mtext">Pelayanan Administrasi  <br/>Umum</span>
                    </a>
                    <ul class="pcoded-submenu">
                      
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f19_surat_keterangan_usaha');?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Keterangan Usaha</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f20_surat_keterangan_tempat_usaha');?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Keterangan Tempat Usaha</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f21_suket_pengantar_barang') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Keterangan Pengantar Barang</span>
                        </a>
                      </li>

                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f22_suket_pengantar_ternak') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Keterangan Pengantar Ternak</span>
                        </a>
                      </li>

                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f23_surat_keterangan_tidakmampusekolah') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Keterangan Tidak Mampu (Sekolah)</span>
                        </a>
                      </li>

                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f24_suket_tidakmampuumum') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Keterangan Tidak Mampu (Umum)</span>
                        </a>
                      </li>

                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f25_surat_keterangan_rumahtangga_miskinsekali');?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Keterangan Rumah Tangga Miskin Sekali</span>
                        </a>
                      </li>

                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f26_surat_keterangan_penghasilan_orangtua') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Keterangan Penghasilan Orang Tua</span>
                        </a>
                      </li>

                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f27_permohonan_izin_keramaian_pesta');?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Permohonan Izin Keramaian Pesta</span>
                        </a>
                      </li>

                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f28_surat_pengantar_SKCK'); ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Pengantar SKCK</span>
                        </a>
                      </li>

                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f29_surat_keterangan_ahli_waris') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Keterangan Ahli Waris</span>
                        </a>
                      </li>

                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f30_surat_keterangan_bepergian') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Keterangan Bepergian</span>
                        </a>
                      </li>

                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f31_suket_tidak_ditempat') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Keterangan Tidak Berada di Tempat</span>
                        </a>
                      </li>

                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f32_surat_keterangan_beda_identitas'); ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Keterangan Beda Identitas</span>
                        </a>
                      </li>

                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f33_surat_keterangan_lainnya'); ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Keterangan Lainnya</span>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark" style="height: 70px;">
                      <span class="pcoded-micon">
                        <i class="ti-map"></i>
                      </span>
                      <span class="pcoded-mtext">Pelayanan Administrasi <br/>Pertanahan</span>
                    </a>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f34_surat_keterangan_pencocokan') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Keterangan Pencocokan</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f35_sporandik') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Sporadik</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f36_surat_keterangan_kepemilikan_tanah') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Keterangan Kepemilikan Tanah</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f37_keterangan_jaminanrumah') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Keterangan Jaminan Rumah</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f38_permohonan_mutasi') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Permohonan Mutasi</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f39_keterangan_ahli_waris') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Keterangan Ahli Waris</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f40_keterangan_desa') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Keterangan Desa</span>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark" style="height: 70px;">
                      <span class="pcoded-micon">
                        <i class="ti-write"></i>
                      </span>
                      <span class="pcoded-mtext">Surat Bebas</span>
                    </a>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f41_surat_keterangan_hibah') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Keterangan Hibah</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f42_surat_kuasa') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Kuasa</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f43_pengajuan_registrasiprodukumkm') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Surat Pengajuan Registrasi Produk UMKM</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/f44_surat_format_baru') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Template Surat Lainnya</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>

                <div class="pcoded-navigation-label">Tanggap Darurat Desa</div>
                <ul class="pcoded-item pcoded-left-item">
                  <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark" style="height: 70px;">
                      <span class="pcoded-micon">
                        <i class="fa fa-assistive-listening-systems text-c-green"></i>
                      </span>
                      <span class="pcoded-mtext text-c-green">Layanan Aspirasi dan Pengaduan Masyarakat</span>
                    </a>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/pengaduan') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Pengaduan</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/aspirasi') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Aspirasi</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/permintaan_informasi') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Permintaan Informasi</span>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                      <span class="pcoded-micon">
                        <i class="fa fa-volume-control-phone text-c-red"></i>
                      </span>
                      <span class="pcoded-mtext text-c-red">Tanggap Darurat</span>
                    </a>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/kebakaran') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Kebakaran</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo site_url('Managements/darurat_kesehatan') ?>" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Darurat Kesehatan</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>

                <div class="pcoded-navigation-label">Tambahan</div>
                <ul class="pcoded-item pcoded-left-item">

                  <li class="">
                    <a href="<?php echo site_url('Managements/request_layanan');?>" class="waves-effect waves-dark ">
                      <span class="pcoded-micon "><i class="feather icon-bell text-c-green"></i></span>
                      <span class="pcoded-mtext text-c-green">Request Persuratan</span>
                    </a>
                  </li>

                  <li class="">
                    <a href="<?php echo site_url('Managements/market_place');?>" class="waves-effect waves-dark">
                      <span class="pcoded-micon"><i class="fa fa-shopping-basket text-c-blue" ></i></span>
                      <span class="pcoded-mtext text-c-blue">Market Place</span>
                    </a>
                  </li>

                  <li class="">
                    <a href="<?php echo site_url('Managements/berita_desa');?>" class="waves-effect waves-dark ">
                      <span class="pcoded-micon "><i class="fa fa-newspaper-o text-c-yellow"></i></span>
                      <span class="pcoded-mtext text-c-yellow">Berita / Pengumuman Desa </span>
                    </a>
                  </li>
                  
                  <li class="">
                    <a href="<?php echo site_url('Managements/agenda_desa');?>" class="waves-effect waves-dark ">
                      <span class="pcoded-micon "><i class="feather icon-file text-c-yellow"></i></span>
                      <span class="pcoded-mtext text-c-yellow">Agenda Desa </span>
                    </a>
                  </li>
                  
                  <li class="">
                    <a href="<?php echo site_url('Managements/videofoto_desa');?>" class="waves-effect waves-dark">
                      <span class="pcoded-micon"><i class="fa fa-camera text-c-blue" ></i></span>
                      <span class="pcoded-mtext text-c-blue">Video & Foto Web</span>
                    </a>
                  </li>

                  <li class="">
                    <a href="<?php echo site_url('Managements/monografi');?>" class="waves-effect waves-dark ">
                      <span class="pcoded-micon "><i class="fa fa-pie-chart text-c-red"></i></span>
                      <span class="pcoded-mtext text-c-red">Monografi </span>
                    </a>
                  </li>
                  
                  <li class="">
                    <a href="<?php echo site_url('Managements/dana_desa');?>" class="waves-effect waves-dark ">
                      <span class="pcoded-micon "><i class="fa fa-money text-c-green"></i></span>
                      <span class="pcoded-mtext text-c-green">Dana Desa </span>
                    </a>
                  </li>



                  <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                      <span class="pcoded-micon">
                        <i class="ti-settings"></i>
                      </span>
                      <span class="pcoded-mtext">Pengaturan Sistem</span>
                    </a>
                    <ul class="pcoded-submenu">
                          
                      <li class="">
                        <a href="<?php echo site_url('Managements/pengaturan_profil');?>" class="waves-effect waves-dark">
                          <span class="pcoded-micon"><i class="ti-settings"></i></span>
                          <span class="pcoded-mtext">Pengaturan Profil</span>
                        </a>
                      </li>

                       <li class="">
                        <a href="<?php echo site_url('Managements/pengaturan_info_desa');?>" class="waves-effect waves-dark">
                          <span class="pcoded-micon"><i class="ti-settings"></i></span>
                          <span class="pcoded-mtext">Pengaturan Umum</span>
                        </a>
                      </li>

                       <li class="">
                        <a href="<?php echo site_url('Managements/manajemen_akun');?>" class="waves-effect waves-dark">
                          <span class="pcoded-micon"><i class="ti-settings"></i></span>
                          <span class="pcoded-mtext">Manajemen Akun</span>
                        </a>
                      </li>
                      
                      <li class="">
                        <a href="<?php echo site_url('Managements/pengaturan_headline_web');?>" class="waves-effect waves-dark">
                          <span class="pcoded-micon"><i class="ti-settings"></i></span>
                          <span class="pcoded-mtext">Pengaturan Web</span>
                        </a>
                      </li>

                       <!-- <li class="">
                        <a href="<?php echo site_url('Managements/manajemen_ttd');?>" class="waves-effect waves-dark">
                          <span class="pcoded-micon"><i class="ti-settings"></i></span>
                          <span class="pcoded-mtext">Manajemen Tanda Tangan</span>
                        </a>
                      </li> -->
                    </ul>
                  </li>


                   <!-- <li class="">
                    <a href="" class="waves-effect waves-dark">
                      <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                      <span class="pcoded-mtext">Manajemen Data</span>
                    </a>
                  </li> -->
                </ul>
  </div>
</div>
</nav>