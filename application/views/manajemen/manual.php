<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row konten" style="align-items:center;justify-content:center;">
        <div style="display:block;grid-column:1/span 4; padding:1vh;">
            <h2>Kelola secara manual</h2>
            <h5 style="font-weight:300;">Tentukan status kehadiran untuk masing-masing user berikut ini.</h5>
            
        </div>
        <div style="display:block;grid-column:5/span 2;">
            <input id="search" type="text" class="form-control" placeholder="Cari nama user..."/>
            <button type="button" class="btn btn-danger" style="position:relative;float:right; margin-top:-48.5px; margin-right:10px; " onclick="runSearch();">
                Cari
            </button>
            <p style="line-height:10px;margin-top:5px;padding-left:10px;"><small >Pencarian ini menggunakan <i>case-sensitive</i>, pastikan keyword sesuai dengan besar atau kecilnya huruf pada nama user.</small></p>
            <h6 style="font-weight:300;font-style:italic; padding:10px; text-align:right;margin:0px;padding:0px;">Menampilkan <font id="countResult">0</font> data.</h6>
            
        </div>
        
        <div style="display:block;grid-column:1/span 6; padding:1vh; ">
            <div class="listKonten" style="font-weight:800;border-bottom:1px solid rgba(0,0,0,0.1); padding-bottom:10px; margin-bottom:10px;">
                <div>No.</div>
                <div>NIS</div>
                <div style="grid-column:3/span 3;">Nama Lengkap</div>
                <div style="">Kelas</div>
                <div style="grid-column:7/span 3;text-align:right;">Status Kehadiran</div>
                
            </div>
            
            <div id="putContentHere">
                 
            </div>    
            
            <button type="button" class="btn btn-sm btn-danger" onclick="getDataUser('');" style="display:block; margin:auto; margin-top:1.5vh;">
                Load more...
            </button>
        </div>
        
        
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<div class="modal fade" id="dialogDelete" tabindex="-1" role="dialog" aria-labelledby="deleteTitle" aria-hidden="true">
  <div class="modal-dialog  modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="border:none!important;">
        <h5 class="modal-title" id="deleteTitle">Yakin ingin menghapus item ini?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="las la-times"></i>
        </button>
      </div>
      <div class="modal-body">
          
      </div>
      <div class="modal-footer" style="border:none!important;">
        <button type="button" id="okDelete" onclick="okDeleteNow();" class="btn btn-primary" onclick="">Ya, hapus saja.</button>
        <button type="button"  data-dismiss="modal" aria-label="Close" class="btn btn-secondary">Batalkan</button>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Ponpes KH. Ahmad Dahlan - <?= date('Y'); ?></span>
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

<!-- tambahan ego -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script src="https://www.jqueryscript.net/demo/Bootstrap-4-Dropdown-Select-Plugin-jQuery/dist/js/bootstrap-select.js"></script>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url(); ?>oncard_template/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>oncard_template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url(); ?>oncard_template/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url(); ?>oncard_template/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url(); ?>oncard_template/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<!--<script src="<?= base_url(); ?>oncard_template/js/demo/chart-area-demo.js"></script>-->
<!--<script src="<?= base_url(); ?>oncard_template/js/demo/chart-pie-demo.js"></script>-->

<script src="https://momentjs.com/downloads/moment.js"></script>
<script src="https://momentjs.com/downloads/moment-with-locales.js"></script>

<!-- ------------ -->

