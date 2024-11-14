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

 Date: 14/11/2024 15:32:48
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
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'admincgl', '255081cb0d710dfc0444827b6f95d8d3');
INSERT INTO `admin` VALUES (2, 'rangga', '81dc9bdb52d04dc20036dbd8313ed055');

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
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of artikel
-- ----------------------------
INSERT INTO `artikel` VALUES (8, 'PLB (Pusat Logistik Berikat)', '<p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nKelebihan\r\nPusat Logistik Berikat <br></p><p>Pusat Logistik Berikat (PLB) merupakan suatu fasilitas yang menawarkan berbagai layanan logistik dan penyimpanan barang dalam keadaan tidak dikenakan pajak. PLB sering digunakan oleh perusahaan untuk mendukung distribusi dan perdagangan internasional. Berikut adalah beberapa kelebihan utama dari Pusat Logistik Berikat secara detail dan rinci:</p><p><b>1. Penghematan Pajak</b></p><p><br>&nbsp;  - *Pajak Impor Ditangguhkan*: Salah satu keuntungan utama dari PLB adalah penangguhan pajak impor. Barang yang disimpan di PLB tidak dikenakan bea masuk dan pajak lainnya hingga barang tersebut keluar dari pusat logistik untuk dijual.<br>&nbsp;  - *Optimalisasi Rantai Pasokan*: Dengan mengurangi beban pajak, perusahaan bisa lebih fleksibel dalam manajemen inventaris dan mengoptimalkan arus kas.<br><br>#### 2. *Fleksibilitas dalam Penyimpanan*<br>&nbsp;  - *Penyimpanan Jangka Pendek dan Panjang*: PLB memungkinkan perusahaan untuk menyimpan barang dalam jangka waktu yang lebih fleksibel, baik untuk jangka pendek maupun panjang, sesuai dengan kebutuhan bisnis.<br>&nbsp;  - *Penyesuaian Inventaris*: Perusahaan dapat dengan mudah menyesuaikan level inventaris dengan permintaan pasar, tanpa harus khawatir tentang biaya pajak.<br><br>#### 3. *Akses ke Pasar Internasional*<br>&nbsp;  - *Kemudahan Akses*: PLB sering kali terletak di lokasi strategis dekat pelabuhan atau bandara, mempermudah akses ke pasar internasional.<br>&nbsp;  - *Peningkatan Daya Saing*: Dengan pengurangan biaya operasional dan pajak, perusahaan dapat menawarkan harga yang lebih kompetitif di pasar global.<br><br>#### 4. *Peningkatan Efisiensi Operasional*<br>&nbsp;  - *Manajemen Rantai Pasokan yang Lebih Baik*: Dengan integrasi sistem logistik canggih, PLB memungkinkan perusahaan mengelola suplai barang secara efisien, meminimalkan waktu yang dibutuhkan untuk memindahkan barang.<br>&nbsp;  - *Teknologi Modern*: PLB sering dilengkapi dengan teknologi untuk pemantauan dan pelacakan barang secara real-time, meningkatkan akurasi dan efisiensi.<br><br>#### 5. *Fasilitas Layanan Terintegrasi*<br>&nbsp;  - *Layanan Kustomisasi*: PLB sering menawarkan layanan tambahan seperti pengemasan, perakitan, dan distribusi yang memungkinkan perusahaan untuk lebih fokus pada inti bisnis mereka.<br>&nbsp;  - *Ruang untuk Logistik Nilai Tambah*: Beberapa pusat juga menyediakan layanan nilai tambah seperti pemilahan, pengepakan ulang, dan pelabelan.<br><br>#### 6. *Kepatuhan dan Keamanan*<br>&nbsp;  - *Kepatuhan Terhadap Regulasi*: PLB dibangun dengan memperhatikan regulasi pajak dan kepabeanan, sehingga perusahaan dapat memastikan kepatuhan dengan hukum yang berlaku.<br>&nbsp;  - *Keamanan Barang*: Pusat logistik berikat umumnya dilengkapi dengan sistem keamanan dan pengawasan yang ketat, menjamin keamanan barang yang disimpan.<br><br>#### 7. Dukungan Pemerintah<br>&nbsp;  - Insentif dari Pemerintah: Di banyak negara, pemerintah memberikan insentif bagi perusahaan yang menggunakan PLB, seperti kemudahan perizinan atau pengurangan biaya operasional.<br>&nbsp;  - Dorongan untuk Investasi: Pembangunan PLB sering didorong untuk menarik investasi asing dan meningkatkan daya saing ekonomi nasional.<br><br>### Kesimpulan<br><br>Pusat Logistik Berikat dapat menjadi solusi yang menarik bagi perusahaan yang ingin memaksimalkan efisiensi logistik dan mengurangi biaya operasional. Dengan berbagai kelebihan yang ditawarkan, seperti penghematan pajak, fleksibilitas penyimpanan, dan peningkatan efisiensi operasional, PLB dapat membantu perusahaan beradaptasi dengan tuntutan pasar yang semakin berubah dan kompetitif. Oleh karena itu, banyak perusahaan, terutama yang beroperasi di bidang ekspor-impor, melihat PLB sebagai bagian penting dari strategi bisnis mereka.<br><b><br></b></p><br><br>', 'artikel-01.jpg', 10, 'Admin', '2024-08-23 09:56:37');

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `namaBanner` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fotoBanner` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES (10, 'Banner-01', 'banner-021.jpg');
INSERT INTO `banner` VALUES (11, 'Banner-02', 'banner-011.jpg');

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
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of gallery_layanan
-- ----------------------------

-- ----------------------------
-- Table structure for history
-- ----------------------------
DROP TABLE IF EXISTS `history`;
CREATE TABLE `history`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `narasi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of history
-- ----------------------------
INSERT INTO `history` VALUES (2, 'PT. Wonokoyo Jaya Corporindo', 'fav-log1.png', 'PT. Wonokoyo Jaya Corporindo merupakan Customer pertama kami yang bergerak dibidang pakan ternak menyediakan pakan ikan untuk lele, nila, ikan mas dan ikan mas');
INSERT INTO `history` VALUES (3, 'PT. Fibart Trans Network', 'fav-log1.png', 'PT. Fibart Trans Network adalah sebuah perusahaan yang mengakomodir dan memenuhi permintaan akan kebutuhan industri telekomunikasi seperti Kabel dan Aksesoris');
INSERT INTO `history` VALUES (4, 'PT. Akasha Wira International', 'fav-log1.png', 'PT. Akasha Wira International adalah air minum kemasan dengan merek Nestle Pure Life dan Vica Royal serta perawatan kecantikan dengan merek Makarizo');
INSERT INTO `history` VALUES (5, 'PT Semesta  Teknik Bersama', 'fav-log1.png', 'PPT. Semesta Teknik Bersama adalah perusahaan industry rekondisi mesin dan beberapa Heavy Equipment untuk support beberapa indusiri di Indonesia');

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
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of layanan_kami
-- ----------------------------
INSERT INTO `layanan_kami` VALUES (1, 'PLB (Pusat Logistik Berikat)', 'plb1.jpg', 'Kami menyediakan fasilitas PLB untuk memudahkan proses ekspor dan impor, mengurangi biaya dan waktu transit dengan layanan penyimpanan dan manajemen inventaris yang terintegrasi.', 'plb', b'0');
INSERT INTO `layanan_kami` VALUES (2, 'Freight Forwarding', 'ffw1.jpg', 'Kami menangani semua aspek pengiriman barang Anda, dari pengumpulan hingga pengantaran, melalui berbagai moda transportasi seperti udara, laut, dan darat.', 'freight_forwarding', b'0');
INSERT INTO `layanan_kami` VALUES (3, 'Custom Handling', 'customehandling3.jpg', 'Kami membantu Anda dengan semua proses bea cukai dan kepatuhan perdagangan, memastikan kelancaran dan kepatuhan pengiriman Anda.', 'custome_handling', b'0');
INSERT INTO `layanan_kami` VALUES (4, 'Project Logistic', 'projectlogistic.jpg', 'Kami memiliki keahlian dalam menangani proyek logistik yang kompleks, mulai dari perencanaan hingga pelaksanaan, memastikan kelancaran dan keberhasilan proyek Anda.', 'project_logistic', b'0');
INSERT INTO `layanan_kami` VALUES (5, 'Trucking', 'trucking2.jpg', 'Layanan trucking kami menawarkan transportasi darat yang handal dan efisien untuk pengiriman jarak pendek maupun jauh, memastikan barang Anda tiba tepat waktu dan dalam kondisi baik.', 'trucking', b'0');
INSERT INTO `layanan_kami` VALUES (6, 'Open Yard Jakarta Umum', 'plb2.jpg', 'Kami menangani semua aspek pengiriman barang Anda, dari pengumpulan hingga pengantaran, melalui berbagai moda transportasi seperti udara, laut, dan darat.', 'open_yard_jakarta_umum', b'1');
INSERT INTO `layanan_kami` VALUES (7, 'Gudang PLB Jakarta', 'customehandling1.jpg', 'Kami menangani semua aspek pengiriman barang Anda, dari pengumpulan hingga pengantaran, melalui berbagai moda transportasi seperti udara, laut, dan darat.', 'gudang_plb_jakarta', b'1');
INSERT INTO `layanan_kami` VALUES (8, 'Gudang PLB Surabaya', 'ffw2.jpg', 'Kami menangani semua aspek pengiriman barang Anda, dari pengumpulan hingga pengantaran, melalui berbagai moda transportasi seperti udara, laut, dan darat.', 'gudang_plb_surabaya', b'1');
INSERT INTO `layanan_kami` VALUES (9, 'Gudang Umum Surabaya', 'perusahaanlogistik.jpg', 'Kami menangani semua aspek pengiriman barang Anda, dari pengumpulan hingga pengantaran, melalui berbagai moda transportasi seperti udara, laut, dan darat.', 'gudang_umum_surabaya', b'1');
INSERT INTO `layanan_kami` VALUES (10, 'Warehousing', 'warehouse.jpg', NULL, 'warehouse', b'0');

