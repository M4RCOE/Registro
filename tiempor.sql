-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-08-2021 a las 20:36:13
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiempor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_menu`
--

CREATE TABLE `app_menu` (
  `idM` int(11) NOT NULL,
  `nomMenu` varchar(50) NOT NULL,
  `Usuario` varchar(50) DEFAULT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `app_menu`
--

INSERT INTO `app_menu` (`idM`, `nomMenu`, `Usuario`, `Fecha`) VALUES
(1, 'home-depot', NULL, '2018-07-21'),
(2, 'ejempl', NULL, '2021-07-08'),
(3, 'ejemplo2', NULL, '2021-07-22'),
(4, 'hola', 'Marco Antonio Eleno Tovar', '2021-07-23'),
(5, 'hola1', NULL, '2021-07-23'),
(6, 'hola2', 'juan Perez', '2021-07-23'),
(7, 'hola3', NULL, '2021-07-23'),
(8, 'jj', NULL, '2021-07-02'),
(12, 'menuP', NULL, '2021-07-07'),
(15, 'prueba22', NULL, '2021-07-09'),
(16, 'prueba33', NULL, '2021-07-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_menudetalle`
--

CREATE TABLE `app_menudetalle` (
  `id` int(11) NOT NULL,
  `Menu` varchar(50) DEFAULT NULL,
  `idM` tinyint(4) NOT NULL,
  `Enlace` varchar(250) DEFAULT NULL,
  `Icono` varchar(250) DEFAULT NULL,
  `Nivel` tinyint(4) DEFAULT NULL,
  `Orden` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `app_menudetalle`
--

INSERT INTO `app_menudetalle` (`id`, `Menu`, `idM`, `Enlace`, `Icono`, `Nivel`, `Orden`) VALUES
(53, 'deporte', 3, '#', 'fas fa-dumbbell', 0, NULL),
(54, 'cines', 3, '#', 'fas fa-film', 0, NULL),
(55, 'otros', 3, '#', 'fab fa-ethereum', 0, NULL),
(56, 'futbol\r\n', 3, '#', 'fas fa-futbol', 1, NULL),
(91, 'Hogar/Oficina', 1, '#', 'fas fa-home', 0, NULL),
(92, 'Limpieza', 1, '#', 'fab fa-leanpub', 1, NULL),
(93, 'Muebles', 1, '#', 'fas fa-couch', 1, NULL),
(94, 'Empleos', 1, '#', 'fas fa-briefcase', 0, NULL),
(95, 'Decoracion', 1, '#', 'fab fa-trade-federation', 1, NULL),
(96, 'Audio / Video', 1, '#', 'fas fa-file-video', 1, NULL),
(97, 'Electrodomesticos', 1, '#', 'fas fa-mobile-alt', 1, NULL),
(98, 'Computacion', 1, '#', 'fas fa-desktop', 1, NULL),
(170, 'hola 1', 4, '#', 'fas fa-home', 0, NULL),
(171, 'mmm', 4, '#', 'fas fa-home', 1, NULL),
(172, 'url', 4, '//', 'fas fa-home', 3, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id_tarea` int(11) NOT NULL,
  `residente` varchar(50) NOT NULL,
  `tarea` varchar(150) NOT NULL,
  `comentario` varchar(500) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id_tarea`, `residente`, `tarea`, `comentario`, `estado`, `fecha`) VALUES
(25, 'Marco Antonio Eleno Tovar', ' estoy tratando de pasar una imagen de python a html pero tengo dificultades al momento de abrir la imagen', '', 'Cancelada', '2021-06-01'),
(26, 'Ricardo Baeza Candor', ' I am trying to pass an image from python to html but I am having difficulty opening the image', '', 'Pausada', '2021-06-16'),
(29, 'Marco Antonio Eleno Tovar', ' I am trying to pass an image from python to html but I am having difficulty opening the image', '', 'Terminada', '2021-06-03'),
(45, 'Ricardo Baeza Candor', ' pausardsa', '', 'Cancelada', '2021-06-27'),
(65, 'Marco Antonio Eleno Tovar', ' qqqqqqqqqqqqqqq', '', 'Terminada', '2021-06-27'),
(66, 'Marco Antonio Eleno Tovar', ' dddd', '', 'Terminada', '2021-06-27'),
(67, 'Ricardo Baeza Candor', 'dddddddddddfffffffff', '', 'Activa', '2021-06-27'),
(68, 'Marco Antonio Eleno Tovar', ' hola c', '', 'Cancelada', '2021-06-27'),
(69, 'Marco Antonio Eleno Tovar', ' g', '', 'Pausada', '2021-06-27'),
(70, 'Marco Antonio Eleno Tovar', ' ff', '', 'Terminada', '2021-06-27'),
(71, 'Ricardo Baeza Candor', 'hhh', '', 'Activa', '2021-06-27'),
(72, 'Marco Antonio Eleno Tovar', ' i', '', 'Cancelada', '2021-06-27'),
(73, 'Manuel Mora Neri', 'hola', '', 'Activa', '2021-06-27'),
(74, 'Marco Antonio Eleno Tovar', ' fff', '', 'Cancelada', '2021-06-27'),
(75, 'Marco Antonio Eleno Tovar', ' hola', '', 'Cancelada', '2021-06-29'),
(76, 'Marco Antonio Eleno Tovar', ' hola https://www.facebook.com/', '', 'Cancelada', '2021-06-29'),
(77, 'Ricardo Baeza Candor', ' hola https://www.facebook.com/', '', 'Cancelada', '2021-06-29'),
(78, 'Marco Antonio Eleno Tovar', ' hola http://localhost:82/residencia/', '', 'Cancelada', '2021-06-29'),
(79, 'Marco Antonio Eleno Tovar', ' http://localhost:82/residencia/', '', 'Cancelada', '2021-06-29'),
(80, 'Marco Antonio Eleno Tovar', ' https://www.google.com/', '', 'Cancelada', '2021-06-29'),
(81, 'Marco Antonio Eleno Tovar', ' https://www.google.com/ hi', '', 'Activa', '2021-06-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiempo`
--

CREATE TABLE `tiempo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `hora` varchar(50) NOT NULL,
  `dia` date NOT NULL,
  `h_inicio` time NOT NULL,
  `h_fin` time DEFAULT NULL,
  `play` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tiempo`
--

INSERT INTO `tiempo` (`id`, `nombre`, `hora`, `dia`, `h_inicio`, `h_fin`, `play`) VALUES
(234, 'Marco Antonio Eleno Tovar', '5:1:33', '2021-07-23', '11:21:37', '11:23:11', b'0'),
(235, 'Marco Antonio Eleno Tovar', '0:52:14', '2021-07-22', '08:15:52', '08:18:06', b'0'),
(236, 'Marco Antonio Eleno Tovar', '1:1:37', '2021-07-21', '08:18:08', '08:19:46', b'0'),
(237, 'Ricardo Baeza Candor', '3:0:4', '2021-07-23', '08:19:44', '08:19:49', b'0'),
(238, 'Ricardo Baeza Candor', '3:20:21', '2021-07-27', '13:25:04', '16:45:26', b'0'),
(239, 'Marco Antonio Eleno Tovar', '3:20:17', '2021-07-27', '13:25:06', '16:45:24', b'0'),
(240, 'Marco Antonio Eleno Tovar', '00 :00 :00 ', '2021-07-29', '09:18:46', '09:18:47', b'0'),
(241, 'Marco Antonio Eleno Tovar', '00 :00 :00 ', '2021-07-29', '09:18:47', '09:18:47', b'0'),
(242, 'Marco Antonio Eleno Tovar', '00 :00 :00 ', '2021-07-29', '09:18:47', '09:18:48', b'0'),
(243, 'Marco Antonio Eleno Tovar', '00 :00 :00 ', '2021-07-29', '09:18:48', '09:18:48', b'0'),
(244, 'Marco Antonio Eleno Tovar', '00 :00 :00 ', '2021-07-29', '09:18:48', '09:18:49', b'0'),
(245, 'Marco Antonio Eleno Tovar', '00 :00 :00 ', '2021-07-29', '09:18:49', '09:18:49', b'0'),
(246, 'Marco Antonio Eleno Tovar', '00 :00 :00 ', '2021-07-29', '09:18:50', '09:18:50', b'0'),
(247, 'Marco Antonio Eleno Tovar', '00 :00 :00 ', '2021-07-29', '09:18:50', '09:18:50', b'0'),
(248, 'Marco Antonio Eleno Tovar', '00 :00 :00 ', '2021-07-29', '09:18:50', '09:18:51', b'0'),
(249, 'Marco Antonio Eleno Tovar', '00 :00 :00 ', '2021-07-29', '09:18:51', '09:18:51', b'0'),
(250, 'Marco Antonio Eleno Tovar', '00 :00 :00 ', '2021-07-29', '09:18:51', '09:18:52', b'0'),
(251, 'Marco Antonio Eleno Tovar', '00 :00 :00 ', '2021-07-29', '09:18:52', '09:18:52', b'0'),
(252, 'Marco Antonio Eleno Tovar', '00 :00 :00 ', '2021-07-29', '09:18:52', '09:18:53', b'0'),
(253, 'Marco Antonio Eleno Tovar', '00 :00 :00 ', '2021-07-29', '09:18:53', '09:18:53', b'0'),
(254, 'Marco Antonio Eleno Tovar', '00 :00 :00 ', '2021-07-29', '13:08:30', '13:08:31', b'0'),
(255, 'Marco Antonio Eleno Tovar', '0:0:1', '2021-07-30', '09:53:19', '09:53:21', b'0'),
(256, 'Marco Antonio Eleno Tovar', '0:5:1', '2021-07-30', '10:20:13', '10:25:15', b'0'),
(257, 'Marco Antonio Eleno Tovar', '0:1:42', '2021-07-30', '10:25:16', '10:26:58', b'0'),
(258, 'Jose Ricardo Baeza Candor', '5:0:2', '2021-07-30', '10:26:59', '10:27:01', b'0'),
(259, 'Marco Antonio Eleno Tovar', '0:0:1', '2021-07-30', '10:27:04', '10:27:05', b'0'),
(260, 'Marco Antonio Eleno Tovar', '0:0:9', '2021-07-30', '10:36:42', '10:36:52', b'0'),
(261, 'Marco Antonio Eleno Tovar', '0:2:37', '2021-07-30', '10:37:00', '10:39:38', b'0'),
(262, 'Marco Antonio Eleno Tovar', '0:0:5', '2021-07-30', '11:44:55', '11:45:00', b'0'),
(263, 'Marco Antonio Eleno Tovar', '0:0:7', '2021-07-30', '12:08:20', '12:08:28', b'0'),
(264, 'Marco Antonio Eleno Tovar', '0:0:3', '2021-08-07', '08:54:25', '08:54:29', b'0'),
(265, 'Marco Antonio Eleno Tovar', '0:21:2', '2021-08-11', '21:43:05', '21:43:07', b'0'),
(266, 'Marco Antonio Eleno Tovar', '0:0:29', '2021-08-03', '23:30:21', '23:30:50', b'0'),
(267, 'Marco Antonio Eleno Tovar', '0:1:1', '2021-08-06', '09:57:36', '09:58:41', b'0'),
(268, 'Marco Antonio Eleno Tovar', '0:4:5', '2021-08-06', '09:58:42', '10:02:49', b'0'),
(269, 'Marco Antonio Eleno Tovar', '0:0:11', '2021-08-06', '10:05:10', '10:05:21', b'0'),
(270, 'Marco Antonio Eleno Tovar', '0:0:17', '2021-08-06', '10:05:33', '10:05:50', b'0'),
(271, 'Marco Antonio Eleno Tovar', '0:0:18', '2021-08-06', '10:05:53', '10:06:12', b'0'),
(272, 'Marco Antonio Eleno Tovar', '0:1:46', '2021-08-06', '10:11:48', '10:13:36', b'0'),
(273, 'Marco Antonio Eleno Tovar', '0:0:5', '2021-08-06', '10:14:23', '10:14:28', b'0'),
(274, 'Marco Antonio Eleno Tovar', '0:0:13', '2021-08-06', '10:19:45', '10:19:59', b'0'),
(275, 'Marco Antonio Eleno Tovar', '0:0:5', '2021-08-06', '10:21:50', '10:21:56', b'0'),
(278, 'Marco Antonio Eleno Tovar', '0:0:1', '2021-08-06', '10:22:26', '10:22:28', b'0'),
(279, 'Jose Ricardo Baeza Candor', '0:0:3', '2021-08-06', '10:24:57', '10:25:00', b'0'),
(280, 'Gerardo Sanchez Diaz', '0:0:4', '2021-08-06', '10:25:29', '10:25:33', b'0'),
(281, 'Marco Antonio Eleno Tovar', '0:0:3', '2021-08-06', '10:26:21', '10:26:25', b'0'),
(282, 'Marco Antonio Eleno Tovar', '0:0:27', '2021-08-06', '10:27:09', '10:27:36', b'0'),
(283, 'Marco Antonio Eleno Tovar', '0:0:29', '2021-08-06', '10:27:43', '10:28:12', b'0'),
(284, 'Marco Antonio Eleno Tovar', '0:0:16', '2021-08-06', '10:28:15', '10:28:31', b'0'),
(285, 'Marco Antonio Eleno Tovar', '0:1:2', '2021-08-06', '10:28:32', '10:29:34', b'0'),
(286, 'Marco Antonio Eleno Tovar', '0:0:20', '2021-08-06', '10:29:40', '10:30:00', b'0'),
(287, 'Marco Antonio Eleno Tovar', '0:1:0', '2021-08-06', '10:30:06', '10:31:07', b'0'),
(288, 'Marco Antonio Eleno Tovar', '0:0:42', '2021-08-06', '10:31:13', '10:31:56', b'0'),
(289, 'Marco Antonio Eleno Tovar', '0:12:20', '2021-08-06', '10:31:59', '10:44:20', b'0'),
(290, 'Marco Antonio Eleno Tovar', '0:0:4', '2021-08-06', '10:46:54', '10:46:58', b'0'),
(291, 'Marco Antonio Eleno Tovar', '0:0:23', '2021-08-06', '10:47:14', '10:47:47', b'0'),
(292, 'Marco Antonio Eleno Tovar', '0:0:10', '2021-08-06', '10:47:54', '10:58:56', b'0'),
(293, 'Marco Antonio Eleno Tovar', '0:1:5', '2021-08-06', '10:58:58', '11:00:03', b'0'),
(294, 'Marco Antonio Eleno Tovar', '0:0:18', '2021-08-06', '11:10:00', '11:10:19', b'0'),
(295, 'Marco Antonio Eleno Tovar', '0:0:4', '2021-08-06', '11:10:30', '11:10:35', b'0'),
(296, 'Marco Antonio Eleno Tovar', '0:0:28', '2021-08-06', '11:11:20', '11:11:48', b'0'),
(297, 'Marco Antonio Eleno Tovar', '0:0:6', '2021-08-06', '11:12:38', '11:12:44', b'0'),
(298, 'Marco Antonio Eleno Tovar', '0:1:4', '2021-08-06', '11:12:49', '11:13:53', b'0'),
(299, 'Marco Antonio Eleno Tovar', '0:0:6', '2021-08-06', '11:13:57', '11:14:03', b'0'),
(300, 'Marco Antonio Eleno Tovar', '120:55:2', '2021-08-06', '13:07:17', '14:02:21', b'0'),
(301, 'Jose Ricardo Baeza Candor', '120:53:50', '2021-08-06', '13:08:36', '14:02:28', b'0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_control`
--

CREATE TABLE `user_control` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `nomCom` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `img_user` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user_control`
--

INSERT INTO `user_control` (`id`, `nombre`, `clave`, `nomCom`, `Correo`, `img_user`) VALUES
(1, 'marco ', '1234', 'Marco Antonio Eleno Tovar', 'marco@gmail.com', 'img/16281731621978451628173162.jpg'),
(3, 'ricardo', '1234', 'Jose Ricardo Baeza Candor', 'ricardo@gmail.com', 'img/36281731621978451628173162.jpg'),
(10, 'miguel', '1111', 'miguel Eleno', 'miguel@gmail.com', 'img/user.png'),
(11, 'juan', '1234', 'juan Perez', 'juan@gmail.com', 'img/user.png'),
(16, 'v', '1111', 'Ventas', 'PRUEBA@GMAIL.COM', 'img/user.png'),
(17, 'g', '2222', 'Ventas2', 'marcku355@gmail.com', 'img/16285255062439891628525506.jpg'),
(28, 'mm', '1234', 'migueieee', 'PRUEBA@GMAIL.COM', 'img/user.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `nomCom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `clave`, `nomCom`) VALUES
(1, 'marco eleno', '1234', 'Marco Antonio Eleno Tovar'),
(2, 'ricardo', '1234', 'Jose Ricardo Baeza Candor'),
(8, 'juan', '1234', 'Juan Sánchez Pérez '),
(9, 'Gerardo', '1234', 'Gerardo Sanchez Diaz'),
(10, 'Manuel', '1234', 'Manuel Mora Neri'),
(11, 'Victor', '1234', 'Victor Del Rio Ramos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `app_menu`
--
ALTER TABLE `app_menu`
  ADD PRIMARY KEY (`idM`);

--
-- Indices de la tabla `app_menudetalle`
--
ALTER TABLE `app_menudetalle`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id_tarea`);

--
-- Indices de la tabla `tiempo`
--
ALTER TABLE `tiempo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_control`
--
ALTER TABLE `user_control`
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
-- AUTO_INCREMENT de la tabla `app_menu`
--
ALTER TABLE `app_menu`
  MODIFY `idM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `app_menudetalle`
--
ALTER TABLE `app_menudetalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id_tarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `tiempo`
--
ALTER TABLE `tiempo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;

--
-- AUTO_INCREMENT de la tabla `user_control`
--
ALTER TABLE `user_control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
