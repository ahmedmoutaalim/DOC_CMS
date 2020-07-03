-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 02 juil. 2020 à 19:22
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cms`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_content` text NOT NULL,
  `article_timestamp` int(11) NOT NULL DEFAULT current_timestamp(),
  `article_img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`article_id`, `article_title`, `article_content`, `article_timestamp`, `article_img`) VALUES
(23, 'title', ' book', 1593360415, ''),
(33, 'new one', 'zfjeofjeo^fêoa<br />\r\npepafaepifaef', 1593617503, ''),
(34, 'book', '\"The years, of which I have spoken to you, when I pursued the inner images, were the most important time of my life. Everything else is to be derived from this. It began at that time, and the later details hardly matter anymore. My entire life consisted in elaborating what had burst forth from the unconscious and flooded me like an enigmatic stream and threatened to break me. That was the stuff and material for more than only one life. Everything later was merely the outer classification, the scientific elaboration, and the integration into life. But the numinous beginning, which contained everything, was then.\" These are the words of the psychologist C. G. Jung in 1957, referring to the decades he worked on The Red Book from 1914 to 1930. Although its existence has been known for more than eighty years, The Red Book was never published or made available to the wide audience of Jung\'s students and followers. Nothing less than the central book of Jung\'s oeuvre, it is being published now in a full facsimile edition with a contextual essay and notes by the noted Jung scholar Sonu Shamdasani and translated by Mark Kyburz, John Peck, and Sonu Shamdasani. It will now be possible to study Jung\'s self-experimentation through primary documentation rather than fantasy, gossip, and speculation, and to grasp the genesis of his later work. For nearly a century, such a reading has simply not been possible, and the vast literature on his life and work has lacked access to the single most important document. This publication opens the possibility of a new era in understanding Jung\'s work. It provides a unique window into how he recovered his soul and constituted a psychology. It is possibly the most influential hitherto unpublished work in the history of psychology. This exact facsimile of The Red Book reveals not only an extraordinary mind at work but also the hand of a gifted artist and calligrapher. Interspersed among more than two hundred lovely illuminated pages are paintings whose influences range from Europe, the Middle East, and the Far East to the native art of the new world. The Red Book, much like the handcrafted \"Books of Hours\" from the Middle Ages, is unique. Both in terms of its place in Jung\'s development and as a work of art, its publication is a landmark.', 1593619239, ''),
(41, 'ahmed', 'new article', 1593700629, 0x37363334363264382d353466612d343737362d613533382d3232333162383362383261612e6a7067),
(42, 'lkgohih', 'lgohiil', 1593700788, 0x416e6e6f746174696f6e20323032302d30362d3231203134313234382e706e67),
(43, 'omar', 'jozfjoaofjaf', 1593700901, 0x4669636869657220372e706e67),
(44, 'ahmed', 'oqfpkpdl', 1593701067, 0x4669636869657220372e706e67),
(45, 'jj', 'hh', 1593701641, 0xc3a96cc3a96d656e742d312e706e67),
(46, 'kkkkk', 'llllll', 1593701955, 0xc3a96cc3a96d656e742d312e706e67),
(47, 'azazazaz', 'ggdggdgg', 1593702044, 0xc3a96cc3a96d656e742d312e706e67),
(48, 'lalalalalala', 'apapapap', 1593702109, 0xc3a96cc3a96d656e742d312e706e67),
(49, 'OIPOPO', 'PO¨¨P¨P', 1593707876, 0xc3a96cc3a96d656e742d312e706e67);

-- --------------------------------------------------------

--
-- Structure de la table `suggest`
--

CREATE TABLE `suggest` (
  `suggest_id` int(11) NOT NULL,
  `suggest_name` varchar(255) NOT NULL,
  `suggest_content` text NOT NULL,
  `suggest_timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `suggest`
--

INSERT INTO `suggest` (`suggest_id`, `suggest_name`, `suggest_content`, `suggest_timestamp`) VALUES
(32, 'aefaef', 'azdz', 1593701560);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'ahmed', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Index pour la table `suggest`
--
ALTER TABLE `suggest`
  ADD PRIMARY KEY (`suggest_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pour la table `suggest`
--
ALTER TABLE `suggest`
  MODIFY `suggest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
