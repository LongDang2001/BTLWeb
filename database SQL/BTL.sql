-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 29, 2021 lúc 11:33 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `BTL`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhoi`
--

CREATE TABLE `cauhoi` (
  `idCauHoi` int(11) NOT NULL,
  `contentCauHoi` varchar(300) DEFAULT NULL,
  `cauTraLoi` varchar(300) NOT NULL,
  `textCauHoi1` varchar(200) NOT NULL,
  `textCauHoi2` varchar(200) NOT NULL,
  `textDapAn1` varchar(100) NOT NULL,
  `textDapAn2` varchar(100) NOT NULL,
  `textDapAn3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cauhoi`
--

INSERT INTO `cauhoi` (`idCauHoi`, `contentCauHoi`, `cauTraLoi`, `textCauHoi1`, `textCauHoi2`, `textDapAn1`, `textDapAn2`, `textDapAn3`) VALUES
(1, 'Adjectives Exercise', 'older\r\n', 'Of the two sisters, Susie is the', '', 'older', 'oldest', ''),
(2, '', 'farther', 'Mumbai is', 'from Kochi than Bangalore.', 'further', 'farther', 'Either could be used here'),
(3, '', 'farther', 'I want ', 'information', 'further', 'farther', ''),
(4, '', 'elder', 'Namita is my', ' sister', 'elder', 'older', 'Either could be used here'),
(6, '', 'than', 'This painting is superior', ' that', 'than', 'to', 'Either could be used here'),
(7, '', 'nearest', 'The injured were taken to the', ' hospital', 'nearest', 'next', 'Either could be used here'),
(8, '', 'next', 'As soon as she finished one project, she started working on the', '', 'nearest', 'next', ''),
(9, '', 'farther', 'You must act without any', ' delay', 'farther', 'further', ''),
(10, '', 'eldest', 'He is the', ' man in the town', 'eldest', 'oldest', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`idCauHoi`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `idCauHoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
