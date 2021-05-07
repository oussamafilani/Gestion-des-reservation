-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 08:46 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservation_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nom_admin` varchar(25) NOT NULL,
  `prenom_admin` varchar(25)  NOT NULL,
  `fk_user` int(11) NOT NULL
);

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom_admin`, `prenom_admin`, `fk_user`) VALUES
(1, 'oussama', 'oussama', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bien`
--

CREATE TABLE `bien` (
  `id_Bien` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nom_bien` varchar(25)  NOT NULL,
  `type_chambre` varchar(25)  DEFAULT NULL,
  `vue_bien` varchar(25)  DEFAULT NULL,
  `lit_chambre` varchar(25) DEFAULT NULL,
  `categorie_age` varchar(25)  DEFAULT NULL,
  `prix_bien` int(11) NOT NULL
) ;

--
-- Dumping data for table `bien`
--

INSERT INTO `bien` (`id_Bien`, `nom_bien`, `type_chambre`, `vue_bien`, `lit_chambre`, `categorie_age`, `prix_bien`) VALUES
(1, 'appartement', NULL, NULL, NULL, 'Adult', 550),
(2, 'bungalow', NULL, NULL, NULL, 'Adult', 800),
(3, 'chambre', 'chambre simple', 'vue interieur', NULL, 'Adult', 300),
(4, 'chambre', 'chambre simple', 'vue exterieur', NULL, 'Adult', 360),
(5, 'chambre', 'chambre double', 'vue interieur', 'lit double', 'Adult', 450),
(6, 'chambre', 'chambre double', 'vue exterieur', 'lit double', 'Adult', 540),
(7, 'chambre', 'chambre double', 'vue interieur', 'deux lits simple', 'Adult', 450),
(8, 'supplement lit', NULL, NULL, NULL, 'Baby', 75),
(9, 'pas supplement lit', NULL, NULL, NULL, 'Baby', 0),
(10, '50% chambre', 'chambre simple', 'vue interieur', NULL, 'Mineur', 150),
(11, '70% chambre', 'chambre simple', 'vue interieur', NULL, 'Jeune', 210),
(12, 'chambre', 'chambre simple', 'vue interieur', NULL, 'Jeune', 300);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nom_client` varchar(25)  NOT NULL,
  `prenom_client` varchar(25) NOT NULL,
  `phone_client` varchar(30) DEFAULT NULL,
  `fk_user` int(11) NOT NULL
);

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `phone_client`, `fk_user`) VALUES
(1, 'hassan', 'hassan', '0625143658', 3),
(2, 'Ali', 'Ali', '0658472435', 4),
(3, 'SALHI', 'SALHI', '0222555447', 5),
(4, 'ilyas', 'ilyas', '0655442211', 6),
(5, 'farouk', 'farouk', '0655442211', 7),
(6, 'steve', 'steve', '0655442211', 8),
(7, 'sara', 'sara', '0655442211', 9),
(8, 'fadoua', 'fadoua', '0655442211', 10);

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE `panier` (
  `id_panier` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `fk_bien` int(11) NOT NULL,
  `fk_pension` int(11) NOT NULL,
  `fk_reservation` int(11) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `pension`
--

CREATE TABLE `pension` (
  `id_pension` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `prix_pension` int(11) NOT NULL,
  `type_pension` varchar(25) NOT NULL
);

--
-- Dumping data for table `pension`
--

INSERT INTO `pension` (`id_pension`, `prix_pension`, `type_pension`) VALUES
(1, 200, 'complete'),
(2, 150, 'demi1'),
(3, 140, 'demi2'),
(4, 0, 'sans');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `date_reservation` date NOT NULL,
  `debut_sejour` date NOT NULL,
  `fin_sejour` date NOT NULL,
  `fk_client` int(11) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `login` varchar(50)  NOT NULL,
  `password` varchar(50)  NOT NULL,
  `access` tinyint(1) NOT NULL
);

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `login`, `password`, `access`) VALUES
(1, 'oussama@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(3, 'hassan@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(4, 'ali@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(5, 'salhi@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(6, 'ilyas@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(7, 'farouk@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(8, 'steve@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(9, 'sara@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(10, 'fadoua@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(11, 'mariam@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(13, 'chafik@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(14, 'khadija@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(15, 'sir@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(16, 'jilali@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(17, 'khalid@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(18, 'azzouz@gmail.com', '202cb962ac59075b964b07152d234b70', 0);

--
-- Indexes for dumped tables
--
-- --------------------------------------------------------

--
-- Structure de la table `enfant`
--

CREATE TABLE `enfant` (
  `id_enfant` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `option_enfant` varchar(25) ,
  `pourcentage_prix` int(11) NOT NULL
);

--
-- Déchargement des données de la table `enfant`
--

INSERT INTO `enfant` (`id_enfant`, `option_enfant`, `pourcentage_prix`) VALUES
(1, 'option1', 25),
(2, 'option2', 0),
(3, 'option3', 50),
(4, 'option4', 100),
(5, 'option5', 70),
(6, 'sans', 0);

-- --------------------------------------------------------


--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `FK_adm` FOREIGN KEY (`fk_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `FK_cli` FOREIGN KEY (`fk_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `FK_bien_pa` FOREIGN KEY (`fk_bien`) REFERENCES `bien` (`id_Bien`),
  ADD CONSTRAINT `FK_pension_pa` FOREIGN KEY (`fk_pension`) REFERENCES `pension` (`id_pension`),
  ADD CONSTRAINT `FK_reservation_pa` FOREIGN KEY (`fk_reservation`) REFERENCES `reservation` (`id_reservation`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_cle_reserv` FOREIGN KEY (`fk_client`) REFERENCES `client` (`id_client`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
