/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : danhbabacsi

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-04-13 13:15:41
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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bacsi
-- ----------------------------
INSERT INTO `bacsi` VALUES ('16', 'Trần Tâm', '1911', 'Nam', '9090909099', 'binhtam@ueh.edu.vn2', 'fb.com/trantam', '1', '1492062958.png', 'r34535345', 'UEH', '<p>Mẫu giá, lớp 1, đại học, cao học</p>', '<p>10 năm trong lĩnh vực đỡ đẻ</p>', '<p>Viết sách</p>', '<p>Giảng dạy</p>', '<p>Nổi bật</p>', null, null, null, '22', '');
INSERT INTO `bacsi` VALUES ('17', 'Trần Bình Minh', '2015', 'Nữ', '091541654', 'binhminh@gmail.com', 'fb.com/binhminh', null, '1492063282.png', 'Anh còn nợ em', 'HOU', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span></p>', null, null, null, '24', '');
INSERT INTO `bacsi` VALUES ('18', 'Nguyễn Thị Thỏ', '2011', 'Nữ', '0909008890', 'thitho@ueh.edu.vn', 'fb.com/thitho', '1', '1492063746.png', 'Bé thỏ dễ thương', 'Sở thú', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', null, null, null, '10', '');
INSERT INTO `bacsi` VALUES ('19', 'Nguyễn Thị Ngủ', '2002', 'Nữ', '090905646654', 'ngunuong@gmail.com', 'fb.com/ngunuong', '1', '1492063893.png', 'Đời thêm vui', 'Hutech', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', null, null, null, '6', '');
INSERT INTO `bacsi` VALUES ('20', 'Lê Thị Ếch', '2003', 'Nữ', '005645646', 'echop@gmail.com', 'fb.com/echop', '1', '1492063974.png', 'Ếch ộp hồi hộp', 'Chợ Thị Nghè', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', null, null, null, '4', '');
INSERT INTO `bacsi` VALUES ('21', 'Trần Ngọc Sư', '2015', 'Nữ', '0848456464', 'abc@gmail.com', 'fb.com/abc', '1', '1492064024.png', 'Dữ như sư tử', 'Sở thú', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', null, null, null, '5', '');
INSERT INTO `bacsi` VALUES ('22', 'Trần Văn Đeo', '1195', 'Nam', '0654654', 'abcfd@gmail.com', 'fb.com/abcfd', '1', '1492064088.png', 'Dave and Ava', 'fasdfds', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '<p><span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', null, null, null, '2', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('23', '16', '\0', '2017-04-13', '2', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('24', '16', '', '2017-04-13', '1', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('25', '17', '\0', '2017-04-13', '2', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('26', '17', '', '2017-04-13', '1', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('27', '18', '\0', '2017-04-13', '2', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('28', '18', '', '2017-04-13', '1', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('29', '19', '\0', '2017-04-13', '2', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('30', '19', '', '2017-04-13', '1', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('31', '20', '\0', '2017-04-13', '2', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('32', '21', '\0', '2017-04-13', '2', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('33', '21', '', '2017-04-13', '1', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('34', '20', '', '2017-04-13', '1', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('35', '22', '\0', '2017-04-13', '2', '1', '');
INSERT INTO `chitietbacsi_tinhtrang` VALUES ('36', '22', '', '2017-04-13', '1', '1', '');

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
