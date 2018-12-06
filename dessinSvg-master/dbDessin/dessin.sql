-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 06 déc. 2018 à 21:36
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dessin`
--

-- --------------------------------------------------------

--
-- Structure de la table `des_shapes`
--

DROP TABLE IF EXISTS `des_shapes`;
CREATE TABLE IF NOT EXISTS `des_shapes` (
  `id_des_shape` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `id_user` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `des_svg_string` varchar(500) NOT NULL DEFAULT 'Try Again!',
  PRIMARY KEY (`id_des_shape`),
  UNIQUE KEY `id_des_formes_UNIQUE` (`id_des_shape`),
  UNIQUE KEY `id_user_UNIQUE` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `des_users`
--

DROP TABLE IF EXISTS `des_users`;
CREATE TABLE IF NOT EXISTS `des_users` (
  `id_des_users` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_pseudo` varchar(45) NOT NULL DEFAULT 'defaut',
  `user_password` varchar(45) NOT NULL DEFAULT 'defaut',
  PRIMARY KEY (`id_des_users`),
  UNIQUE KEY `idDes_users_UNIQUE` (`id_des_users`),
  UNIQUE KEY `user_pseudo_UNIQUE` (`user_pseudo`),
  UNIQUE KEY `user_password_UNIQUE` (`user_password`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Utilisateurs du dessinateur de formes';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
