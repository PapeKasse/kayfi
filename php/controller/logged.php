<?php
	@session_start();
	require_once('../classe/classeSalarie.php');
	$Salarie = new Salarie();

	if($Salarie->isLogged($_POST['login'], $_POST['motDePasse']) == true){
		if($Salarie->isActivated($_POST['login'], $_POST['motDePasse']) == true){
			$infos = $Salarie->detailsUtilisateur($_POST['login'], sha1($_POST['motDePasse']));
			$_SESSION['kayficonnected'] = true;

			$_SESSION['kayfiidUtilisateur'] = $infos[0]['idUtilisateur'];
			$_SESSION['kayfiidDepartement'] = $infos[0]['idDepartement'];
			$_SESSION['kayfiemail'] = $infos[0]['email'];
			$_SESSION['kayfimotDePasse'] = $infos[0]['motDePasse'];
			$_SESSION['kayfilogin'] = $infos[0]['login'];
			$_SESSION['kayfiprenom'] = $infos[0]['prenom'];
			$_SESSION['kayfinom'] = $infos[0]['nom'];
			$_SESSION['kayfitelephone'] = $infos[0]['telephone'];
			$_SESSION['kayfiadresse'] = $infos[0]['adresse'];
			$_SESSION['kayfirole'] = $infos[0]['role'];
			$_SESSION['kayfibases'] = $infos[0]['bases'];


			if($infos[0]['role'] == "Administrateur"){
				$_SESSION['kayfiadministrateur'] = true;
				echo 2;
			}
			else if($infos[0]['role'] == "Salari&eacute;"){
				$_SESSION['kayfisalarie'] = true;
				echo 1;
			}
			else if($infos[0]['role'] == "Chef de d&eacute;partement"){
				$_SESSION['kayfichefdepartement'] = true;
				echo 1;
			}
			else if($infos[0]['role'] == "Assitante RH"){
				$_SESSION['kayfiassistanterh'] = true;
				echo 1;
			}
			else if($infos[0]['role'] == "DRH"){
				$_SESSION['kayfidrh'] = true;
				echo 1;
			}
			
		}else{
			echo 40;
		}
		
	}
	else {
		echo -1;
	}
?>