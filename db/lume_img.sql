-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : jeu. 26 juin 2025 à 18:58
-- Version du serveur : 8.0.42
-- Version de PHP : 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lume_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `lume_img`
--

CREATE TABLE `lume_img` (
  `img_id` int NOT NULL,
  `img_url` varchar(200) NOT NULL,
  `img_alt` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `img_order` int NOT NULL,
  `project_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `lume_img`
--

INSERT INTO `lume_img` (`img_id`, `img_url`, `img_alt`, `img_order`, `project_id`) VALUES
(22, '../../img/projects/31/68251914d72ec_Mediterranean_Villa_.webp', NULL, 1, 31),
(23, '../../img/projects/31/682519151b68b_Landscape.webp', NULL, 2, 31),
(24, '../../img/projects/31/68251915640ba_The_office.webp', NULL, 3, 31),
(63, '/img/projects/43/685bf3afc199e_Kitchen_.webp', NULL, 1, 43),
(64, '/img/projects/43/685bf3b005ace_Kitchen_3.webp', NULL, 2, 43),
(65, '/img/projects/43/685bf3b0227d3_Kitchen_4.webp', NULL, 3, 43),
(66, '/img/projects/44/685bf403b71f3_Interior_Design.webp', NULL, 1, 44),
(67, '/img/projects/44/685bf4040c719_Sweet_Home.webp', NULL, 2, 44),
(68, '/img/projects/44/685bf4042bea5_terrasse.webp', NULL, 3, 44);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `lume_img`
--
ALTER TABLE `lume_img`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `project_id` (`project_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `lume_img`
--
ALTER TABLE `lume_img`
  MODIFY `img_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `lume_img`
--
ALTER TABLE `lume_img`
  ADD CONSTRAINT `lume_img_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `lume_project` (`project_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
