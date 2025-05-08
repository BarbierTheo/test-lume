-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : jeu. 08 mai 2025 à 00:51
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
CREATE DATABASE IF NOT EXISTS `lume_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `lume_db`;

-- --------------------------------------------------------

--
-- Structure de la table `lume_admin`
--

CREATE TABLE `lume_admin` (
  `admin_id` int NOT NULL,
  `admin_pseudo` varchar(50) NOT NULL,
  `admin_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `lume_admin`
--

INSERT INTO `lume_admin` (`admin_id`, `admin_pseudo`, `admin_password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `lume_category`
--

CREATE TABLE `lume_category` (
  `category_id` int NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `lume_contact`
--

CREATE TABLE `lume_contact` (
  `contact_id` int NOT NULL,
  `contact_nom` varchar(50) NOT NULL,
  `contact_prenom` varchar(50) NOT NULL,
  `contact_email` varchar(70) NOT NULL,
  `contact_telephone` varchar(12) DEFAULT NULL,
  `contact_title` varchar(100) NOT NULL,
  `contact_message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `contact_status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'unread',
  `contact_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `lume_contact`
--

INSERT INTO `lume_contact` (`contact_id`, `contact_nom`, `contact_prenom`, `contact_email`, `contact_telephone`, `contact_title`, `contact_message`, `contact_status`, `contact_timestamp`) VALUES
(7, 'Dupont', 'Claire', 'claire.dupont@example.com', '0612345678', 'Projet de rénovation maison ancienne', 'Bonjour, je possède une maison ancienne en pierre et je souhaiterais la rénover tout en conservant son cachet. Pourriez-vous me proposer un accompagnement architectural sur ce projet ? Merci d’avance.', 'read', '2025-05-07 23:35:03'),
(9, 'Petit', 'Alice', 'a.petit@gmail.com', '0754123689', 'Permis de construire', 'Bonjour, je cherche un architecte pour m’aider à déposer un permis de construire pour un terrain que je viens d’acquérir. Merci de me dire si vous proposez ce service.', 'pending', '2025-05-07 23:35:03'),
(10, 'Benoit', 'Luc', 'luc.benoit@orange.fr', '0698432157', 'Aménagement intérieur', 'Bonjour, je souhaite repenser complètement l’aménagement intérieur de mon appartement. Travaillez-vous également sur les projets de décoration ?', 'read', '2025-05-07 23:35:03'),
(12, 'Durand', 'Julien', 'julien.durand@free.fr', '0645872310', 'Réhabilitation de local commercial', 'Bonjour, j’ai un local commercial que je souhaite transformer en cabinet de soins. Avez-vous de l’expérience dans ce type de réhabilitation ?', 'unread', '2025-05-07 23:35:03'),
(13, 'Fabre', 'Élodie', 'elodie.fabre@mail.com', '0632147854', 'Surélévation maison', 'Bonjour, nous envisageons de surélever notre maison pour ajouter un étage. Est-ce un projet que vous pouvez prendre en charge ?', 'pending', '2025-05-07 23:35:03');

-- --------------------------------------------------------

--
-- Structure de la table `lume_faq`
--

CREATE TABLE `lume_faq` (
  `faq_id` int NOT NULL,
  `faq_title` varchar(200) NOT NULL,
  `faq_article` text NOT NULL,
  `faq_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `lume_faq`
--

INSERT INTO `lume_faq` (`faq_id`, `faq_title`, `faq_article`, `faq_timestamp`) VALUES
(1, 'Pourquoi faire appel à un architecte pour mon projet ?', 'Un architecte apporte son expertise pour créer un projet esthétique, fonctionnel et conforme aux normes. Il optimise les coûts, gère le respect des délais et supervise les travaux, garantissant la qualité et la sécurité du chantier. En plus, il veille à la valorisation de votre bien immobilier à travers une conception réfléchie et unique.', '2025-05-06 15:34:25'),
(3, 'Vous voulez proposer un projet à distance ?', 'Il est tout à fait possible de nous confier un projet à distance. Grâce aux outils numériques, nous pouvons échanger, collaborer et suivre l’avancement du projet de manière fluide, tout en respectant vos attentes et délais.', '2025-05-06 15:34:25');

-- --------------------------------------------------------

--
-- Structure de la table `lume_faq_index`
--

CREATE TABLE `lume_faq_index` (
  `index_id` int NOT NULL,
  `faq_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `lume_img`
--

CREATE TABLE `lume_img` (
  `img_id` int NOT NULL,
  `img_url` varchar(200) NOT NULL,
  `img_alt` varchar(100) NOT NULL,
  `img_order` int NOT NULL,
  `project_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `lume_project`
--

CREATE TABLE `lume_project` (
  `project_id` int NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `project_tagline` varchar(200) NOT NULL,
  `project_description` text NOT NULL,
  `project_date` varchar(50) NOT NULL,
  `project_place` varchar(200) DEFAULT NULL,
  `project_customer` varchar(100) DEFAULT NULL,
  `project_area` int DEFAULT NULL,
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `lume_admin`
--
ALTER TABLE `lume_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_pseudo` (`admin_pseudo`);

--
-- Index pour la table `lume_category`
--
ALTER TABLE `lume_category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Index pour la table `lume_contact`
--
ALTER TABLE `lume_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Index pour la table `lume_faq`
--
ALTER TABLE `lume_faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Index pour la table `lume_faq_index`
--
ALTER TABLE `lume_faq_index`
  ADD PRIMARY KEY (`index_id`),
  ADD KEY `faq_id` (`faq_id`);

--
-- Index pour la table `lume_img`
--
ALTER TABLE `lume_img`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Index pour la table `lume_project`
--
ALTER TABLE `lume_project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `lume_admin`
--
ALTER TABLE `lume_admin`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `lume_category`
--
ALTER TABLE `lume_category`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `lume_contact`
--
ALTER TABLE `lume_contact`
  MODIFY `contact_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `lume_faq`
--
ALTER TABLE `lume_faq`
  MODIFY `faq_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `lume_faq_index`
--
ALTER TABLE `lume_faq_index`
  MODIFY `index_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `lume_img`
--
ALTER TABLE `lume_img`
  MODIFY `img_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `lume_project`
--
ALTER TABLE `lume_project`
  MODIFY `project_id` int NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `lume_faq_index`
--
ALTER TABLE `lume_faq_index`
  ADD CONSTRAINT `lume_faq_index_ibfk_1` FOREIGN KEY (`faq_id`) REFERENCES `lume_faq` (`faq_id`);

--
-- Contraintes pour la table `lume_img`
--
ALTER TABLE `lume_img`
  ADD CONSTRAINT `lume_img_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `lume_project` (`project_id`);

--
-- Contraintes pour la table `lume_project`
--
ALTER TABLE `lume_project`
  ADD CONSTRAINT `lume_project_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `lume_category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
