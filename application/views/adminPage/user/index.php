<body>
  
  <section class="wizard-section">
    <div class="row no-gutters">
      <div class="col-lg-3 col-md-3 col-12 text-center">

        <div class="wizard-content-left ">
          <img src="<?php echo base_url(); ?>/assets/png/logo1.png" width="120" style="padding-bottom: 25px; display: block;margin-left: auto;margin-right: auto;"/>
          <h1 style="display: block;">Formulir Penambahan Akun PTK</h1>

          <p style="border-radius: 15px; color: #fff; margin: 0px; margin-top: 25px;">Selamat datang,</p>
          <p style="text-transform: uppercase; border-radius: 225px; background-color: #fff;color: #000; display: inline-block;padding:10px;padding-left: 25px; padding-right: 25px; margin-bottom: 0px; white-space: nowrap;font-weight: bold;">
            <?php
            if(!$namaUserGiven){
              echo $usernameGiven;
            }else {
              echo $namaUserGiven;  
            }
            ?>

          </p>
          <p style="margin-top: 0px; padding-top: 0px; font-size: .8em; color: #fff;"><?=$emailGiven;?></p>
          <div style="width: 1px; height: 50px; background: #fff; opacity: .4; margin: auto;display: block; margin-bottom:15px;">
          </div>

          <a href="<?php echo site_url('Login/logoutUser');?>" class="btn btn-danger"><i class="fa fa-arrow-left" style="margin-right: 10px;"></i>Logout</a>


          <div id="arrowdown">
            <div class="scroll-arrow"></div>
            <div class="scroll-arrow"></div>
            <div class="scroll-arrow"></div>
          </div>

        </div>
      </div>
      <div class="col-lg-5 col-md-5 col-12" style="margin: auto; margin-top:0px;" >

        
        <div class="form-wizard" style="margin: auto;">
          <form id="main" action="" method="post" role="form">

            <?php
            if($statusAktif=='unactivated_verify'){

              ?>

              <div class="forms-email text-center" style="height: 100%; margin-top: auto; margin-bottom: auto; color: #000">
                <h4 style="color: #000">Akun anda belum diaktivasi</h4>
                <img src="https://cdn.dribbble.com/users/779602/screenshots/4848986/gmailsmall.gif" width="200" style="display:block; margin:auto;border-radius:1000px;"/>
                Kami telah mengirimkan email ke <font id="mails" style="font-weight:700;"><?=$emailGiven;?></font> Mohon segera di cek untuk dapat melakukan aktivasi Akun Anda. Terimakasih.
              </div>

            <?php }else if($statusAktif=='aktif'){

              ?>

              <div class="forms-email text-center" style="height: 100%; margin-top: auto; margin-bottom: auto; color: #000">
                <h4 style="color: #000">Berkas permohonan Anda telah diterima!</h4>
                <a class="btn btn-outline-success" href='<?php echo base_url();?>Welcome/adminUser' style="display: inline-block;">Lihat Data</a>
              </div>

            <?php }
            else {

              if($statusKelengkapan=="requesting"){ ?>



                <div class="forms-email text-center" style="height: 100%; margin-top: auto; margin-bottom: auto; color: #000">
                  <h4 style="color: #000;text-transform: capitalize;">Permohonan Anda sedang proses peninjauan</h4>
                  <img src="https://cdn.dribbble.com/users/23969/screenshots/2112979/check-animation-v2.gif" width="200" style="display:block; margin:auto;border-radius:1000px;"/>
                  <p>Klik tombol berikut ini untuk melihat Data dan Pengajuan Anda.</p>
                  <a class="btn btn-outline-success" href='<?php echo base_url();?>Welcome/adminUser' style="display: inline-block;">Lihat Data</a>
                </div>

              <?php }
              else if($statusKelengkapan=="lengkapi_data_upload"){ ?>

                <h4>Upload Berkas</h4>
                <h6>Berkas berikut diperlukan untuk acuan dalam permohonan PTK Baru</h6>
                <br>
                <table class="table table-hover table-striped table-bordered">
                  <tr>
                    <td>Jenis Dokumen</td>
                    <td>Status</td>
                    <td align="center">Aksi</td>
                  </th>

                  <tr>
                    <td width="400">
                      <p style="white-space: normal;">
                        <h4>KTP</h4>
                        <p>Pilih file berupa foto(.png, .jpg, .jpeg) atau PDF. Maksimal ukuran 5MB</p>
                      </p>
                    </td>
                    <td jalign="center" id="ketKTP"><?php if($adaktp=='belum'){echo 'Belum diupload';}else { echo '<font class="text-success">Diupload</font>';}?></td>
                    <td align="center">
                      <div class="fileUpload blue-btn btn width100 " id="upKTP">
                        <span style="display: inline-block;margin: auto; " id="spanKTP"><i style="font-size: 1.3em;" class="fa <?php if($adaktp=='belum'){echo 'fa-cloud-upload-alt';}else { echo 'fa-clipboard-check';}?> d-block"></i></span>
                        <input type="file" class="uploadlogo" id="uploadKTP"  <?php if($adaktp=='belum'){echo '';}else { echo 'disabled ';}?>/>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td width="400">
                      <p style="white-space: normal;">
                        <h4>SK Pengangkatan</h4>
                        <p>Untuk PTK yang honor disekolah negeri, SK <b>WAJIB</b> yang dikeluarkan oleh Dinas Pendidikan Provinsi Riau (ada barcode). Jika TIDAK, data tidak akan diproses.<br/>Pilih file berupa foto(.png, .jpg, .jpeg) atau PDF. Maksimal ukuran 5MB</p>
                      </p>
                    </td>
                    <td jalign="center" id="ketSK1"><?php if($adask1=='belum'){echo 'Belum diupload';}else { echo '<font class="text-success">Diupload</font>';}?></td>
                    <td align="center">
                      <div class="fileUpload blue-btn btn width100" id="upSK1">
                        <span style="display: inline-block;margin: auto; " id="spanSK1"><i style="font-size: 1.3em;" class="fa <?php if($adask1=='belum'){echo 'fa-cloud-upload-alt';}else { echo 'fa-clipboard-check';}?> d-block"></i></span>
                        <input type="file" class="uploadlogo" id="uploadSK1" <?php if($adask1=='belum'){echo '';}else { echo 'disabled ';}?> />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td width="400">
                      <p style="white-space: normal;">
                        <h4>SK Penugasan / SK Pembagian Tugas</h4>
                        <p>Pilih file berupa foto(.png, .jpg, .jpeg) atau PDF. Maksimal ukuran 5MB</p>
                      </p>
                    </td>
                    <td jalign="center" id="ketSK2"><?php if($adask2=='belum'){echo 'Belum diupload';}else { echo '<font class="text-success">Diupload</font>';}?></td>
                    <td align="center">
                      <div class="fileUpload blue-btn btn width100" id="upSK2">
                        <span style="display: inline-block;margin: auto; " id="spanSK2"><i style="font-size: 1.3em;" class="fa <?php if($adask2=='belum'){echo 'fa-cloud-upload-alt';}else { echo 'fa-clipboard-check';}?> d-block"></i></span>
                        <input type="file" class="uploadlogo" id="uploadSK2" <?php if($adask2=='belum'){echo '';}else { echo 'disabled ';}?> />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td width="400">
                      <p style="white-space: normal;">
                        <h4>Ijazah Terakhir</h4>
                        <p>Untuk <b>guru</b>, pendidikan terakhir <b>WAJIB</b> Strata I. Jika <b>TIDAK</b>,data tidak akan diproses.<br/>
                        Pilih file berupa foto(.png, .jpg, .jpeg) atau PDF. Maksimal ukuran 5MB</p>
                      </p>
                    </td>
                    <td jalign="center" id="ketIjazah"><?php if($adaijazah=='belum'){echo 'Belum diupload';}else { echo '<font class="text-success">Diupload</font>';}?></td>
                    <td align="center">
                      <div class="fileUpload blue-btn btn width100" id="upIjazah">
                        <span style="display: inline-block;margin: auto; " id="spanIjazah"><i style="font-size: 1.3em;" class="fa <?php if($adaijazah=='belum'){echo 'fa-cloud-upload-alt';}else { echo 'fa-clipboard-check';}?> d-block"></i></span>
                        <input type="file" class="uploadlogo" id="uploadIjazah" <?php if($adaijazah=='belum'){echo '';}else { echo 'disabled ';}?> />
                      </div>
                    </td>
                  </tr>
                </table>

              <?php  } else { ?>

                <div class="form-wizard-header">
                  <p>Harap isi segala keperluan untuk pengajuan akun PTK baru</p>
                  <ul class="list-unstyled form-wizard-steps clearfix">
                    <li class="active"><span>1</span></li>
                    <li><span>2</span></li>
                    <li><span>3</span></li>
                    <li><span>4</span></li>
                  </ul>
                </div>
                <fieldset class="wizard-fieldset show">
                  <h5><i class="fa fa-address-card" style="margin-right: 25px;"></i>PEREKAMAN DATA PENDIDIK DAN TENAGA KEPENDIDIKAN</h5>
                  <div class="form-group">
                    <input type="text" class="form-control wizard-required" id="nik" required="">
                    <label for="nik" class="wizard-form-text-label">NIK sesuai KTP*</label>
                    <div class="wizard-form-error"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control wizard-required" id="Nama"  required="">
                    <label for="Nama" class="wizard-form-text-label">Nama (tanpa gelar)*</label>
                    <div class="wizard-form-error"></div>
                  </div>
                  <div class="form-group">
                    Jenis Kelamin*
                    <div class="wizard-form-radio">
                      <input name="radio-name" id="radio1" type="radio" value="laki-laki" required="" checked="">
                      <label for="radio1">Laki - laki</label>
                    </div>
                    <div class="wizard-form-radio">
                      <input name="radio-name" id="radio2" type="radio" value="perempuan" required="">
                      <label for="radio2">Perempuan</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control wizard-required" id="tempatLahir" required="">
                    <label for="tempatLahir" class="wizard-form-text-label">Tempat Lahir*</label>
                    <div class="wizard-form-error"></div>
                  </div>
                  <div class="form-group">
                    <input type="date" class="form-control wizard-required" id="tglLahir" required="">
                    <!-- <label for="fname" class="wizard-form-text-label">Tanggal Lahir*</label> -->
                    <div class="wizard-form-error"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control wizard-required" id="namaIbu" required="">
                    <label for="namaIbu" class="wizard-form-text-label">Nama ibu kandung*</label>
                    <div class="wizard-form-error"></div>
                  </div>
                  <div class="form-group">
                    <label for="tmtPengangkatan" class="" style="font-size: 14px; margin-bottom: 0px; color : #04befe; padding-left:10px;">Agama*</label>
                    <select id="agama" class="form-control wizard-required" required="">
                      <option value=" ">Pilih agama</option>
                      <option value="Islam">Islam</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Katolik">Katolik</option>
                      <option value="Buddha">Buddha</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Konghuchu">Konghuchu</option>
                    </select>
                    <div class="wizard-form-error"></div>
                  </div>
                  <div class="form-group">
                    <label for="tmtPengangkatan" class="" style="font-size: 14px; margin-bottom: 0px; color : #04befe; padding-left:10px;">Status Perkawinan*</label>
                    <select id="statusPerkawinan" class="form-control wizard-required">
                      <option value=" ">Pilih Status Perkawinan</option>
                      <option value="Menikah">Menikah</option>
                      <option value="Janda">Janda</option>
                      <option value="Duda">Duda</option>
                      <option value="Belum Menikah">Belum Menikah</option>
                      
                    </select>
                    <div class="wizard-form-error"></div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="" style="font-size: 14px; margin-bottom: 0px; color : #04befe; padding-left:10px;">Email*</label>
                    <input type="email" class="form-control wizard-required" id="email" value="<?=$emailGiven;?>" required="" style="background: #e1e1e1;" disabled>
                    
                    <div class="wizard-form-error"></div>
                  </div>
                  <div class="form-group clearfix">
                    <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                  </div>
                </fieldset> 
                <fieldset class="wizard-fieldset">
                  <h5>KEPEGAWAIAN</h5>
                  <div class="form-group">
                    <label for="tmtPengangkatan" class="" style="font-size: 14px; margin-bottom: 0px; color : #04befe; padding-left:10px;">Status Kepegawaian*</label>
                    <select id="statusKepegawaian" class="form-control wizard-required">
                      <option value=" ">Pilih Status Kepegawaian</option>
                      <?php
                      foreach ($dataJenisKepegawaian->result() as $row) { ?>
                        
                        <option value="<?=$row->keterangan;?>"><?=$row->keterangan;?></option>

                      <?php } ?>
                      
                    </select>
                    <div class="wizard-form-error"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control wizard-required" id="NIP" required="">
                    <label for="NIP" class="wizard-form-text-label">NIP*</label>
                    <p style="font-size: 11px;padding-bottom: 5px;">*) Wajib diisi jika status Kepegawaian PNS/CPNS</p>
                    <div class="wizard-form-error"></div>

                  </div>
                  <div class="form-group">
                    <label for="jenisPTK" class="" style="font-size: 14px; margin-bottom: 0px; color : #04befe; padding-left:10px;">Jenis PTK*</label>
                    <select id="jenisPTK" class="form-control wizard-required">
                      <option value=" ">Pilih Jenis PTK</option>
                      <?php
                      foreach ($dataJenisPTK->result() as $row) { ?>
                        
                        <option value="<?=$row->keterangan;?>"><?=$row->keterangan;?></option>

                      <?php } ?>
                    </select>
                    <div class="wizard-form-error"></div>
                  </div>
                  <div class="form-group">
                    <label for="lembagaPengangkat" class="" style="font-size: 14px; margin-bottom: 0px; color : #04befe; padding-left:10px;">Lembaga Pengangkat*</label>
                    <select id="lembagaPengangkat" class="form-control wizard-required">
                      <option value=" ">Pilih Lembaga Pengangkat</option>
                      <?php
                      foreach ($dataLembagaPengangkatan->result() as $row) { ?>
                        
                        <option value="<?=$row->keterangan;?>"><?=$row->keterangan;?></option>

                      <?php } ?>
                    </select>
                    <div class="wizard-form-error"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control wizard-required" id="sk" required="">
                    <label for="sk" class="wizard-form-text-label">SK Pengangkatan*</label>
                    <div class="wizard-form-error"></div>
                  </div>
                  <div class="form-group">
                    <label for="tmtPengangkatan" class="" style="font-size: 14px; margin-bottom: 0px; color : #04befe; padding-left:10px;">TMT Pengangkatan*</label>
                    <input type="date" class="form-control wizard-required" id="tmtPengangkatan" required="">
                    
                    <div class="wizard-form-error"></div>
                  </div>
                  <div class="form-group">
                    <label for="sumberGaji" class="" style="font-size: 14px; margin-bottom: 0px; color : #04befe; padding-left:10px;">Sumber Gaji*</label>
                    <select id="sumberGaji" class="form-control wizard-required">
                      <option value=" ">Pilih Sumber Gaji</option>
                       <?php
                      foreach ($dataSumberGaji->result() as $row) { ?>
                        
                        <option value="<?=$row->keterangan;?>"><?=$row->keterangan;?></option>

                      <?php } ?>

                    </select>
                  </div>
                  <div class="form-group">
                    Sudah lisensi Kepala Sekolah?*
                    <div class="wizard-form-radio">
                      <input name="radio-name-2" id="radio3" type="radio" value="sudah" required="" checked="">
                      <label for="radio3">Sudah</label>
                    </div>
                    <div class="wizard-form-radio">
                      <input name="radio-name-2" id="radio4" type="radio" value="belum" required="">
                      <label for="radio4">Belum</label>
                    </div>
                  </div>

                  <div class="form-group clearfix">
                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                    <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                  </div>
                </fieldset> 
                <fieldset class="wizard-fieldset">
                  <h5>DOMISILI</h5>
                  <div class="form-group">
                    <label for="kabupatenKota" class="" style="font-size: 14px; margin-bottom: 0px; color : #04befe; padding-left:10px;">Kabupaten/Kota*</label>
                    <select id="kabupatenKota" class="form-control wizard-required">
                      <option value=" ">Pilih Kabupaten / Kota</option>
                       <?php
                      foreach ($dataKabupaten->result() as $row) { ?>
                        
                        <option value="<?=$row->kabupaten;?>"><?=$row->kabupaten;?></option>

                      <?php } ?>

                    </select>
                    <div class="wizard-form-error"></div>
                  </div>
                  <div class="form-group">
                    <label for="kecamatan" class="" style="font-size: 14px; margin-bottom: 0px; color : #04befe; padding-left:10px;">Kecamatan*</label>
                    <select id="kecamatan" class="form-control wizard-required">
                      <option value=" ">Pilih kecamatan</option>
                      
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="desaKelurahan" class="" style="font-size: 14px; margin-bottom: 0px; color : #04befe; padding-left:10px;">Desa/Kelurahan*</label>
                    <select id="desaKelurahan" class="form-control wizard-required">
                      <option value=" ">Pilih desa/kelurahan</option>
                      
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="kodePos" class="" style="font-size: 14px; margin-bottom: 0px; color : #04befe; padding-left:10px;">Kode Pos*</label>
                    <input type="text" class="form-control wizard-required" id="kodePos" required="">
                    
                    <div class="wizard-form-error"></div>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control wizard-required" id="alamat" required="">
                    <label for="alamat" class="wizard-form-text-label">Alamat*</label>
                    <div class="wizard-form-error"></div>
                  </div>

                  <div class="form-group clearfix">
                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                    <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                  </div>
                </fieldset> 
                <fieldset class="wizard-fieldset">
                  <h5>PENUGASAN</h5>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                          <label for="kabupatenKotaTugas" class="" style="font-size: 14px; margin-bottom: 0px; color : #04befe; padding-left:10px;">Kabupaten/Kota*</label>
                          <select id="kabupatenKotaTugas" class="form-control wizard-required">
                            <option value=" ">Pilih Kabupaten / Kota</option>
                             <?php
                            foreach ($dataKabupaten->result() as $row) { ?>
                              
                              <option value="<?=$row->kabupaten;?>"><?=$row->kabupaten;?></option>

                            <?php } ?>

                          </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="form-group">
                        <label for="kecamatanTugas" class="" style="font-size: 14px; margin-bottom: 0px; color : #04befe; padding-left:10px;">Kecamatan*</label>
                        <select id="kecamatanTugas" class="form-control wizard-required">
                          <option value=" ">Pilih kecamatan</option>
                          
                        </select>
                      </div>
                    </div>

                  </div>
                  
                  <div class="form-group">
                    <label for="sekolahTugas" class="" style="font-size: 14px; margin-bottom: 0px; color : #04befe; padding-left:10px;">Sekolah*</label>
                    <select id="sekolahTugas" class="form-control wizard-required">
                      <option value=" ">Pilih sekolah</option>
                      
                    </select>
                  </div>
                  
                  
                  <div class="form-group">
                    <input type="text" class="form-control wizard-required" id="nomorSuratTugas" required="">
                    <label for="nomorSuratTugas" class="wizard-form-text-label">Nomor surat tugas*</label>
                    <div class="wizard-form-error"></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="form-group">
                        <label for="tmtPengangkatan2" class="" style="font-size: 14px; margin-bottom: 0px; color : #04befe; padding-left:10px;">TMT Pengangkatan*</label>
                        <input type="date" class="form-control wizard-required" id="tmtPengangkatan2" required="">
                        
                        <div class="wizard-form-error"></div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="form-group">
                        <label for="tmtTugas" class="" style="font-size: 14px; margin-bottom: 0px; color : #04befe; padding-left:10px;">TMT Tugas*</label>
                        <input type="date" class="form-control wizard-required" id="tmtTugas" required="">
                        
                        <div class="wizard-form-error"></div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group clearfix">
                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                    <a href="javascript:;" class="form-wizard-submit float-right">Simpan</a>
                  </div>
                </fieldset> 
                
              <?php }} ?>
              
            </form>
          </div>

          <div id="smry">
            <p>Berkas Anda telah lengkap, silahkan klik tombol dibawah ini untuk melanjutkan proses berikutnya. Terimakasih.</p>
            <!-- <button class="btn btn-lg  btn-outline-success" style="margin: auto; display: block; margin-bottom: 100px; padding-left: 30px; padding-right: 30px; font-size: 20px;border-color: #00d11f;color: #00d11f">Kirim Pengajuan Berkas</button> -->
          </div>
          <div id="smryref">

            <button onclick="location.reload();" class="btn btn-lg  btn-outline-success" style="margin: auto; display: block; margin-bottom: 100px; padding-left: 30px; padding-right: 30px; font-size: 20px;border-color: #00d11f;color: #00d11f">Refresh halaman sekarang</button>
          </div>
        </div>
      </div>
    </section>


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">

      $(document).ready(function($) {


        
          $('#smryref ').fadeOut();
        $('#smryref ').attr("style","padding-left: 40px; padding-right: 40px;text-align: center; display: none");
        
        $('#smry').fadeOut();
        $('#smry').attr("style","padding-left: 40px; padding-right: 40px;text-align: center; display: none");

        // Upload btn on change call function
        $("#uploadKTP").change(function() {

        var filename = readURL(this);
        $(this).parent().children('span').html(filename);



        var file_data = $('#uploadKTP').prop('files')[0];

        var form_data = new FormData();        
        form_data.append('filesss', file_data);          
        form_data.append('tipe', "ktp");

          $(".spanKTP").html('<div class="lds-facebook"><div></div><div></div><div></div></div>');
          $('.spanKTP').prop("disabled", true);
          $(".spanKTP").attr('style','cursor:not-allowed');
        
        jQuery.ajax({
              type: "POST",
              url: "<?php echo base_url(); ?>"+"Welcome/uploadBerkas",
              cache: false,
              contentType: false,
              processData: false,
              data: form_data,
              dataType: 'json',  // what to expect back from the PHP script, if anything
              
              success : function(e){
                  
                  if (e.resultnya=='wrong_pass') {
                    $("#not6").trigger('click');
                  }else if (e.resultnya=='true') {

                    <?php if($statusKelengkapan=='lengkapi_data_upload'){ ?>
                      $('#smryref').attr("style","padding-left: 40px; padding-right: 40px;text-align: center; display: block");
                      $('#smryref').fadeIn();
                      $("html, body").animate({ scrollTop: document.body.scrollHeight }, "slow");
                  <?php } ?>

                  $("#spanKTP").html('<i style="font-size: 1.3em;" class="fa text-success fa-clipboard-check d-block"></i>');
                  $("#ketKTP").html('Diupload');
                  $('#spanKTP').prop("disabled", false);
                  $("#spanKTP").attr('style','cursor:pointer');
                    
                    Swal.fire({
                      // position: 'top-end',
                      position: 'center',
                      icon: 'success',
                      title: 'File terupload!',
                      text: 'Harap menunggu validasi dari tim kami.',
                      showConfirmButton: false,
                      timer: 3000
                    });

                  }

                else {
                  alert( e );
                }
              }
          
        });


        if($('#uploadKTP').get(0).files.length > 0 && $('#uploadSK1').get(0).files.length > 0 && $('#uploadSK2').get(0).files.length > 0 && $('#uploadIjazah').get(0).files.length > 0) {
          $('#smry').attr("style","padding-left: 40px; padding-right: 40px;text-align: center; display: block");
          $('#smry').fadeIn();
          $("html, body").animate({ scrollTop: document.body.scrollHeight }, "slow");

          Swal.fire({
            // position: 'top-end',
            position: 'center',
            icon: 'success',
            title: 'File sudah lengkap!',
            text: 'Lanjut ke proses berikutnya?',
            showConfirmButton: false,
            timer: 10000
          });
        }
        else {
          $('#smry').fadeOut();
          $('#smry').attr("style","padding-left: 40px; padding-right: 40px;text-align: center; display: none");
        }
      });

      $("#uploadSK1").change(function() {
        var filename = readURL2(this);
        $(this).parent().children('span').html(filename);


        var file_data = $('#uploadSK1').prop('files')[0];

        var form_data = new FormData();        
        form_data.append('filesss', file_data);          
        form_data.append('tipe', "sk1");

          $(".spanSK1").html('<div class="lds-facebook"><div></div><div></div><div></div></div>');
          $('.spanSK1').prop("disabled", true);
          $(".spanSK1").attr('style','cursor:not-allowed');
        
        jQuery.ajax({
              type: "POST",
              url: "<?php echo base_url(); ?>"+"Welcome/uploadBerkas",
              cache: false,
              contentType: false,
              processData: false,
              data: form_data,
              dataType: 'json',  // what to expect back from the PHP script, if anything
              
              success : function(e){
                  
                  if (e.resultnya=='wrong_pass') {
                    $("#not6").trigger('click');
                  }else if (e.resultnya=='true') {

                    <?php if($statusKelengkapan=='lengkapi_data_upload'){ ?>
                      $('#smryref').attr("style","padding-left: 40px; padding-right: 40px;text-align: center; display: block");
                      $('#smryref').fadeIn();
                      $("html, body").animate({ scrollTop: document.body.scrollHeight }, "slow");
                  <?php } ?>

                  $("#spanSK1").html('<i style="font-size: 1.3em;" class="fa text-success fa-clipboard-check d-block"></i>');
                  $("#ketSK1").html('Diupload');
                  $('#spanSK1').prop("disabled", false);
                  $("#spanSK1").attr('style','cursor:pointer');
                    
                    Swal.fire({
                      // position: 'top-end',
                      position: 'center',
                      icon: 'success',
                      title: 'File terupload!',
                      text: 'Harap menunggu validasi dari tim kami.',
                      showConfirmButton: false,
                      timer: 3000
                    });

                  }

                else {
                  alert( e );
                }
              }
          
        });


        if($('#uploadKTP').get(0).files.length > 0 && $('#uploadSK1').get(0).files.length > 0 && $('#uploadSK2').get(0).files.length > 0 && $('#uploadIjazah').get(0).files.length > 0) {
         $('#smry').attr("style","padding-left: 40px; padding-right: 40px;text-align: center; display: block");
         $('#smry').fadeIn();
         $("html, body").animate({ scrollTop: document.body.scrollHeight }, "slow");

         Swal.fire({
            // position: 'top-end',
            position: 'center',
            icon: 'success',
            title: 'File sudah lengkap!',
            text: 'Lanjut ke proses berikutnya?',
            showConfirmButton: false,
            timer: 10000
          })
       }
       else {
        $('#smry').fadeOut();
        $('#smry').attr("style","padding-left: 40px; padding-right: 40px;text-align: center; display: none");
      }

    });

      $("#uploadSK2").change(function() {
        var filename = readURL3(this);
        $(this).parent().children('span').html(filename);

        var file_data = $('#uploadSK2').prop('files')[0];

        var form_data = new FormData();        
        form_data.append('filesss', file_data);          
        form_data.append('tipe', "sk2");

          $(".spanSK2").html('<div class="lds-facebook"><div></div><div></div><div></div></div>');
          $('.spanSK2').prop("disabled", true);
          $(".spanSK2").attr('style','cursor:not-allowed');
        
        jQuery.ajax({
              type: "POST",
              url: "<?php echo base_url(); ?>"+"Welcome/uploadBerkas",
              cache: false,
              contentType: false,
              processData: false,
              data: form_data,
              dataType: 'json',  // what to expect back from the PHP script, if anything
              
              success : function(e){
                  
                  if (e.resultnya=='wrong_pass') {
                    $("#not6").trigger('click');
                  }else if (e.resultnya=='true') {

                    <?php if($statusKelengkapan=='lengkapi_data_upload'){ ?>
                      $('#smryref').attr("style","padding-left: 40px; padding-right: 40px;text-align: center; display: block");
                      $('#smryref').fadeIn();
                      $("html, body").animate({ scrollTop: document.body.scrollHeight }, "slow");
                  <?php } ?>

                  $("#spanSK2").html('<i style="font-size: 1.3em;" class="fa text-success fa-clipboard-check d-block"></i>');
                  $("#ketSK2").html('Diupload');
                  $('#spanSK2').prop("disabled", false);
                  $("#spanSK2").attr('style','cursor:pointer');
                    
                    Swal.fire({
                      // position: 'top-end',
                      position: 'center',
                      icon: 'success',
                      title: 'File terupload!',
                      text: 'Harap menunggu validasi dari tim kami.',
                      showConfirmButton: false,
                      timer: 3000
                    });

                  }

                else {
                  alert( e );
                }
              }
          
        });

        if($('#uploadKTP').get(0).files.length > 0 && $('#uploadSK1').get(0).files.length > 0 && $('#uploadSK2').get(0).files.length > 0 && $('#uploadIjazah').get(0).files.length > 0) {
         $('#smry').attr("style","padding-left: 40px; padding-right: 40px;text-align: center; display: block");
         $('#smry').fadeIn();
         $("html, body").animate({ scrollTop: document.body.scrollHeight }, "slow");

         Swal.fire({
            // position: 'top-end',
            position: 'center',
            icon: 'success',
            title: 'File sudah lengkap!',
            text: 'Lanjut ke proses berikutnya?',
            showConfirmButton: false,
            timer: 10000
          })
       }
       else {
        $('#smry').fadeOut();
        $('#smry').attr("style","padding-left: 40px; padding-right: 40px;text-align: center; display: none");
      }

    });

      $("#uploadIjazah").change(function() {
        var filename = readURL4(this);
        $(this).parent().children('span').html(filename);


        var file_data = $('#uploadIjazah').prop('files')[0];

        var form_data = new FormData();        
        form_data.append('filesss', file_data);          
        form_data.append('tipe', "ijazah");

          $(".spanIjazah").html('<div class="lds-facebook"><div></div><div></div><div></div></div>');
          $('.spanIjazah').prop("disabled", true);
          $(".spanIjazah").attr('style','cursor:not-allowed');
        
        jQuery.ajax({
              type: "POST",
              url: "<?php echo base_url(); ?>"+"Welcome/uploadBerkas",
              cache: false,
              contentType: false,
              processData: false,
              data: form_data,
              dataType: 'json',  // what to expect back from the PHP script, if anything
              
              success : function(e){
                  
                  if (e.resultnya=='wrong_pass') {
                    $("#not6").trigger('click');
                  }else if (e.resultnya=='true') {

                    <?php if($statusKelengkapan=='lengkapi_data_upload'){ ?>
                      $('#smryref').attr("style","padding-left: 40px; padding-right: 40px;text-align: center; display: block");
                      $('#smryref').fadeIn();
                      $("html, body").animate({ scrollTop: document.body.scrollHeight }, "slow");
                  <?php } ?>

                  $("#spanIjazah").html('<i style="font-size: 1.3em;" class="fa text-success fa-clipboard-check d-block"></i>');
                  $("#ketIjazah").html('Diupload');
                  $('#spanIjazah').prop("disabled", false);
                  $("#spanIjazah").attr('style','cursor:pointer');
                    
                    Swal.fire({
                      // position: 'top-end',
                      position: 'center',
                      icon: 'success',
                      title: 'File terupload!',
                      text: 'Harap menunggu validasi dari tim kami.',
                      showConfirmButton: false,
                      timer: 3000
                    });

                  }

                else {
                  alert( e );
                }
              }
          
        });


        if($('#uploadKTP').get(0).files.length > 0 && $('#uploadSK1').get(0).files.length > 0 && $('#uploadSK2').get(0).files.length > 0 && $('#uploadIjazah').get(0).files.length > 0) {
         $('#smry').attr("style","padding-left: 40px; padding-right: 40px;text-align: center; display: block");
         $('#smry').fadeIn();
         $("html, body").animate({ scrollTop: document.body.scrollHeight }, "slow");

         Swal.fire({
            // position: 'top-end',
            position: 'center',
            icon: 'success',
            title: 'File sudah lengkap!',
            text: 'Lanjut ke proses berikutnya?',
            showConfirmButton: false,
            timer: 10000
          })
       }
       else {
        $('#smry').fadeOut();
        $('#smry').attr("style","padding-left: 40px; padding-right: 40px;text-align: center; display: none");
      }

    });

      // Read File and return value  
      function readURL(input) {
        var url = input.value;
        var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
        if (input.files && input.files[0] && (
          ext == "png" || ext == "jpeg" || ext == "jpg" || ext == "gif" || ext == "pdf"
          )) {

          // $(".animatedFadeInUp").addClass("fadeInUp");
        var path = $(input).val();
        var filename = path.replace(/^.*\\/, "");
        $("#upKTP").attr("style","border-color:#00d11f!important;");
        return "<font style='font-size:12px!important;color:#00d11f'><i class='fa fa-check' style='margin-right:10px;'></i>"+filename+"</font>";
      } else {
        $(input).val("");
        $("#upKTP").attr("style","border-color:#d10404!important;");
        return "<font style='font-size:12px!important;color:#d10404'><i class='fa fa-times' style='margin-right:10px;'></i>Tipe file tidak sesuai</font>";

      }
    }

    function readURL2(input) {
      var url = input.value;
      var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
      if (input.files && input.files[0] && (
        ext == "png" || ext == "jpeg" || ext == "jpg" || ext == "gif" || ext == "pdf"
        )) {
        var path = $(input).val();
      var filename = path.replace(/^.*\\/, "");
      $("#upSK1").attr("style","border-color:#00d11f!important;");
      return "<font style='font-size:12px!important;color:#00d11f'><i class='fa fa-check' style='margin-right:10px;'></i>"+filename+"</font>";
    } else {
      $(input).val("");
      $("#upSK1").attr("style","border-color:#d10404!important;");
      return "<font style='font-size:12px!important;color:#d10404'><i class='fa fa-times' style='margin-right:10px;'></i>Tipe file tidak sesuai</font>";
    }
  }

  function readURL3(input) {
    var url = input.value;
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0] && (
      ext == "png" || ext == "jpeg" || ext == "jpg" || ext == "gif" || ext == "pdf"
      )) {
      var path = $(input).val();
    var filename = path.replace(/^.*\\/, "");
    $("#upSK2").attr("style","border-color:#00d11f!important;");
    return "<font style='font-size:12px!important;color:#00d11f'><i class='fa fa-check' style='margin-right:10px;'></i>"+filename+"</font>";
  } else {
    $(input).val("");
    $("#upSK2").attr("style","border-color:#d10404!important;");
    return "<font style='font-size:12px!important;color:#d10404'><i class='fa fa-times' style='margin-right:10px;'></i>Tipe file tidak sesuai</font>";
  }
}

