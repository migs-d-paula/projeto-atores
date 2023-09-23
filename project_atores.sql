-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Set-2023 às 03:18
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `project_atores`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_atores`
--

CREATE TABLE `tbl_atores` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(20) NOT NULL,
  `genero` varchar(11) NOT NULL,
  `profissao` varchar(30) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `ano1` int(4) NOT NULL,
  `titulo1` varchar(50) NOT NULL,
  `papel1` varchar(20) NOT NULL,
  `ano2` varchar(4) NOT NULL,
  `titulo2` varchar(50) NOT NULL,
  `papel2` varchar(30) NOT NULL,
  `ano3` varchar(4) NOT NULL,
  `titulo3` varchar(50) NOT NULL,
  `papel3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_atores`
--
ALTER TABLE `tbl_atores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_atores`
--
ALTER TABLE `tbl_atores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
