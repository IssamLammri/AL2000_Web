-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 19 nov. 2019 à 20:39
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `al2000`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonne`
--

DROP TABLE IF EXISTS `abonne`;
CREATE TABLE IF NOT EXISTS `abonne` (
  `ID_Abonne` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Client` int(11) DEFAULT NULL,
  `Password` varchar(100) NOT NULL,
  `NB_Location` int(11) NOT NULL,
  `Date_Abonnement` date NOT NULL,
  PRIMARY KEY (`ID_Abonne`),
  KEY `ID_Client` (`ID_Client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

DROP TABLE IF EXISTS `acteur`;
CREATE TABLE IF NOT EXISTS `acteur` (
  `ID_Acteur` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Acteur` varchar(30) NOT NULL,
  `Prenom_Acteur` varchar(30) NOT NULL,
  `Nationalite` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_Acteur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `ID_Administrateur` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Employer` int(11) DEFAULT NULL,
  `Cle_Administrateur` int(11) NOT NULL,
  PRIMARY KEY (`ID_Administrateur`),
  KEY `ID_Employer` (`ID_Employer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `al2000`
--

DROP TABLE IF EXISTS `al2000`;
CREATE TABLE IF NOT EXISTS `al2000` (
  `N_Machine` int(11) NOT NULL AUTO_INCREMENT,
  `Ville` varchar(30) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  PRIMARY KEY (`N_Machine`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `carte_abonnement`
--

DROP TABLE IF EXISTS `carte_abonnement`;
CREATE TABLE IF NOT EXISTS `carte_abonnement` (
  `ID_Carte_Abonne` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Abonne` int(11) DEFAULT NULL,
  `Montant` int(11) NOT NULL,
  PRIMARY KEY (`ID_Carte_Abonne`),
  KEY `ID_Abonne` (`ID_Abonne`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `carte_bleu`
--

DROP TABLE IF EXISTS `carte_bleu`;
CREATE TABLE IF NOT EXISTS `carte_bleu` (
  `ID_Carte_Bleu` int(11) NOT NULL AUTO_INCREMENT,
  `N°Carte` int(11) NOT NULL,
  `Titulaire_Carte` varchar(30) NOT NULL,
  `CVV` int(11) NOT NULL,
  `Date_Experation` date NOT NULL,
  PRIMARY KEY (`ID_Carte_Bleu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `catalogue`
--

DROP TABLE IF EXISTS `catalogue`;
CREATE TABLE IF NOT EXISTS `catalogue` (
  `ID_Catalogue` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Catalogue` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_Catalogue`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `ID_Client` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Date_Naissance` date NOT NULL,
  `ID_Carte_Bancaire` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Client`),
  KEY `ID_Carte_Bancaire` (`ID_Carte_Bancaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `dvd`
--

DROP TABLE IF EXISTS `dvd`;
CREATE TABLE IF NOT EXISTS `dvd` (
  `ID_DVD` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Filme` int(11) DEFAULT NULL,
  `Existe` tinyint(1) NOT NULL,
  `Quantite` int(11) NOT NULL,
  `ID_AL2000` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_DVD`),
  KEY `ID_Filme` (`ID_Filme`),
  KEY `ID_AL2000` (`ID_AL2000`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `employer`
--

DROP TABLE IF EXISTS `employer`;
CREATE TABLE IF NOT EXISTS `employer` (
  `ID_Employer` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Employer` varchar(30) NOT NULL,
  `Prenom_Employer` varchar(30) NOT NULL,
  `Adresse_Employer` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_Employer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `ID_Film` int(11) NOT NULL AUTO_INCREMENT,
  `Titre_Film` varchar(50) NOT NULL,
  `Nom_Realisateur` varchar(50) NOT NULL,
  `Duree` time NOT NULL,
  `Note` int(11) NOT NULL,
  `Nationalite` varchar(50) NOT NULL,
  `Date_Sortie` date NOT NULL,
  PRIMARY KEY (`ID_Film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `ID_Genre` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Genre` varchar(30) NOT NULL,
  `Age_Correspondant` int(11) NOT NULL,
  PRIMARY KEY (`ID_Genre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `ID_Location` int(11) NOT NULL AUTO_INCREMENT,
  `Date_Location` date NOT NULL,
  `Date_Rendu` int(11) DEFAULT NULL,
  `AbonneOuNon` tinyint(1) NOT NULL,
  `Prix_Location` int(11) DEFAULT NULL,
  `ID_Client` int(11) DEFAULT NULL,
  `ID_DVD` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Location`),
  KEY `ID_Client` (`ID_Client`),
  KEY `ID_DVD` (`ID_DVD`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
CREATE TABLE IF NOT EXISTS `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20191119185529', '2019-11-19 18:55:47');

-- --------------------------------------------------------

--
-- Structure de la table `technicien`
--

DROP TABLE IF EXISTS `technicien`;
CREATE TABLE IF NOT EXISTS `technicien` (
  `ID_Technicien` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Employer` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Technicien`),
  KEY `ID_Employer` (`ID_Employer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `abonne`
--
ALTER TABLE `abonne`
  ADD CONSTRAINT `abonne_ibfk_1` FOREIGN KEY (`ID_Client`) REFERENCES `client` (`ID_Client`);

--
-- Contraintes pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD CONSTRAINT `administrateur_ibfk_1` FOREIGN KEY (`ID_Employer`) REFERENCES `employer` (`ID_Employer`);

--
-- Contraintes pour la table `carte_abonnement`
--
ALTER TABLE `carte_abonnement`
  ADD CONSTRAINT `carte_abonnement_ibfk_1` FOREIGN KEY (`ID_Abonne`) REFERENCES `abonne` (`ID_Abonne`);

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`ID_Carte_Bancaire`) REFERENCES `carte_bleu` (`ID_Carte_Bleu`);

--
-- Contraintes pour la table `dvd`
--
ALTER TABLE `dvd`
  ADD CONSTRAINT `dvd_ibfk_1` FOREIGN KEY (`ID_Filme`) REFERENCES `film` (`ID_Film`),
  ADD CONSTRAINT `dvd_ibfk_2` FOREIGN KEY (`ID_AL2000`) REFERENCES `al2000` (`N_Machine`);

--
-- Contraintes pour la table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`ID_Client`) REFERENCES `client` (`ID_Client`),
  ADD CONSTRAINT `location_ibfk_2` FOREIGN KEY (`ID_DVD`) REFERENCES `dvd` (`ID_DVD`);

--
-- Contraintes pour la table `technicien`
--
ALTER TABLE `technicien`
  ADD CONSTRAINT `technicien_ibfk_1` FOREIGN KEY (`ID_Employer`) REFERENCES `employer` (`ID_Employer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
