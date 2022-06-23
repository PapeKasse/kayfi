<?php
session_start();
/* session_destry(); */
 if(isset($_POST["idProduit"]))  
 {  
      $order_table = '';  
      $message = '';  
      if($_POST["action"] == "add")  
      {  
           if(isset($_SESSION["panier"]))  
           {  
                $is_available = 0;  
                foreach($_SESSION["panier"] as $keys => $values)  
                {  
                     if($_SESSION["panier"][$keys]['idProduit'] == $_POST["idProduit"])  
                     {  
                          $is_available++;  
                          $_SESSION["panier"][$keys]['quantite'] = $_SESSION["panier"][$keys]['quantite'] + $_POST["quantite"];  
                     }  
                }  
                if($is_available < 1)  
                {  
                     $item_array = array(  
                          'idProduit'               =>     $_POST["idProduit"],  
                          'nom'               =>     $_POST["nom"],  
                          'prix'               =>     $_POST["prix"],  
                          'quantite'          =>     $_POST["quantite"],  
                          'descript'          =>     $_POST["descript"],  
                          'photo'          =>     $_POST["photo"]  
                     );  
                     $_SESSION["panier"][] = $item_array;  
                }
            
           }  
           else  
           {  
                $item_array = array(  
                     'idProduit'               =>     $_POST["idProduit"],  
                     'nom'               =>     $_POST["nom"],  
                     'prix'               =>     $_POST["prix"],  
                     'quantite'          =>     $_POST["quantite"],  
                     'descript'          =>     $_POST["descript"],  
                     'photo'          =>     $_POST["photo"]  
                );  
               $_SESSION["panier"][] = $item_array;
           } 

      }
      if($_POST["action"] == "supprimer")  
      {  
           foreach($_SESSION["panier"] as $keys => $values)  
           {  
                if($values["idProduit"] == $_POST["idProduit"])  
                {  
                     unset($_SESSION["panier"][$keys]);   
                }  
           }  
       } 
         $order_table .= '
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
         ';
            if(!empty($_SESSION["panier"]))  
      {  
           foreach($_SESSION["panier"] as $keys => $value)  
           {  
                $order_table .= '
                <tbody>  
                    <tr>
                    <td>
                        <div class="product-item">
                          <img src="php/controller/photos/'.$value['photo'].'" alt="" style="width:200px;height:150px;"/>
                        </div>
                    </td>

                    <td class="text-center text-lg text-medium">'.$value['nom'].'</br> '.$value['descript'].'>
                   </td>

                    <td class="text-center">
                           <input type="number" name="quantite" min="1" max="10" value = "'.$value['quantite'].'"> 
                    </td>
                    
                    <td class="text-center text-lg text-medium">'.$value['prix'].'</td>
                    <td><button name="supprimer" class="text-center supprimer" id="'.$value["idProduit"].'"><i class="fa fa-trash"></i></button></td>
                </tr>
               </tbody>
                '; 
           }
     }
           if(!empty($_SESSION["panier"]))  
      {  
           $total=0;
           foreach($_SESSION["panier"] as $keys => $value)  
           { 
               $total = $total + ($value["quantite"] * $value["prix"]);
               $cmpt = count($_SESSION["panier"]);  
            }
      }else{
           $total=0;
      }

      //Séparation
          
           if(!empty($_SESSION["panier"])){
                 $suivan = 
                 '<div class="column" style="display:block;">
                    <a class="btn btn-success">Continuer</a>
                ';

                 $client = '<form method="" action="" id="formCommande" style="display:block;">
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
        '; 
              }else{
                   $suivan = 
                 '<div class="column" style="display:none">
                    <a class="btn btn-success">Continuer</a>
                ';

                    $client= '<form><div style="display:none;"></div>';
              }            
     $suivan .= '</div>';
     $client .= '</form>';
     $total.= ' FCFA';
     $order_table .= '</table>';
     $output = array(  
           'order_table'     =>     $order_table,  
           'cart_item'          =>     count($_SESSION["panier"]),
           'total'        =>     $total,
           'suivan'        =>     $suivan,
           'client'        =>     $client
      );  
      echo json_encode($output); 
  }else{
    echo 2;
  }  

 
   
?>