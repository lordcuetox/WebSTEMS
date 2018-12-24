-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-12-2018 a las 14:21:15
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `stems`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_tramites`
--

CREATE TABLE `categorias_tramites` (
  `CVE_CATEGORIA_TRAMITE` int(11) NOT NULL,
  `CVE_TIPO_TRAMITE` int(11) DEFAULT NULL,
  `NOMBRE` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `ACTIVO` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_apartados`
--

CREATE TABLE `cat_apartados` (
  `CVE_ARTICULO` int(11) NOT NULL,
  `CVE_FRACCION` int(11) NOT NULL,
  `CVE_INCISO` int(11) NOT NULL,
  `CVE_APARTADO` int(11) NOT NULL,
  `DESCRIPCION` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `ACTIVO` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_articulos`
--

CREATE TABLE `cat_articulos` (
  `CVE_ARTICULO` int(11) NOT NULL,
  `DESCRIPCION` varchar(11) COLLATE latin1_spanish_ci DEFAULT NULL,
  `ACTIVO` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_fracciones`
--

CREATE TABLE `cat_fracciones` (
  `CVE_ARTICULO` int(11) NOT NULL,
  `CVE_FRACCION` int(11) NOT NULL,
  `DESCRIPCION` varchar(10) COLLATE latin1_spanish_ci DEFAULT NULL,
  `ACTIVO` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_incisos`
--

CREATE TABLE `cat_incisos` (
  `CVE_ARTICULO` int(11) NOT NULL,
  `CVE_FRACCION` int(11) NOT NULL,
  `CVE_INCISO` int(11) NOT NULL,
  `DESCRIPCION` varchar(500) COLLATE latin1_spanish_ci DEFAULT NULL,
  `ACTIVO` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_transparencia`
--

CREATE TABLE `cat_transparencia` (
  `CVE_ARTICULO` int(11) NOT NULL,
  `CVE_FRACCION` int(11) NOT NULL,
  `CVE_INCISO` int(11) NOT NULL,
  `CVE_APARTADO` int(11) NOT NULL,
  `CVE_CLASIFICACION_APARTADO` int(11) NOT NULL,
  `DESCRIPCION` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificaciones_tramites`
--

CREATE TABLE `clasificaciones_tramites` (
  `CVE_CLASIFICACION_TRAMITE` int(11) NOT NULL,
  `NOMBRE` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `ACTIVO` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencias`
--

CREATE TABLE `dependencias` (
  `CVE_DEPENDENCIA` int(11) NOT NULL,
  `CVE_TIPO_DEPENDENCIA` int(11) DEFAULT NULL,
  `NOMBRE` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `TITULAR` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `ACTIVO` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentacion_transparencia`
--

CREATE TABLE `documentacion_transparencia` (
  `CVE_ARTICULO` int(11) NOT NULL,
  `CVE_FRACCION` int(11) NOT NULL,
  `CVE_INCISO` int(11) NOT NULL,
  `CVE_APARTADO` int(11) NOT NULL,
  `CVE_CLASIFICACION_APARTADO` int(11) NOT NULL,
  `ANIO` int(11) NOT NULL,
  `TRIMESTRE` int(11) NOT NULL,
  `CVE_EXPEDIENTE` int(11) NOT NULL,
  `CVE_REATA` int(11) DEFAULT NULL,
  `DESCRIPCION` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `EXPEDIENTE` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `FOLIO` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `RESPUESTA` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `ANEXO` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `PDF` varchar(180) COLLATE latin1_spanish_ci DEFAULT NULL,
  `INFOMEX` bit(1) DEFAULT NULL,
  `SOLICITUD` bit(1) DEFAULT NULL,
  `FECHA_ACTUALIZACION_DOCUMENTO` date DEFAULT NULL,
  `FECHA_GRABO` datetime DEFAULT NULL,
  `FECHA_MODIFICO` datetime DEFAULT NULL,
  `CVE_MODIFICO` int(11) DEFAULT NULL,
  `ACTIVO` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `el_reaton`
--

CREATE TABLE `el_reaton` (
  `CVE_REATA` int(11) NOT NULL,
  `NOMBRE_COMPLETO` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `HABILITADO` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `FRESITA` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `el_reaton`
--

INSERT INTO `el_reaton` (`CVE_REATA`, `NOMBRE_COMPLETO`, `HABILITADO`, `FRESITA`) VALUES
(1, 'Jorge José Jiménez del Cueto', 'cuetox', 'cuetox');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `CVE_EVENTO` int(11) NOT NULL,
  `CVE_REATA` int(11) DEFAULT NULL,
  `NOMBRE` varchar(150) COLLATE latin1_spanish_ci DEFAULT NULL,
  `FOTO1` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `FOTO2` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `FOTO3` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `FOTO4` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `DATA_LS1` varchar(250) COLLATE latin1_spanish_ci DEFAULT NULL,
  `DATA_LS2` varchar(250) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `DATA_LS3` varchar(250) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `LINK` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `PDF` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `FECHA_GRABO` datetime DEFAULT NULL,
  `FECHA_MODIFICO` datetime DEFAULT NULL,
  `CVE_MODIFICO` int(11) DEFAULT NULL,
  `ACTIVO` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `CVE_NOTICIA` int(11) NOT NULL,
  `CVE_REATA` int(11) DEFAULT NULL,
  `TIPO_EVENTO` int(11) NOT NULL COMMENT '1,-Boletin\r\n            2.-Comunicado\r\n            3.-Aviso',
  `TITULO` varchar(150) COLLATE latin1_spanish_ci DEFAULT NULL,
  `NOTICIA_CORTA` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `NOTICIA` varchar(5000) COLLATE latin1_spanish_ci DEFAULT NULL,
  `FOTO_PORTADA` varchar(40) COLLATE latin1_spanish_ci DEFAULT NULL,
  `FOTO1` varchar(40) COLLATE latin1_spanish_ci DEFAULT NULL,
  `FOTO2` varchar(40) COLLATE latin1_spanish_ci DEFAULT NULL,
  `FOTO3` varchar(40) COLLATE latin1_spanish_ci DEFAULT NULL,
  `FECHA_GRABO` datetime DEFAULT NULL,
  `FECHA_MODIFICO` datetime DEFAULT NULL,
  `CVE_MODIFICO` int(11) DEFAULT NULL,
  `ACTIVO` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`CVE_NOTICIA`, `CVE_REATA`, `TIPO_EVENTO`, `TITULO`, `NOTICIA_CORTA`, `NOTICIA`, `FOTO_PORTADA`, `FOTO1`, `FOTO2`, `FOTO3`, `FECHA_GRABO`, `FECHA_MODIFICO`, `CVE_MODIFICO`, `ACTIVO`) VALUES
(1, 1, 1, 'Noticia de prueba No. 1', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta ', '<p>1Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>\r\n\r\n<ol>\r\n	<li>dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</li>\r\n	<li>dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</li>\r\n	<li>dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</li>\r\n	<li>dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</li>\r\n</ol>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>\r\n', 'img/boletin/1.jpg', 'img/boletin/1_1.jpg', 'img/boletin/1_2.jpg', 'img/boletin/1_3.jpg', '2018-12-20 13:51:38', '2018-12-20 13:54:29', 1, b'1'),
(2, 1, 1, 'Noticia de prueba No. 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi porta est blandit viverra blandit. Curabitur varius eleifend dui. Nunc rutrum sem porta, varius magna a, facilisis tortor. Vivamus at con', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi porta est blandit viverra blandit. Curabitur varius eleifend dui. Nunc rutrum sem porta, varius magna a, facilisis tortor. Vivamus at convallis lectus. Phasellus rhoncus velit vitae dictum maximus. Nullam vitae convallis lorem. In hac habitasse platea dictumst. Praesent vitae lacinia libero, ac lobortis mauris. Duis pellentesque et magna vel pellentesque. Proin eleifend viverra lacinia. Etiam fringilla est at odio efficitur tincidunt. In tincidunt nunc vel nunc maximus varius.</p>\r\n\r\n<p>Ut laoreet ac nibh in accumsan. Quisque quis fermentum risus, at rutrum lectus. Phasellus varius pellentesque eleifend. Donec scelerisque eget mi sed elementum. Fusce fermentum nibh ac mauris consectetur, ac ultrices lacus hendrerit. Cras ac pharetra neque. Suspendisse mattis efficitur orci, ac elementum ipsum rhoncus in. Sed id justo justo. Praesent neque urna, commodo et felis ac, ullamcorper laoreet augue. Donec viverra tempor est, quis fringilla urna molestie sed.</p>\r\n\r\n<p>Vestibulum aliquet finibus quam, vitae maximus quam aliquam sit amet. Mauris lacinia velit a nunc pharetra gravida. Maecenas blandit libero sed mollis pharetra. Mauris vulputate risus id ligula viverra luctus. Sed in ipsum ultrices, dapibus ex non, ornare dui. Mauris eu turpis enim. Ut luctus dolor sit amet ultricies fermentum. Nam accumsan massa vel magna vehicula lacinia. Nullam consequat convallis ex, vitae posuere lorem bibendum at. Pellentesque laoreet lacus ut dolor porta condimentum non in mauris. Fusce faucibus tellus id dui accumsan hendrerit. Integer consequat leo vel ligula rutrum interdum.</p>\r\n\r\n<p>Nulla ut pellentesque nunc, gravida dapibus velit. Donec rutrum sem in sem accumsan volutpat. Phasellus ultricies convallis suscipit. Donec eros erat, ullamcorper non eleifend non, euismod congue enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In mattis ultrices accumsan. Vivamus ut lorem erat. Mauris mattis nulla leo, id faucibus felis dapibus ac. Integer suscipit aliquam nulla vitae aliquam. Nullam posuere ac elit quis elementum. Donec at lectus eget justo condimentum molestie. Suspendisse quis placerat tellus. Phasellus sed ipsum sagittis, dignissim felis non, elementum odio. Cras nec porta eros. Aenean et fringilla tellus.</p>\r\n', 'img/boletin/2.jpg', 'img/boletin/2_1.jpg', 'img/boletin/2_2.jpg', 'img/boletin/2_3.jpg', '2018-12-20 13:57:09', NULL, NULL, b'1'),
(3, 1, 1, 'Noticia de prueba No. 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquam odio eget nibh ullamcorper bibendum. Sed id mollis justo. Nunc feugiat nulla leo, non placerat lacus rhoncus id. Suspendisse impe', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquam odio eget nibh ullamcorper bibendum. Sed id mollis justo. Nunc feugiat nulla leo, non placerat lacus rhoncus id. Suspendisse imperdiet fringilla dui, non vulputate nunc mollis in. Aenean aliquet felis eu vehicula pharetra. Duis egestas ultricies arcu in dignissim. Duis lacus felis, mattis sit amet sollicitudin et, pellentesque ac nisi. Mauris sollicitudin lectus sodales ligula fringilla, id tempor lacus semper. Praesent sagittis urna vel magna bibendum, a feugiat erat elementum. Aenean quis quam ut justo ullamcorper rutrum eu vel tortor. Vivamus elementum auctor porttitor.</p>\r\n\r\n<p>Ut id eros sed purus egestas faucibus. Integer ac purus non neque porta tristique eget at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse scelerisque eleifend nulla. Nullam dignissim facilisis sem sed convallis. Sed sit amet elementum elit. Etiam pretium orci non lectus varius, at gravida turpis fermentum. Aliquam ut molestie metus, non suscipit massa. Sed sed gravida enim, ac lobortis ex. Vestibulum sed ante sit amet risus facilisis interdum. Proin in tellus metus.</p>\r\n\r\n<p>Sed venenatis mollis varius. Nam et lorem feugiat, porttitor leo ut, pellentesque enim. Mauris viverra consequat ligula. Sed eu euismod libero. Praesent in euismod mauris. Donec nisi leo, cursus et nisi nec, tempus venenatis arcu. Donec purus urna, fringilla sed vulputate a, lobortis eget turpis. Suspendisse vestibulum venenatis rhoncus. Suspendisse imperdiet, massa vel euismod commodo, elit velit condimentum elit, vitae ultrices arcu diam sed tellus. Morbi at lobortis velit. Vivamus non purus odio. Duis in nibh fringilla, sagittis mauris sit amet, sagittis libero. Duis et malesuada odio, nec tristique metus. Duis ornare molestie lorem eu blandit. Aenean porttitor pulvinar urna. Nullam sapien augue, mollis sed malesuada eu, varius bibendum est.</p>\r\n', 'img/boletin/3.jpg', 'img/boletin/3_1.jpg', 'img/boletin/3_2.jpg', 'img/boletin/3_3.jpg', '2018-12-20 13:58:10', NULL, NULL, b'1'),
(4, 1, 1, 'Noticia de prueba No. 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dapibus dui nec laoreet fermentum. Aliquam efficitur mi vel nibh varius, sed mattis risus eleifend. Nunc pellentesque volutpat quam', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dapibus dui nec laoreet fermentum. Aliquam efficitur mi vel nibh varius, sed mattis risus eleifend. Nunc pellentesque volutpat quam, eget sagittis massa consectetur et. Maecenas ultrices est varius, pharetra lectus sit amet, congue nulla. Pellentesque nec nulla at elit aliquam fermentum vel at risus. Aliquam purus eros, auctor nec laoreet vel, dictum eget metus. Etiam enim nisi, varius a erat ac, consequat convallis lacus. Integer turpis tortor, congue eget tincidunt ut, finibus at ligula. Proin pharetra, augue vel suscipit aliquet, enim sapien dictum nisi, nec rutrum nisi lacus ut dui. Nunc orci arcu, rutrum et nibh sagittis, suscipit convallis dui. Suspendisse nulla lacus, facilisis ac dignissim nec, egestas ut massa. Phasellus auctor, lorem id malesuada rutrum, enim ligula molestie orci, tempus ornare ex sem et libero. In iaculis justo vel dolor finibus blandit. Integer sed rhoncus arcu, eu cursus velit. Nulla sodales dolor non ultrices cursus. Mauris pretium placerat tellus et hendrerit.</p>\r\n\r\n<p>Donec sem lectus, faucibus ultrices tincidunt cursus, volutpat at quam. Donec commodo tellus urna, eu facilisis orci ornare nec. Aliquam ultricies varius felis sed ullamcorper. Aenean tempor nulla turpis, in laoreet turpis dictum eu. Nulla nec efficitur metus. Phasellus sodales, dolor eget feugiat aliquet, leo leo rhoncus ante, id feugiat urna nisi at dolor. Maecenas et magna eget tellus luctus tincidunt.</p>\r\n\r\n<p>Nunc aliquam, elit a consectetur congue, leo nunc pulvinar justo, vitae volutpat nisl lacus quis libero. Integer augue leo, pellentesque et dui sed, sollicitudin vulputate ligula. Duis blandit convallis sem vel faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus laoreet, metus non gravida vulputate, ligula arcu finibus enim, in pulvinar nulla nisi eu augue. Praesent eget elit in ipsum finibus aliquam aliquam nec risus. Morbi vel dolor tortor. Vestibulum dignissim tincidunt tempus. Aenean ultrices urna eu feugiat tristique. Nam eget nisi nibh. Sed quis mauris ullamcorper, vestibulum turpis ut, eleifend leo. Sed vehicula purus luctus, euismod ex vitae, egestas felis. Curabitur finibus sed neque sit amet vehicula. Sed suscipit ornare scelerisque. Morbi placerat enim quis sodales sollicitudin.</p>\r\n\r\n<p>Duis at mauris et nisi varius facilisis et at felis. Sed eu justo id nisl condimentum feugiat vel at massa. Donec arcu ipsum, tristique sed arcu sit amet, condimentum rhoncus mi. Aliquam porta velit eros, at pharetra nisi laoreet vel. Vestibulum nisl ligula, pretium pulvinar ultricies ac, ultricies sit amet purus. Pellentesque laoreet, felis at tincidunt finibus, ligula nisi scelerisque erat, eu varius velit eros id lectus. Vivamus placerat dolor at faucibus tristique. Cras ligula augue, convallis nec tristique vitae, ornare nec dui. Aenean mauris nisi, semper vitae euismod non, bibendum et lectus. Vestibulum sed velit nec risus fermentum viverra. Nulla bibendum eleifend laoreet. Cras tincidunt eros vitae placerat viverra. Praesent sit amet quam mauris.</p>\r\n', 'img/boletin/4.jpg', 'img/boletin/4_1.jpg', 'img/boletin/4_2.jpg', 'img/boletin/4_3.jpg', '2018-12-20 14:01:05', NULL, NULL, b'1'),
(5, 1, 1, 'Noticia de prueba No. 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dapibus dui nec laoreet fermentum. Aliquam efficitur mi vel nibh varius, sed mattis risus eleifend. Nunc pellentesque volutpat quam', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dapibus dui nec laoreet fermentum. Aliquam efficitur mi vel nibh varius, sed mattis risus eleifend. Nunc pellentesque volutpat quam, eget sagittis massa consectetur et. Maecenas ultrices est varius, pharetra lectus sit amet, congue nulla. Pellentesque nec nulla at elit aliquam fermentum vel at risus.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dapibus dui nec laoreet fermentum. Aliquam efficitur mi vel nibh varius, sed mattis risus eleifend. Nunc pellentesque volutpat quam, eget sagittis massa consectetur et. Maecenas ultrices est varius, pharetra lectus sit amet, congue nulla. Pellentesque nec nulla at elit aliquam fermentum vel at risus.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dapibus dui nec laoreet fermentum. Aliquam efficitur mi vel nibh varius, sed mattis risus eleifend. Nunc pellentesque volutpat quam, eget sagittis massa consectetur et. Maecenas ultrices est varius, pharetra lectus sit amet, congue nulla. Pellentesque nec nulla at elit aliquam fermentum vel at risus.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dapibus dui nec laoreet fermentum. Aliquam efficitur mi vel nibh varius, sed mattis risus eleifend. Nunc pellentesque volutpat quam, eget sagittis massa consectetur et. Maecenas ultrices est varius, pharetra lectus sit amet, congue nulla. Pellentesque nec nulla at elit aliquam fermentum vel at risus.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dapibus dui nec laoreet fermentum. Aliquam efficitur mi vel nibh varius, sed mattis risus eleifend. Nunc pellentesque volutpat quam, eget sagittis massa consectetur et. Maecenas ultrices est varius, pharetra lectus sit amet, congue nulla. Pellentesque nec nulla at elit aliquam fermentum vel at risus.</p>\r\n', 'img/boletin/5.jpg', 'img/boletin/5_1.jpg', 'img/boletin/5_2.jpg', 'img/boletin/5_3.jpg', '2018-12-20 14:02:26', NULL, NULL, b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_dependencia`
--

CREATE TABLE `tipos_dependencia` (
  `CVE_TIPO_DEPENDENCIA` int(11) NOT NULL,
  `NOMBRE` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `ACTIVO` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_tramites`
--

CREATE TABLE `tipos_tramites` (
  `CVE_TIPO_TRAMITE` int(11) NOT NULL,
  `CVE_CLASIFICACION_TRAMITE` int(11) DEFAULT NULL,
  `NOMBRE` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `IMG` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `ACTIVO` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramites`
--

CREATE TABLE `tramites` (
  `CVE_TRAMITE` int(11) NOT NULL,
  `CVE_CATEGORIA_TRAMITE` int(11) DEFAULT NULL,
  `CVE_DEPENDENCIA` int(11) DEFAULT NULL,
  `NOMBRE` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `PDF` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `ACTIVO` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias_tramites`
--
ALTER TABLE `categorias_tramites`
  ADD PRIMARY KEY (`CVE_CATEGORIA_TRAMITE`),
  ADD KEY `INDEX_1` (`CVE_CATEGORIA_TRAMITE`),
  ADD KEY `FK_REFERENCE_15` (`CVE_TIPO_TRAMITE`);

--
-- Indices de la tabla `cat_apartados`
--
ALTER TABLE `cat_apartados`
  ADD PRIMARY KEY (`CVE_ARTICULO`,`CVE_FRACCION`,`CVE_INCISO`,`CVE_APARTADO`),
  ADD KEY `INDEX_1` (`CVE_ARTICULO`,`CVE_FRACCION`,`CVE_INCISO`,`CVE_APARTADO`);

--
-- Indices de la tabla `cat_articulos`
--
ALTER TABLE `cat_articulos`
  ADD PRIMARY KEY (`CVE_ARTICULO`),
  ADD KEY `INDEX_1` (`CVE_ARTICULO`);

--
-- Indices de la tabla `cat_fracciones`
--
ALTER TABLE `cat_fracciones`
  ADD PRIMARY KEY (`CVE_ARTICULO`,`CVE_FRACCION`),
  ADD KEY `INDEX_1` (`CVE_ARTICULO`,`CVE_FRACCION`);

--
-- Indices de la tabla `cat_incisos`
--
ALTER TABLE `cat_incisos`
  ADD PRIMARY KEY (`CVE_ARTICULO`,`CVE_FRACCION`,`CVE_INCISO`),
  ADD KEY `INDEX_1` (`CVE_ARTICULO`,`CVE_FRACCION`,`CVE_INCISO`);

--
-- Indices de la tabla `cat_transparencia`
--
ALTER TABLE `cat_transparencia`
  ADD PRIMARY KEY (`CVE_ARTICULO`,`CVE_FRACCION`,`CVE_INCISO`,`CVE_APARTADO`,`CVE_CLASIFICACION_APARTADO`),
  ADD KEY `INDEX_1` (`CVE_ARTICULO`,`CVE_FRACCION`,`CVE_INCISO`,`CVE_APARTADO`,`CVE_CLASIFICACION_APARTADO`);

--
-- Indices de la tabla `clasificaciones_tramites`
--
ALTER TABLE `clasificaciones_tramites`
  ADD PRIMARY KEY (`CVE_CLASIFICACION_TRAMITE`),
  ADD KEY `INDEX_1` (`CVE_CLASIFICACION_TRAMITE`);

--
-- Indices de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  ADD PRIMARY KEY (`CVE_DEPENDENCIA`),
  ADD KEY `INDEX_2` (`CVE_TIPO_DEPENDENCIA`),
  ADD KEY `INDEX_1` (`CVE_DEPENDENCIA`);

--
-- Indices de la tabla `documentacion_transparencia`
--
ALTER TABLE `documentacion_transparencia`
  ADD PRIMARY KEY (`CVE_EXPEDIENTE`),
  ADD KEY `INDEX_1` (`CVE_ARTICULO`,`CVE_FRACCION`,`CVE_INCISO`,`CVE_APARTADO`,`CVE_CLASIFICACION_APARTADO`,`ANIO`,`TRIMESTRE`),
  ADD KEY `FK_REFERENCE_8` (`CVE_REATA`);

--
-- Indices de la tabla `el_reaton`
--
ALTER TABLE `el_reaton`
  ADD PRIMARY KEY (`CVE_REATA`),
  ADD KEY `INDEX_1` (`CVE_REATA`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`CVE_EVENTO`),
  ADD KEY `INDEX_1` (`CVE_EVENTO`),
  ADD KEY `FK_REFERENCE_2` (`CVE_REATA`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`CVE_NOTICIA`,`TIPO_EVENTO`),
  ADD KEY `INDEX_1` (`CVE_NOTICIA`,`TIPO_EVENTO`),
  ADD KEY `FK_REFERENCE_1` (`CVE_REATA`);

--
-- Indices de la tabla `tipos_dependencia`
--
ALTER TABLE `tipos_dependencia`
  ADD PRIMARY KEY (`CVE_TIPO_DEPENDENCIA`),
  ADD KEY `INDEX_1` (`CVE_TIPO_DEPENDENCIA`);

--
-- Indices de la tabla `tipos_tramites`
--
ALTER TABLE `tipos_tramites`
  ADD PRIMARY KEY (`CVE_TIPO_TRAMITE`),
  ADD KEY `INDEX_2` (`CVE_CLASIFICACION_TRAMITE`),
  ADD KEY `INDEX_1` (`CVE_TIPO_TRAMITE`);

--
-- Indices de la tabla `tramites`
--
ALTER TABLE `tramites`
  ADD PRIMARY KEY (`CVE_TRAMITE`),
  ADD KEY `INDEX_3` (`CVE_CATEGORIA_TRAMITE`),
  ADD KEY `INDEX_2` (`CVE_DEPENDENCIA`),
  ADD KEY `INDEX_1` (`CVE_TRAMITE`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categorias_tramites`
--
ALTER TABLE `categorias_tramites`
  ADD CONSTRAINT `FK_REFERENCE_15` FOREIGN KEY (`CVE_TIPO_TRAMITE`) REFERENCES `tipos_tramites` (`CVE_TIPO_TRAMITE`);

--
-- Filtros para la tabla `cat_apartados`
--
ALTER TABLE `cat_apartados`
  ADD CONSTRAINT `FK_REFERENCE_6` FOREIGN KEY (`CVE_ARTICULO`,`CVE_FRACCION`,`CVE_INCISO`) REFERENCES `cat_incisos` (`CVE_ARTICULO`, `CVE_FRACCION`, `CVE_INCISO`);

--
-- Filtros para la tabla `cat_fracciones`
--
ALTER TABLE `cat_fracciones`
  ADD CONSTRAINT `FK_REFERENCE_4` FOREIGN KEY (`CVE_ARTICULO`) REFERENCES `cat_articulos` (`CVE_ARTICULO`);

--
-- Filtros para la tabla `cat_incisos`
--
ALTER TABLE `cat_incisos`
  ADD CONSTRAINT `FK_REFERENCE_5` FOREIGN KEY (`CVE_ARTICULO`,`CVE_FRACCION`) REFERENCES `cat_fracciones` (`CVE_ARTICULO`, `CVE_FRACCION`);

--
-- Filtros para la tabla `cat_transparencia`
--
ALTER TABLE `cat_transparencia`
  ADD CONSTRAINT `FK_REFERENCE_7` FOREIGN KEY (`CVE_ARTICULO`,`CVE_FRACCION`,`CVE_INCISO`,`CVE_APARTADO`) REFERENCES `cat_apartados` (`CVE_ARTICULO`, `CVE_FRACCION`, `CVE_INCISO`, `CVE_APARTADO`);

--
-- Filtros para la tabla `dependencias`
--
ALTER TABLE `dependencias`
  ADD CONSTRAINT `FK_REFERENCE_14` FOREIGN KEY (`CVE_TIPO_DEPENDENCIA`) REFERENCES `tipos_dependencia` (`CVE_TIPO_DEPENDENCIA`);

--
-- Filtros para la tabla `documentacion_transparencia`
--
ALTER TABLE `documentacion_transparencia`
  ADD CONSTRAINT `FK_REFERENCE_3` FOREIGN KEY (`CVE_ARTICULO`,`CVE_FRACCION`,`CVE_INCISO`,`CVE_APARTADO`,`CVE_CLASIFICACION_APARTADO`) REFERENCES `cat_transparencia` (`CVE_ARTICULO`, `CVE_FRACCION`, `CVE_INCISO`, `CVE_APARTADO`, `CVE_CLASIFICACION_APARTADO`),
  ADD CONSTRAINT `FK_REFERENCE_8` FOREIGN KEY (`CVE_REATA`) REFERENCES `el_reaton` (`CVE_REATA`);

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `FK_REFERENCE_2` FOREIGN KEY (`CVE_REATA`) REFERENCES `el_reaton` (`CVE_REATA`);

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `FK_REFERENCE_1` FOREIGN KEY (`CVE_REATA`) REFERENCES `el_reaton` (`CVE_REATA`);

--
-- Filtros para la tabla `tipos_tramites`
--
ALTER TABLE `tipos_tramites`
  ADD CONSTRAINT `FK_REFERENCE_13` FOREIGN KEY (`CVE_CLASIFICACION_TRAMITE`) REFERENCES `clasificaciones_tramites` (`CVE_CLASIFICACION_TRAMITE`);

--
-- Filtros para la tabla `tramites`
--
ALTER TABLE `tramites`
  ADD CONSTRAINT `FK_REFERENCE_12` FOREIGN KEY (`CVE_DEPENDENCIA`) REFERENCES `dependencias` (`CVE_DEPENDENCIA`),
  ADD CONSTRAINT `FK_REFERENCE_16` FOREIGN KEY (`CVE_CATEGORIA_TRAMITE`) REFERENCES `categorias_tramites` (`CVE_CATEGORIA_TRAMITE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
