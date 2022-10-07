-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 07 oct. 2022 à 07:20
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vroomissimo`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `Id_Annonce` int(11) NOT NULL,
  `Date_Annonce` date DEFAULT NULL,
  `Evaluation` int(11) DEFAULT NULL,
  `Id_Vendeur` int(11) NOT NULL,
  `Immatriculation` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`Id_Annonce`, `Date_Annonce`, `Evaluation`, `Id_Vendeur`, `Immatriculation`) VALUES
(1, '2021-08-23', 1, 16, 'BC-801-IN'),
(2, '2020-12-19', 6, 10, 'BN-071-KS'),
(3, '2020-10-05', 3, 1, 'DE-545-XV'),
(4, '2020-12-26', 5, 9, 'EG-398-WS'),
(5, '2020-10-14', 8, 8, 'HB-581-SO'),
(6, '2020-12-17', 5, 14, 'IZ-313-OR'),
(7, '2020-10-22', 5, 6, 'IZ-344-NH'),
(8, '2020-10-24', 4, 12, 'JU-416-HN'),
(9, '2022-02-18', 5, 7, 'KB-494-KP'),
(10, '2021-07-27', 4, 6, 'KD-112-XX'),
(11, '2021-08-25', 5, 10, 'KY-546-EW'),
(12, '2021-02-25', 7, 13, 'LC-521-RF'),
(13, '2022-01-12', 3, 10, 'MS-552-AB'),
(14, '2022-08-06', 6, 9, 'NK-613-ZM'),
(15, '2021-11-08', 2, 8, 'PW-888-XN'),
(16, '2020-07-11', 3, 9, 'SN-503-DF'),
(17, '2022-02-03', 3, 13, 'VV-584-TE'),
(18, '2020-07-04', 3, 14, 'XH-323-NK'),
(19, '2022-05-24', 6, 9, 'YP-508-JT'),
(20, '2022-10-25', 2, 10, 'YU-475-JO');

-- --------------------------------------------------------

--
-- Structure de la table `caractéristique`
--

CREATE TABLE `caractéristique` (
  `Id_Caractéristique` int(11) NOT NULL,
  `couleur_int` varchar(50) DEFAULT NULL,
  `couleur_ext` varchar(50) DEFAULT NULL,
  `nb_siège` int(50) DEFAULT NULL,
  `etat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `caractéristique`
--

INSERT INTO `caractéristique` (`Id_Caractéristique`, `couleur_int`, `couleur_ext`, `nb_siège`, `etat`) VALUES
(1, 'noir', 'noir', 5, 'parfait'),
(2, 'noir', 'rouge', 5, 'moyen'),
(3, 'noir', 'noir', 4, 'parfait'),
(4, 'noir', 'rouge', 4, 'moyen'),
(5, 'noir', 'bleu', 5, 'parfait'),
(6, 'noir', 'bleu', 5, 'moyen');

-- --------------------------------------------------------

--
-- Structure de la table `consomation`
--

