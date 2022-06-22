<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PT. Nida Utama Sejahtera  Travel Haji & Umrah</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets_nidautama/img/logo1.png" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url(); ?>/assets_nidautama/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url(); ?>/assets_nidautama/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets_nidautama/lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="<?php echo base_url(); ?>/assets_nidautama/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
    ======================================================= -->

    <style type="text/css">

    .square {
      width: 100px;
      height: 100px;
      text-align: center;
      margin: auto;
      background-size: cover;
      background-position: center;
      border-radius: 10px;
      
    }
    .square2 {
      width: 60%;
      height: 110px;
      padding-bottom: 50%;
      background-size: cover;
      background-position: center;
      float: right;
      margin-bottom: 15px;
    }
  
      #quote-carousel {
        padding: 0 10px 30px 10px;
        margin-top: 30px;
      }

      #quote-carousel .carousel-control {
        background: none;
        color: #222;
        font-size: 2.3em;
        text-shadow: none;
        margin-top: 30px;
      }

      #quote-carousel .carousel-control.left {
        left: -12px;
      }

      #quote-carousel .carousel-control.right {
        right: -12px !important;
      }

      #quote-carousel .carousel-indicators {
        right: 50%;
        top: auto;
        bottom: 0px;
        margin-right: -19px;
      }

      #quote-carousel .carousel-indicators li {
        background: #c0c0c0;
      }
      #quote-carousel .carousel-indicators .active {
        background: #333333;
      }
      #quote-carousel img {
        width: 250px;
        height: 100px
      }

      .item blockquote {
        border-left: none;
        margin: 0;
      }
      .item blockquote img {
        margin-bottom: 10px;
      }
      .item blockquote p:before {
        content: "\f10d";
        font-family: 'Fontawesome';
        float: left;
        margin-right: 10px;
      }
      @media (min-width: 768px) {
      #quote-carousel {
       margin-bottom: 0;
       padding: 0 40px 30px 40px;
      }
      }

      @media (max-width: 768px) {

      #quote-carousel .carousel-indicators {
       bottom: -20px !important;
      }
       #quote-carousel .carousel-indicators li {
       display: inline-block;
       margin: 0px 5px;
       width: 15px;
       height: 15px;
      }
       #quote-carousel .carousel-indicators li.active {
       margin: 0px 5px;
       width: 20px;
       height: 20px;
      }
      }


      .slider {
        width: 100%;
        height: 430px;
        position: relative;
        overflow: hidden;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-flow: row nowrap;
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -webkit-box-align: end;
        -webkit-align-items: flex-end;
        -ms-flex-align: end;
        align-items: flex-end;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
      }

      .slider__nav {
        width: 17px;
        height: 17px;
        margin: 2rem 12px;
        border-radius: 50%;
        z-index: 10;
        outline: 6px solid #ffb803;
        outline-offset: -6px;
        box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
        cursor: pointer;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        -webkit-backface-visibility: hidden;
        padding-bottom: 20px;
        backface-visibility: hidden;
      }

      .slider__nav:checked {
        -webkit-animation: check 0.5s linear forwards;
        animation: check 0.5s linear forwards;
      }

      .slider__nav:checked:nth-of-type(1) ~ .slider__inner {
        -webkit-transform: translateX(0%);
        transform: translateX(0%);
      }

      .slider__nav:checked:nth-of-type(2) ~ .slider__inner {
        -webkit-transform: translateX(-40%);
        transform: translateX(-40%);
      }

      

      .slider__inner {
        position: absolute;
        top: 0;
        left: 0;
        width: 1000px;
        height: 100%;
        -webkit-transition: all 1s ease-out;
        transition: all 1.2s ease-out;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-flow: row nowrap;
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
      }

      .slider__contents {
        width: 100%;
        height: 100%;
        padding: 2rem;
        text-align: center;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-flex: 1;
        -webkit-flex: 1;
        -ms-flex: 1;
        flex: 1;
        -webkit-flex-flow: column nowrap;
        -ms-flex-flow: column nowrap;
        flex-flow: column nowrap;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        
      }

      .slider__image { font-size: 2.7rem; }

      .slider__caption {
        font-weight: 700;
        margin: 2rem 0 1rem;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        text-transform: uppercase;
      }

      .slider__txt {
        color: #999;
        margin-bottom: 3rem;
        max-width: 300px;
      }

      .slidesXXX {
        width: 100%;
        height: 100%;
        background: url(<?php echo base_url(); ?>/assets_nidautama/img/hero-bg-2.jpg) center center;
        background-repeat:  no-repeat;
        background-size: cover;
        position: relative;
        box-shadow: 3px 10px 13px #1c1c1c ;
        border-radius: 12px;
        min-height: 350px;
        padding: 0px;
        border: none;
        color: white;
        
      }
      #tetew {
        position: relative;
        -moz-transition : all 0.1s linear 0s;
        -webkit-transition : all 0.1s linear 0s;
        -ms-transition : all 0.1s linear 0s;
        -o-transition : all 0.1s linear 0s;
      }
      #tetew:hover {
        -webkit-transform : scale(1.01,1.01);
        -o-transform : scale(1.01,1.01);
        -ms-transform : scale(1.01,1.01);
        -moz-transform : scale(1.01,1.01);
        
      }
      


      .slidesXXX:before {
        content: "";
        background: rgba(128, 73, 28, 0.2);
        position: absolute;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
        border-radius: 12px;
      }

      @-webkit-keyframes 
      check {  50% {
       outline-color: #fcfcfc;
       box-shadow: 0 0 0 12px #fcfcfc, 0 0 0 36px rgba(51, 51, 51, 0.2);
      }
       100% {
       outline-color: #fcfcfc;
       box-shadow: 0 0 0 0 #fcfcfc, 0 0 0 0 rgba(51, 51, 51, 0);
      }
      }

      @keyframes 
      check {  50% {
       outline-color: #fcfcfc;
       box-shadow: 0 0 0 12px #fcfcfc, 0 0 0 36px rgba(51, 51, 51, 0.2);
      }
       100% {
       outline-color: #fcfcfc;
       box-shadow: 0 0 0 0 #fcfcfc, 0 0 0 0 rgba(51, 51, 51, 0);
      }
      }
    </style>
  </head>

  <body>

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });
});
</script>

