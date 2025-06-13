-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2025 at 08:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escuela`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `numero_control` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) DEFAULT NULL,
  `id_edad` int(11) NOT NULL,
  `id_colonia` int(11) NOT NULL,
  `id_especialidad` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `fecha_ingreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumnos`
--

INSERT INTO `alumnos` (`id`, `numero_control`, `nombre`, `apellido_paterno`, `apellido_materno`, `id_edad`, `id_colonia`, `id_especialidad`, `id_genero`, `correo`, `telefono`, `fecha_ingreso`) VALUES
(1, '230032', 'Angel', 'Jimenez', 'Marquez', 3, 6, 8, 1, 'Miau@cetis131.edu.mx', '8991924020', '2025-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `colonias`
--

CREATE TABLE `colonias` (
  `id` int(11) NOT NULL,
  `nombre_colonias` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colonias`
--

INSERT INTO `colonias` (`id`, `nombre_colonias`) VALUES
(8, 'Bugambilias'),
(11, 'Campestre'),
(5, 'Esfuerzo'),
(6, 'Freznos'),
(3, 'Granjas'),
(1, 'Jarachina Norte'),
(2, 'Jarachina Sur'),
(10, 'Loma Real'),
(7, 'Progreso'),
(9, 'Ventura'),
(12, 'Vista Alta'),
(4, 'Vista Hermosa');

-- --------------------------------------------------------

--
-- Table structure for table `edades`
--

CREATE TABLE `edades` (
  `id` int(11) NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `edades`
--

INSERT INTO `edades` (`id`, `edad`) VALUES
(1, 14),
(2, 15),
(3, 16),
(4, 17),
(5, 18),
(6, 19);

-- --------------------------------------------------------

--
-- Table structure for table `especialidades`
--

CREATE TABLE `especialidades` (
  `id` int(11) NOT NULL,
  `nombre_especialidad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `especialidades`
--

INSERT INTO `especialidades` (`id`, `nombre_especialidad`) VALUES
(4, 'Administracion de Recursos Humanos'),
(5, 'CiberSeguridad'),
(11, 'Comercio Internacional'),
(9, 'Construccion'),
(8, 'Electronica'),
(12, 'Hoteleria'),
(6, 'Logistica'),
(3, 'Mantenimiento de Computo'),
(2, 'Mantenimiento Industrial'),
(10, 'Mecatronica'),
(7, 'Preparacion de Alimentos'),
(1, 'Programacion');

-- --------------------------------------------------------

--
-- Table structure for table `generos`
--

CREATE TABLE `generos` (
  `id` int(11) NOT NULL,
  `nombre_genero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `generos`
--

INSERT INTO `generos` (`id`, `nombre_genero`) VALUES
(1, 'Hombre'),
(2, 'Mujer'),
(3, 'Otro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero_control` (`numero_control`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `id_edad` (`id_edad`),
  ADD KEY `id_colonia` (`id_colonia`),
  ADD KEY `id_especialidad` (`id_especialidad`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indexes for table `colonias`
--
ALTER TABLE `colonias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_colonias` (`nombre_colonias`);

--
-- Indexes for table `edades`
--
ALTER TABLE `edades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `edad` (`edad`);

--
-- Indexes for table `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_especialidad` (`nombre_especialidad`);

--
-- Indexes for table `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_genero` (`nombre_genero`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `colonias`
--
ALTER TABLE `colonias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `edades`
--
ALTER TABLE `edades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `generos`
--
ALTER TABLE `generos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`id_edad`) REFERENCES `edades` (`id`),
  ADD CONSTRAINT `alumnos_ibfk_2` FOREIGN KEY (`id_colonia`) REFERENCES `colonias` (`id`),
  ADD CONSTRAINT `alumnos_ibfk_3` FOREIGN KEY (`id_especialidad`) REFERENCES `especialidades` (`id`),
  ADD CONSTRAINT `alumnos_ibfk_4` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
