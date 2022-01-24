<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KAYFI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
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
                            <input required id="password"  type="password" class="form-control" name="motDePasse" id="motDePasse" placeholder="Password" id="exampleInputPassword1">
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
                <a href="#" style="color:#25d366;"><i class="fab fa-whatsapp " style="font-size:30px;"></i></a>
                <a href="#" style="color:#4267B2;"><i class="fab fa-facebook " style="font-size:30px;"></i></a>
                <a href="#" style="color:#831AB4;"><i class="fab fa-instagram " style="font-size:30px;"></i></a>
                <a href="#" style="color:#1DA1F2;"><i class="fab fa-twitter " style="font-size:30px;"></i></a>
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
                <a href="" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
            </div>
         
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <p class="m-0" style="color: rgb(13, 15, 15);font-size:25px;">Categories</p>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        
                        <a href="" class="nav-item nav-link"><i class="fa fa-angle-right" aria-hidden="true"></i> Pare-Brise</a>
                        <a href="" class="nav-item nav-link"><i class="fa fa-angle-right" aria-hidden="true"></i> Batteries</a>
                        <a href="" class="nav-item nav-link"><i class="fa fa-angle-right" aria-hidden="true"></i> Phares</a>
                        <a href="" class="nav-item nav-link"><i class="fa fa-angle-right" aria-hidden="true"></i> Décos</a>
                        <a href="" class="nav-item nav-link"><i class="fa fa-angle-right" aria-hidden="true"></i> Accessoires</a>
                        <a href="" class="nav-item nav-link"><i class="fa fa-angle-right" aria-hidden="true"></i> Literies</a>
                        <a href="" class="nav-item nav-link"><i class="fa fa-angle-right" aria-hidden="true"></i> Tapies</a>
                        <a href="" class="nav-item nav-link"><i class="fa fa-angle-right" aria-hidden="true"></i> Gazons</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">KAYFI</span>SENEGAL</h1>
                    </a>
                    <button style="margin-top: -2px;" type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.html" class="nav-item nav-link" style="color: #2ea8e2;"><i class="fa fa-home fa-x"></i> Home</a>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-car fa-x"></i> Automobile</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Pare-Brise</a>
                                    <a href="checkout.html" class="dropdown-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Batteries</a>
                                    <a href="checkout.html" class="dropdown-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Phares</a>
                                    <a href="checkout.html" class="dropdown-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Accessoires</a>
                                </div>
                            </div>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-h-square fa-x"></i> Maison</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Décos</a>
                                    <a href="checkout.html" class="dropdown-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Sardins</a>
                                    <a href="checkout.html" class="dropdown-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Literies</a>
                                    <a href="checkout.html" class="dropdown-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Tapies</a>
                                    <a href="checkout.html" class="dropdown-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Gazons</a>
                                    <a href="checkout.html" class="dropdown-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Ransement</a>
                                </div>
                            </div>

                            <li><a href="shop.html" class="nav-item nav-link"><i class="fa fa-tasks" aria-hidden="true"></i> Electromenagers</a></li>
                           <li><a href="contact.html" class="nav-item nav-link"><i class="fa fa-compress fa-x"> </i> Contact</a></li>
                            
                            <div class="log">
                            <li><a data-toggle="modal" data-target="#exampleModalCenter" style="cursor:pointer;"><i class="fa fa-user s_color"> </i> Connexion</a></li>
                            <li><a href="#"><i class="fa fa-compress" aria-hidden="true"> </i> Inscription</a></li>
                            </div>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <p class="btn border tell"><i class="fa fa-phone fa-spin text-primary "></i> +221 77 712 51 50</p>
                        </div>
                    </div>
                </nav>
                
                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 420px;">
                            <img class="img-fluid" src="img/img2.jpeg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Changer Votre Pare-Brise</h3>
                                    <a href="" class="btn btn-light py-2 px-3">Commander Maintenant</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height: 420px;">
                            <img class="img-fluid" src="img/img1.jpeg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Avec Dakar Pare-Brise !!</h3>
                                    <a href="" class="btn btn-light py-2 px-3">Commander Maintenant</a>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" style="height: 420px;">
                            <img class="img-fluid" src="img/gazon1.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Gazons Synthétiques</h3>
                                    <a href="" class="btn btn-light py-2 px-3">Commander Maintenant</a>
                                </div>
                            </div>
                        </div>

                        
                        <div class="carousel-item" style="height: 420px;">
                            <img class="img-fluid" src="img/matela1.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Des Matelas de bonne Qualités !</h3>
                                    <a href="" class="btn btn-light py-2 px-3">Commander Maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
      </div>
