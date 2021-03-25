-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 01:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_hewanpotong`
--

-- --------------------------------------------------------

--
-- Table structure for table `antemortem`
--

CREATE TABLE `antemortem` (
  `id_antemortem` int(35) NOT NULL,
  `no_telinga` int(35) NOT NULL,
  `ras` varchar(35) NOT NULL,
  `berat` int(35) NOT NULL,
  `gender` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `mata` varchar(35) NOT NULL,
  `hidung` varchar(35) NOT NULL,
  `mulut` varchar(35) NOT NULL,
  `selaput_lendir` varchar(35) NOT NULL,
  `kebersihan_sapi` varchar(35) NOT NULL,
  `gizi` varchar(35) NOT NULL,
  `kulit` varchar(35) NOT NULL,
  `bulu` varchar(35) NOT NULL,
  `Anus` varchar(35) NOT NULL,
  `keadaan_sapi` varchar(35) NOT NULL,
  `tanggal_pemeriksaan` date NOT NULL,
  `status` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antemortem`
--

INSERT INTO `antemortem` (`id_antemortem`, `no_telinga`, `ras`, `berat`, `gender`, `username`, `tanggal_masuk`, `mata`, `hidung`, `mulut`, `selaput_lendir`, `kebersihan_sapi`, `gizi`, `kulit`, `bulu`, `Anus`, `keadaan_sapi`, `tanggal_pemeriksaan`, `status`) VALUES
(7, 8808, 'Brahman Cross', 353, 'Jantan', 'halilintar', '2020-04-20', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', '2020-04-27', 'Layak Potong'),
(8, 55555, 'Brahman Cross', 155, 'Jantan', 'pak_son', '2020-09-04', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', '2020-09-04', 'Layak Potong');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `asal_hewan` varchar(35) DEFAULT NULL,
  `kepemilikan_hewan` varchar(35) DEFAULT NULL,
  `ket_keswan` varchar(35) DEFAULT NULL,
  `ket_pengangkutan` varchar(35) DEFAULT NULL,
  `ket_tidakproduktif` varchar(35) DEFAULT NULL,
  `status` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `email`, `username`, `asal_hewan`, `kepemilikan_hewan`, `ket_keswan`, `ket_pengangkutan`, `ket_tidakproduktif`, `status`) VALUES
(12, 'halilintarbasyeban@gmail.com', 'halilintar', 'Class_Diagram08.jpg', 'Class_Diagram09.jpg', 'UseCase_Diagram02.jpg', 'Class_Diagram010.jpg', 'UseCase_Diagram03.jpg', '2'),
(13, 'halilintarbasyeban@gmail.com', 'halilintar', 'Class_Diagram011.jpg', 'Class_Diagram012.jpg', 'UseCase_Diagram04.jpg', 'Class_Diagram013.jpg', 'UseCase_Diagram05.jpg', '2');

-- --------------------------------------------------------

--
-- Table structure for table `postmortem`
--

CREATE TABLE `postmortem` (
  `id_postmortem` int(35) NOT NULL,
  `id_antemortem` int(35) NOT NULL,
  `no_telinga` varchar(35) NOT NULL,
  `ras` varchar(35) NOT NULL,
  `berat` varchar(35) NOT NULL,
  `gender` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_pemeriksaan` date NOT NULL,
  `wajah` varchar(35) NOT NULL,
  `limpoglandula` varchar(35) NOT NULL,
  `jantung` varchar(35) NOT NULL,
  `paru` varchar(35) NOT NULL,
  `hati` varchar(35) NOT NULL,
  `limpa` varchar(35) NOT NULL,
  `usus_lambung` varchar(35) NOT NULL,
  `daging` varchar(35) NOT NULL,
  `tanggal_postmortem` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postmortem`
--

INSERT INTO `postmortem` (`id_postmortem`, `id_antemortem`, `no_telinga`, `ras`, `berat`, `gender`, `username`, `tanggal_masuk`, `tanggal_pemeriksaan`, `wajah`, `limpoglandula`, `jantung`, `paru`, `hati`, `limpa`, `usus_lambung`, `daging`, `tanggal_postmortem`) VALUES
(3, 7, '8808', 'Brahman Cross', '353', 'Jantan', 'halilintar', '2020-04-20', '2020-04-27', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', '2020-05-06'),
(4, 8, '55555', 'Brahman Cross', '155', 'Jantan', 'pak_son', '2020-09-04', '2020-09-04', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', '2020-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `sapi`
--

CREATE TABLE `sapi` (
  `no_telinga` varchar(35) NOT NULL,
  `ras` varchar(35) NOT NULL,
  `berat` varchar(35) NOT NULL,
  `gender` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sapi`
--

INSERT INTO `sapi` (`no_telinga`, `ras`, `berat`, `gender`, `username`, `tanggal_masuk`) VALUES
('55555', 'Brahman Cross', '155', 'Jantan', 'pak_son', '2020-09-04'),
('9128', 'Brahman Cross', '379', 'Jantan', 'halilintar', '2020-04-20'),
('9130', 'Brahman Cross', '466', 'Jantan', 'halilintar', '2020-04-20'),
('9159', 'Brahman Cross', '379', 'Jantan', 'halilintar', '2020-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nip` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `email` varchar(35) DEFAULT NULL,
  `password` varchar(35) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `level` int(1) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `no_hp` varchar(35) NOT NULL,
  `ttl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nip`, `username`, `email`, `password`, `nama`, `level`, `gender`, `no_hp`, `ttl`) VALUES
('123123123123', 'halilintar', 'halilintarbasyeban@gmail.com', '58215f8f0388afc1b2ce7a286943f067', 'halilintar', 4, 'Pria', '082182682313', '1997-11-09'),
('123456', 'pak_son', '', '054116716becfb269c054d063f0c4d13', 'Muhammad son muarie, M.Kom', 4, 'Pria', '088008080808', '1988-11-11'),
('196109081987081003', 'kauptd', '', '9f58d84adc383f2348490b42bcc844d3', 'Suandi Jauhari', 1, 'Pria', '081278700580', '1961-09-08'),
('198304112010011018', 'staff', '', '1253208465b1efa876f982d8a9e73eef', 'Hendra Duwie Putra', 2, 'Pria', '085368723857', '1983-04-11'),
('198412272009031002', 'drhewan', '', 'a41b607b5597c8da1ba1ad0d7e310918', 'Triyano Raharjo', 3, 'Pria', '0895620400342', '1984-12-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antemortem`
--
ALTER TABLE `antemortem`
  ADD PRIMARY KEY (`id_antemortem`),
  ADD UNIQUE KEY `no_telinga` (`no_telinga`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `postmortem`
--
ALTER TABLE `postmortem`
  ADD PRIMARY KEY (`id_postmortem`),
  ADD UNIQUE KEY `id_antemortem` (`id_antemortem`);

--
-- Indexes for table `sapi`
--
ALTER TABLE `sapi`
  ADD PRIMARY KEY (`no_telinga`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antemortem`
--
ALTER TABLE `antemortem`
  MODIFY `id_antemortem` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `postmortem`
--
ALTER TABLE `postmortem`
  MODIFY `id_postmortem` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
