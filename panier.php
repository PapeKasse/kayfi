<?php
session_start();
/* session_destroy(); */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KAYFI</title>
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="monstyle.css" rel="stylesheet">
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="kayfi_css_js/css/style.css" rel="stylesheet">
    <link href="kayfi_css_js/css/styles.css" rel="stylesheet">
    <link href="kayfi_css_js/css/responsive.css" rel="stylesheet">

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


    <!-- Css Styles organie master -->
    
   
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    
  <!-- FIN organie master -->  
  </head>

<body>

<!-- Modal de Connexion -->
<div class="container-fluid">  
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div id="login-page">
                    <div class="modal-body">
                        <form class="login-form" id="loginForm">

                            <div class="form-group">
                                <label for="username" >Utilisateur</label>
                                <input required id="username" type="text" name="login" id="login" autofocus="" class="form-control" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                            <label for="password">Password</label>
                            <input required id="password"  type="password" class="form-control" name="mdp" id="motDePasse" placeholder="Password" id="exampleInputPassword1">
                            </div>
                                <button type="submit" class="btn btn-primary submitButton">Se connecter</button>
                        </form>
                    </div>
                  </div>
              
                    <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Annuler</button>
                    </div>
           </div>
        </div>
    </div>
</div>

<!-- FIN Modal de Connexion -->




    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="our-link">
                        <ul>
                            <li><a style="font-size: 15px;font-weight:600;" href="#"><i class="fa fa-envelope"> </i> Kayfi<i class="fas fa-at"></i>gmail.com</a></li>
                            <li class="log2"><a data-toggle="modal" data-target="#exampleModalCenter" style="cursor:pointer;"><i class="fa fa-user s_color"></i> Connexion</a></li>
                            <li class="log2"><a href="#"><i class="fa fa-compress" aria-hidden="true"> </i> Inscription</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i>Service de livraison gratuit partout au Sénégal !
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i>20% de Réduction sur tous nos produits Maison ! 
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Kayfi gnou dioxla liga soxla!
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-6">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Aide</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                    <span class="text-muted px-2">|</span>
                    <a class="bienvenue" href="">BIENVENUE !</a>
                    <span class="text-muted px-2">|</span>
                    <a class="bienvenue "href="">OUVERT 24h/24 ET 7j/7</a>  
                </div>
            </div>
            <div style="margin:auto;" class="col-lg-6 text-center text-lg-right align-items-center">
                <a href="#" style="color:#fff;"><i class="fab fa-whatsapp " style="font-size:30px;"></i></a>
                <a href="#" style="color:#fff;"><i class="fab fa-facebook " style="font-size:30px;"></i></a>
                <a href="#" style="color:#fff;"><i class="fab fa-instagram " style="font-size:30px;"></i></a>
                <a href="#" style="color:#fff;"><i class="fab fa-twitter " style="font-size:30px;"></i></a>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">KAYFI</span>SENEGAL</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action=""  class="rch">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Rechercher ici...">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
           
            <div class="tell2_panier col-lg-3 col-12 text-right">
                <a href="" class=" tell2 btn border">
                   <p class="mb-0"><i class="fa fa-phone fa-spin text-primary mr-3"></i>+221 777125150</p>
                </a>
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="panier.php" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i><span class="badge cart_item">
                    <?php
                    if(isset($_SESSION['panier'])){
                          echo $count = count($_SESSION['panier']);
                    }else {
                        echo '0';
                    }
                    ?>
                    </span>
                </a>
            </div>
         
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
           
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">KAYFI</span>SENEGAL</h1>
                    </a>
                    <button style="margin-top: -2px;" type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                  <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link" style="color: #1e90ff;"><i class="fa fa-home fa-x"></i> Home</a>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i style="color:#1e90ff;" class="fa fa-car fa-x"></i> Automobile</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Pare-Brise</a>
                                    <a href="checkout.html" class="dropdown-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Batteries</a>
                                    <a href="checkout.html" class="dropdown-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Phares</a>
                                    <a href="checkout.html" class="dropdown-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Accessoires</a>
                                </div>
                            </div>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i style="color:#1e90ff;" class="fa fa-h-square fa-x"></i> Maison</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Décos</a>
                                    <a href="checkout.html" class="dropdown-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Sardins</a>
                                    <a href="checkout.html" class="dropdown-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Literies</a>
                                    <a href="checkout.html" class="dropdown-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Tapies</a>
                                    <a href="checkout.html" class="dropdown-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Gazons</a>
                                    <a href="checkout.html" class="dropdown-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Ransement</a>
                                </div>
                            </div>

                            <li><a href="shop.html" class="nav-item nav-link"><i style="color:#1e90ff;" class="fa fa-tasks" aria-hidden="true"></i> Electromenagers</a></li>
                           <li><a href="contact.html" class="nav-item nav-link"><i style="color:#1e90ff;" class="fa fa-compress fa-x"> </i> Contact</a></li>
                            
                            <div class="log">
                            <li><a data-toggle="modal" data-target="#exampleModalCenter" style="cursor:pointer;"><i style="color:#1e90ff;" class="fa fa-user s_color"> </i> Connexion</a></li>
                            <li><a href="#"><i style="color:#1e90ff;" class="fa fa-compress" aria-hidden="true"> </i> Inscription</a></li>
                            </div>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <p class="btn border tell"><i class="fa fa-phone fa-spin text-primary "></i> +221 77 712 51 50</p>
                        </div>
                    </div>
                </nav>
                
               
            </div>
      </div>
