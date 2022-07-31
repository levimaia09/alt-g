PT-BR:
esse sistema é baseado em templates gratuitos e tem o único objetivo de ser um projeto escolar. 
esse projeto é uma loja virtual fictícia de jogos, como a steam.

EN:
this system is based in free templates and has the sole purpose of being a school project.
this project is a fictional online game store, like steam.

Estrutura do banco de dados para o sistema funcionar: 

banco de dados:
============================================================================================

CREATE DATABASE `altg` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `altg`;

============================================================================================


tabela users: 
============================================================================================

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4;

============================================================================================

tabela products: 
============================================================================================

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_login` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `date` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

============================================================================================