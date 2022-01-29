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
       require_once("../classe/classeTapie.php");
       $Id= htmlspecialchars($_GET['supprimer']);
       $str = explode("$", $Id);
       $a=0;
       $objet = new Tapie();
       foreach ($str as $ide) {
           $a= $objet->deleteTapie($ide);
       }
       echo $a;
   // header("location: index.php");
   } elseif (isset($_POST['ajouter'])) {
    require_once('../classe/classeTapie.php');
    $Tapie = new Tapie();
        if(!empty($_POST['nom']) and !empty($_POST['prix']) 
        and !empty($_POST['descript'])){
            $nom = htmlspecialchars(trim($_POST['nom']));
            $prix = htmlspecialchars(trim($_POST['prix']));
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
                echo $Tapie->addTapie($nom,$prix,$descript,$image);
            }
        }
            else {
                echo 2;
            }
} elseif (isset($_POST['modifier'])) {
        //permet de modifier un numéro de bon de sortie et la date d'ajout dans le fichier view/sortie/modifier.php
        require_once('../classe/classeTapie.php');
        $Tapie = new Tapie();
        if(!empty($_POST['nom']) and !empty($_POST['prix']) 
        and !empty($_POST['descript'])){

            $tmpName = $_FILES['image']['tmp_name'];
            $name = $_FILES['image']['name'];
            $size = $_FILES['image']['size'];
            $error = $_FILES['image']['error'];

            $nom = htmlspecialchars(trim($_POST['nom']));
            $prix = htmlspecialchars(trim($_POST['prix']));
            $descript = htmlspecialchars(trim($_POST['descript']));
            $idTapie = htmlspecialchars($_POST['modifier']);
        
          
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
                echo $Tapie->updateTapie($nom, $prix,$descript,$image,$idTapie);
            }
        }
            else {
                echo 2;
            }
            
    } elseif (isset($_POST['modifier2'])) {
         /*permet de modifier un code article et sa quantité via le modal 
           dans le fichier view/sortie/modifier.php et dans view/sortie/ajouter.php*/
        require_once('../classe/classeTapie.php');
        $Tapie = new Tapie();
        if ($Tapie->detailsTapieExist2(htmlspecialchars($_POST['codeArticle']), htmlspecialchars($_POST['idTapie']), htmlspecialchars($_POST['modifier2'])) == false) {
            $Tapie = new Tapie();
            echo $Tapie->updateDetailsTapie(htmlspecialchars($_POST['codeArticle']), htmlspecialchars($_POST['quantite']), htmlspecialchars($_POST['modifier2']));
        } else {
            echo 2;
        }
    } elseif (isset($_POST['ajouter2'])) {
        /*permet d'ajouter un code article et une quantite dans la base
          dans le fichier view/sortie/ajouter.php*/
        require_once('../classe/classeTapie.php');
        $Tapie = new Tapie();
        if ($Tapie->detailsTapieExist(htmlspecialchars($_POST['codeArticle']), htmlspecialchars($_POST['idTapie'])) == false) {
            echo $Tapie->addDetailsTapie(htmlspecialchars($_POST['codeArticle']), htmlspecialchars($_POST['quantite']), htmlspecialchars($_POST['idSortie']));
        } else {
            echo 2;
        }
    } elseif (isset($_GET['supprimer2'])) {
         /*permet de supprimer un code article et une quantite dans la base de donnée
          via le modal dans le fichier view/sortie/ajouter.php et dans view/sortie/modifier.php */ 
        require_once("../classe/classeTapie.php");
        $Id= htmlspecialchars($_GET['supprimer2']);
        $str = explode("$", $Id);
        $a=0;
        $objet = new Tapie();
        foreach ($str as $ide) {
            $a= $objet->deleteDetailsTapie($ide);
        }
        echo $a;
    // header("location: index.php");
    } else {
        if (isset($opt)) {
            $opt = explode("-", $opt);
            $option = $opt[0];
            if ($option == "ajouter") {
                include('php/view/tapie/ajouter.php');
            } elseif ($option == "modifier") {
                require_once('php/classe/classeTapie.php');

                include('php/view/tapie/modifier.php');
            } elseif ($option=="supprimer") {
                require_once('php/classe/classeTapie.php');

                include('php/view/tapie/liste.php');
            } elseif ($option=="details") {
                include('php/view/tapie/details.php');
            } elseif ($option=="liste") {
                include('php/view/tapie/liste.php');
            }
        } 
        else {
            include('php/view/tapie/liste.php');
        }
    }
?>