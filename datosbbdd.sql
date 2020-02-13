-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.40-MariaDB - mariadb.org binary distribution
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.admin: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.carteles_jornadas
CREATE TABLE IF NOT EXISTS `carteles_jornadas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_valencia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_alicante` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_castellon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.carteles_jornadas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `carteles_jornadas` DISABLE KEYS */;
INSERT INTO `carteles_jornadas` (`id`, `img_valencia`, `img_alicante`, `img_castellon`) VALUES
	(1, 'ODS-Valencia.jpg', 'ODS-Alicante.jpg', 'ODS-Castellon.jpg');
/*!40000 ALTER TABLE `carteles_jornadas` ENABLE KEYS */;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.contactar: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `contactar` DISABLE KEYS */;
/*!40000 ALTER TABLE `contactar` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.entidades
CREATE TABLE IF NOT EXISTS `entidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localizacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.entidades: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `entidades` DISABLE KEYS */;
/*!40000 ALTER TABLE `entidades` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.fechas_jornadas
CREATE TABLE IF NOT EXISTS `fechas_jornadas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alicante` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `castellon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.fechas_jornadas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `fechas_jornadas` DISABLE KEYS */;
INSERT INTO `fechas_jornadas` (`id`, `valencia`, `alicante`, `castellon`) VALUES
	(1, '24 de septiembre, 18:00 horas en el Colegio Oficial de Ópticos-Optometristas de Valencia.', '25 de septiembre, 18:00 horas en la Sede Universitaria Ciudad de Alicante.', '26 de septiembre, 18:00 horas en el Menador Espai Cultural de Castelló.');
/*!40000 ALTER TABLE `fechas_jornadas` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.introduccion_mirant
CREATE TABLE IF NOT EXISTS `introduccion_mirant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `edicion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci,
  `cartel_mirant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.introduccion_mirant: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `introduccion_mirant` DISABLE KEYS */;
INSERT INTO `introduccion_mirant` (`id`, `edicion`, `titulo`, `descripcion`, `cartel_mirant`) VALUES
	(1, 'I', 'Mostra Itinerant de Cinema i Salut Global', 'Mirant sale del juego con la contracción de las palabras Mostra ItineRANT. Pero también significa mirando en valenciano. La primera de las acepciones del verbo mirar se refiere a “Dirigir la vista hacia algo y fijar la atención en ello”. Eso es lo que esperamos conseguir con esta Mostra de cine, que la gente dirija la vista y fije la atención hacia los problemas que se están dando en la actualidad en todo el planeta sobre la salud global, desde enfoques de género, medioambiente, derechos humanos… y entre todas, una vez hayamos dirigido la mirada y fijado la atención en estos temas, debatamos y reflexionemos de forma colectiva para ver cuál es nuestro papel en todo esto, y cómo podemos contribuir a lograr un mundo más sano, y por lo tanto, más justo. Si te gusta la idea, selecciona tu provincia, infórmate sobre las películas, reserva tu/s entrada/s… y guarda la fecha en tu agenda para asistir a la I Mostra de Cinema Itinerant de Cinema y Salut Global de la Comunitat Valenciana. ¡Te esperamos en Mirant!', 'Cartel-mirant-i.png'),
	(2, 'II', '"Salud y Mujer, Necesidades y Desafios"', 'Mirant sale del juego con la contracción de las palabras Mostra ItineRANT. Pero también significa mirando en valenciano. La primera de las acepciones del verbo mirar se refiere a “Dirigir la vista hacia algo y fijar la atención en ello”. Eso es lo que esperamos conseguir con esta Mostra de cine, que la gente dirija la vista y fije la atención hacia los problemas que se están dando en la actualidad en todo el planeta sobre la salud global, desde enfoques de género, medioambiente, derechos humanos… y entre todas, debatamos y reflexionemos de forma colectiva para ver cuál es nuestro papel, y cómo podemos contribuir a lograr un mundo más sano, y más justo. Este año, el lema elegido por las más de 40 entidades que formamos las RSS, ha sido «Salud y Mujer, necesidades y desafios». Si te gusta la idea, selecciona tu provincia, infórmate sobre las películas, reserva tu/s entrada/s… y guarda la fecha en tu agenda para asistir a la II Mostra de Cinema Itinerant de Cinema y Salut Global de la Comunitat Valenciana. ¡Te esperamos en Mirant!', 'Cartel-IMP_page-0001.jpg');
