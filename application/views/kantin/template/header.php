<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Kasir by Oncard</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Kasir untuk sekolah" />
    <meta name="keywords" content="kantin, sekolah, kantin sekolah online, online cashier, kasir online">
    <meta name="author" content="phoenixkd" />

    <link rel="icon" href="https://image.flaticon.com/icons/png/512/1995/1995609.png" type="image/x-icon">

    <link rel="stylesheet" href="/oncard_template/css/loading_anim.css">
    <link rel="stylesheet" href="/oncard_template/css/style-kasir.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- tambahan ego  -->
    <link rel="stylesheet" href="https://www.jqueryscript.net/demo/Bootstrap-4-Dropdown-Select-Plugin-jQuery/dist/css/bootstrap-select.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">

    <link href="/oncard_template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="/oncard_template/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/oncard_template/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- ------------- -->
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.css">

    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment-with-locales.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>



    <!-- tambahan ego -->
    <script>
        window.site_url = "<?= base_url() ?>"
    </script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
      />
      
    <link href="<?= base_url('assets/styles/style.css') ?>" rel="stylesheet" type="text/css" />
    <style>
        .img-container img {
            max-width: 100%;
        }
    </style>
    <!-- ------------ -->

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;0,900;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@100;200;400;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,600;0,800;0,900;1,200;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,400;0,600;1,700&display=swap');

        input[type="radio"],
        input[type="radio"]:focus,
        input[type="radio"]:active {
            outline: none !important;
            border: none;
        }

        .lockscreen {
            display: none;
            width: 100%;
            height: 100%;
            background: #131521;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            z-index: 778799797;
        }

        svg {
            position: absolute;
            width: 800px;
            height: 480px;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
            border-radius: 10px;
        }

        .clockCircle {
            fill: none;
            stroke: #040814;
        }

        .clockArc {
            fill: none;
            stroke: #ffbb00;
        }

        .clockDot {
            fill: #ffbb00;
        }

        .caption {
            font-family: "Source Sans Pro";
            font-weight: 300;
            fill: #f1f1f1;
        }

        .dayText {
            font-size: 1.7rem;
        }

        .dateText {
            font-size: 2.5rem;
            font-weight: 400;
        }

        .timeText {
            font-family: "Open Sans";
            font-size: 5rem;
            font-weight: 600;
            fill: #f1f1f1;
        }

        .searchSide {
            -moz-transition: all 0.2s linear 0s;
            -webkit-transition: all 0.2s linear 0s;
            -o-transition: all 0.2s linear 0s;
            -ms-transition: all 0.2s linear 0s;
        }

        @media (max-width: 991.98px) {
            #content {
                margin-left: 130px;
            }

            #sidebar.active {
                margin-left: 0 !important;
                position: fixed;
                height: 100vh;
                overflow-y: scroll;
            }

            #sidebarCollapse {
                display: none;
            }
        }

        #imageSearched {
            position: relative;
            -moz-transition: all 0.2s linear 0s;
            -webkit-transition: all 0.2s linear 0s;
            -o-transition: all 0.2s linear 0s;
            -ms-transition: all 0.2s linear 0s;
        }

        .skeleton-box {
            display: inline-block;
            height: 1em;
            position: relative;
            overflow: hidden;
            background-color: #dddbdd;
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


        .loader {
            width: 60px;
        }

        .loader-wheel {
            animation: spin 1s infinite linear;
            border: 2px solid rgba(30, 30, 30, 0.5);
            border-left: 4px solid #fff;
            border-radius: 50%;
            height: 50px;
            margin-bottom: 10px;
            width: 50px;
        }

        .loader-text {
            color: #fff;
            font-family: arial, sans-serif;
        }

        .loader-text:after {
            content: 'Loading';
            animation: load 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes load {
            0% {
                content: 'Loading';
            }

            33% {
                content: 'Loading.';
            }

            67% {
                content: 'Loading..';
            }

            100% {
                content: 'Loading...';
            }
        }


        .card {
            overflow: hidden;
        }

        .card-button-addon {
            position: absolute;
            opacity: 0;
            right: -22%;
            width: 22%;
            height: 100%;
            border-top-left-radius: 0px;
            border-bottom-left-radius: 0px;
            background: #fff;
            box-shadow: -10px 0px 0px #f0f0f0;
            -webkit-transition: all 0.2s linear 0s;
            -o-transition: all 0.2s linear 0s;
            -ms-transition: all 0.2s linear 0s;
            -moz-transition: all 0.2s linear 0s;
        }

        .card:hover .card-button-addon {
            right: 0px;
            opacity: 1;
            box-shadow: -10px 0px 10px #f0f0f0;


        }

        .chooseicon {
            display: block;
        }

        .chooseicon img {
            display: inline-grid;
            width: 50px;
            height: 50px;
            border: 2px solid #f0f0f0;
            margin: 6px;
            border-radius: 6px;
            padding: 5px;
        }

        .chooseicon img:active {
            border: 2px solid #000;
        }

        .chooseklas {
            visibility: visible;
        }

        .chooseklas:hover {
            cursor: pointer;
            -moz-transform: scale(1.045, 1.045);
            -webkit-transform: scale(1.045, 1.045);
            -o-transform: scale(1.045, 1.045);
            -ms-transform: scale(1.045, 1.045);
        }

        /* ===== Scrollbar CSS ===== */
        /* Firefox */
        * {
            scrollbar-width: auto;
            scrollbar-color: #8f8f8f #ededed;
        }

        /* Chrome, Edge, and Safari */
        *::-webkit-scrollbar {
            width: 10px;
        }

        *::-webkit-scrollbar-track {
            background: #08805c;
        }

        *::-webkit-scrollbar-thumb {
            background-color: #00c389;
            border-radius: 75px;
            border: 3px solid #08805c;
        }


        #invoice::-webkit-scrollbar {
            width: 10px;
        }

        #invoice::-webkit-scrollbar-track {
            background: #fff;
        }

        #invoice::-webkit-scrollbar-thumb {
            background-color: #dedede;
            border-radius: 75px;
            border: 2px solid #dedede;
        }


        .bg-gradient-success {
            background-color: #1cc88a;
            background-image: linear-gradient(180deg, #1cc88a 10%, #13855c 100%);
            background-size: cover;
        }

        .ring-1 {
            width: 10px;
            height: 10px;
            margin: 0 auto;
            padding: 10px;
            border: 7px dashed #4b9cdb;
            border-radius: 100%;
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

        .modal-dialog h5 {
            color: #fff;
        }

        @media (max-width:700px) {
            .modal-dialog {
                max-width: 96% !important;
                margin-left: auto;
                margin-right: auto;
            }
        }

        .dataTable {
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
            font-family: 'Roboto', sans-serif;
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
            min-height: 600px !important;
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

        #sidebar {
            background-color: #1cc88a;
            background-image: linear-gradient(180deg, #1cc88a 10%, #13855c 100%);
            background-size: cover;
        }

        #sidebar ul li.active {
            /*padding:5px;*/
            padding-top: 10px;
            padding-bottom: 5px;
            background: #fff;
            color: #000;
            border-radius: 15px;
            margin-left: 10px;
            margin-right: 10px;
            margin-top: 10px;
            margin-bottom: 10px;
            box-shadow: 0px .2em .5em #00a171;
        }

        #sidebar ul li a {
            border: none;
            padding: 10px 30px;
        }

        #sidebar ul li.active a {
            color: #00a171;
        }

        #sidebar.active {
            min-width: 120px;
            max-width: 120px;
            text-align: center;
        }

        @media (max-width: 991.98px) {
            #sidebar {
                min-width: 80px;
                max-width: 80px;
                text-align: center;
                margin-left: -80px !important;
                font-size: 1px !important;

            }

            #sidebar.active {
                margin-left: 0 !important;
                font-size: 1px !important;
            }

        }

        .accordion {
            width: 100%;
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
            margin-top: 1rem;
        }

        .accordion-item {
            background-color: transparent;
            box-shadow: 0px 6px 10px #bfbfbf;
            border-radius: 6px;
        }

        .accordion-item__button {
            border: 0;
            display: block;
            background: #1cc88a;
            width: 100%;
            color: #fff;
            text-align: left;
            font-size: 16px;
            transition: all 0.2s ease-in-out;
            padding: 1rem;
            border-radius: 6px;
            cursor: pointer;
        }

        .accordion-item__button:after {
            content: '↓';
            float: right;
            right: 0;
        }

        .accordion-item__button.active,
        .accordion-item__button:hover {
            background-color: #474747;
        }

        .accordion-item__button.active {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .accordion-item__button.active:after {
            content: "-";
        }

        .accordion-item__content {
            overflow: hidden;
            max-height: 0;
            transition: all 0.4s ease-in-out;
            background-color: #fff;
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;
        }

        .accordion-item__content.active {
            display: block;
        }

        .accordion-item__content p {
            padding: 1rem;
        }


        .color-picker-panel {
            background: #1f232a;
            width: 100%;
            border-radius: 8px;
            border: 2px solid #364347;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);

        }

        .panel-row {
            position: relative;
            margin: 0 10px 10px;
        }

        .panel-row:first-child {
            margin-top: 10px;
            margin-bottom: 6px;
        }

        .panel-row:after {
            content: "";
            display: table;
            clear: both;
        }

        .panel-header {
            background: #15191c;
            padding: 8px;
            margin: 0 -10px 10px;
            text-align: center;
        }

        .swatch {
            display: inline-block;
            width: 32px;
            height: 32px;
            background: #ccc;
            border-radius: 4px;
            margin-left: 4px;
            margin-bottom: 4px;
            box-sizing: border-box;
            border: 2px solid #364347;
            cursor: pointer;
        }

        .default-swatches {
            width: 212px;
        }

        .default-swatches .swatch:nth-child(6n+1) {
            margin-left: 0;
        }

        .color-cursor {
            border-radius: 100%;
            background: #ccc;
            box-sizing: border-box;
            position: absolute;
            pointer-events: none;
            z-index: 2;
            border: 2px solid #fff;
            transition: all 0.2s ease;
        }

        .color-cursor.dragging {
            transition: none;
        }

        .color-cursor#spectrum-cursor {
            width: 30px;
            height: 30px;
            margin-left: -15px;
            margin-top: -15px;
            top: 0;
            left: 0;
        }

        .color-cursor#hue-cursor {
            top: 0;
            left: 50%;
            height: 20px;
            width: 20px;
            margin-top: -10px;
            margin-left: -10px;
            pointer-events: none;
        }

        .spectrum-map {
            position: relative;
            width: 212px;
            height: 200px;
            overflow: hidden;
        }

        #spectrum-canvas {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #ccc;
        }

        .hue-map {
            position: absolute;
            top: 5px;
            bottom: 5px;
            right: 29px;
            width: 10px;
        }

        #hue-canvas {
            border-radius: 8px;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #ccc;
        }

        .color-picker-panel .button {
            background: #2a3137;
            border: 0;
            border-radius: 4px;
            color: #8b949a;
            font-size: 1rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            outline: none;
            cursor: pointer;
            padding: 4px;
        }

        .color-picker-panel .button:active {
            background: #262c31;
        }

        .color-picker-panel .button.eyedropper {
            position: absolute;
            right: 0;
            top: 0;
            width: 68px;
            height: 68px;
            display: block;
        }

        .color-picker-panel .button.add-swatch {
            display: block;
            padding: 6px;
            width: 200px;
            margin: 10px auto 0;
        }

        .color-picker-panel .button.mode-toggle {
            position: absolute;
            top: 0;
            right: 0;
            width: 68px;
            height: 40px;
        }

        .value-fields {
            display: none;
            align-items: center;
        }

        .value-fields.active {
            display: flex;
        }

        .value-fields .field-label {
            margin-right: 6px;
        }

        .value-fields .field-input {
            background: #15191c;
            border: 1px solid #364347;
            box-sizing: border-box;
            border-radius: 2px;
            line-height: 38px;
            padding: 0 4px;
            text-align: center;
            color: #8b949a;
            font-size: 1rem;
            display: block;
        }

        .rgb-fields .field-group {
            display: flex;
            align-items: center;
        }

        .rgb-fields .field-input {
            width: 42px;
            margin-right: 10px;
        }

        .hex-field .field-input {
            width: 170px;
        }

        .color-indicator {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            width: 20px;
            height: 20px;
            border-radius: 4px;
            background: #ccc;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            /* display: none; <- Crashes Chrome on hover */
            -webkit-appearance: none;
            margin: 0;
            /* <-- Apparently some margin are still there even though it's hidden */
        }

        .listcats {
            width: 100%;
            overflow-x: scroll;

            display: block;
            white-space: nowrap;
            position: relative;
            overflow-x: scroll;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch;
        }

        .listcats::-webkit-scrollbar,
        .listitems::-webkit-scrollbar,
        .liststruk::-webkit-scrollbar {
            width: 3px;

        }

        .listcats::-webkit-scrollbar-track,
        .listitems::-webkit-scrollbar-track,
        .liststruk::-webkit-scrollbar-track {
            background: transparent;
            margin-top: 15px;
            margin-left: 10px;
            margin-right: 10px;
        }

        .listcats::-webkit-scrollbar-thumb,
        .listitems::-webkit-scrollbar-thumb,
        .liststruk::-webkit-scrollbar-thumb {
            background-color: #d1d1d1;
            border-radius: 75px;
            border: 0px solid transparent;
        }

        .listcats bombocat {
            width: 18%;
            display: inline-table;
            margin: 7px;
            padding: 7px;
            padding-top: 15px;
            padding-bottom: 15px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 6px #d1d1d1;
            font-size: .77em;
            text-align: center;
            -webkit-transition: all 0.1s linear 0s;
            -o-transition: all 0.1s linear 0s;
            -moz-transition: all 0.1s linear 0s;
            -ms-transition: all 0.1s linear 0s;
        }

        .listcats bombocat:active {
            -webkit-transform: scale(1.1, 1.1);
            -o-transform: scale(1.1, 1.1);
            -ms-transform: scale(1.1, 1.1);
            -moz-transform: scale(1.1, 1.1);
        }

        .listcats img {
            display: block;
            margin: auto;
            margin-bottom: 10px;

        }

        .listitems {
            height: 300px;
            /*white-space: nowrap;*/
            position: relative;
            overflow-y: scroll;
            overflow-x: hidden;
            -webkit-overflow-scrolling: touch;
        }

        .itemnya {
            visibility: visible;
            -webkit-transition: all 0.1s linear 0s;
            -o-transition: all 0.1s linear 0s;
            -moz-transition: all 0.1s linear 0s;
            -ms-transition: all 0.1s linear 0s;
        }

        .listitems .itemnya:active,
        .liststruk .itemnya:active {
            -webkit-transform: scale(1.1, 1.1);
            -o-transform: scale(1.1, 1.1);
            -ms-transform: scale(1.1, 1.1);
            -moz-transform: scale(1.1, 1.1);
        }

        @media (min-width:1100px) {
            .listitems {
                height: 600px;
            }
        }

        #invoiceSide {
            height: 71%;
            /*white-space: nowrap;*/
            position: relative;
            overflow-y: auto scroll;
            overflow-x: hidden;
            -webkit-overflow-scrolling: touch;
        }

        .indec {
            -webkit-transition: all 0.1s linear 0s;
            -o-transition: all 0.1s linear 0s;
            -moz-transition: all 0.1s linear 0s;
            -ms-transition: all 0.1s linear 0s;
        }

        .indec:focus,
        .indec:hover {
            -webkit-transform: scale(1.1, 1.1);
            -o-transform: scale(1.1, 1.1);
            -ms-transform: scale(1.1, 1.1);
            -moz-transform: scale(1.1, 1.1);
        }
    </style>


    <style>
        .sel {
            font-family: fontAwesome
        }
    </style>

    <meta name="robots" content="noindex, follow">
</head>