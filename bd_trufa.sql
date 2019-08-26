-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 26-Ago-2019 às 22:09
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `bd_trufa`
--
CREATE DATABASE IF NOT EXISTS `bd_trufa` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bd_trufa`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_produtos`
--

CREATE TABLE IF NOT EXISTS `tabela_produtos` (
  `codigo` int(5) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  `precoc` decimal(5,2) NOT NULL,
  `precov` decimal(5,2) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tabela_produtos`
--

INSERT INTO `tabela_produtos` (`codigo`, `descricao`, `precoc`, `precov`) VALUES
(1, 'TRUFA DE CHOCOLATE BELGA', '1.10', '3.00'),
(3, 'TRUFA DE CHOCOLATE AMARGO', '1.20', '3.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
