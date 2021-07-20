-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2021 a las 15:45:54
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hornito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `codpedido` varchar(6) NOT NULL,
  `fech_emipe` date NOT NULL,
  `codusuario` varchar(6) NOT NULL,
  `codtrabajador` varchar(6) NOT NULL,
  `codtipo_recibo` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `cod_producto` varchar(6) NOT NULL,
  `nom_produc` varchar(60) NOT NULL,
  `descri_produc` varchar(60) NOT NULL,
  `precio_produc` decimal(8,2) NOT NULL,
  `stock_produc` int(4) NOT NULL,
  `imagen_produc` varchar(60) NOT NULL,
  `cod_tipo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`cod_producto`, `nom_produc`, `descri_produc`, `precio_produc`, `stock_produc`, `imagen_produc`, `cod_tipo`) VALUES
('P001', 'Hornito', 'Tocino, jamón, chorizo, aceituna, salchicha.', '25.00', 10, '../Imagenes/3.jpg', '001'),
('P002', 'Lasagña de Carne', 'Carne.', '15.00', 20, '../Imagenes/l01.jpg', '002'),
('P003', 'Coca Cola', '500 ml', '3.50', 10, '../Imagenes/b1.jpg', '003'),
('P004', 'Inca Kola', '500 ml', '3.50', 10, '../Imagenes/b2.jpg', '003'),
('P005', 'Hawaiana', 'Jamón, piña', '20.00', 10, '../Imagenes/2.jpg', '001'),
('P006', 'Lasagña de pollo.', 'Pollo.', '15.00', 20, '../Imagenes/l02.png', '002'),
('P007', 'Super Macho', 'Tomate, champigñon, cebolla, pimentón, rocoto.', '27.00', 20, '../Imagenes/6.jpg', '001'),
('P008', 'Lasagña vegetal.', 'Vegetales', '17.00', 20, '../Imagenes/l03.jpg', '002'),
('P009', '4 estaciones', '1/4 queso, 1/4 jamón, 1/4 aceituna, 1/4 frutas.', '27.00', 10, '../Imagenes/7.jpg', '001'),
('P010', 'Calabresa', 'Calabresa', '17.00', 20, '../Imagenes/5.jpg', '001'),
('P011', 'Escosesa', '500 ml', '4.50', 10, '../Imagenes/b3.jpg', '003');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_pedido`
--

CREATE TABLE `producto_pedido` (
  `cod_producto` varchar(6) NOT NULL,
  `codpedido` varchar(6) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `cod_tipo` varchar(6) NOT NULL,
  `nom_tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`cod_tipo`, `nom_tipo`) VALUES
('001', 'Pizzas'),
('002', 'Pastas'),
('003', 'Bebidas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_recibo`
--

CREATE TABLE `tipo_recibo` (
  `codtipo_recibo` varchar(6) NOT NULL,
  `nom_tipore` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `codtrabajador` varchar(6) NOT NULL,
  `dni_trab` varchar(8) NOT NULL,
  `nomtrab` varchar(40) NOT NULL,
  `apeptrab` varchar(40) NOT NULL,
  `apemtrab` varchar(40) NOT NULL,
  `direcciontrab` varchar(60) NOT NULL,
  `telefonotrab` varchar(12) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `codareatrab` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `codusuario` varchar(6) NOT NULL,
  `dni_usu` varchar(8) NOT NULL,
  `nomusu` varchar(40) NOT NULL,
  `apapusu` varchar(40) NOT NULL,
  `apamusu` varchar(40) NOT NULL,
  `direccionusu` varchar(60) NOT NULL,
  `telefonousu` varchar(12) NOT NULL,
  `correousu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`codpedido`),
  ADD KEY `codusuario` (`codusuario`),
  ADD KEY `codtrabajador` (`codtrabajador`),
  ADD KEY `codtipo_recibo` (`codtipo_recibo`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`cod_producto`),
  ADD KEY `cod_tipo` (`cod_tipo`);

--
-- Indices de la tabla `producto_pedido`
--
ALTER TABLE `producto_pedido`
  ADD PRIMARY KEY (`cod_producto`,`codpedido`),
  ADD KEY `codpedido` (`codpedido`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`cod_tipo`);

--
-- Indices de la tabla `tipo_recibo`
--
ALTER TABLE `tipo_recibo`
  ADD PRIMARY KEY (`codtipo_recibo`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`codtrabajador`),
  ADD KEY `codareatrab` (`codareatrab`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codusuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`codtrabajador`) REFERENCES `trabajador` (`codtrabajador`) ON DELETE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`codtipo_recibo`) REFERENCES `tipo_recibo` (`codtipo_recibo`) ON DELETE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_3` FOREIGN KEY (`codusuario`) REFERENCES `usuario` (`codusuario`) ON DELETE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`cod_tipo`) REFERENCES `tipo` (`cod_tipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto_pedido`
--
ALTER TABLE `producto_pedido`
  ADD CONSTRAINT `producto_pedido_ibfk_1` FOREIGN KEY (`cod_producto`) REFERENCES `producto` (`cod_producto`) ON DELETE CASCADE,
  ADD CONSTRAINT `producto_pedido_ibfk_2` FOREIGN KEY (`codpedido`) REFERENCES `pedido` (`codpedido`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
