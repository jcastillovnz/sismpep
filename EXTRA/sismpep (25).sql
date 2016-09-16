-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-09-2016 a las 17:10:08
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sismpep`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t001_usuarios`
--

CREATE TABLE IF NOT EXISTS `t001_usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nivel` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `t001_usuarios`
--

INSERT INTO `t001_usuarios` (`id_usuarios`, `usuario`, `clave`, `estado`, `nivel`) VALUES
(75, 'admin', 'admin', 'Activo', 'administrador'),
(76, 'juan', 'juan', 'Activo', 'Analista'),
(77, 'carlos', 'carlos', 'Activo', ' Analista'),
(78, 'tewewt', 'wtewte', 'Activo', 'Analista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t002_equipos`
--

CREATE TABLE IF NOT EXISTS `t002_equipos` (
  `id_equipo` int(10) NOT NULL,
  `placa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `marca` text COLLATE utf8_spanish_ci NOT NULL,
  `color` text COLLATE utf8_spanish_ci NOT NULL,
  `f_adquisicion` date NOT NULL,
  `propietario` text COLLATE utf8_spanish_ci NOT NULL,
  `f_retirodeactivos` date NOT NULL,
  `numero_de_poliza` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `ano` date NOT NULL,
  `numerofactura` int(20) NOT NULL,
  `procedencia` text COLLATE utf8_spanish_ci NOT NULL,
  `observacion` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `id_usuarios` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `t002_equipos`
--

INSERT INTO `t002_equipos` (`id_equipo`, `placa`, `modelo`, `marca`, `color`, `f_adquisicion`, `propietario`, `f_retirodeactivos`, `numero_de_poliza`, `fecha_vencimiento`, `ano`, `numerofactura`, `procedencia`, `observacion`, `id_usuarios`) VALUES
(10, '3424', '324', '23423', '423423', '2016-08-27', '432423', '2016-08-19', '34234', '2016-08-12', '2016-08-28', 4324, '234', '2342', NULL),
(11, 'ewrwer', 'Renault', 'Otras marcas', 'erwerw', '2016-08-12', 'werewr', '2016-08-26', 'werwer', '2016-08-18', '2016-08-26', 3333, 'rwerwe', 'rwerwerwe                                          ', NULL),
(12, 'sssffs', 'Renault', 'Renault', 'Otros', '2016-08-06', 'fsfs', '2016-08-20', '2', '2016-08-19', '2016-08-20', 2424, '423423', 'fdgdfgfd                            ', NULL),
(13, 'wew', 'corsa', 'Renault', 'Gris', '0000-00-00', '', '2016-08-04', '', '2016-08-11', '0000-00-00', 0, '', 'nada                                                        ', NULL),
(14, 'erwerwr', 'Renault', 'Mitsubishi-motors', 'Gris', '0000-00-00', '', '0000-00-00', '3343', '0000-00-00', '0000-00-00', 0, '', '              ', NULL),
(15, 'fdsf', 'Fiat', 'Mitsubishi-motors', 'Amarillo', '2016-08-06', 'sdffsd', '2016-08-12', 'dfds', '2016-08-19', '2016-08-20', 0, 'dfs', 'dsfsd              ', NULL),
(16, 'ahb343', 'Fiat', 'Miller', 'Blanco', '2016-08-27', 'daniel', '2016-08-11', '3423', '2016-08-10', '2016-08-07', 34324, 'pdvsa', 'todo bien', NULL),
(17, 'er', 'Tampo  sp 400', 'Honda', 'Amarillo', '2016-09-03', 'erwr', '2016-08-26', 'ewrew', '2016-08-24', '2016-08-07', 0, 'werw', 'erwrew              ', NULL),
(18, 'RWER', 'Mototraílla 631-C', 'Fiat', 'Negro', '0000-00-00', 'REWRWE', '2016-08-13', 'REWR', '2016-08-04', '2016-08-27', 0, 'RWER', 'RWERWER', NULL),
(19, 'fgdgd', 'Cargador retroexcavadora 410 g', 'Mitsubishi-motors', 'Amarillo', '2016-08-13', 'gfdg', '2016-08-20', 'gfdfgdf', '2016-08-11', '2016-08-27', 0, 'dfgfd', 'gdfgdf              ', NULL),
(20, 'yreyer', 'Ambulancia c3500 ', 'Fiat', 'Gris', '2016-08-06', 'yreye', '2016-08-25', 'ryeyer', '2016-09-01', '2016-08-07', 0, 'ery', 'carro malo pero bien\r\n                             ', NULL),
(21, 'tyrty', ' Retroexcavadora 580 m ', 'Mitsubishi-motors', 'Amarillo', '2016-08-07', 'trytry', '2016-08-26', 'y54645', '2016-08-18', '2016-08-07', 54654, '564645', 'hfg', NULL),
(22, '4354', 'Camion\r\nPlataforma fvr\r\n', 'Honda', 'Negro', '2016-08-20', '435', '2016-08-19', '3453', '2016-08-18', '2016-08-07', 4353453, '45', '3534534534', NULL),
(23, '43543', 'Ambulancia cargo van', 'Honda', 'Amarillo', '2016-08-26', '43535', '2016-08-12', '43543', '2016-08-25', '2016-08-13', 43, '5345', '3543', NULL),
(24, 'rwe', 'Ambulancia van', 'Miller', 'Rojo', '2016-08-06', 'rewr', '2016-08-26', 'ewre', '2016-08-25', '2016-08-28', 43, '5345', '354', NULL),
(25, 'qwewqe', 'Ambulancia c3500', 'Renault', 'Amarillo', '2016-08-13', 'ewqewq', '2016-08-26', 'e2121', '2016-08-25', '2016-08-06', 0, 'qwrq', 'rqwr', NULL),
(26, 'wqeqwe', 'Camión, fvr', 'Renault', 'Rojo', '2016-08-21', 'ewqe', '2016-08-25', 'wqeqw', '2016-08-17', '2016-08-27', 0, 'eqw', 'qweqwe', NULL),
(27, '32423', 'Camion, fvr', 'Renault', 'Marron', '2016-08-13', '32423', '2016-08-26', '342423', '2016-08-11', '2016-08-28', 342, '34', '23423                            ', NULL),
(28, '54353', 'Camion, cargo chuto', 'Mitsubishi-motors', 'Azul', '2016-08-13', '5645', '2016-08-05', 'rtwere', '2016-08-04', '2016-08-20', 0, 'ttyrturu', 'tutrutr', NULL),
(29, '33423', 'Camion, fvr', 'Honda', 'Amarillo', '2016-08-13', '342432', '2016-09-04', '34', '2016-08-18', '2016-08-27', 32432, '4324', '23423', NULL),
(30, '543543', 'Ambulancia van', 'Renault', 'Rojo', '2016-09-17', '34353453', '2016-10-01', '4534', '2016-09-23', '2016-09-17', 0, '5645464', '65464564', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t003_plan_mantenimiento`
--

CREATE TABLE IF NOT EXISTS `t003_plan_mantenimiento` (
  `id_plan` int(10) NOT NULL,
  `vehiculo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cambio_transmision_caja` date NOT NULL,
  `cambio_aceite_motor` date NOT NULL,
  `revision_aceite_motor_caja` date NOT NULL,
  `combustible` date NOT NULL,
  `engrase` date NOT NULL,
  `cambio_filtros` date NOT NULL,
  `revision_presion_aire` date NOT NULL,
  `id_equipo` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `t003_plan_mantenimiento`
--

INSERT INTO `t003_plan_mantenimiento` (`id_plan`, `vehiculo`, `cambio_transmision_caja`, `cambio_aceite_motor`, `revision_aceite_motor_caja`, `combustible`, `engrase`, `cambio_filtros`, `revision_presion_aire`, `id_equipo`) VALUES
(1, '324234', '2016-08-13', '2016-08-12', '2016-08-05', '2016-08-04', '2016-08-28', '2016-08-12', '2016-08-26', 10),
(2, 'rewrewr', '2016-08-20', '2016-08-12', '2016-08-19', '2016-08-11', '2016-08-26', '2016-08-26', '2016-09-02', 11),
(3, '43w434', '2016-08-26', '2016-08-05', '2016-08-19', '2016-08-25', '2016-08-06', '2016-08-06', '2016-08-19', 12),
(4, 'dfsfsd', '2016-08-19', '2016-08-05', '2016-08-19', '2016-08-10', '2016-08-27', '2016-08-13', '2016-08-05', 15),
(5, 'camion', '2016-08-25', '2016-08-11', '2016-08-28', '2016-08-30', '2016-08-28', '2016-08-26', '2016-08-31', 16),
(6, 'wrerw', '2016-08-13', '2016-08-12', '2016-09-01', '2016-08-02', '2016-08-20', '2016-08-13', '2016-08-19', 17),
(7, 'EWRWER', '2016-08-07', '2016-08-06', '2016-08-05', '2016-08-18', '2016-08-27', '2016-08-27', '2016-08-27', 18),
(8, 'retert', '2016-08-19', '2016-08-12', '2016-08-19', '2016-08-04', '2016-08-27', '2016-08-20', '2016-08-20', 19),
(9, 'yreyer', '2016-08-06', '2016-08-06', '2016-08-11', '2016-08-04', '2016-08-27', '2016-08-12', '2016-08-11', 20),
(10, '5465', '2016-08-20', '2016-08-20', '2016-08-20', '2016-08-11', '2016-08-27', '2016-08-11', '2016-08-24', 21),
(11, '43534', '2016-08-07', '2016-08-12', '2016-08-11', '2016-08-11', '2016-08-20', '2016-08-27', '2016-08-11', 22),
(12, '43534', '2016-08-13', '2016-08-06', '2016-08-04', '2016-08-11', '2016-08-28', '2016-08-24', '2016-08-05', 23),
(13, '4535', '2016-08-07', '2016-08-13', '2016-08-26', '2016-08-11', '2016-08-28', '2016-08-27', '2016-08-13', 24),
(16, 'Lowboys', '2016-08-07', '2016-08-12', '2016-08-12', '2016-08-04', '2016-08-28', '2016-08-14', '2016-08-04', 27),
(17, 'Pata de cabra', '2016-08-12', '2016-08-05', '2016-08-11', '2016-08-05', '2016-08-28', '2016-08-20', '2016-08-12', 28),
(18, 'Tractor', '2016-08-13', '2016-08-10', '2016-08-12', '2016-08-04', '2016-08-26', '2016-08-11', '2016-08-10', 29);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t001_usuarios`
--
ALTER TABLE `t001_usuarios`
  ADD PRIMARY KEY (`id_usuarios`),
  ADD KEY `usuario` (`usuario`,`clave`,`estado`);

--
-- Indices de la tabla `t002_equipos`
--
ALTER TABLE `t002_equipos`
  ADD PRIMARY KEY (`id_equipo`),
  ADD UNIQUE KEY `placa` (`placa`),
  ADD KEY `id` (`id_equipo`),
  ADD KEY `id_2` (`id_equipo`),
  ADD KEY `id_usuarios` (`id_usuarios`);

--
-- Indices de la tabla `t003_plan_mantenimiento`
--
ALTER TABLE `t003_plan_mantenimiento`
  ADD PRIMARY KEY (`id_plan`),
  ADD KEY `id_equipo` (`id_equipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t001_usuarios`
--
ALTER TABLE `t001_usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT de la tabla `t002_equipos`
--
ALTER TABLE `t002_equipos`
  MODIFY `id_equipo` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `t003_plan_mantenimiento`
--
ALTER TABLE `t003_plan_mantenimiento`
  MODIFY `id_plan` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t002_equipos`
--
ALTER TABLE `t002_equipos`
  ADD CONSTRAINT `t002_equipos_fk` FOREIGN KEY (`id_usuarios`) REFERENCES `t001_usuarios` (`id_usuarios`);

--
-- Filtros para la tabla `t003_plan_mantenimiento`
--
ALTER TABLE `t003_plan_mantenimiento`
  ADD CONSTRAINT `t003_plan_mantenimiento_fk` FOREIGN KEY (`id_equipo`) REFERENCES `t002_equipos` (`id_equipo`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
