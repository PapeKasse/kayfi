-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 14 juin 2021 à 13:28
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbxpoultrade`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `idArticle` int(11) NOT NULL AUTO_INCREMENT,
  `codeArticle` varchar(80) DEFAULT NULL,
  `libelle` text,
  `idUnite` int(11) DEFAULT NULL,
  `idFamille` int(11) DEFAULT NULL,
  `prix` varchar(80) DEFAULT NULL,
  `dateAjout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `etat` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idArticle`),
  KEY `idUnite` (`idUnite`),
  KEY `idFamille` (`idFamille`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idArticle`, `codeArticle`, `libelle`, `idUnite`, `idFamille`, `prix`, `dateAjout`, `etat`) VALUES
(1, '1030101001', 'ESKIMO COCONUT/CHOCOLAT x 30', 1, 2, '12500', '2021-04-22 10:20:56', 1),
(2, '1030101002', 'ESKIMO BANANE/CHOCOLAT x 30', 1, 2, '12500', '2021-04-22 10:20:56', 1),
(3, '1030101003', 'ESKIMO VANILLE/CHOCOLAT x 30', 1, 2, '12500', '2021-04-22 10:20:56', 1),
(4, '1030101004', 'ESKIMO CHOCOLAT/CHOCOLAT x 30', 1, 2, '12500', '2021-04-22 10:20:56', 1),
(5, '1030102001', 'SUPER FRAISE/CHOCOLAT  x 40', 1, 2, '12500', '2021-04-22 10:20:56', 1),
(6, '1030102002', 'SUPER CHOCOLAT/CHOCOLAT  x 40', 1, 2, '12500', '2021-04-22 10:20:56', 1),
(7, '1030102003', 'SUPER CARAMEL/CHOCOLAT  x 40', 1, 2, '12500', '2021-04-22 10:20:56', 1),
(8, '1030102004', 'SUPER VANILLE/CHOCOLAT  x 40', 1, 2, '12500', '2021-04-22 10:20:56', 1),
(9, '1030103001', 'MOMENTS VANILLE/CARAMEL x 20', 1, 2, '12500', '2021-04-22 10:20:56', 1),
(10, '1030103002', 'MOMENTS CHOCOLAT/CHOCOLAT x 20', 1, 2, '12500', '2021-04-22 10:20:56', 1),
(11, '1030103003', 'MOMENTS VANILLE/CHOCOLAT x 20', 1, 2, '12500', '2021-04-22 10:20:56', 1),
(12, '1030104001', 'DELICE CONE VANILLE /CARAMEL x 24', 1, 2, '12500', '2021-04-22 10:20:56', 1),
(13, '1030104002', 'DELICE CONE VANILLE/FRAISE x 24', 1, 2, '12500', '2021-04-22 10:20:56', 1),
(14, '1030104003', 'DELICE CONE VANILLE/CHOCOLAT x 24', 1, 2, '12500', '2021-04-22 10:20:56', 1),
(15, '2010114001', 'POULET PAC CONGELE AUCHAN', 2, 2, '12500', '2021-04-22 10:20:56', 1),
(16, '5271301006', 'CARTON ESKIMO 40 PIECES', 4, 2, '12500', '2021-04-22 10:20:56', 1),
(17, '6040000003', 'CHARLOTTES', 4, 2, '12500', '2021-04-22 10:20:56', 1),
(18, '7020101001', 'FRIZZZ PTIT POT VANILLE 125 ML x 40', 5, 1, '12500', '2021-04-22 10:20:56', 1),
(19, '7020101002', 'FRIZZZ MAXI POT VANILLE 250 ML x 22', 4, 1, '12500', '2021-04-22 10:20:56', 1),
(20, '7020101003', 'FRIZZZ ROYAL VANILLE 500 ML x 16', 4, 1, '12500', '2021-04-22 10:20:56', 1),
(21, '7020101005', 'FRIZZZ GOLD VANILLE 1 L x 8', 6, 1, '12500', '2021-04-22 10:20:56', 1),
(22, '7020101006', 'FRIZZZ GOLD VANILLE 5 L', 7, 1, '12500', '2021-04-22 10:20:56', 1),
(23, '7020101007', 'ESKIMO VANILLE 106 ML x 40 pcs', 4, 2, '12500', '2021-04-22 10:20:56', 1),
(24, '7020101009', 'FRIZZ CREAMY VANILLE 60 Grs x 60', 4, 1, '12500', '2021-04-22 10:20:56', 1),
(25, '7020101010', 'FRIZZ CHOC VANILLE 60 Grs x 60', 4, 1, '12500', '2021-04-22 10:20:56', 1),
(26, '7020101011', 'FRIZZZ CORNET VANILLE 54 GR', 4, 1, '12500', '2021-04-22 10:20:56', 1),
(27, '7020102001', 'FRIZZZ PTIT POT FRAISE 125 ML x 40', 5, 1, '12500', '2021-04-22 10:20:56', 1),
(28, '7020102003', 'FRIZZZ ROYAL FRAISE 500 ML x 16', 4, 1, '12500', '2021-04-22 10:20:56', 1),
(29, '7020102005', 'FRIZZZ GOLD FRAISE 1 L x 8', 6, 1, '12500', '2021-04-22 10:20:56', 1),
(30, '7020102006', 'FRIZZZ GOLD FRAISE 5 L', 7, 1, '12500', '2021-04-22 10:20:56', 1),
(31, '7020102007', 'ESKIMO FRAISE 106 ML x 40 pcs', 4, 2, '12500', '2021-04-22 10:20:56', 1),
(32, '7020102008', 'FRIZZZKREM FRAISE 60 X 85 ML', 4, 1, '12500', '2021-04-22 10:20:56', 1),
(33, '7020102009', 'FRIZZ CREAMY FRAISE 60 Grs x 60', 4, 1, '12500', '2021-04-22 10:20:56', 1),
(34, '7020103001', 'FRIZZZ PTIT POT CHOCOLAT 125 ML x 40', 5, 1, '12500', '2021-04-22 10:20:56', 1),
(35, '7020103005', 'FRIZZZ GOLD CHOCOLAT 1 L x 8', 6, 1, '12500', '2021-04-22 10:20:56', 1),
(36, '7020103006', 'FRIZZZ GOLD CHOCOLAT 5 L', 7, 1, '12500', '2021-04-22 10:20:56', 1),
(37, '7020103007', 'ESKIMO CHOCOLAT 106 ML x 40 pcs', 4, 2, '12500', '2021-04-22 10:20:56', 1),
(38, '7020103009', 'FRIZZ CREAMY CHOCOLAT 60 Grs x 60', 4, 1, '12500', '2021-04-22 10:20:56', 1),
(39, '7020104001', 'FRIZZZ PTIT POT COCO 125 ML x 40', 5, 1, '12500', '2021-04-22 10:20:56', 1),
(40, '7020104003', 'FRIZZZ ROYAL COCO 500 ML x 16', 7, 1, '12500', '2021-04-22 10:20:56', 1),
(41, '7020104005', 'FRIZZZ GOLD COCO 1 L x 8', 6, 1, '12500', '2021-04-22 10:20:56', 1),
(42, '7020104006', 'FRIZZZ GOLD COCO 5 L', 7, 1, '12500', '2021-04-22 10:20:56', 1),
(43, '7020105001', 'FRIZZZ PTIT POT CARAMEL 125 ML x 40', 5, 1, '12500', '2021-04-22 10:20:56', 1),
(44, '7020105003', 'FRIZZZ ROYAL CARAMEL 500 ML x 16', 7, 1, '12500', '2021-04-22 10:20:56', 1),
(45, '7020105005', 'FRIZZZ GOLD CARAMEL 1 L x 8', 6, 1, '12500', '2021-04-22 10:20:56', 1),
(46, '7020105006', 'FRIZZZ GOLD CARAMEL 5 L', 7, 1, '12500', '2021-04-22 10:20:56', 1),
(47, '7030101001', 'YOGGI VANILLE 85 ML x 70', 4, 2, '12500', '2021-04-22 10:20:56', 1),
(48, '7030102001', 'YOGGI FRAISE 85 ML x 70', 4, 2, '12500', '2021-04-22 10:20:56', 1),
(49, '7030104001', 'YOGGI COCO 85 ML x 70', 4, 2, '12500', '2021-04-22 10:20:56', 1),
(50, '7930101001', 'YOGGI VANILLE 85 ML x 80 exp', 1, 2, '12500', '2021-04-22 10:20:56', 1),
(51, '7930102001', 'YOGGI FRAISE 85 ML x 80 exp', 1, 2, '12500', '2021-04-22 10:20:56', 1),
(52, '8010112004', 'HAMBURGER DE BŒUF VRAC 80 GR  x  60 EN SACHET CARTON 4,80 Kg', 2, 2, '12500', '2021-04-22 10:20:56', 1),
(53, '8010112005', 'HAMBURGER DE BŒUF DUO 30 SACHETS DE 2 X 80 GR CARTON DE 4,80 Kg', 1, 2, '12500', '2021-04-22 10:20:56', 1),
(54, '8010112007', 'VIANDE HACHEE DE BŒUF - 250 GR', 2, 2, '12500', '2021-04-22 10:20:56', 1),
(55, '8010112008', 'VIANDE HACHEE DE BŒUF - 500 GR', 2, 2, '12500', '2021-04-22 10:20:56', 1),
(56, '8010113001', 'BOULETTE DE BŒUF SUP BARQUETTE 500 Grs', 3, 2, '12500', '2021-04-22 10:20:56', 1),
(57, '8010113002', 'HAMBURGER DE BŒUF 80 Grs SUP BARQUETTE 480 Grs', 3, 2, '12500', '2021-04-22 10:20:56', 1),
(58, '8011124003', 'NUGGETS DE POULET DAARA BARQUETTE 300 Gr', 3, 2, '12500', '2021-04-22 10:20:56', 1);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(80) NOT NULL,
  `prenom` varchar(80) NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `nom`, `prenom`) VALUES
