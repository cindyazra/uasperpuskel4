-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 04:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(255) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `id_prodi` int(100) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nim`, `nama_anggota`, `id_prodi`, `hp`, `created_at`, `updated_at`) VALUES
(1, '211001', 'Serli', 1, '085734960432', '2023-06-19 04:19:32', '2023-06-17 07:52:07'),
(2, '211002', 'Susi', 1, '086534976547', '2023-06-19 04:19:32', '2023-06-17 07:52:15'),
(3, '211003', 'Cindy', 3, '085498372609', '2023-06-19 04:19:32', '2023-06-17 07:52:24'),
(4, '211004', 'Jamal', 10, '085409587321', '2023-06-19 04:19:32', '2023-06-17 07:52:34'),
(5, '211005', 'Rusli', 20, '076589761235', '2023-06-19 04:19:32', '2023-06-17 07:52:41'),
(6, '211006', 'Adam Hidayat', 5, '076589764325', '2023-06-19 04:19:32', '2023-06-17 07:52:51'),
(7, '211007', 'Panji', 6, '076534965324', '2023-06-19 04:19:32', '2023-06-17 07:52:57'),
(8, '211008', 'Miranda', 7, '076589761235', '2023-06-19 04:19:32', '2023-06-17 07:53:03'),
(9, '211009', 'Rosmania', 2, '086534592134', '2023-06-19 04:19:32', '2023-06-17 07:53:10'),
(10, '2110010', 'Udin', 3, '081374628361', '2023-06-19 04:19:32', '2023-06-17 09:02:31'),
(11, '2110011', 'Joko', 5, '081374628325', '2023-06-19 04:19:32', '2023-06-17 09:02:48'),
(12, '2110012', 'Megachan', 11, '081276328902', '2023-06-19 04:19:32', '2023-06-17 09:03:47'),
(13, '2110013', 'Bowo', 12, '081276322233', '2023-06-19 04:19:32', '2023-06-17 09:04:38'),
(14, '2110014', 'Jarwo', 15, '083576328932', '2023-06-19 04:19:32', '2023-06-17 09:05:28'),
(15, '2110015', 'Puan', 3, '081276328902', '2023-06-19 04:19:32', '2023-06-17 09:07:40'),
(16, '2110016', 'Yanto', 19, '083576328932', '2023-06-19 04:19:32', '2023-06-17 09:08:11'),
(17, '2110017', 'Hanzo', 18, '081276328902', '2023-06-19 04:19:32', '2023-06-17 09:08:40'),
(18, '2110018', 'Novaria', 8, '081276322233', '2023-06-19 04:19:32', '2023-06-17 09:09:28'),
(19, '2110019', 'Siti', 6, '081374628325', '2023-06-19 04:19:32', '2023-06-17 09:09:53'),
(20, '2110020', 'Nabila', 4, '081276322233', '2023-06-19 04:19:32', '2023-06-17 09:10:18'),
(21, '2110021', 'Amira', 13, '081374628361', '2023-06-19 04:19:32', '2023-06-17 09:11:34'),
(22, '2110022', 'Maimunah', 11, '081276328902', '2023-06-19 04:19:32', '2023-06-17 09:12:08'),
(23, '2110023', 'Riki', 10, '081276322212', '2023-06-19 04:19:32', '2023-06-17 09:12:41'),
(24, '2110024', 'Rozi', 17, '081374628325', '2023-06-19 04:19:32', '2023-06-17 09:13:16'),
(25, '2110025', 'Qudrat', 2, '081276322233', '2023-06-19 04:19:32', '2023-06-17 09:13:48'),
(26, '2110026', 'Saiful', 4, '081374628361', '2023-06-19 04:20:02', '2023-06-17 09:14:27'),
(27, '2110027', 'Nanang', 15, '081276328902', '2023-06-19 04:20:02', '2023-06-17 09:14:49'),
(28, '2110028', 'Refaldi', 19, '081374628325', '2023-06-19 04:20:02', '2023-06-17 09:15:21'),
(29, '2110029', 'Jul', 20, '083576328932', '2023-06-19 04:20:02', '2023-06-17 09:15:50'),
(30, '2110030', 'Kipli', 14, '081374628361', '2023-06-19 04:20:02', '2023-06-17 09:16:20'),
(34, '12340', 'Nasrun', 33, '034943', '2023-06-23 20:30:57', '2023-06-24 04:30:57');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(255) NOT NULL,
  `kode_buku` varchar(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `kode_buku`, `judul`, `pengarang`, `kategori`, `created_at`, `updated_at`) VALUES
(1, '1001', 'Permata', 'Susianti', 'Romance', '2023-05-11 08:26:52', '2023-05-11 10:25:38'),
(2, '1002', 'Pencari Matahari', 'Hartanto', 'Romance', '2023-05-11 08:26:52', '2023-05-11 10:25:38'),
(3, '1003', 'Teknologi Mesin', 'Supratman, S.T', 'Pengetahuan', '2023-05-25 05:50:03', '2023-05-25 07:47:17'),
(4, '1004', 'Laravel 7', 'Arhan', 'Pengetahuan', '2023-05-25 05:50:03', '2023-05-25 07:47:17'),
(5, '1005', 'Flora & Fauna', 'Mentari', 'Alam', '2023-06-09 03:17:10', '2023-06-09 11:17:10'),
(6, '1006', 'Tutorial Cepat Kaya', 'Mariana Dewi', 'Bisnis', '2023-06-15 12:13:43', '2023-06-15 12:13:43'),
(7, '1007', 'Pusaran Waktu', 'Rendra Andika', 'Fantasi', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(8, '1008', 'Mimpi-mimpi di Antara Bintang', 'Amanda Pratiwi', 'Fiksi ilmiah', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(9, '1009', 'Rahasia di Balik Pintu Kuno', 'Andre Setiawan', 'Misteri', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(10, '1010', 'Startup yang Efisien', 'Eric Ries', 'Bisnis', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(11, '1011', 'Mencari Tujuan Hidup', 'Viktor E. Franki', 'Psikologi', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(12, '1012', 'Rahasia Bintang', 'Dee Lestari', 'Fantasi', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(13, '1013', 'Sang Pemimpi', 'Andrea', 'Fiksi', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(14, '1014', 'Bintang', 'Tere Liye', 'Fiksi', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(15, '1015', 'Sang Alkemis', 'Paulo Coelho', 'Filsafat', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(16, '1016', 'Cinta Dalam Gelas', 'Andrea Hirata', 'Romance', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(17, '1017', 'Belajar Pemrograman Python', 'Zainal A. Hasibuan', 'Pengetahuan', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(18, '1018', 'Data Science untuk Pemula dengan Python', 'Hilman Fajriansyah', 'Pengetahuan', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(19, '1019', 'Negeri 5 Menara', 'Ahmad Fuadi', 'Fiksi', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(20, '1020', 'Perahu Kertas', 'Dee Lestari', 'Romance', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(21, '1021', 'Garis Waktu', 'Fiersa Besari', 'Romance', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(22, '1022', 'Logika Pemrograman Java', 'Abdul Kadir', 'Pengetahuan', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(23, '1023', 'Silent Spring', 'Rachel Carson', 'Alam', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(24, '1024', 'PHP and MYSQL:Membangun Aplikasi Web Interaktif', 'Maya Lestari', 'Pengetahuan', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(25, '1025', 'Ruby on Rails:Pengantar Pemrograman Web Modern', 'Dian Fitriani', 'Pengetahuan', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(26, '1026', 'Swift Programming:Pengembangan Aplikasi IOS dengan Swift', 'Farhan Malik', 'Pengetahuan', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(27, '1027', 'The Chronicles of Narnia', 'C.S. Lewis', 'Petualangan', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(28, '1028', 'Treasure Island', 'Robert Louis Stevenson', 'Petualangan', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(29, '1029', 'The Wheel of time', 'Robert Jordan', 'Fantasi', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(30, '1030', 'Laut Bercerita', 'Leila S. Chudori', 'Fiksi', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(31, '1031', 'Ronggeng Dukuh Paruk', 'Ahmad Tohari', 'Fiksi', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(32, '1032', 'Satu Tahun Bintang Jatuh', 'Gita Savitri Devi', 'Aksi', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(33, '1033', 'Pemrograman Berorientasi Objek dengan Java', 'Rinaldi Munir', 'Pengetahuan', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(34, '1034', 'Pemrograman Python untuk Ilmu Data', 'Alfi Rahmatika', 'Pengetahuan', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(35, '1035', 'Belajar Pemrograman C++ dengan Mudah', 'Eko Kurniawan Khannedy', 'Pengetahuan', '2023-06-17 04:08:05', '2023-06-17 05:11:49'),
(36, '1036', 'Pemrograman Android untuk Pemula', 'Aryo Prakarsa', 'Pengetahuan', '2023-06-17 04:08:05', '2023-06-17 05:11:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` int(30) NOT NULL,
  `tanggalpinjam` date NOT NULL,
  `id_petugas` int(30) NOT NULL,
  `id_anggota` int(255) NOT NULL,
  `id_buku` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `tanggalpinjam`, `id_petugas`, `id_anggota`, `id_buku`, `created_at`, `updated_at`) VALUES
