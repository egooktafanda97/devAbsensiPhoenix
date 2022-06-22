<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Saldo</h1>

    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-4 col-lg-4 col-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-success">Atur Nominal Saldo</h6>
                    <button class="reset btn btn-primary btn-sm">reset</button>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="oncard_template/#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <!--<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"-->
                        <!--    aria-labelledby="dropdownMenuLink">-->
                        <!--    <div class="dropdown-header">Opsi lainnya:</div>-->
                        <!--    <a class="dropdown-item" href="#">Reset</a>-->
                        <!--    <a class="dropdown-item" href="#">Ke halaman dashboard</a>-->
                        <!--    <div class="dropdown-divider"></div>-->
                        <!--    <a class="dropdown-item" href="#">Tutup</a>-->
                        <!--</div>-->
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-12">
                            <form id="mainx">
                                <div class="form-group" id="typeinputan">
                                    <?php
                                    if ($nis == '') { ?>
                                        <!--<label for="mode" style="display:block; font-size:.7em; line-height:1em;">Metode pencarian data</label>-->
                                        <!--<div class="form-group">-->
                                        <!--    <button type="button" class="btn btn-success btn-sm">Scan</button>-->
                                        <!--    <button type="button" class="btn btn-outline-secondary btn-sm">Pilih manual</button>-->
                                        <!--</div>-->
                                        <label for="nisn" style="display:block; font-size:.7em; line-height:1em;">Pilih data siswa</label>
                                        <select class="selectpicker" id="nisn" data-show-subtext="true" data-live-search="true" style="border-radius:0px;" required>
                                            <option data-subtext="" value="">Pilih Data Dahulu</option>
                                            <?php
                                            foreach ($getAllSiswa as $row) {
                                                if ($row['id_user'] != '' || $row['id_user'] != null) { ?>
                                                    <option data-subtext="<?= $row['nis']; ?>" value="<?= $row['id_user']; ?>"><?= $row['nama_siswa']; ?></option>
                                            <?php }
                                            } ?>
                                        </select>

                                    <?php } else { ?>
                                        <label for="nisn" style="display:block; font-size:.7em; line-height:1em;">NISN</label>
                                        <input type="text" class="form-control" id="nisn" value="<?= $nis; ?>" data-id="<?= $id_user; ?>" placeholder="Rp0" readonly style="font-family: 'IBM Plex Mono', monospace;letter-spacing:.12em;border-radius:0px;" required>
                                        <p><?= ucwords(strtolower($getNamaSiswa)); ?></p>
                                    <?php } ?>
                                    </select>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label for="saldo" style="display:block; font-size:.7em; line-height:1em;">Saldo (Rp)</label>
                                        <input type="text" class="form-control" id="saldo" placeholder="Rp0" style="width:100%;font-family: 'IBM Plex Mono', monospace; font-size:3em; border-radius:0px;" required>


                                        <div class="row">
                                            <div class="col-md-12 col-lg-12 col-12 mt-3">
                                                <h6>Pilihan lain</h6>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6 mt-2">
                                                <button type="button" class="btn btn-sm btn-light saldoadd" style="font-size:.76em" value="20.000">Rp 20.000</button>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6 mt-2">
                                                <button type="button" class="btn btn-sm btn-light saldoadd" style="font-size:.76em" value="50.000">Rp 50.000</button>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6 mt-2">
                                                <button type="button" class="btn btn-sm btn-light saldoadd" style="font-size:.76em" value="100.000">Rp 100.000</button>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6 mt-3">
                                                <button type="button" class="btn btn-sm btn-light saldoadd" style="font-size:.76em" value="500.000">Rp 500.000</button>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-6 mt-3">
                                                <button type="button" class="btn btn-sm btn-light saldoadd" style="font-size:.76em" value="1.000.000">Rp 1.000.000</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">catatan</label>
                                        <textarea class="form-control" name="catatan" id="" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-lg btn-success" id="btnConfirmWithPIN"><i class="fa fa-plus"></i> Kembalikan</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="col-xl-4 col-lg-4 col-12" id="dataUserID">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-success">Data User</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="oncard_template/#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <!--<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"-->
                        <!--    aria-labelledby="dropdownMenuLink">-->
                        <!--    <div class="dropdown-header">Opsi lainnya:</div>-->
                        <!--    <a class="dropdown-item" href="#">Reset</a>-->
                        <!--    <a class="dropdown-item" href="#">Ke halaman dashboard</a>-->
                        <!--    <div class="dropdown-divider"></div>-->
                        <!--    <a class="dropdown-item" href="#">Tutup</a>-->
                        <!--</div>-->
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body" style="">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-12 text-center">
                            <img src="<?= base_url(); ?>engine/Assets/img/user/default.jpg" width="120" height="120" style="object-fit:cover; border-radius:7px; margin-bottom:3%;" />
                            <h4 id="val1">Loading...</h4>
                            <h6 style="color:#636363;text-decoration:none; font-weight:normal;" id="val2">NISN : Loading...</h6>
                        </div>
                        <div class="col-md-12 col-lg-12 col-12 text-center">
                            <table class="table table-stripped text-left" width="100%" style="font-size:.8em;color:black;">
                                <tr>
                                    <td width="40%">Tanggal Lahir</td>
                                    <td id="val3">Loading...</td>
                                </tr>
                                <tr>
                                    <td width="100">Alamat sekarang</td>
                                    <td id="val4">Loading...</td>
                                </tr>
                                <tr>
                                    <td width="100">Jenis Kelamin</td>
                                    <td id="val5">Loading...</td>
                                </tr>
                                <tr>
                                    <td width="100">Tahun Masuk</td>
                                    <td id="val6">Loading...</td>
                                </tr>
                                <tr>
                                    <td width="100">Berada di kelas</td>
                                    <td id="val7">Loading...</td>
                                </tr>
                                <tr>
                                    <td width="100">Menggunakan oncard sejak</td>
                                    <td id="val8">Loading...</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="col-xl-4 col-lg-4 col-12" id="SaldoID">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-12 text-center" style="margin-bottom:30px;">
                    <div class="card shadow" style="padding-top:5%;padding-bottom:5%;background:url('https://www.payfazz.com/wp-content/uploads/2021/07/keuntungan-tersedia.svg');object-fit:cover; background-repeat:no-repeat;background-position:top right;">
                        <font style=''>Saldo Terkini PPAD</font>
                        <font class="text-warning" id="saldoTerkiniInstansi" style="font-size:3em; font-weight:bold; font-family: 'IBM Plex Mono', monospace;text-shadow:0px 2px 0px #000">Loading...</font>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 col-12 text-center" style="margin-bottom:30px;">
                    <div class="card shadow" style="padding-top:5%;padding-bottom:5%;background:url('https://www.payfazz.com/wp-content/uploads/2021/07/keuntungan-tersedia.svg');object-fit:cover; background-repeat:no-repeat;background-position:top right;">
                        <font style=''>Saldo Terkini</font>
                        <font class="text-warning" id="saldoTerkiniID" style="font-size:3em; font-weight:bold; font-family: 'IBM Plex Mono', monospace;text-shadow:0px 2px 0px #000">Loading...</font>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-success">Riwayat Penggunaan Saldo</h6>
                    <p class="m-0 font-weight-bold text-secondary">10 transaksi terakhir</p>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="oncard_template/#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <!--<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"-->
                        <!--    aria-labelledby="dropdownMenuLink">-->
                        <!--    <div class="dropdown-header">Opsi lainnya:</div>-->
                        <!--    <a class="dropdown-item" href="#">Reset</a>-->
                        <!--    <a class="dropdown-item" href="#">Ke halaman dashboard</a>-->
                        <!--    <div class="dropdown-divider"></div>-->
                        <!--    <a class="dropdown-item" href="#">Tutup</a>-->
                        <!--</div>-->
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-12 text-center" style="padding:0px!important;margin:0px!important;">
                            <table class="table table-striped table-hover text-left" width="100%" style="font-size:.8em;color:black;">



                                <tbody id="bodyTable"></tbody>


                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Pie Chart -->

    </div>

    <!-- Content Row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->




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

