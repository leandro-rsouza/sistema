-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11-Jan-2024 às 13:09
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `universe`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
CREATE TABLE IF NOT EXISTS `pessoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `contato` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `contato`, `email`, `senha`) VALUES
(9, 'Pedro Nascimento', 981256545, 'pedro@gmail.com', 123),
(10, 'João Nascimento', 981122565, 'joao@gmail.com', 123),
(5, 'Leandro Souza', 981452565, 'leandro@gmail.com', 123),
(12, 'Gabriel Monteiro', 981156522, 'gabriel@gmail.com', 123),
(11, 'Carlos Santos', 991445525, 'carlos@gmail.com', 123),
(8, 'José Henrique', 981242414, 'henrique@gmail.com', 321),
(13, 'Gustavo Santos', 981145563, 'gustavo@gmail.com', 123),
(14, 'Fernando Souza', 981155632, 'fernando@gmail.com', 123),
(15, 'Ricardo Santos', 981156520, 'ricardo@gmail.com', 123);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
