-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 26 mai 2023 à 16:32
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `twitter`
--

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE `connexion` (
  `id` int NOT NULL,
  `pseudo` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `passwords` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int NOT NULL,
  `nom` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Prenom` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `Pseudo` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `passwords` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(66) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `nom`, `Prenom`, `Pseudo`, `passwords`, `user_id`, `email`) VALUES
(1, 'Feyou', 'Brunic', 'brunic', 'brunic.feyou', '1', 'brunic.feyou@edu.devinci.fr'),
(8, 'Laragon', 'PHP', 'Mysql', 'laragon.fr', '1', 'msql@php.fr'),
(9, 'brunic', 'bgvh', 'brunic1', 'brunic', '1', 'brunic.feyou@edu.devinci.fr'),
(10, 'El', 'Tania', 'E-T', 'el-t', '1', 'eltania@gmail.com'),
(11, 'Heley', 'Logan', 'Helo', 'HelyLogan', '1', 'heleylogan@gmail.com'),
(32, 'Msika', 'Aurélia', 'Aure_la_boss', 'wouawtropbelle', '1', 'aurelia.laboss@magnifique.fr'),
(33, 'Lunas', 'Lune', 'Lulu', 'lunas', '1', 'lulu.fr'),
(34, 'bbb', 'nnb kj', 'jjj', 'hbjbkjnkj', '1', 'bbnb  '),
(35, 'Marguez', 'Tomas', 'Tomy', 'tomtom', '1', 'tomy');

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE `publication` (
  `id` int NOT NULL,
  `user_id` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `tag` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `public` int NOT NULL,
  `images` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`id`, `user_id`, `type`, `tag`, `public`, `images`, `creation`) VALUES
(212, '8', 'Salut le monde ', 'home', 2, '../Images/2397821530201010-SP-18-1423.jpg', '2023-05-22 16:27:01'),
(213, '32', 'On taffe fort au 3e étage, et ya trop d\'odeurs de crêpes omg !!!!', 'travail', 2, '../Images/2397821530201010-SP-18-1423.jpg', '2023-05-24 15:32:02'),
(216, '1', 'bvg', 'home', 2, '', '2023-05-26 12:54:02');

-- --------------------------------------------------------

--
-- Structure de la table `tweets`
--

CREATE TABLE `tweets` (
  `id` int NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `creation` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `datepublication` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `connexion`
--
ALTER TABLE `connexion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tweets`
--
ALTER TABLE `tweets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `connexion`
--
ALTER TABLE `connexion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `publication`
--
ALTER TABLE `publication`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT pour la table `tweets`
--
ALTER TABLE `tweets`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
