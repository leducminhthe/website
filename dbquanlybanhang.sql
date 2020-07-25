-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2020 at 03:23 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbquanlybanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `adminName` varchar(250) NOT NULL,
  `adminEmail` varchar(250) NOT NULL,
  `adminUser` varchar(250) NOT NULL,
  `adminPass` varchar(255) NOT NULL,
  `level` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `level`) VALUES
(1, 'admin', 'admin@gmail', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 0);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(255) NOT NULL,
  `Message` longtext DEFAULT NULL,
  `Grandtotal` varchar(255) DEFAULT NULL,
  `TenSP` varchar(255) NOT NULL,
  `MaSP` varchar(255) NOT NULL,
  `SL` varchar(255) NOT NULL,
  `Subtotal` varchar(255) NOT NULL,
  `Phuongthuc` varchar(255) NOT NULL,
  `date_order` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `Name`, `Address`, `Email`, `Phone`, `Message`, `Grandtotal`, `TenSP`, `MaSP`, `SL`, `Subtotal`, `Phuongthuc`, `date_order`) VALUES
(20, 'nguyen van b', '202 tphcm', 'b@gmail', '31245', '', '231000', 'Bình trà di động L&L có lớp chặn lá trà 600ml', 'HPL938', '3', '210000', 'Thanh toán khi nhận hàng', '2020-07-14 06:14:11'),
(21, 'nguyen van b', '202 tphcm', 'b@gmail', '31245', 'giao hàng', '3295600', 'Nồi nhôm chống dính BAUM Marble 24cm, 2 tay cầm, nắp thủy tinh, hiệu L&L', 'LBU1242', '4', '2996000', 'Chuyển khoản ngân hàng', '2020-07-18 11:31:29'),
(22, 'nguyen van b', '202 tphcm', 'b@gmail', '31245', 'giao hàng', '5935600', 'Máy Xay Trộn Đa Năng Lock&Lock ELHB-220 (420W)', 'ELHB-220', '1', '5396000', 'Chuyển khoản ngân hàng', '2020-07-18 11:31:29'),
(23, 'lethe', '12345', 'the1@gmail', '12345', 'thanh toán', '823900', 'Nồi nhôm chống dính BAUM Marble 24cm, 2 tay cầm, nắp thủy tinh, hiệu L&L', 'LBU1242', '1', '749000', 'Chuyển khoản ngân hàng', '2020-07-21 11:36:50'),
(24, 'lethe', '12345', 'the1@gmail', '12345', 'thanh toán', '6103900', 'Máy Xay Trộn Đa Năng Lock&Lock ELHB-220 (420W)', 'ELHB-220', '2', '5549000', 'Chuyển khoản ngân hàng', '2020-07-21 11:36:50'),
(25, 'Lê Đức Minh Thế', '202 tphcm', 'the1@gmail', '12345', 'asvb', '511500', 'Tô Salad 1.6L W/Khay&Khay nước sốt', 'HSM8450T', '3', '465000', 'VTC pay', '2020-07-23 12:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `AnhSP` text NOT NULL,
  `MaSP_FK` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `AnhSP`, `MaSP_FK`) VALUES