</div>

        <div style="background-color:#24ecec;min-height:60px;text-align:center;margin-top:-20px;box-shadow: 5px 5px 5px 5px black;" class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h2 style="font-size:20px;font-weight:bold;background-color:orange;color:#fff;"class="btn border">Tous Nos Catégories</h2>
                    </div>
                </div>
        </div>
</br>
       
    <!-- Navbar End -->

    <!-- Produits -->

        <div style="box-shadow: 5px 5px 5px 5px black;" class="container-fluid">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat1.jpg">
                       <h5><a href="#">Matela Ortopédie</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat10.jpg" >
                        />   <h5><a href="#">Pare-Brise</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat7.jpg">
                           <h5><a href="#">Tapis Maison</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat5.jpg" >
                         <h5><a href="#">Electromenagers</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat9.jpg">
                           <h5><a href="#">Fissure</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat2.jpg">
                          <h5><a href="#">Matela</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat4.jpg">
                           <h5><a href="#">Electromenagers</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</br>

        <div style="background-color:#24ecec;height:60px;box-shadow: 5px 5px 5px 5px black;text-align:center;" class="container-fluid">
               <div class="row">
                    <div class="col">
                        <h2 style="font-size:15px;font-weight:bold;margin-top:15px;background-color:orange;color:#fff;"class="btn border">-20%</h2>
                    </div>
                    <div class="col">
                        <h2 style="font-size:15px;font-weight:bold;margin-top:15px;background-color:orange;color:#fff;"class="btn border">-20%</h2>
                    </div>
                    <div class="red1 col">
                        <h2 style="font-size:15px;font-weight:bold;margin-top:15px;background-color:orange;color:#fff;"class="btn border">-20%</h2>
                    </div>
                    <div class="red2 col">
                        <h2 style="font-size:15px;font-weight:bold;margin-top:15px;background-color:orange;color:#fff;"class="btn border">-20%</h2>
                    </div>
               </div>
       </div>

</br>

        <div class="container-fluid cat_bg"> 
        <p style="text-align:center;padding-top:20px;font-size:20px;font-weight:bold;color:#fff;">L'ELECTROMENAGERS C'EST INDISPENSABLE ! </p>
            <div style="text-align:center;padding-top:27px;" class="row">
                <div class="col-lg-6 col-md-6 offset-md-0 offset-sm-1 col-sm-10 offset-sm-1 my-lg-0 my-2">
                  <img style="width:90%;box-shadow:0 0 5px 5px white;" src="img/categories/cat17.jpg"  alt="Veillez-Patienter"> 
                </div>
                <div class="cat18_resp col-lg-6 col-md-6 offset-md-0 offset-sm-1 col-sm-10 offset-sm-1 my-lg-0 my-2">
                  <img style="width:90%;box-shadow:0 0 5px 5px #fff;" src="img/categories/cat18.jpg" alt="Veillez-Patienter"> 
                </div>
          </div>
          <div style="text-align:center;margin-top:15px;">
          <h5 style="text-align:center;font-size:20px;font-weight:bold;color:#fff;" class="btn border">TOUS NOS PRODUITS ! </h5>
          </div>
        </div>      
