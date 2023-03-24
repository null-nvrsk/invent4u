-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 24, 2023 at 07:03 PM
-- Server version: 10.8.4-MariaDB
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invent`
--

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE `device` (
  `id` int(11) NOT NULL,
  `device_type_id` int(11) NOT NULL,
  `model` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sn` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventory_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `install_date` date DEFAULT NULL,
  `workable_id` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`id`, `device_type_id`, `model`, `specification`, `sn`, `inventory_number`, `install_date`, `workable_id`, `is_deleted`) VALUES
(1, 1, 'Lenovo IdeaCentre AIO 3 24ALC6', 'Ryzen 3 5300U 2.6 ГГц/8 ГБ SO-DIMM DDR4/256 ГБ M.2/24\" IPS (1920x1080)', NULL, 'НН-10/2022-00193', '2022-10-01', NULL, 0),
(2, 1, 'Lenovo IdeaCentre AIO 3 24ALC6', 'Ryzen 3 5300U 2.6 ГГц/8 ГБ SO-DIMM DDR4/256 ГБ M.2/24\" IPS (1920x1080)', NULL, 'НН-10/2022-00194', '2022-10-01', NULL, 0),
(3, 1, 'Lenovo IdeaCentre AIO 3 24ALC6', 'Ryzen 3 5300U 2.6 ГГц/8 ГБ SO-DIMM DDR4/256 ГБ M.2/24\" IPS (1920x1080)', NULL, 'НН-09/2022-0023', '2022-09-01', NULL, 0),
(4, 1, 'Lenovo IdeaCentre AIO 3 24ALC6', 'Ryzen 3 5300U 2.6 ГГц/8 ГБ SO-DIMM DDR4/256 ГБ M.2/24\" IPS (1920x1080)', NULL, 'НН-09/2022-0065', '2022-09-01', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `device_type`
--

CREATE TABLE `device_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `device_type`
--

INSERT INTO `device_type` (`id`, `name`) VALUES
(1, 'Моноблок'),
(2, 'Ноутбук'),
(3, 'Системный блок'),
(4, 'Монитор'),
(5, 'Телевизор'),
(6, 'Клавиатура'),
(7, 'Мышь'),
(8, 'Клавиатура+мышь'),
(9, 'Веб-камера'),
(10, 'Принтер'),
(11, 'МФУ'),
(12, 'Маршрутизатор'),
(13, 'Коммутатор'),
(14, 'Точка доступа'),
(15, 'Модем'),
(16, 'Планшет'),
(17, 'Телефон'),
(18, 'Периферия'),
(19, 'Гарнитура'),
(20, 'Сетевая карта'),
(21, 'Флешка'),
(22, 'Процессор');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device_type`
--
ALTER TABLE `device_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `device`
--
ALTER TABLE `device`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `device_type`
--
ALTER TABLE `device_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
