-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 11 mai 2020 à 15:04
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
-- Base de données :  `gestion_reservations`
--

-- --------------------------------------------------------

--
-- Structure de la table `passager`
--

DROP TABLE IF EXISTS `passager`;
CREATE TABLE IF NOT EXISTS `passager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `pays` varchar(254) DEFAULT NULL,
  `adresse` varchar(254) DEFAULT NULL,
  `tele` int(11) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `num_passport` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `passager`
--

INSERT INTO `passager` (`id`, `nom`, `prenom`, `age`, `pays`, `adresse`, `tele`, `email`, `num_passport`) VALUES
(88, 'a', 'ABDERRAHIM', 12, 'india', 'AQ', 212, 'timope4189@tmailpro.net', 12345678),
(87, 'BELCAID2d', 'ABDERRAHIM', 12, 'india', 'home', 212, 'belcaidna@gmail.com', 12345678),
(86, 'med', 'ABDERRAHIM', 12, 'india', 'home', 212, 'belcaidna@gmail.com', 12345678),
(85, 'BELCAID', 'ABDERRAHIM', 12, 'india', 'home', 212, 'belcaidna@gmail.com', 12345678),
(84, 'BELCAID2', 'ABDERRAHIM', 12, 'india', 'home', 212, 'belcaidna@gmail.com', 12345678),
(82, 'BELCAID', 'ABDERRAHIM', 12, 'india', 'home', 212, 'belcaidna@gmail.com', 12345678),
(83, 'BELCAID tech', 'ABDERRAHIM', 12, 'india', 'AQ', 212, 'kahahac668@4tmail.com', 12345678);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vol_id` int(11) DEFAULT NULL,
  `passager_id` int(11) DEFAULT NULL,
  `date_reservation` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_Association_1` (`vol_id`),
  KEY `FK_Association_2` (`passager_id`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `vol_id`, `passager_id`, `date_reservation`) VALUES
(82, 3, 88, '2020-05-11 15:03:31'),
(81, 1, 87, '2020-05-11 14:58:17'),
(80, 6, 86, '2020-05-11 14:49:57'),
(79, 1, 85, '2020-05-11 14:46:11'),
(78, 1, 84, '2020-05-11 14:45:37'),
(77, 1, 83, '2020-05-11 14:43:40');

--
-- Déclencheurs `reservation`
--
DROP TRIGGER IF EXISTS `decrementer`;
DELIMITER $$
CREATE TRIGGER `decrementer` AFTER INSERT ON `reservation` FOR EACH ROW BEGIN
    UPDATE vols
        SET num_place=num_place - 1
        WHERE vols.id = reservation.vol_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `vols`
--

DROP TABLE IF EXISTS `vols`;
CREATE TABLE IF NOT EXISTS `vols` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `depart` varchar(254) DEFAULT NULL,
  `destination` varchar(254) DEFAULT NULL,
  `date_depart` datetime DEFAULT NULL,
  `num_place` int(11) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vols`
--

INSERT INTO `vols` (`id`, `depart`, `destination`, `date_depart`, `num_place`, `prix`) VALUES
(1, 'Agadir', 'Paris', '2020-05-26 11:45:00', 200, 3000),
(2, 'Marrakech', 'Paris', '2020-05-26 06:15:00', 300, 5000),
(3, 'Agadir', 'Londres', '2020-05-26 20:45:00', 250, 4000),
(4, 'Marrakech', 'Londres', '2020-05-26 11:30:00', 150, 3000),
(5, 'Casablanca', 'Paris', '2020-05-26 00:50:00', 250, 2500),
(6, 'Casablanca', 'Londres', '2020-05-26 05:00:00', 200, 5500);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
