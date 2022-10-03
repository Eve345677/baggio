-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
<<<<<<< HEAD
-- Tiempo de generación: 16-08-2022 a las 02:18:20
=======
-- Tiempo de generación: 26-09-2022 a las 12:08:28
>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `two_birds`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

<<<<<<< HEAD
=======
--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(1, 'flora'),
(2, 'fauna'),
(3, 'clima'),
(4, 'océano'),
(5, 'medio ambiente'),
(6, 'medidas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_informe`
--

CREATE TABLE `categoria_informe` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `informe_id` int(11) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria_informe`
--

INSERT INTO `categoria_informe` (`id`, `categoria_id`, `informe_id`, `fecha_alta`, `fecha_baja`) VALUES
(1, 3, 29, '0000-00-00 00:00:00', NULL),
(2, 2, 40, '2022-09-11 00:22:44', NULL),
(3, 5, 40, '2022-09-11 00:24:02', NULL),
(4, 2, 46, '2022-09-11 05:16:49', NULL),
(5, 1, 47, '2022-09-11 05:18:29', '2022-09-08 14:55:02'),
(6, 1, 50, '2022-09-11 05:23:48', NULL),
(7, 3, 50, '2022-09-11 05:23:48', NULL),
(8, 4, 50, '2022-09-11 05:23:48', NULL),
(9, 5, 50, '2022-09-11 05:23:48', NULL),
(10, 3, 29, '0000-00-00 00:00:00', NULL),
(11, 2, 40, '2022-09-11 00:22:44', NULL),
(12, 5, 40, '2022-09-11 00:24:02', NULL),
(13, 2, 46, '2022-09-11 05:16:49', NULL),
(14, 1, 47, '2022-09-11 05:18:29', NULL),
(15, 1, 50, '2022-09-11 05:23:48', NULL),
(16, 3, 50, '2022-09-11 05:23:48', NULL),
(17, 4, 50, '2022-09-11 05:23:48', NULL),
(18, 5, 50, '2022-09-11 05:23:48', NULL),
(19, 2, 51, '2022-09-14 03:24:09', '2022-09-16 01:43:55'),
(20, 5, 51, '2022-09-14 03:24:09', '2022-09-16 01:43:55'),
(21, 2, 51, '2022-09-15 23:24:11', '2022-09-16 01:43:55'),
(22, 2, 51, '2022-09-16 01:28:26', '2022-09-16 01:43:55'),
(23, 4, 51, '2022-09-16 01:28:26', '2022-09-16 01:43:55'),
(24, 5, 51, '2022-09-16 01:28:26', '2022-09-16 01:43:55'),
(25, 3, 51, '2022-09-16 01:32:16', '2022-09-16 01:43:55'),
(26, 4, 51, '2022-09-16 01:37:58', '2022-09-16 01:43:55'),
(27, 2, 51, '2022-09-16 01:38:16', '2022-09-16 01:43:55'),
(28, 5, 51, '2022-09-16 01:38:16', '2022-09-16 01:43:55'),
(29, 2, 51, '2022-09-16 01:38:56', '2022-09-16 01:43:55'),
(30, 5, 51, '2022-09-16 01:38:56', '2022-09-16 01:43:55'),
(31, 4, 51, '2022-09-16 01:43:39', '2022-09-16 01:43:55'),
(32, 1, 51, '2022-09-16 01:43:55', NULL),
(33, 1, 49, '2022-09-25 07:52:16', '2022-09-25 07:52:45');

>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `comentario_padre_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
<<<<<<< HEAD
  `comentario` varchar(255) NOT NULL,
  `informe_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

=======
  `comentario` varchar(1000) NOT NULL,
  `informe_id` int(11) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_modificacion` int(11) DEFAULT NULL,
  `fecha_baja` datetime DEFAULT NULL,
  `notificacion_baja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario_padre_id`, `usuario_id`, `comentario`, `informe_id`, `fecha_alta`, `fecha_modificacion`, `fecha_baja`, `notificacion_baja`) VALUES
