/*
 Navicat Premium Data Transfer

 Source Server         : cakra-global
 Source Server Type    : MySQL
 Source Server Version : 100904 (10.9.4-MariaDB-1:10.9.4+maria~ubu2204)
 Source Host           : localhost:3306
 Source Schema         : cakra-global

 Target Server Type    : MySQL
 Target Server Version : 100904 (10.9.4-MariaDB-1:10.9.4+maria~ubu2204)
 File Encoding         : 65001

 Date: 26/07/2024 09:34:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `idAdmin` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`idAdmin`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `admin` VALUES (2, 'fadhil', '81dc9bdb52d04dc20036dbd8313ed055');

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `namaBanner` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fotoBanner` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES (2, 'foto2', 'bg-01.jpg');
INSERT INTO `banner` VALUES (7, 'f', 'bg-02.jpg');

-- ----------------------------
-- Table structure for gallery_layanan
-- ----------------------------
DROP TABLE IF EXISTS `gallery_layanan`;
CREATE TABLE `gallery_layanan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `layanan_id` int NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `client` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_projek` date NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gallery_layanan
-- ----------------------------
INSERT INTO `gallery_layanan` VALUES (1, 1, 'portfolio-11.jpg', 'plb', 'monata', '2024-07-24', 'https://www.scribd.com/document/501040988/UKBM-PAI-Perkembangan-Islam-Nusantara', 'Pengembangan Pasukan Elite empire sudna', 'coba');
INSERT INTO `gallery_layanan` VALUES (2, 1, 'portfolio-2.jpg', 'umum', 'monata', '2024-08-01', 'https://www.scribd.com/document/631590907/POS-Penialaian-Akhir-Semester-SMP-NEGERI-27-PEKANBARU-TP-2022-2023', 'Pengembangan Pasukan Elite empire sudna', 'tes');
INSERT INTO `gallery_layanan` VALUES (7, 1, 'portfolio-4.jpg', 'umum', 'monata', '2024-08-01', 'https://www.scribd.com/document/580344804/18-UMPAN-BALIK-GURU-SISWA', 'Pengembangan Pasukan Elite empire sudna', 'tes24');

-- ----------------------------
-- Table structure for layanan_kami
-- ----------------------------
DROP TABLE IF EXISTS `layanan_kami`;
CREATE TABLE `layanan_kami`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `is_warehouse` bit(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of layanan_kami
-- ----------------------------
INSERT INTO `layanan_kami` VALUES (1, 'PLB (Pusat Logistik Berikat)', 'plb1.jpg', 'Kami menangani semua aspek pengiriman barang Anda, dari pengumpulan hingga pengantaran, melalui berbagai moda transportasi seperti udara, laut, dan darat.', 'plb', b'0');
INSERT INTO `layanan_kami` VALUES (2, 'Freight Forwarding', 'ffw1.jpg', 'Kami menangani semua aspek pengiriman barang Anda, dari pengumpulan hingga pengantaran, melalui berbagai moda transportasi seperti udara, laut, dan darat.', 'freight_forwarding', b'0');
INSERT INTO `layanan_kami` VALUES (3, 'Custome Handling', 'customehandling2.jpg', 'Kita menangani semua aspek pengiriman barang Anda, dari pengumpulan hingga pengantaran, melalui berbagai moda transportasi seperti udara, laut, dan darat.', 'custome_handling', b'1');
INSERT INTO `layanan_kami` VALUES (4, 'Project Logistic', 'projectlogistik.jpg', 'Kami menangani semua aspek pengiriman barang Anda, dari pengumpulan hingga pengantaran, melalui berbagai moda transportasi seperti udara, laut, dan darat.', 'project_logistic', b'0');
INSERT INTO `layanan_kami` VALUES (5, 'Trucking', 'trucking.jpg', 'Kami menangani semua aspek pengiriman barang Anda, dari pengumpulan hingga pengantaran, melalui berbagai moda transportasi seperti udara, laut, dan darat.', 'trucking', b'0');
INSERT INTO `layanan_kami` VALUES (6, 'Open Yard Jakarta Umum', 'plb2.jpg', 'Kami menangani semua aspek pengiriman barang Anda, dari pengumpulan hingga pengantaran, melalui berbagai moda transportasi seperti udara, laut, dan darat.', 'open_yard_jakarta_umum', b'1');
INSERT INTO `layanan_kami` VALUES (7, 'Gudang PLB Jakarta', 'customehandling1.jpg', 'Kami menangani semua aspek pengiriman barang Anda, dari pengumpulan hingga pengantaran, melalui berbagai moda transportasi seperti udara, laut, dan darat.', 'gudang_plb_jakarta', b'1');
INSERT INTO `layanan_kami` VALUES (8, 'Gudang PLB Surabaya', 'ffw2.jpg', 'Kami menangani semua aspek pengiriman barang Anda, dari pengumpulan hingga pengantaran, melalui berbagai moda transportasi seperti udara, laut, dan darat.', 'gudang_plb_surabaya', b'1');
INSERT INTO `layanan_kami` VALUES (9, 'Gudang Umum Surabaya', 'warehouse.jpg', 'Kami menangani semua aspek pengiriman barang Anda, dari pengumpulan hingga pengantaran, melalui berbagai moda transportasi seperti udara, laut, dan darat.', 'gudang_umum_surabaya', b'1');
INSERT INTO `layanan_kami` VALUES (10, 'Warehousing', 'warehouse.jpg', NULL, 'warehouse', b'0');

-- ----------------------------
-- Table structure for tentang_kami
-- ----------------------------
DROP TABLE IF EXISTS `tentang_kami`;
CREATE TABLE `tentang_kami`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tentang_kami
-- ----------------------------
INSERT INTO `tentang_kami` VALUES (1, 'freight.jpg', 'tes');
INSERT INTO `tentang_kami` VALUES (2, 'freight.jpg', 'foto2');

SET FOREIGN_KEY_CHECKS = 1;
