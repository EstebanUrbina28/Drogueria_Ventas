-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2021 a las 20:33:35
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `drogueria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE `almacen` (
  `id` int(10) NOT NULL,
  `pedidos_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_usuario` int(10) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `cedula` int(10) NOT NULL,
  `genero` varchar(1) NOT NULL,
  `telefono` int(15) NOT NULL,
  `direccion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_usuario`, `nombre`, `cedula`, `genero`, `telefono`, `direccion`) VALUES
(1, 'Monica bravo ', 59829325, 'F', 7293502, 'CARRERA 22 D # 507'),
(2, 'Andrea barco ', 1085312696, 'F', 319212384, 'CARRERA 22 2 07'),
(3, 'Fabian Urbina ', 1087524354, 'M', 7293502, 'CARRERA 22 D # 507'),
(4, 'Diego Bravo ', 5998234, 'M', 7293502, 'CARRERA 22 D # 507'),
(5, 'Marcela Bravo ', 1092836421, 'F', 7293502, 'CARRERA 22 D # 507'),
(6, 'Jhon lopez ', 5983434, 'M', 7293502, 'CARRERA 22 D # 507'),
(7, 'Javier obando ', 2147483647, 'M', 7293502, 'CARRERA 123'),
(8, 'Carolina mejia ', 59345234, 'F', 7293502, 'CARRERA 334'),
(9, 'Milena estrada ', 1234567, 'F', 7293502, 'CARRERA 2234'),
(10, 'sofia mendoza ', 9384656, 'F', 7293502, 'CARRERA 22 D # 500'),
(11, 'Alejandra melo ', 9384646, 'F', 7293502, 'CARRERA 22 D # 123'),
(12, 'Daniel obando ', 834757358, 'M', 7293502, 'CARRERA 22 D # 902'),
(13, 'Valentina  ', 908364, 'F', 7293502, 'CARRERA 22 D # 123'),
(14, 'Helen bravo', 108624344, 'F', 7293502, 'CARRERA 22 D # 093'),
(15, 'Ana bravo ', 94563845, 'F', 7293502, 'CARRERA 22 D # 133'),
(16, 'Lucia mendoza ', 2736465, 'F', 7293502, 'CARRERA 22 D # 123'),
(17, 'jhoana burgos ', 5982345, 'F', 7293502, 'CARRERA 22 D # 987'),
(18, 'alison mejia ', 59829345, 'F', 7293502, 'CARRERA 22 D # 874'),
(19, 'clientes varios ', 59829334, 'M', 7293502, 'CARRERA 22 D # 653'),
(20, 'jose falcao ', 59829305, 'M', 7293502, 'CARRERA 22 D # 736'),
(21, 'james obando ', 59345, 'M', 7293502, 'CARRERA 22 D # 974');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(10) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `nombre` varchar(10) DEFAULT NULL,
  `cantidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pruductos`
--

CREATE TABLE `pruductos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(50) DEFAULT NULL,
  `fecha_ven` date NOT NULL DEFAULT current_timestamp(),
  `precio` float(8,2) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pruductos`
--

INSERT INTO `pruductos` (`id`, `nombre`, `cantidad`, `fecha_ven`, `precio`, `tipo`) VALUES
(1, 'Simvastatina', 23, '0000-00-00', 5000.00, 'Analgesico'),
(2, 'Simvastatina', 2, '0000-00-00', 90000.00, 'AntialÃ©rgicos'),
(3, 'Aspirina', 12, '0000-00-00', 30000.00, 'Antiinfecciosos'),
(4, 'Ramipril', 6, '0000-00-00', 20000.00, 'Antiinflamatorios'),
(5, 'Amlodipina', 7, '0000-00-00', 45000.00, 'AntipirÃ©ticos'),
(6, 'Atorvastatina', 12, '0000-00-00', 24500.00, 'AntipirÃ©ticos'),
(7, 'Paracetamol', 45, '0000-00-00', 102000.00, 'Antitusivos y mucolÃ'),
(8, 'Omeprazol', 5, '0000-00-00', 90000.00, 'Antitusivos y mucolÃ'),
(9, 'Nivela Tarro', 50, '0000-00-00', 200000.00, 'Antitusivos y mucolÃ'),
(10, 'Omeprazol', 5, '0000-00-00', 25000.00, 'Analgesico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(10) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `producuto_id` int(11) NOT NULL,
  `cantidad` int(8) DEFAULT NULL,
  `fecha_Venta` timestamp NULL DEFAULT NULL,
  `total` float(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `cliente_id`, `producuto_id`, `cantidad`, `fecha_Venta`, `total`) VALUES
(1, 11, 3, 1, '2021-05-19 18:10:19', 100000.00),
(2, 18, 3, 3, '2021-05-19 18:20:29', 30000.00),
(3, 15, 6, 3, '2021-05-19 18:20:41', 400000.00),
(4, 2, 10, 4, '2021-05-19 18:20:54', 40000.00),
(5, 8, 10, 5, '2021-05-19 18:21:07', 500000.00),
(6, 19, 7, 6, '2021-05-19 18:21:20', 60000.00),
(7, 4, 1, 7, '2021-05-19 18:21:38', 30000.00),
(9, 21, 9, 9, '2021-05-19 18:21:54', 100000.00),
(10, 13, 5, 10, '2021-05-19 18:22:04', 100000.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pruductos`
--
ALTER TABLE `pruductos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `producuto_id` (`producuto_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `almacen`
--
ALTER TABLE `almacen`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pruductos`
--
ALTER TABLE `pruductos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9091;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id_usuario`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`producuto_id`) REFERENCES `pruductos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
