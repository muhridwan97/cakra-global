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

 Date: 20/07/2024 08:00:52
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
-- Table structure for galeri
-- ----------------------------
DROP TABLE IF EXISTS `galeri`;
CREATE TABLE `galeri`  (
  `idGaleri` int NOT NULL AUTO_INCREMENT,
  `foto1` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto2` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto3` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto4` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `idWisata` int NOT NULL,
  PRIMARY KEY (`idGaleri`) USING BTREE,
  INDEX `idWisata`(`idWisata` ASC) USING BTREE,
  CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`idWisata`) REFERENCES `paketwisata` (`idWisata`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of galeri
-- ----------------------------
INSERT INTO `galeri` VALUES (7, '20180705_091414-min.jpg', '20180705_094216-min.jpg', '20180705_094230-min.jpg', '20180705_094412-min.jpg', 17);

-- ----------------------------
-- Table structure for guide
-- ----------------------------
DROP TABLE IF EXISTS `guide`;
CREATE TABLE `guide`  (
  `idGuide` int NOT NULL AUTO_INCREMENT,
  `fotoGuide` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `namaGuide` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `emailGuide` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `notelpGuide` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `umurGuide` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamatGuide` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `idWisata` int NOT NULL,
  PRIMARY KEY (`idGuide`) USING BTREE,
  INDEX `idRelasi`(`idWisata` ASC) USING BTREE,
  CONSTRAINT `guide_ibfk_1` FOREIGN KEY (`idWisata`) REFERENCES `paketwisata` (`idWisata`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of guide
-- ----------------------------
INSERT INTO `guide` VALUES (1, '62914.jpg', 'Amir Budi Sahroni ', 'amirpsikologi7@gmail.com', '+6282139143825', '22', 'dusun bajul mati, desa gajahrejo kec gedangan', 17);
INSERT INTO `guide` VALUES (3, '21.jpg', 'Siswanto', 'siswantodedi@gmail.com', '082332863442', '35', 'Dusun Bajulmati RT 40', 20);

-- ----------------------------
-- Table structure for instagram
-- ----------------------------
DROP TABLE IF EXISTS `instagram`;
CREATE TABLE `instagram`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `namaIg` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `linkIg` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fotoIg` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of instagram
-- ----------------------------
INSERT INTO `instagram` VALUES (1, 'admin', '121121', 'afraide2.JPG');
INSERT INTO `instagram` VALUES (2, 'mejas', '231211', '14230204890811.png');
INSERT INTO `instagram` VALUES (4, 'andi iman', '231211', '75220.jpg');

-- ----------------------------
-- Table structure for paketwisata
-- ----------------------------
DROP TABLE IF EXISTS `paketwisata`;
CREATE TABLE `paketwisata`  (
  `idWisata` int NOT NULL AUTO_INCREMENT,
  `foto` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `namaWisata` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `preview` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `latitude` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `longitude` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`idWisata`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of paketwisata
-- ----------------------------
INSERT INTO `paketwisata` VALUES (15, '20180709_155253.jpg', 'Pantai Joilangkung', ' wowowow', '09/16/2018', '-8.428082', '112.628543');
INSERT INTO `paketwisata` VALUES (16, '20180702_111451-min.jpg', 'Pantai Bajulmati', ' wowowowwe', '09/16/2018', '-8.430820', '112.635452');
INSERT INTO `paketwisata` VALUES (17, '20180705_094027-min.jpg', 'Susur Sungai', ' wewew', '09/16/2018', '-8.426384', '112.642522');
INSERT INTO `paketwisata` VALUES (20, '20180707_1700194.jpg', 'Pantai Ungapan', ' Pantai ungapan adalah salah satu pantai yang terletak di daerah pantai selatan. Tepatnya terletak di sebelah jembatan bajulmati yang menjadi ikon wisata daerah malang selatan.\r\nUntuk masuk ke dalam pantai ini, pengunjung hanya membayar biaya sebesar 10000 rupiah dan sudah bisa menikmati indahnya pantai ungapan. \r\nPantai ungapan sendiri memiliki beragam fasilitas di dalamnya. Untuk fasilitas umum sendiri seperti warung makanan, homestay, tempat parkir, dan yang utama adalah pantai ungapan adalah spesialis bumi perkemahan. Jadi di tiap Sabtu dan Minggu pantai ini akan dipenuhi oleh tenda tenda dari orang yang melakukan camp disini. Bisa dari komunitas pecinta alam, pramuka, dan lain sebagainya. \r\nKemudian ada wisata tambahan seperti penyewaan sepeda listrik, ATV, dan juga jet ski. Bagi yang ingin menggunakan fasillitas tersebut harus membayar dengan biaya yang lumayan yaitu 25000 rupiah.\r\n   ', '11/27/2018', '-7.937739', '112.635406');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fotoProduk` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (6, 'ini produk', '02.jpg');
INSERT INTO `product` VALUES (7, 'produk 2', '021.jpg');
INSERT INTO `product` VALUES (8, 'produk 3', '022.jpg');

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
INSERT INTO `tentang_kami` VALUES (1, 'ffw.jpg', 'tes');
INSERT INTO `tentang_kami` VALUES (2, 'freight.jpg', 'foto2');

SET FOREIGN_KEY_CHECKS = 1;
