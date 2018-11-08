-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8890
-- Généré le :  jeu. 08 nov. 2018 à 08:18
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `events_nantes`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Concert'),
(2, 'Sport');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(50) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_id` varchar(200) NOT NULL,
  `name` varchar(250) NOT NULL,
  `place` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `category_id`, `user_id`, `name`, `place`, `date`, `price`, `date_created`) VALUES
(4, 1, '1', 'Tragédie ', 'Warehouse Nantes', '2018-11-27', '14', '2018-11-07 14:59:04'),
(3, 1, '1', 'Marc Lavoine', 'Zénith Nantes', '2018-11-24', '39', '2018-11-07 14:56:29'),
(5, 1, '1', 'Cœur de Pirate ', 'Stéréolux Nantes', '2018-11-30', '33', '2018-11-07 14:59:55'),
(6, 1, '1', 'Sans Modération ', 'Zénith de Nantes ', '2018-12-08', '49', '2018-11-07 15:00:52'),
(7, 1, '1', 'DR Peacok/ Darktek ', 'Warehouse Nantes', '2018-12-09', '19', '2018-11-07 15:01:38'),
(8, 2, '1', 'Euro Féminin 2018 - Handball ', 'Palais de Sport', '2018-12-04', '5', '2018-11-07 15:03:00'),
(9, 2, '1', 'Open National Nantes Atlantique ', 'Terrain Régional de Tennis Vertou', '2018-11-04', '60', '2018-11-07 15:03:39'),
(10, 2, '1', 'Nantes - Lille | Basket ', 'Parc des Expo Nantes', '2018-11-02', '10', '2018-11-07 15:05:04'),
(11, 2, '1', 'HBC Nantes - Fenix Toulouse', 'Palais des sport', '2018-11-21', '35', '2018-11-07 15:05:48');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `date_created`) VALUES
(1, 'ATAS', 'Dilek', 'atas.dilek9@gmail.com', 'declenico97', '2018-11-07 11:18:01');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