(1, 'Alain', 'DIEYE'),
(2, 'SARR', 'Papa'),
(3, 'Julien', 'Sow'),
(4, 'Cheick', 'Ndoye');

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

DROP TABLE IF EXISTS `departement`;
CREATE TABLE IF NOT EXISTS `departement` (
  `idDepartement` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(300) NOT NULL,
  `idResponsable` int(11) NOT NULL,
  `idEntreprise` int(11) NOT NULL,
  `dateAjout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `etat` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idDepartement`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`idDepartement`, `libelle`, `idResponsable`, `idEntreprise`, `dateAjout`, `etat`) VALUES
(1, 'D&eacute;veloppement', 5, 2, '2019-06-09 07:03:35', 1),
(2, 'Ressources humaines', 0, 2, '2019-06-09 07:18:12', 1),
(3, 'Administratif &amp; financier', 4, 2, '2019-06-09 07:19:15', 1);

-- --------------------------------------------------------

--
-- Structure de la table `famille`
--

DROP TABLE IF EXISTS `famille`;
CREATE TABLE IF NOT EXISTS `famille` (
  `idFamille` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(80) DEFAULT NULL,
  `description` text,
  `dateAjout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `etat` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idFamille`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `famille`
--

INSERT INTO `famille` (`idFamille`, `libelle`, `description`, `dateAjout`, `etat`) VALUES
(1, 'Frizzz', NULL, '2021-06-14 12:54:02', 1),
(2, 'Sandra', NULL, '2021-06-14 12:54:02', 1);

-- --------------------------------------------------------

--
-- Structure de la table `modepaiement`
--

DROP TABLE IF EXISTS `modepaiement`;
CREATE TABLE IF NOT EXISTS `modepaiement` (
  `idModepaiement` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(300) NOT NULL,
  PRIMARY KEY (`idModepaiement`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `modepaiement`
--

INSERT INTO `modepaiement` (`idModepaiement`, `libelle`) VALUES
(1, 'Cash'),
(2, 'Cr&eacute;dit');

-- --------------------------------------------------------

--
-- Structure de la table `objectif`
--

DROP TABLE IF EXISTS `objectif`;
CREATE TABLE IF NOT EXISTS `objectif` (
  `idObjectif` int(11) NOT NULL AUTO_INCREMENT,
  `idSalarie` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  PRIMARY KEY (`idObjectif`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rolesalarie`
--

DROP TABLE IF EXISTS `rolesalarie`;
CREATE TABLE IF NOT EXISTS `rolesalarie` (
  `idRolesalarie` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(300) NOT NULL,
  PRIMARY KEY (`idRolesalarie`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rolesalarie`
--

INSERT INTO `rolesalarie` (`idRolesalarie`, `libelle`) VALUES
(1, 'Salari&eacute;'),
(2, 'Chef de d&eacute;partement'),
(3, 'Assitante RH'),
(4, 'DRH'),
(5, 'Administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `salarie`
--

DROP TABLE IF EXISTS `salarie`;
CREATE TABLE IF NOT EXISTS `salarie` (
  `idSalarie` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(300) DEFAULT NULL,
  `prenom` varchar(300) DEFAULT NULL,
  `adresse` text,
  `email` varchar(80) DEFAULT NULL,
  `telephone` varchar(80) DEFAULT NULL,
  `idRolesalarie` int(11) DEFAULT NULL,
  `login` varchar(80) DEFAULT NULL,
  `motDePasse` text,
  `idDepartement` int(11) DEFAULT NULL,
  `bases` varchar(80) DEFAULT '1',
  `dateAjout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `etat` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idSalarie`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salarie`
--

INSERT INTO `salarie` (`idSalarie`, `nom`, `prenom`, `adresse`, `email`, `telephone`, `idRolesalarie`, `login`, `motDePasse`, `idDepartement`, `bases`, `dateAjout`, `etat`) VALUES
(10, 'Admin', 'Admin', '', '', '', 5, 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0, '1', '2021-05-27 07:54:22', 1),
(11, 'Commercial 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2021-06-14 13:19:58', 1),
(12, 'Commercial 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2021-06-14 13:19:58', 1),
(13, 'Commercial 3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2021-06-14 13:20:28', 1),
(14, 'Commercial 4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2021-06-14 13:20:28', 1);

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `idStock` int(11) NOT NULL AUTO_INCREMENT,
  `idSalarie` int(11) NOT NULL,
  `datePrise` int(11) NOT NULL,
  `idArticle` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  PRIMARY KEY (`idStock`),
  KEY `idSalarie` (`idSalarie`),
  KEY `idArticle` (`idArticle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `unite`
--

DROP TABLE IF EXISTS `unite`;
CREATE TABLE IF NOT EXISTS `unite` (
  `idUnite` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(80) DEFAULT NULL,
  `description` text,
  `dateAjout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `etat` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idUnite`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `unite`
--

INSERT INTO `unite` (`idUnite`, `libelle`, `description`, `dateAjout`, `etat`) VALUES
(1, 'Carton(s)', NULL, '2021-04-22 10:17:29', 1),
(2, 'KG', NULL, '2021-04-22 10:17:29', 1),
(3, 'Barquette', NULL, '2021-04-22 10:17:29', 1),
(4, 'Unité(s)', NULL, '2021-04-22 10:17:29', 1),
(5, 'Pot', NULL, '2021-04-22 10:17:29', 1),
(6, 'Litre', NULL, '2021-04-22 10:17:29', 1),
(7, 'SEAUX(s)', NULL, '2021-04-22 10:17:29', 1);

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

DROP TABLE IF EXISTS `vente`;
CREATE TABLE IF NOT EXISTS `vente` (
  `idVente` int(11) NOT NULL AUTO_INCREMENT,
  `idSalarie` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `idArticle` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `idModepaiement` int(11) NOT NULL,
  PRIMARY KEY (`idVente`),
  UNIQUE KEY `idSalarie` (`idSalarie`),
  KEY `idClient` (`idClient`),
  KEY `idArticle` (`idArticle`),
  KEY `idModepaiement` (`idModepaiement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vutilisateur`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `vutilisateur`;
CREATE TABLE IF NOT EXISTS `vutilisateur` (
`idUtilisateur` int(11)
,`nom` varchar(300)
,`prenom` varchar(300)
,`adresse` text
,`email` varchar(80)
,`telephone` varchar(80)
,`role` varchar(300)
,`login` varchar(80)
,`motDePasse` text
,`dateAjout` timestamp
,`etat` int(11)
,`idDepartement` int(11)
,`bases` varchar(80)
);

-- --------------------------------------------------------

--
-- Structure de la vue `vutilisateur`
--
DROP TABLE IF EXISTS `vutilisateur`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vutilisateur`  AS  select `s`.`idSalarie` AS `idUtilisateur`,`s`.`nom` AS `nom`,`s`.`prenom` AS `prenom`,`s`.`adresse` AS `adresse`,`s`.`email` AS `email`,`s`.`telephone` AS `telephone`,(select `rolesalarie`.`libelle` from `rolesalarie` where (`rolesalarie`.`idRolesalarie` = `s`.`idRolesalarie`)) AS `role`,`s`.`login` AS `login`,`s`.`motDePasse` AS `motDePasse`,`s`.`dateAjout` AS `dateAjout`,`s`.`etat` AS `etat`,`s`.`idDepartement` AS `idDepartement`,`s`.`bases` AS `bases` from `salarie` `s` ;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`idFamille`) REFERENCES `famille` (`idFamille`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`idUnite`) REFERENCES `unite` (`idUnite`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`idSalarie`) REFERENCES `salarie` (`idSalarie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stock_ibfk_2` FOREIGN KEY (`idArticle`) REFERENCES `article` (`idArticle`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `vente`
--
ALTER TABLE `vente`
  ADD CONSTRAINT `vente_ibfk_1` FOREIGN KEY (`idArticle`) REFERENCES `article` (`idArticle`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vente_ibfk_2` FOREIGN KEY (`idSalarie`) REFERENCES `salarie` (`idSalarie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vente_ibfk_3` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vente_ibfk_4` FOREIGN KEY (`idModepaiement`) REFERENCES `modepaiement` (`idModepaiement`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