<style type="text/css">

</style>
  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      

    
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
    ============================-->
  

      <main id="main">

    <!--==========================
      About Us Section
      ============================-->
      

    <!--==========================
      Facts Section
     

    Call To Action Section
    ============================-->
    <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero" style="color: white;font-weight: bold;">NIDA UTAMA SEJAHTERA</a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="<?php echo site_url('Welcome');?>">Home</a></li>
          <li><a href="#contact">Hubungi Segera</a></li>
          <?php if(!$levelUser) { ?>
            <li><a href="<?php echo site_url('login');?>">Login</a></li>
            <li><a href="<?php echo site_url('register');?>">Register</a></li>
          <?php } elseif ($levelUser==10) {
            
          ?>
            <li class="menu-has-children"><a href=""><?php echo $namaUserGiven;?></a>
              <ul>
                <div class="dropdown-header text-center" style="background-color: #fff;padding-top: 15px; padding-bottom: 20px;">
                  <div class="square img-md rounded-circle" style="background-image: url(<?php echo base_url(); ?><?php
                  if(!$pictureUserGiven){
                    echo '/assets/img/pictprofile/nidautamauser_default.png';
                  }else {echo $pictureUserGiven;};?>); "></div>
                  
                  <p class="mb-1 mt-3"><?php echo $namaUserGiven;?></p>
                  <p class="font-weight-light text-muted mb-0">
                    <?php if ($levelUser==10) { echo 'Administrator';}else { echo 'Normal User';}?>
                  </p>
                </div>
                <li> <a href="<?php echo site_url('Managements/index');?>"><i class="fa fa-dashboard mr-2"></i> Dashboard</a></li>
                <li><a href="#"><i class="fa fa-user mr-2"></i> Profil Saya</a></li>
                <hr/>
                <li><a href="#"><i class="fa fa-sign-out mr-2"></i> Logout</a></li>
                
              </ul>
            </li>
          <?php }elseif ($levelUser==2) { ?>
             <li class="menu-has-children"><a href=""><?php echo $namaUserGiven;?></a>
              <ul>
                <div class="dropdown-header text-center" style="background-color: #fff;padding-top: 15px; padding-bottom: 20px;">
                  <div class="square img-md rounded-circle" style="background-image: url(<?php echo base_url(); ?><?php
                  if(!$pictureUserGiven){
                    echo '/assets/img/pictprofile/nidautamauser_default.png';
                  }else {echo $pictureUserGiven;};?>); "></div>
                  
                  <p class="mb-1 mt-3"><?php echo $namaUserGiven;?></p>
                  <p class="font-weight-light text-muted mb-0">
                    <?php if ($levelUser==10) { echo 'Administrator';}else { echo 'Normal User';}?>
                  </p>
                </div>
                <li> <a href="<?php echo site_url('User/index');?>"><i class="fa fa-dashboard mr-2"></i> Dashboard</a></li>
                <li><a href="#"><i class="fa fa-user mr-2"></i> Profil Saya</a></li>
                <hr/>
                <li><a href="#"><i class="fa fa-sign-out mr-2"></i> Logout</a></li>
                
              </ul>
            </li>
          <?php }?>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="col-md-12" style="z-index: 109;">
          <h1 style="z-index: 99999; font-size: 80px; font-weight: 800; color: white; padding-top: 100px;">Terms & Condition</h1>
          <h5 style="color: #fff; line-height: 20px;">Mohon dibaca dan diperhatikan syarat dan ketentuan yang akan berlaku pada sistem ini.<br/>Terimakasih telah membaca terlebih dahulu.</h5>
        
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Portfolio Section
      ============================-->
      <section id="portfolio">
        <div class="container wow fadeInUp">
          
          

          <div class="row" id="portfolio-wrapper">
           <pre style="width: 100%;">