function readURL4(input) {
  var url = input.value;
  var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
  if (input.files && input.files[0] && (
    ext == "png" || ext == "jpeg" || ext == "jpg" || ext == "gif" || ext == "pdf"
    )) {
    var path = $(input).val();
  var filename = path.replace(/^.*\\/, "");
  $("#upIjazah").attr("style","border-color:#00d11f!important;");
  return "<font style='font-size:12px!important;color:#00d11f'><i class='fa fa-check' style='margin-right:10px;'></i>"+filename+"</font>";
} else {
  $(input).val("");
  $("#upIjazah").attr("style","border-color:#d10404!important;");
  return "<font style='font-size:12px!important;color:#d10404'><i class='fa fa-times' style='margin-right:10px;'></i>Tipe file tidak sesuai</font>";
}
}
      // Upload btn end

    });

jQuery(document).ready(function() {
  
  // You can modify the upload files to pdf's, docs etc
  //Currently it will upload only images

  

  // click on next button
  jQuery('.form-wizard-next-btn').click(function() {
    var parentFieldset = jQuery(this).parents('.wizard-fieldset');
    var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
    var next = jQuery(this);
    var nextWizardStep = true;
    parentFieldset.find('.wizard-required').each(function(){
      var thisValue = jQuery(this).val();

      if( thisValue == "") {
        jQuery(this).siblings(".wizard-form-error").slideDown();
        nextWizardStep = false;

        Swal.fire({
          position: 'top',
          grow : 'false',
          timerProgressBar : true,
              // icon: 'success',
              title: 'Formulir belum lengkap',
              text: 'Anda dapat beralih ke proses berikutnya apabila telah mengisi semua keperluan formulir',
              showConfirmButton: false,
              timer: 3000
            })

      }
      else {
        jQuery(this).siblings(".wizard-form-error").slideUp();
      }
    });

    if( nextWizardStep) {
      next.parents('.wizard-fieldset').removeClass("show","400");
      currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',"400");
      next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show","400");
      jQuery(document).find('.wizard-fieldset').each(function(){
        if(jQuery(this).hasClass('show')){
          var formAtrr = jQuery(this).attr('data-tab-content');
          jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
            if(jQuery(this).attr('data-attr') == formAtrr){
              jQuery(this).addClass('active');
              var innerWidth = jQuery(this).innerWidth();
              var position = jQuery(this).position();
              jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
            }else{
              jQuery(this).removeClass('active');


            }
          });
        }
      });
    }
  });
  //click on previous button
  jQuery('.form-wizard-previous-btn').click(function() {
    var counter = parseInt(jQuery(".wizard-counter").text());;
    var prev =jQuery(this);
    var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
    prev.parents('.wizard-fieldset').removeClass("show","400");
    prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show","400");
    currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',"400");
    
    jQuery(document).find('.wizard-fieldset').each(function(){
      if(jQuery(this).hasClass('show')){
        var formAtrr = jQuery(this).attr('data-tab-content');
        jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
          if(jQuery(this).attr('data-attr') == formAtrr){
            jQuery(this).addClass('active');
            var innerWidth = jQuery(this).innerWidth();
            var position = jQuery(this).position();
            jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});


          }else{
            jQuery(this).removeClass('active');

          }
        });
      }
    });
  });
  //click on form submit button
  jQuery(document).on("click",".form-wizard .form-wizard-submit" , function(){

    

    Swal.fire({
      title: 'Yakin telah memberikan data yang benar?',
      text: "Kami memperingatkan Anda untuk dapat cek terlebih dahulu data yang diinputkan sebelum di Submit!",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, saya yakin'
    }).then((result) => {
      if (result.isConfirmed) {
          
          var nik = $("#nik").val();
          var Nama = $("#Nama").val();
          var jenisKelamin = $('input[name="radio-name"]:checked').val();
          var tempatLahir = $("#tempatLahir").val();
          var tglLahir = $("#tglLahir").val();
          var namaIbu = $("#namaIbu").val();
          var agama = $("#agama").val();
          var statusPerkawinan = $("#statusPerkawinan").val();
          var email = $("#email").val();

          var statusKepegawaian = $("#statusKepegawaian").val();
          var NIP = $("#NIP").val();
          var jenisPTK = $("#jenisPTK").val();
          var lembagaPengangkat = $("#lembagaPengangkat").val();
          var sk = $("#sk").val();
          var tmtPengangkatan = $("#tmtPengangkatan").val();
          var sumberGaji = $("#sumberGaji").val();
          var lisensiSekolah = $('input[name="radio-name-2"]:checked').val();
          
          var kabupatenKota = $("#kabupatenKota").val();
          var kecamatan = $("#kecamatan").val();
          var desaKelurahan = $("#desaKelurahan").val();
          var kodePos = $("#kodePos").val();
          var alamat = $("#alamat").val();
          
          var kabupatenKotaTugas = $("#kabupatenKotaTugas").val();
          var kecamatanTugas = $("#kecamatanTugas").val();
          var sekolahTugas = $("#sekolahTugas").val();
          var nomorSuratTugas = $("#nomorSuratTugas").val();
          var tmtPengangkatan2 = $("#tmtPengangkatan2").val();
          var tmtTugas = $("#tmtTugas").val();
          
          var form_data = new FormData();              
          form_data.append('id', <?=$idUser;?>);
          form_data.append('nik', nik);
          form_data.append('Nama', Nama);
          form_data.append('jenisKelamin', jenisKelamin);
          form_data.append('tempatLahir', tempatLahir);
          form_data.append('tglLahir', tglLahir);
          form_data.append('namaIbu', namaIbu);
          form_data.append('agama', agama);
          form_data.append('statusPerkawinan', statusPerkawinan);
          form_data.append('email', email);
          form_data.append('statusKepegawaian', statusKepegawaian);
          form_data.append('NIP', NIP);
          form_data.append('jenisPTK', jenisPTK);
          form_data.append('lembagaPengangkat', lembagaPengangkat);
          form_data.append('sk', sk);
          form_data.append('tmtPengangkatan', tmtPengangkatan);
          form_data.append('sumberGaji', sumberGaji);
          form_data.append('lisensiSekolah', lisensiSekolah);
          form_data.append('kabupatenKota', kabupatenKota);
          form_data.append('kecamatan', kecamatan);
          form_data.append('desaKelurahan', desaKelurahan);
          form_data.append('kodePos', kodePos);
          form_data.append('alamat', alamat);
          form_data.append('kabupatenKotaTugas', kabupatenKotaTugas);
          form_data.append('kecamatanTugas', kecamatanTugas);
          form_data.append('sekolahTugas', sekolahTugas);
          form_data.append('nomorSuratTugas', nomorSuratTugas);
          form_data.append('tmtPengangkatan2', tmtPengangkatan2);
          form_data.append('tmtTugas', tmtTugas);
          
          $(".form-wizard-submit").html('<div class="lds-facebook"><div></div><div></div><div></div></div>');
          $('.form-wizard-submit').prop("disabled", true);
          $(".form-wizard-submit").attr('style','cursor:not-allowed');
          
          jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>"+"Welcome/addPengajuanPTK",
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            dataType: 'json',  // what to expect back from the PHP script, if anything
            beforeSend: function() {
              
            },
            success : function(e){
              
                // $("#mails").text(email);
                
                if (e.resultnya=='true') {
                  Swal.fire({
                    // position: 'top-end',
                    position: 'center',
                    timerProgressBar : true,
                    icon: 'success',
                    title: 'Pengajuan Anda telah terkirim',
                    text: 'Lanjutkan menuju proses upload data',
                    showConfirmButton: false,
                    timer: 10000
                  });


                  
                  
                }else if (e.resultnya=='false') {
                  Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Data tidak ditemukan',
                    text: 'Ulangi dengan memasukkan data yang benar',
                    showConfirmButton: false,
                    timer: 5500
                  });
                  $(".form-wizard-submit").html('Login');
                  $('.form-wizard-submit').prop("disabled", false);
                  $("#.form-wizard-submit").attr('style','cursor:pointer');
                  
                }else if (e.resultnya=='verify_needed') {
                  Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Kami sedang menunggu Anda untuk melakukan verifikasi melalui email yang telah kami kirimkan!',
                    showConfirmButton: false,
                    timer: 3500
                  });
                }

                else {
                  alert( e );
                }
              }
              
            });
        }
      
    })