-- ----------------------------
-- Table structure for team
-- ----------------------------
DROP TABLE IF EXISTS `team`;
CREATE TABLE `team`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jabatan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `bio` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of team
-- ----------------------------
INSERT INTO `team` VALUES (2, 'team-1.jpg', 'Firman Silalahi SE., AK', 'Direktur Utama', '<p>\r\n\r\n</p><p>Firman memiliki lintasan karir yang luar biasa menunjukkan keterampilan dan keahlian kepemimpinannya yang luar biasa dibidang keuangan dan manajemen. Firman telah berhasil memanfaatkan pengetahuan akademiknya dalam berbagai peran eksekutif.</p><p>Melalui masa kerjanya di PT.Karimun Granites, Sebagai General Manager, <b>Bank Ficorinvest sebagai Sr.VicePresident, PT.HusadaBakti sebagai Direktur Keuangan, PT.Citra Putra Mandiri sebagai Presiden Direktur,dan PT.Citra Putra Realty,Tbk sebagai Presiden Direktur</b>, Pencapaiannya telah meninggalkan dampak baik di berbagai industry membuatnya menjadi pemimpin yang dihormati dikomunitas bisnis.</p>\r\n\r\n<br><p></p>');
INSERT INTO `team` VALUES (3, 'team-2.jpg', 'Anita Andayani', 'Wakil Direktur', '<p>\r\n\r\n</p><p>Firman memiliki lintasan karir yang luar biasa menunjukkan keterampilan dan keahlian kepemimpinannya yang luar biasa dibidang keuangan dan manajemen. Firman telah berhasil memanfaatkan pengetahuan akademiknya dalam berbagai peran eksekutif.</p><p>Melalui masa kerjanya di PT.Karimun Granites, Sebagai General Manager, <b>Bank Ficorinvest sebagai Sr.VicePresident, PT.HusadaBakti sebagai Direktur Keuangan, PT.Citra Putra Mandiri sebagai Presiden Direktur,dan PT.Citra Putra Realty,Tbk sebagai Presiden Direktur</b>, Pencapaiannya telah meninggalkan dampak baik di berbagai industry membuatnya menjadi pemimpin yang dihormati dikomunitas bisnis.</p>\r\n\r\n<br><p></p>');
INSERT INTO `team` VALUES (4, 'team-3.jpg', 'Bambang Soerjanto', 'Direktur Keuangan', '<p>\r\n\r\n</p><p>Firman memiliki lintasan karir yang luar biasa menunjukkan keterampilan dan keahlian kepemimpinannya yang luar biasa dibidang keuangan dan manajemen. Firman telah berhasil memanfaatkan pengetahuan akademiknya dalam berbagai peran eksekutif.</p><p>Melalui masa kerjanya di PT.Karimun Granites, Sebagai General Manager, <b>Bank Ficorinvest sebagai Sr.VicePresident, PT.HusadaBakti sebagai Direktur Keuangan, PT.Citra Putra Mandiri sebagai Presiden Direktur,dan PT.Citra Putra Realty,Tbk sebagai Presiden Direktur</b>, Pencapaiannya telah meninggalkan dampak baik di berbagai industry membuatnya menjadi pemimpin yang dihormati dikomunitas bisnis.</p>\r\n\r\n<br><p></p>');
INSERT INTO `team` VALUES (5, 'team-4.jpg', 'Soenarto Tjiptohardjo', 'Direktur Operasi', '<p>\r\n\r\n</p><p>Firman memiliki lintasan karir yang luar biasa menunjukkan keterampilan dan keahlian kepemimpinannya yang luar biasa dibidang keuangan dan manajemen. Firman telah berhasil memanfaatkan pengetahuan akademiknya dalam berbagai peran eksekutif.</p><p>Melalui masa kerjanya di PT.Karimun Granites, Sebagai General Manager, <b>Bank Ficorinvest sebagai Sr.VicePresident, PT.HusadaBakti sebagai Direktur Keuangan, PT.Citra Putra Mandiri sebagai Presiden Direktur,dan PT.Citra Putra Realty,Tbk sebagai Presiden Direktur</b>, Pencapaiannya telah meninggalkan dampak baik di berbagai industry membuatnya menjadi pemimpin yang dihormati dikomunitas bisnis.</p>\r\n\r\n<br><p></p>');

