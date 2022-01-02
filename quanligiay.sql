-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 30, 2021 at 07:37 AM
-- Server version: 5.7.25
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanligiay`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `ID` int(10) NOT NULL,
  `MaHoaDon` int(10) NOT NULL,
  `MaGiay` int(10) NOT NULL,
  `SoLuong` int(10) NOT NULL,
  `DonGiaBan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`ID`, `MaHoaDon`, `MaGiay`, `SoLuong`, `DonGiaBan`) VALUES
(1, 1, 15, 1, 4000000),
(2, 1, 16, 1, 4109000),
(3, 2, 16, 1, 4109000),
(4, 2, 21, 1, 2500000),
(5, 3, 24, 1, 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `giay`
--

CREATE TABLE `giay` (
  `ID` int(10) NOT NULL,
  `MaLoai` int(10) NOT NULL,
  `MaNCC` int(10) NOT NULL,
  `TenGiay` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GhiChu` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DonGiaBan` int(10) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `HinhAnh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `BaoHanh` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `giay`
--

INSERT INTO `giay` (`ID`, `MaLoai`, `MaNCC`, `TenGiay`, `GhiChu`, `DonGiaBan`, `SoLuong`, `HinhAnh`, `BaoHanh`) VALUES
(3, 3, 1, 'Nike Air Max 90', 'Colour Shown: Summit White/Rattan/White/Wolf Grey', 3519000, 9, 'air-max-90-shoes-BsdFt1.jpg', '1 năm'),
(9, 3, 1, 'Nike Air Max 90', 'Nothing as fly, nothing as comfortable, nothing as proven—the Nike Air Max 90 stays true to its roots with the iconic Waffle sole, stitched overlays and classic TPU accents on the heel and eyestays.A variety of materials on the upper gives a modern look, while Max Air cushioning adds comfort to your journey', 2815199, 9, 'air-max-90-shoes-hGrzDR.png', '1 year'),
(14, 4, 1, 'Air Jordan 1 Mid', 'no', 3239000, 0, 'air-jordan-1-mid-shoe-86f1ZW.jpg', '1 year'),
(15, 4, 1, 'Nike jordan', 'awesome', 4000000, 3, '6.jpg', '1 year'),
(16, 4, 1, 'Air Jordan 1 Zoom', 'best', 4109000, 0, '10.png', '1 year'),
(20, 3, 1, 'NIKE AIR MAX 2', 'perfect', 3000000, 20, '3.jpg', '1 year'),
(21, 3, 1, 'Nike Air Max 90', 'perfect', 2500000, 18, 'air-max-90-shoes-hGrzDR.png', '2 years'),
(23, 1, 2, 'Ultra boost Adidas', 'perfect', 5000000, 18, 'run3.jpg', '1 year'),
(24, 1, 1, 'Nike Air Max 90', 'ngon', 2000000, 19, 'run2.jpg', '1 nam');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `ID` int(10) NOT NULL,
  `MaNguoiDung` int(10) NOT NULL,
  `DiaChiGiaoHang` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NgayDatHang` datetime NOT NULL,
  `TinhTrang` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`ID`, `MaNguoiDung`, `DiaChiGiaoHang`, `DienThoai`, `NgayDatHang`, `TinhTrang`) VALUES
(1, 14, 'long xuyen, an giang', '0909009099', '2021-12-30 13:23:58', 0),
(2, 15, 'long xuyen, an giang', '0909009099', '2021-12-30 13:40:01', 1),
(3, 15, 'long xuyen, an giang', '0909009099', '2021-12-30 13:44:30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaigiay`
--

CREATE TABLE `loaigiay` (
  `ID` int(10) NOT NULL,
  `TenLoai` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaigiay`
--

INSERT INTO `loaigiay` (`ID`, `TenLoai`) VALUES
(1, 'Running Shoe'),
(3, 'Light weight'),
(4, 'Baseketball shoe');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ID` int(10) NOT NULL,
  `HoVaTen` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenDangNhap` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `QuyenHan` tinyint(1) NOT NULL,
  `Khoa` tinyint(1) NOT NULL,
  `Avata` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`ID`, `HoVaTen`, `TenDangNhap`, `MatKhau`, `QuyenHan`, `Khoa`, `Avata`) VALUES
(1, 'Từ Huy Khanh', 'huykhanh', 'aa4095578917412d3b4658a85ff20ef9', 1, 0, 'huykhanh.jpg'),
(14, 'Huy Khanh 2', 'huykhanh2', 'aa4095578917412d3b4658a85ff20ef9', 2, 0, 'user1.jpg'),
(15, 'huy khanh 3', 'huykhanh3', 'aa4095578917412d3b4658a85ff20ef9', 2, 0, 'user1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `ID` int(10) NOT NULL,
  `TenNCC` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`ID`, `TenNCC`) VALUES
(1, 'Nike'),
(2, 'Adidas'),
(3, 'Asics'),
(13, 'gucci'),
(14, 'balenciaga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaHoaDon` (`MaHoaDon`),
  ADD KEY `MaGiay` (`MaGiay`) USING BTREE;

--
-- Indexes for table `giay`
--
ALTER TABLE `giay`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaLoai` (`MaLoai`),
  ADD KEY `MaNCC` (`MaNCC`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaNguoiDung` (`MaNguoiDung`);

--
-- Indexes for table `loaigiay`
--
ALTER TABLE `loaigiay`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `giay`
--
ALTER TABLE `giay`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loaigiay`
--
ALTER TABLE `loaigiay`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaGiay`) REFERENCES `giay` (`ID`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaHoaDon`) REFERENCES `hoadon` (`ID`);

--
-- Constraints for table `giay`
--
ALTER TABLE `giay`
  ADD CONSTRAINT `giay_ibfk_1` FOREIGN KEY (`MaNCC`) REFERENCES `nhacungcap` (`ID`),
  ADD CONSTRAINT `giay_ibfk_2` FOREIGN KEY (`MaLoai`) REFERENCES `loaigiay` (`ID`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
