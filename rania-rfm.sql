-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2026 at 04:18 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rania-rfm`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisis`
--

CREATE TABLE `analisis` (
  `id_analisis` int(11) NOT NULL,
  `id_pelanggan` varchar(11) NOT NULL,
  `periode` varchar(125) NOT NULL,
  `recency` int(11) NOT NULL,
  `frequency` int(11) NOT NULL,
  `monetary` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analisis`
--

INSERT INTO `analisis` (`id_analisis`, `id_pelanggan`, `periode`, `recency`, `frequency`, `monetary`, `level`) VALUES
(1, 'PLNGGN1', '2026-03', 17, 1, 260000, 2),
(2, 'PLNGGN11', '2026-03', 1, 3, 2629000, 4),
(3, 'PLNGGN12', '2026-03', 18, 2, 1613000, 3),
(4, 'PLNGGN15', '2026-03', 23, 2, 3932000, 4),
(5, 'PLNGGN17', '2026-03', 11, 2, 1477000, 3),
(6, 'PLNGGN18', '2026-03', 26, 2, 765000, 3),
(7, 'PLNGGN21', '2026-03', 1, 3, 2999000, 4),
(8, 'PLNGGN22', '2026-03', 17, 1, 2247000, 3),
(9, 'PLNGGN23', '2026-03', 22, 2, 1415000, 3),
(10, 'PLNGGN24', '2026-03', 7, 1, 900000, 3),
(11, 'PLNGGN3', '2026-03', 28, 1, 572000, 2),
(12, 'PLNGGN6', '2026-03', 24, 2, 2185000, 4),
(13, 'PLNGGN7', '2026-03', 27, 1, 795000, 2),
(14, 'PLNGGN8', '2026-03', 8, 2, 1928000, 4),
(15, 'PLNGGN9', '2026-03', 3, 2, 1790000, 4),
(16, 'PLNGGNA', '2026-03', 24, 2, 2223000, 4),
(17, 'PLNGGNB', '2026-03', 18, 2, 3088000, 4),
(18, 'PLNGGNC', '2026-03', 13, 1, 647000, 3),
(19, 'PLNGGND', '2026-03', 2, 1, 354000, 3),
(20, 'PLNGGNE', '2026-03', 16, 1, 1347000, 3),
(21, 'PLNGGNF', '2026-03', 24, 2, 1507000, 3),
(22, 'PLNGGNG', '2026-03', 23, 1, 854000, 2),
(23, 'PLNGGNI', '2026-03', 3, 1, 134000, 3),
(24, 'PLNGGNJ', '2026-03', 17, 2, 2009000, 4),
(25, 'PLNGGNK', '2026-03', 15, 1, 1052000, 3),
(26, 'PLNGGNL', '2026-03', 17, 1, 841000, 2),
(27, 'PLNGGNS', '2026-03', 13, 1, 2075000, 4),
(28, 'PLNGGNT', '2026-03', 0, 5, 4006000, 5),
(29, 'PLNGGNU', '2026-03', 3, 2, 2222000, 4),
(30, 'PLNGGNW', '2026-03', 10, 1, 674000, 3),
(31, 'PLNGGNX', '2026-03', 0, 4, 4219000, 5),
(32, 'PLNGGNY', '2026-03', 7, 2, 3020000, 4),
(33, 'PLNGGN10', '2026-04', 19, 1, 2041000, 3),
(34, 'PLNGGN13', '2026-04', 25, 1, 567000, 2),
(35, 'PLNGGN14', '2026-04', 20, 1, 710000, 2),
(36, 'PLNGGN16', '2026-04', 28, 1, 1076000, 3),
(37, 'PLNGGN19', '2026-04', 29, 1, 108000, 2),
(38, 'PLNGGN20', '2026-04', 29, 1, 1386000, 3),
(39, 'PLNGGN21', '2026-04', 18, 1, 956000, 2),
(40, 'PLNGGN22', '2026-04', 24, 3, 2565000, 4),
(41, 'PLNGGN23', '2026-04', 21, 2, 944000, 3),
(42, 'PLNGGN24', '2026-04', 22, 1, 769000, 2),
(43, 'PLNGGN4', '2026-04', 27, 2, 1125000, 3),
(44, 'PLNGGN6', '2026-04', 28, 1, 2006000, 3),
(45, 'PLNGGN8', '2026-04', 20, 1, 216000, 2),
(46, 'PLNGGN9', '2026-04', 24, 1, 2355000, 3),
(47, 'PLNGGNA', '2026-04', 6, 2, 780730, 3),
(48, 'PLNGGNE', '2026-04', 18, 1, 116000, 2),
(49, 'PLNGGNF', '2026-04', 19, 1, 1556000, 3),
(50, 'PLNGGNG', '2026-04', 29, 1, 1098000, 3),
(51, 'PLNGGNI', '2026-04', 26, 1, 553000, 2),
(52, 'PLNGGNL', '2026-04', 22, 1, 2017000, 3),
(53, 'PLNGGNM', '2026-04', 22, 3, 2264000, 4),
(54, 'PLNGGNN', '2026-04', 23, 1, 463000, 2),
(55, 'PLNGGNO', '2026-04', 23, 1, 1176000, 3),
(56, 'PLNGGNP', '2026-04', 27, 1, 798000, 2),
(57, 'PLNGGNR', '2026-04', 26, 1, 1789000, 3),
(58, 'PLNGGNT', '2026-04', 27, 1, 515000, 2),
(59, 'PLNGGNU', '2026-04', 28, 1, 201000, 2),
(60, 'PLNGGNV', '2026-04', 23, 1, 911000, 2),
(61, 'PLNGGNW', '2026-04', 24, 1, 1655000, 3),
(62, 'PLNGGNZ', '2026-04', 25, 1, 184000, 2),
(63, 'PLNGGNA', '2026-05', 21, 1, 133000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `id_pelanggan` varchar(11) NOT NULL,
  `pengirim` enum('pelanggan','admin') NOT NULL,
  `pesan` text DEFAULT NULL,
  `waktu` datetime DEFAULT current_timestamp(),
  `dibaca` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id_chat`, `id_pelanggan`, `pengirim`, `pesan`, `waktu`, `dibaca`) VALUES
