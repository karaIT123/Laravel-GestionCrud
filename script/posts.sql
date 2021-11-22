-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 22 nov. 2021 à 06:12
-- Version du serveur : 8.0.21
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `posts`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce_privee`
--

CREATE TABLE `annonce_privee` (
  `id` int NOT NULL,
  `description` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `auteur` varchar(20) NOT NULL,
  `cible` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `annonce_privee`
--

INSERT INTO `annonce_privee` (`id`, `description`, `date`, `auteur`, `cible`) VALUES
(2, 'une autre annonce        ', '2021-03-03 05:48:52', 'Kara', '3'),
(3, 'PRIVATE ', '2021-03-04 09:04:31', 'PAR POSTS', '1'),
(5, 'Terminer', '2021-03-26 23:31:26', 'Mr Tout', '10'),
(6, 'bla bla blabla l', '2021-03-26 23:55:05', 'moi même ', '9'),
(7, 'Annonce cibleeee Abdoul', '2021-03-27 00:44:36', 'Patrick', '10');

-- --------------------------------------------------------

--
-- Structure de la table `annonce_public`
--

CREATE TABLE `annonce_public` (
  `id` int NOT NULL,
  `description` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `auteur` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `annonce_public`
--

INSERT INTO `annonce_public` (`id`, `description`, `date`, `auteur`) VALUES
(1, 'Une annonce privée, bla bla bla bla bla bla                 ', '2021-02-28 18:13:05', 'une personne 2'),
(2, 'une autre annonce', '2021-03-03 00:48:52', 'Kara'),
(3, 'premiere annonce public', '2021-03-03 06:03:16', 'Karamoko'),
(6, 'bla bla bla', '2021-03-26 19:55:33', 'moi même ');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `age` int NOT NULL,
  `titre` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `age`, `titre`) VALUES
(1, 'Coulibaly', 'Karamoko', 15, 'user_simple'),
(2, 'Coulibaly', 'Karamoko', 10, 'admin'),
(3, 'root', 'root', 22, 'admin'),
(5, 'Coulibaly', 'Bakary', 22, 'admin'),
(6, 'Coulibaly', 'Kara', 22, 'admin'),
(7, 'Coulibaly', 'Karamoko', 22, 'user_simple '),
(9, 'Dembele', 'Mohamed', 23, 'user_simple'),
(10, 'Sacko', 'Abdoul Karim', 22, 'user_simple');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce_privee`
--
ALTER TABLE `annonce_privee`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `annonce_public`
--
ALTER TABLE `annonce_public`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonce_privee`
--
ALTER TABLE `annonce_privee`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `annonce_public`
--
ALTER TABLE `annonce_public`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
