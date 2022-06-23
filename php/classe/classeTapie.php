<?php
    require_once('classeConnexion.php');
    // CLASSE TAPIE

    /** Attributs de la classe "Tapie" **/
    
    class Tapie
    {
        private $idTapie;
        private $nom;
        private $prix;
        private $prixBarre;
        private $descript;       
        private $photo;       
        private $dateTapie;       
    

        
        /** Constructeur ... **/
        public function __construct()
        {
            //récupération du nombre d'arguments
            $nb= func_num_args();

            // S'il n'y a pas de paramètre, on initialise les variables à une valeur nulle
            if ($nb == 0) {
                $this->idTapie= "";
                $this->nom= "";
                $this->prix= "";
                $this->prixBarre= "";
                $this->descript= "";
                $this->photo= "";
                $this->dateTapie= "";
            }

            /*Sinon s'il y a des paramètres on donne aux variables les valeurs des paramètres
             La fonction func_get_arg() recupère la valeur de l'argument à la position qui lui est donnée en paramètre*/
            if ($nb != 0) {
                $this->idTapie= func_get_arg(0);
                $this->nom= func_get_arg(1);
                $this->prix= func_get_arg(2);
                $this->prixBarre= func_get_arg(3);
                $this->descript= func_get_arg(4);
                $this->photo= func_get_arg(5);
                $this->dateTapie= func_get_arg(6);
            }
        }
        
        /** Getter et Setter de l'attribut "idTapie" **/
        public function getIdTapie()
        {
            return $this->idTapie;
        }
        public function setIdTapie($idTapie)
        {
            $this->idTapie = $idTapie;
        }
        
        /** Getter et Setter de l'attribut "nom" **/
        public function getNom()
        {
            return $this->nom;
        }
        public function setNom($nom)
        {
            $this->nom = $nom;
        }
        
        /** Getter et Setter de l'attribut "prix" **/
        public function getPrix()
        {
            return $this->prix;
        }
        public function setPrix($prix)
        {
            $this->prix = $prix;
        }

        /** Getter et Setter de l'attribut "prix Barre" **/
        public function getPrixBarre()
        {
            return $this->prixBarre;
        }
        public function setPrixBarre($prixBarre)
        {
            $this->prixBarre = $prixBarre;
        }
        
        /** Getter et Setter de l'attribut "descript" **/
        public function getDescript()
        {
            return $this->descript;
        }
        public function setDescript($descript)
        {
            $this->descript = $descript;
        }

          /** Getter et Setter de l'attribut "photo" **/
          public function getPhoto()
          {
              return $this->photo;
          }
          public function setPhoto($photo)
          {
              $this->photo = $photo;
          }

          /** Getter et Setter de l'attribut "dateTapie" **/
          public function getDateTapie()
          {
              return $this->dateTapie;
          }
          public function setDateTapie($dateTapie)
          {
              $this->dateTapie = $dateTapie;
          }
          


        //Recherche d'un élément de la table Tapie**/
        public function rechercheTapie($id)
        {
            $list = array();
            $requete = Connexion::Connect()->query("SELECT * FROM tapie WHERE idTapie = \"$id\" ");
            //On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne
            foreach ($requete as $donnee) {
                $list[] = $donnee;
            }
            return $list;
        }

        //Recherche d'un élément de la table DetailsSortie**/
		public function rechercheDetailsSortie($id){
			$list = array();
			$requete = Connexion::Connect()->query("SELECT * FROM detailssortie WHERE idSortie = \"$id\" ");
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee){
				$list[] = $donnee;
			}
			return $list;
        }
        
        // Insertion des valeurs
        /** Fonctions CRUD **/
        public function addTapie($nom,$prix,$prixBarre,$descript,$photo,$idCategorie)
        {
            $db=Connexion::Connect();
            $requete = $db->prepare('INSERT INTO produit(nom, prix,prixBarre, descript, photo,idCategorie)  VALUES (?,?,?,?,?,?)');
            $res = $requete->execute([$nom,$prix,$prixBarre,$descript,$photo,$idCategorie]);
            return($res);
        }

        public function addtapies()
        {
            $db=Connexion::Connect();
            $requete = $db->prepare('INSERT INTO tapie(idTapie, nom, prix, prixBarre,descript,photo, dateTapie)  
						VALUES (?, ?, ?, ?, ?, ?,?)');
            $requete->bindValue(1, $this->getIdTapie());
            $requete->bindValue(2, $this->getNom());
            $requete->bindValue(3, $this->getPrix());
            $requete->bindValue(4, $this->getPrixBarre());
            $requete->bindValue(5, $this->getDescript());
            $requete->bindValue(6, $this->getPhoto());
            $requete->bindValue(7, $this->getDateTapie());
            $res = $requete->execute();
            return($res);
        }
        
        // Modification des valeurs
        public function updateTapie($nom, $prix,$prixBarre,$descript,$photo,$idTapie)
        {
            $requete = Connexion::Connect()->prepare('UPDATE tapie SET nom = ?, prix = ?,prixBarre = ?,descript = ?, photo = ? WHERE idTapie = ?
						');
            $requete->bindValue(1, $nom);
            $requete->bindValue(2, $prix);
            $requete->bindValue(3, $prixBarre);
            $requete->bindValue(4, $descript); 
            $requete->bindValue(5, $photo); 
            $requete->bindValue(6, $idTapie); 
            $res = $requete->execute();
            return($res);
        }
        // Suppression des valeurs
        public function deleteTapie($code)
        {
            $requete = Connexion::Connect()->prepare('DELETE FROM tapie  WHERE idTapie = ?');
            $requete->bindValue(1, $code);
            $res = $requete->execute();
            return($res);
        }
        //Insérer code article et quantité dans la base de données dans la table detailssortie
        public function addDetailsSortie($codeArticle, $quantite, $idSortie)
        {
            $db = Connexion::Connect();
            $requete = $db->prepare('INSERT INTO detailssortie(codeArticle, quantite, idSortie)  
						VALUES (?, ?, ?)');
            $res = $requete->execute([$codeArticle,$quantite,$idSortie]);
        
            return($res);
        }
        //jointure des tables sorties et utilisateur pour récupérer des données
        public function listSortie()
        {
            $list = array();
            $requete = Connexion::Connect()->query("SELECT sortie.idSortie as idSortie, sortie.dateSortie as dateSortie, sortie.numBs as numBs,base.libelle as
			baseLibelle, utilisateur.nomComplet as nomComplet, sortie.etat as etat
			 FROM sortie , base , utilisateur WHERE sortie.idBase=base.idBase AND sortie.idBase='".$_SESSION['stocksertemidBase']."' AND sortie.idUtilisateur=utilisateur.idUtilisateur");
            //On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne
            foreach ($requete as $donnee) {
                $list[] = $donnee;
            }
            return $list;
        }

        	// 	Liste des tapies 
		public function listTapie(){
			$list = array();
			$requete = Connexion::Connect()->query('SELECT * FROM tapie');
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}

        public function listTapie2(){
			$list = array();
			$requete = Connexion::Connect()->query("SELECT * FROM produit, categorie WHERE 
            nomCategorie='tapis'
            AND categorie.idCategorie=produit.idCategorie");
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}

        public function listProduit(){
			$list = array();
			$requete = Connexion::Connect()->query("SELECT * FROM produit, categorie WHERE categorie.idCategorie=produit.idCategorie");
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}


        // Liste des detailsSorties
        public function listDetailsSortie($idSortie)
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
      
        /*Cette fonction permet de vérifier si un numéro de bon de commande passer en paramètre
          existe déja dans la base de données, dans la table sortie avant de faire la
          modification et elle sera appellée dans le Controler sortie.php dans $_POST["modifier"]*/
        public function numBsExist2($numBs, $idBase)
        {
            $list = array();
            $requete = Connexion::Connect()->query("SELECT numBs FROM sortie WHERE numBs = \"$numBs\" 
	        	AND idBase != \"$idBase\"
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
        /*Cette fonction permet de vérifier si le codeArticle donnée en paramètre existe déja
          dans la base de données, dans la table sortie avant de l'insérer et 
          elle sera appellée dans le Controler sortie.php dans $_POST["ajouter2"]*/
        public function detailsSortieExist($codeArticle, $idSortie)
        {
            $list = array();
            $requete = Connexion::Connect()->query("SELECT codeArticle FROM detailssortie WHERE codeArticle = \"$codeArticle\" AND idSortie = \"$idSortie\" ");
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
        /*Cette fonction permet de vérifier si le codeArticle donnée en paramètre existe déja
          dans la base de données, dans la table sortie avant de faire une modification 
          du codeArticle avec le même nom et elle sera appellée dans le Controler sortie.php
          dans $_POST["modifier2"]*/
        public function detailssortieExist2($codeArticle, $idSortie, $idDetailssortie){
	        $list = array();
	        $requete = Connexion::Connect()->query("SELECT codeArticle FROM detailssortie WHERE codeArticle = \"$codeArticle\" 
	          AND idSortie = \"$idSortie\" AND idDetailssortie != \"$idDetailssortie\" ");
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

       //permet de supprimer une sortie 
        public function deleteDetailsSortie($code)
        {
            $requete = Connexion::Connect()->prepare('DELETE FROM detailsSortie  WHERE idDetailssortie = ?');
            $requete->bindValue(1, $code);
            $res = $requete->execute();
            return($res);
        }
       //permet de mettre à jour une sortie
        public function updateDetailsSortie($codeArticle, $quantite, $idDetailssortie)
        {
            $requete = Connexion::Connect()->prepare('UPDATE detailssortie SET codeArticle = ?, quantite = ? WHERE idDetailssortie = ?
						');
            $requete->bindValue(1, $codeArticle);
            $requete->bindValue(2, $quantite);
            $requete->bindValue(3, $idDetailssortie);
            $res = $requete->execute();
            return($res);
        }
    }
?>