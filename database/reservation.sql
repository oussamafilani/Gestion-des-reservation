CREATE TABLE `user` (
  `id_user` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `login` varchar(50) NOT NULL UNIQUE,
  `password` varchar(50) NOT NULL,
  `access` tinyint(1) NOT NULL,
  `email` varchar(50) NOT NULL UNIQUE
);

INSERT INTO `user` (`id_user`, `login`, `password`, `access`, `email`) VALUES
(1, 'oussama', '202cb962ac59075b964b07152d234b70', 1, 'oussama@gmail.com'),
(3, 'hassan', '202cb962ac59075b964b07152d234b70', 0, 'hassan@gmail.com'),
(4, 'Ali', '202cb962ac59075b964b07152d234b70', 0, 'ali@gmail.com'),
(5, 'SALHI', '202cb962ac59075b964b07152d234b70', 0, 'salhi@gmail.com'),
(6, 'ilyas', '202cb962ac59075b964b07152d234b70', 0, 'ilyas@gmail.com'),
(7, 'farouk', '202cb962ac59075b964b07152d234b70', 0, 'farouk@gmail.com'),
(8, 'steve', '202cb962ac59075b964b07152d234b70', 0, 'steve@gmail.com'),
(9, 'sara', '202cb962ac59075b964b07152d234b70', 0, 'sara@gmail.com'),
(10, 'fadoua', '202cb962ac59075b964b07152d234b70', 0, 'fadoua@gmail.com'),
(11, 'mariam', '202cb962ac59075b964b07152d234b70', 0, 'mariam@gmail.com'),
(13, 'chafik', '202cb962ac59075b964b07152d234b70', 0, 'chafik@gmail.com'),
(14, 'khadija', '202cb962ac59075b964b07152d234b70', 0, 'khadija@gmail.com'),
(15, 'sir', '202cb962ac59075b964b07152d234b70', 0, 'sir@gmail.com'),
(16, 'jilali', '202cb962ac59075b964b07152d234b70', 0, 'jilali@gmail.com'),
(17, 'khalid', '202cb962ac59075b964b07152d234b70', 0, 'khalid@gmail.com'),
(18, 'azzouz', '202cb962ac59075b964b07152d234b70', 0, 'azzouz@gmail.com');

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `CNI` varchar(25) NOT NULL,
  `nom_client` varchar(25) NOT NULL,
  `prenom_client` varchar(25) NOT NULL,
  `email_client` varchar(30) NOT NULL UNIQUE,
  `phone_client` varchar(30) DEFAULT NULL,
  `fk_user` int(11) NOT NULL
);

INSERT INTO `client` (`id_client`, `CNI`, `nom_client`, `prenom_client`, `email_client`, `phone_client`, `fk_user`) VALUES
(1, 'AB55774466', 'hassan', 'Ali', 'hassan@gmail.com', '0625143658', 3),
(2, 'AB54879652', 'Ali', 'ilyas', 'ali@gmail.com', '0658472435', 4),
(3, 'AB33556324', 'SALHI', 'Steve','salhi@gmail.com', '0222555447', 5),
(4, 'AB47483647', 'ilyas', 'Fadoua','ilyas@gmail.com', '0655442211', 6),
(5, 'AB74583247', 'farouk', 'farouk','farouk@gmail.com', '0655442211', 7),
(6, 'AB48345647', 'steve', 'steve','steve@gmail.com', '0655442211', 8),
(7, 'AB36444322', 'sara', 'sara','sara@gmail.com', '0655442211', 9),
(8, 'AB74836471', 'fadoua', 'fadoua','fadoua@gmail.com', '0655442211', 10);

CREATE TABLE `Administrateur` (
  `id_admin` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nom_admin` varchar(25) NOT NULL,
  `prenom_admin` varchar(25) NOT NULL,
  `email_admin` varchar(25) NOT NULL UNIQUE,
  `fk_user` int(11) NOT NULL
);


INSERT INTO `Administrateur` (`id_admin`, `nom_admin`, `prenom_admin`, `email_admin`, `fk_user`) VALUES
(1, 'oussama', 'oussama', 'oussama@gmail.com', 1);



CREATE TABLE `Rooms` (
  `id_room` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `type` varchar(25) NOT NULL,
  `nb_lit` int(11) NOT NULL,
  `view` varchar(25) NOT NULL

);

INSERT INTO `Rooms` (`id_room`, `nb_room`, `type`, `nb_lit`, `view`) VALUES
(1,),
(8,);



CREATE TABLE `guest` (
  `id_guest` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nb_adult` int(11) NOT NULL,
  `nb_kids` int(11) NOT NULL,
  `kids_age` int(11) NOT NULL
);

INSERT INTO `guest` (`id_guest`, `nb_adult`, `nb_kids`, `kids_age`) VALUES
(1,),
(1,);