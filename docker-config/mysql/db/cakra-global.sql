-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2019 at 10:55 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `idAdmin` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'fadhil', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(50) NOT NULL,
  `namaBanner` varchar(50) NOT NULL,
  `fotoBanner` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `namaBanner`, `fotoBanner`) VALUES
(2, 'andi iman', 'Capture.PNG'),
(3, 'aiaa', '12.JPG'),
(4, 'bababa', '01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `idGaleri` int(20) NOT NULL,
  `foto1` varchar(50) NOT NULL,
  `foto2` varchar(50) NOT NULL,
  `foto3` varchar(50) NOT NULL,
  `foto4` varchar(50) NOT NULL,
  `idWisata` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`idGaleri`, `foto1`, `foto2`, `foto3`, `foto4`, `idWisata`) VALUES
(7, '20180705_091414-min.jpg', '20180705_094216-min.jpg', '20180705_094230-min.jpg', '20180705_094412-min.jpg', 17);

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `idGuide` int(20) NOT NULL,
  `fotoGuide` varchar(50) NOT NULL,
  `namaGuide` varchar(50) NOT NULL,
  `emailGuide` varchar(50) NOT NULL,
  `notelpGuide` varchar(50) NOT NULL,
  `umurGuide` varchar(50) NOT NULL,
  `alamatGuide` varchar(50) NOT NULL,
  `idWisata` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`idGuide`, `fotoGuide`, `namaGuide`, `emailGuide`, `notelpGuide`, `umurGuide`, `alamatGuide`, `idWisata`) VALUES
(1, '62914.jpg', 'Amir Budi Sahroni ', 'amirpsikologi7@gmail.com', '+6282139143825', '22', 'dusun bajul mati, desa gajahrejo kec gedangan', 17),
(3, '21.jpg', 'Siswanto', 'siswantodedi@gmail.com', '082332863442', '35', 'Dusun Bajulmati RT 40', 20);

-- --------------------------------------------------------

--
-- Table structure for table `instagram`
--

CREATE TABLE `instagram` (
  `id` int(50) NOT NULL,
  `namaIg` varchar(50) NOT NULL,
  `linkIg` varchar(50) NOT NULL,
  `fotoIg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instagram`
--

INSERT INTO `instagram` (`id`, `namaIg`, `linkIg`, `fotoIg`) VALUES
(1, 'admin', '121121', 'afraide2.JPG'),
(2, 'mejas', '231211', '14230204890811.png'),
(4, 'andi iman', '231211', '75220.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `paketwisata`
--

CREATE TABLE `paketwisata` (
  `idWisata` int(20) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `namaWisata` varchar(50) NOT NULL,
  `preview` text NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paketwisata`
--

INSERT INTO `paketwisata` (`idWisata`, `foto`, `namaWisata`, `preview`, `tanggal`, `latitude`, `longitude`) VALUES
(15, '20180709_155253.jpg', 'Pantai Joilangkung', ' wowowow', '09/16/2018', '-8.428082', '112.628543'),
(16, '20180702_111451-min.jpg', 'Pantai Bajulmati', ' wowowowwe', '09/16/2018', '-8.430820', '112.635452'),
(17, '20180705_094027-min.jpg', 'Susur Sungai', ' wewew', '09/16/2018', '-8.426384', '112.642522'),
(20, '20180707_1700194.jpg', 'Pantai Ungapan', ' Pantai ungapan adalah salah satu pantai yang terletak di daerah pantai selatan. Tepatnya terletak di sebelah jembatan bajulmati yang menjadi ikon wisata daerah malang selatan.\r\nUntuk masuk ke dalam pantai ini, pengunjung hanya membayar biaya sebesar 10000 rupiah dan sudah bisa menikmati indahnya pantai ungapan. \r\nPantai ungapan sendiri memiliki beragam fasilitas di dalamnya. Untuk fasilitas umum sendiri seperti warung makanan, homestay, tempat parkir, dan yang utama adalah pantai ungapan adalah spesialis bumi perkemahan. Jadi di tiap Sabtu dan Minggu pantai ini akan dipenuhi oleh tenda tenda dari orang yang melakukan camp disini. Bisa dari komunitas pecinta alam, pramuka, dan lain sebagainya. \r\nKemudian ada wisata tambahan seperti penyewaan sepeda listrik, ATV, dan juga jet ski. Bagi yang ingin menggunakan fasillitas tersebut harus membayar dengan biaya yang lumayan yaitu 25000 rupiah.\r\n   ', '11/27/2018', '-7.937739', '112.635406');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `fotoProduk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `keterangan`, `fotoProduk`) VALUES
(6, 'ini produk', '02.jpg'),
(7, 'produk 2', '021.jpg'),
(8, 'produk 3', '022.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `test1`
--

CREATE TABLE `test1` (
  `idTest` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`idGaleri`),
  ADD KEY `idWisata` (`idWisata`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`idGuide`),
  ADD KEY `idRelasi` (`idWisata`);

--
-- Indexes for table `instagram`
--
ALTER TABLE `instagram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paketwisata`
--
ALTER TABLE `paketwisata`
  ADD PRIMARY KEY (`idWisata`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test1`
--
ALTER TABLE `test1`
  ADD PRIMARY KEY (`idTest`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `idGaleri` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `idGuide` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `instagram`
--
ALTER TABLE `instagram`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `paketwisata`
--
ALTER TABLE `paketwisata`
  MODIFY `idWisata` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `test1`
--
ALTER TABLE `test1`
  MODIFY `idTest` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`idWisata`) REFERENCES `paketwisata` (`idWisata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guide`
--
ALTER TABLE `guide`
  ADD CONSTRAINT `guide_ibfk_1` FOREIGN KEY (`idWisata`) REFERENCES `paketwisata` (`idWisata`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