[LOGO]

August 22, 1997

Mr. Simon K. Hodson
EarthShell Container Corporation
800 Miramonte Drive
Santa Barbara, CA 93109-1419

Finally we have reached a point where most of the problems and issues
surrounding your development -- and our introduction -- of EarthShell
packaging are behind us. To summarize where we are in simple terms, and to
avoid as much legalese as possible, I'd like to confirm the following: As
soon as price can be agreed upon, I will recommend to the McDonald's Senior
Management that we authorize the purchase of EarthShell sandwich containers
(the "Containers") for a single menu item for all McDonald's restaurants in
the United States for at least a three-year period.

The responsibility to accept and pay for product thereafter, or to continue
to accept and pay for product, however, shall be expressly subject to the
following terms and conditions:(1)

                           TERMS AND CONDITIONS

1.  The Containers will meet and maintain all product specifications
    established by McDonald's which specifications may be amended from time
    to time by McDonald's in its reasonable discretion. (Initial
    specifications are attached to this letter as Exhibit A which are subject
    to Paragraph 9 hereof.) Where a change in specifications requires or
    justifies an adjustment in the price of the containers, either upwards or
    downward, all parties will use their best efforts to negotiate or
    facilitate such an adjustment directly through their agents, licensees,
    converters, or affiliates.

2.  McDonald's shall receive such assurances and documentation as is
    reasonably required in order to ensure that the use of EarthShell
    Containers shall not violate or infringe the patent or other intellectual
    or proprietary rights of others.

3.  EarthShell and/or its licensed converters supplying McDonald's with
    EarthShell Containers ("licensed converters") shall demonstrate their
    ability to manufacture and have ready for use an adequate ongoing supply
    of the Containers in order to meet the quantity and quality requirements
    of the intended purchase order.


