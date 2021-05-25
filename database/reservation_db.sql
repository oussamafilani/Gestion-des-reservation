-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 09:14 PM
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
  `id_admin` int(11) NOT NULL,
  `nom_admin` varchar(25) COLLATE utf8_bin NOT NULL,
  `prenom_admin` varchar(25) COLLATE utf8_bin NOT NULL,
  `fk_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `id_Bien` int(11) NOT NULL,
  `nom_bien` varchar(25) COLLATE utf8_bin NOT NULL,
  `type_chambre` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `vue_bien` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `lit_chambre` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `categorie_age` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `prix_bien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `bien`
--

INSERT INTO `bien` (`id_Bien`, `nom_bien`, `type_chambre`, `vue_bien`, `lit_chambre`, `categorie_age`, `prix_bien`) VALUES
(1, 'appartement', NULL, NULL, NULL, NULL, 550),
(2, 'bungalow', NULL, NULL, NULL, NULL, 800),
(3, 'chambre', 'chambre_simple', 'vue_intern', NULL, NULL, 300),
(4, 'chambre', 'chambre_simple', 'vue_extern', NULL, NULL, 360),
(5, 'chambre', 'chambre_double', 'vue_intern', 'lit_double', NULL, 450),
(6, 'chambre', 'chambre_double', 'vue_extern', 'lit_double', NULL, 540),
(7, 'chambre', 'chambre_double', 'vue_intern', 'deux_lit_simple', NULL, 450),
(8, 'supplement lit', NULL, NULL, NULL, 'Baby', 75),
(9, 'pas supplement lit', NULL, NULL, NULL, 'Baby', 0),
(10, '50% chambre', 'chambre_simple', 'vue_intern', NULL, 'Mineur', 150),
(11, '70% chambre', 'chambre_simple', 'vue_intern', NULL, 'Jeune', 210),
(12, 'chambre', 'chambre_simple', 'vue_intern', NULL, 'Jeune', 300);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom_client` varchar(25) COLLATE utf8_bin NOT NULL,
  `prenom_client` varchar(25) COLLATE utf8_bin NOT NULL,
  `phone_client` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `fk_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(8, 'fadoua', 'fadoua', '0655442211', 10),
(12, 'oussama', 'filani', '0618340021', 37),
(13, 'yassine', 'test', '000000021', 38),
(14, 'Malika', 'Malika', '090500000', 39),
(15, 'Omaaar', 'Ahmeeed', '061500000', 40);

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE `panier` (
  `id_panier` int(11) NOT NULL,
  `fk_bien` int(11) NOT NULL,
  `fk_pension` int(11) NOT NULL,
  `fk_reservation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `pension`
--

CREATE TABLE `pension` (
  `id_pension` int(11) NOT NULL,
  `prix_pension` int(11) NOT NULL,
  `type_pension` varchar(25) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pension`
--

INSERT INTO `pension` (`id_pension`, `prix_pension`, `type_pension`) VALUES
(1, 200, 'complete'),
(2, 150, 'demi'),
(3, 0, 'sans');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `date_reservation` date NOT NULL,
  `debut_sejour` date NOT NULL,
  `fin_sejour` date NOT NULL,
  `fk_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` char(60) COLLATE utf8_bin NOT NULL,
  `access` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `login`, `password`, `access`) VALUES
