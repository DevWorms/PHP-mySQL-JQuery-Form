-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2016 at 04:15 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pruebasphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `amigos`
--

CREATE TABLE `amigos` (
  `id_amigo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre_amigo` varchar(70) DEFAULT NULL,
  `token_amigo` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(70) DEFAULT NULL,
  `correo_usuario` varchar(70) DEFAULT NULL,
  `password_usuario` varchar(70) DEFAULT NULL,
  `apikey_usuario` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `correo_usuario`, `password_usuario`, `apikey_usuario`) VALUES
(1, 'Juan', 'juan@1234.com', 'askmsa', NULL),
(2, 'ahuev', 'juan@1234.com', 'askmsa', NULL),
(3, 'kjjkhnkjh', 'juan@1234.com', 'askmsa', NULL),
(4, 'jhbjkb', 'jbjkhbjkhb', 'askmsa', NULL),
(5, 'Richard', 'Velro', '1234', NULL),
(6, 'jhbjhbj', 'hbj', 'khbhv', '2147483647'),
(7, 'Juan', 'kuhkjh', 'kj', '0'),
(8, 'jhbkjb', 'jhkb', 'hb', '140'),
(9, 'jbkjn', 'jn', 'jn', '59'),
(10, 'Restleesss', 'kjnkn', 'kjnkj', '2147483647'),
(11, 'Restlesssss', 'kjhn', 'knk', '166'),
(12, 'kjbjkjhbk', 'hbjh', 'bkjhb', '9'),
(13, 'jhbjhb', 'jhb', 'jhb ', '827'),
(14, 'ihounh', 'ioumh', 'iumhui', '827ccb0eea8a706c4c34a16891f84e7b'),
(15, 'jkjnkj', 'nkjn', 'l', '827ccb0eea8a706c4c34a16891f84e7b'),
(16, 'Prueba1', 'kjn', 'kjnj', '1b57939c134ce866598a7b3f713ff05c'),
(17, 'Prueba2', 'jhbkjb', 'jkhbjk', '0f41a01ae9d1f095d39efd9054f33134'),
(18, 'kjnkj', 'nk', 'n', '90330bfc267df3b76108079c52356727'),
(19, 'kjn', 'kjn', 'kj', '295210041dc5bbf40e158635eed02fd2'),
(20, 'JUan ', 'Melon ', 'tierra', '63bc05229ed8c9eaa9c119728e4074c6'),
(21, 'jhbhjbJHBjhb', 'JHB', 'JHB', 'e8ffa7b38243938de3696b67ed2c5df3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amigos`
--
ALTER TABLE `amigos`
  ADD PRIMARY KEY (`id_amigo`,`id_usuario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amigos`
--
ALTER TABLE `amigos`
  MODIFY `id_amigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
