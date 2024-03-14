-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 14 Mars 2024 à 08:13
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `horoscope`
--

-- --------------------------------------------------------

--
-- Structure de la table `astrologie`
--

CREATE TABLE `astrologie` (
  `signe` varchar(40) DEFAULT NULL,
  `horoscope` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `astrologie`
--

INSERT INTO `astrologie` (`signe`, `horoscope`) VALUES
('Bélier', 'Vous devez faire les efforts les plus sérieux pour acquérir un bon niveau.'),
('Taureau', 'Une de vos plus grandes qualités est la capacité de saisir les théories.'),
('Gémeaux', 'De temps à autre, admettez que vous nêtes pas le seul à raisonner avec logique.'),
('Cancer', 'La rapidité de votre intelligence risque de vous entrainer à négliger certains détails.'),
('Lion', 'Un effort vers la patience et la péersévérance sera pour vous grandement payant.'),
('Vierge', 'Faites leffort de vous concentrer.'),
('Balance', 'Vous avez une forte tendance à choisir les solutions astucieuses.'),
('Scorpion', 'Renoncez à imposer vos propres données et appliquez les méthodes apprises.'),
('Sagittaire', 'Pardonnez avec aisance et sans ambiguïté, mais nacceptez aucun extrême.'),
('Capricorne', 'Une certaines facilité ne doit pas vous détourner de lobjectif.'),
('Verseau', 'Ce travail vous demandera beaucoup dingéniosité'),
('Poisson', 'Votre esprit vif et limpide facilite la résolution des problèmes.');

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE `connexion` (
  `id` int(11) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `connexion`
--

INSERT INTO `connexion` (`id`, `login`, `mdp`, `role`) VALUES
(1, 'toto', '1234', '0'),
(2, 'john', 'password123', '0'),
(3, 'alice', 'qwerty', '0'),
(4, 'momo', 'azerty', '0'),
(5, 'carre', 'abcd', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