</div>
  
</br>
       
    <!-- Navbar End -->

    <!-- PANIER -->


    <div class="container">
                <div classs="col-lg-12 text-center bg-light mb-5 rounded">
                    <h2 style="text-align:center;" class="text-primary">MON PANIER</h2>
                </div>    
    </div>
    

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container padding-bottom-3x mb-1">
    <!-- Alert-->
    <div class="alert alert-info alert-dismissible fade show text-center" style="margin-bottom: 30px;"><span class="alert-close" data-dismiss="alert"></span><img class="d-inline align-center" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIuMDAzIDUxMi4wMDMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMi4wMDMgNTEyLjAwMzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIxNnB4IiBoZWlnaHQ9IjE2cHgiPgo8Zz4KCTxnPgoJCTxnPgoJCQk8cGF0aCBkPSJNMjU2LjAwMSw2NGMtNzAuNTkyLDAtMTI4LDU3LjQwOC0xMjgsMTI4czU3LjQwOCwxMjgsMTI4LDEyOHMxMjgtNTcuNDA4LDEyOC0xMjhTMzI2LjU5Myw2NCwyNTYuMDAxLDY0eiAgICAgIE0yNTYuMDAxLDI5OC42NjdjLTU4LjgxNiwwLTEwNi42NjctNDcuODUxLTEwNi42NjctMTA2LjY2N1MxOTcuMTg1LDg1LjMzMywyNTYuMDAxLDg1LjMzM1MzNjIuNjY4LDEzMy4xODQsMzYyLjY2OCwxOTIgICAgIFMzMTQuODE3LDI5OC42NjcsMjU2LjAwMSwyOTguNjY3eiIgZmlsbD0iIzUwYzZlOSIvPgoJCQk8cGF0aCBkPSJNMzg1LjY0NCwzMzMuMjA1YzM4LjIyOS0zNS4xMzYsNjIuMzU3LTg1LjMzMyw2Mi4zNTctMTQxLjIwNWMwLTEwNS44NTYtODYuMTIzLTE5Mi0xOTItMTkycy0xOTIsODYuMTQ0LTE5MiwxOTIgICAgIGMwLDU1Ljg1MSwyNC4xMjgsMTA2LjA2OSw2Mi4zMzYsMTQxLjE4NEw2NC42ODQsNDk3LjZjLTEuNTM2LDQuMTE3LTAuNDA1LDguNzI1LDIuODM3LDExLjY2OSAgICAgYzIuMDI3LDEuNzkyLDQuNTY1LDIuNzMxLDcuMTQ3LDIuNzMxYzEuNjIxLDAsMy4yNDMtMC4zNjMsNC43NzktMS4xMDlsNzkuNzg3LTM5Ljg5M2w1OC44NTksMzkuMjMyICAgICBjMi42ODgsMS43OTIsNi4xMDEsMi4yNCw5LjE5NSwxLjI4YzMuMDkzLTEuMDAzLDUuNTY4LTMuMzQ5LDYuNjk5LTYuNGwyMy4yOTYtNjIuMTQ0bDIwLjU4Nyw2MS43MzkgICAgIGMxLjA2NywzLjE1NywzLjU0MSw1LjYzMiw2LjY3Nyw2LjcyYzMuMTM2LDEuMDY3LDYuNTkyLDAuNjQsOS4zNjUtMS4yMTZsNTguODU5LTM5LjIzMmw3OS43ODcsMzkuODkzICAgICBjMS41MzYsMC43NjgsMy4xNTcsMS4xMzEsNC43NzksMS4xMzFjMi41ODEsMCw1LjEyLTAuOTM5LDcuMTI1LTIuNzUyYzMuMjY0LTIuOTIzLDQuMzczLTcuNTUyLDIuODM3LTExLjY2OUwzODUuNjQ0LDMzMy4yMDV6ICAgICAgTTI0Ni4wMTcsNDEyLjI2N2wtMjcuMjg1LDcyLjc0N2wtNTIuODIxLTM1LjJjLTMuMi0yLjExMi03LjMxNy0yLjM4OS0xMC42ODgtMC42NjFMOTQuMTg4LDQ3OS42OGw0OS41NzktMTMyLjIyNCAgICAgYzI2Ljg1OSwxOS40MzUsNTguNzk1LDMyLjIxMyw5My41NDcsMzUuNjA1TDI0Ni43LDQxMS4yQzI0Ni40ODcsNDExLjU2MywyNDYuMTY3LDQxMS44NCwyNDYuMDE3LDQxMi4yNjd6IE0yNTYuMDAxLDM2Mi42NjcgICAgIEMxNjEuOSwzNjIuNjY3LDg1LjMzNSwyODYuMTAxLDg1LjMzNSwxOTJTMTYxLjksMjEuMzMzLDI1Ni4wMDEsMjEuMzMzUzQyNi42NjgsOTcuODk5LDQyNi42NjgsMTkyICAgICBTMzUwLjEwMywzNjIuNjY3LDI1Ni4wMDEsMzYyLjY2N3ogTTM1Ni43NTksNDQ5LjEzMWMtMy40MTMtMS43MjgtNy41MDktMS40NzItMTAuNjg4LDAuNjYxbC01Mi4zNzMsMzQuOTIzbC0zMy42NDMtMTAwLjkyOCAgICAgYzQwLjM0MS0wLjg1Myw3Ny41ODktMTQuMTg3LDEwOC4xNi0zNi4zMzFsNDkuNTc5LDEzMi4yMDNMMzU2Ljc1OSw0NDkuMTMxeiIgZmlsbD0iIzUwYzZlOSIvPgoJCTwvZz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" width="18" height="18" alt="Medal icon">Passer Votre Commande en toute <strong>Sécurité</strong>.</div>
    <!-- Shopping Cart-->
    <div class="table-responsive shopping-cart" id="order_table">
        <table class="table">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Quantité</th>
                    <th class="text-center">Prix</th>
                    <th class="text-center"><a class="btn btn-sm btn-outline-danger" href="#">Supprimer</a></th>
                </tr>
            </thead>
            <tbody>
                
               <?php  
               if(isset($_SESSION["panier"])){
                   $total=0;
                             foreach ($_SESSION["panier"] as $key => $value){ 
                         ?>
                <tr>
                    <td>
                        <div class="product-item">
                           <?php echo '<img src="php/controller/photos/'.$value['photo'].'" alt="" style="width:200px;height:150px;" />';?>
                        </div>
                    </td>

                    <td style="max-width:350px;overflow: hidden;text-overflow: ellipsis; " class="text-center text-lg text-medium"><?php echo $value['nom'];?> </br> <?php echo $value['descript'];?>
                   </td>

                    <td class="text-center">
                           <input type="number" name="quantite" min='1' max='10' value = "<?php echo $value['quantite']; ?>" > 
                    </td>
                    
                    <td class="text-center text-lg text-medium"><?php echo $value['prix'];?></td>
                    <td><button name="supprimer" class="text-center supprimer" id="<?php echo $value["idProduit"]; ?>"><i class="fa fa-trash"></i></button></td>
                    <?php
                    $total = $total + ($value["quantite"] * $value["prix"]);
                    ?>
                </tr>
               <?php
                 }
                ?>
               <?php
                 }else{
                     $total=0;
                 }
                ?>
            </tbody>
        </table>
        
    </div>
    <div class="shopping-cart-footer">
       
        <div class="column text-lg"> <h2 style="text-align:center;font-family:bold;">Total: <span class="text-medium total"><?php if($total>1){echo $total;}else{echo $total='0';}?> FCFA</span></h2></div>
    </div>
    <div class="shopping-cart-footer">
        <div class="column"><a class="btn btn-success" href="#"><i class="icon-arrow-left"></i>&nbsp;Retour aux Achats</a>
        </div>
        <div class="column suiv" id="suivan">
                <?php if(!empty($_SESSION['panier'])){
                    echo '<div class="column" style="display:block;">
                    <a class="btn btn-success">Continuer</a></div>
                ';
                }else{
                    echo '
                    <a class="btn btn-success" style="display:none;">Continuer</a>
                ';
                }
                ?>
        </div>
    </div>
  <div class="col" id="client">
      <?php if(!empty($_SESSION['panier'])){
          echo '
    <form method="" action="" id="formCommande" style="display:none;">
            <div class="form-col col">
                    <div class="form-group">
                        <label for="validationServer01">NOM & PRENOM</label>
                        <input type="text" class="form-control " id="validationServer01" placeholder="Nom Complet" name="nom" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="validationServer01">TELEPHONE</label>
                        <input type="number" class="form-control " id="validationServer01" placeholder="Téléphone" name="tel" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="validationServer02">ADRESSE</label>
                        <input type="text" class="form-control " id="validationServer02" placeholder="Adresse" name="adresse" value="" required>
                    </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                <label class="form-check-label" for="invalidCheck3">
                    Accepter les Termes et Conditions
                </label>
                </div>
            </div>
            <input type="hidden" name="valider">
            <button class="btn btn-success" name="valider" type="submit">Valider</button>
        </form>';
      }else{
            echo'<div style="display:none;"></div>';
      }?>
    </div>