(1, 'PLNGGN1', 'pelanggan', 'halo', '2026-07-09 14:02:10', 0),
(2, 'PLNGGN2', 'pelanggan', 'apakah barang ready?\r\n', '2026-07-09 14:02:47', 0),
(3, 'PLNGGN1', 'pelanggan', 'halooo\r\n', '2026-07-09 14:02:57', 0),
(4, 'PLNGGN2', 'admin', 'ready', '2026-07-11 16:11:04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `detail_tran`
--

CREATE TABLE `detail_tran` (
  `id_detail` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_tran`
--

INSERT INTO `detail_tran` (`id_detail`, `id_transaksi`, `id_produk`, `qty`) VALUES
(1, 76, 19, 2),
(2, 81, 1, 1),
(3, 25, 16, 3),
(4, 82, 20, 4),
(5, 45, 14, 5),
(6, 55, 10, 3),
(7, 19, 11, 1),
(8, 86, 11, 3),
(9, 57, 10, 2),
(10, 49, 9, 2),
(11, 96, 16, 5),
(12, 9, 1, 1),
(13, 1, 16, 1),
(14, 13, 3, 2),
(15, 52, 17, 3),
(16, 82, 3, 2),
(17, 86, 14, 2),
(18, 30, 3, 1),
(19, 8, 19, 5),
(20, 55, 12, 4),
(21, 86, 12, 4),
(22, 76, 19, 3),
(23, 37, 20, 5),
(24, 56, 3, 2),
(25, 49, 14, 3),
(26, 63, 10, 1),
(27, 11, 16, 3),
(28, 21, 6, 3),
(29, 89, 10, 4),
(30, 66, 16, 2),
(31, 47, 19, 1),
(32, 29, 7, 2),
(33, 15, 10, 3),
(34, 28, 8, 1),
(35, 26, 2, 1),
(36, 78, 7, 5),
(37, 2, 20, 1),
(38, 47, 11, 2),
(39, 53, 14, 5),
(40, 90, 18, 2),
(41, 57, 7, 1),
(42, 28, 1, 5),
(43, 85, 11, 3),
(44, 6, 18, 1),
(45, 43, 4, 1),
(46, 22, 16, 2),
(47, 94, 15, 3),
(48, 57, 17, 3),
(49, 83, 3, 5),
(50, 94, 11, 5),
(51, 78, 17, 1),
(52, 88, 5, 5),
(53, 86, 4, 2),
(54, 4, 6, 5),
(55, 41, 10, 3),
(56, 15, 10, 3),
(57, 15, 3, 2),
(58, 81, 17, 1),
(59, 16, 18, 4),
(60, 8, 13, 2),
(61, 28, 6, 5),
(62, 39, 13, 5),
(63, 70, 20, 4),
(64, 12, 15, 5),
(65, 72, 15, 2),
(66, 47, 13, 5),
(67, 55, 16, 2),
(68, 86, 3, 3),
(69, 56, 20, 1),
(70, 68, 13, 3),
(71, 98, 3, 4),
(72, 47, 6, 1),
(73, 9, 8, 2),
(74, 25, 16, 5),
(75, 60, 12, 1),
(76, 98, 13, 5),
(77, 16, 2, 4),
(78, 54, 8, 4),
(79, 11, 11, 2),
(80, 56, 9, 2),
(81, 99, 6, 1),
(82, 8, 4, 3),
(83, 21, 6, 5),
(84, 61, 5, 3),
(85, 62, 6, 3),
(86, 8, 1, 4),
(87, 39, 8, 4),
(88, 50, 19, 4),
(89, 80, 20, 3),
(90, 72, 2, 5),
(91, 7, 20, 3),
(92, 33, 5, 4),
(93, 13, 4, 3),
(94, 19, 13, 3),
(95, 44, 20, 1),
(96, 5, 2, 4),
(97, 72, 11, 1),
(98, 65, 11, 5),
(99, 9, 17, 2),
(100, 31, 9, 2),
(101, 98, 5, 3),
(102, 34, 7, 1),
(103, 34, 10, 3),
(104, 51, 7, 3),
(105, 52, 16, 5),
(106, 46, 4, 3),
(107, 46, 5, 2),
(108, 44, 13, 5),
(109, 3, 1, 3),
(110, 47, 1, 1),
(111, 45, 12, 1),
(112, 94, 18, 1),
(113, 76, 12, 5),
(114, 98, 11, 4),
(115, 17, 10, 2),
(116, 14, 8, 3),
(117, 80, 4, 4),
(118, 57, 15, 5),
(119, 47, 11, 1),
(120, 78, 14, 4),
(121, 9, 20, 4),
(122, 29, 15, 5),
(123, 97, 7, 2),
(124, 74, 9, 2),
(125, 78, 2, 2),
(126, 20, 8, 2),
(127, 70, 14, 3),
(128, 71, 10, 2),
(129, 29, 14, 4),
(130, 11, 7, 3),
(131, 70, 16, 5),
(132, 72, 11, 4),
(133, 83, 2, 4),
(134, 55, 14, 1),
(135, 14, 10, 3),
(136, 39, 8, 1),
(137, 94, 13, 1),
(138, 44, 5, 2),
(139, 22, 6, 1),
(140, 90, 13, 2),
(141, 53, 13, 5),
(142, 23, 5, 5),
(143, 56, 15, 2),
(144, 20, 5, 3),
(145, 29, 10, 2),
(146, 23, 4, 4),
(147, 15, 20, 2),
(148, 78, 15, 1),
(149, 16, 2, 3),
(150, 90, 2, 4),
(151, 53, 2, 1),
(152, 20, 6, 4),
(153, 91, 12, 1),
(154, 41, 8, 4),
(155, 23, 18, 2),
(156, 21, 5, 3),
(157, 15, 14, 3),
(158, 45, 3, 5),
(159, 22, 7, 3),
(160, 40, 13, 3),
(161, 32, 16, 4),
(162, 46, 3, 1),
(163, 34, 7, 3),
(164, 29, 11, 5),
(165, 52, 19, 2),
(166, 93, 14, 3),
(167, 1, 12, 1),
(168, 71, 3, 3),
(169, 26, 20, 1),
(170, 70, 18, 5),
(171, 98, 12, 2),
(172, 13, 11, 1),
(173, 3, 3, 2),
(174, 80, 16, 2),
(175, 54, 3, 4),
(176, 52, 6, 1),
(177, 51, 4, 1),
(178, 55, 9, 1),
(179, 7, 14, 2),
(180, 21, 9, 2),
(181, 26, 6, 3),
(182, 59, 14, 5),
(183, 85, 7, 4),
(184, 34, 19, 4),
(185, 72, 20, 5),
(186, 86, 1, 1),
(187, 88, 3, 5),
(188, 100, 8, 4),
(189, 67, 17, 3),
(190, 26, 16, 3),
(191, 34, 2, 4),
(192, 37, 20, 5),
(193, 21, 12, 2),
(194, 37, 12, 3),
(195, 50, 10, 4),
(196, 51, 3, 3),
(197, 30, 19, 1),
(198, 89, 2, 3),
(199, 52, 9, 3),
(200, 99, 18, 4),
(201, 2, 7, 1),
(202, 45, 20, 3),
(203, 61, 16, 5),
(204, 41, 16, 3),
(205, 80, 1, 4),
(206, 23, 2, 3),
(207, 100, 16, 2),
(208, 17, 8, 2),
(209, 75, 18, 5),
(210, 35, 4, 5),
(211, 79, 14, 2),
(212, 65, 12, 3),
(213, 82, 2, 1),
(214, 28, 3, 2),
(215, 76, 8, 1),
(216, 34, 5, 2),
(217, 78, 16, 4),
(218, 48, 7, 2),
(219, 65, 1, 1),
(220, 15, 10, 4),
(221, 97, 1, 3),
(222, 83, 13, 5),
(223, 62, 8, 5),
(224, 32, 17, 3),
(225, 47, 7, 2),
(226, 29, 1, 1),
(227, 1, 12, 2),
(228, 26, 20, 5),
(229, 55, 6, 3),
(230, 66, 12, 1),
(231, 72, 14, 3),
(232, 92, 12, 4),
(233, 95, 6, 1),
(234, 60, 7, 1),
(235, 87, 4, 5),
(236, 82, 7, 5),
(237, 58, 2, 2),
(238, 69, 19, 3),
(239, 36, 19, 3),
(240, 38, 2, 2),
(241, 82, 10, 3),
(242, 71, 17, 2),
(243, 18, 19, 3),
(244, 23, 3, 3),
(245, 60, 5, 2),
(246, 29, 15, 3),
(247, 39, 9, 1),
(248, 59, 5, 3),
(249, 23, 17, 2),
(250, 92, 11, 3),
(251, 59, 12, 2),
(252, 6, 7, 3),
(253, 101, 3, 1),
(254, 102, 1, 5),
(255, 102, 3, 1),
(256, 103, 1, 1),
(257, 104, 2, 1),
(258, 105, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(125) NOT NULL,
  `nama_pelanggan` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `recency` int(11) NOT NULL,
  `frequency` int(11) NOT NULL,
  `monetary` int(11) NOT NULL,
  `level_member` int(11) NOT NULL,
  `kode_kec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `no_hp`, `username`, `password`, `recency`, `frequency`, `monetary`, `level_member`, `kode_kec`) VALUES
('PLNGGN1', 'Ahmad Fauzi', 'Kuningan', '08877210604', 'Pelanggan1', 'Pelanggan1', 113, 1, 260000, 1, 1224),
('PLNGGN10', 'Kurniawan Putra', 'Kuningan', '08836798228', 'Pelanggan10', 'Pelanggan10', 85, 1, 2041000, 3, 1224),
('PLNGGN11', 'Lukman Hakim', 'Kuningan', '08112345341', 'Pelanggan11', 'Pelanggan11', 97, 3, 2629000, 3, 1224),
('PLNGGN12', 'Maman Suherman', 'Kuningan', '08910645142', 'Pelanggan12', 'Pelanggan12', 114, 2, 1613000, 3, 1224),
('PLNGGN13', 'Nanda Saputra', 'Kuningan', '08869319256', 'Pelanggan13', 'Pelanggan13', 91, 1, 567000, 2, 1224),
('PLNGGN14', 'Oki Setiawan', 'Kuningan', '08252741767', 'Pelanggan14', 'Pelanggan14', 86, 1, 710000, 2, 1224),
('PLNGGN15', 'Putra Firmansyah', 'Kuningan', '08969539498', 'Pelanggan15', 'Pelanggan15', 119, 2, 3932000, 3, 1224),
('PLNGGN16', 'Rian Hidayat', 'Kuningan', '08947864692', 'Pelanggan16', 'Pelanggan16', 94, 1, 1076000, 2, 1224),
('PLNGGN17', 'Sandi Pratama', 'Kuningan', '08662975737', 'Pelanggan17', 'Pelanggan17', 107, 2, 1477000, 2, 1224),
('PLNGGN18', 'Taufik Hidayat', 'Kuningan', '08556762697', 'Pelanggan18', 'Pelanggan18', 122, 2, 765000, 2, 1224),
('PLNGGN19', 'Ujang Suryana', 'Kuningan', '08351827584', 'Pelanggan19', 'Pelanggan19', 95, 1, 108000, 1, 1224),
('PLNGGN2', 'Budi Santoso', 'Kuningan', '08503896630', 'Pelanggan2', 'Pelanggan2', 0, 0, 0, 1, 1224),
('PLNGGN20', 'Vicky Maulana', 'Kuningan', '08823868441', 'Pelanggan20', 'Pelanggan20', 95, 1, 1386000, 2, 1224),
('PLNGGN21', 'Wahyu Saputra', 'Kuningan', '08283896435', 'Pelanggan21', 'Pelanggan21', 84, 4, 3955000, 3, 1224),
('PLNGGN22', 'Yoga Pratama', 'Kuningan', '08159626983', 'Pelanggan22', 'Pelanggan22', 90, 4, 4812000, 3, 1224),
('PLNGGN23', 'Zaki Ramadhan', 'Kuningan', '08802450915', 'Pelanggan23', 'Pelanggan23', 87, 4, 2359000, 3, 1224),
('PLNGGN24', 'Asep Nugraha', 'Kuningan', '08667429794', 'Pelanggan24', 'Pelanggan24', 88, 2, 1669000, 3, 1224),
('PLNGGN3', 'Dedi Kurniawan', 'Kuningan', '08536640220', 'Pelanggan3', 'Pelanggan3', 124, 1, 572000, 2, 1224),
('PLNGGN4', 'Eko Prasetyo', 'Kuningan', '08498533914', 'Pelanggan4', 'Pelanggan4', 93, 2, 1125000, 2, 1224),
('PLNGGN5', 'Fajar Nugraha', 'Kuningan', '08582181081', 'Pelanggan5', 'Pelanggan5', 0, 0, 0, 1, 1224),
('PLNGGN6', 'Gilang Ramadhan', 'Kuningan', '08900779499', 'Pelanggan6', 'Pelanggan6', 94, 3, 4191000, 3, 1224),
('PLNGGN7', 'Hendra Wijaya', 'Kuningan', '08415006095', 'Pelanggan7', 'Pelanggan7', 123, 1, 795000, 2, 1224),
('PLNGGN8', 'Irfan Maulana', 'Kuningan', '08353244367', 'Pelanggan8', 'Pelanggan8', 86, 3, 2144000, 3, 1224),
('PLNGGN9', 'Joko Susanto', 'Kuningan', '08162497428', 'Pelanggan9', 'Pelanggan9', 90, 3, 4145000, 3, 1224),
('PLNGGNA', 'Bayu Prakoso', 'Kuningan', '08376097132', 'PelangganA', 'PelangganA', 56, 5, 3136730, 4, 1224),
('PLNGGNB', 'Candra Wijaya', 'Kuningan', '08314609737', 'PelangganB', 'PelangganB', 114, 2, 3088000, 3, 1224),
('PLNGGNC', 'Dian Kurnia', 'Kuningan', '08383070632', 'PelangganC', 'PelangganC', 109, 1, 647000, 2, 1224),
('PLNGGND', 'Erwin Setiawan', 'Kuningan', '08979001779', 'PelangganD', 'PelangganD', 98, 1, 354000, 1, 1224),
('PLNGGNE', 'Firman Hidayat', 'Kuningan', '08555763075', 'PelangganE', 'PelangganE', 84, 2, 1463000, 2, 1224),
('PLNGGNF', 'Gunawan Saputra', 'Kuningan', '08851763512', 'PelangganF', 'PelangganF', 85, 3, 3063000, 3, 1224),
('PLNGGNG', 'Hariyanto', 'Kuningan', '08714843972', 'PelangganG', 'PelangganG', 95, 2, 1952000, 3, 1224),
('PLNGGNH', 'Indra Lesmana', 'Kuningan', '08554573612', 'PelangganH', 'PelangganH', 0, 0, 0, 1, 1224),
('PLNGGNI', 'Jajang Nurjaman', 'Kuningan', '08182243840', 'PelangganI', 'PelangganI', 92, 2, 687000, 2, 1224),
('PLNGGNJ', 'Kiki Firmansyah', 'Kuningan', '08191728508', 'PelangganJ', 'PelangganJ', 113, 2, 2009000, 3, 1224),
('PLNGGNK', 'Luthfi Ramadhan', 'Kuningan', '08166632975', 'PelangganK', 'PelangganK', 111, 1, 1052000, 2, 1224),
('PLNGGNL', 'Miftah Fauzi', 'Kuningan', '08155697106', 'PelangganL', 'PelangganL', 88, 2, 2858000, 3, 1224),
('PLNGGNM', 'Nopan Hidayat', 'Kuningan', '08419468776', 'PelangganM', 'PelangganM', 88, 3, 2264000, 3, 1224),
('PLNGGNN', 'Opik Supriatna', 'Kuningan', '08699341348', 'PelangganN', 'PelangganN', 89, 1, 463000, 1, 1224),
('PLNGGNO', 'Rudi Hartono', 'Kuningan', '08850473709', 'PelangganO', 'PelangganO', 89, 1, 1176000, 2, 1224),
('PLNGGNP', 'Sigit Prasetyo', 'Kuningan', '08128363161', 'PelangganP', 'PelangganP', 93, 1, 798000, 2, 1224),
('PLNGGNQ', 'Teguh Saputra', 'Kuningan', '08968401902', 'PelangganQ', 'PelangganQ', 0, 0, 0, 1, 1224),
('PLNGGNR', 'Uus Kusnandar', 'Kuningan', '08956681396', 'PelangganR', 'PelangganR', 92, 1, 1789000, 2, 1224),
('PLNGGNS', 'Vino Maulana', 'Kuningan', '08665795935', 'PelangganS', 'PelangganS', 109, 1, 2075000, 3, 1224),
('PLNGGNT', 'Wawan Hermawan', 'Kuningan', '08771484001', 'PelangganT', 'PelangganT', 93, 6, 4521000, 3, 1224),
('PLNGGNU', 'Yudi Setiawan', 'Kuningan', '08155158165', 'PelangganU', 'PelangganU', 94, 3, 2423000, 3, 1224),
('PLNGGNV', 'Zainal Arifin', 'Kuningan', '08479795291', 'PelangganV', 'PelangganV', 89, 1, 911000, 2, 1224),
('PLNGGNW', 'Adi Nugraha', 'Kuningan', '08743662817', 'PelangganW', 'PelangganW', 90, 2, 2329000, 3, 1224),
('PLNGGNX', 'Bambang Sutrisno', 'Kuningan', '08822832465', 'PelangganX', 'PelangganX', 96, 4, 4219000, 3, 1224),
('PLNGGNY', 'Cecep Suhendar', 'Kuningan', '08144650255', 'PelangganY', 'PelangganY', 103, 2, 3020000, 3, 1224),
('PLNGGNZ', 'Dadan Kurniawan', 'Kuningan', '08213515465', 'PelangganZ', 'PelangganZ', 91, 1, 184000, 1, 1224);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(125) NOT NULL,
  `deskripsi` text NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `kategori_produk` varchar(125) NOT NULL,
  `stok` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `keterangan`, `harga`, `kategori_produk`, `stok`, `foto`) VALUES
