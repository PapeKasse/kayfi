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
       require_once("../classe/classeSardin.php");
       $Id= htmlspecialchars($_GET['supprimer']);
       $str = explode("$", $Id);
       $a=0;
       $objet = new Sardin();
       foreach ($str as $ide) {
           $a= $objet->deleteSardin($ide);
       }
       echo $a;
   // header("location: index.php");
   } elseif (isset($_POST['ajouter'])) {
    require_once('../classe/classeSardin.php');
    $Sardin = new Sardin();
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
                echo $Sardin->addSardin($nom,$prix,$prixBarre,$descript,$image);
            }
        }
            else {
                echo 2;
            }
} elseif (isset($_POST['modifier'])) {
        //permet de modifier un numéro de bon de sortie et la date d'ajout dans le fichier view/sortie/modifier.php
        require_once('../classe/classeSardin.php');
        $Sardin = new Sardin();
        if(!empty($_POST['nom']) and !empty($_POST['prix']) and !empty($_POST['prixBarre']) and !empty($_POST['descript'])){
        
            $tmpName = $_FILES['image']['tmp_name'];
            $name = $_FILES['image']['name'];
            $size = $_FILES['image']['size'];
            $error = $_FILES['image']['error'];

            $nom = htmlspecialchars(trim($_POST['nom']));
            $prix = htmlspecialchars(trim($_POST['prix']));
            $prixBarre = htmlspecialchars(trim($_POST['prixBarre']));
            $descript = htmlspecialchars(trim($_POST['descript']));
            $idSardin = htmlspecialchars($_POST['modifier']);
        
          
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
                echo $Sardin->updateSardin($nom, $prix,$prixBarre,$descript,$image,$idSardin);
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
                include('php/view/sardin/ajouter.php');
            } elseif ($option == "modifier") {
                require_once('php/classe/classesardin.php');

                include('php/view/sardin/modifier.php');
            } elseif ($option=="supprimer") {
                require_once('php/classe/classesardin.php');

                include('php/view/sardin/liste.php');
            } elseif ($option=="details") {
                include('php/view/sardin/details.php');
            } elseif ($option=="liste") {
                include('php/view/sardin/liste.php');
            }
        } 
        else {
            include('php/view/sardin/liste.php');
        }
    }
?>