-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-01-2018 a las 16:23:28
-- Versión del servidor: 5.7.20-0ubuntu0.16.04.1
-- Versión de PHP: 5.6.32-1+ubuntu16.04.1+deb.sury.org+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas_clientes`
--

CREATE TABLE `cuentas_clientes` (
  `id` int(11) NOT NULL,
  `oidU` int(11) NOT NULL,
  `banco` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ncuenta` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `cuentas_clientes`
--

INSERT INTO `cuentas_clientes` (`id`, `oidU`, `banco`, `tipo`, `ncuenta`, `creado`) VALUES
(2, 1, 'Provincial', 'Corriente', '393993948839393', '2018-01-28 20:59:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `k_usuarios`
--

CREATE TABLE `k_usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cedula` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `movil` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `clave` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `tipo` tinyint(1) NOT NULL DEFAULT '0',
  `login` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `direccion` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `k_usuarios`
--

INSERT INTO `k_usuarios` (`id`, `nombre`, `apellido`, `cedula`, `email`, `telefono`, `movil`, `clave`, `tipo`, `login`, `direccion`, `creado`) VALUES
(1, 'mauricio', 'barrios', '19997832', 'mauricio@gmail.com', '02742218069', '04247570208', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, 'mauricio', 'merida, ejido', '2018-01-28 04:00:00'),
(2, 'loteria', 'loteria', '2992929299', 'agencia@gmail.com', '02020', '02020', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'agencia', 'merida', '2018-01-28 14:56:39');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuentas_clientes`
--
ALTER TABLE `cuentas_clientes`
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `k_usuarios`
--
ALTER TABLE `k_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuentas_clientes`
--
ALTER TABLE `cuentas_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `k_usuarios`
--
ALTER TABLE `k_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
