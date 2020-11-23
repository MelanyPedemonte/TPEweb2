-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 09:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbdd_pasteleria`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL,
  `descripcion_categoria` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`, `descripcion_categoria`) VALUES
(1, 'Cosas Dulces', 'Productos Dulces'),
(2, 'Cosas Saladas', 'Productos salados'),
(5, 'Desayunos', 'Box y desayunos para regalar o disfrutar'),
(8, ' Editada', ' editado');

-- --------------------------------------------------------

--
-- Table structure for table `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `valoracion` int(5) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `id_producto`, `id_usuario`, `valoracion`, `comentario`) VALUES
(1, 1, 1, 5, 'Comentario de prueba 1');

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(50) NOT NULL,
  `descripcion_producto` text NOT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre_producto`, `descripcion_producto`, `precio`, `imagen`, `id_categoria`) VALUES
(1, 'Brownie', 'Brownie de 20x20, con o sin nueces.', 350, 'img/brownie.jpg', 1),
(2, 'Budin', 'Budin de vainilla con o sin chispas', 80, 'img/budin.jpg', 1),
(3, 'Sandwich de miga', 'Docena de sandwich de miga', 320, 'img/sandwich-miga.jpg', 2),
(5, 'Box -Dia de la Madre', 'Este box incluye: -1 taza de vidrio. -2 tartas individuales a elección. (pastafrola, tarta cabsha o de coco)-2 alfajores de maicena. -3 galletitas.-2 budines individuales.-1 bolsita de biscochitos.-1 te(clásico o verde). ', 500, 'img/box-dia-de-la-madre.jpg', 5),
(8, ' Pastafrola', ' Pastafrola mediana de dulce de membrillo', 170, 'img/pastafrola.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `email`, `pass`, `admin`) VALUES
(1, 'melany', 'melanypedemonte@gmail.com', '$2y$10$E9n3ivnxwPcPcHKW8cVFV.W//AXXPhkpglt40FnFefK2.P3Up4y.y', 1),
(3, 'rocio', 'rocio.figueroa.salome@gmail.com', '$2y$10$BQo5NbGrGK1em4fTTF2OhOm/IsppWRG5nHr5gHmW4cAgY3.CrYrdK', 1),
(5, 'ejemplo', 'example@gmail.com', '$2y$10$aeUe.XcDiISxx4zPAApXD.s8rydRr28M7Iu8AYZFdeUW3LpNZNZm.', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Constraints for table `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
