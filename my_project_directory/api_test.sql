-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 14 mai 2024 à 08:02
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `api_test`
--

-- --------------------------------------------------------

--
-- Structure de la table `asset`
--

CREATE TABLE `asset` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `asset`
--

INSERT INTO `asset` (`id`, `name`, `description`, `category_id`) VALUES
(22, 'putputputputtest', 'putputputputdestest', 5),
(23, 'Asset 2', 'Detail de l\'Asset2', 1),
(25, 'Asset 4', 'Detail de l\'Asset4', 2),
(26, 'Asset 5', 'Detail de l\'Asset5', 8),
(27, 'Asset 6', 'Detail de l\'Asset6', 9),
(28, 'Asset 7', 'Detail de l\'Asset7', 5),
(29, 'Asset 8', 'Detail de l\'Asset8', 2),
(30, 'Asset 9', 'Detail de l\'Asset9', 8),
(31, 'Asset 10', 'Detail de l\'Asset10', 9),
(32, 'Asset 11', 'Detail de l\'Asset11', 8),
(33, 'Asset 12', 'Detail de l\'Asset12', 2),
(34, 'Asset 13', 'Detail de l\'Asset13', 10),
(35, 'Asset 14', 'Detail de l\'Asset14', 1),
(37, 'Asset 16', 'Detail de l\'Asset16', 2),
(38, 'Asset 17', 'Detail de l\'Asset17', 2),
(39, 'Asset 18', 'Detail de l\'Asset18', 2),
(40, 'Asset 19', 'Detail de l\'Asset19', 7),
(41, 'test', 'destest', 5);

-- --------------------------------------------------------

--
-- Structure de la table `asset_category`
--

CREATE TABLE `asset_category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `asset_category`
--

INSERT INTO `asset_category` (`id`, `name`) VALUES
(1, 'Name 0'),
(2, 'Name 1'),
(4, 'Name 3'),
(5, 'Name 4'),
(6, 'Name 5'),
(7, 'Name 6'),
(8, 'Name 7'),
(9, 'Name 8'),
(10, 'Name 9'),
(11, 'puthfhf');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20240513191316', '2024-05-13 21:13:28', 55),
('DoctrineMigrations\\Version20240513201005', '2024-05-13 22:10:08', 80),
('DoctrineMigrations\\Version20240513204227', '2024-05-13 22:42:31', 70),
('DoctrineMigrations\\Version20240513204442', '2024-05-13 22:44:48', 77);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2AF5A5C12469DE2` (`category_id`);

--
-- Index pour la table `asset_category`
--
ALTER TABLE `asset_category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `asset`
--
ALTER TABLE `asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `asset_category`
--
ALTER TABLE `asset_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `asset`
--
ALTER TABLE `asset`
  ADD CONSTRAINT `FK_2AF5A5C12469DE2` FOREIGN KEY (`category_id`) REFERENCES `asset_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
