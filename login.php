<!DOCTYPE html>
<html lang="fr">
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Immosen MS ">
    <meta name="keywords" content="Immosen">
    <title>Connectez-Vous !!</title>
    <!-- Favicons-->
    <link rel="icon" href="images/logo/kayfi.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.html">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="css/themes/collapsible-menu/materialize.css" type="text/css" rel="stylesheet">
    <link href="css/themes/collapsible-menu/style.css" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="css/custom/custom.css" type="text/css" rel="stylesheet">
    <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="vendors/sweetalert/dist/sweetalert.css" type="text/css" rel="stylesheet">


    <style type="text/css">
      .submitButton:hover{
        background-color: #000;
      }
      .submitButton{
        background-color: #151515;

      }
    </style>
  </head>
  <body style="background-color: #ffffff;">
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <div id="login-page" class="row">
      <div class="col s12 z-depth-4 card-panel">
        <form class="login-form" id="loginForm">
          <div class="row">
            <div class="input-field col s12 center">
              <img src="images/logo/kayfi.png" alt="" class="responsive-img valign">
              <p class="center login-form-text"><h4>KAYFI MEDINA </h4> <br> Bienvenue, veuillez vous identifier</p>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">person_outline</i>
              <input required id="username" type="text" name="login" id="login" autofocus="">
              <label for="username" class="center-align">Nom d'utilisateur</label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-5">lock_outline</i>
              <input required id="password" type="password" name="motDePasse" id="motDePasse">
              <label for="password">Mot de passe</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <button type="submit" class="btn waves-effect waves-light col s12 submitButton">Se connecter</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    

    <!-- jQuery Library -->
    <script type="text/javascript" src="vendors/jquery-3.2.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>

    <script type="text/javascript" src="php/view/home/login.js"></script>
     <!--sweetalert -->
      <script type="text/javascript" src="vendors/sweetalert/dist/sweetalert.min.js"></script>
  </body>
</html>