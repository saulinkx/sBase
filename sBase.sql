-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-04-2018 a las 19:27:42
-- Versión del servidor: 10.0.34-MariaDB
-- Versión de PHP: 7.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jovenes_investigadores_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesos`
--

DROP TABLE IF EXISTS `accesos`;
CREATE TABLE `accesos` (
  `accesoId` int(5) NOT NULL,
  `tipoAccesoId` int(5) DEFAULT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `escuelaId` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `accesos`
--

TRUNCATE TABLE `accesos`;
--
-- Volcado de datos para la tabla `accesos`
--

INSERT INTO `accesos` (`accesoId`, `tipoAccesoId`, `fechaInicio`, `fechaFin`, `escuelaId`) VALUES
(1, 12, '2015-06-08', '2015-10-16', 200),
(2, 2, '2017-02-01', '2017-06-30', 200),
(3, 1, '2015-08-18', '2015-08-28', 200),
(4, 3, '2015-07-06', '2015-07-21', 200),
(5, 4, '2015-08-17', '2015-08-28', 200),
(6, 7, '2015-10-05', '2015-10-09', 200),
(7, 5, '2015-09-23', '2015-10-23', 200),
(8, 8, '2015-12-14', '2015-12-18', 200),
(9, 9, '2015-09-18', '2015-09-19', 200),
(10, 6, '2015-09-28', '2015-10-02', 200),
(11, 10, '2015-11-06', '2015-12-23', 200),
(12, 11, '2016-01-01', '2016-12-31', 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

DROP TABLE IF EXISTS `carreras`;
CREATE TABLE `carreras` (
  `carreraId` int(3) NOT NULL,
  `claveSep` varchar(20) DEFAULT NULL,
  `carrera` varchar(100) DEFAULT NULL,
  `fechaRegistro` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `carreras`
--

TRUNCATE TABLE `carreras`;
--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`carreraId`, `claveSep`, `carrera`, `fechaRegistro`) VALUES
(1, 'ARQU-2004-287', 'ARQUITECTURA (ARQU-2004-287)', '2015-06-09 15:15:41'),
(2, 'ARQU-2010-204', 'ARQUITECTURA (ARQU-2010-204)', '2015-06-09 15:15:41'),
(3, 'COPU-2010-205', 'CONTADOR PÚBLICO (COPU-2010-205)', '2015-06-09 15:15:41'),
(4, 'EAI-2010-01', 'ESPECIALIZACIÓN EN AUTOMATIZACIÓN INDUSTRIAL (EAI-2010-01)', '2015-06-09 15:15:41'),
(5, 'EDOC-2000-011', 'ESPECIALIZACIÓN EN DOCENCIA (EDOC-2000-011)', '2015-06-09 15:15:41'),
(6, 'EIM-2009-01', 'ESPECIALIZACIÓN EN INGENIERÍA MECÁNICA (EIM-2009-01)', '2015-06-09 15:15:41'),
(7, 'ESME-2003-01', 'ESPECIALIZACIÓN EN SISTEMAS MICROELECTROMECÁNICOS (ESME-2003-01)', '2015-06-09 15:15:41'),
(8, 'GAST-2010-215', 'GASTRONOMÍA (GAST-2010-215)', '2015-06-09 15:15:41'),
(9, 'IMEC-2010-228', 'INGENIERÍA  MECÁNICA (IMEC-2010-228)', '2015-06-09 15:15:41'),
(10, 'IAMB-2004-286', 'INGENIERÍA AMBIENTAL (IAMB-2004-286)', '2015-06-09 15:15:41'),
(11, 'IAMB-2010-206', 'INGENIERÍA AMBIENTAL (IAMB-2010-206)', '2015-06-09 15:15:41'),
(12, 'IBIO-2010-235', 'INGENIERÍA BIOMÉDICA', '2015-06-09 15:15:41'),
(13, 'IBQA-2005-288', 'INGENIERÍA BIOQUÍMICA (IBQA-2005-288)', '2015-06-09 15:15:41'),
(14, 'IBQA-2010-207', 'INGENIERÍA BIOQUÍMICA (IBQA-2010-207)', '2015-06-09 15:15:41'),
(15, 'ICIV-2005-289', 'INGENIERÍA CIVIL (ICIV-2005-289)', '2015-06-09 15:15:41'),
(16, 'ICIV-2010-208', 'INGENIERÍA CIVIL (ICIV-2010-208)', '2015-06-09 15:15:41'),
(17, 'IELE-2005-290', 'INGENIERÍA ELÉCTRICA (IELE-2005-290)', '2015-06-09 15:15:41'),
(18, 'IELE-2010-209', 'INGENIERÍA ELÉCTRICA (IELE-2010-209)', '2015-06-09 15:15:41'),
(19, 'IEME-2005-291', 'INGENIERÍA ELECTROMECÁNICA (IEME-2005-291)', '2015-06-09 15:15:41'),
(20, 'IEME-2010-210', 'INGENIERÍA ELECTROMECÁNICA (IEME-2010-210)', '2015-06-09 15:15:41'),
(21, 'IELC-2004-292', 'INGENIERÍA ELECTRÓNICA (IELC-2004-292)', '2015-06-09 15:15:41'),
(22, 'IELC-2010-211', 'INGENIERÍA ELECTRÓNICA (IELC-2010-211)', '2015-06-09 15:15:41'),
(23, 'IADM-2010-213', 'INGENIERÍA EN ADMINISTRACIÓN (IADM-2010-213)', '2015-06-09 15:15:41'),
(24, 'IARGR-2010-214', 'INGENIERÍA EN AGRONOMÍA (IAGR-2006-280)', '2015-06-09 15:15:41'),
(25, 'IAGR-2010-214', 'INGENIERÍA EN AGRONOMÍA (IAGR-2010-214)', '2015-06-09 15:15:41'),
(26, 'IAEV-2012-238', 'INGENIERIA EN ANIMACION DIGITAL Y EFECTOS VISUALES', '2015-06-09 15:15:41'),
(27, 'IDCO-2005-282', 'INGENIERÍA EN DESARROLLO COMUNITARIO (IDCO-2005-282)', '2015-06-09 15:15:41'),
(28, 'IDCO-2010-216', 'INGENIERÍA EN DESARROLLO COMUNITARIO (IDCO-2010-216)', '2015-06-09 15:15:41'),
(29, 'IENR-2010-217', 'INGENIERÍA EN ENERGÍAS RENOVABLES (IENR-2010-217)', '2015-06-09 15:15:41'),
(30, 'IGEO-2005-294', 'INGENIERÍA EN GEOCIENCIAS (IGEO-2005-294)', '2015-06-09 15:15:41'),
(31, 'IGEO-2010-218', 'INGENIERÍA EN GEOCIENCIAS (IGEO-2010-218)', '2015-06-09 15:15:41'),
(32, 'IGEM-2009-201', 'INGENIERÍA EN GESTIÓN EMPRESARIAL (IGEM-2009-201)', '2015-06-09 15:15:41'),
(33, 'IGEM-2008-276', 'INGENIERÍA EN GESTIÓN EMPRESARIAL(IGEM-2008-276)', '2015-06-09 15:15:41'),
(34, 'IIAL-2010-219', 'INGENIERÍA EN INDUSTRIAS ALIMENTARIAS (IIAL-2010-219)', '2015-06-09 15:15:41'),
(35, 'IIAL-2005-285', 'INGENIERÍA EN INDUSTRIAS ALIMENTARIAS(IIAL-2005-285)', '2015-06-09 15:15:41'),
(36, 'IINF-2010-220', 'INGENIERÍA EN INFORMÁTICA (IINF-2010-220)', '2015-06-09 15:15:41'),
(37, 'IIAS-2007-277', 'INGENIERÍA EN INNOVACIÓN AGRÍCOLA SUSTENTABLE (IIAS-2007-277)', '2015-06-09 15:15:41'),
(38, 'IIAS-2010-221', 'INGENIERÍA EN INNOVACIÓN AGRÍCOLA SUSTENTABLE (IIAS-2010-221)', '2015-06-09 15:15:41'),
(39, 'ILOG-2009-202', 'INGENIERÍA EN LOGÍSTICA (ILOG-2009-202)', '2015-06-09 15:15:41'),
(40, 'IMAT-2005-295', 'INGENIERÍA EN MATERIALES (IMAT-2005-295)', '2015-06-09 15:15:41'),
(41, 'IMAT-2010-222', 'INGENIERÍA EN MATERIALES (IMAT-2010-222)', '2015-06-09 15:15:41'),
(42, 'IMCT-2010-229', 'INGENIERÍA EN MECATRONICA (IMCT-2010-229)', '2015-06-09 15:15:41'),
(43, 'INAN-2009-203', 'INGENIERÍA EN NANOTECNOLOGÍA (INAN-2009-203)', '2015-06-09 15:15:41'),
(44, 'ISIC-2004-296', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES (ISIC-2004-296)', '2015-06-09 15:15:41'),
(45, 'ISIC-2010-224', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES (ISIC-2010-224)', '2015-06-09 15:15:41'),
(46, 'ITIC-2010-225', 'INGENIERÍA EN TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIONES (ITIC-2010-225)', '2015-06-09 15:15:41'),
(47, 'IFOR-2006-281', 'INGENIERÍA FORESTAL (IFOR-2006-281)', '2015-06-09 15:15:41'),
(48, 'IFOR-2010-226', 'INGENIERÍA FORESTAL (IFOR-2010-226)', '2015-06-09 15:15:41'),
(49, 'IHID-2010-236', 'INGENIERÍA HIDROLOGICA', '2015-06-09 15:15:41'),
(50, 'IIND-2004-297', 'INGENIERÍA INDUSTRIAL (IIND-2004-297)', '2015-06-09 15:15:41'),
(51, 'IIND-2010-227', 'INGENIERÍA INDUSTRIAL (IIND-2010-227)', '2015-06-09 15:15:41'),
(52, 'IMEC-2005-298', 'INGENIERÍA MECÁNICA (IMEC-2005-298)', '2015-06-09 15:15:41'),
(53, 'IMCT-2005-284', 'INGENIERÍA MECATRONICA (IMCT-2005-284)', '2015-06-09 15:15:41'),
(54, 'IPET-2010-231', 'INGENIERÍA PETROLERA (IPET-2010-231)', '2015-06-09 15:15:41'),
(55, 'IQUI-2005-299', 'INGENIERÍA QUÍMICA (IQUI-2005-299)', '2015-06-09 15:15:41'),
(56, 'IQUI-2010-232', 'INGENIERÍA QUÍMICA (IQUI-2010-232)', '2015-06-09 15:15:41'),
(57, 'ITMI-2000-003', 'INGENIERÍA TÉCNICA MINERA (ITMI-2000-003)', '2015-06-09 15:15:41'),
(58, 'TMIN-2012-101', 'TECNICO SUPERIOR UNIVERSITARIO EN MINERIA', '2015-06-09 15:15:41'),
(59, 'LADM-2010-234', 'LICENCIATURA EN  ADMINISTRACIÓN (LADM-2010-234)', '2015-06-09 15:15:41'),
(60, 'LADM-2004-300', 'LICENCIATURA EN ADMINISTRACIÓN (LADM-2004-300)', '2015-06-09 15:15:41'),
(61, 'LBIO-2005-283', 'LICENCIATURA EN BIOLOGÍA (LBIO-2005-283)', '2015-06-09 15:15:41'),
(62, 'LBIO-2010-233', 'LICENCIATURA EN BIOLOGÍA (LBIO-2010-233)', '2015-06-09 15:15:41'),
(63, 'LCON-2004-302', 'LICENCIATURA EN CONTADURÍA (LCON-2004-302)', '2015-06-09 15:15:41'),
(64, 'LINF-2004-303', 'LICENCIATURA EN INFORMÁTICA (LINF-2004-303)', '2015-06-09 15:15:41'),
(65, 'LTUR-2012-237', 'LICENCIATURA EN TURISMO', '2015-06-09 15:15:41'),
(66, 'LGAS-2008-275', 'LICENCIATURA GASTRONOMÍA (LGAS-2008-275)', '2015-06-09 15:15:41'),
(67, 'MCIB-2001-027', 'MAESTRÍA EN CIENCIAS EN INGENIERÍA BIOQUÍMICA (MCIB-2001-027 )', '2015-06-09 15:15:41'),
(68, 'MPIEO-2005-17', 'MAESTRÍA EN CIENCIAS EN INGENIERÍA ELECTRÓNICA (MPIEO-2005-17)', '2015-06-09 15:15:41'),
(69, 'MCII-2008-01', 'MAESTRÍA EN CIENCIAS EN INGENIERÍA INDUSTRIAL (MCII-2008-01)', '2015-06-09 15:15:41'),
(70, 'MCIM-2000-008', 'MAESTRÍA EN CIENCIAS EN INGENIERÍA MECATRONICA (MCIM-2000-008)', '2015-06-09 15:15:41'),
(71, 'MIQ-1991-01', 'MAESTRÍA EN CIENCIAS EN INGENIERÍA QUÍMICA (MIQ-1991-01)', '2015-06-09 15:15:41'),
(72, 'MPIE-2000-015', 'MAESTRIA EN INGENIERÍA ELECTRICA (MPIE-2000-015)', '2015-06-09 15:15:41'),
(73, 'MPISC-2002-007', 'MAESTRÍA EN INGENIERÍA EN SISTEMAS COMPUTACIONALES (MPISC-2002-007)', '2015-06-09 15:15:41'),
(74, 'MPII-2005-20', 'MAESTRÍA EN INGENIERÍA INDUSTRIAL (MPII-2005-20)', '2015-06-09 15:15:41'),
(75, 'MTI-2010-01', 'MAESTRÍA EN TECNOLOGÍAS DE LA INFORMACIÓN (MTI-2010-01)', '2015-06-09 15:15:41'),
(76, 'IACU-2010-212', 'INGENIERÍA EN ACUICULTURA (IACU-2010-212)', '2015-07-08 20:47:00'),
(77, 'ISAU-2013-240', 'INGENIERÍA EN SISTEMAS AUTOMOTRICES (ISAU-2013-240)', '2015-07-08 20:49:00'),
(78, 'IARO-2013-239', 'INGENIERÍA AERONÁUTICA (IARO-2013-239)', '2015-07-08 20:48:00'),
(79, 'IMIN-2013-241', 'INGENIERÍA EN MINERIA (IMIN-2013-241)', '2015-07-08 20:51:00'),
(80, 'IPES-2010-223', 'INGENIERÍA EN PESQUERIAS (IPES-2010-223)', '2015-07-08 20:51:00'),
(81, 'MPIA 2011-034', 'MAESTRÍA EN INGENIERÍA ELÉCTRICA (MPIA 2011-034)', '2015-07-17 09:50:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

DROP TABLE IF EXISTS `estados`;
CREATE TABLE `estados` (
  `estadoId` int(2) NOT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `fechaRegistro` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `estados`
--

TRUNCATE TABLE `estados`;
--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`estadoId`, `estado`, `fechaRegistro`) VALUES
(1, 'Aguascalientes', '2016-08-19 13:30:00'),
(2, 'Baja California Norte', '2016-08-19 13:30:00'),
(3, 'Baja California Sur', '2016-08-19 13:30:00'),
(4, 'Campeche', '2016-08-19 13:30:00'),
(5, 'Chiapas', '2016-08-19 13:30:00'),
(6, 'Chihuahua', '2016-08-19 13:30:00'),
(7, 'Ciudad de México', '2016-08-19 13:30:00'),
(8, 'Coahuila', '2016-08-19 13:30:00'),
(9, 'Colima', '2016-08-19 13:30:00'),
(10, 'Durango', '2016-08-19 13:30:00'),
(11, 'Estado de México', '2016-08-19 13:30:00'),
(12, 'Guanajuato', '2016-08-19 13:30:00'),
(13, 'Guerrero', '2016-08-19 13:30:00'),
(14, 'Hidalgo', '2016-08-19 13:30:00'),
(15, 'Jalisco', '2016-08-19 13:30:00'),
(16, 'Michoacán', '2016-08-19 13:30:00'),
(17, 'Morelos', '2016-08-19 13:30:00'),
(18, 'Nayarit', '2016-08-19 13:30:00'),
(19, 'Nuevo León', '2016-08-19 13:30:00'),
(20, 'Oaxaca', '2016-08-19 13:30:00'),
(21, 'Puebla', '2016-08-19 13:30:00'),
(22, 'Querétaro', '2016-08-19 13:30:00'),
(23, 'Quintana Roo', '2016-08-19 13:30:00'),
(24, 'San Luis Potosí', '2016-08-19 13:30:00'),
(25, 'Sinaloa', '2016-08-19 13:30:00'),
(26, 'Sonora', '2016-08-19 13:30:00'),
(27, 'Tabasco', '2016-08-19 13:30:00'),
(28, 'Tamaulipas', '2016-08-19 13:30:00'),
(29, 'Tlaxcala', '2016-08-19 13:30:00'),
(30, 'Veracruz', '2016-08-19 13:30:00'),
(31, 'Yucatán', '2016-08-19 13:30:00'),
(32, 'Zacatecas', '2016-08-19 13:30:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

DROP TABLE IF EXISTS `perfiles`;
CREATE TABLE `perfiles` (
  `perfilId` int(5) NOT NULL,
  `perfil` varchar(100) DEFAULT NULL,
  `fechaRegistro` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `perfiles`
--

TRUNCATE TABLE `perfiles`;
--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`perfilId`, `perfil`, `fechaRegistro`) VALUES
(10, 'evaluadorNacional', '2011-02-12 15:13:44'),
(9, 'comisionNacional', '2011-02-12 15:13:44'),
(8, 'comisionLocalPar', '2011-02-12 15:13:44'),
(7, 'presidenteComision', '2011-02-12 15:13:44'),
(6, 'profesor', '2011-02-13 14:48:25'),
(5, 'admin', '2011-02-12 15:13:44'),
(11, 'capturista', '2015-06-10 08:49:42'),
(12, 'participante', '2017-06-10 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_permiso`
--

