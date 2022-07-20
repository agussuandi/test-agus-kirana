/*
 Navicat Premium Data Transfer

 Source Server         : localhostMYSQL
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : agus_kirana

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 20/07/2022 15:57:17
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for log_api
-- ----------------------------
DROP TABLE IF EXISTS `log_api`;
CREATE TABLE `log_api`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_user` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 76 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of log_api
-- ----------------------------
INSERT INTO `log_api` VALUES (1, '::1', '2022-07-20 14:34:04');
INSERT INTO `log_api` VALUES (2, '::1', '2022-07-20 14:38:44');
INSERT INTO `log_api` VALUES (3, '::1', '2022-07-20 14:38:49');
INSERT INTO `log_api` VALUES (4, '::1', '2022-07-20 14:41:27');
INSERT INTO `log_api` VALUES (5, '::1', '2022-07-20 14:41:29');
INSERT INTO `log_api` VALUES (6, '::1', '2022-07-20 14:42:08');
INSERT INTO `log_api` VALUES (7, '::1', '2022-07-20 14:42:09');
INSERT INTO `log_api` VALUES (8, '::1', '2022-07-20 14:42:10');
INSERT INTO `log_api` VALUES (9, '::1', '2022-07-20 14:42:11');
INSERT INTO `log_api` VALUES (10, '::1', '2022-07-20 14:42:12');
INSERT INTO `log_api` VALUES (11, '::1', '2022-07-20 14:42:13');
INSERT INTO `log_api` VALUES (12, '::1', '2022-07-20 14:42:13');
INSERT INTO `log_api` VALUES (13, '::1', '2022-07-20 14:42:14');
INSERT INTO `log_api` VALUES (14, '::1', '2022-07-20 14:45:01');
INSERT INTO `log_api` VALUES (15, '::1', '2022-07-20 14:46:03');
INSERT INTO `log_api` VALUES (16, '::1', '2022-07-20 14:46:04');
INSERT INTO `log_api` VALUES (17, '::1', '2022-07-20 14:46:05');
INSERT INTO `log_api` VALUES (18, '::1', '2022-07-20 14:46:56');
INSERT INTO `log_api` VALUES (19, '::1', '2022-07-20 14:48:09');
INSERT INTO `log_api` VALUES (20, '::1', '2022-07-20 14:48:32');
INSERT INTO `log_api` VALUES (21, '::1', '2022-07-20 14:48:40');
INSERT INTO `log_api` VALUES (22, '::1', '2022-07-20 14:48:42');
INSERT INTO `log_api` VALUES (23, '::1', '2022-07-20 14:48:43');
INSERT INTO `log_api` VALUES (24, '::1', '2022-07-20 14:48:44');
INSERT INTO `log_api` VALUES (25, '::1', '2022-07-20 14:48:45');
INSERT INTO `log_api` VALUES (26, '::1', '2022-07-20 14:48:46');
INSERT INTO `log_api` VALUES (27, '::1', '2022-07-20 14:48:47');
INSERT INTO `log_api` VALUES (28, '::1', '2022-07-20 14:49:11');
INSERT INTO `log_api` VALUES (29, '::1', '2022-07-20 14:49:13');
INSERT INTO `log_api` VALUES (30, '::1', '2022-07-20 14:49:14');
INSERT INTO `log_api` VALUES (31, '::1', '2022-07-20 14:49:15');
INSERT INTO `log_api` VALUES (32, '::1', '2022-07-20 14:49:17');
INSERT INTO `log_api` VALUES (33, '::1', '2022-07-20 14:54:13');
INSERT INTO `log_api` VALUES (34, '::1', '2022-07-20 14:55:19');
INSERT INTO `log_api` VALUES (35, '::1', '2022-07-20 15:00:25');
INSERT INTO `log_api` VALUES (36, '::1', '2022-07-20 15:00:26');
INSERT INTO `log_api` VALUES (37, '::1', '2022-07-20 15:01:15');
INSERT INTO `log_api` VALUES (38, '::1', '2022-07-20 15:35:31');
INSERT INTO `log_api` VALUES (39, '::1', '2022-07-20 15:35:39');
INSERT INTO `log_api` VALUES (40, '::1', '2022-07-20 15:35:45');
INSERT INTO `log_api` VALUES (41, '::1', '2022-07-20 15:36:03');
INSERT INTO `log_api` VALUES (42, '::1', '2022-07-20 15:37:29');
INSERT INTO `log_api` VALUES (43, '::1', '2022-07-20 15:37:32');
INSERT INTO `log_api` VALUES (44, '::1', '2022-07-20 15:37:36');
INSERT INTO `log_api` VALUES (45, '::1', '2022-07-20 15:37:39');
INSERT INTO `log_api` VALUES (46, '::1', '2022-07-20 15:37:48');
INSERT INTO `log_api` VALUES (47, '::1', '2022-07-20 15:42:24');
INSERT INTO `log_api` VALUES (48, '::1', '2022-07-20 15:42:27');
INSERT INTO `log_api` VALUES (49, '::1', '2022-07-20 15:42:28');
INSERT INTO `log_api` VALUES (50, '::1', '2022-07-20 15:42:30');
INSERT INTO `log_api` VALUES (51, '::1', '2022-07-20 15:42:49');
INSERT INTO `log_api` VALUES (52, '::1', '2022-07-20 15:42:57');
INSERT INTO `log_api` VALUES (53, '::1', '2022-07-20 15:43:18');
INSERT INTO `log_api` VALUES (54, '::1', '2022-07-20 15:44:05');
INSERT INTO `log_api` VALUES (55, '::1', '2022-07-20 15:44:07');
INSERT INTO `log_api` VALUES (56, '::1', '2022-07-20 15:44:14');
INSERT INTO `log_api` VALUES (57, '::1', '2022-07-20 15:44:16');
INSERT INTO `log_api` VALUES (58, '::1', '2022-07-20 15:44:17');
INSERT INTO `log_api` VALUES (59, '::1', '2022-07-20 15:44:18');
INSERT INTO `log_api` VALUES (60, '::1', '2022-07-20 15:44:19');
INSERT INTO `log_api` VALUES (61, '::1', '2022-07-20 15:44:20');
INSERT INTO `log_api` VALUES (62, '::1', '2022-07-20 15:44:21');
INSERT INTO `log_api` VALUES (63, '::1', '2022-07-20 15:44:24');
INSERT INTO `log_api` VALUES (64, '::1', '2022-07-20 15:44:49');
INSERT INTO `log_api` VALUES (65, '::1', '2022-07-20 15:44:52');
INSERT INTO `log_api` VALUES (66, '::1', '2022-07-20 15:45:10');
INSERT INTO `log_api` VALUES (67, '::1', '2022-07-20 15:49:26');
INSERT INTO `log_api` VALUES (68, '::1', '2022-07-20 15:50:12');
INSERT INTO `log_api` VALUES (69, '::1', '2022-07-20 15:50:26');
INSERT INTO `log_api` VALUES (70, '::1', '2022-07-20 15:50:28');
INSERT INTO `log_api` VALUES (71, '::1', '2022-07-20 15:50:31');
INSERT INTO `log_api` VALUES (72, '::1', '2022-07-20 15:50:33');
INSERT INTO `log_api` VALUES (73, '::1', '2022-07-20 15:50:39');
INSERT INTO `log_api` VALUES (74, '::1', '2022-07-20 15:51:20');
INSERT INTO `log_api` VALUES (75, '::1', '2022-07-20 15:54:39');

-- ----------------------------
-- Table structure for m_jabatan
-- ----------------------------
DROP TABLE IF EXISTS `m_jabatan`;
CREATE TABLE `m_jabatan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_jabatan` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_jabatan
-- ----------------------------
INSERT INTO `m_jabatan` VALUES (1, '001', 'CEO', '2022-07-18 14:34:42');
INSERT INTO `m_jabatan` VALUES (2, '002', 'Division Head', NULL);
INSERT INTO `m_jabatan` VALUES (3, '003', 'Department Head', NULL);
INSERT INTO `m_jabatan` VALUES (4, '004', 'Staff', NULL);
INSERT INTO `m_jabatan` VALUES (5, '005', 'Officer', NULL);

-- ----------------------------
-- Table structure for m_karyawan
-- ----------------------------
DROP TABLE IF EXISTS `m_karyawan`;
CREATE TABLE `m_karyawan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `gender` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `created_at` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_karyawan_jabatan`(`jabatan_id`) USING BTREE,
  INDEX `fk_karyawan_users`(`user_id`) USING BTREE,
  CONSTRAINT `fk_karyawan_jabatan` FOREIGN KEY (`jabatan_id`) REFERENCES `m_jabatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_karyawan_users` FOREIGN KEY (`user_id`) REFERENCES `m_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_karyawan
-- ----------------------------
INSERT INTO `m_karyawan` VALUES (1, 1, 'L', 1, '0000-00-00 00:00:00');
INSERT INTO `m_karyawan` VALUES (2, 2, 'P', 2, '0000-00-00 00:00:00');
INSERT INTO `m_karyawan` VALUES (3, 3, 'L', 3, '0000-00-00 00:00:00');
INSERT INTO `m_karyawan` VALUES (4, 4, 'L', 4, '0000-00-00 00:00:00');
INSERT INTO `m_karyawan` VALUES (5, 6, 'L', 5, '0000-00-00 00:00:00');
INSERT INTO `m_karyawan` VALUES (6, 7, 'P', 5, '0000-00-00 00:00:00');
INSERT INTO `m_karyawan` VALUES (8, 8, 'L', 5, '2022-07-20 14:21:02');

-- ----------------------------
-- Table structure for m_server
-- ----------------------------
DROP TABLE IF EXISTS `m_server`;
CREATE TABLE `m_server`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `server_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `server_ip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_server
-- ----------------------------
INSERT INTO `m_server` VALUES (1, 'Service Payment Gateway', '192.168.100.1');
INSERT INTO `m_server` VALUES (2, 'Service Auth', '192.168.100.2');
INSERT INTO `m_server` VALUES (3, 'Service CRM', '192.168.100.3');
INSERT INTO `m_server` VALUES (4, 'Service Finance', '192.168.100.4');
INSERT INTO `m_server` VALUES (5, 'Service OSS', '192.168.100.5');
INSERT INTO `m_server` VALUES (6, 'Service HRIS', '192.168.100.6');

-- ----------------------------
-- Table structure for m_users
-- ----------------------------
DROP TABLE IF EXISTS `m_users`;
CREATE TABLE `m_users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_user` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nik` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_users
-- ----------------------------
INSERT INTO `m_users` VALUES (1, '00001', '2371029381938', 'Agus Suandi', 'CEO', '2022-07-18 13:32:41');
INSERT INTO `m_users` VALUES (2, '00002', '1234567890', 'Ika Noviyanti', 'DIV', '2022-07-18 22:31:34');
INSERT INTO `m_users` VALUES (3, '00003', '1234567', 'Arthur', 'DEPT', '0000-00-00 00:00:00');
INSERT INTO `m_users` VALUES (4, '00004', '7654321', 'Xavier', 'OFFICER', '0000-00-00 00:00:00');
INSERT INTO `m_users` VALUES (6, '00005', '72913891823', 'Alghifari', 'OFFICER ACC', '0000-00-00 00:00:00');
INSERT INTO `m_users` VALUES (7, '00006', '1234582918', 'Aisyah', NULL, '0000-00-00 00:00:00');
INSERT INTO `m_users` VALUES (8, '00007', '2567134353', 'Rubick', NULL, '0000-00-00 00:00:00');
INSERT INTO `m_users` VALUES (9, '00008', '2567134351', 'Rubick1', NULL, '0000-00-00 00:00:00');

SET FOREIGN_KEY_CHECKS = 1;
