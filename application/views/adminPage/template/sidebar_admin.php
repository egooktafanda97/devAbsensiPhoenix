<body>
  
    <div class="sidebar-container">
      <div class="sidebar-logo">
        <p style="margin: 0;font-size: 25px; font-weight: 900">DAPODIK</p>
            <p style="margin: 0;font-weight: bolder;">DISDIK PROVINSI RIAU</p>
            <p style="margin: 0;font-weight: bolder;">PENAMBAHAN PTK BARU</p>
      </div>
      <ul class="sidebar-navigation">
        <li class="header">Menu Navigasi</li>
          <li>
            <a href="#" onclick="showview('beranda');">
              <i class="fa fa-home" aria-hidden="true"></i> Beranda
            </a>
          </li>
        <?php
        if($levelUser=='5'){?>
          <li>
            <a href="#" onclick="showview('profil');">
              <i class="fa fa-user" aria-hidden="true"></i> Profil
            </a>
          </li>
          <li>
            <a href="#" onclick="showview('statspengajuan');">
              <i class="fa fa-file" aria-hidden="true"></i> Status Pengajuan
            </a>
          </li>
          
        <?php }else if($levelUser=='10'){?>
          <li>
            <a href="#" onclick="showview('listptk');">
              <i class="fa fa-user" aria-hidden="true"></i> Daftar PTK
            </a>
          </li>
          <li>
            <a href="#" onclick="showview('listpengajuanptk');">
              <i class="fa fa-file" aria-hidden="true"></i> Pengajuan PTK
            </a>
          </li>
          
        <?php } ?>
          <li>
            <a href="<?php echo base_url() ;?>Login/logoutUser" onclick="showview('beranda');" class="text-danger">
              <i class="fa fa-arrow-left" aria-hidden="true"></i> Keluar
            </a>
          </li>
      </ul>
    </div>