/*!40000 ALTER TABLE `introduccion_mirant` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.migration_versions
CREATE TABLE IF NOT EXISTS `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.migration_versions: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;
INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
	('20200213094557', '2020-02-13 09:46:29'),
	('20200213095100', '2020-02-13 09:51:08'),
	('20200213112429', '2020-02-13 11:24:45');
/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.paginas_ong
CREATE TABLE IF NOT EXISTS `paginas_ong` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_pagina` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tit_cabecera` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.paginas_ong: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `paginas_ong` DISABLE KEYS */;
INSERT INTO `paginas_ong` (`id`, `nombre_pagina`, `tit_cabecera`) VALUES
	(1, 'Inicio', NULL),
	(2, 'Propuesta', NULL),
	(3, 'Jornadas', NULL),
	(4, 'Mirant i', NULL),
	(5, 'Forma Parte', NULL),
	(6, 'Entidades', NULL),
	(7, 'Contacto', NULL),
	(8, 'Mirant ii', NULL),
	(9, 'Mirant iii', NULL);
/*!40000 ALTER TABLE `paginas_ong` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.pag_inicio
CREATE TABLE IF NOT EXISTS `pag_inicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tit_cabecera_id` int(11) DEFAULT NULL,
  `spot_id` int(11) DEFAULT NULL,
  `video_conocenos` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_suplemento_pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_3D1CBE9C2BB870DE` (`tit_cabecera_id`),
  UNIQUE KEY `UNIQ_3D1CBE9C2DF1D37C` (`spot_id`),
  CONSTRAINT `FK_3D1CBE9C2BB870DE` FOREIGN KEY (`tit_cabecera_id`) REFERENCES `paginas_ong` (`id`),
  CONSTRAINT `FK_3D1CBE9C2DF1D37C` FOREIGN KEY (`spot_id`) REFERENCES `spot_inicio` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.pag_inicio: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pag_inicio` DISABLE KEYS */;
INSERT INTO `pag_inicio` (`id`, `tit_cabecera_id`, `spot_id`, `video_conocenos`, `link_suplemento_pdf`) VALUES
	(1, 1, 1, 'https://www.youtube.com/watch?v=UI-CHyHa4VE', 'https://redsanitariasolidaria.org/wp-content/uploads/2019/08/Suplement_XarxaSanitat_web.pdf');
/*!40000 ALTER TABLE `pag_inicio` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.pag_jornadas
CREATE TABLE IF NOT EXISTS `pag_jornadas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tit_cabecera_id` int(11) DEFAULT NULL,
  `fechas_jornadas_id` int(11) DEFAULT NULL,
  `carteles_jornadas_id` int(11) DEFAULT NULL,
  `formulario_ins` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_7586F3AE2BB870DE` (`tit_cabecera_id`),
  UNIQUE KEY `UNIQ_7586F3AEBF058448` (`fechas_jornadas_id`),
  UNIQUE KEY `UNIQ_7586F3AE9EB52D87` (`carteles_jornadas_id`),
  CONSTRAINT `FK_7586F3AE2BB870DE` FOREIGN KEY (`tit_cabecera_id`) REFERENCES `paginas_ong` (`id`),
  CONSTRAINT `FK_7586F3AE9EB52D87` FOREIGN KEY (`carteles_jornadas_id`) REFERENCES `carteles_jornadas` (`id`),
  CONSTRAINT `FK_7586F3AEBF058448` FOREIGN KEY (`fechas_jornadas_id`) REFERENCES `fechas_jornadas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.pag_jornadas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pag_jornadas` DISABLE KEYS */;
INSERT INTO `pag_jornadas` (`id`, `tit_cabecera_id`, `fechas_jornadas_id`, `carteles_jornadas_id`, `formulario_ins`) VALUES
	(1, 3, 1, 1, 'https://www.encuestafacil.com/RespWeb/Qn.aspx?EID=2563232');
