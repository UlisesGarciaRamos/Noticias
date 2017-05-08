-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2017 a las 19:46:51
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `noticias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `nombre` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mensaje` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`nombre`, `email`, `mensaje`) VALUES
('Ulise', 'drag_1490@hotmail.com', 'Me acabo de enterar que dan churros gratis =D vamos por un churro!'),
('Scarlett', 'ulises.garcia.ugr@hotmail.com', 'hola mundo, aqui jugando con un tipo de texto. vamos a enviar el mensaje pasito a pasito y vamoh a bailar este baile que esta perron =D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` blob,
  `estado` int(11) DEFAULT NULL,
  `rol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `apellidos`, `usuario`, `email`, `password`, `estado`, `rol`) VALUES
(1, 'jose manuel', 'gomez alavez', 'mane', 'josemanuelgomezalavez@hotmail.com', 0x0e5e5a16a8b111ce6fdcdb6750e171dc, 0, 'admin'),
(2, 'ulises ', 'garcia ramos', 'arcangel', 'ulises@hotmail.com', 0x9761605279737692f5e738aca7e120d0, 0, 'admin'),
(3, 'jose manuel', 'gomez alavez', 'mane1', 'k-re083@hotmail.com', 0x50f0520240be7d43d0aa07dd9c804a1c, 0, 'cliente'),
(4, 'ulises', 'garcia ramos', 'uli1', 'arcangel@hotmail.com', 0x25d5d63ed8e6c1ca5331a5e05f310763, 0, 'cliente'),
(5, 'jose armando', 'rosario pachecho', 'armando', 'armando@hotmail.com', 0x87a4e0735134e10c8e4659e15caeb60a, 0, 'cliente'),
(6, 'miriam', 'Ramirez Perez', 'miriam', 'miriam@hotmail.com', 0x4067240235d621a88a9d4d888aa8c9fb, 0, 'cliente'),
(7, 'kevin', 'Chavez Santiago', 'kevin', 'kevin@hotmail.com', 0xd27726704194a4967db979c583d5c8fa, 0, 'cliente'),
(8, 'Heydi', 'Ramirez Cortez', 'heydi', 'heydi@hotmail.com', 0x85f91632ce9b37ffda8fc8dd18f5269c, 0, 'admin'),
(9, 'Alan', 'Vazquez Cortez', 'alan', 'alan@hotmail.com', 0x8f2ae2fd9ce56325b19ee23947e9764b, 0, 'admin'),
(10, 'Rodrigo', 'Bohorquez Arrazola', 'roybares', 'roybares@hotmail.com', 0xf528c1a4c6794504ca05fcc2fb382064, 0, 'admin'),
(14, 'kvkkjkK', 'kj', 'kjk', 'kk@hotmail.com', NULL, 0, 'Administrador'),
(15, 'djsfjs', 'j', 'jj', 'kk@hotmail.com', NULL, 0, 'Administrador'),
(16, 'sdsjj', 'j', 'j', 'jj@hotmail.com', NULL, 0, 'Administrador'),
(17, 'ooo', 'oo', 'o', 'o@hotmia.com', NULL, 0, 'Administrador'),
(18, 'Scarlett', 'Garcia', 'chiquita', 'pica@gmail.com', NULL, 0, 'Administrador'),
(19, 'ppp', 'paap', 'ppp', 'root@hotmil.com', NULL, 0, 'Administrador'),
(20, 'peres', 'canseco', 'jsdfksdj', 'root@hotmil.com', NULL, 0, 'Administrador'),
(21, 'sdkfsdk', 'ksdkfks', 'ksdkfsk', 'sd@hotmail.com', NULL, 0, 'Administrador'),
(22, 'vanesa', 'juana', 'kdjfskdj', 'kk@hotmail.com', NULL, 0, 'Administrador'),
(23, 'sdad', 'sadas', 'dsad', 'root@grm', NULL, 0, 'Administrador'),
(24, 'fsdkjk', 'jkj', 'kjk', 'safas@gofo', NULL, 0, 'Administrador'),
(25, 'kjfkj', 'kjk', 'jkjk', 'kk@hotmail.com', NULL, 0, 'Administrador'),
(26, 'sddssdjk', 'dsfjsjkk', 'jkkj', 'root@zicateula.com', NULL, 0, 'Administrador'),
(27, 'emogay', 'sdkfsdjk', 'chiquitazzz', 'perico@umar.com', NULL, 0, 'Administrador'),
(28, 'sdadaj', 'jh', 'jj', 'root@gom.com', 0x4a015e751fd601499e7b04e633a23c34, 0, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_cliente`
--

CREATE TABLE `usuario_cliente` (
  `idCliente` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `usuario_cliente`
--
ALTER TABLE `usuario_cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `usuario_cliente`
--
ALTER TABLE `usuario_cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario_cliente`
--
ALTER TABLE `usuario_cliente`
  ADD CONSTRAINT `usuario_cliente_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
