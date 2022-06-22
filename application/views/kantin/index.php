    <div class="row" style="margin-top:-17px;margin-right:-15px; margin-bottom:-15px;">
        <div class="col-md-7 col-lg-7 col-8 py-3 px-3" style="padding-rigth:0px;">
            <div class="row mb-3">
                <input type="text" id="searchThisPage" class="form-control" onkeyup="runSearchText(this)" style="height:40px;" placeholder="Cari item">
                <i class="fa fa-times btn-dark" onclick="emptySearchText()" style="position:absolute; right:15px;padding:4px;  border-radius:100px; top:23px;"></i>
            </div>
            <font style="font-size:1em;display:block;" class="text-dark">
                Saldo Anda : <strong id="saldo_kantin" style="color: #000;"></strong>
            </font>
            <hr style="margin: 0; padding: 0; margin-bottom: 3px;">
            <font style="font-size:1em;display:block;" class="text-dark">
                <b>Menu</b> Category
            </font>

            <input type="hidden" name="cekUs" id="cekUs">

            <div class="row listcats" style="padding-bottom:5px; margin-bottom:10px;">
                <?php
                for ($i = 0; $i < 4; $i++) { ?>
                    <li class="blog-post o-media" style="background:#fff; border-radius:15px; padding:20px;padding-left:5px; width:20%; margin:10px; display:inline-table">
                        <div class="o-media__body">

                            <div class="o-vertical-spacing">
                                <span class="skeleton-box" style="width:100%;"></span>
                            </div>
                            <div class="o-vertical-spacing">
                                <span class="skeleton-box" style="width:100%;"></span>
                            </div>
                            <div class="o-vertical-spacing">
                                <span class="skeleton-box" style="width:60%;"></span>
                            </div>
                        </div>
                    </li>
                <?php } ?>


            </div>

            <font style="font-size:1.25em;display:block;" class="text-dark">
                <b>Pilih</b> Menu
            </font>

            <div class="row listitems" style="margin-bottom:30px;">


                <?php
                for ($i = 0; $i < 4; $i++) { ?>
                    <li class="blog-post o-media" style="background:#fff; border-radius:15px; padding:20px;padding-left:5px; height:100px; width:20%; margin:10px; display:inline-table">
                        <div class="o-media__body">

                            <div class="o-vertical-spacing">
                                <span class="skeleton-box" style="width:100%;"></span>
                            </div>
                            <div class="o-vertical-spacing">
                                <span class="skeleton-box" style="width:100%;"></span>
                            </div>
                            <div class="o-vertical-spacing">
                                <span class="skeleton-box" style="width:60%;"></span>
                            </div>
                        </div>
                    </li>
                <?php } ?>

            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-4 py-3 " id="invoice" style="background:#fff; position:fixed;right:0px; max-height:100%; height:100%; min-height:100%; overflow-y:scroll; padding-right:0px!important;padding-left:10px;">
            <font style="font-size:1.25em;display:block;" class="text-dark">
                <b>Order</b> Menu
                <!--<small style="display:block; font-size:.67em;">Kode Transaksi : <b>4049281</b></small>-->
            </font>

            <div class="row" id="invoiceSide" style="padding:14px; padding-right:0px; margin-right:0px;">

            </div>



            <div class="row text-center" style="position:absolute; bottom:0px; width:90%; height:120px; margin-left:3%; padding-bottom:15px;padding-top:15px; background:#fff;">

                <div class="col-md-6 col-lg-6 col-6 text-right">
                    Total
                </div>
                <div class="col-md-6 col-lg-6 col-6 text-right" id="totalTagihan" style="font-weight:bold; padding-bottom:0px;">Rp 0</div>


                <button type="button" class="btn btn-danger" id="btnNextPayment" style="width:50%;margin:auto;padding:.5em;">Bayar</button>
            </div>
        </div>

    </div>
    </div>
    <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>-->


    <audio id="audio" src="<?= base_url(); ?>assets/button-click.wav"></audio>

    <div class="modal fade" id="ahsyam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width:400px!important;border:none;border-radius:0px;" role="document">
            <div class="modal-content" style="background: rgb(27,27,27); background: linear-gradient(0deg, rgba(27,27,27,1) 0%, rgba(80,80,80,1) 100%);;border:none!important;border-radius:0px;">
                <div class="modal-body" style="color:#fff; border-bottom:none">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-12 text-center" id="firtOut">
                            <i class="fa fa-times" style="position:absolute;right:10px; top:0px;" data-dismiss="modal"></i>
                            <img src="https://cdn.dribbble.com/users/760295/screenshots/3866906/scaning.gif" id="btnImageFocus" style="border-radius:1120px; border:3px solid #fff; padding:10px;background:#19191a;width:150px; height:150px; object-fit:cover;display:block;margin:auto; margin-bottom:5px;">
                            <small>Letakkan kartu member pada device pencarian...</small>
                            <input type="text" maxlength="10" id="scanKartuID" onchange="runSearching(this)" style="background:transparent; border:none;outline:none;color:transparent;" />
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

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
    <script src="<?= base_url(); ?>oncard_template/js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url(); ?>oncard_template/js/demo/chart-pie-demo.js"></script>
    <script src="<?= base_url(); ?>oncard_template/js/main-kantin.js"></script>

    <!-- ------------ -->

    <script type="text/javascript">
        var audio = document.getElementById("audio");

        $('.navbar-expand-lg').attr('style', 'display:none');

        let invoiceText = [];
        let qr_code = '';

        let random_code = '';
        let numReq = 0; // tamabahan ego

        $(".loading").hide();

        // get data kantin
        async function kantinUS() {
            const gets = await axios.get('<?= api_url(); ?>kantin/get-by-auth', {
                headers: {
                    'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                }
            }).catch((err) => {
                console.log(err.response);
            });

            if (gets.status == 200) {
                $("#saldo_kantin").html(formatRupiah(gets.data.saldo, 'Rp. '));
            }

        }
        kantinUS();

        function logoutBtn() {
            sessionStorage.removeItem('_token');
            window.location.href = '<?= base_url("Login/logoutUser"); ?>';
        }

        function loadMenu() {
            const save = async () => {
                const posts = await axios.get('<?= api_url(); ?>product/get', {
                    headers: {
                        'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                    }
                }).catch((err) => {

                    $(".loading").fadeOut();

                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Proses Gagal',
                        text: 'Terjadi kesalahan dalam memproses request Anda.',
                        showConfirmButton: true,

                    });
                });

                if (posts.status == 200) {
                    $(".loading").fadeOut();


                    // $('#saldoTerkiniID').text("Rp "+formatRupiah(posts.data.response.result.saldo));

                    if (posts.data.length > 0) {

                        $('#putBtnFilter').html('');

                        let sintaks = '';
                        let no = 1;
                        posts.data.map((mapping, i) => {
                            sintaks += `
                        
                        <div class="col-md-3 col-lg-3 col-sm-2 col-3 text-center itemnya" onclick="addToCart('${mapping.id_product}')" style="padding:7px;">
                            <div class="card-body" style="padding:0px;margin:0px;background:#fff; border-radius:10px;padding-bottom:10px;">
                            <img src="https://png.pngtree.com/png-vector/20190726/ourlarge/pngtree-food-icon-design-vector-png-image_1608882.jpg" width="70%" style="display:block;margin:auto;"/>
                            <p style="font-size:.8em;font-weight:bold;color:#000;line-height:1em;padding-left:.2em;padding-right:.2em;">${mapping.nama_produk}</p>
                            <p style="font-size:.7em;color:#636363;margin-top:-17px; margin-bottom:10px;">${"Rp "+formatRupiah(mapping.harga_produk)}</p>
                            </div>
                        </div>
                        
                        `;

                        });

                        $('.listitems').html(sintaks);

                    }

                } else {
                    $(".loading").fadeOut();
                }
            }


            save();

        }

        loadKlasifikasi();
        loadMenu();


        function loadKlasifikasi() {
            const save = async () => {
                const posts = await axios.get('<?= api_url(); ?>kategori/get', {
                    headers: {
                        'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                    }
                }).catch((err) => {

                    $(".loading").fadeOut();

                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Proses Gagal',
                        text: 'Terjadi kesalahan dalam memproses request Anda.',
                        showConfirmButton: true,

                    });
                });

                if (posts.status == 200) {
                    $(".loading").fadeOut();


                    // $('#saldoTerkiniID').text("Rp "+formatRupiah(posts.data.response.result.saldo));

                    if (posts.data.length > 0) {
                        let sintaks = `<bombocat onclick="groupingKlass('')">
                                <img src="https://static.thenounproject.com/png/3067122-200.png" width="25">
                                Semua
                            </bombocat>`;
                        let sintaksChooseKlas = '';
                        let no = 1;
                        posts.data.map((mapping, i) => {
                            sintaks += `
                             <bombocat onclick="groupingKlass('${mapping.id_kategori}')">
                                <img src="<?= base_url(); ?>assets/png/menu/${mapping.icon}" width="25">
                                ${mapping.kategori}
                            </bombocat>
                             
                            `;

                        });

                        $('.listcats').html(sintaks);

                    }

                } else {
                    $(".loading").fadeOut();
                }
            }

            save();

        }

        function groupingKlass(str) {
            $(".loading").fadeIn();
            const save = async (str) => {
                const posts = await axios.get('<?= api_url(); ?>product/get?kategori_produk=' + str, {
                    headers: {
                        'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                    }
                }).catch((err) => {

                    $(".loading").fadeOut();

                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Proses Gagal',
                        text: 'Terjadi kesalahan dalam memproses request Anda.',
                        showConfirmButton: true,

                    });
                });

                if (posts.status == 200) {
                    $(".loading").fadeOut();


                    // $('#saldoTerkiniID').text("Rp "+formatRupiah(posts.data.response.result.saldo));
                    let sintaks = '';
                    let no = 1;
                    if (posts.data.length > 0) {

                        $('#putBtnFilter').html('');



                        posts.data.map((mapping, i) => {
                            sintaks += `
                        
                        <div class="col-md-3 col-lg-3 col-sm-2 col-3 text-center itemnya" onclick="addToCart('${mapping.id_product}')" style="padding:7px;">
                            <div class="card-body" style="padding:0px;margin:0px;background:#fff; border-radius:10px;padding-bottom:10px;">
                            <img src="https://png.pngtree.com/png-vector/20190726/ourlarge/pngtree-food-icon-design-vector-png-image_1608882.jpg" width="70%" style="display:block;margin:auto;"/>
                            <p style="font-size:.8em;font-weight:bold;color:#000;line-height:1em;padding-left:.2em;padding-right:.2em;">${mapping.nama_produk}</p>
                            <p style="font-size:.7em;color:#636363;margin-top:-17px; margin-bottom:10px;">${"Rp "+formatRupiah(mapping.harga_produk)}</p>
                            </div>
                        </div>
                        
                        `;

                        });



                    } else {
                        sintaks = `
                        
                        <div class="col-md-12 col-lg-12 col-sm-12 col-12 text-center itemnya" style="padding:7px;">
                            <div class="card-body" style="padding:0px;margin:0px;background:#fff; border-radius:10px;padding-bottom:10px;">
                            <img src="https://png.pngtree.com/png-vector/20190726/ourlarge/pngtree-food-icon-design-vector-png-image_1608882.jpg" width="60" style="display:block;margin:auto;"/>
                            <p style="font-size:.8em;font-weight:bold;color:#000;line-height:1em;padding-left:.2em;padding-right:.2em;">Tidak ada data</p>
                            <p style="font-size:.7em;color:#636363;margin-top:-17px; margin-bottom:10px;">Kategori ini tidak memiliki data apapun.</p>
                            </div>
                        </div>
                        
                        `;
                    }

                    $('.listitems').html(sintaks);
                } else {
                    $(".loading").fadeOut();
                }
            }


            save(str);
        }

        $('#btnNextPayment').on('click', function() {
            audio.play();
            if ($('#totalTagihan').text() == 'Rp 0') {
                Swal.fire({
                    position: 'top',
                    icon: 'info',
                    title: 'Keranjang masih kosong!',
                    text: 'Pilih item menu yang berada dipanel sebelah kiri dan masukkan ke keranjang belanja.',
                });
            } else {


                var result = '';
                var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                var charactersLength = characters.length;
                for (var i = 0; i < 20; i++) {
                    result += characters.charAt(Math.floor(Math.random() * charactersLength));
                }

                random_code = result;

                $('#ahsyam').modal('show');

            }



        });

        $('#btnImageFocus').on('click', function() {
            $("#scanKartuID").focus();
        });

        $("#ahsyam").on('shown.bs.modal', function() {
            $(this).find('#scanKartuID').val('');
            $(this).find('#scanKartuID').focus();

        });

        function runSearching(str) {

            if (str.value.length >= 10) {

                $('#ahsyam').modal('toggle');

                qr_code = str.value;

                const save = async (str) => {
                    const posts = await axios.get('<?= api_url(); ?>data/get-first-user?qr_code=' + str.value, {
                        headers: {
                            'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                        }
                    }).catch((err) => {

                        $(".loading").fadeOut();


                    });

                    if (posts.status == 200) {

                        if (isEmpty(posts.data)) {
                            Swal.fire({
                                position: 'top',
                                //   icon: 'info',
                                //   title: '<h5 class="text-light">Yakin ingin menghapus data ini?</h5>',
                                html: `
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-12 text-center text-light" id="firtOut">
                                                <img id="imageSearched" src="https://cdn.dribbble.com/users/251873/screenshots/9288094/13539-sign-for-error-or-explanation-alert.gif" style="border-radius:1120px; border:3px solid #fff; padding:10px;background:#19191a;width:150px; height:150px; object-fit:cover;display:block;margin:auto; margin-bottom:5px;">
                                            <h3 class="text-light" id="nameSearched">Tidak ditemukan</h3>
                                            <h6 class="text-light" id="classSearched">Harap ulangi kembali<br/><small>Apabila masih belum ketemu, berarti kartu tersebut tidak terdaftar di sistem OnCard.</small></h6>
                                            
                                        </div>
                                    </div>
                                    
                                  
                                  `,
                                showConfirmButton: false,
                                showDenyButton: false,
                                showCancelButton: false,

                            }).then((result) => {

                                $('#ahsyam').modal('toggle');


                            });
                        } else {
                            if (sessionStorage.getItem("cekUs") == posts.data.id_user) {
                                confirm = false;
                                const swalWithBootstrapButtons = Swal.mixin({
                                    customClass: {
                                        confirmButton: 'btn btn-success',
                                        cancelButton: 'btn btn-danger'
                                    },
                                    buttonsStyling: false
                                })

                                swalWithBootstrapButtons.fire({
                                    title: 'Maaf',
                                    html: 'Siswa ini telah berhasil melakukan transaksi sebelumnya, apakah ingin belanja lagi?',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Ya Lanjutkan',
                                    cancelButtonText: 'Tidak',
                                    reverseButtons: true
                                }).then((result) => {
                                    if (result.isConfirmed) {

                                        Swal.fire({
                                            position: 'top',
                                            //   icon: 'info',
                                            //   title: '<h5 class="text-light">Yakin ingin menghapus data ini?</h5>',
                                            html: `
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-12 col-12 text-center text-light" id="firtOut">
                                                            <img id="imageSearched" src="https://cdn.dribbble.com/users/5137863/screenshots/11240055/media/99347527f225773d273e9805a01e7d2a.gif" style="border-radius:1120px; border:3px solid #fff; padding:10px;background:#19191a;width:150px; height:150px; object-fit:cover;display:block;margin:auto; margin-bottom:5px;">
                                                        <h3 class="text-light" id="nameSearched">${posts.data.nama_user}</h3>
                                                        <h6 class="text-light" id="classSearched">Status ${posts.data.status_level}</h6>
                                                        
                                                        
                                                        <small>Masukkan PIN Keamanan</small>
                                                        <input type="hidden" id="idMemberGetBeli" value="${posts.data.id_user}"/>
                                                        <input type="password" class="form-control" onkeyup="matchedOrNot(this)" id="passGo" style="letter-spacing:17px;height:30px; width:50%; display:block; margin:auto;text-align:center;" maxlength="4"/>
                                                    </div>
                                                </div>
                                              `,
                                            showConfirmButton: false,
                                            showDenyButton: false,
                                            showCancelButton: false,

                                        });
                                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                                        // $("[name='cekUs']").val($('#idMemberGetBeli').val());
                                        numReq = 0;
                                        invoiceText = [];
                                        setIsiInvoice(invoiceText);
                                        setTotalInvoice();

                                        Swal.fire({
                                            position: 'top-end',
                                            icon: 'info',
                                            title: '<h6>Silahkan lanjutkan aktifitas</h6>',
                                            // html: '<h6>Data sudah tersimpan</h6>',


                                        });
                                        return false;
                                    }
                                })
                            } else {
                                Swal.fire({
                                    position: 'top',
                                    //   icon: 'info',
                                    //   title: '<h5 class="text-light">Yakin ingin menghapus data ini?</h5>',
                                    html: `
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12 col-12 text-center text-light" id="firtOut">
                                                    <img id="imageSearched" src="https://cdn.dribbble.com/users/5137863/screenshots/11240055/media/99347527f225773d273e9805a01e7d2a.gif" style="border-radius:1120px; border:3px solid #fff; padding:10px;background:#19191a;width:150px; height:150px; object-fit:cover;display:block;margin:auto; margin-bottom:5px;">
                                                <h3 class="text-light" id="nameSearched">${posts.data.nama_user}</h3>
                                                <h6 class="text-light" id="classSearched">Status ${posts.data.status_level}</h6>
                                                
                                                
                                                <small>Masukkan PIN Keamanan</small>
                                                <input type="hidden" id="idMemberGetBeli" value="${posts.data.id_user}"/>
                                                <input type="password" class="form-control" onkeyup="matchedOrNot(this)" id="passGo" style="letter-spacing:17px;height:30px; width:50%; display:block; margin:auto;text-align:center;" maxlength="4"/>
                                            </div>
                                        </div>
                                        
                                      
                                      `,
                                    showConfirmButton: false,
                                    showDenyButton: false,
                                    showCancelButton: false,

                                });
                            }




                        }

                    } else {
                        $(".loading").fadeOut();

                    }
                }

                save(str);

            }
        }
        // transaksi
        function matchedOrNot(str) {
            if (str.value.length == 4 && numReq == 0) {
                // tambahan dari ego
                numReq++;
                // $(".loading").fadeIn();
                $(str).attr("disabled", true);
                // /////////////////////////////

                // console.log(true);
                let confirm = true;
                let n = str.value;
                $('#imageSearched').attr('src', '');
                $('#imageSearched').attr('src', 'https://s.trackingmore.com/admin/image/preloader.gif');
                $('#imageSearched').attr('style', 'border-radius:1120px; border:6px solid #fa6616; padding:10px;background:#19191a;width:110px; height:110px; object-fit:cover;display:block;margin:auto; margin-bottom:5px;');

                // console.log($("[name='cekUs']").val());

                let m = $('#idMemberGetBeli').val();
                runActionTroli(m, n, str);
            } else {
                $('#imageSearched').attr('src', '');
                $('#imageSearched').attr('src', 'https://cdn.dribbble.com/users/5137863/screenshots/11240055/media/99347527f225773d273e9805a01e7d2a.gif');
                $('#imageSearched').attr('style', 'border-radius:1120px; border:3px solid #fff; padding:10px;background:#19191a;width:150px; height:150px; object-fit:cover;display:block;margin:auto; margin-bottom:5px;');
            }
        }

        function runActionTroli(m, n, str) {
            let beliObj = [];
            invoiceText.map((mapping, i) => {
                beliObj.push({
                    id_product: mapping.id,
                    jumlah: mapping.jumlahItem
                });
            });

            var form_data = new FormData();


            form_data.append('random_code', random_code);
            form_data.append('id_user', m);
            form_data.append('pin', n);
            form_data.append('code', qr_code);
            form_data.append('beli', JSON.stringify(beliObj));

            const save = async (form_data) => {
                const posts = await axios.post('<?= api_url(); ?>kasir/create-troli', form_data, {
                    headers: {
                        'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                    }
                }).catch((err) => {
                    // ============================
                    numReq = 0;
                    $(str).attr("disabled", false);
                    kantinUS();
                    // ============================

                    // console.log(err.response.data.message);
                    //   return false;

                    $(".loading").fadeOut();

                    if (err.response.data.type == 'error_auth') {
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'PIN SALAH',
                            html: 'Ulangi kembali penginputan PIN',
                            showConfirmButton: true,

                        }).then((result) => {
                            // $('#ahsyam').modal('toggle');
                        });

                    } else if (err.response.data.type == 'error_saldo') {
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'SALDO TIDAK CUKUP',
                            html: `Jumlah transaksi melebihi sisa saldo dari akun ini.<br/>Sisa saldo terkini adalah <b>${"Rp "+formatRupiah(err.response.data.saldo)}</b>`,
                            showConfirmButton: true,

                        }).then((result) => {
                            // $('#ahsyam').modal('toggle');
                        });
                    } else if (err.response.data.type == 'error_validate') {
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'VALIDASI GAGAL',
                            html: `Transaksi sudah berhasil sebelum nya cek riwayat anda`,
                            showConfirmButton: true,

                        }).then((result) => {
                            // $('#ahsyam').modal('toggle');
                        });
                    } else if (err.response.data.type == 'error_time') {
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Terlalu Cepat!!',
                            html: `User ini telah berhasil melakukan transaksi kurang dari 30 detik yang lalu dengan julmlah belanja yang sama, cek riwayat anda untuk melihat transaksi yang sudah berhasil`,
                            showConfirmButton: true,

                        }).then((result) => {
                            // $('#ahsyam').modal('toggle');
                        });
                    } else {
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Ma\'af, ada kesalahan',
                            html: `Mungkin jaringan tidak stabil , coba cek riwayat anda terlebih dahulu`,
                            showConfirmButton: true,

                        }).then((result) => {
                            // $('#ahsyam').modal('toggle');
                        });
                    }
                });

                if (posts.status == 200) {
                    // ============================
                    numReq = 0;
                    $(str).attr("disabled", false);
                    // =================


                    if (posts.data.status == true) {
                        // ============================
                        $(".loading").fadeOut();
                        sessionStorage.setItem("cekUs", posts.data.response.id_user);
                        kantinUS();
                        // ============================

                        invoiceText = [];
                        setIsiInvoice(invoiceText);
                        setTotalInvoice();

                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: '<h6>Transaksi Berhasil</h6>',
                            html: '<h6>Data sudah tersimpan</h6>',
                        });

                    } else {
                        // ============================
                        $(str).attr("disabled", false);
                        kantinUS();
                        // ============================
                        $(".loading").fadeOut();
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Gagal Menyimpan',
                            text: 'Data tidak dapat disimpan dalam saat ini, ulangi dilain waktu.',
                            showConfirmButton: true,

                        });
                    }

                } else {
                    numReq = 0;
                    $(".loading").fadeOut();
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'PIN SALAH',
                        text: 'Silahkan ulangi kembali.',
                        showConfirmButton: true,

                    }).then((result) => {
                        $('#ahsyam').modal('toggle');
                    });
                }
            }

            save(form_data);
        }

        function isEmpty(obj) {
            if (obj == null) return true;
            if (obj == undefined) return true;
            if (obj.length > 0) return false;
            if (obj.length === 0) return true;
            if (typeof obj !== "object") return true;
            for (var key in obj) {
                if (hasOwnProperty.call(obj, key)) return false;
            }
            return true;
        }

        function addToCart(str) {

            // $(".loading").fadeIn();

            audio.play();
            const save = async (str) => {
                const posts = await axios.get('<?= api_url(); ?>product/get/' + str, {
                    headers: {
                        'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                    }
                }).catch((err) => {

                    $(".loading").fadeOut();

                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Proses Gagal',
                        text: 'Terjadi kesalahan dalam memproses request Anda.',
                        showConfirmButton: true,

                    });
                });

                if (posts.status == 200) {
                    $(".loading").fadeOut();

                    let newarr = [];
                    let oldarr = [...invoiceText];
                    if (oldarr.length > 0) {
                        invoiceText = [];
                        // console.log('1',oldarr.concat({id:posts.data.id_product, totalHargaPerItem :posts.data.harga_produk, jumlahItem : 1, namaItem:posts.data.nama_produk, totalHarga : (posts.data.harga_produk*1)}));
                        let idget = posts.data.id_product;
                        let switching = false;
                        oldarr.map((mapping, i) => {
                            if (mapping.id == idget) {
                                switching = true;
                            }
                        });
                        if (switching == false) {
                            newarr = oldarr.concat({
                                id: posts.data.id_product,
                                totalHargaPerItem: posts.data.harga_produk,
                                jumlahItem: 1,
                                namaItem: posts.data.nama_produk,
                                totalHarga: (posts.data.harga_produk * 1)
                            });
                        } else {
                            for (var i in oldarr) {
                                if (oldarr[i].id == posts.data.id_product) {
                                    oldarr[i].jumlahItem = (parseInt(oldarr[i].jumlahItem) + 1);
                                    oldarr[i].totalHarga = ((parseInt(oldarr[i].jumlahItem)) * oldarr[i].totalHargaPerItem);
                                    break; //Stop this loop, we found it!
                                }
                            }
                            newarr = oldarr;
                        }
                        invoiceText = newarr;




                    } else {
                        invoiceText.push({
                            id: posts.data.id_product,
                            totalHargaPerItem: posts.data.harga_produk,
                            jumlahItem: 1,
                            namaItem: posts.data.nama_produk,
                            totalHarga: (posts.data.harga_produk * 1)
                        });
                    }

                    setIsiInvoice(invoiceText);

                    setTotalInvoice();







                } else {
                    $(".loading").fadeOut();




                }
            }


            save(str);


        }


        function setIsiInvoice(invoiceText) {

            let htmlx = '';
            invoiceText.map((mapping, i) => {
                htmlx += `<div class="row mt-3" style="width:100%; margin:0px; padding:0px; height:70px;" id="item${mapping.id}">
                    <div class="col-md-3 col-lg-3 col-3 text-left" style="border-right:1px solid #f2f2f2;">
                        <div class="row">
                            <div class="col-md-5 col-lg-5 col-5" >
                                <i class="fa fa-angle-up mb-2 indec" onclick="setJumlah('tambah','${mapping.id}')" style="display:block;"></i>
                                <i class="fa fa-angle-down indec" onclick="setJumlah('kurang','${mapping.id}')"></i>
                            </div>
                            <div class="col-md-7 col-lg-7 col-7 text-left" style="padding-top:10px;">
                                <font id="jmlOrder${mapping.id}" style="font-weight:normal; font-size:1em;">${mapping.jumlahItem}</font>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-5 col-lg-5 col-5" style="font-size:.8em; line-height:1em;">
                        ${mapping.namaItem}
                        <br/>
                        <small class="mt-2" style="display:block;">@ ${"Rp "+formatRupiah(mapping.totalHargaPerItem)}</small>
                        
                    </div>
                    <div class="col-md-4 col-lg-4 col-4" style="font-size:.77em;">
                        <font id="budget${mapping.id}">${"Rp "+formatRupiah(mapping.totalHarga.toString())}</font>
                        <input type="hidden" value="${mapping.totalHarga}" id="hargaItem${mapping.id}">
                        <i class="fa fa-trash text-danger" onclick="deleteItemInvoice('${mapping.id}')" style="position:absolute; top:10px; right:5px;"></i>
                    
                    </div>
                    
                    
                </div>`;
            })
            $('#invoiceSide').html(htmlx);
        }

        function setJumlah(str, id) {

            audio.play();

            let nominee = parseInt($('#jmlOrder' + id).text());
            let hargaItem = parseInt($('#hargaItem' + id).val());




            if (str == 'tambah') {


                //   return obj.id!==str; 
                for (var i in invoiceText) {
                    if (invoiceText[i].id == id) {
                        invoiceText[i].jumlahItem = (parseInt(invoiceText[i].jumlahItem) + 1);
                        invoiceText[i].totalHarga = ((parseInt(invoiceText[i].jumlahItem)) * invoiceText[i].totalHargaPerItem);
                        break; //Stop this loop, we found it!
                    }
                }


                // $('#jmlOrder'+id).text((nominee+1).toString());
                // $('#budget'+id).text("Rp "+formatRupiah(((nominee+1)*hargaItem).toString()));
                // $('#hargaItem'+id).text(((nominee+1)*hargaItem).toString());
            } else {
                if (nominee > 1) {

                    for (var i in invoiceText) {
                        if (invoiceText[i].id == id) {
                            invoiceText[i].jumlahItem = (parseInt(invoiceText[i].jumlahItem) - 1);
                            invoiceText[i].totalHarga = ((parseInt(invoiceText[i].jumlahItem)) * invoiceText[i].totalHargaPerItem);
                            break; //Stop this loop, we found it!
                        }
                    }

                    // $('#jmlOrder'+id).text((nominee-1).toString());
                    // $('#budget'+id).text("Rp "+formatRupiah(((nominee-1)*hargaItem).toString()));
                    // $('#hargaItem'+id).text(((nominee-1)*hargaItem).toString());
                } else {
                    // for (var i in invoiceText) {
                    //      if (invoiceText[i].id == id) {
                    //         invoiceText[i].jumlahItem = (1);
                    //         invoiceText[i].totalHarga = ((1)*invoiceText[i].totalHargaPerItem);
                    //         break; //Stop this loop, we found it!
                    //      }
                    // }
                    //  $('#jmlOrder'+id).text((1).toString());
                    //  $('#budget'+id).text("Rp "+formatRupiah(((1)*hargaItem).toString()));
                    //  $('#hargaItem'+id).text(((1)*hargaItem).toString());       
                }
            }

            setIsiInvoice(invoiceText);


            setTotalInvoice();

        }

        function setTotalInvoice() {

            let jumlahTotal = 0;

            invoiceText.map((mapping, i) => {
                jumlahTotal += parseInt(mapping.totalHarga);
            });

            $('#totalTagihan').html("Rp " + formatRupiah(jumlahTotal.toString()));
        }

        function emptySearchText() {
            $(".loading").fadeIn();
            $('#searchThisPage').val('');
            loadMenu();
        }

        function runSearchText(str) {
            searchText = str.value;
            let sintaks = ``;
            for (let i = 0; i < 4; i++) {
                sintaks += `<li class="blog-post o-media" style="background:#fff; border-radius:15px; padding:20px;padding-left:5px; height:100px; width:20%; margin:10px; display:inline-table">
                      <div class="o-media__body">
                        
                        <div class="o-vertical-spacing">
                          <span class="skeleton-box" style="width:100%;"></span>
                        </div>
                        <div class="o-vertical-spacing">
                          <span class="skeleton-box" style="width:100%;"></span>
                        </div>
                        <div class="o-vertical-spacing">
                          <span class="skeleton-box" style="width:60%;"></span>
                        </div>
                      </div>
                    </li>`;


            }

            $('.listitems').html(sintaks);

            const save = async () => {
                const posts = await axios.get('<?= api_url(); ?>product/get', {
                    headers: {
                        'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                    }
                }).catch((err) => {



                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Proses Gagal',
                        text: 'Terjadi kesalahan dalam memproses request Anda.',
                        showConfirmButton: true,

                    });
                });

                if (posts.status == 200) {
                    $(".loading").fadeOut();

                    if (posts.data.length > 0) {
                        let sintaks = '';
                        let no = 1;
                        posts.data.map((mapping, i) => {
                            let nm = mapping.nama_produk;

                            if (nm.toLowerCase().includes(searchText.toLowerCase())) {

                                $('#putBtnFilter').html(`<div class="btn btn-sm badge badge-sm badge-secondary ml-4" onclick="loadMenu()" style="float:right;display:block;padding:13px;">Filter berdasar kata kunci ${searchText}<i class="fa fa-times ml-3"></i></div>`);

                                sintaks += `
                         <div class="col-md-3 col-lg-3 col-sm-2 col-3 text-center itemnya" onclick="addToCart('${mapping.id_product}')" style="padding:7px;">
                            <div class="card-body" style="padding:0px;margin:0px;background:#fff; border-radius:10px;padding-bottom:10px;">
                            <img src="https://png.pngtree.com/png-vector/20190726/ourlarge/pngtree-food-icon-design-vector-png-image_1608882.jpg" width="70%" style="display:block;margin:auto;"/>
                            <p style="font-size:.8em;font-weight:bold;color:#000;line-height:1em;padding-left:.2em;padding-right:.2em;">${mapping.nama_produk}</p>
                            <p style="font-size:.7em;color:#636363;margin-top:-17px; margin-bottom:10px;">${"Rp "+formatRupiah(mapping.harga_produk)}</p>
                            </div>
                        </div>
                         
                        `;

                            }

                        });

                        $('.listitems').html(sintaks);

                    }

                } else {
                    $(".loading").fadeOut();




                }


            }

            save();
        }


        function deleteItemInvoice(str) {
            audio.play();
            invoiceText = invoiceText.filter(function(obj) {
                return obj.id !== str;
            });

            let htmlx = '';
            invoiceText.map((mapping, i) => {
                htmlx += `<div class="row mt-3" style="width:100%; margin:0px; padding:0px; height:70px;" id="item${mapping.id}">
                        <div class="col-md-3 col-lg-3 col-3 text-left" style="border-right:1px solid #f2f2f2;">
                            <div class="row">
                                <div class="col-md-5 col-lg-5 col-5" >
                                    <i class="fa fa-angle-up mb-2 indec" onclick="setJumlah('tambah','${mapping.id}')" style="display:block;"></i>
                                    <i class="fa fa-angle-down indec" onclick="setJumlah('kurang','${mapping.id}')"></i>
                                </div>
                                <div class="col-md-7 col-lg-7 col-7 text-left" style="padding-top:10px;">
                                    <font id="jmlOrder${mapping.id}" style="font-weight:normal; font-size:1em;">${mapping.jumlahItem}</font>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-5 col-lg-5 col-5" style="font-size:.8em; line-height:1em;">
                            ${mapping.namaItem}
                            <br/>
                            <small class="mt-2" style="display:block;">@ ${"Rp "+formatRupiah(mapping.totalHargaPerItem)}</small>
                            
                        </div>
                        <div class="col-md-4 col-lg-4 col-4" style="font-size:.77em;">
                            <font id="budget${mapping.id}">${"Rp "+formatRupiah(mapping.totalHarga.toString())}</font>
                            <input type="hidden" value="${mapping.totalHarga}" id="hargaItem${mapping.id}">
                            <i class="fa fa-trash text-danger" onclick="deleteItemInvoice('${mapping.id}')" style="position:absolute; top:10px; right:5px;"></i>
                        
                        </div>
                        
                        
                    </div>`;
            })
            $('#invoiceSide').html(htmlx);

            setTotalInvoice();

        }

        $("#errmsgs").fadeOut();

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

    <script type="text/javascript">
        Array.prototype.remove = function() {
            var what, a = arguments,
                L = a.length,
                ax;
            while (L && this.length) {
                what = a[--L];
                while ((ax = this.indexOf(what)) !== -1) {
                    this.splice(ax, 1);
                }
            }
            return this;
        };

        var URL = window.location.pathname.split("/").pop();

        $(function() {

            $('#sidebar li').each(function() {
                var $this = $(this);
                var valLink = $this.text().replace(/\s/g, '').toLowerCase();



                // if the current path is like this link, make it active
                if (valLink == 'index') {

                    $this.addClass('active');

                } else if (valLink == URL && valLink != 'index') {

                    $this.addClass('active');

                }
            })
        })
    </script>



    <script type="text/javascript">
        ! function(a) {
            a.idleTimer = function(b, c) {
                var d;
                "object" == typeof b ? (d = b, b = null) : "number" == typeof b && (d = {
                    timeout: b
                }, b = null), c = c || document, d = a.extend({
                    idle: !1,
                    timeout: 3e4,
                    events: "mousemove keydown wheel DOMMouseScroll mousewheel mousedown touchstart touchmove MSPointerDown MSPointerMove"
                }, d);
                var e = a(c),
                    f = e.data("idleTimerObj") || {},
                    g = function(b) {
                        var d = a.data(c, "idleTimerObj") || {};
                        d.idle = !d.idle, d.olddate = +new Date;
                        var e = a.Event((d.idle ? "idle" : "active") + ".idleTimer");
                        a(c).trigger(e, [c, a.extend({}, d), b])
                    },
                    h = function(b) {
                        var d = a.data(c, "idleTimerObj") || {};
                        if (null == d.remaining) {
                            if ("mousemove" === b.type) {
                                if (b.pageX === d.pageX && b.pageY === d.pageY) return;
                                if ("undefined" == typeof b.pageX && "undefined" == typeof b.pageY) return;
                                var e = +new Date - d.olddate;
                                if (200 > e) return
                            }
                            clearTimeout(d.tId), d.idle && g(b), d.lastActive = +new Date, d.pageX = b.pageX, d.pageY = b.pageY, d.tId = setTimeout(g, d.timeout)
                        }
                    },
                    i = function() {
                        var b = a.data(c, "idleTimerObj") || {};
                        b.idle = b.idleBackup, b.olddate = +new Date, b.lastActive = b.olddate, b.remaining = null, clearTimeout(b.tId), b.idle || (b.tId = setTimeout(g, b.timeout))
                    },
                    j = function() {
                        var b = a.data(c, "idleTimerObj") || {};
                        null == b.remaining && (b.remaining = b.timeout - (+new Date - b.olddate), clearTimeout(b.tId))
                    },
                    k = function() {
                        var b = a.data(c, "idleTimerObj") || {};
                        null != b.remaining && (b.idle || (b.tId = setTimeout(g, b.remaining)), b.remaining = null)
                    },
                    l = function() {
                        var b = a.data(c, "idleTimerObj") || {};
                        clearTimeout(b.tId), e.removeData("idleTimerObj"), e.off("._idleTimer")
                    },
                    m = function() {
                        var b = a.data(c, "idleTimerObj") || {};
                        if (b.idle) return 0;
                        if (null != b.remaining) return b.remaining;
                        var d = b.timeout - (+new Date - b.lastActive);
                        return 0 > d && (d = 0), d
                    };
                if (null === b && "undefined" != typeof f.idle) return i(), e;
                if (null === b);
                else {
                    if (null !== b && "undefined" == typeof f.idle) return !1;
                    if ("destroy" === b) return l(), e;
                    if ("pause" === b) return j(), e;
                    if ("resume" === b) return k(), e;
                    if ("reset" === b) return i(), e;
                    if ("getRemainingTime" === b) return m();
                    if ("getElapsedTime" === b) return +new Date - f.olddate;
                    if ("getLastActiveTime" === b) return f.lastActive;
                    if ("isIdle" === b) return f.idle
                }
                return e.on(a.trim((d.events + " ").split(" ").join("._idleTimer ")), function(a) {
                    h(a)
                }), f = a.extend({}, {
                    olddate: +new Date,
                    lastActive: +new Date,
                    idle: d.idle,
                    idleBackup: d.idle,
                    timeout: d.timeout,
                    remaining: null,
                    tId: null,
                    pageX: null,
                    pageY: null
                }), f.idle || (f.tId = setTimeout(g, f.timeout)), a.data(c, "idleTimerObj", f), e
            }, a.fn.idleTimer = function(b) {
                return this[0] ? a.idleTimer(b, this[0]) : this
            }
        }(jQuery);

        (function($) {

            $(document).on("idle.idleTimer", function(event, elem, obj) {
                $(".lockscreen").fadeIn();
            });

            $(document).on("active.idleTimer", function(event, elem, obj, triggerevent) {
                $(".lockscreen").fadeOut();
            });

            $.idleTimer(30000);

        })(jQuery);


        var describeArc, polarToCartesian, setCaptions;

        polarToCartesian = function(centerX, centerY, radius, angleInDegrees) {
            var angleInRadians;
            angleInRadians = (angleInDegrees - 90) * Math.PI / 180.0;
            return {
                x: centerX + radius * Math.cos(angleInRadians),
                y: centerY + radius * Math.sin(angleInRadians)
            };
        };

        describeArc = function(x, y, radius, startAngle, endAngle) {
            var arcSweep, end, start;
            start = polarToCartesian(x, y, radius, endAngle);
            end = polarToCartesian(x, y, radius, startAngle);
            arcSweep = endAngle - startAngle <= 180 ? '0' : '1';
            return ['M', start.x, start.y, 'A', radius, radius, 0, arcSweep, 0, end.x, end.y].join(' ');
        };

        setCaptions = function() {
            var dot, hour, hourArc, minArc, minute, now, pos;
            now = new Date();
            hour = now.getHours() % 12;
            minute = now.getMinutes();
            hourArc = (hour * 60 + minute) / (12 * 60) * 360;
            minArc = minute / 60 * 360;
            $('.clockArc.hour').attr('d', describeArc(500, 240, 150, 0, hourArc));
            $('.clockArc.minute').attr('d', describeArc(500, 240, 170, 0, minArc));
            $('.clockDot.hour').attr('d', describeArc(500, 240, 150, hourArc - 3, hourArc));
            $('.clockDot.minute').attr('d', describeArc(500, 240, 170, minArc - 1, minArc));
            dot = $(".clockDot.hour");
            pos = polarToCartesian(500, 240, 150, hourArc);
            dot.attr("cx", pos.x);
            dot.attr("cy", pos.y);
            dot = $(".clockDot.minute");
            pos = polarToCartesian(500, 240, 170, minArc);
            dot.attr("cx", pos.x);
            dot.attr("cy", pos.y);
            return $('#time').text(moment().format('H:mm'));
        };

        $('#day').text(moment().format('dddd'));

        $('#date').text(moment().format('MMMM D'));

        setCaptions();

        setInterval(function() {
            return setCaptions();
        }, 10 * 1000);

        $(function() {
            TweenMax.staggerFrom(".clockArc", .5, {
                drawSVG: 0,
                ease: Power3.easeOut
            }, 0.3);
            TweenMax.from("#time", 1.0, {
                attr: {
                    y: 350
                },
                opacity: 0,
                ease: Power3.easeOut,
                delay: 0.5
            });
            TweenMax.from(".dayText", 1.0, {
                attr: {
                    y: 310
                },
                opacity: 0,
                delay: 1.0,
                ease: Power3.easeOut
            });
            return TweenMax.from(".dateText", 1.0, {
                attr: {
                    y: 350
                },
                opacity: 0,
                delay: 1.5,
                ease: Power3.easeOut
            });
        });
    </script>

    </body>

    </html>