(1, 'http://www.locknlock.vn/data/base/goods/etc/201901/201900832117140_1.jpg\" ', 'HPL550'),
(2, 'http://www.locknlock.vn/data/base/goods/etc/201812/201835450014217_1.jpg\r\n\r\n', 'LLS221R'),
(3, 'http://www.locknlock.vn/data/base/goods/etc/201812/201835450014217_2.jpg', 'LLS221R'),
(4, 'http://www.locknlock.vn/data/base/goods/etc/201812/201835450014217_3.jpg', 'LLS221R'),
(5, 'http://www.locknlock.vn/data/base/goods/etc/201812/201834540866222_1.JPG', 'HPL806S6'),
(6, 'http://www.locknlock.vn/data/base/goods/etc/201812/201834540866222_2.JPG', 'HPL806S6'),
(7, 'http://www.locknlock.vn/data/base/goods/etc/201812/201834542366939_3.JPG', 'HPL817S5'),
(8, 'http://www.locknlock.vn/data/base/goods/etc/201812/201834542366939_2.JPG', 'HPL817S5'),
(9, 'http://www.locknlock.vn/data/base/goods/big/201900833453671.jpg', 'LLG224S3'),
(10, 'http://www.locknlock.vn/data/base/goods/etc/201901/201900833453671_1.jpg', 'LLG224S3'),
(11, 'http://www.locknlock.vn/data/base/goods/etc/201901/201900833453671_2.jpg', 'LLG224S3'),
(12, 'http://www.locknlock.vn/data/base/goods/big/201834440537098.JPG', 'INL301WS10'),
(13, 'http://www.locknlock.vn/data/base/goods/etc/201812/201834558664887_1.JPG', 'INL301WS10'),
(14, 'http://www.locknlock.vn/data/base/goods/etc/201812/201834558664887_2.JPG', 'INL301WS10'),
(15, 'http://www.locknlock.vn/data/base/goods/big/201836251332093.jpeg', 'LLS213R'),
(16, 'http://www.locknlock.vn/data/base/goods/etc/201812/201836254765774_2.jpg', 'LLS213R'),
(17, 'http://www.locknlock.vn/data/base/goods/big/201836251332109.jpg', 'LLS222R'),
(18, 'http://www.locknlock.vn/data/base/goods/etc/201812/201836252624746_1.jpg', 'LLS222R'),
(19, 'http://www.locknlock.vn/data/base/goods/big/201836251331324.jpg', 'HSM8440T'),
(20, 'http://www.locknlock.vn/data/base/goods/etc/201812/201836255319158_1.jpg', 'HSM8440T'),
(21, 'http://www.locknlock.vn/data/base/goods/etc/201812/201836255319158_2.jpg', 'HSM8440T'),
(22, 'http://www.locknlock.vn/data/base/goods/big/201835450014217.jpg', 'LLS221R'),
(23, 'http://www.locknlock.vn/data/base/goods/big/201834440539728.JPG', 'HPL806S6'),
(24, 'http://www.locknlock.vn/data/base/goods/big/201900832117140.jpg', 'HPL550'),
(25, 'http://www.locknlock.vn/data/base/goods/big/201834536586984.jpg', 'LBU1242'),
(26, 'http://www.locknlock.vn/data/base/goods/etc/201812/201834538858503_1.jpg', 'LBU1242'),
(27, 'http://www.locknlock.vn/data/base/goods/etc/201812/201834538858503_3.jpg', 'LBU1242'),
(28, 'http://www.locknlock.vn/data/base/goods/big/201834536586878.jpg', 'LBU1243'),
(29, 'http://www.locknlock.vn/data/base/goods/etc/201812/201834538202925_1.jpg', 'LBU1243'),
(30, 'http://www.locknlock.vn/data/base/goods/etc/201812/201834538202925_3.jpg', 'LBU1243'),
(31, 'http://www.locknlock.vn/data/base/goods/big/201834536587472.jpg', 'LBU1285'),
(32, 'http://www.locknlock.vn/data/base/goods/etc/201812/201834537947737_2.jpg', 'LBU1285'),
(33, 'http://www.locknlock.vn/data/base/goods/etc/201812/201834537947737_3.jpg', 'LBU1285'),
(34, 'http://www.locknlock.vn/data/base/goods/big/201825359631506.jpg', 'LHB2303OK-IH'),
(35, 'http://www.locknlock.vn/data/base/goods/big/201825359631356.jpg', 'LHB2303OK-IH'),
(36, 'http://www.locknlock.vn/data/base/goods/big/201815961785125.jpg', 'ECF-301R'),
(37, 'http://www.locknlock.vn/data/base/goods/etc/201806/201815961785125_1.jpg', 'ECF-301R'),
(38, 'http://www.locknlock.vn/data/base/goods/big/201835435195506.JPG', 'EJF376BLK'),
(39, 'http://www.locknlock.vn/data/base/goods/etc/201812/201835435195506_2.JPG', 'EJF376BLK'),
(40, 'http://www.locknlock.vn/data/base/goods/etc/201812/201835435195506_3.JPG', 'EJF376BLK'),
(41, 'http://www.locknlock.vn/data/base/goods/big/201913438759252.jpg', 'EJR151'),
(42, 'http://www.locknlock.vn/data/base/goods/etc/201905/201913438759252_1.jpg', 'EJR151'),
(43, 'http://www.locknlock.vn/data/base/goods/etc/201905/201913438759252_2.jpg', 'EJR151'),
(44, 'http://www.locknlock.vn/data/base/goods/big/201913441313219.jpg', 'EJR356'),
(45, 'http://www.locknlock.vn/data/base/goods/etc/201905/201913441313219_2.jpg', 'EJR356'),
(46, 'http://www.locknlock.vn/data/base/goods/etc/201905/201913441313219_4.jpg', 'EJR356'),
(47, 'http://www.locknlock.vn/data/base/goods/big/201816553664694.jpg', 'ELHB-220'),
(48, 'http://www.locknlock.vn/data/base/goods/etc/201806/201816553664694_4.jpg', 'ELHB-220'),
(49, 'http://www.locknlock.vn/data/base/goods/etc/201806/201816553664694_1.jpg', 'ELHB-220'),
(50, 'http://www.locknlock.vn/data/base/goods/big/201816554650465.jpg', 'ELJE-110'),
(51, 'http://www.locknlock.vn/data/base/goods/etc/201806/201816554650465_1.jpg', 'ELJE-110'),
(52, 'http://www.locknlock.vn/data/base/goods/etc/201806/201816554650465_4.jpg', 'ELJE-110'),
(53, 'http://www.locknlock.vn/data/base/goods/big/201821960708502.jpg', 'ABF710'),
(54, 'http://www.locknlock.vn/data/base/goods/big/201821960708283.jpg', 'ABF722'),
(55, 'http://www.locknlock.vn/data/base/goods/big/201821960708170.jpg', 'HPL733'),
(56, 'http://www.locknlock.vn/data/base/goods/big/201822850737577.jpg', 'HPL934M'),
(57, 'http://www.locknlock.vn/data/base/goods/big/201822850737950.jpg', 'HPL938'),
(58, 'http://www.locknlock.vn/data/base/goods/big/201828937687732.jpg', 'LKT643W');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `HoTen` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `Phone` varchar(100) DEFAULT NULL,
  `Message` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id`, `HoTen`, `email`, `Phone`, `Message`) VALUES
(0, 'the', 'the@gmail', '12345', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `menucha`
--

CREATE TABLE `menucha` (
  `id` int(11) NOT NULL,
  `TenMenuCha` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menucha`
