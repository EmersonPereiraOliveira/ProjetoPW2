-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 06-Ago-2017 às 18:35
-- Versão do servidor: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema_academia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `instructor` int(11) NOT NULL,
  `horary` datetime NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `attendance`
--

INSERT INTO `attendance` (`id`, `user`, `instructor`, `horary`, `description`) VALUES
(1, 4, 3, '2017-08-01 12:00:00', 'Teste de Carga'),
(2, 5, 15, '2017-08-01 12:00:00', 'Avaliação Física'),
(3, 7, 14, '2017-08-02 15:30:00', 'Teste de Carga'),
(4, 11, 3, '2017-08-01 12:00:00', 'Revisão');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `name`, `cpf`, `email`, `password`, `status`, `level`) VALUES
(1, 'Emerson', '123.123.123', 'e@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 1),
(3, 'Gustavo', '241.123.312', 'g@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 3),
(4, 'Felipe', '12345678912', 'f@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 2),
(5, 'Felipe Neto', '31112332112', 'fn@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 2),
(6, 'Cabral', '31212312332', 'c@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 2),
(7, 'Garricha', '4566489323', 'g@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 2),
(8, 'Mano', '87934822312', 'm@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 2),
(9, 'Magalhães', '54322313212', 'ma@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 2),
(10, 'Roberto', '95836473722', 'r@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 2),
(11, 'Rocha Lourdes', '65478923443', 'r@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 2),
(12, 'Manoel', '45612312345', 'man@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 2),
(13, 'Miranda', '64537342342', 'mr@gamil.com', '202cb962ac59075b964b07152d234b70', 1, 1),
(14, 'Marcos', '56712398123', 'marcos@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 3),
(15, 'Roberval', '94948484737', 'rober@gmail.comn', '202cb962ac59075b964b07152d234b70', 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
