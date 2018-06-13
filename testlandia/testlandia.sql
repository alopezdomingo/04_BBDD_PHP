-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2018 a las 11:58:13
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `testlandia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(3) NOT NULL,
  `pregunta` varchar(180) COLLATE utf8mb4_spanish_ci NOT NULL,
  `r1` varchar(180) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `r2` varchar(180) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `r3` varchar(180) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `rcorrecta` varchar(180) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `pregunta`, `r1`, `r2`, `r3`, `rcorrecta`, `categoria`) VALUES
(1, 'Los españoles tienen...', 'El deber de trabajar', 'El derecho al trabajo, pero no el deber de trabajar', 'El derecho al trabajo', 'El derecho al trabajo', 'Constitución'),
(2, 'La religión oficial del estado es...', 'Ninguna', 'La católica', 'La mayoritaria', 'Ninguna', 'Constitución'),
(3, ' El derecho de reunión pacífica y sin armas... ', 'No está permitido', 'Está reconocido siempre que se solicite el correspondiente permiso', 'Está permitido, con excepciones', 'Está reconocido siempre que se solicite el correspondiente permiso', 'Constitución'),
(4, ' ¿Quien controla la potestad reglamentaria y la legalidad de la actuación administrativa? ', 'El Congreso', 'El Gobierno', 'Los Tribunales', 'Los Tribunales', 'Constitución'),
(8, 'Señale el derecho o libertad pública que podrá regularse sólo por ley', 'Negociación colectiva laboral', 'Derecho a la salud', 'Acceso a la cultura', 'Negociación colectiva laboral', 'Administrativo'),
(9, 'Principios que rigen el acceso de los ciudadanos a la función pública', 'Mérito, capacidad e imparcialidad', 'Mérito y capacidad', 'Mérito y objetividad', 'Mérito y capacidad', 'Administrativo'),
(10, '¿Cuál de los siguientes derechos puede ser objeto de recurso de amparo?', 'Participación polí­tica', 'Negociación colectiva', 'Acceso a la propiedad privada', 'Participación polí­tica', 'Administrativo'),
(11, 'El Defensor del Pueblo:', 'Tiene poder para anular resoluciones y actos.', 'Estará sujeto a condición resolutoria.', 'No estará sujeto a mandato imperativo alguno.', 'No estará sujeto a mandato imperativo alguno.', 'Administrativo'),
(12, '¿A quién corresponde el nombramiento del Fiscal General del Estado?', 'Al Presidente del Gobierno, a propuesta del Ministro de Justicia.', 'Al Presidente del Senado, a propuesta de la Cámara', 'Al Rey, a propuesta del Gobierno, oí­do el Consejo General del Poder Judicial.', 'Al Rey, a propuesta del Gobierno, oído el Consejo General del Poder Judicial.', 'Administrativo'),
(13, 'Conforme establece la ley 14/1986 General de Sanidad, el Sistema Nacional De Salud:', 'Es el conjunto de los Servicios de Salud de la Administración del Estado', 'Se financia sólo a través de las cotizaciones a la Seguridad Social', 'Integra todas las estructuras y servicios públicos al servicio de la salud', 'Integra todas las estructuras y servicios públicos al servicio de la salud', 'Enfermerí­a'),
(14, 'Â¿A quiÃ©n corresponde la aprobaciÃ³n del Plan de Salud de Castilla La Mancha?', 'Al Servicio de Salud de Castilla La Mancha', 'A la ConsejerÃ­a competente en materia de Sanidad', 'Al Consejo de Gobierno de Castilla La Mancha', 'Al Consejo de Gobierno de Castilla La Mancha', 'Enfermerí­a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `pass`, `tipo`) VALUES
('alumno', '21232f297a57a5a743894a0e4a801fc3', 2),
('Pedro', 'c6cc8094c2dc07b700ffcc36d64e2138', 2),
('juan', 'a94652aa97c7211ba8954dd15a3cf838', 2),
('ana', '276b6c4692e78d4799c12ada515bc3e4', 2),
('admin', '21232f297a57a5a743894a0e4a801fc3', 1),
('Ramón', '266575d3c2b8a34f83817458f96152b1', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
