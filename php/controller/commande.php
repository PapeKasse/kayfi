<?php
session_start();

if(isset($_POST['valider'])){
       require_once("../classe/classeClient.php");
       //require_once("../classe/classeCommande.php");
         $Client = new Client();
       if (!empty(htmlspecialchars($_POST['nom'])) AND !empty(htmlspecialchars($_POST['tel'])) AND !empty(htmlspecialchars($_POST['adresse'])))
       {
           $Client = new Client();
                if($Client->idClient(htmlspecialchars($_POST['nom']), htmlspecialchars($_POST['tel'])) == true)
                {
                        $id= $Client->addCommande(htmlspecialchars($_POST['tel']), "En Cours");
                        foreach ($_SESSION['panier'] as $key => $value) 
                        {
                          echo $result= $Client->addDetailsCommande($id,$value['nom'],$value['prix'],$value['descript'],$value['photo']);
                        }
                }else
                if($Client->idClient(htmlspecialchars($_POST['nom']), htmlspecialchars($_POST['tel'])) == false)
                {
                        $Client->addClient(htmlspecialchars($_POST['nom']), htmlspecialchars($_POST['tel']),htmlspecialchars($_POST['adresse']));
                        $id= $Client->addCommande(htmlspecialchars($_POST['tel']), "En Cours");
                        foreach ($_SESSION['panier'] as $key => $value) 
                        {
                           echo $Client->addDetailsCommande($id,$value['nom'],$value['prix'],$value['descript'],$value['photo']);
                        }
                 }
           }  
   }


?>