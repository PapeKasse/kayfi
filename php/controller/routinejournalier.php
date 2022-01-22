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
       //permet de supprimer une stock
       require_once("../classe/classeStock.php");
       $Id= htmlspecialchars($_GET['supprimer']);
       $str = explode("$", $Id);
       $a=0;
       $objet = new Stock();
       foreach ($str as $ide) {
           $a= $objet->deleteRoutine($ide);
       }
       echo $a;
   // header("location: index.php");
   } elseif (isset($_GET['supprimer2'])) {
    /*permet de supprimer un code article et une quantite dans la base de donnée
     via le modal dans le fichier view/sortie/ajouter.php et dans view/sortie/modifier.php */ 
   require_once("../classe/classeStock.php");
   $Id= htmlspecialchars($_GET['supprimer2']);
   $str = explode("$", $Id);
   $a=0;
   $objet = new Stock();
   foreach ($str as $ide) {
       $a= $objet->deleteStock($ide);
   }
   echo $a;
   }elseif (isset($_POST['ajouter'])) {
      
        require_once('../classe/classeStock.php');
            $Routine = new Stock();
            echo $Routine->addRoutine(null,htmlspecialchars($_POST['idSalarie']), htmlspecialchars($_POST['datePrise']));
        
    }elseif (isset($_POST['ajouter2'])) {
        /*permet d'ajouter un code article et une quantite dans la base*/
        require_once('../classe/classeStock.php');
        $Stock = new Stock();
        if ($Stock->ArticleExist(htmlspecialchars($_POST['idArticle']), htmlspecialchars($_POST['idRoutine'])) == false) {
            echo $Stock->addStock(10, htmlspecialchars($_POST['idArticle']),htmlspecialchars($_POST['quantite']),htmlspecialchars($_POST['idRoutine']));
        } else {
            echo 2;
        }
    }
     elseif (isset($_POST['modifier'])) {
        
        require_once('../classe/classeStock.php');
        $stock = new Stock();
        if ($stock->Exist4(htmlspecialchars($_POST['idSalarie']),htmlspecialchars($_POST['modifier'])) == false) {
            
            $stock = new Stock();
            echo $stock->updateRoutine(htmlspecialchars($_POST['idSalarie']), htmlspecialchars($_POST['datePrise']),htmlspecialchars($_POST['modifier']));
        } else {
            echo 2;
        }
    } elseif (isset($_POST['modifier2'])) {
        /*permet de modifier un code article et sa quantité via le modal 
          dans le fichier view/sortie/modifier.php et dans view/sortie/ajouter.php*/
       require_once('../classe/classeStock.php');
       $Sortie = new Stock();
       if ($Sortie->stockExist2(htmlspecialchars($_POST['idArticle']), htmlspecialchars($_POST['idRoutine']), htmlspecialchars($_POST['modifier2'])) == false) {
           $Sortie = new Stock();
           echo $Sortie->updateStock2(10,htmlspecialchars($_POST['idArticle']), htmlspecialchars($_POST['quantite']),htmlspecialchars($_POST['modifier2']));
       } else {
           echo 2;
       }
   }else {
        if (isset($opt)) {
            $opt = explode("-", $opt);
            $option = $opt[0];
            if ($option == "ajouter") {
                include('php/view/routinejournalier/ajouter.php');
            } elseif ($option == "modifier") {
                require_once('php/classe/classeStock.php');

                include('php/view/routinejournalier/modifier.php');
            } elseif ($option=="supprimer") {
                require_once('php/classe/classeStock.php');

                include('php/view/routinejournalier/liste.php');
            } elseif ($option=="details") {
                include('php/view/routinejournalier/details.php');
            } elseif ($option=="liste") {
                include('php/view/routinejournalier/liste.php');
            }
        } else {
            include('php/view/routinejournalier/liste.php');
        }
    }
