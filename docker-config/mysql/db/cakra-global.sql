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

 Date: 26/07/2024 20:46:23
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
-- Table structure for artikel
-- ----------------------------
DROP TABLE IF EXISTS `artikel`;
CREATE TABLE `artikel`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `isi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `total_akses` int NULL DEFAULT NULL,
  `created_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of artikel
-- ----------------------------
INSERT INTO `artikel` VALUES (2, 'Pengembangan Pasukan Elite empire sudna', '<p>\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium sollicitudin orci, ut pretium lorem euismod eu. Sed at risus vel turpis viverra porttitor a at ipsum. In non mattis mi. Duis purus dui, iaculis sit amet dapibus quis, aliquam eget mauris. Integer ultrices volutpat lacinia. Nam quis orci vitae ex efficitur feugiat eu ut arcu. Aliquam bibendum lobortis ex, vel tempor risus dictum nec. Duis et vulputate nisi. Proin leo augue, mattis in purus quis, fringilla tristique lacus. Vestibulum justo felis, faucibus sit amet efficitur id, cursus ac nisi. Proin condimentum, lacus sed hendrerit cursus, nibh tellus maximus quam, sed ullamcorper lorem erat eu massa.</p><p>Donec dui nulla, laoreet sit amet placerat vitae, tempus pharetra metus. Aliquam sed rutrum dui. Curabitur fringilla nunc massa, et eleifend orci blandit ac. Cras sed malesuada odio. Integer eu erat purus. Duis consectetur sodales ornare. Pellentesque fringilla lacinia neque eleifend rutrum. Ut blandit euismod est, dictum dictum risus scelerisque in. Quisque neque sem, faucibus at dui at, sodales hendrerit dui. Nam at ipsum erat. Ut eros lorem, hendrerit vitae ex hendrerit, cursus lobortis sem. Pellentesque pellentesque ornare purus, non aliquam turpis bibendum id. Aliquam pellentesque aliquam massa, a tristique erat tempor vitae. Donec arcu purus, interdum a tristique vel, euismod vitae lectus.</p><p><img alt=\"\" src=\"https://fastly.picsum.photos/id/1/200/300.jpg?hmac=jH5bDkLr6Tgy3oAg5khKCHeunZMHq0ehBZr6vGifPLY\"><br></p><p><img alt=\"\" src=\"https://fastly.picsum.photos/id/0/5000/3333.jpg?hmac=_j6ghY5fCfSD6tvtcV74zXivkJSPIfR9B8w34XeQmvUhttp://\">Suspendisse et tortor vitae augue pulvinar imperdiet nec ultricies erat. Nulla rhoncus quam diam. Duis vel dui vel ligula lobortis imperdiet vitae a arcu. Etiam sodales, nulla convallis faucibus sagittis, magna arcu feugiat est, ac tincidunt risus nisl nec elit. Vivamus lectus risus, viverra sit amet aliquet id, tempus vel erat. Suspendisse convallis sagittis lectus at viverra. Sed rutrum lorem nibh, quis ultricies purus accumsan at. Sed lorem purus, lobortis vitae pulvinar ut, ultricies vel est.<br></p><p>In molestie ultricies risus, eget dignissim erat imperdiet vel. Ut ac arcu non arcu lobortis ultricies. Nulla commodo in purus eu condimentum. Morbi condimentum, augue sit amet auctor rutrum, elit purus cursus mauris, eget ultricies est metus non dui. Fusce vitae egestas massa. Aliquam dictum tortor id sapien auctor pretium tempus eget massa. Integer vitae lacus ullamcorper, porta nibh eu, commodo nisl. Nullam eros libero, malesuada eu condimentum in, semper non nunc. Sed vel euismod risus. Suspendisse eget ultricies justo.</p><p>Nulla ultricies iaculis justo, at interdum enim aliquam ac. Morbi scelerisque tellus ut magna imperdiet pellentesque. Curabitur pellentesque, erat et blandit facilisis, dolor felis pharetra nibh, sit amet pellentesque dui est euismod mauris. Donec sodales sit amet libero sit amet hendrerit. Suspendisse feugiat dui vel leo sollicitudin sollicitudin. Sed rutrum felis at quam porttitor pretium. Vivamus vel mollis enim. Curabitur nibh massa, tincidunt dapibus lobortis nec, tincidunt at tellus. Ut non aliquet diam.</p>\r\n\r\n<br><p></p>', 'medium-shot-volunteers-with-clothing-donations2.jpg', 3, 'Admin', '2024-07-26 11:41:23');
INSERT INTO `artikel` VALUES (3, 'Food donation area', '<p>\r\n\r\n</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium sollicitudin orci, ut pretium lorem euismod eu. Sed at risus vel turpis viverra porttitor a at ipsum. In non mattis mi. Duis purus dui, iaculis sit amet dapibus quis, aliquam eget mauris. Integer ultrices volutpat lacinia. Nam quis orci vitae ex efficitur feugiat eu ut arcu. Aliquam bibendum lobortis ex, vel tempor risus dictum nec. Duis et vulputate nisi. Proin leo augue, mattis in purus quis, fringilla tristique lacus. Vestibulum justo felis, faucibus sit amet efficitur id, cursus ac nisi. Proin condimentum, lacus sed hendrerit cursus, nibh tellus maximus quam, sed ullamcorper lorem erat eu massa.</p><p>Donec dui nulla, laoreet sit amet placerat vitae, tempus pharetra metus. Aliquam sed rutrum dui. Curabitur fringilla nunc massa, et eleifend orci blandit ac. Cras sed malesuada odio. Integer eu erat purus. Duis consectetur sodales ornare. Pellentesque fringilla lacinia neque eleifend rutrum. Ut blandit euismod est, dictum dictum risus scelerisque in. Quisque neque sem, faucibus at dui at, sodales hendrerit dui. Nam at ipsum erat. Ut eros lorem, hendrerit vitae ex hendrerit, cursus lobortis sem. Pellentesque pellentesque ornare purus, non aliquam turpis bibendum id. Aliquam pellentesque aliquam massa, a tristique erat tempor vitae. Donec arcu purus, interdum a tristique vel, euismod vitae lectus.</p><p>Suspendisse et tortor vitae augue pulvinar imperdiet nec ultricies erat. Nulla rhoncus quam diam. Duis vel dui vel ligula lobortis imperdiet vitae a arcu. Etiam sodales, nulla convallis faucibus sagittis, magna arcu feugiat est, ac tincidunt risus nisl nec elit. Vivamus lectus risus, viverra sit amet aliquet id, tempus vel erat. Suspendisse convallis sagittis lectus at viverra. Sed rutrum lorem nibh, quis ultricies purus accumsan at. Sed lorem purus, lobortis vitae pulvinar ut, ultricies vel est.</p><p>In molestie ultricies risus, eget dignissim erat imperdiet vel. Ut ac arcu non arcu lobortis ultricies. Nulla commodo in purus eu condimentum. Morbi condimentum, augue sit amet auctor rutrum, elit purus cursus mauris, eget ultricies est metus non dui. Fusce vitae egestas massa. Aliquam dictum tortor id sapien auctor pretium tempus eget massa. Integer vitae lacus ullamcorper, porta nibh eu, commodo nisl. Nullam eros libero, malesuada eu condimentum in, semper non nunc. Sed vel euismod risus. Suspendisse eget ultricies justo.</p><p>Nulla ultricies iaculis justo, at interdum enim aliquam ac. Morbi scelerisque tellus ut magna imperdiet pellentesque. Curabitur pellentesque, erat et blandit facilisis, dolor felis pharetra nibh, sit amet pellentesque dui est euismod mauris. Donec sodales sit amet libero sit amet hendrerit. Suspendisse feugiat dui vel leo sollicitudin sollicitudin. Sed rutrum felis at quam porttitor pretium. Vivamus vel mollis enim. Curabitur nibh massa, tincidunt dapibus lobortis nec, tincidunt at tellus. Ut non aliquet diam.</p>\r\n\r\n<br><p></p>', 'medium-shot-people-collecting-foodstuff.jpg', 5, 'Admin', '2024-07-26 11:41:22');
INSERT INTO `artikel` VALUES (4, 'Clothing donation to urban area', '<p>\r\n\r\n</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium sollicitudin orci, ut pretium lorem euismod eu. Sed at risus vel turpis viverra porttitor a at ipsum. In non mattis mi. Duis purus dui, iaculis sit amet dapibus quis, aliquam eget mauris. Integer ultrices volutpat lacinia. Nam quis orci vitae ex efficitur feugiat eu ut arcu. Aliquam bibendum lobortis ex, vel tempor risus dictum nec. Duis et vulputate nisi. Proin leo augue, mattis in purus quis, fringilla tristique lacus. Vestibulum justo felis, faucibus sit amet efficitur id, cursus ac nisi. Proin condimentum, lacus sed hendrerit cursus, nibh tellus maximus quam, sed ullamcorper lorem erat eu massa.</p><p>Donec dui nulla, laoreet sit amet placerat vitae, tempus pharetra metus. Aliquam sed rutrum dui. Curabitur fringilla nunc massa, et eleifend orci blandit ac. Cras sed malesuada odio. Integer eu erat purus. Duis consectetur sodales ornare. Pellentesque fringilla lacinia neque eleifend rutrum. Ut blandit euismod est, dictum dictum risus scelerisque in. Quisque neque sem, faucibus at dui at, sodales hendrerit dui. Nam at ipsum erat. Ut eros lorem, hendrerit vitae ex hendrerit, cursus lobortis sem. Pellentesque pellentesque ornare purus, non aliquam turpis bibendum id. Aliquam pellentesque aliquam massa, a tristique erat tempor vitae. Donec arcu purus, interdum a tristique vel, euismod vitae lectus.</p><p>Suspendisse et tortor vitae augue pulvinar imperdiet nec ultricies erat. Nulla rhoncus quam diam. Duis vel dui vel ligula lobortis imperdiet vitae a arcu. Etiam sodales, nulla convallis faucibus sagittis, magna arcu feugiat est, ac tincidunt risus nisl nec elit. Vivamus lectus risus, viverra sit amet aliquet id, tempus vel erat. Suspendisse convallis sagittis lectus at viverra. Sed rutrum lorem nibh, quis ultricies purus accumsan at. Sed lorem purus, lobortis vitae pulvinar ut, ultricies vel est.</p><p>In molestie ultricies risus, eget dignissim erat imperdiet vel. Ut ac arcu non arcu lobortis ultricies. Nulla commodo in purus eu condimentum. Morbi condimentum, augue sit amet auctor rutrum, elit purus cursus mauris, eget ultricies est metus non dui. Fusce vitae egestas massa. Aliquam dictum tortor id sapien auctor pretium tempus eget massa. Integer vitae lacus ullamcorper, porta nibh eu, commodo nisl. Nullam eros libero, malesuada eu condimentum in, semper non nunc. Sed vel euismod risus. Suspendisse eget ultricies justo.</p><p>Nulla ultricies iaculis justo, at interdum enim aliquam ac. Morbi scelerisque tellus ut magna imperdiet pellentesque. Curabitur pellentesque, erat et blandit facilisis, dolor felis pharetra nibh, sit amet pellentesque dui est euismod mauris. Donec sodales sit amet libero sit amet hendrerit. Suspendisse feugiat dui vel leo sollicitudin sollicitudin. Sed rutrum felis at quam porttitor pretium. Vivamus vel mollis enim. Curabitur nibh massa, tincidunt dapibus lobortis nec, tincidunt at tellus. Ut non aliquet diam.</p>\r\n\r\n<br><p></p>', 'close-up-volunteer-oganizing-stuff-donation.jpg', 10, 'Admin', '2024-07-26 11:41:26');
INSERT INTO `artikel` VALUES (5, 'Tertawa lah', '<p>\r\n\r\n</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium sollicitudin orci, ut pretium lorem euismod eu. Sed at risus vel turpis viverra porttitor a at ipsum. In non mattis mi. Duis purus dui, iaculis sit amet dapibus quis, aliquam eget mauris. Integer ultrices volutpat lacinia. Nam quis orci vitae ex efficitur feugiat eu ut arcu. Aliquam bibendum lobortis ex, vel tempor risus dictum nec. Duis et vulputate nisi. Proin leo augue, mattis in purus quis, fringilla tristique lacus. Vestibulum justo felis, faucibus sit amet efficitur id, cursus ac nisi. Proin condimentum, lacus sed hendrerit cursus, nibh tellus maximus quam, sed ullamcorper lorem erat eu massa.</p><p>Donec dui nulla, laoreet sit amet placerat vitae, tempus pharetra metus. Aliquam sed rutrum dui. Curabitur fringilla nunc massa, et eleifend orci blandit ac. Cras sed malesuada odio. Integer eu erat purus. Duis consectetur sodales ornare. Pellentesque fringilla lacinia neque eleifend rutrum. Ut blandit euismod est, dictum dictum risus scelerisque in. Quisque neque sem, faucibus at dui at, sodales hendrerit dui. Nam at ipsum erat. Ut eros lorem, hendrerit vitae ex hendrerit, cursus lobortis sem. Pellentesque pellentesque ornare purus, non aliquam turpis bibendum id. Aliquam pellentesque aliquam massa, a tristique erat tempor vitae. Donec arcu purus, interdum a tristique vel, euismod vitae lectus.</p><p>Suspendisse et tortor vitae augue pulvinar imperdiet nec ultricies erat. Nulla rhoncus quam diam. Duis vel dui vel ligula lobortis imperdiet vitae a arcu. Etiam sodales, nulla convallis faucibus sagittis, magna arcu feugiat est, ac tincidunt risus nisl nec elit. Vivamus lectus risus, viverra sit amet aliquet id, tempus vel erat. Suspendisse convallis sagittis lectus at viverra. Sed rutrum lorem nibh, quis ultricies purus accumsan at. Sed lorem purus, lobortis vitae pulvinar ut, ultricies vel est.</p><p>In molestie ultricies risus, eget dignissim erat imperdiet vel. Ut ac arcu non arcu lobortis ultricies. Nulla commodo in purus eu condimentum. Morbi condimentum, augue sit amet auctor rutrum, elit purus cursus mauris, eget ultricies est metus non dui. Fusce vitae egestas massa. Aliquam dictum tortor id sapien auctor pretium tempus eget massa. Integer vitae lacus ullamcorper, porta nibh eu, commodo nisl. Nullam eros libero, malesuada eu condimentum in, semper non nunc. Sed vel euismod risus. Suspendisse eget ultricies justo.</p><p>Nulla ultricies iaculis justo, at interdum enim aliquam ac. Morbi scelerisque tellus ut magna imperdiet pellentesque. Curabitur pellentesque, erat et blandit facilisis, dolor felis pharetra nibh, sit amet pellentesque dui est euismod mauris. Donec sodales sit amet libero sit amet hendrerit. Suspendisse feugiat dui vel leo sollicitudin sollicitudin. Sed rutrum felis at quam porttitor pretium. Vivamus vel mollis enim. Curabitur nibh massa, tincidunt dapibus lobortis nec, tincidunt at tellus. Ut non aliquet diam.</p>\r\n\r\n<br><p></p>', 'close-up-happy-people-working-together.jpg', 0, 'Admin', '2024-07-26 11:49:07');
INSERT INTO `artikel` VALUES (6, 'orang berobat', '<p>\r\n\r\n</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium sollicitudin orci, ut pretium lorem euismod eu. Sed at risus vel turpis viverra porttitor a at ipsum. In non mattis mi. Duis purus dui, iaculis sit amet dapibus quis, aliquam eget mauris. Integer ultrices volutpat lacinia. Nam quis orci vitae ex efficitur feugiat eu ut arcu. Aliquam bibendum lobortis ex, vel tempor risus dictum nec. Duis et vulputate nisi. Proin leo augue, mattis in purus quis, fringilla tristique lacus. Vestibulum justo felis, faucibus sit amet efficitur id, cursus ac nisi. Proin condimentum, lacus sed hendrerit cursus, nibh tellus maximus quam, sed ullamcorper lorem erat eu massa.</p><p>Donec dui nulla, laoreet sit amet placerat vitae, tempus pharetra metus. Aliquam sed rutrum dui. Curabitur fringilla nunc massa, et eleifend orci blandit ac. Cras sed malesuada odio. Integer eu erat purus. Duis consectetur sodales ornare. Pellentesque fringilla lacinia neque eleifend rutrum. Ut blandit euismod est, dictum dictum risus scelerisque in. Quisque neque sem, faucibus at dui at, sodales hendrerit dui. Nam at ipsum erat. Ut eros lorem, hendrerit vitae ex hendrerit, cursus lobortis sem. Pellentesque pellentesque ornare purus, non aliquam turpis bibendum id. Aliquam pellentesque aliquam massa, a tristique erat tempor vitae. Donec arcu purus, interdum a tristique vel, euismod vitae lectus.</p><p>Suspendisse et tortor vitae augue pulvinar imperdiet nec ultricies erat. Nulla rhoncus quam diam. Duis vel dui vel ligula lobortis imperdiet vitae a arcu. Etiam sodales, nulla convallis faucibus sagittis, magna arcu feugiat est, ac tincidunt risus nisl nec elit. Vivamus lectus risus, viverra sit amet aliquet id, tempus vel erat. Suspendisse convallis sagittis lectus at viverra. Sed rutrum lorem nibh, quis ultricies purus accumsan at. Sed lorem purus, lobortis vitae pulvinar ut, ultricies vel est.</p><p>In molestie ultricies risus, eget dignissim erat imperdiet vel. Ut ac arcu non arcu lobortis ultricies. Nulla commodo in purus eu condimentum. Morbi condimentum, augue sit amet auctor rutrum, elit purus cursus mauris, eget ultricies est metus non dui. Fusce vitae egestas massa. Aliquam dictum tortor id sapien auctor pretium tempus eget massa. Integer vitae lacus ullamcorper, porta nibh eu, commodo nisl. Nullam eros libero, malesuada eu condimentum in, semper non nunc. Sed vel euismod risus. Suspendisse eget ultricies justo.</p><p>Nulla ultricies iaculis justo, at interdum enim aliquam ac. Morbi scelerisque tellus ut magna imperdiet pellentesque. Curabitur pellentesque, erat et blandit facilisis, dolor felis pharetra nibh, sit amet pellentesque dui est euismod mauris. Donec sodales sit amet libero sit amet hendrerit. Suspendisse feugiat dui vel leo sollicitudin sollicitudin. Sed rutrum felis at quam porttitor pretium. Vivamus vel mollis enim. Curabitur nibh massa, tincidunt dapibus lobortis nec, tincidunt at tellus. Ut non aliquet diam.</p>\r\n\r\n<br><p></p>', 'africa-humanitarian-aid-doctor.jpg', 0, 'Admin', '2024-07-26 11:52:23');
INSERT INTO `artikel` VALUES (7, 'Beres2', '<p>\r\n\r\n</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium sollicitudin orci, ut pretium lorem euismod eu. Sed at risus vel turpis viverra porttitor a at ipsum. In non mattis mi. Duis purus dui, iaculis sit amet dapibus quis, aliquam eget mauris. Integer ultrices volutpat lacinia. Nam quis orci vitae ex efficitur feugiat eu ut arcu. Aliquam bibendum lobortis ex, vel tempor risus dictum nec. Duis et vulputate nisi. Proin leo augue, mattis in purus quis, fringilla tristique lacus. Vestibulum justo felis, faucibus sit amet efficitur id, cursus ac nisi. Proin condimentum, lacus sed hendrerit cursus, nibh tellus maximus quam, sed ullamcorper lorem erat eu massa.</p><p>Donec dui nulla, laoreet sit amet placerat vitae, tempus pharetra metus. Aliquam sed rutrum dui. Curabitur fringilla nunc massa, et eleifend orci blandit ac. Cras sed malesuada odio. Integer eu erat purus. Duis consectetur sodales ornare. Pellentesque fringilla lacinia neque eleifend rutrum. Ut blandit euismod est, dictum dictum risus scelerisque in. Quisque neque sem, faucibus at dui at, sodales hendrerit dui. Nam at ipsum erat. Ut eros lorem, hendrerit vitae ex hendrerit, cursus lobortis sem. Pellentesque pellentesque ornare purus, non aliquam turpis bibendum id. Aliquam pellentesque aliquam massa, a tristique erat tempor vitae. Donec arcu purus, interdum a tristique vel, euismod vitae lectus.</p><p>Suspendisse et tortor vitae augue pulvinar imperdiet nec ultricies erat. Nulla rhoncus quam diam. Duis vel dui vel ligula lobortis imperdiet vitae a arcu. Etiam sodales, nulla convallis faucibus sagittis, magna arcu feugiat est, ac tincidunt risus nisl nec elit. Vivamus lectus risus, viverra sit amet aliquet id, tempus vel erat. Suspendisse convallis sagittis lectus at viverra. Sed rutrum lorem nibh, quis ultricies purus accumsan at. Sed lorem purus, lobortis vitae pulvinar ut, ultricies vel est.</p><p>In molestie ultricies risus, eget dignissim erat imperdiet vel. Ut ac arcu non arcu lobortis ultricies. Nulla commodo in purus eu condimentum. Morbi condimentum, augue sit amet auctor rutrum, elit purus cursus mauris, eget ultricies est metus non dui. Fusce vitae egestas massa. Aliquam dictum tortor id sapien auctor pretium tempus eget massa. Integer vitae lacus ullamcorper, porta nibh eu, commodo nisl. Nullam eros libero, malesuada eu condimentum in, semper non nunc. Sed vel euismod risus. Suspendisse eget ultricies justo.</p><p>Nulla ultricies iaculis justo, at interdum enim aliquam ac. Morbi scelerisque tellus ut magna imperdiet pellentesque. Curabitur pellentesque, erat et blandit facilisis, dolor felis pharetra nibh, sit amet pellentesque dui est euismod mauris. Donec sodales sit amet libero sit amet hendrerit. Suspendisse feugiat dui vel leo sollicitudin sollicitudin. Sed rutrum felis at quam porttitor pretium. Vivamus vel mollis enim. Curabitur nibh massa, tincidunt dapibus lobortis nec, tincidunt at tellus. Ut non aliquet diam.</p>\r\n\r\n<br><p></p>', 'medium-shot-volunteers-with-clothing-donations3.jpg', 3, 'Admin', '2024-07-26 18:53:43');

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
INSERT INTO `gallery_layanan` VALUES (1, 1, 'portfolio-11.jpg', 'plb', 'monata', '2024-07-24', 'https://www.scribd.com/document/501040988/UKBM-PAI-Perkembangan-Islam-Nusantara', 'Pengembangan Pasukan Elite empire sudna', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');
INSERT INTO `gallery_layanan` VALUES (2, 1, 'portfolio-2.jpg', 'umum', 'monata', '2024-08-01', 'https://www.scribd.com/document/631590907/POS-Penialaian-Akhir-Semester-SMP-NEGERI-27-PEKANBARU-TP-2022-2023', 'Pengembangan Pasukan Elite empire sudna', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');
INSERT INTO `gallery_layanan` VALUES (7, 1, 'portfolio-4.jpg', 'umum', 'monata', '2024-08-01', 'https://www.scribd.com/document/580344804/18-UMPAN-BALIK-GURU-SISWA', 'Pengembangan Pasukan Elite empire sudna', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

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
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of layanan_kami
-- ----------------------------
INSERT INTO `layanan_kami` VALUES (1, 'PLB (Pusat Logistik Berikat)', 'plb1.jpg', 'Kami menangani semua aspek pengiriman barang Anda, dari pengumpulan hingga pengantaran, melalui berbagai moda transportasi seperti udara, laut, dan darat.', 'plb', b'0');
INSERT INTO `layanan_kami` VALUES (2, 'Freight Forwarding', 'ffw1.jpg', 'Kami menangani semua aspek pengiriman barang Anda, dari pengumpulan hingga pengantaran, melalui berbagai moda transportasi seperti udara, laut, dan darat.', 'freight_forwarding', b'0');
INSERT INTO `layanan_kami` VALUES (3, 'Custome Handling', 'customehandling2.jpg', 'Kita menangani semua aspek pengiriman barang Anda, dari pengumpulan hingga pengantaran, melalui berbagai moda transportasi seperti udara, laut, dan darat.', 'custome_handling', b'0');
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