/*!40000 ALTER TABLE `pag_jornadas` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.pag_mirant
CREATE TABLE IF NOT EXISTS `pag_mirant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tit_cabecera_id` int(11) DEFAULT NULL,
  `video_mirant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduccion_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_55157B4125AB11E9` (`introduccion_id`),
  UNIQUE KEY `UNIQ_55157B412BB870DE` (`tit_cabecera_id`),
  CONSTRAINT `FK_55157B4125AB11E9` FOREIGN KEY (`introduccion_id`) REFERENCES `introduccion_mirant` (`id`),
  CONSTRAINT `FK_55157B412BB870DE` FOREIGN KEY (`tit_cabecera_id`) REFERENCES `paginas_ong` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.pag_mirant: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pag_mirant` DISABLE KEYS */;
INSERT INTO `pag_mirant` (`id`, `tit_cabecera_id`, `video_mirant`, `introduccion_id`) VALUES
	(1, 4, 'https://www.youtube.com/watch?v=qMh0LUtnjL4', 1),
	(2, 8, 'https://www.youtube.com/watch?v=755APbFY-Ng', 2);
/*!40000 ALTER TABLE `pag_mirant` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.pag_propuesta
CREATE TABLE IF NOT EXISTS `pag_propuesta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tit_cabecera_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_451673512BB870DE` (`tit_cabecera_id`),
  CONSTRAINT `FK_451673512BB870DE` FOREIGN KEY (`tit_cabecera_id`) REFERENCES `paginas_ong` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.pag_propuesta: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pag_propuesta` DISABLE KEYS */;
INSERT INTO `pag_propuesta` (`id`, `tit_cabecera_id`) VALUES
	(1, 2);
/*!40000 ALTER TABLE `pag_propuesta` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.peliculas_mirant
CREATE TABLE IF NOT EXISTS `peliculas_mirant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edicion_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CE6FC05FD651B81E` (`edicion_id`),
  CONSTRAINT `FK_CE6FC05FD651B81E` FOREIGN KEY (`edicion_id`) REFERENCES `pag_mirant` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.peliculas_mirant: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `peliculas_mirant` DISABLE KEYS */;
INSERT INTO `peliculas_mirant` (`id`, `titulo`, `img`, `trailer`, `edicion_id`) VALUES
	(1, 'Comandante Arian', 'Comandante-arian-2018.jpg', 'https://www.youtube.com/watch?v=bTtNpcFYDUY', 2),
	(2, 'La Manzana de Eva', 'http://localhost:8001/img/Carteles_mirant/la-manzana-de-eva-2017.png', '', NULL);
/*!40000 ALTER TABLE `peliculas_mirant` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.ponente_jornada
CREATE TABLE IF NOT EXISTS `ponente_jornada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.ponente_jornada: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `ponente_jornada` DISABLE KEYS */;
INSERT INTO `ponente_jornada` (`id`, `titulo`, `img`, `descripcion`) VALUES
	(1, 'El ponente: Dr.Carlos Gomez Gil', 'carlos-gomez-gil-150x150.jpg', 'Para estas jornadas contamos con la participación del Dr. En sociología de la Universidad de Alicante, Dr. Carlos Gomez Gil. Para conocer su extensa experiencia os recomendamos acudir a su blog aquí. El Dr. Gomez Gil estará con nosotros los siguietes días en los que se realizará el taller:');
/*!40000 ALTER TABLE `ponente_jornada` ENABLE KEYS */;

-- Volcando estructura para tabla datosbbdd.spot_inicio
CREATE TABLE IF NOT EXISTS `spot_inicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla datosbbdd.spot_inicio: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `spot_inicio` DISABLE KEYS */;
INSERT INTO `spot_inicio` (`id`, `titulo`, `subtitulo`, `img`) VALUES
	(1, 'Este 2020 las RSS hablan de Salud y Cámbio Climático', 'Infórmate, Inscríbete, Súmate', 'web-cartel.jpg');
/*!40000 ALTER TABLE `spot_inicio` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
