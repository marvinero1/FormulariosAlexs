-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para registros
CREATE DATABASE IF NOT EXISTS `registros` /*!40100 DEFAULT CHARACTER SET utf32 COLLATE utf32_spanish_ci */;
USE `registros`;

-- Volcando estructura para tabla registros.ets
CREATE TABLE IF NOT EXISTS `ets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla registros.ets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `ets` DISABLE KEYS */;
/*!40000 ALTER TABLE `ets` ENABLE KEYS */;

-- Volcando estructura para tabla registros.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla registros.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla registros.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla registros.migrations: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2021_11_22_155801_create_municipios_table', 1),
	(5, '2021_11_22_155909_create_pdes_table', 1),
	(6, '2021_11_22_155927_create_ets_table', 1),
	(7, '2021_11_22_160006_create_reportes_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla registros.municipios
CREATE TABLE IF NOT EXISTS `municipios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudad` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla registros.municipios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `municipios` DISABLE KEYS */;
INSERT INTO `municipios` (`id`, `nombre`, `ciudad`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'asdasd', 'LaPaz', '2021-11-24 20:33:20', '2021-11-24 20:33:20', NULL),
	(2, 'Municipio de Potosi', 'Potosi', '2021-11-24 21:02:13', '2021-11-24 21:02:13', NULL);
/*!40000 ALTER TABLE `municipios` ENABLE KEYS */;

-- Volcando estructura para tabla registros.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla registros.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla registros.pdes
CREATE TABLE IF NOT EXISTS `pdes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `anio` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eje` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pilar` text COLLATE utf8mb4_unicode_ci,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `accion` text COLLATE utf8mb4_unicode_ci,
  `resultado` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla registros.pdes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pdes` DISABLE KEYS */;
INSERT INTO `pdes` (`id`, `anio`, `eje`, `pilar`, `meta`, `accion`, `resultado`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(36, '2021', 'Reconstruyendo la economia, retornando la estabilidad macroeconomica y social.', NULL, NULL, NULL, NULL, '2021-12-13 14:34:52', '2021-12-13 14:34:52', NULL),
	(37, '2021', 'Industrializacion con sustitución de importaciones.', NULL, NULL, NULL, NULL, '2021-12-13 14:44:57', '2021-12-13 14:44:57', NULL),
	(38, '2021', 'Seguridad alimentaria con soberania, promocion de exportaciones con valor agregado y desarrollo turistico.', NULL, NULL, NULL, NULL, '2021-12-13 14:45:08', '2021-12-13 14:45:08', NULL),
	(39, '2021', 'Profundizacion del proceso de industrializacion de los recursos naturales.', NULL, NULL, NULL, NULL, '2021-12-13 14:45:21', '2021-12-13 14:45:21', NULL),
	(40, '2021', 'Educacion, investigacion, ciencia y tecnologia para fortalecimiento y desarrollo de capacidades y potencialidades productivas.', NULL, NULL, NULL, NULL, '2021-12-13 14:45:30', '2021-12-13 14:45:30', NULL),
	(41, '2021', 'Salud y deportes para proteger la vida con cuidado integral en tiempos de pandemia.', NULL, NULL, NULL, NULL, '2021-12-13 14:45:41', '2021-12-13 14:45:41', NULL),
	(42, '2021', 'Reforma judicial, gestión publica digitalizada y transparente; seguridad y defensa integral con soberania nacional.', NULL, NULL, NULL, NULL, '2021-12-13 14:45:49', '2021-12-13 14:45:49', NULL),
	(43, '2021', 'Medio ambiente sustentable y equilibrado en armonía con la madre tierra.', NULL, NULL, NULL, NULL, '2021-12-13 14:46:02', '2021-12-13 14:46:02', NULL),
	(44, '2021', 'Integracion y relaciones internacionales con soberania.', NULL, NULL, NULL, NULL, '2021-12-13 14:46:14', '2021-12-13 14:46:14', NULL),
	(45, '2021', 'Culturas Descolonizacion y despatriarcalizacion, para la revolucion democratica cultural.', NULL, NULL, NULL, NULL, '2021-12-13 14:46:21', '2021-12-13 14:46:21', NULL);
/*!40000 ALTER TABLE `pdes` ENABLE KEYS */;

-- Volcando estructura para tabla registros.reportes
CREATE TABLE IF NOT EXISTS `reportes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla registros.reportes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `reportes` DISABLE KEYS */;
/*!40000 ALTER TABLE `reportes` ENABLE KEYS */;

-- Volcando estructura para tabla registros.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registrado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `municipio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('user','admin','empresa','vendedor') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla registros.users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `registrado`, `telefono`, `direccion`, `municipio`, `ciudad`, `role`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$7N5AzJPjzXQbR2ukxPeTuuIKxEtpdzCLp9UFkMSIMiTBtswRLccCK', 'true', '76964607', 'Av. aVENIDA', NULL, NULL, 'admin', NULL, NULL, '2021-11-24 20:31:27', '2021-11-24 20:31:27'),
	(2, 'prueba', 'prueba@gmail.com', NULL, '$2y$10$GQtoD1M.wAkxlx6IRIBWnOaWe.dP/uzjHFUBf0tlpiPh6lXq9gSuq', 'false', '769666', 'Av. aVENIDA', 'Cercado', 'Cochabamba', 'user', NULL, NULL, '2021-12-09 22:18:32', '2021-12-09 22:18:32');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