-----------------------------
(1) Even though we are very encouraged by the product we have tested, these
terms and conditions are necessitated by the fact that the product has not
yet actually been manufactured on the same equipment that would be needed to
meet our quantity requirements.


&lt;PAGE&gt;

4.  Any environmental claims made from time to time by EarthShell, its
    subsidiaries, affiliates and licensed converters shall be appropriate,
    properly supported, and in compliance with all applicable guidelines as
    respects the Containers.

5.  The price of EarthShell Containers sold to the McDonald's system shall
    not exceed the price charges to any third party by EarthShell or any
    of its licensed converters for a comparable EarthShell Container taking
    into account product specifications, quantities ordered, delivery terms,
    etc.

6.  The Containers are favorably received and continue to be favorably
    received by McDonald's franchisees and McDonald's restaurant customers
    as determined in McDonald's reasonable discretion.

7.  EarthShell, its officers, directors, employees and affiliates shall not
    engage in any act, or the Containers shall not have any environmental or
    other characteristics, (whether actual or perceived) which, in McDonald's
    reasonable discretion, could adversely affect the McDonald's brand or
    McDonald's System.

8.  Neither EarthShell nor its licensed converters shall be in default of any
    contractual obligations to Perseco or any other McDonald's supplier in
    connection with the Containers which are the subject of this letter.

9.  In the event that any term or condition contained in this letter is not
    met, EarthShell or its licensed converter shall have a reasonable time
    to cure the problem or otherwise restore the product to compliance with
    the terms and conditions, subject to the following:

        A.  If the terms and conditions are not met within 24 months of the
        date of this letter, neither McDonald's nor Perseco shall have further
        obligations to purchase or authorize purchase of the Containers, and

        B.  Once Containers are in use in McDonald's restaurants, a failure in
        any terms or conditions may require that existing inventories be
        discarded and replaced with alternative packaging provided by third
        parties. (In other words, the restaurants cannot be expected to use
        defective or otherwise non-compliant Containers.)

10. EarthShell and its licensed converters acknowledge and agree that
    McDonald's continuously investigates ways to improve its operations, that
    McDonald's is generally engaged in a wide variety of research and
    investment opportunities in a broad array of areas, and that McDonald's
    may be working with, investigating or reviewing other or similar products,
    concepts and/or technologies with other entities. EarthShell and its
    licensed converters expressly acknowledge and agree that such activities
    on the part of McDonald's do not breach the terms and conditions set out
    in this letter and that McDonald's has no obligation to disclose its
    involvement in such activities to EarthShell. Furthermore, EarthShell and
    its licensed converters acknowledge and agree that McDonald's will at all
    times, be free to investigate and utilize alternate sources of sandwich
    containers.


&lt;PAGE&gt;

11.  EarthShell and its licensed converters will continuously improve upon
     the environmental impacts of the Containers provided to Perseco with a
     long-term goal of reducing the key environmental loadings by 40% from
     the April 18, 1997 LCI submitted by Franklin Associates for the QPC
     sandwich container.

12.  EarthShell's licensed converters agree that if they believe that the
     production and sale of Containers in accordance with any McDonald's
     specifications will result in such Containers not being in compliance
     with all applicable laws, rules, regulations, and local codes, or that
     the Containers will infringe any patent or other proprietary right of a
     third party, then EarthShell's licensed converters will immediately
     notify McDonald's and provide to McDonald's all relevant information
     concerning such belief. EarthShell and its licensed converters
     acknowledge and agree that McDonald's is looking to EarthShell and its
     licensed converters to advise it of the aspects of the McDonald's
     specifications that should be changed and of EarthShell and/or its
     licensed converters recommended changes so that the Containers will be
     in compliance with such codes, regulations and laws and not infringe any
     patent or other proprietary right of a third party. McDonald's, in its
     sole discretion, shall determine whether or not to accept the
     specification changes recommended by EarthShell and/or its licensed
     converters.

