-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2017 at 11:05 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Table structure for table `bacsi`
--

CREATE TABLE `bacsi` (
  `Id` int(11) NOT NULL,
  `Ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` text COLLATE utf8_unicode_ci,
  `DienThoai` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DonViCongTac` text COLLATE utf8_unicode_ci,
  `QuaTrinhHocTapVaCongTac` text COLLATE utf8_unicode_ci,
  `KinhNghiemCongTac` text COLLATE utf8_unicode_ci,
  `BaiVietChuyenNganh` text COLLATE utf8_unicode_ci,
  `CongTacBaoCao` text COLLATE utf8_unicode_ci,
  `NghienCuuNoiBat` text CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `SoNha` text COLLATE utf8_unicode_ci,
  `Duong` text COLLATE utf8_unicode_ci,
  `Huyen` text COLLATE utf8_unicode_ci,
  `Tinh` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bacsi`
--

INSERT INTO `bacsi` (`Id`, `Ten`, `HinhAnh`, `DienThoai`, `Email`, `DonViCongTac`, `QuaTrinhHocTapVaCongTac`, `KinhNghiemCongTac`, `BaiVietChuyenNganh`, `CongTacBaoCao`, `NghienCuuNoiBat`, `SoNha`, `Duong`, `Huyen`, `Tinh`) VALUES
(1, 'phạm hữu sâm', 'sam.jpg', '0922926269', 'phamhuusam@ueh.edu.vn', 'Phòng công nghệ thông tin', '-Đã từng là học sinh giỏi cấp thế giới về môn tin học đại cương\r\n-Đạt giải nhất trong cuộc thi máy tính bỏ túi', 'Dày dạn kinh nghiệm với 10 năm trong lĩnh vực công nghệ', 'Tạp chí sinh sản lần thứ 48', 'Tuyệt vời', 'Từng nghiên cứu sản phụ khoa :d', '123 pham ngủ lão', '111', '1', 1),
(2, 'Trần bình tâm', 'tam.jpg', '0922926269', 'phamhuusam@ueh.edu.vn', 'Phòng công nghệ thông tin', '-Đã từng là học sinh giỏi cấp thế giới về môn tin học đại cương\r\n-Đạt giải nhất trong cuộc thi máy tính bỏ túi', 'Dày dạn kinh nghiệm với 10 năm trong lĩnh vực công nghệ', 'Tạp chí sinh sản lần thứ 48', 'Tuyệt vời', 'Từng nghiên cứu sản phụ khoa :d', 'ấp bảo đinh', 'số 1', 'xuân lộc', 2);

-- --------------------------------------------------------

--
-- Table structure for table `chitietbacsi_tinhtrang`
--

CREATE TABLE `chitietbacsi_tinhtrang` (
  `Id` int(11) NOT NULL,
  `bacsi` int(11) NOT NULL,
  `FlagHienTai` bit(1) NOT NULL,
  `NgayCapNhatTinhTrang` date NOT NULL,
  `TinhTrang` int(11) NOT NULL,
  `NguoiDuyet` int(11) NOT NULL,
  `LyDoTuChoi` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietbacsi_tinhtrang`
--

INSERT INTO `chitietbacsi_tinhtrang` (`Id`, `bacsi`, `FlagHienTai`, `NgayCapNhatTinhTrang`, `TinhTrang`, `NguoiDuyet`, `LyDoTuChoi`) VALUES
(1, 1, b'1', '2017-03-07', 1, 1, ''),
(2, 2, b'1', '2017-03-01', 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `Id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `FullName` text COLLATE utf8_unicode_ci NOT NULL,
  `LoaiNguoiDung` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`Id`, `username`, `password`, `FullName`, `LoaiNguoiDung`) VALUES
(1, 'admin', 'admin', 'Phạm hữu sâm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tinhthanh`
--

CREATE TABLE `tinhthanh` (
  `Id` int(11) NOT NULL,
  `TenTinh` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tinhthanh`
--

INSERT INTO `tinhthanh` (`Id`, `TenTinh`) VALUES
(1, 'An Giang'),
(2, 'Bà Rịa - Vũng Tàu'),
(3, 'Bạc Liêu'),
(4, 'Bắc Kạn'),
(5, 'Bắc Giang'),
(6, 'Bắc Ninh'),
(7, 'Bến Tre'),
(8, 'Bình Dương'),
(9, 'Bình Định'),
(10, 'Bình Phước'),
(11, 'Bình Thuận'),
(12, 'Cà Mau'),
(13, 'Cao Bằng'),
(14, 'Cần Thơ'),
(15, 'Đà Nẵng'),
(16, 'Đắk Lắk'),
(17, 'Đắk Nông'),
(18, 'Đồng Nai'),
(19, 'Đồng Tháp'),
(20, 'Điện Biên'),
(21, 'Gia Lai'),
(22, 'Hà Giang'),
(23, 'Hà Nam'),
(24, 'Hà Nội'),
(25, 'Hà Tĩnh'),
(26, 'Hải Dương'),
(27, 'Hải Phòng'),
(28, 'Hòa Bình'),
(29, 'Hậu Giang'),
(30, 'Hưng Yên'),
(31, 'TP Hồ Chí Minh'),
(32, 'Khánh Hòa'),
(33, 'Kiên Giang'),
(34, 'Kon Tum'),
(35, 'Lai Châu'),
(36, 'Lào Cai'),
(37, 'Lạng Sơn'),
(38, 'Lâm Đồng'),
(39, 'Long An'),
(40, 'Nam Định'),
(41, 'Nghệ An'),
(42, 'Ninh Bình'),
(43, 'Ninh Thuận'),
(44, 'Phú Thọ'),
(45, 'Phú Yên'),
(46, 'Quảng Bình'),
(47, 'Quảng Nam'),
(48, 'Quảng Ngãi'),
(49, 'Quảng Ninh'),
(50, 'Quảng Trị'),
(51, 'Sóc Trăng'),
(52, 'Sơn La'),
(53, 'Tây Ninh'),
(54, 'Thái Bình'),
(55, 'Thái Nguyên'),
(56, 'Thanh Hóa'),
(57, 'Thừa Thiên - Huế'),
(58, 'Tiền Giang'),
(59, 'Trà Vinh'),
(60, 'Tuyên Quang'),
(61, 'Vĩnh Long'),
(62, 'Vĩnh Phúc'),
(63, 'Yên Bái');

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrang`
--

CREATE TABLE `tinhtrang` (
  `Id` int(11) NOT NULL,
  `TenTinhTrang` text COLLATE utf8_unicode_ci NOT NULL,
  `Flag` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tinhtrang`
--

INSERT INTO `tinhtrang` (`Id`, `TenTinhTrang`, `Flag`) VALUES
(1, 'Đã duyệt', 1),
(2, 'Chưa duyệt', 2),
(3, 'Treo', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bacsi`
--
ALTER TABLE `bacsi`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `chitietbacsi_tinhtrang`
--
ALTER TABLE `chitietbacsi_tinhtrang`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tinhthanh`
--
ALTER TABLE `tinhthanh`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bacsi`
--
ALTER TABLE `bacsi`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `chitietbacsi_tinhtrang`
--
ALTER TABLE `chitietbacsi_tinhtrang`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tinhthanh`
--
ALTER TABLE `tinhthanh`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