(3, '2023-06-01', 3, 2, 1, '2023-06-18 00:43:51', '2023-06-18 02:38:18'),
(4, '2023-06-07', 3, 3, 5, '2023-06-18 00:43:51', '2023-06-18 02:38:18'),
(7, '2023-06-05', 2, 4, 28, '2023-06-18 00:50:56', '2023-06-18 02:44:38'),
(9, '2023-06-02', 1, 5, 22, '2023-06-20 10:27:27', '2023-06-20 10:27:27'),
(10, '2023-06-03', 1, 6, 27, '2023-06-20 10:27:39', '2023-06-20 10:27:39'),
(11, '2023-06-04', 1, 6, 17, '2023-06-18 10:29:46', '2023-06-18 02:44:38'),
(12, '2023-06-06', 2, 6, 14, '2023-06-18 10:30:10', '2023-06-18 02:44:38'),
(13, '2023-06-01', 3, 7, 11, '2023-06-20 10:28:21', '2023-06-20 10:28:21'),
(14, '2023-06-02', 3, 7, 19, '2023-06-18 10:30:20', '2023-06-18 02:44:38'),
(15, '2023-06-08', 3, 7, 29, '2023-06-20 10:28:28', '2023-06-20 10:28:28'),
(16, '2023-06-03', 2, 8, 15, '2023-06-20 10:28:37', '2023-06-20 10:28:37'),
(17, '2023-06-06', 1, 8, 4, '2023-06-20 10:28:45', '2023-06-20 10:28:45'),
(18, '2023-05-25', 1, 9, 22, '2023-06-18 10:37:01', '2023-06-18 02:51:20'),
(19, '2023-05-30', 1, 9, 16, '2023-06-18 10:37:01', '2023-06-18 02:51:20'),
(20, '2023-06-02', 2, 10, 20, '2023-06-18 10:37:01', '2023-06-18 02:51:20'),
(21, '2023-04-11', 2, 10, 32, '2023-06-18 10:37:01', '2023-06-18 02:51:20'),
(22, '2023-05-18', 2, 10, 9, '2023-06-18 00:59:10', '2023-06-18 02:51:20'),
(23, '2023-05-02', 3, 10, 17, '2023-06-18 10:37:01', '2023-06-18 02:51:20'),
(24, '2023-05-04', 3, 10, 25, '2023-06-18 10:37:01', '2023-06-18 02:51:20'),
(25, '2023-05-08', 2, 11, 18, '2023-06-20 10:28:58', '2023-06-20 10:28:58'),
(26, '2023-05-10', 2, 11, 23, '2023-06-18 10:39:33', '2023-06-18 02:51:20'),
(27, '2023-05-09', 2, 12, 9, '2023-06-18 10:39:33', '2023-06-18 02:51:20'),
(28, '2023-05-10', 1, 12, 15, '2023-06-18 10:39:33', '2023-06-18 02:51:20'),
(29, '2023-05-18', 3, 11, 18, '2023-06-18 10:39:33', '2023-06-18 02:51:20'),
(30, '2023-05-18', 1, 12, 18, '2023-06-20 10:29:08', '2023-06-20 10:29:08'),
(31, '2023-05-10', 3, 11, 19, '2023-06-20 10:29:16', '2023-06-20 10:29:16'),
(32, '2023-06-05', 3, 14, 18, '2023-06-18 10:39:33', '2023-06-18 03:00:00'),
(33, '2023-05-12', 2, 15, 19, '2023-06-18 10:39:33', '2023-06-18 03:00:00'),
(34, '2023-06-05', 2, 16, 22, '2023-06-18 01:04:16', '2023-06-18 03:00:00'),
(35, '2023-05-10', 3, 15, 18, '2023-06-18 10:39:33', '2023-06-18 03:00:00'),
(36, '2023-05-11', 1, 22, 13, '2023-06-18 10:39:33', '2023-06-18 03:00:00'),
(37, '2023-06-12', 1, 17, 26, '2023-06-20 10:29:27', '2023-06-20 10:29:27'),
(38, '2023-06-09', 3, 17, 27, '2023-06-20 10:29:34', '2023-06-20 10:29:34'),
(39, '2023-06-07', 2, 18, 28, '2023-06-20 10:29:45', '2023-06-20 10:29:45'),
(40, '2023-06-17', 2, 18, 29, '2023-06-18 10:39:33', '2023-06-18 03:00:00'),
(41, '2023-05-11', 1, 20, 11, '2023-06-18 10:39:33', '2023-06-18 03:04:41'),
(42, '2023-06-06', 2, 19, 27, '2023-06-20 10:29:56', '2023-06-20 10:29:56'),
(43, '2023-06-10', 3, 19, 20, '2023-06-20 10:30:03', '2023-06-20 10:30:03'),
(44, '2023-06-05', 3, 20, 26, '2023-06-18 10:39:33', '2023-06-18 03:04:41'),
(45, '2023-06-03', 1, 18, 6, '2023-06-20 10:30:11', '2023-06-20 10:30:11'),
(46, '2023-06-08', 3, 17, 19, '2023-06-18 10:39:33', '2023-06-18 03:04:41'),
(47, '2023-06-10', 2, 19, 20, '2023-06-18 10:39:33', '2023-06-18 03:04:41'),
(48, '2023-05-12', 1, 21, 27, '2023-06-18 10:39:33', '2023-06-18 03:04:41'),
(49, '2023-05-19', 1, 21, 29, '2023-06-18 10:39:33', '2023-06-18 03:04:41'),
(50, '2023-06-10', 2, 21, 18, '2023-06-18 10:39:33', '2023-06-18 03:04:41'),
(51, '2023-05-13', 2, 18, 18, '2023-06-20 10:30:24', '2023-06-20 10:30:24'),
(52, '2023-05-11', 2, 22, 10, '2023-06-20 10:30:30', '2023-06-20 10:30:30'),
(53, '2023-06-06', 1, 22, 29, '2023-06-18 10:41:00', '2023-06-18 03:19:43'),
(54, '2023-05-20', 2, 25, 19, '2023-06-18 10:41:00', '2023-06-18 03:19:43'),
(55, '2023-05-20', 3, 20, 27, '2023-06-18 10:41:00', '2023-06-18 03:19:43'),
(56, '2023-05-20', 3, 20, 27, '2023-06-18 10:41:00', '2023-06-18 03:19:43'),
(57, '2023-05-20', 3, 23, 19, '2023-06-18 10:41:00', '2023-06-18 03:19:43'),
(58, '2023-05-13', 2, 24, 18, '2023-06-18 10:41:00', '2023-06-18 03:19:43'),
(59, '2023-05-13', 2, 20, 29, '2023-06-18 10:41:00', '2023-06-18 03:19:43'),
(60, '2023-06-09', 1, 18, 34, '2023-06-18 10:41:00', '2023-06-18 03:19:43'),
(61, '2023-05-20', 1, 24, 17, '2023-06-18 10:41:00', '2023-06-18 03:24:22'),
(62, '2023-06-02', 3, 25, 24, '2023-06-18 10:41:00', '2023-06-18 03:24:22'),
(63, '2023-06-10', 2, 19, 22, '2023-06-20 10:30:43', '2023-06-20 10:30:43'),
(64, '2023-05-13', 1, 18, 35, '2023-06-20 10:30:53', '2023-06-20 10:30:53'),
(65, '2023-05-13', 3, 27, 33, '2023-06-20 10:30:59', '2023-06-20 10:30:59'),
(66, '2023-05-20', 2, 25, 32, '2023-06-18 10:41:00', '2023-06-18 03:24:22'),
(67, '2023-05-25', 2, 23, 9, '2023-06-18 10:41:00', '2023-06-18 03:24:22'),
(68, '2023-05-13', 3, 25, 30, '2023-06-20 10:36:58', '2023-06-18 03:24:22'),
(69, '2023-05-20', 1, 1, 19, '2023-06-20 10:36:58', '2023-06-18 03:24:22'),
(70, '2023-05-20', 1, 30, 18, '2023-06-18 10:41:00', '2023-06-18 03:24:22'),
(71, '2023-06-10', 3, 28, 22, '2023-06-18 10:41:00', '2023-06-18 03:27:53'),
(72, '2023-05-19', 3, 27, 19, '2023-06-20 10:37:35', '2023-06-18 03:27:53'),
(73, '2023-05-20', 1, 22, 30, '2023-06-20 10:36:58', '2023-06-18 03:27:53'),
(74, '2023-05-19', 2, 26, 10, '2023-06-20 10:36:58', '2023-06-18 03:27:53'),
(75, '2023-05-19', 3, 28, 19, '2023-06-20 10:36:58', '2023-06-18 03:27:53'),
(76, '2023-05-20', 3, 12, 17, '2023-06-18 10:49:21', '2023-06-18 03:27:53'),
(77, '2023-06-03', 3, 27, 10, '2023-06-18 10:42:35', '2023-06-18 03:27:53'),
(78, '2023-05-20', 3, 29, 34, '2023-06-20 10:36:13', '2023-06-18 03:27:53'),
(79, '2023-06-05', 2, 30, 8, '2023-06-20 10:37:49', '2023-06-18 03:27:53'),
(80, '2023-05-20', 2, 17, 20, '2023-06-20 10:36:13', '2023-06-18 03:27:53'),
(81, '2023-06-09', 2, 22, 18, '2023-06-18 10:42:35', '2023-06-18 03:27:53'),
(82, '2023-05-20', 2, 26, 10, '2023-06-18 10:42:35', '2023-06-18 03:27:53'),
(83, '2023-05-20', 3, 26, 10, '2023-06-18 10:42:35', '2023-06-18 03:27:53'),
(84, '2023-06-10', 1, 29, 21, '2023-06-18 10:42:35', '2023-06-18 03:27:53'),
(85, '2023-05-13', 1, 27, 35, '2023-06-18 10:42:35', '2023-06-18 03:27:53'),
(86, '2023-05-13', 3, 21, 14, '2023-06-18 10:42:35', '2023-06-18 03:27:53'),
(87, '2023-06-10', 1, 28, 33, '2023-06-18 10:42:35', '2023-06-18 03:27:53'),
(88, '2023-05-20', 1, 18, 20, '2023-06-18 10:42:35', '2023-06-18 03:27:53'),
(89, '2023-06-09', 2, 28, 34, '2023-06-18 10:42:35', '2023-06-18 03:27:53'),
(90, '2023-05-13', 3, 19, 27, '2023-06-18 10:42:35', '2023-06-18 03:27:53'),
(91, '2023-06-03', 3, 28, 22, '2023-06-18 10:42:35', '2023-06-18 03:33:50'),
(92, '2023-06-07', 3, 25, 18, '2023-06-20 10:36:13', '2023-06-18 03:33:50'),
(93, '2023-06-10', 2, 28, 22, '2023-06-18 10:42:35', '2023-06-18 03:33:50'),
(94, '2023-06-15', 1, 18, 26, '2023-06-20 10:38:24', '2023-06-18 03:33:50'),
(95, '2023-05-20', 1, 28, 10, '2023-06-20 10:36:13', '2023-06-18 03:33:50'),
(96, '2023-05-13', 2, 29, 32, '2023-06-18 10:42:35', '2023-06-18 03:33:50'),
(97, '2023-05-19', 2, 27, 30, '2023-06-20 10:38:14', '2023-06-18 03:33:50'),
(98, '2023-05-13', 2, 29, 11, '2023-06-20 10:36:13', '2023-06-18 03:33:50'),
(99, '2023-06-09', 1, 22, 19, '2023-06-18 10:42:35', '2023-06-18 03:33:50'),
(100, '2023-06-03', 3, 19, 29, '2023-06-18 10:42:35', '2023-06-18 03:33:50'),
(101, '2023-06-13', 2, 27, 35, '2023-06-18 10:43:36', '2023-06-18 03:33:50'),
(102, '2023-05-20', 3, 27, 26, '2023-06-18 10:43:36', '2023-06-18 03:33:50'),
(103, '2023-06-10', 3, 30, 32, '2023-06-18 10:43:36', '2023-06-18 03:33:50'),
(104, '2023-05-20', 3, 27, 36, '2023-06-18 10:43:36', '2023-06-18 03:33:50'),
(105, '2023-05-20', 2, 22, 35, '2023-06-18 10:43:36', '2023-06-18 03:33:50'),
(106, '2023-05-20', 1, 27, 30, '2023-06-18 10:43:36', '2023-06-18 03:33:50'),
(107, '2023-05-20', 2, 27, 26, '2023-06-20 10:39:55', '2023-06-18 03:33:50'),
(108, '2023-05-20', 2, 30, 19, '2023-06-20 10:39:55', '2023-06-18 03:33:50'),
(109, '2023-06-05', 1, 28, 33, '2023-06-20 10:39:55', '2023-06-18 03:33:50'),
(110, '2023-06-17', 1, 29, 32, '2023-06-20 10:39:55', '2023-06-18 03:33:50'),
(111, '2023-06-03', 3, 22, 34, '2023-06-20 10:39:55', '2023-06-18 03:40:28'),
(112, '2023-05-13', 2, 27, 11, '2023-06-20 10:39:55', '2023-06-18 03:40:28'),
(113, '2023-06-12', 2, 24, 17, '2023-06-18 10:43:36', '2023-06-18 03:40:28'),
(114, '2023-06-09', 2, 30, 34, '2023-06-18 10:43:36', '2023-06-18 03:40:28'),
(115, '2023-06-13', 1, 4, 34, '2023-06-18 01:43:17', '2023-06-18 03:40:28'),
(116, '2023-06-17', 2, 2, 32, '2023-06-20 10:39:55', '2023-06-18 03:40:28'),
(117, '2023-06-17', 1, 1, 24, '2023-06-18 10:43:36', '2023-06-18 03:40:28'),
(118, '2023-06-14', 1, 4, 19, '2023-06-18 10:43:36', '2023-06-18 03:40:28'),
(119, '2023-06-06', 3, 5, 35, '2023-06-18 01:43:17', '2023-06-18 03:40:28'),
(120, '2023-06-09', 1, 1, 36, '2023-06-20 10:39:55', '2023-06-18 03:40:28'),
(123, '2023-06-24', 1, 29, 35, '2023-06-23 19:43:44', '2023-06-24 03:43:44'),
(124, '2023-06-24', 2, 27, 13, '2023-06-23 19:44:00', '2023-06-24 03:44:00'),
(125, '2023-06-24', 1, 25, 29, '2023-06-23 19:44:14', '2023-06-24 03:44:14'),
(126, '2023-06-24', 2, 26, 25, '2023-06-23 19:45:10', '2023-06-24 03:45:10'),
(127, '2023-06-24', 2, 8, 24, '2023-06-23 19:49:05', '2023-06-24 03:49:05'),
(128, '2023-06-24', 2, 22, 15, '2023-06-23 19:49:45', '2023-06-24 03:49:45'),
(129, '2023-06-24', 2, 28, 3, '2023-06-23 19:50:01', '2023-06-24 03:50:01'),
(130, '2023-06-24', 2, 25, 2, '2023-06-23 19:50:16', '2023-06-24 03:50:16');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_kembali` int(30) NOT NULL,
  `id_pinjam` int(30) NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `id_petugas` int(30) NOT NULL,
  `id_anggota` int(255) NOT NULL,
  `id_buku` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id_kembali`, `id_pinjam`, `tanggal_kembali`, `id_petugas`, `id_anggota`, `id_buku`, `created_at`, `updated_at`) VALUES