DROP TABLE IF EXISTS `perfil_permiso`;
CREATE TABLE `perfil_permiso` (
  `perfilId` int(11) NOT NULL,
  `permisoId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `perfil_permiso`
--

TRUNCATE TABLE `perfil_permiso`;
--
-- Volcado de datos para la tabla `perfil_permiso`
--

INSERT INTO `perfil_permiso` (`perfilId`, `permisoId`) VALUES
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(5, 5),
(5, 6),
(5, 7),
(5, 8),
(5, 9),
(5, 10),
(5, 11),
(5, 12),
(5, 13),
(5, 14),
(5, 15),
(5, 16),
(5, 17),
(5, 18),
(5, 19),
(5, 20),
(5, 21),
(5, 22),
(5, 23),
(5, 32),
(5, 35),
(5, 36),
(5, 37),
(5, 39),
(5, 41),
(5, 42),
(5, 43),
(5, 44),
(5, 47),
(6, 19),
(6, 20),
(7, 1),
(7, 5),
(7, 11),
(7, 19),
(7, 21),
(7, 22),
(7, 23),
(7, 32),
(7, 35),
(7, 36),
(7, 39),
(7, 48),
(8, 19),
(8, 21),
(8, 22),
(9, 1),
(9, 5),
(9, 19),
(9, 22),
(9, 32),
(9, 35),
(9, 36),
(9, 37),
(9, 41),
(9, 42),
(9, 45),
(9, 46),
(9, 48),
(9, 49),
(9, 50),
(10, 19),
(10, 45),
(11, 12),
(11, 47),
(12, 51),
(12, 52),
(12, 53);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

DROP TABLE IF EXISTS `permisos`;
CREATE TABLE `permisos` (
  `permisoId` int(11) NOT NULL,
  `permiso` varchar(50) NOT NULL DEFAULT '',
  `descripcion` varchar(150) NOT NULL,
  `fechaRegistro` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `permisos`
--

TRUNCATE TABLE `permisos`;
--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`permisoId`, `permiso`, `descripcion`, `fechaRegistro`) VALUES
(1, 'institucional', 'Menú institucional', '2011-02-10 16:43:36'),
(2, 'escuelaAgregar', 'Agregar una escuela nueva', '2011-02-10 16:43:36'),
(3, 'escuelaListar', 'Lista de escuelas', '2011-02-10 16:43:36'),
(4, 'profesorAgregar', 'Agregar un profesor nuevo', '2011-02-10 16:43:36'),
(5, 'profesorListar', 'Lista de profesores', '2011-02-10 16:43:36'),
(6, 'usuarios', 'Menú de usuarios', '2011-02-10 16:43:36'),
(7, 'usuarioAgregar', 'Agregar un nuevo usuario', '2011-02-10 16:43:36'),
(8, 'usuarioListar', 'Lista de usuarios', '2011-02-10 16:43:36'),
(9, 'perfilAgregar', 'Agregar un nuevo perfil', '2011-02-10 16:43:36'),
(10, 'perfilListar', 'Lista de perfiles', '2011-02-10 16:43:36'),
(11, 'passwordModificar', 'Cambiar password', '2011-02-10 16:43:36'),
(12, 'catalogos', 'Menú catalogos', '2011-02-10 16:43:36'),
(13, 'competenciaAgregar', 'Agregar un rubro nuevo', '2011-02-10 16:43:36'),
(14, 'competenciaListar', 'Lista de rubros', '2011-02-10 16:43:36'),
(15, 'actividadAgregar', 'Agregar una categoria nueva', '2011-02-10 16:43:36'),
(16, 'actividadListar', 'Lista de categorias', '2011-02-10 16:43:36'),
(17, 'subActividadAgregar', 'Agregar una actividad nueva', '2011-02-10 16:43:36'),
(18, 'subActividadListar', 'Lista de actividades', '2011-02-10 16:43:36'),
(43, 'subSubActividadAgregar', 'Agregar una subActividad nueva', '2011-02-10 16:43:36'),
(44, 'subSubActividadListar', 'Lista de subActividades', '2011-02-10 16:43:36'),
(19, 'evaluacion', 'Menú evaluación', '2011-02-10 16:43:36'),
(20, 'profesorEvaluacion', 'Evaluación de profesor', '2011-02-10 16:43:36'),
(21, 'comiteEvaluacion', 'Evaluación del comité', '2011-02-10 16:43:36'),
(22, 'profesorEvaluacionListar', 'prefesor Evaluacion Listar', '2011-02-10 16:43:36'),
(23, 'dictamenes', 'Carga de Documentos Presidente', '2011-02-10 16:43:36'),
(32, 'comisionLocalPar', 'Menú Comisión Local/Par', '2012-01-25 13:35:12'),
(35, 'evaluadorAgregar', 'Agregar Evaluadores', '2012-01-25 13:35:12'),
(36, 'evaluadorListar', 'Listar evaluadores', '2012-01-25 13:35:12'),
(37, 'asignarComisionParAgregar', 'Asignar Comisión Par', '2012-01-25 13:35:12'),
(39, 'evaluadorDocenteAsignar', 'Asignar Evaluador - Docente', '2012-01-25 13:35:12'),
(41, 'calendario', 'Menu Calendario', '2012-01-25 13:35:12'),
(42, 'asignarFechas', 'asignar fechas de acceso', '2012-01-25 13:35:12'),
(45, 'comisionnacional_evaluacion', 'Realizar Evaluación Nacional', '2012-08-21 12:35:56'),
(46, 'comisionnacional_dictamen', 'Generar Dictámenes Nacionales', '2012-08-23 14:48:20'),
(47, 'competencias', 'Catálogo de competencias', '2013-05-31 06:00:03'),
(48, 'seguimiento', 'Menú Seguimiento', '2015-08-30 21:25:00'),
(49, 'documentosPresidentes', 'Descargar FER / DIC / FAPCL', '2015-08-30 21:40:00'),
(50, 'avanceEvaluacion', 'Revisar el avance de las evaluaciones', '2015-09-09 16:24:44'),
(51, 'proyecto', 'Menú que muestra la opción para guardar el proyecto.', '2017-06-10 00:00:00'),
(52, 'registrarProyecto', 'Opción que muestra formulario para registrar el proyecto', '2017-06-10 00:00:00'),
(53, 'subirPresentacion', 'Módulo para la carga de la presentación del proyecto', '2017-06-10 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoAccesos`
--

DROP TABLE IF EXISTS `tipoAccesos`;
CREATE TABLE `tipoAccesos` (
  `tipoAccesoId` int(5) NOT NULL,
  `acceso` varchar(100) DEFAULT NULL,
  `descripcionAcceso` varchar(100) DEFAULT NULL,
  `orden` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `tipoAccesos`
--

TRUNCATE TABLE `tipoAccesos`;
--
-- Volcado de datos para la tabla `tipoAccesos`
--

INSERT INTO `tipoAccesos` (`tipoAccesoId`, `acceso`, `descripcionAcceso`, `orden`) VALUES
(1, 'altaLocal', 'Registro de la Comisión Local', 2),
(2, 'registroProyecto', 'Registro y carga de proyectos', 3),
(3, 'cargaFer', 'Carga de formato FER-', 4),
(4, 'evaluaLocal', 'Evaluación y Carga de Dictamen de la Comisión Local', 5),
(5, 'resultadoLocal', 'Consulta de Resultados por el Presidente de la Comisión Local', 7),
(6, 'resultadoDocente', 'Consulta de Resultados (Docentes)', 8),
(7, 'apelacionLocal', 'Revisión y carga de Apelaciones de la Comisión Local', 9),
(8, 'finalLocal', 'Consulta de Resultados Finales por la Comisión Local', 11),
(9, 'evaluacionNacional', 'Evaluación por parte de la comisión nacional', 6),
(10, 'apelacionNacional', 'Revisión y respuesta de apelaciones por la comisión nacional', 10),
(11, 'nacional', 'Acceso por DITD al sistema', 1),
(12, 'catalogos', 'Administración de Catálogos por Capturistas', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `usuarioId` int(10) NOT NULL,
  `perfilId` int(5) DEFAULT NULL,
  `nombre` varchar(70) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  `fechaRegistro` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `usuarios`
--

TRUNCATE TABLE `usuarios`;
--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuarioId`, `perfilId`, `nombre`, `usuario`, `password`, `email`, `activo`, `fechaRegistro`) VALUES
(1, 5, 'Administrador', 'ADMIN', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'isceck@gmail.com', 1, '2015-06-09 15:15:41'),
(2, 9, 'Comisión Nacional', 'COMISION_NACIONAL_SEDD', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'ditd.edd@gmail.com', 1, '2015-06-09 15:15:41'),
(3, 11, 'MARILY MARTÍNEZ', 'MMARTINEZ@ITESHU.EDU.MX', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'MMARTINEZ@ITESHU.EDU.MX', 1, '2015-06-10 09:09:42'),
(4, 7, 'HUMBERTO SANTIAGO CRUZ', 'SACH750325HDFNRM00', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'TESCHELECTRO@YAHOO.COM.MX', 1, '2015-06-22 15:23:58'),
(6, 10, 'FRANCISCO JAVIER ORTEGA', 'FRORTEGA@ITESI.EDU.MX', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'FRORTEGA@ITESI.EDU.MX', 1, '2015-09-08 10:37:31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesos`
--
ALTER TABLE `accesos`
  ADD PRIMARY KEY (`accesoId`),
  ADD KEY `escuelaId` (`escuelaId`),
  ADD KEY `tipoAccesoId` (`tipoAccesoId`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`carreraId`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`estadoId`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`perfilId`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`permisoId`);

--
-- Indices de la tabla `tipoAccesos`
--
ALTER TABLE `tipoAccesos`
  ADD PRIMARY KEY (`tipoAccesoId`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuarioId`),
  ADD KEY `perfilId` (`perfilId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesos`
--
ALTER TABLE `accesos`
  MODIFY `accesoId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `carreraId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `estadoId` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `perfilId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `permisoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `tipoAccesos`
--
ALTER TABLE `tipoAccesos`
  MODIFY `tipoAccesoId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuarioId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
