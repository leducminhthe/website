-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 11, 2020 lúc 09:46 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbquanlybanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
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
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `Name`, `Address`, `Email`, `Phone`, `Message`, `Grandtotal`, `TenSP`, `MaSP`, `SL`, `Subtotal`, `Phuongthuc`, `date_order`) VALUES
(8, 'lethe', '12345', 'the@gmail', '12345', '', '110000', 'Bình đựng nước BISFREE 500ml', 'ABF710', '1', '100000', 'Thanh toán khi nhận hàng', '2020-07-11 05:00:21'),
(10, 'lethe', '12345', 'the@gmail', '12345', '', '110000', 'Bình đựng nước BISFREE 500ml', 'ABF710', '1', '100000', 'Thanh toán khi nhận hàng', '2020-07-11 06:18:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `AnhSP` text NOT NULL,
  `MaSP_FK` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `images`
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
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `HoTen` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `Phone` varchar(100) DEFAULT NULL,
  `Message` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id`, `HoTen`, `email`, `Phone`, `Message`) VALUES
(0, 'the', 'the@gmail', '12345', '12345');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menucha`
--

CREATE TABLE `menucha` (
  `id` int(11) NOT NULL,
  `TenMenuCha` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `menucha`
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
-- Cấu trúc bảng cho bảng `menucon`
--

CREATE TABLE `menucon` (
  `id` int(11) NOT NULL,
  `TenMenuCon` varchar(100) NOT NULL,
  `id_Cha_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `menucon`
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
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` varchar(100) NOT NULL,
  `TenSP` varchar(100) NOT NULL,
  `AnhSP` longtext NOT NULL,
  `ThongTinChiTiet` varchar(300) NOT NULL,
  `GIA_BD` float NOT NULL,
  `GIA_HT` float NOT NULL,
  `NgayDang` date NOT NULL,
  `id_Con_FK` int(11) NOT NULL,
  `id_Cha_FK` int(11) NOT NULL,
  `SP_KM` bit(1) DEFAULT NULL,
  `SP_HOT` bit(1) DEFAULT NULL,
  `Active` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `AnhSP`, `ThongTinChiTiet`, `GIA_BD`, `GIA_HT`, `NgayDang`, `id_Con_FK`, `id_Cha_FK`, `SP_KM`, `SP_HOT`, `Active`) VALUES
('ABF710', 'Bình đựng nước BISFREE 500ml', 'http://www.locknlock.vn/data/base/goods/big/201821960708502.jpg', 'Thương hiệu	Lock&Lock\r\nSản xuất tại	Việt Nam\r\nChất liệu	nhựa Tritan không chứa Bisphenol A\r\nDung tích	500ml\r\nHướng dẫn bảo quản	Bảo quản nơi khô ráo, thoáng mát', 100000, 100000, '0000-00-00', 13, 0, b'0', b'0', 'Tạm thời hết hàng'),
('ABF722', 'Bình nước nhựa thể thao Tritan 700ml', 'http://www.locknlock.vn/data/base/goods/big/201821960708283.jpg', 'Thương hiệu	Lock&Lock\r\nSản xuất tại	Việt Nam\r\nChất liệu	nhựa Tritan không chứa Bisphenol A\r\nDung tích	700ml\r\nHướng dẫn bảo quản	Bảo quản nơi khô ráo, thoáng mát', 138000, 138000, '0000-00-00', 13, 0, b'0', b'0', 'Tạm thời hết hàng'),
('ECF-301R', 'Nồi Chiên Không Dầu Lock& Lock ECF-301R (3.1L) - Đen', 'http://www.locknlock.vn/data/base/goods/big/201815961785125.jpg', 'THÔNG TIN SẢN PHẨM	\r\n-Thương hiệu:Lock&Lock\r\n-Xuất xứ thương hiệu:Hàn Quốc\r\n-Sản xuất tại:Trung Quốc\r\n-Model:ECF-301R\r\n-Điện áp:220V~240V\r\n-Dung tích:3.1L\r\n-Trọng lượng: 5kg\r\n-Kích thước:40 x 40 x 30 cm', 4600000, 4600000, '0000-00-00', 32, 0, b'0', b'0', 'Tạm thời hết hàng'),
('EJF376BLK', 'Nồi chiên không dầu kỹ thuật số thương hiệu LOCK&LOCK, 220-240V, 1500W, 4L - Màu đen (EJF376BLK)', 'http://www.locknlock.vn/data/base/goods/big/201835435195506.JPG', 'Thương hiệu	Lock&Lock\r\nSản xuất tại	Trung Quốc\r\nCông Suât	1500W\r\nĐiện áp	220V,50Hz\r\nMàu	Đen\r\nChất liệu	Nhựa PP, ABS\r\nDung tích	4L', 4500000, 4500000, '0000-00-00', 32, 0, b'0', b'0', 'Còn hàng'),
('EJR151', 'Nồi cơm điện thương hiệu Lock&Lock 220V, 700W, 50/60Hz, 1.8L(5L) - Màu đen', 'http://www.locknlock.vn/data/base/goods/big/201913438759252.jpg', 'Thương hiệu	Lock&Lock\r\nSản xuất tại	Trung Quốc\r\nLoại nồi	Nồi Cơm Điện Tử\r\nDung tích	1.8L\r\nCông suất	700W\r\nChất liệu	-Thép không gỉ\r\n-Nhựa PP\r\n-Physical Tolerance Heat-resisting toughened glass\r\n-Nhôm\r\nĐiện áp	220V\r\nKích thước	32 x 27 x 24 cm', 1947000, 1947000, '0000-00-00', 32, 0, b'0', b'0', 'Tạm thời hết hàng'),
('EJR356', 'Nồi cơm điện thương hiệu Lock&Lock 220V, 700W, 50/60Hz, 1.8L(5L) - Màu đen', 'http://www.locknlock.vn/data/base/goods/big/201913441313219.jpg', 'Thương hiệu	Lock&Lock\r\nNơi sản xuất	Trung Quốc\r\nLoại nồi	Cơm điện tử\r\nDung tích	1.5L\r\nChất liệu	- Lòng nồi : Phủ chất chống dính Ceramic\r\n-PP, SPCC, ABS, thép không gỉ\r\nĐiện áp	220-240V', 1845000, 1845000, '0000-00-00', 32, 0, b'0', b'0', 'Tạm thời hết hàng'),
('ELHB-220', 'Máy Xay Trộn Đa Năng Lock&Lock ELHB-220 (420W)', 'http://www.locknlock.vn/data/base/goods/big/201816553664694.jpg', 'THÔNG TIN SẢN PHẨM	\r\n-Thương hiệu: Lock&Lock\r\n-Xuất xứ thương hiệu: Hàn Quốc\r\n-Sản xuất tại: Trung Quốc\r\n-Model: ELHB-220\r\n-Chất liệu: cối xay-Nhựa\r\n-Số lượng cối: 2\r\n-Dung tích: 800ml\r\n-Điện áp: 220V\r\n-Công suất: 420W', 2400000, 2400000, '0000-00-00', 32, 0, b'0', b'0', 'Tạm thời hết hàng'),
('ELJE-110', 'Máy Ép Trái Cây Tốc Độ Cao Lock&Lock ELJE-110 (700W) - Đen', 'http://www.locknlock.vn/data/base/goods/big/201816554650465.jpg', 'THÔNG TIN SẢN PHẨM	\r\n-Thương hiệu: Lock&Lock\r\n-Xuất xứ thương hiệu: Hàn Quốc\r\n-Sản xuất tại: Trung Quốc\r\n-Model: ELJE-110\r\n-Chất liệu	\r\n   *Chất liệu vỏ máy: Nhựa cứng\r\n   *Chất liệu nắp: Nhựa kháng vỡ\r\n   *Chất liệu lưỡi dao: Thép không gỉ\r\n   *Chất liệu cối xay:Thép không gỉ\r\n-Công suất: 700W\r\n-Tr', 3500000, 3500000, '0000-00-00', 32, 0, b'0', b'0', 'Còn hàng'),
('HPL550', 'HPL550- Hộp bảo quản gạo bằng nhựa Lock&Lock 12kg', 'http://www.locknlock.vn/data/base/goods/big/201900832117140.jpg\r\n', '<img src=\"/prod/spec_img/HPL550%2D%5Fdesign.jpg\">\r\nThương hiệu: Lock&Lock\r\nNơi Sản XUất: Trung Quốc\r\nKích thước: 370 x 215 x 290(mm)\r\nChất liệu: Nhựa PP,PS\r\nMàu Sắc: Trắng', 290000, 290000, '0000-00-00', 1, 0, b'0', b'0', 'còn hàng'),
('HPL733', 'Bình nước Jug PP 1.5L', 'http://www.locknlock.vn/data/base/goods/big/201821960708170.jpg', 'Thương hiệu	Lock&Lock\r\nSản xuất tại	Việt Nam\r\nChất liệu	PP\r\nDung tích	1.5L\r\nHướng dẫn bảo quản	Bảo quản nơi khô ráo, thoáng mát', 110000, 110000, '0000-00-00', 13, 0, b'0', b'0', 'Còn hàng'),
('HPL758S3A', 'Bộ Túi Hộp Cơm Lock&Lock Triangle Pattern Bag - 470*470*300 ml\r\n', 'http://www.locknlock.vn/data/base/goods/big/201814153156395.jpg', 'THÔNG TIN SẢN PHẨM	\r\nThương hiệu:Lock&Lock\r\nXuất xứ thương hiệu:	Hàn Quốc\r\nSản xuất tại:Việt Nam\r\nChất liệu: Nhựa vải\r\nKích thước: Dài 20cm x Rộng 17cm x Cao 11cm', 430000, 430000, '0000-00-00', 20, 0, b'0', b'0', 'Còn hàng'),
('HPL806S6', 'Bộ 6 hộp bảo quản Lock&Lock Classic (HPL806*2, HPL807*2, HPL816*1, HPL817*1)', 'http://www.locknlock.vn/data/base/goods/big/201834440539728.JPG', '<img src=\"/prod/spec_img/3.JPG\">\r\n<img src=\"/prod/spec_img/HPL806S6.JPG\">\r\n<img src=\"/prod/spec_img/HPL806S6%2DCover.JPG\">\r\nThương hiệu	Lock&Lock\r\nXuất xứ thương hiệu	Hàn Quốc\r\nSản xuất tại	Viêt Nam\r\nChất liệu	Nhựa PP', 380000, 380000, '0000-00-00', 1, 0, b'0', b'0', 'còn hàng'),
('HPL817S5', 'Bộ 6 hộp bảo quản Lock&Lock Classic (HPL817*2, HPL817C*1, HPL854*2, HPL855*1)', 'http://www.locknlock.vn/data/base/goods/big/201834440539358.JPG', '<img src=\"/prod/spec_img/HPL817S5%5Fcover%5F5.JPG\" title=\"HPL817S5%5Fcover%5F5.JPG\" ow=\"1500\" oh=\"1500\" style=\"width: 1100px; height: auto;\">\r\n<img src=\"/prod/spec_img/HPL817S5%5Fcover%5F2.JPG\" title=\"HPL817S5%5Fcover%5F2.JPG\" ow=\"1500\" oh=\"1500\" style=\"width: 1100px; height: auto;\">\r\n<img src=\"/pro', 530000, 530000, '0000-00-00', 1, 0, b'0', b'0', 'còn hàng'),
('HPL934M', 'Bình trà Lock&Lock 690ml', 'http://www.locknlock.vn/data/base/goods/big/201822850737577.jpg', 'Thương hiệu	Lock&Lock\r\nSản xuất tại	Việt Nam\r\nChất liệu	PP\r\nDung tích	690ml\r\nHướng dẫn bảo quản	Bảo quản nơi khô ráo, thoáng mát', 128000, 128000, '0000-00-00', 13, 0, b'0', b'0', 'Còn hàng'),
('HPL938', 'Bình trà di động L&L có lớp chặn lá trà 600ml', 'http://www.locknlock.vn/data/base/goods/big/201822850737950.jpg', 'Thương hiệu	Lock&Lock\r\nSản xuất tại	Việt Nam\r\nChất liệu	PP\r\nDung tích	600ml\r\nHướng dẫn bảo quản	Bảo quản nơi khô ráo, thoáng mát', 70000, 70000, '0000-00-00', 13, 0, b'0', b'0', 'Còn hàng'),
('HSM8440T', 'Hộp bảo quản thực phẩm Lock&Lock 950ml', 'http://www.locknlock.vn/data/base/goods/big/201836251331324.jpg\r\n', '<img src=\"/prod/spec_img/HSM8440T%2D2.jpg\" title=\"HSM8440T%2D2.jpg\" ow=\"500\" oh=\"331\">\r\n<img src=\"/prod/spec_img/HSM8440T%2D1.jpg\" title=\"HSM8440T%2D1.jpg\" ow=\"600\" oh=\"516\">\r\nThương hiệu	Lock&Lock\r\nSản xuất tại	Viêt Nam\r\nChất liệu	nhựa PP\r\nDung tích	950ml', 129000, 129000, '0000-00-00', 2, 0, b'0', b'0', 'còn hàng'),
('HSM8450T', 'Tô Salad 1.6L W/Khay&Khay nước sốt', 'http://www.locknlock.vn/data/base/goods/big/201836251331782.jpg\r\n', '<img src=\"/prod/spec_img/HSM8450T%2D2.jpg\" title=\"HSM8450T%2D2.jpg\" ow=\"500\" oh=\"500\">\r\n<img src=\"/prod/spec_img/HSM8450T%2D1.jpg\" title=\"HSM8450T%2D1.jpg\" ow=\"550\" oh=\"550\">\r\nThương hiệu	Lock&Lock\r\nSản xuất tại	Viêt Nam\r\nChất liệu	Nhựa PP\r\nDung tích	1.6L', 155000, 150000, '0000-00-00', 2, 0, b'0', b'0', 'còn hàng'),
('INL301WS10', 'Bộ 10 hộp Interlock (INL301W*4, INL302W*4, INL303W*2)', 'http://www.locknlock.vn/data/base/goods/big/201834440537098.JPG', 'Thương hiệu	Lock&Lock\r\nXuất xứ thương hiệu	Hàn Quốc\r\nSản xuất tại	Viêt Nam\r\nChất liệu	Thân: Nhựa Pet , Nắp: Nhựa PP\r\nDung tích	1.6L*2EA , 1L*4EA, 500ml*4EA', 600000, 600000, '0000-00-00', 1, 0, b'0', b'0', 'còn hàng'),
('LBU1242', 'Nồi nhôm chống dính BAUM Marble 24cm, 2 tay cầm, nắp thủy tinh, hiệu L&L', 'http://www.locknlock.vn/data/base/goods/big/201834536586984.jpg', '<img src=\"/prod/spec_img/LBU1242.jpg\" title=\"LBU1242.jpg\" ow=\"750\" oh=\"5243\">\r\nThương hiệu	Lock&Lock\r\nXuất xứ thương hiệu	Hàn Quốc\r\nSản xuất tại	Viêt Nam', 749000, 749000, '0000-00-00', 5, 0, b'0', b'0', 'Tạm thời hết hàng'),
('LBU1243', 'Chảo nhôm chống dính BAUM Marble 24cm, 1 tay cầm, hiệu L&L', 'http://www.locknlock.vn/data/base/goods/big/201834536586878.jpg\r\n', '<img src=\"/prod/spec_img/LBU1243.jpg\" title=\"LBU1243.jpg\" ow=\"750\" oh=\"5150\">\r\nThương hiệu	Lock&Lock\r\nXuất xứ thương hiệu	Hàn Quốc\r\nSản xuất tại	Viêt Nam\r\nKích thước	24 cm', 390000, 390000, '0000-00-00', 5, 0, b'0', b'0', 'Tạm thời hết hàng'),
('LBU1283\r\n', 'Chảo nhôm chống dính BAUM Marble 28cm, 1 tay cầm, hiệu L&L', 'http://www.locknlock.vn/data/base/goods/big/201834536587465.jpg\r\n', '<img src=\"/prod/spec_img/LBU1283.jpg\" title=\"LBU1283.jpg\" ow=\"750\" oh=\"5150\">\r\nThương hiệu	Lock&Lock\r\nXuất xứ thương hiệu	Hàn Quốc\r\nSản xuất tại	Viêt Nam\r\nKích thước	24 cm', 490000, 490000, '0000-00-00', 5, 0, b'0', b'0', 'Tạm thời hết hàng'),
('LBU1285', 'Chảo nhôm sâu lòng chống dính BAUM Marble 28cm, 1 tay cầm, nắp thủy tinh, hiệu L&L', 'http://www.locknlock.vn/data/base/goods/big/201834536587472.jpg', '<img src=\"/prod/spec_img/LBU1285.jpg\" title=\"LBU1285.jpg\" ow=\"750\" oh=\"5243\">\r\nThương hiệu	Lock&Lock\r\nXuất xứ thương hiệu	Hàn Quốc\r\nSản xuất tại	Viêt Nam\r\nKích thước	28 cm', 669000, 669000, '0000-00-00', 5, 0, b'0', b'0', 'Tạm thời hết hàng'),
('LBU1305', 'Chảo nhôm sâu lòng chống dính BAUM Marble 30cm, 1 tay cầm, nắp thủy tinh, hiệu L&L', 'http://www.locknlock.vn/data/base/goods/big/201834536587801.jpg', '<img src=\"/prod/spec_img/LBU1305.jpg\" title=\"LBU1305.jpg\" ow=\"750\" oh=\"5243\">\r\nThương hiệu	Lock&Lock\r\nXuất xứ thương hiệu	Hàn Quốc\r\nSản xuất tại	Viêt Nam\r\nKích thước	30 cm', 759000, 759000, '0000-00-00', 5, 0, b'0', b'0', 'Tạm thời hết hàng'),
('LHB2303OK-IH', 'Chảo Cookplus Hard&Light 30cm, W/Coating inside Okitsumo (Có thể sử dụng bếp từ)', 'http://www.locknlock.vn/data/base/goods/big/201825359631992.jpg', 'hương hiệu	Lock&Lock\r\nXuất xứ thương hiệu	Hàn Quốc\r\nSản xuất tại	Việt Nam\r\nMàu/Mẫu	Đen\r\nChất liệu	Nhôm, lớp chống dính', 550000, 550000, '0000-00-00', 5, 0, b'0', b'0', 'Tạm thời hết hàng'),
('LHC1448PIK', 'LHC1448PIK - Bình nước giữ nhiệt Lock&Lock City Vacuum Bottle (Olympic) Montreal 700ml - Màu hồng', 'http://www.locknlock.vn/data/base/goods/big/201900755110529.jpg', 'Thương hiệu	Lock&Lock\r\nNơi sản xuất	Trung Quốc\r\nChất liệu	Thân bình bằng thép không gỉ; nắp bằng nhựa PP, Gioăng Silicone\r\nDung tích	700ml', 482000, 482000, '0000-00-00', 25, 0, b'0', b'0', 'Còn hàng'),
('LHC4131', 'Bình giữ nhiệt Lock&Lock Feather Light 450ml', 'http://www.locknlock.vn/data/base/goods/big/201822947765599.jpg', 'Thương hiệu	Lock&Lock\r\nSản xuất tại	Trung Quốc\r\nChất liệu	Thép không gỉ\r\nDung tích	500ml\r\nMàu	Trắng nắp đỏ, Trắng nắp xanh , Đen nắp đỏ, Đen nắp xanh\r\nHướng dẫn bảo quản	Bảo quản nơi khô ráo, thoáng mát', 470000, 470000, '0000-00-00', 25, 0, b'0', b'0', 'Còn hàng'),
('LHC4153', 'Bình giữ nhiệt bằng thép không gỉ Lock&Lock Loop Tumbler 530ml', 'http://www.locknlock.vn/data/base/goods/big/202006239387361.jpg', 'Thương hiệu	Lock&Lock\r\nSản xuất tại	Trung Quốc\r\nChất liệu	Thép không gỉ\r\nDung tích	530ml\r\nMàu	Hồng, Xanh Mint\r\nHướng dẫn bảo quản	Bảo quản nơi khô ráo, thoáng mát', 430000, 430000, '0000-00-00', 25, 0, b'0', b'0', 'Còn hàng'),
('LHC4169BLU', 'LHC4169BLU- Bình giữ nhiệt i.d Tumbler bằng thép không gỉ Lock & Lock 450ml, màu xanh da trời', 'http://www.locknlock.vn/data/base/goods/big/201913555591084.jpg', 'Thương hiệu	Lock&Lock\r\nNơi sản xuất	Trung Quốc\r\nChất liệu	Thân: thép không gỉ (phủ sứ)\r\n- Nắp: nhựa PP, Gioăng: silicone\r\nDung tích	450ml', 440000, 440000, '0000-00-00', 25, 0, b'0', b'0', 'Tạm thời hết hàng'),
('LHC561', 'LHC561-Bình giữ nhiệt nóng và lạnh Hot&Cool Mini 300ml - Màu đen', 'http://www.locknlock.vn/data/base/goods/big/201900760946430.jpg', 'THÔNG TIN SẢN PHẨM	\r\n-Thương hiệu:	Lock&Lock\r\n-Xuất xứ thương hiệu:Hàn Quốc\r\n-Sản xuất tại:Trung Quốc\r\n-Model:LHC561\r\n-Dung tích:300ml\r\n-Chất liệu	:Inox 304-Nhựa PP-Vòng silicone\r\n-Hướng dẫn sử dụng:	Đựng thức uống nóng, lạnh\r\n-Hướng dẫn bảo quản:Bảo quản nơi khô ráo, thoáng mát\r\nMàu	\r\n- Đỏ\r\n- Đen', 385000, 385000, '0000-00-00', 25, 0, b'0', b'0', 'Còn hàng'),
('LHC8029', 'LHC8029- Hộp cơm giữ nhiệt thương hiệu Lock & Lock, 500ml (Màu đỏ, xanh, đen)', 'http://www.locknlock.vn/data/base/goods/big/201913559744948.jpg', 'Thương hiệu	Lock&Lock\r\nNơi sản xuất	Trung Quốc\r\nDung tích	500ml\r\nChất liệu	- Thân: thép không rỉ 304\r\n- Nắp đậy bên trong: nhựa Polypropylene(PP)\r\n- Gioăng: silicone', 515000, 515000, '0000-00-00', 25, 0, b'0', b'0', 'Còn hàng'),
('lhc803slv', 'LHC8031SLV-OCH - Bộ hộp cơm giữ nhiệt L&L bằng thép không gỉ -460ml*1, 420ml*1, 280ml*1, đũa*1, túi', 'http://www.locknlock.vn/data/base/goods/big/201914957458521.jpg', 'Thương hiệu	Lock&Lock\r\nNơi sản xuất	Trung Quốc\r\nChất liệu	- Thân, đũa: thép không gỉ\r\n- Nắp: nhựa PP\r\nDung tích	* 460ml : 1 hộp\r\n* 420ml : 1 hộp\r\n* 280ml : 1 hộp', 1100000, 1100000, '0000-00-00', 20, 0, b'0', b'0', 'Còn hàng'),
('LKT643W', 'Bình nước bằng nhựa Hello Kitty_Wonderful - 700 ml', 'http://www.locknlock.vn/data/base/goods/big/201828937687732.jpg', 'Thương hiệu	Lock&Lock\r\nXuất xứ thương hiệu	Hàn Quốc\r\nSản xuất tại	Việt Nam\r\nDung tích	700ml', 122000, 122000, '0000-00-00', 13, 0, b'0', b'0', 'Còn hàng'),
('LLG224S3', 'Bộ 3 hộp thủy tinh L&L Euro (LLG214*2, LLG224*1)', 'http://www.locknlock.vn/data/base/goods/big/201900833453671.jpg\r\n', '<img src=\"/prod/spec_img/LLG224S3%5F1.jpg\" title=\"LLG224S3%5F1.jpg\" ow=\"650\" oh=\"6066\">\r\nThương hiệu	Lock&Lock\r\nNơi sản xuất	Việt Nam\r\nChất liệu	Borosilicate\r\nDung tích	500ml*2; 750ml*1', 570000, 570000, '0000-00-00', 1, 0, b'0', b'0', 'còn hàng'),
('LLG422WN3', 'Bộ túi hộp cơm thủy tinh L&L 4EA (LLG422*3, HWB801WN-B-0*1) - Màu Wine', 'http://www.locknlock.vn/data/base/goods/big/201829053857496.jpg', 'Thương Hiệu	Lock&Lock\r\nSản xuất tại	Việt Nam\r\nChất liệu	Thủy tinh Chịu nhiệt\r\nMàu	Wine', 620000, 620000, '0000-00-00', 20, 0, b'0', b'0', 'Còn hàng'),
('LLG424BTZ3', 'Bộ hộp cơm thủy tinh chịu nhiệt L&L 4EA (LLG424*3,LLG424BLU(TZ)-0*1) - Màu xanh TZ', 'http://www.locknlock.vn/data/base/goods/big/201829053857447.jpg', 'Thương Hiệu	Lock&Lock\r\nSản xuất tại	Việt Nam\r\nChất liệu	Thủy tinh Chịu nhiệt\r\nMàu	Xanh TZ', 550000, 550000, '0000-00-00', 20, 0, b'0', b'0', 'Còn hàng'),
('LLG428M2', 'Bộ túi hộp cơm thủy tinh L&L 3EA (LLG429D*1,LLG428*1,HWB398GF*1) - Màu xanh Mint', 'http://www.locknlock.vn/data/base/goods/big/201829053857346.jpg', 'Thương Hiệu	Lock&Lock\r\nSản xuất tại	Việt Nam\r\nChất liệu	Thủy tinh Chịu nhiệt\r\nMàu	Xanh Mint', 600000, 600000, '0000-00-00', 20, 0, b'0', b'0', 'Còn hàng'),
('LLG430GN3', 'Bộ túi hộp cơm thủy tinh L&L 4EA (LLG424*1, LLG430*2, HWB801GN-B-0*1) - Màu xanh lá', 'http://www.locknlock.vn/data/base/goods/big/201829053858890.jpg', 'Thương Hiệu	Lock&Lock\r\nSản xuất tại	Việt Nam\r\nChất liệu	Thủy tinh Chịu nhiệt\r\nMàu	Xanh lá', 620000, 620000, '0000-00-00', 20, 0, b'0', b'0', 'Còn hàng'),
('LLS213R', 'Hộp nhựa L&L Twist Two way 330ml+150ml - Nắp màu đỏ', 'http://www.locknlock.vn/data/base/goods/big/201836251332093.jpeg\r\n', '<img src=\"/prod/spec_img/LLS213R.jpg\" title=\"LLS213R.jpg\" ow=\"750\" oh=\"9554\">\r\nThương hiệu	Lock&Lock\r\nSản xuất tại	Viêt Nam\r\nChất liệu	Nhựa PP\r\nDung tích	330ml + 150ml', 75000, 75000, '0000-00-00', 2, 0, b'0', b'0', 'còn hàng'),
('LLS221R', 'Hộp nhựa L&L Twist Two way 360ml+310ml - Nắp màu đỏ', 'http://www.locknlock.vn/data/base/goods/big/201835450014217.jpg', '<img src=\"/prod/spec_img/LLS221R.jpg\">\r\nThương hiệu	Lock&Lock\r\nNơi sản xuất	Việt Nam\r\nChất liệu	Nhựa PP\r\nDung tích	360ml+310ml', 85000, 85000, '0000-00-00', 1, 0, b'0', b'0', 'còn hàng'),
('LLS222R', 'Hộp nhựa L&L Twist Two way 560ml+310ml - Nắp màu đỏ', 'http://www.locknlock.vn/data/base/goods/big/201836251332109.jpg\r\n', '<img src=\"/prod/spec_img/LLS222R.jpg\" title=\"LLS222R.jpg\" ow=\"750\" oh=\"9554\">\r\nThương hiệu	Lock&Lock\r\nSản xuất tại	Viêt Nam\r\nChất liệu	Nhựa PP\r\nDung tích	560ml + 310ml', 95000, 95000, '0000-00-00', 2, 0, b'0', b'0', 'còn hàng'),
('LLS223R\r\n', 'Hộp nhựa L&L Twist Two way 760ml+310ml - Nắp màu đỏ', 'http://www.locknlock.vn/data/base/goods/big/201836251332237.jpg\r\n', '<img src=\"/prod/spec_img/LLS223R.jpg\" title=\"LLS223R.jpg\" ow=\"750\" oh=\"9554\">\r\nThương hiệu	Lock&Lock\r\nSản xuất tại	Viêt Nam\r\nChất liệu	Nhựa PP\r\nDung tích	760ml + 310ml', 99000, 99000, '0000-00-00', 2, 0, b'0', b'0', 'Tạm thời hết hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sukien`
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
-- Cấu trúc bảng cho bảng `user`
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
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `Firstname`, `Lastname`, `Gender`, `Email`, `Password`, `Phone`, `Address`) VALUES
(13, 'nguyen', 'van b', 'Male', 'b@gmail', '$2y$10$IYovXK2kTPPhw4QEdOX3duyQPNSofkEVKPhLPwciw7KWYJyfv0l4O', '12345', '1122tphcm');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MaSP_FK` (`MaSP_FK`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menucha`
--
ALTER TABLE `menucha`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menucon`
--
ALTER TABLE `menucon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Cha_FK` (`id_Cha_FK`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `id_Con_FK` (`id_Con_FK`);

--
-- Chỉ mục cho bảng `sukien`
--
ALTER TABLE `sukien`
  ADD PRIMARY KEY (`MaSuKien`),
  ADD KEY `MaSP_FK` (`MaSP_FK`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`MaSP_FK`) REFERENCES `sanpham` (`MaSP`);

--
-- Các ràng buộc cho bảng `menucon`
--
ALTER TABLE `menucon`
  ADD CONSTRAINT `menucon_ibfk_1` FOREIGN KEY (`id_Cha_FK`) REFERENCES `menucha` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_Con_FK`) REFERENCES `menucon` (`id`);

--
-- Các ràng buộc cho bảng `sukien`
--
ALTER TABLE `sukien`
  ADD CONSTRAINT `sukien_ibfk_1` FOREIGN KEY (`MaSP_FK`) REFERENCES `sanpham` (`MaSP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
