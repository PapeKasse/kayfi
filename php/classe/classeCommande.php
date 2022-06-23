<?php
    require_once('classeConnexion.php');
    // CLASSE COMMANDE

    /** Attributs de la classe "Commande" **/
    
    class Commande
    {
        private $idCommande;
        private $idClient;
        private $dateAjout;  
        private $status;     
        
        /** Constructeur ... **/
        public function __construct()
        {
            //récupération du nombre d'arguments
            $nb= func_num_args();

            // S'il n'y a pas de paramètre, on initialise les variables à une valeur nulle
            if ($nb == 0) {
                $this->idCommande= "";
                $this->idClient= "";
                $this->dateAjout= "";
                $this->status= "";
            }

            /*Sinon s'il y a des paramètres on donne aux variables les valeurs des paramètres
             La fonction func_get_arg() recupère la valeur de l'argument à la position qui lui est donnée en paramètre*/
            if ($nb != 0) {
                $this->idCommande= func_get_arg(0);
                $this->idClient= func_get_arg(1);
                $this->dateAjout= func_get_arg(2);
                $this->status= func_get_arg(3);
            }
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
        
        /** Getter et Setter de l'attribut "idClient" **/
        public function getIdClient()
        {
            return $this->idClient;
        }
        public function setIdClient($idClient)
        {
            $this->idClient = $idClient;
        }
        
        /** Getter et Setter de l'attribut "dateAjout" **/
        public function getDateAjout()
        {
            return $this->dateAjout;
        }
        public function setDateAjout($dateAjout)
        {
            $this->dateAjout = $dateAjout;
        }

        /** Getter et Setter de l'attribut "status" **/
        public function getStatus()
        {
            return $this->status;
        }
        public function setStatus($status)
        {
            $this->status = $status;
        }

        //Recherche d'un élément de la table Commande**/
        public function rechercheCommande($id)
        {
            $list = array();
            $requete = Connexion::Connect()->query("SELECT * FROM commande WHERE idCommande = \"$id\" ");
            //On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne
            foreach ($requete as $donnee) {
                $list[] = $donnee;
            }
            return $list;
        }

        
        // Insertion des valeurs
        /** Fonctions CRUD **/
 
        
        // Suppression des valeurs
        public function deleteTapie($code)
        {
            $requete = Connexion::Connect()->prepare('DELETE FROM tapie  WHERE idTapie = ?');
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