(1, 'oussama@gmail.com', '$2y$10$NofyYwYDj424JLy7tzNVWudzcH0QAL6RG4aOg/JI41sdcRpEA2a72', 'Admin'),
(3, 'hamza@gmail.com', '$2y$10$ucWh6NMCVfwjJWeOLDVxjOt4JyZNelSdt5uvsljxQl9ryp4uKbXpa', 'Client'),
(4, 'ali@gmail.com', '$2y$10$xZsOx18h2AZp2P8xLzSMoOBfJxGGNhjcEHacMVvwXAJyqHn313CES', 'Client'),
(5, 'salhi@gmail.com', '$2y$10$7bkpeo2ICCNRtAwqxhKgK.szCJTHJHphkXRNx3lOCeUUNoU0jx0QW', 'Client'),
(6, 'ilyas@gmail.com', '$2y$10$MZMZqQH3SsmAVDQmBKERou5lLz2BZp.zycHj77NYacChS1DvtQt6G', 'Client'),
(7, 'farouk@gmail.com', '$2y$10$ZhTpcBveiJvCWdhFktF1fOdkC4McC8iZXNep1irpAWWj8daKCogS2', 'Client'),
(8, 'steve@gmail.com', '$2y$10$LfGFP66nw/8tmyuLx6dvU.NF4Bt/iVbRBRPvOifD5YWF67QRGeQc.', 'Client'),
(9, 'sara@gmail.com', '$2y$10$0bRWbL9/rWvpOfqS6W92veCoqXZUk/dfFKZ9ak6M0cCvE/R4Xxd3e', 'Client'),
(10, 'fadoua@gmail.com', '$2y$10$izmU/e5IrDCC9hetIHrtkuFuNzbLwmP4juxA6cvVF6TsCIXZEdV8W', 'Client'),
(11, 'mariam@gmail.com', '$2y$10$HU4Unt5TmhNHQhVQWHXCK.oxstikPSNvoZaxh6vnnp39YJPlQG6X6', 'Client'),
(13, 'chafik@gmail.com', '$2y$10$1Bg9JjNyQvkC7Y3eytHy9e.WaZZtwj/2.MgRFk5Gl.UH6FX9Z51lu', 'Client'),
(14, 'khadija@gmail.com', '$2y$10$5l5DmaAKVmsC4jtz0YII6OB9FRvff2aEJCicIiE5qpzpjCeJFAK9i', 'Client'),
(15, 'sir@gmail.com', '$2y$10$wW9uRdEcXuyRyFDtvPDBLO/qHRKFtK67WhYfeVJ2AHbhN3vS0tfoK', 'Client'),
(16, 'jilali@gmail.com', '$2y$10$kE9u5SkTfkjqoQ0sPM921ehbE2HZN6XE4lqgKK3bQJvCTniRZg4jy', 'Client'),
(17, 'khalid@gmail.com', '$2y$10$L.8jQl4DYyLP0ZbMrOgI4u34M6N4qJfUEipfrkc1pBV1m4sgOPWja', 'Client'),
(18, 'azzouz@gmail.com', '$2y$10$WdFZw3qwOA3z4DZ5sueB5uiGXSZGb3c7EKBKX/jCYtdiNLypq4IwK', 'Client'),
(37, 'oussamafilani10@gmail.com', '$2y$10$Z4kyILYXjPh0EsJjBWi7Q.TqeOqvpa7zn9.afxNXlEXrdxeIzTetO', 'Client'),
(38, 'yassineani10@gmail.com', '$2y$10$FYhATZHXkyEjI7RwkeQt9.ysUQbSzQIyck.fMV5BwmTqHVnpzG3IK', 'Client'),
(39, 'malika@gmail.com', '$2y$10$4viUVptmjbzS2K38spzgceQ0GRXgCtQDUfqBcOwAu5SIEx8yRulE.', 'Client'),
(40, 'omarahmed@gmail.com', '$2y$10$tfKpj6aC4rbeZJ6B2TokKOR4LwLqJ.5IKgBmUUNawVV2zLN4djnRK', 'Client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `FK_adm` (`fk_user`);

--
-- Indexes for table `bien`
--
ALTER TABLE `bien`
  ADD PRIMARY KEY (`id_Bien`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `FK_cli` (`fk_user`);

--
-- Indexes for table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_panier`),
  ADD KEY `FK_bien_pa` (`fk_bien`),
  ADD KEY `FK_pension_pa` (`fk_pension`),
  ADD KEY `FK_reservation_pa` (`fk_reservation`);

--
-- Indexes for table `pension`
--
ALTER TABLE `pension`
  ADD PRIMARY KEY (`id_pension`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `FK_cle_reserv` (`fk_client`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bien`
--
ALTER TABLE `bien`
  MODIFY `id_Bien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `panier`
--
ALTER TABLE `panier`
  MODIFY `id_panier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `pension`
--
ALTER TABLE `pension`
  MODIFY `id_pension` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

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
  ADD CONSTRAINT `FK_reservation_pa` FOREIGN KEY (`fk_reservation`) REFERENCES `reservation` (`id_reservation`) ON DELETE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_cle_reserv` FOREIGN KEY (`fk_client`) REFERENCES `client` (`id_client`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
