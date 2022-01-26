-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 01:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pustaka2`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` varchar(12) NOT NULL,
  `tgl_booking` date NOT NULL,
  `batas_ambil` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking_detail`
--

CREATE TABLE `booking_detail` (
  `id` int(11) NOT NULL,
  `id_booking` varchar(12) NOT NULL,
  `id_tiket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail_pinjam`
--

CREATE TABLE `detail_pinjam` (
  `no_pinjam` varchar(12) NOT NULL,
  `id_tiket` int(11) NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_pinjam`
--

INSERT INTO `detail_pinjam` (`no_pinjam`, `id_tiket`, `denda`) VALUES
('21062021001', 3, 5000),
('21062021001', 2, 5000),
('24062021002', 2, 5000),
('24062021003', 1, 5000),
('24062021004', 4, 5000),
('24062021004', 3, 5000),
('24062021005', 4, 5000),
('24062021006', 3, 5000),
('29062021007', 4, 5000),
('30062021008', 2, 5000),
('30062021009', 7, 5000),
('30062021009', 8, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(10, 'EXSEKUTIF'),
(11, 'EKONOMI'),
(12, 'BISNIS');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Utility'),
(5, 'Buku'),
(6, 'Anggota'),
(7, 'Laporan');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `no_pinjam` varchar(12) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `id_booking` varchar(12) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status` enum('Pinjam','Kembali') NOT NULL,
  `total_denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`no_pinjam`, `tgl_pinjam`, `id_booking`, `id_user`, `tgl_kembali`, `tgl_pengembalian`, `status`, `total_denda`) VALUES
