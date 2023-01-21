-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jan-2023 às 21:23
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdpesquisa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(50) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `telefone` varchar(80) NOT NULL,
  `data_nascimento` datetime NOT NULL,
  `p1` int(11) DEFAULT NULL,
  `p2` int(11) DEFAULT NULL,
  `p3` int(11) DEFAULT NULL,
  `p4` int(11) DEFAULT NULL,
  `p5` int(11) DEFAULT NULL,
  `p6` int(11) DEFAULT NULL,
  `p7` int(11) DEFAULT NULL,
  `p8` int(11) DEFAULT NULL,
  `p9` int(11) DEFAULT NULL,
  `p10` int(11) DEFAULT NULL,
  `p11` int(11) DEFAULT NULL,
  `p12` int(11) DEFAULT NULL,
  `p13` int(11) DEFAULT NULL,
  `p14` int(11) DEFAULT NULL,
  `p15` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `email`, `telefone`, `data_nascimento`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`) VALUES
(17, '', '', '', '0000-00-00 00:00:00', 0, 0, 5, 0, 0, 0, 0, 0, 0, 9, 0, 0, 0, 7, 0),
(18, '', '', '', '0000-00-00 00:00:00', 0, 0, 5, 0, 0, 0, 0, 0, 7, 0, 0, 0, 0, 0, 10),
(19, '', '', '', '0000-00-00 00:00:00', 1, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 8),
(20, '', '', '', '0000-00-00 00:00:00', 0, 0, 0, 0, 10, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0),
(21, '', '', '', '0000-00-00 00:00:00', 0, 0, 0, 0, 10, 1, 0, 0, 0, 0, 0, 2, 0, 0, 0),
(22, '', '', '', '0000-00-00 00:00:00', 1, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0),
(23, '', '', '', '0000-00-00 00:00:00', 0, 3, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 7, 0),
(24, '', '', '', '0000-00-00 00:00:00', 0, 0, 4, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 6, 0),
(25, '', '', '', '0000-00-00 00:00:00', 0, 2, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0),
(26, '', '', '', '0000-00-00 00:00:00', 0, 0, 4, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 8),
(27, '', '', '', '0000-00-00 00:00:00', 0, 0, 4, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 6, 0),
(28, '', '', '', '0000-00-00 00:00:00', 0, 2, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 4, 0, 0),
(29, '', '', '', '0000-00-00 00:00:00', 0, 0, 4, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 6, 0),
(30, '', '', '', '0000-00-00 00:00:00', 0, 0, 4, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 7, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
