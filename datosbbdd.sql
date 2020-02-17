-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2020 a las 23:23:37
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `datosbbdd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `usuario`, `password`) VALUES
(1, 'admin', 'admin');

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
(1, 'AWDaw', 'holabuenas@gmail.com', 'rssc', 'administracionPublica', '123', '123123123', '2020-02-15 17:05:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_contact`
--

CREATE TABLE `form_contact` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `representacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asunto` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mensaje` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('20200214184540', '2020-02-14 18:46:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_contacto`
--

CREATE TABLE `pag_contacto` (
  `id` int(11) NOT NULL,
  `tit_cabecera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_v` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_a` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_c` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pag_contacto`
--

INSERT INTO `pag_contacto` (`id`, `tit_cabecera`, `direccion_v`, `direccion_a`, `direccion_c`) VALUES
(1, 'Contacto', 'C/Mayor 56, escalera 3, piso 8B.<br>12001 - Castellón de la Plana<br> 964 222 020 - 601 187 746', 'Carrer d\'Utiel, 16<br> 46020 Valencia<br> 670 394 103', 'Av. de Denia, 47<br> 03013 Alicante<br> 965 650 487 - 660 575 104');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_entidades`
--

CREATE TABLE `pag_entidades` (
  `id` int(11) NOT NULL,
  `tit_cabecera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comunidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localizacion_maps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_forma_parte`
--

CREATE TABLE `pag_forma_parte` (
  `id` int(11) NOT NULL,
  `tit_cabecera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pag_forma_parte`
--

INSERT INTO `pag_forma_parte` (`id`, `tit_cabecera`) VALUES
(1, 'Forma parte ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_inicio`
--

CREATE TABLE `pag_inicio` (
  `id` int(11) NOT NULL,
  `tit_cabecera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tit_inicio` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subt_inicio` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen_inicio` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pag_inicio`
--

INSERT INTO `pag_inicio` (`id`, `tit_cabecera`, `tit_inicio`, `subt_inicio`, `imagen_inicio`) VALUES
(1, 'Si', 'Hola', 'Buenos', 'web-cartel.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_jornadas`
--

CREATE TABLE `pag_jornadas` (
  `id` int(11) NOT NULL,
  `tit_cabecera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tit_ponente` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_ponente` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_ponente` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_ponente_v` datetime DEFAULT NULL,
  `fecha_ponente_a` datetime DEFAULT NULL,
  `fecha_ponente_c` datetime DEFAULT NULL,
  `cartel_ponente_v` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cartel_ponente_a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cartel_ponente_c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pag_jornadas`
--

INSERT INTO `pag_jornadas` (`id`, `tit_cabecera`, `tit_ponente`, `foto_ponente`, `desc_ponente`, `fecha_ponente_v`, `fecha_ponente_a`, `fecha_ponente_c`, `cartel_ponente_v`, `cartel_ponente_a`, `cartel_ponente_c`) VALUES
(1, 'Jornadas Formativas 2020', 'Dr.Carlos Gomez Gil', 'carlos-gomez-gil-150x150.jpg', 'Para estas jornadas contamos con la participación del Dr. En sociología de la Universidad de Alicante, Dr. Carlos Gomez Gil. Para conocer su extensa experiencia os recomendamos acudir a su blog. El Dr. Gomez Gil estará con nosotros los siguietes días en los que se realizará el taller:', '2019-09-24 00:00:00', '2019-08-25 00:00:00', '2019-08-26 00:00:00', 'ODS-Castellon.jpg', 'ODS-Valencia.jpg', 'ODS-Alicante.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_mirant`
--

CREATE TABLE `pag_mirant` (
  `id` int(11) NOT NULL,
  `tit_cabecera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tit_mirant` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_mirant` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cartel_mirant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_spot_mirant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pag_mirant`
--

INSERT INTO `pag_mirant` (`id`, `tit_cabecera`, `tit_mirant`, `descripcion_mirant`, `cartel_mirant`, `video_spot_mirant`) VALUES
(1, 'I Mostra Itinerant de Cinema i Salut Global', 'I Mostra Itinerant de Cinema i Salut Global', 'Mirant sale del juego con la contracción de las palabras Mostra ItineRANT. Pero también significa mirando en valenciano. La primera de las acepciones del verbo mirar se refiere a “Dirigir la vista hacia algo y fijar la atención en ello”. Eso es lo que esperamos conseguir con esta Mostra de cine, que la gente dirija la vista y fije la atención hacia los problemas que se están dando en la actualidad en todo el planeta sobre la salud global, desde enfoques de género, medioambiente, derechos humanos… y entre todas, una vez hayamos dirigido la mirada y fijado la atención en estos temas, debatamos y reflexionemos de forma colectiva para ver cuál es nuestro papel en todo esto, y cómo podemos contribuir a lograr un mundo más sano, y por lo tanto, más justo. Si te gusta la idea, selecciona tu provincia, infórmate sobre las películas, reserva tu/s entrada/s… y guarda la fecha en tu agenda para asistir a la I Mostra de Cinema Itinerant de Cinema y Salut Global de la Comunitat Valenciana. ¡Te esperamos en Mirant!', 'Cartel-mirant-i.png', 'https://youtu.be/TAaZ9OhbdlA'),
(2, 'Segunda edición', '\"Salud y Mujer, Necesidades y Desafios\"', 'Mirant sale del juego con la contracción de las palabras Mostra ItineRANT. Pero también significa mirando en valenciano. La primera de las acepciones del verbo mirar se refiere a “Dirigir la vista hacia algo y fijar la atención en ello”. Eso es lo que esperamos conseguir con esta Mostra de cine, que la gente dirija la vista y fije la atención hacia los problemas que se están dando en la actualidad en todo el planeta sobre la salud global, desde enfoques de género, medioambiente, derechos humanos… y entre todas, debatamos y reflexionemos de forma colectiva para ver cuál es nuestro papel, y cómo podemos contribuir a lograr un mundo más sano, y más justo. Este año, el lema elegido por las más de 40 entidades que formamos las RSS, ha sido «Salud y Mujer, necesidades y desafios». Si te gusta la idea, selecciona tu provincia, infórmate sobre las películas, reserva tu/s entrada/s… y guarda la fecha en tu agenda para asistir a la II Mostra de Cinema Itinerant de Cinema y Salut Global de la Comunitat Valenciana. ¡Te esperamos en Mirant!', 'Cartel-IMP_page-0001.jpg', 'https://youtu.be/755APbFY-Ng');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_nuestra_propuesta`
--

CREATE TABLE `pag_nuestra_propuesta` (
  `id` int(11) NOT NULL,
  `tit_cabecera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pag_nuestra_propuesta`
--

INSERT INTO `pag_nuestra_propuesta` (`id`, `tit_cabecera`) VALUES
(1, 'Yessssss');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas_mirant`
--

CREATE TABLE `peliculas_mirant` (
  `id` int(11) NOT NULL,
  `edicion_id` int(11) NOT NULL,
  `tit_pelicula` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trailer_pelicula` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_pelicula` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `peliculas_mirant`
--

INSERT INTO `peliculas_mirant` (`id`, `edicion_id`, `tit_pelicula`, `trailer_pelicula`, `foto_pelicula`) VALUES
(11, 2, 'Comandante Arian', 'https://youtu.be/bTtNpcFYDUY', 'Comandante-arian-2018.jpg'),
(12, 2, 'La manzana de Eva', 'https://youtu.be/a9Wxg5AFzHU', 'la-manzana-de-eva-2017.png'),
(13, 2, 'Woman', 'https://youtu.be/F7IaBuUzzK8', 'woman-2019.png'),
(14, 1, 'Sonita', 'https://youtu.be/B47MbpPuz7A', 'mirant-1.png'),
(15, 1, 'Thank you for the rain', 'https://youtu.be/PO1-Z7kEyzo', 'mirant-1-2.png'),
(16, 1, 'La salud en mi comunidad', 'https://youtu.be/VjqzBg32N8I', 'mirant-1-3.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactar`
--
ALTER TABLE `contactar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `form_contact`
--
ALTER TABLE `form_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `pag_contacto`
--
ALTER TABLE `pag_contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pag_entidades`
--
ALTER TABLE `pag_entidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pag_forma_parte`
--
ALTER TABLE `pag_forma_parte`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pag_inicio`
--
ALTER TABLE `pag_inicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pag_jornadas`
--
ALTER TABLE `pag_jornadas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pag_mirant`
--
ALTER TABLE `pag_mirant`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pag_nuestra_propuesta`
--
ALTER TABLE `pag_nuestra_propuesta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `peliculas_mirant`
--
ALTER TABLE `peliculas_mirant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_CE6FC05FD651B81E` (`edicion_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contactar`
--
ALTER TABLE `contactar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `form_contact`
--
ALTER TABLE `form_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pag_contacto`
--
ALTER TABLE `pag_contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pag_entidades`
--
ALTER TABLE `pag_entidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pag_forma_parte`
--
ALTER TABLE `pag_forma_parte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pag_inicio`
--
ALTER TABLE `pag_inicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pag_jornadas`
--
ALTER TABLE `pag_jornadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pag_mirant`
--
ALTER TABLE `pag_mirant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pag_nuestra_propuesta`
--
ALTER TABLE `pag_nuestra_propuesta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `peliculas_mirant`
--
ALTER TABLE `peliculas_mirant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `peliculas_mirant`
--
ALTER TABLE `peliculas_mirant`
  ADD CONSTRAINT `FK_CE6FC05FD651B81E` FOREIGN KEY (`edicion_id`) REFERENCES `pag_mirant` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