13.  EarthShell and its licensed converters acknowledge that McDonald's does
     not directly operate any McDonald's restaurants and will not purchase
     any Containers from EarthShell and its licensed converters. EarthShell
     and its licensed converters acknowledge and agree that orders for
     Containers will come only from Perseco or the approved independent
     distribution centers and that Containers will be used only by McDonald's
     restaurants owned by independent franchisees or McDonald's subsidiary
     corporations, referred to as McOpCo's, and other approved parties
     ordering directly from EarthShell's licensed converters. EarthShell and
     its licensed converters acknowledge and agree that McDonald's is not
     making any promises, commitments or guarantees of sales.

14.  EarthShell and its licensed converters acknowledge and agree that the
     only contractual obligations involved in this contemplated business
     relationship for the purchase of Containers arise from orders placed by
     McDonald's independent distribution centers (through Perseco) and
     approved by McDonald's for sale to McDonald's restaurants. These parties
     decide whether to order from EarthShell's licensed converters and their
     obligations are limited to payment for items delivered in conformity
     with their orders. McDonald's is not responsible for and does not
     guarantee payment of any invoices or accounts (whether past due,
     delinquent or otherwise) from anyone ordering from EarthShell's licensed
     converters and those parties ordering from EarthShell's licensed
     converters are solely responsible for payment.

15.  EarthShell and its licensed converters agree to indemnify McDonald's
     its subsidiaries, suppliers and franchisees from any and all claims,
     damages, expenses and lawsuits caused by the Containers which are not
     attributable to McDonald's, its affiliates, subsidiaries, suppliers or
     franchisees, including, without limitation, infringement of any patent
     or any other proprietary right or trade secret misappropriation or
     unfair competition claims. EarthShell and its licensed converters


&lt;PAGE&gt;

     agree to maintain comprehensive general liability insurance in an amount
     and with a carrier having a financial rating approved by McDonald's to list
     McDonald's as an additional named insured, as its interests may appear,
     and to provide McDonald's upon request with proof of such insurance.
     Liability under this paragraph however, shall not be limited by the
     amount of insurance carried. The parties will use their best efforts to
     minimize and negotiate such claims to the extent possible.

16.  EarthShell and its licensed converters' authority to use any McDonald's
     trademark is limited to the usage designated by McDonald's in writing
     and is subject to termination by McDonald's with or without cause at any
     time. In addition, EarthShell and its licensed converters are prohibited
     from adding the "Mc" or "Mac" prefixes to any items unless EarthShell
     and its licensed converters secure McDonald's prior written approval.

17.  Except as required by law, EarthShell and its licensed converters are
     not authorized to make any public announcements that it or they are an
     approved McDonald's supplier or that the Containers are approved by
     McDonald's unless EarthShell and its licensed converters first receive
     express written permission from McDonald's to make that disclosure.

18.  The EarthShell logo and/or other identifying marks shall not be
     displayed on the Containers except in a manner to which McDonald's
     agrees, which agreement shall not be unreasonably withheld.

19.  This letter sets forth the understanding of the parties regarding
     McDonald's approval of the purchase of Containers and to the extent
     inconsistent therewith supersedes all prior written and oral agreements
     and understandings regarding the same.

20.  This letter is not intended to be an enforceable agreement and is subject
     to the negotiation of definitive documentation in accordance with the
     terms and conditions set forth above.

If the above conforms with your understanding, please let me know so that I
can make my final recommendation to Senior Management.


Very truly yours,



/s/ Shelby Yastrow
---------------------------
Shelby Yastrow

