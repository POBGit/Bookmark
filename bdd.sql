-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 13 mars 2019 à 19:10
-- Version du serveur :  5.7.17
-- Version de PHP :  7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `page-accueil`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
                             `idUtilisateur` int(11) NOT NULL,
                             `sNom` varchar(100) CHARACTER SET latin1 NOT NULL,
                             `sPrenom` varchar(100) CHARACTER SET latin1 NOT NULL,
                             `sCourriel` varchar(255) CHARACTER SET latin1 NOT NULL,
                             `sMotDePasse` varchar(250) CHARACTER SET latin1 NOT NULL,
                             `sAvatar` varchar(150) CHARACTER SET latin1 NOT NULL,
                             `sDateInscription` datetime NOT NULL,
                             `sLangue` varchar(5) COLLATE utf8_bin NOT NULL DEFAULT 'fr',
                             `sTheme` enum('auto','light','dark') COLLATE utf8_bin NOT NULL DEFAULT 'auto',
                             `sMoteurRecherche` enum('google','duckduckgo','yahoo','bing','ecosia') COLLATE utf8_bin NOT NULL DEFAULT 'google',
                             `sSources` enum('google') COLLATE utf8_bin NOT NULL DEFAULT 'google'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtilisateur`, `sNom`, `sPrenom`, `sCourriel`, `sMotDePasse`, `sAvatar`, `sDateInscription`, `sLangue`, `sTheme`, `sMoteurRecherche`, `sSources`) VALUES
(1, 'Bourdeau', 'Pier-Olivier', 'pierrot_bourdeau@hotmail.com', '', 'P1020673.jpg', '2019-03-12 00:00:00', 'fr', 'auto', 'google', 'google'),
(2, 'Corbeil', 'Ulysse', 'ulysse.corbeil@gmail.com', 'test', 'image_moi.jpg', '2019-03-12 00:00:00', 'fr', 'auto', 'google', 'google');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUtilisateur`),
  ADD UNIQUE KEY `sCourriel` (`sCourriel`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