--

INSERT INTO `menucha` (`id`, `TenMenuCha`) VALUES
(1, 'Hộp Bảo Quản'),
(2, 'Dụng Cụ Nấu Ăn'),
(3, 'Đồ Dùng Trên Bàn'),
(4, 'Đồ Dùng Dã Ngoại'),
(5, 'Bình Giữ Nhiệt/Giữ Lạnh'),
(6, 'Bảo Quản Đồ Đạc'),
(7, 'Hàng Gia Dụng'),
(8, 'Phụ Kiện Nhà Bếp'),
(9, 'Đồ Dùng Sinh Hoạt'),
(10, 'Đồ Dùng Trẻ Em'),
(11, 'Đồ Nội Thất');

-- --------------------------------------------------------

--
-- Table structure for table `menucon`
--

CREATE TABLE `menucon` (
  `id` int(11) NOT NULL,
  `TenMenuCon` varchar(100) NOT NULL,
  `id_Cha_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menucon`
--

INSERT INTO `menucon` (`id`, `TenMenuCon`, `id_Cha_FK`) VALUES
(1, 'Hộp kín hơi', 1),
(2, 'Hộp nhựa', 1),
(3, 'Hủ gia vị', 1),
(4, 'Nắp hộp kín hơi', 1),
(5, 'Chảo/Chảo sâu lòng', 2),
(6, 'Nồi chảo/ Nồi áp suất', 2),
(7, 'Dùng cho lò nướng', 2),
(8, 'Dụng cụ trộn thực phẩm', 2),
(9, 'Khay/ rổ', 2),
(10, 'Dụng cụ nhà bếp/ Đồ gắp', 2),
(11, '\r\nDao/ Kéo', 2),
(12, '\r\nThớt', 2),
(13, 'Bình nước', 3),
(14, 'Ly/ Cốc', 3),
(15, 'Đế nồi', 3),
(16, 'Khay', 3),
(17, 'Tấm lót bàn ăn', 3),
(18, 'Ấm đun nước', 3),
(19, 'Bình nước', 4),
(20, '\r\nHộp cơm', 4),
(21, 'Đồ dùng du lịch', 4),
(22, '\r\nĐồ dùng cắm trại', 4),
(23, 'Hộp cơm giữ nhiệt', 5),
(24, '\r\nHộp đựng cháo', 5),
(25, '\r\nBình giữ nhiệt/ Giữ lạnh', 5),
(26, 'Túi chườm lạnh', 5),
(27, 'Thùng đựng đồ', 6),
(28, 'Giỏ', 6),
(29, 'Kệ/ Tủ', 6),
(30, 'Kệ kéo', 6),
(31, 'Túi hút chân không', 6),
(32, 'Thiết bị nhà bếp', 7),
(33, 'Thiết bị gia dụng', 7),
(34, 'Dụng cụ vệ sinh', 8),
(35, 'Đồ rửa chén', 8),
(36, 'Dụng cụ làm đá', 8),
(37, 'Dụng cụ nấu ăn', 8),
(38, 'Giá/ Kệ', 8),
(39, 'Hàng dùng một lần', 8),
(40, 'Dụng cụ bảo quản tủ lạnh', 8),
(41, 'Dụng cụ nhà tắm', 9),
(42, 'Thùng rác', 9),
(43, 'Móc/Kệ treo đồ', 9),
(44, 'Chăn/ra/ gối', 9),
(45, 'Cây lau nhà', 9),
(46, 'Dụng cụ uống sữa', 10),
(47, 'Đồ dùng cho bé', 10),
(48, 'Dụng cụ vệ sinh cho bé', 10),
(49, 'Thảm cho bé', 10),
(50, 'Bàn đa năng', 11),
(51, 'Kệ treo/ Kệ sách', 11),
(52, 'Bàn/ Tủ/ Ghế', 11),
(53, 'Giường', 11),
(54, 'Sofa / Đồ dùng phòng khách', 11),
(55, 'Thảm', 11),
(56, 'Phụ kiện nội thất', 11),
(57, 'Đèn', 11),
(58, 'Tủ quần áo/ Tủ lắp ráp', 11),
(59, 'Bàn trang điểm/ Gương', 11);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` varchar(100) NOT NULL,
  `TenSP` varchar(100) NOT NULL,
  `AnhSP` longtext NOT NULL,
  `ThongTinChiTiet` longtext NOT NULL,
  `GIA_BD` float NOT NULL,
  `GIA_HT` float NOT NULL,
  `NgayDang` date NOT NULL DEFAULT current_timestamp(),
  `id_Con_FK` int(11) NOT NULL,
  `id_Cha_FK` int(11) NOT NULL,
  `SP_KM` bit(1) DEFAULT NULL,
  `SP_Best` int(11) NOT NULL,
  `Active` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `AnhSP`, `ThongTinChiTiet`, `GIA_BD`, `GIA_HT`, `NgayDang`, `id_Con_FK`, `id_Cha_FK`, `SP_KM`, `SP_Best`, `Active`) VALUES
('ABF710', 'Bình đựng nước BISFREE 500ml', 'http://www.locknlock.vn/data/base/goods/big/201821960708502.jpg', '<table class=\"detail_gosi\">\r\n<tbody>\r\n<tr><th>Thương hiệu</th>\r\n<td>Lock&amp;Lock</td>\r\n</tr>\r\n<tr><th>Sản xuất tại</th>\r\n<td>Việt Nam</td>\r\n</tr>\r\n<tr><th>Chất liệu</th>\r\n<td>nhựa Tritan kh&ocirc;ng chứa Bisphenol A</td>\r\n</tr>\r\n<tr><th>Dung t&iacute;ch</th>\r\n<td>500ml</td>\r\n</tr>\r\n<tr><th>Hướng dẫn bảo quản</th>\r\n<td>Bảo quản nơi kh&ocirc; r&aacute;o, tho&aacute;ng m&aacute;t</td>\r\n</tr>\r\n</tbody>\r\n</table>', 100000, 100000, '0000-00-00', 13, 3, b'1', 7, 'Còn hàng'),
('ABF722', 'Bình nước nhựa thể thao Tritan 700ml', 'http://www.locknlock.vn/data/base/goods/big/201821960708283.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Việt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>nhựa Tritan không chứa Bisphenol A</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Dung tích</th>\r\n								<td>700ml</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Hướng dẫn bảo quản</th>\r\n								<td>Bảo quản nơi khô ráo, thoáng mát</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 138000, 138000, '0000-00-00', 13, 3, b'1', 0, 'Tạm thời hết hàng'),
('ECF-301R', 'Nồi Chiên Không Dầu Lock& Lock ECF-301R (3.1L) - Đen', 'http://www.locknlock.vn/data/base/goods/big/201815961785125.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>THÔNG TIN SẢN PHẨM</th>\r\n								<td>-Thương hiệu:Lock&amp;Lock<br />-Xuất xứ thương hiệu:Hàn Quốc<br />-Sản xuất tại:Trung Quốc<br />-Model:ECF-301R<br />-Điện áp:220V~240V<br />-Dung tích:3.1L<br />-Trọng lượng: 5kg<br />-Kích thước:40 x 40 x 30 cm</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 4600000, 4600000, '0000-00-00', 32, 7, b'0', 0, 'Tạm thời hết hàng'),
('EJF376BLK', 'Nồi chiên không dầu kỹ thuật số thương hiệu LOCK&LOCK, 220-240V, 1500W, 4L - Màu đen (EJF376BLK)', 'http://www.locknlock.vn/data/base/goods/big/201835435195506.JPG', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Trung Quốc</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Công Suât</th>\r\n								<td>1500W</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Điện áp</th>\r\n								<td>220V,50Hz</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Màu</th>\r\n								<td>Đen</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>Nhựa PP, ABS</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Dung tích</th>\r\n								<td>4L</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 4500000, 4500000, '0000-00-00', 32, 7, b'0', 0, 'Còn hàng'),
('EJR151', 'Nồi cơm điện thương hiệu Lock&Lock 220V, 700W, 50/60Hz, 1.8L(5L) - Màu đen', 'http://www.locknlock.vn/data/base/goods/big/201913438759252.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Trung Quốc</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Loại nồi</th>\r\n								<td>Nồi Cơm Điện Tử</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Dung tích</th>\r\n								<td>1.8L</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Công suất</th>\r\n								<td>700W</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>-Thép không gỉ<br />-Nhựa PP<br />-Physical Tolerance Heat-resisting toughened glass<br />-Nhôm</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Điện áp</th>\r\n								<td>220V</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Kích thước</th>\r\n								<td>32 x 27 x 24 cm</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 1947000, 1947000, '0000-00-00', 32, 7, b'0', 13, 'Tạm thời hết hàng'),
('EJR356', 'Nồi cơm điện thương hiệu Lock&Lock 220V, 700W, 50/60Hz, 1.8L(5L) - Màu đen', 'http://www.locknlock.vn/data/base/goods/big/201913441313219.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Nơi sản xuất</th>\r\n								<td>Trung Quốc</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Loại nồi</th>\r\n								<td>Cơm điện tử</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Dung tích</th>\r\n								<td>1.5L</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>- Lòng nồi : Phủ chất chống dính Ceramic<br />-PP, SPCC, ABS, thép không gỉ</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Điện áp</th>\r\n								<td>220-240V</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 1845000, 1845000, '0000-00-00', 32, 7, b'0', 0, 'Tạm thời hết hàng'),
('ELHB-220', 'Máy Xay Trộn Đa Năng Lock&Lock ELHB-220 (420W)', 'http://www.locknlock.vn/data/base/goods/big/201816553664694.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>THÔNG TIN SẢN PHẨM</th>\r\n								<td>-Thương hiệu: Lock&amp;Lock<br />-Xuất xứ thương hiệu: Hàn Quốc<br />-Sản xuất tại: Trung Quốc<br />-Model: ELHB-220<br />-Chất liệu: cối xay-Nhựa<br />-Số lượng cối: 2<br />-Dung tích: 800ml<br />-Điện áp: 220V<br />-Công suất: 420W</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 2400000, 2400000, '0000-00-00', 32, 7, b'0', 3, 'Tạm thời hết hàng'),
('ELJE-110', 'Máy Ép Trái Cây Tốc Độ Cao Lock&Lock ELJE-110 (700W) - Đen', 'http://www.locknlock.vn/data/base/goods/big/201816554650465.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>THÔNG TIN SẢN PHẨM</th>\r\n								<td>-Thương hiệu: Lock&amp;Lock<br />-Xuất xứ thương hiệu: Hàn Quốc<br />-Sản xuất tại: Trung Quốc<br />-Model: ELJE-110<br />-Chất liệu	<br />   *Chất liệu vỏ máy: Nhựa cứng<br />   *Chất liệu nắp: Nhựa kháng vỡ<br />   *Chất liệu lưỡi dao: Thép không gỉ<br />   *Chất liệu cối xay:Thép không gỉ<br />-Công suất: 700W<br />-Trọng lượng: 4kg</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 3500000, 3500000, '0000-00-00', 32, 7, b'0', 14, 'Còn hàng'),
('HPL550', 'HPL550- Hộp bảo quản gạo bằng nhựa Lock&Lock 12kg', 'http://www.locknlock.vn/data/base/goods/big/201900832117140.jpg\r\n', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Nơi Sản xuất</th>\r\n								<td>Trung Quốc<br /></td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Kích thước</th>\r\n								<td>370 x 215 x 290 (mm)</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>Nhựa PP , PS</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Màu sắc</th>\r\n								<td>Trắng</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 290000, 290000, '0000-00-00', 1, 1, b'0', 1, 'còn hàng'),
('HPL733', 'Bình nước Jug PP 1.5L', 'http://www.locknlock.vn/data/base/goods/big/201821960708170.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Việt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>PP</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Dung tích</th>\r\n								<td>1.5L</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Hướng dẫn bảo quản</th>\r\n								<td>Bảo quản nơi khô ráo, thoáng mát</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 110000, 110000, '0000-00-00', 13, 3, b'0', 0, 'Còn hàng'),
('HPL758S3A', 'Bộ Túi Hộp Cơm Lock&Lock Triangle Pattern Bag - 470*470*300 ml\r\n', 'http://www.locknlock.vn/data/base/goods/big/201814153156395.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>THÔNG TIN SẢN PHẨM</th>\r\n								<td>Thương hiệu:Lock&amp;Lock<br />Xuất xứ thương hiệu:	Hàn Quốc<br />Sản xuất tại:Việt Nam<br />Chất liệu: Nhựa vải<br />Kích thước: Dài 20cm x Rộng 17cm x Cao 11cm</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 430000, 430000, '0000-00-00', 20, 4, b'0', 0, 'Còn hàng'),
('HPL806S6', 'Bộ 6 hộp bảo quản Lock&Lock Classic (HPL806*2, HPL807*2, HPL816*1, HPL817*1)', 'http://www.locknlock.vn/data/base/goods/big/201834440539728.JPG', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Xuất xứ thương hiệu</th>\r\n								<td>Hàn Quốc</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Viêt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>Nhựa PP</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 380000, 380000, '0000-00-00', 1, 1, b'0', 0, 'còn hàng'),
('HPL817S5', 'Bộ 6 hộp bảo quản Lock&Lock Classic (HPL817*2, HPL817C*1, HPL854*2, HPL855*1)', 'http://www.locknlock.vn/data/base/goods/big/201834440539358.JPG', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Xuất xứ thương hiệu</th>\r\n								<td>Hàn Quốc</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Viêt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>Nhựa PP</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 530000, 530000, '0000-00-00', 1, 1, b'0', 2, 'còn hàng'),
('HPL934M', 'Bình trà Lock&Lock 690ml', 'http://www.locknlock.vn/data/base/goods/big/201822850737577.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Việt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>PP</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Dung tích</th>\r\n								<td>690ml</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Hướng dẫn bảo quản</th>\r\n								<td>Bảo quản nơi khô ráo, thoáng mát</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 128000, 128000, '0000-00-00', 13, 3, b'0', 0, 'Còn hàng'),
('HPL938', 'Bình trà di động L&L có lớp chặn lá trà 600ml', 'http://www.locknlock.vn/data/base/goods/big/201822850737950.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Việt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>PP</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Dung tích</th>\r\n								<td>600ml</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Hướng dẫn bảo quản</th>\r\n								<td>Bảo quản nơi khô ráo, thoáng mát</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 70000, 70000, '0000-00-00', 13, 3, b'0', 8, 'Còn hàng'),
('HSM8440T', 'Hộp bảo quản thực phẩm Lock&Lock 950ml', 'http://www.locknlock.vn/data/base/goods/big/201836251331324.jpg\r\n', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Viêt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>nhựa PP</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Dung tích</th>\r\n								<td>950ml</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 129000, 129000, '0000-00-00', 2, 1, b'0', 0, 'còn hàng'),
('HSM8450T', 'Tô Salad 1.6L W/Khay&Khay nước sốt', 'http://www.locknlock.vn/data/base/goods/big/201836251331782.jpg\r\n', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Viêt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>Nhựa PP</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Dung tích</th>\r\n								<td>1.6L</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 155000, 150000, '0000-00-00', 2, 1, b'0', 4, 'còn hàng'),
('INL301WS10', 'Bộ 10 hộp Interlock (INL301W*4, INL302W*4, INL303W*2)', 'http://www.locknlock.vn/data/base/goods/big/201834440537098.JPG', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Xuất xứ thương hiệu</th>\r\n								<td>Hàn Quốc</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Viêt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>Thân: Nhựa Pet , Nắp: Nhựa PP</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Dung tích</th>\r\n								<td>1.6L*2EA , 1L*4EA, 500ml*4EA</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 600000, 600000, '0000-00-00', 1, 1, b'0', 0, 'còn hàng'),
('LBU1203', 'Chảo nhôm chống dính BAUM Marble 20cm, 1 tay cầm, hiệu L&amp;L', 'http://www.locknlock.vn/data/base/goods/big/201834536586893.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Xuất xứ thương hiệu</th>\r\n								<td>Hàn Quốc</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Viêt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Kích thước</th>\r\n								<td>20 cm</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 349000, 349000, '0000-00-00', 5, 2, NULL, 0, 'còn hàng'),
('LBU1242', 'Nồi nhôm chống dính BAUM Marble 24cm, 2 tay cầm, nắp thủy tinh, hiệu L&L', 'http://www.locknlock.vn/data/base/goods/big/201834536586984.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Xuất xứ thương hiệu</th>\r\n								<td>Hàn Quốc</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Viêt Nam</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 749000, 749000, '0000-00-00', 5, 2, b'0', 5, 'Tạm thời hết hàng'),
('LBU1243', 'Chảo nhôm chống dính BAUM Marble 24cm, 1 tay cầm, hiệu L&L', 'http://www.locknlock.vn/data/base/goods/big/201834536586878.jpg\r\n', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Xuất xứ thương hiệu</th>\r\n								<td>Hàn Quốc</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Viêt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Kích thước</th>\r\n								<td>24 cm</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 390000, 390000, '0000-00-00', 5, 2, b'0', 0, 'Tạm thời hết hàng'),
('LBU1285', 'Chảo nhôm sâu lòng chống dính BAUM Marble 28cm, 1 tay cầm, nắp thủy tinh, hiệu L&L', 'http://www.locknlock.vn/data/base/goods/big/201834536587472.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Xuất xứ thương hiệu</th>\r\n								<td>Hàn Quốc</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Viêt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Kích thước</th>\r\n								<td>28 cm</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 669000, 669000, '0000-00-00', 5, 2, b'0', 0, 'Tạm thời hết hàng'),
('LBU1305', 'Chảo nhôm sâu lòng chống dính BAUM Marble 30cm, 1 tay cầm, nắp thủy tinh, hiệu L&L', 'http://www.locknlock.vn/data/base/goods/big/201834536587801.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Xuất xứ thương hiệu</th>\r\n								<td>Hàn Quốc</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Viêt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Kích thước</th>\r\n								<td>30 cm</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 759000, 759000, '0000-00-00', 5, 2, b'0', 6, 'Tạm thời hết hàng'),
('LHB2303OK-IH', 'Chảo Cookplus Hard&Light 30cm, W/Coating inside Okitsumo (Có thể sử dụng bếp từ)', 'http://www.locknlock.vn/data/base/goods/big/201825359631992.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>hương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Xuất xứ thương hiệu</th>\r\n								<td>Hàn Quốc</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Việt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Màu/Mẫu</th>\r\n								<td>Đen</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>Nhôm, lớp chống dính</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 550000, 550000, '0000-00-00', 5, 2, b'0', 0, 'Tạm thời hết hàng'),
('LHC1448PIK', 'LHC1448PIK - Bình nước giữ nhiệt Lock&Lock City Vacuum Bottle (Olympic) Montreal 700ml - Màu hồng', 'http://www.locknlock.vn/data/base/goods/big/201900755110529.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Nơi sản xuất</th>\r\n								<td>Trung Quốc</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>Thân bình bằng thép không gỉ; nắp bằng nhựa PP, Gioăng Silicone</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Dung tích</th>\r\n								<td>700ml</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 482000, 482000, '0000-00-00', 25, 5, b'0', 0, 'Còn hàng'),
('LHC4131', 'Bình giữ nhiệt Lock&Lock Feather Light 450ml', 'http://www.locknlock.vn/data/base/goods/big/201822947765599.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Trung Quốc</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>Thép không gỉ</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Dung tích</th>\r\n								<td>500ml</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Màu</th>\r\n								<td>Trắng nắp đỏ, Trắng nắp xanh , Đen nắp đỏ, Đen nắp xanh</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Hướng dẫn bảo quản</th>\r\n								<td>Bảo quản nơi khô ráo, thoáng mát</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 470000, 470000, '0000-00-00', 25, 5, b'0', 0, 'Còn hàng'),
('LHC4153', 'Bình giữ nhiệt bằng thép không gỉ Lock&Lock Loop Tumbler 530ml', 'http://www.locknlock.vn/data/base/goods/big/202006239387361.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Trung Quốc</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>Thép không gỉ</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Dung tích</th>\r\n								<td>530ml</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Màu</th>\r\n								<td>Hồng, Xanh Mint</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Hướng dẫn bảo quản</th>\r\n								<td>Bảo quản nơi khô ráo, thoáng mát</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 430000, 430000, '0000-00-00', 25, 5, b'0', 0, 'Còn hàng'),
('LHC4169BLU', 'LHC4169BLU- Bình giữ nhiệt i.d Tumbler bằng thép không gỉ Lock & Lock 450ml, màu xanh da trời', 'http://www.locknlock.vn/data/base/goods/big/201913555591084.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Nơi sản xuất</th>\r\n								<td>Trung Quốc</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>Thân: thép không gỉ (phủ sứ)<br />- Nắp: nhựa PP, Gioăng: silicone</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Dung tích</th>\r\n								<td>450ml</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 440000, 440000, '0000-00-00', 25, 5, b'0', 0, 'Tạm thời hết hàng'),
('LHC561', 'LHC561-Bình giữ nhiệt nóng và lạnh Hot&Cool Mini 300ml - Màu đen', 'http://www.locknlock.vn/data/base/goods/big/201900760946430.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>THÔNG TIN SẢN PHẨM</th>\r\n								<td>-Thương hiệu:	Lock&amp;Lock<br />-Xuất xứ thương hiệu:Hàn Quốc<br />-Sản xuất tại:Trung Quốc<br />-Model:LHC561<br />-Dung tích:300ml<br />-Chất liệu	:Inox 304-Nhựa PP-Vòng silicone<br />-Hướng dẫn sử dụng:	Đựng thức uống nóng, lạnh<br />-Hướng dẫn bảo quản:Bảo quản nơi khô ráo, thoáng mát</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Màu</th>\r\n								<td>- Đỏ<br />- Đen</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 385000, 385000, '0000-00-00', 25, 5, b'0', 11, 'Còn hàng'),
('LHC8029', 'LHC8029- Hộp cơm giữ nhiệt thương hiệu Lock & Lock, 500ml (Màu đỏ, xanh, đen)', 'http://www.locknlock.vn/data/base/goods/big/201913559744948.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Nơi sản xuất</th>\r\n								<td>Trung Quốc</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Dung tích</th>\r\n								<td>500ml</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>- Thân: thép không rỉ 304<br />- Nắp đậy bên trong: nhựa Polypropylene(PP)<br />- Gioăng: silicone</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 515000, 515000, '0000-00-00', 25, 5, b'0', 12, 'Còn hàng'),
('lhc803slv', 'LHC8031SLV-OCH - Bộ hộp cơm giữ nhiệt L&L bằng thép không gỉ -460ml*1, 420ml*1, 280ml*1, đũa*1, túi', 'http://www.locknlock.vn/data/base/goods/big/201914957458521.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Nơi sản xuất</th>\r\n								<td>Trung Quốc</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>- Thân, đũa: thép không gỉ<br />- Nắp: nhựa PP</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Dung tích</th>\r\n								<td>* 460ml : 1 hộp<br />* 420ml : 1 hộp<br />* 280ml : 1 hộp</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 1100000, 1100000, '0000-00-00', 20, 4, b'0', 0, 'Còn hàng'),
('LKT643W', 'Bình nước bằng nhựa Hello Kitty_Wonderful - 700 ml', 'http://www.locknlock.vn/data/base/goods/big/201828937687732.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Xuất xứ thương hiệu</th>\r\n								<td>Hàn Quốc</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Việt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Dung tích</th>\r\n								<td>700ml</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 122000, 122000, '0000-00-00', 13, 3, b'0', 0, 'Còn hàng'),
('LLG224S3', 'Bộ 3 hộp thủy tinh L&L Euro (LLG214*2, LLG224*1)', 'http://www.locknlock.vn/data/base/goods/big/201900833453671.jpg\r\n', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock<br /></td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Nơi sản xuất</th>\r\n								<td>Việt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>Borosilicate</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Dung tích</th>\r\n								<td>500ml*2; 750ml*1</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 570000, 570000, '0000-00-00', 1, 1, b'0', 0, 'còn hàng'),
('LLG422WN3', 'Bộ túi hộp cơm thủy tinh L&L 4EA (LLG422*3, HWB801WN-B-0*1) - Màu Wine', 'http://www.locknlock.vn/data/base/goods/big/201829053857496.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương Hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Việt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>Thủy tinh Chịu nhiệt</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Màu</th>\r\n								<td>Wine</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 620000, 620000, '0000-00-00', 20, 4, b'0', 0, 'Còn hàng'),
('LLG424BTZ3', 'Bộ hộp cơm thủy tinh chịu nhiệt L&L 4EA (LLG424*3,LLG424BLU(TZ)-0*1) - Màu xanh TZ', 'http://www.locknlock.vn/data/base/goods/big/201829053857447.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương Hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Việt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>Thủy tinh Chịu nhiệt</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Màu</th>\r\n								<td>Xanh TZ</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 550000, 550000, '0000-00-00', 20, 4, b'0', 0, 'Còn hàng'),
('LLG428M2', 'Bộ túi hộp cơm thủy tinh L&L 3EA (LLG429D*1,LLG428*1,HWB398GF*1) - Màu xanh Mint', 'http://www.locknlock.vn/data/base/goods/big/201829053857346.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương Hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Việt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>Thủy tinh Chịu nhiệt</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Màu</th>\r\n								<td>Xanh Mint</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 600000, 600000, '0000-00-00', 20, 4, b'0', 9, 'Còn hàng'),
('LLG430GN3', 'Bộ túi hộp cơm thủy tinh L&L 4EA (LLG424*1, LLG430*2, HWB801GN-B-0*1) - Màu xanh lá', 'http://www.locknlock.vn/data/base/goods/big/201829053858890.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương Hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Việt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>Thủy tinh Chịu nhiệt</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Màu</th>\r\n								<td>Xanh lá</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 620000, 620000, '0000-00-00', 20, 4, b'0', 10, 'Còn hàng'),
('LLS213R', 'Hộp nhựa L&L Twist Two way 330ml+150ml - Nắp màu đỏ', 'http://www.locknlock.vn/data/base/goods/big/201836251332093.jpeg\r\n', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Viêt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>Nhựa PP</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Dung tích</th>\r\n								<td>330ml + 150ml</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 75000, 75000, '0000-00-00', 2, 1, b'0', 0, 'còn hàng'),
('LLS221R', 'Hộp nhựa L&L Twist Two way 360ml+310ml - Nắp màu đỏ', 'http://www.locknlock.vn/data/base/goods/big/201835450014217.jpg', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Nơi sản xuất</th>\r\n								<td>Việt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>Nhựa PP</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Dung tích</th>\r\n								<td>360ml+310ml</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 85000, 85000, '0000-00-00', 1, 1, b'0', 0, 'còn hàng'),
('LLS222R', 'Hộp nhựa L&L Twist Two way 560ml+310ml - Nắp màu đỏ', 'http://www.locknlock.vn/data/base/goods/big/201836251332109.jpg\r\n', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Viêt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>Nhựa PP</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Dung tích</th>\r\n								<td>560ml + 310ml</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 95000, 95000, '0000-00-00', 2, 1, b'0', 0, 'còn hàng'),
('LLS223R\r\n', 'Hộp nhựa L&L Twist Two way 760ml+310ml - Nắp màu đỏ', 'http://www.locknlock.vn/data/base/goods/big/201836251332237.jpg\r\n', '<table class=\"detail_gosi\">\r\n						<tbody>\r\n\r\n							<tr>\r\n								<th>Thương hiệu</th>\r\n								<td>Lock&amp;Lock</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Sản xuất tại</th>\r\n								<td>Viêt Nam</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Chất liệu</th>\r\n								<td>Nhựa PP</td>\r\n							</tr>\r\n\r\n							<tr>\r\n								<th>Dung tích</th>\r\n								<td>760ml + 310ml</td>\r\n							</tr>\r\n\r\n						</tbody>\r\n					</table>', 99000, 99000, '0000-00-00', 2, 1, b'0', 0, 'Tạm thời hết hàng');

-- --------------------------------------------------------

--
-- Table structure for table `sukien`
--

CREATE TABLE `sukien` (
  `MaSuKien` int(11) NOT NULL,
  `TieuDe` varchar(100) NOT NULL,
  `AnhDaiDien` varchar(100) NOT NULL,
  `ChiTiet` varchar(100) NOT NULL,
  `NgayDang` date NOT NULL,
  `Active` bit(5) NOT NULL,
  `MaSP_FK` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Firstname`, `Lastname`, `Gender`, `Email`, `Password`, `Phone`, `Address`) VALUES
