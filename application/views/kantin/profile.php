<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Display:wght@500&family=Roboto&display=swap');

    .continer-items-top {
        padding-top: 115px;
        padding-left: 30px;
        display: flex;
        justify-content: space-between;
    }

    .typografy {
        font-family: 'Noto Sans Display', sans-serif;
        font-family: 'Roboto', sans-serif;
    }

    /* #content {
        margin-left: 115px !important;
    } */

    .card-tabs {
        width: 100%;
        padding: 10px;
        background-color: #fff;
        min-height: 50px;
        margin-bottom: 10px;
        border-radius: 5px;
    }

    .tabs-btn {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    }

    .tabs-btn:hover {
        background-color: #ddd;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    }

    .tabs-btn:focus {
        background-color: #ddd;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    }

    .tabs-btn:active {
        background-color: #ddd;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    }


    /* - */
    .btn-costums {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    }

    .btn-costums:hover {
        background-color: #d6d5d5;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    }


    .btn-costums:focus {
        background-color: #d6d5d5;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    }

    .btn-costums:active {
        background-color: #d6d5d5;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    }



    .card-tab-content {
        box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;
        padding: 10px;
        border-radius: 5px;
        background-color: #fff;
        max-height: 350px;
        overflow-y: scroll;
        overflow-x: hidden;
    }

    .saldo {
        position: relative;
        top: -50px;
        margin-bottom: -50px;
    }

    .form-control {
        padding: 8px !important;
        border: 1px solid gray !important;
    }

    .modal-lg {
        max-width: 80% !important;
    }

    label {
        color: #000 !important;
    }
</style>
<div class="row" style="margin-top:-17px;margin-right:-15px; margin-bottom:-15px; box-sizing: border-box; position: relative; top: -100px; z-index: 0;">
    <div class="col-12">

        <div class="row">
            <div id="top-cover" class="col-md-12 col-lg-12 col-12 py-3 px-3">

            </div>
            <div class="col-12">
                <div class="row container-headers">
                    <div class="col-sm-3">
                        <div class='avatar-upload'>
                            <div class='avatar-edit'>
                                <input type='file' id="imageUpload" accept='.png, .jpg, .jpeg' />
                                <label for='imageUpload'></label>
                            </div>
                            <div style="display: flex; align-items:center; margin-top: 5px;">
                                <div class='avatar-preview'>
                                    <div id='imagePreview'  style="background-image: url('<?= base_url('engine/Assets/img/user/' . $usData["foto"]) ?>');"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 continer-items-top">
                        <div>
                            <span class="typografy" style="font-size: 1.3em; color: #000;"><?= $usData["nama_kantin"] ?></span>
                            <br />
                            <div style="padding-left: 10px;">
                                <span class="typografy" style="font-size: 1em;"><?= $usData["nama_pemilik"] ?></span>

                                <div style="padding-left: 3px;">
                                    <div>
                                        <i class="fa fa-phone"></i> <?= $usData["no_telp"] ?>
                                    </div>
                                    <div class="mb-2">
                                        <i class="fa fa-address-card "></i> <?= $usData["alamat_pemilik"] ?>
                                    </div>
                                    <p><?= $usData["deskripsi_kantin"] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <button class="btn btn-costums btn-sm text-success" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <i class="fa fa-edit"></i> Edit Profile
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card-tabs saldo">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; padding-bottom: 10px; border-bottom: 1px solid #ddd;">
                                <span class="typografy" style="font-size: 1em;">Saldo</span>
                                <button class="btn btn-success" style="font-size: .8em; padding: 2px;"><i class="fa fa-plus"></i> tambah saldo</button>
                            </div>
                            <div class="typografy typografy" style="font-size: 1.5em; color: #000; "><?= rupiah($usData["saldo"]) ?></div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="card-tabs">
                            <button class="btn tabs-btn tab" data-link="d1">Product</button>
                            <button class="btn tabs-btn tab" data-link="d2">Statistic</button>
                        </div>
                        <div class="card-tab-content">
                            <div class="link" id="d1">
                                <div class="row">
                                    <?php foreach ($product as $value) { ?>
                                        <div class="col-md-3 col-lg-3 col-sm-2 col-3 text-center itemnya" style="padding:7px;">
                                            <div class="card-body" style="padding:0px;margin:0px;background:#fff; border-radius:10px;padding-bottom:10px;">
                                                <img src="https://png.pngtree.com/png-vector/20190726/ourlarge/pngtree-food-icon-design-vector-png-image_1608882.jpg" width="70%" style="display:block;margin:auto;" />
                                                <p style="font-size:.8em;font-weight:bold;color:#000;line-height:1em;padding-left:.2em;padding-right:.2em;"><?= $value['nama_produk'] ?></p>
                                                <p style="font-size:.7em;color:#636363;margin-top:-17px; margin-bottom:10px;"><?= rupiah($value['harga_produk']) ?></p>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="link" id="d2">
                                <canvas id="myChart" width="100%" height="50px"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel" style="color: gray;">Cropper</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="img-container">
                    <img id="image" src="" alt="Picture">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" data-id="<?= $usData['user_id'] ?>" id="SavesImage" class="btn btn-secondary" data-dismiss="modal">Simpan</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <strong>Edit Profile</strong>
                </div>
                <div class="card-body">
                    <form id="hndelEdit">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" value="<?= $usData['username'] ?>" class="form-control form-control-sm" placeholder="username">
                                </div>
                                <div class="form-group">
                                    <label>Pin</label>
                                    <input type="text" name="pin" value="<?= $usData['pin'] ?>" maxlength="4" class="form-control form-control-sm" placeholder="pin">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control form-control-sm" placeholder="password">
                                </div>
                                <div class="form-group">
                                    <label>Nama Kantin</label>
                                    <input type="text" name="nama_kantin" value="<?= $usData['nama_kantin'] ?>" class="form-control form-control-sm" placeholder="nama kantin">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Pemilik</label>
                                    <input type="text" value="<?= $usData['nama_pemilik'] ?>" name="nama_pemilik" class="form-control form-control-sm" placeholder="nama pemilik">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input type="text" name="no_telp" value="<?= $usData['no_telp'] ?>" class="form-control form-control-sm" placeholder="nomor telepon">
                                </div>
                                <div class="form-group">
                                    <label>Alamat Lengkap</label>
                                    <input type="text" value="<?= $usData['alamat_pemilik'] ?>" name="alamat_pemilik" class="form-control form-control-sm" placeholder="alamat lengkap">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi Kantin</label>
                                    <textarea name="deskripsi_kantin" class="form-control form-control-sm" rows="3" placeholder="deskripsi"><?= $usData['deskripsi_kantin'] ?></textarea>
                                </div>
                                <div class="form-group mt-3 text-right">
                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-success btn-sm ml-2">Edit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/popper.min.js"></script>
<script>
    $(".loading").fadeOut();
    window.base_url = "<?= site_url('engine/') ?>"
</script>

<!-- tambahan ego -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script src="https://www.jqueryscript.net/demo/Bootstrap-4-Dropdown-Select-Plugin-jQuery/dist/js/bootstrap-select.js"></script>

<!-- ============================= cek login =========================== -->
<script src="<?= base_url('assets/javascript/scripts.js') ?>"></script>
<!-- =================================================================== -->


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

<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/0.8.1/cropper.min.js"></script>
<script src="<?= base_url('assets/javascript/apps-bable.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
<script>
    $(".link").hide();
    $("#d1").show();
    $(".tab").click(function() {
        const link = $(this).data('link');
        $(".link").hide();
        $("#" + link).show();
    })

    function logoutBtn() {
        sessionStorage.removeItem('_token');
        window.location.href = '<?= base_url("Login/logoutUser"); ?>';
    }
</script>
<script>
    var ctx = document.getElementById('myChart');
    var ctx = document.getElementById('myChart').getContext('2d');
    var ctx = $('#myChart');
    var ctx = 'myChart';

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    $("#hndelEdit").on('submit', function(ev) {
        ev.preventDefault();
        const form_data = new FormData(ev.target);

        const hndelEdits = async (form_data) => {
            const put = await axios.post("<?= base_url('engine/api/kantin/update-kantin') ?>", form_data, {
                headers: {
                    'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                }
            }).catch((err) => {
                swal({
                    title: "ma'af!",
                    text: "sepertinya data tidak valid",
                    icon: "error",
                    button: "oke",
                })
            });
            if (put != undefined) {
                if (put.status == 200) {

                    swal({
                        title: "Good job!",
                        text: "You clicked the button!",
                        icon: "success",
                        button: "oke",
                    }).then((value) => {
                        window.location.reload();
                    });

                }
            }
        }
        hndelEdits(form_data);
    })
</script>

<script type="text/javascript">
        
        
        var URL=window.location.pathname.split("/").pop();
        
        $(function(){
            
            $('#sidebar li').each(function(){
                var $this = $(this);
                var valLink = $this.text().replace(/\s/g,'').toLowerCase();
                
                
                
                // if the current path is like this link, make it active
                if(valLink==URL){
                    
                    $this.addClass('active');
                    
                }
            })
        })
    </script>
</body>

</html>