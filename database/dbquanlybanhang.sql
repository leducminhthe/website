-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 06, 2020 lúc 10:10 AM
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
  `TenKhachHang` varchar(100) DEFAULT NULL,
  `diachi` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `GhiChu` varchar(100) DEFAULT NULL,
  `TongTien` double DEFAULT NULL,
  `TrangThai` bit(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `MaSP` varchar(100) NOT NULL,
  `TENSP` varchar(100) NOT NULL,
  `SL` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `HoTen` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `Phone` varchar(100) DEFAULT NULL,
  `NoiDung` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menucha`
--

CREATE TABLE `menucha` (
  `id` int(11) NOT NULL,
  `MenuSP` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `menucha`
--

INSERT INTO `menucha` (`id`, `MenuSP`) VALUES
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
-- Cấu trúc bảng cho bảng `register`
--

CREATE TABLE `register` (
  `TenTaiKhoan` varchar(250) NOT NULL,
  `TenKhachHang` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pasword` varchar(250) NOT NULL,
  `SoDienThoai` varchar(250) NOT NULL,
  `NgaySinh` date NOT NULL,
  `DiaChi` varchar(250) NOT NULL,
  `GioiTinh` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` varchar(100) NOT NULL,
  `TenSP` varchar(100) NOT NULL,
  `AnhSP` varchar(100) NOT NULL,
  `ThongTinChiTiet` varchar(300) NOT NULL,
  `SP_KM` bit(5) NOT NULL,
  `SP_HOT` bit(5) NOT NULL,
  `ACTIVE` bit(5) NOT NULL,
  `GIA_BD` float NOT NULL,
  `GIA_HT` float NOT NULL,
  `NgayDang` date NOT NULL,
  `id_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `Firstname`, `Lastname`, `Gender`, `Email`, `Password`) VALUES
(0, 'le', 'the', 'Male', 'leducminhthe96@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MaSP`,`TENSP`);

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
-- Chỉ mục cho bảng `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`TenTaiKhoan`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `id_FK` (`id_FK`);

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
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_FK`) REFERENCES `menucha` (`id`);

--
-- Các ràng buộc cho bảng `sukien`
--
ALTER TABLE `sukien`
  ADD CONSTRAINT `sukien_ibfk_1` FOREIGN KEY (`MaSP_FK`) REFERENCES `sanpham` (`MaSP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
