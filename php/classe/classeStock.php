<?php 
	require_once('classeConnexion.php');
		// CLASSE STOCK 

		/** Attributs de la classe "Stock" **/
		
	class Stock {
		private $idStock;
		private $idSalarie;
		private $datePrise; 
		private $idArticle;
		private $quantite;

			
		/** Constructeur ... **/
		public function __construct(){
			//récupération du nombre d'arguments
			$nb= func_num_args();

			// S'il n'y a pas de paramètre, on initialise les variables à une valeur nulle
			if ($nb == 0) {
				$this->idStock= "";
				$this->idSalarie= "";
				$this->datePrise= "";
				$this->idArticle= "";
				$this->quantite= "";
			}

			/*Sinon s'il y a des paramètres on donne aux variables les valeurs des paramètres
			La fonction func_get_arg() recupère la valeur de l'argument à la position qui lui est donnée en paramètre*/
			if ($nb != 0) {
				$this->idStock= func_get_arg(0);
				$this->idSalarie= func_get_arg(1);
				$this->datePrise= func_get_arg(2);
				$this->idArticle= func_get_arg(3);
				$this->quantite= func_get_arg(4);
			}

		}
			
		/** Getter et Setter de l'attribut "idStock" **/
		public function getIdStock(){
			return $this->idStock;
		}
		public function setIdStock($idStock){
			$this->idStock = $idStock;
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
		//Recherche d'un élément de la table Stock**/
		public function rechercheStock($id){
			$list = array();
			$requete = Connexion::Connect()->query("SELECT * FROM stock WHERE idStock = \"$id\" ");
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee){
				$list[] = $donnee;
			}
			return $list;
		}

		public function rechercheRoutine($id){
			$list = array();
			$requete = Connexion::Connect()->query("SELECT routine.idRoutine as idRoutine, routine.datePrise as datePrise,
			salarie.nom as nom, salarie.idSalarie as idSalarie FROM routine, salarie WHERE routine.idSalarie=salarie.idSalarie  AND idRoutine = \"$id\" ");
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
		
		
		public function updateStock2($idSalarie,$idArticle,$quantite,$idStock)
        {
            $requete = Connexion::Connect()->prepare('UPDATE stock SET  idSalarie =?, idArticle = ?, quantite = ? WHERE idStock = ?
						');
            $requete->bindValue(1, $idSalarie);
            $requete->bindValue(2, $idArticle);
            $requete->bindValue(3, $quantite);
            $requete->bindValue(4, $idStock);
            $res = $requete->execute();
            return($res);
        }
		
		public function updateRoutine($idSalarie,$datePrise,$idRoutine)
        {
			$requete = Connexion::Connect()->prepare('UPDATE routine SET  idSalarie =?, datePrise = ? WHERE idRoutine = ?
						');
            $requete->bindValue(1, $idSalarie);
            $requete->bindValue(2, $datePrise);
			$requete->bindValue(3, $idRoutine); 
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

		public function deleteRoutine($code) {
			$requete = Connexion::Connect()->prepare('DELETE FROM routine  WHERE idRoutine = ?');
			$requete->bindValue(1, $code);
			$res = $requete->execute();
			return($res);
		}
	// 	Liste des stocks 
		public function listStock(){
			$list = array();
			$requete = Connexion::Connect()->query('SELECT stock.idArticle as idArticle, stock.quantite as quantite, stock.idStock as idStock,
			 article.libelle as libelle FROM stock,article
			 where stock.idArticle=article.idArticle');
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

		public function listRoutine(){
			$list = array();
			$requete = Connexion::Connect()->query('SELECT routine.idRoutine as idRoutine, routine.idSalarie as idSalarie,
			salarie.nom as nom, routine.datePrise as datePrise FROM routine, salarie WHERE routine.idSalarie=salarie.idSalarie');
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}

		/* public function listArticle2(){
			$list = array();
			$requete = Connexion::Connect()->query('SELECT stock.idStock as idStock, article.libelle as libelle, article.idArticle as idArticle,
			 FROM stock, article where stock.idArticle=article.idArticle');
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		} */


		public function Exist2($idSalarie, $idArticle)
        {
            $list = array();
            $requete = Connexion::Connect()->query("SELECT idArticle FROM stock WHERE idArticle = \"$idArticle\" 
	        	AND idSalarie = \"$idSalarie\"
	        ");
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
		
		public function Exist3($idSalarie, $idArticle,$idStock)
        {
            $list = array();
            $requete = Connexion::Connect()->query("SELECT idArticle FROM stock WHERE idArticle = \"$idArticle\" 
	        	AND idSalarie = \"$idSalarie\" AND idStock != \"$idStock\";
	        ");
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

		public function Exist4($idSalarie, $modifier)
        {
            $list = array();
            $requete = Connexion::Connect()->query("SELECT idSalarie FROM routine WHERE idSalarie = \"$idSalarie\" 
	        	AND idRoutine = \"$modifier\"
	        ");
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

		public function addRoutine($idRoutine, $idSalarie,$datePrise) {
			$db=Connexion::Connect();
			$requete = $db->prepare('INSERT INTO routine(idRoutine, idSalarie, datePrise)  
			VALUES (?, ?, ?)');
			$requete->bindValue(1, $idRoutine);
            $requete->bindValue(2, $idSalarie);
            $requete->bindValue(3, $datePrise); 
            $res = $requete->execute();
			$idRoutine = $db->lastInsertId();
			return($idRoutine);
		}

		//Insérer code article et quantité dans la base de données dans la table stock
        public function addStock($idSalarie,$idArticle, $quantite, $idRoutine)
        {
            $db = Connexion::Connect();
            $requete = $db->prepare('INSERT INTO stock(idSalarie,idArticle, quantite,idRoutine )  
						VALUES (?, ?, ?, ?)');
            $res = $requete->execute([$idSalarie,$idArticle,$quantite,$idRoutine]);
        
            return($res);
		}
		
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
            $requete = Connexion::Connect()->query("SELECT stock.idStock as idStock, stock.datePrise as datePrise, 
			stock.quantite as quantite, stock.idRoutine as idRoutine, article.idArticle as idArticle,
            article.libelle as libelle FROM stock,article WHERE idRoutine=\"$idRoutine\"
            AND stock.idArticle=article.idArticle");
            //On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne
            foreach ($requete as $donnee) {
                $list[] = $donnee;
            }
            return $list;
		}
		
		public function stockExist2($idArticle, $idRoutine, $idStock){
	        $list = array();
	        $requete = Connexion::Connect()->query("SELECT idArticle FROM stock WHERE idArticle = \"$idArticle\" 
	          AND idRoutine = \"$idRoutine\" AND idStock != \"$idStock\" ");
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
		
	}
?>