-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2025 a las 22:21:41
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
-- Base de datos: `g1_db_movies`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `main_genre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `genre`
--

INSERT INTO `genre` (`id_genre`, `main_genre`) VALUES
(12, 'aventura'),
(14, 'fantasia'),
(16, 'animación'),
(18, 'drama'),
(27, 'terror'),
(28, 'acción'),
(35, 'comedia'),
(53, 'suspenso'),
(80, 'crimen'),
(878, 'ciencia fición'),
(10749, 'romance'),
(10751, 'familia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movie`
--

CREATE TABLE `movie` (
  `id_movie` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `poster_path` varchar(60) NOT NULL,
  `release_date` date NOT NULL,
  `overview` text NOT NULL,
  `company` varchar(45) NOT NULL,
  `id_genre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `movie`
--

INSERT INTO `movie` (`id_movie`, `title`, `poster_path`, `release_date`, `overview`, `company`, `id_genre`) VALUES
(7451, 'Aristogatos', 'images/movies/67118e573214a7.10911447.jpg', '2002-08-09', 'En Parí­s una anciana millonaria y excéntrica lleva una vida feliz con sus gatos en su enorme mansión, con la única ayuda de su fiel mayordomo, Edgar. Allí­, Duquesa vive con sus tres traviesos cachorros, sin saber que en realidad el mayordomo planea acabar con todos los gatos para convertirse en el único heredero de la enorme fortuna de la anciana Madame Bonfamille. Decidido a acabar con los gatos, los abandona en un lugar remoto, donde son ayudados por Thomas O’Malley, un atractivo gato vagabundo con mucho mundo a sus espaldas.', 'Columbia Pictures', 16),
(365177, 'Cuando acecha la maldad', 'images/movies/jtEZi4eZxDjxcDIeMbkQ8HmvRs1.jpg', '2024-08-07', '\"Cuando acecha la maldad\" es el título de una película de terror argentina de 2023 dirigida por Demián Rugna, que se estrenó internacionalmente y llegó a Netflix en junio de 2024. La película, ganadora del Festival de Sitges en 2023, se ambienta en la zona rural de Argentina y cuenta la historia de dos hermanos que descubren a un hombre poseído por un demonio, lo que desencadena una serie de eventos que amenazan con propagar el mal por todo el pueblo y el mundo. ', 'Lionsgate', 27),
(519182, 'El Padrino', 'images/movies/kqph8UWNOoYgTjYnkAx8dRlLLCq.jpg', '2024-06-20', 'Don Vito Corleone es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York en los años 40. El hombre tiene cuatro hijos: Connie, Sonny, Fredo y Michael, que no quiere saber nada de los negocios sucios de su padre. Cuando otro capo, Sollozzo, intenta asesinar a Corleone, empieza una cruenta lucha entre los distintos clanes.', 'Universal Pictures', 18),
(917496, 'El viaje de chihiro', 'images/movies/kWJw7dCWHcfMLr0irTHAPIKrJ4I.jpg', '2024-09-04', 'Chihiro es una niña de diez años caprichosa y testaruda que cree que el universo entero debe someterse a sus deseos. Camino de su nuevo hogar junto a sus padres, una idea que la enfurece, la familia se equivoca de camino y aparece al final de un misterioso callejón sin salida, donde topan con un extraño edificio con un largo pasaje que los conduce a un pueblo fantasmal donde los espera un magnífico banquete.\n', 'Studio Ghibli', 16),
(933260, 'Perfect Blue', 'images/movies/uZXQExGj9YfVNH2XCS5yVjx0auh.jpg', '2024-09-09', 'Mima, una cantante muy popular, decide abandonar su banda de música para empezar una carrera como actriz en una serie de televisión. La imagen sabia y endulzada de este icono del pop se rompe cuando la joven tiene que protagonizar escenas de violación colectiva y aparecer desnuda.\n', 'Working Title Films', 18),
(957452, 'Get Out', 'images/movies/X9iFHeIYgfqoZImvdidx8b9v4R.jpg', '2024-08-21', 'Chris es un joven y exitoso fotógrafo afroamericano que, desde hace cinco meses, sale con Rose, una chica blanca. Aunque no está muy convencido, termina accediendo a la invitación de Rose para conocer a su familia por lo que ella le invita a pasar un fin de semana en el campo con sus padres, Missy y Dean. Al principio, Chris piensa que el comportamiento complaciente de los padres se debe a su nerviosismo por la relación interracial de su hija, pero a medida que pasan las horas, todo cambia.\n', 'Davis Films', 53),
(1022789, 'Suspiria', 'images/movies/aQnbNiadeGzGSjWLaXyeNxpAUIx.jpg', '2024-06-11', 'Una joven estadounidense viaja a Berlín para formar parte de una compañía de danza de renombre mundial, pero la academia esconde una historia oscura y horripilante.\n', 'Pixar Animation Studios', 27),
(1034541, 'Guardianes de la galaxia', 'images/movies/5eECVdOWwbsUARVxLA7ENyBYx3H.jpg', '2024-10-09', 'El temerario aventurero Peter Quill ha robado una misteriosa esfera codiciada por Ronan, un poderoso villano cuyas ambiciones amenazan a todo el universo. Quill se convierte en la presa más codiciada por todos los cazarrecompensas de la galaxia.', 'Cineverse', 12),
(1079091, 'Hannibal Lecter', 'images/movies/2EH42blLQzgqwDWxn39RXkTgb91.jpg', '2024-08-07', 'Hace diez años que el Dr. Hannibal Lecter conoció a la agente Clarice Starling y huyó del hospital de máxima seguridad, pero ninguno de los dos ha podido olvidarse del otro. Mason Verger también recuerda a Hannibal y está obsesionado con vengarse.\n', 'Wayfarer Studios', 80);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`) VALUES
(1, 'web@admin.com', 'QuieroTerminarConEstoPorfavor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`),
  ADD KEY `id_genre` (`id_genre`);

--
-- Indices de la tabla `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id_movie`),
  ADD KEY `id_genre` (`id_genre`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
