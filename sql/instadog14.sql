-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 14 fév. 2019 à 07:45
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `instadog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `Article`;
CREATE TABLE IF NOT EXISTS `Article` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `description` text,
  `publicationDate` datetime DEFAULT NULL,
  `dogId` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dogId` (`dogId`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `Article` (`id`, `title`, `picture`, `description`, `publicationDate`, `dogId`) VALUES
(1, 'ange', 'anjuide.jpeg', 'Ange a un chien qui s\'appel anjuide', '2019-01-08 05:21:24', 1),
(2, 'Marine', 'mareine.jpeg', 'Marine a un chien qui s\'appel mareine', '2019-01-08 05:21:24', 2),
(3, 'Youka', 'youyou.jpeg', 'Youka a un chien qui s\'appel youyou', '2019-01-08 05:21:24', 3),
(4, 'Eulalia', 'lulu.jpeg', 'Eulalia a un chien qui s\'appel lulu', '2019-01-08 05:21:24', 4),
(5, 'Alessandro', 'porci.jpeg', 'Alessandro a un chien qui s\'appel porci', '2019-01-08 05:21:24', 5),
(6, 'Odile', 'didi.jpeg', 'Odile a un chien qui s\'appel didi', '2019-01-08 05:21:24', 6),
(7, 'Youka', 'youyou.jpeg', 'Youka a un chien qui s\'appel youyou', '2019-01-08 05:21:24', 7),
(8, 'Sabine', 'abio.jpeg', 'Sabine a un chien qui s\'appel abio', '2019-01-08 05:21:24', 8),
(9, 'Marina', 'koue.jpeg', 'Marina a un chien qui s\'appel koue', '2019-01-08 05:21:24', 9),
(10, 'Mohamad', 'momo.jpeg', 'Mohamad a un chien qui s\'appel momo', '2019-01-08 05:21:24', 10),
(11, 'ange', 'anjuide.jpeg', 'Ange a un autre chien qui s\'appel anjuide', '2019-01-08 05:21:24', 1),
(12, 'Marine', 'mareine.jpeg', 'Marine a un autre chien qui s\'appel mareine', '2019-01-08 05:21:24', 2),
(13, 'Youka', 'youyou.jpeg', 'Youka a un autre chien qui s\'appel youyou', '2019-01-08 05:21:24', 3),
(14, 'Eulalia', 'lulu.jpeg', 'Eulalia a un autre chien qui s\'appel lulu', '2019-01-08 05:21:24', 4),
(15, 'Alessandro', 'porci.jpeg', 'Alessandro a un autre chien qui s\'appel porci', '2019-01-08 05:21:24', 5);

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `Comment`;
CREATE TABLE IF NOT EXISTS `Comment` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `comment` text,
  `publicationDate` datetime DEFAULT NULL,
  `articleId` int(100) DEFAULT NULL,
  `userId` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `articleId` (`articleId`),
  KEY `userId` (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `Comment` (`id`, `comment`, `publicationDate`, `articleId`, `userId`) VALUES
(1, 'joli', '2019-01-08 05:21:24', 1, 1),
(2, 'beau', '2019-01-08 05:21:24', 2, 1),
(3, 'pas mal', '2019-01-08 05:21:24', 3, 1),
(4, 'Il vient d\'où?', '2019-01-08 05:21:24', 4, 1),
(5, 'Joli', '2019-01-08 05:21:24', 5, 1),
(6, 'Joli toutou', '2019-01-08 05:21:24', 6, 1),
(7, 'Beau toutou', '2019-01-08 05:21:24', 7, 1),
(8, 'Il te ressemble', '2019-01-08 05:21:24', 8, 1),
(9, 'Il est pas beau', '2019-01-08 05:21:24', 9, 1),
(10, 'Non', '2019-01-08 05:21:24', 10, 1),
(11, 'Pk?', '2019-01-08 05:21:24', 1, 1),
(12, 'J\'admire', '2019-01-08 05:21:24', 2, 1),
(13, 'Quoi?', '2019-01-08 05:21:24', 3, 1),
(14, 'Allo!', '2019-01-08 05:21:24', 4, 1),
(15, 'Magnifique', '2019-01-08 05:21:24', 5, 1),
(16, 'Allo', '2019-01-08 05:21:24', 14, 2),
(17, 'Oui', '2019-01-08 05:21:24', 14, 2),
(33, 'oui\r\n', '2019-02-14 07:33:21', 8, 15),
(32, 'Angra\r\n', '2019-02-11 20:01:44', 5, 2),
(21, 'ououi', '2019-01-08 05:21:24', 14, 2),
(29, 'Non non c\'est bon', '2019-01-08 05:21:24', 5, 2),
(28, 'OUii  ouio ', '2019-01-08 05:21:24', NULL, 2),
(31, 'Ange', '2019-02-11 20:01:31', 5, 2),
(27, 'oui', '2019-01-08 05:21:24', NULL, 2),
(30, 'Cette fois c\'est bon', '2019-01-08 05:21:24', 5, 2),
(34, 'Allo', '2019-02-14 07:37:41', 26, 15),
(35, 'Oui', '2019-02-14 07:37:48', 26, 15),
(36, 'nononon', '2019-02-14 07:38:08', 26, 15),
(37, 'nononon', '2019-02-14 07:38:15', 26, 15),
(38, 'Non', '2019-02-14 07:38:26', 26, 15),
(39, 'Non', '2019-02-14 07:38:37', 26, 15),
(40, 'Pourt', '2019-02-14 07:38:53', 26, 15),
(41, 'Pourt', '2019-02-14 07:39:06', 26, 15),
(42, 'Alors', '2019-02-14 07:39:21', 26, 15),
(43, 'Alors', '2019-02-14 07:39:30', 26, 15);

-- --------------------------------------------------------

--
-- Structure de la table `dog`
--

DROP TABLE IF EXISTS `Dog`;
CREATE TABLE IF NOT EXISTS `Dog` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `userId` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dog`
--

INSERT INTO `Dog` (`id`, `nickname`, `birthday`, `picture`, `userId`) VALUES
(1, 'anjuide', '2019-01-08', 'anjuide.jpeg', 1),
(2, 'mareine', '2019-01-08', 'mareine.jpeg', 2),
(3, 'youyou', '2019-01-08', 'youyou.jpeg', 3),
(4, 'lulu', '2019-01-08', 'lulu.jpeg', 4),
(5, 'porci', '2019-01-08', 'porci.jpeg', 5),
(6, 'didi', '2019-01-08', 'didi.jpeg', 6),
(7, 'youyou', '2019-01-08', 'youyou.jpeg', 7),
(8, 'Yous', '2019-01-08', 'abio.jpeg', 15),
(9, 'koue', '2019-01-08', 'koue.jpeg', 9),
(10, 'momo', '2019-01-08', 'momo.jpeg', 10),
(11, 'Ange', '1999-01-02', 'chrono.png', 2),
(21, 'Dernier test', '1889-03-02', '20190211-230000images.jpg', 2),
(20, 'Ange', '1999-08-09', '20190211-225924ibm-ramac-305-1956-5.jpg', 2),
(19, 'Ange', '1999-08-09', '20190211-224829ibm-ramac-305-1956-5.jpg', 2),
(22, 'Dernier test', '1889-03-02', '20190211_230050-images.jpg', 2);

-- --------------------------------------------------------

--
-- Structure de la table `dogRace`
--

DROP TABLE IF EXISTS `dogRace`;
CREATE TABLE IF NOT EXISTS `dogRace` (
  `dogId` int(100) NOT NULL,
  `raceId` int(100) NOT NULL,
  PRIMARY KEY (`dogId`,`raceId`),
  KEY `raceId` (`raceId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dogRace`
--

INSERT INTO `dogRace` (`dogId`, `raceId`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 1),
(7, 2),
(8, 3),
(9, 4),
(10, 5);

-- --------------------------------------------------------

--
-- Structure de la table `Race`
--

DROP TABLE IF EXISTS `Race`;
CREATE TABLE IF NOT EXISTS `Race` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nameRace` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `race`
--

INSERT INTO `Race` (`id`, `nameRace`) VALUES
(1, 'Rodweiller'),
(2, 'Boodle'),
(3, 'Bichpoo'),
(4, 'Bichpoo'),
(5, 'Show Show'),
(6, 'Super Rar'),
(7, 'Doxle');

-- --------------------------------------------------------

--
-- Structure de la table `UserDog`
--

DROP TABLE IF EXISTS `UserDog`;
CREATE TABLE IF NOT EXISTS `UserDog` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  `lastConnectionDate` datetime DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `userdog`
--

INSERT INTO `UserDog` (`id`, `email`, `pwd`, `lastConnectionDate`, `lastName`, `firstName`, `country`, `city`) VALUES
(1, 'ange.gnamba@gmail.com', 'word', '2019-01-08 05:21:24', 'Ange', 'Gnamba', 'Suisse', 'Genève'),
(2, 'marine.cerdelli@gmail.com', 'word', '2019-01-15 15:54:22', 'Marine', 'Cerdelli', 'Suisse', 'Genève'),
(3, 'youka.oulai@gmail.com', 'word', '2019-01-12 12:12:12', 'Youka', 'Oulaï', 'Côte d\'Ivoire', 'Abidjan'),
(4, 'eulalia.botthelo@gmail.com', 'word', '2019-01-15 15:15:24', 'Eulalia', 'Botthelo', 'Suisse', 'Genève'),
(5, 'alessandro.damato@gmail.com', 'word', '2019-01-20 20:12:32', 'Alessandro', 'Damato', 'Japon', 'Tokyo'),
(6, 'odile.bouo@hotmail.com', 'word', '2019-01-15 15:15:15', 'Odile', 'Bouo', 'Suisse', 'Vaud'),
(7, 'youka.damato@gmail.com', 'word', '2019-01-10 01:10:01', 'Youka', 'Damato', 'Japon', 'Tokyo'),
(8, 'sabine.bouo@yahoo.fr', 'word', '2019-01-08 21:21:24', 'Sabine', 'Bouo', 'France', 'Paris'),
(9, 'marina.lou@gmail.com', 'word', '2019-01-08 05:21:24', 'Marina', 'Lou', 'France', 'Paris'),
(10, 'mohamad.mabarak@gmail.com', 'word', '2019-01-30 12:12:13', 'Mohamad', 'Mabarak', 'Suisse', 'Genève'),
(11, 'test@fonction.ch', 'test1234', NULL, NULL, NULL, NULL, NULL),
(12, 'test@mardi.ch', 'didi', NULL, NULL, NULL, NULL, NULL),
(13, 'test@fonction.ch', 'test1234', NULL, NULL, NULL, NULL, NULL),
(14, 'sebastien@gmail.com', 'word', NULL, NULL, NULL, NULL, NULL),
(15, 'yousra@gmail.com', '$2y$10$HT9JLJ/Oz7kuovNfKVw5oeAka5UKYWy2mFVZKtmyEO4UkRRrchZfK', '2019-02-14 08:28:38', 'Yousra', 'Test', NULL, NULL),
(16, 'momo@gmail.com', '$2y$10$0f0.7Jl9gAKDcdjL98jFnOJDuXzOe5AZw2c92Was05kKdd4sq15ne', NULL, NULL, NULL, NULL, NULL),
(17, 'test@gmail.test', '$2y$10$nfmYfz4gBGAeKqY.GBjqHOg2BRFIcFx0KUdi/rQOKwu6X5oohXFY6', NULL, NULL, NULL, NULL, NULL),
(18, 'marine@test.ch', '$2y$10$3GNy6raxvmis1YkG69JR0elRyDPKK1B5jAVKDAUbMEr.vp0XRreJm', NULL, NULL, NULL, NULL, NULL),
(19, 'marine@gmail.com', '$2y$10$2qGmO6USLVHxZE8i3NIHV.M.J5f7mQS/Nmzs0TqyJ5Afgw1/vIsbS', '2019-02-14 07:42:34', NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
