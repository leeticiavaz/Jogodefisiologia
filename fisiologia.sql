-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Nov-2020 às 05:48
-- Versão do servidor: 5.6.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fisiologia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `dataNasc` date NOT NULL,
  `curso` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matricula` int(30) NOT NULL,
  `semestre` int(2) NOT NULL,
  `ano` int(4) NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` int(11) NOT NULL,
  `fase` int(11) NOT NULL,
  `p1` int(10) NOT NULL,
  `p2` int(10) NOT NULL,
  `p3` int(10) NOT NULL,
  `p4` int(10) NOT NULL,
  `p5` int(10) NOT NULL,
  `p6` int(10) NOT NULL,
  `p7` int(10) NOT NULL,
  `p8` int(10) NOT NULL,
  `p9` int(10) NOT NULL,
  `p10` int(10) NOT NULL,
  `pontuacao` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE IF NOT EXISTS `questoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` int(2) NOT NULL,
  `fase` int(2) NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `opcao1` text COLLATE utf8_unicode_ci NOT NULL,
  `opcao2` text COLLATE utf8_unicode_ci NOT NULL,
  `opcao3` text COLLATE utf8_unicode_ci NOT NULL,
  `opcao4` text COLLATE utf8_unicode_ci NOT NULL,
  `opcao5` text COLLATE utf8_unicode_ci NOT NULL,
  `categoria` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `textoajuda` text COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `correta` int(1) NOT NULL,
  `corretaVouf` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
