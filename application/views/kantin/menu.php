    <div class="row">
        
        <div class="col-md-5 col-lg-3 col-xl-4 col-sm-4 col-12">
            <div class="row px-3 mt-2">
                <strong style="font-size:1.6em;">Item</strong>
            </div>
             <div class="accordion">
              <div class="accordion-item">
                <button class="accordion-item__button" style="background-color:#fff; border:1px solid #000; color : #000">Klasifikasi</button>
                <div class="accordion-item__content">
                  <form id="klas" style="padding-left:10px; padding-right:10px;">
                      <div class="form-group mt-1">
                          <label for='klastambah' style="font-size:.7em;">Nama klasifikasi</label>
                          <input type="text" id="klastambah" class="form-control" placeholder="cth : makanan, minuman, jus" style="padding:5px; padding-left:5%;border:1px solid #000; border-radius:3px;" required>
                      </div>
                      <div class="form-group mt-2 sel">
                          <div class="row">
                              <div class="col-lg-6 col-md-6 col-6">
                                  
                                  <button type="button" class="btn btn-sm btn-outline-secondary btnIcon" style="font-family:Arial;width:100%;border:1px dashed #000" data-toggle="modal" data-target="#chooseIcon">Icon</button>
                              </div>
                              <div class="col-lg-6 col-md-6 col-6">
                                  <button type="button" class="btn btn-sm btn-outline-secondary btnWarna" style="font-family:Arial;width:100%;border:1px dashed #000" data-toggle="modal" data-target="#chooseColor">Warna</button>
                              </div>
                              <div class="col-lg-12 col-md-12 col-12 mt-3">
                                  <button type="button" id="btnSubmitForm" class="btn btn-sm btn-success" style="font-family:Arial;width:100%;">Tambah</button>
                              </div>
                          </div>
                      </div>
                  </form>
                  
                  <hr/>
                  
                  <div id="putKlasHere">
                      <div class="ring-1" style="margin-top:50px; margin-bottom:100px;"></div>
                  </div>
                  
                </div>
              </div>
              <div class="accordion-item " id="okokok">
                <button class="accordion-item__button " id="btnAddItem">Tambah Menu</button>
                <div class="accordion-item__content " id="contentMenuDiv">
                
                  <form id="product" style="padding-left:10px; padding-right:10px;">
                      <div class="form-group mt-1">
                          <label for='prodtambah' style="font-size:.7em;">Nama Item</label>
                          <input type="text" id="prodtambah" class="form-control" placeholder="cth : Mie rebus, Kopi chagonti, ..." style="padding:5px; padding-left:5%;border:1px solid #000; border-radius:3px;" required>
                      </div>
                      <div class="form-group mt-1">
                          <label for='proddesc' style="font-size:.7em;">Deskripsi item</label>
                          <input type="text" id="proddesc" class="form-control" placeholder="Kosongkan bila tidak ada deskripsi" style="padding:5px; padding-left:5%;border:1px solid #000; border-radius:3px;">
                      </div>
                      <div class="form-group mt-2 sel">
                          
                                  <label for='openPilihKlas' style="font-size:.7em;font-family:Montserrat,'sans-serif';">Klasifikasi Item</label>
                                  <button type="button" id="openPilihKlas" class="btn btn-sm btn-outline-secondary btnIcon" style="font-family:Arial;width:100%;border:1px dashed #000" data-toggle="modal" data-target="#chooseClass">Pilih Klasifikasi</button>
                          
                      </div>
                      <div class="form-group mt-2 sel">
                          <div class="row">
                              <div class="col-lg-6 col-md-6 col-6">
                                  
                                  <div class="form-group">
                                      <label for='prodharga' style="font-size:.7em;font-family:Montserrat,'sans-serif';">Harga (Rp)</label>
                                      <input type="text" id="prodharga" class="form-control" placeholder="0" style="padding:5px; padding-left:5%;border:1px solid #000; border-radius:3px;" required>
                                  </div>
                                  
                              </div>
                              <div class="col-lg-6 col-md-6 col-6">
                                  <div class="form-group">
                                      <label for='prodsatuan' style="font-size:.7em;font-family:Montserrat,'sans-serif';">Satuan</label>
                                      <select class="form-control" id="prodsatuan" required style="padding:9px; border-radius:3px; border:1px solid #000;font-family:Montserrat,'sans-serif'; font-size:.8em;">
                                          <option value="">Pilih satuan</option>
                                          <option value="Bungkus">Bungkus</option>
                                          <option value="Kg">Kg</option>
                                          <option value="Gram">Gram</option>
                                          <option value="Buah">Buah</option>
                                          <option value="Butir">Butir</option>
                                          <option value="Ekor">Ekor</option>
                                          <option value="Helai">Helai</option>
                                          <option value="Lembar">Lembar</option>
                                      </select>
                                  </div>
                                  
                              </div>
                              <div class="col-lg-12 col-md-12 col-12">
                                  <div class="form-group ">
                                      <label for='prodstock' style="font-size:.7em;font-family:Montserrat,'sans-serif';">Stok</label>
                                      <input type="text" id="prodstock" class="form-control" placeholder="0" style="padding:5px; padding-left:5%;border:1px solid #000; border-radius:3px;" value="0" required>
                                  </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-12 mt-3">
                                  <button type="button" id="btnAddProd" class="btn btn-sm btn-success" style="font-family:Arial;width:100%;">Tambah</button>
                              </div>
                          </div>
                      </div>
                      
                  </form>
                  
                  <!--<div id="contentCreateProduct">-->
                  <!--    <div class="spinner-box">-->
                  <!--        <div class="circle-border">-->
                  <!--          <div class="circle-core"></div>-->
                  <!--        </div>  -->
                  <!--    </div>-->
                  <!--</div>-->
                  
                  
                </div>
              </div>
             
            </div>
        </div>
        
        <div class="col-md-7 col-lg-9 col-xl-8 col-sm-8 col-12 ">
            <div class="row px-3 mt-2" style="width:100%;">
                <strong style="font-size:1.6em;">Menu</strong>
                <div id="putBtnFilter"></div>
            </div>
            <div class="row" id="putContentMenuHere">
              <?php
              for($i=0;$i<3;$i++){?>
                <div class="col-md-12 col-lg-4 col-4">
                  <ul class="o-vertical-spacing o-vertical-spacing--l mt-3" style="width:100%; background:#f2f2f2; border-radius:10px;padding:15px;padding-top:30px;">
                    <li class="blog-post o-media">
                      
                      <div class="o-media__body">
                        <div class="blog-post__meta">
                            <span class="skeleton-box" style="width:70px;"></span>
                          </div>
                        <div class="o-vertical-spacing">
                          <h3 class="blog-post__headline">
                            <span class="skeleton-box" style="width:55%;"></span>
                          </h3>
                          
                          <p>
                            <span class="skeleton-box" style="width:80%;"></span>
                            
                            
                            <div class="row">
                              <div class="col-md-4 col-4">
                                <div class="o-media__figure">
                                  <span class="skeleton-box" style="width:30px;height:30px;"></span>
                                </div>
                              </div>
                              <div class="col-md-4 col-4">
                               <span class="skeleton-box" style="width:50%;"></span>
                              </div>
                              <div class="col-md-4 col-4">
                               <span class="skeleton-box" style="width:50%;"></span>
                              </div>
                            </div>
                            
                          </p>
                          
                        </div>
                      </div>
                    </li>
                    
                    
                  </ul>
                </div>
              <?php } ?>
                  
              

            </div>
        </div>
        
        
    </div>
    
    <div class="modal fade" id="chooseClass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"  style="width:400px!important;border:none;border-radius:0px;" role="document">
            <div class="modal-content" style="background:#fff;border:none!important;border-radius:0px;">
                <div class="modal-header" style="color:#000; border-bottom:none">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:#000; border-bottom:none">Klasifikasi Item </h5>
              
                </div>
                <div class="modal-body chooseicon text-center" style="color:#000; border-bottom:none">
                    <p>Pilih klasifikasi untuk item tersebut.</p>
                    
                    <div class="row" id="contentKlasHere">
                        
                    </div>
                    
                    </div>
                    
                <div class="modal-footer" style="border-top:none">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-12 text-center">
                            <!--<button class="btn btn-success" onclick="continueActivity()">Lanjutkan Aktifitas</button>   -->
                            <button class="btn btn-danger" type="button" data-dismiss="modal" ><i class="fa fa-times"></i></button>
                                  
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="chooseIcon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"  style="width:400px!important;border:none;border-radius:0px;" role="document">
            <div class="modal-content" style="background:#fff;border:none!important;border-radius:0px;">
                <div class="modal-header" style="color:#000; border-bottom:none">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:#000; border-bottom:none">Icon </h5>
              
                </div>
                <div class="modal-body chooseicon text-center" style="color:#000; border-bottom:none">
                    <p>Pilih icon yang sesuai dengan klasifikasi tersebut</p>
                    <img onclick="getIcon('001-medal')" src="<?=base_url();?>assets/png/menu/001-medal.png">
                    <img onclick="getIcon('002-fork')" src="<?=base_url();?>assets/png/menu/002-fork.png">
                    <img onclick="getIcon('003-burger')" src="<?=base_url();?>assets/png/menu/003-burger.png">
                    <img onclick="getIcon('004-menu')" src="<?=base_url();?>assets/png/menu/004-menu.png">
                    <img onclick="getIcon('005-fried-potatoes')" src="<?=base_url();?>assets/png/menu/005-fried-potatoes.png">
                    <img onclick="getIcon('006-chicken-leg')" src="<?=base_url();?>assets/png/menu/006-chicken-leg.png">
                    <img onclick="getIcon('007-noodles')" src="<?=base_url();?>assets/png/menu/007-noodles.png">
                    <img onclick="getIcon('008-fried-egg')" src="<?=base_url();?>assets/png/menu/008-fried-egg.png">
                    <img onclick="getIcon('009-cola')" src="<?=base_url();?>assets/png/menu/009-cola.png">
                    <img onclick="getIcon('010-meat')" src="<?=base_url();?>assets/png/menu/010-meat.png">
                    <img onclick="getIcon('011-coffee-cup')" src="<?=base_url();?>assets/png/menu/011-coffee-cup.png">
                    <img onclick="getIcon('012-cheese')" src="<?=base_url();?>assets/png/menu/012-cheese.png">
                    <img onclick="getIcon('013-kebab')" src="<?=base_url();?>assets/png/menu/013-kebab.png">
                    <img onclick="getIcon('014-soda')" src="<?=base_url();?>assets/png/menu/014-soda.png">
                    <img onclick="getIcon('015-pitcher')" src="<?=base_url();?>assets/png/menu/015-pitcher.png">
                    <img onclick="getIcon('016-coffee')" src="<?=base_url();?>assets/png/menu/016-coffee.png">
                    <img onclick="getIcon('017-waffle')" src="<?=base_url();?>assets/png/menu/017-waffle.png">
                    <img onclick="getIcon('018-croissant')" src="<?=base_url();?>assets/png/menu/018-croissant.png">
                    <img onclick="getIcon('019-milkshake')" src="<?=base_url();?>assets/png/menu/019-milkshake.png">
                    <img onclick="getIcon('020-ice-cream')" src="<?=base_url();?>assets/png/menu/020-ice-cream.png">
                    
                    </div>
                    
                <div class="modal-footer" style="border-top:none">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-12 text-center">
                            <!--<button class="btn btn-success" onclick="continueActivity()">Lanjutkan Aktifitas</button>   -->
                            <button class="btn btn-success" type="button" data-dismiss="modal" ><i class="fa fa-check"></i></button>
                                  
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="chooseColor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"  style="width:400px!important;border:none;border-radius:0px;" role="document">
            <div class="modal-content" style="background:#fff;border:none!important;border-radius:0px;">
                <div class="modal-header" style="color:#000; border-bottom:none">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:#000; border-bottom:none">Color </h5>
              
                </div>
                <div class="modal-body chooseicon text-center" style="color:#000; border-bottom:none">
                    <p>Pilih color yang sesuai dengan klasifikasi tersebut</p>
                    
                    <div class="color-picker-panel">
                      <div class="panel-row">
                          <button id="add-swatch" class="button add-swatch" style="margin-bottom:15px;">
                          <span id="color-indicator" class="color-indicator"></span><span>Klik dahulu untuk menambah warna</span>
                        </button>
                        <!--<h4 class="panel-header" style="color:#fff;">Warna dipilih</h4>-->
                        <div id="user-swatches" class="swatches custom-swatches">
                        </div>
                        
                      </div>
                        
                      <div class="panel-row">
                        <div class="swatches default-swatches"></div>
                        <!--<button class="button eyedropper">Get Color</button>-->
                      </div>
                      <div class="panel-row">
                        <div class="spectrum-map">
                          <button id="spectrum-cursor" class="color-cursor"></button>
                          <canvas id="spectrum-canvas"></canvas>
                        </div>
                        <div class="hue-map">
                          <button id="hue-cursor" class="color-cursor"></button>
                          <canvas id="hue-canvas"></canvas>
                        </div>
                      </div>
                      <div class="panel-row">
                        <div id="rgb-fields" class="field-group value-fields rgb-fields active">
                          <div class="field-group">
                            <label for="" class="field-label">R:</label>
                            <input type="number" max="255" min="0" id="red" class="field-input rgb-input"/>
                          </div>
                          <div class="field-group">
                            <label for="" class="field-label">G:</label>
                            <input type="number" max="255" min="0" id="green" class="field-input rgb-input"/>
                          </div>
                          <div class="field-group">
                            <label for="" class="field-label">B:</label>
                            <input type="number" max="255" min="0" id="blue" class="field-input rgb-input"/>
                          </div>
                        </div>
                        <div id="hex-field" class="field-group value-fields hex-field">
                          <label for="" class="field-label">Hex:</label>
                          <input type="text" id="hex" class="field-input"/>
                        </div>
                        <button id="mode-toggle" class="button mode-toggle">Mode</button>
                      </div>
                      
                    </div>

                    
                </div>
                    
                <div class="modal-footer" style="border-top:none">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-12 text-center">
                            <!--<button class="btn btn-success" onclick="continueActivity()">Lanjutkan Aktifitas</button>   -->
                            <button class="btn btn-success" id="okWarna" type="button" data-dismiss="modal" ><i class="fa fa-check"></i></button>
                                  
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
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
    <script src="<?=base_url();?>oncard_template/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url();?>oncard_template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url();?>oncard_template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url();?>oncard_template/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url();?>oncard_template/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url();?>oncard_template/js/demo/chart-area-demo.js"></script>
    <script src="<?=base_url();?>oncard_template/js/demo/chart-pie-demo.js"></script>
    <script src="<?=base_url();?>oncard_template/js/main-kantin.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinycolor/1.3.0/tinycolor.min.js"></script>
    <script src="https://codepen.io/dariocorsi/pen/de198bdaf7bb0bf03ac880d82fdfa5d5?editors=0010"></script>
    
    <!-- ------------ -->
    <script type="text/javascript">
        
        let idselectedklas = '';
        let searchText = '';
        
        let idItemSelected = '';
        
        
        $('#btnAddProd').text('Tambah');
    
        function loadKlasifikasi(){
            
            
              const save = async ()=>{
              const posts = await axios.get('<?=api_url();?>kategori/get', {
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
                  
                  
                // $('#saldoTerkiniID').text("Rp "+formatRupiah(posts.data.response.result.saldo));
                
                if(posts.data.length>0){
                    let sintaks='';
                    let sintaksChooseKlas='';
                    let no = 1;
                    posts.data.map((mapping,i)=>{
                        sintaks+=`
                         <div class="row" style="padding-left:5%;padding-right:5%; border-bottom:1px solid #f0f0f0; margin-bottom:20px; padding-bottom:3%;">
                            <div class="col-md-3 col-lg-3 col-12 text-center" style="border-right:1px solid #f2f2f2">
                                <img src='<?=base_url();?>assets/png/menu/${mapping.icon}' width="80%">
                            </div>
                            <div class="col-md-9 col-lg-9 col-12">
                                <h5 style="margin:0px;font-size:1em;">${mapping.kategori}</h5>
                                <p class="" style="display:block;font-size:.87em;padding:0px; margin:0px;">${mapping.color}</p>
                                <div style="width:100%; height:20px; border:3px solid #fff;display:inline-grid;margin-top:5px; background:${mapping.color}"></div>
                                <a href="#" onclick="deleteKlas(${mapping.id_kategori})" class="fa fa-trash text-danger" style="float:right; position:absolute; right:20px; top:30%;"></a>
                                
                            </div>
                         </div>
                         
                        `;
                        sintaksChooseKlas+=`
                         
                            <div class="col-md-4 col-lg-4 col-6 text-center mb-3 chooseklas" onclick="klasSelected('${mapping.id_kategori}','${mapping.kategori}')">
                                <img src='<?=base_url();?>assets/png/menu/${mapping.icon}' width="80%">
                                <h5 style="margin:0px;font-size:1em;color:#000;">${mapping.kategori}</h5>
                            </div>
                            
                        `;
                    });
      
                    $('#putKlasHere').html(sintaks);
                    $('#contentKlasHere').html(sintaksChooseKlas);
                }
                  
              }else {
                  $(".loading").fadeOut();
                  
                  
                  
                  
              }
          }
          
          
          save();
            
        }
        
        function loadMenu(){
            
            
              const save = async ()=>{
              const posts = await axios.get('<?=api_url();?>product/get', {
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
                  
                  
                // $('#saldoTerkiniID').text("Rp "+formatRupiah(posts.data.response.result.saldo));
                
                if(posts.data.length>0){
                    
                    $('#putBtnFilter').html('');
                    
                    let sintaks='';
                    let no = 1;
                    posts.data.map((mapping,i)=>{
                        sintaks+=`
                         <div class="col-md-12 col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-12 mt-3">
                            <div class="card kartu" style="border-bottom:3px solid ${mapping.color};background:#fff; ">
                                <div class="card-body text-left">
                                    <h6 style="font-weight:bold;">${"Rp "+formatRupiah(mapping.harga_produk)}</h6>
                                    <h4 class="header" style="text-transform:capitalize;font-size:1.2em;">${mapping.nama_produk}</h4>
                                    <h6 class="header mb-3" style="text-transform:capitalize;">${mapping.deskripsi}</h6>
                                    
                                    <div class="row" style="">
                                        <div class="col-md-4 col-lg-4 col-4 text-center mb-3">
                                            <img src='<?=base_url();?>assets/png/menu/${mapping.icon}' width="30">
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-4">
                                            <h5 class="text-muted" style="margin:0px;font-size:.6em;">Kategori</h5>
                                            <a href="#" onclick="showByCat('${mapping.kategori}')" class="text-dark" style="margin:0px;font-size:1em; font-weight:bold;">${mapping.kategori}</a>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-4">
                                            <h5 class="text-muted" style="margin:0px;font-size:.6em;">Stok</h5>
                                            <a class="text-dark" style="margin:0px;font-size:1em; ">${formatRupiah(mapping.stok)}</a>
                                        </div>
                                    </div>
                                     
                                </div>
                                
                                <div class="card-button-addon text-center py-3 px-2">
                                    <div class="row text-center">
                                        <div class="col-md-12 col-12">
                                    <button type="button" onclick="updateItem('${mapping.id_product}')" class="btn btn-sm btn-outline-success d-block mb-3" style="width:100%;"><i class="fa fa-edit"></i> <small style="display:block;">Edit</small></button>
                                    <button type="button" onclick="deleteItem('${mapping.id_product}')" class="btn btn-sm btn-outline-danger d-block mb-3" style="width:100%;"><i class="fa fa-trash"></i> <small style="display:block;">Hapus</small></button>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                         
                        `;
                        
                    });
      
                    $('#putContentMenuHere').html(sintaks);
                    
                }else {
                    $('#putContentMenuHere').html('<p class="px-3 py-3">Tidak ada menu. Klik tombol <b>Tambah Menu</b> yang berada disamping kiri tersebut.</p>');
                }
                  
              }else {
                  $(".loading").fadeOut();
                  
                  
                  
                  
              }
          }
          
          
          save();
            
        }
        
        function searchItem(){
            searchText = $('#setTextSearch').val();
            let sintaks = ``;
            for(let i=0;i<3;i++){
                sintaks +=`<div class="col-md-12 col-lg-4 col-4">
                  <ul class="o-vertical-spacing o-vertical-spacing--l mt-3" style="width:100%; background:#f2f2f2; border-radius:10px;padding:15px;padding-top:30px;">
                    <li class="blog-post o-media">
                      
                      <div class="o-media__body">
                        <div class="blog-post__meta">
                            <span class="skeleton-box" style="width:70px;"></span>
                          </div>
                        <div class="o-vertical-spacing">
                          <h3 class="blog-post__headline">
                            <span class="skeleton-box" style="width:55%;"></span>
                          </h3>
                          
                          <p>
                            <span class="skeleton-box" style="width:80%;"></span>
                            
                            
                            <div class="row">
                              <div class="col-md-4 col-4">
                                <div class="o-media__figure">
                                  <span class="skeleton-box" style="width:30px;height:30px;"></span>
                                </div>
                              </div>
                              <div class="col-md-4 col-4">
                               <span class="skeleton-box" style="width:50%;"></span>
                              </div>
                              <div class="col-md-4 col-4">
                               <span class="skeleton-box" style="width:50%;"></span>
                              </div>
                            </div>
                            
                          </p>
                          
                        </div>
                      </div>
                    </li>
                    
                    
                  </ul>
                </div>`;
                
                
            }
            
            $('#putContentMenuHere').html(sintaks);
            
            const save = async ()=>{
            const posts = await axios.get('<?=api_url();?>product/get', {
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
                
                if(posts.data.length>0){
                    let sintaks='';
                    let no = 1;
                    posts.data.map((mapping,i)=>{
                        let nm = mapping.nama_produk;
                        
                        if(nm.toLowerCase().includes(searchText.toLowerCase())) {
                        
                        $('#putBtnFilter').html(`<div class="btn btn-sm badge badge-sm badge-secondary ml-4" onclick="loadMenu()" style="float:right;display:block;padding:13px;">Filter berdasar kata kunci ${searchText}<i class="fa fa-times ml-3"></i></div>`);
                            
                        sintaks+=`
                         <div class="col-md-12 col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-12 mt-3">
                            <div class="card kartu" style="border-bottom:3px solid ${mapping.color};background:#fff; ">
                                <div class="card-body text-left">
                                    <h6 style="font-weight:bold;">${"Rp "+formatRupiah(mapping.harga_produk)}</h6>
                                    <h4 class="header" style="text-transform:capitalize;font-size:1.2em;">${mapping.nama_produk}</h4>
                                    <h6 class="header mb-3" style="text-transform:capitalize;">${mapping.deskripsi}</h6>
                                    
                                    <div class="row" style="">
                                        <div class="col-md-4 col-lg-4 col-4 text-center mb-3">
                                            <img src='<?=base_url();?>assets/png/menu/${mapping.icon}' width="30">
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-4">
                                            <h5 class="text-muted" style="margin:0px;font-size:.6em;">Kategori</h5>
                                            <a href="#" onclick="showByCat(${mapping.kategori})" class="text-dark" style="margin:0px;font-size:1em; font-weight:bold;">${mapping.kategori}</a>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-4">
                                            <h5 class="text-muted" style="margin:0px;font-size:.6em;">Stok</h5>
                                            <a class="text-dark" style="margin:0px;font-size:1em; ">${formatRupiah(mapping.stok)}</a>
                                        </div>
                                    </div>
                                     
                                </div>
                                
                                <div class="card-button-addon text-center py-3 px-2">
                                    <div class="row text-center">
                                        <div class="col-md-12 col-12">
                                    <button type="button" onclick="updateItem('${mapping.id_product}')" class="btn btn-sm btn-outline-success d-block mb-3" style="width:100%;"><i class="fa fa-edit"></i> <small style="display:block;">Edit</small></button>
                                    <button type="button" onclick="deleteItem('${mapping.id_product}')" class="btn btn-sm btn-outline-danger d-block mb-3" style="width:100%;"><i class="fa fa-trash"></i> <small style="display:block;">Hapus</small></button>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                         
                        `;
                        
                        }
                        
                    });
      
                    $('#putContentMenuHere').html(sintaks);
                    
                }
                  
              }else {
                  $(".loading").fadeOut();
                  
                  
                  
                  
              }
              
              
            }
            
            save();
        }
        
        function updateItem(str){
            $('#btnAddItem').trigger('click');
            
            if($('#contentMenuDiv').height()!=0){
                $('#btnAddItem').html('Tambah Menu');
                $('#okokok').attr('style','transform:scale(1,1);');
                $('#okokok').removeClass('animate__animated animate__shakeY animate__faster');
                
                $('#product')[0].reset();
                
                $('#btnAddProd').text('Tambah');
                
                
            }else {
                
                idItemSelected = str;
                
                $('#btnAddProd').text('Update');
                
                $('#btnAddItem').html('Perbaharui Menu');
                $('#okokok').attr('style','transform:scale(1.05,1.05);');
                $('#okokok').addClass('animate__animated animate__shakeY animate__faster');
                
                    const save = async (str)=>{
                      const posts = await axios.get('<?=api_url();?>product/get/'+str, {
                          headers: {'Authorization': 'Bearer '+ sessionStorage.getItem('_token')}
                      }).catch((err)=>{
                          
                          $(".loading").fadeOut();
                          Swal.fire({
                              position: 'center',
                              icon: 'error',
                              title: 'Gagal Proses',
                            //   text: 'Dikarenakan data sudah ada.',
                              showConfirmButton: true,
                              
                            });
                      });
                      
                      if(posts.status==200){
                          
                          $("#prodtambah").val(posts.data.nama_produk);
                                  $("#proddesc").val(posts.data.deskripsi);
                                  $("#prodharga").val(formatRupiah(posts.data.harga_produk));
                                  
                                  $("#prodsatuan").val(posts.data.satuan_produk);
                                  $("#prodstock").val(posts.data.stok);
                                  
                          
                          
                          
                          
                          
                      }else {
                          $(".loading").fadeOut();
                          Swal.fire({
                              position: 'center',
                              icon: 'error',
                              title: 'Gagal!',
                              text: 'Terjadi kesalahan dalam memproses request Anda',
                              showConfirmButton: true,
                              
                            });
                      }
                  }
                  
                  save(str);
                
                
            }
            // $('#contentMenuDiv').attr('style','z-index:1000; backdrop-filter:blur(3px);');
            return false;
            
            
        }
        
        function showByCat(str){
            
            
              const save = async ()=>{
              const posts = await axios.get('<?=api_url();?>product/get', {
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
                  
                  
                // $('#saldoTerkiniID').text("Rp "+formatRupiah(posts.data.response.result.saldo));
                
                if(posts.data.length>0){
                    let sintaks='';
                    let no = 1;
                    posts.data.map((mapping,i)=>{
                        if(mapping.kategori==str) {
                        
                        $('#putBtnFilter').html(`<div class="btn btn-sm badge badge-sm badge-secondary ml-4" onclick="loadMenu()" style="float:right;display:block;padding:13px;">Filter berdasar kategori ${mapping.kategori}<i class="fa fa-times ml-3"></i></div>`);
                            
                        sintaks+=`
                         <div class="col-md-12 col-lg-4 col-xl-4 col-sm-12 col-xs-12 col-12 mt-3">
                            <div class="card kartu" style="border-bottom:3px solid ${mapping.color};background:#fff; ">
                                <div class="card-body text-left">
                                    <h6 style="font-weight:bold;">${"Rp "+formatRupiah(mapping.harga_produk)}</h6>
                                    <h4 class="header" style="text-transform:capitalize;font-size:1.2em;">${mapping.nama_produk}</h4>
                                    <h6 class="header mb-3" style="text-transform:capitalize;">${mapping.deskripsi}</h6>
                                    
                                    <div class="row" style="">
                                        <div class="col-md-4 col-lg-4 col-4 text-center mb-3">
                                            <img src='<?=base_url();?>assets/png/menu/${mapping.icon}' width="30">
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-4">
                                            <h5 class="text-muted" style="margin:0px;font-size:.6em;">Kategori</h5>
                                            <a href="#" onclick="showByCat(${mapping.kategori})" class="text-dark" style="margin:0px;font-size:1em; font-weight:bold;">${mapping.kategori}</a>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-4">
                                            <h5 class="text-muted" style="margin:0px;font-size:.6em;">Stok</h5>
                                            <a class="text-dark" style="margin:0px;font-size:1em; ">${formatRupiah(mapping.stok)}</a>
                                        </div>
                                    </div>
                                     
                                </div>
                                
                                <div class="card-button-addon text-center py-3 px-2">
                                    <div class="row text-center">
                                        <div class="col-md-12 col-12">
                                    <button type="button" onclick="updateItem(${mapping.id_product})" class="btn btn-sm btn-outline-success d-block mb-3" style="width:100%;"><i class="fa fa-edit"></i> <small style="display:block;">Edit</small></button>
                                    <button type="button" onclick="deleteItem(${mapping.id_product})" class="btn btn-sm btn-outline-danger d-block mb-3" style="width:100%;"><i class="fa fa-trash"></i> <small style="display:block;">Hapus</small></button>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                         
                        `;
                        
                        }
                        
                    });
      
                    $('#putContentMenuHere').html(sintaks);
                    
                }
                  
              }else {
                  $(".loading").fadeOut();
                  
                  
                  
                  
              }
          }
          
          
          save();
            
        }
        
        loadKlasifikasi();
        loadMenu();
        
        function klasSelected(id,kategori){
            $('#openPilihKlas').attr('style','font-family:Arial;width:100%;border:1px solid #000');
            $('#openPilihKlas').text(kategori);
            
            idselectedklas = id;
            
            $('#chooseClass').modal('toggle');
            
        }
        
        $('#prodharga').keyup(function(event) {
        
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
        
        function deleteKlas(str){
            Swal.fire({
              position: 'top',
              icon: 'info',
              title: '<h5 class="text-light">Yakin ingin menghapus data ini?</h5>',
              html: '<h6>Data yang telah dihapus tidak dapat dikembalikan lagi. Harap hati - hati dan teliti dalam memilih data yang ingin dihapus ya.</h6>',
              showConfirmButton: true,
              showDenyButton: true,
              showCancelButton: false,
              confirmButtonText: 'Batal menghapus',
              denyButtonText: `Yakin, hapus sekarang`,
              
            }).then((result)=>{
              if (result.isConfirmed) {
                
              } else if (result.isDenied) {

              const save = async (str)=>{
                  const posts = await axios.delete('<?=api_url();?>kategori/delete/'+str, {
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
                          position: 'top-center',
                          icon: 'success',
                          title: 'Dihapus!',
                          text: 'Data berhasil dihapus',
                          showConfirmButton: false,
                          timer: 2000
                          
                        });
                        
                        loadKlasifikasi();

                        
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
              
              save(str);
              }
            });
        }
        
        function deleteItem(str){
            Swal.fire({
              position: 'top',
              icon: 'info',
              title: '<h5 class="text-light">Yakin ingin menghapus data ini?</h5>',
              html: '<h6>Data yang telah dihapus tidak dapat dikembalikan lagi. Harap hati - hati dan teliti dalam memilih data yang ingin dihapus ya.</h6>',
              showConfirmButton: true,
              showDenyButton: true,
              showCancelButton: false,
              confirmButtonText: 'Batal menghapus',
              denyButtonText: `Yakin, hapus sekarang`,
              
            }).then((result)=>{
              if (result.isConfirmed) {
                
              } else if (result.isDenied) {

              const save = async (str)=>{
                  const posts = await axios.delete('<?=api_url();?>product/delete/'+str, {
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
                          position: 'top-center',
                          icon: 'success',
                          title: 'Dihapus!',
                          text: 'Data berhasil dihapus',
                          showConfirmButton: false,
                          timer: 2000
                          
                        });
                        
                        loadKlasifikasi();
                        loadMenu();

                        
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
              
              save(str);
              }
            });
        }
        
        $('#btnSubmitForm').on('click', function(){
        
        $(".loading").fadeIn();
    
    
        //validasi formulir terlebih dahulu
        var allAreFilled = true;
        document.getElementById("klas").querySelectorAll("[required]").forEach(function(i) {
          if (!allAreFilled) return;
          if (!i.value) allAreFilled = false;
          if (i.type === "radio") {
            var radioValueCheck = false;
            document.getElementById("klas").querySelectorAll('[name=${i.name}]').forEach(function(r) {
              if (r.checked) radioValueCheck = true;
            })
            allAreFilled = radioValueCheck;
          }
        })
        if (!allAreFilled) {
            Swal.fire({
              position: 'top-end',
              icon: 'error',
              title: '<h6>Data tidak lengkap</h6>',
              html: '<h6>Harap isi semua formulir inputan yang dibutuhkan.</h6>',
              showConfirmButton: false,
              timer: 2000
              
            });
            $(".loading").fadeOut();
        }else {
          
          var kategori = $("#klastambah").val();
          var icon = '';
          var color = "#"+hex.value;
          
          if(!getIconStr){
              icon = '004-menu.png';
          }else {
              icon = getIconStr+'.png';
          }
          
          var form_data = new FormData();    
          form_data.append('kategori', kategori);
          form_data.append('icon', icon);
          form_data.append('color', color);
          
          
          var url = "";
          
         
          const save = async (form_data)=>{
              const posts = await axios.post('<?=api_url();?>kategori/create', form_data, {
                  headers: {'Authorization': 'Bearer '+ sessionStorage.getItem('_token')}
              }).catch((err)=>{
                  
                  $(".loading").fadeOut();
                  Swal.fire({
                      position: 'center',
                      icon: 'error',
                      title: 'Gagal Menyimpan',
                      text: 'Dikarenakan data sudah ada.',
                      showConfirmButton: true,
                      
                    });
              });
              
              if(posts.status==200){
                  
                  if(posts.data.status==true){
                    $(".loading").fadeOut();
        
        
        
                    Swal.fire({
                      position: 'top-end',
                      icon: 'success',
                      title: '<h6>Berhasil Menyimpan</h6>',
                      html: '<h6>Data sudah tersimpan</h6>',
                      showConfirmButton: false,
                      timer: 2000
                      
                    });
                    
                    // $('#tblsiswa').ajax.reload();
                    loadKlasifikasi();
                    
                  }else {
                      $(".loading").fadeOut();
                    Swal.fire({
                      position: 'center',
                      icon: 'error',
                      title: 'Gagal Menyimpan',
                      text: 'Data tidak dapat disimpan dalam saat ini, ulangi dilain waktu.',
                      showConfirmButton: true,
                      
                    });
                  }
                  
              }else {
                  $(".loading").fadeOut();
                  Swal.fire({
                      position: 'center',
                      icon: 'error',
                      title: 'Gagal Menyimpan',
                      text: 'Data sudah ada dan tidak dapat ditambahkan lagi',
                      showConfirmButton: true,
                      
                    });
              }
          }
          
          save(form_data);

        }

    });
    
    $('#btnAddProd').on('click', function(){
        
        $(".loading").fadeIn();
    
    
        //validasi formulir terlebih dahulu
        var allAreFilled = true;
        document.getElementById("product").querySelectorAll("[required]").forEach(function(i) {
          if (!allAreFilled) return;
          if (!i.value) allAreFilled = false;
          if (i.type === "radio") {
            var radioValueCheck = false;
            document.getElementById("product").querySelectorAll('[name=${i.name}]').forEach(function(r) {
              if (r.checked) radioValueCheck = true;
            })
            allAreFilled = radioValueCheck;
          }
        })
        if (!allAreFilled) {
            Swal.fire({
              position: 'top-end',
              icon: 'error',
              title: '<h6>Data tidak lengkap</h6>',
              html: '<h6>Harap isi semua formulir inputan yang dibutuhkan.</h6>',
              showConfirmButton: false,
              timer: 2000
              
            });
            $(".loading").fadeOut();
        }else {
            
          var url = "";
          
          
          
          var prodtambah = $("#prodtambah").val();
          var proddesc = $("#proddesc").val();
          var prodharga = $("#prodharga").val();
          prodharga = prodharga.replace(/\./g,'');
          var prodsatuan = $("#prodsatuan").val();
          var prodstock = $("#prodstock").val();
          
          var form_data = new FormData();    
          form_data.append('nama_produk', prodtambah);
          form_data.append('kategori_produk', idselectedklas);
          form_data.append('harga_produk', prodharga);
          form_data.append('satuan_produk', prodsatuan);
          form_data.append('stok', prodstock);
          form_data.append('deskripsi', proddesc);
          form_data.append('status', 'ada');
          form_data.append('jenis_produk', '-');
          
          if($('#btnAddProd').text()=='Tambah'){
              url = '<?=api_url();?>product/create';
          }else {
              form_data.append('id_product', idItemSelected);
              url = '<?=api_url();?>product/update';
          }
          
          
         
          const save = async (form_data)=>{
              const posts = await axios.post(url, form_data, {
                  headers: {'Authorization': 'Bearer '+ sessionStorage.getItem('_token')}
              }).catch((err)=>{
                  
                  $(".loading").fadeOut();
                  Swal.fire({
                      position: 'center',
                      icon: 'error',
                      title: 'Gagal Menyimpan',
                      text: 'Dikarenakan data sudah ada.',
                      showConfirmButton: true,
                      
                    });
              });
              
              if(posts.status==200){
                  
                  if(posts.data.status==true){
                    $(".loading").fadeOut();
        
        
        
                    Swal.fire({
                      position: 'top-end',
                      icon: 'success',
                      title: '<h6>Berhasil Menyimpan</h6>',
                      html: '<h6>Data sudah tersimpan</h6>',
                      showConfirmButton: false,
                      timer: 2000
                      
                    });
                    
                    // $('#tblsiswa').ajax.reload();
                    loadKlasifikasi();
                    loadMenu();
                    
                    if($('#btnAddProd').text()=='Update'){
                        $('#btnAddItem').trigger('click');
                        $('#product')[0].reset();
                        $('#btnAddProd').text('Tambah');
                        $('#btnAddItem').html('Tambah Menu');
                    }
                    
                  }else {
                      $(".loading").fadeOut();
                    Swal.fire({
                      position: 'center',
                      icon: 'error',
                      title: 'Gagal Menyimpan',
                      text: 'Data tidak dapat disimpan dalam saat ini, ulangi dilain waktu.',
                      showConfirmButton: true,
                      
                    });
                  }
                  
              }else {
                  $(".loading").fadeOut();
                  Swal.fire({
                      position: 'center',
                      icon: 'error',
                      title: 'Gagal Menyimpan',
                      text: 'Data sudah ada dan tidak dapat ditambahkan lagi',
                      showConfirmButton: true,
                      
                    });
              }
          }
          
          save(form_data);

        }

    });
    
        var addSwatch = document.getElementById('add-swatch');
        var modeToggle = document.getElementById('mode-toggle');
        var swatches = document.getElementsByClassName('default-swatches')[0];
        var colorIndicator = document.getElementById('color-indicator');
        var userSwatches = document.getElementById('user-swatches');
        
        
        
        var spectrumCanvas = document.getElementById('spectrum-canvas');
        var spectrumCtx = spectrumCanvas.getContext('2d');
        var spectrumCursor = document.getElementById('spectrum-cursor'); 
        var spectrumRect = spectrumCanvas.getBoundingClientRect();
        
        var hueCanvas = document.getElementById('hue-canvas');
        var hueCtx = hueCanvas.getContext('2d');
        var hueCursor = document.getElementById('hue-cursor'); 
        var hueRect = hueCanvas.getBoundingClientRect();
        
        var currentColor = '';
        var hue = 0;
        var saturation = 1;
        var lightness = .5;
        
        var rgbFields = document.getElementById('rgb-fields');
        var hexField = document.getElementById('hex-field');
        
        var red = document.getElementById('red');
        var blue = document.getElementById('blue');
        var green = document.getElementById('green');
        var hex = document.getElementById('hex'); 
        
        function ColorPicker(){
          this.addDefaultSwatches();
          createShadeSpectrum();
          createHueSpectrum();
        };
        
        ColorPicker.prototype.defaultSwatches = [
          '#FFFFFF', 
          '#FFFB0D', 
          '#0532FF', 
          '#FF9300', 
          '#00F91A', 
          '#FF2700', 
          '#000000', 
          '#686868', 
          '#EE5464', 
          '#D27AEE', 
          '#5BA8C4', 
          '#E64AA9'
        ];
        
        function createSwatch(target, color){
          var swatch = document.createElement('button');
          swatch.classList.add('swatch');
          swatch.setAttribute('title', color);
          swatch.style.backgroundColor = color;
          swatch.addEventListener('click', function(){
            var color = tinycolor(this.style.backgroundColor);     
            colorToPos(color);
            setColorValues(color);
          });
          target.appendChild(swatch);
          refreshElementRects();
        };
        
        ColorPicker.prototype.addDefaultSwatches = function() {
          for(var i = 0; i < this.defaultSwatches.length; ++i){
            createSwatch(swatches, this.defaultSwatches[i]);
          } 
        }
        
        function refreshElementRects(){
          spectrumRect = spectrumCanvas.getBoundingClientRect();
          hueRect = hueCanvas.getBoundingClientRect();
        }
        
        function createShadeSpectrum(color) {
          canvas = spectrumCanvas;
          ctx = spectrumCtx;
          ctx.clearRect(0, 0, canvas.width, canvas.height);
        
          if(!color) color = '#f00';
          ctx.fillStyle = color;
          ctx.fillRect(0, 0, canvas.width, canvas.height);
        
          var whiteGradient = ctx.createLinearGradient(0, 0, canvas.width, 0);
          whiteGradient.addColorStop(0, "#fff");
          whiteGradient.addColorStop(1, "transparent");
          ctx.fillStyle = whiteGradient;
          ctx.fillRect(0, 0, canvas.width, canvas.height);
        
          var blackGradient = ctx.createLinearGradient(0, 0, 0, canvas.height);
          blackGradient.addColorStop(0, "transparent");
          blackGradient.addColorStop(1, "#000");
          ctx.fillStyle = blackGradient;
          ctx.fillRect(0, 0, canvas.width, canvas.height);
        
          canvas.addEventListener('mousedown', function(e){
            startGetSpectrumColor(e);
          });
        };
        
        function createHueSpectrum() {
          var canvas = hueCanvas;
          var ctx = hueCtx;
          var hueGradient = ctx.createLinearGradient(0, 0, 0, canvas.height);
          hueGradient.addColorStop(0.00, "hsl(0,100%,50%)");
          hueGradient.addColorStop(0.17, "hsl(298.8, 100%, 50%)");
          hueGradient.addColorStop(0.33, "hsl(241.2, 100%, 50%)");
          hueGradient.addColorStop(0.50, "hsl(180, 100%, 50%)");
          hueGradient.addColorStop(0.67, "hsl(118.8, 100%, 50%)");
          hueGradient.addColorStop(0.83, "hsl(61.2,100%,50%)");
          hueGradient.addColorStop(1.00, "hsl(360,100%,50%)");
          ctx.fillStyle = hueGradient;
          ctx.fillRect(0, 0, canvas.width, canvas.height);
          canvas.addEventListener('mousedown', function(e){
            startGetHueColor(e);
          });
        };
        
        function colorToHue(color){
          var color = tinycolor(color);
          var hueString = tinycolor('hsl '+ color.toHsl().h + ' 1 .5').toHslString();
          return hueString;
        };
        
        function colorToPos(color){
          var color = tinycolor(color);
          var hsl = color.toHsl();
          hue = hsl.h;
          var hsv = color.toHsv();
          var x = spectrumRect.width * hsv.s;
          var y = spectrumRect.height * (1 - hsv.v);
          var hueY = hueRect.height - ((hue / 360) * hueRect.height);
          updateSpectrumCursor(x,y);
          updateHueCursor(hueY);
          setCurrentColor(color);
          createShadeSpectrum(colorToHue(color));   
        };
        
        function setColorValues(color){  
          //convert to tinycolor object
          var color = tinycolor(color);
          var rgbValues = color.toRgb();
          var hexValue = color.toHex();
          //set inputs
          red.value = rgbValues.r;
          green.value = rgbValues.g;
          blue.value = rgbValues.b;
          hex.value = hexValue;
        };
        
        function setCurrentColor(color){
          color = tinycolor(color);
          currentColor = color;
          colorIndicator.style.backgroundColor = color;
        //   document.body.style.backgroundColor = color; 
          spectrumCursor.style.backgroundColor = color; 
          hueCursor.style.backgroundColor = 'hsl('+ color.toHsl().h +', 100%, 50%)';
        };
        
        function updateHueCursor(y){
          hueCursor.style.top = y + 'px';
        }
        
        function updateSpectrumCursor(x, y){
          //assign position
          spectrumCursor.style.left = x + 'px';
          spectrumCursor.style.top = y + 'px';  
        };
        
        var startGetSpectrumColor = function(e) {
          getSpectrumColor(e);
          spectrumCursor.classList.add('dragging');
          window.addEventListener('mousemove', getSpectrumColor);
          window.addEventListener('mouseup', endGetSpectrumColor);
        };
        
        function getSpectrumColor(e) {
          // got some help here - http://stackoverflow.com/questions/23520909/get-hsl-value-given-x-y-and-hue
          e.preventDefault();
          //get x/y coordinates
          var x = e.pageX - spectrumRect.left;
          var y = e.pageY - spectrumRect.top;
          //constrain x max
          if(x > spectrumRect.width){ x = spectrumRect.width}
          if(x < 0){ x = 0}
          if(y > spectrumRect.height){ y = spectrumRect.height}
          if(y < 0){ y = .1}  
          //convert between hsv and hsl
          var xRatio = x / spectrumRect.width * 100;
          var yRatio = y / spectrumRect.height * 100; 
          var hsvValue = 1 - (yRatio / 100);
          var hsvSaturation = xRatio / 100;
          lightness = (hsvValue / 2) * (2 - hsvSaturation);
          saturation = (hsvValue * hsvSaturation) / (1 - Math.abs(2 * lightness - 1));
          var color = tinycolor('hsl ' + hue + ' ' + saturation + ' ' + lightness);
          setCurrentColor(color);  
          setColorValues(color);
          updateSpectrumCursor(x,y);
        };
        
        function endGetSpectrumColor(e){
          spectrumCursor.classList.remove('dragging');
          window.removeEventListener('mousemove', getSpectrumColor);
        };
        
        function startGetHueColor(e) {
          getHueColor(e);
          hueCursor.classList.add('dragging');
          window.addEventListener('mousemove', getHueColor);
          window.addEventListener('mouseup', endGetHueColor);
        };
        
        function getHueColor(e){
          e.preventDefault();
          var y = e.pageY - hueRect.top;
          if (y > hueRect.height){ y = hueRect.height};
          if (y < 0){ y = 0};  
          var percent = y / hueRect.height;
          hue = 360 - (360 * percent);
          var hueColor = tinycolor('hsl '+ hue + ' 1 .5').toHslString();
          var color = tinycolor('hsl '+ hue + ' ' + saturation + ' ' + lightness).toHslString();
          createShadeSpectrum(hueColor);
          updateHueCursor(y, hueColor)
          setCurrentColor(color);
          setColorValues(color);
        };
        
        function endGetHueColor(e){
            hueCursor.classList.remove('dragging');
          window.removeEventListener('mousemove', getHueColor);
        };
        
        // Add event listeners
        
        red.addEventListener('change', function(){
            var color = tinycolor('rgb ' + red.value + ' ' + green.value + ' ' + blue.value );
            colorToPos(color);
        });
        
        green.addEventListener('change', function(){
            var color = tinycolor('rgb ' + red.value + ' ' + green.value + ' ' + blue.value );
            colorToPos(color);
        });
        
        blue.addEventListener('change', function(){
            var color = tinycolor('rgb ' + red.value + ' ' + green.value + ' ' + blue.value );
            colorToPos(color);
        });
        
        addSwatch.addEventListener('click', function(){  
            $('#add-swatch').attr('disabled','disabled');
          createSwatch(userSwatches, currentColor);
        });
        
        modeToggle.addEventListener('click', function(){
          if(rgbFields.classList.contains('active') ? rgbFields.classList.remove('active') : rgbFields.classList.add('active'));
          if(hexField.classList.contains('active') ? hexField.classList.remove('active') : hexField.classList.add('active'));
        });
        
        window.addEventListener('resize', function(){
          refreshElementRects();
        });
        
        
        new ColorPicker();
        
        
        $('#okWarna').on('click', function(){
            
            console.log('#'+hex.value);
            $('.btnWarna').attr('style','font-family:Arial;width:100%;border:1px solid #'+hex.value+'');
            $('.btnWarna').text("#"+hex.value);
        });
        
        
    </script>
    <script type="text/javascript"> 
    
    
        let getIconStr = '';
        function getIcon(str){
            getIconStr = str;
            
            $('.btnIcon').attr('style','font-family:Arial;width:100%;border:1px solid #000;');
            $('.btnIcon').html("<img src='<?=base_url();?>assets/png/menu/"+getIconStr+".png' width='25' height='25'/>");
            
        }
        
        $(".loading").hide();
        function logoutBtn() {
            sessionStorage.removeItem('_token');
            window.location.href='<?=base_url("Login/logoutUser");?>';
        }
        $(document).ready(function() {
        
        });

        $("#errmsgs").fadeOut();
        
        
        let accordionButtons = document.getElementsByClassName('accordion-item__button');
        
        
        for (let i = 0; i < accordionButtons.length; i++) {
            accordionButtons[i].addEventListener('click', function() {
                this.classList.toggle('active');
                let accordionContent = this.nextElementSibling;
                
                if (accordionContent.style.maxHeight) {
                    accordionContent.style.maxHeight = null;
                }
                 else {
                    accordionContent.style.maxHeight = accordionContent.scrollHeight + "px";
                }
            });
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
    
    
    <script type="text/javascript">
        !function(a){a.idleTimer=function(b,c){var d;"object"==typeof b?(d=b,b=null):"number"==typeof b&&(d={timeout:b},b=null),c=c||document,d=a.extend({idle:!1,timeout:3e4,events:"mousemove keydown wheel DOMMouseScroll mousewheel mousedown touchstart touchmove MSPointerDown MSPointerMove"},d);var e=a(c),f=e.data("idleTimerObj")||{},g=function(b){var d=a.data(c,"idleTimerObj")||{};d.idle=!d.idle,d.olddate=+new Date;var e=a.Event((d.idle?"idle":"active")+".idleTimer");a(c).trigger(e,[c,a.extend({},d),b])},h=function(b){var d=a.data(c,"idleTimerObj")||{};if(null==d.remaining){if("mousemove"===b.type){if(b.pageX===d.pageX&&b.pageY===d.pageY)return;if("undefined"==typeof b.pageX&&"undefined"==typeof b.pageY)return;var e=+new Date-d.olddate;if(200>e)return}clearTimeout(d.tId),d.idle&&g(b),d.lastActive=+new Date,d.pageX=b.pageX,d.pageY=b.pageY,d.tId=setTimeout(g,d.timeout)}},i=function(){var b=a.data(c,"idleTimerObj")||{};b.idle=b.idleBackup,b.olddate=+new Date,b.lastActive=b.olddate,b.remaining=null,clearTimeout(b.tId),b.idle||(b.tId=setTimeout(g,b.timeout))},j=function(){var b=a.data(c,"idleTimerObj")||{};null==b.remaining&&(b.remaining=b.timeout-(+new Date-b.olddate),clearTimeout(b.tId))},k=function(){var b=a.data(c,"idleTimerObj")||{};null!=b.remaining&&(b.idle||(b.tId=setTimeout(g,b.remaining)),b.remaining=null)},l=function(){var b=a.data(c,"idleTimerObj")||{};clearTimeout(b.tId),e.removeData("idleTimerObj"),e.off("._idleTimer")},m=function(){var b=a.data(c,"idleTimerObj")||{};if(b.idle)return 0;if(null!=b.remaining)return b.remaining;var d=b.timeout-(+new Date-b.lastActive);return 0>d&&(d=0),d};if(null===b&&"undefined"!=typeof f.idle)return i(),e;if(null===b);else{if(null!==b&&"undefined"==typeof f.idle)return!1;if("destroy"===b)return l(),e;if("pause"===b)return j(),e;if("resume"===b)return k(),e;if("reset"===b)return i(),e;if("getRemainingTime"===b)return m();if("getElapsedTime"===b)return+new Date-f.olddate;if("getLastActiveTime"===b)return f.lastActive;if("isIdle"===b)return f.idle}return e.on(a.trim((d.events+" ").split(" ").join("._idleTimer ")),function(a){h(a)}),f=a.extend({},{olddate:+new Date,lastActive:+new Date,idle:d.idle,idleBackup:d.idle,timeout:d.timeout,remaining:null,tId:null,pageX:null,pageY:null}),f.idle||(f.tId=setTimeout(g,f.timeout)),a.data(c,"idleTimerObj",f),e},a.fn.idleTimer=function(b){return this[0]?a.idleTimer(b,this[0]):this}}(jQuery);

(function ($) {
      
    $( document ).on( "idle.idleTimer", function(event, elem, obj){
        $(".lockscreen").fadeIn();
    });
    
    $( document ).on( "active.idleTimer", function(event, elem, obj, triggerevent){
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