<div class="modal fade animate__animated animate__backInUp " style="backdrop-filter: blur(5px);" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content" style="border:none; box-shadow:none;">
            <div class="modal-header" style="border:none; ">
                <h5 class="modal-title" id="exampleModalLabel" style="text-align:center!important;display:block;">Konfirmasi PIN Anda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <form id="bobobo">
                    <input type="password" name="passpin" id="passPIN" placeholder="PIN" class="form-control" style="font-size:1.2em; letter-spacing:1em;" maxlength="4" />
                </form>
            </div>
            <div class="modal-footer text-center" style="border:none;margin:auto; display:grid; align-items:center;">
                <button type="button" class="btn btn-primary" id="btnSubmitData">Kirim</button>
            </div>
        </div>
    </div>
</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->


<!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>-->

<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/popper.min.js"></script>

<!-- tambahan ego -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>-->
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
<script src="<?= base_url(); ?>oncard_template/js/demo/chart-area-demo.js"></script>
<script src="<?= base_url(); ?>oncard_template/js/demo/chart-pie-demo.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.js"></script>

<script src="https://momentjs.com/downloads/moment.js"></script>
<script src="https://momentjs.com/downloads/moment-with-locales.js"></script>

<!-- ------------ -->


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script> -->


<script type="text/javascript">
    moment.locale('id');
    let randomCode = "";
    let getid = '';
    var check = $("#nisn").val();

    <?php

    if ($nis != '') { ?>
        loadRiwayat(<?= $id_user; ?>);
        getid = <?= $id_user; ?>;
    <?php } ?>

    async function saldoPPAD() {
        const response = await axios.get('<?= api_url(); ?>instansi/getbyauth', {
            headers: {
                'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
            }
        });
        if (response.status == 200) {
            $("#saldoTerkiniInstansi").text("Rp " + formatRupiah(response.data.saldo_tunai));
        }
    }
    saldoPPAD();
    if (check) {
        const save = async (check) => {
            const posts = await axios.get('<?= api_url(); ?>siswa/getOne?nis=' + check, {
                headers: {
                    'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                }
            }).catch((err) => {

                $(".loading").fadeOut();
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Proses Gagal 1',
                    text: 'Terjadi kesalahan dalam memproses request Anda.',
                    showConfirmButton: true,

                });
            });

            if (posts.status == 200) {
                $(".loading").fadeOut();

                let tglMasuk = moment(posts.data.tgl_lahir).format('Do MMMM YYYY');
                let createdAt = moment(posts.data.updated_at).format('Do MMMM YYYY, H:mm:ss') + ' WIB';

                $('#val1').text(posts.data.nama_siswa);
                $('#val2').text(posts.data.nis);
                $('#val3').text(tglMasuk);
                $('#val4').text(posts.data.alamat);
                $('#val5').text(posts.data.jk);
                $('#val6').text(posts.data.tahun_masuk);
                $('#val7').text(posts.data.kelas);
                $('#val8').text(createdAt);
                //   $('#val9').text(posts.data.nama_siswa);


            } else {
                $(".loading").fadeOut();




            }
        }

        save(check);
    } else {
        $('#dataUserID').attr('style', 'display:none;');
        $('#SaldoID').attr('style', 'display:none;');
    }




    var datatableset = $('#tblsiswa').DataTable({
        // serverSide: true,
        processing: true,
        language: {
            search: "",
            searchPlaceholder: "Cari data siswa"
        },
        "oLanguage": {
            "sInfo": "Menampilkan _START_ hingga _END_ dari _TOTAL_ total data.",
            "oPaginate": {
                "sPrevious": "Sebelumnya",
                "sNext": "Berikutnya"
            }
        },
        ajax: {
            headers: {
                'Accept': 'application/json',
                'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
            },
            url: '<?= api_url(); ?>siswa/get-table',
            type: 'GET'
        }

    });

    function loadRiwayat(check) {
        const save = async (check) => {
            const posts = await axios.get('<?= api_url(); ?>siswa/get-siswa-in-relation/' + check, {
                headers: {
                    'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                }
            }).catch((err) => {

                $(".loading").fadeOut();
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Proses Gagal 4',
                    text: 'Terjadi kesalahan dalam memproses request Anda.',
                    showConfirmButton: true,

                });
            });

            if (posts.status == 200) {
                $(".loading").fadeOut();

                //   console.log(posts);
                //   return false;

                $('#saldoTerkiniID').text("Rp " + formatRupiah(posts.data.response.result.saldo));
                console.log(posts.data);
                if (posts.data.response.riwayat_transaksi.length > 0) {
                    let sintaks = '';
                    let no = 1;
                    posts.data.response.riwayat_transaksi.map((mapping, i) => {
                        sintaks += `
                         <tr style="background-color:  ${mapping.status == 'issue'?'#f29696':(mapping.status == 'inValid'?'#fceacf':(mapping.status == 'valid'?'#c4ffba':(mapping.aksi == 'pengembalian_saldo'?'#bae2ff':'')))}">
                            <td width="5%">${no++}</td>
                            <td ><font style="${(mapping.aksi=='tambah')?'color:green':''};">${mapping.catatan != null ?mapping.catatan:mapping.pesan}</font><br/><p> Saldo Awal ${formatRupiah(mapping.saldo_awal,'Rp')}</p><br/><p>${moment(mapping.created_at).format('Do MMMM YYYY H:m:s')} WIB <br/><p> Sisa Saldo ${formatRupiah(mapping.saldo,'Rp')}</p></p></td>
                            <td class="text-right">${formatRupiah(mapping.jumlah_aksi,'Rp')}</td>
                        </tr>
                        `;
                    });

                    $('#bodyTable').html(sintaks);
                }

            } else {
                $(".loading").fadeOut();
            }
        }


        save(check);

    }

    $(".reset").click(function() {
        $('#nisn').val('');
        $("[name='catatan']").val("")
        $("#saldo").val("")
        $('#dataUserID').attr('style', 'display:none;');
        $('#SaldoID').attr('style', 'display:none;');
    });
    $('#nisn').on('change', function() {
        randomCode = makeid()
        getid = this.value;
        $('#dataUserID').attr('style', 'display:none;');
        $('#SaldoID').attr('style', 'display:none;');


        var check = $('option:selected', this).attr("data-subtext");
        //   var checkID = $('option:selected',this).attr("value");

        loadRiwayat(this.value);

        const getUser = async (check) => {
            const posts = await axios.get('<?= api_url(); ?>siswa/getOne?nis=' + check, {
                headers: {
                    'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                }
            }).catch((err) => {

                $(".loading").fadeOut();
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Proses Gagal 3',
                    text: 'Terjadi kesalahan dalam memproses request Anda.',
                    showConfirmButton: true,

                });
            });

            if (posts.status == 200) {
                $('#dataUserID').attr('style', 'display:block;');
                $('#SaldoID').attr('style', 'display:block;');

                $(".loading").fadeOut();
                $('#val1').text(posts.data.nama_siswa);
                $('#val2').text(posts.data.nis);
                $('#val3').text(posts.data.tgl_lahir);
                $('#val4').text(posts.data.alamat);
                $('#val5').text(posts.data.jk);
                $('#val6').text(posts.data.tahun_masuk);
                $('#val7').text(posts.data.kelas);
                $('#val8').text(posts.data.updated_at);
                //   $('#val9').text(posts.data.nama_siswa);


            } else {
                $(".loading").fadeOut();
            }
        }
        getUser(check);
    });


    function logoutBtn() {
        sessionStorage.removeItem('_token');
        window.location.href = '<?= base_url("Login/logoutUser"); ?>';
    }
    $(document).ready(function() {

    });

    $('#exampleModalCenter').on('hidden.bs.modal', function() {
        $('#mainx').trigger("reset");
        $('#nisn').attr('disabled', false);
    });

    function addSaldoSiswa(str) {
        $(".loading").fadeIn();
    }

    function deleteSiswa(str) {
        Swal.fire({
            position: 'top',
            icon: 'info',
            title: '<h5>Yakin ingin menghapus data ini?</h5>',
            html: '<h6>Data yang telah dihapus tidak dapat dikembalikan lagi. Harap hati - hati dan teliti dalam memilih data yang ingin dihapus ya.</h6>',
            showConfirmButton: true,
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: 'Batal menghapus',
            denyButtonText: `Yakin, hapus sekarang`,

        }).then((result) => {
            if (result.isConfirmed) {

            } else if (result.isDenied) {

                const save = async (str) => {
                    const posts = await axios.delete('<?= api_url(); ?>siswa/delete/' + str, {
                        headers: {
                            'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                        }
                    }).catch((err) => {

                        $(".loading").fadeOut();
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Proses Gagal 2',
                            text: 'Terjadi kesalahan dalam memproses request Anda.',
                            showConfirmButton: true,

                        });
                    });

                    if (posts.status == 200) {

                        if (posts.data.status == true) {
                            $(".loading").fadeOut();

                            Swal.fire({
                                position: 'top-center',
                                icon: 'success',
                                title: 'Dihapus!',
                                text: 'Data berhasil dihapus',
                                showConfirmButton: false,
                                timer: 2000

                            });

                            datatableset.ajax.reload();


                        } else {
                            $(".loading").fadeOut();
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Gagal Proses',
                                text: 'Data tidak dapat diproses dalam saat ini, ulangi dilain waktu.',
                                showConfirmButton: true,

                            });
                        }

                    } else {
                        $(".loading").fadeOut();

                    }
                }

                save(str);
            }
        });
    }


    $(".loading").hide();

    function makeid() {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        for (var i = 0; i < 10; i++)
            text += possible.charAt(Math.floor(Math.random() * possible.length));

        return text;
    }

    $('#btnSubmitData').on('click', function() {

        $(".loading").fadeIn();

        var nisn = getid;
        var saldo = $("#saldo").val();
        saldo = saldo.replace(/\./g, '');

        var form_data = new FormData();
        form_data.append('id_user', nisn);
        form_data.append('tambahan', saldo);
        form_data.append('random_code', randomCode);
        form_data.append('catatan', $("[name='catatan']").val());

        const tambah = async (form_data) => {
            const backend = await axios.post('https://oncard.phoenixkreatifdigital.com/engine/api/debug/debug-pengembalianDana', form_data, {
                headers: {
                    'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                }
            }).catch((err) => {
                console.log(err.response)
                saldoPPAD();
                $(".loading").fadeOut();
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Gagal Menyimpan',
                    text: 'Data tidak dapat disimpan dalam saat ini, ulangi dilain waktu.',
                    showConfirmButton: true,

                });

            });
            if (backend.status == 200) {
                saldoPPAD();
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: '<h6>Berhasil Menambah Saldo</h6>',
                    html: '<h6>Data sudah tersimpan</h6>',
                    showConfirmButton: false,
                    timer: 2000

                });

                loadRiwayat(nisn);
                $('#exampleModal').modal('toggle');
                $(".loading").fadeOut();
            }
        }
        tambah(form_data);

    });



    $('#btnConfirmWithPIN').on('click', function() {
        let saldo = $('#saldo').val();
        if (isEmpty(saldo)) {
            launch_toast('times', 'Saldo belum ditentukan');
        } else {
            $('#exampleModal').modal('toggle');
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



    $("#errmsgs").fadeOut();

    $('#saldo').keyup(function(event) {

        // skip for arrow keys
        if (event.which >= 37 && event.which <= 40) return;

        // format number
        $(this).val(function(index, value) {
            return value
                .replace(/\D/g, "")
                .replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        });
    });

    $('.saldoadd').on('click', function() {
        $('#saldo').val($(this).val());

    });

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
</script>



</body>
<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:25 GMT -->

</html>