CREATE TABLE `consomation` (
  `Id_Consomation` int(11) NOT NULL,
  `Carburant` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `consomation`
--

INSERT INTO `consomation` (`Id_Consomation`, `Carburant`) VALUES
(1, 'SP95'),
(2, 'SP98'),
(3, 'GPL'),
(4, 'Gazoile'),
(5, 'hybride'),
(6, 'Electrique');

-- --------------------------------------------------------

--
-- Structure de la table `definir`
--

CREATE TABLE `definir` (
  `Immatriculation` varchar(10) NOT NULL,
  `Id_Caractéristique` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `localisation`
--

CREATE TABLE `localisation` (
  `Id_Localisation` int(11) NOT NULL,
  `Ville` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `localisation`
--

INSERT INTO `localisation` (`Id_Localisation`, `Ville`) VALUES
(1, 'Lille'),
(2, 'Valenciennes'),
(3, 'Lens'),
(4, 'Maubeuge'),
(5, 'Douai'),
(6, 'Paris'),
(7, 'Lyon'),
(8, 'Marseille'),
(9, 'Grigny'),
(10, 'Sevran');

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `Id_Marque` int(11) NOT NULL,
  `nom_marque` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`Id_Marque`, `nom_marque`) VALUES
(1, 'Fiat'),
(2, 'Ferrari'),
(3, 'BMW'),
(4, 'Audi'),
(5, 'VW'),
(6, 'Cupra'),
(7, 'Alpine'),
(8, 'Rolls'),
(9, 'Jaguar'),
(10, 'Ford');

-- --------------------------------------------------------

--
-- Structure de la table `model`
--

CREATE TABLE `model` (
  `Id_Model` int(11) NOT NULL,
  `nom_model` varchar(50) DEFAULT NULL,
  `Id_Marque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `model`
--

INSERT INTO `model` (`Id_Model`, `nom_model`, `Id_Marque`) VALUES
(1, 'Serie 1', 3),
(2, 'X2', 3),
(3, 'X4', 3),
(4, '500', 1),
(5, 'Testarossa', 2),
(6, 'A1', 4),
(7, 'R8', 3),
(8, 'Golf6', 5),
(9, 'Polo', 5),
(10, 'Formentor', 6),
(11, 'Leon', 6),
(12, 'A110', 7),
(13, 'Pentone', 7),
(14, 'Phantom', 8),
(15, 'Cullinan', 8),
(16, 'F-type', 9),
(17, 'E-Pace', 9),
(18, 'Mustang', 10),
(19, 'Torino', 10),
(20, 'Z4', 3);

-- --------------------------------------------------------

--
-- Structure de la table `motorisation`
--

CREATE TABLE `motorisation` (
  `Id_Motorisation` int(11) NOT NULL,
  `puissance` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `motorisation`
--

INSERT INTO `motorisation` (`Id_Motorisation`, `puissance`) VALUES
(1, '80'),
(2, '110'),
(3, '140'),
(4, '220'),
(5, '290');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `Immatriculation` varchar(10) NOT NULL,
  `Prix` decimal(15,2) DEFAULT NULL,
  `annee` int(11) NOT NULL,
  `Km` decimal(15,2) DEFAULT NULL,
  `Id_Consomation` int(11) NOT NULL,
  `Id_Model` int(11) NOT NULL,
  `Id_Motorisation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`Immatriculation`, `Prix`, `annee`, `Km`, `Id_Consomation`, `Id_Model`, `Id_Motorisation`) VALUES
('BC-801-IN', '8478.00', 2018, '172411.00', 5, 4, 1),
('BN-071-KS', '19422.00', 2002, '78062.00', 5, 18, 2),
('DE-545-XV', '28059.00', 2021, '172836.00', 6, 9, 1),
('EG-398-WS', '9636.00', 2015, '84099.00', 4, 8, 1),
('HB-581-SO', '23642.00', 1998, '151288.00', 2, 5, 3),
('IZ-313-OR', '28382.00', 2014, '34646.00', 6, 11, 2),
('IZ-344-NH', '34158.00', 1990, '158417.00', 3, 19, 4),
('JU-416-HN', '4999.00', 2005, '82912.00', 6, 7, 4),
('KB-494-KP', '26234.00', 2015, '47238.00', 3, 2, 4),
('KD-112-XX', '1486.00', 1998, '118557.00', 2, 17, 4),
('KY-546-EW', '11724.00', 1993, '11402.00', 2, 18, 3),
('LC-521-RF', '22262.00', 2017, '154540.00', 3, 9, 4),
('MS-552-AB', '9150.00', 2017, '152019.00', 5, 13, 4),
('NK-613-ZM', '40295.00', 1997, '146107.00', 3, 6, 3),
('PW-888-XN', '23989.00', 2011, '183289.00', 3, 19, 1),
('SN-503-DF', '4248.00', 2020, '60990.00', 3, 20, 1),
('VV-584-TE', '41803.00', 2005, '59834.00', 1, 12, 3),
('XH-323-NK', '11296.00', 2000, '133191.00', 2, 5, 1),
('YP-508-JT', '37910.00', 2009, '163139.00', 3, 16, 4),
('YU-475-JO', '18818.00', 1989, '71553.00', 2, 8, 2);

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

CREATE TABLE `vendeur` (
  `Id_Vendeur` int(11) NOT NULL,
  `Nom_vendeur` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `Id_Localisation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`Id_Vendeur`, `Nom_vendeur`, `mail`, `tel`, `Id_Localisation`) VALUES
(1, 'lko2231', 'wxfrhjygwv@qgg.fr', 254789632, 1),
(2, 'xdgh', 'wsfxfyjxfyhgv@qgg.fr', 254789632, 2),
(3, 'xtjjj31', 'wsfdgwfxgjjxf@qgg.fr', 254789632, 2),
(4, 'lkojxrf1', 'wsfxfgjdgwv@qgg.fr', 254789632, 3),
(5, 'lkxrfj', 'wsfxfgjxfgv@qgg.fr', 254789632, 7),
(6, 'lxfjxn,vb,1', 'wsfxgjv@qgg.fr', 254789632, 4),
(7, 'lkcvbxdth', 'wsfxfgjqgg.fr', 254789632, 1),
(8, 'cvb31', 'wsfxfgj@qgg.fr', 254789632, 8),
(9, 'vbcvb31', 'wsfxfjgv@qgg.fr', 254789632, 10),
(10, 'lko2ggfg231', 'wsfdgxfgj@qgg.fr', 254789632, 2),
(11, 'lkxdgo2231', 'wsfdgwv@qgg.fr', 254789632, 5),
(12, 'lkov2231', 'wsfdgwv@qgg.fr', 254789632, 6),
(13, 'lko2ndth231', 'wsfdgwv@qgg.fr', 254789632, 9),
(14, 'lko22werwg31', 'wsfdgwv@qgg.fr', 254789632, 9),
(15, 'lwdrtg2231', 'wsfdgwv@qgg.fr', 254789632, 3),
(16, 'lwgwthjko2231', 'wsfdgwv@qgg.fr', 254789632, 8);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`Id_Annonce`),
  ADD UNIQUE KEY `Immatriculation` (`Immatriculation`),
  ADD KEY `Id_Vendeur` (`Id_Vendeur`);

--
-- Index pour la table `caractéristique`
--
ALTER TABLE `caractéristique`
  ADD PRIMARY KEY (`Id_Caractéristique`);

--
-- Index pour la table `consomation`
--
ALTER TABLE `consomation`
  ADD PRIMARY KEY (`Id_Consomation`);

--
-- Index pour la table `definir`
--
ALTER TABLE `definir`
  ADD PRIMARY KEY (`Immatriculation`,`Id_Caractéristique`),
  ADD KEY `Id_Caractéristique` (`Id_Caractéristique`);

--
-- Index pour la table `localisation`
--
ALTER TABLE `localisation`
  ADD PRIMARY KEY (`Id_Localisation`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`Id_Marque`);

--
-- Index pour la table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`Id_Model`),
  ADD KEY `Id_Marque` (`Id_Marque`);

--
-- Index pour la table `motorisation`
--
ALTER TABLE `motorisation`
  ADD PRIMARY KEY (`Id_Motorisation`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`Immatriculation`),
  ADD KEY `Id_Consomation` (`Id_Consomation`),
  ADD KEY `Id_Model` (`Id_Model`),
  ADD KEY `Id_Motorisation` (`Id_Motorisation`);

--
-- Index pour la table `vendeur`
--
ALTER TABLE `vendeur`
  ADD PRIMARY KEY (`Id_Vendeur`),
  ADD KEY `Id_Localisation` (`Id_Localisation`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `annonce_ibfk_1` FOREIGN KEY (`Id_Vendeur`) REFERENCES `vendeur` (`Id_Vendeur`),
  ADD CONSTRAINT `annonce_ibfk_2` FOREIGN KEY (`Immatriculation`) REFERENCES `vehicule` (`Immatriculation`);

--
-- Contraintes pour la table `definir`
--
ALTER TABLE `definir`
  ADD CONSTRAINT `definir_ibfk_1` FOREIGN KEY (`Immatriculation`) REFERENCES `vehicule` (`Immatriculation`),
  ADD CONSTRAINT `definir_ibfk_2` FOREIGN KEY (`Id_Caractéristique`) REFERENCES `caractéristique` (`Id_Caractéristique`);

--
-- Contraintes pour la table `model`
--
ALTER TABLE `model`
  ADD CONSTRAINT `model_ibfk_1` FOREIGN KEY (`Id_Marque`) REFERENCES `marque` (`Id_Marque`);

--
-- Contraintes pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `vehicule_ibfk_1` FOREIGN KEY (`Id_Consomation`) REFERENCES `consomation` (`Id_Consomation`),
  ADD CONSTRAINT `vehicule_ibfk_2` FOREIGN KEY (`Id_Model`) REFERENCES `model` (`Id_Model`),
  ADD CONSTRAINT `vehicule_ibfk_3` FOREIGN KEY (`Id_Motorisation`) REFERENCES `motorisation` (`Id_Motorisation`);

--
-- Contraintes pour la table `vendeur`
--
ALTER TABLE `vendeur`
  ADD CONSTRAINT `vendeur_ibfk_1` FOREIGN KEY (`Id_Localisation`) REFERENCES `localisation` (`Id_Localisation`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
