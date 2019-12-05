-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2019 at 04:49 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlydiem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL COMMENT 'khoatutang',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `level`) VALUES
(3, 'admin', '123456', '1@gmail', '1'),
(4, 'admin1', '123456', '2@gmail', '1'),
(5, 'admin2', '12345', '3@gmail', '1'),
(9, 'giaovien1', '123456', '1111@gmail', '2'),
(10, 'giaovien2', '12345', '222@111', '2'),
(11, 'giaovien3', '12345', '212@gmail', '2'),
(12, '12345', '12345', '111@gmail', '2');

-- --------------------------------------------------------

--
-- Table structure for table `diem`
--

CREATE TABLE `diem` (
  `id` int(11) NOT NULL COMMENT 'khóa tự tăng',
  `masinhvien` varchar(255) NOT NULL,
  `mamonhoc` varchar(255) NOT NULL,
  `hocky` varchar(20) NOT NULL,
  `diemlan1` int(50) NOT NULL,
  `diemlan2` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `diem`
--

INSERT INTO `diem` (`id`, `masinhvien`, `mamonhoc`, `hocky`, `diemlan1`, `diemlan2`) VALUES
(1, '2', 'HT21', '2', 2, 2),
(2, '1', '', '2', 3, 4),
(4, '68DCHT20035', 'HT21', '2', 10, 10),
(5, '68DCHT20034', 'HT23', '1', 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `hedaotao`
--

CREATE TABLE `hedaotao` (
  `id` int(11) NOT NULL COMMENT 'khoatutang',
  `mahedaotao` varchar(255) NOT NULL,
  `tenhedaotao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hedaotao`
--

INSERT INTO `hedaotao` (`id`, `mahedaotao`, `tenhedaotao`) VALUES
(8, 'CNGTVT1', 'Đại Học'),
(9, 'CNGTVT2', 'Cao Đẳng'),
(10, 'CNGTVT3', 'Cao Học'),
(11, 'CNGTVT4', 'Học Nghề');

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `id` int(11) NOT NULL COMMENT 'khóa tự tăng',
  `makhoa` varchar(255) NOT NULL,
  `tenkhoa` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `dienthoai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`id`, `makhoa`, `tenkhoa`, `diachi`, `dienthoai`) VALUES
(2, 'Hello', 'Đẹp', 'Đẹp', 'Đẹp'),
(5, '3', '2', '3', '4'),
(9, 'Công Nghệ Thông Tin', 'Hệ Thống Thông Tin', '54-Triều Khúc', '0123456789'),
(10, 'Công Nghệ Thông Tin', 'Điện Tử Viễn Thông', 'H1 - 54 -Triều Khúc', '0147852369');

-- --------------------------------------------------------

--
-- Table structure for table `khoahoc`
--

CREATE TABLE `khoahoc` (
  `id` int(11) NOT NULL COMMENT 'khoatutang',
  `makhoahoc` varchar(255) NOT NULL,
  `tenkhoahoc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khoahoc`
--

INSERT INTO `khoahoc` (`id`, `makhoahoc`, `tenkhoahoc`) VALUES
(8, 'HT1', 'Web'),
(9, 'HT2', 'Game'),
(10, 'HT3', 'CEO'),
(11, 'HT4', 'Tỉ Phú');

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `id` int(11) NOT NULL COMMENT 'khoatutang',
  `malop` varchar(255) NOT NULL,
  `tenlop` varchar(255) NOT NULL,
  `makhoa` varchar(255) NOT NULL,
  `makhoahoc` varchar(255) NOT NULL,
  `mahedaotao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`id`, `malop`, `tenlop`, `makhoa`, `makhoahoc`, `mahedaotao`) VALUES
(2, 'HT21', 'Hệ Thống Thông Tin', 'Công Nghệ Thông Tin', 'HT1', 'CNGTVT1'),
(3, 'HT22', 'Hệ Thống Thông Tin 22', 'Công Nghệ Thông Tin', 'HTT21', 'CNGTVT2'),
(4, 'HT23', 'Hệ Thống Thông Tin 23', 'Công Nghệ Thông Tin', 'HTT21', 'CNGTVT3'),
(5, '1', '1', 'Hello', 'HT211', 'CNGTVT1');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `id` int(11) NOT NULL COMMENT 'khóa tự tăng',
  `mamonhoc` varchar(255) NOT NULL,
  `tenmonhoc` varchar(255) NOT NULL,
  `sotinchi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`id`, `mamonhoc`, `tenmonhoc`, `sotinchi`) VALUES
(16, 'HT21', 'HCI', 4),
(17, 'HT21', 'Điện Toán Đám Mây', 3),
(20, 'HT21', 'Hệ quyết định', 3),
(24, 'HT23', 'Androi', 3),
(28, 'HT22', 'Web', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `id` int(11) NOT NULL COMMENT 'khoatutang',
  `masinhvien` varchar(255) NOT NULL,
  `tensinhvien` varchar(255) NOT NULL,
  `gioitinh` varchar(255) NOT NULL,
  `ngaysinh` date NOT NULL,
  `quequan` varchar(255) NOT NULL,
  `malop` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`id`, `masinhvien`, `tensinhvien`, `gioitinh`, `ngaysinh`, `quequan`, `malop`) VALUES
(11, 'Chọn Mã Sinh Viên:', 'Đạt', 'Nam', '1999-11-13', 'Hà Nội', 'Chọn Mã Lớp:'),
(13, '68DCHT20034', 'Hay', 'Nữ', '1111-11-11', 'Hà Nội', 'HT21'),
(14, '68DCHT20035', 'Đạt1', 'Nam', '1111-11-11', '1', 'HT21'),
(18, '68DCHT20035', 'Đạt2', 'Nam', '2019-11-14', 'Hà Nội', 'HT21'),
(20, '1', '1', 'Nữ', '1111-11-11', '1', 'HT22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hedaotao`
--
ALTER TABLE `hedaotao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'khoatutang', AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `diem`
--
ALTER TABLE `diem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'khóa tự tăng', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hedaotao`
--
ALTER TABLE `hedaotao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'khoatutang', AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `khoa`
--
ALTER TABLE `khoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'khóa tự tăng', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `khoahoc`
--
ALTER TABLE `khoahoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'khoatutang', AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lop`
--
ALTER TABLE `lop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'khoatutang', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'khóa tự tăng', AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'khoatutang', AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
