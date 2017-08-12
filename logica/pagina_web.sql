-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-08-2017 a las 07:08:25
-- Versión del servidor: 5.6.15-log
-- Versión de PHP: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pagina_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `Id_administrador` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_usu` varchar(50) NOT NULL,
  `Contraseña` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_administrador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`Id_administrador`, `Nombre_usu`, `Contraseña`) VALUES
(1, 'Juan', '123'),
(2, 'Jose', '456'),
(3, 'Pepe', '789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afiliados`
--

CREATE TABLE IF NOT EXISTS `afiliados` (
  `Id_afiliado` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Telefono` double NOT NULL,
  `Nombre_usuario` varchar(50) NOT NULL,
  `passwors` varchar(50) NOT NULL,
  `activo` int(11) NOT NULL,
  PRIMARY KEY (`Id_afiliado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `afiliados`
--

INSERT INTO `afiliados` (`Id_afiliado`, `Nombre`, `Apellidos`, `Email`, `Direccion`, `Telefono`, `Nombre_usuario`, `passwors`, `activo`) VALUES
(1, 'Juan', 'lopez', 'ejemplo@gmail.com', '1 NORTE 234', 2381231232, 'jual', 'jual', 0),
(2, 'Jose ', 'Ochoa', 'example@gmail.com', '4 ORIENTE 234', 5512345678, 'jooch', 'jooch', 0),
(3, 'Pepe', 'Vargas', 'ejemplo@outlook.com', 'AV. LAS PALMAS 12', 9912345678, 'peva', 'peva', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspirantes`
--

CREATE TABLE IF NOT EXISTS `aspirantes` (
  `Id_aspi` int(11) NOT NULL AUTO_INCREMENT,
  `Id_curs` int(11) NOT NULL,
  `Nombre_aspi` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_aspi`),
  KEY `Id_curs` (`Id_curs`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `aspirantes`
--

INSERT INTO `aspirantes` (`Id_aspi`, `Id_curs`, `Nombre_aspi`, `Apellidos`, `Telefono`, `Direccion`, `Email`) VALUES
(1, 1, 'Juan ', 'Lopez', 1234567891, '1 NORTE 34 ', 'XXXXXX@ejemplo'),
(2, 2, 'Jose ', 'Ochoa', 987654321, '4 ORIENTE 123', 'ejempo@gmail.com'),
(3, 3, 'Pepe', 'Lopez', 1234567890, 'AV JUVENTUD  123', 'example@xxxxxx.com'),
(4, 1, 'Misael', 'Muñoz Cervantes', 987654321, '1norte', 'ejemplo@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bolsa_formulario`
--

CREATE TABLE IF NOT EXISTS `bolsa_formulario` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_bolsa` int(11) NOT NULL,
  `Nombre` int(11) NOT NULL,
  `Correo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Telefono` bigint(15) NOT NULL,
  `Mensaje` text COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `id_bolsa` (`Id_bolsa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bolsa_trabajo`
--

CREATE TABLE IF NOT EXISTS `bolsa_trabajo` (
  `Id_bolsa` int(11) NOT NULL AUTO_INCREMENT,
  `Id_afiliado` int(11) NOT NULL,
  `Nombre_vacante` varchar(100) NOT NULL,
  `Contenido` varchar(100) NOT NULL,
  `Telefono` double NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Fecha_limite` date NOT NULL,
  PRIMARY KEY (`Id_bolsa`),
  KEY `Id_afiliado` (`Id_afiliado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `bolsa_trabajo`
--

INSERT INTO `bolsa_trabajo` (`Id_bolsa`, `Id_afiliado`, `Nombre_vacante`, `Contenido`, `Telefono`, `Direccion`, `Fecha_limite`) VALUES
(1, 1, 'Diseñador', 'Se solicita empleado', 9898877676, 'AV LOS 4 CAMINOS', '2017-08-12'),
(2, 2, 'Encargado', 'Se solicita encargado para nave textil en diseño de playera.', 5587623456, 'AV INDEPENDENCIA 123', '2017-08-12'),
(3, 1, 'Mecánico', 'Se solicita mecánico para el área de máquinas textiles.', 9898877676, 'AV LOS 4 CAMINOS', '2017-08-12'),
(4, 2, 'Auxiliar de almacén', 'Se solicita auxiliar de almacén para el área de oficina. ', 5587623456, 'AV INDEPENDENCIA 123', '2017-08-12'),
(5, 3, 'Overlista', 'Se solicita costurero para el área de maquina over.', 9812345875, '1 ORIENTE 456', '2017-08-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `Id_curs` int(11) NOT NULL AUTO_INCREMENT,
  `Id_admin` int(11) NOT NULL,
  `Nombre_curs` varchar(30) NOT NULL,
  `Tipo_curso` text NOT NULL,
  `Fecha_curso` date NOT NULL,
  `imagen` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_curs`),
  KEY `Id_admin` (`Id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`Id_curs`, `Id_admin`, `Nombre_curs`, `Tipo_curso`, `Fecha_curso`, `imagen`) VALUES
(1, 1, 'Curso de Bordado', 'En este  curso de bordado básico vamos a aprender a realizar puntadas esenciales en el bordado, mediante pequeños vídeos con explicaciones escritas y sin audio, muy fáciles de seguir.\r\nLas puntadas que vamos a ver en este curso son:\r\nEl cordoncillo.\r\nLa cadeneta.\r\nRelleno de punto de arroz.\r\nRelleno de cordoncillo.', '2017-08-01', 'slide-2.jpg'),
(2, 2, 'Curso de Serigrafía ', 'Este sistema, por sus especiales características, permite imprimir sobre cualquier soporte: blanco, transparente o de color, grueso o fino, áspero, rugoso o suave, de forma regular o irregular, mate, semimate o brillante, pequeño o grande, de forma plana o cilíndrica, y se pueden emplear todo tipo de tintas, previamente formuladas de acuerdo con los materiales en los que se va a imprimir, con diferentes gruesos de capa por depósito de tinta, calidades opacas, transparentes, mates, semimates, brillantes, fluorescentes, reflectantes, barnices y lacas, vinílicas, acrílicas, gliceroftálicas, catalépticas o de los componentes, al agua, etc. Se aplica sobre cualquier tipo de material: papel, cartulina, cartón, cuero, corcho, metal, madera, plástico, cristal, telas orgánicas o sintéticas, fieltro, cerámica, etc., y sin ninguna limitación en el número de colores planos o tramados, pudiendo hacerse la impresión manual o por medio de máquinas.', '2017-08-07', 'slide-3.jpg'),
(5, 3, 'Base de Datos', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).', '2017-07-12', 'intro-pic.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquila`
--

CREATE TABLE IF NOT EXISTS `maquila` (
  `Id_maqui` int(11) NOT NULL AUTO_INCREMENT,
  `Id_afiliado` int(11) NOT NULL,
  `Nombre_maqui` varchar(30) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Telefono` double NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Descripcion` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_maqui`),
  KEY `Id_afiliado` (`Id_afiliado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `maquila`
--

INSERT INTO `maquila` (`Id_maqui`, `Id_afiliado`, `Nombre_maqui`, `Direccion`, `Telefono`, `Email`, `Descripcion`) VALUES
(1, 1, 'Textiles SA de SV', '1 NORTE 234', 1234567876, 'ejemplo@gmail.com', 'La empresa de dedica a laropa'),
(2, 2, 'Telas', 'AV PRINCIPAL', 2381231232, 'ejemplo@gmail.com', 'las mejores telas'),
(3, 3, 'Costuras org', 'AV INDEPENDENCIA 234', 987654325, 'xxxxx@xxxxxx.com', 'Ropa de buena calidad'),
(4, 2, 'Telas', 'AV PRINCIPAL', 2381231232, 'ejemplo@gmail.com', 'las mejores telas'),
(5, 3, 'Costuras org', 'AV INDEPENDENCIA 234', 987654325, 'xxxxx@xxxxxx.com', 'Ropa de buena calidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `Id_not` int(11) NOT NULL AUTO_INCREMENT,
  `Id_admin` int(11) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `Fecha` date NOT NULL,
  `Contenido` text NOT NULL,
  PRIMARY KEY (`Id_not`),
  KEY `Id_admin` (`Id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`Id_not`, `Id_admin`, `Titulo`, `Fecha`, `Contenido`) VALUES
(1, 1, 'Nueva moda', '2017-08-01', 'Se registra nueva moda internacionalmente que ha llegado al Pais!'),
(2, 2, 'Tendencias', '2017-07-31', 'LA nueva tendencia de moda en la vestimenta de hombres'),
(3, 3, 'Ropa', '2017-08-02', 'Los mejores diseñadores mundiales han creado un nuevo estilo de ropa que ,arcara tendencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `Id_serv` int(11) NOT NULL AUTO_INCREMENT,
  `Id_admin` int(11) NOT NULL,
  `Tipo_serv` varchar(30) NOT NULL,
  `Contenido` text NOT NULL,
  `imagen` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_serv`),
  KEY `Id_admin` (`Id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`Id_serv`, `Id_admin`, `Tipo_serv`, `Contenido`, `imagen`) VALUES
(1, 1, 'Bordado', 'El bordado es el arte de decorar telas con una aguja e hilo. Los estilos de bordado y sus técnicas varían enormemente pero en este tutorial de DMC se estarán presentando estilos gratis o superficies de bordado. Esta técnica de puntadas decorativas, con su variedad de puntadas, es trabajada independientemente de la tela permitiéndote que bordes cualquier diseño, ya sea realista o abstracto en la tela que elijas. En materia de bordados para la superficie, se te ofrecen una gran versatilidad para crear bellos diseños utilizando la variedad de hilos coloridos y las fibras especiales.', 'bgR.jpg'),
(2, 2, 'Estampado', 'La estampación puede producirse de distintas formas y en diversos materiales. Es habitual que el concepto de estampado se utilice en referencia a un tejido que tiene dibujos estampados a fuego o en frío. Puede decirse, en ese caso, que el tejido es estampado o tiene un estampado. La idea de estampado también puede referirse al objeto que, por percusión o presión, se fabrica a partir de una matriz o de un molde.', 'bg.jpg'),
(3, 3, 'Corte Textil', 'La manufactura textil es una fase de la producción económica bienes y consiste en la transformación de materias primas, en productos textiles manufacturados, productos elaborados o productos terminados para su distribución y consumo hilaturas, telas, vestido y calzado.', 'bg.jpg');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bolsa_formulario`
--
ALTER TABLE `bolsa_formulario`
  ADD CONSTRAINT `bolsa_formulario_ibfk_1` FOREIGN KEY (`Id_bolsa`) REFERENCES `bolsa_trabajo` (`Id_bolsa`);

--
-- Filtros para la tabla `bolsa_trabajo`
--
ALTER TABLE `bolsa_trabajo`
  ADD CONSTRAINT `bolsa_trabajo_ibfk_1` FOREIGN KEY (`Id_afiliado`) REFERENCES `afiliados` (`Id_afiliado`);

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`Id_admin`) REFERENCES `administrador` (`Id_administrador`);

--
-- Filtros para la tabla `maquila`
--
ALTER TABLE `maquila`
  ADD CONSTRAINT `maquila_ibfk_1` FOREIGN KEY (`Id_afiliado`) REFERENCES `afiliados` (`Id_afiliado`);

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`Id_admin`) REFERENCES `administrador` (`Id_administrador`);

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_ibfk_1` FOREIGN KEY (`Id_admin`) REFERENCES `administrador` (`Id_administrador`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
