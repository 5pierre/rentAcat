-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 25 déc. 2024 à 18:00
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
-- Base de données : `rentacat`
--

-- --------------------------------------------------------

--
-- Structure de la table `cats`
--

DROP TABLE IF EXISTS `cats`;
CREATE TABLE IF NOT EXISTS `cats` (
  `id_cat` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `contenu` text,
  `image` varchar(100) DEFAULT NULL,
  `born_at` date DEFAULT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `cats`
--

INSERT INTO `cats` (`id_cat`, `name`, `contenu`, `image`, `born_at`) VALUES
(1, 'garfild', 'chat moche et trés agessif, chasse les canapé et péte tout', 'view/images/cat1.jpg', '2024-11-15'),
(2, 'gaspard', 'chat beau et pas agessif', 'view/images/cat2.jpg', '2020-01-16'),
(3, 'tom', 'a mangé ses humain', 'view/images/cat3.jpg', '2021-10-12');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `email`, `mdp`, `created_at`) VALUES
(30, 'zzzzzzzz@zzzzz', 'zzzzzzzz@zzzzz', '$2y$10$dXGfivAC5HAiDSlSDG3ky.iGC0FKv3qfYFs./psPqG6Z8tqIBUDwi', '2024-12-25 15:53:06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
