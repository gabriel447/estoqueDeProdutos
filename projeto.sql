-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Fev-2022 às 19:53
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
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivos`
--

CREATE TABLE `arquivos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`id`, `nome`, `path`, `data`) VALUES
(1, '6c287fc0e03f014ee66658fee2f0424b.jpg', '../upload/6203dbc9ded39.jpg', '2022-02-09 12:20:41'),
(2, 'EQ01gmgXYAAHVOY.jpg', '../upload/6203dced1f529.jpg', '2022-02-09 12:25:33'),
(3, 'thumb-1920-67542.jpg', '../upload/62040c249ef06.jpg', '2022-02-09 15:47:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `checklist_celular`
--

CREATE TABLE `checklist_celular` (
  `id` int(11) NOT NULL,
  `carga` varchar(50) NOT NULL,
  `google` varchar(50) NOT NULL,
  `rom` varchar(50) NOT NULL,
  `app` varchar(50) NOT NULL,
  `stress` varchar(50) NOT NULL,
  `chip` varchar(50) NOT NULL,
  `notas` varchar(255) NOT NULL,
  `serie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `checklist_celular`
--

INSERT INTO `checklist_celular` (`id`, `carga`, `google`, `rom`, `app`, `stress`, `chip`, `notas`, `serie`) VALUES
(1, 'yes', 'yes', '', '', '', '', 'sdgfkfdthgjlkçjhgfdsfghjkhgfdsfghjkhgfdsdfghjkl', 'aaaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `checklist_notebook`
--

CREATE TABLE `checklist_notebook` (
  `id` int(11) NOT NULL,
  `carga` varchar(50) NOT NULL,
  `monitor` varchar(50) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `linux` varchar(50) NOT NULL,
  `bios` varchar(50) NOT NULL,
  `pasta` varchar(50) NOT NULL,
  `hd` varchar(50) NOT NULL,
  `chave` varchar(50) NOT NULL,
  `bateria` varchar(50) NOT NULL,
  `notas` varchar(255) NOT NULL,
  `serie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `checklist_notebook`
--

INSERT INTO `checklist_notebook` (`id`, `carga`, `monitor`, `ram`, `linux`, `bios`, `pasta`, `hd`, `chave`, `bateria`, `notas`, `serie`) VALUES
(1, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'sdgfhjfdhgsfadfghjgfdsftgyhjkgfds', 'bbbbbbbbbbbbbbbbbbbb');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(1) NOT NULL,
  `categoria` varchar(25) NOT NULL,
  `marca` varchar(25) NOT NULL,
  `modelo` varchar(25) NOT NULL,
  `serial` varchar(25) NOT NULL,
  `ean` bigint(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `categoria`, `marca`, `modelo`, `serial`, `ean`) VALUES
(1, 'Celular', 'Apple', 'iphone 5', 'aaaaaaaaaaaaaaaaaaaa', 1241241241241),
(2, 'Notebook', 'Acer', 'aspire 5', 'bbbbbbbbbbbbbbbbbbbb', 4124124124124);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(1) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `cargo` int(1) NOT NULL,
  `login` varchar(25) NOT NULL,
  `senha` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cargo`, `login`, `senha`) VALUES
(1, 'Gabriel dos Anjos', 1, 'gabriel.senra', '1234'),
(2, 'pequeno gafanhoto', 3, 'gafanhoto', '1234');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `checklist_celular`
--
ALTER TABLE `checklist_celular`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `checklist_notebook`
--
ALTER TABLE `checklist_notebook`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `checklist_celular`
--
ALTER TABLE `checklist_celular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `checklist_notebook`
--
ALTER TABLE `checklist_notebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
