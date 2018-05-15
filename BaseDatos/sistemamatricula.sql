-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2018 a las 23:55:54
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemamatricula`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--
CREATE DATABASE SistemaMatricula DEFAULT CHARACTER SET utf8;

USE SistemaMatricula;

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `numeroEmpleado` bigint(20) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL,
  `numeroCuenta` bigint(20) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `carrera` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id`, `numeroCuenta`, `nombre`, `apellido`, `email`, `password`, `fecha_registro`, `carrera`) VALUES
(1, 20141004006, 'luis', 'aviles', 'yahoo', '1', '2014-01-24 00:00:00', 'sistemas'),
(2, 20131008178, 'elvin', 'sanchez', 'elvinmoises.sanchez@gmail.com', '123', '2018-05-23 00:00:00', 'ing en sistemas'),
(5, 20141000811, 'Jenny Marisol', 'Cruz', 'jennymarisol@gmail.com', '2', '2014-05-22 00:00:00', 'i sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `Departamento` varchar(255) NOT NULL,
  `Asignatura` varchar(255) NOT NULL,
  `Dias` varchar(255) NOT NULL,
  `Seccion` varchar(255) NOT NULL,
  `HoraInicial` varchar(255) NOT NULL,
  `HoraFinal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `Departamento`, `Asignatura`, `Dias`, `Seccion`, `HoraInicial`, `HoraFinal`) VALUES
(1, 'Matematicas Aplicadas', 'Matematicas Discretas', 'LuMaMiJu', '1400', '1400', '1500'),
(2, 'Matematicas Aplicadas', 'Matematicas Discretas', 'LuMaMiJu', '1800', '1800', '1900'),
(3, 'Matematica Pura', 'Calculo 1', 'LuMaMiJuVi', '0700', '0700', '0800'),
(4, 'Matematica Pura', 'Calculo 1', 'LuMaMiJuVi', '0800', '0800', '0900'),
(5, 'Matematicas Pura', 'Calculo 2', 'LuMaMiJuVi', '0701', '0700', '0800'),
(6, 'Matematica Pura', 'Calculo 2', 'LuMaMiJuVi', '1000', '1000', '1100'),
(7, 'Estadistica Aplicada', 'Estadistica I', 'LuMaJu', '1501', '1500', '1600'),
(8, 'Estadistica Aplicada', 'Estadistica I', 'LuMaJu', '1600', '1600', '1700');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id` int(11) NOT NULL,
  `numeroEmpleado` bigint(20) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id`, `numeroEmpleado`, `nombre`, `apellido`, `email`, `password`, `cargo`) VALUES
(1, 1, 'ing', 'sauceda', 'ingsauceda@gmail.com', '123', 'profesor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recuperacion_clave`
--

CREATE TABLE `recuperacion_clave` (
  `id` int(11) NOT NULL,
  `estudiante_id` int(11) NOT NULL,
  `url_secreta` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_datos`
--

CREATE TABLE `t_datos` (
  `id_datos` int(10) NOT NULL,
  `id_departamento` varchar(45) NOT NULL,
  `id_materia` varchar(45) NOT NULL,
  `id_seccion` varchar(45) NOT NULL,
  `numeroCuenta` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_datos`
--

INSERT INTO `t_datos` (`id_datos`, `id_departamento`, `id_materia`, `id_seccion`, `numeroCuenta`) VALUES
(41, '1', '10', '1500ESPG', 20131008178),
(42, '3', '30', '1601MM411', 2014),
(47, '1', '13', '0801', 2014),
(50, '3', '', 'whatever', 20131008178),
(51, '3', '', 'whatever', 20131008178),
(67, '4', '40', '1400FS200', 20141004006),
(68, '5', '31', '1700MM401', 20131008178),
(69, '4', '40', '1400FS200', 20131008178),
(70, '2', '20', '1600IS301', 20131008178),
(71, '5', '31', '1700MM401', 20141004006),
(72, '6', '30', '1601MM411', 20141000811),
(73, '1', '14', '1100REDG', 20141004006),
(74, '2', '20', '1600IS301', 20141004006),
(76, '4', '41', '1500FS100', 20141000811),
(77, '5', '31', '1700MM401', 20141000811);

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
(1, 'Letras'),
(2, 'Sistemas'),
(3, 'Matematica Aplilcada'),
(4, 'Materia Condensada'),
(5, 'Estadistica Aplicada'),
(6, 'Matematica Pura');

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
(10, '1', 'Español General'),
(14, '1', 'Redaccion General'),
(20, '2', 'Programacion Orientada a Objetos'),
(21, '2', 'Algoritmo y estructura de datos'),
(22, '2', 'Programacion II'),
(30, '6', 'Calculo II'),
(31, '5', 'Estadistica I'),
(40, '4', 'Fisica II'),
(41, '4', 'Fisica I');

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
('0700IS210', '22', 'Erick Reyes - 0700'),
('0800ESPG', '10', 'Karen Paz - 0800'),
('0801ESPG', '10', 'Amparo Cruz -0801'),
('1100REDG', '14', 'Epifrogo Atlante-1100'),
('1200ESPG', '10', 'Joaquin Sabina -1200'),
('1300IS310', '21', 'Servio Paguada - 1300'),
('1400FS200', '40', 'Ramon Chavez-1400'),
('1500ESPG', '10', 'Aura Mejia-1500'),
('1500FS100', '41', 'Jose Letona1500'),
('1501ESPG', '10', 'Nery Gaitan-1501'),
('1600IS301', '20', 'sauceda-1600'),
('1601MM411', '30', 'David Zuniga-1601'),
('1700MM401', '31', 'Mario Antunez -1700 ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `numeroEmpleado` (`numeroEmpleado`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD UNIQUE KEY `apellido` (`apellido`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `numeroCuenta` (`numeroCuenta`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD UNIQUE KEY `apellido` (`apellido`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `carrera` (`carrera`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `numeroEmpleado` (`numeroEmpleado`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD UNIQUE KEY `apellido` (`apellido`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cargo` (`cargo`);

--
-- Indices de la tabla `recuperacion_clave`
--
ALTER TABLE `recuperacion_clave`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `estudiante_id` (`estudiante_id`);

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
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `recuperacion_clave`
--
ALTER TABLE `recuperacion_clave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `t_datos`
--
ALTER TABLE `t_datos`
  MODIFY `id_datos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `recuperacion_clave`
--
ALTER TABLE `recuperacion_clave`
  ADD CONSTRAINT `recuperacion_clave_ibfk_1` FOREIGN KEY (`estudiante_id`) REFERENCES `estudiante` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
