-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-12-2020 a las 05:06:14
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `abogado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audiencia`
--

CREATE TABLE `audiencia` (
  `id` int(10) NOT NULL,
  `juicio` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `comentarios` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `audiencia`
--

INSERT INTO `audiencia` (`id`, `juicio`, `fecha`, `tipo`, `comentarios`) VALUES
(2, '1', '2020-12-27', 'Cita', 'N/A'),
(3, '1', '2020-12-28', 'Cita 2', 'N/A'),
(4, '1', '2020-12-29', 'Cita 3', 'Resultados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `particular` varchar(12) NOT NULL,
  `movil` varchar(12) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `notas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `direccion`, `particular`, `movil`, `correo`, `notas`) VALUES
(2, 'Cliente', 'CDMX', '555285748596', '5552859685', 'cliente@gmail.com', 'notas varias'),
(5, 'Cliente2', 'CDMX', '555285748596', '5585965263', 'correo@correo.com', 'varios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demandado`
--

CREATE TABLE `demandado` (
  `id` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `particular` varchar(12) NOT NULL,
  `movil` varchar(12) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `notas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `demandado`
--

INSERT INTO `demandado` (`id`, `Nombre`, `direccion`, `particular`, `movil`, `correo`, `notas`) VALUES
(1, 'Demandado1', 'CDMX', '555285748596', '', 'D@Correo.com', 'Varias demandas'),
(2, 'Demandado2', 'CDMX', '', '5552859685', 'demandado@correo.com', 'Notas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id` int(10) NOT NULL,
  `juicio` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `comentario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id`, `juicio`, `fecha`, `tipo`, `comentario`) VALUES
(1, '1', '2020-12-27', 'Revision', 'N/A'),
(2, '1', '2020-12-28', 'Recepcion', 're');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juicio`
--

CREATE TABLE `juicio` (
  `id` int(10) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `demandado` varchar(50) NOT NULL,
  `junta` varchar(10) NOT NULL,
  `expediente` varchar(10) NOT NULL,
  `apertura` varchar(10) NOT NULL,
  `conclucion` varchar(20) NOT NULL,
  `recomendado` varchar(20) NOT NULL,
  `notas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `juicio`
--

INSERT INTO `juicio` (`id`, `cliente`, `demandado`, `junta`, `expediente`, `apertura`, `conclucion`, `recomendado`, `notas`) VALUES
(1, '2', '2', '1', 'aaaaaaa', 'bvbbbb', 'cccc', 'dddd', 'eeee'),
(3, '5', '2', '2', '1111', '111111', '1111111', '111111', '111111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `junta`
--

CREATE TABLE `junta` (
  `id` int(10) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `junta`
--

INSERT INTO `junta` (`id`, `descripcion`) VALUES
(1, 'Extra oficial'),
(2, 'Asesorias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `Tipo` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `usuario`, `password`, `Tipo`) VALUES
(1, 'admin', '123', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `audiencia`
--
ALTER TABLE `audiencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `demandado`
--
ALTER TABLE `demandado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `juicio`
--
ALTER TABLE `juicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `junta`
--
ALTER TABLE `junta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `audiencia`
--
ALTER TABLE `audiencia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `demandado`
--
ALTER TABLE `demandado`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `juicio`
--
ALTER TABLE `juicio`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `junta`
--
ALTER TABLE `junta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
