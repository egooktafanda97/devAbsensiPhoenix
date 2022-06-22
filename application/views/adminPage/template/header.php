<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <title>Sistem Dapodik PTK Baru</title>



  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  

  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  

  <link rel="icon" href="<?php echo base_url(); ?>/assets/png/logo1.png" type="image/x-icon">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/waves.min.css" type="text/css" media="all">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/datatables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/buttons.datatables.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/responsive.bootstrap4.min.css">


  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/feather.css">

  

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/sweetalert.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/component.css">


  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/c3.css" type="text/css" media="all">
  

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/prism.css">

  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/widget.css">

  

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/notification.css">

  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/animate.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/pages.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap-datetimepicker.css">

<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
  <style type="text/css">
    body::-webkit-scrollbar {
      width: .5em;
      border-radius: 100px;
    }
     
    body::-webkit-scrollbar-track {
      box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
      border-radius: 100px;

    }
     
    body::-webkit-scrollbar-thumb {
      background-color: darkgrey;
      /*outline: 1px solid slategrey;*/
      border-radius: 100px;
    }
    .sidebar-container {
  position: fixed;
  width: 220px;
  height: 100%;
  left: 0;
  overflow-x: hidden;
  overflow-y: auto;
  background: #1a1a1a;
  color: #fff;
}

.content-container {
  padding-top: 20px;
}

.sidebar-logo {
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 30px; 
  padding-bottom: 30px;
  font-size: 15px;
  background-color: #04befe;

}

.sidebar-navigation {
  padding: 0;
  margin: 0;
  list-style-type: none;
  position: relative;
}

.sidebar-navigation li {
  background-color: transparent;
  position: relative;
  display: inline-block;
  width: 100%;
  line-height: 20px;
}

.sidebar-navigation li a {
  padding: 10px 15px 10px 30px;
  display: block;
  color: #fff;
}

.sidebar-navigation li .fa {
  margin-right: 10px;
}

.sidebar-navigation li a:active,
.sidebar-navigation li a:hover,
.sidebar-navigation li a:focus {
  text-decoration: none;
  outline: none;
}

.sidebar-navigation li::before {
  background-color: #04befe;
  position: absolute;
  content: '';
  height: 100%;
  left: 0;
  top: 0;
  -webkit-transition: width 0.2s ease-in;
  transition: width 0.2s ease-in;
  width: 3px;
  z-index: -1;
}

.sidebar-navigation li:hover::before {
  width: 25%;
}

.sidebar-navigation .header {
  font-size: 12px;
  text-transform: uppercase;
  background-color: #151515;
  padding: 10px 15px 10px 30px;
}

.sidebar-navigation .header::before {
  background-color: transparent;
}