(1, 122, '2023-06-23', 3, 2, 11, '2023-06-22 19:59:58', '2023-06-22 19:59:58'),
(2, 5, '2023-06-24', 3, 4, 8, '2023-06-23 19:45:45', '2023-06-23 19:45:45'),
(3, 8, '2023-06-24', 2, 5, 30, '2023-06-23 19:45:53', '2023-06-23 19:45:53'),
(4, 2, '2023-06-24', 2, 3, 2, '2023-06-23 19:45:57', '2023-06-23 19:45:57'),
(5, 6, '2023-06-24', 1, 4, 12, '2023-06-23 19:46:03', '2023-06-23 19:46:03'),
(6, 1, '2023-06-24', 2, 1, 1, '2023-06-23 19:50:45', '2023-06-23 19:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(30) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `hp` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `hp`, `created_at`, `updated_at`) VALUES
(1, 'Syamsuddin', '0865490765943', '2023-05-11 08:38:47', '2023-05-11 10:38:26'),
(2, 'Putra', '085392059486', '2023-05-11 08:39:22', '2023-05-11 10:38:59'),
(3, 'Mira', '085609485736', '2023-05-25 05:52:03', '2023-05-25 07:51:24');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(100) NOT NULL,
  `nama_prodi` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `created_at`, `updated_at`) VALUES
