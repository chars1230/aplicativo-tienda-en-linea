-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2022 a las 22:23:50
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `civilc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `documentoAdministrador` int(11) NOT NULL,
  `nombreAdministrador` varchar(30) NOT NULL,
  `apellidoAdministrador` varchar(30) NOT NULL,
  `contrasenaAdministrador` varchar(30) NOT NULL,
  `correoAdministrador` varchar(50) NOT NULL,
  `fechaNacimiento` varchar(30) NOT NULL,
  `telefonoAdministrador` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`documentoAdministrador`, `nombreAdministrador`, `apellidoAdministrador`, `contrasenaAdministrador`, `correoAdministrador`, `fechaNacimiento`, `telefonoAdministrador`) VALUES
(1151431377, 'samir', 'castillo', '12345', 'csamir1230@gmail.com', '3153212638', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Documento` int(12) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Contrasena` varchar(30) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Ciudad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Documento`, `Nombres`, `Apellidos`, `Contrasena`, `Correo`, `Telefono`, `Direccion`, `Ciudad`) VALUES
(1151431376, 'luis carlos', 'hutado urrutia', '12345', 'csamir1230@gmail.com', '3184688914', 'cr.17D#19-06', 'cali'),
(1151441478, 'justin samir', 'lara celorio', '12345', 'csamir1230@gmail.com', '3184698914', 'cr.17D#19-06', 'cali');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`documentoAdministrador`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `documentoAdministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1151431378;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
