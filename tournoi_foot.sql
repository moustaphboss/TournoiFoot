-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 15 mars 2018 à 13:15
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tournoi_foot`
--

-- --------------------------------------------------------

--
-- Structure de la table `arbitre`
--

CREATE TABLE `arbitre` (
  `idArbitre` int(255) NOT NULL,
  `nom_arbitre` varchar(30) NOT NULL,
  `prenom_arbitre` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `entraineur`
--

CREATE TABLE `entraineur` (
  `idEntraineur` int(100) NOT NULL,
  `nom_entraineur` varchar(30) DEFAULT NULL,
  `prenom_entraineur` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `entraineur`
--

INSERT INTO `entraineur` (`idEntraineur`, `nom_entraineur`, `prenom_entraineur`) VALUES
(33, 'Cherchesov', 'Stanislav'),
(34, 'Queiroz', 'Carlos'),
(35, 'Shin', 'Tae-yong'),
(36, 'Halilhodzic', 'Vahid'),
(37, 'Pizzi', 'Juan Antonio'),
(38, 'NULL', 'NULL'),
(39, 'Maaloul', 'Nabil'),
(40, 'Rohr', 'Gernot'),
(41, 'Renard', 'Herve'),
(42, 'Cisse', 'Aliou'),
(43, 'Cuper', 'Hector'),
(44, 'Osorio', 'Juan Carlos'),
(45, 'Ramirez', 'Oscar'),
(46, 'Gomez', 'Hernan Dario'),
(47, 'Bacchi', 'Adenor'),
(48, 'Tabarez', 'Oscar'),
(49, 'Sampaoli', 'Jorge'),
(50, 'Pekerman', 'Jose'),
(51, 'Gareca', 'Ricardo'),
(52, 'Deschamps', 'Didier'),
(53, 'Santos', 'Fernando'),
(54, 'Loew', 'Joachim'),
(55, 'NULL', 'NULL'),
(56, 'Nawalka', 'Adam'),
(57, 'Southgate', 'Gareth'),
(58, 'Lopetegui', 'Julen'),
(59, 'Martinez', 'Roberto'),
(60, 'Hallgrimsson', 'Heimir'),
(61, 'Petkovic', 'Vladimir'),
(62, 'Dalic', 'Zlatko'),
(63, 'Andersson', 'Janne'),
(64, 'Hareide', 'Age');

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `idEquipe` int(100) NOT NULL,
  `nom_equipe` varchar(30) NOT NULL,
  `flag` varchar(30) NOT NULL,
  `nom_entraineur` varchar(30) NOT NULL,
  `prenom_entraineur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`idEquipe`, `nom_equipe`, `flag`, `nom_entraineur`, `prenom_entraineur`) VALUES
