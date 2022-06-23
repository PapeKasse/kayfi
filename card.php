<?php
session_start();
//session_destroy();
    $p_nom = htmlspecialchars($_POST['pnom']);
    $p_descript = htmlspecialchars($_POST['pdescript']);
    $p_prix = htmlspecialchars($_POST['pprix']);
    $p_quantite = htmlspecialchars($_POST['pquantite']);
    $p_id= htmlspecialchars($_POST['idTapie']);
    $p_photo= htmlspecialchars($_POST['pphoto']);
    if(!empty($_SESSION['panier'])){
           if(isset($_POST['psend'])){
    
                $checkProduit = array_column($_SESSION['panier'],'pnom');
            if(in_array($p_nom,$checkProduit)){
                $_SESSION['message']="<script>
                alert('Produit deja ajouter au panier');
                </script>
                ";
                
            }
    }else {
    $_SESSION['panier'][] = array(

                           'pnom' => $p_nom,
                           'pdescript' => $p_descript,
                           'pprix' => $p_prix,
                           'pquantite' => $p_quantite,
                           'pphoto' =>  $p_photo);
                           header("location:panier.php");
   } 
}
?>