</pre>
          </div>

        </div>
      </section><!-- #portfolio -->

    <!--==========================
      Team Section
      ============================-->
      <!-- <section id="team">
        <div class="container wow fadeInUp">
          <div class="section-header">
            <h3 class="section-title">Team</h3>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="member">
                <div class="pic"><img src="<?php echo base_url(); ?>/assets_nidautama/img/team-1.jpg" alt=""></div>
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="member">
                <div class="pic"><img src="<?php echo base_url(); ?>/assets_nidautama/img/team-2.jpg" alt=""></div>
                <h4>Sarah Jhinson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="member">
                <div class="pic"><img src="<?php echo base_url(); ?>/assets_nidautama/img/team-3.jpg" alt=""></div>
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="member">
                <div class="pic"><img src="<?php echo base_url(); ?>/assets_nidautama/img/team-4.jpg" alt=""></div>
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section> --><!-- #team -->

    <!--==========================
      Contact Section
      ============================-->
      <section id="contact">
        <div class="container wow fadeInUp">
          <div class="section-header">
            <h3 class="section-title">KONTAK KAMI</h3>
            <p class="section-description">Berikut informasi yang dapat Anda ketahui dan pastikan kami mengetahui pesan, keluhan, dan pengalaman Anda selama bersama kami.</p>
          </div>
        </div>

        <!-- Uncomment below if you wan to use dynamic maps -->
        <iframe src="https://maps.google.com/maps?width=100&amp;height=600&amp;hl=en&amp;coord=0.479089, 101.404782&amp;q=Samping%20SD%20IT%20Ibnu%20Abbas%2C%20Jl.%20Melati%20Indah%20No.C5%2C%20Delima%2C%20Kec.%20Tampan%2C%20Kota%20Pekanbaru%2C%20Riau%2028292+(Nida%20Utama%20Sejahtera)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

        <div class="container wow fadeInUp mt-5">
          <div class="row justify-content-center">

            <div class="col-lg-3 col-md-4">

              <div class="info">
                <div>
                  <i class="fa fa-map-marker"></i>
                  <p>A108 Adam Street<br>New York, NY 535022</p>
                </div>

                <div>
                  <i class="fa fa-envelope"></i>
                  <p>info@example.com</p>
                </div>

                <div>
                  <i class="fa fa-phone"></i>
                  <p>+1 5589 55488 55s</p>
                </div>
              </div>

              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>

            </div>

            <div class="col-lg-5 col-md-8">
              <div class="section-header">
                <h4 class="section-title" style="font-size: 18px;">Kami Siap Menjawab</h4>
                <p class="section-description">Silahkan hubungi kami di whatsapp berikut ini</p>
              </div>
              <div class="row " style="text-align: center; margin-top: -50px;">
                <div class="col-md-4">
                  <img class="img-circle text-center" src="http://www.reactiongifs.com/r/overbite.gif" style="width: 120px;height:120px;margin: 10px;">
                  <font style="text-align: center;">Ridho</font>
                </div>
                <div class="col-md-4">
                  <img class="img-circle text-center" src="<?php echo base_url(); ?>/assets_nidautama/img/portfolio/web1.jpg" style="width: 120px;height:120px;margin: 10px;">
                  <font style="text-align: center;">Renggi</font>
                </div>
                <div class="col-md-4">
                  <img class="img-circle text-center" src="<?php echo base_url(); ?>/assets_nidautama/img/portfolio/logo2.jpg" style="width: 120px;height:120px;margin: 10px;">
                  <font style="text-align: center;">Mochan</font>
                </div>

                
              </div>
              
              
            </div>

          </div>

        </div>
      </section><!-- #contact -->

    </main>

  <!--==========================
    Footer
    ============================-->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">

        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>Nida Tour & Travel</strong>. All Rights Reserved
        </div>
        <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url(); ?>/assets_nidautama/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets_nidautama/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets_nidautama/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets_nidautama/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets_nidautama/lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets_nidautama/lib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets_nidautama/lib/counterup/counterup.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets_nidautama/lib/superfish/hoverIntent.js"></script>
  <script src="<?php echo base_url(); ?>/assets_nidautama/lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url(); ?>/assets_nidautama/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url(); ?>/assets_nidautama/js/main.js"></script>

</body>
</html>
