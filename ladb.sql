-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-03-2015 a las 22:03:45
-- Versión del servidor: 5.5.41-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ladb`
--
CREATE DATABASE IF NOT EXISTS `ladb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `ladb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_03_18_024240_create_users_table', 1),
('2015_03_18_024349_create_projects_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direction` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `format` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `synopsis` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `projects`
--

INSERT INTO `projects` (`id`, `title`, `direction`, `description`, `format`, `length`, `state`, `link`, `image`, `picture`, `synopsis`, `created_at`, `updated_at`) VALUES
(1, 'CONTROL Z', 'Eri Pedrozo y Jehisel Ramos', 'Cortometraje de animación', 'HD', '14:59', 'finalizado', 'http://vimeo.com/102566945', '/public/img/images/controlz-image.jpg', '/public/img/pictures/controlz-picture.jpg', 'Esta historia se desarrolla en una ciudad antigua al lado del mar en la que vive Adolfo, joven fotógrafo, serio y analítico enamorado de ese lugar y de Iris, una chica descomplicada y dulce que para su vida es como la brisa refrescante. Ambos son testigos de una marcha sin descanso, se puede percibir en el ambiente toda su impotencia y desesperanza que para un sujeto de guantes blancos es la excusa perfecta. Este sujeto, líder y autoridad, reparte a los ciudadanos una pastilla llamada Control Z para borrar sus malos recuerdos y brindarles una nueva vida, paz y seguridad a sus corazones dolidos... ¿Si pudieras borrar de tu mente los malos recuerdos, lo harías?', '2015-03-18 07:58:38', '2015-03-18 07:58:38'),
(2, 'Ojos Alas Balas', 'Mauricio Arrieta', 'Cortometraje de animación', 'HD', '7:05', 'finalizado', ' http://vimeo.com/52698662', '/public/img/images/ojos-image.jpg', '/public/img/pictures/ojos-picture.jpg', 'Una paloma ciega, un hombre sin caminos y un oportunista', '2015-03-18 07:58:38', '2015-03-18 07:58:38'),
(3, 'Todo es Posible', 'Mauricio García Matamoros', 'Largometraje de animación', 'HD', 'en desarrollo', 'en desarrollo', NULL, NULL, NULL, NULL, '2015-03-18 07:58:38', '2015-03-18 07:58:38'),
(4, 'Canville', 'Luis Felipe Uribe Saltaren', 'Cortometraje de animación', NULL, '9:20', NULL, 'https://www.youtube.com/watch?v=zfnZxtXvKs8', NULL, NULL, 'Bob, un beagle apasionado por los videojuegos, vive con sus padres en una pequeña villa habitada por otros perros llamada Canville. Obsesionado por el juego Instinto, Bob acaba por perder el control y busca la aniquilación de todos sus supuestos enemigos, incluyendo a sus padres. Pero Bob no es el único con un objetivo.', '2015-03-18 07:58:38', '2015-03-18 07:58:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `image`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test_name', 'test_lastname', NULL, 'test@example.com', '$2y$10$IUqVLpWLnB9LGKWIjVnwV.SsYcXqprEG5GgSNh4R3fvktO2s8FMA6', NULL, '2015-03-18 07:58:38', '2015-03-18 07:58:38');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
