-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 10 avr. 2023 à 18:40
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ppe4`
--

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `id_specie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `enclos`
--

CREATE TABLE `enclos` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `maxcapacitie` int(11) NOT NULL,
  `water` tinyint(1) NOT NULL,
  `taille` float NOT NULL,
  `id_staff` int(11) DEFAULT NULL,
  `id_staff_concerne` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE `fonction` (
  `fonction` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `fonction`
--

INSERT INTO `fonction` (`fonction`) VALUES
('boss'),
('worker');

-- --------------------------------------------------------

--
-- Structure de la table `loc_animal`
--

CREATE TABLE `loc_animal` (
  `id` int(11) NOT NULL,
  `entrie_date` date NOT NULL,
  `exit_date` date NOT NULL,
  `id_enclos` varchar(50) DEFAULT NULL,
  `id_animal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sexe`
--

CREATE TABLE `sexe` (
  `sexe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `sexe`
--

INSERT INTO `sexe` (`sexe`) VALUES
('female'),
('male'),
('other');

-- --------------------------------------------------------

--
-- Structure de la table `specie`
--

CREATE TABLE `specie` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lifetime` year(4) NOT NULL,
  `aquatique` tinyint(1) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `staff`
--

CREATE TABLE `staff` (
  `id` int(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `salarie` decimal(15,3) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `fonction` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `staff`
--

INSERT INTO `staff` (`id`, `first_name`, `last_name`, `date_of_birth`, `salarie`, `login`, `password`, `sexe`, `fonction`) VALUES
(165, 'Bezos', 'Jeff', '1964-01-12', '125100000000.000', 'jeffou', 'amz', 'male', 'boss'),
(166, 'Horner', 'Christian', '1973-11-16', '50000000.000', 'christou', 'rb', 'female', 'worker');

-- --------------------------------------------------------

--
-- Structure de la table `type_of_food`
--

CREATE TABLE `type_of_food` (
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `type_of_food`
--

INSERT INTO `type_of_food` (`type`) VALUES
('all'),
('other'),
('plante'),
('viande');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `animal_sexe_FK` (`sexe`),
  ADD KEY `animal_specie0_FK` (`id_specie`);

--
-- Index pour la table `enclos`
--
ALTER TABLE `enclos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enclos_staff_FK` (`id_staff`),
  ADD KEY `enclos_staff0_FK` (`id_staff_concerne`);

--
-- Index pour la table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`fonction`);

--
-- Index pour la table `loc_animal`
--
ALTER TABLE `loc_animal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loc_animal_enclos_FK` (`id_enclos`),
  ADD KEY `loc_animal_animal0_FK` (`id_animal`);

--
-- Index pour la table `sexe`
--
ALTER TABLE `sexe`
  ADD PRIMARY KEY (`sexe`);

--
-- Index pour la table `specie`
--
ALTER TABLE `specie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specie_type_of_food_FK` (`type`);

--
-- Index pour la table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_sexe_FK` (`sexe`),
  ADD KEY `staff_fonction0_FK` (`fonction`);

--
-- Index pour la table `type_of_food`
--
ALTER TABLE `type_of_food`
  ADD PRIMARY KEY (`type`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `loc_animal`
--
ALTER TABLE `loc_animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `specie`
--
ALTER TABLE `specie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_sexe_FK` FOREIGN KEY (`sexe`) REFERENCES `sexe` (`sexe`),
  ADD CONSTRAINT `animal_specie0_FK` FOREIGN KEY (`id_specie`) REFERENCES `specie` (`id`);

--
-- Contraintes pour la table `enclos`
--
ALTER TABLE `enclos`
  ADD CONSTRAINT `enclos_staff0_FK` FOREIGN KEY (`id_staff_concerne`) REFERENCES `staff` (`id`),
  ADD CONSTRAINT `enclos_staff_FK` FOREIGN KEY (`id_staff`) REFERENCES `staff` (`id`);

--
-- Contraintes pour la table `loc_animal`
--
ALTER TABLE `loc_animal`
  ADD CONSTRAINT `loc_animal_animal0_FK` FOREIGN KEY (`id_animal`) REFERENCES `animal` (`id`),
  ADD CONSTRAINT `loc_animal_enclos_FK` FOREIGN KEY (`id_enclos`) REFERENCES `enclos` (`id`);

--
-- Contraintes pour la table `specie`
--
ALTER TABLE `specie`
  ADD CONSTRAINT `specie_type_of_food_FK` FOREIGN KEY (`type`) REFERENCES `type_of_food` (`type`);

--
-- Contraintes pour la table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_fonction0_FK` FOREIGN KEY (`fonction`) REFERENCES `fonction` (`fonction`),
  ADD CONSTRAINT `staff_sexe_FK` FOREIGN KEY (`sexe`) REFERENCES `sexe` (`sexe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
