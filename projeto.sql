-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 31, 2022 at 06:56 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Table structure for table `arquivo`
--

CREATE TABLE `arquivo` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `data` date NOT NULL DEFAULT current_timestamp(),
  `id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arquivo`
--

INSERT INTO `arquivo` (`codigo`, `nome`, `data`, `id`) VALUES
(1, 'ddae85f8fbd97804a87c9e2d416f71c0.jpg', '2022-01-21', 1),
(2, '51bbff1f180b1dfdd4c2bba3ee1f6478.jpg', '2022-01-22', 1),
(3, 'e0d94d1b0cab58d7d227edced5c6fadc.jpg', '2022-01-22', 1),
(4, '6562ef469653d7d326b45532fde7b2b8.jpg', '2022-01-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `checklist_celular`
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
-- Dumping data for table `checklist_celular`
--

INSERT INTO `checklist_celular` (`id`, `carga`, `google`, `rom`, `app`, `stress`, `chip`, `notas`, `serie`) VALUES
(1, 'yes', '', '', '', '', '', '', 'aaaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `checklist_notebook`
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
-- Dumping data for table `checklist_notebook`
--

INSERT INTO `checklist_notebook` (`id`, `carga`, `monitor`, `ram`, `linux`, `bios`, `pasta`, `hd`, `chave`, `bateria`, `notas`, `serie`) VALUES
(1, 'yes', '', '', '', '', '', '', '', '', 'eita', 'bbbbbbbbbbbbbbbbbbbb');

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
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
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `categoria`, `marca`, `modelo`, `serial`, `ean`) VALUES
(1, 'Celular', 'Apple', 'iphone 6', 'aaaaaaaaaaaaaaaaaaaa', 5345345345345),
(2, 'Notebook', 'Acer', 'aspire e 5', 'bbbbbbbbbbbbbbbbbbbb', 6786786786786);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(1) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `nivel` int(1) NOT NULL,
  `login` varchar(25) NOT NULL,
  `senha` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `nivel`, `login`, `senha`) VALUES
(1, 'Gabriel dos Anjos Senra', 1, 'gabriel.senra', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arquivo`
--
ALTER TABLE `arquivo`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `checklist_celular`
--
ALTER TABLE `checklist_celular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checklist_notebook`
--
ALTER TABLE `checklist_notebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arquivo`
--
ALTER TABLE `arquivo`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `checklist_celular`
--
ALTER TABLE `checklist_celular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `checklist_notebook`
--
ALTER TABLE `checklist_notebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
