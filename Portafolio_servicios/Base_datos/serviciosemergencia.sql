-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2024 a las 05:15:47
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
-- Base de datos: `serviciosemergencia`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registrar_intento_fallido` (IN `p_email` VARCHAR(150))   BEGIN
    UPDATE Usuarios 
    SET intentos_fallidos = intentos_fallidos + 1,
        bloqueado_hasta = CASE 
            WHEN intentos_fallidos >= 5 THEN DATE_ADD(NOW(), INTERVAL 30 MINUTE)
            ELSE bloqueado_hasta 
        END
    WHERE Email = p_email;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registrar_usuario` (IN `p_nombre` VARCHAR(100), IN `p_email` VARCHAR(150), IN `p_password` VARCHAR(255))   BEGIN
    DECLARE usuario_id INT;
    
    -- Insertar el usuario
    INSERT INTO Usuarios (Nombre, Email, Contraseña)
    VALUES (p_nombre, p_email, p_password);
    
    -- Obtener el ID del usuario insertado
    SET usuario_id = LAST_INSERT_ID();
    
    -- Asignar el rol de usuario por defecto
    INSERT INTO Usuario_Roles (usuario_id, rol_id)
    SELECT usuario_id, id FROM Roles WHERE nombre = 'usuario';
    
    -- Crear configuración por defecto
    INSERT INTO Configuracion_Usuario (usuario_id)
    VALUES (usuario_id);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_resetear_intentos` (IN `p_email` VARCHAR(150))   BEGIN
    UPDATE Usuarios 
    SET intentos_fallidos = 0,
        bloqueado_hasta = NULL
    WHERE Email = p_email;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion_usuario`
--

CREATE TABLE `configuracion_usuario` (
  `usuario_id` int(11) NOT NULL,
  `notificaciones_email` tinyint(1) DEFAULT 1,
  `tema_preferido` varchar(20) DEFAULT 'light',
  `idioma` varchar(10) DEFAULT 'es',
  `zona_horaria` varchar(50) DEFAULT 'America/Mexico_City'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_accesos`
--

CREATE TABLE `historial_accesos` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT current_timestamp(),
  `ip_address` varchar(45) DEFAULT NULL,
  `tipo_accion` enum('login','logout','fallido','reset_password') NOT NULL,
  `detalles` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `descripcion`) VALUES
(1, 'admin', 'Administrador del sistema'),
(2, 'usuario', 'Usuario regular del sistema'),
(3, 'supervisor', 'Supervisor con permisos extendidos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones`
--

CREATE TABLE `sesiones` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `ultima_actividad` timestamp NULL DEFAULT NULL,
  `creada_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Disparadores `sesiones`
--
DELIMITER $$
CREATE TRIGGER `tr_actualizar_ultima_sesion` AFTER INSERT ON `sesiones` FOR EACH ROW BEGIN
    UPDATE Usuarios 
    SET ultima_sesion = NOW()
    WHERE id = NEW.usuario_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Contraseña` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `reset_token` varchar(100) DEFAULT NULL,
  `reset_token_expires` datetime DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `ultima_sesion` datetime DEFAULT NULL,
  `activo` tinyint(1) DEFAULT 1,
  `intentos_fallidos` int(11) DEFAULT 0,
  `bloqueado_hasta` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nombre`, `Email`, `Contraseña`, `remember_token`, `reset_token`, `reset_token_expires`, `fecha_registro`, `ultima_sesion`, `activo`, `intentos_fallidos`, `bloqueado_hasta`) VALUES
(1, 'Administrador', 'admin@sistema.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '2024-11-18 03:54:58', NULL, 1, 0, NULL),
(2, 'HG', 'hjosephnavarro882@gmail.com', '$2y$12$RTxjV5HDbwZ9QBU.OKp5neqN2NmV0F9cau6F.3JdPgnUHu22cx6Re', NULL, NULL, NULL, '2024-11-18 03:57:15', NULL, 1, 0, NULL);

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `tr_limpiar_datos_usuario` BEFORE DELETE ON `usuarios` FOR EACH ROW BEGIN
    -- Registrar la eliminación en un log si lo deseas
    INSERT INTO Historial_Accesos (usuario_id, tipo_accion, detalles)
    VALUES (OLD.id, 'logout', 'Usuario eliminado del sistema');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_roles`
--

CREATE TABLE `usuario_roles` (
  `usuario_id` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `fecha_asignacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario_roles`
--

INSERT INTO `usuario_roles` (`usuario_id`, `rol_id`, `fecha_asignacion`) VALUES
(1, 1, '2024-11-18 03:54:58');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_usuarios_roles`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_usuarios_roles` (
`id` int(11)
,`Nombre` varchar(100)
,`Email` varchar(150)
,`roles` mediumtext
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_usuarios_roles`
--
DROP TABLE IF EXISTS `vista_usuarios_roles`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_usuarios_roles`  AS SELECT `u`.`id` AS `id`, `u`.`Nombre` AS `Nombre`, `u`.`Email` AS `Email`, group_concat(`r`.`nombre` separator ',') AS `roles` FROM ((`usuarios` `u` left join `usuario_roles` `ur` on(`u`.`id` = `ur`.`usuario_id`)) left join `roles` `r` on(`ur`.`rol_id` = `r`.`id`)) GROUP BY `u`.`id`, `u`.`Nombre`, `u`.`Email` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `configuracion_usuario`
--
ALTER TABLE `configuracion_usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Indices de la tabla `historial_accesos`
--
ALTER TABLE `historial_accesos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `idx_historial_fecha` (`fecha_hora`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `idx_sesiones_token` (`token`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `idx_usuarios_email` (`Email`);

--
-- Indices de la tabla `usuario_roles`
--
ALTER TABLE `usuario_roles`
  ADD PRIMARY KEY (`usuario_id`,`rol_id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historial_accesos`
--
ALTER TABLE `historial_accesos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `configuracion_usuario`
--
ALTER TABLE `configuracion_usuario`
  ADD CONSTRAINT `configuracion_usuario_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `historial_accesos`
--
ALTER TABLE `historial_accesos`
  ADD CONSTRAINT `historial_accesos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD CONSTRAINT `sesiones_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `usuario_roles`
--
ALTER TABLE `usuario_roles`
  ADD CONSTRAINT `usuario_roles_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `usuario_roles_ibfk_2` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
