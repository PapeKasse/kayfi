<?php
    require_once('classeConnexion.php');
    // CLASSE CLIENT

    /** Attributs de la classe "Client" **/
    
    class Client
    {
        private $idClient;
        private $nomPrenom;
        private $tel;
        private $adresse;
        private $email;  
        private $password;     
        
        /** Constructeur ... **/
        public function __construct()
        {
            //récupération du nombre d'arguments
            $nb= func_num_args();

            // S'il n'y a pas de paramètre, on initialise les variables à une valeur nulle
            if ($nb == 0) {
                $this->idClient= "";
                $this->nomPrenom= "";
                $this->tel= "";
                $this->adresse= "";
                $this->email= "";
                $this->password= "";
            }

            /*Sinon s'il y a des paramètres on donne aux variables les valeurs des paramètres
             La fonction func_get_arg() recupère la valeur de l'argument à la position qui lui est donnée en paramètre*/
            if ($nb != 0) {
                $this->idClient= func_get_arg(0);
                $this->nomPrenom= func_get_arg(1);
                $this->tel= func_get_arg(2);
                $this->adresse= func_get_arg(3);
                $this->email= func_get_arg(4);
                $this->password= func_get_arg(5);
            }
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
        
        /** Getter et Setter de l'attribut "nomPrenom" **/
        public function getNomPrenom()
        {
            return $this->nomPrenom;
        }
        public function setNomPrenom($nomPrenom)
        {
            $this->nomPrenom = $nomPrenom;
        }

        /** Getter et Setter de l'attribut "tel" **/
        public function getTel()
        {
            return $this->tel;
        }
        public function setTel($tel)
        {
            $this->tel = $tel;
        }
        /** Getter et Setter de l'attribut "adresse" **/
        public function getAdresse()
        {
            return $this->adresse;
        }
        public function setAdresse($adresse)
        {
            $this->adresse = $adresse;
        }
        /** Getter et Setter de l'attribut "email" **/
        public function getEmail()
        {
            return $this->email;
        }
        public function setEmail($email)
        {
            $this->email = $email;
        }
        /** Getter et Setter de l'attribut "password" **/
        public function getPassword()
        {
            return $this->password;
        }
        public function setPassword($password)
        {
            $this->password = $password;
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
        public function addClient($nomPrenom,$tel,$adresse)
        {
            $db=Connexion::Connect();
            $requete = $db->prepare('INSERT INTO client(nomPrenom,tel,adresse)  VALUES (?,?,?)');
            $res = $requete->execute([$nomPrenom,$tel,$adresse]);
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

        public function addCommande($tel,$etat)
        {
            $db=Connexion::Connect();
            $requete = $db->prepare('INSERT INTO commande(tel,etat)  VALUES (?,?)');
            $res = $requete->execute([$tel,$etat]);
            $id = $db->lastInsertId();
			return($id);
        }

         public function addDetailsCommande($idCommande,$nomProduit,$prixProduit,$descriptProduit,$photoProduit)
        {
            $db=Connexion::Connect();
            $requete = $db->prepare('INSERT INTO details(idCommande,nomProduit,prixProduit,descriptProduit,photoProduit)  VALUES (?,?,?,?,?)');
            $res = $requete->execute([$idCommande,$nomProduit,$prixProduit,$descriptProduit,$photoProduit]);
			return($res);
        }
     
         public function IdClient($nomPrenom,$tel)
        {
            $list = array();
            $requete = Connexion::Connect()->query("SELECT *FROM client WHERE nomPrenom = \"$nomPrenom\" AND tel = \"$tel\" ");
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

    }
?>