<?php
	require_once('classeConnexion.php'); 
	// CLASSE SALARIE 
	/** Attributs de la classe "Salarie" **/
	class Salarie {
		private $idSalarie;
		private $nom;
		private $prenom;
		private $adresse; 
		private $email;
		private $telephone;
		private $idRolesalarie;
		private $login;
		private $motDePasse;
		private $idDepartement;

		/** Constructeur ... **/
		public function __construct(){
			//récupération du nombre d'arguments
			$nb= func_num_args();
			// S'il n'y a pas de paramètre, on initialise les variables à une valeur nulle
			if ($nb == 0) {
				$this->idSalarie= "";
				$this->nom= "";
				$this->prenom= "";
				$this->adresse= "";
				$this->email= "";
				$this->telephone= "";
				$this->idRolesalarie= "";
				$this->login= "";
				$this->motDePasse= "";
				$this->idDepartement= "";
			}
			/*Sinon s'il y a des paramètres on donne aux variables les valeurs des paramètres
	La fonction func_get_arg() recupère la valeur de l'argument à la position qui lui est donnée en paramètre*/
			if ($nb != 0) {
				$this->idSalarie= func_get_arg(0);
				$this->nom= func_get_arg(1);
				$this->prenom= func_get_arg(2);
				$this->adresse= func_get_arg(3);
				$this->email= func_get_arg(4);
				$this->telephone= func_get_arg(5);
				$this->idRolesalarie= func_get_arg(6);
				$this->login= func_get_arg(7);
				$this->motDePasse= func_get_arg(8);
				$this->idDepartement= func_get_arg(9);
			}
		}
		/** Getter et Setter de l'attribut "idSalarie" **/
		public function getIdSalarie(){
			return $this->idSalarie;
		}
		public function setIdSalarie($idSalarie){
			$this->idSalarie = $idSalarie;
		}
		/** Getter et Setter de l'attribut "nom" **/
		public function getNom(){
			return $this->nom;
		}
		public function setNom($nom){
			$this->nom = $nom;
		}
		/** Getter et Setter de l'attribut "prenom" **/
		public function getPrenom(){
			return $this->prenom;
		}
		public function setPrenom($prenom){
			$this->prenom = $prenom;
		}
		/** Getter et Setter de l'attribut "adresse" **/
		public function getAdresse(){
			return $this->adresse;
		}
		public function setAdresse($adresse){
			$this->adresse = $adresse;
		}
		/** Getter et Setter de l'attribut "email" **/
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		/** Getter et Setter de l'attribut "telephone" **/
		public function getTelephone(){
			return $this->telephone;
		}
		public function setTelephone($telephone){
			$this->telephone = $telephone;
		}
		/** Getter et Setter de l'attribut "idRolesalarie" **/
		public function getIdRolesalarie(){
			return $this->idRolesalarie;
		}
		public function setIdRolesalarie($idRolesalarie){
			$this->idRolesalarie = $idRolesalarie;
		}
		/** Getter et Setter de l'attribut "login" **/
		public function getLogin(){
			return $this->login;
		}
		public function setLogin($login){
			$this->login = $login;
		}
		/** Getter et Setter de l'attribut "motDePasse" **/
		public function getMotDePasse(){
			return $this->motDePasse;
		}
		public function setMotDePasse($motDePasse){
			$this->motDePasse = $motDePasse;
		}
		/** Getter et Setter de l'attribut "idDepartement" **/
		public function getIdDepartement(){
			return $this->idDepartement;
		}
		public function setIdDepartement($idDepartement){
			$this->idDepartement = $idDepartement;
		}

		public function is_sha1($str) {
		    return (bool) preg_match('/^[0-9a-f]{40}$/i', $str);
		}
		//Recherche d'un élément de la table Salarie**/
		public function rechercheSalarie($id){
			$list = array();

			$requete = Connexion::Connect()->query("SELECT * FROM salarie WHERE idSalarie = \"$id\" ");

			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee){
				$list[] = $donnee;
			}
			return $list;
		}
		// Insertion des valeurs 
		/** Fonctions CRUD **/
		public function addSalarie($bases) {
			$db = Connexion::Connect();
			try {  			
				$db->beginTransaction();
				$requete = $db->prepare('INSERT INTO salarie(idSalarie, nom, prenom, adresse, email, telephone, idRolesalarie, login, motDePasse, idDepartement, bases) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
				$requete->bindValue(1, $this->getIdSalarie());
				$requete->bindValue(2, $this->getNom());
				$requete->bindValue(3, $this->getPrenom());
				$requete->bindValue(4, $this->getAdresse());
				$requete->bindValue(5, $this->getEmail());
				$requete->bindValue(6, $this->getTelephone());
				$requete->bindValue(7, $this->getIdRolesalarie());
				$requete->bindValue(8, $this->getLogin());
				$requete->bindValue(9, sha1($this->getMotDePasse()));
				$requete->bindValue(10, $this->getIdDepartement());
				$requete->bindValue(11, $bases);
				$res = $requete->execute();
				$idSalarie = $db->lastInsertId();

				$db->commit();
				return $res;
			} catch (Exception $e) {
			  $db->rollBack();
			  echo "Failed: " . $e->getMessage();
			}
		}
		// Modification des valeurs
		public function updateSalarie($bases) {
			$db = Connexion::Connect();
			try {  			
				$db->beginTransaction();

				if($this->is_sha1($this->getMotDePasse()))
					$password = $this->getMotDePasse();
				else
					$password = sha1($this->getMotDePasse());
				$requete = Connexion::Connect()->prepare('UPDATE salarie SET nom = ?, prenom = ?, adresse = ?, email = ?, telephone = ?, idRolesalarie = ?, login = ?, motDePasse = ?, idDepartement = ?, bases = ? WHERE idSalarie = ? ');
				$requete->bindValue(1, $this->getNom());
				$requete->bindValue(2, $this->getPrenom());
				$requete->bindValue(3, $this->getAdresse());
				$requete->bindValue(4, $this->getEmail());
				$requete->bindValue(5, $this->getTelephone());
				$requete->bindValue(6, $this->getIdRolesalarie());
				$requete->bindValue(7, $this->getLogin());
				$requete->bindValue(8, $password);
				$requete->bindValue(9, $this->getIdDepartement());
				$requete->bindValue(10, $bases);
				$requete->bindValue(11, $this->getIdSalarie());
				$res = $requete->execute(); 

				$db->commit();
				return $res;
			} catch (Exception $e) {
			  $db->rollBack();
			  echo "Failed: " . $e->getMessage();
			}
		}
		// Suppression des valeurs
		public function deleteSalarie($code) {
			$requete = Connexion::Connect()->prepare('DELETE FROM salarie WHERE idSalarie = ?');
			$requete->bindValue(1, $code);
			$res = $requete->execute();
			return($res);
		}
		// Liste des salaries 
		public function listSalarie(){
			$list = array();

			$requete = Connexion::Connect()->query('SELECT * FROM salarie WHERE idRolesalarie <> 5');

			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}

		public function listBase(){
			$list = array();

			$requete = Connexion::Connect()->query('SELECT * FROM base');

			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}

		public function listSalarie2(){
			$list = array();

			$requete = Connexion::Connect()->query("SELECT * FROM salarie WHERE idRolesalarie <> 5");

			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}

		public function updateProfile($login, $ancienMotDePasse, $nouveauMotDePasse) {
			$db = Connexion::Connect();
			try {  			
				$db->beginTransaction();

				$requete1 = $db->prepare('UPDATE salarie SET motDePasse = ? WHERE login = ? AND motDePasse = ?');
				
				$requete1->bindValue(1, sha1($nouveauMotDePasse));
				$requete1->bindValue(2, $login);
				$requete1->bindValue(3, sha1($ancienMotDePasse));
				$res1 = $requete1->execute();

				$db->commit();
				return $res1;
			} catch (Exception $e) {
			  $db->rollBack();
			  echo "Failed: " . $e->getMessage();
			}
		}


		public function changeState($id, $etat) {
			$requete = Connexion::Connect()->prepare('UPDATE salarie SET etat = ? WHERE idSalarie = ? ');
			$requete->bindValue(1, $etat);
			$requete->bindValue(2, $id);
			$res = $requete->execute(); 
			return($res);
		}

		public function resetPassword($id) {
			$db = Connexion::Connect();
			try {  			
				$db->beginTransaction();

				$requete = Connexion::Connect()->prepare('UPDATE salarie SET motDePasse = ? WHERE idUtilisateur = ? ');
				$mdp = $this->random_password(8);
				$requete->bindValue(1, sha1($mdp));
				$requete->bindValue(2, $id);
				$res = $requete->execute();


				$list = array();
	
				$requete1 = $db->query("SELECT email FROM utilisateur WHERE idUtilisateur = \"$id\" ");;
				$email = "";
				/*$requete1->bindValue(1, $id);
				$res1 = $requete1->execute();*/

				foreach ($requete1 as $donnee) {
					$list[] = $donnee;
				}

				foreach ($list as $value) {
					$email = $value['email'];
				}

				$db->commit();
				// return $res1;
				if($res == 1)
					return "1$".$mdp."$".$email;
				else
					return($res);
			} catch (Exception $e) {
			  $db->rollBack();
			  echo "Failed: " . $e->getMessage();
			}
		}


		public function emailExist($email){
	        $list = array();
	        $requete = Connexion::Connect()->query("SELECT email FROM salarie WHERE email = \"$email\" ");
	        /*On parcours le résultat*/
	        foreach ($requete as $donnee){
	            $list[] = $donnee;
			}
			 if(count($list) != 0){
	            return true;
	        }
	         else
	            return false;    
	    }

	    public function emailExist2($email, $idSalarie){
	        $list = array();
	        $requete = Connexion::Connect()->query("SELECT email FROM salarie WHERE email = \"$email\" 
	        	AND idSalarie != \"$idSalarie\"
	        ");
	        /*On parcours le résultat*/
	        foreach ($requete as $donnee){
	            $list[] = $donnee;
			}
			 if(count($list) != 0){
	            return true;
	        }
	         else
	            return false;    
	    }

	    public function loginExist($login){
	        $list = array();
	        $requete = Connexion::Connect()->query("SELECT login FROM salarie WHERE login = \"$login\" ");
	        /*On parcours le résultat*/
	        foreach ($requete as $donnee){
	            $list[] = $donnee;
			}
			 if(count($list) != 0){
	            return true;
	        }
	         else
	            return false;    
	    }

	    public function loginExist2($login, $idSalarie){
	        $list = array();
	        $requete = Connexion::Connect()->query("SELECT login FROM salarie WHERE login = \"$login\" 
	        	AND idSalarie != \"$idSalarie\"
	        ");
	        /*On parcours le résultat*/
	        foreach ($requete as $donnee){
	            $list[] = $donnee;
			}
			 if(count($list) != 0){
	            return true;
	        }
	         else
	            return false;    
	    }

	    public function isLogged($login, $mdp){
	        $list = array();
	        /*On crypte le mot de passe avant la vérification car il est crypté dan sla base de données
			*On exécute la requete
	        */
	        $mdp = sha1($mdp);
	        $requete = Connexion::Connect()->query("SELECT motDePasse FROM vutilisateur WHERE login = \"$login\" AND motDePasse = \"$mdp\" ");
	        /*On parcours le résultat*/
	        foreach ($requete as $donnee){
	            $list[] = $donnee;
			}
			/*Si la taille du taille du tableau est différente de 0, l'vutilisateur est donc conecté. on revoie true*/
	        if(count($list) != 0){
	            return true;
	        }
	        /*Sinon on renvoi false*/
	         else
	            return false;     
	    }

	    public function isActivated($login, $mdp){
	        $list = array();
	        /*On crypte le mot de passe avant la vérification car il est crypté dan sla base de données
			*On exécute la requete
	        */
	        $mdp = sha1($mdp);
	        $requete = Connexion::Connect()->query("SELECT motDePasse FROM vutilisateur WHERE login = \"$login\" AND motDePasse = \"$mdp\" AND etat = 1 ");
	        /*On parcours le résultat*/
	        foreach ($requete as $donnee){
	            $list[] = $donnee;
			}
			/*Si la taille du taille du tableau est différente de 0, l'vutilisateur est donc conecté. on revoie true*/
	        if(count($list) != 0){
	            return true;
	        }
	        /*Sinon on renvoi false*/
	         else
	            return false;     
	    }

	    public function detailsUtilisateur($login, $mdp){
			$list = array();

			$requete = Connexion::Connect()->query("SELECT * FROM vutilisateur WHERE login = \"$login\" AND motDePasse = \"$mdp\" ");

			foreach ($requete as $donnee){
				$list[] = $donnee;
			}
			return $list;
		}	

		// Liste des commercial
		public function listCommercial(){
			$list = array();

			$requete = Connexion::Connect()->query('SELECT * FROM salarie');

			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}

		
		public function listSalaries(){
			$list = array();
			$requete = Connexion::Connect()->query('SELECT * FROM salarie');
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}
	}
?>