<!DOCTYPE html>
<html lang="fr-FR">

<head>
 <title>Contact - Cité d'Ex</title>
 <meta charset="utf-8">
 <meta name="format-detection" content="telephone=no">
 <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0,  user-scalable=0">
 <meta http-equiv="X-UA-Compatible" content="IE=Edge">
 <meta name="keywords" content="Contactez nou">
 <meta name="date" content="Dec 26">
 <!-- Favicon Icon -->
 <link rel="icon" type="image/png" href="assets/images/favicon.png">
 <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="venobox/venobox.css">
 <link rel="stylesheet" type="text/css" href="assets/css/plugin_theme_css.css">
 <link rel="stylesheet" type="text/css" href="style.css">
 <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
 <!-- modernizr js -->
 <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
 <?php
 require_once "inc/header.php";
 ?>
 <!-- mobile menu -->

 <!-- End Mobile Menu -->
 <!-- breadcumb area -->
 <div class="breadcumb-area">
  <div class="container">
   <div class="row">
    <div class="col-md-12 txtc  text-center ccase">
     <div class="brpt">
      <h2>Contact</h2>
     </div>
     <div class="breadcumb-inner">
      <ul>
       <li><a href="index.php">Accueil</a></li>
       <li><i class="icofont-thin-right"></i></li>
       <li><span class="current">Contact</span></li>
      </ul>
     </div>
    </div>
   </div>
  </div>
 </div>
 <!-- End breadcumb area -->
 <!-- contact area -->
 <div class="cr_cont_area con_page_cont">
  <div class="container">
   <div class="row">
    <div class="col-lg-6 col-md-6">
     <div class="apartment_area">
      <div class="apartment_text">
       <h4>Nous contacter</h4>
       <h2>Vous avez une question ou une proposition de sujet ?</h2>
      </div>
      <div class="witr_apartment_form">
       <form id="">
        <!--
        <form action="https://demo.themexbd.com/html/charido/mail.php" method="post" id="contact-form">
        -->
        <div class="row">
         <div class="col-lg-6 col-md-6">
          <div class="twr_form_box">
           <input type="text" name="name" placeholder="Nom*">
          </div>
         </div>
         <div class="col-lg-6 col-md-6">
          <div class="twr_form_box">
           <input type="email" name="email" placeholder="E-mail*">
          </div>
         </div>
         <div class="col-lg-12">
          <div class="twr_form_box ">
           <input type="tel" name="phone" placeholder="Téléphone*">
          </div>
         </div>
         <!--
         For request need use this class
         <div class="col-lg-6 col-md-6">
          <div class="twr_form_box">
           <span data-name="ooselect">
            <select class="wpcf7-form-control wpcf7-select form-control" name="ooselect">
             <option value="Categories">Categories</option>
             <option value="Education">Education</option>
             <option value="Nonprofit">Nonprofit</option>
             <option value="Medical">Medical</option>
            </select>
           </span>
          </div>
         </div>-->
         <div class="col-lg-12">
          <div class="twr_form_box">
           <span class="textarea">
            <textarea name="comment" placeholder="Votre message..."></textarea>
           </span>
          </div>
         </div>
         <div class="col-lg-12 col-md-12">
          <button type="submit" class="btn btn-primary">Envoyer</button>
         </div>
        </div>
        <div class="row">
         <div class="col-lg-12 text-center">
          <p class="form-messege"></p>
         </div>
        </div>
       </form>
      </div>
     </div>
    </div>
    <div class="col-lg-6 col-md-6">
     <div class="map_inner_area">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2828.0399605615185!2d-0.5184814238991822!3d44.86148127345112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd552f4585a94f43%3A0xe8603a662f645573!2s60%20Rue%20Charles%20de%20Foucauld%2C%2033150%20Cenon%2C%20France!5e0!3m2!1sfr!2sne!4v1721858272046!5m2!1sfr!2sne" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <!--<iframe src="https://maps.google.com/maps?q=webitrangpur&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="webitrangpur"></iframe>-->
     </div>
    </div>
   </div>
  </div>
 </div>
 <!-- footer area -->
 <?php
 require_once "inc/footer.php";
 ?>

 <!-- Include All JS -->
 <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
 <script src="assets/js/bootstrap.min.js"></script>
 <script src="assets/js/isotope.pkgd.min.js"></script>
 <script src="assets/js/owl.carousel.min.js"></script>
 <script src="assets/js/slick.min.js"></script>
 <script src="assets/js/imagesloaded.pkgd.min.js"></script>
 <script src="venobox/venobox.min.js"></script>
 <script src="assets/js/jquery.appear.js"></script>
 <script src="assets/js/jquery.knob.js"></script>
 <script src="assets/js/theme-pluginjs.js"></script>
 <script src="assets/js/jquery.meanmenu.js"></script>
 <script src="assets/js/ajax-mail.js"></script>
 <script src="assets/js/theme.js"></script>
</body>

</html>