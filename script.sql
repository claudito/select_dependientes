
CREATE DATABASE crud;

USE crud;

CREATE TABLE `alumno` (
  `codigo` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB;



CREATE TABLE  copia_alumno(
 `codigo` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB;


INSERT INTO `alumno` (`codigo`, `nombres`, `apellidos`, `edad`) VALUES
(1, 'PEDRO', 'ARDILES', 12),
(2, 'JOSUE', 'NUNEZ', 29),
(3, 'LUIS', 'PONCE', 29);
