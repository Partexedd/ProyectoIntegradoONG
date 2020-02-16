-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.11-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para datosbbdd
CREATE DATABASE IF NOT EXISTS `datosbbdd` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `datosbbdd`;

-- Volcando estructura para tabla datosbbdd.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.admin: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `usuario`, `password`) VALUES
	(1, 'admin', 'admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.contactar
CREATE TABLE IF NOT EXISTS `contactar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rss_provincia` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `representa` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asunto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mensaje` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.contactar: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `contactar` DISABLE KEYS */;
INSERT INTO `contactar` (`id`, `nombre`, `email`, `rss_provincia`, `representa`, `asunto`, `mensaje`, `fecha`) VALUES
	(1, 'AWDaw', 'holabuenas@gmail.com', 'rssc', 'administracionPublica', '123', '123123123', '2020-02-15 17:05:41');
/*!40000 ALTER TABLE `contactar` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.form_contact
CREATE TABLE IF NOT EXISTS `form_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `representacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asunto` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mensaje` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.form_contact: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `form_contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `form_contact` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.migration_versions
CREATE TABLE IF NOT EXISTS `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.migration_versions: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;
INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
	('20200214184540', '2020-02-14 18:46:01');
/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.pag_contacto
CREATE TABLE IF NOT EXISTS `pag_contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tit_cabecera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_v` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_a` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_c` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.pag_contacto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pag_contacto` DISABLE KEYS */;
INSERT INTO `pag_contacto` (`id`, `tit_cabecera`, `direccion_v`, `direccion_a`, `direccion_c`) VALUES
	(1, 'Contacto', 'C/Mayor 56, escalera 3, piso 8B.<br>12001 - Castellón de la Plana<br> 964 222 020 - 601 187 746', 'Carrer d\'Utiel, 16<br> 46020 Valencia<br> 670 394 103', 'Av. de Denia, 47<br> 03013 Alicante<br> 965 650 487 - 660 575 104');
/*!40000 ALTER TABLE `pag_contacto` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.pag_entidades
CREATE TABLE IF NOT EXISTS `pag_entidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tit_cabecera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comunidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localizacion_maps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.pag_entidades: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pag_entidades` DISABLE KEYS */;
/*!40000 ALTER TABLE `pag_entidades` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.pag_forma_parte
CREATE TABLE IF NOT EXISTS `pag_forma_parte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tit_cabecera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.pag_forma_parte: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pag_forma_parte` DISABLE KEYS */;
INSERT INTO `pag_forma_parte` (`id`, `tit_cabecera`) VALUES
	(1, 'Forma parte ');
/*!40000 ALTER TABLE `pag_forma_parte` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.pag_inicio
CREATE TABLE IF NOT EXISTS `pag_inicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tit_cabecera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tit_inicio` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subt_inicio` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen_inicio` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.pag_inicio: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pag_inicio` DISABLE KEYS */;
INSERT INTO `pag_inicio` (`id`, `tit_cabecera`, `tit_inicio`, `subt_inicio`, `imagen_inicio`) VALUES
	(1, 'Si', 'Hola', 'Buenos', 'web-cartel.jpg');
/*!40000 ALTER TABLE `pag_inicio` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.pag_jornadas
CREATE TABLE IF NOT EXISTS `pag_jornadas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tit_cabecera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tit_ponente` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_ponente` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_ponente` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_ponente_v` datetime DEFAULT NULL,
  `fecha_ponente_a` datetime DEFAULT NULL,
  `fecha_ponente_c` datetime DEFAULT NULL,
  `cartel_ponente_v` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cartel_ponente_a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cartel_ponente_c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.pag_jornadas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pag_jornadas` DISABLE KEYS */;
INSERT INTO `pag_jornadas` (`id`, `tit_cabecera`, `tit_ponente`, `foto_ponente`, `desc_ponente`, `fecha_ponente_v`, `fecha_ponente_a`, `fecha_ponente_c`, `cartel_ponente_v`, `cartel_ponente_a`, `cartel_ponente_c`) VALUES
	(1, 'Jornadas Formativas 2020', 'Dr.Carlos Gomez Gil', '/jornadas/carlos-gomez-gil-150x150.jpg', 'Para estas jornadas contamos con la participación del Dr. En sociología de la Universidad de Alicante, Dr. Carlos Gomez Gil. Para conocer su extensa experiencia os recomendamos acudir a su blog. El Dr. Gomez Gil estará con nosotros los siguietes días en los que se realizará el taller:', '2019-09-24 00:00:00', '2019-08-25 00:00:00', '2019-08-26 00:00:00', '/jornadas/ODS-Castellon.jpg', '/jornadas/ODS-Valencia.jpg', '/jornadas/ODS-Alicante.jpg');
/*!40000 ALTER TABLE `pag_jornadas` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.pag_mirant
CREATE TABLE IF NOT EXISTS `pag_mirant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tit_cabecera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tit_mirant` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_mirant` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cartel_mirant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_spot_mirant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.pag_mirant: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pag_mirant` DISABLE KEYS */;
INSERT INTO `pag_mirant` (`id`, `tit_cabecera`, `tit_mirant`, `descripcion_mirant`, `cartel_mirant`, `video_spot_mirant`) VALUES
	(1, 'Mostra de cinema Mirant', '"Salud y Mujer, Necesidades y Desafios"', 'Mirant sale del juego con la contracción de las palabras Mostra ItineRANT. Pero también significa mirando en valenciano. La primera de las acepciones del verbo mirar se refiere a “Dirigir la vista hacia algo y fijar la atención en ello”. Eso es lo que esperamos conseguir con esta Mostra de cine, que la gente dirija la vista y fije la atención hacia los problemas que se están dando en la actualidad en todo el planeta sobre la salud global, desde enfoques de género, medioambiente, derechos humanos… y entre todas, debatamos y reflexionemos de forma colectiva para ver cuál es nuestro papel, y cómo podemos contribuir a lograr un mundo más sano, y más justo. Este año, el lema elegido por las más de 40 entidades que formamos las RSS, ha sido «Salud y Mujer, necesidades y desafios». Si te gusta la idea, selecciona tu provincia, infórmate sobre las películas, reserva tu/s entrada/s… y guarda la fecha en tu agenda para asistir a la II Mostra de Cinema Itinerant de Cinema y Salut Global de la Comunitat Valenciana. ¡Te esperamos en Mirant!\r\n\r\n', '/Carteles_mirant/Cartel-IMP_page-0001.jpg', 'https://youtu.be/TAaZ9OhbdlA');
/*!40000 ALTER TABLE `pag_mirant` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.pag_nuestra_propuesta
CREATE TABLE IF NOT EXISTS `pag_nuestra_propuesta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tit_cabecera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.pag_nuestra_propuesta: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pag_nuestra_propuesta` DISABLE KEYS */;
INSERT INTO `pag_nuestra_propuesta` (`id`, `tit_cabecera`) VALUES
	(1, 'Yessssss');
/*!40000 ALTER TABLE `pag_nuestra_propuesta` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.peliculas_mirant
CREATE TABLE IF NOT EXISTS `peliculas_mirant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `edicion_id` int(11) NOT NULL,
  `tit_pelicula` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trailer_pelicula` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_pelicula` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CE6FC05FD651B81E` (`edicion_id`),
  CONSTRAINT `FK_CE6FC05FD651B81E` FOREIGN KEY (`edicion_id`) REFERENCES `pag_mirant` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.peliculas_mirant: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `peliculas_mirant` DISABLE KEYS */;
INSERT INTO `peliculas_mirant` (`id`, `edicion_id`, `tit_pelicula`, `trailer_pelicula`, `foto_pelicula`) VALUES
	(1, 1, 'Comandante Arian', 'https://www.youtube.com/watch?v=bTtNpcFYDUY', '/Carteles_mirant/Comandante-arian-2018.jpg'),
	(2, 1, 'La Manzana de Eva', 'https://www.youtube.com/watch?v=a9Wxg5AFzHU', '/Carteles_mirant/la-manzana-de-eva-2017.png'),
	(3, 1, 'Woman', 'https://www.youtube.com/watch?v=F7IaBuUzzK8', '/Carteles_mirant/woman-2019.png');
/*!40000 ALTER TABLE `peliculas_mirant` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