.content-container {
  padding-left: 220px;
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
          padding: 15px;
          padding-left: 25px; padding-right: 25px;
          cursor: pointer;
          border-radius: 3px;

        }

        .inputfile:focus + label,
        .inputfile + label:hover {
          background-color: #04befe;
        }
    body {
      background-color: #ffffff;
      background: none;
      color: #444444;
      /*font-family: 'Roboto', sans-serif;*/
      font-size: 16px;
      font-weight: 300;
      margin: 0;
      padding: 0;
    }
    .wizard-content-left {
      background-blend-mode: darken;
      /*background-color: rgba(0, 0, 0, 0.45);*/
      /*background-image: url("https://i.ibb.co/X292hJF/form-wizard-bg-2.jpg");*/
      background-color: #04befe;
      background-position: center center;
      background-size: cover;
      height: 100%;
      min-height: 100vh;
      padding: 30px;
    }
    .wizard-content-left h1 {
      color: #ffffff;
      font-size: 38px;
      font-weight: 600;
      white-space: normal;
      text-align: center;
    }

    .form-wizard {
      color: #888888;
      padding: 30px;
    }
    .form-wizard .wizard-form-radio {
      display: inline-block;
      margin-left: 5px;
      position: relative;
    }
    .form-wizard .wizard-form-radio input[type="radio"] {
      -webkit-appearance: none;
      -moz-appearance: none;
      -ms-appearance: none;
      -o-appearance: none;
      appearance: none;
      background-color: #dddddd;
      height: 25px;
      width: 25px;
      display: inline-block;
      vertical-align: middle;
      border-radius: 50%;
      position: relative;
      cursor: pointer;
    }
    .form-wizard .wizard-form-radio input[type="radio"]:focus {
      outline: 0;
    }
    .form-wizard .wizard-form-radio input[type="radio"]:checked {
      background-color: #04befe;
    }
    .form-wizard .wizard-form-radio input[type="radio"]:checked::before {
      content: "";
      position: absolute;
      width: 10px;
      height: 10px;
      display: inline-block;
      background-color: #ffffff;
      border-radius: 50%;
      left: 1px;
      right: 0;
      margin: 0 auto;
      top: 8px;
    }
    .form-wizard .wizard-form-radio input[type="radio"]:checked::after {
      content: "";
      display: inline-block;
      webkit-animation: click-radio-wave 0.65s;
      -moz-animation: click-radio-wave 0.65s;
      animation: click-radio-wave 0.65s;
      background: #000000;
      content: '';
      display: block;
      position: relative;
      z-index: 100;
      border-radius: 50%;
    }
    .form-wizard .wizard-form-radio input[type="radio"] ~ label {
      padding-left: 10px;
      cursor: pointer;
    }
    .form-wizard .form-wizard-header {
      text-align: center;
    }
    .form-wizard .form-wizard-next-btn, .form-wizard .form-wizard-previous-btn, .form-wizard .form-wizard-submit {
      background-color: #04befe;
      color: #ffffff;
      display: inline-block;
      min-width: 100px;
      min-width: 120px;
      padding: 10px;
      text-align: center;
    }
    .form-wizard .form-wizard-next-btn:hover, .form-wizard .form-wizard-next-btn:focus, .form-wizard .form-wizard-previous-btn:hover, .form-wizard .form-wizard-previous-btn:focus, .form-wizard .form-wizard-submit:hover, .form-wizard .form-wizard-submit:focus {
      color: #ffffff;
      opacity: 0.6;
      text-decoration: none;
    }
    .form-wizard .wizard-fieldset {
      display: none;
    }
    .form-wizard .wizard-fieldset.show {
      display: block;
    }
    .form-wizard .wizard-form-error {
      display: none;
      background-color: #d70b0b;
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      height: 2px;
      width: 100%;
    }
    .form-wizard .form-wizard-previous-btn {
      background-color: #fb1647;
    }
    .form-wizard .form-control {
      font-weight: 300;
      height: auto !important;
      padding: 15px;
      color: #888888;
      background-color: #f1f1f1;
      border: none;
      z-index: 10;
    }
    .form-wizard .form-control:focus {
      box-shadow: none;
      z-index: 11;
    }
    .form-wizard .form-group {
      position: relative;
      margin: 25px 0;
    }
    .form-wizard .wizard-form-text-label {
      position: absolute;
      left: 10px;
      top: 16px;
      transition: 0.2s linear all;
      z-index: 9;
    }
    .form-wizard .focus-input .wizard-form-text-label {
      color: #04befe;
      top: -18px;
      transition: 0.2s linear all;
      font-size: 12px;
    }
    .form-wizard .form-wizard-steps {
      margin: 30px 0;
    }
    .form-wizard .form-wizard-steps li {
      width: 25%;
      float: left;
      position: relative;
    }
    .form-wizard .form-wizard-steps li::after {
      background-color: #f3f3f3;
      content: "";
      height: 5px;
      left: 0;
      position: absolute;
      right: 0;
      top: 50%;
      transform: translateY(-50%);
      width: 100%;
      border-bottom: 1px solid #dddddd;
      border-top: 1px solid #dddddd;
    }
    .form-wizard .form-wizard-steps li span {
      background-color: #dddddd;
      border-radius: 50%;
      display: inline-block;
      height: 40px;
      line-height: 40px;
      position: relative;
      text-align: center;
      width: 40px;
      z-index: 1;
    }
    .form-wizard .form-wizard-steps li:last-child::after {
      width: 50%;
    }
    .form-wizard .form-wizard-steps li.active span, .form-wizard .form-wizard-steps li.activated span {
      background-color: #04befe;
      color: #ffffff;
    }
    .form-wizard .form-wizard-steps li.active::after, .form-wizard .form-wizard-steps li.activated::after {
      background-color: #04befe;
      left: 50%;
      width: 50%;
      border-color: #04befe;
    }
    .form-wizard .form-wizard-steps li.activated::after {
      width: 100%;
      border-color: #04befe;
    }
    .form-wizard .form-wizard-steps li:last-child::after {
      left: 0;
    }
    .form-wizard .wizard-password-eye {
      position: absolute;
      right: 32px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
    }
    @keyframes click-radio-wave {
      0% {
        width: 25px;
        height: 25px;
        opacity: 0.35;
        position: relative;
      }
      100% {
        width: 60px;
        height: 60px;
        margin-left: -15px;
        margin-top: -15px;
        opacity: 0.0;
      }
    }

    #arrowdown {
      position: absolute;
      bottom: 15px;
      display: none;
    }

    

    

    .scroll-arrow {
      width: 12px;
      height: 12px;
      transform: rotate(45deg);
      border-right: 2px solid white;
      border-bottom: 2px solid white;
      animation: arrow-wave 1s infinite;
      animation-direction: alternate;
    }
    .scroll-arrow:nth-child(1) {
      animation-delay: 0.1s;
    }
    .scroll-arrow:nth-child(2) {
      animation-delay: 0.2s;
    }
    .scroll-arrow:nth-child(3) {
      animation-delay: 0.3s;
    }

    @keyframes arrow-wave {
      0% {
        opacity: 0;
      }
      50% {
        opacity: 0.5;
      }
      100% {
        opacity: 1;
      }
    }


    @media screen and (max-width: 500px) {

    }
    @media screen and (max-width: 767px) {
      .wizard-content-left {
        height: auto;
      }
      #arrowdown {
        display: block;
        margin-left:40%;

      }

    }

    .blue-btn:hover,
    .blue-btn:active,
    .blue-btn:focus,
    .blue-btn {
      background: transparent;
      border: solid 1px #27a9e0;
      border-radius: 3px;
      color: #27a9e0;
      font-size: 16px;
      margin-bottom: 20px;
      outline: none !important;
      padding: 10px 20px;
    }

    .fileUpload {
      position: relative;
      overflow: hidden;
      min-height: 43px;
      margin-top: 0;
    }

    .fileUpload input.uploadlogo {
      position: absolute;
      top: 0;
      right: 0;
      margin: 0;
      padding: 0;
      font-size: 20px;
      cursor: pointer;
      opacity: 0;
      filter: alpha(opacity=0);
      width: 100%;
      height: 42px;
    }

    /*Chrome fix*/
    input::-webkit-file-upload-button {
      cursor: pointer !important;
      height: 42px;
      width: 100%;
    }




    /* Animation */
    @keyframes fadeInUp {
      from {
        transform: translate3d(0, 40px, 0);
      }
      to {
        transform: translate3d(0, 0, 0);
        opacity: 1;
      }
    }
    @-webkit-keyframes fadeInUp {
      from {
        transform: translate3d(0, 40px, 0);
      }
      to {
        transform: translate3d(0, 0, 0);
        opacity: 1;
      }
    }
    .animated {
      animation-duration: 1s;
      animation-fill-mode: both;
      -webkit-animation-duration: 1s;
      -webkit-animation-fill-mode: both;
    }

    .animatedFadeInUp {
      opacity: 0;
    }

    .fadeInUp {
      opacity: 0;
      animation-name: fadeInUp;
      -webkit-animation-name: fadeInUp;
    }

    /*loading.io*/
        .lds-facebook {
          display: inline-block;
          position: relative;
          width: 80px;
          height: auto;
          transform:scale(0.4,0.4);
          
        }
        .lds-facebook div {
          display: inline-block;
          position: absolute;
          left: 8px;
          width: 16px;
          background: #fff;
          animation: lds-facebook 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;margin-top:-50px;
        }
        .lds-facebook div:nth-child(1) {
          left: 8px;
          animation-delay: -0.24s;
        }
        .lds-facebook div:nth-child(2) {
          left: 32px;
          animation-delay: -0.12s;
        }
        .lds-facebook div:nth-child(3) {
          left: 56px;
          animation-delay: 0;
        }
        @keyframes lds-facebook {
          0% {
            top: 8px;
            height: 64px;
          }
          50%, 100% {
            top: 24px;
            height: 32px;
          }
        }

        .clock-day:before {
        content: var(--timer-day);
      }
      .clock-hours:before {
        content: var(--timer-hours);
      }
      .clock-minutes:before {
        content: var(--timer-minutes);
      }
      .clock-seconds:before {
        content: var(--timer-seconds);
      }

      .clock-container {
        margin-top: 30px;
        margin-bottom: 30px;
        background-color: #080808;
        border-radius: 5px;
        padding: 60px 20px;
        box-shadow: 1px 1px 5px rgba(255, 255, 255, 0.15), 0 15px 90px 30px rgba(0, 0, 0, 0.25);
        display: inline-grid;
        margin-left: auto;
        margin-right: auto;
      }
      .clock-col {
        text-align: center;
        margin-right: 20px;
        margin-left: 20px;
        min-width: 50px;
        position: relative;
      }
      .clock-col:not(:last-child):before, .clock-col:not(:last-child):after {
        content: "";
        background-color: rgba(255, 255, 255, 0.3);
        height: 5px;
        width: 5px;
        border-radius: 50%;
        display: block;
        position: absolute;
        right: -42px;
      }
      .clock-col:not(:last-child):before {
        top: 35%;
      }
      .clock-col:not(:last-child):after {
        top: 50%;
      }
      .clock-timer:before {
        color: #000;
        font-size: 2.2rem;
        text-transform: uppercase;
        font-weight: bold;
      }
      .clock-label {
        /*color: rgba(255, 255, 255, 0.35);*/
        color: #04befe;
        text-transform: uppercase;
        font-size: 0.7rem;
        margin-top: 10px;
        font-weight: bold;
      }

      @media (max-width: 825px) {
        .clock-container {
          flex-direction: column;
          padding-top: 40px;
          padding-bottom: 40px;
        }

        .clock-col + .clock-col {
          margin-top: 20px;
        }
        .clock-col:before, .clock-col:after {
          display: none !important;
        }
      }

  </style>

</head>

