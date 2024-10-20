<!DOCTYPE html>
<html lang="fr-FR">


<head>
 <title><?php echo $_GET["title"] ?> – Cité d'Ex</title>
 <meta charset="utf-8">
 <meta name="format-detection" content="telephone=no">
 <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0,  user-scalable=0">
 <meta http-equiv="X-UA-Compatible" content="IE=Edge">
 <meta name="keywords" content=" web design html template">
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
 require "inc/header.php";
 ?>
 <!-- mobile menu -->
 <!-- End Mobile Menu -->
 <!-- breadcumb area -->
 <div class="breadcumb-area">
  <div class="container">
   <div class="row">
    <div class="col-md-12 txtc  text-center ccase">
     <div class="brpt">
      <h2><?php echo $_GET["title"] ?></h2>
     </div>
     <div class="breadcumb-inner">
      <ul>
       <!--
       <li>You here! <i class="icofont-thin-right"></i></li>
       -->
       <li><a href="index.php">Accueil</a></li>
       <li><i class="icofont-thin-right"></i></li>
       <li><span class="current"><?php echo $_GET["title"] ?></span></li>
      </ul>
     </div>
    </div>
   </div>
  </div>
 </div>
 <!-- End breadcumb area -->


 <!-- testimonial area -->
 <div class="cr_test_area test_page_test">
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
     <div class="tts">
      <div class="ttin text-center ">
       <h4 class="txbdstitle tsmall stone hlight txbdbcolor"><?php echo $_GET["title"] ?></h4>
       <h2 class="txbdstitle sttwo hlight">La force de notre communauté</h2>
       <h3 class="txbdstitle stthree hlight">A travers le monde</h3>
      </div>
     </div>
     <div class="test_active row">
      <!-- 1 single testimonial -->
      <div class="col-md-12 txbdmb30">
       <div class="tsitem alltesicl">
        <div class="tsimg tsst4 tsdflex d-flex align-items-center justify-content-start">
         <h2 class="tstitle">Une avancée vers le developpement durable</h2>
        </div>
        <div class="tscon">
         <p>I was very impresed the service ipsum
          is simply free text used by copy ping ex
          refreshing. Neque porro est is dolorem
          ipsum quia.
         </p>
         <div class="tsreview tsdflex d-flex align-items-center justify-content-start">
          <a href="#" class="linkbutton" style="padding: 14px 60px; margin-top:10px;">Lire</a>
         </div>
        </div>
       </div>
      </div>
      <!-- 2 single testimonial -->
      <div class="col-md-12 txbdmb30">
       <div class="tsitem alltesicl">
        <div class="tsimg tsst4 tsdflex d-flex align-items-center justify-content-start">
         <h2 class="tstitle">Une avancée vers le developpement durable</h2>
        </div>
        <div class="tscon">
         <p>I was very impresed the service ipsum
          is simply free text used by copy ping ex
          refreshing. Neque porro est is dolorem
          ipsum quia.
         </p>
         <div class="tsreview tsdflex d-flex align-items-center justify-content-start">
          <a href="#" class="linkbutton" style="padding: 14px 60px; margin-top:10px;">Lire</a>
         </div>
        </div>
       </div>
      </div>
      <!-- 3 single testimonial -->
      <div class="col-md-12 txbdmb30">
       <div class="tsitem alltesicl">
        <div class="tsimg tsst4 tsdflex d-flex align-items-center justify-content-start">
         <h2 class="tstitle">Une avancée vers le developpement durable</h2>
        </div>
        <div class="tscon">
         <p>I was very impresed the service ipsum
          is simply free text used by copy ping ex
          refreshing. Neque porro est is dolorem
          ipsum quia.
         </p>
         <div class="tsreview tsdflex d-flex align-items-center justify-content-start">
          <a href="#" class="linkbutton" style="padding: 14px 60px; margin-top:10px;">Lire</a>
         </div>
        </div>
       </div>
      </div>
      <!-- 4 single testimonial -->
      <div class="col-md-12 txbdmb30">
       <div class="tsitem alltesicl">
        <div class="tsimg tsst4 tsdflex d-flex align-items-center justify-content-start">
         <h2 class="tstitle">Une avancée vers le developpement durable</h2>
        </div>
        <div class="tscon">
         <p>I was very impresed the service ipsum
          is simply free text used by copy ping ex
          refreshing. Neque porro est is dolorem
          ipsum quia.
         </p>
         <div class="tsreview tsdflex d-flex align-items-center justify-content-start">
          <a href="#" class="linkbutton" style="padding: 14px 60px; margin-top:10px;">Lire</a>
         </div>
        </div>
       </div>
      </div>

     </div>
    </div>
   </div>
  </div>
 </div>

 <div class="cr_cont_area" id="register">
  <div class="container">
   <div class="row">
    <div class="col-lg-6 col-md-6">
     <div class="cont_left">
      <div class="tts">
       <div class="ttin text-left">
        <h4 class="txbdstitle tsmall stone hlight txbdbcolor">Rejoignez notre communauté dès aujourd'hui !</h4>
        <h2 class="txbdstitle sttwo hlight">
         Rejoignez-nous en tant qu'adhérents et faites la différence !
        </h2>
        <p>
         Ensemble, nous pouvons créer un impact positif et durable dans notre communauté.
        </p>
       </div>
      </div>
     </div>
    </div>
    <div class="col-lg-6 col-md-6">
     <div class="apartment_area">
      <div class="apartment_text">
       <h4>Rejoignez nous</h4>
       <h2>Devenir membre </h2>
      </div>
      <div class="witr_apartment_form">
       <form>
        <div class="row">
         <div class="col-lg-6 col-md-6">
          <div class="twr_form_box">
           <input type="text" name="name" placeholder="Nom complet*">
          </div>
         </div>
         <div class="col-lg-6 col-md-6">
          <div class="twr_form_box">
           <input type="email" name="email" placeholder="Email*">
          </div>
         </div>
         <div class="col-lg-6 col-md-6">
          <div class="twr_form_box ">
           <input type="tel" name="number" placeholder="Téléphone*">
          </div>
         </div>
         <div class="col-lg-6 col-md-6">
          <div class="twr_form_box">
           <span data-name="ooselect">
            <select class="wpcf7-form-control wpcf7-select form-control" name="ooselect">
             <option value="Categories">Catégories</option>
             <option value="Démocratie et politique">Démocratie et politique</option>
             <option value="Engagement citoyen">Engagement citoyen</option>
             <option value="Environnement et developpement durable">Environnement et developpement durable</option>
             <option value="Santé et bien-être">Santé et bien-être</option>
             <option value="Economie locale et tradition">Economie locale et tradition</option>
             <option value="Signalements et entraides">Signalements et entraides</option>
            </select>
           </span>
          </div>
         </div>
         <div class="col-lg-12">
          <div class="twr_form_box">
           <span class="textarea">
            <textarea name="comment" placeholder="Message"></textarea>
           </span>
          </div>
         </div>
         <div class="col-lg-12 col-md-12">
          <button type="submit" class="btn btn-primary">Envoyer ma demande</button>
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
   </div>
  </div>
 </div>
 <!-- testimonial area -->

 <div class="cr_fea_area" style="margin-top: 15px;">
  <div class="container">
   <div class="row">
    <!-- 1 single feature -->
    <div class="col-lg-4 col-md-6">
     <div class="txbdsva allcostyle boxsh boxpsv txbdmb30 fea_1 text-center sselect">
      <div class="txbdsi">
       <div class="txbdicon iconalltf iconall iconallactive  ">
        <img src="assets/images/expression.png" class="pictoIcone" alt="Cité d'Ex">
       </div>
       <div class="txbdcon">
        <h2 class="txbdsvtitle hlight">Espace d'Expression</h2>
        <div class="txbdsvbtn txbdbtnicon">
         <a class="btnallt btnall btnallactive" href="contact.php">Proposer un sujet</a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <!-- 2 single feature -->
    <div class="col-lg-4 col-md-6">
     <div class="txbdsva allcostyle boxsh boxpsv txbdmb30 fea_1 text-center sselect">
      <div class="txbdsi">
       <div class="txbdicon iconalltf iconall iconallactive">
        <img src="assets/images/citoyennete.png" class="pictoIcone" alt="Cité d'Ex">
       </div>
       <div class="txbdcon">
        <h2 class="txbdsvtitle hlight">Rassemblement citoyen</h2>
        <div class="txbdsvbtn txbdbtnicon">
         <a class="btnallt btnall btnallactive" href="contact.php">Partager une activité</a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <!-- 3. single feature -->
    <div class="col-lg-4 col-md-6">
     <div class="txbdsva allcostyle boxsh boxpsv txbdmb30 fea_1 text-center sselect">
      <div class="txbdsi">
       <div class="txbdicon iconalltf iconall iconallactive">
        <img src="assets/images/entraide.png" class="pictoIcone" alt="Cité d'Ex">
       </div>
       <div class="txbdcon">
        <h2 class="txbdsvtitle hlight">Entraide</h2>
        <div class="txbdsvbtn txbdbtnicon">
         <a class="btnallt btnall btnallactive" href="faire-un-don.php">Faire un don</a>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>

 <!-- footer area -->
 <?php
 require "inc/footer.php";
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