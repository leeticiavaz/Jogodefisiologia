-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31-Out-2020 às 01:48
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
  `pontuacao` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
