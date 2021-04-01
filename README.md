# Projet-final
-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 01 Avril 2021 à 16:50
-- Version du serveur :  5.7.32-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `question`
--

-- --------------------------------------------------------

--
-- Structure de la table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `employees`
--

INSERT INTO `employees` (`id`, `name`) VALUES
(27, 'Dimitrigigan@gmail.com'),
(29, 'guhoi\r\n'),
(30, 'la couleur est bleu ou violet'),
(32, '');

-- --------------------------------------------------------

--
-- Structure de la table `recrute`
--

CREATE TABLE `recrute` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(75) NOT NULL,
  `num` varchar(10) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `postal` varchar(6) NOT NULL,
  `ville` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `recrute`
--

INSERT INTO `recrute` (`id`, `nom`, `prenom`, `email`, `num`, `adress`, `postal`, `ville`) VALUES
(1, 'Dimitri Pierre', 'GIGAN', 'Dimitrigigan@gmail.com', '0692893674', '', '97490', 'Sainte clotilde'),
(2, 'StÃ©phane', 'NARASSAMY', 'stephane.narassamy@ymanci.fr', '0692893674', '', '97400', 'Saint-Denis'),
(3, 'StÃ©phane', 'NARASSAMY', 'stephane.narassamy@ymanci.fr', '0692893674', '', '97400', 'Saint-Denis'),
(12, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `id` int(11) NOT NULL,
  `idq` int(11) NOT NULL,
  `idu` int(11) NOT NULL,
  `solve` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reponse`
--

INSERT INTO `reponse` (`id`, `idq`, `idu`, `solve`) VALUES
(1, 27, 2, 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'Simplon', '$2y$10$h05W7i/3j8NC/J6P6dmvxO/YAWMGmhAnKLIegNge78S1wHvKc3NoK', '2021-02-03 13:37:48'),
(2, 'superadmin', '$2y$10$syPSU0yXb1Wkj.w2lxLQ2ONkWiTPxIF14.TlZ4KWOKla.LQ1KWSBq', '2021-02-03 13:58:18'),
(3, 'dimitrigigan', '$2y$10$7SC1V1X4ej7SZq.iVYldI.1LomiNtNR1onqlXwV8/a.R5J5UKARQO', '2021-03-22 07:41:08'),
(4, 'bege', '$2y$10$tZWw8gyWkfcvJa7dufuVh.vI222g7OoHqCl/GliNBQM4Qrg/aaf1G', '2021-03-23 09:19:18'),
(5, 'abel', '$2y$10$lRNYvMZ3XurJXvOHKb/Hb.KQa.mieYYmDUxxe/dEaoT9kwPKp82.i', '2021-03-23 10:48:43');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recrute`
--
ALTER TABLE `recrute`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idq` (`idq`),
  ADD KEY `idu` (`idu`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `recrute`
--
ALTER TABLE `recrute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `reponse_ibfk_1` FOREIGN KEY (`idu`) REFERENCES `recrute` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reponse_ibfk_2` FOREIGN KEY (`idq`) REFERENCES `employees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
