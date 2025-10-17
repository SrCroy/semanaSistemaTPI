-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 17-10-2025 a las 22:59:59
-- Versión del servidor: 8.0.43
-- Versión de PHP: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `appdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Reservar_Cita`
--

CREATE TABLE `Reservar_Cita` (
  `id` int NOT NULL,
  `nombre_mascota` varchar(100) NOT NULL,
  `tipo_mascota` enum('Perro','Gato','Ave','Roedor','Reptil','Otro') NOT NULL,
  `nombre_dueno` varchar(200) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `servicio_solicitado` enum('Consulta general','Vacunación','Urgencia','Cirugía','Estética','Control','Otro') NOT NULL,
  `fecha_preferida` date NOT NULL,
  `sintomas_motivo` text,
  `fecha_creacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` enum('Pendiente','Confirmada','Cancelada') DEFAULT 'Pendiente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Reservar_Cita`
--

INSERT INTO `Reservar_Cita` (`id`, `nombre_mascota`, `tipo_mascota`, `nombre_dueno`, `telefono`, `servicio_solicitado`, `fecha_preferida`, `sintomas_motivo`, `fecha_creacion`, `estado`) VALUES
(1, 'Rex', 'Perro', 'Cristian Rubio', '60450515', 'Consulta general', '2025-10-20', 'kdlfhgqwilere', '2025-10-13 20:36:09', 'Confirmada'),
(2, 'Rex', 'Perro', 'Cristian Rubio', '60450515', 'Vacunación', '2025-10-20', 'kdlfhgqwilere', '2025-10-13 20:36:55', 'Pendiente'),
(6, 'Rex', 'Perro', 'Santos', '60450515', 'Consulta general', '2015-10-20', 'ldajf;vhsjdfv', '2025-10-13 21:29:58', 'Cancelada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Visitas_Blog`
--

CREATE TABLE `Visitas_Blog` (
  `id` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `fecha_registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Visitas_Blog`
--

INSERT INTO `Visitas_Blog` (`id`, `nombre`, `apellido`, `correo`, `telefono`, `fecha_registro`) VALUES
(1, 'Cristian Rubio', 'Rubio', 'rubiocr007@gmail.com', '74929399', '2025-10-14 18:32:00'),
(2, 'Cristian Rubio', 'Rubio', 'rubiocr007@gmail.com', '74929399', '2025-10-14 18:34:29'),
(3, 'Cristian Rubio', 'Rubio', 'rubiocr007@gmail.com', '74929399', '2025-10-14 18:37:05'),
(4, 'Cristian Rubio', 'Rubio', 'rubiocr007@gmail.com', '74929399', '2025-10-14 18:40:46'),
(5, 'quevedo', 'Argueta', 'quevedo@gmail.com', '645656565', '2025-10-14 18:41:13'),
(6, 'Cristian Rubio', 'Rubio', 'rubiocr007@gmail.com', '74929399', '2025-10-14 18:42:32');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Reservar_Cita`
--
ALTER TABLE `Reservar_Cita`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Visitas_Blog`
--
ALTER TABLE `Visitas_Blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Reservar_Cita`
--
ALTER TABLE `Reservar_Cita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `Visitas_Blog`
--
ALTER TABLE `Visitas_Blog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
