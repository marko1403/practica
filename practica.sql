-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2021 a las 06:29:58
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `last_login` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `last_ip_used` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_by` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `last_modified_by` date DEFAULT NULL,
  `active` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`idadmin`, `email`, `password`, `date_created`, `last_login`, `last_ip_used`, `created_by`, `last_modified_by`, `active`) VALUES
(1, 'marko140395@gmail.com', 'admin12345', '2021-08-24', '', NULL, NULL, NULL, 'ACTIVO'),
(2, 'prueba@practica.mx', 'admin12345', '2021-08-25', NULL, '::1', NULL, '2021-08-25', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `idmarca` int(11) NOT NULL,
  `nombre_marca` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `creation_date` date DEFAULT NULL,
  `datos_cliente` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_by` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `last_modify_by` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idpromotor` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`idmarca`, `nombre_marca`, `creation_date`, `datos_cliente`, `created_by`, `last_modify_by`, `idpromotor`) VALUES
(1, 'prueba 1', '2021-08-25', NULL, 'marko140395@gmail.com', '2021-08-25', NULL),
(2, 'prueba', '2021-08-25', NULL, 'marko140395@gmail.com', '2021-08-25', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promotores`
--

CREATE TABLE `promotores` (
  `idpromotor` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `last_login` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `geo_localization` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `promotores`
--

INSERT INTO `promotores` (`idpromotor`, `nombre`, `apellido`, `email`, `password`, `date_created`, `last_login`, `geo_localization`) VALUES
(1, 'prueba', 'prueba', 'marko140395@gmail.com', '12345', '2021-08-25', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiendas`
--

CREATE TABLE `tiendas` (
  `idtienda` int(11) NOT NULL,
  `nombre_tienda` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `creation_date` date DEFAULT NULL,
  `created_by` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `last_modified_by` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `adsress` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `geo_location` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idmarca` int(255) DEFAULT NULL,
  `idpromotor` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tiendas`
--

INSERT INTO `tiendas` (`idtienda`, `nombre_tienda`, `creation_date`, `created_by`, `last_modified_by`, `adsress`, `geo_location`, `idmarca`, `idpromotor`) VALUES
(1, 'prueba', '2021-08-25', 'marko140395@gmail.com', 'marko140395@gmail.com', 'cskdcsndcjksdnjkcsnj', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`idmarca`);

--
-- Indices de la tabla `promotores`
--
ALTER TABLE `promotores`
  ADD PRIMARY KEY (`idpromotor`);

--
-- Indices de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  ADD PRIMARY KEY (`idtienda`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `idmarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `promotores`
--
ALTER TABLE `promotores`
  MODIFY `idpromotor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  MODIFY `idtienda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
