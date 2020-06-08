-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 08 juin 2020 à 06:45
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

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

CREATE TABLE `passager` (
  `id` int(11) NOT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `pays` varchar(254) DEFAULT NULL,
  `adresse` varchar(254) DEFAULT NULL,
  `tele` int(11) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `num_passport` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `passager`
--

INSERT INTO `passager` (`id`, `nom`, `prenom`, `age`, `pays`, `adresse`, `tele`, `email`, `num_passport`) VALUES
(141, 'marwa', 'marwa', 18, 'MAROC', 'safi', 2147483647, 'marwa@gmail.com', 199);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `vol_id` int(11) DEFAULT NULL,
  `passager_id` int(11) DEFAULT NULL,
  `date_reservation` timestamp NULL DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `vol_id`, `passager_id`, `date_reservation`, `id_user`) VALUES
(169, 1, 141, '2020-06-08 05:42:33', 27),
(165, 1, 141, '2020-06-08 04:43:59', 27),
(160, 3, 141, '2020-06-07 00:21:21', 28);

--
-- Déclencheurs `reservation`
--
DELIMITER $$
CREATE TRIGGER `decrementer` AFTER INSERT ON `reservation` FOR EACH ROW BEGIN
 DECLARE SELECTED INT;
   set SELECTED=NEW.vol_id;
    UPDATE vols
        SET num_place=num_place - 1
        WHERE id = SELECTED;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `statut` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `fullname`, `emailid`, `password`, `statut`) VALUES
(27, 'Ghalia khzami', 'ghalia@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'user'),
(28, 'KHZAMI GHALIA', 'elghaliakhzami@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'admin'),
(29, '', 'user@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'user');

-- --------------------------------------------------------

--
-- Structure de la table `vols`
--

CREATE TABLE `vols` (
  `id` int(11) NOT NULL,
  `depart` varchar(254) DEFAULT NULL,
  `destination` varchar(254) DEFAULT NULL,
  `date_depart` date DEFAULT NULL,
  `num_place` int(11) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `statut` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vols`
--

INSERT INTO `vols` (`id`, `depart`, `destination`, `date_depart`, `num_place`, `prix`, `statut`) VALUES
(1, 'Agadir', 'Paris', '2020-05-26', 178, 3000, 1),
(2, 'Marrakech', 'Paris', '2020-05-26', 300, 5000, 1),
(3, 'Agadir', 'Londres', '2020-05-26', 246, 4000, 1),
(4, 'Marrakech', 'Londres', '2020-05-26', 150, 3000, 1),
(5, 'Casablanca', 'Paris', '2020-05-26', 250, 2500, 0),
(6, 'Casablanca', 'Londres', '2020-05-26', 197, 5500, 0),
(7, 'Safi', 'Londres', '2020-05-26', 0, 5500, 0),
(11, 'last', 'last', '2020-01-01', 444, 9000, 0),
(12, '', '', '2020-06-19', 0, 0, 0),
(13, 'hsj', 'slsl', '2020-01-01', 1, 0, 0),
(14, '', '', '2020-06-15', 0, 0, 0),
(15, 'hdj', 'dd', '2020-01-03', 1, 900, 0),
(16, 'hsj', 'slsl', '2020-01-01', 1, 1, 1),
(17, 'hdj', 'slsl', '2020-02-01', 1, 1, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `passager`
--
ALTER TABLE `passager`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Association_1` (`vol_id`),
  ADD KEY `FK_Association_2` (`passager_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vols`
--
ALTER TABLE `vols`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `passager`
--
ALTER TABLE `passager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `vols`
--
ALTER TABLE `vols`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
