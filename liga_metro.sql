/*
 Navicat Premium Data Transfer

 Source Server         : Chaco
 Source Server Type    : MySQL
 Source Server Version : 100428
 Source Host           : localhost:3306
 Source Schema         : liga_metro

 Target Server Type    : MySQL
 Target Server Version : 100428
 File Encoding         : 65001

 Date: 30/10/2023 11:01:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for equipos
-- ----------------------------
DROP TABLE IF EXISTS `equipos`;
CREATE TABLE `equipos`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `liga` int NULL DEFAULT NULL,
  `delegado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `img_equipo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `creado_por` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `creado_el` timestamp(0) NULL DEFAULT NULL,
  `modificado_por` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `modificado_el` timestamp(0) NULL DEFAULT NULL,
  `estatus` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of equipos
-- ----------------------------
INSERT INTO `equipos` VALUES (2, 'Garibaldi', 18, 'Jesus Hernández', '<img id=\"Garibaldi\" src=\"http://localhost/dashboard/futbol_metro/assets/images/img_equipos/Garibaldi/principal.png\" alt=\"\" class=\"avatar-xxs rounded-circle image_src object-cover\">', 'chuchostark@gmail.com', '2023-09-28 15:55:36', 'chuchostark@gmail.com', '2023-09-28 15:56:29', 1);
INSERT INTO `equipos` VALUES (4, 'Material Rodante', 17, 'Leonardo Hernández', '<img id=\"Material_Rodante\" src=\"http://localhost/dashboard/futbol_metro/assets/images/img_equipos/Material_Rodante/principal.png\" alt=\"\" class=\"avatar-xxs rounded-circle image_src object-cover\">', 'chuchostark@gmail.com', '2023-09-29 19:10:01', 'chuchostark@gmail.com', '2023-09-29 19:10:01', 1);

-- ----------------------------
-- Table structure for torneos
-- ----------------------------
DROP TABLE IF EXISTS `torneos`;
CREATE TABLE `torneos`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre_torneo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lugar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `temporada` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `modalidad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `dias` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `horarios` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fecha_inicio` date NULL DEFAULT NULL,
  `fecha_fin` date NULL DEFAULT NULL,
  `categoria` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `creado_por` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `creado_el` timestamp(0) NULL DEFAULT NULL,
  `modificado_por` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `modificado_el` timestamp(0) NULL DEFAULT NULL,
  `estatus` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of torneos
-- ----------------------------
INSERT INTO `torneos` VALUES (17, 'Primera Fuerza', 'Deportivo Metro', '2023-2024', 'Liga', 'Sabado', '08:00,09:30,11:00,12:30', '2023-05-27', '2023-12-16', 'Libre', '<img id=\"Primera_Fuerza\" src=\"http://localhost/dashboard/futbol_metro/assets/images/img_torneos/Primera_Fuerza/principal.png\" alt=\"\" class=\"avatar-xxs rounded-circle image_src object-cover\">', 'chuchostark@gmail.com', '2023-08-10 19:01:13', 'chuchostark@gmail.com', '2023-08-15 18:47:55', 1);
INSERT INTO `torneos` VALUES (18, 'Segunda Fuerza', 'Deportivo Metro', '2023-2024', 'Liga', 'Domingo', '08:00,09:30,11:00,12:30', '2023-05-28', '2023-12-17', 'Libre', '<img id=\"Segunda_Fuerza\" src=\"http://localhost/dashboard/futbol_metro/assets/images/img_torneos/Segunda_Fuerza/principal.png\" alt=\"\" class=\"avatar-xxs rounded-circle image_src object-cover\">', 'chuchostark@gmail.com', '2023-08-11 12:14:51', 'chuchostark@gmail.com', '2023-08-15 18:49:22', 1);
INSERT INTO `torneos` VALUES (28, 'Veteranos', 'Deportivo Metro', '2023-2024', 'Liga', 'Martes,Miercoles,Jueves,Viernes', '16:00', '2023-05-22', '2023-11-24', 'Veteranos', '<img id=\"Veteranos\" src=\"http://localhost/dashboard/futbol_metro/assets/images/img_torneos/Veteranos/principal.png\" alt=\"\" class=\"avatar-xxs rounded-circle image_src object-cover\">', 'chuchostark@gmail.com', '2023-09-08 13:26:13', 'chuchostark@gmail.com', '2023-09-08 13:26:32', 1);

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pass` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `roles` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `creado_por` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `creado_el` timestamp(0) NULL DEFAULT NULL,
  `modificado_por` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `modificado_el` timestamp(0) NULL DEFAULT NULL,
  `estatus` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, 'Jesus Hernández', 'chuchostark@gmail.com', 'KzFabXdQcGh4cDBiWS9OaVNKQXp0UT09', 'admin', 'chuchostark@gmail.com', '2023-06-12 17:25:23', 'chuchostark@gmail.com', '2023-06-12 17:25:27', 1);

SET FOREIGN_KEY_CHECKS = 1;
