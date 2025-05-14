-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : mer. 14 mai 2025 à 23:22
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

--
-- Déchargement des données de la table `lume_category`
--

INSERT INTO `lume_category` (`category_id`, `category_name`) VALUES
(5, 'Commercial'),
(6, 'Conceptuel'),
(1, 'Résidentiel');

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
(17, 'Dupont', 'Claire', 'claire.dupont@example.com', '0612345678', 'Projet de rénovation maison ancienne', 'Bonjour, je possède une maison ancienne en pierre et je souhaiterais la rénover tout en conservant son cachet. Pourriez-vous me proposer un accompagnement architectural sur ce projet ? Merci d’avance.', 'read', '2025-05-14 23:14:37'),
(18, 'Lemoine', 'Romain', 'r.lemoine@mail.com', '0678543210', 'Demande de devis pour une extension', 'Bonjour, nous souhaitons agrandir notre maison avec une extension en ossature bois. Serait-il possible d’avoir un devis estimatif pour une mission complète d’architecte ?', 'read', '2025-05-14 23:14:37'),
(19, 'Petit', 'Alice', 'a.petit@gmail.com', '0754123689', 'Permis de construire', 'Bonjour, je cherche un architecte pour m’aider à déposer un permis de construire pour un terrain que je viens d’acquérir. Merci de me dire si vous proposez ce service.', 'read', '2025-05-14 23:14:37'),
(20, 'Benoit', 'Luc', 'luc.benoit@orange.fr', '0698432157', 'Aménagement intérieur', 'Bonjour, je souhaite repenser complètement l’aménagement intérieur de mon appartement. Travaillez-vous également sur les projets de décoration ?', 'pending', '2025-05-14 23:14:37'),
(21, 'Morel', 'Sophie', 'sophie.morel@yahoo.fr', '0667892345', 'Construction d’une maison contemporaine', 'Bonjour, nous souhaitons faire construire une maison contemporaine sur un terrain récemment acquis. Nous cherchons un architecte pour concevoir le projet.', 'unread', '2025-05-14 23:14:37'),
(22, 'Durand', 'Julien', 'julien.durand@free.fr', '0645872310', 'Réhabilitation de local commercial', 'Bonjour, j’ai un local commercial que je souhaite transformer en cabinet de soins. Avez-vous de l’expérience dans ce type de réhabilitation ?', 'pending', '2025-05-14 23:14:37'),
(23, 'Fabre', 'Élodie', 'elodie.fabre@mail.com', '0632147854', 'Surélévation maison', 'Bonjour, nous envisageons de surélever notre maison pour ajouter un étage. Est-ce un projet que vous pouvez prendre en charge ?', 'pending', '2025-05-14 23:14:37'),
(24, 'Chevalier', 'Antoine', 'antoine.chevalier@outlook.com', '0685471236', 'Projet d’atelier en fond de cour', 'Bonjour, je voudrais faire construire un petit atelier dans le fond de mon jardin. Je voudrais savoir si un permis est nécessaire et si vous pouvez m’aider à concevoir ce projet.', 'read', '2025-05-14 23:14:37'),
(25, 'Giraud', 'Marion', 'marion.giraud@laposte.net', '0654237890', 'Demande de conseil en urbanisme', 'Bonjour, j’ai une question sur les règles d’urbanisme en vigueur pour mon terrain situé en zone B1. Pourriez-vous m’accompagner ?', 'unread', '2025-05-14 23:14:37'),
(26, 'Leclerc', 'Hugo', 'hugo.leclerc@gmail.com', '0678941256', 'Projet maison passive', 'Bonjour, je souhaite construire une maison passive. Avez-vous une expertise sur les matériaux et techniques permettant de respecter ces normes ?', 'unread', '2025-05-14 23:14:37');

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
(15, 'Pourquoi faire appel à un architecte pour mon projet ?', '<div>\r\n<div>Un architecte apporte son expertise pour cr&eacute;er un projet esth&eacute;tique, fonctionnel et conforme aux normes. Il optimise les co&ucirc;ts, g&egrave;re le respect des d&eacute;lais et supervise les travaux, garantissant la qualit&eacute; et la s&eacute;curit&eacute; du chantier. En plus, il veille &agrave; la valorisation de votre bien immobilier &agrave; travers une conception r&eacute;fl&eacute;chie et unique.</div>\r\n</div>', '2025-05-14 23:12:48'),
(16, 'Quelles sont les étapes d&#039;un projet avec une agence ?', '<div>\r\n<div>Le processus commence par une &eacute;tude de vos besoins et une d&eacute;finition du cahier des charges. L\'agence con&ccedil;oit ensuite un projet adapt&eacute;, valide avec vous avant de commencer les travaux. Durant la r&eacute;alisation, elle supervise le chantier et s\'assure de la qualit&eacute;. Enfin, elle proc&egrave;de &agrave; la r&eacute;ception du projet et aux ajustements n&eacute;cessaires.</div>\r\n</div>', '2025-05-14 23:13:10'),
(17, 'Vous voulez proposer un projet à distance ?', '<div>\r\n<div>Il est tout &agrave; fait possible de nous confier un projet &agrave; distance. Gr&acirc;ce aux outils num&eacute;riques, nous pouvons &eacute;changer, collaborer et suivre l&rsquo;avancement du projet de mani&egrave;re fluide, tout en respectant vos attentes et d&eacute;lais.</div>\r\n</div>', '2025-05-14 23:13:31');

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
  `img_alt` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `img_order` int NOT NULL,
  `project_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `lume_img`
--

INSERT INTO `lume_img` (`img_id`, `img_url`, `img_alt`, `img_order`, `project_id`) VALUES
(16, '../../img/projects/28/682512c184bcf_Concours.webp', NULL, 1, 28),
(17, '../../img/projects/28/682512c1a19f1_Mediterranean_Villa_.webp', NULL, 2, 28),
(18, '../../img/projects/28/682512c1d14d1_The_office.webp', NULL, 3, 28),
(19, '../../img/projects/29/682512fe1faed_Interior_Design.webp', NULL, 1, 29),
(20, '../../img/projects/29/682512fe66db9_Sweet_Home.webp', NULL, 2, 29),
(21, '../../img/projects/29/682512fe8406e_terrasse.webp', NULL, 3, 29),
(22, '../../img/projects/31/68251914d72ec_Mediterranean_Villa_.webp', NULL, 1, 31),
(23, '../../img/projects/31/682519151b68b_Landscape.webp', NULL, 2, 31),
(24, '../../img/projects/31/68251915640ba_The_office.webp', NULL, 3, 31),
(25, '../../img/projects/32/682519a32d708_Kitchen_.webp', NULL, 1, 32),
(26, '../../img/projects/32/682519a3676fe_Kitchen_3.webp', NULL, 2, 32),
(27, '../../img/projects/32/682519a3820f1_Kitchen_4.webp', NULL, 3, 32);

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
  `project_area` int DEFAULT NULL,
  `project_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `lume_project`
