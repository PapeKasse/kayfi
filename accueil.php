<?php
    @session_start();  
    if(!isset($_SESSION['kayficonnected'])){
        header("location:index.php");
    }
    header('Content-type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="fr">
  
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Kayfi</title>
    <!-- Favicons-->
    <link rel="icon" href="images/logo/kayfi.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/logo/kayfi.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.html">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="css/themes/collapsible-menu/materialize.css" type="text/css" rel="stylesheet">
    <link href="css/themes/collapsible-menu/style.css" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="css/custom/custom.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="vendors/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet">
    <link href="vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS FOR TABLE -->
    <link href="vendors/prism/prism.css" type="text/css" rel="stylesheet">
    <link href="vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="vendors/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet">
    <!-- <link href="vendors/datatable/datatables.min.css" type="text/css" rel="stylesheet"> -->
    <link href="vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
    <!--dropify-->
    <link href="vendors/dropify/css/dropify.min.css" type="text/css" rel="stylesheet">
    <link href="vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
    <link href="vendors/sweetalert/dist/sweetalert.css" type="text/css" rel="stylesheet">
    <!-- jQuery Library -->
    <script type="text/javascript" src="vendors/jquery-3.2.1.min.js"></script>
    <!-- Formatter -->
    <script type="text/javascript" src="vendors/formatter/jquery.formatter.min.js"></script>
    <link href="css/css-loader.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrapModal.css" type="text/css" rel="stylesheet">
    <link href="vendors/jquery.nestable/nestable.css" type="text/css" rel="stylesheet">
    <!-- <link href="css/loader-default.css" type="text/css" rel="stylesheet"> -->
    <link href="css/select2/select2.min.css" type="text/css" rel="stylesheet" media="screen,projection">
      <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">

    <style type="text/css">
      .btnPetit{
        padding: 0px 10px;
        font-size: 10px;
        line-height: 25px;
        height: 25px;
      }
    </style>
  </head>

  <body style="background-color: #ececec">
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>


    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
 
    <header id="header" class="page-topbar">
      <!-- start header nav-->
      <div class="navbar-fixed">
        <nav class="navbar-color gradient-45deg-light-blue-cyan gradient-shadow">
          <div class="nav-wrapper">
            <ul class="right hide-on-med-and-down">
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                  <i class="material-icons">settings_overscan</i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">
                    <img src="images/avatar/avatar-7.png" alt="avatar">
                    <i></i>
                  </span>
                </a>
              </li>
            </ul>
            <!-- notifications-dropdown -->
            
            <!-- profile-dropdown -->
            <ul id="profile-dropdown" class="dropdown-content">
              
              <li>
                <a href="Profile" class="grey-text text-darken-1">
                  <i class="material-icons">face</i> Profile</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="deconnexion.php" class="grey-text text-darken-1">
                  <i class="material-icons">keyboard_tab</i> D&eacute;connexion</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- END HEADER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <?php
      $URL = $_SERVER['REQUEST_URI'];
      $URL = str_replace('/kayfi/', "", $URL);
      $tableau_chemin = explode("_",$URL);
    ?>
    <?php 
      $concened = 'Administrateur';
    ?>
    <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav" class="nav-expanded nav-lock nav-collapsible">
          <div class="brand-sidebar">
            <h1 class="logo-wrapper">
              <a href="acceuil.php" class="brand-logo darken-1">
                <img src="images/logo/kayfi.png" alt="materialize logo">
                <span class="logo-text hide-on-med-and-down" style="font-size: 20px;">Administrateur</span>
              </a>
              <a href="#" class="navbar-toggler">
                <i class="material-icons">radio_button_checked</i>
              </a>
            </h1>
          </div>
          <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion"> 

                <!-- Automobile -->
                <a href="deconnexion.php" class="collapsible-header  waves-effect waves-cyan">
                    <i class="material-icons">description</i>
                    <span class="nav-text">Retour vers le site</span>
                  </a>
                <li class="">
                
                  <a class="collapsible-header  waves-effect waves-cyan">
                    <i class="material-icons">description</i>
                    <span class="nav-text">Automobile</span>
                  </a>
                  <div class="collapsible-body">
                    <ul class="collapsible" data-collapsible="accordion">
                      <li class="<?php if(stristr($tableau_chemin[0], "parebrise") !== false) echo "active" ?>">
                        <a href="parebrise_liste">
                          <i class="material-icons">play_arrow</i>
                          <span>Pare-Brise</span>
                        </a>
                      </li>
                      <li class="<?php if(stristr($tableau_chemin[0], "batteries") !== false) echo "active" ?>">
                        <a href="batteries_liste">
                          <i class="material-icons">play_arrow</i>
                          <span>Batteries</span>
                        </a>
                      </li>
                      <li class="<?php if(stristr($tableau_chemin[0], "phares") !== false) echo "active" ?>">
                        <a href="phares_liste">
                          <i class="material-icons">play_arrow</i>
                          <span>Phares</span>
                        </a>
                      </li>
                      <li class="<?php if(stristr($tableau_chemin[0], "accessoires") !== false) echo "active" ?>">
                        <a href="accessoires_liste">
                          <i class="material-icons">play_arrow</i>
                          <span>Accessoires</span>
                        </a>
                      </li>

                    </ul>
                  </div>
                </li>
                <!-- fin Automobile--> 
                
                <!-- Maison--> 
                <li class="">
                  <a class="collapsible-header  waves-effect waves-cyan">
                    <i class="material-icons">description</i>
                    <span class="nav-text">Maison</span>
                  </a>
                  <div class="collapsible-body">
                    <ul class="collapsible" data-collapsible="accordion">
                      <li class="<?php if(stristr($tableau_chemin[0], "decos") !== false) echo "active" ?>">
                        <a href="decos_liste">
                          <i class="material-icons">play_arrow</i>
                          <span>D&eacute;cos</span>
                        </a>
                      </li>
                      <li class="<?php if(stristr($tableau_chemin[0], "sardin") !== false) echo "active" ?>">
                        <a href="sardin_liste">
                          <i class="material-icons">play_arrow</i>
                          <span>Sardins</span>
                        </a>
                      </li>
                      <li class="<?php if(stristr($tableau_chemin[0], "litterie") !== false) echo "active" ?>">
                        <a href="litteries_liste">
                          <i class="material-icons">play_arrow</i>
                          <span>Litteries</span>
                        </a>
                      </li>
                      <li class="<?php if(stristr($tableau_chemin[0], "tapie") !== false) echo "active" ?>">
                        <a href="tapie_liste">
                          <i class="material-icons">play_arrow</i>
                          <span>Tapies</span>
                        </a>
                      </li>
                      <li class="<?php if(stristr($tableau_chemin[0], "gazon") !== false) echo "active" ?>">
                        <a href="gazon_liste">
                          <i class="material-icons">play_arrow</i>
                          <span>Gazons</span>
                        </a>
                      </li>
                      <li class="<?php if(stristr($tableau_chemin[0], "ransement") !== false) echo "active" ?>">
                        <a href="batteries_liste">
                          <i class="material-icons">play_arrow</i>
                          <span>Batteries</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                 <!-- Fin Maison-->

                    <!-- Electromenagers--> 
                    <li class="">
                  <a class="collapsible-header  waves-effect waves-cyan">
                    <i class="material-icons">description</i>
                    <span class="nav-text">Electromenager</span>
                  </a>
                  <div class="collapsible-body">
                    <ul class="collapsible" data-collapsible="accordion">
                      <li class="<?php if(stristr($tableau_chemin[0], "Television") !== false) echo "active" ?>">
                        <a href="Television_liste">
                          <i class="material-icons">play_arrow</i>
                          <span>T&eacute;l&eacute;vision</span>
                        </a>
                      </li>
                      <li class="<?php if(stristr($tableau_chemin[0], "Machine") !== false) echo "active" ?>">
                        <a href="Machine_liste">
                          <i class="material-icons">play_arrow</i>
                          <span>Machine Lavage</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                    <!--Fin Electromenagers--> 

              </ul>
            </li>
            
          </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only gradient-45deg-light-blue-cyan gradient-shadow">
            <i class="material-icons">menu</i>
          </a>
        </aside>
        <!-- <div class="loader loader-default"> -->
        <!-- END LEFT SIDEBAR NAV-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTENT -->
        <section id="content">
          <?php
            $tab["menu"]["Administrateur"] = 1;
            $tab["menu"]["Utilisateur"] = 1;
            $tab["menu"]["Profile"] = 1;

            $tab["menu"]["routinejournalier"]["liste"] = 1;
            $tab["menu"]["routinejournalier"]["ajouter"] = 1;
            $tab["menu"]["routinejournalier"]["modifier"] = 1;
            $tab["menu"]["routinejournalier"]["supprimer"] = 1;

            $tab["menu"]["tapie"]["liste"] = 1;
            $tab["menu"]["tapie"]["ajouter"] = 1;
            $tab["menu"]["tapie"]["modifier"] = 1;
            $tab["menu"]["tapie"]["supprimer"] = 1;

            $URL = $_SERVER['REQUEST_URI'];

            $URL = str_replace('/kayfi/', "", $URL);
            $tableau_chemin = explode("_",$URL);
            $taille = sizeof($tableau_chemin);
            // echo $tableau_chemin[0]." espave ".$tableau_chemin[1]." espave ".$taille;
            switch ($taille){
              case 1:{
                    $a = !empty($tab["menu"][$tableau_chemin[0]]);
                    if($a==1)
                        include('php/view/home/'.$tableau_chemin[0].'.php');
                    break;
              }case 2:{
                    $tab1 = explode('-', $tableau_chemin[1]);
                    $a = !empty($tab["menu"][$tableau_chemin[0]][$tab1[0]]);
                      if($a==1){
                        $opt = $tableau_chemin[1];
                        include('php/controller/'.$tableau_chemin[0].'.php');
                      }
                    break;
              }case 3:{
                  $a = !empty($tab["menu"][$tableau_chemin[0]][$tableau_chemin[1]]);

                  $opt = $tableau_chemin[2];
                  if($a==1){
                      include('php/controller/'.$tableau_chemin[1].'.php');
                  }
                break;
              }
            }
          ?>
        </section>
        <!-- END CONTENT -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        
        </div>
        <!-- END WRAPPER -->
      </div>
      <!-- END MAIN -->
      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START FOOTER -->
      <footer class="page-footer gradient-45deg-light-blue-cyan">
        <div class="footer-copyright">
          <div class="container">
            <span>Copyright &copy;
              <script type="text/javascript">
                document.write(new Date().getFullYear());
              </script> <a class="grey-text text-lighten-4" href="http://kayfi.com" target="_blank">KAYFI MEDINA</a></span>
              </br>
              </script> <a class="grey-text text-lighten-4" href="#">Ce Site est Développé par Pacokasse55@gmail.com</a></span>
          </div>
        </div>
      </footer>
      <!-- END FOOTER -->
      <!-- ================================================
    Scripts
    ================================================ -->
      
      <!--materialize js-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <!--prism-->
      <script type="text/javascript" src="vendors/prism/prism.js"></script>
      <!--scrollbar-->


      <!-- data-tables -->
      <script type="text/javascript" src="vendors/data-tables/js/jquery.dataTables.min.js"></script>
      <!-- <script type="text/javascript" src="vendors/datatable/datatables.min.js"></script> -->
      <!--data-tables.js - Page Specific JS codes -->
      <script type="text/javascript" src="js/scripts/data-tables.js"></script>


      <script type="text/javascript" src="vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
      <!-- chartjs -->
      <!-- <script type="text/javascript" src="vendors/chartjs/chart.min.js"></script> -->
      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
      <script type="text/javascript" src="js/plugins.js"></script>

      <!-- dropify -->
      <script type="text/javascript" src="vendors/dropify/js/dropify.min.js"></script>
      <!--form-file-uploads.js - Page Specific JS codes-->
      <script type="text/javascript" src="js/scripts/form-file-uploads.js"></script>
      <!--custom-script.js - Add your own theme custom JS-->
      <script type="text/javascript" src="js/custom-script.js"></script>
      <!-- <script type="text/javascript" src="js/scripts/dashboard-ecommerce.js"></script> -->

      <!--sweetalert -->
      <script type="text/javascript" src="vendors/sweetalert/dist/sweetalert.min.js"></script>
      <!--advanced-ui-modals.js - Some Specific JS codes -->
      <script type="text/javascript" src="js/scripts/advanced-ui-modals.js"></script>

      <script type="text/javascript" src="js/bootstrap.min.js"></script>

      <!-- chartjs -->
      <script type="text/javascript" src="vendors/chartjs/chart.min.js"></script>
      <script type="text/javascript" src="css/select2/select2.min.js"></script>

      <script type="text/javascript">
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
            <?php //if(isset($_SESSION['kayfiadministrateur'])){ ?>
              // $(".navbar-toggler").click();
            <?php //} ?>
        });
      </script>

  </body>
</html>