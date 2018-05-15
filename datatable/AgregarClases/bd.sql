-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2018 a las 10:45:06
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--
CREATE DATABASE SMatricula DEFAULT CHARACTER SET utf8;

USE SMatricula;

CREATE TABLE `datos` (
  `catedratico` varchar(45) NOT NULL,
  `id_datos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`catedratico`, `id_datos`) VALUES
('1400', 4),
('1500ESPG', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_datos`
--

CREATE TABLE `t_datos` (
  `id_datos` int(10) NOT NULL,
  `id_departamento` varchar(45) NOT NULL,
  `id_materia` varchar(45) NOT NULL,
  `id_seccion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_datos`
--

INSERT INTO `t_datos` (`id_datos`, `id_departamento`, `id_materia`, `id_seccion`) VALUES
(2, '4', '40', '1400FS200'),
(3, '1', '10', '1501ESPG'),
(4, '4', '40', '1400FS200'),
(5, '4', '40', '1400FS200'),
(6, '1', '10', '1500ESPG'),
(24, '4', '40', '1400FS200'),
(28, '2', '20', '1600IS301');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_departamento`
--

CREATE TABLE `t_departamento` (
  `id_departamento` int(11) NOT NULL,
  `departamento` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `t_departamento`
--

INSERT INTO `t_departamento` (`id_departamento`, `departamento`) VALUES
(1, 'humanidades'),
(2, 'sistemas'),
(3, 'matematicas'),
(4, 'fisica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_materia`
--

CREATE TABLE `t_materia` (
  `id_materia` int(11) NOT NULL,
  `id_departamento` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `materia` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `t_materia`
--

INSERT INTO `t_materia` (`id_materia`, `id_departamento`, `materia`) VALUES
(10, '1', 'español'),
(20, '2', 'POO'),
(30, '3', 'calculo2'),
(40, '4', 'fisica-200');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_secciones`
--

CREATE TABLE `t_secciones` (
  `id_seccion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `id_materia` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `catedratico` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `t_secciones`
--

INSERT INTO `t_secciones` (`id_seccion`, `id_materia`, `catedratico`) VALUES
('1400FS200', '40', 'Ramon Chavez-1400'),
('1500ESPG', '10', 'Aura Mejia-1500'),
('1501ESPG', '10', 'Nery-1501'),
('1600IS301', '20', 'sauceda-1600'),
('1601MM411', '30', 'Dazu-1601');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id_datos`);

--
-- Indices de la tabla `t_datos`
--
ALTER TABLE `t_datos`
  ADD PRIMARY KEY (`id_datos`);

--
-- Indices de la tabla `t_departamento`
--
ALTER TABLE `t_departamento`
  ADD PRIMARY KEY (`id_departamento`),
  ADD UNIQUE KEY `idestados_UNIQUE` (`id_departamento`);

--
-- Indices de la tabla `t_materia`
--
ALTER TABLE `t_materia`
  ADD PRIMARY KEY (`id_materia`),
  ADD UNIQUE KEY `idmunicipios_UNIQUE` (`id_materia`);

--
-- Indices de la tabla `t_secciones`
--
ALTER TABLE `t_secciones`
  ADD PRIMARY KEY (`id_seccion`),
  ADD UNIQUE KEY `idlocalidades_UNIQUE` (`id_seccion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id_datos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `t_datos`
--
ALTER TABLE `t_datos`
  MODIFY `id_datos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
