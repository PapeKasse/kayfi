<?php
    require_once('classeConnexion.php');
    // CLASSE PRODUIT

    /** Attributs de la classe "Produit" **/
    
    class Produit
    {
        private $idProduit;
        private $nom;
        private $prix;
        private $prixBarre;
        private $descript;       
        private $photo;      
        private $dateProduit;       
        private $idCategorie; 

        
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
                $this->idCategorie= "";
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
                $this->idCategorie= func_get_arg(7);
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
          
              /** Getter et Setter de l'attribut "idCategorie" **/
        public function getIdCategorie()
        {
            return $this->idCategorie;
        }
        public function setIdCategorie($idCategorie)
        {
            $this->idCategorie = $idCategorie;
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

       
        
        // Insertion des valeurs
        /** Fonctions CRUD **/
        public function addTapie($nom,$prix,$prixBarre,$descript,$photo,$idCategorie)
        {
            $db=Connexion::Connect();
            $requete = $db->prepare('INSERT INTO produit(nom, prix,prixBarre, descript, photo,idCategorie)  VALUES (?,?,?,?,?,?)');
            $res = $requete->execute([$nom,$prix,$prixBarre,$descript,$photo,$idCategorie]);
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
        
    

     
        // liste des produit en jointure avec la table Categorie
        public function listProduit(){
			$list = array();
			$requete = Connexion::Connect()->query("SELECT * FROM produit, categorie WHERE categorie.idCategorie=produit.idCategorie");
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}
             // A Partir de là tout est relatif à mon systeme de panier
        public function checkProduit(){
			$list = Connexion::Connect()->prepare('SELECT idProduit FROM produit, WHERE idProduit=:idProduit', array('idProduit' => $_GET['idProduit']));
            $list->execute();
            return $list->FetchAll(PDO::FETCH_OBJ);
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
		} 

        public function deleteStock($code) {
			$requete = Connexion::Connect()->prepare('DELETE FROM stock  WHERE idStock = ?');
			$requete->bindValue(1, $code);
			$res = $requete->execute();
			return($res);
		}


         public function listIds($ids){
			$requete = Connexion::Connect()->prepare('SELECT * FROM produit, WHERE idProduit IN ($ids)');
            $requete->execute();
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		} 

         public function query($sql, $data = array()){
			$requete = Connexion::Connect()->prepare($sql);
            $requete->execute($data);
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			return $requete->FetchAll(PDO::FETCH_OBJ);
		} 

         public function check($idProduit){
				$requete = Connexion::Connect()->prepare("SELECT idProduit FROM produit WHERE idProduit = \"$idProduit\"");
            $requete->execute();
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
		  return $requete->FetchAll();
		}  

         public function display($idProduit){
				$requete = Connexion::Connect()->prepare('SELECT nom,  FROM produit, WHERE idProduit = \"$idProduit\"');
            $requete->execute();
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}  

        public function add($idProduit){
			if(isset($_SESSION['panier'][$idProduit]))
            {
                $_SESSION['panier'][$idProduit]++;
            }else{
                $_SESSION['panier'][$idProduit]=1;
            }
		} 
    }
?>