(1, 'D3 Keperawatan', '2023-06-19 06:02:49', '2023-06-19 04:10:09'),
(2, 'D3 Kesehatan', '2023-06-19 06:02:49', '2023-06-19 04:10:09'),
(3, 'S1 Kesehatan Lingkungan', '2023-06-19 06:02:49', '2023-06-19 04:10:09'),
(4, 'S1 Kesehatan Masyarakat', '2023-06-19 06:02:49', '2023-06-19 04:10:09'),
(5, 'S1 Farmasi', '2023-06-19 06:02:49', '2023-06-19 04:10:09'),
(6, 'S1 Keperawatan', '2023-06-19 06:02:49', '2023-06-19 04:10:09'),
(7, 'S1 Teknik Informatika', '2023-06-19 06:02:49', '2023-06-19 04:10:09'),
(8, 'S1 Teknik Mesin', '2023-06-19 06:02:49', '2023-06-19 04:10:09'),
(9, 'S1 Teknik Sipil', '2023-06-19 06:02:49', '2023-06-19 04:10:09'),
(10, 'S1 Teknik Geologi', '2023-06-19 06:02:49', '2023-06-19 04:10:09'),
(11, 'S1 Psikologi', '2023-06-19 06:02:49', '2023-06-19 04:10:09'),
(12, 'S1 Hukum', '2023-06-19 06:02:49', '2023-06-19 04:10:09'),
(13, 'S1 Manajamen', '2023-06-19 06:02:49', '2023-06-19 04:10:09'),
(14, 'S1 Hubungan Internasional', '2023-06-19 06:02:49', '2023-06-19 04:10:09'),
(15, 'S1 Pendidikan Bahasa Inggris', '2023-06-19 06:02:49', '2023-06-19 04:10:09'),
(16, 'S1 Pendidikan Olahraga', '2023-06-19 06:02:49', '2023-06-19 04:10:09'),
(17, 'S1 Agribisnis', '2023-06-19 06:02:49', '2023-06-19 04:10:09'),
(18, 'S1 Agroteknologi', '2023-06-19 06:02:49', '2023-06-19 04:10:09'),
(19, 'S1 Bisnis Digital', '2023-06-19 06:02:49', '2023-06-19 04:10:09'),
(20, 'S1 Akuntansi', '2023-06-19 06:02:49', '2023-06-19 04:10:09'),
(21, 'S1 Ilmu Ekonomi', '2023-06-23 03:17:18', '2023-06-22 19:17:18'),
(22, 'S1 Sosiologi', '2023-06-23 03:17:55', '2023-06-22 19:17:55'),
(23, 'S1 Pendidikan Dokter', '2023-06-23 03:18:11', '2023-06-22 19:18:11'),
(24, 'S1 Ilmu Komputer', '2023-06-23 03:18:36', '2023-06-22 19:18:36'),
(25, 'S1 Teknik Industri', '2023-06-23 03:18:51', '2023-06-22 19:18:51'),
(26, 'S1 Teknik Elektro', '2023-06-23 03:19:11', '2023-06-22 19:19:11'),
(27, 'S1 Matematika', '2023-06-23 03:19:32', '2023-06-22 19:19:32'),
(28, 'S1 Kimia', '2023-06-23 03:19:40', '2023-06-22 19:19:40'),
(29, 'S1 Gizi Kesehatan', '2023-06-23 03:19:54', '2023-06-22 19:19:54'),
(30, 'S1 Ilmu Komunikasi', '2023-06-23 03:20:07', '2023-06-22 19:20:07'),
(33, 'S3 Hukum', '2023-06-24 04:30:32', '2023-06-23 20:30:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Mira', 'mira10@gmail.com', NULL, '$2y$10$l1pV8Mp5/biC7lo7uamaXuCr3V/ljt3D13Eu77bI9RFB8gnZJCTLO', NULL, '2023-06-22 05:03:30', '2023-06-22 05:03:30'),
(3, 'Putra', 'putra33@gmail.com', NULL, '$2y$10$/tsPN05zEuBsIRYRpeEycO6D6CtcL0G.e0m.soUPMv5oTlh6JyFbq', NULL, '2023-06-22 19:14:14', '2023-06-22 19:14:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `id_prodi` (`id_prodi`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `id_petugas` (`id_petugas`,`id_anggota`,`id_buku`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_kembali`),
  ADD KEY `id_pinjam` (`id_pinjam`,`id_petugas`,`id_anggota`,`id_buku`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_kembali` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengembalian_ibfk_2` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengembalian_ibfk_3` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
