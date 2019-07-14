-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 01:42 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `komunitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomer` char(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `jurusan`, `semester`, `status`, `nomer`, `created_at`, `updated_at`) VALUES
(1, 'Muzzaka', 'D3 Teknik Komputer', '4', 'Ketua', '08977234588', '2019-07-12 10:47:09', '2019-07-13 15:54:17'),
(2, 'Anisa Pandu', 'D4 Teknik Informatika', '4', 'Wakil', '123456789110', '2019-07-13 15:54:44', '2019-07-13 15:54:44'),
(3, 'Adinda Rodhotul Jannah', 'D3 Kebidanan', '6', 'Anggota', '089776654321', '2019-07-13 17:25:27', '2019-07-13 17:25:27');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_event` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `formulir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `nama_event`, `upload`, `tanggal`, `waktu`, `tempat`, `deskripsi`, `formulir`, `created_at`, `updated_at`) VALUES
(1, 'HUT KFI Ke-11', 'event/F5hhIl6FieqhNqD1C1PU3Doxv5QKyN83HTvtkwcw.jpeg', '2019-07-12', '10:30', 'tegal', 'HUT KFI Ke-11', 'formulir/fRMmLhZEkhHVKjQXmNsin4uTSIBRfZg56byncdpZ.pdf', '2019-07-10 06:14:21', '2019-07-10 06:14:21'),
(2, 'Hunting Rutin KFI', 'event/B4KvVs2XQ9yZg7uHqApnRIyXAxIdg9pFWdlkqXI2.jpeg', '2019-07-10', '10:30', 'Warung Kopi Tegal', 'Dalam Acara Rutin Hunting Rutin KFI', 'formulir/DBVyDqZGu79q1o5TCDnQJVbq4VsbLEfKAqw6nY8t.pdf', '2019-07-13 16:46:48', '2019-07-13 16:51:36'),
(3, 'HUT Waterpark Bahari', 'event/5jjNmjeuNz6Z9ZELvURDHiJMNnjwVuFcEB2iCUkx.jpeg', '2019-07-25', '14:30', 'Waterpark Bahari Tegal', 'Yukkk untuk pecinta photography kita akan adain acara lomba Photography menyambut hut Waterpark Bahari Ke 10', 'formulir/Q8ZPD3qso5nkq93Hqh6iWux1FzTblLUeYOJ4vxaI.pdf', '2019-07-13 18:03:59', '2019-07-13 18:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `upload`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Disnatalis Politeknik Tegal Ke-XVI', 'galeri/P9Pr6ep6q7JNgd0XhTnnKiZJ0c3tD455h7TbclQ8.jpeg', 'Hari Ulang Tahun Politeknik Harapan Bersama Tegal', '2019-07-13 16:35:41', '2019-07-13 16:35:41'),
(3, 'Bismillahirohmanirohim', 'galeri/xfU1HHOwJWA5mDwACViJwxEcjDsaS06ZEg9BG5Yd.jpeg', 'pertemuan perdana UKM Rana 9 2019', '2019-07-13 16:36:43', '2019-07-13 16:59:42'),
(4, 'Ngopi bareng Komunitas Photography UPS', 'galeri/QmPS3UYE8p6Fh1BEhlU9bS4RbslaUZUseOftpHU1.jpeg', 'Alhamdulillah dikunjungi sahabat kita semua komunitas Kopi UPM', '2019-07-13 17:01:13', '2019-07-13 17:01:13'),
(7, 'Pertemuan rutin ke 2 Ukm Rana 9', 'galeri/GSFcDz6nvhvgI3ooPybdoj1pfZgMJsblYhJPfNRO.jpeg', 'alhamdulillah masih bisa belajar  \"mengatur titik fokus\"', '2019-07-13 17:59:23', '2019-07-13 18:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_13_072052_create_anggota_table', 1),
(4, '2019_06_13_072322_create_admin_table', 1),
(5, '2019_06_25_075010_create_event_table', 1),
(6, '2019_06_25_081802_create_galeri_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$tqXLYfayxq296H39lt7fEelmNqHSYgCoLUAiTpUIjlziVUg6oGQB2', NULL, '2019-07-10 06:05:17', '2019-07-10 06:05:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `anggota_nomer_unique` (`nomer`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
