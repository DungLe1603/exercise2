-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2019 at 06:36 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exercise2`
--
create database exercise2 character set UTF8 collate utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`, `created_at`) VALUES
(1, 'Chi tiết kế hoạch lừa 2.500 tỉ của Alibaba', 'CEO Alibaba Nguyễn Thái Luyện chỉ đạo nhân viên thu gom đất không đủ tình trạng pháp lý là đất ở rồi quảng cáo khiến khách hàng ảo tưởng vào các dự án họ đặt mua.', 'image1.jpg', '2019-09-25 17:00:00'),
(2, 'Tòa nhà Thành ủy 100 tỉ vừa xây đã nứt toác do gạch?', 'Ngày 25/9, Văn phòng Tỉnh ủy Quảng Bình cho biết: Liên quan đên việc tòa nhà Thành ủy Đồng Hới có tổng mức đầu tư 118 tỉ đồng, vừa mới xây đã nứt toác mà Tiền Phong phản ánh, Bí thư Tỉnh ủy Quảng Bình, ông Hoàng Đăng Quang đã yêu cầu báo cáo, chấn chỉnh, sửa chữa và đảm bảo an toàn tuyệt đối để vận hành lâu dài, phân rõ trách nhiệm từng đơn vị liên quan.', 'image2.jpg', '2019-09-25 17:00:00'),
(3, 'Chuyển công an điều tra vụ chiếm đoạt 524 triệu tiền xây nghĩa trang liệt sĩ', 'Sau khi Thường trực Tỉnh uỷ thống nhất, UBND tỉnh Gia Lai đã chuyển hồ sơ vụ cán bộ, lãnh đạo huyện Đức Cơ giúp nhau chiếm đoạt 524 triệu đồng với danh nghĩa xây nghĩa trang liệt sĩ sang cơ quan công an để điều tra.', 'image3.jpg', '2019-09-25 17:00:00'),
(4, 'Hàng trăm người tiễn đưa Anh hùng phi công Nguyễn Văn Bảy về đất mẹ', 'Theo chương trình, 5 giờ 30 phút ngày 26-9 sẽ làm lễ truy điệu và di quan linh cữu Anh hùng phi công Nguyễn Văn Bảy về an táng tại nghĩa trang gia đình (ấp Hậu Thành, xã Tân Dương, huyện Lai Vung, tỉnh Đồng Tháp) nhưng từ trước đó, người dân và lực lượng vũ trang đã có mặt tại Nhà tang lễ Bộ Quốc phòng (quận Gò Vấp, TP HCM) để thắp hương, tiễn biệt Anh hùng phi công Nguyễn Văn Bảy lần cuối.', 'image4.jpg', '2019-09-25 17:00:00'),
(5, 'Sốc với hiện trường TNGT xe máy chui vào gầm xe container, thanh niên tử vong', 'Tối 25/9, thanh niên chạy xe máy hiệu SH lưu thông trên làn ô tô xa lộ Hà Nội hướng từ cầu Sài Gòn về ngã tư Thủ Đức, khi đến gần trạm thu phí (thuộc phường Phước Long A, quận 9, TP.HCM) thì tông vào đuôi xe container đang dừng đậu phía trước.\r\n\r\nCú tông mạnh khiến xe máy lọt vào gầm container và dính chặt bên trong, riêng thanh niên văng ngược lại bất tỉnh tại chỗ.', 'image5.jpg', '2019-09-25 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
