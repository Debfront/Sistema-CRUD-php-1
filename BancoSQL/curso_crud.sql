-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 05-Jan-2020 às 17:45
-- Versão do servidor: 5.7.25
-- versão do PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curso_crud`
--
CREATE DATABASE IF NOT EXISTS `curso_crud` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `curso_crud`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`) VALUES
(1, 'hardware'),
(2, 'software'),
(3, 'Celulares'),
(4, ''),
(5, 'Androids');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

DROP TABLE IF EXISTS `estoque`;
CREATE TABLE IF NOT EXISTS `estoque` (
  `id_estoque` int(11) NOT NULL AUTO_INCREMENT,
  `nroproduto` int(11) NOT NULL,
  `nomeproduto` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `fornecedor` varchar(255) NOT NULL,
  PRIMARY KEY (`id_estoque`),
  UNIQUE KEY `nroproduto` (`nroproduto`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`id_estoque`, `nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES
(6, 1, 'Mouse', 'software', 2, 'AMDX');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `id_forn` int(11) NOT NULL AUTO_INCREMENT,
  `nome_forn` varchar(255) NOT NULL,
  PRIMARY KEY (`id_forn`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id_forn`, `nome_forn`) VALUES
(1, 'BFTCorporations'),
(2, 'Intel HD'),
(3, 'AMDX');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(255) NOT NULL,
  `mail_usuario` varchar(255) NOT NULL,
  `senha_usuario` varchar(255) NOT NULL,
  `nivel_usuario` varchar(255) NOT NULL,
  `status1` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome_usuario`, `mail_usuario`, `senha_usuario`, `nivel_usuario`, `status1`) VALUES
(10, 'Wenderson Francisco', 'bftcorporations@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '1', 'Ativo'),
(11, 'Maria Ribeiro', 'maria@gmail.com', 'e21fc56c1a272b630e0d1439079d0598cf8b8329', '1', 'Ativo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