<script type="text/javascript">
    moment.locale('id');
    let hariini = new Date();
    
    let statsproc = 'add';


    let arrayitemgrafikdata = [];
    let arrayitemgrafiklabel = [];


    let saldoTunaiIPaymu = 0;
    let saldoSiswaGuruKantin = 0;
    
    let saldoTetap = 0;
    
    let getNowRow  = 0;
    let pivotGetter  = 10;
    let times = 0;
    
   function runSearch(){
       let valu = $('#search').val();
    //   console.log(valu);
       if(valu!=''){
           getDataUser(valu);
       }else {
           getDataUser('');
       }
   }
    
   getDataUser('');
   function getDataUser(str) {
       
       $('#putContentHere').html('<div class="text-center"><div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>');
       let html ='';

        const save = async (str) => {
            const posts = await axios.get('<?= api_url(); ?>siswa', {
                headers: {
                    'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                }
            }).catch((err) => {

                

            });
            
            let no = 1;

            if (posts.status == 200) {
                
                times = times+1;
                getNowRow = 0;
                
                console.log(str);

                posts.data.response.map((mapping,i)=>{
                    
                    
                    if(isEmpty(str)){
                        if(getNowRow < (pivotGetter*times)){
                            html +=`
                                <div class="listKontenView">
                                    <div>${no++}</div>
                                    <div>${mapping.nis}</div>
                                    <div style="grid-column:3/span 3;">${mapping.nama_siswa}</div>
                                    <div ><font style="border-radius:1vh; line-height:1.5vh;">${mapping.kelas}</font></div>
                                    <div class="" style="grid-column:7/span 3;text-align:right; margin-right:0vh;">
                                        <form>
                                            <select class="form-control" style="width:auto; float:right;" onchange="setStatusKehadiran(this.value,'${mapping.id_user}')">
                                                <option value="">---</option>
                                                <option value="Sakit">Sakit</option>
                                                <option value="Izin">Izin</option>
                                                <option value="Alfa">Alfa</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>    
                            `;
                            getNowRow++;
                        }else {
                            return false;
                        }
                    }else {
                        
                        if((mapping.nama_siswa).indexOf(str) != -1){
                            
                            html +=`
                                <div class="listKontenView">
                                    <div>${no++}</div>
                                    <div>${mapping.nis}</div>
                                    <div style="grid-column:3/span 3;">${mapping.nama_siswa}</div>
                                    <div ><font style="border-radius:1vh; line-height:1.5vh;">${mapping.kelas}</font></div>
                                    <div class="" style="grid-column:7/span 3;text-align:right; margin-right:0vh;">
                                        <form>
                                            <select class="form-control" style="width:auto; float:right;" onchange="setStatusKehadiran(this.value,'${mapping.id_user}')">
                                                <option value="">---</option>
                                                <option value="Sakit">Sakit</option>
                                                <option value="Izin">Izin</option>
                                                <option value="Alfa">Alfa</option>
                                                
                                            </select>
                                        </form>
                                    </div>
                                </div>    
                            `;
                            
                        }
                        
                    }
                    
                    
                    
                    
                });
                
                $('#countResult').text(no-1);
                
                $('#putContentHere').html(html);

            } else {
                
            }
        }

        save(str);
    }
    
    
    function setStatusKehadiran(t, str){
        console.log(t, str);
        
        var form_data = new FormData();
        form_data.append('keterangan', t);
        
        const save = async (form_data) => {
            const posts = await axios.post('<?= api_url(); ?>admin/absensi-by-admin/'+str, form_data, {
                headers: {
                    'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                }
            }).catch((err) => {
                
                Toastify({
                  text: "Terjadi kesalahan dalam proses data.",
                  duration: 3000,
                  close :true,
                  gravity:"top",
                  position:"left",
                  className: "errorMessage",
                  
                }).showToast();
                
            });

            if (posts.status == 200) {
                
                if (posts.data.status == true) {
                    
                    Toastify({
                      text: posts.data.msg,
                      duration: 3000,
                      close :true,
                      gravity:"top",
                      position:"left",
                      className: "successMessage",
                      
                    }).showToast();
                    
                    
                } else {
                    Toastify({
                      text: posts.data.msg,
                      duration: 3000,
                      close :true,
                      gravity:"top",
                      position:"left",
                      className: "errorMessage",
                      
                    }).showToast();
                }

            } else {
                Toastify({
                  text: "Terjadi kesalahan dalam proses data.",
                  duration: 3000,
                  close :true,
                  gravity:"top",
                  position:"left",
                  className: "errorMessage",
                  
                }).showToast();
                
            }
        }

        save(form_data);
        
    }
    
    $(function(){
       $(window).scroll(function(){
           if($(document).height()==$(window).scrollTop()+$(window).height()){
            //   alert('I am at the bottom');
               
           }
       });
    });
    
    let idget = '';
    function confirmDelete(str){
        $('#dialogDelete').modal('toggle');
        idget = str;
    }
    
    function managePengaturan(str){
       
        if(str=='add') {
            
            $('#exampleModal').modal('toggle');
            $('#mod')[0].reset();
            $('#judulDialog').html('Konfigurasi Baru');
            
            statsproc = 'add';
            
        }else {
            
            $('#exampleModal').modal('toggle');
            statsproc = 'update';
            
            $('#judulDialog').html('Perbaharui Konfigurasi');
            
            return false;
            
            //check pendududk by str value
            const save = async (str) => {
                const posts = await axios.get('<?= api_url(); ?>pengaturan-instansi/getByID/'+str, {
                    headers: {
                        'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                    }
                }).catch((err) => {
    
                    
    
    
                });
    
                if (posts.status == 200) {
    
                    $("#hari").val(posts.data.id_hari);
                    $("#keterangan").val(posts.data.keterangan);
                    $("#time_start").val(posts.data.time_start);
                    $("#time_end").val(posts.data.time_end);
                    
                } else {
                    
                }
            }
            
            save(str);
        }
   }
   
   
   
   function addDataPengaturan(str){
               
       $('#btnProc').html('<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>');
       $('#btnProc').attr('disabled','disabled');
       $('#btnProc').css('cursor','not-allowed');
        
        var hari = $("#hari").val();
        var keterangan = $("#keterangan").val();
        var time_start = $("#time_start").val();
        var time_end = $("#time_end").val();
        
        var form_data = new FormData();
        form_data.append('id_hari', hari);
        form_data.append('keterangan', keterangan);
        form_data.append('time_start', time_start);
        form_data.append('time_end', time_end);
        
        let url = '';
        
        if(statsproc=='add'){
            url = '<?= api_url(); ?>pengaturan-instansi/store';
        }else {
            url = '<?= api_url(); ?>pengaturan-instansi/update/'+str;
        }
        const save = async (form_data) => {
            const posts = await axios.post(url, form_data, {
                headers: {
                    'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                }
            }).catch((err) => {
                
                Toastify({
                  text: "Terjadi kesalahan dalam proses data.",
                  duration: 3000,
                  close :true,
                  gravity:"top",
                  position:"left",
                  className: "errorMessage",
                  
                }).showToast();
                
                $('#btnProc').html('SIMPAN');
                $('#btnProc').attr('disabled',false);
                $('#btnProc').css('cursor','pointer');
                
            });

            if (posts.status == 200) {
                
                $('#btnProc').html('SIMPAN');
                $('#btnProc').attr('disabled',false);
                $('#btnProc').css('cursor','pointer');

                if (posts.data.status == true) {
                    
                    Toastify({
                      text: posts.data.msg,
                      duration: 3000,
                      close :true,
                      gravity:"top",
                      position:"left",
                      className: "successMessage",
                      
                    }).showToast();
                    
                    getPengaturan();
                    $('#mod')[0].reset();
                    $('#exampleModal').modal('toggle');
                    
                } else {
                    Toastify({
                      text: posts.data.msg,
                      duration: 3000,
                      close :true,
                      gravity:"top",
                      position:"left",
                      className: "errorMessage",
                      
                    }).showToast();
                }

            } else {
                Toastify({
                  text: "Terjadi kesalahan dalam proses data.",
                  duration: 3000,
                  close :true,
                  gravity:"top",
                  position:"left",
                  className: "errorMessage",
                  
                }).showToast();
                
                $('#btnProc').html('SIMPAN');
                $('#btnProc').attr('disabled',false);
                $('#btnProc').css('cursor','pointer');
            }
        }

        save(form_data);

    }
    
    
    function okDeleteNow(){
               
        
        let url = '';
        
        
        const save = async () => {
            const posts = await axios.delete('<?= api_url(); ?>pengaturan-instansi/delete/'+idget, {
                headers: {
                    'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                }
            }).catch((err) => {
                
                Toastify({
                  text: "Terjadi kesalahan dalam proses data.",
                  duration: 3000,
                  close :true,
                  gravity:"top",
                  position:"left",
                  className: "errorMessage",
                  
                }).showToast();
                
                
            });

            if (posts.status == 200) {
                

                if (posts.data.status == true) {
                    
                    Toastify({
                      text: posts.data.msg,
                      duration: 3000,
                      close :true,
                      gravity:"top",
                      position:"left",
                      className: "successMessage",
                      
                    }).showToast();
                    
                    getPengaturan();
                    idget = '';
                    $('#dialogDelete').modal('toggle');
                    
                } else {
                    Toastify({
                      text: posts.data.msg,
                      duration: 3000,
                      close :true,
                      gravity:"top",
                      position:"left",
                      className: "errorMessage",
                      
                    }).showToast();
                }

            } else {
                Toastify({
                  text: "Terjadi kesalahan dalam proses data.",
                  duration: 3000,
                  close :true,
                  gravity:"top",
                  position:"left",
                  className: "errorMessage",
                  
                }).showToast();
                
            }
        }

        save();

    }
    
    
    $(".loading").hide();

    function logoutBtn() {
        sessionStorage.removeItem('_token');
        window.location.href = '<?= base_url("Login/logoutUser"); ?>';
    }

    $('#btnScanNow').on('click', function() {
        $("#btnStartCekSaldo").trigger("click");
    });

    $('.closeDulu').on('click', function() {
        $("#btnStartCekSaldo").trigger("click");

        $('.showDetailAnother').addClass('disp-none');


    });
    $('#btnStartCekSaldo').on('click', function() {
        $('.showDetailAnother').removeClass('animate__animated animate__slideInUp animate__faster');
        if ($('#btnStartCekSaldo').height() != 0) {
            $('#btnStartCekSaldo').css('height', '0');
            $('#btnScanNow').removeClass('disp-none');
            $('#btnStartCekSaldo').addClass('disp-none');
            $('#horeee').focus();
        } else {
            $('#btnStartCekSaldo').attr('style', "cursor:pointer;width:200px;display:grid; align-items:center; justify-content:center; height:200px;margin:auto; background:url('https://www.maxpixel.net/static/photo/1x/Round-Circle-Button-Choose-Orb-Yellow-Select-1217980.png'); background-size:cover; background-position:center");
            $('#btnScanNow').addClass('disp-none');
            $('#btnStartCekSaldo').removeClass('disp-none');
            $('#horeee').val('');

        }
    });
    
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
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }

    function capitalizeWord(strget) {
        var str = strget;
        str = str.toLowerCase().replace(/\b[a-z]/g, function(letter) {
            return letter.toUpperCase();
        });

        return str;
    }


    $(document).ready(function() {
        console.log("ready!");
    });

    $("#errmsgs").fadeOut();
</script>

</body>
<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:25 GMT -->

</html>