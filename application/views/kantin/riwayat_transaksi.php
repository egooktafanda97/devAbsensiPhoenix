    <div class="row" style="margin-top:-17px;margin-right:-15px; margin-bottom:-15px;">
        <div class="col-md-7 col-lg-7 col-8 py-3 px-3" style="padding-rigth:0px;">
            <font style="font-size:1.25em;display:block;" class="text-dark">
                <b>Daftar</b> Struk
                <i class="fa fa-search" id="btnOkSearch" onclick="btnOpenSideSearch()" style="float:right;right:20px; top:20px; background:#d4d4d4;color:#fff;border-radius:1000px;padding:10px;width:40px;height:40px;padding-top:10px;" /></i>
            </font>

            <div class="row mt-3 text-left searchSide" style="overflow:hidden;height:0px;">
                <small style="display:block;width:100%;">Pilih metode pencarian</small>
                <input type="radio" class="form-control" name="r1" value="qr_code" id="round1" checked style="outline:none;float:left;;width:10%;text-align:left;" /><label for="round1" style="display:inline-table; margin-top:-5px;">Scan Kartu</label><br />
                <input type="radio" class="form-control" name="r1" value="by_code" id="round2" style="outline:none;float:left;width:10%;margin-left:30px;" /><label for="round2" style="display:inline-table;margin-top:-5px;">Nomor Transaksi</label>
                <input type="text" maxlength="15" id="cardScaners" onchange="runSearching(this)" class="form-control" style="outline:none;color:black;height:25px; border:2px dashed #000;width:100%;" placeholder="Ketuk untuk membuka sesi pencarian" />
            </div>
            <div style="display: flex; justify-content: flex-end; margin-top: 10px;">
                <div class="from-group">
                    <input type="date" name="search-date" class="form-control form-control-sm" style="padding: 5px; margin: 0;" value="<?= date("Y-m-d") ?>">
                </div>
            </div>
            <div class="row liststruk" style="margin-bottom:30px;">
                <?php
                for ($i = 0; $i < 4; $i++) { ?>
                    <li class="blog-post o-media" style="background:#fff; border-radius:15px; padding:20px;padding-left:5px; height:100px; width:100%; margin:10px; display:inline-table">
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
                <!--<b>Order</b> Menu-->
                <!--<small style="display:block; font-size:.67em;">Kode Transaksi : <b>4049281</b></small>-->
            </font>

            <div class="col-md-12 col-lg-12 col-12" id="invoiceDetailSide" style="margin:0px; padding:0px;overflow-x:hidden;">
                <div class="text-center" style="width:100%;margin-top:60px;">
                    <img src="https://cdn.dribbble.com/users/282923/screenshots/11050247/paymentsbilling.gif" width="200" height="150" />
                    <p>Tidak ada detail invoice.</p>
                </div>
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
    <script src="https://momentjs.com/downloads/moment-with-locales.js"></script>
    <!-- ------------ -->

    <script type="text/javascript">
        moment.locale('id');
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        // today = mm + '/' + dd + '/' + yyyy;
        today = yyyy + '-' + mm + '-' + dd;

        function btnOpenSideSearch() {
            if ($('.searchSide').height() == 0) {
                $('#btnOkSearch').attr('class', 'fa fa-times text-danger');
                $('.searchSide').attr('style', 'overflow:hidden;height:130px; padding-left:20px; padding-right:20px; padding-top:20px; background:#cfcfcf;border-radius:10px;');
            } else {
                $('.searchSide').attr('style', 'overflow:hidden;height:0px;');
                $('#btnOkSearch').attr('class', 'fa fa-search');
                loadMenu();
                $('#cardScaners').val('');
            }
        }

        var audio = document.getElementById("audio");

        $('.navbar-expand-lg').attr('style', 'display:none');

        let invoiceText = [];
        let qr_code = '';


        $(".loading").hide();

        function logoutBtn() {
            sessionStorage.removeItem('_token');
            window.location.href = '<?= base_url("Login/logoutUser"); ?>';
        }

        $("[name='search-date']").change(function() {
            loadMenu($(this).val());
        })

        function loadMenu(search_date = moment().format('YYYY-MM-DD')) {
            const save = async () => {
                const posts = await axios.get('<?= api_url(); ?>kantin/get-purchase/?tanggal=' + search_date, {
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



                    $('#putBtnFilter').html('');
                    let oldarrs = [];

                    let sintaks = '<font style="font-size:.7em; margin-left:10px;margin-top:25px;"></font>';
                    let no = 1;
                    posts.data.troli.map((mapping, i) => {
                        // console.log(mapping.created_at);
                        // return false;
                        if (!oldarrs.includes(mapping.no_faktur)) {

                            sintaks += `
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-12 text-left itemnya" onclick="addToCart('${mapping.no_faktur}')" style="padding:7px;">
                                        <div class="card-body" style="padding:20px;margin:0px;background:#fff; border-radius:10px;padding-bottom:10px;">
                                        <p style="font-size:.8em;font-weight:bold;color:#000;line-height:1em;padding-left:.2em;padding-right:.2em;">${mapping.nama_user}</p>
                                        <p style="font-size:.8em;font-weight:bold;color:#000;line-height:1em;padding-left:.2em;padding-right:.2em;">${mapping.no_faktur}</p>
                                        <p style="font-size:.7em;color:#636363;margin-top:-17px; margin-bottom:10px;">${moment(mapping.created_at).format('Do MMMM YYYY, H:mm:ss') + ' WIB'}</p>
                                        </div>
                                    </div>
                                    
                                    `;
                            oldarrs.push(mapping.no_faktur);
                        }
                    });
                    $('.liststruk').html(sintaks);
                } else {
                    $(".loading").fadeOut();
                }
            }


            save();

        }

        loadMenu();

        $('input[type=radio][name=r1]').change(function() {

            if (this.value == 'qr_code') {
                $('#cardScaners').attr('maxlength', "10");
            } else if (this.value == 'by_code') {
                $('#cardScaners').attr('maxlength', "25");
            }
        });


        function runSearching(str) {

            let metodeselected = document.querySelector('input[name="r1"]:checked').value;
            let method = '';
            if (str.value.length >= 10) {

                if (metodeselected == 'qr_code') {
                    method = 'qr';

                } else {
                    method = 'faktur';

                }

                qr_code = str.value;

                const save = async (str) => {
                    const posts = await axios.get('<?= api_url(); ?>kantin/get-purchase?' + method + '=' + str.value, {
                        headers: {
                            'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                        }
                    }).catch((err) => {

                        $(".loading").fadeOut();


                    });

                    if (posts.status == 200) {
                        $(".loading").fadeOut();


                        // $('#saldoTerkiniID').text("Rp "+formatRupiah(posts.data.response.result.saldo));

                        if (posts.data.troli.length > 0) {

                            $('#putBtnFilter').html('');
                            let oldarrs = [];

                            let sintaks = '<font style="font-size:.7em; margin-left:10px;margin-top:25px;"></font>';
                            let no = 1;
                            posts.data.troli.map((mapping, i) => {
                                // console.log(mapping.created_at);
                                // return false;


                                if (!oldarrs.includes(mapping.no_faktur)) {

                                    sintaks += `
                                
                                <div class="col-md-12 col-lg-12 col-sm-12 col-12 text-left itemnya" onclick="addToCart('${mapping.no_faktur}')" style="padding:7px;">
                                    <div class="card-body" style="padding:20px;margin:0px;background:#fff; border-radius:10px;padding-bottom:10px;">
                                    <p style="font-size:.8em;font-weight:bold;color:#000;line-height:1em;padding-left:.2em;padding-right:.2em;">${mapping.no_faktur}</p>
                                    <p style="font-size:.7em;color:#636363;margin-top:-17px; margin-bottom:10px;">${mapping.created_at}</p>
                                    </div>
                                </div>
                                
                                `;

                                    oldarrs.push(mapping.no_faktur);



                                }


                            });


                            $('.liststruk').html(sintaks);

                        }

                    } else {
                        $(".loading").fadeOut();

                    }
                }

                save(str);

            }
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
                const posts = await axios.get('<?= api_url(); ?>kantin/get-purchase?faktur=' + str, {
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

                    let jmlTot = 0;
                    let htmlx = ``;
                    let tglCreated = '';
                    htmlx += `
                            <div class="" style="color:#6791c7;font-family: 'Roboto Mono', monospace!important;border:1px solid #6791c7;padding:10px;">
                                <div class="col-md-12 col-lg-12 col-12 text-center mb-3" style="border-bottom:1px dashed #6791c7;padding-bottom:20px;">
                                    <font style="font-size:.7em;display:block;;">${str}</font>
                                    <font style="font-size:1em;display:block;">${(posts.data.kantin.nama_kantin).toUpperCase()}</font>
                                    <font style="font-size:.56em;display:block;">${(posts.data.kantin.email)?(posts.data.kantin.email).toLowerCase():'-'}</font>
                                </div>
                                <div class="col-md-12 col-lg-12 col-12 text-left mb-3" style="border-bottom:1px dashed #6791c7;padding-bottom:20px;">
                                    <font style="font-size:.7em;display:block;">Nama Pelanggan : ${(posts.data.pelanggan.nama_user).toUpperCase()}</font>
                                </div>
                                
                                <div class="row mb-2" style="font-weight:bold;">
                                    <div class="col-md-6 col-lg-6 col-6 text-left" style="font-size:.7em;">
                                        Produk
                                    </div>
                                    
                                    <div class="col-md-2 col-lg-2 col-2 text-left" style="font-size:.7em;">
                                        Qty
                                    </div>
                                    
                                    <div class="col-md-4 col-lg-4 col-4 text-right" style="font-size:.7em;">
                                        Total
                                    </div>
                                </div>
                            
                        `;


                    posts.data.troli.map((mapping, i) => {
                        tglCreated = moment(mapping.created_at).format('Do MMMM YYYY, H:mm:ss') + ' WIB';
                        jmlTot += (parseInt(mapping.jumlah_product) * parseInt(mapping.harga_produk));

                        htmlx += `
                                    <div class="row mb-2" style="">
                                        <div class="col-md-6 col-lg-6 col-6 text-left" style="font-size:.7em;">
                                            ${mapping.nama_produk}
                                        </div>
                                        
                                        <div class="col-md-2 col-lg-2 col-2 text-left" style="font-size:.7em;">
                                            ${mapping.jumlah_product}
                                        </div>
                                        
                                        <div class="col-md-4 col-lg-4 col-4 text-right" style="font-size:.7em;">
                                            ${formatRupiah((parseInt(mapping.jumlah_product)*parseInt(mapping.harga_produk)).toString())}
                                        </div>
                                    </div>
                                `;
                    });

                    htmlx += `
                                <div class="col-md-12 col-lg-12 col-12 text-center mb-3" style="border-top:1px dashed #6791c7;margin-top:20px;">
                                    <div class="row mt-2" style="font-weight:bold;">
                                        <div class="col-md-6 col-lg-6 col-6 text-left" style="font-size:.7em; padding:0px;">
                                            Total tagihan
                                        </div>
                                        
                                        <div class="col-md-6 col-lg-6 col-6 text-right" style="font-size:.7em; padding:0px;">
                                            ${"Rp "+formatRupiah(jmlTot.toString())}
                                        </div>
                                    </div>
                                    <div class="row mt-2" style="font-weight:bold;">
                                        <div class="col-md-6 col-lg-6 col-6 text-left" style="font-size:.7em; padding:0px;">
                                            Pemotongan saldo
                                        </div>
                                        
                                        <div class="col-md-6 col-lg-6 col-6 text-right" style="font-size:.7em; padding:0px;">
                                            ${"Rp "+formatRupiah(jmlTot.toString())}
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12 col-lg-12 col-12 text-center mb-3" style="border-top:1px dashed #6791c7;margin-top:20px;">
                                    <div class="row mt-2" style="font-weight:normal;">
                                        <div class="col-md-12 col-lg-12 col-12 text-center" style="font-size:.7em;">
                                            ${tglCreated}
                                            <font style="display:block">OnCard & KH. Ahmad Dahlan</font>
                                            <font style="display:block">${posts.data.kantin.no_telp}</font>
                                        </div>
                                    </div>
                                </div>
                    
                            </div>`;

                    $('#invoiceDetailSide').html(htmlx);


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
            $('#invoiceDetailSide').html(htmlx);
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

            $('.liststruk').html(sintaks);

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

                        $('.liststruk').html(sintaks);

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
            $('#invoiceDetailSide').html(htmlx);

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
    <!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:25 GMT -->

    </html>