-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 17 jan. 2024 à 10:36
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `langschool`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `descr` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `rest` int NOT NULL,
  `path_img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `nom`, `descr`, `prix`, `rest`, `path_img`) VALUES
(1, 'Serenus Verbum', 'Explorez une nouvelle langue latine, Serenus Verbum, parlée à Listembourg. Rejoignez nos cours interactifs en visio de deux heures pour une immersion complète. Parfait pour tous les niveaux. Embarquez pour une aventure linguistique dès aujourd\'hui !', '50', 10, 'images/serunus.png'),
(2, 'Sefari', 'Découvrez la magie de Sefari à travers nos cours en ligne interactifs de deux heures en visio. Guidés par des experts passionnés, vous maîtriserez cette langue unique à votre rythme. Embarquez pour une aventure linguistique inégalée dès maintenant !', '60', 5, 'images/sefari.jpg'),
(3, 'Fujingo', 'Plongez dans l\'univers envoûtant de Fujingo avec notre cours en ligne exclusif. Découvrez la musicalité des tons, la beauté des caractères et la profondeur culturelle de cette langue d\'Extrême-Orient. Nos leçons interactives, soigneusement conçues, vous guideront avec aisance à travers cet apprentissage enrichissant. Rejoignez-nous pour une aventure linguistique captivante et ouvrez la porte à une compréhension approfondie de l\'Asie.', '60', 24, 'images/Fujingo.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