var parentFieldset = jQuery(this).parents('.wizard-fieldset');
var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
parentFieldset.find('.wizard-required').each(function() {
  var thisValue = jQuery(this).val();
  if( thisValue == "" ) {
    jQuery(this).siblings(".wizard-form-error").slideDown();
  }
  else {
    jQuery(this).siblings(".wizard-form-error").slideUp();
  }
});
});
  // focus on input field check empty or not
  jQuery(".form-control").on('focus', function(){
    var tmpThis = jQuery(this).val();
    if(tmpThis == '' ) {
      jQuery(this).parent().addClass("focus-input");
    }
    else if(tmpThis !='' ){
      jQuery(this).parent().addClass("focus-input");
    }
  }).on('blur', function(){
    var tmpThis = jQuery(this).val();
    if(tmpThis == '' ) {
      jQuery(this).parent().removeClass("focus-input");
      jQuery(this).siblings('.wizard-form-error').slideDown("3000");
    }
    else if(tmpThis !='' ){
      jQuery(this).parent().addClass("focus-input");
      jQuery(this).siblings('.wizard-form-error').slideUp("3000");
    }
  });
});


  
  $('#kecamatan').prop('disabled', true);
  $('#kecamatan').attr('style', 'cursor:not-allowed');

  $('#desaKelurahan').prop('disabled', true);
  $('#desaKelurahan').attr('style', 'cursor:not-allowed');

  $('#kodePos').prop('disabled', true);
  $('#kodePos').attr('style', 'cursor:not-allowed');

  $('#kabupatenKota').on('change', function() {
    // alert( this.value );
          var form_data = new FormData();              
          form_data.append('kabupatenKota', this.value);
          jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>"+"Welcome/getKecamatan",
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            dataType: 'json',  // what to expect back from the PHP script, if anything
            beforeSend: function() {
              
            },
            success : function(e){
                if(e.items.length!=0){

                  $('#kecamatan option').remove();
                  $('<option value="">Pilih kecamatan</option>').appendTo('#kecamatan');

                  $('#desaKelurahan option').remove();
                  $('<option value="">Pilih desa/kelurahan</option>').appendTo('#desaKelurahan');

                  $('#kodePos').val('');

                  $('#kecamatan').prop('disabled', true);
                  $('#kecamatan').attr('style', 'cursor:not-allowed');

                  $('#desaKelurahan').prop('disabled', true);
                  $('#desaKelurahan').attr('style', 'cursor:not-allowed');

                  $('#kodePos').prop('disabled', true);
                  $('#kodePos').attr('style', 'cursor:not-allowed');


                  $('#kecamatan').prop('disabled', false);
                  $('#kecamatan').attr('style', 'cursor:default');

                  $.each(e.items,function(i,obj)
                  {
                   var div_data = "";
                   div_data="<option value='"+obj.value+"'>"+obj.text+"</option>";

                    $(div_data).appendTo('#kecamatan'); 
                  }); 
                }else{
                  
                  $('#kecamatan option').remove();
                  $('<option value="">Pilih kecamatan</option>').appendTo('#kecamatan');

                  $('#desaKelurahan option').remove();
                  $('<option value="">Pilih desa/kelurahan</option>').appendTo('#desaKelurahan');

                  $('#kodePos').val('');

                  $('#kecamatan').prop('disabled', true);
                  $('#kecamatan').attr('style', 'cursor:not-allowed');

                  $('#desaKelurahan').prop('disabled', true);
                  $('#desaKelurahan').attr('style', 'cursor:not-allowed');

                  $('#kodePos').prop('disabled', true);
                  $('#kodePos').attr('style', 'cursor:not-allowed');
                }
              }
              
          });
  });

  $('#kecamatan').on('change', function() {
          
          var form_data = new FormData();              
          form_data.append('kecamatan', this.value);
          jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>"+"Welcome/getDesaKelurahan",
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            dataType: 'json',  // what to expect back from the PHP script, if anything
            beforeSend: function() {
              
            },
            success : function(e){
                if(e.items.length!=0){



                   $('#desaKelurahan option').remove();
                  $('<option value="">Pilih kecamatan</option>').appendTo('#desaKelurahan');
                  
                  $('#kodePos').val('');

                  $('#desaKelurahan').prop('disabled', true);
                  $('#desaKelurahan').attr('style', 'cursor:not-allowed');

                  $('#kodePos').prop('disabled', true);
                  $('#kodePos').attr('style', 'cursor:not-allowed');

                  $('#desaKelurahan').prop('disabled', false);
                  $('#desaKelurahan').attr('style', 'cursor:default');

                  $.each(e.items,function(i,obj)
                  {
                   var div_data = "";
                   div_data="<option value='"+obj.value+"'>"+obj.text+"</option>";

                    $(div_data).appendTo('#desaKelurahan'); 
                  }); 
                }else{
                  
                  $('#desaKelurahan option').remove();
                  $('<option value="">Pilih kecamatan</option>').appendTo('#desaKelurahan');
                  
                  $('#kodePos').val('');

                  $('#desaKelurahan').prop('disabled', true);
                  $('#desaKelurahan').attr('style', 'cursor:not-allowed');

                  $('#kodePos').prop('disabled', true);
                  $('#kodePos').attr('style', 'cursor:not-allowed');
                }
              }
              
          });
  });

  $('#desaKelurahan').on('change', function() {
          var form_data = new FormData();              
          form_data.append('kodeWilayah', this.value);
          jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>"+"Welcome/getKodeDesa",
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            dataType: 'json',  // what to expect back from the PHP script, if anything
            beforeSend: function() {
              
            },
            success : function(e){
                if(e.resultnya.length!=0){
                  $('#kodePos').prop('disabled', false);
                  $('#kodePos').attr('style', 'cursor:default');

                  $('#kodePos').val(e.resultnya);
                }else{
                  $('#kodePos').val('');

                  $('#kodePos').prop('disabled', true);
                  $('#kodePos').attr('style', 'cursor:not-allowed');
                }
              }
              
          });
  });


  $('#kecamatanTugas').prop('disabled', true);
  $('#kecamatanTugas').attr('style', 'cursor:not-allowed');

  $('#sekolahTugas').prop('disabled', true);
  $('#sekolahTugas').attr('style', 'cursor:not-allowed');

  
  $('#kabupatenKotaTugas').on('change', function() {
    // alert( this.value );
          var form_data = new FormData();              
          form_data.append('kabupatenKota', this.value);
          jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>"+"Welcome/getKecamatanTugas",
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            dataType: 'json',  // what to expect back from the PHP script, if anything
            beforeSend: function() {
              
            },
            success : function(e){
                if(e.items.length!=0){

                  $('#kecamatanTugas option').remove();
                  $('<option value="">Pilih kecamatan</option>').appendTo('#kecamatanTugas');

                  $('#sekolahTugas option').remove();
                  $('<option value="">Pilih sekolah</option>').appendTo('#sekolahTugas');

                  $('#kecamatanTugas').prop('disabled', false);
                  $('#kecamatanTugas').attr('style', 'cursor:default');

                  $('#sekolahTugas').prop('disabled', true);
                  $('#sekolahTugas').attr('style', 'cursor:not-allowed');

                  $.each(e.items,function(i,obj)
                  {
                   var div_data = "";
                   div_data="<option value='"+obj.value+"'>"+obj.text+"</option>";

                    $(div_data).appendTo('#kecamatanTugas'); 
                  }); 
                }else{
                  
                  $('#kecamatanTugas option').remove();
                  $('<option value="">Pilih sekolah</option>').appendTo('#kecamatanTugas');

                  $('#sekolahTugas option').remove();
                  $('<option value="">Pilih sekolah</option>').appendTo('#sekolahTugas');

                  $('#kecamatanTugas').prop('disabled', true);
                  $('#kecamatanTugas').attr('style', 'cursor:not-allowed');

                  $('#sekolahTugas').prop('disabled', true);
                  $('#sekolahTugas').attr('style', 'cursor:not-allowed');

                }
              }
              
          });
  });

  $('#kecamatanTugas').on('change', function() {
          
          var form_data = new FormData();              
          form_data.append('kecamatan', this.value);
          form_data.append('kabupaten', $('#kabupatenKotaTugas').val());
          jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>"+"Welcome/getDataSekolah",
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            dataType: 'json',  // what to expect back from the PHP script, if anything
            beforeSend: function() {
              
            },
            success : function(e){
                if(e.items.length!=0){
                   $('#sekolahTugas option').remove();
                   $('<option value="">Pilih sekolah</option>').appendTo('#sekolahTugas');
                
                  $('#sekolahTugas').prop('disabled', false);
                  $('#sekolahTugas').attr('style', 'cursor:default');

                  $.each(e.items,function(i,obj)
                  {
                   var div_data = "";
                   div_data="<option value='"+obj.value+"'>"+obj.text+"</option>";

                    $(div_data).appendTo('#sekolahTugas'); 
                  }); 
                }else{
                  
                  $('#sekolahTugas option').remove();
                  $('<option value="">Pilih kecamatan</option>').appendTo('#sekolahTugas');
               

                  $('#sekolahTugas').prop('disabled', true);
                  $('#sekolahTugas').attr('style', 'cursor:not-allowed');

                }
              }
              
          });
  });

</script>

</body>