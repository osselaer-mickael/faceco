-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 25 mars 2021 à 14:23
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `stagemicka`
--

-- --------------------------------------------------------

--
-- Structure de la table `consommation`
--

DROP TABLE IF EXISTS `consommation`;
CREATE TABLE IF NOT EXISTS `consommation` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_fk` int(10) UNSIGNED NOT NULL,
  `consommation_type_fk` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) NOT NULL,
  'month' VARCHAR(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_fk` (`user_fk`),
  KEY `consommation_user_fk` (`consommation_type_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `consommation_type`
--

DROP TABLE IF EXISTS `consommation_type`;
CREATE TABLE IF NOT EXISTS `consommation_type` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `unite` varchar(5) COLLATE utf8_bin NOT NULL,
  `unite_price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='type de consommation sur les tableaux';

--
-- Déchargement des données de la table `consommation_type`
--

INSERT INTO `consommation_type` (`id`, `name`, `unite`, `unite_price`) VALUES
(1, 'eau', 'm3', 2.33),
(2, 'électricité', 'kw/h', 0.17),
(3, 'gaz', 'kw/h', 0.08);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `pass` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `mail`, `pass`) VALUES
(8, 'Osselaer', 'Mickael', 'mickael@osselaer.com', '$2y$10$Wcl.UdyLuY1sPI/DJFXi4eZM34jFXpeYFEQGcqTA/SHovRqK40imO');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `consommation`
--
ALTER TABLE `consommation`
  ADD CONSTRAINT `consommation_type_fk` FOREIGN KEY (`consommation_type_fk`) REFERENCES `consommation_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`user_fk`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
