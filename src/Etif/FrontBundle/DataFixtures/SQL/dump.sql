-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:8889
-- Tiempo de generación: 05-01-2017 a las 10:14:28
-- Versión del servidor: 5.5.42
-- Versión de PHP: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `jobaat`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` bigint(20) NOT NULL,
  `razon_social` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cif` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `localidad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cp` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `responsable` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sector` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num_trabajadores` smallint(6) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `razon_social`, `cif`, `direccion`, `localidad`, `cp`, `email`, `responsable`, `sector`, `num_trabajadores`, `created_at`, `updated_at`, `telefono`) VALUES
(26, 'Runte Group', '876501X', '7883 Jerel Hills Apt. 796\nKleinton, NH 94140-4022', 'South Rexhaven', '24233', 'batz.mercedes@lang.biz', 'Dr. Karianne Fahey IV', 'magnam', 5, '2017-01-04 14:06:44', '2017-01-04 14:06:44', ''),
(27, 'Thompson-Kiehn', '35884262E', '9411 Muller Drive Suite 204\nFranciscafort, MS 33375-1918', 'Predovicport', '18904', 'marshall.armstrong@mosciski.com', 'Dr. Carter Huels', 'quis', 3, '2017-01-04 14:06:44', '2017-01-04 14:06:44', ''),
(28, 'Jast-Marquardt', '16258638R', '872 Deanna Bridge Suite 026\nRafaelberg, IN 93888', 'Lake Gunnerville', '44266-4152', 'cindy27@orn.com', 'Prof. Gerda Lynch', 'omnis', 2, '2017-01-04 14:06:44', '2017-01-04 14:06:44', ''),
(29, 'Stark Group', '7328228T', '61330 Heidenreich Knolls Suite 396\nWest Mitchel, AR 43471-9259', 'North Monserrate', '67505', 'sbayer@cartwright.net', 'Lance Langosh', 'occaecati', 4, '2017-01-04 14:06:44', '2017-01-04 14:06:44', ''),
(30, 'Tremblay-Littel', '66894559B', '94641 Schaefer Skyway Suite 564\nPort Emmittchester, CT 68690', 'Oberbrunnertown', '12045', 'vgottlieb@gutmann.org', 'Priscilla Lang', 'aut', 4, '2017-01-04 14:06:44', '2017-01-04 14:06:44', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

CREATE TABLE `oferta` (
  `id` bigint(20) NOT NULL,
  `empresa_id` bigint(20) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tipo_contrato` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `num_plazas` smallint(6) NOT NULL,
  `salario` int(11) DEFAULT NULL,
  `horario` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `oferta`
--

INSERT INTO `oferta` (`id`, `empresa_id`, `titulo`, `descripcion`, `tipo_contrato`, `num_plazas`, `salario`, `horario`, `created_at`, `updated_at`) VALUES
(51, 27, 'Retail Sales person', 'Iste vero sit omnis doloribus modi nulla beatae voluptatem cum provident eveniet maxime eaque quibusdam mollitia ipsum doloribus dolores et voluptas accusantium saepe provident magni harum voluptatibus nesciunt vel nihil autem sapiente molestias perspiciatis sunt ut mollitia incidunt vel voluptatem quia a pariatur ad nobis expedita ut fuga.', NULL, 2, 15070, 3, '2017-01-04 14:06:44', '2017-01-04 14:06:44'),
(52, 30, 'Police and Sheriffs Patrol Officer', 'Sunt laborum sed ea natus nihil voluptates debitis laborum cumque cum ad sunt quam optio quia aut non quibusdam qui perspiciatis neque reiciendis voluptates nemo in voluptas omnis aut ut et est libero ullam vitae quia consequatur numquam dicta omnis libero molestiae exercitationem atque ratione.', NULL, 4, 23717, 2, '2017-01-04 14:06:44', '2017-01-04 14:06:44'),
(53, 29, 'Highway Patrol Pilot', 'Et qui voluptate saepe sint deleniti molestiae fuga hic dolorem fugit eum dolor quia facilis nesciunt eveniet odit laboriosam ipsam enim commodi repudiandae possimus praesentium aut sapiente quidem et sed tenetur.', NULL, 5, 15065, 1, '2017-01-04 14:06:44', '2017-01-04 14:06:44'),
(54, 27, 'Forestry Conservation Science Teacher', 'Perferendis odio vel qui recusandae alias ducimus qui est aperiam qui aut nulla perferendis rerum ullam nam quos aut natus harum eaque laboriosam nemo in officiis modi qui animi voluptatum quo necessitatibus qui velit nihil ea ipsam animi cumque dolore quia.', NULL, 6, 14817, 4, '2017-01-04 14:06:44', '2017-01-04 14:06:44'),
(55, 29, 'Loan Interviewer', 'Illum id alias aspernatur in soluta hic minima eum qui culpa non mollitia molestiae quia est nostrum aliquid minima autem a minus dolorum magni porro eius cumque odio quos laboriosam consectetur nostrum ut aut sit aut et magnam sint magnam eum aut eaque provident velit unde sed nulla molestiae est vitae dolor nobis qui quibusdam sint nisi et repellendus ut quo quo vero qui animi quam.', NULL, 9, 24895, 0, '2017-01-04 14:06:44', '2017-01-04 14:06:44'),
(56, 28, 'Coating Machine Operator', 'Esse eligendi doloremque aperiam aspernatur repellendus libero atque beatae quas et ipsum officia ea sed incidunt eveniet omnis recusandae laudantium nihil id debitis iste et animi vel dolores odit deleniti sunt consectetur qui et eligendi ad ut debitis aliquid odio ad repellat in.', NULL, 3, 15262, 2, '2017-01-04 14:06:44', '2017-01-04 14:06:44'),
(57, 27, 'Logistician', 'Pariatur ex enim illum ad facilis voluptates cum ab ab hic dolores et expedita qui eius quo explicabo similique est modi odio iste quia nostrum minus voluptates explicabo velit blanditiis neque numquam consectetur architecto dignissimos assumenda aut veniam autem est repellendus.', NULL, 7, 21486, 1, '2017-01-04 14:06:44', '2017-01-04 14:06:44'),
(58, 27, 'Soldering Machine Setter', 'Nemo nihil et enim unde consequatur asperiores ullam eaque voluptatem voluptate dolorum illum et dignissimos molestias voluptas laudantium ex vero aut sunt sit sint doloremque ut laudantium at ut enim ipsum inventore quibusdam corporis aut non voluptas excepturi illum odio ea dolor corporis ut incidunt aspernatur ut voluptatem maxime nisi qui voluptatem totam optio occaecati.', NULL, 3, 23621, 0, '2017-01-04 14:06:44', '2017-01-04 14:06:44'),
(59, 26, 'Installation and Repair Technician', 'Saepe dolor voluptas ut porro temporibus molestias voluptatem nisi qui ab exercitationem vel laborum nostrum est officiis commodi consequatur voluptatum possimus molestiae asperiores consequatur corrupti est amet dolorem distinctio eveniet error quod molestias natus perspiciatis omnis et consequatur occaecati sunt sit velit qui et consequatur voluptatum veniam ipsa dolor dolore omnis asperiores quo vitae.', NULL, 6, 13719, 0, '2017-01-04 14:06:44', '2017-01-04 14:06:44'),
(60, 28, 'Textile Machine Operator', 'Quis hic et temporibus est perferendis et voluptatem saepe suscipit iusto placeat esse laborum possimus quidem possimus blanditiis amet dolores omnis expedita nisi ex delectus ab sed dolores quisquam rerum et velit et amet quia distinctio explicabo possimus nesciunt minus sint id quasi aspernatur non suscipit sapiente omnis enim ratione debitis quae enim et expedita maxime.', NULL, 4, 15017, 0, '2017-01-04 14:06:44', '2017-01-04 14:06:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dni` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `carnet_conducir` tinyint(1) NOT NULL DEFAULT '0',
  `vehiculo_propio` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `localidad_nacimiento` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `num_ss` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pirmi_ayuda` tinyint(1) NOT NULL DEFAULT '0',
  `grado_discapacidad` smallint(6) NOT NULL DEFAULT '0',
  `perceptor_paro` tinyint(1) NOT NULL DEFAULT '0',
  `fecha_fin_paro` date NOT NULL,
  `estudios_prim` smallint(6) NOT NULL,
  `estudios_sec` smallint(6) NOT NULL,
  `estudios_univ` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nivel_catala` smallint(6) NOT NULL,
  `nivel_ingles` smallint(6) NOT NULL,
  `nivel_frances` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7479C8F2521E1991` (`empresa_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `oferta`
--
ALTER TABLE `oferta`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD CONSTRAINT `FK_7479C8F2521E1991` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`);