</div>

    
    <!-- FIN PANIER -->
    <!-- Footer -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-6">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                <h1 class="mb-4 display-5 font-weight-semi-bold"><span style="color:#fff;" class="font-weight-bold border border-white px-3 mr-1">KAYFII</span>SENEGAL</h1>
                </a>
                <p>CONTACTEZ-NOUS .</p>
                <p class="mb-2"><i class="fa fa-map-marker  mr-3"></i>Rue 7 Angle 12, Médina, Dakar</p>
                <p class="mb-2"><i class="fa fa-envelope  mr-3"></i>kayfi@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone fa-spin mr-3"></i>+221 77 712 51 50</p>
                <p class="mb-0"><i class="fa fa-phone fa-spin  mr-3"></i>+221 77 488 51 11</p>
                </br>
                <p>Votre Satisfaction est notre priorité absolue  .</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    
                   <div class="col-md-4 mb-5">  
                        <h5 class="font-weight-bold text-dark mb-4">Liens</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <li><a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a></li>
                            <li><a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Infos</a></li>
                            <li><a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Aide</a></li>
                           <li><a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact</a></li>
                        </div>
                    </div>

                    <div class="col-md-4 mb-5">  
                        <h5 class="font-weight-bold text-dark mb-4">Infos</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <li><a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Qui sommes-nous</a></li>
                            <li><a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Confidentialité</a></li>
                            <li><a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Innovation</a></li>
                           <li><a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Projet</a></li>
                        </div>
                    </div>

    
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="Votre Nom" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="Votre Email"
                                    required="required" />
                            </div>
                            <div>
                                <button class="btn btn-light btn-block border-0 py-3" type="submit">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="https://kayfi.com">Copyright</a> Tout Droit Réservé
                    </br>
                    <a class="text-dark font-weight-semi-bold" href="#">Contact Développeur: Pacokasse55@gmail.com</a><br>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- FIN Footer -->


    <!-- Back to Top -->
    <button
        type="button"
        class="btn btn-primary btn-floating btn-lg"
        id="btn-back-to-top"
        >
  <i class="fas fa-arrow-up"></i>
