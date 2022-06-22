                
                
                <div class="pollSlider">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-12">
                            <p style="font-size:1.12em;margin-bottom:0px; padding-bottom:5px; margin-top:30px;" id="saldoKirimKe"></p>
                            <p style="margin-bottom:0px; padding-bottom:10px; margin-top:0px; color:#696969;">1. Pilih metode pengiriman saldo</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-6 mb-3">
                            <div class="card methodex" onclick="methodeSelected('BNI')" style="padding:0px; border-radius:.67em;">
                                <div class="card-body text-center" >
                                    <img src="https://iconape.com/wp-content/files/qy/184226/svg/184226.svg" width="80"/>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-6 col-lg-6 col-6 mb-3">
                            <div class="card methodex" onclick="methodeSelected('Mandiri')" style="padding:0px; border-radius:.67em;">
                                <div class="card-body text-center" >
                                    <img src="https://cdn.worldvectorlogo.com/logos/bank-mandiri.svg" width="80"/>
                                    
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-6 col-lg-6 col-6 mb-3">
                            <div class="card methodex" onclick="methodeSelected('BCA')" style="padding:0px; border-radius:.67em;">
                                <div class="card-body text-center" >
                                    <img src="https://cdn.worldvectorlogo.com/logos/bca-bank-central-asia.svg" width="80"/>
                                    
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
                            <button type="button" class="btn btn-success" id="btnSubmitSaldoAdd">Bayar Sekarang</button>
                        </div>
                    </div>
                    
                </div>
                <div id="pollSlider-button"><i class="fa fa-times" style="width:40px;text-align:center;padding:11px;margin-bottom:-15px; height:40px; margin:auto; display:block; border-radius:1000px; background:red; color:#fff; box-shadow:0px 5px 5px rgba(0,0,0,.11)"></i></div>
                <!-- Begin Page Content -->
                <div class="container-fluid" style="padding-top:6.5em;">
                    
                    <!-- Page Heading -->
                    
                    
                    
                    
                    <div class="row" style="">
                        
                        <div class="col-12">
                            <!-- Content Row -->
                            <div class="row">
        
                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-12 mb-4 ">
                                    <div class="row text-white">
                                        <div class="col-2 text-center">
                                            <i class="fa fa-home" style="font-size:2.7em;"></i>
                                        </div>
                                        <div class="col-10">
                                            <h1 class="h4 mb-0 ">Selamat datang, <?=$namaUser;?></h1>
                                            <h1 class="h6 mb-0 ">Anda dapat memonitoring kegiatan anak Anda melalui portal ini.</h1>        
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-12 mb-4 text-right">
                                    <div class="row text-right">
                                        <div class="col-2 text-center text-dark menuawal" style="padding:0px; border-radius:.67em;background:#fff; padding:10px; box-shadow:0px 5px 10px rgba(0,0,0,.11);margin:4%;">
                                            <i class="fa fa-home" style="font-size:2em;"></i>
                                            <h1 class="h6  mb-0 " style="font-size:.7em;">Anak</h1>
                                            
                                        </div>
                                        
                                        <div class="col-2 text-center text-dark menuawal" style="padding:0px; border-radius:.67em;background:#fff; padding:10px; box-shadow:0px 5px 10px rgba(0,0,0,.11);margin:4%;">
                                            <div id="bellNotif" class="hideIt" style="min-width:10px; min-height:10px; border-radius:1000px;font-size:.66em; line-height:1em; color:#fff;padding:1px; padding-left:3px; padding-right:3px; background:red; border:2px solid #fff;position:absolute; right:0px; top:10px; margin-right:15%;"></div>
                                            <i class="fa fa-bell" style="font-size:2em;"></i>
                                            <h1 class="h6 mb-0 " style="font-size:.7em;">Notifikasi</h1>
                                            
                                        </div>
                                        
                                        <div class="col-2 text-center text-dark menuawal" style="padding:0px; border-radius:.67em;background:#fff; padding:10px; box-shadow:0px 5px 10px rgba(0,0,0,.11);margin:4%;">
                                            <div id="bellTagihan" class="hideIt" style="min-width:10px; min-height:10px; border-radius:1000px;font-size:.66em; line-height:1em; color:#fff;padding:1px; padding-left:3px; padding-right:3px; background:red; border:2px solid #fff;position:absolute; right:0px; top:10px; margin-right:15%;"></div>
                                            <i class="fa fa-credit-card" style="font-size:2em;"></i>
                                            <h1 class="h6 mb-0 " style="font-size:.7em;">Tagihan</h1>
                                            
                                        </div>
                                        
                                        <div class="col-2 text-center text-dark menuawal" style="padding:0px; border-radius:.67em;background:#fff; padding:10px; box-shadow:0px 5px 10px rgba(0,0,0,.11);margin:4%;">
                                            <i class="fa fa-cog" style="font-size:2em;"></i>
                                            <h1 class="h6 mb-0 " style="font-size:.7em;">Setting</h1>
                                            
                                        </div>

                                    </div>
                                    
                                </div>
                                
                                
                                <div id="putContentHere" style="width:100%;">
                                    
                                </div>
                            </div>
                            <!-- Content Row -->
        
                                <!-- Content Row -->
                        
                        </div>
                        
                        <!--<div class="col-12">-->
                        <!--    <div class="card shadow mb-4">-->
                                <!-- Card Header - Dropdown -->
                        <!--        <div-->
                        <!--            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">-->
                        <!--            <h6 class="m-0 font-weight-bold text-primary">Aktifitas Transaksi Realtime<small></small></h6>-->
                                    
                        <!--        </div>-->
                        <!--        <div class="row py-3 px-3" style="padding-bottom:0px;">-->
                        <!--            <div class="col-md-4 col-lg-4 col-4" style="font-size:.7em;">-->
                        <!--                <font class="border-left-success px-2">Penambahan saldo</font>-->
                        <!--            </div>-->
                        <!--            <div class="col-md-4 col-lg-4 col-4" style="font-size:.7em;">-->
                        <!--                <font class="border-left-danger px-2">Pengurangan</font>-->
                        <!--            </div>-->
                        <!--            <div class="col-md-4 col-lg-4 col-4" style="font-size:.7em;">-->
                        <!--                <font class="border-left-primary px-2">Penetapan Saldo Awal</font>-->
                        <!--            </div>-->
                        <!--            <div class="col-md-4 col-lg-4 col-4" style="font-size:.7em;">-->
                        <!--                <font class="border-left-info px-2">Tambah</font>-->
                        <!--            </div>-->
                        <!--            <div class="col-md-4 col-lg-4 col-4" style="font-size:.7em;">-->
                        <!--                <font class="border-left-warning px-2">Pencairan dana saldo</font>-->
                        <!--            </div>-->
                        <!--            <div class="col-md-4 col-lg-4 col-4" style="font-size:.7em;">-->
                        <!--                <font class="border-left-light px-2">Lainnya</font>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <hr style="margin-top:0px;margin-bottom:0px;"/>-->
                                <!-- Card Body -->
                        <!--        <div class="card-body " style="max-height:70vh;overflow-y:auto;">-->
                                    
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
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
        let totalTagihan = 0;
        let inCharge = 0;
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
            nominalx = nominalx.replace(/\./g,'');
            
            if(methodx=='BNI'){
                inCharge = 3500;    
            }else if(methodx=='BCA'){
                inCharge = 4000;
            }else if(methodx=='Mandiri'){
                inCharge = 3500;
            }
            
            totalTagihan = parseInt(nominalx)+inCharge;  
            
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
                  html: '<h6>Cek kebenaran data berikut ini : </h6><table class="table table-bordered text-left" style="width:100%;font-size:.8em;color:#fff;"><tr><td width="100">Nama</td><td width="500">'+namax+'</td></tr><tr><td width="100">Metode</td><td width="500">'+methodx+'</td></tr><tr><td width="100">Saldo</td><td width="500">Rp '+nominalx+'</td></tr></table>',
                  showConfirmButton: true,
                  showDenyButton: true,
                  showCancelButton: false,
                  confirmButtonText: 'Batal',
                  denyButtonText: `Buat Tagihan`,
                  
                }).then((result)=>{
                  if (result.isConfirmed) {
                    
                  } else if (result.isDenied) {
                      
                  $(".loading").fadeIn();
                  
                  $('#pollSlider-button').trigger('click');
                    
                  nominalx = nominalx.replace(/\./g,'');
                //   console.log(nominalx);
                  
                  var form_data = new FormData();    
                  form_data.append('method', methodx);
                  form_data.append('tujuan', idx);
                  form_data.append('email', '');
                  form_data.append('priece', parseInt(totalTagihan));
                  
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
                            
                            // console.log(posts.data.response.request.va);
                            // console.log(posts.data.response.respon_pay);
                            // console.log(posts.data.response.response_pay.data_request.price);
                            
                            // return false;
                            
                            Swal.fire({
                              position: 'top',
                              icon: 'info',
                              title: '<h5>Kirim Sekarang</h5>',
                              html: '<h6>Pastikan Anda mengirim ke alamat berikut ini : </h6><table class="table table-bordered text-left" style="width:100%;font-size:.8em;color:#fff;"><tr><td width="100">VA</td><td width="500">'+posts.data.response.request.va+'</td></tr><tr><td width="100">Nama</td><td width="500">'+posts.data.response.request.display_name+'</td></tr><tr><td width="100">Metode</td><td width="500">'+methodx+'</td></tr><tr><td width="100">Fee</td><td width="500">Rp '+formatRupiah(inCharge.toString())+'</td></tr><tr class="text-danger"><td width="100">Tagihan</td><td width="500">Rp '+formatRupiah(totalTagihan.toString())+'</td></tr><tr><td width="100">Expired</td><td width="500">'+moment(posts.data.response.request.expired_at).format('Do MMMM YYYY, H:mm:ss')+' WIB'+'</td></tr></table>',
                              showConfirmButton: true,
                              showDenyButton: false,
                              showCancelButton: false,
                              confirmButtonText: 'Tutup',
                            //   denyButtonText: `Lihat Tagihan`
                              
                            }).then((result)=>{
                              if (result.isConfirmed) {
                                countTagihan();
                                $('#img').html('<i class="fa fa-check"></i>');
                                $('#desc').html('Tagihan berhasil dibuat!');
                                launch_toast();
                              } else if (result.isDenied) {
                                  
                              }
                            });
                            
                            
                            
                            
                            
                            
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
        var menuAwal = document.querySelectorAll(".menuawal");
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
        
        menuAwal.forEach(function(e, i) {
            
          e.addEventListener("click", function(e) {
            $(".loading").fadeIn();
            
            var $this = $(this);
            var valLink = $this.text().replace(/\s/g,'').toLowerCase();
            
            valLink = valLink.match(/[a-zA-Z]+/g);
            
            if(valLink=='tagihan'){
                valLink = 'pembayaran';
            }
            window.location.href="<?=base_url();?>/Orangtua/"+valLink;
            
            
            
            
          });
        });
        
        $(".loading").fadeOut();
        
        countTagihan();
        function countTagihan(){
            
            const save2 = async ()=>{
                      const posts2 = await axios.get('<?=api_url();?>payment/get-by-user/', {
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
                             let countHsl = 0;
                            posts2.data.pending.map((mapping2,i2)=>{
                               
                                    if(mapping2.status_transaksi=='PENDING'){
                                            
                                            let expx = mapping2.expired_at;
                                            let today = new Date();
                                            expx = new Date(expx);
                                            
                                            if(expx.getTime() > today){
                                                countHsl+= 1;
                                            }
                                            
                                        
                                    }
                                
                            });
                            
                            if(countHsl > 0){
                                $('#bellTagihan').attr('class','showIt');
                                $('#bellTagihan').html(countHsl);
                            }
                            
                  }else {
                      $(".loading").fadeOut();
                      
                  }
              }
              
              save2();
            
        }
        
        countNotifikasi();
        function countNotifikasi(){
            
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
                             let countHsl = 0;
                            posts2.data.map((mapping2,i2)=>{
                               
                                    if(mapping2.status=='not_open'){
                                            countHsl+= 1;
                                        
                                    }
                                
                            });
                            
                            if(countHsl > 0){
                                $('#bellNotif').attr('class','showIt');
                                $('#bellNotif').html(countHsl);
                            }
                            
                  }else {
                      $(".loading").fadeOut();
                      
                  }
              }
              
              save2();
            
        }
        
        loadPesertaDidik();
        function loadPesertaDidik(){
            
            let htmlxxx = '';
            
            for(let i=0; i<3;i++){
                htmlxxx+=`
                    
                    <div class="col-12 mb-4">
                        <div class="card shadow h-100 py-1" style="border:none;">
                            <div class="card-body">
                               
                                
                                <div class="row ">
                                    <div class="col-4">
                                        <div class="o-vertical-spacing">
                                          <span class="skeleton-box" style="width:100%; height:100px;"></span>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <div class="o-vertical-spacing">
                                              <span class="skeleton-box" style="width:60%; height:20px;"></span>
                                            </div>
                                            <div class="o-vertical-spacing">
                                              <span class="skeleton-box" style="width:100%; height:20px;"></span>
                                            </div>
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            
                                                <div class="o-vertical-spacing">
                                                  <span class="skeleton-box" style="width:100%; height:20px;"></span>
                                                </div>
                                                <div class="o-vertical-spacing">
                                                  <span class="skeleton-box" style="width:30%; height:20px;"></span>
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
            
            const save = async ()=>{
              const posts = await axios.get('<?=api_url();?>orangtua/get-by-id/<?=$id;?>', {
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
              
              let sintaks = '';
              
              
              if(posts.status==200){
                  
                  
                let datasiswa = posts.data.siswa;
                
                let parseDataSiswa = JSON.parse(datasiswa);
                
                // console.log(parseDataSiswa);
                
                parseDataSiswa.map((mapping,i)=>{
                    
                    // console.log(mapping.id_siswa);
                    
                    const save2 = async ()=>{
                              const posts2 = await axios.get('<?=api_url();?>siswa/get', {
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
                                    
                                    posts2.data.map((mapping2,i2)=>{
                                        
                                        // console.log(mapping2.id_user);
                                        
                                        if(mapping.id_siswa==mapping2.id_user){
                                            sintaks +=`
                                            <div class="col-12 mb-4">
                                                <div class="card shadow h-100 py-1" style="border:none;">
                                                    <div class="card-body">
                                                        <div class="row ">
                                                            <div class="col-4">
                                                                <img src="<?=base_url();?>engine/Assets/img/user/${mapping2.foto}" style="width:100%; height:100px; object-fit:cover;"/>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb">
                                                                    <font style="font-size:1.5em; font-weight:bold;">${mapping2.nama_siswa}</font>
                                                                    <font style="font-size:1em; font-weight:normal;display:block;">${mapping2.kelas}</font>
                                                                </div>
                                                                    
                                                                <font class="" style="font-size:.6em; font-weight:normal;display:block;">Saldo</font>
                                                                <font style="font-size:.88em; font-weight:bold;">${"Rp "+formatRupiah(mapping2.saldo.toString())}</font>
                                                                <font class="" style="font-size:.6em; font-weight:normal;display:block;">Limit belanja harian</font>
                                                                <font style="font-size:.88em; font-weight:bold;">Rp15.000</font>
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <div class="row mt-3">
                                                            <div class="col-sm-6 col-xs-6 col-4">
                                                                <button type="button" class="btn btn-sm btn-success" style="border-radius:1000px;width:100%;" onclick="showAddSaldo('${mapping2.id_user}','${mapping2.nama_siswa}')"><i class="fa fa-plus mr-2"></i> Saldo</button>
                                                            </div>
                                                            <div class="col-sm-6 col-xs-6 col-4">
                                                                <button type="button" class="btn btn-sm btn-warning" onclick="locked()" style="border-radius:1000px;width:100%;"><i class="fa fa-lock mr-2"></i> Profil</button>
                                                            </div>
                                                            <div class="col-sm-6 col-xs-6 col-4">
                                                                <button type="button" class="btn btn-sm btn-outline-warning" onclick="locked()" style="border-radius:1000px;width:100%;"><i class="fa fa-lock mr-2"></i> Nilai</button>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        `;
                                        }
                                    
                                    });
                                    $('#putContentHere').html(sintaks);
                                    
                          }else {
                              $(".loading").fadeOut();
                              
                          }
                      }
                      
                      save2();
                    
                    
                });
                  
                  
                    
                    
              }else {
                  $(".loading").fadeOut();
                  
              }
          }
          
          save();
        }
        
        
        
        function loadRiwayat(){
            
            $('#putContentHere').html('<img src="https://photoklik.xyz/sipintar//assets/loadingdesa.gif?%3E" style="width:70px; height:70px; display:block;margin:auto; margin-top:50px; margin-bottom:50px;">');
            
            const save = async ()=>{
              const posts = await axios.get('<?=api_url();?>riwayat/get-riwayat-all', {
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
                    
                    let sintaks = '';
                    let statscolor = '';
                    let urlimg = '';
                    
                    let no = 0;
                    let saldo = 0;
                    let saldoKemarin = 0;
                    let saldoBulanIni = 0;
                    let saldoEach = '';
                    
                    let datetoday = new Date();
                    let datetodayparsed = datetoday.getDate()+'-'+(datetoday.getMonth()+1) +'-'+datetoday.getFullYear();
                    let monthparsed = (datetoday.getMonth()+1);
                
                    // console.log(posts.data.riwayat);
                    posts.data.map((mapping,i)=>{
                        if(mapping.riwayat.aksi=='penambahan_saldo'){
                            statscolor = 'success';   
                        }else if(mapping.riwayat.aksi=='pengurangan_saldo'){
                            statscolor = 'danger';   
                        }else if(mapping.riwayat.aksi=='saldo_awal'){
                            statscolor = 'primary';   
                        }else if(mapping.riwayat.aksi=='tambah'){
                            statscolor = 'info';   
                        }else if(mapping.riwayat.aksi=='pencairan'){
                            statscolor = 'warning';   
                        }else {
                            statscolor = 'light';
                        }
                        
                        
                        if(mapping.user!=undefined && mapping.user!=null && !isEmpty(mapping.user.foto)){
                            urlimg=`<?=base_url();?>engine/Assets/img/user/${mapping.user.foto}`;
                            
                        }else {
                            urlimg=`<?=base_url();?>engine/Assets/img/user/default.jpg`;
                        }
                        
                        
  
                        let datenya = new Date(mapping.riwayat.created_at);
                        let tgl = datenya.getDate();
                        let bln = datenya.getMonth()+1;
                        let thn = datenya.getFullYear();
                        
                        let tglCreated = tgl+'-'+bln+'-'+thn;
                        let tglCreated2 = bln+'-'+tgl+'-'+thn;
                        
                        var weeknumber = moment(tglCreated, "MMDDYYYY").isoWeek();
                        let coung = 1;
                        let d1 = 0;
                        let d2 = 0;
                            
                        if(tglCreated==datetodayparsed && mapping.riwayat.aksi=='pengurangan_saldo'){
                            saldo+=parseInt(mapping.riwayat.jumlah_aksi);
                        }
                        
                        if(monthparsed==bln && mapping.riwayat.aksi=='pengurangan_saldo'){
                            saldoBulanIni+=parseInt(mapping.riwayat.jumlah_aksi);
                        }
                        
                        
                        sintaks +=`
                            <div class="row border-left-${statscolor} py-3 mt-2 mb-2" style="padding-top:0px">
                                <div class="col-md-2 col-lg-2 col-sm-3 col-12 text-center">
                                    <img src="${urlimg}" style="width:40px; height:40px; object-fit:cover; border-radius:1000px; border:2px solid #f2f2f2;">
                                </div>
                                <div class="col-md-10 col-lg-10 col-sm-9 col-12">
                                    <font style="font-size:.6em; display:block;">${moment(mapping.riwayat.created_at).format('Do MMMM YYYY, H:mm:ss')+' WIB'}</font>
                                    <font style="font-size:.98em; display:block;">${capitalizeWord(mapping.riwayat.pesan)}</font>
                                    <font style="font-size:.78em; display:block; font-weight:bold;">${"Rp "+formatRupiah(mapping.riwayat.jumlah_aksi.toString())}</font>
                                </div>
                            </div>
                        `;
                    });
                    
                    $('#todayCount').html("Rp "+formatRupiah(saldo.toString()));
                    $('#monthCount').html("Rp "+formatRupiah(saldoBulanIni.toString()));
                    // $('#allCount').html("Rp "+formatRupiah(saldoBulanIni.toString()));
                    
                    $('#putContentHere').html(sintaks);
              }else {
                  $(".loading").fadeOut();
                  
              }
          }
          
          save();
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
        
        function locked(){
             Swal.fire({
                  position: 'center',
                  icon: 'info',
                  title: 'Fitur Terkunci',
                  text: 'Fitur ini belum dapat digunakan karena sedang dalam tahap pengembangan.',
                  showConfirmButton: true,
                  
                });
         };
        $("#errmsgs").fadeOut();
        
        
        
        
    </script>

</body>
<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:25 GMT -->

</html>