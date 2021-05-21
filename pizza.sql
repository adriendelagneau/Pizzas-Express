-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 14 avr. 2021 à 21:30
-- Version du serveur :  10.3.27-MariaDB-0+deb10u1
-- Version de PHP : 7.3.27-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `b166e1518483`
--
CREATE DATABASE IF NOT EXISTS `b166e1518483` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `b166e1518483`;

-- --------------------------------------------------------

--
-- Structure de la table `alaune`
--

CREATE TABLE `alaune` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(256) NOT NULL,
  `imgAdress` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `alaune`
--

INSERT INTO `alaune` (`id`, `title`, `imgAdress`) VALUES
(36, 'La Vegetarienne', 'app/Public/back/img/aLaUne/pizza-1.jpg'),
(37, 'La Peperonni', 'app/Public/back/img/aLaUne/pizza-2.jpg'),
(38, 'Le Bacon Burger', 'app/Public/back/img/aLaUne/burger-3.jpg'),
(39, 'La Méditéranéenne', 'app/Public/back/img/aLaUne/pizza-3.jpg'),
(40, 'Le Rustique', 'app/Public/back/img/aLaUne/hamburger-2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `boissons`
--

CREATE TABLE `boissons` (
  `id` int(10) UNSIGNED NOT NULL,
  `productName` varchar(30) NOT NULL,
  `productDescription` varchar(256) NOT NULL,
  `prix` varchar(100) NOT NULL,
  `isAlcool` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `boissons`
--

INSERT INTO `boissons` (`id`, `productName`, `productDescription`, `prix`, `isAlcool`) VALUES
(8, ' Rosé ', 'Bouteille de vin italien Bardolino 75 cl', '8', 'on'),
(9, 'Rouge', 'Bouteille de vin Côte du Rhône 75 cl', '8', 'on'),
(10, 'Heineken ', 'Bouteille de bière  Heineken  75 cl', '5', 'on'),
(11, 'Desperados ', 'Bouteille de bières Desperados 0.75 cl', '5', 'on'),
(12, 'San Pellegrino', 'Bouteille San Pellegrino 1L', '3', ''),
(13, ' Oasis', 'Bouteille de Oasis tropical 2L', '4', ''),
(14, 'Nestea ', 'Bouteille de Nestea pêche 1.5L', '3', ''),
(15, ' Breizh Tea', 'Bouteille de  Breizh tea 1.5L', '3', ''),
(16, 'Coca-Cola', 'Bouteille de Coca-Cola 1.5L', '3', ''),
(17, 'Breizh Cola', 'Bouteille de Breizh cola 1.5L', '3', '');

-- --------------------------------------------------------

--
-- Structure de la table `burger`
--

CREATE TABLE `burger` (
  `id` int(11) UNSIGNED NOT NULL,
  `productName` varchar(30) NOT NULL,
  `productDescription` varchar(256) NOT NULL,
  `prix` tinyint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `burger`
--

INSERT INTO `burger` (`id`, `productName`, `productDescription`, `prix`) VALUES
(1, 'Le Westfarm', 'Compotée de tomates, viande de boeuf, fromage de chèvre, salade roquette, moutarde au miel ', 8),
(2, 'Le Depp Forest', 'Champignons viande de boeuf, cuisinés, oignons caramélisées, tomme noire I.G.P, sauce BBQ', 8),
(6, 'Le Sudiste', 'Filet de poulet mariné, pesto, salade iceberg, poivrons confits, chèvres frais', 8),
(7, 'Le Montagnard', 'Viande de boeuf, compotée d\'oignons caramélisés, morbier, lard griléé, sauce moutarde à l\'ancienne', 8),
(8, 'Le Bzh', 'Viande de boeuf, pommes confites, andouille artisanale, sauce au cidre', 8),
(16, 'Le Bacon', 'Bacon, salade iceberg, tomates, pickles, oignons rouges, sauce maison', 7),
(17, 'Le Cheese', 'Cheddar affiné, tomates, salades iceberg, pickles, oignons rouges, sauce maison', 7),
(18, 'Le Burger', 'Tomates, viande de boeuf, salades iceberg, pickles, oignons rouges, sauce maison', 6);

-- --------------------------------------------------------

--
-- Structure de la table `mails`
--

CREATE TABLE `mails` (
  `id` int(255) UNSIGNED NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `adress` varchar(256) NOT NULL,
  `mail` varchar(256) CHARACTER SET utf8 NOT NULL,
  `sujet` varchar(256) NOT NULL,
  `content` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `mails`
--

INSERT INTO `mails` (`id`, `lastname`, `firstname`, `adress`, `mail`, `sujet`, `content`) VALUES
(2, 'liens', 'fezf', '4 Rue Lecourbe 75015 Paris', 'tintin@tintin.xyz', 'conquete du monde ', 'efy er uyeyr eryery uy eryfr , &quot;\'o &quot;\'ui &quot;\'&quot;\'io&quot;\'i &quot;\'ioa');

-- --------------------------------------------------------

--
-- Structure de la table `pizzas`
--

CREATE TABLE `pizzas` (
  `id` int(10) UNSIGNED NOT NULL,
  `productName` varchar(256) NOT NULL,
  `productDescription` varchar(1024) NOT NULL,
  `prixMoyenne` smallint(5) UNSIGNED NOT NULL,
  `prixLarge` smallint(5) UNSIGNED NOT NULL,
  `isVeg` varchar(256) DEFAULT NULL,
  `isPigless` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pizzas`
--

INSERT INTO `pizzas` (`id`, `productName`, `productDescription`, `prixMoyenne`, `prixLarge`, `isVeg`, `isPigless`) VALUES
(20, 'Calzone', 'Tomate, mozzarella, jambon, champignons, œuf', 9, 13, '', ''),
(21, 'Chèvre Miel', 'Tomate, mozzarella, jambon, chèvre, crème fraîche, miel', 9, 13, '', ''),
(22, 'Burger', 'Sauce BBQ, mozzarella, oignons, bœuf haché, œuf, dés de tomate, cheddar', 10, 14, '', 'on'),
(24, 'Margharita', ' Tomate, double mozzarella, origan', 7, 11, 'on', 'on'),
(25, 'Végétarienne', 'Tomate, mozzarella, champignons, oignons, poivrons, dés de tomate, herbes, persillade', 9, 13, 'on', 'on'),
(35, 'Orientale', 'Tomate, mozzarella, oignons, poivrons, dés de tomates, merguez, olives, origan', 9, 13, '', 'on'),
(36, 'Fajitas', 'Tomate épicée, mozzarella, poulet, oignons, poivrons, chedar, crème fraîche, guacamole', 9, 13, NULL, 'on'),
(37, 'Nordique', 'Crème fraîche, mozzarella, noix de Saint-Jacques, crevettes, saumon frais, persillade, citron en quartier', 10, 14, 'on', 'on'),
(38, '4 fromages', 'Tomate, mozzarella, cheddar, chèvre, reblochon, crème fraîche', 9, 13, 'on', 'on');

-- --------------------------------------------------------

--
-- Structure de la table `reduc`
--

CREATE TABLE `reduc` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(256) NOT NULL,
  `periode` varchar(256) NOT NULL,
  `condition1` varchar(256) NOT NULL,
  `condition2` varchar(256) NOT NULL,
  `validite` varchar(256) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reduc`
--

INSERT INTO `reduc` (`id`, `title`, `periode`, `condition1`, `condition2`, `validite`) VALUES
(1, '2ème Pizza à 6€', 'Du lundi au samedi (sauf jours fériés)', 'Minimum de livraison : 15€', 'Valable sur pizzas de prix égal ou inferieur', '31/10/2021'),
(4, '- 2€ sur votre commande', 'Dimanche uniquement', 'Pour 3 pizzas achetées', '', '31/11/2020'),
(5, '1.25L de soda offert ', 'Lundi au jeudi', 'Pour 2 pizzas achetées', '', '31/10/2021'),
(6, '1.25L de soda offert', 'Du vendredi au samedi', 'Pour 3 pizzas achetées', '', '31/10/2021'),
(7, '2 pizzas moyenne 22€50', 'Du vendredi au dimanche', '', '', '30/10/2021'),
(8, '2 pizzas larges + 1.25L de soda pour 29€50', 'Du lundi au jeudi', 'En livraison', '', '31/10/2021');

-- --------------------------------------------------------

--
-- Structure de la table `slider`
--

CREATE TABLE `slider` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(256) NOT NULL,
  `imgAdress` varchar(256) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `slider`
--

INSERT INTO `slider` (`id`, `title`, `imgAdress`) VALUES
(14, 'slide1', 'app/Public/back/img/slides/pizza-1442946_1280.jpg'),
(15, 'slide2', 'app/Public/back/img/slides/pizza-1702652_1280.jpg'),
(19, 'slides4', 'app/Public/back/img/slides/pizza-2810589_1280.jpg'),
(23, 'slides4', 'app/Public/back/img/slides/clipart1573703.png');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `pseudo` varchar(256) NOT NULL,
  `pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `pwd`) VALUES
(2, 'babyweb', '$2y$10$cYCiRKIY1zxI1NtP/OjWjuyOvVe62LxVX7ZnlacUIQzwGOeHu5Yx6');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `alaune`
--
ALTER TABLE `alaune`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `boissons`
--
ALTER TABLE `boissons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `burger`
--
ALTER TABLE `burger`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reduc`
--
ALTER TABLE `reduc`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `alaune`
--
ALTER TABLE `alaune`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `boissons`
--
ALTER TABLE `boissons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `burger`
--
ALTER TABLE `burger`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `reduc`
--
ALTER TABLE `reduc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