</button>

<script src="kayfi_css_js/js/monjs.js"></script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="kayfi_css_js/js/main.js"></script>

    <script src="kayfi_css_js/js/jquery.superslides.min.js"></script>
    <script src="kayfi_css_js/js/inewsticker.js"></script>
    <script src="kayfi_css_js/js/images-loded.min.js"></script>
    <script src="kayfi_css_js/js/baguetteBox.min.js"></script>
    <script src="kayfi_css_js/js/form-validator.min.js"></script>
    <script src="kayfi_css_js/js/custom.js"></script>
    <script type="text/javascript" src="php/view/home/login.js"></script>
         <!--sweetalert -->
    <script type="text/javascript" src="vendors/sweetalert/dist/sweetalert.min.js"></script>
   
 
    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="kayfi_css_js/js/main.js"></script>


    <script src="js_organie/jquery-3.3.1.min.js"></script>
    <script src="js_organie/jquery.nice-select.min.js"></script>
    <script src="js_organie/jquery-ui.min.js"></script>
    <script src="js_organie/jquery.slicknav.js"></script>
    <script src="js_organie/mixitup.min.js"></script>
    <script src="js_organie/owl.carousel.min.js"></script>
    <script src="js_organie/main.js"></script>

    <script type="text/javascript" src="php/view/produit/produit.js"></script>
    <script type="text/javascript" src="php/view/produit/table.js"></script>>
</body>
</html>