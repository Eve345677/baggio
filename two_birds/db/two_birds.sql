-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2022 a las 03:52:29
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
  `categoria_id` int(11) NOT NULL,
  `informe_id` int(11) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria_informe`
--

INSERT INTO `categoria_informe` (`categoria_id`, `informe_id`, `fecha_alta`, `fecha_baja`) VALUES
(3, 29, '0000-00-00 00:00:00', NULL),
(2, 40, '2022-09-11 00:22:44', NULL),
(5, 40, '2022-09-11 00:24:02', NULL),
(2, 46, '2022-09-11 05:16:49', NULL),
(1, 47, '2022-09-11 05:18:29', NULL),
(1, 50, '2022-09-11 05:23:48', NULL),
(3, 50, '2022-09-11 05:23:48', NULL),
(4, 50, '2022-09-11 05:23:48', NULL),
(5, 50, '2022-09-11 05:23:48', NULL),
(3, 29, '0000-00-00 00:00:00', NULL),
(2, 40, '2022-09-11 00:22:44', NULL),
(5, 40, '2022-09-11 00:24:02', NULL),
(2, 46, '2022-09-11 05:16:49', NULL),
(1, 47, '2022-09-11 05:18:29', NULL),
(1, 50, '2022-09-11 05:23:48', NULL),
(3, 50, '2022-09-11 05:23:48', NULL),
(4, 50, '2022-09-11 05:23:48', NULL),
(5, 50, '2022-09-11 05:23:48', NULL),
(2, 51, '2022-09-14 03:24:09', '2022-09-16 01:43:55'),
(5, 51, '2022-09-14 03:24:09', '2022-09-16 01:43:55'),
(2, 51, '2022-09-15 23:24:11', '2022-09-16 01:43:55'),
(2, 51, '2022-09-16 01:28:26', '2022-09-16 01:43:55'),
(4, 51, '2022-09-16 01:28:26', '2022-09-16 01:43:55'),
(5, 51, '2022-09-16 01:28:26', '2022-09-16 01:43:55'),
(3, 51, '2022-09-16 01:32:16', '2022-09-16 01:43:55'),
(4, 51, '2022-09-16 01:37:58', '2022-09-16 01:43:55'),
(2, 51, '2022-09-16 01:38:16', '2022-09-16 01:43:55'),
(5, 51, '2022-09-16 01:38:16', '2022-09-16 01:43:55'),
(2, 51, '2022-09-16 01:38:56', '2022-09-16 01:43:55'),
(5, 51, '2022-09-16 01:38:56', '2022-09-16 01:43:55'),
(4, 51, '2022-09-16 01:43:39', '2022-09-16 01:43:55'),
(1, 51, '2022-09-16 01:43:55', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `comentario_padre_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `comentario` varchar(1000) NOT NULL,
  `informe_id` int(11) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_modificacion` int(11) DEFAULT NULL,
  `fecha_baja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario_padre_id`, `usuario_id`, `comentario`, `informe_id`, `fecha_alta`, `fecha_modificacion`, `fecha_baja`) VALUES
(1, NULL, 16, 'como anda la cosa', 35, '0000-00-00 00:00:00', NULL, NULL),
(2, NULL, 16, ':v', 40, '0000-00-00 00:00:00', NULL, NULL),
(3, NULL, 1, 'among us', 21, '0000-00-00 00:00:00', NULL, NULL),
(4, NULL, 9, 'epico', 40, '0000-00-00 00:00:00', NULL, NULL),
(5, NULL, 15, 'wewiwabo', 23, '0000-00-00 00:00:00', NULL, NULL),
(6, NULL, 1, 'puto el que lo lea', 40, '0000-00-00 00:00:00', NULL, NULL),
(7, NULL, 9, 'La verdad me a interesado el tema lo podrias desarrollar un poco mas en otro informe?', 35, '0000-00-00 00:00:00', NULL, NULL),
(8, NULL, 1, 'me gusta los arboles :)', 35, '0000-00-00 00:00:00', NULL, NULL),
(9, NULL, 1, 'admiro este informe', 35, '0000-00-00 00:00:00', NULL, NULL),
(10, NULL, 16, 'admiro que admires mi informe', 35, '0000-00-00 00:00:00', NULL, NULL),
(11, NULL, 9, 'admiro esa admiracion', 35, '0000-00-00 00:00:00', NULL, NULL),
(12, NULL, 29, 'esa es mucha admiracion, admiro eso', 51, '0000-00-00 00:00:00', NULL, NULL),
(13, NULL, 29, 'probando con nuevas tablas', 49, '2022-09-16 03:19:50', NULL, NULL),
(14, 13, 29, 'probando parent_id', 49, '2022-09-16 03:20:18', NULL, NULL),
(15, 13, 29, 'si funciona xd', 49, '2022-09-16 03:35:40', NULL, NULL),
(16, 13, 29, 'a', 49, '2022-09-16 03:36:18', NULL, NULL),
(17, NULL, 29, 'aaaaaaaa', 46, '2022-09-16 03:36:36', NULL, NULL),
(18, NULL, 29, 'siuuuuuu', 46, '2022-09-16 03:36:45', NULL, NULL),
(19, 17, 29, 'si', 46, '2022-09-16 03:36:50', NULL, NULL),
(20, 18, 29, 'xd', 46, '2022-09-16 03:36:54', NULL, NULL);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donaciones`
--

