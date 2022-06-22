<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Inisiasi Data KH. Ahmad Dahlan by Oncard</title>

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
    
    <link href="/oncard_template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="/oncard_template/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/oncard_template/css/sb-admin-2.min.css" rel="stylesheet">
    
    <!-- ------------- -->
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.css">
  
  <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  
  
  

  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
  
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
        }
        #horeee {
            outline:none;
        }
        
        .showIt {
            display:block;
        }
        .hideIt {
            display:none;
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
            left: 0;right:0;
            bottom: 30px;
            font-size: 17px;
            white-space: nowrap;
            overflow:hidden;
            
        }
        #toast #img{
        	width: 50px;
        	height: 50px;
            
            float: left;
            
            padding-top: 16px;
            padding-bottom: 16px;
            
            box-sizing: border-box;
        
            
            background-color: #111;
            color: #fff;
        }
        #toast #desc{
        
            
            color: #fff;
           
            padding: 16px;
            
            overflow: hidden;
        	white-space: nowrap;
        }
        
        #toast.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 2s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 4s, fadeout 0.5s 4.5s;
            
        }
        
        @-webkit-keyframes fadein {
            from {bottom: 0; opacity: 0;} 
            to {bottom: 30px; opacity: 1;}
        }
        
        @keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }
        
        @-webkit-keyframes expand {
            from {min-width: 50px} 
            to {min-width: 350px}
        }
        
        @keyframes expand {
            from {min-width: 50px}
            to {min-width: 350px}
        }
        @-webkit-keyframes stay {
            from {min-width: 350px} 
            to {min-width: 350px}
        }
        
        @keyframes stay {
            from {min-width: 350px}
            to {min-width: 350px}
        }
        @-webkit-keyframes shrink {
            from {min-width: 350px;} 
            to {min-width: 50px;}
        }
        
        @keyframes shrink {
            from {min-width: 350px;} 
            to {min-width: 50px;}
        }
        
        @-webkit-keyframes fadeout {
            from {bottom: 30px; opacity: 1;} 
            to {bottom: 60px; opacity: 0;}
        }
        
        @keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 60px; opacity: 0;}
        }
        
        .methodex{
            position:relative;
            -webkit-transition:all 0.2s linear 0s;
            -o-transition:all 0.2s linear 0s;
            -ms-transition:all 0.2s linear 0s;
            -moz-transition:all 0.2s linear 0s;
        }
        .methodex:focus,.methodex:hover{
            background:#daf7db;
        }
        
        .pollSlider{
            max-height:95vh;
            overflow-y : auto;
            position:fixed;
            z-index:500;
             width:100%;
            background:#fff;
           bottom :-95vh;
            height:95vh;
            border-top-left-radius:20px;
            border-top-right-radius:20px;
            box-shadow:0px -5px 10px rgba(0,0,0,0.22);
            padding:20px;
            
            
        }
        #pollSlider-button{
            z-index:1032;
            position:fixed;
            width:100%;
            height:20px;
            bottom:0px;
            background:transparent;   
            display:none;
        }
        
        .bottom-nav {
          display: flex;
          position: fixed;
          bottom: 0;
          left: 0;
          right: 0;
          padding: 0.8rem 0;
          background-color: #252a32;
          z-index: 99;
          will-change: transform;
          transform: translateZ(0);
          box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 3px rgba(0, 0, 0, 0.24);
        }
        .bottom-nav-item {
          display: flex;
          flex-direction: column;
          flex-grow: 1;
          justify-content: center;
          text-align: center;
          font-size: 0.8rem;
          color: #f1f5f8;
        }
        .bottom-nav-link {
          display: flex;
          flex-direction: column;
        }
        .bottom-nav-link i {
            font-size:1.66em;
        }
        .bottom-nav .active {
          color: #53d5bd;
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
        .inputfile + label {
          font-size: 14px;
          font-weight: 200;
          color: white;
          background-color: black;
          text-align: center;
          display: block;
          margin: auto;
          margin-top: 20px;
          padding: 6px;
          padding-left: 25px; padding-right: 25px;
          cursor: pointer;
          border-radius: 3px;

        }

        .inputfile:focus + label,
        .inputfile + label:hover {
          background-color: #ebca13;
        }
        
        .skeleton-box {
            display: inline-block;
            height: 1em;
            position: relative;
            overflow: hidden;
            background-color: #dddbdd;
        }
        
        .eachparty{
            -webkit-transition:all 0.2s linear 0s;
            -o-transition:all 0.2s linear 0s;
            -ms-transition:all 0.2s linear 0s;
            -moz-transition:all 0.2s linear 0s;
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
            margin-top:50px;
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
            width: 11px;
          }
        
          *::-webkit-scrollbar-track {
            background: #fff;
          }
        
          *::-webkit-scrollbar-thumb {
            background-color: #ededed;
            border-radius: 75px;
            border: 3px solid #fff;
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
         margin-left:auto;
         margin-right:auto;
         border:0px;
        }
        
        @media (max-width:700px){
         .modal-dialog {
             max-width: 96% !important;
             margin-left:auto;
             margin-right:auto;
         }   
         .sidebar-card {
             display:none;
         }
        }
        .dataTable {
            overflow-x:scroll;
            border:.5px solid #f2f2f2!important;
        }
        .dataTable th {
            border:.5px solid #f2f2f2!important;
            padding:20px!important;
            font-weight:600!important;
            font-size:.9em!important;
        }
        
        .dataTable td {
            border:none!important;
            font-size:.8em!important;
            padding:10px!important;
            padding-left:20px!important;
            padding-right:20px!important;
        }
        .dataTables_length{
            display:none;
        }
        .dataTables_filter{
            width:100%;
        }
        .dataTables_filter input[type="search"]{
            border:.5px solid #e1e1e1!important;
            font-size:.84em;
            width:100%!important;
            -webkit-transition:all 0.2s linear 0s;
            -o-transition:all 0.2s linear 0s;
            -ms-transition:all 0.2s linear 0s;
            -moz-transition:all 0.2s linear 0s;
            border-radius:0px;
            padding:6px;
            padding-left:15px;
            padding-right:15px;
        }
        .dataTables_filter input[type="search"]:focus{
            border-radius:100px;
            outline:none;
        }
        .dataTables_info,.previous , .next,.paginate_button {
            margin-top:1%;
            border:.5px solid #e1e1e1!important;
            line-height:.7em;
            padding:15px;
            padding-bottom:10px;
            font-size:.84em;
        }
        .previous , .next {
            /*border:.5px solid #e1e1e1!important;*/
            margin-top:5%;
            font-size:.88em;
            color:#000!important;
        }
        .paginate_button{
            padding:10px!important;
            background:transparent!important;
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
        .selectpicker{
            width:100%!important;
            display:block!important;
        }
        .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn){
            width:100%!important;
            border-radius:0px!important;
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
            font-family: 'Roboto', sans-serif;
            padding-top: 40px;
        }
        .page-ath-footer p{
            font-size: 15px;
        }
        .page-ath-footer p a{
            display: inline-block;
            margin-left: 3px;
            color: #000;
            font-weight: 600;
            text-decoration: underline;
        }
        
        .page-ath-footer p a:hover{
            color: #00c58a;
        }
        .auth-part-logo {
            
        }
        .page-content {
            margin-left: 260px;
            transition: all .5s;
            padding: 15px;
        }
        .page-content.page-active{
            margin-left: 0px;
        }
        
        
        
        
        /*---------signup-step-------------*/
        .register-form-content{
            justify-content: center;
        }
        .register-form-content .page-ath-form{
            padding-bottom: 0px;
        }
        .register-form-content .form-align-box,
        .register-form-content .page-ath-form,
        .register-form-content .wizard,
        .register-form-content .register-wizard-box,
        .register-form-content .tab-content,
        .register-form-content .wizard .tab-pane{
            height: 100%;
        }
        .register-form-content .page-ath-header{
            display: none;
        }
        .register-wizard-box .tab-pane h4{
            margin-top: 0px;
            font-size: 18px;
            color: #8e8c8c;
            margin-bottom: 12px;
        }
        .register-wizard-box .tab-pane h3{
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
        
        .wizard > div.wizard-inner {
            position: absolute;
            bottom: 20px;
        }
        
        .wizard .nav-tabs > li > a.active .round-tab, 
        .wizard .nav-tabs > li > a.active:hover .round-tab, 
        .wizard .nav-tabs > li > a.active:focus .round-tab{
            cursor: default;
            background-color: #00c58a;
            color: #fff;
        }
        
        .wizard li.active span.round-tab {
            background: #0db02b;
            color: #fff;
            border-color: #0db02b;
        }
        .wizard li.active span.round-tab i{
            color: #5bc0de;
        }
        .wizard .nav-tabs > li.active > a i{
            color: #0db02b;
        }
        
        .wizard .nav-tabs > li a {
            padding: 15px;
            position: relative;
        }
        
        .wizard .nav-tabs > li{
            width: 25%;
            position: relative;
        }
        
        .wizard .nav-tabs > li a .round-tab{
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
        
        .wizard .nav-tabs > li:before,
        .wizard .nav-tabs > li:after{
            content: '';
            position: absolute;
            height: 2px;
            width: 100%;
            top: 50%;
            background-color: #ced2f2;
            left: 15px;
            transition: 0.5s;
        }
        .wizard .nav-tabs > li:after{
            background-color: #178569;
            width: 0;    
        }
        
        .wizard .nav-tabs > li.done a .round-tab {
            background-color: #178569;
            color: #fff;
        }
        
        .wizard .nav-tabs > li.done:after{
            width: 100%;
        }
        
        .wizard .nav-tabs > li.done.active a .round-tab{
            background-color: #00c58a;
            color: #fff;
        }
        
        .wizard .nav-tabs > li.done.active ~ li .round-tab {
            background: #ced2f2;
            color: #868cbd;
        }
        
        .wizard .nav-tabs > li.active:after, 
        .wizard .nav-tabs > li.active~li:after{
            width: 0;
        }
        
        
        .wizard .nav-tabs > li:last-child:before,
        .wizard .nav-tabs > li:last-child:after{
            display: none;
        }
        
        .wizard .nav-tabs > li a.disabled{
            cursor: not-allowed;
        }
        .wizard .nav-tabs > li a i{
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
        
        
        
        .wizard .tab-content>.active{
            display: flex;
            justify-content: space-between;
            flex-direction: column;
        }
        
        .wizard .tab-pane {
            position: relative;
            padding-top: 40px;
            min-height:100px!important;
        }
        .step-btn{
            background-color: transparent;
        }
        .step-btn i{
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
        .step-btn span{
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
        .next-step{
            border: none;
            margin-top: 30px;
        }
        .prev-step span{
            margin-left: 10px;
        }
        .next-step span{
            margin-right: 10px;
            color: #00c58a;
        }
        .next-step i {
                box-shadow: 0px 4px 12px rgba(81, 97, 206, 0.5);
            background-color: #00c58a;
            color: #fff;
        }
        
        .form-input-steps .custom-control.custom-checkbox label{
            font-family: 'Roboto', sans-serif;
            font-size: 15px;
        }
        
        .form-input-steps .custom-control.custom-checkbox label a{
            display: inline-block;
            margin-left: 3px;
            color: #000;
            font-weight: 600;
            text-decoration: underline;
            
        }
        .form-input-steps .custom-control.custom-checkbox label a:hover{
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
        .progress{
          border-radius: 50px;
        }
        .progress-bar{
          background-color: #00c58a;
        }
        
    
        #wrapper #content-wrapper {
             background-color: #fff; 
            width: 100%;
            overflow-x: hidden;
        }
        
    </style>
    
    
</head>