--

INSERT INTO `lume_project` (`project_id`, `project_name`, `project_tagline`, `project_description`, `project_date`, `project_place`, `project_area`, `project_timestamp`, `category_id`) VALUES
(28, 'eztgez', 'azeza', 'ezaeza', '2025-05-13', 'ezaeaz', NULL, '2025-05-14 22:01:37', 6),
(29, 'eztgezaaaaaaaa', 'azeza', 'ezaezaeeeee', '2025-05-13', 'ezaeaz', NULL, '2025-05-14 22:02:38', 6),
(31, 'Villa Verde', 'Rénovation d&amp;#039;une maison ancienne en havre de paix moderne', 'Cette villa de 1920 a été entièrement rénovée pour offrir un cadre chaleureux, écoresponsable et baigné de lumière. La pierre d&amp;#039;origine a été conservée et mariée à des lignes contemporaines. L&amp;#039;espace a été repensé pour optimiser les volumes, tout en respectant l&amp;#039;identité du lieu.', '2024-07-12', 'Saint-Aubin-sur-Mer, France', 230, '2025-05-14 22:28:36', 1),
(32, 'Cuisine Horizon', 'Conception d&amp;#039;une cuisine sur-mesure avec visualisation 3D', 'Création d&amp;#039;une cuisine ouverte intégrant des matériaux nobles et des fonctionnalités modernes. Les volumes ont été anticipés en modélisation 3D pour valider chaque choix. L&amp;#039;accent est mis sur la circulation, la lumière naturelle, et les contrastes bois/métal', '2024-01-18', 'Lyon, France', NULL, '2025-05-14 22:30:59', 1);

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
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `lume_contact`
--
ALTER TABLE `lume_contact`
  MODIFY `contact_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `lume_faq`
--
ALTER TABLE `lume_faq`
  MODIFY `faq_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `lume_faq_index`
--
ALTER TABLE `lume_faq_index`
  MODIFY `index_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `lume_img`
--
ALTER TABLE `lume_img`
  MODIFY `img_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `lume_project`
--
ALTER TABLE `lume_project`
  MODIFY `project_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
