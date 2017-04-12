/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : danhbabacsi

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-04-12 09:11:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bacsi
-- ----------------------------
DROP TABLE IF EXISTS `bacsi`;
CREATE TABLE `bacsi` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NamSinh` int(4) DEFAULT NULL,
  `GioiTinh` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DienThoai` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ShowPrivateInfo` int(1) DEFAULT '1',
  `HinhAnh` text COLLATE utf8_unicode_ci,
  `CauChamNgon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DonViCongTac` text COLLATE utf8_unicode_ci,
  `QuaTrinhHocTapVaCongTac` text COLLATE utf8_unicode_ci,
  `KinhNghiemCongTac` text COLLATE utf8_unicode_ci,
  `BaiVietChuyenNganh` text COLLATE utf8_unicode_ci,
  `CongTacBaoCao` text COLLATE utf8_unicode_ci,
  `NghienCuuNoiBat` text CHARACTER SET utf16 COLLATE utf16_unicode_ci,
  `SoNha` text COLLATE utf8_unicode_ci,
  `Duong` text COLLATE utf8_unicode_ci,
  `Huyen` text COLLATE utf8_unicode_ci,
  `Tinh` int(11) DEFAULT NULL,
  `Display` bit(1) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bacsi
-- ----------------------------
INSERT INTO `bacsi` VALUES ('1', 'phạm hữu sâm', null, null, '0922926269', 'phamhuusam@ueh.edu.vn', null, '1', 'sam.jpg', null, 'Phòng công nghệ thông tin', '-Đã từng là học sinh giỏi cấp thế giới về môn tin học đại cương\r\n-Đạt giải nhất trong cuộc thi máy tính bỏ túi', 'Dày dạn kinh nghiệm với 10 năm trong lĩnh vực công nghệ', 'Tạp chí sinh sản lần thứ 48', 'Tuyệt vời', 'Từng nghiên cứu sản phụ khoa :d', '123 pham ngủ lão', '111', '1', '1', null);
INSERT INTO `bacsi` VALUES ('2', 'Trần bình tâm', null, null, '0922926269', 'phamhuusam@ueh.edu.vn', null, '1', 'tam.jpg', null, 'Phòng công nghệ thông tin', '-Đã từng là học sinh giỏi cấp thế giới về môn tin học đại cương\r\n-Đạt giải nhất trong cuộc thi máy tính bỏ túi', 'Dày dạn kinh nghiệm với 10 năm trong lĩnh vực công nghệ', 'Tạp chí sinh sản lần thứ 48', 'Tuyệt vời', 'Từng nghiên cứu sản phụ khoa :d', 'ấp bảo đinh', 'số 1', 'xuân lộc', '2', null);
INSERT INTO `bacsi` VALUES ('3', 'Trần Bình Tâm', null, null, null, null, null, '1', null, 'Đồn như lời', null, null, null, null, null, '', null, null, null, '0', null);
INSERT INTO `bacsi` VALUES ('4', 'Trần Bình Tâm', null, null, '0909008860', 'binhtam@ueh.edu.vn', null, '1', '', 'Đồn như lời', 'Đại học Y Dược', '<p>Học mẫu giáo xong tốt nghiệp đại học</p>', '<p>Làm tại UEH từ khi mới lọt lòng</p>', '<p>Kamasutra</p>', '<p>Báo cáo thường niên</p>', '<p>Làm sao để xxx</p>', null, null, null, '0', null);
INSERT INTO `bacsi` VALUES ('5', 'Trần Bình Tâm', null, null, '0909008860', 'binhtam@ueh.edu.vn', null, '1', '', 'Đồn như lời', 'Đại học Y Dược', '<p>Học mẫu giáo xong tốt nghiệp đại học</p>', '<p>Làm tại UEH từ khi mới lọt lòng</p>', '<p>Kamasutra</p>', '<p>Báo cáo thường niên</p>', '<p>Làm sao để xxx</p>', null, null, null, '0', null);
INSERT INTO `bacsi` VALUES ('6', '434234', null, null, '42343242424', 'binhtam@ueh.edu.vn', null, '1', '', '', '34324324324', '<p>5435345</p>', '', '', '', '', null, null, null, '0', null);
INSERT INTO `bacsi` VALUES ('7', 'Phạm Nguyễn Hoàng Nam', null, null, '09909005565', 'binhtam@ueh.edu.vn', null, '1', '', 'Đời đéo tin ai', 'Trường Đại học Kinh tế', '<p>jdflkjf</p>', '<p>kljsfsldjflk</p>', '<p>jflaskdjfl;a</p>', '<p>lsjflsdkja;f </p>', '<p>lsdkjfa;sdfsf</p>', null, null, null, '0', null);
INSERT INTO `bacsi` VALUES ('8', '44324324', null, null, '090905464', 'binhtam@ueh.edu.vn', null, '1', '1490772761.png', '45345353', '423424', '<p>sdgjsdfklgj</p>', '<p>qgdfgjklsdfkg</p>', '<p>j;lgjdfl;kgjsdfl;j</p>', '<p>jkl;gjsdfkl;gjsd;gs</p>', '<p>rèasdf</p>', null, null, null, '0', null);
INSERT INTO `bacsi` VALUES ('9', '4324324324', null, null, '324234234324', 'tranbinhtam.ueh@gmail.com', null, '1', '1490773239.png', '4324324', '2342343', '<p>jflsdak;fj</p>', '<p>345435</p>', '<p>4353453</p>', '<p>345345</p>', '<p>345345</p>', null, null, null, '0', null);
INSERT INTO `bacsi` VALUES ('10', '324234324', null, null, '42343242424', 'admin@ueh.edu.vn', null, '1', '1490773308.png', '4234324', '23423432', '<p>4234324</p>', '<p>234234</p>', '<p>324234</p>', '<p>324234</p>', '<p>234324</p>', null, null, null, '0', null);
INSERT INTO `bacsi` VALUES ('11', '5435345', null, null, '53454334534', 'tranbinhtam@gmail.com', null, '1', '', 'rrwer34', '345345345345', '<p>45trhytrytytu</p>', '<p>tỷuruỷu</p>', '<p>ryuy</p>', '<p>ryuyỷu</p>', '<p>uy</p>', null, null, null, '0', null);
INSERT INTO `bacsi` VALUES ('12', '34543534', null, null, '3423445454', 'binhtam@ueh.edu.vn', null, '1', '1490773507.png', '5345435353', '5435345435', '<p>345345</p>', '<p>345345</p>', '', '<p>345345</p>', '', null, null, null, '0', null);
INSERT INTO `bacsi` VALUES ('13', 'Trần Bình Tâm', null, null, '0909008860', 'binhtam@ueh.edu.vn', null, '1', '1490838531.png', 'Test', 'aklfjkl;', '<p>dfsasdfsf</p>', '', '', '', '', null, null, null, '0', null);
INSERT INTO `bacsi` VALUES ('14', 'ádfasdf', null, null, '0909008860', 'binhtam@ueh.edu.vn', null, '1', '1490858642.png', 'fsdfadfsf', 'ádfdsf', '<p>fasdfda fasd</p>', '', '', '', '', null, null, null, '0', null);
INSERT INTO `bacsi` VALUES ('15', 'Phạm Nguyễn Hoàng Na', null, null, '09090088660', 'binhtam@ueh.edu.vn', null, '1', '1490860537.png', 'Đồn như lời', 'Đại học Y Dược', '<p>dsaklfd;fkdj </p>', '<p>lkasdj flksdjf dál</p>', '<p>jkasdj fkdjsl;fj</p>', '<p>adfskljfl;ádkfj</p>', '<p>asdklfjfl;sdjfsff</p>', null, null, null, '0', null);

-- ----------------------------
-- Table structure for chitietbacsi_tinhtrang
-- ----------------------------
DROP TABLE IF EXISTS `chitietbacsi_tinhtrang`;
CREATE TABLE `chitietbacsi_tinhtrang` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `bacsi` int(11) NOT NULL,
  `FlagHienTai` bit(1) NOT NULL,
  `NgayCapNhatTinhTrang` date NOT NULL,
  `TinhTrang` int(11) NOT NULL,
  `NguoiDuyet` int(11) NOT NULL,
  `LyDoTuChoi` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of chitietbacsi_tinhtrang
-- ----------------------------
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('1', '1', '', '2017-03-07', '1', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('2', '2', '', '2017-03-01', '1', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('3', '3', '\0', '2017-03-28', '2', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('4', '3', '', '2017-03-28', '1', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('5', '4', '\0', '2017-03-29', '1', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('6', '5', '\0', '2017-03-29', '1', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('7', '6', '\0', '2017-03-29', '2', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('8', '4', '', '2017-03-29', '2', '1', 'ko');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('9', '5', '\0', '2017-03-29', '2', '1', '454');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('10', '6', '', '2017-03-29', '2', '1', '2414');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('11', '5', '', '2017-03-29', '2', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('12', '7', '', '2017-03-29', '2', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('13', '8', '', '2017-03-29', '2', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('14', '9', '', '2017-03-29', '2', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('15', '10', '', '2017-03-29', '2', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('16', '11', '', '2017-03-29', '2', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('17', '12', '', '2017-03-29', '2', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('18', '13', '', '2017-03-30', '2', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('19', '14', '\0', '2017-03-30', '2', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('20', '14', '', '2017-03-30', '1', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('21', '15', '\0', '2017-03-30', '2', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('22', '15', '', '2017-03-30', '1', '1', '');

-- ----------------------------
-- Table structure for nguoidung
-- ----------------------------
DROP TABLE IF EXISTS `nguoidung`;
CREATE TABLE `nguoidung` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `FullName` text COLLATE utf8_unicode_ci NOT NULL,
  `LoaiNguoiDung` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of nguoidung
-- ----------------------------
INSERT INTO `nguoidung` VALUES ('1', 'admin', 'admin', 'Phạm hữu sâm', '1');

-- ----------------------------
-- Table structure for tinhthanh
-- ----------------------------
DROP TABLE IF EXISTS `tinhthanh`;
CREATE TABLE `tinhthanh` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `TenTinh` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tinhthanh
-- ----------------------------
INSERT INTO `tinhthanh` VALUES ('1', 'An Giang');
INSERT INTO `tinhthanh` VALUES ('2', 'Bà Rịa - Vũng Tàu');
INSERT INTO `tinhthanh` VALUES ('3', 'Bạc Liêu');
INSERT INTO `tinhthanh` VALUES ('4', 'Bắc Kạn');
INSERT INTO `tinhthanh` VALUES ('5', 'Bắc Giang');
INSERT INTO `tinhthanh` VALUES ('6', 'Bắc Ninh');
INSERT INTO `tinhthanh` VALUES ('7', 'Bến Tre');
INSERT INTO `tinhthanh` VALUES ('8', 'Bình Dương');
INSERT INTO `tinhthanh` VALUES ('9', 'Bình Định');
INSERT INTO `tinhthanh` VALUES ('10', 'Bình Phước');
INSERT INTO `tinhthanh` VALUES ('11', 'Bình Thuận');
INSERT INTO `tinhthanh` VALUES ('12', 'Cà Mau');
INSERT INTO `tinhthanh` VALUES ('13', 'Cao Bằng');
INSERT INTO `tinhthanh` VALUES ('14', 'Cần Thơ');
INSERT INTO `tinhthanh` VALUES ('15', 'Đà Nẵng');
INSERT INTO `tinhthanh` VALUES ('16', 'Đắk Lắk');
INSERT INTO `tinhthanh` VALUES ('17', 'Đắk Nông');
INSERT INTO `tinhthanh` VALUES ('18', 'Đồng Nai');
INSERT INTO `tinhthanh` VALUES ('19', 'Đồng Tháp');
INSERT INTO `tinhthanh` VALUES ('20', 'Điện Biên');
INSERT INTO `tinhthanh` VALUES ('21', 'Gia Lai');
INSERT INTO `tinhthanh` VALUES ('22', 'Hà Giang');
INSERT INTO `tinhthanh` VALUES ('23', 'Hà Nam');
INSERT INTO `tinhthanh` VALUES ('24', 'Hà Nội');
INSERT INTO `tinhthanh` VALUES ('25', 'Hà Tĩnh');
INSERT INTO `tinhthanh` VALUES ('26', 'Hải Dương');
INSERT INTO `tinhthanh` VALUES ('27', 'Hải Phòng');
INSERT INTO `tinhthanh` VALUES ('28', 'Hòa Bình');
INSERT INTO `tinhthanh` VALUES ('29', 'Hậu Giang');
INSERT INTO `tinhthanh` VALUES ('30', 'Hưng Yên');
INSERT INTO `tinhthanh` VALUES ('31', 'TP Hồ Chí Minh');
INSERT INTO `tinhthanh` VALUES ('32', 'Khánh Hòa');
INSERT INTO `tinhthanh` VALUES ('33', 'Kiên Giang');
INSERT INTO `tinhthanh` VALUES ('34', 'Kon Tum');
INSERT INTO `tinhthanh` VALUES ('35', 'Lai Châu');
INSERT INTO `tinhthanh` VALUES ('36', 'Lào Cai');
INSERT INTO `tinhthanh` VALUES ('37', 'Lạng Sơn');
INSERT INTO `tinhthanh` VALUES ('38', 'Lâm Đồng');
INSERT INTO `tinhthanh` VALUES ('39', 'Long An');
INSERT INTO `tinhthanh` VALUES ('40', 'Nam Định');
INSERT INTO `tinhthanh` VALUES ('41', 'Nghệ An');
INSERT INTO `tinhthanh` VALUES ('42', 'Ninh Bình');
INSERT INTO `tinhthanh` VALUES ('43', 'Ninh Thuận');
INSERT INTO `tinhthanh` VALUES ('44', 'Phú Thọ');
INSERT INTO `tinhthanh` VALUES ('45', 'Phú Yên');
INSERT INTO `tinhthanh` VALUES ('46', 'Quảng Bình');
INSERT INTO `tinhthanh` VALUES ('47', 'Quảng Nam');
INSERT INTO `tinhthanh` VALUES ('48', 'Quảng Ngãi');
INSERT INTO `tinhthanh` VALUES ('49', 'Quảng Ninh');
INSERT INTO `tinhthanh` VALUES ('50', 'Quảng Trị');
INSERT INTO `tinhthanh` VALUES ('51', 'Sóc Trăng');
INSERT INTO `tinhthanh` VALUES ('52', 'Sơn La');
INSERT INTO `tinhthanh` VALUES ('53', 'Tây Ninh');
INSERT INTO `tinhthanh` VALUES ('54', 'Thái Bình');
INSERT INTO `tinhthanh` VALUES ('55', 'Thái Nguyên');
INSERT INTO `tinhthanh` VALUES ('56', 'Thanh Hóa');
INSERT INTO `tinhthanh` VALUES ('57', 'Thừa Thiên - Huế');
INSERT INTO `tinhthanh` VALUES ('58', 'Tiền Giang');
INSERT INTO `tinhthanh` VALUES ('59', 'Trà Vinh');
INSERT INTO `tinhthanh` VALUES ('60', 'Tuyên Quang');
INSERT INTO `tinhthanh` VALUES ('61', 'Vĩnh Long');
INSERT INTO `tinhthanh` VALUES ('62', 'Vĩnh Phúc');
INSERT INTO `tinhthanh` VALUES ('63', 'Yên Bái');

-- ----------------------------
-- Table structure for tinhtrang
-- ----------------------------
DROP TABLE IF EXISTS `tinhtrang`;
CREATE TABLE `tinhtrang` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `TenTinhTrang` text COLLATE utf8_unicode_ci NOT NULL,
  `Flag` int(1) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tinhtrang
-- ----------------------------
INSERT INTO `tinhtrang` VALUES ('1', 'Đã duyệt', '1');
INSERT INTO `tinhtrang` VALUES ('2', 'Chưa duyệt', '2');
INSERT INTO `tinhtrang` VALUES ('3', 'Treo', '2');
INSERT INTO `tinhtrang` VALUES ('4', 'Không duyệt', '2');
