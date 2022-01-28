<?php
	@session_start();
	require_once('../classe/classeUtilisateur.php');
	$Utilisateur = new Utilisateur();

	if($Utilisateur->isLogged($_POST['login'], $_POST['mdp']) == true){
		if($Utilisateur->isActivated($_POST['login'], $_POST['mdp']) == true){
			$infos = $Utilisateur->detailsUtilisateur($_POST['login'], sha1($_POST['mdp']));
			$_SESSION['kayficonnected'] = true;

			$_SESSION['kayfiidUtilisateur'] = $infos[0]['idUtilisateur'];
			$_SESSION['kayfinomComplet'] = $infos[0]['nomComplet'];
			$_SESSION['kayfiadresse'] = $infos[0]['adresse'];
			$_SESSION['kayfitel'] = $infos[0]['tel'];
			$_SESSION['kayfiemail'] = $infos[0]['email'];
			$_SESSION['kayfilogin'] = $infos[0]['login'];
			$_SESSION['kayfimdp'] = $infos[0]['mdp'];
			$_SESSION['kayfistatut'] = $infos[0]['statut'];


			if($infos[0]['statut'] == "admin"){
				$_SESSION['kayfiadmin'] = true;
				echo 2;
			}	
		}else{
			echo 40;
		}
		
	}
	else {
		echo -1;
	}
?>