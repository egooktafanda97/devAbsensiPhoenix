                
                
                <div class="pollSlider">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-12">
                            <p style="font-size:1.12em;margin-bottom:0px; padding-bottom:5px; margin-top:30px;" id="saldoKirimKe"></p>
                            <p style="margin-bottom:0px; padding-bottom:10px; margin-top:0px; color:#696969;">1. Pilih metode pengiriman saldo</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-12 ">
                            <div class="card methodex" onclick="methodeSelected('BNI')" style="padding:0px; border-radius:.67em;">
                                <div class="card-body" >
                                    <img src="https://iconape.com/wp-content/files/qy/184226/svg/184226.svg" width="80"/>
                                    <!--<hr style="padding:0px; margin:0px; margin-top:8px; margin-bottom:5px;"/>-->
                                    
                                    <!--<p style="padding:0px; margin:0px; font-size:.8em;">No. Rekening</p>-->
                                    <!--<p style="padding:0px; margin:0px; font-weight:bold; color:#000; margin-top:-7px;" id="val1">081270795923</p>-->
                                    <!--<p style="padding:0px; margin:0px; font-size:.9em;margin-top:-10px;">a/n iPaymu Ahmad Dahlan</p>-->
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <div class="col-md-12 col-lg-12 col-12 ">
                            <div class="card methodex" onclick="methodeSelected('OVO')" style="padding:0px; border-radius:.67em;">
                                <div class="card-body" >
                                    <img src="https://image.cermati.com/c_fit,fl_progressive,h_240,q_80,w_360/pm2gnkl5edgago9h4lho.jpg" width="80"/>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <p style="margin-bottom:0px; padding-bottom:0px; margin-top:15px;color:#696969;">2. Masukkan nominal saldo</p>
                    <div class="row" style="margin-top:10px;">
                        <div class="col-md-12 col-lg-12 col-12 ">
                            <div class="card " style="border:1px dashed #e3e6f0;padding:0px; border-radius:.67em;">
                                <div class="card-body" >
                                    <input type="text" class="form-control" placeholder="Rp0" id="saldo"/>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row" style="margin-top:20px;">
                        <div class="col-md-12 col-lg-12 col-12 text-center">
                            <button type="button" class="btn btn-success" id="btnSubmitSaldoAdd">Tampilkan Tagihan</button>
                        </div>
                    </div>
                    
                </div>
                <div id="pollSlider-button"><i class="fa fa-times" style="width:40px;text-align:center;padding:11px;margin-bottom:-15px; height:40px; margin:auto; display:block; border-radius:1000px; background:red; color:#fff; box-shadow:0px 5px 5px rgba(0,0,0,.11)"></i></div>
                <!-- Begin Page Content -->
                <div class="container-fluid" style="padding-top:7.5em;">
                    
                    <!-- Page Heading -->
                    <div class="col-12 mb-4 " >
                    <div class="row text-white">
                        <div class="col-2 text-center">
                            <i class="fa fa-bell" style="font-size:1.7em;"></i>
                        </div>
                        <div class="col-10">
                            <h1 class="h4 mb-0 ">NOTIFIKASI</h1>
                            <!--<h1 class="h6 mb-0 ">Berikut daftar tagihan yang Anda miliki.</h1>        -->
                        </div>
                    </div>
                    </div>
                    
                    
                    
                    <div class="row" style="">
                        
                        <div class="col-12">
                            <!-- Content Row -->
                            <div class="row">
        
                                    <div id="putContentHere" style="width:100%;">
                                    
                                </div>
                            </div>
                            <!-- Content Row -->
        
                                <!-- Content Row -->
                        
                        </div>
                        
                    
                    </div>

                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white mb-5">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Ponpes KH. Ahmad Dahlan - <?=date('Y');?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>-->

    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/popper.min.js"></script>
     <script type='text/javascript' src='https://code.jquery.com/jquery-1.8.3.js'></script>
    <!-- tambahan ego -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
    <script src="https://www.jqueryscript.net/demo/Bootstrap-4-Dropdown-Select-Plugin-jQuery/dist/js/bootstrap-select.js"></script>
    
    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url();?>oncard_template/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url();?>oncard_template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url();?>oncard_template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url();?>oncard_template/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url();?>oncard_template/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <!--<script src="<?=base_url();?>oncard_template/js/demo/chart-area-demo.js"></script>-->
    <!--<script src="<?=base_url();?>oncard_template/js/demo/chart-pie-demo.js"></script>-->
    
    <script src="https://momentjs.com/downloads/moment.js"></script>
    <script src="https://momentjs.com/downloads/moment-with-locales.js"></script>
    
    <!-- ------------ -->

    <script type="text/javascript"> 
        
        moment.locale('id');
        
        $("#topBg").attr("src", 'https://image.freepik.com/free-vector/minimal-geometric-stripe-shape-background_1409-1014.jpg');
        
        function launch_toast() {
            var x = document.getElementById("toast")
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
        }
        
        $(document).ready(function()
        {
            var slider_width = $('.pollSlider').height();//get width automaticly
          
          $('#pollSlider-button').click(function() {
            if($(this).css("margin-bottom") == slider_width+"px" && !$(this).is(':animated'))
            {
                $('.pollSlider,#pollSlider-button').animate({"margin-bottom": '-='+slider_width});
                $('#pollSlider-button').css('display','none');
            }
            else
            {
                if(!$(this).is(':animated'))//perevent double click to double margin
                {
                    $('.pollSlider,#pollSlider-button').animate({"margin-bottom": '+='+slider_width});
                    $('#pollSlider-button').css('background','transparent');
                }
            }
        
        
          });
         });     
        
        let methodx = '';
        let idx = '';
        let nominalx = '';
        let namax='';
        function showAddSaldo(str,namaSiswa){
            $('#saldoKirimKe').html("Penambahan saldo <b>"+namaSiswa+"</b>");
            $('#pollSlider-button').trigger('click');
            $('#pollSlider-button').css('display','block');
            
            idx = str;
            namax = namaSiswa;
            
        }
        
        function methodeSelected(str){
            $('#img').html('<i class="fa fa-check"></i>');
            $('#desc').html('Metode terpilih : '+str+'.');
            methodx = str;
            launch_toast();
        }
    
        $('#btnSubmitSaldoAdd').click(function() {
            nominalx = $('#saldo').val();
            
            // console.log(nominalx);
            // console.log(idx);
            // console.log(methodx);
            
            if(methodx=='' || idx=='' || nominalx==''){
                $('#img').html('<i class="fa fa-times"></i>');
                $('#desc').html('Formulir belum lengkap');
                launch_toast();
            }else {
                
                
                
                Swal.fire({
                  position: 'top',
                  icon: 'info',
                  title: '<h5>Konfirmasi</h5>',
                  html: '<h6>Cek kebenaran data berikut ini : </h6><table class="table table-bordered text-left" style="width:100%;font-size:.8em;color:#fff;"><tr><td width="100">Nama</td><td width="500">'+namax+'</td></tr><tr><td width="100">Metode</td><td width="500">'+methodx+'</td></tr><tr><td width="100">Nominal</td><td width="500">Rp '+nominalx+'</td></tr></table>',
                  showConfirmButton: true,
                  showDenyButton: true,
                  showCancelButton: false,
                  confirmButtonText: 'Batal',
                  denyButtonText: `Lihat Tagihan`,
                  
                }).then((result)=>{
                  if (result.isConfirmed) {
                    
                  } else if (result.isDenied) {
                      
                  $(".loading").fadeIn();
                  
                  $('#pollSlider-button').trigger('click');
                    
                  nominalx = nominalx.replace(/\./g,'');
                //   console.log(nominalx);
                  
                  var form_data = new FormData();    
                  form_data.append('method', methodx.toLowerCase());
                  form_data.append('tujuan', idx);
                  form_data.append('email', '');
                  form_data.append('priece', parseInt(nominalx));
                  
                  const save = async ()=>{
                      const posts = await axios.post('<?=api_url();?>payment/transfer-va',form_data, {
                          headers: {'Authorization': 'Bearer '+ sessionStorage.getItem('_token')}
                      }).catch((err)=>{
                          
                          $(".loading").fadeOut();
                          Swal.fire({
                              position: 'center',
                              icon: 'error',
                              title: 'Proses Gagal',
                              text: 'Terjadi kesalahan dalam memproses request Anda.',
                              showConfirmButton: true,
                              
                            });
                      });
                      
                      if(posts.status==200){
                          
                          if(posts.data.status==true){
                            $(".loading").fadeOut();
                            
                            Swal.fire({
                              position: 'center',
                              icon: 'info',
                              title: '<h5>Kirim Sekarang</h5>',
                              html: '<h6>Pastikan Anda mengirim ke alamat berikut ini : </h6><table class="table table-bordered text-left" style="width:100%;font-size:.8em;color:#fff;"><tr><td width="100">VA</td><td width="500">'+posts.data.response.request.va+'</td></tr><tr><td width="100">Nama</td><td width="500">'+posts.data.response.respon_pay.response.displayName+'</td></tr><tr><td width="100">Metode</td><td width="500">'+methodx+'</td></tr><tr><td width="100">Tagihan</td><td width="500">Rp '+formatRupiah(posts.data.response.respon_pay.data_request.price)+'</td></tr><tr><td width="100">Expired</td><td width="500">'+moment(posts.data.response.request.expired_at).format('Do MMMM YYYY, H:mm:ss')+' WIB'+'</td></tr></table>',
                              showConfirmButton: true,
                              showDenyButton: false,
                              showCancelButton: false,
                              confirmButtonText: 'Tutup',
                            //   denyButtonText: `Lihat Tagihan`
                              
                            }).then((result)=>{
                              if (result.isConfirmed) {
                                
                              } else if (result.isDenied) {
                                  
                              }
                            });
                            
                            
                            $('#img').html('<i class="fa fa-check"></i>');
                            $('#desc').html('Tagihan berhasil dibuat!');
                            launch_toast();
                            
                            
                            
                            // methodx = '';
                            // idx = '';
                            // nominalx = '';
                            // namax='';

                          }else {
                              $(".loading").fadeOut();
                              
                              Swal.fire({
                                  position: 'center',
                                  icon: 'error',
                                  title: 'Gagal Proses',
                                  text: 'Data tidak dapat diproses dalam saat ini, ulangi dilain waktu.',
                                  showConfirmButton: true,
                                  
                              });
                              
                          }
                          
                      }else {
                          $(".loading").fadeOut();
                          
                      }
                  }
                  
                  save();
                  }
                });
                
                
                
            }
        });
          
          
        function logoutBtn() {
            $(".loading").fadeIn();
            sessionStorage.removeItem('_token');
            window.location.href='<?=base_url("Login/logoutUser");?>';
        }
        
        var navItems = document.querySelectorAll(".bottom-nav-item");
        var URL=window.location.pathname.split("/").pop();
        
        $(function(){
            
            $('.bottom-nav-item').each(function(){
                var $this = $(this);
                var valLink = $this.text().replace(/\s/g,'').toLowerCase();
                
                
                
                // if the current path is like this link, make it active
                if(valLink==URL){
                    
                    $this.addClass('active');
                    
                }else {
                    $this.removeClass('active');
                }
            })
        });
        navItems.forEach(function(e, i) {
            
          e.addEventListener("click", function(e) {
            $(".loading").fadeIn();
            
            
            navItems.forEach(function(e2, i2) {
                
              e2.classList.remove("active");
            });
            
            this.classList.add("active");
            
            var $this = $(this);
            var valLink = $this.text().replace(/\s/g,'').toLowerCase();
            
            if(valLink=='setting'){
                    locked();
                    $(".loading").fadeOut();
                    return false;
                }
            else {
            window.location.href="<?=base_url();?>/Orangtua/"+valLink;
            }
            
            
            
            
          });
        });
        function locked(){
             Swal.fire({
                  position: 'center',
                  icon: 'info',
                  title: 'Fitur Terkunci',
                  text: 'Fitur ini belum dapat digunakan karena sedang dalam tahap pengembangan.',
                  showConfirmButton: true,
                  
                });
         };
        
        $(".loading").fadeOut();
        loadPesertaDidik();
        function loadPesertaDidik(){
            
            let htmlxxx = '';
            
            for(let i=0; i<3;i++){
                htmlxxx+=`
                    
                    <div class="col-12 mb-4">
                        <div class="card shadow h-100 py-1" style="border:none;">
                            <div class="card-body">
                               
                                
                                <div class="row ">
                                   
                                    <div class="col-12">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <div class="o-vertical-spacing">
                                              <span class="skeleton-box" style="width:60%; height:10px;"></span>
                                            </div>
                                            <div class="o-vertical-spacing">
                                              <span class="skeleton-box" style="width:100%; height:20px;"></span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                
                `;
            }
            
            $('#putContentHere').html(htmlxxx);
            
            const save2 = async ()=>{
                      const posts2 = await axios.get('<?=api_url();?>notification/get', {
                          headers: {'Authorization': 'Bearer '+ sessionStorage.getItem('_token')}
                      }).catch((err)=>{
                          
                          $(".loading").fadeOut();
                          Swal.fire({
                              position: 'center',
                              icon: 'error',
                              title: 'Proses Gagal',
                              text: 'Terjadi kesalahan dalam memproses request Anda.',
                              showConfirmButton: true,
                              
                            });
                      });
                      
                      
                      
                      if(posts2.status==200){
                          
                            $(".loading").fadeOut();
                            
                            let sintaks = '';
                            
                            posts2.data.map((mapping2,i2)=>{
                                    
                                    let sts = '';
                                    let ststext = '';
                                    
                                    if(mapping2.status=='not_open'){
                                            sts =  'btn-danger';
                                            ststext = 'BARU';
                                        
                                    }else {
                                        sts =  'btn-dark';
                                        ststext = 'DIBACA';
                                    }
                                
                                    sintaks +=`
                                    <div class="col-12 mb-4">
                                        <div class="card shadow h-100 py-1" style="border:none;" onclick="showDetailInvoice('${mapping2.id_notif}','${ststext}')">
                                            <div class="card-body">
                                                <div class="row ">
                                                    
                                                    <div class="col-12">
                                                    <font class="${sts}" style="padding:3px; padding-left:12px; padding-right:12px;border-radius:1000px;float:right; font-size:.6em; ">${ststext}</font>
                                                        <div class="text-xs font-weight-bold mb" style="line-height:1.51em!important;">
                                                            <font style="font-size:1.5em; font-weight:bold;">${mapping2.message}</font>
                                                            <font class="text-dark" style="font-size:1em; font-weight:normal;display:block;">${moment(mapping2.created_at).format('Do MMMM YYYY | H:mm:ss')+' WIB'}</font>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                `;
                                
                            });
                            $('#putContentHere').html(sintaks);
                            
                  }else {
                      $(".loading").fadeOut();
                      
                  }
              }
              
              save2();
            
        }
        
        function showDetailInvoice(check,status){
            $(".loading").fadeIn();
            
                const save3 = async (check)=>{
                  const posts3 = await axios.get('<?=api_url();?>notification/update-status/'+check, {
                      headers: {'Authorization': 'Bearer '+ sessionStorage.getItem('_token')}
                  }).catch((err)=>{
                      
                      $(".loading").fadeOut();
                      Swal.fire({
                          position: 'center',
                          icon: 'error',
                          title: 'Proses Gagal',
                          text: 'Terjadi kesalahan dalam memproses request Anda.',
                          showConfirmButton: true,
                          
                        });
                  });
               };
               
               save3(check);
               
               loadPesertaDidik();
            
                const save = async (check)=>{
                  const posts = await axios.get('<?=api_url();?>notification/getbyid/'+check, {
                      headers: {'Authorization': 'Bearer '+ sessionStorage.getItem('_token')}
                  }).catch((err)=>{
                      
                      $(".loading").fadeOut();
                      Swal.fire({
                          position: 'center',
                          icon: 'error',
                          title: 'Proses Gagal',
                          text: 'Terjadi kesalahan dalam memproses request Anda.',
                          showConfirmButton: true,
                          
                        });
                  });
                  
                  if(posts.status==200){
                      
                      
                       
                      
                      
                      $(".loading").fadeOut();
                      
                        let stloader = '';
                        
                        if(status=='BARU'){
                            stloader = 'success';
                        }else if(status=='DIBACA'){
                            stloader = 'info';
                        }else {
                            stloader = 'error';
                        }
                       
                         Swal.fire({
                          position: 'center',
                          icon: stloader,
                          title: '<h5>Notifikasi</h5>',
                          html: '<table class="table table-bordered text-left" style="width:100%;font-size:.8em;color:#fff;"><tr><td width="100">Pesan</td><td width="500">'+posts.data.message+'</td></tr><tr><td width="100">Waktu</td><td width="500">'+moment(posts.data.created_at).format('Do MMMM YYYY | H:mm:ss')+' WIB'+'</td></tr><tr><td width="100">Status</td><td width="500">'+status+'</td></tr></table>',
                          showConfirmButton: true,
                          showDenyButton: false,
                          showCancelButton: false,
                          confirmButtonText: 'Tutup',
                        //   denyButtonText: `Lihat Tagihan`
                          
                        }).then((result)=>{
                          if (result.isConfirmed) {
                            
                          } else if (result.isDenied) {
                              
                          }
                        });
                    
                      
                  }else {
                      $(".loading").fadeOut();
                      
                      
                      
                      
                  }
              }
              save(check);
            
            
           
        }
        
        let ch = 0;
        function showMoreToShow(str){
            
            if(ch==0){
                $('.moretoshow'+str).attr('style','height:200px; overflow:visible scroll;margin-top:20px; max-height:400px;');
                
                loadRiwayat(str);
                
                ch=1;
                
            }else {
                $('.moretoshow'+str).attr('style','height:0px; overflow:hidden;margin-top:0px;');
                ch=0;
            }
            
        }
        
        
        function loadRiwayat(check){
            $('.moretoshow'+check).html('<img src="https://photoklik.xyz/sipintar//assets/loadingdesa.gif?%3E" style="width:70px; height:70px; display:block;margin:auto; margin-top:50px; margin-bottom:50px;">');
              const save = async (check)=>{
              const posts = await axios.get('<?=api_url();?>siswa/get-siswa-in-relation/'+check, {
                  headers: {'Authorization': 'Bearer '+ sessionStorage.getItem('_token')}
              }).catch((err)=>{
                  
                  $(".loading").fadeOut();
                  Swal.fire({
                      position: 'center',
                      icon: 'error',
                      title: 'Proses Gagal',
                      text: 'Terjadi kesalahan dalam memproses request Anda.',
                      showConfirmButton: true,
                      
                    });
              });
              
              if(posts.status==200){
                  $(".loading").fadeOut();
                  
                if(posts.data.response.riwayat_transaksi.length>0){
                    let sintaks='';
                    let no = 1;
                    posts.data.response.riwayat_transaksi.map((mapping,i)=>{
                        sintaks+=`
                         <div class="col-md-1 col-1 mt">
                            <small>${no++}</small>
                        </div>
                        <div class="col-md-11 col-11 mt-2">
                        <small style="display:block; font-size:.6em;">${moment(mapping.created_at).format('Do MMMM YYYY | H:mm:ss')+' WIB'}</small>
                        <font style="font-size:1em; display:block; width:100%;">${mapping.pesan}</font>
                        <font style="font-size:1em;  display:block;font-weight:bold;">${formatRupiah(mapping.jumlah_aksi,'Rp')}</font>
                        </div>
                        `;
                    });
                    
                    $('.moretoshow'+check).html(sintaks);
                }
                  
              }else {
                  $(".loading").fadeOut();
                  
                  
                  
                  
              }
          }
          
          
          save(check);
            
        }
        function isEmpty(obj) {
            if (obj == null) return true;
            if (obj == undefined) return true;
            if (obj == '') return true;
            if (obj.length > 0) return false;
            if (obj.length === 0) return true;
            if (typeof obj !== "object") return true;
            for (var key in obj) {
                if (hasOwnProperty.call(obj, key)) return false;
            }
            return true;
        }
        
        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix){
        	var number_string = angka.replace(/[^,\d]/g, '').toString(),
        	split   		= number_string.split(','),
        	sisa     		= split[0].length % 3,
        	rupiah     		= split[0].substr(0, sisa),
        	ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
        
        	// tambahkan titik jika yang di input sudah menjadi angka ribuan
        	if(ribuan){
        		separator = sisa ? '.' : '';
        		rupiah += separator + ribuan.join('.');
        	}
        
        	rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        	return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
        function capitalizeWord(strget){
            var str = strget;
            str = str.toLowerCase().replace(/\b[a-z]/g, function(letter) {
                return letter.toUpperCase();
            });
            
            return str;
        }
        
        $('#saldo').keyup(function(event) {
        
          // skip for arrow keys
          if(event.which >= 37 && event.which <= 40) return;
        
          // format number
          $(this).val(function(index, value) {
            return value
            .replace(/\D/g, "")
            .replace(/\B(?=(\d{3})+(?!\d))/g, ".")
            ;
          });
        });
        
        $("#errmsgs").fadeOut();
    </script>

</body>
<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:25 GMT -->

</html>