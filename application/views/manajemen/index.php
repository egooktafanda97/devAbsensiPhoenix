<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row konten">
        <div style="padding:1vh;">
            
            
            <div id="d">
            	<button class="left">
            		<svg height="100%" width="100%" viewbox="0 0 10 10">
            			<path d="m 7 1 L 1 5 L 7 9 Z" fill="rgba(255,255,255,0.8)" />
            		</svg></button>
            	<button class="right">
            		<svg height="100%" width="100%" viewbox="0 0 10 10">
            			<path d="m 3 1 L 9 5 L 3 9 Z" fill="rgba(255,255,255,0.8)" />
            		</svg>
            	</button>
            </div>
            
            <hr/>
            
            <div style="display:grid; grid-template-columns:repeat(6,1fr);">
                <div style="grid-column:1/span 5;">
                    <button type="button" class="btn btn-lg btn-outline-success" style="display:block; width:100%; border-radius:0px; margin-bottom:2vh; font-size:2vh!important;">
                        Hari ini.
                    </button>
                </div>
                <div>
                    <button type="button" onclick="reloadAPI();" class="btn btn-lg btn-outline-success" style="display:block; width:100%; border-radius:0px; margin-bottom:2vh; font-size:2vh!important;">
                        <i class="las la-sync"></i>
                    </button>
                </div>
            </div>
            
            
            <div style="display:grid; grid-template-columns:repeat(5,1fr);width:100%; margin-bottom:2vh; border-bottom:1px solid #eee;align-items:center; gap:1.5vh;">
                <div style="grid-column:1;font-weight:800; background:green; padding:5px; color:#fff;text-align:center;">[T]</div>
                <div style="grid-column:2/span 3">Telah absensi</div>
                <div style="" id="hadirToday">0</div>
            </div>
            
            <div style="display:grid; grid-template-columns:repeat(5,1fr);width:100%; margin-bottom:2vh; border-bottom:1px solid #eee;align-items:center; gap:1.5vh;">
                <div style="grid-column:1;font-weight:800; background:red; padding:5px; color:#fff;text-align:center;">[B]</div>
                <div style="grid-column:2/span 3">Belum</div>
                <div style="" id="tidakHadirToday">0</div>
            </div>
            <hr/>
            
            <p>Berdasarkan status : </p>
            <div style="display:grid; grid-template-columns:repeat(5,1fr);width:100%; margin-bottom:2vh; border-bottom:1px solid #eee;align-items:center; gap:1.5vh;">
                <div style="grid-column:1;font-weight:800; background:green; padding:5px; color:#fff;text-align:center;">[H]</div>
                <div style="grid-column:2/span 3">Hadir</div>
                <div style="">0</div>
            </div>
            
            <div style="display:grid; grid-template-columns:repeat(5,1fr);width:100%; margin-bottom:2vh; border-bottom:1px solid #eee;align-items:center; gap:1.5vh;">
                <div style="grid-column:1;font-weight:800; background:red; padding:5px; color:#fff;text-align:center;">[S]</div>
                <div style="grid-column:2/span 3">Sakit</div>
                <div style="">0</div>
            </div>
            
            <div style="display:grid; grid-template-columns:repeat(5,1fr);width:100%; margin-bottom:2vh; border-bottom:1px solid #eee;align-items:center; gap:1.5vh;">
                <div style="grid-column:1;font-weight:800; background:orange; padding:5px; color:#fff;text-align:center;">[I]</div>
                <div style="grid-column:2/span 3">Izin</div>
                <div style="">0</div>
            </div>
            
            <div style="display:grid; grid-template-columns:repeat(5,1fr);width:100%; margin-bottom:2vh; border-bottom:1px solid #eee;align-items:center; gap:1.5vh;">
                <div style="grid-column:1;font-weight:800; background:grey; padding:5px; color:#fff;text-align:center;">[A]</div>
                <div style="grid-column:2/span 3">Alfa</div>
                <div style="">0</div>
            </div>
            
        </div>
        <div style="display:block;grid-column:2/span 5; padding:1vh;">
            
            <div id="putKategoriHere" style="display:grid; grid-template-columns:repeat(6,1fr); gap:10px; margin-bottom:3vh;">
                
            </div>
            
            
            <div class="listKonten" style="font-weight:800;">
                <div>No.</div>
                <div style="grid-column:2/span 2;">Waktu</div>
                <div style="grid-column:4/span 1;">NIS</div>
                <div style="grid-column:5/span 3;">Nama</div>
                <div style="grid-column:9/span 2;">Status</div>
                
            </div>
            
            <div id="putContentHere">
                
            </div>    
        </div>
        
        
    </div>



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
    let arrayitemgrafikdata = [];
    let arrayitemgrafiklabel = [];
    let saldoTunaiIPaymu = 0;
    let saldoSiswaGuruKantin = 0;
    let saldoTetap = 0;
    
    
    let defaultGetData = '';
    //get date today
    let todayDate = new Date();
    let tanggalSet = todayDate.getFullYear() + "-" + (todayDate.getMonth()+1) + "-" + todayDate.getDate();
    
   getDataToday(defaultGetData,tanggalSet);
   function getDataToday(str, date) {
       
       $('#putContentHere').html('<div class="text-center"><div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>');
       let html ='';
       let no = 1;
            
            var form_data = new FormData(); 
            form_data.append('tanggal', tanggalSet); 
            form_data.append('id_pengaturan', str); 
            
            const save = async (str) => {
                const posts = await axios.post('<?= api_url(); ?>absensi/get-by-date',form_data, {
                    headers: {
                        'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                    }
                }).catch((err) => {
                    
                });
                
                if (posts.status == 200) {
                    
                    let hadirTodayCount = 0;
                    
                    if(!isEmpty(posts.data.response)){
                    posts.data.response.map((mapping,i)=>{
                        
                        if ((mapping.keterangan.indexOf('Masuk') > -1) || (mapping.keterangan.indexOf('masuk') > -1)) {
                          hadirTodayCount++;
                        }
                        
                        html +=`
                            <div class="listKontenView">
                                <div>${no++}</div>
                                <div style="grid-column:2/span 2;">${moment(mapping.created_at).format('Do MMMM YYYY, H:mm:ss') + ' WIB'}</div>
                                <div style="grid-column:4/span 1;">${mapping.siswa.nis}</div>
                                <div style="grid-column:5/span 3;">${mapping.siswa.nama_siswa}</div>
                                <div style="grid-column:9/span 2;">
                                ${mapping.keterangan}
                                </div>
                            </div>    
                        `;
                        
                    });
                    
                    
                    }
                    else {
                        html = `<div class="listKontenView"><div style="grid-column:1/span 10; text-align:left; padding:10px; background:red; color:#fff;">Tidak ada data</div></div>`;
                    }
                    
                    $('#putContentHere').html(html);
                    $('#hadirToday').html(parseInt(hadirTodayCount));
                    
                } else {
                    
                }
            }
    
            save();
         
        
    }
    
    
   getKategori();
   function getKategori() {
       
        $('#putKategoriHere').html('<div class="text-center"><div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>');
        let html ='';
       
       let setHari = moment(tanggalSet).format('dddd');
       console.log(setHari);
       
        var form_data = new FormData(); 
        form_data.append('hari', setHari); 
            
        const save = async (str) => {
            const posts = await axios.post('<?= api_url(); ?>pengaturan-instansi/get-by-day',form_data, {
                headers: {
                    'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                }
            }).catch((err) => {

            });
            
            if (posts.status == 200) {
                
                html =`
                <div class="classify onclick" style="cursor:default;border:none; text-align:right;">
                    Filter :
                </div>
                <div class="classify onclick" onclick="getDataToday('','${tanggalSet}')">
                    Semua
                </div>  
                        `;
                
                if(!isEmpty(posts.data.response)){
                posts.data.response.map((mapping,i)=>{
                    
                    html +=`
                        <div class="classify onclick" onclick="getDataToday('${mapping.id}','${tanggalSet}')">
                            ${mapping.keterangan}
                        </div>  
                    `;
                    
                });
                
                
                }
                else {
                    html = `<div style="grid-column:1/span 6; text-align:left; padding:10px; background:red; color:#fff;">Tidak ada kategori</div>`;
                }
                
                $('#putKategoriHere').html(html);
                
            } else {
                
            }
        }

        save();
    }
    
    getTidakHadirToday();
   function getTidakHadirToday() {
       
        let html ='';
        const save = async (str) => {
            const posts = await axios.get('<?= api_url(); ?>admin/tidak-hadir', {
                headers: {
                    'Authorization': 'Bearer ' + sessionStorage.getItem('_token')
                }
            }).catch((err) => {

            });
            
            let tidakHadirCount = 0;
            
            if (posts.status == 200) {
                
                if(!isEmpty(posts.data.response)){
                posts.data.response.map((mapping,i)=>{
                    
                    tidakHadirCount++;
                
                });
                
                
                }
                else {
                    html = `<div style="grid-column:1/span 6; text-align:left; padding:10px; background:red; color:#fff;">Tidak ada kategori</div>`;
                }
                
                $('#tidakHadirToday').html(parseInt(tidakHadirCount));
                
            } else {
                
            }
        }

        save();
    }
    
    
    function reloadAPI(){
        getDataToday('', tanggalSet);
        getKategori();
        getTidakHadirToday();
    }
    
    
    //this one SVG calendar function is all you need.
    //************************
    const svgCal = (
    	el = document.querySelector("#svgCalendar"), 
    	today = new Date()) => {
    	if (!el) {
    		console.error('Tell us where to put the calendar!');
    		return;
    	}
    	const DAYS = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
    	const MONTHS = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Julo", "Agustus", "September", "Oktober", "November", "Desember"];
    	
    	const month = today.getMonth();
    	const dayOfMonth = today.getDate();
    	const year = today.getFullYear();
    	const firstDayOfMonth = new Date(year, month, 1).getDay();
    	const daysInMonth = new Date(year, month + 1, 0).getDate();
    
    	//capitalized month name
    	const displayMonth = MONTHS[month].charAt(0).toUpperCase() + MONTHS[month].slice(1);
    	
    	//create array of weekdays in order
    	let datesArray = [];
    	for (let i = 0; i < daysInMonth; i++) {
    		datesArray.push((i + firstDayOfMonth) % 7);
    	}
    
    	let displayDates = datesArray;
    
    	//create svg
    	const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    	// svg.id = 'svg';
    	svg.setAttributeNS(
    		"http://www.w3.org/2000/xmlns/",
    		"xmlns:xlink",
    		"http://www.w3.org/1999/xlink"
    	);
    	svg.setAttribute("viewBox", "0 0 140 140");
    
    	//split weekdays into sub-arrays at 6
    	let daysByWeek = [];
    	for (var i = 0; i < datesArray.length; i++) {
    		if (datesArray[i] == 6) {
    			daysByWeek.push(datesArray.slice(0, i + 1));
    			datesArray = datesArray.slice(i + 1);
    			i = -1;
    		}
    	}
    	daysByWeek.push(datesArray);
    	
    	let dayOfMonthDisplay = 1;
    	
    	//loop through the weeks
    	for (let week = 0; week < daysByWeek.length; week++) {
    		const days = daysByWeek[week];
    		//loop through the days in each week
    		for (let day = 0; day < days.length; day++) {
    			let dayFill = "rgba(255,255,255,0.2)";
    			let dayStroke = "rgba(255,255,255,0.2)";
    			//day box
    			const dayBox = document.createElementNS("http://www.w3.org/2000/svg", "rect");
    			dayBox.classList.add("day");
    			
    			//set a referencable dateTime
    			const dateTime = new Date(year, month, dayOfMonthDisplay);
    			dayBox.setAttribute('data-datetime', dateTime);
    			dayBox.setAttribute('onclick', 'setTanggal("'+dateTime+'");');
    			dayBox.classList.add(DAYS[dateTime.getDay()]);
    			
    			let dayStroke2;
    			//is rect passed in today?
    				if (new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate()).getTime() == dateTime.getTime()) {
    					dayStroke2 = "rgba(255,255,255,1)";
    					dayBox.classList.add('today');
    				} else {
    					dayStroke2 = dayStroke;
    				}
    
    			const dayBoxAttrs = {
    				x: days[day] * 20,
    				y: (week + 1) * 20,
    				height: 20,
    				width: 20,
    				fill: dayFill,
    				stroke: dayStroke2,
    				"stroke-width": 1
    			};
    			for (let key in dayBoxAttrs) {
    				dayBox.setAttribute(key, dayBoxAttrs[key]);
    			}
    
    			//capitalized weekday
    			const displayWeekday = DAYS[days[day]].charAt(0).toUpperCase() + DAYS[days[day]].slice(1);
    			
    			//title of each rect
    			const title = document.createElementNS("http://www.w3.org/2000/svg", "title");
    			title.textContent = `${displayWeekday}, ${dayOfMonthDisplay} ${displayMonth} ${year}`;
    			dayBox.appendChild(title);
    			
    			//text of each rect
    			const text = document.createElementNS("http://www.w3.org/2000/svg", "text");
    			text.textContent = dayOfMonthDisplay;
    			const textAttrs = {
    			    x: (days[day] * 20) + 10,
    				y: ((week + 1) * 20) + 10,
    				"dominant-baseline": "middle",
    				fill: "#fff",
    				//"font-family": "monospace",
    				"font-size": 8,
    				"text-anchor": "middle",
    				"pointer-events": "none",
    				"user-select": "none"
    			};
    			for (let key in textAttrs) {
    				text.setAttribute(key, textAttrs[key]);
    			}
    			
    			//append it all
    			svg.appendChild(dayBox);
    			svg.appendChild(text);
    			
    			//increment display date
    			dayOfMonthDisplay++;
    		}
    	}
    	
    	//month
    	const monthDisplay = document.createElementNS("http://www.w3.org/2000/svg",	"text");
    	monthDisplay.textContent = `${displayMonth}`;
    	monthDisplay.classList.add("month");
    	monthDisplay.classList.add(MONTHS[month]);
    	let monthTextAttrs = {
    		x: "50%",
    		y: 10,
    		"dominant-baseline": "middle",
    		fill: "#fff",
    		//"font-family": "monospace",
    		"font-size": 10,
    		"text-anchor": "middle",
    		"pointer-events": "none",
    		"user-select": "none"
    	};
    	for (let key in monthTextAttrs) {
    		monthDisplay.setAttribute(key, monthTextAttrs[key]);
    	}
    	svg.appendChild(monthDisplay);
    
    	//year
    	const yearDisplay = document.createElementNS("http://www.w3.org/2000/svg","text");
    	yearDisplay.textContent = year;
    	yearDisplay.classList.add("year");
    	let yearTextAttrs = {
    		x: 128,
    		y: 10,
    		"dominant-baseline": "middle",
    		fill: "#fff",
    // 		"font-family": "Roboto Condensed",
    		"font-size": 6,
    		"text-anchor": "middle",
    		"pointer-events": "none",
    		"user-select": "none"
    	};
    	for (let key in yearTextAttrs) {
    		yearDisplay.setAttribute(key, yearTextAttrs[key]);
    	}
    	
    	svg.appendChild(yearDisplay);
    	el.appendChild(svg);
    };
    //************************
    //That's it. That's all there is to it.
    // Use it by pointing it at an element:
    // svgCal(document.querySelector("#myElement"));
    
    
    //use it!
    let month = 0;
    let today = new Date(new Date().getFullYear(), new Date().getMonth() + month, new Date().getDate());
    
    const currentMonth = () => {
    	let target = document.querySelector('#d');
    	target.removeChild(target.lastChild);
    	svgCal(document.querySelector("#d"));
    }
    currentMonth();
    
    document.querySelector('.left').addEventListener('click', () => {
    	let target = document.querySelector('#d');
    	target.removeChild(target.lastChild);
    	month--;
    	today = new Date(new Date().getFullYear(), new Date().getMonth() + month, 1);
    	svgCal(target, today);
    });
    
    document.querySelector('.right').addEventListener('click', () => {
    	let target = document.querySelector('#d');
    	target.removeChild(target.lastChild);
    	month++;
    	today = new Date(new Date().getFullYear(), new Date().getMonth() + month, 1);
    	svgCal(target, today);
    });


    $(".loading").hide();
    
    function setTanggal(str){
        let tglParsed = moment(str).format('YYYY-MM-Do');
        console.log(tglParsed);
        
        tanggalSet = tglParsed;
        
        reloadAPI();
    }
    
    $(".today").on('click', function(event){
        event.stopPropagation();
        event.stopImmediatePropagation();
        //(... rest of your JS code)
        console.log(event.value);
    });

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