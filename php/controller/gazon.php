<?php
    @session_start();
    function matricule($table, $champs)
    {
        require_once('../classes/classeConnexion.php');
        $requete = Connection::Connexion()->query("SELECT $champs FROM $table ORDER BY $champs DESC LIMIT 0,1;");
        $result = "0";
        foreach ($requete as $donne) {
            $result = $donne[0];
        }
        if ($result == "0") {
            return ("0");
        } else {
            return($result);
        }
    }

   if (isset($_GET['supprimer'])) {
       //permet de supprimer une sortie
       require_once("../classe/classeGazon.php");
       $Id= htmlspecialchars($_GET['supprimer']);
       $str = explode("$", $Id);
       $a=0;
       $objet = new Gazon();
       foreach ($str as $ide) {
           $a= $objet->deleteGazon($ide);
       }
       echo $a;
   // header("location: index.php");
   } elseif (isset($_POST['ajouter'])) {
    require_once('../classe/classeGazon.php');
    $Gazon = new Gazon();
        if(!empty($_POST['nom']) and !empty($_POST['prix']) and !empty($_POST['prixBarre'])
        and !empty($_POST['descript'])){
            $nom = htmlspecialchars(trim($_POST['nom']));
            $prix = htmlspecialchars(trim($_POST['prix']));
            $prixBarre = htmlspecialchars(trim($_POST['prixBarre']));
            $descript = htmlspecialchars(trim($_POST['descript']));
         
            $tmpName = $_FILES['image']['tmp_name'];
            $name = $_FILES['image']['name'];
            $size = $_FILES['image']['size'];
            $error = $_FILES['image']['error'];
          
            $tabExtension = explode('.', $name);
            $extension = strtolower(end($tabExtension));
          
            $extensions = ['jpg', 'png', 'jpeg', 'gif','svg'];
            $maxSize = 400000;

            if (in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {
                $uniqueName = uniqid('', true);
                //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
                $image = $uniqueName.".".$extension;
                //$file = 5f586bf96dcd38.73540086.jpg
                move_uploaded_file($tmpName, '../controller/photos/'.$image);
                echo $Gazon->addGazon($nom,$prix,$prixBarre,$descript,$image);
            }
        }
            else {
                echo 2;
            }
} elseif (isset($_POST['modifier'])) {
        //permet de modifier un numéro de bon de sortie et la date d'ajout dans le fichier view/sortie/modifier.php
        require_once('../classe/classeGazon.php');
        $Gazon = new Gazon();
        if(!empty($_POST['nom']) and !empty($_POST['prix']) and !empty($_POST['prixBarre']) and !empty($_POST['descript'])){
        
            $tmpName = $_FILES['image']['tmp_name'];
            $name = $_FILES['image']['name'];
            $size = $_FILES['image']['size'];
            $error = $_FILES['image']['error'];

            $nom = htmlspecialchars(trim($_POST['nom']));
            $prix = htmlspecialchars(trim($_POST['prix']));
            $prixBarre = htmlspecialchars(trim($_POST['prixBarre']));
            $descript = htmlspecialchars(trim($_POST['descript']));
            $idGazon = htmlspecialchars($_POST['modifier']);
        
          
            $tabExtension = explode('.', $name);
            $extension = strtolower(end($tabExtension));
          
            $extensions = ['jpg', 'png', 'jpeg', 'gif','svg'];
            $maxSize = 400000;

            if (in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {
                $uniqueName = uniqid('', true);
                //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
                $image = $uniqueName.".".$extension;
                //$file = 5f586bf96dcd38.73540086.jpg
                move_uploaded_file($tmpName, '../controller/photos/'.$image);
                echo $Gazon->updateGazon($nom, $prix,$prixBarre,$descript,$image,$idGazon);
            }
        }
            else {
                echo 2;
            }
            
    } else {
        if (isset($opt)) {
            $opt = explode("-", $opt);
            $option = $opt[0];
            if ($option == "ajouter") {
                include('php/view/gazon/ajouter.php');
            } elseif ($option == "modifier") {
                require_once('php/classe/classegazon.php');

                include('php/view/gazon/modifier.php');
            } elseif ($option=="supprimer") {
                require_once('php/classe/classegazon.php');

                include('php/view/gazon/liste.php');
            } elseif ($option=="details") {
                include('php/view/gazon/details.php');
            } elseif ($option=="liste") {
                include('php/view/gazon/liste.php');
            }
        } 
        else {
            include('php/view/gazon/liste.php');
        }
    }
?>