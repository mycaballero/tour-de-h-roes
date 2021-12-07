

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `exampledb`
--
  CREATE DATABASE `exampledb`;
  USE `exampledb`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `example`
--

CREATE TABLE `example` (
  `id` int(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `example`
--

INSERT INTO `example` (`id`, `userName`, `userPassword`, `email`, `age`) VALUES
(1, 'Miguel', '123456789', 'prueba@uno.com',25);


--
-- Indices de la tabla `example`
--
ALTER TABLE `example`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT de la tabla `example`
--
ALTER TABLE `example`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
