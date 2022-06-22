<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Oncard.id</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Kasir untuk sekolah" />
    <meta name="keywords" content="kantin, sekolah, kantin sekolah online, online cashier, kasir online">
    <meta name="author" content="phoenixkd" />

    <link rel="icon" href="https://image.flaticon.com/icons/png/512/1995/1995609.png" type="image/x-icon">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- tambahan ego  -->
    <link rel="stylesheet" href="https://www.jqueryscript.net/demo/Bootstrap-4-Dropdown-Select-Plugin-jQuery/dist/css/bootstrap-select.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">

    <link href="<?=base_url();?>/oncard_template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url();?>/oncard_template/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- ------------- -->
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.css">

    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">


    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;0,900;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@100;200;400;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,600;0,800;0,900;1,200;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&display=swap');

        body {
            color: #000;
            overflow-x: hidden;
            /*height: 100%;*/
            background: rgb(255, 255, 255);
            /*background: linear-gradient(90deg, rgba(0, 255, 106, 1) 0%, rgba(28, 126, 25, 1) 100%);*/
            /*background-repeat: no-repeat*/
            /*font-family: Montserrat, sans-serif;*/
            font-family: 'Nunito', sans-serif;
            font-size:1.5vh;
        }

        .boxShadow {
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        #horeee {
            outline: none;
        }
        
        .classify {
            padding:1vh;
            border-radius:3px;
            border:1px solid rgba(0,0,0,0.215);
            text-align:center;
            cursor:pointer;
        }
        
        .activeClassify {
            background-color: rgb(61 192 132);
        }
        
        
        .lds-spinner {
          color: official;
          display: inline-block;
          position: relative;
          width: 40px;
          height: 40px;
          padding-top:25px;
        }
        .lds-spinner div {
          transform-origin: 40px 40px;
          animation: lds-spinner 1.2s linear infinite;
        }
        .lds-spinner div:after {
          content: " ";
          display: block;
          position: absolute;
          top: 3px;
          left: 37px;
          width: 6px;
          height: 18px;
          border-radius: 20%;
          background: #cef;
        }
        .lds-spinner div:nth-child(1) {
          transform: rotate(0deg);
          animation-delay: -1.1s;
        }
        .lds-spinner div:nth-child(2) {
          transform: rotate(30deg);
          animation-delay: -1s;
        }
        .lds-spinner div:nth-child(3) {
          transform: rotate(60deg);
          animation-delay: -0.9s;
        }
        .lds-spinner div:nth-child(4) {
          transform: rotate(90deg);
          animation-delay: -0.8s;
        }
        .lds-spinner div:nth-child(5) {
          transform: rotate(120deg);
          animation-delay: -0.7s;
        }
        .lds-spinner div:nth-child(6) {
          transform: rotate(150deg);
          animation-delay: -0.6s;
        }
        .lds-spinner div:nth-child(7) {
          transform: rotate(180deg);
          animation-delay: -0.5s;
        }
        .lds-spinner div:nth-child(8) {
          transform: rotate(210deg);
          animation-delay: -0.4s;
        }
        .lds-spinner div:nth-child(9) {
          transform: rotate(240deg);
          animation-delay: -0.3s;
        }
        .lds-spinner div:nth-child(10) {
          transform: rotate(270deg);
          animation-delay: -0.2s;
        }
        .lds-spinner div:nth-child(11) {
          transform: rotate(300deg);
          animation-delay: -0.1s;
        }
        .lds-spinner div:nth-child(12) {
          transform: rotate(330deg);
          animation-delay: 0s;
        }
        @keyframes lds-spinner {
          0% {
            opacity: 1;
          }
          100% {
            opacity: 0;
          }
        }
        
        .lds-ellipsis {
          display: inline-block;
          position: relative;
          width: 60px;
          height: 15px;
        }
        .lds-ellipsis div {
          position: absolute;
          top: 5px;
          width: 5px;
          height: 5px;
          border-radius: 50%;
          background: #fff;
          animation-timing-function: cubic-bezier(0, 1, 1, 0);
        }
        .lds-ellipsis div:nth-child(1) {
          left: 8px;
          animation: lds-ellipsis1 0.6s infinite;
        }
        .lds-ellipsis div:nth-child(2) {
          left: 8px;
          animation: lds-ellipsis2 0.6s infinite;
        }
        .lds-ellipsis div:nth-child(3) {
          left: 32px;
          animation: lds-ellipsis2 0.6s infinite;
        }
        .lds-ellipsis div:nth-child(4) {
          left: 56px;
          animation: lds-ellipsis3 0.6s infinite;
        }
        @keyframes lds-ellipsis1 {
          0% {
            transform: scale(0);
          }
          100% {
            transform: scale(1);
          }
        }
        @keyframes lds-ellipsis3 {
          0% {
            transform: scale(1);
          }
          100% {
            transform: scale(0);
          }
        }
        @keyframes lds-ellipsis2 {
          0% {
            transform: translate(0, 0);
          }
          100% {
            transform: translate(24px, 0);
          }
        }


        .bombardir {
            font-size: 1em;
            background-color: #000;
            color: #fff;
            border-radius: 6px;
            padding: 15px;
            padding-left: 2em;
            padding-right: 2em;
            display: block;
            text-align: center;
            margin: auto;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }

        /*tanggal*/
        input[type="date"]::-webkit-datetime-edit,
        input[type="date"]::-webkit-inner-spin-button,
        input[type="date"]::-webkit-clear-button {
            color: #fff;
            position: relative;
        }

        input[type="date"]::-webkit-datetime-edit-year-field {
            position: absolute !important;
            /*border-left:1px solid #8c8c8c;*/
            padding: 2px;
            color: #000;
            left: 56px;
        }

        input[type="date"]::-webkit-datetime-edit-month-field {
            position: absolute !important;
            /*border-left:1px solid #8c8c8c;*/
            padding: 2px;
            color: #000;
            left: 30px;
        }


        input[type="date"]::-webkit-datetime-edit-day-field {
            position: absolute !important;
            color: #000;
            padding: 2px;
            left: 4px;

        }

        hr.hr-16 {
            border: 0;
            border-top: 1px dashed #8c8c8c;
            text-align: center;
        }

        hr.hr-16:after {
            content: '\002702';
            display: inline-block;
            position: relative;
            top: -13px;
            padding: 0 3px;
            background: #fff;
            color: #8c8c8c;
            font-size: 18px;
        }


        .disp-none {
            display: none !important;
        }

        .disp-block {
            display: block !important;
        }

        #toast {
            visibility: hidden;
            max-width: 50px;
            height: 50px;
            /*margin-left: -125px;*/
            margin: auto;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 2px;

            position: fixed;
            z-index: 988577693;
            left: 0;
            right: 0;
            bottom: 30px;
            font-size: 17px;
            white-space: nowrap;
            overflow: hidden;

        }

        #toast #img {
            width: 50px;
            height: 50px;

            float: left;

            padding-top: 16px;
            padding-bottom: 16px;

            box-sizing: border-box;


            background-color: #111;
            color: #fff;
        }

        #toast #desc {


            color: #fff;

            padding: 16px;

            overflow: hidden;
            white-space: nowrap;
        }

        #toast.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, expand 0.5s 0.5s, stay 3s 1s, shrink 0.5s 2s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, expand 0.5s 0.5s, stay 3s 1s, shrink 0.5s 4s, fadeout 0.5s 4.5s;

        }

        @-webkit-keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframes expand {
            from {
                min-width: 50px
            }

            to {
                min-width: 350px
            }
        }

        @keyframes expand {
            from {
                min-width: 50px
            }

            to {
                min-width: 350px
            }
        }

        @-webkit-keyframes stay {
            from {
                min-width: 350px
            }

            to {
                min-width: 350px
            }
        }

        @keyframes stay {
            from {
                min-width: 350px
            }

            to {
                min-width: 350px
            }
        }

        @-webkit-keyframes shrink {
            from {
                min-width: 350px;
            }

            to {
                min-width: 50px;
            }
        }

        @keyframes shrink {
            from {
                min-width: 350px;
            }

            to {
                min-width: 50px;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 60px;
                opacity: 0;
            }
        }

        @keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 60px;
                opacity: 0;
            }
        }

        #loads {
            position: fixed;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 999999;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            display: none;

        }

        .stadus:hover {
            cursor: pointer;
        }

        .bonjour {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin-top: 50px;
            height: 100%;
            width: 100%;
            transition: .3s ease;
            background-color: rgba(255, 255, 255, .5);
            z-index: 666;
            display: flex;
            text-align: center;
            flex-wrap: wrap;
            align-content: center;
            backdrop-filter: blur(10px);
        }

        .square {
            width: 100%;
            height: 300px;

            background-size: cover;
            background-position: center;


            display: block;

            text-align: center;


        }

        .inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .inputfile+label {
            font-size: 14px;
            font-weight: 200;
            color: white;
            background-color: black;
            text-align: center;
            display: block;
            margin: auto;
            margin-top: 20px;
            padding: 6px;
            padding-left: 25px;
            padding-right: 25px;
            cursor: pointer;
            border-radius: 3px;

        }

        .inputfile:focus+label,
        .inputfile+label:hover {
            background-color: #ebca13;
        }

        .skeleton-box {
            display: inline-block;
            height: 1em;
            position: relative;
            overflow: hidden;
            background-color: #dddbdd;
        }

        .eachparty {
            -webkit-transition: all 0.2s linear 0s;
            -o-transition: all 0.2s linear 0s;
            -ms-transition: all 0.2s linear 0s;
            -moz-transition: all 0.2s linear 0s;
        }

        .skeleton-box::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            transform: translateX(-100%);
            background-image: linear-gradient(90deg, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0.2) 20%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0));
            -webkit-animation: shimmer 2s infinite;
            animation: shimmer 2s infinite;
            content: "";
        }

        @-webkit-keyframes shimmer {
            100% {
                transform: translateX(100%);
            }
        }

        @keyframes shimmer {
            100% {
                transform: translateX(100%);
            }
        }

        .blog-post__headline {
            font-size: 1.25em;
            font-weight: bold;
        }

        .blog-post__meta {
            font-size: 0.85em;
            color: #6b6b6b;
        }

        .o-media {
            display: flex;
        }

        .o-media__body {
            flex-grow: 1;
            margin-left: 1em;
        }

        .o-vertical-spacing>*+* {
            margin-top: 0.75em;
        }

        .o-vertical-spacing--l>*+* {
            margin-top: 2em;
        }

        .drag-area {
            border: 1px dashed #e0e0e0;
            height: 180px;
            width: 100%;
            margin-top: 50px;
            border-radius: 0px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .drag-area.active {
            border: 2px solid #00ed6a;
        }

        .drag-area .icon {
            font-size: 100px;
            color: #e0e0e0;
        }

        .drag-area header {
            font-size: 20px;
            font-weight: 500;
            color: #e0e0e0;
        }

        .drag-area span {
            font-size: 25px;
            font-weight: 500;
            color: #e0e0e0;
            margin: 10px 0 15px 0;
        }

        .drag-area button {
            padding: 10px 25px;
            font-size: 20px;
            font-weight: 500;
            border: none;
            outline: none;
            background: #00ed6a;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        .drag-area img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 5px;
        }

        /* ===== Scrollbar CSS ===== */
        /* Firefox */
        * {
            scrollbar-width: auto;
            scrollbar-color: #8f8f8f #ededed;
        }

        /* Chrome, Edge, and Safari */
        *::-webkit-scrollbar {
            width: 21px;
        }

        *::-webkit-scrollbar-track {
            background: #ededed;
        }

        *::-webkit-scrollbar-thumb {
            background-color: #8f8f8f;
            border-radius: 75px;
            border: 6px solid #ededed;
        }

        /* Absolute Center Spinner */
        .loading {
            position: fixed;
            z-index: 67777;
            overflow: show;
            margin: auto;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 50px;
            height: 50px;
        }

        /* Transparent Overlay */
        .loading:before {
            content: '';
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.5);
        }

        /* :not(:required) hides these rules from IE9 and below */
        .loading:not(:required) {
            /* hide "loading..." text */
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0;
        }

        .loading:not(:required):after {
            content: '';
            display: block;
            font-size: 10px;
            width: 50px;
            height: 50px;
            margin-top: -0.5em;
            margin-left: -20px;

            border: 15px solid rgba(72, 157, 81, 1.0);
            border-radius: 100%;
            border-bottom-color: transparent;
            -webkit-animation: spinner 1s linear 0s infinite;
            animation: spinner 1s linear 0s infinite;


        }

        .modal-dialog {
            max-width: 40% !important;
            margin-left: auto;
            margin-right: auto;
            border: 0px;
        }
        
        .konten {
            display:grid;
            grid-template-columns:repeat(6,1fr);
            
        }
        
        .listKonten,.listKontenView {
            width:100%;
            display:grid;
            grid-template-columns:repeat(10,1fr);
            gap:10px;
            height:auto!important;
            padding-top:1.5vh;
            padding-bottom:1.5vh;
            -webkit-transition: all 0.2s ease-in 0s;
            -o-transition: all 0.2s ease-in 0s;
            -ms-transition: all 0.2s ease-in 0s;
            -moz-transition: all 0.2s ease-in 0s;
            
        }
        
        .listKonten {
            border-bottom:2px solid #eee;
        }
        .listKontenView {
            border-bottom: 1px dashed #e0e0e0;
        }
        
        .listKontenView:hover {
            border-radius:5px;
            background:rgba(0,0,0,0.08);
        }
        
        #d {
        	height:auto;
        	width:100%;
        	border-radius:13px;
        	background:rgb(61 192 132);
        	/*border:2px solid rgba(255,255,255,0.5);*/
        	padding-top:10px;
        	padding-bottom:10px;
        }
        .left, .right {
        	background:none;
        	color:#fff;
        	padding:0;
        	margin:auto;
        	margin-left:1vh;
        	border:1px solid rgba(255,255,255,0.5);
        	height:2vh;
        	width:2vh;
        	font-size:1.5vh!important;
        	line-height:10px;
        	cursor:pointer;
        	
        }
        .right{
        	top:5%;
        	left:10%;
        	border-radius:0px 3px 3px 0px;
        }
        .left{
        	top:5%;
        	left:3%;
        	border-radius:3px 0px 0px 3px;
        }
        .right:hover, .left:hover{
        	opacity:0.7;
        }
        .day:hover{
        	stroke:#fff;
        	cursor:pointer;
        }
        
        .errorMessage {
            background: rgb(176,0,71);
            background: linear-gradient(180deg, rgba(176,0,71,1) 0%, rgba(131,32,32,1) 100%);
        }
        
        .successMessage {
            background: linear-gradient(to right, #00b09b, #96c93d);
        }
        
        .saturday, .sunday{
        	fill:rgba(255,255,255,0.1);
        }
        svg{
        /* 	border:2px solid red; */
        }
        .today{
        	fill:rgba(0,255,0,0.3);
        }
        
        @media (max-width:820px){
            .konten {
                display:block;
                margin-bottom:10px;
            }
        }

        @media (max-width:700px) {
            .modal-dialog {
                max-width: 96% !important;
                margin-left: auto;
                margin-right: auto;
            }

            .sidebar-card {
                display: none;
            }
        }

        .dataTable {
            overflow-x: scroll;
            border: .5px solid #f2f2f2 !important;
        }

        .dataTable th {
            border: .5px solid #f2f2f2 !important;
            padding: 20px !important;
            font-weight: 600 !important;
            font-size: .9em !important;
        }

        .dataTable td {
            border: none !important;
            font-size: .8em !important;
            padding: 10px !important;
            padding-left: 20px !important;
            padding-right: 20px !important;
        }

        .dataTables_length {
            display: none;
        }

        .dataTables_filter {
            width: 100%;
        }

        .dataTables_filter input[type="search"] {
            border: .5px solid #e1e1e1 !important;
            font-size: .84em;
            width: 100% !important;
            -webkit-transition: all 0.2s linear 0s;
            -o-transition: all 0.2s linear 0s;
            -ms-transition: all 0.2s linear 0s;
            -moz-transition: all 0.2s linear 0s;
            border-radius: 0px;
            padding: 6px;
            padding-left: 15px;
            padding-right: 15px;
        }

        .dataTables_filter input[type="search"]:focus {
            border-radius: 100px;
            outline: none;
        }

        .dataTables_info,
        .previous,
        .next,
        .paginate_button {
            margin-top: 1%;
            border: .5px solid #e1e1e1 !important;
            line-height: .7em;
            padding: 15px;
            padding-bottom: 10px;
            font-size: .84em;
        }

        .previous,
        .next {
            /*border:.5px solid #e1e1e1!important;*/
            margin-top: 5%;
            font-size: .88em;
            color: #000 !important;
        }

        .paginate_button {
            padding: 10px !important;
            background: transparent !important;
        }

        /* Animation */

        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-moz-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-o-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }

        }

        .selectpicker {
            width: 100% !important;
            display: block !important;
        }

        .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
            width: 100% !important;
            border-radius: 0px !important;
        }


        .page-ath-wrap {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .page-ath-content {
            background: transparent;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 60px 40px;
        }

        .page-ath-heading {
            font-size: 28px;
            font-weight: 700;
            color: #231f20;
            padding-bottom: 40px;
        }


        .page-ath-form,
        .page-ath-header,
        .page-ath-footer,
        .page-ath-text {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .page-ath-form {
            padding-bottom: 100px;
        }

        .page-ath-header {
            visibility: hidden;
            opacity: 0;
        }

        .page-ath-footer {
            /*font-family: 'Roboto', sans-serif;*/
            padding-top: 40px;
        }

        .page-ath-footer p {
            font-size: 15px;
        }

        .page-ath-footer p a {
            display: inline-block;
            margin-left: 3px;
            color: #000;
            font-weight: 600;
            text-decoration: underline;
        }

        .page-ath-footer p a:hover {
            color: #00c58a;
        }

        .auth-part-logo {}

        .page-content {
            margin-left: 260px;
            transition: all .5s;
            padding: 15px;
        }

        .page-content.page-active {
            margin-left: 0px;
        }




        /*---------signup-step-------------*/
        .register-form-content {
            justify-content: center;
        }

        .register-form-content .page-ath-form {
            padding-bottom: 0px;
        }

        .register-form-content .form-align-box,
        .register-form-content .page-ath-form,
        .register-form-content .wizard,
        .register-form-content .register-wizard-box,
        .register-form-content .tab-content,
        .register-form-content .wizard .tab-pane {
            height: 100%;
        }

        .register-form-content .page-ath-header {
            display: none;
        }

        .register-wizard-box .tab-pane h4 {
            margin-top: 0px;
            font-size: 18px;
            color: #8e8c8c;
            margin-bottom: 12px;
        }

        .register-wizard-box .tab-pane h3 {
            font-size: 26px;
            font-weight: 700;
            color: #231f20;
            padding-bottom: 25px;
        }

        .wizard {
            position: relative;
        }

        .wizard .nav-tabs {
            position: relative;
            margin-bottom: 0;
            border-bottom-color: transparent;
        }

        .wizard>div.wizard-inner {
            position: absolute;
            bottom: 20px;
        }

        .wizard .nav-tabs>li>a.active .round-tab,
        .wizard .nav-tabs>li>a.active:hover .round-tab,
        .wizard .nav-tabs>li>a.active:focus .round-tab {
            cursor: default;
            background-color: #00c58a;
            color: #fff;
        }

        .wizard li.active span.round-tab {
            background: #0db02b;
            color: #fff;
            border-color: #0db02b;
        }

        .wizard li.active span.round-tab i {
            color: #5bc0de;
        }

        .wizard .nav-tabs>li.active>a i {
            color: #0db02b;
        }

        .wizard .nav-tabs>li a {
            padding: 15px;
            position: relative;
        }

        .wizard .nav-tabs>li {
            width: 25%;
            position: relative;
        }

        .wizard .nav-tabs>li a .round-tab {
            width: 30px;
            height: 30px;
            color: #868cbd;
            font-weight: 600;
            background-color: #ced2f2;
            display: inline-block;
            border-radius: 50%;
            padding-top: 6px;
            text-align: center;
            z-index: 1;
            position: relative;
            transition: 0.5s;
        }

        .wizard .nav-tabs>li:before,
        .wizard .nav-tabs>li:after {
            content: '';
            position: absolute;
            height: 2px;
            width: 100%;
            top: 50%;
            background-color: #ced2f2;
            left: 15px;
            transition: 0.5s;
        }

        .wizard .nav-tabs>li:after {
            background-color: #178569;
            width: 0;
        }

        .wizard .nav-tabs>li.done a .round-tab {
            background-color: #178569;
            color: #fff;
        }

        .wizard .nav-tabs>li.done:after {
            width: 100%;
        }

        .wizard .nav-tabs>li.done.active a .round-tab {
            background-color: #00c58a;
            color: #fff;
        }

        .wizard .nav-tabs>li.done.active~li .round-tab {
            background: #ced2f2;
            color: #868cbd;
        }

        .wizard .nav-tabs>li.active:after,
        .wizard .nav-tabs>li.active~li:after {
            width: 0;
        }


        .wizard .nav-tabs>li:last-child:before,
        .wizard .nav-tabs>li:last-child:after {
            display: none;
        }

        .wizard .nav-tabs>li a.disabled {
            cursor: not-allowed;
        }

        .wizard .nav-tabs>li a i {
            position: absolute;
            top: -15px;
            font-style: normal;
            font-weight: 400;
            white-space: nowrap;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 12px;
            font-weight: 700;
            color: #000;
        }



        .wizard .tab-content>.active {
            display: flex;
            justify-content: space-between;
            flex-direction: column;
        }

        .wizard .tab-pane {
            position: relative;
            padding-top: 40px;
            min-height: 100px !important;
        }

        .step-btn {
            background-color: transparent;
        }

        .step-btn i {
            width: 40px;
            height: 40px;
            background-color: #e9e9ea;
            display: inline-block;
            border-radius: 50%;
            color: #5e666b;
            font-size: 15px;
            text-align: center;
            padding-top: 12px;
        }

        .step-btn span {
            display: inline-block;
            font-weight: 700;
            font-size: 16px;
            color: #5e666b;
            letter-spacing: 0.3px;
        }

        .wizard h3 {
            margin-top: 0;
        }

        .prev-step,
        .next-step {
            border: none;
            margin-top: 30px;
        }

        .prev-step span {
            margin-left: 10px;
        }

        .next-step span {
            margin-right: 10px;
            color: #00c58a;
        }

        .next-step i {
            box-shadow: 0px 4px 12px rgba(81, 97, 206, 0.5);
            background-color: #00c58a;
            color: #fff;
        }

        .form-input-steps .custom-control.custom-checkbox label {
            font-family: 'Roboto', sans-serif;
            font-size: 15px;
        }

        .form-input-steps .custom-control.custom-checkbox label a {
            display: inline-block;
            margin-left: 3px;
            color: #000;
            font-weight: 600;
            text-decoration: underline;

        }

        .form-input-steps .custom-control.custom-checkbox label a:hover {
            color: #00c58a;
        }

        .form-control {
            height: auto;
            padding: 16px 18px;
            border-radius: 13px;
            font-weight: 400;
            color: #333;
            border-color: #e4e4e4;
        }

        .list-inline>li {
            display: inline-block;
            padding-right: 5px;
            padding-left: 5px;
        }

        .progress {
            border-radius: 50px;
        }

        .progress-bar {
            background-color: #00c58a;
        }

        .invoice-head td {
            padding: 0 8px;
        }

        .containersss {
            padding-top: 30px;
        }

        .invoice-body {
            background-color: transparent;
        }

        .invoice-thank {
            margin-top: 60px;
            padding: 5px;
        }

        address {
            margin-top: 15px;
        }


        .contact-area {
            width: 100%;
            height: 100vh;
            position: relative;
        }

        .contactUs {
            position: fixed;
            max-width: 350px;
            padding: 40px 20px;
            overflow: hidden;
            margin: 0 auto;
            z-index: 19386;
            bottom: 5%;
            right: 0px;
            opacity: .25;
            -webkit-transition: all 0.55s;
            -moz-transition: all 0.55s;
            -o-transition: all 0.55s;
            transition: all 0.55s;

        }

        .contactUs:hover {
            opacity: 1;
        }

        /*@media (min-width: 1024px) {*/
        /*  .contactUs {*/
        /*    position: absolute;*/
        /*    top: 50%;*/
        /*    left: 50%;*/
        /*    -webkit-transform: translate(-50%, -50%);*/
        /*    -moz-transform: translate(-50%, -50%);*/
        /*    -ms-transform: translate(-50%, -50%);*/
        /*    -o-transform: translate(-50%, -50%);*/
        /*    transform: translate(-50%, -50%);*/
        /*  }*/
        /*}*/
        .contactUs main {
            float: left;
            width: 100%;
            position: relative;

        }

        .contactUs main section {
            border-radius: 5px;
            float: left;
            width: 100%;
            background: rgb(20, 130, 90);
            background: linear-gradient(227deg, rgba(20, 130, 90, 1) 0%, rgba(28, 200, 138, 1) 100%);

        }

        .contactUs main section .content {
            float: left;
            width: 100%;
            padding: 10px;
            position: relative;
            text-align: left;
            display: flex;
        }

        @media (min-width: 414px) {
            .contactUs main section .content {
                text-align: left;
                display: inline-block;
            }
        }

        .contactUs main section .content img {
            display: flex;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 20px;
            margin-top: 10px;
        }

        @media (min-width: 414px) {
            .contactUs main section .content img {
                float: left;
                width: 50px;
                height: auto;
                margin-right: 4%;
                margin-top: 15px;
            }
        }

        .contactUs main section .content aside {
            float: left;
            width: 100%;
            color: #ffffff;
            margin-top: 10px;
        }

        @media (min-width: 414px) {
            .contactUs main section .content aside {
                width: 60%;
            }
        }

        .contactUs main section .content aside h1 {
            font-weight: 100;
            font-size: 22px;
            /* margin-bottom: 10px; */
            line-height: 1em;
            margin: 0px;
        }

        .contactUs main section .content aside p {
            font-size: 14px;
            letter-spacing: 0.5px;
            line-height: 160%;
        }

        .contactUs main .title {
            float: left;
            width: 100%;
            background: rgb(54, 136, 107);
            background: linear-gradient(227deg, rgba(54, 136, 107, 1) 0%, rgba(30, 139, 100, 1) 100%);
            max-height: 0px;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            overflow: hidden;
            -webkit-transition: all 0.55s;
            -moz-transition: all 0.55s;
            -o-transition: all 0.55s;
            transition: all 0.55s;
        }

        .contactUs main .title.active {
            max-height: 100px;
            -webkit-transition: all 1.3s;
            -moz-transition: all 1.3s;
            -o-transition: all 1.3s;
            transition: all 1.3s;
        }

        .contactUs main .title.active p {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
            transition-delay: 0.2s;
        }

        .contactUs main .title p {
            padding: 15px 30px;
            color: #ffffff;
            font-size: 16px;
            display: inline-block;
            font-weight: 500;
            letter-spacing: 0.5px;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
        }

        .contactUs main button {
            position: absolute;
            bottom: 0;
            right: 50%;
            background: rgb(150, 255, 217);
            background: linear-gradient(227deg, rgba(150, 255, 217, 1) 0%, rgba(28, 200, 138, 1) 100%);
            color: #fff;
            border: 0;
            width: 200px;
            height: 48px;
            text-align: center;
            border-radius: 30px;
            font-size: 16px;
            letter-spacing: 0.5px;
            margin-bottom: -24px;
            margin-right: -100px;
            -webkit-transition: all 0.4s;
            -moz-transition: all 0.4s;
            -o-transition: all 0.4s;
            transition: all 0.4s;
            transition-delay: 0.1s;
            outline: none;
            overflow: hidden;
            z-index: 10;
            font-family: inherit;
        }

        .contactUs main button span {
            opacity: 1;
            -webkit-transition: opacity 0.2s;
            -moz-transition: opacity 0.2s;
            -o-transition: opacity 0.2s;
            transition: opacity 0.2s;
            transition-delay: 0.4s;
            display: block;
            width: 200px;
            float: left;
            padding: 0px 0px;
        }

        .contactUs main button svg {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            opacity: 0;
            -webkit-transition: all 0.4s;
            -moz-transition: all 0.4s;
            -o-transition: all 0.4s;
            transition: all 0.4s;
        }

        .contactUs main button svg path {
            fill: #fff;
        }

        .contactUs main button.active {
            margin-right: 0;
            right: 20px;
            width: 65px;
            height: 65px;
            margin-bottom: -32.5px;
            text-indent: 100%;
            white-space: nowrap;
            overflow: hidden;
            border-radius: 65px;
            box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.2);
        }

        .contactUs main button.active span {
            opacity: 0;
            transition-delay: 0s;
            width: 200px;
        }

        .contactUs main button.active svg {
            opacity: 1;
            transition-delay: 0.5s;
        }

        .contactUs nav {
            float: left;
            width: 100%;
            overflow: hidden;
            max-height: 0px;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;

        }

        .contactUs nav.active {
            max-height: 600px;
            -webkit-transition: all 1s;
            -moz-transition: all 1s;
            -o-transition: all 1s;
            transition: all 1s;
        }

        .contactUs nav.active a {
            opacity: 1;
            -webkit-transform: translateY(0px);
            -moz-transform: translateY(0px);
            -ms-transform: translateY(0px);
            -o-transform: translateY(0px);
            transform: translateY(0px);
            -webkit-transition: all 0.7s;
            -moz-transition: all 0.7s;
            -o-transition: all 0.7s;
            transition: all 0.7s;
        }

        .contactUs nav.active a:nth-of-type(1) {
            transition-delay: 0.5s;
        }

        .contactUs nav.active a:nth-of-type(2) {
            transition-delay: 0.7s;
        }

        .contactUs nav.active a:nth-of-type(3) {
            transition-delay: 0.9s;
        }

        .contactUs nav a {
            float: left;
            width: 100%;
            margin-top: 18px;
            background-color: #36886b;
            padding: 18px 20px;
            border-radius: 5px;
            text-decoration: none;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
            opacity: 0;
            -webkit-transform: translateY(-10px);
            -moz-transform: translateY(-10px);
            -ms-transform: translateY(-10px);
            -o-transform: translateY(-10px);
            transform: translateY(-10px);
            position: relative;
        }

        @media (min-width: 414px) {
            .contactUs nav a {
                padding: 18px 30px;
            }
        }

        .contactUs nav a .arrow {
            position: absolute;
            right: 15px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .contactUs nav a .arrow path {
            fill: #e6e6e6;
        }

        .contactUs nav a.gmail .icon svg {
            background-color: #d14836;
        }

        .contactUs nav a.gmail .content h1 {
            color: #fff;
        }

        .contactUs nav a.facebook .icon svg {
            background-color: #3ccd99;
        }

        .contactUs nav a.facebook .content h1 {
            color: #fff;
        }

        .contactUs nav a.twitter .icon svg {
            background-color: #1da1f2;
        }

        .contactUs nav a.twitter .content h1 {
            color: #fff;
        }

        .contactUs nav a .icon {
            float: left;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 20px;
        }

        .contactUs nav a .icon svg {
            width: 100%;
            height: 100%;
            padding: 14px;
        }

        .contactUs nav a .icon svg path {
            fill: #ffffff;
        }

        .contactUs nav a .content h1 {
            font-size: 20px;
            font-weight: 400;
            line-height: 160%;
            letter-spacing: 0.4px;
        }

        .contactUs nav a .content span {
            font-size: 14px;
            color: #b3b3b3;
            display: block;
            letter-spacing: 0.4px;
        }
    </style>


</head>