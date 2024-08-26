-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2024 at 12:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakra-global`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `username`, `password`) VALUES
(1, 'admincgl', '255081cb0d710dfc0444827b6f95d8d3'),
(2, 'rangga', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `total_akses` int(11) DEFAULT NULL,
  `created_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `foto`, `total_akses`, `created_name`, `created_at`) VALUES
(8, 'PLB (Pusat Logistik Berikat)', '<p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nKelebihan\r\nPusat Logistik Berikat <br></p><p>Pusat Logistik Berikat (PLB) merupakan suatu fasilitas yang menawarkan berbagai layanan logistik dan penyimpanan barang dalam keadaan tidak dikenakan pajak. PLB sering digunakan oleh perusahaan untuk mendukung distribusi dan perdagangan internasional. Berikut adalah beberapa kelebihan utama dari Pusat Logistik Berikat secara detail dan rinci:</p><p><b>1. Penghematan Pajak</b></p><p><br>&nbsp;  - *Pajak Impor Ditangguhkan*: Salah satu keuntungan utama dari PLB adalah penangguhan pajak impor. Barang yang disimpan di PLB tidak dikenakan bea masuk dan pajak lainnya hingga barang tersebut keluar dari pusat logistik untuk dijual.<br>&nbsp;  - *Optimalisasi Rantai Pasokan*: Dengan mengurangi beban pajak, perusahaan bisa lebih fleksibel dalam manajemen inventaris dan mengoptimalkan arus kas.<br><br>#### 2. *Fleksibilitas dalam Penyimpanan*<br>&nbsp;  - *Penyimpanan Jangka Pendek dan Panjang*: PLB memungkinkan perusahaan untuk menyimpan barang dalam jangka waktu yang lebih fleksibel, baik untuk jangka pendek maupun panjang, sesuai dengan kebutuhan bisnis.<br>&nbsp;  - *Penyesuaian Inventaris*: Perusahaan dapat dengan mudah menyesuaikan level inventaris dengan permintaan pasar, tanpa harus khawatir tentang biaya pajak.<br><br>#### 3. *Akses ke Pasar Internasional*<br>&nbsp;  - *Kemudahan Akses*: PLB sering kali terletak di lokasi strategis dekat pelabuhan atau bandara, mempermudah akses ke pasar internasional.<br>&nbsp;  - *Peningkatan Daya Saing*: Dengan pengurangan biaya operasional dan pajak, perusahaan dapat menawarkan harga yang lebih kompetitif di pasar global.<br><br>#### 4. *Peningkatan Efisiensi Operasional*<br>&nbsp;  - *Manajemen Rantai Pasokan yang Lebih Baik*: Dengan integrasi sistem logistik canggih, PLB memungkinkan perusahaan mengelola suplai barang secara efisien, meminimalkan waktu yang dibutuhkan untuk memindahkan barang.<br>&nbsp;  - *Teknologi Modern*: PLB sering dilengkapi dengan teknologi untuk pemantauan dan pelacakan barang secara real-time, meningkatkan akurasi dan efisiensi.<br><br>#### 5. *Fasilitas Layanan Terintegrasi*<br>&nbsp;  - *Layanan Kustomisasi*: PLB sering menawarkan layanan tambahan seperti pengemasan, perakitan, dan distribusi yang memungkinkan perusahaan untuk lebih fokus pada inti bisnis mereka.<br>&nbsp;  - *Ruang untuk Logistik Nilai Tambah*: Beberapa pusat juga menyediakan layanan nilai tambah seperti pemilahan, pengepakan ulang, dan pelabelan.<br><br>#### 6. *Kepatuhan dan Keamanan*<br>&nbsp;  - *Kepatuhan Terhadap Regulasi*: PLB dibangun dengan memperhatikan regulasi pajak dan kepabeanan, sehingga perusahaan dapat memastikan kepatuhan dengan hukum yang berlaku.<br>&nbsp;  - *Keamanan Barang*: Pusat logistik berikat umumnya dilengkapi dengan sistem keamanan dan pengawasan yang ketat, menjamin keamanan barang yang disimpan.<br><br>#### 7. Dukungan Pemerintah<br>&nbsp;  - Insentif dari Pemerintah: Di banyak negara, pemerintah memberikan insentif bagi perusahaan yang menggunakan PLB, seperti kemudahan perizinan atau pengurangan biaya operasional.<br>&nbsp;  - Dorongan untuk Investasi: Pembangunan PLB sering didorong untuk menarik investasi asing dan meningkatkan daya saing ekonomi nasional.<br><br>### Kesimpulan<br><br>Pusat Logistik Berikat dapat menjadi solusi yang menarik bagi perusahaan yang ingin memaksimalkan efisiensi logistik dan mengurangi biaya operasional. Dengan berbagai kelebihan yang ditawarkan, seperti penghematan pajak, fleksibilitas penyimpanan, dan peningkatan efisiensi operasional, PLB dapat membantu perusahaan beradaptasi dengan tuntutan pasar yang semakin berubah dan kompetitif. Oleh karena itu, banyak perusahaan, terutama yang beroperasi di bidang ekspor-impor, melihat PLB sebagai bagian penting dari strategi bisnis mereka.<br><b><br></b></p><br><br>', 'artikel-01.jpg', 5, 'Admin', '2024-08-23 09:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `namaBanner` varchar(50) NOT NULL,
  `fotoBanner` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `namaBanner`, `fotoBanner`) VALUES
