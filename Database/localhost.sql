-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 22 Septembre 2016 à 21:26
-- Version du serveur :  5.6.30
-- Version de PHP :  5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `TutoCalculator`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `surname` varchar(250) NOT NULL,
  `level` int(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `pourcentage` int(250) NOT NULL,
  `score` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `answer` text NOT NULL,
  `questionComplete` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `level`, `password`, `pourcentage`, `score`, `email`, `answer`, `questionComplete`) VALUES
(2, 'c', 'c', 1, 'c', 0, 0, 'c@c', '', ''),
(3, 'b', 'b', 2, 'b', 0, 0, 'b@b', '', ''),
(4, 'tarek', 'rahou', 2, 'a', 0, 0, 'tarek@a', '', ''),
(5, 'v', 'v', 1, 'v', 0, 0, 'v@v', '', ''),
(6, 'Tarek', 'Rahou', 1, '15', 0, 0, 'tarekr@15', '', ''),
(7, 'test1', 'test2', 1, 'test', 0, 0, 'test@test', '', 'array (\r\n														"C1Q1"  => false,\r\n														"C1Q2" => false,\r\n														"C1Q3"   => false\r\n														"C1Q4"  => false,\r\n														"C2Q1" => false,\r\n														"C2Q2"   => false\r\n														"C2Q3"  => false,\r\n														"C2Q4" => false,\r\n														"C3Q1"   => false\r\n														"C3Q2"  => false,\r\n														"C3Q3" => false,\r\n														"C3Q4"   => false\r\n														"C4Q1"  => false,\r\n														"C4Q2" => false,\r\n														"C4Q3"   => false\r\n														"C4Q4"  => false\r\n														\r\n													);'),
(8, 'qdccds', 'dgdgw', 2, 'test1', 0, 0, 'test@test1', '', 'array (\r\n														''C1Q1''  => false,\r\n														''C1Q2'' => false,\r\n														''C1Q3''   => false\r\n														''C1Q4''  => false,\r\n														''C2Q1'' => false,\r\n														''C2Q2''   => false\r\n														''C2Q3''  => false,\r\n														''C2Q4'' => false,\r\n														''C3Q1''   => false\r\n														''C3Q2''  => false,\r\n														''C3Q3'' => false,\r\n														''C3Q4''   => false\r\n														''C4Q1''  => false,\r\n														''C4Q2'' => false,\r\n														''C4Q3''   => false\r\n														''C4Q4''  => false\r\n														\r\n													);'),
(9, 'tezff', 'fzfzf', 1, 'test2', 0, 0, 'test@test2', '', 'array (\r\n														''C1Q1''  => false,\r\n														''C1Q2'' => false,\r\n														''C1Q3''   => false,\r\n														''C1Q4''  => false,\r\n														''C2Q1'' => false,\r\n														''C2Q2''   => false,\r\n														''C2Q3''  => false,\r\n														''C2Q4'' => false,\r\n														''C3Q1''   => false,\r\n														''C3Q2''  => false,\r\n														''C3Q3'' => false,\r\n														''C3Q4''   => false,\r\n														''C4Q1''  => false,\r\n														''C4Q2'' => false,\r\n														''C4Q3''   => false,\r\n														''C4Q4''  => false\r\n														\r\n													);'),
(10, 'fdg', 'dg', 1, 'test3', 0, 0, 'test@test3', '', 'Array'),
(11, 'sdqd', 'qsdd', 1, 'test4', 0, 0, 'test@test4', '', 'a:16:{s:4:"C1Q1";i:0;s:4:"C1Q2";i:0;s:4:"C1Q3";i:0;s:4:"C1Q4";i:0;s:4:"C2Q1";i:0;s:4:"C2Q2";i:0;s:4:"C2Q3";i:0;s:4:"C2Q4";i:0;s:4:"C3Q1";i:0;s:4:"C3Q2";i:0;s:4:"C3Q3";i:0;s:4:"C3Q4";i:0;s:4:"C4Q1";i:0;s:4:"C4Q2";i:0;s:4:"C4Q3";i:0;s:4:"C4Q4";i:0;}'),
(12, 'sfqfsf', 'qsfqfdq', 1, 'test5', 0, 0, 'test@test5', '', 'Array'),
(13, 'csfq', 'fqfqf', 1, 'test6', 0, 0, 'test@test6', '', 'Array'),
(14, 'gfgxfgfg', 'fgdg', 1, 'test7', 0, 0, 'test@test7', '', 'Array'),
(15, 'gdsg', 'sgg', 1, 'test8', 0, 0, 'test@test8', '', 'Array'),
(16, 'qffsqfq', 'qfqffq', 2, 'test9', 0, 0, 'test@test9', '', 'Array'),
(17, 'qdfsdfs', 'sfsfsfs', 1, 'test10', 0, 0, 'test@test10', '', 'Array'),
(18, 'xcwv', 'wvwvwv', 1, 'test11', 100, 977, 'test@test11', '', 'Array'),
(19, 'dfgfgs', 'sgsfsg', 1, 'test12', 0, 0, 'test@test12', '', 'Array'),
(20, 'zfqfzf', 'fsqfsfsf', 1, 'test12', 113, 352, 'test@test12', '', 'Array'),
(21, 'sffsf', 'sfsf', 1, 'test13', 17, 72, 'test@test13', '', 'Array'),
(22, 'sdgdg', 'dgdg', 2, 'test14', 0, 0, 'test@test14', '', 'Array'),
(23, 'xvxvxv', 'xvwvwv', 1, 'test15', 6, 32, 'test@test15', '', 'Array'),
(24, 'Magnus', 'Lysfjord', 2, 'test16', 6, 45, 'test@test16', '', 'Array'),
(25, 'qfqfq', 'qffsfs', 1, 'test17', 5, 57, 'test@test17', '', 'Array');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
