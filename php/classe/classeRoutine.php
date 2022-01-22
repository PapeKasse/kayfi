<?php 
	require_once('classeConnexion.php');
		// CLASSE STOCK 

		/** Attributs de la classe "Stock" **/
		
	class Routine {
		private $idRoutine;
		private $idSalarie;
		private $datePrise;

			
		/** Constructeur ... **/
		public function __construct(){
			//récupération du nombre d'arguments
			$nb= func_num_args();

			// S'il n'y a pas de paramètre, on initialise les variables à une valeur nulle
			if ($nb == 0) {
				$this->idRoutine= "";
				$this->idSalarie= "";
				$this->datePrise= "";
	
				
			}

			/*Sinon s'il y a des paramètres on donne aux variables les valeurs des paramètres
			La fonction func_get_arg() recupère la valeur de l'argument à la position qui lui est donnée en paramètre*/
			if ($nb != 0) {
				$this->idRoutine= func_get_arg(0);
				$this->idSalarie= func_get_arg(1);
				$this->datePrise= func_get_arg(2);
	
				
			}

		}
			
		/** Getter et Setter de l'attribut "idStock" **/
		public function getIdRoutine(){
			return $this->idRoutine;
		}
		public function setIdRoutine($idRoutine){
			$this->idRoutine = $idRoutine;
		}
	
		/** Getter et Setter de l'attribut "idSalarie" **/
		public function getIdSalarie(){
			return $this->idSalarie;
		}
		public function setIdSalarie($idSalarie){
			$this->idSalarie = $idSalarie;
		}
	
		/** Getter et Setter de l'attribut "datePrise" **/
		public function getDatePrise(){
			return $this->datePrise;
		}
		public function setDatePrise($datePrise){
			$this->datePrise = $datePrise;
		}
	
	
		
		//Recherche d'un élément de la table Stock**/
		public function rechercheRoutine($id){
			$list = array();
			$requete = Connexion::Connect()->query("SELECT * FROM routine WHERE idRoutine = \"$id\" ");
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee){
				$list[] = $donnee;
			}
			return $list;
		}
		// Insertion des valeurs 
		/** Fonctions CRUD **/
	/* 	public function addStock() {
			$requete = Connexion::Connect()->prepare('INSERT INTO stock(idStock, idSalarie, datePrise, idArticle, quantite)  
			VALUES (?, ?, ?, ?, ?)');
			$requete->bindValue(1, $this->getIdStock());
			$requete->bindValue(2, $this->getIdSalarie());
			$requete->bindValue(3, $this->getDatePrise());
			$requete->bindValue(4, $this->getIdArticle());
			$requete->bindValue(5, $this->getQuantite());
			$res = $requete->execute();
			return($res);
		} */
		// Modification des valeurs
		public function updateStocks() {
			$requete = Connexion::Connect()->prepare('UPDATE stock SET idSalarie = ?, datePrise = ?, idArticle = ?, quantite = ? WHERE idStock = ?
			');
			$requete->bindValue(1, $this->getIdSalarie());
			$requete->bindValue(2, $this->getDatePrise());
			$requete->bindValue(3, $this->getIdArticle());
			$requete->bindValue(4, $this->getQuantite());
			$requete->bindValue(5, $this->getIdStock());
			$res = $requete->execute(); 
			return($res);
		}

		public function updateStock($idSalarie,$datePrise,$idArticle,$quantite, $idStock)
        {
			$requete = Connexion::Connect()->prepare('UPDATE stock SET idSalarie = ?, datePrise = ?, idArticle = ?, quantite = ? WHERE idStock = ?
						');
            $requete->bindValue(1, $idSalarie);
            $requete->bindValue(2, $datePrise);
            $requete->bindValue(3, $idArticle); 
            $requete->bindValue(4, $quantite); 
            $requete->bindValue(5, $idStock); 
            $res = $requete->execute();
            return($res);
        }
	// 	Suppression des valeurs
		public function deleteStock($code) {
			$requete = Connexion::Connect()->prepare('DELETE FROM stock  WHERE idStock = ?');
			$requete->bindValue(1, $code);
			$res = $requete->execute();
			return($res);
		}
	// 	Liste des stocks 
		public function listStock(){
			$list = array();
			$requete = Connexion::Connect()->query('SELECT * FROM stock');
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}


		// Liste des articles 
		public function listArticle(){
			$list = array();
			$requete = Connexion::Connect()->query('SELECT * FROM article');
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}
		public function addRoutine() {
			$db=Connexion::Connect();
			$requete = $db->prepare('INSERT INTO routine(idRoutine, idSalarie, datePrise)  
			VALUES (?, ?, ?)');
			$requete->bindValue(1, $this->getIdRoutine());
			$requete->bindValue(2, $this->getIdSalarie());
			$requete->bindValue(3, $this->getDatePrise());
			$res = $requete->execute();
			$idRoutine = $db->lastInsertId();
			return($idRoutine);
		}
	
		public function addStock($idRoutine,$idSalarie, $quantite, $idArticle)
        {
            $db = Connexion::Connect();
            $requete = $db->prepare('INSERT INTO stock(idRoutine,idSalarie, quantite, idArticle)  
						VALUES (?, ?, ?, ?)');
            $res = $requete->execute([$idRoutine,$idSalarie,$quantite,$idArticle]);
        
            return($res);
		}
		
		public function ArticleExist2($idArticle, $idRoutine)
        {
            $list = array();
            $requete = Connexion::Connect()->query("SELECT idArticle FROM stock WHERE idArticle = \"$idArticle\" AND idRoutine = \"$idRoutine\" ");
            /*On parcours le résultat*/
            foreach ($requete as $donnee) {
                $list[] = $donnee;
            }
            if (count($list) != 0) {
                return true;
            } else {
                return false;
            }
		}
		
		//Insérer code article et quantité dans la base de données dans la table stock
      
		public function ArticleExist($idArticle, $idRoutine)
        {
            $list = array();
            $requete = Connexion::Connect()->query("SELECT idArticle FROM stock WHERE idArticle = \"$idArticle\" AND idRoutine = \"$idRoutine\" ");
            /*On parcours le résultat*/
            foreach ($requete as $donnee) {
                $list[] = $donnee;
            }
            if (count($list) != 0) {
                return true;
            } else {
                return false;
            }
		}
		
		public function listDetailsStock($idRoutine)
        {
            $list = array();
            $requete = Connexion::Connect()->query("SELECT detailssortie.codeArticle as codeArticle, detailssortie.idSortie as idSortie, detailssortie.idDetailssortie as idDetailssortie,
            detailssortie.quantite as quantite, 
            article.libelle as libelle FROM detailssortie,article WHERE idSortie=\"$idSortie\"
            AND detailssortie.codeArticle=article.codeArticle");
            //On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne
            foreach ($requete as $donnee) {
                $list[] = $donnee;
            }
            return $list;
        }
		
	}
?>