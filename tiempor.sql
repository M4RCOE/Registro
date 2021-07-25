-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 25-07-2021 a las 17:38:46
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
(25, 'Marco Antonio Eleno Tovar', ' estoy tratando de pasar una imagen de python a html pero tengo dificultades al momento de abrir la imagen', 'buen trabajo', 'Terminada', '2021-06-01'),
(26, 'Ricardo Baeza Candor', 'I am trying to pass an image from python to html but I am having difficulty opening the image', '', 'Activa', '2021-06-16'),
(27, 'Marco Antonio Eleno Tovar', 'como puedo pasar una imagen de python a html?', '', 'Activa', '2021-06-01'),
(28, 'Marco Antonio Eleno Tovar', ' I am trying to pass an image from python to html but I am having difficulty opening the image', '', 'Cancelada', '2021-06-01');

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
(234, 'Marco Antonio Eleno Tovar', '0:1:33', '2021-07-24', '11:21:37', '11:23:11', b'0'),
(235, 'Marco Antonio Eleno Tovar', '0:2:14', '2021-07-25', '08:15:52', '08:18:06', b'0'),
(236, 'Marco Antonio Eleno Tovar', '0:1:37', '2021-07-25', '08:18:08', '08:19:46', b'0'),
(237, 'Ricardo Baeza Candor', '0:0:4', '2021-07-25', '08:19:44', '08:19:49', b'0');

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
(2, 'ricardo', '1234', 'Ricardo Baeza Candor');

--
-- Índices para tablas volcadas
--

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
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id_tarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `tiempo`
--
ALTER TABLE `tiempo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
