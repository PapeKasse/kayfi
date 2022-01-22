<?php
    @session_start();
    function matricule($table, $champs){
        require_once('../classes/classeConnexion.php');
        $requete = Connection::Connexion()->query("SELECT $champs FROM $table ORDER BY $champs DESC LIMIT 0,1;");
        $result = "0";
        foreach ($requete as $donne) 
            $result = $donne[0];
        if($result == "0")
            return ("0");
        else
            return($result);
    }

    function sendEmailResetPassword($sujet, $mailDestinataire, $contenu){
        if(mail($mailDestinataire, $sujet, $contenu)){
            echo 1;
        }
        else{
            echo 0;
        }
    }

    if(isset($_GET['changerEtat'])){
        require_once("../classe/classeSalarie.php");
        $Id= htmlspecialchars($_GET['changerEtat']);
        $etat= htmlspecialchars($_GET['etat']);
        $str = explode("$", $Id);
        $a=0;
        $objet = new Salarie();
        foreach($str as $ide){
            $a= $objet->changeState($ide, $etat);
        }
        echo $a;
        // header("location: index.php");
    }else if(isset($_GET['resetPassword'])){
        require_once("../classe/classeSalarie.php");
        $Id= htmlspecialchars($_GET['resetPassword']);
        $str = explode("$", $Id);
        $a=0;
        $objet = new Salarie();
        foreach($str as $ide){
            $a= $objet->resetPassword($ide);
        }
        $res = explode("$", $a);
        //echo $res[0];
        $sujet = "Reinitialisation de votre mot de passe Gilab MS";
        $mailDestinataire = $res[2];
		// echo $res[2];
        $contenu = "Votre nouveau mot de passe est : ".$res[1];
        sendEmailResetPassword($sujet, $mailDestinataire, $contenu);
        // header("location: index.php");
    }else if(isset($_GET['supprimer'])){
        require_once("../classe/classeSalarie.php");
        $Id= htmlspecialchars($_GET['supprimer']);
        $str = explode("$", $Id);
        $a=0;
        $objet = new Salarie();
        foreach($str as $ide){
            $a= $objet->deleteSalarie($ide);
        }
        echo $a;
        // header("location: index.php");
    }else if(isset($_POST['updateProfile'])){
        require_once('../classe/classeSalarie.php');
        $Salarie = new Salarie();
        if ($Salarie->isLogged(htmlspecialchars($_POST['login']), htmlspecialchars($_POST['motDePasseActuel']))) {
            $Salarie = new Salarie();
            echo $Salarie->updateProfile(htmlspecialchars($_POST['login']), htmlspecialchars($_POST['motDePasseActuel']), htmlspecialchars($_POST['motDePasse']));
        }
        else {
             echo 2;
        }
    }
    else if(isset($_POST['ajouter'])){
        require_once('../classe/classeSalarie.php');
        $Salarie = new Salarie();
        if ($Salarie->emailExist(htmlspecialchars($_POST['email'])) == false && $Salarie->loginExist(htmlspecialchars($_POST['login'])) == false) {
            
            $Salarie = new Salarie(NULL, htmlspecialchars($_POST['nom']), htmlspecialchars($_POST['prenom']), htmlspecialchars($_POST['adresse']), htmlspecialchars($_POST['email']), htmlspecialchars($_POST['telephone']), htmlspecialchars($_POST['idRolesalarie']), htmlspecialchars($_POST['login']), htmlspecialchars($_POST['motDePasse']), htmlspecialchars($_POST['idDepartement']));
            echo $Salarie->addSalarie(htmlspecialchars($_POST['bases']));
        }
        else if ($Salarie->loginExist(htmlspecialchars($_POST['login'])) == true) {
             echo 2;
        }
        else if ($Salarie->emailExist(htmlspecialchars($_POST['email'])) == true){
            echo 3;
        }
    }
    else if(isset($_POST['modifier'])){
        require_once('../classe/classeSalarie.php');
        $Salarie = new Salarie();
        if ($Salarie->emailExist2(htmlspecialchars($_POST['email']), htmlspecialchars($_POST['modifier'])) == false && $Salarie->loginExist2(htmlspecialchars($_POST['login']), htmlspecialchars($_POST['modifier'])) == false) {
            
            $Salarie = new Salarie(htmlspecialchars($_POST['modifier']), htmlspecialchars($_POST['nom']), htmlspecialchars($_POST['prenom']), htmlspecialchars($_POST['adresse']), htmlspecialchars($_POST['email']), htmlspecialchars($_POST['telephone']), htmlspecialchars($_POST['idRolesalarie']), htmlspecialchars($_POST['login']), htmlspecialchars($_POST['motDePasse']), htmlspecialchars($_POST['idDepartement']));
            echo $Salarie->updateSalarie(htmlspecialchars($_POST['bases']));
        }
        else if ($Salarie->loginExist2(htmlspecialchars($_POST['login']), htmlspecialchars($_POST['modifier'])) == true) {
             echo 2;
        }
        else if ($Salarie->emailExist2(htmlspecialchars($_POST['email']), htmlspecialchars($_POST['modifier'])) == true){
            echo 3;
        }
    }
    else{
        if(isset($opt)){
            $opt = explode("-", $opt);
            $option = $opt[0];
            if($option == "ajouter"){
                include('php/view/salarie/ajouter.php');
            }else if($option == "modifier"){
                require_once('php/classe/classeSalarie.php');

                include('php/view/salarie/modifier.php');
            }else if($option=="supprimer"){
               require_once('php/classe/classeSalarie.php');

                include('php/view/salarie/liste.php');
            }
            else if($option=="details"){
                include('php/view/salarie/details.php');
            }else if($option=="liste"){
                include('php/view/salarie/liste.php');
            }
        }
        else{
            include('php/view/salarie/liste.php');
        }
    }
?>