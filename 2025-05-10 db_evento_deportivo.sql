/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 50651 (5.6.51)
 Source Host           : localhost:3306
 Source Schema         : db_evento_deportivo

 Target Server Type    : MySQL
 Target Server Version : 50651 (5.6.51)
 File Encoding         : 65001

 Date: 10/05/2025 00:52:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for atleta_estado
-- ----------------------------
DROP TABLE IF EXISTS `atleta_estado`;
CREATE TABLE `atleta_estado`  (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `estado_atleta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_estado`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of atleta_estado
-- ----------------------------

-- ----------------------------
-- Table structure for atleta_tipo
-- ----------------------------
DROP TABLE IF EXISTS `atleta_tipo`;
CREATE TABLE `atleta_tipo`  (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_atleta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_tipo`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of atleta_tipo
-- ----------------------------

-- ----------------------------
-- Table structure for cancha
-- ----------------------------
DROP TABLE IF EXISTS `cancha`;
CREATE TABLE `cancha`  (
  `id_cancha` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cancha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_cancha`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cancha
-- ----------------------------

-- ----------------------------
-- Table structure for competencia
-- ----------------------------
DROP TABLE IF EXISTS `competencia`;
CREATE TABLE `competencia`  (
  `id_competencia` int(11) NOT NULL AUTO_INCREMENT,
  `id_evento` int(11) NULL DEFAULT NULL,
  `id_deporte` int(11) NULL DEFAULT NULL,
  `id_supervisor` int(11) NULL DEFAULT NULL,
  `resultado_competencia` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `terminado` tinyint(4) NULL DEFAULT NULL,
  `fin_inscripcion` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_competencia`) USING BTREE,
  INDEX `id_deporte`(`id_deporte`) USING BTREE,
  INDEX `id_supervisor`(`id_supervisor`) USING BTREE,
  INDEX `id_evento`(`id_evento`) USING BTREE,
  CONSTRAINT `competencia_ibfk_1` FOREIGN KEY (`id_deporte`) REFERENCES `deporte` (`id_deporte`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `competencia_ibfk_2` FOREIGN KEY (`id_supervisor`) REFERENCES `persona_arbitro` (`id_supervisor`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `competencia_ibfk_3` FOREIGN KEY (`id_evento`) REFERENCES `evento_deportivo` (`id_evento`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of competencia
-- ----------------------------

-- ----------------------------
-- Table structure for congresillo_asistencia
-- ----------------------------
DROP TABLE IF EXISTS `congresillo_asistencia`;
CREATE TABLE `congresillo_asistencia`  (
  `id_asistencia_congresillo` int(11) NOT NULL AUTO_INCREMENT,
  `representante` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_delegacion` int(11) NULL DEFAULT NULL,
  `id_congresillo` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_asistencia_congresillo`) USING BTREE,
  INDEX `id_delegacion`(`id_delegacion`) USING BTREE,
  INDEX `id_congresillo`(`id_congresillo`) USING BTREE,
  CONSTRAINT `congresillo_asistencia_ibfk_1` FOREIGN KEY (`id_delegacion`) REFERENCES `delegacion` (`id_delegacion`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `congresillo_asistencia_ibfk_2` FOREIGN KEY (`id_congresillo`) REFERENCES `congresillo_deporte` (`id_congresillo`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of congresillo_asistencia
-- ----------------------------

-- ----------------------------
-- Table structure for congresillo_deporte
-- ----------------------------
DROP TABLE IF EXISTS `congresillo_deporte`;
CREATE TABLE `congresillo_deporte`  (
  `id_congresillo` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_congresillo` timestamp NULL DEFAULT NULL,
  `id_competencia` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_congresillo`) USING BTREE,
  INDEX `id_competencia`(`id_competencia`) USING BTREE,
  CONSTRAINT `congresillo_deporte_ibfk_1` FOREIGN KEY (`id_competencia`) REFERENCES `competencia` (`id_competencia`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of congresillo_deporte
-- ----------------------------

-- ----------------------------
-- Table structure for delegacion
-- ----------------------------
DROP TABLE IF EXISTS `delegacion`;
CREATE TABLE `delegacion`  (
  `id_delegacion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_delegacion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `abreviatura` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mascota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_tipo_delegacion` int(11) NULL DEFAULT NULL,
  `id_regla_delegacion` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_delegacion`) USING BTREE,
  INDEX `id_tipo_delegacion`(`id_tipo_delegacion`) USING BTREE,
  INDEX `id_regla_delegacion`(`id_regla_delegacion`) USING BTREE,
  CONSTRAINT `delegacion_ibfk_1` FOREIGN KEY (`id_tipo_delegacion`) REFERENCES `delegacion_tipo` (`id_tipo_delegacion`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `delegacion_ibfk_2` FOREIGN KEY (`id_regla_delegacion`) REFERENCES `delegacion_regla` (`id_regla_delegacion`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of delegacion
-- ----------------------------

-- ----------------------------
-- Table structure for delegacion_evento
-- ----------------------------
DROP TABLE IF EXISTS `delegacion_evento`;
CREATE TABLE `delegacion_evento`  (
  `id_delegacion_evento` int(11) NOT NULL AUTO_INCREMENT,
  `id_evento` int(11) NULL DEFAULT NULL,
  `id_delegacion` int(11) NULL DEFAULT NULL,
  `participa` tinyint(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_delegacion_evento`) USING BTREE,
  INDEX `id_evento`(`id_evento`) USING BTREE,
  INDEX `id_delegacion`(`id_delegacion`) USING BTREE,
  CONSTRAINT `delegacion_evento_ibfk_1` FOREIGN KEY (`id_evento`) REFERENCES `evento_deportivo` (`id_evento`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `delegacion_evento_ibfk_2` FOREIGN KEY (`id_delegacion`) REFERENCES `delegacion` (`id_delegacion`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of delegacion_evento
-- ----------------------------

-- ----------------------------
-- Table structure for delegacion_regla
-- ----------------------------
DROP TABLE IF EXISTS `delegacion_regla`;
CREATE TABLE `delegacion_regla`  (
  `id_regla_delegacion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_regla` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `regla` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id_regla_delegacion`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of delegacion_regla
-- ----------------------------

-- ----------------------------
-- Table structure for delegacion_tipo
-- ----------------------------
DROP TABLE IF EXISTS `delegacion_tipo`;
CREATE TABLE `delegacion_tipo`  (
  `id_tipo_delegacion` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_delegacion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_tipo_delegacion`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of delegacion_tipo
-- ----------------------------

-- ----------------------------
-- Table structure for deporte
-- ----------------------------
DROP TABLE IF EXISTS `deporte`;
CREATE TABLE `deporte`  (
  `id_deporte` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_deporte` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `max_atleta` int(11) NULL DEFAULT NULL,
  `min_atleta` int(11) NULL DEFAULT NULL,
  `icono_deporte` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `genero` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `individual` tinyint(4) NULL DEFAULT NULL,
  `id_categoria` int(11) NULL DEFAULT NULL,
  `id_regla` int(11) NULL DEFAULT NULL,
  `id_deporte_padre` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_deporte`) USING BTREE,
  INDEX `FK_categoria`(`id_categoria`) USING BTREE,
  INDEX `FK_regla`(`id_regla`) USING BTREE,
  INDEX `FK_padre`(`id_deporte_padre`) USING BTREE,
  CONSTRAINT `FK_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `deporte_categoria_puntuacion` (`id_categoria`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_padre` FOREIGN KEY (`id_deporte_padre`) REFERENCES `deporte` (`id_deporte`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_regla` FOREIGN KEY (`id_regla`) REFERENCES `deporte_regla` (`id_regla_deporte`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of deporte
-- ----------------------------

-- ----------------------------
-- Table structure for deporte_categoria_puntuacion
-- ----------------------------
DROP TABLE IF EXISTS `deporte_categoria_puntuacion`;
CREATE TABLE `deporte_categoria_puntuacion`  (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `puntos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_categoria`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of deporte_categoria_puntuacion
-- ----------------------------

-- ----------------------------
-- Table structure for deporte_regla
-- ----------------------------
DROP TABLE IF EXISTS `deporte_regla`;
CREATE TABLE `deporte_regla`  (
  `id_regla_deporte` int(11) NOT NULL,
  `nombre_regla` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `campos` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `cal_campos` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id_regla_deporte`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of deporte_regla
-- ----------------------------

-- ----------------------------
-- Table structure for equipo
-- ----------------------------
DROP TABLE IF EXISTS `equipo`;
CREATE TABLE `equipo`  (
  `id_equipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_equipo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_competencia` int(11) NULL DEFAULT NULL,
  `id_delegacion` int(11) NULL DEFAULT NULL,
  `id_estado` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_equipo`) USING BTREE,
  INDEX `id_competencia`(`id_competencia`) USING BTREE,
  INDEX `id_estado`(`id_estado`) USING BTREE,
  INDEX `id_delegacion`(`id_delegacion`) USING BTREE,
  CONSTRAINT `equipo_ibfk_1` FOREIGN KEY (`id_competencia`) REFERENCES `competencia` (`id_competencia`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `equipo_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `equipo_estado` (`id_estado`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `equipo_ibfk_3` FOREIGN KEY (`id_delegacion`) REFERENCES `delegacion` (`id_delegacion`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of equipo
-- ----------------------------

-- ----------------------------
-- Table structure for equipo_atleta
-- ----------------------------
DROP TABLE IF EXISTS `equipo_atleta`;
CREATE TABLE `equipo_atleta`  (
  `id_equipo_atleta` int(11) NOT NULL,
  `id_equipo` int(11) NULL DEFAULT NULL,
  `id_atleta` int(11) NULL DEFAULT NULL,
  `id_estado_atleta` int(11) NULL DEFAULT NULL,
  `capitan` tinyint(4) NULL DEFAULT NULL,
  `subcapitan` tinyint(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_equipo_atleta`) USING BTREE,
  INDEX `id_equipo`(`id_equipo`) USING BTREE,
  INDEX `id_atleta`(`id_atleta`) USING BTREE,
  INDEX `id_estado_atleta`(`id_estado_atleta`) USING BTREE,
  CONSTRAINT `equipo_atleta_ibfk_1` FOREIGN KEY (`id_equipo`) REFERENCES `equipo` (`id_equipo`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `equipo_atleta_ibfk_2` FOREIGN KEY (`id_atleta`) REFERENCES `persona_atleta` (`id_atleta`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `equipo_atleta_ibfk_3` FOREIGN KEY (`id_estado_atleta`) REFERENCES `atleta_estado` (`id_estado`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of equipo_atleta
-- ----------------------------

-- ----------------------------
-- Table structure for equipo_estado
-- ----------------------------
DROP TABLE IF EXISTS `equipo_estado`;
CREATE TABLE `equipo_estado`  (
  `id_estado` int(11) NOT NULL,
  `estado_equipo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_estado`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of equipo_estado
-- ----------------------------

-- ----------------------------
-- Table structure for evento_deportivo
-- ----------------------------
DROP TABLE IF EXISTS `evento_deportivo`;
CREATE TABLE `evento_deportivo`  (
  `id_evento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_evento` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `descripcion_evento` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fecha_inicio` timestamp NULL DEFAULT NULL,
  `fecha_fin` timestamp NULL DEFAULT NULL,
  `curso` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `edicion_evento` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `terminado` tinyint(4) NULL DEFAULT NULL,
  `resultado_edicion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `descripcion_delegaciones` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_regla_evento` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_evento`) USING BTREE,
  INDEX `FK_regla_evento`(`id_regla_evento`) USING BTREE,
  CONSTRAINT `FK_regla_evento` FOREIGN KEY (`id_regla_evento`) REFERENCES `evento_deportivo_regla` (`id_regla_evento`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of evento_deportivo
-- ----------------------------

-- ----------------------------
-- Table structure for evento_deportivo_regla
-- ----------------------------
DROP TABLE IF EXISTS `evento_deportivo_regla`;
CREATE TABLE `evento_deportivo_regla`  (
  `id_regla_evento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_regla` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `regla` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id_regla_evento`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of evento_deportivo_regla
-- ----------------------------

-- ----------------------------
-- Table structure for juego
-- ----------------------------
DROP TABLE IF EXISTS `juego`;
CREATE TABLE `juego`  (
  `id_juego` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_inicio` timestamp NULL DEFAULT NULL,
  `fecha_fin` timestamp NULL DEFAULT NULL,
  `descripcion_juego` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_competencia` int(11) NULL DEFAULT NULL,
  `id_fase` int(11) NULL DEFAULT NULL,
  `id_cancha` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_juego`) USING BTREE,
  INDEX `id_competencia`(`id_competencia`) USING BTREE,
  INDEX `id_fase`(`id_fase`) USING BTREE,
  INDEX `id_cancha`(`id_cancha`) USING BTREE,
  CONSTRAINT `juego_ibfk_1` FOREIGN KEY (`id_competencia`) REFERENCES `competencia` (`id_competencia`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `juego_ibfk_2` FOREIGN KEY (`id_fase`) REFERENCES `juego_fase` (`id_fase`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `juego_ibfk_3` FOREIGN KEY (`id_cancha`) REFERENCES `cancha` (`id_cancha`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of juego
-- ----------------------------

-- ----------------------------
-- Table structure for juego_delegacion
-- ----------------------------
DROP TABLE IF EXISTS `juego_delegacion`;
CREATE TABLE `juego_delegacion`  (
  `id_juego_delegacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_juego` int(11) NULL DEFAULT NULL,
  `id_delegacion` int(11) NULL DEFAULT NULL,
  `resultados` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id_juego_delegacion`) USING BTREE,
  INDEX `id_juego`(`id_juego`) USING BTREE,
  INDEX `id_delegacion`(`id_delegacion`) USING BTREE,
  CONSTRAINT `juego_delegacion_ibfk_1` FOREIGN KEY (`id_juego`) REFERENCES `juego` (`id_juego`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `juego_delegacion_ibfk_2` FOREIGN KEY (`id_delegacion`) REFERENCES `delegacion` (`id_delegacion`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of juego_delegacion
-- ----------------------------

-- ----------------------------
-- Table structure for juego_fase
-- ----------------------------
DROP TABLE IF EXISTS `juego_fase`;
CREATE TABLE `juego_fase`  (
  `id_fase` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_fase` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `es_final` tinyint(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_fase`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of juego_fase
-- ----------------------------

-- ----------------------------
-- Table structure for log
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log`  (
  `id` int(11) NOT NULL,
  `nombre_accion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tabla` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `record` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `creado` timestamp NULL DEFAULT NULL,
  `actualizado` timestamp NULL DEFAULT NULL,
  `id_usuario` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_usuario`(`id_usuario`) USING BTREE,
  CONSTRAINT `log_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of log
-- ----------------------------

-- ----------------------------
-- Table structure for permisos
-- ----------------------------
DROP TABLE IF EXISTS `permisos`;
CREATE TABLE `permisos`  (
  `id_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_permiso` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `modulo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `controller` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `accion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `habilitado` tinyint(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_permiso`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of permisos
-- ----------------------------

-- ----------------------------
-- Table structure for persona
-- ----------------------------
DROP TABLE IF EXISTS `persona`;
CREATE TABLE `persona`  (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `apellido` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `carnet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `genero` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_persona`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of persona
-- ----------------------------
INSERT INTO `persona` VALUES (1, 'Tony', 'Garcia', '94092899001', 'M');
INSERT INTO `persona` VALUES (2, 'Yoan', 'asd', '23231321', 'M');

-- ----------------------------
-- Table structure for persona_arbitro
-- ----------------------------
DROP TABLE IF EXISTS `persona_arbitro`;
CREATE TABLE `persona_arbitro`  (
  `id_supervisor` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) NULL DEFAULT NULL,
  `id_deporte` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_supervisor`) USING BTREE,
  INDEX `persona_arbitro_ibfk_1`(`id_persona`) USING BTREE,
  INDEX `id_deporte`(`id_deporte`) USING BTREE,
  CONSTRAINT `persona_arbitro_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `persona_arbitro_ibfk_2` FOREIGN KEY (`id_deporte`) REFERENCES `deporte` (`id_deporte`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of persona_arbitro
-- ----------------------------

-- ----------------------------
-- Table structure for persona_atleta
-- ----------------------------
DROP TABLE IF EXISTS `persona_atleta`;
CREATE TABLE `persona_atleta`  (
  `id_atleta` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) NULL DEFAULT NULL,
  `id_tipo` int(11) NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tamaño` float NULL DEFAULT NULL,
  `peso` float NULL DEFAULT NULL,
  `facultad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_atleta`) USING BTREE,
  INDEX `id_persona`(`id_persona`) USING BTREE,
  INDEX `id_tipo`(`id_tipo`) USING BTREE,
  CONSTRAINT `persona_atleta_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `persona_atleta_ibfk_2` FOREIGN KEY (`id_tipo`) REFERENCES `atleta_tipo` (`id_tipo`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of persona_atleta
-- ----------------------------

-- ----------------------------
-- Table structure for reclamacion
-- ----------------------------
DROP TABLE IF EXISTS `reclamacion`;
CREATE TABLE `reclamacion`  (
  `id_reclamacion` int(11) NOT NULL,
  `fecha_reclamacion` timestamp NULL DEFAULT NULL,
  `descripcion_reclamacion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_delegacion` int(11) NULL DEFAULT NULL,
  `id_sancion` int(11) NULL DEFAULT NULL,
  `id_estado` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_reclamacion`) USING BTREE,
  INDEX `id_delegacion`(`id_delegacion`) USING BTREE,
  INDEX `id_sancion`(`id_sancion`) USING BTREE,
  INDEX `id_estado`(`id_estado`) USING BTREE,
  CONSTRAINT `reclamacion_ibfk_1` FOREIGN KEY (`id_delegacion`) REFERENCES `delegacion` (`id_delegacion`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `reclamacion_ibfk_2` FOREIGN KEY (`id_sancion`) REFERENCES `sancion` (`id_sancion`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `reclamacion_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `reclamacion_estado` (`id_estado`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of reclamacion
-- ----------------------------

-- ----------------------------
-- Table structure for reclamacion_estado
-- ----------------------------
DROP TABLE IF EXISTS `reclamacion_estado`;
CREATE TABLE `reclamacion_estado`  (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_estado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_estado`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of reclamacion_estado
-- ----------------------------

-- ----------------------------
-- Table structure for rol
-- ----------------------------
DROP TABLE IF EXISTS `rol`;
CREATE TABLE `rol`  (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `activo` tinyint(4) NULL DEFAULT NULL,
  `creado` timestamp NULL DEFAULT NULL,
  `actualizado` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_rol`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of rol
-- ----------------------------
INSERT INTO `rol` VALUES (1, 'Vicedecano', 1, NULL, NULL);

-- ----------------------------
-- Table structure for rol_permiso
-- ----------------------------
DROP TABLE IF EXISTS `rol_permiso`;
CREATE TABLE `rol_permiso`  (
  `id_rol_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `id_rol` int(11) NULL DEFAULT NULL,
  `id_permiso` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_rol_permiso`) USING BTREE,
  INDEX `FK_rol`(`id_rol`) USING BTREE,
  INDEX `FK_permiso`(`id_permiso`) USING BTREE,
  CONSTRAINT `FK_permiso` FOREIGN KEY (`id_permiso`) REFERENCES `permisos` (`id_permiso`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of rol_permiso
-- ----------------------------

-- ----------------------------
-- Table structure for sancion
-- ----------------------------
DROP TABLE IF EXISTS `sancion`;
CREATE TABLE `sancion`  (
  `id_sancion` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_sancion` timestamp NULL DEFAULT NULL,
  `razon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `puntos_sancion` int(11) NULL DEFAULT NULL,
  `suspendido` tinyint(4) NULL DEFAULT NULL,
  `juegos_suspendidos` int(11) NULL DEFAULT NULL,
  `expulsado` tinyint(4) NULL DEFAULT NULL,
  `id_delegacion` int(11) NULL DEFAULT NULL,
  `id_competencia` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_sancion`) USING BTREE,
  INDEX `id_delegacion`(`id_delegacion`) USING BTREE,
  INDEX `id_competencia`(`id_competencia`) USING BTREE,
  CONSTRAINT `sancion_ibfk_1` FOREIGN KEY (`id_delegacion`) REFERENCES `delegacion` (`id_delegacion`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `sancion_ibfk_2` FOREIGN KEY (`id_competencia`) REFERENCES `competencia` (`id_competencia`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of sancion
-- ----------------------------

-- ----------------------------
-- Table structure for usuario_rol
-- ----------------------------
DROP TABLE IF EXISTS `usuario_rol`;
CREATE TABLE `usuario_rol`  (
  `id_user_rol` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NULL DEFAULT NULL,
  `id_rol` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_user_rol`) USING BTREE,
  INDEX `id_usuario`(`id_usuario`) USING BTREE,
  INDEX `id_rol`(`id_rol`) USING BTREE,
  CONSTRAINT `usuario_rol_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `usuario_rol_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of usuario_rol
-- ----------------------------

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `correo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `creado` timestamp NULL DEFAULT NULL,
  `actualizado` timestamp NULL DEFAULT NULL,
  `activo` tinyint(4) NULL DEFAULT NULL,
  `id_persona` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE,
  INDEX `id_persona`(`id_persona`) USING BTREE,
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, 'admin', '$2y$10$qRYHnlNbi77YJyT7z3yjM.tsgeHfyRMjWUL.XS18q0M3gkA76AaSW', 'admin', '2025-05-05 00:00:00', '2025-05-05 00:00:00', NULL, 1);

SET FOREIGN_KEY_CHECKS = 1;
