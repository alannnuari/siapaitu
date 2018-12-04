-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2017 at 02:36 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kitsbs_siapaitu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblkit_alat`
--

CREATE TABLE `tblkit_alat` (
  `id_alat` int(11) NOT NULL,
  `mac` varchar(20) NOT NULL,
  `id_nama_alat` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `info` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblkit_alat`
--

INSERT INTO `tblkit_alat` (`id_alat`, `mac`, `id_nama_alat`, `id_lokasi`, `info`, `status`) VALUES
(1, '44:37:e6:82:de:b7', 1, 1, 'Supervisor IT, OS: Linux, Ruang IT', 1),
(2, '40:f0:2f:46:f4:f5', 2, 1, 'Supervisor IT, OS : WIN10, Ruang IT', 1),
(3, '00:0c:42:6d:42:8c', 6, 1, 'Mikrotik AP, Lantai 3', 1),
(4, '00:0c:42:6d:42:40', 6, 1, 'Mikrotik AP, Ruang Produksi Lt.1', 1),
(5, '60:fa:cd:68:f1:2c', 9, 1, 'Iwan Hernawan, IPhone4', 1),
(6, '54:dc:1d:73:8b:06', 9, 1, 'Iwan Hernawan, Coolpad', 1),
(7, '84:78:8b:a3:2f:38', 9, 1, 'Iwan Hernawan, Ipad 3 mini', 1),
(8, '00:C2:C6:2D:0D:34', 1, 1, 'Pendi Murdani, OS : WIN10 Wi-Fi, Ruang IT', 1),
(9, 'F8:0F:41:A7:49:7A', 1, 1, 'Pendi Murdani, OS: WIN10 Ethernet, Ruang IT', 1),
(10, '1C:B7:2C:49:6D:7B', 9, 1, 'Pendi Murdani, Asus Zenfone 2', 1),
(11, '5C:51:4F:69:F6:D6', 2, 1, 'Indra Gunawan, OS: WIN8, Ruang IT', 1),
(12, '9C:AE:D3:2F:CC:FF', 3, 1, 'EPSON WF-7611, RUANG HAR LANTAI 1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblkit_log`
--

CREATE TABLE `tblkit_log` (
  `id_log` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `aksi` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblkit_log`
--

INSERT INTO `tblkit_log` (`id_log`, `ip`, `nama`, `aksi`, `waktu`) VALUES
(1, '::1', 'adminstar', 'Logout', '2017-06-12 13:23:41'),
(2, '::1', '', 'Login - gagal', '2017-06-12 13:25:30'),
(3, '::1', 'adminstar', 'Login', '2017-06-12 13:25:44'),
(4, '::1', 'adminstar', 'Logout', '2017-06-12 13:25:44'),
(5, '::1', 'adminstar', 'Login - gagal', '2017-06-12 13:26:26'),
(6, '', '', 'Tambah Device', '2017-06-12 14:02:10'),
(7, '', '', 'Tambah Device', '2017-06-12 14:13:11'),
(8, '', '', 'Tambah Device', '2017-06-12 14:14:23'),
(9, '', '', 'Tambah Device', '2017-06-12 14:14:39'),
(10, '', '', 'Edit Device', '2017-06-12 14:24:54'),
(11, '', '', 'Edit Device', '2017-06-12 14:24:59'),
(12, '', '', 'Hapus Device', '2017-06-12 14:25:06'),
(13, '', '', 'Hapus Device', '2017-06-12 14:25:14'),
(14, '', '', 'Logout', '2017-06-12 14:26:26'),
(15, '::1', 'admin', 'Login', '2017-06-12 14:30:46'),
(16, '::1', 'admin', 'Tambah Device', '2017-06-12 14:31:15'),
(17, '::1', 'admin', 'Tambah device dengan MAC 10.27.110.37', '2017-06-12 14:33:25'),
(18, '::1', 'admin', 'Tambah User User-1', '2017-06-12 14:53:52'),
(19, '::1', 'admin', 'Logout', '2017-06-12 14:54:00'),
(20, '::1', 'user1', 'Login', '2017-06-12 14:54:06'),
(21, '::1', 'user1', 'Logout', '2017-06-12 14:54:06'),
(22, '::1', 'user1', 'Login', '2017-06-12 14:54:12'),
(23, '::1', 'user1', 'Logout', '2017-06-12 14:54:12'),
(24, '::1', 'user1', 'Login', '2017-06-12 14:56:58'),
(25, '::1', 'user1', 'Logout', '2017-06-12 14:56:58'),
(26, '::1', 'userr1', 'Login - gagal', '2017-06-12 14:57:11'),
(27, '::1', 'admin', 'Login', '2017-06-12 14:57:26'),
(28, '::1', 'admin', 'Login', '2017-06-12 14:57:30'),
(29, '::1', 'admin', 'Login', '2017-06-12 14:57:35'),
(30, '::1', 'admin', 'Login', '2017-06-12 14:57:50'),
(31, '::1', 'admin', 'Login', '2017-06-12 14:59:45'),
(32, '::1', 'admin', 'Login', '2017-06-12 15:00:23'),
(33, '::1', 'admin', 'Logout', '2017-06-12 15:00:26'),
(34, '::1', 'admin', 'Login', '2017-06-12 15:00:40'),
(35, '::1', 'admin', 'Logout', '2017-06-12 15:00:54'),
(36, '::1', 'admin', 'Login', '2017-06-12 15:00:58'),
(37, '::1', 'admin', 'Tambah User 1', '2017-06-12 15:01:05'),
(38, '::1', 'admin', 'Edit', '2017-06-12 15:04:08'),
(39, '::1', 'admin', 'Tambah User ss', '2017-06-12 15:04:15'),
(40, '::1', 'admin', 'Logout', '2017-06-12 15:05:43'),
(41, '::1', 'user1', 'Login', '2017-06-12 15:05:49'),
(42, '::1', 'user1', 'Logout', '2017-06-12 15:05:49'),
(43, '::1', 'admin', 'Login', '2017-06-12 15:08:15'),
(44, '::1', 'admin', 'Logout', '2017-06-12 15:08:17'),
(45, '::1', 'user', 'Login - gagal', '2017-06-12 15:08:21'),
(46, '::1', 'user1', 'Login', '2017-06-12 15:08:29'),
(47, '::1', 'user1', 'Logout', '2017-06-12 15:08:29'),
(48, '::1', 'user1', 'Login', '2017-06-12 15:08:45'),
(49, '::1', 'user1', 'Edit Device', '2017-06-12 15:12:45'),
(50, '::1', 'user1', 'Edit Device', '2017-06-12 15:13:02'),
(51, '::1', 'user1', 'Tambah device dengan MAC 3434', '2017-06-13 07:48:32'),
(52, '::1', 'user1', 'Logout', '2017-06-13 08:25:27'),
(53, '::1', 'admin', 'Login', '2017-06-13 08:25:33'),
(54, '::1', 'admin', 'Logout', '2017-06-13 08:25:37'),
(55, '::1', 'user1', 'Login', '2017-06-13 08:25:46'),
(56, '::1', 'user1', 'Logout', '2017-06-13 08:25:50'),
(57, '::1', 'user1', 'Login', '2017-06-13 08:26:03'),
(58, '::1', 'user1', 'Login', '2017-06-13 08:31:57'),
(59, '::1', 'user1', 'Logout', '2017-06-13 08:51:24'),
(60, '::1', 'admin', 'Login', '2017-06-13 08:51:30'),
(61, '::1', 'admin', 'Logout', '2017-06-13 08:55:15'),
(62, '::1', 'user1', 'Login', '2017-06-13 08:55:21'),
(63, '::1', 'user1', 'Logout', '2017-06-13 08:55:52'),
(64, '::1', 'user1', 'Login', '2017-06-13 08:56:11'),
(65, '::1', 'user1', 'Logout', '2017-06-13 08:56:49'),
(66, '::1', 'admin', 'Login', '2017-06-13 08:56:53'),
(67, '::1', 'admin', 'Logout', '2017-06-13 08:56:54'),
(68, '::1', 'user1', 'Login', '2017-06-13 08:57:00'),
(69, '::1', 'user1', 'Logout', '2017-06-13 08:59:05'),
(70, '::1', 'admin', 'Login', '2017-06-13 08:59:09'),
(71, '::1', 'admin', 'Tambah nama alat Printer', '2017-06-13 09:11:53'),
(72, '::1', 'admin', 'Tambah nama alat AccesPoint', '2017-06-13 09:12:04'),
(73, '::1', 'admin', 'Edit Acces Point', '2017-06-13 09:12:13'),
(74, '::1', 'admin', 'Tambah nama alat ss', '2017-06-13 09:12:44'),
(75, '::1', 'admin', 'Tambah nama alat Kantor STAR', '2017-06-13 09:20:29'),
(76, '::1', 'admin', 'Tambah nama alat Kantor SBAMM', '2017-06-13 09:20:39'),
(77, '::1', 'admin', 'Edit Kantor SBAM', '2017-06-13 09:21:19'),
(78, '::1', 'admin', 'Tambah nama alat Kantor SKRM', '2017-06-13 09:21:27'),
(79, '::1', 'admin', 'Tambah nama alat Kantor SBKL', '2017-06-13 09:21:49'),
(80, '::1', 'admin', 'Tambah nama alat Kantor SJMB', '2017-06-13 09:22:10'),
(81, '::1', 'admin', 'Tambah nama alat Kantor SOMB', '2017-06-13 09:26:57'),
(82, '::1', 'admin', 'Tambah nama alat Kantor SBKT', '2017-06-13 09:29:03'),
(83, '::1', 'admin', 'Tambah nama alat Kantor STIR', '2017-06-13 09:29:12'),
(84, '::1', 'admin', 'Tambah nama alat Kantor SBDL', '2017-06-13 09:29:48'),
(85, '::1', 'admin', 'Tambah nama alat Kantor SBDL', '2017-06-13 09:31:35'),
(86, '::1', 'admin', 'Hapus Kantor SBDL', '2017-06-13 09:33:47'),
(87, '::1', 'admin', 'Tambah nama alat PLTU Tarahan', '2017-06-13 09:46:59'),
(88, '::1', 'admin', 'Tambah nama alat PLTU Sebalang', '2017-06-13 09:48:45'),
(89, '::1', 'admin', 'Tambah nama alat PLTD/G Tarahan', '2017-06-13 09:49:02'),
(90, '::1', 'admin', 'Tambah nama alat PLTD Teluk Betung', '2017-06-13 09:49:11'),
(91, '::1', 'admin', 'Tambah nama alat PLTD Tegineneng', '2017-06-13 09:49:24'),
(92, '::1', 'admin', 'Tambah nama alat PLTA Besai', '2017-06-13 09:49:31'),
(93, '::1', 'admin', 'Tambah nama alat PLTA Batutegi', '2017-06-13 09:49:43'),
(94, '::1', 'admin', 'Tambah nama alat PLTP Ulubelu', '2017-06-13 09:50:03'),
(95, '::1', 'admin', 'Tambah nama alat PLTU Bukit Asam', '2017-06-13 09:50:16'),
(96, '::1', 'admin', 'Tambah nama alat PLTA Musi', '2017-06-13 09:50:23'),
(97, '::1', 'admin', 'Tambah nama alat PLTA Tes', '2017-06-13 09:50:27'),
(98, '::1', 'admin', 'Tambah nama alat PLTA Maninjau', '2017-06-13 09:50:33'),
(99, '::1', 'admin', 'Tambah nama alat PLTA Singkarak', '2017-06-13 09:50:43'),
(100, '::1', 'admin', 'Tambah nama alat PLTA Batang Agam', '2017-06-13 09:50:48'),
(101, '::1', 'admin', 'Tambah nama alat PLTU Teluk Sirih', '2017-06-13 09:51:00'),
(102, '::1', 'admin', 'Tambah nama alat PLTU Ombilin', '2017-06-13 09:51:09'),
(103, '::1', 'admin', 'Tambah nama alat PLTD Pauhlimo', '2017-06-13 09:51:24'),
(104, '::1', 'admin', 'Tambah nama alat PLTMG Sei Gelam', '2017-06-13 09:51:32'),
(105, '::1', 'admin', 'Tambah nama alat PLTG Batanghari', '2017-06-13 09:51:44'),
(106, '::1', 'admin', 'Tambah nama alat PLTD Payo Selincah', '2017-06-13 09:52:00'),
(107, '::1', 'admin', 'Tambah nama alat PLTGU Keramasan', '2017-06-13 09:52:07'),
(108, '::1', 'admin', 'Tambah nama alat PLTGU Indralaya', '2017-06-13 09:52:16'),
(109, '::1', 'admin', 'Tambah nama alat PLTG Merah Mata', '2017-06-13 09:52:29'),
(110, '::1', 'admin', 'Tambah nama alat PLTG Jakabaring', '2017-06-13 09:52:38'),
(111, '::1', 'admin', 'Tambah nama alat PLTG Talang Duku', '2017-06-13 09:52:53'),
(112, '::1', 'admin', 'Tambah nama alat PC', '2017-06-13 09:53:01'),
(113, '::1', 'admin', 'Tambah nama alat Notebook / Laptop', '2017-06-13 09:53:10'),
(114, '::1', 'admin', 'Tambah nama alat Printer', '2017-06-13 09:53:14'),
(115, '::1', 'admin', 'Tambah nama alat Access Point', '2017-06-13 09:53:19'),
(116, '::1', 'admin', 'Tambah nama alat Switch Hub', '2017-06-13 09:53:24'),
(117, '::1', 'admin', 'Tambah nama alat Router', '2017-06-13 09:53:27'),
(118, '::1', 'admin', 'Tambah nama alat NAS', '2017-06-13 09:53:30'),
(119, '::1', 'admin', 'Tambah nama alat Scanner', '2017-06-13 09:53:34'),
(120, '::1', 'admin', 'Tambah nama alat Smartphone', '2017-06-13 09:53:42'),
(121, '::1', 'admin', 'Tambah nama alat Projector', '2017-06-13 09:53:47'),
(122, '::1', 'admin', 'Tambah nama alat Camera', '2017-06-13 09:53:53'),
(123, '::1', 'admin', 'Tambah nama alat VoIP', '2017-06-13 09:54:46'),
(124, '::1', 'admin', 'Tambah nama alat Teleconference', '2017-06-13 09:54:55'),
(125, '::1', 'admin', 'Logout', '2017-06-13 09:55:28'),
(126, '::1', '&#039; OR 1=1 OR &#039;', 'Login - gagal', '2017-06-13 09:57:52'),
(127, '::1', 'admin', 'Login', '2017-06-13 10:00:44'),
(128, '::1', 'admin', 'Logout', '2017-06-13 10:25:30'),
(129, '::1', 'user1', 'Login', '2017-06-13 10:25:39'),
(130, '::1', 'user1', 'Logout', '2017-06-13 10:31:55'),
(131, '::1', 'admin', 'Login', '2017-06-13 10:32:00'),
(132, '::1', 'admin', 'Reset 2', '2017-06-13 10:57:22'),
(133, '::1', 'adminstar', 'Logout', '2017-06-13 11:01:42'),
(134, '::1', 'admin', 'Edit admin - ID 1', '2017-06-13 11:30:00'),
(135, '::1', 'admin', 'Reset root - ID 1', '2017-06-13 11:36:09'),
(136, '::1', 'admin', 'Logout', '2017-06-13 11:36:13'),
(137, '::1', 'admin', 'Login - gagal', '2017-06-13 11:36:17'),
(138, '::1', 'admin', 'Login', '2017-06-13 11:36:23'),
(139, '::1', 'admin', 'Reset root - ID 1', '2017-06-13 11:36:30'),
(140, '::1', 'admin', 'Logout', '2017-06-13 11:37:11'),
(141, '::1', 'userr1', 'Login - gagal', '2017-06-13 11:37:18'),
(142, '::1', 'user1', 'Login', '2017-06-13 11:37:23'),
(143, '::1', 'user1', 'Edit user11 - ID 2', '2017-06-13 11:37:44'),
(144, '::1', 'user1', 'Edit user1 - ID 2', '2017-06-13 11:37:51'),
(145, '::1', 'user1', 'Reset root - ID 2', '2017-06-13 11:37:55'),
(146, '::1', 'user1', 'Logout', '2017-06-13 11:37:57'),
(147, '::1', 'user1', 'Login', '2017-06-13 11:38:03'),
(148, '::1', 'user1', 'Reset root - ID 2', '2017-06-13 11:38:09'),
(149, '::1', 'user1', 'Logout', '2017-06-13 11:42:34'),
(150, '::1', 'admin', 'Login - gagal', '2017-06-13 11:42:40'),
(151, '::1', 'admin', 'Login - gagal', '2017-06-13 11:42:45'),
(152, '::1', 'admin', 'Login', '2017-06-13 11:42:52'),
(153, '::1', 'admin', 'Hapus Device', '2017-06-13 11:45:37'),
(154, '::1', 'admin', 'Hapus Device', '2017-06-13 11:45:40'),
(155, '::1', 'admin', 'Hapus Device', '2017-06-13 11:45:52'),
(156, '::1', 'admin', 'Edit Device', '2017-06-13 11:46:05'),
(157, '::1', 'admin', 'Edit Device', '2017-06-13 11:46:34'),
(158, '::1', 'admin', 'Tambah device dengan MAC 88:77:33:33', '2017-06-13 11:49:31'),
(159, '::1', 'admin', 'Logout', '2017-06-13 11:54:46'),
(160, '::1', 'admin', 'Login', '2017-06-13 12:51:13'),
(161, '::1', 'admin', 'Logout', '2017-06-13 13:45:02'),
(162, '::1', '1', 'Login - gagal', '2017-06-13 13:45:14'),
(163, '::1', 'admin', 'Login - gagal', '2017-06-13 13:45:21'),
(164, '::1', 'admin', 'Login', '2017-06-13 13:45:26'),
(165, '::1', 'admin', 'Login - gagal', '2017-06-14 11:12:37'),
(166, '::1', 'admin', 'Login', '2017-06-14 11:12:43'),
(167, '::1', 'admin', 'Tambah device dengan MAC aa', '2017-06-14 11:35:54'),
(168, '::1', 'admin', 'Tambah device dengan MAC sss', '2017-06-14 11:36:00'),
(169, '::1', 'admin', 'Tambah device dengan MAC dsdsds', '2017-06-14 11:36:07'),
(170, '::1', 'admin', 'Tambah device dengan MAC dsds', '2017-06-14 11:36:14'),
(171, '::1', 'admin', 'Tambah device dengan MAC dsdsd', '2017-06-14 11:36:20'),
(172, '::1', 'admin', 'Hapus Device', '2017-06-14 13:56:38'),
(173, '::1', 'admin', 'Hapus Device', '2017-06-14 13:56:41'),
(174, '::1', 'admin', 'Hapus Device', '2017-06-14 13:56:44'),
(175, '::1', 'admin', 'Hapus Device', '2017-06-14 13:56:46'),
(176, '::1', 'admin', 'Hapus Device', '2017-06-14 13:56:48'),
(177, '::1', 'admin', 'Hapus Device', '2017-06-14 13:56:49'),
(178, '::1', 'admin', 'Hapus Device', '2017-06-14 13:56:51'),
(179, '::1', 'admin', 'Hapus Device', '2017-06-14 13:56:54'),
(180, '::1', 'admin', 'Tambah device dengan MAC 324', '2017-06-14 14:15:33'),
(181, '::1', 'admin', 'Edit Device', '2017-06-14 14:15:46'),
(182, '::1', 'admin', 'Edit Device dengan MAC 32444', '2017-06-14 14:16:21'),
(183, '::1', 'admin', 'Edit Device dengan MAC 324443 dan ID 1', '2017-06-14 14:16:50'),
(184, '10.27.110.44', 'user1', 'Login - gagal', '2017-06-14 15:22:22'),
(185, '10.27.110.44', 'user1', 'Login', '2017-06-14 15:22:34'),
(186, '::1', 'admin', 'Login - gagal', '2017-06-15 09:20:31'),
(187, '::1', 'admin', 'Login', '2017-06-15 09:20:38'),
(188, '::1', 'admin', 'Logout', '2017-06-15 09:21:58'),
(189, '::1', 'admin', 'Login - gagal', '2017-06-15 10:06:03'),
(190, '::1', 'admin', 'Login', '2017-06-15 10:06:07'),
(191, '::1', 'admin', 'Logout', '2017-06-15 10:07:53'),
(192, '::1', 'admin', 'Login - gagal', '2017-06-15 14:08:47'),
(193, '::1', 'admin', 'Login - gagal', '2017-06-16 09:02:44'),
(194, '::1', 'admin', 'Login', '2017-06-16 09:02:53'),
(195, '::1', 'admin', 'Login - gagal', '2017-06-16 13:39:19'),
(196, '::1', 'admin', 'Login', '2017-06-16 13:39:24'),
(197, '::1', 'admin', 'Login', '2017-06-19 08:00:55'),
(198, '::1', 'admin', 'Tambah device dengan MAC 9C:AE:D3:2F:CC:FF', '2017-06-19 08:01:05'),
(199, '::1', 'admin', 'Tambah device dengan MAC 9C:AE:D3:2F:CC:FF', '2017-06-19 08:05:18'),
(200, '::1', 'admin', 'Tambah device dengan MAC 9C:AE:D3:2F:CC:FF', '2017-06-19 08:05:37'),
(201, '::1', 'admin', 'Hapus Device', '2017-06-19 08:06:41'),
(202, '::1', 'admin', 'Hapus Device', '2017-06-19 08:06:44'),
(203, '::1', 'admin', 'Hapus Device', '2017-06-19 08:06:46'),
(204, '::1', 'admin', 'Tambah device dengan MAC 	9C:AE:D3:2F:CC:FF', '2017-06-19 08:06:57'),
(205, '::1', 'admin', 'Tambah device dengan MAC 9C:AE:D3:2F:CC:FF', '2017-06-19 08:08:31'),
(206, '::1', 'admin', 'Hapus Device', '2017-06-19 08:08:40'),
(207, '::1', 'admin', 'Hapus Device', '2017-06-19 08:08:43'),
(208, '::1', 'admin', 'Tambah device dengan MAC 	9C:AE:D3:2F:CC:FF', '2017-06-19 08:09:18'),
(209, '::1', 'admin', 'Hapus Device', '2017-06-19 08:09:47'),
(210, '::1', 'asd', 'Login - gagal', '2017-06-22 11:37:57'),
(211, '::1', 'admin', 'Login', '2017-06-22 11:38:02'),
(212, '::1', 'admin', 'Logout', '2017-06-22 11:38:05');

-- --------------------------------------------------------

--
-- Table structure for table `tblkit_lokasi`
--

CREATE TABLE `tblkit_lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblkit_lokasi`
--

INSERT INTO `tblkit_lokasi` (`id_lokasi`, `nama_lokasi`) VALUES
(1, 'Kantor KITSBS'),
(2, 'Kantor SBLG'),
(3, 'Kantor STAR'),
(4, 'Kantor SBAM'),
(5, 'Kantor SKRM'),
(6, 'Kantor SBKL'),
(7, 'Kantor SJMB'),
(8, 'Kantor SOMB'),
(9, 'Kantor SBKT'),
(10, 'Kantor STIR'),
(11, 'Kantor SBDL'),
(12, 'PLTU Tarahan'),
(13, 'PLTU Sebalang'),
(14, 'PLTD/G Tarahan'),
(15, 'PLTD Teluk Betung'),
(16, 'PLTD Tegineneng'),
(17, 'PLTA Besai'),
(18, 'PLTA Batutegi'),
(19, 'PLTP Ulubelu'),
(20, 'PLTU Bukit Asam'),
(21, 'PLTA Musi'),
(22, 'PLTA Tes'),
(23, 'PLTA Maninjau'),
(24, 'PLTA Singkarak'),
(25, 'PLTA Batang Agam'),
(26, 'PLTU Teluk Sirih'),
(27, 'PLTU Ombilin'),
(28, 'PLTD Pauhlimo'),
(29, 'PLTMG Sei Gelam'),
(30, 'PLTG Batanghari'),
(31, 'PLTD Payo Selincah'),
(32, 'PLTGU Keramasan'),
(33, 'PLTGU Indralaya'),
(34, 'PLTG Merah Mata'),
(35, 'PLTG Jakabaring'),
(36, 'PLTG Talang Duku');

-- --------------------------------------------------------

--
-- Table structure for table `tblkit_nama_alat`
--

CREATE TABLE `tblkit_nama_alat` (
  `id_nama_alat` int(11) NOT NULL,
  `nama_alat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblkit_nama_alat`
--

INSERT INTO `tblkit_nama_alat` (`id_nama_alat`, `nama_alat`) VALUES
(1, 'PC'),
(2, 'Notebook / Laptop'),
(3, 'Printer'),
(4, 'Access Point'),
(5, 'Switch Hub'),
(6, 'Router'),
(7, 'NAS'),
(8, 'Scanner'),
(9, 'Smartphone'),
(10, 'Projector'),
(11, 'Camera'),
(12, 'VoIP'),
(13, 'Teleconference');

-- --------------------------------------------------------

--
-- Table structure for table `tblkit_user`
--

CREATE TABLE `tblkit_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(3) NOT NULL,
  `sessionID` varchar(30) NOT NULL,
  `lastLogin` datetime NOT NULL,
  `level` int(1) NOT NULL COMMENT '1 = admin, 2 = user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblkit_user`
--

INSERT INTO `tblkit_user` (`id_user`, `username`, `password`, `nama`, `email`, `status`, `sessionID`, `lastLogin`, `level`) VALUES
(1, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 'IT KITSBS', 'admin@mail.com', 'off', 'n8oierhlb7e9anlj8g25q6l895', '2017-06-22 11:38:02', 1),
(2, 'user1', 'c4ca4238a0b923820dcc509a6f75849b', 'User-1', 'user1@mail.com', 'on', 'mnu4jbqbu9ei8m5ml88fff44r2', '2017-06-14 15:22:34', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblkit_alat`
--
ALTER TABLE `tblkit_alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `tblkit_log`
--
ALTER TABLE `tblkit_log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `tblkit_lokasi`
--
ALTER TABLE `tblkit_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `tblkit_nama_alat`
--
ALTER TABLE `tblkit_nama_alat`
  ADD PRIMARY KEY (`id_nama_alat`);

--
-- Indexes for table `tblkit_user`
--
ALTER TABLE `tblkit_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblkit_alat`
--
ALTER TABLE `tblkit_alat`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tblkit_log`
--
ALTER TABLE `tblkit_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;
--
-- AUTO_INCREMENT for table `tblkit_lokasi`
--
ALTER TABLE `tblkit_lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tblkit_nama_alat`
--
ALTER TABLE `tblkit_nama_alat`
  MODIFY `id_nama_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tblkit_user`
--
ALTER TABLE `tblkit_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
