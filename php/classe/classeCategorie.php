<?php
    require_once('classeConnexion.php');
    // CLASSE TAPIE

    /** Attributs de la classe "Tapie" **/
    
    class Categorie
    {
        private $idCategorie;
        private $nomCategorie;
      

        
        /** Constructeur ... **/
        public function __construct()
        {
            //récupération du nombre d'arguments
            $nb= func_num_args();

            // S'il n'y a pas de paramètre, on initialise les variables à une valeur nulle
            if ($nb == 0) {
                $this->idTapie= "";
                $this->nomCategorie= "";
                
            }

            /*Sinon s'il y a des paramètres on donne aux variables les valeurs des paramètres
             La fonction func_get_arg() recupère la valeur de l'argument à la position qui lui est donnée en paramètre*/
            if ($nb != 0) {
                $this->idTapie= func_get_arg(0);
                $this->nomCategorie= func_get_arg(1);
               
            }
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
        
        /** Getter et Setter de l'attribut "nom" **/
        public function getNomCategorie()
        {
            return $this->nomCategorie;
        }
        public function setNomCategorie($nomCategorie)
        {
            $this->nomCategorie = $nomCategorie;
        }
     

        //Recherche d'un élément de la table Categorie**/
        public function rechercheCategorie($id)
        {
            $list = array();
            $requete = Connexion::Connect()->query("SELECT * FROM categorie WHERE idCategorie = \"$id\" ");
            //On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne
            foreach ($requete as $donnee) {
                $list[] = $donnee;
            }
            return $list;
        }

        
        public function listCategorie(){
			$list = array();
			$requete = Connexion::Connect()->query('SELECT * FROM categorie');
			//On récupère le résultat de la requete, on le parcours, on le met dans une variable qu'on retourne 
			foreach ($requete as $donnee) {
				$list[] = $donnee;
			}
			return $list;
		}
    }
?>