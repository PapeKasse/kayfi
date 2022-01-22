<?php 
	require_once('classeConnexion.php');
		// CLASSE VENTE 

		/** Attributs de la classe "Vente" **/
		
	class Vente {
		private $idVente;
		private $idSalarie;
		private $idClient;
		private $idArticle;
		private $quantite;
		private $idModepaiement;

			
		/** Constructeur ... **/
		public function __construct(){
			//récupération du nombre d'arguments
			$nb= func_num_args();

			// S'il n'y a pas de paramètre, on initialise les variables à une valeur nulle
			if ($nb == 0) {
				$this->idVente= "";
				$this->idSalarie= "";
				$this->idClient= "";
				$this->idArticle= "";
				$this->quantite= "";
				$this->idModepaiement= "";
			}

			/*Sinon s'il y a des paramètres on donne aux variables les valeurs des paramètres
			La fonction func_get_arg() recupère la valeur de l'argument à la position qui lui est donnée en paramètre*/
			if ($nb != 0) {
				$this->idVente= func_get_arg(0);
				$this->idSalarie= func_get_arg(1);
				$this->idClient= func_get_arg(2);
				$this->idArticle= func_get_arg(3);
				$this->quantite= func_get_arg(4);
				$this->idModepaiement= func_get_arg(5);
			}

		}
			
		/** Getter et Setter de l'attribut "idVente" **/
		public function getIdVente(){
			return $this->idVente;
		}
		public function setIdVente($idVente){
			$this->idVente = $idVente;
		}
	
		/** Getter et Setter de l'attribut "idSalarie" **/
		public function getIdSalarie(){
			return $this->idSalarie;
		}
		public function setIdSalarie($idSalarie){
			$this->idSalarie = $idSalarie;
		}
	
		/** Getter et Setter de l'attribut "idClient" **/
		public function getIdClient(){
			return $this->idClient;
		}
		public function setIdClient($idClient){
			$this->idClient = $idClient;
		}
	
		/** Getter et Setter de l'attribut "idArticle" **/
		public function getIdArticle(){
			return $this->idArticle;
		}
		public function setIdArticle($idArticle){
			$this->idArticle = $idArticle;
		}
	
		/** Getter et Setter de l'attribut "quantite" **/
		public function getQuantite(){
			return $this->quantite;
		}
		public function setQuantite($quantite){
			$this->quantite = $quantite;
		}
	
		/** Getter et Setter de l'attribut "idModepaiement" **/
		public function getIdModepaiement(){
			return $this->idModepaiement;
		}
		public function setIdModepaiement($idModepaiement){
			$this->idModepaiement = $idModepaiement;
		}
		//Recherche d'un élément de la table Vente**/
		public function rechercheVente($id){
			$list = array();
			$requete = Connexion::Connect()->query("SELECT * FROM vente WHERE idVente = \"$id\" ");
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee){
				$list[] = $donnee;
			}
			return $list;
		}
		// Insertion des valeurs 
		/** Fonctions CRUD **/
		public function addVente() {
			$requete = Connexion::Connect()->prepare('INSERT INTO vente(idVente, idSalarie, idClient, idArticle, quantite, idModepaiement)  
			VALUES (?, ?, ?, ?, ?, ?)');
			$requete->bindValue(1, $this->getIdVente());
			$requete->bindValue(2, $this->getIdSalarie());
			$requete->bindValue(3, $this->getIdClient());
			$requete->bindValue(4, $this->getIdArticle());
			$requete->bindValue(5, $this->getQuantite());
			$requete->bindValue(6, $this->getIdModepaiement());
			$res = $requete->execute();
			return($res);
		}
		// Modification des valeurs
		public function updateVente() {
			$requete = Connexion::Connect()->prepare('UPDATE vente SET idSalarie = ?, idClient = ?, idArticle = ?, quantite = ?, idModepaiement = ? WHERE idVente = ?
			');
			$requete->bindValue(1, $this->getIdSalarie());
			$requete->bindValue(2, $this->getIdClient());
			$requete->bindValue(3, $this->getIdArticle());
			$requete->bindValue(4, $this->getQuantite());
			$requete->bindValue(5, $this->getIdModepaiement());
			$requete->bindValue(6, $this->getIdVente());
			$res = $requete->execute(); 
			return($res);
		}
	// 	Suppression des valeurs
		public function deleteVente($code) {
			$requete = Connexion::Connect()->prepare('DELETE FROM vente  WHERE idVente = ?');
			$requete->bindValue(1, $code);
			$res = $requete->execute();
			return($res);
		}
	// 	Liste des ventes 
		public function listVente(){
			$list = array();
			$requete = Connexion::Connect()->query('SELECT * FROM vente');
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}
	}
?>