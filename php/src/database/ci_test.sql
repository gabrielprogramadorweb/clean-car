-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Tempo de geração: 09-Dez-2023 às 20:10
-- Versão do servidor: 10.5.23-MariaDB-1:10.5.23+maria~ubu2004
-- versão do PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ci_test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `name` varchar(555) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `name`, `price`, `qty`) VALUES
(1, 'VW100', 1500, 100),
(2, 'VW200', 1000, 99);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `descricao` varchar(900) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `name`, `descricao`, `price`) VALUES
(1, 'Plano ouro', '[ Descrição Plano Ouro ]', 1500),
(2, 'Plano Prata', '[ Descrição Plano Prata ]', 1000),
(3, 'Plano Bronze', '[ Descrição Plano Bronze ]', 800);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `gender`) VALUES
(1, 'Salvidor', 'Zorzenoni', 'szorzenoni0@etsy.com', 'Male'),
(2, 'Verna', 'Marciek', 'vmarciek1@independent.co.uk', 'Female'),
(3, 'Belinda', 'Ablott', 'bablott2@nifty.com', 'Female'),
(4, 'Rudd', 'Powlett', 'rpowlett3@abc.net.au', 'Male'),
(5, 'Gwenneth', 'Rainbird', 'grainbird4@google.com.br', 'Female'),
(6, 'Clarine', 'Whistance', 'cwhistance5@blog.com', 'Female'),
(7, 'Hakim', 'Rogans', 'hrogans6@illinois.edu', 'Male'),
(8, 'Colman', 'Longstreet', 'clongstreet7@slideshare.net', 'Male'),
(9, 'Padraig', 'Utting', 'putting8@phoca.cz', 'Male'),
(10, 'Arny', 'Huggon', 'ahuggon9@samsung.com', 'Male');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