(13, 'nguyen', 'b', 'Male', 'b@gmail', '$2y$10$IYovXK2kTPPhw4QEdOX3duyQPNSofkEVKPhLPwciw7KWYJyfv0l4O', '123', '202 tphcm'),
(15, 'le', 'the', 'Male', 'the@gmail', '$2y$10$uq8DkpJeqgb/H8J/zf45buzjU584KefbfLND0Qz3Up1BvCWILIxCK', '12345', '202 tphcm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MaSP_FK` (`MaSP_FK`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menucha`
--
ALTER TABLE `menucha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menucon`
--
ALTER TABLE `menucon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Cha_FK` (`id_Cha_FK`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `id_Con_FK` (`id_Con_FK`);

--
-- Indexes for table `sukien`
--
ALTER TABLE `sukien`
  ADD PRIMARY KEY (`MaSuKien`),
  ADD KEY `MaSP_FK` (`MaSP_FK`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `menucha`
--
ALTER TABLE `menucha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`MaSP_FK`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_Con_FK`) REFERENCES `menucon` (`id`);

--
-- Constraints for table `sukien`
--
ALTER TABLE `sukien`
  ADD CONSTRAINT `sukien_ibfk_1` FOREIGN KEY (`MaSP_FK`) REFERENCES `sanpham` (`MaSP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