CREATE TABLE `donaciones` (
  `importe` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `fecha_alta` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `donaciones`
--

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `usuario_id` int(11) NOT NULL,
  `informe_id` int(11) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`usuario_id`, `informe_id`, `fecha_alta`, `fecha_baja`) VALUES
(9, 22, '0000-00-00 00:00:00', NULL),
(9, 31, '0000-00-00 00:00:00', NULL),
(9, 22, '0000-00-00 00:00:00', NULL),
(9, 31, '0000-00-00 00:00:00', NULL),
(29, 49, '2022-09-16 03:16:41', '2022-09-16 03:16:47'),
(29, 49, '2022-09-16 03:16:46', '2022-09-16 03:16:47'),
(29, 49, '2022-09-16 03:17:42', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes`
--

CREATE TABLE `informes` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `contenido` text NOT NULL,
  `encabezado` varchar(100) NOT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `informes`
--

INSERT INTO `informes` (`id`, `usuario_id`, `titulo`, `contenido`, `encabezado`, `fecha_modificacion`, `fecha_alta`, `fecha_baja`) VALUES
(42, 18, 'dssfghjjk', '<p>sdsdfghj</p>', 'dsfdghj', NULL, '2022-09-11 05:13:33', NULL),
(43, 18, 'dssfghjjk', '<p>sdsdfghj</p>', 'dsfdghj', NULL, '2022-09-11 05:14:14', NULL),
(44, 18, 'dssfghjjk', '<p>sdsdfghj</p>', 'dsfdghj', NULL, '2022-09-11 05:15:04', NULL),
(45, 18, 'dssfghjjk', '<p>sdsdfghj</p>', 'dsfdghj', NULL, '2022-09-11 05:15:47', NULL),
(46, 18, 'dssfghjjk', '<p>sdsdfghj</p>', 'dsfdghj', NULL, '2022-09-11 05:16:49', NULL),
(47, 18, 'holA', '<p>dfghj</p>', 'dsfgh', NULL, '2022-09-11 05:18:29', NULL),
(48, 18, 'dssfgh', '<p>fsghf</p>', 'dfgh', NULL, '2022-09-11 05:19:29', NULL),
(49, 18, 'dssfgh', '<p>fsghf</p>', 'dfgh', NULL, '2022-09-11 05:23:07', NULL),
(50, 30, 'dssfgh', '<p>fsghf</p>', 'dfgh', NULL, '2022-09-11 05:23:48', '2022-09-16 02:12:00'),
(51, 29, 'asadsfdghjk', '<p>dfsdgfhgjkltfygh</p>\r\n<p>&nbsp;</p>\r\n<p>fdghjk</p>', 'srrgthj', '2022-09-16 01:43:55', '2022-09-14 03:24:09', '2022-09-16 02:10:39');

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
(29, 49, '2022-09-16 03:16:16', '2022-09-16 03:16:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe_vistas`
--

CREATE TABLE `informe_vistas` (
  `usuario_id` int(11) NOT NULL,
  `informe_id` int(11) NOT NULL,
  `fecha_alta` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `informe_vistas`
--

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
(30, 49, '2022-09-16 03:50:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moderaciones`
--

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
(6, 29, 50, 'se me canto xd', '2022-09-16 02:12:00', '2022-09-16 02:12:28', 'informe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rangos`
--

CREATE TABLE `rangos` (
  `id` int(10) UNSIGNED NOT NULL,
  `rango` varchar(99) NOT NULL
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
(23, 2, 30, '2022-09-14 03:12:35', '2022-09-14 03:12:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(36) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(2000) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user_name`, `password`, `email`, `foto`, `fecha_alta`, `fecha_baja`) VALUES
(29, 'f', '8fa14cdd754f91cc6554c9e71929cce7', 'f@f', 'pajarito.jpg', '2022-09-14 03:01:11', NULL),
(30, 'a', '0cc175b9c0f1b6a831c399e269772661', 'a@a', 'pajarito.jpg', '2022-09-14 03:11:14', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentario_likes`
--
ALTER TABLE `comentario_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `informes`
--
ALTER TABLE `informes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `moderaciones`
--
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
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `comentario_likes`
--
ALTER TABLE `comentario_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `informes`
--
ALTER TABLE `informes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `moderaciones`
--
ALTER TABLE `moderaciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `rangos`
--
ALTER TABLE `rangos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rango_usuario`
--
ALTER TABLE `rango_usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
