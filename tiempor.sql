-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-07-2021 a las 15:51:23
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
-- Estructura de tabla para la tabla `tiempo`
--

CREATE TABLE `tiempo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `hora` varchar(50) NOT NULL,
  `dia` date NOT NULL,
  `h_inicio` varchar(50) NOT NULL,
  `h_fin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tiempo`
--

INSERT INTO `tiempo` (`id`, `nombre`, `hora`, `dia`, `h_inicio`, `h_fin`) VALUES
(1, 'Marco Antonio Eleno Tovar', '00:00:00', '0000-00-00', '', ''),
(2, 'Marco Antonio Eleno Tovar', '00:00:00', '0000-00-00', '', ''),
(3, 'Marco Antonio Eleno Tovar', '0 :0 :11', '2021-07-09', '', ''),
(4, 'Marco Antonio Eleno Tovar', '0 :0 :0 ', '2021-07-10', '11:39:43', '13:4:43'),
(5, 'Marco Antonio Eleno Tovar', '0 :0 :0 ', '2021-07-10', '13:6:42', '13:6:44'),
(6, 'Marco Antonio Eleno Tovar', '0 :0 :0 ', '2021-07-11', '10:48:25', '10:50:21'),
(7, 'Marco Antonio Eleno Tovar', '0 :0 :0 ', '2021-07-11', '10:50:24', '10:50:51'),
(8, 'Marco Antonio Eleno Tovar', '0 :0 :0 ', '2021-07-11', '10:50:51', '11:3:45'),
(9, 'Marco Antonio Eleno Tovar', '0 :0 :0 ', '2021-07-11', '11:3:45', '11:31:46'),
(10, 'Marco Antonio Eleno Tovar', '0 :0 :0 ', '2021-07-11', '11:32:40', '11:32:40'),
(11, 'Marco Antonio Eleno Tovar', '0 :0 :0 ', '2021-07-11', '11:34:45', '11:34:45'),
(12, 'Marco Antonio Eleno Tovar', '0 :0 :0 ', '2021-07-11', '11:39:4', '11:57:40'),
(13, 'Marco Antonio Eleno Tovar', '0 :0 :0 ', '2021-07-11', '11:57:41', '11:57:51'),
(14, 'Marco Antonio Eleno Tovar', '0 :0 :0 ', '2021-07-11', '11:58:3', '12:4:17'),
(15, 'Marco Antonio Eleno Tovar', '0 :0 :9', '2021-07-11', '12:4:49', '12:5:6'),
(16, 'Marco Antonio Eleno Tovar', '0 :0 :4', '2021-07-12', '8:45:11', '8:45:18'),
(17, 'Marco Antonio Eleno Tovar', '0 :0 :8', '2021-07-12', '9:43:19', '9:43:22'),
(18, 'Marco Antonio Eleno Tovar', '0 :0 :8', '2021-07-12', '10:21:42', '9:43:22'),
(19, 'Marco Antonio Eleno Tovar', '0 :0 :7', '2021-07-12', '10:31:51', '10:31:53'),
(20, 'Marco Antonio Eleno Tovar', '0 :0 :4', '2021-07-12', '10:32:0', '10:32:19'),
(21, 'Marco Antonio Eleno Tovar', '0 :0 :8', '2021-07-12', '10:32:23', '10:33:18'),
(22, 'Marco Antonio Eleno Tovar', '0 :0 :8', '2021-07-12', '10:34:29', '10:34:32'),
(23, 'Marco Antonio Eleno Tovar', '0 :0 :3', '2021-07-12', '11:42:5', '12:11:12'),
(24, 'Marco Antonio Eleno Tovar', '0 :0 :23', '2021-07-12', '13:28:4', '20:28:41');

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
(1, 'marco eleno', '1234', 'Marco Antonio Eleno Tovar');

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `tiempo`
--
ALTER TABLE `tiempo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
