-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2020 at 07:48 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vendor`
--

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE `asset` (
  `asset_id` int(30) NOT NULL,
  `asset_type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`asset_id`, `asset_type`) VALUES
(1, 'Kendaraan'),
(2, 'General'),
(3, 'Sertifikasi/Penghargaan');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `awards_id` int(35) NOT NULL,
  `awards_type` varchar(35) NOT NULL,
  `awards_year` tinyint(4) NOT NULL,
  `awards_num` text NOT NULL,
  `awards_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `business_field`
--

CREATE TABLE `business_field` (
  `business_field_id` int(30) NOT NULL,
  `business_field_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_field`
--

INSERT INTO `business_field` (`business_field_id`, `business_field_name`) VALUES
(1, 'Jasa Pengurusan Transportasi'),
(2, 'Jasa Konsultasi'),
(3, 'Penyedia Tenaga Kerja'),
(4, 'Sewa Kendaraan'),
(5, 'Penyedia Kendaraan'),
(6, 'Sipil'),
(7, 'Asuransi'),
(8, 'Sewa Barang'),
(9, 'Penyedia Barang'),
(10, 'Notaris'),
(11, 'Penyedia Gudang');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(30) NOT NULL,
  `business_field_id` int(30) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `business_field_id`, `category_name`) VALUES
(1, 2, 'Keuangan'),
(2, 2, 'Hukum'),
(3, 2, 'SDM'),
(4, 2, 'Pajak'),
(5, 2, 'ISO'),
(6, 4, 'Komersial'),
(7, 4, 'Penumpang'),
(8, 4, 'Sepeda motor'),
(9, 7, 'Asuransi Kendaraan'),
(10, 7, 'Asuransi Gudang'),
(11, 7, 'Asuransi Marin Cargo'),
(12, 7, 'Asuransi Kesehatan'),
(13, 8, 'Mekanikal Elektronik'),
(14, 8, 'Material Handling Equipment'),
(15, 9, 'Elektronik'),
(16, 9, 'Souvenir'),
(17, 9, 'HSE (Health, Safety, Environment)'),
(18, 9, 'Pekakas'),
(19, 9, 'ATK (Alat, Tulis, Kantor)'),
(20, 6, '-');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `doc_id` int(30) NOT NULL,
  `vendor_id` varchar(30) NOT NULL,
  `doc_type` varchar(100) NOT NULL,
  `doc_file` text NOT NULL,
  `doc_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`doc_id`, `vendor_id`, `doc_type`, `doc_file`, `doc_status`) VALUES
(6, 'VENDOR260920200001', 'Surat Izin Tempat Usaha', 'pegawai1.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `general_id` int(30) NOT NULL,
  `general_type` varchar(35) NOT NULL,
  `general_qty` int(35) NOT NULL,
  `general_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level_id` int(30) NOT NULL,
  `level_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `level_name`) VALUES
(1, 'Admin'),
(2, 'Vendor');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `log_id` int(30) NOT NULL,
  `log_desc` text NOT NULL,
  `log_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`log_id`, `log_desc`, `log_time`) VALUES
(2, 'User menambahkan data administrasi vendor', '2020-09-26 18:55:27'),
(3, 'User menambahkan data administrasi vendor', '2020-09-26 19:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(30) NOT NULL,
  `level_id` int(30) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `job_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `level_id`, `fullname`, `gender`, `email`, `password`, `last_login`, `create_time`, `update_time`, `job_title`) VALUES
('USER260920200001', 2, 'test', 'Laki-laki', 'test@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, '2020-09-26 16:53:18', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicle_id` int(30) NOT NULL,
  `vehicle_type` varchar(35) NOT NULL,
  `vehicle_brand` varchar(40) NOT NULL,
  `vihecle_qty` int(15) NOT NULL,
  `vehicle_year` tinyint(4) NOT NULL,
  `type` varchar(45) NOT NULL,
  `vehicle_payload` varchar(30) NOT NULL,
  `vehicle_status` varchar(35) NOT NULL,
  `vehicle_history` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` varchar(30) NOT NULL,
  `id_user` varchar(30) NOT NULL,
  `business_field_id` int(30) NOT NULL,
  `category_id` int(30) NOT NULL,
  `office_id` varchar(30) DEFAULT NULL,
  `vendor_name` varchar(100) NOT NULL,
  `vendor_desc` text NOT NULL,
  `founding_date` year(4) NOT NULL,
  `address` text NOT NULL,
  `postcode` int(11) NOT NULL,
  `vendor_email` varchar(50) NOT NULL,
  `vendor_phone` varchar(15) NOT NULL,
  `vendor_fax` varchar(20) DEFAULT NULL,
  `vendor_website` varchar(50) DEFAULT NULL,
  `vendor_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `id_user`, `business_field_id`, `category_id`, `office_id`, `vendor_name`, `vendor_desc`, `founding_date`, `address`, `postcode`, `vendor_email`, `vendor_phone`, `vendor_fax`, `vendor_website`, `vendor_status`) VALUES
('VENDOR260920200001', 'USER260920200001', 4, 8, '', 'PT. Jomblo', 'asd', 2020, 'asd', 40552, 'jomblo@sigle.com', '0228712498134', '2342462', 'www.jomblo.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`asset_id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`awards_id`);

--
-- Indexes for table `business_field`
--
ALTER TABLE `business_field`
  ADD PRIMARY KEY (`business_field_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `business_field_id` (`business_field_id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`general_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `level_id` (`level_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asset`
--
ALTER TABLE `asset`
  MODIFY `asset_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `awards_id` int(35) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business_field`
--
ALTER TABLE `business_field`
  MODIFY `business_field_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `doc_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `general`
--
ALTER TABLE `general`
  MODIFY `general_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `level_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `log_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicle_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`business_field_id`) REFERENCES `business_field` (`business_field_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
