-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 03-Nov-2020 às 12:19
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `computador`
--
CREATE DATABASE IF NOT EXISTS `computador` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `computador`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `placadevideo`
--

CREATE TABLE IF NOT EXISTS `placadevideo` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `marca` set('Nvidia','Amd') NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `memoria` int(3) NOT NULL,
  `cuda` varchar(10) NOT NULL,
  `nucleos` int(2) NOT NULL,
  `plataforma` varchar(6) NOT NULL,
  `clock` decimal(2,1) NOT NULL,
  `turbo` tinyint(1) NOT NULL,
  `uso` set('Desktop','Mobile') NOT NULL,
  `imagem` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `placadevideo`
--

INSERT INTO `placadevideo` (`id`, `marca`, `modelo`, `memoria`, `cuda`, `nucleos`, `plataforma`, `clock`, `turbo`, `uso`, `imagem`) VALUES
(3, 'Nvidia', '2060', 6, '1920', 32, 'Turing', '1.4', 1, 'Desktop', 'nvidia.png'),
(4, 'Nvidia', 'rtx 2070', 8, '2560', 6, 'Turing', '1.6', 1, 'Desktop', 'nvidia.png'),
(5, 'Nvidia', 'rtx 2080', 8, '2944', 46, 'Turing', '1.5', 1, 'Desktop', 'nvidia.png'),
(6, 'Nvidia', 'RTX 3080', 10, '8704', 20, 'Turing', '1.7', 1, 'Desktop', 'nvidia.png'),
(7, 'Nvidia', 'RTX 3060', 6, '3840', 64, 'Ampere', '1.5', 1, 'Desktop', 'nvidia.png'),
(8, 'Amd', 'RX 5900 XT', 12, '2560', 60, 'Big Na', '1.7', 1, 'Desktop', 'amd.png'),
(9, 'Amd', 'RX 5700', 8, '2304', 20, 'Big Na', '1.4', 1, 'Desktop', 'amd.png'),
(10, 'Amd', 'RX 5700 XT', 10, '2600', 50, 'Big Na', '1.6', 1, 'Desktop', 'amd.png'),
(11, 'Amd', 'RX 5500', 8, '1400', 20, 'Big Na', '1.8', 1, 'Desktop', 'amd.png'),
(12, 'Amd', 'RX 5500 XT', 12, '1800', 60, 'Big Na', '2.0', 1, 'Desktop', 'amd.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
