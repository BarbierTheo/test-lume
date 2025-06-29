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
CREATE DATABASE IF NOT EXISTS `lume_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `lume_db`;

-- --------------------------------------------------------

--
-- Structure de la table `lume_admin`
--

CREATE TABLE `lume_admin` (
  `admin_id` int NOT NULL,
  `admin_pseudo` varchar(50) NOT NULL,
  `admin_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `lume_admin`
--

INSERT INTO `lume_admin` (`admin_id`, `admin_pseudo`, `admin_password`) VALUES
(1, 'admin', '$2y$10$MRbT3PTUGNzDBoMfqdGnO.OcxY1th/vQvRJx0QBfhbcWBYVUt.z0i');

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
  `contact_telephone` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
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
(19, 'Petit', 'Alice', 'a.petit@gmail.com', '0754123689', 'Permis de construire', 'Bonjour, je cherche un architecte pour m’aider à déposer un permis de construire pour un terrain que je viens d’acquérir. Merci de me dire si vous proposez ce service.', 'pending', '2025-05-14 23:14:37'),
(20, 'Benoit', 'Luc', 'luc.benoit@orange.fr', '0698432157', 'Aménagement intérieur', 'Bonjour, je souhaite repenser complètement l’aménagement intérieur de mon appartement. Travaillez-vous également sur les projets de décoration ?', 'unread', '2025-05-14 23:14:37'),
(21, 'Morel', 'Sophie', 'sophie.morel@yahoo.fr', '0667892345', 'Construction d’une maison contemporaine', 'Bonjour, nous souhaitons faire construire une maison contemporaine sur un terrain récemment acquis. Nous cherchons un architecte pour concevoir le projet.', 'unread', '2025-05-14 23:14:37'),
(22, 'Durand', 'Julien', 'julien.durand@free.fr', '0645872310', 'Réhabilitation de local commercial', 'Bonjour, j’ai un local commercial que je souhaite transformer en cabinet de soins. Avez-vous de l’expérience dans ce type de réhabilitation ?', 'read', '2025-05-14 23:14:37'),
(23, 'Fabre', 'Élodie', 'elodie.fabre@mail.com', '0632147854', 'Surélévation maison', 'Bonjour, nous envisageons de surélever notre maison pour ajouter un étage. Est-ce un projet que vous pouvez prendre en charge ?', 'pending', '2025-05-14 23:14:37'),
(26, 'Leclerc', 'Hugo', 'hugo.leclerc@gmail.com', '0678941256', 'Projet maison passive', 'Bonjour, je souhaite construire une maison passive. Avez-vous une expertise sur les matériaux et techniques permettant de respecter ces normes ?', 'pending', '2025-05-14 23:14:37'),
(27, 'fezf', 'ez', 'ezffe@fee.fee', '05050802', 'fezfez', 'fezfez', 'unread', '2025-05-20 20:31:56'),
(29, 'gezge', 'gezgez', 'gezgez@gezge.com', '105015058zaz', 'feafezfe', 'fezfez', 'pending', '2025-05-20 20:33:14'),
(30, 'O&#039;Connor', 'Maximilien', 'oconnor.max@dupe.com', '0606060606', 'truc machin', 'ouriezhroaeabob', 'unread', '2025-05-27 13:37:21');

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
(15, 'Pourquoi faire appel à un architecte pour mon projet ?', '<div>\r\n<pre style=\"text-align: center;\"><code><em>Un architecte apporte son expertise pour<span style=\"text-decoration: underline;\"> cr&eacute;er un projet esth&eacute;tique, fon</span>ctionnel et conforme aux normes. Il optimise les co&ucirc;ts, g&egrave;re le respect des d&eacute;lais et supervise les, garantissant la qualit&eacute; et la s&eacute;curit&eacute; du chantier. En plus, il veille &agrave; la valorisation de votre bien immobilier &agrave; travers une conception r&eacute;fl&eacute;chie et unique.</em></code></pre>\r\n</div>', '2025-05-14 23:12:48'),
(16, 'Quelles sont les étapes d&#039;un projet avec une agence ?', '<div>\r\n<div>Le processus commence par une &eacute;tude de vos besoins et une d&eacute;finition du cahier des <strong>charges</strong>. L\'agence con&ccedil;oit ensuite un projet adapt&eacute;, valide avec vous avant de commencer les travaux. Durant la r&eacute;alisation, elle supervise le chantier et s\'assure de la qualit&eacute;. Enfin, elle proc&egrave;de &agrave; la r&eacute;ception du projet et aux ajustements n&eacute;cessaires.</div>\r\n</div>', '2025-05-14 23:13:10'),
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
(22, '../../img/projects/31/68251914d72ec_Mediterranean_Villa_.webp', NULL, 1, 31),
(23, '../../img/projects/31/682519151b68b_Landscape.webp', NULL, 2, 31),
(24, '../../img/projects/31/68251915640ba_The_office.webp', NULL, 3, 31),
(63, '/img/projects/43/685bf3afc199e_Kitchen_.webp', NULL, 1, 43),
(64, '/img/projects/43/685bf3b005ace_Kitchen_3.webp', NULL, 2, 43),
(65, '/img/projects/43/685bf3b0227d3_Kitchen_4.webp', NULL, 3, 43),
(66, '/img/projects/44/685bf403b71f3_Interior_Design.webp', NULL, 1, 44),
(67, '/img/projects/44/685bf4040c719_Sweet_Home.webp', NULL, 2, 44),
(68, '/img/projects/44/685bf4042bea5_terrasse.webp', NULL, 3, 44);

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
(31, 'Villa Verde', 'Rénovation d&amp;#039;une maison ancienne en havre de paix moderne', 'Cette villa de 1920 a été entièrement rénovée pour offrir un cadre chaleureux, écoresponsable et baigné de lumière. La pierre d&amp;#039;origine a été conservée et mariée à des lignes contemporaines. L&amp;#039;espace a été repensé pour optimiser les volumes, tout en respectant l&amp;#039;identité du lieu.', '2024-07-12', 'Saint-Aubin-sur-Mer, France', 230, '2025-05-14 22:28:36', 1),
(43, 'Cuisine Bastille', 'Moderniser sans trahir l&amp;#039;âme du lieu', 'Ce projet consistait à rénover une cuisine dans un appartement haussmannien parisien. L’objectif était de rendre l’espace plus fonctionnel tout en conservant les moulures et le charme de l’ancien. Un îlot central a été ajouté et les matériaux choisis allient authenticité et modernité.', '2024-09-11', 'Paris, 7ème arrondissement', 18, '2025-06-25 13:03:43', 1),
(44, 'Atelier Lumière', 'L’élégance d’un espace ouvert et chaleureux', 'Dans cet appartement situé à Rouen, nous avons entièrement repensé l’espace de vie. Le salon a été décloisonné pour gagner en lumière naturelle. Des éléments en bois sur mesure et un choix de couleurs douces renforcent le confort et la convivialité.', '2023-11-23', 'Rouen', NULL, '2025-06-25 13:05:07', 1);

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
  MODIFY `contact_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `lume_faq`
--
ALTER TABLE `lume_faq`
  MODIFY `faq_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `lume_faq_index`
--
ALTER TABLE `lume_faq_index`
  MODIFY `index_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `lume_img`
--
ALTER TABLE `lume_img`
  MODIFY `img_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT pour la table `lume_project`
--
ALTER TABLE `lume_project`
  MODIFY `project_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

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
  ADD CONSTRAINT `lume_img_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `lume_project` (`project_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
