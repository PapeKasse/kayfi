<?php
    require_once('classeConnexion.php');
    // CLASSE DETAILS

    /** Attributs de la classe "Details" **/
    
    class Details
    {
        private $idDetails;
        private $idCommande;
        private $nomProduit;  
        private $prixProduit;     
        private $prixBarreProduit;     
        private $descriptProduit;     
        private $photoProduit;     
        
        /** Constructeur ... **/
        public function __construct()
        {
            //récupération du nombre d'arguments
            $nb= func_num_args();

            // S'il n'y a pas de paramètre, on initialise les variables à une valeur nulle
            if ($nb == 0) {
                $this->idDetails= "";
                $this->idCommande= "";
                $this->nomProduit= "";
                $this->prixProduit= "";
                $this->prixBarreProduit= "";
                $this->descriptProduit= "";
                $this->photoProduit= "";
            }

            /*Sinon s'il y a des paramètres on donne aux variables les valeurs des paramètres
             La fonction func_get_arg() recupère la valeur de l'argument à la position qui lui est donnée en paramètre*/
            if ($nb != 0) {
                $this->idDetails= func_get_arg(0);
                $this->idCommande= func_get_arg(1);
                $this->nomProduit= func_get_arg(2);
                $this->prixProduit= func_get_arg(3);
                $this->prixBarreProduit= func_get_arg(4);
                $this->descriptProduit= func_get_arg(5);
                $this->photoProduit= func_get_arg(6);
            }
        }
        
        /** Getter et Setter de l'attribut "idDetails" **/
        public function getIdDetails()
        {
            return $this->idDetails;
        }
        public function setIdDetails($idDetails)
        {
            $this->idDetails = $idDetails;
        }
        
        /** Getter et Setter de l'attribut "idCommande" **/
        public function getIdCommande()
        {
            return $this->idCommande;
        }
        public function setIdCommande($idCommande)
        {
            $this->idCommande = $idCommande;
        }
        
        /** Getter et Setter de l'attribut "nomProduit" **/
        public function getNomProduit()
        {
            return $this->nomProduit;
        }
        public function setNomProduit($nomProduit)
        {
            $this->nomProduit = $nomProduit;
        }

        /** Getter et Setter de l'attribut "prixProduit" **/
        public function getPrixProduit()
        {
            return $this->prixProduit;
        }
        public function setPrixProduit($prixProduit)
        {
            $this->prixProduit = $prixProduit;
        }
        /** Getter et Setter de l'attribut "prixBarreProduit" **/
        public function getPrixBarreProduit()
        {
            return $this->prixBarreProduit;
        }
        public function setPrixBarreProduit($prixBarreProduit)
        {
            $this->prixBarreProduit = $prixBarreProduit;
        }
        /** Getter et Setter de l'attribut "descriptProduit" **/
        public function getDescriptProduit()
        {
            return $this->descriptProduit;
        }
        public function setDescriptProduit($descriptProduit)
        {
            $this->descriptProduit = $descriptProduit;
        }
        
        /** Getter et Setter de l'attribut "photoProduit" **/
        public function getPhotoProduit()
        {
            return $this->photoProduit;
        }
        public function setPhotoProduit($photoProduit)
        {
            $this->photoProduit = $photoProduit;
        }

        //Recherche d'un élément de la table Client**/
        public function rechercheClient($id)
        {
            $list = array();
            $requete = Connexion::Connect()->query("SELECT * FROM client WHERE idClient = \"$id\" ");
            //On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne
            foreach ($requete as $donnee) {
                $list[] = $donnee;
            }
            return $list;
        }

        
        // Insertion des valeurs
        /** Fonctions CRUD **/
        public function addClient($nom,$prix,$prixBarre,$descript,$photo,$idCategorie)
        {
            $db=Connexion::Connect();
            $requete = $db->prepare('INSERT INTO produit(nom, prix,prixBarre, descript, photo,idCategorie)  VALUES (?,?,?,?,?,?)');
            $res = $requete->execute([$nom,$prix,$prixBarre,$descript,$photo,$idCategorie]);
            return($res);
        }
 
        
        // Suppression des valeurs
        public function deleteClient($code)
        {
            $requete = Connexion::Connect()->prepare('DELETE FROM client  WHERE idClient = ?');
            $requete->bindValue(1, $code);
            $res = $requete->execute();
            return($res);
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

    }
?>