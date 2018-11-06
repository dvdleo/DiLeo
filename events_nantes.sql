-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8890
-- Généré le :  mar. 06 nov. 2018 à 09:43
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `events_nantes`
--

-- --------------------------------------------------------

--
-- Structure de la table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `name_events` varchar(200) NOT NULL,
  `date_events` date NOT NULL,
  `date_created` datetime NOT NULL,
  `number_participants` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `concerts` varchar(250) NOT NULL,
  `sports` varchar(250) NOT NULL,
  `exhibitions` varchar(250) NOT NULL,
  `spectacles` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `date_concerts`
--

CREATE TABLE `date_concerts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `24-10-18` date NOT NULL,
  `27-10-18` date NOT NULL,
  `30-10-18` date NOT NULL,
  `08-11-18` date NOT NULL,
  `09-11-18` date NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `date_sports`
--

CREATE TABLE `date_sports` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `30-11-18` date NOT NULL,
  `29-10-18` date NOT NULL,
  `02-11-18` date NOT NULL,
  `21-11-18` date NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name_id` varchar(250) NOT NULL,
  `place_id` varchar(300) NOT NULL,
  `date_id` date NOT NULL,
  `price_id` decimal(10,0) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `name_concerts`
--

CREATE TABLE `name_concerts` (
  `id` int(50) NOT NULL,
  `category_id` int(50) NOT NULL,
  `Marc Lavoine` varchar(200) NOT NULL,
  `Tragedie` varchar(200) NOT NULL,
  `Cœur de Pirate` varchar(200) NOT NULL,
  `Sans Moderation` varchar(200) NOT NULL,
  `DR Peacok/ Darktek` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `name_sports`
--

CREATE TABLE `name_sports` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `Euro feminin Handball` varchar(200) NOT NULL,
  `Open National Nantes Atlantique` varchar(200) NOT NULL,
  `Nantes - Lille Basket` varchar(200) NOT NULL,
  `HBC Nantes - Fenix Toulouse` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `place_concerts`
--

CREATE TABLE `place_concerts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `Zenith Nantes` varchar(200) NOT NULL,
  `Warehouse Nantes` varchar(200) NOT NULL,
  `Stereolux Nantes` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `place_sports`
--

CREATE TABLE `place_sports` (
  `id` int(50) NOT NULL,
  `category_id` int(50) NOT NULL,
  `Parc Expo Nantes` varchar(300) NOT NULL,
  `Centre Régional de Tennis Vertout` varchar(300) NOT NULL,
  `Trocardiere Nantes` varchar(300) NOT NULL,
  `Palais des Sports` varchar(300) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `price_concerts`
--

CREATE TABLE `price_concerts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `39€` decimal(10,0) NOT NULL,
  `13.80€` decimal(10,0) NOT NULL,
  `33€` decimal(10,0) NOT NULL,
  `50€` decimal(10,0) NOT NULL,
  `18.80€` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `price_sports`
--

CREATE TABLE `price_sports` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `5€` decimal(10,0) NOT NULL,
  `60€` decimal(10,0) NOT NULL,
  `12.80€` decimal(10,0) NOT NULL,
  `20€` decimal(10,0) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `events` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `date_sports`
--
ALTER TABLE `date_sports`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `name_concerts`
--
ALTER TABLE `name_concerts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `place_concerts`
--
ALTER TABLE `place_concerts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `place_sports`
--
ALTER TABLE `place_sports`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `price_concerts`
--
ALTER TABLE `price_concerts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `price_sports`
--
ALTER TABLE `price_sports`
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
-- AUTO_INCREMENT pour la table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `date_sports`
--
ALTER TABLE `date_sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `name_concerts`
--
ALTER TABLE `name_concerts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `place_concerts`
--
ALTER TABLE `place_concerts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `place_sports`
--
ALTER TABLE `place_sports`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `price_concerts`
--
ALTER TABLE `price_concerts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `price_sports`
--
ALTER TABLE `price_sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

