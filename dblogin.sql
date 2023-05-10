-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 25 déc. 2022 à 16:21
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dblogin`
--

-- --------------------------------------------------------

--
-- Structure de la table `cmd`
--

CREATE TABLE `cmd` (
  `article` varchar(255) NOT NULL,
  `quantite` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `daten` date NOT NULL,
  `cin` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `ad1` varchar(255) NOT NULL,
  `Date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cmd`
--

INSERT INTO `cmd` (`article`, `quantite`, `nom`, `prenom`, `username`, `daten`, `cin`, `code`, `ville`, `ad1`, `Date`) VALUES
('Carte Sim 4G TT', '1', 'baha', 'trabelsi', 'admin', '2001-02-13', '14281951', '9070', 'My City', '1234 Main Street', '2022-12-25 15:18:58.982867');

-- --------------------------------------------------------

--
-- Structure de la table `msg`
--

CREATE TABLE `msg` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `msg`
--

INSERT INTO `msg` (`username`, `email`, `message`) VALUES
('admin', 'baha.trabelsi@gmail.com', 'hello\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `id`) VALUES
('admin', 'admin@telecom.com', '21232f297a57a5a743894a0e4a801fc3', 1),
('baha', 'baha.trabelsi@gmail.com', '38cc20041eaa6e03c92c0a7d17b21b9a', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