('21062021001', '2021-06-21', '21062021001', 18, '2021-06-24', '2021-06-21', 'Kembali', 0),
('24062021002', '2021-06-24', '24062021001', 20, '2021-06-27', '2021-06-24', 'Kembali', 0),
('24062021003', '2021-06-24', '24062021002', 21, '2021-06-27', '2021-06-24', 'Kembali', 0),
('24062021004', '2021-06-24', '24062021001', 22, '2021-06-27', '2021-06-24', 'Kembali', 0),
('24062021005', '2021-06-24', '24062021001', 23, '2021-06-27', '2021-06-24', 'Kembali', 0),
('24062021006', '2021-06-24', '24062021001', 23, '2021-06-27', '2021-06-24', 'Kembali', 0),
('29062021007', '2021-06-29', '24062021002', 25, '2021-07-02', '2021-06-29', 'Kembali', 0),
('30062021008', '2021-06-30', '28062021003', 26, '2021-07-03', '2021-06-30', 'Kembali', 0),
('30062021009', '2021-06-30', '29062021004', 27, '2021-07-03', '0000-00-00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admministrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `tgl_booking` datetime NOT NULL,
  `id_user` varchar(12) NOT NULL,
  `email_user` varchar(128) NOT NULL,
  `id_tiket` int(11) NOT NULL,
  `armada` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `penulis` varchar(128) NOT NULL,
  `panitia` varchar(128) NOT NULL,
  `jadwal_keberangkatan` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id` int(11) NOT NULL,
  `armada` varchar(128) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tujuan_wisata` varchar(64) NOT NULL,
  `panitia` varchar(64) NOT NULL,
  `jadwal_keberangkatan` year(4) NOT NULL,
  `id_armada` varchar(64) NOT NULL,
  `stok` int(11) NOT NULL,
  `dipesan` int(11) NOT NULL,
  `dibooking` int(11) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id`, `armada`, `id_kategori`, `tujuan_wisata`, `panitia`, `jadwal_keberangkatan`, `id_armada`, `stok`, `dipesan`, `dibooking`, `image`) VALUES
(1, 'EFISIENSI', 10, 'Raja Ampat NTT', 'Pt Patas', 2021, '1234', 68, -2, -6, 'img1624282648.png'),
(2, 'SCANIA', 12, 'Situ Patenggang Bandung', 'Cv Kendedes', 2021, '6000', 73, -2, -6, 'img1624282804.png'),
(3, 'AGRA MAS', 10, 'Badaung Bali', 'Cv Ken Arok', 2021, '1232', 68, -2, -6, 'img1624282934.png'),
(4, 'RUKUN JAYA', 11, 'Danau Toba Medan ', 'Cv Mekar Arum Jaya', 2021, '4322', 65, -2, -3, 'img1624283089.png'),
(5, 'BHINEKA', 10, 'Kraton Jogjakarta', 'Pt Lintas Andalas', 2021, '3321', 59, 0, 1, 'img1624283699.png'),
(6, 'SEMPATI STAR', 12, 'Dieng', 'Cv Mekar Arum Jaya', 2021, '4333', 60, 0, 0, 'img1624283856.png'),
(7, 'DAMRI', 12, 'Baturaden', 'Po Bus Gunung Harta', 2021, '2212', 63, -3, 0, 'img1624283975.png'),
(8, 'SINAR JAYA', 11, 'Situ Patenggang Bandung', 'Cv Abadi', 2021, '5434', 63, -3, 0, 'img1624497898.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tanggal_input` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `tanggal_input`, `alamat`) VALUES
(17, 'partono', 'partono490@gmail.com', 'pro1624284027.png', '$2y$10$t8a9.K2pKyQlsGZnOg37mu6k0sYFDXSCDrrAwfCqzpLkWDe58pE0m', 1, 1, 1624282170, ''),
(18, 'PANJI', 'panji123@gmail.com', 'pro1624284582.png', '$2y$10$RKfVO3bMqmJwZ3DdmTmnaeSdhAfeh1cDL3BerPAGmhrG8CnoMCP8C', 2, 1, 1624284391, 'JAKRTA'),
(19, 'santi novianti', 'santinovianti@gmail.com', 'pro1624497722.png', '$2y$10$2QNJgwqyZrmxYPqEmlY7Ku0lvwhq2xMT6uSfvAb.qR1cF26lhEl.m', 1, 1, 1624497616, ''),
(20, 'kutu loncat', 'kutuloncat@gmail.com', 'default.jpg', '$2y$10$EdUwVvRDqjzCHeJ/Vizh3u4O/aKhIpREPQ6bLrst36qJvMc4B.dxu', 2, 1, 1624502384, 'jakarta'),
(21, 'daniel', 'daniel@gmail.com', 'default.jpg', '$2y$10$oN47shfRI3OVh5zNZTEVpecNeK11UTWzBI/8hGRHzENSr4ouqDPzq', 2, 1, 1624506695, 'jakarta'),
(22, 'obito uciha', 'obitouciha@gmail.com', 'default.jpg', '$2y$10$Hp5joLbpQQE/HLxy.fD1uOY8oFuqBzthgRSXPs/e1jc3J/d1bG0yy', 2, 1, 1624513131, 'jakarta'),
(23, 'madara uciha', 'madaraucigha@gmail.com', 'default.jpg', '$2y$10$Yryf8s2Rp3iESFD7ZAfKc.PTQz1F2Zgf6JHT44XyxnCrZjK9RXw8O', 2, 1, 1624513451, 'jakarta'),
(24, 'orocimaru', 'orocimaru@gmail.com', 'default.jpg', '$2y$10$rdnRvG5pltTXXO25DkzEG.nkC8gU4cBZ4Kgo1oj1UyuFpD5LEmQe2', 2, 1, 1624537637, 'jakarta'),
(25, 'tsunade', 'tsunade@gmail.com', 'pro1624537969.png', '$2y$10$.3k7qe85O7BzF8jexjcVdulLS7/ermcgLgODUwOI2BSxE8vG0snV2', 2, 1, 1624537916, 'jakarta'),
(26, 'ociro oda', 'ocirooda@gmail.com', 'pro1624875375.png', '$2y$10$Pjsbdsw6qEt1lzrrtQUMLenGMapjq9DgHhqeEOFuGev2cL94zfTfq', 2, 1, 1624875279, 'jakarta'),
(27, 'sakaki mikio', 'sakakimakio123@gmail.com', 'pro1624937586.png', '$2y$10$3FxrI7mbJkBq9am5WcHpLOfGcK.zmeakgup6FYHyGwDDlfMoxvAzG', 2, 1, 1624937462, 'jakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`no_pinjam`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_detail`
--
ALTER TABLE `booking_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