(1, 'Jersey Futsal Printing', 'Jersey futsal custom printing', 'pcs', '133000', 'Pakaian Olahraga', 993, 'Jersey_Futsal_Printing.png'),
(2, 'Kaos Kaki Sport', 'Kaos kaki olahraga nyaman digunakan', 'pcs', '54000', 'Aksesoris Olahraga', 999, 'Kaos_Kaki_Sport.png'),
(3, 'Wristband Sport', 'Wristband untuk menyerap keringat', 'pcs', '78000', 'Aksesoris Olahraga', 998, 'Wristband_Sport.png'),
(4, 'Kaos Dry Fit Training', 'Kaos olahraga bahan dry fit', 'pcs', '159000', 'Pakaian Olahraga', 1000, 'Kaos_Dry_Fit_Training.png'),
(5, 'Celana Futsal Pendek', 'Celana futsal nyaman digunakan', 'pcs', '143000', 'Pakaian Olahraga', 1000, 'Celana_Futsal_Pendek.png'),
(6, 'Kaos Olahraga Training', 'Kaos latihan olahraga harian', 'pcs', '134000', 'Pakaian Olahraga', 1000, 'Kaos_Olahraga_Training.png'),
(7, 'Botol Minum Sport', 'Botol minum olahraga kapasitas besar', 'pcs', '58000', 'Aksesoris Olahraga', 1000, 'Botol_Minum_Sport.png'),
(8, 'Bola Voli Training', 'Bola voli untuk latihan sekolah dan klub', 'pcs', '191000', 'Bola Olahraga', 1000, 'Bola_Voli_Training.png'),
(9, 'Deker Lutut Voli', 'Pelindung lutut untuk olahraga voli', 'pcs', '92000', 'Aksesoris Olahraga', 1000, 'Deker_Lutut_Voli.png'),
(10, 'Net Voli Training', 'Net voli untuk latihan sekolah', 'pcs', '150000', 'Net dan Perlengkapan Lapangan', 1000, 'Net_Voli_Training.png'),
(11, 'Headband Olahraga', 'Headband olahraga berbahan elastis', 'pcs', '77000', 'Aksesoris Olahraga', 1000, 'Headband_Olahraga.png'),
(12, 'Bola Futsal Match', 'Bola futsal standar pertandingan', 'pcs', '178000', 'Bola Olahraga', 1000, 'Bola_Futsal_Match.png'),
(13, 'Sepatu Voli Asics Gel', 'Sepatu olahraga untuk latihan dan pertandingan voli', 'pcs', '190000', 'Sepatu Olahraga', 1000, 'Sepatu_Voli_Asics_Gel.png'),
(14, 'Pelindung Pergelangan Kaki', 'Pelindung ankle support olahraga', 'pcs', '67000', 'Aksesoris Olahraga', 1000, 'Pelindung_Pergelangan_Kaki.png'),
(15, 'Handuk Sport', 'Handuk olahraga berbahan lembut', 'pcs', '52000', 'Aksesoris Olahraga', 1000, 'Handuk_Sport.png'),
(16, 'Setelan Training Sport', 'Setelan olahraga untuk latihan', 'pcs', '147000', 'Pakaian Olahraga', 1000, 'Setelan_Training_Sport.png'),
(17, 'Gym Sack Sport', 'Tas olahraga ringan dan praktis', 'pcs', '70000', 'Aksesoris Olahraga', 1000, 'Gym_Sack_Sport.png'),
(18, 'Bola Basket Sport', 'Bola basket outdoor dan indoor', 'pcs', '180000', 'Bola Olahraga', 1000, 'Bola_Basket_Sport.png'),
(19, 'Sepatu Running Sport', 'Sepatu olahraga untuk aktivitas lari dan jogging', 'pcs', '185000', 'Sepatu Olahraga', 1000, 'Sepatu_Running_Sport.png'),
(20, 'Jaring Latihan Futsal', 'Jaring gawang untuk latihan futsal', 'pcs', '109000', 'Net dan Perlengkapan Lapangan', 1000, 'Jaring_Latihan_Futsal.png'),
(22, 'Bola Sepak Nike Strike', 'Bola sepak kualitas premium', 'pcs', '450000', 'Bola Olahraga', 1000, 'Bola_Sepak_Nike_Strike.png'),
(23, 'Hoodie Sport Casual', 'Hoodie olahraga casual harian', 'pcs', '260000', 'Pakaian Olahraga', 1000, 'Hoodie_Sport_Casual.png'),
(24, 'Peluit Wasit Fox', 'Peluit wasit untuk pertandingan', 'pcs', '75000', 'Net dan Perlengkapan Lapangan', 1000, 'Peluit_Wasit_Fox.png'),
(25, 'Mizuno Cyclone Speed', 'Sepatu voli dengan material ringan', 'pcs', '580000', 'Sepatu Olahraga', 998, 'Mizuno_Cyclone_Speed.png'),
(26, 'Sarung Tangan Kiper Adidas', 'Sarung tangan kiper kualitas premium', 'pcs', '250000', 'Aksesoris Olahraga', 1000, 'Sarung_Tangan_Kiper_Adidas.png'),
(27, 'Bola Voli Mikasa MV210 Original', 'Bola voli resmi standar turnamen', 'pcs', '850000', 'Bola Olahraga', 999, 'Bola_Voli_Mikasa_MV210_Original.png'),
(28, 'Polo Shirt Sport', 'Kaos polo olahraga casual', 'pcs', '145000', 'Pakaian Olahraga', 998, 'Polo_Shirt_Sport.png'),
(29, 'Tiang Cone Training', 'Tiang cone untuk latihan agility', 'pcs', '85000', 'Net dan Perlengkapan Lapangan', 1000, 'Tiang_Cone_Training.png'),
(30, 'Puma Velocity Nitro', 'Sepatu running dengan desain sporty modern', 'pcs', '780000', 'Sepatu Olahraga', 1000, 'Puma_Velocity_Nitro.png'),
(31, 'Bola Futsal Fiesta', 'Bola futsal dengan kontrol stabil', 'pcs', '225000', 'Bola Olahraga', 999, 'Bola_Futsal_Fiesta.png'),
(32, 'Kaos Kompresi Sport', 'Kaos kompresi untuk olahraga', 'pcs', '110000', 'Pakaian Olahraga', 1000, 'Kaos_Kompresi_Sport.png'),
(33, 'Net Futsal Nylon', 'Net futsal dengan bahan kuat', 'pcs', '275000', 'Net dan Perlengkapan Lapangan', 999, 'Net_Futsal_Nylon.png'),
(34, 'Yonex Power Cushion', 'Sepatu olahraga dengan bantalan empuk', 'pcs', '690000', 'Sepatu Olahraga', 1000, 'Yonex_Power_Cushion.png'),
(35, 'Bola Basket Molten', 'Bola basket dengan grip nyaman', 'pcs', '420000', 'Bola Olahraga', 1000, 'Bola_Basket_Molten.png'),
(36, 'Papan Skor Manual', 'Papan skor olahraga manual', 'pcs', '160000', 'Net dan Perlengkapan Lapangan', 1000, 'Papan_Skor_Manual.png'),
(37, 'League Running Active', 'Sepatu running ringan dan fleksibel', 'pcs', '430000', 'Sepatu Olahrag', 1000, 'League_Running_Active.png'),
(38, 'Bola Voli Molten 4200 Original', 'Bola voli original dengan kualitas premium', 'pcs', '500000', 'Bola Olahraga', 999, 'Bola_Voli_Molten_4200_Original.png'),
(39, 'Deker Futsal Elbow Support', 'Pelindung siku olahraga futsal', 'pcs', '95000', 'Aksesoris Olahraga', 999, 'Deker_Futsal_Elbow_Support.png'),
(40, 'Net Voli Mitzuda', 'Net voli berkualitas untuk pertandingan', 'pcs', '350000', 'Net dan Perlengkapan Lapangan', 1000, 'Net_Voli_Mitzuda.png'),
(41, 'Adidas Duramo Running', 'Sepatu olahraga untuk aktivitas outdoor', 'pcs', '720000', 'Sepatu Olahraga', 999, 'Adidas_Duramo_Running.png'),
(42, 'Bola Sepak Specs Galaxy', 'Bola sepak untuk latihan lapangan', 'pcs', '290000', 'Bola Olahraga', 999, 'Bola_Sepak_Specs_Galaxy.png'),
(43, 'Pompa Bola Manual', 'Pompa bola untuk berbagai jenis bola', 'pcs', '65000', 'Net dan Perlengkapan Lapangan', 1000, 'Pompa_Bola_Manual.png'),
(44, 'Setelan Training Nike', 'Setelan olahraga kualitas premium', 'pcs', '375000', 'Pakaian Olahraga', 1000, 'Setelan_Training_Nike.png'),
(45, 'Bola Basket Spalding', 'Bola basket original untuk pertandingan', 'pcs', '550000', 'Bola Olahraga', 1000, 'Bola_Basket_Spalding.png'),
(46, 'Tas Bola Voli', 'Tas penyimpanan bola olahraga', 'pcs', '140000', 'Net dan Perlengkapan Lapangan', 1000, 'Tas_Bola_Voli.png'),
(47, 'Eagle Sport Runner', 'Sepatu olahraga harian untuk jogging', 'pcs', '390000', 'Sepatu Olahraga', 1000, 'Eagle_Sport_Runner.png'),
(48, 'Bola Futsal Adidas Tango', 'Bola futsal desain modern dan kuat', 'pcs', '350000', 'Bola Olahraga', 999, 'Bola_Futsal_Adidas_Tango.png'),
(49, 'Jaket Training Sport', 'Jaket olahraga untuk aktivitas outdoor', 'pcs', '225000', 'Pakaian Olahraga', 999, 'Jaket_Training_Sport.png'),
(50, 'Papan Taktik Futsal', 'Papan strategi untuk pelatih futsal', 'pcs', '180000', 'Net dan Perlengkapan Lapangan', 999, 'Papan_Taktik_Futsal.png'),
(51, 'Mizuno Thunderblade Mid', 'Sepatu voli dengan grip dan stabilitas tinggi', 'pcs', '700000', 'Sepatu Olahraga', 1000, 'Mizuno_Thunderblade_Mid.png'),
(52, 'Bola Futsal Junior', 'Bola futsal ukuran junior', 'pcs', '145000', 'Bola Olahraga', 999, 'Bola_Futsal_Junior.png'),
(53, 'Sarung Tangan Kiper Specs', 'Sarung tangan kiper dengan grip kuat', 'pcs', '175000', 'Aksesoris Olahraga', 998, 'Sarung_Tangan_Kiper_Specs.png'),
(54, 'Setelan Training Adidas', 'Setelan olahraga desain sporty', 'pcs', '350000', 'Pakaian Olahraga', 1000, 'Setelan_Training_Adidas.png'),
(55, 'Jaring Gawang Futsal', 'Jaring gawang futsal berbahan nylon', 'pcs', '225000', 'Net dan Perlengkapan Lapangan', 999, 'Jaring_Gawang_Futsal.png'),
(56, 'Ortuseight Catalyst Legion', 'Sepatu futsal dengan kontrol bola maksimal', 'pcs', '495000', 'Sepatu Olahraga', 999, 'Ortuseight_Catalyst_Legion.png'),
(57, 'Grip Tape Sport', 'Grip tape untuk perlengkapan olahraga', 'pcs', '45000', 'Aksesoris Olahraga', 999, 'Grip_Tape_Sport.png'),
(58, 'Bola Voli Soft Training', 'Bola voli untuk latihan pemula', 'pcs', '165000', 'Bola Olahraga', 999, 'Bola_Voli_Soft_Training.png'),
(59, 'Stopwatch Digital', 'Stopwatch digital untuk latihan olahraga', 'pcs', '120000', 'Net dan Perlengkapan Lapangan', 1000, 'Stopwatch_Digital.png'),
(60, 'Specs Accelerator Lightspeed', 'Sepatu olahraga dengan desain aerodinamis', 'pcs', '520000', 'Sepatu Olahraga', 999, 'Specs_Accelerator_Lightspeed.png'),
(61, 'Jersey Training Team', 'Jersey latihan tim olahraga', 'pcs', '155000', 'Pakaian Olahraga', 999, 'Jersey_Training_Team.png'),
(62, 'Tiang Net Voli Portable', 'Tiang net portable mudah dipasang', 'pcs', '1200000', 'Net dan Perlengkapan Lapangan', 999, 'Tiang_Net_Voli_Portable.png'),
(63, 'Asics Gel Pulse Black', 'Sepatu olahraga premium untuk latihan harian', 'pcs', '625000', 'Sepatu Olahraga', 999, 'Asics_Gel_Pulse_Black.png'),
(64, 'Tas Sepatu Olahraga', 'Tas khusus penyimpanan sepatu olahraga', 'pcs', '99000', 'Aksesoris Olahraga', 1000, 'Tas_Sepatu_Olahraga.png'),
(65, 'Net Badminton', 'Net badminton standar olahraga', 'pcs', '150000', 'Net dan Perlengkapan Lapangan', 1000, 'Net_Badminton.png'),
(66, 'Rompi Latihan Futsal', 'Rompi latihan untuk pertandingan tim', 'pcs', '65000', 'Pakaian Olahraga', 1000, 'Rompi_Latihan_Futsal.png'),
(67, 'Bola Sepak Training Club', 'Bola sepak untuk latihan tim', 'pcs', '210000', 'Bola Olahraga', 999, 'Bola_Sepak_Training_Club.png'),
(68, 'Asics Gel Contend 7', 'Sepatu running dengan desain ringan dan nyaman', 'pcs', '600000', 'Sepatu Olahraga', 1000, 'Asics_Gel_Contend_7.png'),
(69, 'Cone Marker Training', 'Cone marker untuk latihan agility', 'pcs', '95000', 'Net dan Perlengkapan Lapangan', 1000, 'Cone_Marker_Training.png'),
(70, 'Specs Speed Elite', 'Sepatu futsal ringan dan fleksibel', 'pcs', '450000', 'Sepatu Olahraga', 999, 'Specs_Speed_Elite.png'),
(71, 'Pelindung Tulang Kering', 'Pelindung kaki olahraga sepak bola', 'pcs', '88000', 'Aksesoris Olahraga', 1000, 'Pelindung_Tulang_Kering.png'),
(72, 'Jersey Voli Printing', 'Jersey voli desain printing', 'pcs', '125000', 'Pakaian Olahraga', 999, 'Jersey_Voli_Printing.png'),
(73, 'Bola Futsal Specs Original', 'Bola futsal untuk latihan rutin', 'pcs', '240000', 'Bola Olahraga', 1000, 'Bola_Futsal_Specs_Original.png'),
(74, 'Nike Revolution Running', 'Sepatu running dengan bantalan empuk', 'pcs', '750000', 'Sepatu Olahraga', 1000, 'Nike_Revolution_Running.png'),
(75, 'Kaos Kaki Reebok Panjang Hitam', 'Kaos kaki panjang untuk olahraga', 'pcs', '20000', 'Aksesoris Olahraga', 1000, 'Kaos_Kaki_Reebok_Panjang_Hitam.png'),
(76, 'Celana Training Panjang', 'Celana training bahan nyaman', 'pcs', '140000', 'Pakaian Olahraga', 999, 'Celana_training_Panjang.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` varchar(125) NOT NULL,
  `tgl_transaksi` varchar(15) NOT NULL,
  `total_transaksi` varchar(15) NOT NULL,
  `total_pembayaran` varchar(15) NOT NULL,
  `ongkir` varchar(15) NOT NULL,
  `stat_transaksi` int(11) NOT NULL,
  `bukti_payment` text NOT NULL,
  `alamat_pengiriman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `tgl_transaksi`, `total_transaksi`, `total_pembayaran`, `ongkir`, `stat_transaksi`, `bukti_payment`, `alamat_pengiriman`) VALUES
(1, 'PLNGGN23', '2026-04-09', '681000', '688000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(2, 'PLNGGNF', '2026-03-07', '167000', '174000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(3, 'PLNGGN11', '2026-03-30', '555000', '562000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(4, 'PLNGGN9', '2026-03-11', '670000', '677000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(5, 'PLNGGN8', '2026-04-10', '216000', '223000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(6, 'PLNGGND', '2026-03-29', '354000', '361000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(7, 'PLNGGNA', '2026-03-01', '461000', '468000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(8, 'PLNGGN15', '2026-03-08', '2314000', '2321000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(9, 'PLNGGN12', '2026-03-13', '1091000', '1098000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(11, 'PLNGGN24', '2026-04-08', '769000', '776000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(12, 'PLNGGN1', '2026-03-14', '260000', '267000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(13, 'PLNGGN14', '2026-04-10', '710000', '717000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(14, 'PLNGGNY', '2026-03-14', '1023000', '1030000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(15, 'PLNGGNS', '2026-03-18', '2075000', '2082000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(16, 'PLNGGNG', '2026-04-01', '1098000', '1105000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(17, 'PLNGGN17', '2026-03-20', '682000', '689000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(18, 'PLNGGN18', '2026-03-05', '555000', '562000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(19, 'PLNGGNC', '2026-03-18', '647000', '654000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(20, 'PLNGGNE', '2026-03-15', '1347000', '1354000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(21, 'PLNGGN10', '2026-04-11', '2041000', '2048000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(22, 'PLNGGNT', '2026-03-19', '602000', '609000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(23, 'PLNGGN22', '2026-03-14', '2247000', '2254000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(25, 'PLNGGNO', '2026-04-07', '1176000', '1183000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(26, 'PLNGGNT', '2026-03-09', '1551000', '1558000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(28, 'PLNGGN21', '2026-03-14', '1682000', '1689000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(29, 'PLNGGN15', '2026-03-05', '1618000', '1625000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(30, 'PLNGGN23', '2026-04-09', '263000', '270000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(31, 'PLNGGNM', '2026-04-04', '184000', '191000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(32, 'PLNGGNP', '2026-04-03', '798000', '805000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(33, 'PLNGGN3', '2026-03-03', '572000', '579000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(34, 'PLNGGN11', '2026-03-07', '1924000', '1931000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(35, 'PLNGGN17', '2026-03-15', '795000', '802000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(36, 'PLNGGN21', '2026-03-15', '555000', '562000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(37, 'PLNGGNJ', '2026-03-09', '1624000', '1631000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(38, 'PLNGGN19', '2026-04-01', '108000', '115000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(39, 'PLNGGNY', '2026-03-24', '1997000', '2004000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(40, 'PLNGGN4', '2026-04-03', '570000', '577000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(41, 'PLNGGNW', '2026-04-06', '1655000', '1662000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(43, 'PLNGGN22', '2026-04-03', '159000', '166000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(44, 'PLNGGNM', '2026-04-06', '1345000', '1352000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(45, 'PLNGGNX', '2026-03-31', '1230000', '1237000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(46, 'PLNGGNL', '2026-03-14', '841000', '848000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(47, 'PLNGGNB', '2026-03-12', '1749000', '1756000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(48, 'PLNGGNE', '2026-04-12', '116000', '123000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(49, 'PLNGGNJ', '2026-03-14', '385000', '392000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(50, 'PLNGGNF', '2026-03-03', '1340000', '1347000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(51, 'PLNGGN13', '2026-04-05', '567000', '574000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(52, 'PLNGGN8', '2026-03-02', '1725000', '1732000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(53, 'PLNGGNB', '2026-03-13', '1339000', '1346000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(54, 'PLNGGN16', '2026-04-02', '1076000', '1083000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(55, 'PLNGGNL', '2026-04-08', '2017000', '2024000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(56, 'PLNGGNI', '2026-04-04', '553000', '560000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(57, 'PLNGGN6', '2026-03-01', '828000', '835000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(58, 'PLNGGNX', '2026-03-14', '108000', '115000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(59, 'PLNGGN9', '2026-03-28', '1120000', '1127000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(60, 'PLNGGN12', '2026-03-06', '522000', '529000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(61, 'PLNGGNU', '2026-03-05', '1164000', '1171000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(62, 'PLNGGN6', '2026-03-07', '1357000', '1364000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(63, 'PLNGGN11', '2026-03-12', '150000', '157000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(65, 'PLNGGNK', '2026-03-16', '1052000', '1059000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(66, 'PLNGGN23', '2026-03-09', '472000', '479000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(67, 'PLNGGN18', '2026-03-01', '210000', '217000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(68, 'PLNGGNT', '2026-03-31', '570000', '577000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(69, 'PLNGGN4', '2026-04-03', '555000', '562000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(70, 'PLNGGN22', '2026-04-06', '2272000', '2279000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(71, 'PLNGGNW', '2026-03-21', '674000', '681000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(72, 'PLNGGNX', '2026-03-21', '1505000', '1512000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(74, 'PLNGGNZ', '2026-04-05', '184000', '191000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(75, 'PLNGGN24', '2026-03-24', '900000', '907000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(76, 'PLNGGN6', '2026-04-02', '2006000', '2013000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(78, 'PLNGGNX', '2026-03-01', '1376000', '1383000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(79, 'PLNGGNI', '2026-03-28', '134000', '141000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(80, 'PLNGGNR', '2026-04-04', '1789000', '1796000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(81, 'PLNGGN8', '2026-03-23', '203000', '210000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(82, 'PLNGGN20', '2026-04-01', '1386000', '1393000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(83, 'PLNGGNF', '2026-04-11', '1556000', '1563000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(85, 'PLNGGNN', '2026-04-07', '463000', '470000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(86, 'PLNGGNA', '2026-03-07', '1762000', '1769000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(87, 'PLNGGN7', '2026-03-04', '795000', '802000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(88, 'PLNGGNT', '2026-03-08', '1105000', '1112000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(89, 'PLNGGN21', '2026-03-30', '762000', '769000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(90, 'PLNGGN21', '2026-04-12', '956000', '963000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(91, 'PLNGGNT', '2026-03-13', '178000', '185000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(92, 'PLNGGN23', '2026-03-01', '943000', '950000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(93, 'PLNGGNU', '2026-04-02', '201000', '208000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(94, 'PLNGGNV', '2026-04-07', '911000', '918000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(95, 'PLNGGN22', '2026-04-04', '134000', '141000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(96, 'PLNGGNM', '2026-04-08', '735000', '742000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(97, 'PLNGGNT', '2026-04-03', '515000', '522000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(98, 'PLNGGN9', '2026-04-06', '2355000', '2362000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(99, 'PLNGGNG', '2026-03-08', '854000', '861000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(100, 'PLNGGNU', '2026-03-28', '1058000', '1065000', '7000', 2, 'thread-137261969-78627520142079263363.png', ' Kec.CIGUGUR Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(101, 'PLNGGNA', '2026-04-13', '74880', '81880', '7000', 2, 'thread-137261969-78627520142079263364.png', 'Lingk Kramat Jaya RT.07/03 Kec.PEKALIPAN Kota/Kab.CIREBON Prov.JAWA BARAT Expedisi.jne CTC'),
(102, 'PLNGGNA', '2026-04-24', '705850', '712850', '7000', 2, 'thread-137261969-78627520142079263365.png', 'Lingk Kramat Jaya RT.07/03 Kec.KUNINGAN Kota/Kab.KUNINGAN Prov.JAWA BARAT Expedisi.jne CTC'),
(103, 'PLNGGNA', '2026-05-10', '133000', '148000', '15000', 2, 'thread-137261969-78627520142079263365.png', 'Lingk Kramat Jaya RT.07/03 Kec.CAKUNG Kota/Kab. JAKARTA TIMUR Prov. DKI JAKARTA Expedisi.jne REG'),
(104, '52', '2026-05-10', '54000', '97000', '43000', 0, '', 'Lingk Kramat Jaya RT.07/03 Kec.SUNGAI RUMBAIKota/Kab MUKO MUKO Prov. BENGKULUExpedisi. posPos Reguler'),
(105, '52', '2026-05-10', '133000', '150000', '17000', 0, '', 'Lingk Kramat Jaya RT.07/03 Kec.SERPONG UTARAKota/Kab TANGERANG SELATAN Prov. BANTENExpedisi. jneREG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisis`
--
ALTER TABLE `analisis`
  ADD PRIMARY KEY (`id_analisis`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indexes for table `detail_tran`
--
ALTER TABLE `detail_tran`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analisis`
--
ALTER TABLE `analisis`
  MODIFY `id_analisis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detail_tran`
--
ALTER TABLE `detail_tran`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