(10, 'Banner-01', 'banner-021.jpg'),
(11, 'Banner-02', 'banner-011.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_layanan`
--

CREATE TABLE `gallery_layanan` (
  `id` int(11) NOT NULL,
  `layanan_id` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `tanggal_projek` date DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `layanan_kami`
--

CREATE TABLE `layanan_kami` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `is_warehouse` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `layanan_kami`
--

INSERT INTO `layanan_kami` (`id`, `nama`, `foto`, `deskripsi`, `slug`, `is_warehouse`) VALUES
(1, 'PLB (Pusat Logistik Berikat)', 'plb1.jpg', 'Kami menyediakan fasilitas PLB untuk memudahkan proses ekspor dan impor, mengurangi biaya dan waktu transit dengan layanan penyimpanan dan manajemen inventaris yang terintegrasi.', 'plb', b'0'),
(2, 'Freight Forwarding', 'ffw1.jpg', 'Kami menangani semua aspek pengiriman barang Anda, dari pengumpulan hingga pengantaran, melalui berbagai moda transportasi seperti udara, laut, dan darat.', 'freight_forwarding', b'0'),
(3, 'Custom Handling', 'customehandling3.jpg', 'Kami membantu Anda dengan semua proses bea cukai dan kepatuhan perdagangan, memastikan kelancaran dan kepatuhan pengiriman Anda.', 'custome_handling', b'0'),
(4, 'Project Logistic', 'projectlogistic.jpg', 'Kami memiliki keahlian dalam menangani proyek logistik yang kompleks, mulai dari perencanaan hingga pelaksanaan, memastikan kelancaran dan keberhasilan proyek Anda.', 'project_logistic', b'0'),
(5, 'Trucking', 'trucking2.jpg', 'Layanan trucking kami menawarkan transportasi darat yang handal dan efisien untuk pengiriman jarak pendek maupun jauh, memastikan barang Anda tiba tepat waktu dan dalam kondisi baik.', 'trucking', b'0'),
(6, 'Open Yard Jakarta Umum', 'plb2.jpg', 'Kami menangani semua aspek pengiriman barang Anda, dari pengumpulan hingga pengantaran, melalui berbagai moda transportasi seperti udara, laut, dan darat.', 'open_yard_jakarta_umum', b'1'),
(7, 'Gudang PLB Jakarta', 'customehandling1.jpg', 'Kami menangani semua aspek pengiriman barang Anda, dari pengumpulan hingga pengantaran, melalui berbagai moda transportasi seperti udara, laut, dan darat.', 'gudang_plb_jakarta', b'1'),
(8, 'Gudang PLB Surabaya', 'ffw2.jpg', 'Kami menangani semua aspek pengiriman barang Anda, dari pengumpulan hingga pengantaran, melalui berbagai moda transportasi seperti udara, laut, dan darat.', 'gudang_plb_surabaya', b'1'),
(9, 'Gudang Umum Surabaya', 'warehouse.jpg', 'Kami menangani semua aspek pengiriman barang Anda, dari pengumpulan hingga pengantaran, melalui berbagai moda transportasi seperti udara, laut, dan darat.', 'gudang_umum_surabaya', b'1'),
(10, 'Warehousing', 'warehouse.jpg', NULL, 'warehouse', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_kami`
--

CREATE TABLE `tentang_kami` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama_foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tentang_kami`
--

INSERT INTO `tentang_kami` (`id`, `foto`, `nama_foto`) VALUES
(7, 'tentangkami-01.jpg', 'tentangkami-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`) USING BTREE;

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `gallery_layanan`
--
ALTER TABLE `gallery_layanan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `layanan_kami`
--
ALTER TABLE `layanan_kami`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gallery_layanan`
--
ALTER TABLE `gallery_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `layanan_kami`
--
ALTER TABLE `layanan_kami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
