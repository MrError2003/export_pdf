-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-02-2025 a las 04:47:34
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmobiliaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arrendatarios`
--

CREATE TABLE `arrendatarios` (
  `id` int(11) NOT NULL,
  `type_id` enum('CC','TI','CE','NIT') NOT NULL,
  `number_id` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `second_name` varchar(50) DEFAULT NULL,
  `first_last` varchar(50) NOT NULL,
  `second_last` varchar(50) DEFAULT NULL,
  `vivienda_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `arrendatarios`
--

INSERT INTO `arrendatarios` (`id`, `type_id`, `number_id`, `first_name`, `second_name`, `first_last`, `second_last`, `vivienda_id`) VALUES
(1, 'CC', '1098765432', 'Carlos', 'Andrés', 'Ramírez', 'Ortiz', 1),
(2, 'CC', '1087654321', 'Luisa', 'María', 'Fernández', 'Díaz', 2),
(3, 'TI', '1076543210', 'Sofía', 'Isabel', 'Mendoza', 'Gómez', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deudores`
--

CREATE TABLE `deudores` (
  `id` int(11) NOT NULL,
  `type_id` enum('CC','TI','CE','NIT') NOT NULL,
  `number_id` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `second_name` varchar(50) DEFAULT NULL,
  `first_last` varchar(50) NOT NULL,
  `second_last` varchar(50) DEFAULT NULL,
  `arrendatario_number_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `deudores`
--

INSERT INTO `deudores` (`id`, `type_id`, `number_id`, `first_name`, `second_name`, `first_last`, `second_last`, `arrendatario_number_id`) VALUES
(1, 'CC', '2000000001', 'Andrés', 'Felipe', 'García', 'López', '1098765432'),
(2, 'TI', '2000000002', 'Natalia', 'Andrea', 'Gómez', 'Martínez', '1098765432'),
(3, 'CC', '2000000003', 'Camilo', 'José', 'Pérez', 'Hernández', '1087654321'),
(4, 'CC', '2000000004', 'Valentina', 'Sofía', 'Rodríguez', 'Gutiérrez', '1087654321'),
(5, 'TI', '2000000005', 'Felipe', 'Alexander', 'Ramírez', 'Torres', '1076543210'),
(6, 'CC', '2000000006', 'Mariana', 'Elena', 'Díaz', 'Castillo', '1076543210');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades_inmuebles`
--

CREATE TABLE `propiedades_inmuebles` (
  `id` int(11) NOT NULL,
  `propietario_number_id` varchar(20) NOT NULL,
  `tipo` enum('Apartamento','Casa','Local','Oficina') NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `barrio` varchar(50) DEFAULT NULL,
  `departamento` varchar(50) NOT NULL,
  `valor_propiedad` decimal(15,2) NOT NULL,
  `valor_canon` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `propiedades_inmuebles`
--

INSERT INTO `propiedades_inmuebles` (`id`, `propietario_number_id`, `tipo`, `direccion`, `ciudad`, `barrio`, `departamento`, `valor_propiedad`, `valor_canon`) VALUES
(1, '1012345678', 'Apartamento', 'Calle 123 #45-67', 'Bogotá', 'Chapinero', 'Cundinamarca', 250000000.00, 2500000.00),
(2, '1023456789', 'Casa', 'Carrera 89 #12-34', 'Medellín', 'El Poblado', 'Antioquia', 550000000.00, 3500000.00),
(3, '1034567890', 'Local', 'Avenida 50 #15-20', 'Cali', 'San Fernando', 'Valle del Cauca', 300000000.00, 4000000.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE `propietarios` (
  `id` int(11) NOT NULL,
  `type_id` enum('CC','TI','CE','NIT') NOT NULL,
  `number_id` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `second_name` varchar(50) DEFAULT NULL,
  `first_last` varchar(50) NOT NULL,
  `second_last` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `propietarios`
--

INSERT INTO `propietarios` (`id`, `type_id`, `number_id`, `first_name`, `second_name`, `first_last`, `second_last`) VALUES
(1, 'CC', '1012345678', 'Juan', 'Carlos', 'González', 'Pérez'),
(2, 'TI', '1023456789', 'María', 'Fernanda', 'López', 'García'),
(3, 'CC', '1034567890', 'Pedro', NULL, 'Rodríguez', 'Martínez');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arrendatarios`
--
ALTER TABLE `arrendatarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `number_id` (`number_id`),
  ADD KEY `vivienda_id` (`vivienda_id`);

--
-- Indices de la tabla `deudores`
--
ALTER TABLE `deudores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `number_id` (`number_id`),
  ADD KEY `arrendatario_number_id` (`arrendatario_number_id`);

--
-- Indices de la tabla `propiedades_inmuebles`
--
ALTER TABLE `propiedades_inmuebles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `propietario_number_id` (`propietario_number_id`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `number_id` (`number_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arrendatarios`
--
ALTER TABLE `arrendatarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `deudores`
--
ALTER TABLE `deudores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `propiedades_inmuebles`
--
ALTER TABLE `propiedades_inmuebles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `arrendatarios`
--
ALTER TABLE `arrendatarios`
  ADD CONSTRAINT `arrendatarios_ibfk_1` FOREIGN KEY (`vivienda_id`) REFERENCES `propiedades_inmuebles` (`id`);

--
-- Filtros para la tabla `deudores`
--
ALTER TABLE `deudores`
  ADD CONSTRAINT `deudores_ibfk_1` FOREIGN KEY (`arrendatario_number_id`) REFERENCES `arrendatarios` (`number_id`);

--
-- Filtros para la tabla `propiedades_inmuebles`
--
ALTER TABLE `propiedades_inmuebles`
  ADD CONSTRAINT `propiedades_inmuebles_ibfk_1` FOREIGN KEY (`propietario_number_id`) REFERENCES `propietarios` (`number_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
