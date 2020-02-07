-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2020 a las 16:44:23
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `contacto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactar`
--

CREATE TABLE `contactar` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rss_provincia` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `representa` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asunto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mensaje` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contactar`
--

INSERT INTO `contactar` (`id`, `nombre`, `email`, `rss_provincia`, `representa`, `asunto`, `mensaje`, `fecha`) VALUES
(7, 'yomismo', 'Yomismweeo@ymosmimo.com', 'rssa', 'asociacion', 'Quiero hacer una consulta', 'Hola que tal soy de aqui', '2020-02-07 15:06:22'),
(8, 'yomismo', 'Yomismweeo@ymosmimo.com', 'rssa', 'asociacion', 'Quiero hacer una consulta', 'Hola que tal soy de aqui', '2020-02-07 15:13:23'),
(9, 'yomismo', 'Yomismweeo@ymosmimo.com', 'rssa', 'asociacion', 'Quiero hacer una consulta', 'Hola que tal soy de aqui', '2020-02-07 15:15:30'),
(10, 'yomismo', 'Yomismweeo@ymosmimo.com', 'rssa', 'asociacion', 'Quiero hacer una consulta', 'Hola que tal soy de aqui', '2020-02-07 15:15:59'),
(11, 'yomismo', 'Yomismweeo@ymosmimo.com', 'rssa', 'asociacion', 'Quiero hacer una consulta', 'Hola que tal soy de aqui', '2020-02-07 15:17:24'),
(12, 'yomismo', 'Yomismweeo@ymosmimo.com', 'rssa', 'asociacion', 'Quiero hacer una consulta', 'Hola que tal soy de aqui', '2020-02-07 15:19:49'),
(13, 'yomismo', 'Yomismweeo@ymosmimo.com', 'rssa', 'asociacion', 'Quiero hacer una consulta', 'Hola que tal soy de aqui', '2020-02-07 15:21:33'),
(14, 'yomismo', 'Yomismweeo@ymosmimo.com', 'rssa', 'asociacion', 'Quiero hacer una consulta', 'Hola que tal soy de aqui', '2020-02-07 15:22:11'),
(15, 'yomismo', 'Yomismweeo@ymosmimo.com', 'rssa', 'asociacion', 'Quiero hacer una consulta', 'Hola que tal soy de aqui', '2020-02-07 15:22:32'),
(16, 'yomismo', 'Yomismweeo@ymosmimo.com', 'rssa', 'asociacion', 'Quiero hacer una consulta', 'Hola que tal soy de aqui', '2020-02-07 15:23:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20200207132755', '2020-02-07 13:28:06'),
('20200207140007', '2020-02-07 14:00:12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactar`
--
ALTER TABLE `contactar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactar`
--
ALTER TABLE `contactar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
