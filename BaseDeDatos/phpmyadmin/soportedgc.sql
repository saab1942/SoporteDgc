-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2015 a las 18:26:16
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `soportedgc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `idarea` int(11) NOT NULL,
  `area` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`idarea`, `area`) VALUES
(1, 'DEPOSITO'),
(3, 'PORTERIA'),
(4, 'PERSONAL'),
(5, 'MESA DE ENTRADA'),
(6, 'PROFESIONALES'),
(7, 'CARTOGRAFIA'),
(8, 'ARCHIVO'),
(9, 'ADMINISTRACION'),
(10, 'AGRIMENSURA'),
(11, 'ASESORIA'),
(12, 'SISTEMAS'),
(13, 'VALUACION'),
(14, 'REGIMEN'),
(15, 'INMUEBLES'),
(16, 'SUMARIOS'),
(17, 'SECRETARIA'),
(20, 'MUNICIPIOS'),
(21, 'DIRECCION');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `cambiartonner`
--
CREATE TABLE IF NOT EXISTS `cambiartonner` (
`idDispositivo` int(11)
,`marca` varchar(45)
,`modelo` varchar(45)
,`area` varchar(45)
,`puesto` int(11)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cpu`
--

CREATE TABLE IF NOT EXISTS `cpu` (
  `identificador` varchar(45) DEFAULT NULL,
  `tipo` enum('desktop','notebook','servidor') DEFAULT NULL,
  `Dispositivo_idDispositivo` int(11) NOT NULL,
  `procesador_idprocesador` int(11) NOT NULL,
  `memoria_idmemoria` int(11) NOT NULL,
  `disco_iddisco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disco`
--

CREATE TABLE IF NOT EXISTS `disco` (
  `capacidad` varchar(45) DEFAULT NULL,
  `iddisco` int(11) NOT NULL,
  `Dispositivo_idDispositivo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivo`
--

CREATE TABLE IF NOT EXISTS `dispositivo` (
  `idDispositivo` int(11) NOT NULL,
  `orden` varchar(45) DEFAULT NULL,
  `serie` varchar(45) DEFAULT NULL,
  `marca` varchar(45) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `observaciones` varchar(250) DEFAULT NULL,
  `Posicion_idPosicion` int(11) NOT NULL,
  `Estado_idEstado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dispositivo`
--

INSERT INTO `dispositivo` (`idDispositivo`, `orden`, `serie`, `marca`, `modelo`, `observaciones`, `Posicion_idPosicion`, `Estado_idEstado`) VALUES
(1, '54', 'asdfds4', 'hp', '1102', 'asdf', 1, 1),
(13, '', '', 'hp', '1606dn', '', 20, 1),
(15, '', '', 'hp', '1606dn', '', 21, 1),
(16, '', '', 'hp', '1606dn', '', 22, 1),
(17, '', '', 'Brother', 'HL-2270DW', '', 24, 1),
(18, '', '', 'Brother', 'HL-2270DW', '', 25, 1),
(19, '', '', 'Brother', 'HL-2270DW', '', 26, 1),
(20, '', '', 'hp', '1606dn', '', 23, 1),
(21, '', '', 'Brother', 'HL-2270DW', '', 27, 1),
(22, '', '', 'hp', '1102w', '', 32, 1),
(23, '', '', 'HP', 'Pro 400', '', 28, 1),
(24, '', '', 'HP', 'Pro 400', '', 29, 1),
(25, '', '', 'HP', 'Pro 400', '', 30, 1),
(26, '', '', 'HP', 'Pro 400', '', 41, 1),
(27, '', '', 'HP', 'p1006', '', 42, 1),
(28, '', '', 'HP', 'p1006', '', 43, 1),
(29, '', '', 'HP', '1102w', '', 33, 1),
(30, '', '', 'HP', '1102w', '', 34, 1),
(31, '', '', 'HP', '1102W', '', 5, 1),
(33, '', '', 'HP', '1102W', '', 35, 1),
(34, '', '', 'HP', '1102W', '', 1, 1),
(35, '', '', 'HP', '1102W', '', 1, 1),
(36, '', '', 'HP', '1102W', '', 36, 1),
(37, '', '', 'HP', '2035n', '', 37, 1),
(38, '', '', 'HP', '2035n', '', 41, 1),
(39, '', '', 'HP', '2035n', '', 38, 1),
(42, '', '', 'Samsung', 'ML2165', '', 44, 1),
(43, '', '', 'Samsung', 'ML2165', '', 45, 1),
(44, '', '', 'HP', '2410', '', 46, 1),
(45, '', '', 'HP', '1020', '', 47, 1),
(46, '', '', 'Lexmark', 'E120', '', 48, 1),
(47, '', '', 'Lexmark', '3150nd', '', 49, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estabilizador/ups`
--

CREATE TABLE IF NOT EXISTS `estabilizador/ups` (
  `potencia` varchar(10) DEFAULT NULL,
  `Dispositivo_idDispositivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `idEstado` int(11) NOT NULL,
  `Estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `Estado`) VALUES
(1, 'inactivo'),
(2, 'activo'),
(4, 'reparacion'),
(5, 'donacion'),
(6, 'garantia'),
(7, 'recarga');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impresora`
--

CREATE TABLE IF NOT EXISTS `impresora` (
  `tipo` enum('laser','tinta','matricial') NOT NULL DEFAULT 'laser',
  `ip` varchar(45) DEFAULT NULL,
  `Dispositivo_idDispositivo` int(11) NOT NULL,
  `modelotonner_idmodelotonner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `impresora`
--

INSERT INTO `impresora` (`tipo`, `ip`, `Dispositivo_idDispositivo`, `modelotonner_idmodelotonner`) VALUES
('laser', '0.0.0.0', 13, 15),
('laser', '0.0.0.0', 15, 15),
('laser', '0.0.0.0', 16, 15),
('laser', '0.0.0.0', 17, 4),
('laser', '0.0.0.0', 18, 4),
('laser', '0.0.0.0', 19, 4),
('laser', '0.0.0.0', 20, 15),
('laser', '0.0.0.0', 21, 4),
('laser', '0.0.0.0', 22, 6),
('laser', '0.0.0.0', 23, 5),
('laser', '0.0.0.0', 24, 5),
('laser', '0.0.0.0', 25, 5),
('laser', '192.168.0.207', 26, 5),
('laser', '0.0.0.0', 27, 8),
('laser', '0.0.0.0', 28, 8),
('laser', '0.0.0.0', 29, 6),
('laser', '0.0.0.0', 30, 6),
('laser', '0.0.0.0', 31, 6),
('laser', '0.0.0.0', 33, 6),
('laser', '0.0.0.0', 35, 6),
('laser', '0.0.0.0', 36, 6),
('laser', '0.0.0.0', 37, 7),
('laser', '0.0.0.0', 38, 7),
('laser', '192.168.0.205', 39, 7),
('laser', '0.0.0.0', 42, 9),
('laser', '0.0.0.0', 43, 9),
('laser', '0.0.0.0', 44, 11),
('laser', '0.0.0.0', 45, 12),
('laser', '0.0.0.0', 46, 13),
('laser', '0.0.0.0', 47, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impresora_has_tonner`
--

CREATE TABLE IF NOT EXISTS `impresora_has_tonner` (
  `contadorimpresora` int(11) DEFAULT NULL,
  `contadortonner` int(11) DEFAULT NULL,
  `fecha` date NOT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  `Impresora_Dispositivo_idDispositivo` int(11) DEFAULT NULL,
  `Tonner_idTonner` int(11) DEFAULT NULL,
  `idiht` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `impresora_has_tonner`
--

INSERT INTO `impresora_has_tonner` (`contadorimpresora`, `contadortonner`, `fecha`, `observaciones`, `Impresora_Dispositivo_idDispositivo`, `Tonner_idTonner`, `idiht`) VALUES
(37046, NULL, '2015-02-12', '', 18, 9, 14),
(37570, NULL, '2015-04-17', '', 18, 12, 15),
(38223, NULL, '2015-08-06', '', 18, 8, 16),
(0, NULL, '2014-07-29', '', 13, 31, 17),
(1152, NULL, '2014-08-29', '', 13, 31, 18),
(3149, NULL, '2014-10-10', '', 13, 31, 19),
(5343, NULL, '2014-12-01', '', 13, 31, 20),
(5698, NULL, '2014-12-10', '', 13, 23, 21),
(9000, NULL, '2015-02-11', 'No se tomo el contador esa fecha', 13, 22, 22),
(11853, NULL, '2015-05-22', '', 13, 17, 23),
(14204, NULL, '2015-07-20', 'El valor de la impresora no se tomo, se puso ', 13, 22, 24),
(1634, NULL, '2014-09-15', '', 15, 31, 25),
(17800, NULL, '2014-12-03', '', 15, 31, 26),
(20421, NULL, '2015-05-14', '', 15, 23, 27),
(28200, NULL, '2014-08-20', '', 16, 31, 28),
(30492, NULL, '2014-09-25', '', 16, 31, 29),
(33185, NULL, '2014-10-20', '', 16, 31, 30),
(32327, NULL, '2014-12-01', '', 16, 31, 31),
(24347, NULL, '2014-12-29', '', 16, 31, 32),
(2800, NULL, '2015-03-12', '', 16, 31, 33),
(5890, NULL, '2015-04-21', '', 16, 23, 34),
(8500, NULL, '2015-05-28', '', 16, 24, 35),
(10712, NULL, '2015-06-30', '', 16, 19, 36),
(13712, NULL, '2015-08-27', '', 16, 17, 37),
(0, NULL, '2014-07-29', '', 20, 31, 38),
(3412, NULL, '2014-09-09', '', 20, 31, 39),
(5604, NULL, '2014-10-06', '', 20, 31, 40),
(7534, NULL, '2014-10-31', '', 20, 31, 41),
(8736, NULL, '2014-11-12', '', 20, 31, 42),
(9483, NULL, '2014-11-26', '', 20, 31, 43),
(11449, NULL, '2015-02-05', '', 20, 31, 44),
(11939, NULL, '2015-02-19', '', 20, 31, 45),
(13483, NULL, '2015-03-11', '', 20, 31, 46),
(15653, NULL, '2015-04-09', '', 20, 31, 47),
(17162, NULL, '2015-04-28', '', 20, 24, 48),
(19136, NULL, '2015-05-18', '', 20, 18, 49),
(19200, NULL, '2015-05-19', '', 20, 20, 50),
(21209, NULL, '2015-06-15', '', 20, 19, 51),
(22120, NULL, '2015-06-24', '', 20, 20, 52),
(24065, NULL, '2015-07-22', '', 20, 18, 53),
(26073, NULL, '2015-08-12', '', 20, 24, 54),
(28112, NULL, '2015-09-08', '', 20, 19, 55),
(14239, NULL, '2014-10-08', '', 17, 32, 56),
(16150, NULL, '2015-04-15', '', 17, 15, 57),
(39230, NULL, '2015-02-03', '', 19, 32, 58),
(40800, NULL, '2015-04-17', '', 19, 10, 59),
(41697, NULL, '2015-06-01', '', 19, 13, 60),
(0, NULL, '2014-08-21', 'No se saco contador', 21, 32, 61),
(0, NULL, '2014-10-10', 'no se saco contador', 21, 32, 62),
(41673, NULL, '2014-11-25', '', 21, 32, 63),
(7291, NULL, '2014-11-21', '', 24, 33, 64),
(0, NULL, '2014-12-17', 'no se pudo sacar contador', 21, 32, 65),
(9319, NULL, '2015-04-29', '', 24, 28, 66),
(11717, NULL, '2015-06-15', '', 24, 25, 67),
(51862, NULL, '2015-04-09', '', 21, 32, 68),
(12838, NULL, '2015-07-16', '', 24, 26, 69),
(53680, NULL, '2015-06-29', '', 21, 32, 70),
(6656, NULL, '2014-08-04', '', 23, 33, 71),
(12776, NULL, '2014-09-23', '', 23, 33, 72),
(15040, NULL, '2014-11-07', '', 23, 33, 73),
(17167, NULL, '2015-01-09', '', 23, 33, 74),
(20767, NULL, '2015-05-20', '', 23, 30, 75),
(24656, NULL, '2015-09-01', '', 23, 27, 76),
(2400, NULL, '2014-09-05', '', 25, 33, 77),
(6492, NULL, '2014-11-07', '', 25, 33, 78),
(7952, NULL, '2014-12-19', '', 25, 33, 79),
(10001, NULL, '2015-01-30', '', 25, 33, 80),
(12646, NULL, '2015-05-04', '', 25, 27, 81),
(13202, NULL, '2015-06-16', '', 25, 26, 82),
(0, NULL, '2015-08-19', '', 26, 34, 83),
(15104, NULL, '2015-06-19', '', 25, 28, 84),
(17904, NULL, '2015-08-05', '', 25, 25, 85),
(19434, NULL, '2015-09-04', '', 25, 28, 86),
(48223, NULL, '2014-07-11', '', 38, 35, 87),
(51574, NULL, '2014-10-14', '', 38, 35, 88),
(53862, NULL, '2014-12-12', '', 38, 35, 89),
(55572, NULL, '2014-09-05', '', 37, 35, 90),
(58376, NULL, '2014-10-06', '', 37, 35, 91),
(60879, NULL, '2014-10-31', '', 37, 35, 92),
(63129, NULL, '2014-11-11', '', 37, 35, 93),
(65727, NULL, '2015-11-26', '', 37, 35, 94),
(56387, NULL, '2015-03-18', '', 38, 41, 95),
(69321, NULL, '2015-01-21', '', 37, 35, 96),
(73869, NULL, '2015-04-23', '', 37, 36, 97),
(76369, NULL, '2015-05-28', '', 37, 41, 98),
(58340, NULL, '2015-05-18', '', 38, 38, 99),
(78869, NULL, '2015-07-01', '', 37, 40, 100),
(79388, NULL, '2015-07-23', '', 37, 42, 101),
(61481, NULL, '2015-08-07', '', 38, 41, 102),
(81892, NULL, '2015-09-04', '', 37, 43, 103),
(29659, NULL, '2014-10-08', '', 39, 35, 104),
(32000, NULL, '2015-03-12', 'vaslor estimado', 39, 35, 105),
(34218, NULL, '2015-06-26', '', 39, 36, 106),
(36000, NULL, '2015-09-08', '', 39, 38, 107);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `listarcambios`
--
CREATE TABLE IF NOT EXISTS `listarcambios` (
`idDispositivo` int(11)
,`marca` varchar(45)
,`modelo` varchar(45)
,`fecha` date
,`contadorimpresora` int(11)
,`contadortonner` int(11)
,`observaciones` varchar(45)
,`modelot` varchar(45)
,`codigo` varchar(20)
,`idiht` int(11)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `memoria`
--

CREATE TABLE IF NOT EXISTS `memoria` (
  `idmemoria` int(11) NOT NULL,
  `capacidad` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `Dispositivo_idDispositivo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelotonner`
--

CREATE TABLE IF NOT EXISTS `modelotonner` (
  `idmodelotonner` int(11) NOT NULL,
  `modeloT` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modelotonner`
--

INSERT INTO `modelotonner` (`idmodelotonner`, `modeloT`) VALUES
(2, 'CB4-36A'),
(4, 'TN450-420'),
(5, 'CF2-80A'),
(6, 'CE2-85A'),
(7, 'CE5-05A'),
(8, 'CB4-35A'),
(9, 'D101S'),
(10, 'TN650'),
(11, 'Q65-11A'),
(12, 'Q26-12A'),
(13, '12018SL'),
(15, 'CE2-78A'),
(16, '24B6713');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monitor`
--

CREATE TABLE IF NOT EXISTS `monitor` (
  `pulgadas` varchar(10) DEFAULT NULL,
  `tipo` enum('CRT','LCD','LED') DEFAULT NULL,
  `Dispositivo_idDispositivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento`
--

CREATE TABLE IF NOT EXISTS `movimiento` (
  `idmovimiento` int(11) NOT NULL,
  `movFechInicio` date NOT NULL,
  `movFechFin` date DEFAULT NULL,
  `movDescripcion` varchar(250) DEFAULT NULL,
  `movSolucion` varchar(250) DEFAULT NULL,
  `movEstado` enum('solucionado','proceso','pendiente') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otro`
--

CREATE TABLE IF NOT EXISTS `otro` (
  `Dispositivo_idDispositivo` int(11) NOT NULL,
  `tipo_idtipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posicion`
--

CREATE TABLE IF NOT EXISTS `posicion` (
  `idPosicion` int(11) NOT NULL,
  `puesto` int(11) NOT NULL DEFAULT '0',
  `usuario` varchar(45) DEFAULT NULL,
  `nombreRed` varchar(50) DEFAULT NULL,
  `grupoRed` varchar(45) DEFAULT NULL,
  `ip` varchar(30) DEFAULT NULL,
  `observaciones` varchar(250) DEFAULT NULL,
  `internet` enum('s','n') DEFAULT 'n',
  `area_idarea` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `posicion`
--

INSERT INTO `posicion` (`idPosicion`, `puesto`, `usuario`, `nombreRed`, `grupoRed`, `ip`, `observaciones`, `internet`, `area_idarea`) VALUES
(1, 0, '', '', '', '', '', 'n', 1),
(3, 1, '', '', '', '', '', 'n', 3),
(4, 1, '', '', '', '', '', 'n', 4),
(5, 2, '', '', '', '', '', 'n', 4),
(6, 3, '', '', '', '', '', 'n', 4),
(7, 1, '', '', '', '', '', 'n', 5),
(8, 2, '', '', '', '', '', 'n', 5),
(9, 3, '', '', '', '', '', 'n', 5),
(10, 4, '', '', '', '', '', 'n', 5),
(11, 5, '', '', '', '', '', 'n', 5),
(12, 6, '', '', '', '', '', 'n', 5),
(13, 7, '', '', '', '', '', 'n', 5),
(14, 8, '', '', '', '', '', 'n', 5),
(15, 12, '', '', '', '', '', 'n', 13),
(16, 1, '', '', '', '', '', 'n', 6),
(17, 2, '', '', '', '', '', 'n', 6),
(18, 3, '', '', '', '', '', 'n', 6),
(19, 4, '', '', '', '', '', 'n', 6),
(20, 21, '', '', '', '', '', 'n', 10),
(21, 2, '', '', '', '', '', 'n', 11),
(22, 3, '', '', '', '', '', 'n', 5),
(23, 10, '', '', '', '', '', 'n', 14),
(24, 1, '', '', '', '', '', 'n', 9),
(25, 24, '', '', '', '', '', 'n', 10),
(26, 13, '', '', '', '', '', 'n', 10),
(27, 40, '', '', '', '', '', 'n', 13),
(28, 1, '', '', '', '', '', 'n', 7),
(29, 3, '', '', '', '', '', 'n', 17),
(30, 10, '', '', '', '', '', 'n', 13),
(31, 0, '', '', '', '', '', 'n', 13),
(32, 1, '', '', '', '', '', 'n', 15),
(33, 4, '', '', '', '', '', 'n', 16),
(34, 1, '', '', '', '', '', 'n', 20),
(35, 3, '', '', '', '', '', 'n', 21),
(36, 1, '', '', '', '', '', 'n', 17),
(37, 4, '', '', '', '', '', 'n', 14),
(38, 0, '', '', '', '', '', 'n', 12),
(39, 1, '', '', '', '', '', 'n', 17),
(40, 4, '', '', '', '', '', 'n', 14),
(41, 27, '', '', '', '', '', 'n', 13),
(42, 1, '', '', '', '', '', 'n', 11),
(43, 15, '', '', '', '', '', 'n', 10),
(44, 11, '', '', '', '', '', 'n', 14),
(45, 3, '', '', '', '', '', 'n', 15),
(46, 22, '', '', '', '', '', 'n', 13),
(47, 24, '', '', '', '', '', 'n', 13),
(48, 7, '', '', '', '', '', 'n', 12),
(49, 5, '', '', '', '', '', 'n', 17),
(50, 0, '', '', '', '', '', 'n', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesador`
--

CREATE TABLE IF NOT EXISTS `procesador` (
  `idprocesador` int(11) NOT NULL,
  `frecuencia` varchar(45) DEFAULT NULL,
  `Dispositivo_idDispositivo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recarga`
--

CREATE TABLE IF NOT EXISTS `recarga` (
  `idRecarga` int(11) NOT NULL,
  `rProveedor` varchar(45) DEFAULT NULL,
  `rFechaEnvio` date NOT NULL,
  `rFechaRecepcion` date DEFAULT NULL,
  `rNombLleva` varchar(30) NOT NULL,
  `rNombTrae` varchar(30) NOT NULL,
  `Tonner_idTonner` int(11) NOT NULL,
  `rRendidoFech` date DEFAULT NULL,
  `rObservaciones` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `idtipo` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tonner`
--

CREATE TABLE IF NOT EXISTS `tonner` (
  `idTonner` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `tipo` enum('original','alternativo') NOT NULL DEFAULT 'original',
  `observaciones` varchar(250) DEFAULT NULL,
  `modelotonner_idmodelotonner` int(11) NOT NULL,
  `Estado_idEstado` int(11) NOT NULL,
  `carga` enum('vacio','cargado') DEFAULT 'cargado'
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tonner`
--

INSERT INTO `tonner` (`idTonner`, `codigo`, `tipo`, `observaciones`, `modelotonner_idmodelotonner`, `Estado_idEstado`, `carga`) VALUES
(7, '01', '', '', 4, 1, ''),
(8, '02', '', '', 4, 1, ''),
(9, '03', '', '', 4, 1, ''),
(10, '04', '', '', 4, 1, ''),
(12, '05', '', '', 4, 1, ''),
(13, '06', '', '', 4, 1, ''),
(14, '07', '', '', 4, 1, ''),
(15, '08', '', '', 4, 1, ''),
(16, '09', '', '', 4, 1, ''),
(17, '1', '', '', 15, 1, ''),
(18, '2', '', '', 15, 1, ''),
(19, '3', '', '', 15, 1, ''),
(20, '4', '', '', 15, 1, ''),
(22, '5', '', '', 15, 1, ''),
(23, '6', '', '', 15, 1, ''),
(24, '7', '', '', 15, 1, ''),
(25, '1', '', '', 5, 1, ''),
(26, '2', '', '', 5, 1, ''),
(27, '3', '', '', 5, 1, ''),
(28, '4', '', '', 5, 1, ''),
(30, '5', '', '', 5, 1, ''),
(31, '00', '', 'Este Tonner se usara como comodin, en casos particulares\r\n', 15, 1, ''),
(32, '00', '', '', 4, 1, ''),
(33, '00', '', '', 5, 1, ''),
(34, '6', '', '', 5, 1, ''),
(35, '00', '', '', 7, 1, ''),
(36, '01', '', '', 7, 1, ''),
(38, '02', '', '', 7, 1, ''),
(40, '03', '', '', 7, 1, ''),
(41, '04', '', '', 7, 1, ''),
(42, '05', '', '', 7, 1, ''),
(43, '06', '', '', 7, 1, '');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `tonnervw`
--
CREATE TABLE IF NOT EXISTS `tonnervw` (
`idTonner` int(11)
,`codigo` varchar(20)
,`tipo` enum('original','alternativo')
,`observaciones` varchar(250)
,`modelotonner_idmodelotonner` int(11)
,`Estado_idEstado` int(11)
,`carga` enum('vacio','cargado')
,`idmodelotonner` int(11)
,`modeloT` varchar(45)
,`idEstado` int(11)
,`Estado` varchar(45)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `cambiartonner`
--
DROP TABLE IF EXISTS `cambiartonner`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cambiartonner` AS select `dispositivo`.`idDispositivo` AS `idDispositivo`,`dispositivo`.`marca` AS `marca`,`dispositivo`.`modelo` AS `modelo`,`area`.`area` AS `area`,`posicion`.`puesto` AS `puesto` from (((`dispositivo` join `impresora` on((`dispositivo`.`idDispositivo` = `impresora`.`Dispositivo_idDispositivo`))) join `posicion` on((`posicion`.`idPosicion` = `dispositivo`.`Posicion_idPosicion`))) join `area` on((`area`.`idarea` = `posicion`.`area_idarea`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `listarcambios`
--
DROP TABLE IF EXISTS `listarcambios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `listarcambios` AS select `dispositivo`.`idDispositivo` AS `idDispositivo`,`dispositivo`.`marca` AS `marca`,`dispositivo`.`modelo` AS `modelo`,`impresora_has_tonner`.`fecha` AS `fecha`,`impresora_has_tonner`.`contadorimpresora` AS `contadorimpresora`,`impresora_has_tonner`.`contadortonner` AS `contadortonner`,`impresora_has_tonner`.`observaciones` AS `observaciones`,`modelotonner`.`modeloT` AS `modelot`,`tonner`.`codigo` AS `codigo`,`impresora_has_tonner`.`idiht` AS `idiht` from ((((`dispositivo` join `impresora` on((`dispositivo`.`idDispositivo` = `impresora`.`Dispositivo_idDispositivo`))) join `impresora_has_tonner` on((`impresora`.`Dispositivo_idDispositivo` = `impresora_has_tonner`.`Impresora_Dispositivo_idDispositivo`))) join `tonner` on((`impresora_has_tonner`.`Tonner_idTonner` = `tonner`.`idTonner`))) join `modelotonner` on((`tonner`.`modelotonner_idmodelotonner` = `modelotonner`.`idmodelotonner`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `tonnervw`
--
DROP TABLE IF EXISTS `tonnervw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tonnervw` AS select `tonner`.`idTonner` AS `idTonner`,`tonner`.`codigo` AS `codigo`,`tonner`.`tipo` AS `tipo`,`tonner`.`observaciones` AS `observaciones`,`tonner`.`modelotonner_idmodelotonner` AS `modelotonner_idmodelotonner`,`tonner`.`Estado_idEstado` AS `Estado_idEstado`,`tonner`.`carga` AS `carga`,`modelotonner`.`idmodelotonner` AS `idmodelotonner`,`modelotonner`.`modeloT` AS `modeloT`,`estado`.`idEstado` AS `idEstado`,`estado`.`Estado` AS `Estado` from ((`tonner` join `modelotonner` on((`modelotonner`.`idmodelotonner` = `tonner`.`modelotonner_idmodelotonner`))) join `estado` on((`estado`.`idEstado` = `tonner`.`Estado_idEstado`)));

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idarea`);

--
-- Indices de la tabla `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`Dispositivo_idDispositivo`,`procesador_idprocesador`,`memoria_idmemoria`,`disco_iddisco`),
  ADD KEY `fk_CPU_procesador1_idx` (`procesador_idprocesador`),
  ADD KEY `fk_CPU_memoria1_idx` (`memoria_idmemoria`),
  ADD KEY `fk_CPU_disco1_idx` (`disco_iddisco`);

--
-- Indices de la tabla `disco`
--
ALTER TABLE `disco`
  ADD PRIMARY KEY (`iddisco`);

--
-- Indices de la tabla `dispositivo`
--
ALTER TABLE `dispositivo`
  ADD PRIMARY KEY (`idDispositivo`),
  ADD KEY `fk_Dispositivo_Estado1_idx` (`Estado_idEstado`);

--
-- Indices de la tabla `estabilizador/ups`
--
ALTER TABLE `estabilizador/ups`
  ADD PRIMARY KEY (`Dispositivo_idDispositivo`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `impresora`
--
ALTER TABLE `impresora`
  ADD PRIMARY KEY (`Dispositivo_idDispositivo`),
  ADD KEY `fk_Impresora_Dispositivo1_idx` (`Dispositivo_idDispositivo`),
  ADD KEY `fk_Impresora_modelotonner1_idx` (`modelotonner_idmodelotonner`);

--
-- Indices de la tabla `impresora_has_tonner`
--
ALTER TABLE `impresora_has_tonner`
  ADD PRIMARY KEY (`idiht`),
  ADD KEY `fk_Impresora_has_Tonner_Tonner1_idx` (`Tonner_idTonner`),
  ADD KEY `fk_Impresora_has_Tonner_Impresora1_idx` (`Impresora_Dispositivo_idDispositivo`);

--
-- Indices de la tabla `memoria`
--
ALTER TABLE `memoria`
  ADD PRIMARY KEY (`idmemoria`);

--
-- Indices de la tabla `modelotonner`
--
ALTER TABLE `modelotonner`
  ADD PRIMARY KEY (`idmodelotonner`);

--
-- Indices de la tabla `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`Dispositivo_idDispositivo`);

--
-- Indices de la tabla `movimiento`
--
ALTER TABLE `movimiento`
  ADD PRIMARY KEY (`idmovimiento`);

--
-- Indices de la tabla `otro`
--
ALTER TABLE `otro`
  ADD PRIMARY KEY (`Dispositivo_idDispositivo`,`tipo_idtipo`),
  ADD KEY `fk_otro_tipo1_idx` (`tipo_idtipo`);

--
-- Indices de la tabla `posicion`
--
ALTER TABLE `posicion`
  ADD PRIMARY KEY (`idPosicion`);

--
-- Indices de la tabla `procesador`
--
ALTER TABLE `procesador`
  ADD PRIMARY KEY (`idprocesador`);

--
-- Indices de la tabla `recarga`
--
ALTER TABLE `recarga`
  ADD PRIMARY KEY (`idRecarga`,`Tonner_idTonner`),
  ADD KEY `fk_Recarga_Tonner1_idx` (`Tonner_idTonner`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idtipo`);

--
-- Indices de la tabla `tonner`
--
ALTER TABLE `tonner`
  ADD PRIMARY KEY (`idTonner`),
  ADD KEY `fk_Tonner_modelotonner1_idx` (`modelotonner_idmodelotonner`),
  ADD KEY `fk_Tonner_Estado1_idx` (`Estado_idEstado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `idarea` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `dispositivo`
--
ALTER TABLE `dispositivo`
  MODIFY `idDispositivo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `impresora_has_tonner`
--
ALTER TABLE `impresora_has_tonner`
  MODIFY `idiht` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT de la tabla `modelotonner`
--
ALTER TABLE `modelotonner`
  MODIFY `idmodelotonner` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `posicion`
--
ALTER TABLE `posicion`
  MODIFY `idPosicion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `procesador`
--
ALTER TABLE `procesador`
  MODIFY `idprocesador` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idtipo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tonner`
--
ALTER TABLE `tonner`
  MODIFY `idTonner` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cpu`
--
ALTER TABLE `cpu`
  ADD CONSTRAINT `fk_CPU_Dispositivo1` FOREIGN KEY (`Dispositivo_idDispositivo`) REFERENCES `dispositivo` (`idDispositivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CPU_disco1` FOREIGN KEY (`disco_iddisco`) REFERENCES `disco` (`iddisco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CPU_memoria1` FOREIGN KEY (`memoria_idmemoria`) REFERENCES `memoria` (`idmemoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CPU_procesador1` FOREIGN KEY (`procesador_idprocesador`) REFERENCES `procesador` (`idprocesador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `dispositivo`
--
ALTER TABLE `dispositivo`
  ADD CONSTRAINT `fk_Dispositivo_Estado1` FOREIGN KEY (`Estado_idEstado`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `estabilizador/ups`
--
ALTER TABLE `estabilizador/ups`
  ADD CONSTRAINT `fk_estabilizador/UPS_Dispositivo1` FOREIGN KEY (`Dispositivo_idDispositivo`) REFERENCES `dispositivo` (`idDispositivo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `impresora`
--
ALTER TABLE `impresora`
  ADD CONSTRAINT `fk_Impresora_Dispositivo1` FOREIGN KEY (`Dispositivo_idDispositivo`) REFERENCES `dispositivo` (`idDispositivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Impresora_modelotonner1` FOREIGN KEY (`modelotonner_idmodelotonner`) REFERENCES `modelotonner` (`idmodelotonner`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `impresora_has_tonner`
--
ALTER TABLE `impresora_has_tonner`
  ADD CONSTRAINT `fk_Impresora_has_Tonner_Impresora1` FOREIGN KEY (`Impresora_Dispositivo_idDispositivo`) REFERENCES `impresora` (`Dispositivo_idDispositivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Impresora_has_Tonner_Tonner1` FOREIGN KEY (`Tonner_idTonner`) REFERENCES `tonner` (`idTonner`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `monitor`
--
ALTER TABLE `monitor`
  ADD CONSTRAINT `fk_Monitor_Dispositivo1` FOREIGN KEY (`Dispositivo_idDispositivo`) REFERENCES `dispositivo` (`idDispositivo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `otro`
--
ALTER TABLE `otro`
  ADD CONSTRAINT `fk_otro_Dispositivo1` FOREIGN KEY (`Dispositivo_idDispositivo`) REFERENCES `dispositivo` (`idDispositivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_otro_tipo1` FOREIGN KEY (`tipo_idtipo`) REFERENCES `tipo` (`idtipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `recarga`
--
ALTER TABLE `recarga`
  ADD CONSTRAINT `fk_Recarga_Tonner1` FOREIGN KEY (`Tonner_idTonner`) REFERENCES `tonner` (`idTonner`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tonner`
--
ALTER TABLE `tonner`
  ADD CONSTRAINT `fk_Tonner_Estado1` FOREIGN KEY (`Estado_idEstado`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Tonner_modelotonner1` FOREIGN KEY (`modelotonner_idmodelotonner`) REFERENCES `modelotonner` (`idmodelotonner`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
