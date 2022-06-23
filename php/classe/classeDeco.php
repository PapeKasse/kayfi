<?php
    require_once('classeConnexion.php');
    // CLASSE DECOS

    /** Attributs de la classe "Deco" **/
    
    class Deco
    {
        private $idDeco;
        private $nom;
        private $prix;
        private $prixBarre;
        private $descript;       
        private $photo;       
        private $dateDeco;       
    

        
        /** Constructeur ... **/
        public function __construct()
        {
            //récupération du nombre d'arguments
            $nb= func_num_args();

            // S'il n'y a pas de paramètre, on initialise les variables à une valeur nulle
            if ($nb == 0) {
                $this->idDeco= "";
                $this->nom= "";
                $this->prix= "";
                $this->prixBarre= "";
                $this->descript= "";
                $this->photo= "";
                $this->dateDeco= "";
            }

            /*Sinon s'il y a des paramètres on donne aux variables les valeurs des paramètres
             La fonction func_get_arg() recupère la valeur de l'argument à la position qui lui est donnée en paramètre*/
            if ($nb != 0) {
                $this->idDeco= func_get_arg(0);
                $this->nom= func_get_arg(1);
                $this->prix= func_get_arg(2);
                $this->prixBarre= func_get_arg(3);
                $this->descript= func_get_arg(4);
                $this->photo= func_get_arg(5);
                $this->dateDeco= func_get_arg(6);
            }
        }
        
        /** Getter et Setter de l'attribut "idDeco" **/
        public function getIdDeco()
        {
            return $this->idDeco;
        }
        public function setIdDeco($idDeco)
        {
            $this->idDeco = $idDeco;
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

          /** Getter et Setter de l'attribut "dateDeco" **/
          public function getDateDeco()
          {
              return $this->dateDeco;
          }
          public function setDateDeco($dateDeco)
          {
              $this->dateDeco = $dateDeco;
          }
          


        //Recherche d'un élément de la table Deco**/
        public function rechercheDeco($id)
        {
            $list = array();
            $requete = Connexion::Connect()->query("SELECT * FROM deco WHERE idDeco = \"$id\" ");
            //On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne
            foreach ($requete as $donnee) {
                $list[] = $donnee;
            }
            return $list;
        }


        // Insertion des valeurs
        /** Fonctions CRUD **/
        public function addDeco($nom,$prix,$prixBarre,$descript,$photo)
        {
            $db=Connexion::Connect();
            $requete = $db->prepare('INSERT INTO deco(nom, prix,prixBarre, descript, photo)  VALUES (?,?,?,?,?)');
            $res = $requete->execute([$nom,$prix,$prixBarre,$descript,$photo]);
            return($res);
        }

        public function addDecos()
        {
            $db=Connexion::Connect();
            $requete = $db->prepare('INSERT INTO deco(idDeco, nom, prix, prixBarre,descript,photo, dateDeco)  
						VALUES (?, ?, ?, ?, ?, ?,?)');
            $requete->bindValue(1, $this->getIdDeco());
            $requete->bindValue(2, $this->getNom());
            $requete->bindValue(3, $this->getPrix());
            $requete->bindValue(4, $this->getPrixBarre());
            $requete->bindValue(5, $this->getDescript());
            $requete->bindValue(6, $this->getPhoto());
            $requete->bindValue(7, $this->getDateDeco());
            $res = $requete->execute();
            return($res);
        }
        
        // Modification des valeurs
        public function updateDeco($nom, $prix,$prixBarre,$descript,$photo,$idDeco)
        {
            $requete = Connexion::Connect()->prepare('UPDATE deco SET nom = ?, prix = ?,prixBarre = ?,descript = ?, photo = ? WHERE idDeco = ?
						');
            $requete->bindValue(1, $nom);
            $requete->bindValue(2, $prix);
            $requete->bindValue(3, $prixBarre);
            $requete->bindValue(4, $descript); 
            $requete->bindValue(5, $photo); 
            $requete->bindValue(6, $idDeco); 
            $res = $requete->execute();
            return($res);
        }
        // Suppression des valeurs
        public function deleteDeco($code)
        {
            $requete = Connexion::Connect()->prepare('DELETE FROM deco  WHERE idDeco = ?');
            $requete->bindValue(1, $code);
            $res = $requete->execute();
            return($res);
        }
       
        	// 	Liste des Decos 
		public function listDeco(){
			$list = array();
			$requete = Connexion::Connect()->query('SELECT * FROM deco');
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}
    }
?>