</br>



  <!-- Products Start -->
  <div class="container-fluid">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Produits Electroménagers</span></h2>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-3" >
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img style="height:210px;" class="img-fluid w-100" src="img/categories/cat1.jpg" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3" style="font-size:19px;font:weight:bold;font-family:fantasy">Machine à Laver</h6>
                        <div class="d-flex justify-content-center">
                            <h6 style="font-size:15px;font-weight:bold;font-family:fantasy;" >PRIX: 120.000 FCFA</h6><h6 style="font-weight:600;" class="text-muted ml-2"><del>PRIX: 120.000 FCFA</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>DETAILS</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>PANIER</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3" >
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img style="height:210px;" class="img-fluid w-100" src="img/categories/cat5.jpg" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3" style="font-size:19px;font:weight:bold;font-family:fantasy">Machine à Laver</h6>
                        <div class="d-flex justify-content-center">
                            <h6 style="font-size:15px;font-weight:bold;font-family:fantasy;" >PRIX: 120.000 FCFA</h6><h6 style="font-weight:600;" class="text-muted ml-2"><del>PRIX: 120.000 FCFA</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>DETAILS</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>PANIER</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3" >
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img style="height:210px;" class="img-fluid w-100" src="img/categories/cat9.jpg" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3" style="font-size:19px;font:weight:bold;font-family:fantasy">Machine à Laver</h6>
                        <div class="d-flex justify-content-center">
                            <h6 style="font-size:15px;font-weight:bold;font-family:fantasy;" >PRIX: 120.000 FCFA</h6><h6 style="font-weight:600;" class="text-muted ml-2"><del>PRIX: 120.000 FCFA</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>DETAILS</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>PANIER</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3" >
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img style="height:210px;" class="img-fluid w-100" src="img/categories/cat6.jpg" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3" style="font-size:19px;font:weight:bold;font-family:fantasy">Machine à Laver</h6>
                        <div class="d-flex justify-content-center">
                            <h6 style="font-size:15px;font-weight:bold;font-family:fantasy;" >PRIX: 120.000 FCFA</h6><h6 style="font-weight:600;" class="text-muted ml-2"><del>PRIX: 120.000 FCFA</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>DETAILS</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>PANIER</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3" >
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img style="height:210px;" class="img-fluid w-100" src="img/categories/cat10.jpg" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3" style="font-size:19px;font:weight:bold;font-family:fantasy">Machine à Laver</h6>
                        <div class="d-flex justify-content-center">
                            <h6 style="font-size:15px;font-weight:bold;font-family:fantasy;" >PRIX: 120.000 FCFA</h6><h6 style="font-weight:600;" class="text-muted ml-2"><del>PRIX: 120.000 FCFA</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>DETAILS</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>PANIER</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3" >
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img style="height:210px;" class="img-fluid w-100" src="img/categories/cat11.jpeg" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3" style="font-size:19px;font:weight:bold;font-family:fantasy">Machine à Laver</h6>
                        <div class="d-flex justify-content-center">
                            <h6 style="font-size:15px;font-weight:bold;font-family:fantasy;" >PRIX: 120.000 FCFA</h6><h6 style="font-weight:600;" class="text-muted ml-2"><del>PRIX: 120.000 FCFA</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>DETAILS</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>PANIER</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3" >
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img style="height:210px;" class="img-fluid w-100" src="img/categories/cat4.jpg" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3" style="font-size:19px;font:weight:bold;font-family:fantasy">Machine à Laver</h6>
                        <div class="d-flex justify-content-center">
                            <h6 style="font-size:15px;font-weight:bold;font-family:fantasy;" >PRIX: 120.000 FCFA</h6><h6 style="font-weight:600;" class="text-muted ml-2"><del>PRIX: 120.000 FCFA</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>DETAILS</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>PANIER</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3" >
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img style="height:210px;" class="img-fluid w-100" src="img/categories/cat12.jpeg" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3" style="font-size:19px;font:weight:bold;font-family:fantasy">Machine à Laver</h6>
                        <div class="d-flex justify-content-center">
                            <h6 style="font-size:15px;font-weight:bold;font-family:fantasy;" >PRIX: 120.000 FCFA</h6><h6 style="font-weight:600;" class="text-muted ml-2"><del>PRIX: 120.000 FCFA</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>DETAILS</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>PANIER</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->

   <!-- Vendor Start -->
   <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-1.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-2.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-3.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-4.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-5.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-6.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-7.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

    <!-- FIN Produits -->

    <!-- Footer -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-6">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span style="color:#1e95d5;" class="font-weight-bold border border-white px-3 mr-1">KAYFI</span>SENEGAL</h1>
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
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Envoyer</button>
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
        class="btn btn-danger btn-floating btn-lg"
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

</body>
</html>