-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2020 a las 18:03:46
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crud`
--

CREATE TABLE `crud` (
  `id` int(25) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `noticia` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `crud`
--

INSERT INTO `crud` (`id`, `titulo`, `noticia`) VALUES
(1, 'Lorem ipsum', 'Lorem ipsum dolor sit amet consectetur adipiscing elit pulvinar, etiam iaculis eleifend maecenas eget aliquam feugiat vel, tempus porttitor urna neque bibendum luctus in. Himenaeos dis volutpat convallis turpis fames felis class, viverra nostra tincidunt leo hendrerit in sagittis, tortor purus habitant curabitur natoque tellus. Nisi ultricies massa mollis class venenatis himenaeos lacus, penatibus natoque vivamus duis curabitur ad porttitor, sed molestie sollicitudin nisl sodales donec.'),
(32, 'Historia Lorep', 'qui dolorem ipsum, quia dolor sit amet consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem'),
(36, 'Orange Francia selecciona a Nokia y Ericsson como proveedores de equipamiento 5G', 'El grupo francés de telecomunicaciones Orange ha seleccionado a Nokia y Ericsson como sus proveedores de equipamiento para el despliegue de su red de 5G en el país galo durante los próximos cinco años, decisión que asegura haber tomado tras \"varios meses de pruebas\", según ha informado la compañía en un comunicado.'),
(62, 'TEXTO SIMULADO', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