(1, 'Russia', 'rusia', 'Cherchesov', 'Stanislav'),
(2, 'IR Iran', 'irn', 'Queiroz', 'Carlos'),
(3, 'South Korea', 'kor', 'Shin', 'Tae-yong'),
(4, 'Japan', 'japan', 'Halilhodzic', 'Vahid'),
(5, 'Saudi Arabia', 'arabia', 'Pizzi', 'Juan Antonio'),
(6, 'Australia', 'aus', 'NULL', 'NULL'),
(7, 'Tunisia', 'tun', 'Maaloul', 'Nabil'),
(8, 'Nigeria', 'nga', 'Rohr', 'Gernot'),
(9, 'Morocco', 'mar', 'Renard', 'Herve'),
(10, 'Senegal', 'sen', 'Cisse', 'Aliou'),
(11, 'Egypt', 'egy', 'Cuper', 'Hector'),
(12, 'Mexico', 'mex', 'Osorio', 'Juan Carlos'),
(13, 'Costa Rica', 'costa-rica', 'Ramirez', 'Oscar'),
(14, 'Panama', 'pan', 'Gomez', 'Hernan Dario'),
(15, 'Brazil', 'bra', 'Bacchi', 'Adenor'),
(16, 'Uruguay', 'uru', 'Tabarez', 'Oscar'),
(17, 'Argentina', 'arg', 'Sampaoli', 'Jorge'),
(18, 'Colombia', 'colombia', 'Pekerman', 'Jose'),
(19, 'Peru', 'per', 'Gareca', 'Ricardo'),
(20, 'France', 'fra', 'Deschamps', 'Didier'),
(21, 'Portugal', 'por', 'Santos', 'Fernando'),
(22, 'Germany', 'ger', 'Loew', 'Joachim'),
(23, 'Serbia', 'srb', 'NULL', 'NULL'),
(24, 'Poland', 'pol', 'Nawalka', 'Adam'),
(25, 'England', 'eng', 'Southgate', 'Gareth'),
(26, 'Spain', 'esp', 'Lopetegui', 'Julen'),
(27, 'Belgium', 'bel', 'Martinez', 'Roberto'),
(28, 'Iceland', 'isl', 'Hallgrimsson', 'Heimir'),
(29, 'Switzerland', 'sui', 'Petkovic', 'Vladimir'),
(30, 'Croatia', 'cro', 'Dalic', 'Zlatko'),
(31, 'Sweden', 'swe', 'Andersson', 'Janne'),
(32, 'Denmark', 'den', 'Hareide', 'Age');

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE `joueur` (
  `idJoueur` int(255) NOT NULL,
  `nom_joueur` varchar(30) NOT NULL,
  `prenom_joueur` varchar(50) NOT NULL,
  `numero` int(100) NOT NULL,
  `age` int(100) NOT NULL,
  `poste` enum('A','D','M','G') NOT NULL,
  `poids` int(150) NOT NULL,
  `taille` float NOT NULL,
  `nom_equipe` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `poule`
--

CREATE TABLE `poule` (
  `idPoule` int(100) NOT NULL,
  `nom_poule` varchar(30) NOT NULL,
  `equipe1` varchar(50) NOT NULL,
  `equipe2` varchar(50) NOT NULL,
  `equipe3` varchar(50) NOT NULL,
  `equipe4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `poule`
--

INSERT INTO `poule` (`idPoule`, `nom_poule`, `equipe1`, `equipe2`, `equipe3`, `equipe4`) VALUES
(1, 'A', 'Russia', 'Saudi Arabia', 'Egypt', 'Uruguay'),
(2, 'B', 'Portugal', 'Spain', 'Morocco', 'IR Iran'),
(3, 'C', 'France', 'Australia', 'Peru', 'Denmark'),
(4, 'D', 'Argentina', 'Iceland', 'Croatia', 'Nigeria'),
(5, 'E', 'Brazil', 'Switzerland', 'Costa Rica', 'Serbia'),
(6, 'F', 'Germany', 'Mexico', 'Sweden', 'South Korea'),
(7, 'G', 'Belgium', 'Panama', 'Tunisia', 'England'),
(8, 'H', 'Poland', 'Senegal', 'Colombia', 'Japan');

-- --------------------------------------------------------

--
-- Structure de la table `stade`
--

CREATE TABLE `stade` (
  `idStade` int(100) NOT NULL,
  `nom_stade` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `arbitre`
--
ALTER TABLE `arbitre`
  ADD PRIMARY KEY (`idArbitre`);

--
-- Index pour la table `entraineur`
--
ALTER TABLE `entraineur`
  ADD PRIMARY KEY (`idEntraineur`),
  ADD KEY `nom_entraineur` (`nom_entraineur`),
  ADD KEY `prenom_entraineur` (`prenom_entraineur`);

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`idEquipe`),
  ADD KEY `fk_nom_entraineur` (`nom_entraineur`),
  ADD KEY `fk_prenom_entraineur` (`prenom_entraineur`),
  ADD KEY `nom_equipe` (`nom_equipe`);

--
-- Index pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD PRIMARY KEY (`idJoueur`);

--
-- Index pour la table `poule`
--
ALTER TABLE `poule`
  ADD PRIMARY KEY (`idPoule`),
  ADD KEY `fk_equipe1` (`equipe1`),
  ADD KEY `fk_equipe2` (`equipe2`),
  ADD KEY `fk_equipe3` (`equipe3`),
  ADD KEY `fk_equipe4` (`equipe4`);

--
-- Index pour la table `stade`
--
ALTER TABLE `stade`
  ADD PRIMARY KEY (`idStade`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `arbitre`
--
ALTER TABLE `arbitre`
  MODIFY `idArbitre` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `entraineur`
--
ALTER TABLE `entraineur`
  MODIFY `idEntraineur` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `idEquipe` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `joueur`
--
ALTER TABLE `joueur`
  MODIFY `idJoueur` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `poule`
--
ALTER TABLE `poule`
  MODIFY `idPoule` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `stade`
--
ALTER TABLE `stade`
  MODIFY `idStade` int(100) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD CONSTRAINT `fk_nom_entraineur` FOREIGN KEY (`nom_entraineur`) REFERENCES `entraineur` (`nom_entraineur`),
  ADD CONSTRAINT `fk_prenom_entraineur` FOREIGN KEY (`prenom_entraineur`) REFERENCES `entraineur` (`prenom_entraineur`);

--
-- Contraintes pour la table `poule`
--
ALTER TABLE `poule`
  ADD CONSTRAINT `fk_equipe1` FOREIGN KEY (`equipe1`) REFERENCES `equipe` (`nom_equipe`),
  ADD CONSTRAINT `fk_equipe2` FOREIGN KEY (`equipe2`) REFERENCES `equipe` (`nom_equipe`),
  ADD CONSTRAINT `fk_equipe3` FOREIGN KEY (`equipe3`) REFERENCES `equipe` (`nom_equipe`),
  ADD CONSTRAINT `fk_equipe4` FOREIGN KEY (`equipe4`) REFERENCES `equipe` (`nom_equipe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