(1, NULL, 16, 'como anda la cosa', 35, '0000-00-00 00:00:00', NULL, NULL, NULL),
(2, NULL, 16, ':v', 40, '0000-00-00 00:00:00', NULL, NULL, NULL),
(3, NULL, 1, 'among us', 21, '0000-00-00 00:00:00', NULL, NULL, NULL),
(4, NULL, 9, 'epico', 40, '0000-00-00 00:00:00', NULL, NULL, NULL),
(5, NULL, 15, 'wewiwabo', 23, '0000-00-00 00:00:00', NULL, NULL, NULL),
(6, NULL, 1, 'puto el que lo lea', 40, '0000-00-00 00:00:00', NULL, NULL, NULL),
(7, NULL, 9, 'La verdad me a interesado el tema lo podrias desarrollar un poco mas en otro informe?', 35, '0000-00-00 00:00:00', NULL, NULL, NULL),
(8, NULL, 1, 'me gusta los arboles :)', 35, '0000-00-00 00:00:00', NULL, NULL, NULL),
(9, NULL, 1, 'admiro este informe', 35, '0000-00-00 00:00:00', NULL, NULL, NULL),
(10, NULL, 16, 'admiro que admires mi informe', 35, '0000-00-00 00:00:00', NULL, NULL, NULL),
(11, NULL, 9, 'admiro esa admiracion', 35, '0000-00-00 00:00:00', NULL, NULL, NULL),
(12, NULL, 29, 'esa es mucha admiracion, admiro eso', 51, '0000-00-00 00:00:00', NULL, NULL, NULL),
(13, NULL, 29, 'probando con nuevas tablas', 49, '2022-09-16 03:19:50', NULL, NULL, NULL),
(14, 13, 29, 'probando parent_id', 49, '2022-09-16 03:20:18', NULL, NULL, NULL),
(15, 13, 29, 'si funciona xd', 49, '2022-09-16 03:35:40', NULL, NULL, NULL),
(16, 13, 29, 'a', 49, '2022-09-16 03:36:18', NULL, NULL, NULL),
(17, NULL, 29, 'aaaaaaaa', 46, '2022-09-16 03:36:36', NULL, NULL, NULL),
(18, NULL, 29, 'siuuuuuu', 46, '2022-09-16 03:36:45', NULL, NULL, NULL),
(19, 17, 29, 'si', 46, '2022-09-16 03:36:50', NULL, NULL, NULL),
(20, 18, 29, 'xd', 46, '2022-09-16 03:36:54', NULL, NULL, NULL),
(21, NULL, 31, 'si', 60, '2022-09-25 01:45:36', NULL, NULL, NULL),
(22, 21, 31, 'no', 60, '2022-09-25 01:45:42', NULL, NULL, NULL),
(23, 21, 31, 'tal vez', 60, '2022-09-25 01:45:58', NULL, NULL, NULL),
(24, NULL, 31, 'xd', 59, '2022-09-25 02:35:48', NULL, NULL, NULL),
(25, NULL, 29, 'hola comentario de prueba inminente', 59, '2022-09-25 02:48:28', NULL, NULL, '2022-09-25 03:02:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario_likes`
--

CREATE TABLE `comentario_likes` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `comentario_id` int(11) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donaciones`
--

CREATE TABLE `donaciones` (
  `importe` int(11) NOT NULL,
<<<<<<< HEAD
  `id_usuario` int(11) NOT NULL
=======
  `usuario_id` int(11) NOT NULL,
  `fecha_alta` datetime NOT NULL
>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `donaciones`
--

<<<<<<< HEAD
INSERT INTO `donaciones` (`id`, `importe`, `id_usuario`) VALUES
(10, 674, 9),
(11, 56, 9),
(12, 300, 9),
(13, 45, 9);
=======
INSERT INTO `donaciones` (`importe`, `usuario_id`, `fecha_alta`) VALUES
(674, 9, '0000-00-00 00:00:00'),
(56, 9, '0000-00-00 00:00:00'),
(300, 9, '0000-00-00 00:00:00'),
(45, 9, '0000-00-00 00:00:00'),
(500, 9, '0000-00-00 00:00:00'),
(20, 9, '0000-00-00 00:00:00'),
(250, 1, '0000-00-00 00:00:00'),
(1000, 16, '0000-00-00 00:00:00'),
(1200, 16, '0000-00-00 00:00:00'),
(750, 1, '0000-00-00 00:00:00'),
(200, 1, '0000-00-00 00:00:00'),
(25, 15, '0000-00-00 00:00:00'),
(13, 15, '0000-00-00 00:00:00'),
(1, 9, '0000-00-00 00:00:00'),
(674, 9, '0000-00-00 00:00:00'),
(56, 9, '0000-00-00 00:00:00'),
(300, 9, '0000-00-00 00:00:00'),
(45, 9, '0000-00-00 00:00:00'),
(500, 9, '0000-00-00 00:00:00'),
(20, 9, '0000-00-00 00:00:00'),
(250, 1, '0000-00-00 00:00:00'),
(1000, 16, '0000-00-00 00:00:00'),
(1200, 16, '0000-00-00 00:00:00'),
(750, 1, '0000-00-00 00:00:00'),
(200, 1, '0000-00-00 00:00:00'),
(25, 15, '0000-00-00 00:00:00'),
(13, 15, '0000-00-00 00:00:00'),
(1, 9, '0000-00-00 00:00:00'),
(443, 29, '2022-09-14 03:14:48'),
(500, 29, '2022-09-14 03:17:09'),
(500, 29, '2022-09-14 03:20:01'),
(500, 29, '2022-09-14 03:20:34');
>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
<<<<<<< HEAD
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_informe` int(11) NOT NULL,
  `date` date NOT NULL
=======
  `usuario_id` int(11) NOT NULL,
  `informe_id` int(11) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL
>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes`
--

<<<<<<< HEAD
CREATE TABLE `informes` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `informe` text NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
=======
INSERT INTO `favoritos` (`usuario_id`, `informe_id`, `fecha_alta`, `fecha_baja`) VALUES
(9, 22, '0000-00-00 00:00:00', NULL),
(9, 31, '0000-00-00 00:00:00', NULL),
(9, 22, '0000-00-00 00:00:00', NULL),
(9, 31, '0000-00-00 00:00:00', NULL),
(29, 49, '2022-09-16 03:16:41', '2022-09-16 03:16:47'),
(29, 49, '2022-09-16 03:16:46', '2022-09-16 03:16:47'),
(29, 49, '2022-09-16 03:17:42', NULL),
(31, 49, '2022-09-24 06:47:32', NULL);
>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes`
--

CREATE TABLE `informes` (
  `id` int(10) UNSIGNED NOT NULL,
<<<<<<< HEAD
  `id_propie` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `contenido` text NOT NULL,
  `comentarios` mediumblob NOT NULL,
  `likes` int(11) NOT NULL,
  `vista` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `encabezado` varchar(100) NOT NULL,
  `usuarios_comen` varchar(2000) NOT NULL,
  `tags` varchar(2000) NOT NULL
=======
  `usuario_id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `contenido` text NOT NULL,
  `encabezado` varchar(100) NOT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL
>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `informes`
--

<<<<<<< HEAD
INSERT INTO `informes_nueva` (`id`, `id_propie`, `titulo`, `contenido`, `comentarios`, `likes`, `vista`, `fecha`, `encabezado`, `usuarios_comen`, `tags`) VALUES
(21, 9, 'Un dia ocurrio algo extraño, resulta que', '<p>Albion online es un mmorpg no lineal, en el que escribes tu propia historia sin limitarte a seguir un camino prefijado, explora un amplio mundo abierto con 5 biomas &uacute;nicos, todo cuanto hagas tendr&aacute; su repercusi&oacute;n en el mundo,con la econom&iacute;a orientada al jugador de albion, los jugadores crean pr&aacute;cticamente todo el equipo a partir de los recursos que consiguen, el equipo que llevas define quien eres, cambia de arma y armadura para pasar de caballero a mago, o juega como una mezcla de ambas clases, avent&uacute;rate en el mundo abierto frente a los habitantes y las criaturas de albion, inicia expediciones o ad&eacute;ntrate en mazmorras en las que encontrar&aacute;s enemigos a&uacute;n m&aacute;s dif&iacute;ciles, enfr&eacute;ntate a otros jugadores en encuentros en el mundo Abierto, lucha por los territorios o por ciudades enteras en batallas t&aacute;cticas, rel&aacute;jate en tu isla privada, donde podr&aacute;s construir un hogar cultivar cosechas y criar animales, &uacute;nete a un gremio, todo es mejor cuando se trabaja en grupo, ad&eacute;ntrate ya en el mundo de albion y escribe tu propia historia.</p>', '', 0, 3, '2022-08-01', 'Buenas noches tengo un problema con mysql me sale el siguiente error: Warning: #1265 Datos truncados', '', ''),
(22, 9, 'Un dia ocurrio algo extraño, resulta que', '<p>Albion online es un mmorpg no lineal, en el que escribes tu propia historia sin limitarte a seguir un camino prefijado, explora un amplio mundo abierto con 5 biomas &uacute;nicos, todo cuanto hagas tendr&aacute; su repercusi&oacute;n en el mundo,con la econom&iacute;a orientada al jugador de albion, los jugadores crean pr&aacute;cticamente todo el equipo a partir de los recursos que consiguen, el equipo que llevas define quien eres, cambia de arma y armadura para pasar de caballero a mago, o juega como una mezcla de ambas clases, avent&uacute;rate en el mundo abierto frente a los habitantes y las criaturas de albion, inicia expediciones o ad&eacute;ntrate en mazmorras en las que encontrar&aacute;s enemigos a&uacute;n m&aacute;s dif&iacute;ciles, enfr&eacute;ntate a otros jugadores en encuentros en el mundo Abierto, lucha por los territorios o por ciudades enteras en batallas t&aacute;cticas, rel&aacute;jate en tu isla privada, donde podr&aacute;s construir un hogar cultivar cosechas y criar animales, &uacute;nete a un gremio, todo es mejor cuando se trabaja en grupo, ad&eacute;ntrate ya en el mundo de albion y escribe tu propia historia.</p>', '', 0, 1, '2022-08-01', 'Albion online es un mmorpg no lineal, en el que escribes tu propia historia', '', ''),
(23, 9, 'Un dia ocurrio algo extraño, resulta que', '<p>Albion online es un mmorpg no lineal, en el que escribes tu propia historia sin limitarte a seguir un camino prefijado, explora un amplio mundo abierto con 5 biomas &uacute;nicos, todo cuanto hagas tendr&aacute; su repercusi&oacute;n en el mundo,con la econom&iacute;a orientada al jugador de albion, los jugadores crean pr&aacute;cticamente todo el equipo a partir de los recursos que consiguen, el equipo que llevas define quien eres, cambia de arma y armadura para pasar de caballero a mago, o juega como una mezcla de ambas clases, avent&uacute;rate en el mundo abierto frente a los habitantes y las criaturas de albion, inicia expediciones o ad&eacute;ntrate en mazmorras en las que encontrar&aacute;s enemigos a&uacute;n m&aacute;s dif&iacute;ciles, enfr&eacute;ntate a otros jugadores en encuentros en el mundo Abierto, lucha por los territorios o por ciudades enteras en batallas t&aacute;cticas, rel&aacute;jate en tu isla privada, donde podr&aacute;s construir un hogar cultivar cosechas y criar animales, &uacute;nete a un gremio, todo es mejor cuando se trabaja en grupo, ad&eacute;ntrate ya en el mundo de albion y escribe tu propia historia.</p>', '', 0, 1, '2022-08-01', 'Albion online es un mmorpg no lineal, en el que escribes tu propia historia', '', ''),
(24, 9, 'Un perrito chiquitito', '<p><strong><img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3Xq55x3Pyqxdtmf7KUBALCgccbTZIg8p9bQ&amp;usqp=CAU\" alt=\"\" width=\"259\" height=\"194\"></strong></p>\n<p><strong>Ella es moli, saluda a la moli!!! a pera recorde que esta pag es para</strong> el cambio climatico xd, bueno despidete que no la volveras a ver!!!!</p>', 0x2550524f544f434f4c2f2a4865726520636f6d6573207468652053756e2c20646f6f2d646f6f2d646f6f2d646f6f0d0a4865726520636f6d6573207468652053756e20616e642049207361790d0a4974277320616c6c2072696768740d0a4c6974746c65206461726c696e670d0a49742773206265656e2061206c6f6e6720636f6c64206c6f6e656c792077696e7465720d0a4c6974746c65206461726c696e670d0a4974206665656c73206c696b652079656172732073696e63652069742773206265656e20686572652550524f544f434f4c2f2a4865726520636f6d6573207468652053756e2c20646f6f2d646f6f2d646f6f2d646f6f0d0a4865726520636f6d6573207468652053756e20616e642049207361790d0a4974277320616c6c2072696768740d0a4c6974746c65206461726c696e670d0a49742773206265656e2061206c6f6e6720636f6c64206c6f6e656c792077696e7465720d0a4c6974746c65206461726c696e670d0a4974206665656c73206c696b652079656172732073696e63652069742773206265656e20686572652550524f544f434f4c2f2a416c20706172656365722066756e63696f6e61206c6f7320636f6d656e746172696f73203a4421212121212550524f544f434f4c2f2a686f6c61, 1, 213, '2022-08-01', 'Albion online es un mmorpg no lineal, en el que escribes tu propia historia', ',9,9,9,9', ''),
(27, 9, 'Hola este es un titulo', '<p>Uno dos tres el SDLG mas antiguo de la historia, ni mas ni menos que&nbsp;<strong>PAC-MAN!!!:</strong></p>\n<p><strong><img src=\"data:image/jpeg;base64,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\" alt=\"\" width=\"225\" height=\"225\"></strong></p>\n<p><strong>fachero el compi</strong></p>', '', 0, 1, '2022-08-01', 'Pac Man es un videojuego arcade creado por el diseñador de videojuegos Toru Iwatani', '', ''),
(28, 9, 'Un titulo', '<p><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIUAAAB8CAMAAABwmYPfAAAA2FBMVEX/AAAiIiLe3t4hId4AIyO0FRX8AwMaIiJZHx8XIiJtHR3d4OAAAN7GEhLo6N7XDg5iYt4VFd7ygoLc5ubf2Njqpqbkw8Pi4t5pHR3dDQ2lF5fExN4SIiJMICD+EhLiz88BIuTwCAhAH9M6Ot7U1N5jHh7qra37PT3wCDT8NDSWGRkAAAC7u7vtl5ciIgAhIbtwHLuJGhqAGxuqFhYrIiJ4HBzgcXHzd3f2ZGT9IyPKjY3CwrsYGABWVrtbW964QpQAJACBGrAvL96vFY3Xt8XxACXdorD4VFS+B42DAAACZUlEQVR4nO3bbU/bMBQF4DYzCW3HOkjoChhKGYHRDRjvY++wwf7/P1ql+AZxb5zYTVuJ6pyvybl+iEREkN1o+qXVb1Sn3/Kc2oACCihqKSIWnTooUs1r9RTRMs+Zg+JMtCoYFQrVCHkcFLKjaiqmEyigWDRF1MoyNYWZZ3lvWBRpO4vL+9olfTMv9VJsTGl1ng0ooICivkKrLHpmCkUr2BX6fGRyvcZys1O9xBdeWrvltwxpgXNtVSh6BDu9mCVxUBzwUnxY8lDsim6u6ATP0hm4KFgpCOyKLhRQvEhF/rKSimpEgeJoEsXHr+smAz4voSvHYuDNAZWEgq6seyk+xZ0sfNz4aWSJe2LgMZVkiy7Efgq5Op9bpKhuQQHFgii+veFxUYjSu1qK7z/esvzkAwsUv0RpS7R8FCenqyyvHRSbolRX8YrFSbHLS1BAsWgK+mz7PU8FhRTqYpgl/CwGzkoRmiWHF4oUS3Rtfoo8S1BAAcX4s8RLcbdn8t7kPp83yJJIxR8q3VMpVySmlHgpHj6Y/N03oZ9mcHhkIuZQ6eGRlYLgn7VUpqCEk32ziz+D7d/sLorZ/+cACijmrGC/I53aioSl56IIeKueYo6BAgoooIACCiiggAIKKKCAAgoooIBiIRThqF+5K71LO9cpadd+M40biUMwZYpUVe7QX6Fd9xS1Yr+ZxqV+CrOhv1TRfJ5SRXZLBAUUL1yRH1N7UlgPu7ko+Km3sYLPK1DkR/cuzeT8BOCVYDgowit+AvBSHCQsULQVP71IhyC3J1Jsa8s81S5T6GZxogkVtlOQGgoooPBR/Ac7hpHy0iwhuQAAAABJRU5ErkJggg==\" alt=\"\" width=\"133\" height=\"124\"></p>\r\n<p>Este es el enemigo numero 1 de pacman!!!!</p>', '', 0, 1, '2022-08-02', 'Un encabezado, probando nomas', '', ''),
(29, 9, 'Un titulo', '<p>Y este es el contenido del informe</p>\r\n<p><img src=\"data:image/jpeg;base64,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\" alt=\"\" width=\"225\" height=\"225\"></p>\r\n<p>y una imagen de prueba</p>', '', 0, 12, '2022-08-07', 'Este es el encabezado de mi informe', '', ''),
(30, 9, 'Un titulo', '<p>Y este es el contenido del informe</p>\r\n<p><img src=\"data:image/jpeg;base64,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\" alt=\"\" width=\"225\" height=\"225\"></p>\r\n<p>y una imagen de prueba</p>', '', 0, 35, '2022-08-07', 'Este es el encabezado de mi informe', '', ''),
(31, 9, 'Un titulo', '<p>Y este es el contenido del informe</p>\r\n<p><img src=\"data:image/jpeg;base64,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\" alt=\"\" width=\"225\" height=\"225\"></p>\r\n<p>y una imagen de prueba</p>', 0x2550524f544f434f4c2f2a612550524f544f434f4c2f2a622550524f544f434f4c2f2a63, 1, 76, '2022-08-07', 'Este es el encabezado de mi informe', ',9,9,9', '');
INSERT INTO `informes_nueva` (`id`, `id_propie`, `titulo`, `contenido`, `comentarios`, `likes`, `vista`, `fecha`, `encabezado`, `usuarios_comen`, `tags`) VALUES
(32, 9, 'Otro titulo', '<p><img src=\"data:image/jpeg;base64,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\" alt=\"\" width=\"214\" height=\"236\"></p>', '', 0, 33, '2022-08-07', 'Otro encabezado', '', ''),
(33, 9, 'Otro titulo', '<p><img src=\"data:image/jpeg;base64,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\" alt=\"\" width=\"214\" height=\"236\"></p>', 0x2550524f544f434f4c2f2a756e20636f6d656e746172696f, 1, 12, '2022-08-07', 'Otro encabezado', ',9', '');
=======
INSERT INTO `informes` (`id`, `usuario_id`, `titulo`, `contenido`, `encabezado`, `fecha_modificacion`, `fecha_alta`, `fecha_baja`) VALUES
(42, 18, 'dssfghjjk', '<p>sdsdfghj</p>', 'dsfdghj', NULL, '2022-09-11 05:13:33', NULL),
(43, 18, 'dssfghjjk', '<p>sdsdfghj</p>', 'dsfdghj', NULL, '2022-09-11 05:14:14', NULL),
(44, 18, 'dssfghjjk', '<p>sdsdfghj</p>', 'dsfdghj', NULL, '2022-09-11 05:15:04', NULL),
(45, 18, 'dssfghjjk', '<p>sdsdfghj</p>', 'dsfdghj', NULL, '2022-09-11 05:15:47', NULL),
(46, 18, 'dssfghjjk', '<p>sdsdfghj</p>', 'dsfdghj', NULL, '2022-09-11 05:16:49', NULL),
(47, 31, 'holA', '<p>dfghj</p>', 'dsfgh', NULL, '2022-09-11 05:18:29', NULL),
(48, 18, 'dssfgh', '<p>fsghf</p>', 'dfgh', NULL, '2022-09-11 05:19:29', NULL),
(49, 31, 'dssfgh', '<p>fsghf</p>', 'dfgh', '2022-09-25 07:52:45', '2022-09-11 05:23:07', NULL),
(50, 31, 'dssfgh', '<p>fsghf</p>', 'dfgh', NULL, '2022-09-11 05:23:48', '2022-09-05 00:00:00'),
(51, 29, 'asadsfdghjk', '<p>dfsdgfhgjkltfygh</p>\r\n<p>&nbsp;</p>\r\n<p>fdghjk</p>', 'srrgthj', '2022-09-16 01:43:55', '2022-09-14 03:24:09', '2022-09-16 02:10:39'),
(52, 31, 'd', '<p>d</p>', 'd', NULL, '2022-09-24 11:16:51', NULL),
(53, 31, 'd', '<p>d</p>', 'd', NULL, '2022-09-24 11:19:43', NULL),
(54, 31, 'd', '<p>d</p>', 'd', NULL, '2022-09-24 11:20:50', NULL),
(55, 31, 'd', '<p>d</p>', 'd', NULL, '2022-09-24 11:20:59', NULL),
(56, 31, 'd', '<p>d</p>', 'd', NULL, '2022-09-25 12:48:15', NULL),
(57, 31, 'd', '<p>d</p>', 'd', NULL, '2022-09-25 12:48:24', NULL),
(58, 31, 'd', '<p>d</p>', 'd', NULL, '2022-09-25 12:48:30', NULL),
(59, 31, 'd', '<p>d</p>', 'd', NULL, '2022-09-25 12:48:36', NULL),
(60, 31, 'd', '<p>d</p>', 'd', NULL, '2022-09-25 12:48:43', '2022-09-25 02:14:06'),
(61, 31, 'd', '<p>d</p>', 'd', NULL, '2022-09-25 12:48:50', '2022-09-25 01:43:03'),
(62, 31, 'd', '<p>d</p>', 'd', NULL, '2022-09-25 01:23:40', NULL),
(63, 31, 'd', '<p>d</p>', 'd', NULL, '2022-09-25 01:23:48', NULL),
(64, 31, 'd', '<p>d</p>', 'd', NULL, '2022-09-25 01:23:54', NULL),
(65, 29, 'd', '<p>d</p>', 'd', NULL, '2022-09-25 01:24:00', NULL),
(66, 31, 'd', '<p>d</p>', 'd', NULL, '2022-09-25 01:24:05', NULL),
(67, 31, 'd', '<p>d</p>', 'd', NULL, '2022-09-25 01:24:10', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe_likes`
--

CREATE TABLE `informe_likes` (
  `usuario_id` int(11) NOT NULL,
  `informe_id` int(11) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `informe_likes`
--

INSERT INTO `informe_likes` (`usuario_id`, `informe_id`, `fecha_alta`, `fecha_baja`) VALUES
(2, 2, '2022-09-05 14:54:52', NULL),
(9, 40, '2022-09-11 00:37:42', NULL),
(2, 2, '2022-09-05 14:54:52', NULL),
(9, 40, '2022-09-11 00:37:42', NULL),
(29, 49, '2022-09-16 03:11:06', '0000-00-00 00:00:00'),
(29, 49, '2022-09-16 03:16:16', '2022-09-16 03:16:23'),
(31, 49, '2022-09-24 06:47:30', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe_vistas`
--

CREATE TABLE `informe_vistas` (
  `usuario_id` int(11) NOT NULL,
  `informe_id` int(11) NOT NULL,
  `fecha_alta` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c

--
-- Volcado de datos para la tabla `informe_vistas`
--

<<<<<<< HEAD
CREATE TABLE `like_comentario` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `comentario_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
=======
INSERT INTO `informe_vistas` (`usuario_id`, `informe_id`, `fecha_alta`) VALUES
(9, 40, '2022-09-11 00:27:01'),
(1, 40, '2022-09-11 00:27:16'),
(9, 40, '2022-09-11 00:27:01'),
(1, 40, '2022-09-11 00:27:16'),
(29, 46, '0000-00-00 00:00:00'),
(29, 48, '0000-00-00 00:00:00'),
(29, 47, '0000-00-00 00:00:00'),
(29, 45, '0000-00-00 00:00:00'),
(29, 49, '2022-09-16 03:49:00'),
(30, 49, '2022-09-16 03:50:31'),
(31, 49, '2022-09-24 06:47:26'),
(31, 46, '2022-09-24 08:59:14'),
(31, 48, '2022-09-24 08:59:19'),
(31, 61, '2022-09-25 01:42:22'),
(29, 61, '2022-09-25 01:42:51'),
(31, 60, '2022-09-25 01:45:29'),
(29, 60, '2022-09-25 02:14:01'),
(31, 59, '2022-09-25 02:35:40'),
(29, 59, '2022-09-25 02:48:06'),
(31, 47, '2022-09-25 07:41:40'),
(31, 65, '2022-09-26 12:06:23');
>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `like_informe`
--

<<<<<<< HEAD
CREATE TABLE `like_informe` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `informe_id` int(11) NOT NULL,
  `date` date NOT NULL
=======
CREATE TABLE `moderaciones` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `informe_id` int(11) NOT NULL,
  `moderacion` varchar(1000) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL,
  `tipo` enum('comentario','informe') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `moderaciones`
--

INSERT INTO `moderaciones` (`id`, `usuario_id`, `informe_id`, `moderacion`, `fecha_alta`, `fecha_baja`, `tipo`) VALUES
(5, 9, 50, 'siuuuuuu', '2022-09-11 20:22:06', '2022-09-16 02:12:30', 'informe'),
(6, 29, 50, 'se me canto xd', '2022-09-16 02:12:00', '2022-09-16 02:12:28', 'informe'),
(7, 29, 61, 'pq se me canto', '2022-09-25 01:43:03', '2022-09-25 01:43:27', 'informe'),
(8, 29, 60, 'xd', '2022-09-25 02:14:06', NULL, 'informe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rangos`
--

CREATE TABLE `rangos` (
  `id` int(10) UNSIGNED NOT NULL,
  `rango` varchar(99) NOT NULL
>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rangos`
--

INSERT INTO `rangos` (`id`, `rango`) VALUES
(1, 'user'),
(2, 'mod'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rango_usuario`
--

CREATE TABLE `rango_usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `rango_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rango_usuario`
--

INSERT INTO `rango_usuario` (`id`, `rango_id`, `usuario_id`, `fecha_alta`, `fecha_baja`) VALUES
(18, 1, 29, '2022-09-14 03:01:11', NULL),
(19, 2, 29, '2022-09-14 15:01:58', NULL),
(20, 1, 30, '2022-09-14 03:11:14', NULL),
(21, 2, 30, '2022-09-14 03:12:20', '2022-09-14 03:12:32'),
(22, 3, 30, '2022-09-14 03:12:25', '2022-09-07 16:48:14'),
(23, 2, 30, '2022-09-14 03:12:35', '2022-09-14 03:12:39'),
(24, 1, 31, '2022-09-24 06:37:28', NULL),
(25, 1, 32, '2022-09-25 06:59:44', NULL),
(26, 1, 33, '2022-09-25 07:00:05', NULL),
(27, 1, 34, '2022-09-25 07:00:21', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(2000) NOT NULL,
<<<<<<< HEAD
  `like_informe` varchar(9999) NOT NULL,
  `fav_informe` varchar(999) NOT NULL
=======
  `descripcion` varchar(1000) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL
>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

<<<<<<< HEAD
INSERT INTO `usuarios` (`id`, `user_name`, `password`, `email`, `foto`, `like_informe`, `fav_informe`) VALUES
(1, 'reichsacht', 'ID183wx2', 'hratzeld@gmail.com', 'pajarito.jpg', '', ''),
(9, 'NewUser', '1f8725853fd67adcd29635cf41eaeea6', 'otrocorreofalso@gmail.com', 'NewUser/hoja3.png', ',,31,24', ',32,31,24');
=======
INSERT INTO `usuarios` (`id`, `user_name`, `password`, `email`, `foto`, `descripcion`, `fecha_alta`, `fecha_baja`) VALUES
(29, 'f', '8fa14cdd754f91cc6554c9e71929cce7', 'f@f', 'pajarito.jpg', '', '2022-09-14 03:01:11', NULL),
(30, 'a', '0cc175b9c0f1b6a831c399e269772661', 'a@a', 'pajarito.jpg', '', '2022-09-14 03:11:14', NULL),
(31, 'NewUser', '1f8725853fd67adcd29635cf41eaeea6', 'correofalso@gmail.com', 'NewUser/dou.png', 'hola bienvenido a mi cuenta :b', '2022-09-24 06:37:28', NULL),
(32, 'fa', '89e6d2b383471fc370d828e552c19e65', 'g@gmail.com', 'pajarito.jpg', '', '2022-09-25 06:59:44', NULL),
(33, 'fe', '2d917f5d1275e96fd75e6352e26b1387', 'saff@fd.com', 'pajarito.jpg', '', '2022-09-25 07:00:05', NULL),
(34, 'fi', '75778bf8fde7266d416b0089e7b8b793', 'fi@d.com', 'pajarito.jpg', '', '2022-09-25 07:00:21', NULL);
>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
<<<<<<< HEAD
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `donaciones`
=======
-- Indices de la tabla `categoria_informe`
>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c
--
ALTER TABLE `categoria_informe`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
<<<<<<< HEAD
-- Indices de la tabla `informes`
--
ALTER TABLE `informes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `informes_nueva`
=======
-- Indices de la tabla `comentario_likes`
>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c
--
ALTER TABLE `comentario_likes`
  ADD PRIMARY KEY (`id`);

--
<<<<<<< HEAD
-- Indices de la tabla `like_comentario`
--
ALTER TABLE `like_comentario`
=======
-- Indices de la tabla `informes`
--
ALTER TABLE `informes`
>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `like_informe`
--
<<<<<<< HEAD
ALTER TABLE `like_informe`
=======
ALTER TABLE `moderaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rangos`
--
ALTER TABLE `rangos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rango_usuario`
--
ALTER TABLE `rango_usuario`
>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria_informe`
--
<<<<<<< HEAD
ALTER TABLE `donaciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
=======
ALTER TABLE `categoria_informe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
<<<<<<< HEAD
ALTER TABLE `favoritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `informes`
--
ALTER TABLE `informes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
=======
ALTER TABLE `comentarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c

--
-- AUTO_INCREMENT de la tabla `comentario_likes`
--
<<<<<<< HEAD
ALTER TABLE `informes_nueva`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `like_comentario`
--
ALTER TABLE `like_comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `like_informe`
--
ALTER TABLE `like_informe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
=======
ALTER TABLE `comentario_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `informes`
--
ALTER TABLE `informes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `moderaciones`
--
ALTER TABLE `moderaciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `rangos`
--
ALTER TABLE `rangos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rango_usuario`
--
ALTER TABLE `rango_usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
