-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-07-2024 a las 13:52:31
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `music_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `artist` varchar(25) NOT NULL,
  `style` varchar(25) NOT NULL,
  `year` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `albums`
--

INSERT INTO `albums` (`id`, `name`, `artist`, `style`, `year`, `image`) VALUES
(1, 'Estopa', 'Estopa', 'Rock', '2024-07-01 09:36:46', ''),
(2, 'Violadores del Verso', 'KaseO', 'Rap', '2024-07-01 09:37:24', ''),
(3, 'RomeroFlores', 'Romerino', 'Florino', '2024-06-30 22:00:00', 'anarchy-computer-hack-hacker-wallpaper-preview (1).jpg'),
(4, 'asd', 'asd', 'asd', '2024-06-30 22:00:00', 'msg5797113667-10800.jpg'),
(8, 'probando', '123', '123', '2024-08-01 22:00:00', 'lp7.jpg'),
(9, 'wrgehrag<', 'aehaherhr', 'aherhreahre', '2024-07-04 22:00:00', 'burning-crusade.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