-- ----------------------------
-- Table structure for tentang_kami
-- ----------------------------
DROP TABLE IF EXISTS `tentang_kami`;
CREATE TABLE `tentang_kami`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tentang_kami
-- ----------------------------
INSERT INTO `tentang_kami` VALUES (7, 'tentangkami-01.jpg', 'tentangkami-01');

-- ----------------------------
-- Table structure for testimoni
-- ----------------------------
DROP TABLE IF EXISTS `testimoni`;
CREATE TABLE `testimoni`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jabatan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `testimoni` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of testimoni
-- ----------------------------
INSERT INTO `testimoni` VALUES (1, 'testimonials-01.jpg', 'David Eigenberg', 'CEO of Mexant', 'Donec et nunc massa. Nullam non felis dignissim, dapibus turpis semper, vulputate lorem. Nam volutpat posuere tellus, in porttitor justo interdum nec. Aenean in dapibus risus, in euismod ligula. Aliquam vel scelerisque elit.');
INSERT INTO `testimoni` VALUES (2, 'testimonials-01.jpg', 'Andrew Garfield', 'CTO of Mexant', 'Etiam id ligula risus. Fusce fringilla nisl nunc, nec rutrum lectus cursus nec. In blandit nibh dolor, at rutrum leo accumsan porta. Nullam pulvinar eros porttitor risus condimentum tempus.');
INSERT INTO `testimoni` VALUES (3, 'testimonials-01.jpg', 'George Lopez2', 'Crypto Manager', 'Ut dictum vehicula massa, ac pharetra leo tincidunt eu. Phasellus in tristique magna, ac gravida leo. Integer sed lorem sapien. Ut viverra mauris sed lobortis commodo.');

-- ----------------------------
-- Function structure for tambah_dua_angka
-- ----------------------------
DROP FUNCTION IF EXISTS `tambah_dua_angka`;
delimiter ;;
CREATE FUNCTION `tambah_dua_angka`(angka1 INT, angka2 INT)
 RETURNS int(11)
  DETERMINISTIC
BEGIN
    DECLARE hasil INT;
    SET hasil = angka1 + angka2;
    RETURN hasil;
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
