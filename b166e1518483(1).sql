-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 19, 2021 at 05:01 PM
-- Server version: 10.3.29-MariaDB-0+deb10u1
-- PHP Version: 7.3.27-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b166e1518483`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminInfo`
--

CREATE TABLE `adminInfo` (
  `id` int(10) UNSIGNED NOT NULL,
  `pseudo` varchar(256) COLLATE latin1_general_ci NOT NULL,
  `pwd` varchar(256) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `adminInfo`
--

INSERT INTO `adminInfo` (`id`, `pseudo`, `pwd`) VALUES
(2, 'babyweb', '$2y$10$cYCiRKIY1zxI1NtP/OjWjuyOvVe62LxVX7ZnlacUIQzwGOeHu5Yx6');

-- --------------------------------------------------------

--
-- Table structure for table `alaune`
--

CREATE TABLE `alaune` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(256) COLLATE latin1_general_ci NOT NULL,
  `imgAdress` varchar(256) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `alaune`
--

INSERT INTO `alaune` (`id`, `title`, `imgAdress`) VALUES
(41, 'Bacon Burger', 'app/Public/back/img/aLaUne/bacon-burger.jpg'),
(42, 'La Méditérranéenne', 'app/Public/back/img/aLaUne/pizza-mediteraneenne.jpg'),
(43, 'La Pepperoni ', 'app/Public/back/img/aLaUne/pizza-peperonni.jpg'),
(44, 'Le Rustik Burger', 'app/Public/back/img/aLaUne/rustic-burger.jpg'),
(45, 'La Végétarienne', 'app/Public/back/img/aLaUne/pizza-veg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `boissons`
--

CREATE TABLE `boissons` (
  `id` int(10) UNSIGNED NOT NULL,
  `productName` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `productDescription` varchar(256) COLLATE latin1_general_ci NOT NULL,
  `prix` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isAlcool` varchar(10) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `boissons`
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
(17, 'Breizh Cola', 'Bouteille de Breizh cola 1.5L', '3', ''),
(19, 'sfs', 'dss', '6', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `burger`
--

CREATE TABLE `burger` (
  `id` int(10) UNSIGNED NOT NULL,
  `productName` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `productDescription` varchar(256) COLLATE latin1_general_ci NOT NULL,
  `prix` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `burger`
--

INSERT INTO `burger` (`id`, `productName`, `productDescription`, `prix`) VALUES
(1, 'Le Westfarm', 'Compotée de tomates, viande de boeuf, fromage de chèvre, salade roquette, moutarde au miel ', 10),
(2, 'Le Depp Forest', 'Champignons viande de boeuf, cuisinés, oignons caramélisées, tomme noire I.G.P, sauce BBQ', 8),
(6, 'Le Sudiste', 'Filet de poulet mariné, pesto, salade iceberg, poivrons confits, chèvres frais', 8),
(7, 'Le Montagnard', 'Viande de boeuf, compotée d\'oignons caramélisés, morbier, lard griléé, sauce moutarde à l\'ancienne', 8),
(8, 'Le Bzh', 'Viande de boeuf, pommes confites, andouille artisanale, sauce au cidre', 8),
(16, 'Le Bacon', 'Bacon, salade iceberg, tomates, pickles, oignons rouges, sauce maison', 8),
(18, 'Le Burger', 'Tomates, viande de boeuf, salades iceberg, pickles, oignons rouges, sauce maison', 7);

-- --------------------------------------------------------

--
-- Table structure for table `livreur`
--

CREATE TABLE `livreur` (
  `id` int(10) UNSIGNED NOT NULL,
  `livreurName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `livreurPhone` varchar(255) CHARACTER SET utf8 NOT NULL,
  `livreurEmail` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `livreur`
--

INSERT INTO `livreur` (`id`, `livreurName`, `livreurPhone`, `livreurEmail`) VALUES
(1, 'zing-hang', '06 00 55 88 73 ', 'zing_hang@yoh.cn'),
(3, 'Yann4', '06 10 10 45 2600', 'yannLeLivreur@tre.ss'),
(4, 'ernesto', '06 10 12 48 78', 'speedyGonzales@desert.us');

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `id` int(10) UNSIGNED NOT NULL,
  `lastname` varchar(256) COLLATE latin1_general_ci NOT NULL,
  `mail` varchar(256) COLLATE latin1_general_ci NOT NULL,
  `sujet` varchar(256) COLLATE latin1_general_ci NOT NULL,
  `content` varchar(1024) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`id`, `lastname`, `mail`, `sujet`, `content`) VALUES
(11, 'joe', 'joedenantes@gmx.fr', 'mexique', 'viva mexico'),
(14, 'Louis', 'louis.masters@gmail.com', 'Pizzas Express', 'Hey\r\n\r\nBuy medical disposable face mask to protect your loved ones from the deadly CoronaVirus.  The price is $0.28 each.  If interested, please check our site: pharmacyoutlets.online\r\n\r\nTo your success,\r\n\r\nLouis\r\nPizzas Express'),
(15, 'Maximilian', 'fegan.maximilian@gmail.com', 'Maximilian Fegan', 'New Multifunction Anti-theft Waterproof Sling Bag\r\n\r\nThe best ever SUPER Sling Bag: Drop-proof/Anti-theft/Scratch-resistant/USB Charging\r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide Shipping for a LIMITED time\r\n\r\nBuy now: fashiondaily.online\r\n\r\nThe Best, \r\n\r\nMaximilian\r\nPizzas Express');

-- --------------------------------------------------------

--
-- Table structure for table `orderList`
--

CREATE TABLE `orderList` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_price` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `livreur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orderList`
--

INSERT INTO `orderList` (`order_id`, `order_date`, `order_price`, `user_id`, `livreur_id`) VALUES
(2, '2021-07-13', 36, 28, 3),
(43, '2021-08-01', 25, 23, 3),
(44, '2021-07-13', 49, 28, 1),
(45, '2021-07-05', 55, 23, 3),
(46, '2021-07-05', 50, 28, 1),
(47, '2021-08-02', 45, 1, 1),
(48, '2021-07-12', 12, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pizzas`
--

CREATE TABLE `pizzas` (
  `id` int(10) UNSIGNED NOT NULL,
  `productName` varchar(256) COLLATE latin1_general_ci NOT NULL,
  `productDescription` varchar(1024) COLLATE latin1_general_ci NOT NULL,
  `prixMoyenne` smallint(5) UNSIGNED NOT NULL,
  `prixLarge` smallint(5) UNSIGNED NOT NULL,
  `isVeg` varchar(256) COLLATE latin1_general_ci DEFAULT NULL,
  `isPigless` varchar(256) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pizzas`
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
-- Table structure for table `reduc`
--

CREATE TABLE `reduc` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(256) COLLATE latin1_general_ci NOT NULL,
  `periode` varchar(256) COLLATE latin1_general_ci NOT NULL,
  `condition1` varchar(256) COLLATE latin1_general_ci NOT NULL,
  `condition2` varchar(256) COLLATE latin1_general_ci NOT NULL,
  `validite` varchar(256) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `reduc`
--

INSERT INTO `reduc` (`id`, `title`, `periode`, `condition1`, `condition2`, `validite`) VALUES
(1, '2ème Pizza à 6€', 'Du lundi au samedi (sauf jours fériés)', 'Minimum de livraison : 15€', 'Valable sur pizzas de prix égal ou inferieur', '31/10/2021'),
(4, '- 2€ sur votre commande', 'Dimanche uniquement', 'Pour 3 pizzas achetées', '', '31/11/2020'),
(5, '1.25L de soda offert ', 'Lundi au jeudi', 'Pour 2 pizzas achetées', '', '31/10/2021'),
(6, '1.25L de soda offert', 'Du vendredi au samedi', 'Pour 3 pizzas achetées', '', '31/10/2021'),
(7, '2 pizzas moyenne 22€50', 'Du vendredi au dimanche.', '', '', '30/10/2021'),
(8, '2 pizzas larges + 1.25L de soda pour 29€50', 'Du lundi au jeudi', 'En livraison', '', '31/10/2021');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(256) COLLATE latin1_general_ci NOT NULL,
  `imgAdress` varchar(256) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `imgAdress`) VALUES
(25, 'livreur de pizza souriant sur fond jaune', 'app/Public/back/img/slides/slide-jaune.jpg'),
(26, 'livreuse de pizza souriante en robe jaune sur fond bleu', 'app/Public/back/img/slides/slide-bleu.jpg'),
(27, 'livreur de pizza souriant sur fond violet', 'app/Public/back/img/slides/slide-violette.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userName` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `userFirstname` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `userAdress` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `userPhone` int(11) NOT NULL,
  `userMail` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `userPWD` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `userFirstname`, `userAdress`, `userPhone`, `userMail`, `userPWD`) VALUES
(1, 'anonyme', '0', '0', 0, '0', '0'),
(23, 'fabien', 'le grand', 'Les Duisis 91580 Chauffour-lès-Étréchy', 12, 'fabien@befa.fr', '$2y$10$i8ImVXt9m3AQ7g6IxzsiHubPjJbeNOxsRawtWjhNFhrfENA.wtxk.'),
(28, 'martine', 'leroy', '45 Avenue Pasteur 49100 Angers', 777, 'martineLeroy@yahoo.fr', '$2y$10$7aKPvOV4Cp8XW/Ome6IUye.e.876hC2VJCuVUlkCuzelHK1lOQNRu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminInfo`
--
ALTER TABLE `adminInfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alaune`
--
ALTER TABLE `alaune`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boissons`
--
ALTER TABLE `boissons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `burger`
--
ALTER TABLE `burger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livreur`
--
ALTER TABLE `livreur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderList`
--
ALTER TABLE `orderList`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reduc`
--
ALTER TABLE `reduc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminInfo`
--
ALTER TABLE `adminInfo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `alaune`
--
ALTER TABLE `alaune`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `boissons`
--
ALTER TABLE `boissons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `burger`
--
ALTER TABLE `burger`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `livreur`
--
ALTER TABLE `livreur`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `reduc`
--
ALTER TABLE `reduc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
