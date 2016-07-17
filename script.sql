
CREATE DATABASE crud;

USE crud;

CREATE TABLE `alumno` (
  `codigo` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`codigo`, `nombres`, `apellidos`, `edad`, `avatar`) VALUES
(1, 'luis augusto', 'ponce', 22, 'avatar/avatar1.png'),
(2, 'Juan', 'Torres', 22, 'avatar/avatar3.png'),
(3, 'maria', 'Tello', 22, 'avatar/avatar2.png');