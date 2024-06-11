-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 21, 2024 at 09:21 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `id22272719_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` char(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `level` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `email`, `phone`, `address`, `level`) VALUES
(1, 'Khang', '123', 'supadmin@gmail.com', '123', '1', 1),
(2, 'Hồ Chí Trung', '123', 'admin@gmail.com', '0321234567', '170 An Dương Vương', 0);

-- --------------------------------------------------------

--
-- Table structure for table `catelogy`
--

CREATE TABLE `catelogy` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `catelogy`
--

INSERT INTO `catelogy` (`id`, `name`) VALUES
(1, 'Rau'),
(2, 'Cà phê'),
(3, 'Thịt'),
(4, 'Tôm'),
(5, 'Cá'),
(6, 'Gạo'),
(7, 'Hàng điện tử'),
(8, 'Sữa');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `phone` char(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `password`, `token`, `phone`, `email`, `address`) VALUES
(1, '', '123', '', '', 'a@gmail', ''),
(2, '', '123', '', '', 'b@123', ''),
(3, '', '123', '', '', 'c@gmail', ''),
(4, '1714658735', '123', '', '', 'd@1', ''),
(5, '1714659603', '123', '', '', 'a1', ''),
(6, '1714661221', '123', 'user_6633afcf96c912.05478902', '', 'a2', ''),
(9, '1714755051', '123', 'user_6644cadcdefd34.63055179', '', 'Dinhkhang417sc@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `forgot_password`
--

CREATE TABLE `forgot_password` (
  `customer_id` int NOT NULL,
  `token` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

CREATE TABLE `manufactures` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` char(15) NOT NULL,
  `photo` varchar(520) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`id`, `name`, `address`, `phone`, `photo`) VALUES
(1, 'Nông trường nông sản Bình Định', '', '', ''),
(2, 'Trung Nguyên', '', '', ''),
(3, 'Nescafe', '', '', ''),
(4, 'The Coffee House', '', '', ''),
(5, 'MacCoffee', '', '', ''),
(6, 'TopMeal   ', '', '', ''),
(7, 'American Garden', '', '', ''),
(8, 'Massan', '', '', ''),
(9, 'hahah', '', '21212', 'https://suckhoedoisong.qltns.mediacdn.vn/324455921873985536/2022/7/31/magie-16592827648111543512863.jpg'),
(10, 'True Food', '', '', ''),
(11, 'CP', '', '', ''),
(12, 'Green Food', '', '', ''),
(13, 'HALONG CANFOCO', '', '', ''),
(14, 'VITOT', '', '', ''),
(25, 'Tân Giàu Food', '\r\n', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `customer_id` int NOT NULL,
  `name_receiver` varchar(50) NOT NULL,
  `phone_receiver` char(15) NOT NULL,
  `address_receiver` varchar(520) NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `name_receiver`, `phone_receiver`, `address_receiver`, `status`, `created_at`, `total_price`) VALUES
(8, 1, 'Hồ Chí Trung', '03131616116', ' 170 An Dương Vương', 1, '2024-05-16 15:41:12', 1449000),
(9, 1, 'Hồ Chí Trung', '03131616116', ' 170 An Dương Vương', 0, '2024-05-19 13:24:28', 23000),
(10, 1, 'Hồ Chí Trung', '03131616116', ' 170 An Dương Vương', 0, '2024-05-19 13:30:40', 21000),
(11, 1, 'Nguyễn Đình Khang', '122131', ' 31313', 0, '2024-05-19 13:59:16', 29000),
(12, 1, 'Nguyễn Đình Khang', '122131', ' 31313', 0, '2024-05-19 14:00:33', 311880000),
(13, 1, 'Nguyễn Đình Khang', '122131', ' 31313', 0, '2024-05-19 14:13:33', 181930000),
(14, 1, 'Nguyễn Đình Khang', '122131', ' 31313', 0, '2024-05-19 14:15:42', 181930000),
(15, 1, 'Nguyễn Đình Khang', '122131', ' 31313', 0, '2024-05-19 14:19:10', 77970000),
(16, 1, 'Nguyễn Đình Khang', '122131', ' 31313', 0, '2024-05-19 14:26:58', 77970000),
(17, 1, 'Nguyễn Đình Khang', '122131', ' 31313', 0, '2024-05-19 14:28:23', 77970000),
(18, 1, 'Chả cá hdsiahkdha', '0364612456', ' đâ', 0, '2024-05-19 14:32:14', 51980000),
(19, 1, 'Chả cá hdsiahkdhafsfsfsf2313513213', '0364612456', ' đâ', 0, '2024-05-19 14:35:31', 51980000),
(20, 1, 'Chả cá2313223', '0364612456', ' 56116', 0, '2024-05-19 14:36:50', 51980000),
(21, 1, 'Hồ Chí Trung', '0321234567', ' jnkdabda', 0, '2024-05-19 14:41:31', 26180000),
(22, 1, 'fầ', 'dâd', ' đa', 0, '2024-05-19 14:42:01', 130000),
(23, 1, 'hfdhdh', 'hdhdh', ' hdh', 0, '2024-05-19 14:43:14', 190000),
(24, 1, 'vgzsxsgvá', 'fầ', ' fầ', 0, '2024-05-19 14:45:14', 190000),
(25, 1, '1111', '11', '111', 0, '2024-05-19 14:47:17', 190000),
(26, 6, '1714661221', '351321', 'hbjda jdb', 0, '2024-05-20 09:01:13', 23000),
(27, 1, 'Nguyễn Đình Khang', ' ada', 'đâ', 0, '2024-05-20 10:05:16', 23000),
(28, 6, '1714661221', 'dadf', '1ede', 0, '2024-05-21 07:41:12', 22000),
(29, 6, '1714661221', '12', '242424', 0, '2024-05-21 08:37:15', 58000);

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`order_id`, `product_id`, `quantity`) VALUES
(8, 1, 63),
(9, 1, 1),
(10, 2, 1),
(11, 7, 1),
(12, 54, 12),
(13, 54, 7),
(14, 54, 7),
(15, 54, 3),
(16, 54, 3),
(17, 54, 3),
(18, 54, 2),
(19, 54, 2),
(20, 54, 2),
(21, 21, 1),
(21, 23, 1),
(21, 54, 1),
(22, 23, 1),
(23, 21, 1),
(23, 23, 1),
(24, 23, 1),
(25, 21, 1),
(25, 23, 1),
(26, 1, 1),
(27, 1, 1),
(28, 3, 1),
(29, 3, 1),
(29, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(520) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `manufacture_id` int NOT NULL,
  `unit` varchar(20) NOT NULL,
  `date_end` timestamp NOT NULL,
  `date_start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `discount` float NOT NULL,
  `number` int NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'visible'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `photo`, `price`, `description`, `manufacture_id`, `unit`, `date_end`, `date_start`, `discount`, `number`, `status`) VALUES
(1, 'Bông cải xanh-400g/bông', '1715870435.png', 23000, 'Bông cải xanh là một loại rau xanh có hình dạng giống một cái cây thu nhỏ.<br> Nó thuộc về loài thực vật được gọi là Brassica oleracea, cùng gia đình cải xoăn và súp lơ và đều chung họ rau cải.', 1, '400g/Bông', '2024-06-16 17:00:00', '2024-05-16 05:58:06', 0, 43, 'visible'),
(2, 'Rau Mồng Tơi - 300g/bó', '1715870474.png', 21000, '3Sach Food cam kết cung cấp các mặt hàng tươi sống, sạch sẽ, nguyên vị, đạt mọi tiêu chuẩn về chất lượng.<br> Khối lượng tịnh chuẩn xác.\r\n<br>Đóng gói kỹ càng, an toàn, đảm bảo vệ sinh an toàn thực phẩm. Giao hàng nhanh chóng, đầy đủ đơn hàng.', 1, '300g/bó', '2024-06-15 17:00:00', '2024-05-16 05:59:51', 0, 44, 'visible'),
(3, 'Rau Muống Baby - 300g/gói', '1715870561.png', 22000, '3Sach Food cam kết cung cấp các mặt hàng tươi sống, sạch sẽ, nguyên vị, đạt mọi tiêu chuẩn về chất lượng.<br> Khối lượng tịnh chuẩn xác.<br>\r\nĐóng gói kỹ càng, an toàn, đảm bảo vệ sinh an toàn thực phẩm.<br> Giao hàng nhanh chóng, đầy đủ đơn hàng.', 1, '300g/gói', '2024-06-15 17:00:00', '2024-05-16 06:01:37', 0, 43, 'visible'),
(4, 'Rau Dền Hỗn Hợp Xanh Đỏ (Gói 300Gr)', '1715870620.png', 21000, 'Ưu điểm khi mua rau dền hỗn hợp tại cửa hàng 3Sach Food:  \r\n<br><br>\r\n- Rau dền có vị ngọt, tính mát, tác dụng thanh nhiệt, làm mát máu, lợi tiểu. \r\n<br>\r\n- Rau tươi ngon được nhập mỗi ngày\r\n\r\n- Nguồn gốc rõ ràng.  \r\n\r\n- Đặt giao hàng nhanh. \r\n\r\nThương hiệu: 3Sach Food', 1, '300g/gói', '2024-06-15 17:00:00', '2024-05-16 06:02:49', 0, 45, 'visible'),
(5, 'Xà Lách Lolo Xanh (Gói 300Gr)', '1715870650.png', 36000, 'Cam kết cung cấp các mặt hàng tươi sống, sạch sẽ, nguyên vị.<br>Khối lượng tinh chuẩn xác. Đóng gói kỹ càng.Giao hàng nhanh chóng, đầy đủ đơn hàng.', 1, '300g/bó', '2024-06-15 17:00:00', '2024-05-16 06:04:13', 0, 44, 'visible'),
(6, 'Tía tô khô, thơm, sạch 200g ( Trà tía tô sấy khô, nguyên liệu nấu nước xông giải cam) - Chợ Thảo Dượ', '1715870705.png', 25000, 'Chợ Thảo Dược Việt chuyên cung cấp các sản phẩm:<br>\r\n- Bột gia vị, bột thảo mộc, bột làm đẹp<br>\r\n- Trà hoa, trà thảo mộc khô<br>\r\n- Hạt dinh dưỡng, nguyên liệu làm bánh, làm sữa hạt<br>\r\n- Thảo dược Bắc – Trung – Nam<br>\r\n- Tinh dầu thiên nhiên, dầu nền, dầu massage, hương liệu<br><br>\r\nKhách nhập sỉ vui lòng gọi hotline, ib/zalo: 0975.498.269<br>\r\n\r\nSản phẩm: Tía tô khô	\r\nTía tô là một loại cây rau gia vị rất tốt cho sức khỏe nhờ chứa hàm lượng canxi và sắt khá cao.Đồng thời,tía tô còn rất giàu canxi A,C. Nhờ vậy,lá tía tô không chỉ được dùng làm món ăn mà tía tô khô còn được ứng dụng nhiều trong quá trình chăm sóc sắc đẹp.\r\nCông dụng của tía tô\r\n- Giải cam, giảm tình trạng đau da day\r\n- Hỗ trợ, ngăn ngừa các vấn đề về tym mach\r\n- Tốt cho người bị good\r\n- Xông mặt, thư giãn, giảm căng thẳng, stress\r\n\r\nHướng dẫn sử dụng tía tô khô\r\n- Tắm trắng bằng lá nước tía tô: Rửa sạch, đun trong nước nóng khoảng 15 phút. Sau đó hòa tan hỗn hợp trên với nước lạnh đến độ ấm vừa đủ rồi tắm. \r\nDùng nước tía tô đun uống hàng ngày rất tốt\r\nĐóng gói và phân phối bởi: Chợ Thảo Dược Việt\r\nNSX: In trên bao bì\r\nHSD: 6 tháng kể từ ngày sản xuất\r\n\r\nCam kết:\r\n- Sản phẩm chất lượng, đảm bản an toàn vệ sinh thực phẩm \r\n- Không tạp chất, hương liệu, hóa chất bảo quản độc hại. \r\n- 1 đổi 1 trong vòng 3 ngày kể từ khi nhận hàng nếu lỗi do nhà sản xuất.\r\n- Hàng luôn có sẵn số lượng lớn, đóng gói ngay khi nhận được đơn\r\n- Tư vấn nhiệt tình, tận tâm, nhanh chóng mang đến trải nghiệm mua sắm tuyệt vời nhất cho khách hàng', 1, '200g', '2024-06-15 17:00:00', '2024-05-16 06:08:59', 0, 50, 'visible'),
(7, 'Cà rốt Đà Lạt - 500g/gói', '1715870752.png', 29000, 'Tốt cho mắt', 1, '500g/gói', '2024-06-15 17:00:00', '2024-05-16 06:10:25', 0, 4, 'visible'),
(8, 'Cà chua đỏ tươi ngon', '1715870774.png', 25000, 'Cà chua là loại rau củ có vị chua thanh nhẹ, giàu chất dinh dưỡng, dễ trồng và rất dễ ăn', 1, '0.5kg', '2024-06-15 17:00:00', '2024-05-16 06:11:42', 0, 4, 'visible'),
(9, 'Giá đậu xanh nhà trồng gói 500Gr', '1715870800.png', 18000, 'Giá đậu xanh nhà trồng không hóa chất\r\n<br><br>\r\nGói 500 Gram', 1, '500gr', '2024-06-15 17:00:00', '2024-05-16 06:13:07', 0, 50, 'visible'),
(10, 'Dưa leo tươi trọng lượng 1 kí', '1715870839.png', 32000, 'Dưa leo hay còn gọi là dưa chuột, là một loại quả thuộc họ Bầu bí, khi ăn có vị ngọt nhẹ và thanh mát.<br> Đây là loại quả có hàm lượng nước và chất xơ cao cùng với các khoáng chất có lợi cho sức khỏe.<br> Vì thế, dưa leo không chỉ được dùng như một loại nguyên liệu chế biến món ăn mà còn được xem là một thần dược trong việc làm đẹp. ', 1, '1kg', '2024-06-15 17:00:00', '2024-05-16 06:14:24', 0, 56, 'visible'),
(11, 'Đậu Que/Đậu Cove - 300g/khay', '1715871085.png', 25000, 'Nông sản Bình Định<br>\r\nSản phảm ăn vào là xinh đẹp tuyệt vời', 1, '300g/khay', '2024-06-15 17:00:00', '2024-05-16 06:15:27', 0, 50, 'visible'),
(12, 'Nấm Bào Ngư Trắng- 250g', '1715871135.png', 13500, 'Nấm bào ngư trắng 200G, trọng lượng thực tế có thể chênh lệch khoảng 10 - 20%.\r\n<br><br><br>\r\nTrong 100g nấm bào ngư có cung cấp 33 calo, 6% chất xơ, 10% vitamin B1, 27% nhu cầu vitamin B2, 31% vitamin B3, 26% vitamin B5, 8% vitamin B6, 7% vitamin D, 9% kali, 27% đồng, 16.5% sắt, 4,5% Magie, 5% Mangan, 17% phốt pho, 5% Selen và 7% kẽm cần cho cơ thể.\r\n<br><br>\r\nTuy hàm lượng của các vitamin và khoáng chất trong nấm bào ngư chỉ tương đương với các loại rau xanh nhưng nó lại chứa tương đối đầy đủ các loại vitamin và khoáng chất thiết yếu trong đó có vitamin D là một loại vitamin mà cá loại rau hay thịt không có.\r\n<br><br>\r\nNấm bào ngư chứa những hợp chất tốt cho tim mạch, trong đó có chất xơ hòa tan beta-glucans.\r\n<br><br>\r\nBạn cần nấu nấm bào ngư trong khoảng 5-10 phút để nấm chín tuyệt đối, đảm bảo vệ sinh và không gây hại cho cơ thể. Vì nếu như nấm chưa chín hoàn toàn, những chất hoặc vi khuẩn có trong nấm chưa được tiêu diệt sẽ gây ra những tác dụng phụ và ảnh hưởng xấu đến sức khỏe.', 1, '250g', '2024-06-15 17:00:00', '2024-05-16 06:16:39', 0, 50, 'visible'),
(13, 'Tỏi Lý Sơn CHÍNH GỐC 300g -Tỏi hữu cơ trồng từ hòn đảo Lý Sơn - đảm bảo xuất sứ', '1715911547.png', 68600, 'Để bảo quản tỏi lý sơn được lâu, bạn có thể tuân theo các bước sau:<br><br>\r\n\r\n1. Chọn tỏi tươi: Chọn những củ tỏi có vỏ màu trắng, không bị nứt, không có dấu hiệu của mục rữa hoặc hư hỏng.<br>\r\n\r\n2. Loại bỏ vỏ: Trước khi bảo quản, hãy gọt lớp vỏ bên ngoài của tỏi. Điều này giúp giảm khả năng mục rữa và tạo điều kiện cho việc thoáng khí.<br>\r\n\r\n3. Sấy khô: Bạn có thể sấy khô tỏi để kéo dài thời gian bảo quản. Cắt tỏi thành từng lát mỏng và đặt chúng trên khay sấy hoặc trên giấy ăn để sấy trong lò nhiệt độ thấp (khoảng 50-60 độ C) trong khoảng 2-3 giờ cho đến khi tỏi hoàn toàn khô.<br>\r\n\r\n4. Bảo quản trong hũ kín: Đặt các lát tỏi đã sấy vào hũ kín và đậy kín nắp. Hãy chắc chắn rằng không có độ ẩm hoặc không khí tiếp xúc với tỏi để tránh việc mục rữa.<br>\r\n\r\n5. Bảo quản trong tủ lạnh: Nếu bạn không muốn sấy khô tỏi, bạn có thể bảo quản chúng trong tủ lạnh. Đặt tỏi vào túi nylon hoặc hũ kín và để trong ngăn mát của tủ lạnh. Tuy nhiên, hãy nhớ rằng tỏi sẽ bắt đầu mục rữa sau khoảng 1-2 tuần trong tủ lạnh.<br>\r\n\r\n6. Bảo quản trong dầu: Một cách khác để bảo quản tỏi là ngâm chúng trong dầu. Đặt tỏi đã gọt vỏ vào hũ kín và đổ dầu ô liu hoặc dầu hạt cải vào cho đến khi tỏi được ngập hoàn toàn. Đậy kín nắp và để ở nhiệt độ phòng. Tỏi ngâm trong dầu có thể được sử dụng cho một thời gian dài và cung cấp một loại dầu tỏi thơm ngon.<br>\r\n\r\nLưu ý: Bất kỳ phương pháp bảo quản nào bạn chọn, hãy kiểm tra tỏi thường xuyên để đảm bảo rằng chúng không có hiện tượng mục rữa hay hư hỏng.', 1, '300g', '2024-05-28 17:00:00', '2024-05-16 06:18:02', 5, 50, 'visible'),
(14, 'Dâu Tây hộp 500g trái to nhỏ lộn xộn.', '1715911640.png', 65000, 'Dâu tây là một trong những loại trái cây được yêu thích nhất vì hương vị ngọt ngào. Không chỉ vậy, dinh dưỡng từ dâu tây cũng tốt cho sức khỏe.<br><br>\r\nDâu tây là nguồn cung cấp folate dồi dào, một loại vitamin B giúp các mô phát triển, tế bào hoạt động bình thường và rất quan trọng cho một thai kỳ khỏe <br>mạnh.<br> Tiêu thụ hoặc dùng đúng lượng folate trước và trong khi mang thai giúp ngăn ngừa một số dị tật bẩm sinh.<br> Dâu tây cũng giúp ngăn ngừa bệnh thiếu máu.\r\n', 1, '500g', '2024-06-16 17:00:00', '2024-05-16 06:19:09', 5, 50, 'visible'),
(15, 'XOÀI HẠT LÉP AN GIANG SIÊU NGON', '1715913684.png', 45000, '', 1, '1kg', '2024-06-13 17:00:00', '2024-05-16 06:22:03', 5, 50, 'visible'),
(16, 'Cam vàng nhập khẩu từ Mỹ', '1715911733.png', 35000, '* Cam vàng là loại cam ăn trực tiếp, không cần bỏ xơ hay vắt nước. Cam vàng có hương vị thơm ngon và đậm đà, vị ngọt thanh nên rất được ưa thích trong các bữa ăn hàng ngày. <br>\r\n* Ngoài ra, ăn cam vàng thường xuyên còn góp phần bổ sung thêm carotein, một tiền tố của vitamin A, có chức năng làm giảm sưng viêm và các triệu chứng về xương khớp.<br>\r\n* Dùng để ăn, vắt nước uống, trang trí món ăn, làm bánh, pha trà...<br>\r\nHướng dẫn sử dụng: Dùng trực tiếp<br>\r\nBảo quản: Bảo quản nơi khô ráo thoáng mát<br>Bao bì sản phẩm có thể thay đổi theo Nhà cung cấp\r\nSản phẩm được nhập khẩu trực tiếp<br>\r\nNguồn hàng được chọn lọc kĩ lưỡng, cẩn thận<br>\r\nQuy trình sản xuất hiện đại<br>\r\nHạn sử dụng : 1 năm kể từ ngày sản xuất', 1, '1kg~3 quả', '2024-07-14 17:00:00', '2024-05-16 06:23:24', 5, 50, 'visible'),
(17, 'Ổi Trân Châu Ruột Đỏ - 1kg', '1715911773.png', 17000, 'ỔI TRÂN CHÂU / ỔI RUỘT ĐỎ / ỔI XÁ LỊ<br>\r\n* Quy cách: 1 KG<br>\r\n* Xuất xứ: Việt Nam<br><br>\r\n\r\nTrái ổi trân châu có ruột vỏ hồng vô cùng bắt mắt, vỏ màu xanh, ruột đặc, ít hạt, ổi ăn rất giòn, thơm và ngọt <br>\r\nỔi trân châu ruột đỏ có nhiều công dụng bất ngờ như dưỡng chất có sẵn đem lại cho cơ thể sự ổn định về huyết áp, tốt cho hệ tiêu hóa và duy trì nồng độ cholesterol, tăng cường hệ miễn dịch và kháng ung thư, thiếu máu.<br>\r\n\r\n* Bảo quản: <br>\r\n- Nơi thoáng mát<br>\r\n- Nơi có nhiệt độ từ 5-10C để giữ cho quả ổi còn tươi và giữ được nước<br>', 1, '1kg', '2024-06-13 17:00:00', '2024-05-16 06:24:33', 3, 50, 'visible'),
(18, 'Cà phê Trung Nguyên I - 500g', '1715911860.png', 72000, '', 2, 'Túi 500g', '2024-10-16 17:00:00', '2024-04-22 01:57:07', 5, 10, 'visible'),
(19, 'Cà phê sữa hòa tan G7 3in1 - Hộp 18 gói', '1715911961.png', 65000, 'Cà phê G7 3in1 được chiết xuất từ những phần tinh túy nhất có trong từng hạt cà phê, trên công nghệ hàng đầu và bí quyết không thể sao chép để cho ra đời sản phẩm cà phê hòa tan thượng hạng, với hương vị khác biệt, đậm đà, hương thơm độc đáo quyến rũ mà không một sản phẩm cà phê hòa tan nào khác đạt được. Cà phê G7 3in1 được 89% người tiêu dùng bình chọn là sản phẩm yêu thích hơn các loại cà phê hòa tan khác tại sự kiện thử mùi trực tiếp năm 2003.\r\n<br>Hạn sử dụng: 2 năm.<br>\r\nNhà sản xuất: Trung Nguyên<br>', 2, 'Hộp 18 gói', '2024-07-11 17:00:00', '2024-05-16 03:54:33', 0, 4, 'visible'),
(20, 'Cà phê đen hòa tan không đường G7 - Hộp 15 gói', '1715911917.png', 35000, 'Cà phê G7 hòa tan đen - Hộp 15 gói 2gr<br>\r\n\r\nĐược sản xuất trên công nghệ hàng đầu, chiết xuất từ những phần tinh túy nhất có trong từng hạt cà phê và bí quyết không thể sao chép, Trung Nguyên cho ra đời sản phẩm cà phê G7 hòa tan đen dành cho những người thích hương vị cà phê đậm đà, mạnh như cà phê rang xay.<br>\r\nNhà sản xuất:Trung Nguyên<br>\r\nĐặc điểm:Cà phê G7 hòa tan đen mang đến sự tiện lợi cho người sử dụng, giúp những người thích cà phê rang xay có được một ly cà phê như ý nhưng vẫn tiết kiệm được thời gian.<br>\r\nHạn sử dụng:2 năm.<br>\r\nKhối lượng: Hộp 15 gói x 2gr.<br>\r\nThương hiệu:	Trung Nguyên<br>\r\nĐơn vị tính:	Hộp<br>\r\nQuy cách đóng thùng:	24 Hộp/Thùng<br>\r\nTrọng lượng tịnh:	15 gói x 2gr<br>\r\nKích thước:	77*58*72 mm<br>\r\nHạn sử dụng:	2 năm<br>\r\nXuất xứ:	Việt Nam<br>\r\nChỉ tiêu chất lượng	Độ ẩm ≤ 5 % Hàm lượng cafeine ≥ 0.25 %<br>\r\nHướng dẫn sử dụng	Khi sử dụng cà phê G7 Hòa Tan Đen có thể thêm đường hay sữa.<br>\r\nNên để nguội cà phê trước khi thêm đá (với trường hợp uống đá).<br>\r\nĐể có ly cà phê tuyệt hảo, cần pha đủ liều lượng nước theo hướng dẫn trên bao bì.<br>\r\n', 2, 'Hộp 15 gói', '2024-08-14 17:00:00', '2024-04-22 02:00:59', 0, 5, 'visible'),
(21, 'Hộp cà phê Nescafe 3in1 - Hộp 20 gói x 17g', '1715912018.png', 60000, 'Hộp Cà Phê Nescafe 3in1 hộp (20 gói x17gr)<br>\r\nThông tin sản phẩm<br>\r\nThương hiệu NesCafé (Việt Nam)\r\nLoại Có đường<br>\r\nThành phần Đường, bột kem pha cà phê, cà phê hòa tan, chất làm dày 1440, muối i-ốt, hương tổng hợp dùng trong thực phẩm, chất điều chỉnh độ chua\r\n<br>Khối lượng 340g (17g x 20 gói)<br>\r\nSản xuất tại Việt Nam<br>\r\nLưu ý Thưởng thức nóng hoặc có thể cho thêm đá tùy sở thích<br>\r\nThông tin sản phẩm<br>\r\n Cà phê hòa tan Nescafe 3 trong 1 đậm vị cà phê hộp 20 gói được nghiên cứu riêng dành cho những người thích uống cà phê vị đậm, đắng và hương thơm mạnh mẽ đặc trưng của cà phê nguyên chất.<br>\r\nSản phẩm mang tới một trải nghiệm đặc biệt cho những tín đồ cà phê tại Việt Nam, bên cạnh vị thơm ngon khó cưỡng, điều khác biệt so với cà phê hòa tan thông thường đó là bạn sẽ thấy được lớp cà phê rang xay nhuyễn mỏng mịn còn đọng lại dưới đáy ly cà phê, là minh chứng cho cà phê rang xay nghiền nhuyễn.\r\n<br>\r\nSản phẩm được làm từ 100% hạt cà phê Việt Nam chất lượng cao, gieo trồng và canh tác theo kỹ thuật của Nescafe Plan và sản xuất theo công nghệ nghiền nhuyễn hạt cà phê (MRC - Micronized Roasted Coffee) độc quyền của Nestle. Bên cạnh các thành phần như cà phê hòa tan, đường, kem sữa truyền thống, sản phẩm mới được bổ xung thêm hạt cà phê rang xay nhuyễn với lớp bọc coffee creamer. Khi cà phê rang xay nhuyễn hòa tan với nước sôi bung nở, sẽ làm bật dậy hương thơm đặc trưng của cà phê rang xay. Bên cạnh đó cà phê rang xay nhuyễn hòa quyện cùng vị sữa sẽ cho ly cà phê đậm đà hơn với vị ngon khó cưỡng.\r\n<br>\r\nHướng dẫn sử dụng<br>\r\nDùng nóng: Cho 1 gói cà phê vào 70ml nước nóng, khuấy đều và thưởng thức.<br>\r\nSiêu Thị VN<br>', 3, 'Hộp 20 gói', '2024-09-24 17:00:00', '2024-04-23 20:53:15', 0, 110, 'visible'),
(22, 'Cà phê sữa đá Nescafe 3in1 - Hộp 10 gói x 24g', '1715912090.png', 40000, 'Cà phê sữa đá chuẩn vị Việt Nam<br>\r\nSự kết hợp giữa vị cà phê mạnh mẽ và vị sữa đặc béo dịu<br>\r\nKhơi nguồn cảm hứng cả về thể chất lẫn tinh thần<br>\r\nNescafé cà phê sữa đá trong công thức 24 gram mới, tự hào mang đến cho bạn một ly cà phê sữa đá thuần túy Việt Nam. Nhân đôi sánh quyện với nhiều cà phê và sữa hơn, cho bạn 1 ly cà phê sữa thơm béo như pha phin, đậm ngon khó cưỡng.<br>\r\n<br>\r\nMột ly Nescafé cà phê sữa đá mỗi sáng giúp khơi dậy nguồn hứng khởi cả về thể chất lẫn tinh thần, kích thích các giác quan và tăng cường sự tập trung cho bạn.\r\n<br>\r\nĐẶC ĐIỂM NỔI BẬT\r\n<br>\r\n- Công thức mới chuẩn vị pha phin.\r\n<br>\r\n- Nhân đôi sánh quyện, x2 vị sữa, x2 vị cà phê.\r\n<br>\r\n- Vị cà phê thuần túy Việt Nam với vị cà phê mạnh mẽ kết hợp với vị sữa thật béo dịu.\r\n<br>\r\n- Hương vị thơm ngon khó cưỡng như cà phê phin pha sữa đặc.\r\n<br>\r\n- Gói mới nhiều hơn với 24g.\r\n<br>\r\nTHÀNH PHẦN<br>\r\n\r\nĐường, bột kem pha cà phê (có chứa sữa – contain milk), hỗn hợp cà phê hòa tan* (11,1 %), sữa bột tách kem – skimmed milk powder (4 %), chất ổn định 1440, bột sữa dừa - coconut milk powder, hương tổng hợp (cà phê, sữa (có chứa sữa – contain milk)), muối i-ốt, chất điều chỉnh độ acid 500(ii).\r\n<br>\r\nLƯU Ý<br>\r\n\r\nSản phẩm có chứa đậu nành (contain soya).\r\n<br>\r\nKhông dùng cho người dị ứng với các thành phần của sản phẩm.\r\n<br>\r\nHƯỚNG DẪN SỬ DỤNG\r\n<br>\r\nUống lạnh: Hòa 1 gói Nescafé cà phê sữa đá với 50ml nước nóng và khuấy đều. Cho thêm đá và thưởng thức.\r\n<br>\r\nCÁCH BẢO QUẢN\r\n<br>\r\nBảo quản sản phẩm nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp.\r\n<br>\r\nXuất xứ: Thụy Sĩ\r\n<br>\r\nNơi sản xuất: Việt Nam\r\n<br>\r\nNgày sản xuất: In trên bao bì sản phẩm\r\n<br>\r\nHạn sử dụng: 12 tháng kể từ ngày sản xuất\r\n<br>\r\nTHÔNG TIN THƯƠNG HIỆU<br>\r\nNESCAFÉ là một trong những thương hiệu cà phê hàng đầu trên toàn thế giới với lịch sử phát triên lâu đời. NESCAFÉ luôn nhận được sự tín nhiệm và tin yêu của người tiêu dùng trên toàn thế giới nhờ không ngừng sáng tạo và mang đến những ly cà phê thơm ngon đa hương vị. Các sản phẩm của NESCAFÉ được đóng hộp và đóng gói lẻ theo dây, đảm bảo cung cấp những ly cà phê chất lượng và hợp túi tiền cho mỗi gia đình người Việt.', 3, 'Hộp 10 gói', '2024-09-25 17:00:00', '2024-04-23 20:58:11', 5, 1, 'visible'),
(23, 'The Coffee House cà phê sữa đá hòa tan (Túi 25 gói x 22g)', '1715912231.png', 130000, 'MÔ TẢ SẢN PHẨM<br>\r\nTên sản phẩm	        :	Cà phê sữa đá hòa tan - The Coffee House (25 gói x 22g)<br>\r\nLoại sản phẩm	:	Cà phê hoà tan<br>\r\nXuất xứ	                :	Việt Nam\r\n<br>Trọng lượng	        :	25 gói x 22g\r\n<br>Hạn sử dụng	        :	12 tháng kể từ ngày sản xuất\r\n<br>Bảo quản	         :	Bảo quản sản phẩm nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp.\r\n\r\nTHÔNG TIN SẢM PHẨM<br>\r\n\r\nCà phê sữa đá hoà tan The Coffee House là sản phẩm cà phê uống liền thơm ngon như cà phê pha phin, hoà quyện với vị ngọt béo của sữa quen thuộc giúp bạn thêm tỉnh táo và hứng khởi cho một ngày làm việc thật hiệu quả.<br>\r\n\r\nVới thành phần 100% cà phê nguyên chất cùng bột kem sữa mang đến cho bạn ly cà phê sóng sánh hài hoà tại nhà ngon như tại quán.<br>\r\n\r\nCà phê hoà tan thơm ngon đậm vị cà phê uống tại nhà ngon như tại quán, thích hợp uống nóng và lạnh. Cà phê The Coffee House rất tiện lợi không chỉ sử dụng trong gia đình, văn phòng mà còn có thể làm quà tặng cho gia đình, người thân, bạn bè.\r\n<br>\r\nĐẶC ĐIỂM NỔI BẬT\r\n<br>- Thành phần chứa 100% cà phê Robusta nguyên chất\r\n<br>- Bột kem sữa thơm béo\r\n\r\n<br>HƯỚNG DẪN SỬ DỤNG\r\n<br>- Uống đá: Hoà 01 gói cà phê sữa đá hoà tan THE COFFEE HOUSE với 50ml nước nóng và khuấy đều. Cho thêm 100gr đá và thưởng thức.\r\n<br>- Uống nóng: Hoà 1 gói cà phê sữa đá hoà tan THE COFFEE HOUSE với 100ml nước nóng, khuấy đều và thưởng thức.', 4, 'Hộp 25 gói', '2024-07-24 17:00:00', '2024-05-16 04:08:18', 0, 46, 'visible'),
(24, 'Cà phê PHỐ đen đá MacCoffee 160g(10 gói)', '1715912266.png', 36000, 'Cà phê đen đá Café Phố MacCoffee hộp 160g<br>\r\n\r\nCà phê đen đá Café Phố MacCoffee chiết xuất trực tiếp từ những hạt cà phê xanh, sạch, thuần khiết, kết hợp bí quyết khác biệt của cà phê tươi cùng công nghệ sản xuất hiện đại hàng đầu, tạo nên sản phẩm cà phê đậm đà, nguyên chất. Sản phẩm đảm bảo sẽ làm hài lòng những người sành uống cà phê. Cà phê đen đá Café Phố MacCoffee có hương vị cà phê thơm ngon, nồng nàn và tinh tế. <br>\r\n<br>\r\nXuất xứ: Việt Nam.\r\n<br>\r\nHướng dẫn sử dụng:\r\n<br>\r\nGu nhẹ: Hòa 1 gói với 30ml nước nóng, khuấy đều, sau đó thêm 120g đá vào dùng.\r\n<br>\r\nGu mạnh: Hòa 2 gói với 50ml nước nóng, khuấy đều, sau đó thêm 180g đá vào dùng.\r\n<br>\r\nHướng dẫn bảo quản: Bảo quản nơi khô ráo, thoáng mát.\r\n<br>\r\nQuy cách đóng gói: hộp.\r\n<br>\r\nKhối lượng: 160g\r\n<br>\r\nThành phần nguyên liệu: đường, hỗn hợp cà phê hòa tan Arabica và Robusta, muối, maltodextrin, chất điều chỉnh độ chua natri carbonat...\r\n<br>\r\nHạn sử dụng: 24 tháng', 5, '160g/10gói', '2024-07-04 17:00:00', '2024-05-16 05:52:22', 0, 67, 'visible'),
(25, 'Cà phê hòa tan Nescafe Latte vị socola (Hộp 10 gói x 24g)', '1715912321.png', 80000, 'Được truyền cảm hứng từ sự kết hợp độc đáo từ các chuyên gia pha chế Barista, Nescafé Latte vị sô cô la (Nescafe Mocha Latte) là sự hòa quyện của cà phê Latte sành điệu và hương vị Sô cô la đen đậm đà quyến rũ , mang đến trải nghiệm cà phê thơm ngon khó cưỡng, nâng tầm ly cà phê hòa tan ngon chuẩn như cà phê pha tại quán.<br>\r\n \r\n ĐẶC ĐIỂM NỔI BẬT<br>\r\n - Nescafé Latte vị sô cô la (Mocha Latte) được làm từ 100% hạt cà phê Robusta Việt Nam, đem đến hương vị cà phê thơm dịu nồng nàn\r\n <br>- Sự kết hợp độc đáo cùng hương vị Chocolate đen đậm đà quyến rũ tạo nên hương vị mới lạ, thơm ngon khó cưỡng và hợp gu thưởng thức cà phê đa dạng hiện nay của giới trẻ\r\n \r\n THÀNH PHẦN<br>\r\n Đường, bột kem pha cà phê (có chứa sữa-contain milk), sữa bột tách kem- skimmed milk powder (10,5%), bột ca cao (8%), cà phê hòa tan (6%), chất ổn định 1440, hương tổng hợp (sôcôla), muối i-ốt.<br>\r\n \r\n LƯU Ý<br>\r\n Sản phẩm có thể chứa đậu nành (may contain soya)<br>\r\n Không dùng cho người dị ứng với các thành phần của sản phẩm.<br>\r\n \r\n HƯỚNG DẪN SỬ DỤNG<br>\r\n Uống nóng: Hòa 1 gói cà phê hòa tan Nescafé Latte vị sô cô la với 70 ml nước nóng. Khuấy đều và thưởng thức.<br>\r\n Uống lạnh: Hòa 1 gói cà phê hòa tan Nescafé Latte vị sô cô la với 50 ml nước nóng. Khuấy đều, thêm đá và thưởng thức.<br>\r\n \r\n CÁCH BẢO QUẢN<br>\r\n Bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp, tránh lưu giữ ở nhiệt độ cao.<br>\r\n \r\n Xuất xứ: Thụy Sỹ<br>\r\n Nơi sản xuất: Việt Nam<br>\r\n Ngày sản xuất: In trên bao bì sản phẩm<br>\r\n Hạn sử dụng: 12 tháng kể từ ngày sản xuất<br>\r\n \r\n THÔNG TIN THƯƠNG HIỆU<br>\r\n NESCAFÉ là một trong những thương hiệu cà phê hàng đầu trên toàn thế giới với lịch sử phát triên lâu đời. NESCAFÉ luôn nhận được sự tín nhiệm và tin yêu của người tiêu dùng trên toàn thế giới nhờ không ngừng sáng tạo và mang đến những ly cà phê thơm ngon đa hương vị. Các sản phẩm của NESCAFÉ được đóng hộp và đóng gói lẻ theo dây, đảm bảo cung cấp những ly cà phê chất lượng và hợp túi tiền cho mỗi gia đình người Việt.<br>', 3, '10 gói x 24g', '2024-07-17 17:00:00', '2024-05-16 05:53:15', 5, 50, 'visible'),
(26, 'Cà phê sữa hạt Nescafe vị hạnh nhân (Hộp 10 gói x 24g)', '1715912368.png', 80000, 'Cà Phê Hóa Tan Nescafé Latte Sữa Hạt Vị Hạnh Nhân 240G (10 Gói x 24G)<br>\r\nCà Phê Nescafé Hạnh Nhân được truyền cảm hứng từ sự kết hợp độc đáo của các nguyên vật liệu từ các chuyên gia pha chế Barista, Nescafé Latte Sữa Hạt Vị <br>Hạnh Nhân là sự hòa quyện của cà phê Latte sành điệu và sữa hạt sánh mịn, mang đến trải nghiệm cà phê thơm béo khó cưỡng, nâng tầm ly cà phê hòa tan ngon chuẩn như cà phê pha tại quán.<br>\r\nNescafé Latte Sữa Hạt Vị Hạnh Nhân thơm béo, đa dạng sự lựa chọn cho trải nghiệm cà phê ngon mỗi ngày. Một gói cà phê nay lên đến 24g mang đến 1 ly cà phê Latte đá sánh mịn.<br>\r\nThành phần: Đường, bột kem pha cà phê (có chứa sữa và lactose - contain milk and lactose), cà phê hòa tan* (7.3%), đậu Navy (2,8%), chất làm dầy 1440, hương tổng hợp (sữa, cà phê, ngũ cốc, hạnh nhân), bột sữa dừa – coconut milk powder, muối i-ốt, sữa bột tách kem - skimmed milk powder (0.5%), chất điều chỉnh độ axit 500(ii).<br>\r\n<br>Hướng dẫn sử dụng: <br>\r\nUống nóng: Hòa 1 gói Cà phê hòa tan NESCAFÉ Latte vị Hạnh nhân với 100 ml nước nóng, khuấy đều và thưởng thức. Uống lạnh: Hòa 1 gói Cà phê hòa tan NESCAFÉ Latte vị Hạnh nhân với 50 ml nước nóng. Khuấy đều, thêm đá và thưởng thức. <br>\r\nHướng dẫn bảo quản: Bảo quản sản phẩm nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp. Hạn sử dụng: 9 tháng kể từ ngày sản xuất. Nơi sản xuất: Việt Nam.', 3, '10 gói x 24g', '2024-09-26 17:00:00', '2024-05-16 05:56:08', 5, 50, 'visible'),
(27, 'TOPMEAL - Ba chỉ heo cắt lát (500g)', '1715912753.png', 49000, 'Thịt ba chỉ heo rất giàu chất sắt, có tác dụng bổ sung lượng máu cho cơ thể. Trong thịt cũng có chứa vitamin B6 và protein, tăng cường khả năng miễn dịch, góp phần phục hồi cơ thể sau quá trình hoạt động.<br>\r\nXuất xứ: Châu Âu/ Brazil/ Nga<br>\r\nHSD: 18 tháng kể từ ngày sản xuất.', 6, '500gr', '2024-08-08 17:00:00', '2024-05-16 00:29:39', 5, 50, 'visible'),
(28, 'Bò bít tết nướng BBQ - 500g', '1715912462.png', 160000, 'Lõi Vai Bò Mỹ là phần thịt giao giữa vai và cổ của con bò, phần thịt này luôn có một sợi gân mỏng, giòn và không dai. Thịt lõi vai bò Mỹ có độ mềm vừa phải, thịt ngọt thơm đặc trưng vị bò ăn ngũ cốc theo tiêu chuẩn USDA (Bộ Nông Nghiệp Hoa Kỳ).\r\n<br>\r\nHIỆN SHOP CÓ 2 LOẠI LÕI VAI:<br>\r\n+ LÕI VAI BÒ MỸ CHOICE<br>\r\n+ LÕI VAI BÒ ÚC<br>\r\n\r\nSHOP THÔNG TIN ĐẾN BẠN SỰ KHÁC NHAU GIỮA LÕI VAI BÒ MỸ CHOICE & LÕI VAI BÒ ÚC NHƯ SAU:<br>\r\n\r\n+ Thịt lõi vai BÒ MỸ được phân cấp theo tiêu chuẩn của Bộ Nông Nghiệp Hoa Kỳ gồm có: LOẠI SELECT - Loại Tốt (hết hàng) & LOẠI CHOICE - Loại Cao Cấp. Việc xếp hạng thịt BÒ MỸ được dựa trên tỷ lệ vân mỡ trong thịt. Nhìn chung, loại thịt bò có vân mỡ càng cao thì chất lượng thịt bò càng tốt, thịt càng mềm, ngọt và thơm hơn (có hình minh họa). Trong đó, EXCEL là nông trại thịt bò đông lạnh tốt nhất ở Mỹ, nên có chất lượng thịt tốt hơn các nông trại khác.\r\n<br>\r\n+ Khác với BÒ MỸ được nuôi bằng ngũ cốc, BÒ ÚC được nuôi bằng cỏ và chăn thả tự nhiên. Do đó, thịt BÒ ÚC ít vân mỡ hơn nhiều so với BÒ MỸ, cọng gân cũng to hơn. Thịt lõi vai BÒ ÚC vẫn mềm, nhưng ít thơm và ít ngọt như thịt BÒ MỸ.\r\n<br>\r\n+ Thời gian gần đây thì thịt lõi vai bò rất được ưa chuộng tại thị trường Châu Á, nhất là Trung Quốc và Việt Nam. Do đó nguồn cung không đủ cầu làm cho giá thịt lõi vai tăng cao trong 1 năm trở lại đây. CÁC SẢN PHẨM LÕI VAI CÓ GIÁ RẺ TRÊN THỊ TRƯỜNG ĐỀU LÀ THỊT TRÂU NHẬP TỪ ẤN ĐỘ. Ngoài ra còn có thịt bò Đan Mạch, thịt bò Tây Ban Nha. Những loại bò này thịt rất dai và cứng.\r\n<br>\r\nSHOP TÓM LẠI MỘT SỐ THÔNG TIN NHƯ SAU, ĐỂ QUÝ KHÁCH CÓ THỂ CHỌN LOẠI THỊT PHÙ HỢP:<br>\r\n+ Thịt lõi vai bò Mỹ sẽ ngon hơn lõi vai bò Úc khi làm beefsteak kiểu Âu (chỉ ướp với muối + tiêu).<br>\r\n+ Thịt lõi vai bò Úc vẫn ngon và mềm khi làm beefsteak kiểu Âu, nhưng sẽ không thơm và ngọt thịt như lõi vai bò Mỹ. Tuy nhiên lõi vai bò Úc có giá thành tốt hơn.<br>\r\n+ Thịt lõi vai bò Úc ngon hơn khi được tẩm ướp để nướng, hoặc làm bít tết kiểu Việt.<br>\r\n\r\nQUÝ KHÁCH LƯU Ý, THỊT LÕI VAI ĐƯỢC BÁN THEO TỪNG KHAY 500GR - KHÔNG CẮT THỊT THEO YÊU CẦU.<br>\r\n+ LOẠI BÒ MỸ CHOICE ĐANG CÓ BẢN THỊT TO - KHOẢN 3 -4 MIẾNG THỊT /KHAY 500GR.<br>\r\n+ LOẠI BÒ ÚC ĐANG CÓ BẢN THỊT NHỎ HƠN - KHOẢN 3-4 MIẾNG THỊT /KHAY 500GR.<br>\r\n\r\nQUÝ KHÁCH LƯU Ý, THỊT LÕI VAI BÒ MỸ ĐƯỢC CẮT TỪ NGUYÊN CÂY THỊT (HÌNH BẦU DỤC) CHO NÊN MỘT KHAY 500GR THỊT SẼ GỒM NHỮNG MIẾNG THỊT TO NHỎ KHÁC NHAU, KHÔNG ĐỀU. THỊT LÕI VAI ĐƯỢC BÁN THEO TỪNG KHAY 500GR, KHÔNG BÁN THEO TỪNG MIẾNG.<br>\r\n\r\nSản phẩm: Lõi Vai Bò Mỹ.<br>\r\nHãng phân phối: USDA Choice.<br>\r\nQuy cách: cắt 1.5cm, phù hợp làm bò bít tết hoặc nướng.<br>\r\nĐóng gói: hút chân không theo khay 500gr.\r\n', 7, '500gr', '2024-06-13 17:00:00', '2024-05-16 00:33:49', 5, 34, 'visible'),
(29, 'Thịt viên ăn liền Heo Cao Bồi - 200gr', '1715912496.png', 35000, 'Heo cao bồi thịt viên 3 phút Masan được chế biến từ nguồn nguyên liệu được chọn lọc kĩ càng, công thức chế biến đặc biệt, đảm bảo mang đến tay người tiêu dùng sản phẩm chất lượng cao, hương vị thơm ngon, đảm bảo cung cấp đầy đủ dinh dưỡng cho bữa ăn trong gia đình. Cuộc sống bận rộn khiến bạn nhiều khi không có nhiều thời gian chuẩn bị cho bữa cơm gia đình. Với sản phẩm này, bạn sẽ rút ngắn được thời gian cho việc nấu ăn. Chỉ cần làm nóng lại sản phẩm trước khi dùng là đã sẵn sàng cho một món ăn thơm ngon bổ dưỡng, hoặc dùng Heo cao bồi thịt viên 3 phút Masanchế biến thành các món ăn khác.\r\n <br>\r\nHương vị thơm ngon, hấp dẫn<br>\r\n\r\nHeo cao bồi thịt viên 3 phút Masan được đóng hộp nhỏ gọn, tiện lợi sử dụng trong gia đình hoặc mang đi du lịch, dã ngoại. Sản phẩm do Vinmart phân phối luôn mang đến chất lượng tốt cho người tiêu dùng.<br>\r\nThành phần: thịt heo, nước, chất ổn định, gia vị hỗn hợp, đường, lạp xưởng, muối...<br>\r\nXuất xứ: Việt Nam<br>\r\nHạn sử dụng: 12 tháng<br>\r\nSản xuất bởi: Công ty TNHH Masan Jinju<br>\r\nNhà xưởng F5 lô 6 khu công nghiệp Tân Đông Hiệp A, phường Tân Đông Hiệp, thành phố Dĩ An Bình Dương Việt Nam<br>', 8, 'Gói', '2024-07-11 17:00:00', '2024-05-16 03:02:48', 5, 10, 'visible'),
(30, '500GR Thịt heo quay đùi da giòn', '1715912729.png', 150000, 'ĐỊA CHỈ : CHỢ XÓM CỦI 108 BẾN CẦN GIUỘC F11 Q8 <br>\r\n[GIAO NHANH 2H TPHCM - GARBSHIP NOWSHIP]<br>\r\nHOTLINE : 0934.531.844 TÂN GIÀU FOOD<br>', 25, '500gr', '2024-07-25 17:00:00', '2024-05-16 03:05:35', 5, 1, 'visible'),
(31, 'Thịt áp chảo PONNIE - hộp 200g', '1715911837.png', 69000, 'Thịt áp chảo Ponnie hộp 200g thơm ngon, hấp dẫn, có thể sử dụng để ăn liền hoặc ăn với cơm rất hấp dẫn. Thịt hộp Ponnie là sản phẩm thịt heo hộp được mọi người rất ưa chuộng, dinh dưỡng, tiện lợi.<br>\r\n\r\nThương hiệu:               Ponnie (Hàn Quốc)<br>\r\nNơi sản xuất:               Hàn Quốc<br>Khối lượng tịnh:           200g<br>\r\nCách dùng:                  Ăn trực tiếp hoặc ăn kèm cơm, bánh mì, trộn salad\r\n                                    Thơm ngon hơn khi áp trên chảo nóng.<br>\r\nThành phần:                Thịt heo, nước, muối, chất ổn định, đường, chất điều vị, bột giấm và cần tây, bột gia vị, bột mì.<br>\r\nBảo quản:                    Bảo quản nơi khô ráo, thoáng mát, nhiệt độ thường.<br>\r\n                                     Bảo quản ngăn mát tủ lạnh khi không sử dụng hết.', 8, '200g', '2024-08-13 17:00:00', '2024-05-16 03:07:13', 0, 5, 'visible'),
(32, 'Đùi gà tỏi-Đùi gà ngon TrueFood 500gr', '1715912834.png', 50000, 'Đôi lời kính gửi quý khách hàng từ đội ngũ Truefood.<br>\r\n\r\nCảm ơn tất cả quý khách đã quan tâm và sử dụng lẫn chưa sử dụng, lựa chọn sản phẩm của shop!<br>\r\nChính những sự tin yêu, ủng hộ của quý khách là động lực to lớn mỗi ngày để đội ngũ Truefood luôn được lắng nghe, hoàn thiện mình hơn, hướng tới một cuộc sống đủ đầy, an toàn, tiện nghi cho khách hàng.<br>\r\nTruefood rất tự hào và cam kết đem đến các sản phẩm chất lượng và an toàn nhất đến quý khách.\r\n<br>\r\nKính chúc quý khách và gia đình nhiều sức khỏe, luôn có những bữa ăn ngon miệng và có những trải nghiệm mua sắm thú vị cùng Truefood.\r\n<br>\r\nHN - Đùi gà tỏi nhập khẩu - Đùi gà ngon Truefood nhập khẩu Mỹ khay 500g - [Giao nhanh HN]\r\n<br>\r\nTỏi gà hay còn gọi là đùi tỏi gà là một trong những bộ phận ngon nhất của con gà và được chế biến thành nhiều món ăn hấp dẫn. Ở Việt Nam tỏi gà được các bà nội trợ thường xuyên lựa chọn vì tỏi gà không những có nhiều hàm lượng dinh dưỡng cao tốt cho sức khỏe mà nó còn rất dễ chế biến, tiết kiệm thời gian, công sức cho các bà nội trợ.<br>\r\n<br>\r\n☘ Thông Tin Sản Phẩm<br>\r\n- Xuất xứ: nhập khẩu Mỹ<br>\r\n- Thương hiệu: Truefood<br>\r\n- Khối lượng: 500g<br>\r\n- Loại sản phẩm: tỏi gà<br>\r\n- Hạn sử dụng: 06 tháng kể từ ngày sản xuất in trên bao bì<br>\r\n- Bảo quản: nhiệt độ -18 độ C<br>\r\n\r\n☘ Ưu Điểm Sản Phẩm<br>\r\n- Tỏi gà chứa nhiều protein giúp tăng trưởng và phát triển cơ bắp, duy trì trọng lượng, tăng sức khỏe cho cơ thể đồng thời cũng hỗ trợ giảm cân.<br>\r\n- Trong tỏi gà cũng có chứa nhiều vitamin nhóm B nên tăng cường hệ miễn dịch, bên cạnh đó còn giúp điều hòa hệ tiêu hóa.<br>\r\n- Đùi tỏi được sơ chế sạch sẽ, đảm bảo vệ sinh an toàn thực phẩm. <br>\r\n– Túi đựng được hút chân không đảm bảo chất lượng và hương vị sản phẩm lâu hơn.<br>\r\n- Bao bì PE - PA - PP - PET - PS sạch sẽ, đảm bảo an toàn vệ sinh thực phẩm<br>\r\n– Sản phẩm đa dạng trong cách chế biến, thơm ngon trong hương vị.<br>\r\n– Khối lượng phù hợp với nhu cầu của các hộ gia đình.<br>\r\n- Chế biến thành nhiều món ăn hấp dẫn, tùy theo nhu cầu và sở thích.<br>\r\n\r\n☘ Hướng dẫn dã đông<br>\r\n- Rã đông bằng ngăn mát tủ lạnh: Lấy thịt từ ngăn đá để xuống ngăn mát cho đến khi thịt mềm, có thể rã đông qua đêm hoặc từ sáng trước khi đi làm nếu muốn chế biến vào bữa tối. Đây là rã đông an toàn và dễ nhất.<br>\r\n- Rã đông bằng nước chảy: Cho thịt vào chậu hoặc bát to nước và mở vòi nước cho nước chảy nhỏ vào bát. Cách rã đông này tiết kiệm thời gian hơn nhưng cần chế biến ngay sau khi rã đông và thịt cần được bảo quản trong túi kín.<br>\r\n- Rã đông bằng lò vi sóng: Đây là cách rã đông nhanh nhất. Thịt cần được chế biến ngay sau khi rã đông vì đã bị làm chín một phần, có thể đã bị nhiễm vi sinh.<br>\r\n<br>\r\n☘ Cam kết từ shop<br>\r\nTruefood cam kết hướng thực phẩm sạch hướng tới cuộc sống đích thực<br>\r\n– Thực phẩm được kiểm định khắt khe<br>\r\n– Cam kết 100% sản phẩm sạch<br>\r\n– Chính sách giao hàng<br>\r\n– Chính sách thanh toán<br>\r\n– Trung tâm hỗ trợ khách hàng<br>\r\n– Chính sách chiết khấu ưu đãi mua sắm <br>', 10, '500gr', '2024-07-09 17:00:00', '2024-05-16 03:09:14', 5, 3, 'visible'),
(33, 'Đùi cánh gà tươi CP 500gr/khay, sơ chế sẵn', '1715913139.png', 36000, 'ĐÙI CÁNH GÀ TƯƠI KHAY 500G CP TƯƠI SẠCH<br>\r\n\r\n Cánh đùi gà CP đạt các tiêu chuẩn về an toàn thực phẩm, đảm bảo về chất lượng, độ tươi và ngon, xuất xứ rõ ràng.. Thích hợp để nấu món nướng, hầm, kho, rang,... Cánh gà chất lượng, thịt dai ngon, được đóng khay vệ sinh, tiện lợi.<br>\r\n\r\n✅ MÔ TẢ SẢN PHẨM<br><br>\r\n- Tên: đùi cánh gà/tỏi gà<br>\r\n- Đóng gói: Xếp Khay 1KG, Hút Chân Không<br>\r\n- Thương hiệu: C.P<br>\r\n- Bảo quản: Nhiệt độ 0-4 độ C<br>\r\n<br>\r\n#canhga #canhgakhucgiua #wingchicken #cánh_gà_ướp_mật_ong #cánh_gà_chiên_mắm #cánh_gà_nướng #cánh_gà_rán\r\n_____________________<br>\r\n\r\n???? NĂM CHÂU FOODS - KHO SỈ/LẺ THỰC PHẨM & ĐỒ ĂN VẶT TOÀN QUỐC ????<br>\r\n<br>\r\n???? Là công ty hoạt động trên 10 năm chuyên cung cấp nguyên liệu thực phẩm & đồ ăn vặt phục vụ các đối tác công ty, tập đoàn lớn trong nước & quốc tế: Samsung, LG, Canon, Redsun, Toco Toco, Hadilao, Bonchon, hệ thống trên 100 bếp ăn công nghiệp, bếp ăn trường học; Đơn vị chuyên cung cấp nguyên liệu thực phẩm & đồ ăn vặt nhãn hàng CJ, CP Food cho nhà hàng, siêu thị, đại lý, ctv bán sỉ uy tín và quy mô lớn nhất MIỀN BẮC<br>\r\n\r\n✅ CAM KẾT TẠI NĂM CHÂU FOODS <br>\r\n\r\n✔️ Với phương châm \"PHỤNG SỰ TỪ TÂM\", đội ngũ nhà NĂM CHÂU FOODS sẽ mang đến cho bạn sự trải nghiệm hài lòng khi mua hàng.\r\n✔️ Sản phẩm chất lượng, đảm bảo VSATTP chính hãng, thời gian sử dụng mới nhất đến tay khách hàng. <br>\r\n✔️ Hàng hoá nhập trực tiếp từ hãng, sản lượng #LỚN, #ỔN_ĐỊNH, #GIÁ_TỐT, kho hàng lớn, giao vận chuyên nghiệp, có hệ thống xe lạnh chạy tỉnh.<br>\r\n✔️ Đầy đủ pháp lý, hóa đơn VAT xuất theo đơn hàng.<br>\r\n--------------\r\n', 11, '500gr/khay', '2024-07-25 17:00:00', '2024-05-16 03:11:16', 0, 2, 'visible'),
(34, 'Thịt bò HOKUBEEF-Striploin GreenFood nhập khẩu - 200g', '1715912987.png', 105000, 'Thịt bò HOKUBEEF - Striploin\r\n<br>\r\nBò Hokubeef – Striploin là phần thịt nằm cuối dẻ sườn với các vân cẩm thạch đẹp mắt nhờ sự đan xen hoàn hảo giữa lớp thịt và mỡ. Thịt bò mềm, mọng nước nên rất được khách hàng lựa chọn. Đặc biệt, bò Hokubeef – Striploin xuất hiện nhiều trong các nhà hàng 5 sao với những món ăn thơm ngon, hấp dẫn. <br>\r\n\r\n\r\n\r\nBò Hokubeef – Striploin làm món gì ngon? <br>\r\n\r\nBeefsteak<br>\r\n\r\nCác món nướng <br>\r\n\r\nLẩu\r\n<br>\r\nCác món gỏi bò\r\n<br>\r\nBò xào, bò lúc lắc<br>\r\n\r\n<br>\r\n\r\nTuy nhiên làm beefsteak luôn là món ăn chân ái của rất nhiều thực khách. Nay GreenGood mách bạn bí quyết làm món Steak từ Hokubeef ngon chuẩn 5* ngay tại nhà mà siêu đơn giản nhé!! <br>\r\n\r\n\r\n\r\nChuẩn bị nguyên liệu: \r\n<br>\r\n– Miếng bò Hokubeef – Striploin 200gr<br>\r\n\r\n– Dầu ô liu, lá hương thảo với một ít tiêu đen xay. <br>\r\n\r\nVào bếp bắt đầu chế biến thôi nè!! <br>\r\n\r\nBước 1: <br>\r\n\r\n– Rã đông thịt bò Hokubeef khoảng 20 phút<br>\r\n\r\n– Ướp thịt với một ít muối\r\n<br>\r\nBước 2: \r\n<br>\r\n– Đun nóng chảo cùng ít dầu ô liu\r\n<br>\r\n– Dầu nóng cho miếng thịt vào giữa chảo \r\n<br>\r\n– Để dậy mùi thơm của bò bạn cho thêm tiêu và lá hương thảo vào. \r\n<br>\r\n– Áp chảo mỗi mặt khoảng 2-3 phút. <br>\r\n\r\n\r\n\r\nLưu ý khi chế biến: <br>\r\n<br>\r\n– Tuỳ thuộc vào sở thích ăn tái hay chín của bạn mà thời gian áp chảo có thể điều chỉnh. \r\n<br>\r\n– Chỉ được lật thịt mỗi mặt 1 lần duy nhất, vì lật thịt nhiều lần sẽ làm thịt mất nước.\r\n<br>\r\n– Bạn có thể ăn kèm sốt nấm, sốt tiêu, sốt rau củ, sốt vang đỏ…thêm một chút măng tây, khoai tây sẽ giúp món ăn ngon hơn!! \r\n<br>\r\n\r\n<br>\r\n*Thông tin sản phẩm:\r\n<br>\r\nQuy cách đóng gói: 200gr/ túi <br>\r\n\r\n\r\n\r\n*Lưu ý: chỉ hỗ trợ giao hàng hoả tốc tại khu vực thành phố Hồ Chí Minh<br>\r\n\r\nHotline liên hệ: 0901.410.336<br>', 12, '200g', '2024-08-13 17:00:00', '2024-05-16 03:40:35', 5, 3, 'visible'),
(35, 'Thịt bò hầm - hộp 150g - Đồ hộp Hạ Long', '1715913070.png', 42000, 'Thịt Bò Hầm Hạ Long giúp tiết kiệm thời gian nấu nướng cho những người bận rộn nhưng vẫn cung cấp cho bạn và gia đình món ăn ngon, chất lượng và an toàn, đậm đà gia vị, kích thích vị giác. Sản phẩm được làm từ những nguyên liệu tươi ngon, chọn lọc kỹ lưỡng và được thanh trùng để đảm bảo giữ được hương vị đặc trưng và đem đến cho bạn một món ăn ngon miệng và an toàn cho sức khỏe. <br>\r\n\r\n\r\n\r\n*Thành phần: Thịt bò, nước, hành, tỏi, muối, đạm đậu nành, đường kính, tiêu bột,...<br>\r\n\r\n*Khối lượng tịnh: 150gram/ hộp<br>\r\n\r\n*Hướng dẫn sử dụng: Có thể thưởng thức được ngay hoặc dùng kèm với cơm trắng, mì tươi,...<br>\r\n\r\n*Hướng dẫn bảo quản: Nơi khô ráo thoáng mát, tránh ánh nắng trực tiếp. Bảo quản lạnh sau khi mở nắp.<br>\r\n<br>\r\n*Hạn sử dụng: 36 tháng kể từ ngày sản xuất. Luôn cập nhật ngày sản xuất mới nhất cho khách hàng. <br>', 13, '200g/Hộp', '2024-08-15 17:00:00', '2024-05-16 03:42:51', 5, 5, 'visible'),
(36, 'Cánh gà Top Meal', '1715913107.png', 40000, 'Các sản phẩm của Topmeal đều được nhập khẩu từ các nước có uy tín trên thế giới, đều đã được kiểm dịch, hóa đơn chứng từ và chứng nhận vệ sinh an toàn thực phẩm đầy đủ. ', 6, '500gr', '2024-07-18 17:00:00', '2024-05-16 03:44:37', 5, 2, 'visible'),
(37, 'Tôm sú bóc nõn VITOT, độ dinh dưỡng cao - 500g', '1715913170.png', 385000, 'Tôm sú bóc nõn  là loại tôm tự nhiên được đánh bắt tại vùng biển Nha Trang, rửa sạch và hấp chín và bóc vỏ bỏ đầu. Tôm sú nhiều chất dinh dưỡng, rất ngon, thịt săn chắc, dễ chế biến và mang hương thơm đậm đà đặc trưng của biển.\r\n\r\n\r\n\r\n????. ???????????????? ????????̛????̛̃???????? ???????????????????? ????????̂???? ????????́ ????????́???? ????????̃????:Tôm sú bóc nõn tươi là loại thực phẩm có giá trị dinh dưỡng rất cao, chứa nhiều chất đạm, các vitamin và nguyên tố vi lượng. \r\n\r\nSo với thịt nạc, lượng đạm của tôm sú cao hơn 20%, ít chất béo hơn khoảng 40%, lượng vitamin A cao hơn chừng 40%.Tôm sú tươi ngon, không dùng chất bảo quản. Tôm sú bóc nõn được lột vỏ, làm sạch rất tiện chế biến mà không hề giảm độ thơm ngon.\r\n\r\n\r\n\r\n????. ????????́???????? ????????̉???? ????????????̉???? ????????̂???? ????????́ ????????́???? ????????̃????: bảo quản tủ đông tối đa 6 tháng.\r\n\r\n\r\n\r\n????. ????????́???????? ????????????̂́ ????????????̂́???? ????????̂???? ????????́ ????????́???? ????????̃????: xả thăng vào vòi nước để giã đông và chế biến theo ý thích.', 14, '500gr/Khay', '2024-05-23 17:00:00', '2024-05-16 00:02:49', 5, 50, 'visible'),
(38, 'Tôm sú vằn biển chắc thịt tươi sống - 500g', '1715913223.png', 380000, '\r\nTôm SÚ vằn biển tự nhiên được ngư dân Nghệ An đánh bắt tại các vùng biển trong khu vực. Vì là tôm ngoài tự nhiên, lại được bảo quản lạnh sâu ngay khi vừa bắt nên tuyệt đối tươi sạch, không chất bảo quản. Tôm có vị ngọt đậm đà đặc trưng, thịt chắc, nhiều dưỡng chất, dùng để chế biến món gì cũng rất ngon.\r\n<br>\r\nTôm sú vằn biển có hàm lượng dinh dưỡng cao: hàm lượng protein từ 20 – 22%, hàm lượng lipit 0,3%, còn lại là hàm lượng sắt, chất xơ và các chất khoáng khác.\r\n<br>\r\nHàm lượng protein trong tôm cao giúp tăng sức đề kháng của cơ thể cùng với vitamin B612 giúp săn chắc cơ bắp, cải thiện tình trạng của mắt, đồng thời với hàm lượng sắt sẵn có trong tôm he vằn biển sẽ giúp cơ thể bổ sung máu đầy đủ. Cùng một số loại vitamin và hàm lượng chất khoáng có sẵn trong tôm vằn biển giúp cơ thể được bổ sung đầy đủ các vi chất, không lo thiếu iot, không lo béo phì hay các bệnh liên quan đến thiếu chất. Là loại thức ăn được lựa chọn cho các bà mẹ mang thai, trẻ nhỏ suy dinh dưỡng, thấp còi, đặc biệt là người mới ốm dậy.\r\n<br>\r\n', 14, '500/Khay', '2024-06-14 17:00:00', '2024-05-16 00:08:03', 5, 100, 'visible'),
(39, 'Tôm lột tự nhiên VITOT vỏ mềm - 500g', '1715913292.png', 80000, ' Tôm lột là loại tôm tươi được thu hoạch tại các đầm tôm của người dân các tỉnh miền biển. Do đã qua thời gian lột vỏ nên tôm lột vỏ có vỏ mềm và thớ thịt săn chắc, vẫn giữ được độ tươi và ngọt của các loại tôm nguyên liệu khác.Tôm lột vỏ có ưu điểm là vỏ mềm, ăn được cả vỏ\r\n\r\n<br>\r\nTôm lột cung cấp lượng protein dồi dào,bổ sung vitamin B12,bổ sung sắt, giàu selen ngăn ngừa ung thư, cung cấp canxi,  chứa nhiều omega-3\r\n<br>\r\nCấp đông tôm với nước ,đá hoặc muối giữ đc khoảng thời gian rất lâu khoảng 6-7 tháng.<br>\r\nGiã đông, rửa sạch là có thể nấu món bạn thích.', 14, '500g/Khay', '2024-06-20 17:00:00', '2024-05-16 00:10:42', 5, 5000, 'visible'),
(40, 'Cá thu tươi cắt khúc VITOT - 500g / 1 - 2 khúc', '1715913453.png', 220000, 'Cá Thu Khúc 1 Một Nắng Thịt Cá Thơm Ngon, Nhiều Béo, Nhiều Đạm<br>\r\n1 khúc có thế 500-600G <br>Cá thu một nắng là phần giữa to ngon nhất của mỗi con cá thu,sau khi đánh bắt về sẽ được ngư dân cắt khúc,lấy những lát to ngon đem rửa bằng nước biển sạch.<br><br>\r\nSau đó cá thu được đem phơi một nắng giòn ( nắng to,gay gắt ) ,chỉ một nắng duy nhất trước khi đem hút chân không,cấp đông liền sau đó.\r\n<br>\r\nTrong cá thu rất giàu Phosphorus, Protein, Vitamin D, Niacin, Vitamin B12 và Selenium. Và đặc biệt có chứa nhiều chất béo Omega tốt cho tim mạch có lợi cho sức khỏe.<br>\r\n\r\n- Chọn mua cá thu một nắng có thân bóng sáng không xỉn không chuyển sang màu vàng. ...<br>\r\n- Thịt cá có màu hồng, khi ấn nhẹ thì thịt cá có độ dính nhất định.<br><br>\r\n-Bảo quản đông lạnh: 6 tháng.<br>\r\n- Cá thu 1 nắng chiên: chiên vàng chấm mắm tỏi cực ngon.<br>\r\n- Cá thu rim mặn ngọt: cay cay, mặn mặn, ngọt ngọt cực tốn cơm.<br>\r\n- Cá thu 1 nắng xốt cà chua: chiên vàng lên xốt với cà chua rất là ngon và mềm dai\r\n<br>-Đảm bảo sản phẩm đến tay khách hàng sẽ tươi ngon và đảm bảo vệ sinh sạch sẽ\r\n-Do cần đảm bảo tươi ngon lên chỉ ship hỏa tốc Hà Nội mong quý khách thông cảm . <br>\r\n-Khách tỉnh các cần mua sỉ lẻ hải sản công ty liên hệ hotline : 0973 383 398<br>', 14, '500gr/1-2 khúc', '2024-06-19 17:00:00', '2024-05-16 00:18:43', 0, 234234, 'visible'),
(41, 'Khô cá lóc 3 nắng hàng chuẩn loại I - 500g', '1715913571.png', 185000, '\r\n\r\nKhô cá lóc là loại khô chế biến sạch từ con cá lóc tươi. Sau khi tẩm gia vị đặc trưng miền tây như muối, bột ngọt, nước mắm, tiêu đen, ớt giã nhuyễn sẽ đem ướp khoảng 30 phút trước khi mang đi phơi dưới nắng to trong một ngày, đến khi cá lóc khô ráo và thịt cá săn dẻo là được.\r\n<br>\r\nKhô cá lóc 3 nắng muốn ngon thay vì phơi khô cá theo kiểu truyền thống, tại KHÔ LÓC từng con khô sẽ được sấy nhiệt để đảm bảo an toàn vệ sinh thực phẩm. Nguyên liệu làm cá khô luôn được chọn lựa kỹ: cá lóc phải tươi sống, thịt cá săn chắc, lóc bỏ xương chỉ giữ lại thịt cá phí lê cá làm khô.\r\n<br>\r\n\r\n\r\nCá lóc rất nhiều dinh dưỡng, có chứa sắt, canxi và rất nhiều vitamin tốt cho sức khỏe. Thịt cá lóc tạo ra nguồn axit béo không bão hòa đa giúp điều chỉnh quá trình tổng hợp prostaglandin để chữa lành vết thương hiệu quả. \r\n\r\n<br>\r\n\r\nĐể chọn khô cá lóc ngon, bạn nên chọn mua những con khô không có màu quá đậm vì đây là khô được tẩm ướp nhiều màu hóa học, không tốt cho sức khỏe.\r\n<br>\r\nChọn khô có thớ thịt dày vừa, nếu quá dày sẽ không thấm gia vị, nếu quá mỏng sẽ bị khô và chế biến món ăn không ngon.\r\n<br>\r\n<br>\r\n\r\n- Cá lóc 3 nắng VITOT hoàn toàn không sử dụng chất bảo quản nên không thể để lâu ở môi trường bên ngoài như nhiều loại sản phẩm khác. Nếu để ở môi trường ẩm sẽ dễ bị mốc, để ở môi trường khô cá sẽ dễ bị cứng và gắt dầu.\r\n<br>\r\n- Cá lóc 3 nắng sau khi mua về để đảm bảo được độ tươi ngon nên cất trong tủ đông, có thể bảo quản được từ 4 đến 6 tháng.\r\n<br>\r\n- Để ngăn mát tủ lạnh được 1 tuần trong điều kiện để kín, hút chân không.\r\n<br>\r\n- Nếu không có tủ lạnh, khi mua về cần phơi lại cho khô, sau tầm 1 tuần đem cá ra phơi nắng lại lần nữa để tránh cho cá không bị mốc và hôi .\r\n\r\n<br>\r\n\r\nKhô cá lóc có vị hơi mặn một chút, mọi người nên rửa qua với nước sạch cho đỡ mặn rồi chế biến theo ý thích.\r\n\r\n\r\n\r\n  <br> - Khô cá lóc chiên là món ăn dân dã đặc trưng miền đồng nước Nam Bộ Việt Nam, với hương vị độc đáo và cách chế biến đơn giản nên món khô cá lóc chiên được coi là một trong những món ăn gắn liền với quá trình khai hóa đất phương Nam.\r\n<br>\r\n    -  Gỏi cá lóc có vị thơm bùi của cá lóc khô, vị chua chua, giòn tan của xoài xanh cùng mùi hương dễ chịu của rau răm sẽ đem tới cho bạn một món ăn không chỉ ngon, bổ dưỡng mà còn có lợi cho sức khỏe. Như các bạn đã biết, xoài xanh là một loại trái cây chứa nhiều vitamin và khoáng chất giúp ổn định đường huyết, cân bằng calo, tốt cho da, mắt cũng như làm giảm cảm giác thèm ăn và tăng cường sự trao đổi chất bên trong cơ thể.\r\n<br>\r\n   -  Khi  nhắc đến khô cá lóc là món đặc sản miền tây Nam Bộ các bạn sẽ tận hưởng những món ngon cá lóc rim đường hòa nguyện cùng trái tắc thơm và vị chua thanh của tắc vào khô cá lóc cho bạn một vị ngon rất tuyệt vời.', 14, '500gr/Khay', '2024-07-18 17:00:00', '2024-05-16 00:22:36', 5, 1253, 'visible'),
(42, 'Cá chỉ vàng, cá chỉ vàng khô VITOT - 500g - Cá loại I', '1715913588.png', 190000, '\r\n\r\nCá chỉ vàng khô là loại cá rất được ưa chuộng, thường được dùng làm quà tặng. Thịt cá khô săn chắc, thớ thịt vàng có màu hơi sẫm đỏ, da có lớp vảy mỏng màu xanh trắng.\r\n\r\nTại Vitot Food, cá chỉ vàng khô được làm từ cá tươi tuyển chọn. Quy trình chế biến đảm bảo an toàn vệ sinh thực phẩm. Vitot cam kết không tẩm phẩm màu và các loại gia vị đậm, đảm bảo sức khỏe và giữ nguyên hương vị ngon ngọt của thịt cá.\r\n\r\n\r\n????. ???????????????? ????????̛????̛̃???????? ???????????????????? ????????́ ????????????̉ ????????̀???????? ????????????̂:\r\n\r\nMặc dù đã được phơi khô nhưng cá chỉ vàng khô vẫn có giá trị dinh dưỡng rất cao, cứ trong 100g sẽ có:\r\n\r\n- 214 mg Omega 3, chất này giảm cholesterol xấu trong máu, ngăn ngừa các mảng xơ vữa trong bệnh mạch vành, omega 3 trong cá chỉ vàng khô có tác dụng chống oxy hóa rất tốt, chống lại sự lão hóa.\r\n\r\n- Ăn cá chỉ vàng rất tốt cho sự phát triển của xương và hoạt động của các sợi thần kinh, cơ tim. Thích hợp cho những người thiếu Canxi hoặc có bộ xương yếu.\r\n????. ????????́???????? ????????????̣???? ????????́ ????????????̉ ????????̀????????:\r\nBạn nên chọn mua những con khô cá chỉ vàng có hình thoi, phần lưng trắng sạch, phần bụng màu nâu hơi đỏ, khi xé nhẹ phần thịt thấy dai, chắc, không bị bỡ.\r\n Bạn không nên chọn những con cá có màu sắc quá đậm vì đó là những con bị tẩm ướp quá nhiều, không giữ được hương vị tự nhiên của cá.\r\n????. ????????́???????? ????????̉???? ????????????̉???? ????????́ ????????????̉ ????????̀????????: bảo quản tủ đông tối đa 6 tháng\r\n????. ????????́???????? ????????????̂́ ????????????̂́???? ????????́ ????????????̉ ????????̀????????: không cần rã đông, chế biến theo ý thích\r\n????. ????????́???? ????????́???? ???????????????? ????????̛̀ ????????́ ????????????̉ ????????̀????????:\r\n- Khô cá chỉ vàng rim chua ngọt\r\n- Cá chỉ vàng chiên', 14, '500/Khay', '2024-06-19 17:00:00', '2024-05-16 00:26:26', 0, 934, 'visible'),
(43, 'Đu đủ chín cây tươi ngon bổ dưỡng', '1715913612.png', 39000, 'Đu đủ chín cây tuơi ngon, bổ dưỡng.', 1, '1.2kg', '2024-06-18 17:00:00', '2024-05-16 06:25:35', 0, 50, 'visible');
INSERT INTO `products` (`id`, `name`, `photo`, `price`, `description`, `manufacture_id`, `unit`, `date_end`, `date_start`, `discount`, `number`, `status`) VALUES
(44, 'Gạo Lứt Huyết Rồng (LOẠI NGON) 1KG - Gạo Lứt THIÊN PHƯỚC Hút Chân Không Cao Cấp', '1715913773.png', 35000, 'Gạo Lứt Huyết Rồng (LOẠI NGON) 1 KG  -  Gạo Lứt Đỏ Huyết Rồng Ăn Kiêng Giảm Cân - Gạo Lứt Hữu Cơ Cao Cấp Tốt Cho Sức Khỏe\r\n<br>\r\n- Đóng gói: Túi 1kg hút chân không<br>\r\n- Hạn sử dụng: 12 tháng<br>\r\n- Xuất xứ: Việt Nam<br>\r\n- Bảo quản: Nơi khô ráo thoáng mát<br>\r\n\r\n* Gạo lứt huyết rồng là loại thực phẩm tốt cho sức khỏe được nhiều gia đình lựa chọn nhất hiện nay. Gạo lứt huyết rồng được xay sơ qua vẫn giữ được lớp cám dày bên ngoài nên lớp vỏ màu nâu đặc biệt. Thành phần của gạo lứt huyết rồng chủ yếu gồm: Chất xơ cùng các vitamin: B1, B2, B3, B5, B6, K… chất đạm, chất báo, các nguyên tố vi lượng canxi, sắt, magie, photpho, omega 3, omega 6, omega 9… Đây đều là những khoáng chất cần thiết cho cơ thể, rất tốt cho sức khỏe.\r\n<br>\r\n* Hàm lượng dinh dưỡng có trong một chén cơm gạo lứt đỏ huyết rồng: 108 Calo (23g Carb; 2,9g Protein; 2,4g Chất Xơ)\r\n<br>\r\n* CÁCH NẤU (Lưu ý gạo lứt huyết rồng đặc tính khô và tơi chứ không phải gạo dẻo ạ):\r\n<br>\r\n- Đầu tiên bạn cần vo sơ gạo với nước cho sạch; nếu có thời gian bạn hãy ngâm gạo từ 3 đến 4 tiếng để khi nấu gạo sẽ mềm hơn và không bị quá khô. <br>\r\n- Sau khi ngâm gạo, chúng ta tiến hành nấu (với chế độ nấu cơm lứt nếu nồi cơm nhà bạn có chế độ này), bạn có thể bỏ thêm các loại đậu hạt mình thích vào để nấu chung sẽ rất ngon, nếu không có cũng không sao nhé. <br>\r\n- LƯU Ý gạo lứt huyết rồng cần nhiều nước để nấu hơn gạo trắng thông thường; bạn nên sử dụng tỉ lệ 1 gạo - 2 nước (1 chén gạo - 2 chén nước).\r\n<br>- Sau khi nồi cơm báo chín, bạn nên để như vậy ủ thêm 20p để cơm mềm và dễ ăn nhất bởi loại này có đặc tính khô và tơi chứ không nên mở nồi ra ngay ạ.\r\n\r\n<br>* Tác dụng của gạo lứt huyết rồng với sức khỏe\r\n\r\n<br>Khi thói quen thực dưỡng ngày càng phát triển rầm rộ, các loại gạo lứt ngày càng trở nên phổ biến với các biến tấu thú vị như bánh gạo lứt, bún gạo lứt, miến gạo lứt, trà gạo lứt, nước gạo lứt rang… Đây là một trong những món mà bạn có thể tự tay làm tại nhà một cách dễ dàng nhất. Nhiều nhà nghiên cứu từ nhiều trường đại học danh tiếng trên thế giới cũng đã chứng minh lợi ích của gạo lứt tốt cho cả sức khỏe và sắc đẹp. \r\n<br>\r\nVì thế những năm gần đây, nhiều gia đình đã bắt đầu lựa chọn sử dụng gạo lứt huyết rồng khi áp dụng phương pháp thực dưỡng nhằm hỗ trợ điều trị một số bệnh và nâng cao sức khỏe.Chống oxy hóa: Theo một số nghiên cứu, các dưỡng chất có trong gạo lứt huyết rồng có khả năng chống oxy hóa rất tốt, hỗ trợ phòng bệnh tim, đột quỵ cũng như nhiều bệnh nghiêm trọng khác.<br>\r\n\r\nNgoài ra, hàm lượng dinh dưỡng có trong gạo lứt huyết rồng rất cao, giàu chất xơ nhưng lượng calo thấp. Điều này rất phù hợp với những người cần giảm cân hoặc điều chỉnh cân nặng. Lứt huyết rồng còn hỗ trợ tiêu hóa, gạo này có hàm lượng chất xơ cao, rất tốt cho hệ tiêu hóa, thúc đẩy quá trình trao đổi chất. Sử dụng gạo để đắp mặt nạ hoặc uống trà gạo lứt hằng ngày rất tốt cho làn da và mái tóc. Với thành phần dinh dưỡng cao, không khó hiểu khi gạo lứt huyết rồng đem đến nhiều giá trị cho sức khỏe của con người.<br>', 1, '1kg', '2024-06-27 17:00:00', '2024-05-16 06:38:17', 5, 5, 'visible'),
(54, 'Điện thoại Apple iPhone 15 Pro 128GB', '1715852795.jpg', 25990000, 'Thông số kỹ thuật:\r\n\r\n- 6.1″\r\n\r\n- Màn hình Super Retina XDR\r\n\r\n- Màn hình Luôn Bật\r\n\r\n- Công nghệ ProMotion\r\n\r\n- Titan với mặt sau bằng kính nhám\r\n\r\n- Nút Tác Vụ\r\n\r\n- Dynamic Island\r\n\r\n- Chip A17 Pro với GPU 6 lõi\r\n\r\n- SOS Khẩn Cấp \r\n\r\n- Phát Hiện Va Chạm\r\n\r\n- Pin: Thời gian xem video lên đến 29 giờ\r\n\r\n- USB‑C: Hỗ trợ USB 3 cho tốc độ truyền tải nhanh hơn đến 20x\r\n\r\n\r\n\r\nCamera sau\r\n\r\n- Chính 48MP | Ultra Wide | Telephoto\r\n\r\n- Ảnh có độ phân giải siêu cao (24MP và 48MP)\r\n\r\n- Ảnh chân dung thế hệ mới với Focus và Depth Control\r\n\r\n- Phạm vi thu phóng quang học lên đến 6x\r\n\r\n\r\n\r\nBộ sản phẩm bao gồm: \r\n\r\n•        Điện thoại \r\n\r\n•        Dây sạc\r\n\r\n•        HDSD Bảo hành điện tử 12 tháng.\r\n\r\n\r\n\r\nThông tin bảo hành:\r\n\r\nBảo hành: 12 tháng kể từ ngày kích hoạt sản phẩm.\r\n\r\nKích hoạt bảo hành tại: https://checkcoverage.apple.com/vn/en/\r\n\r\n\r\n\r\nHướng dẫn kiểm tra địa điểm bảo hành gần nhất:\r\n\r\nBước 1: Truy cập vào đường link https://getsupport.apple.com/?caller=grl&locale=en_VN \r\n\r\nBước 2: Chọn sản phẩm.\r\n\r\nBước 3: Điền Apple ID, nhập mật khẩu.\r\n\r\nSau khi hoàn tất, hệ thống sẽ gợi ý những trung tâm bảo hành gần nhất.\r\n\r\n\r\n\r\nTại Việt Nam, về chính sách bảo hành và đổi trả của Apple, \"sẽ được áp dụng chung\" theo các điều khoản được liệt kê dưới đây:\r\n\r\n\r\n\r\n1) Chính sách chung: https://www.apple.com/legal/warranty/products/warranty-rest-of-apac-vietnamese.html\r\n\r\n\r\n\r\n2) Chính sách cho phụ kiện: https://www.apple.com/legal/warranty/products/accessory-warranty-vietnam.html\r\n\r\n\r\n\r\n3) Các trung tâm bảo hành Apple ủy quyền tại Việt Nam: https://getsupport.apple.com/repair-locations?locale=vi_VN\r\n\r\n\r\n\r\nQúy khách vui lòng đọc kỹ hướng dẫn và quy định trên các trang được Apple công bố công khai, Shop chỉ có thể hỗ trợ theo đúng chính sách được đăng công khai của thương hiệu Apple tại Việt Nam,\r\n\r\n\r\n\r\nBài viết tham khảo chính sách hỗ trợ của nhà phân phối tiêu biểu:\r\n\r\n\r\n\r\nhttps://synnexfpt.com/bao-hanh/chinh-sach-bao-hanh/?agency-group=1&agency-slug=san-pham-apple\r\n\r\n\r\n\r\n Để thuận tiện hơn trong việc xử lý khiếu nại, đơn hàng của Brand Apple thường có giá trị cao, Qúy khách mua hàng vui lòng quay lại Clip khui mở kiện hàng (khách quan nhất có thể, đủ 6 mặt) giúp Shopee có thêm căn cứ để làm việc với các bên và đẩy nhanh tiến độ xử lý giúp Qúy khách mua hàng.', 2, 'Cái', '2024-05-19 14:39:28', '2024-05-16 09:46:35', 15, 1, 'hidden'),
(95, 'Gạo lứt dẻo đỏ hữu cơ ONFOD gạo lức hỗ trợ giảm cân ăn kiêng cho người tiểu đường, gym, yoga, bà bầu', '1715913819.png', 35000, '', 1, '500g', '2024-06-19 17:00:00', '2024-05-16 06:42:17', 5, 30, 'visible'),
(96, '[Đặc Sản]_Bánh Canh Gạo Bình Định', '1715913847.png', 35000, '➤ Sản xuất tại làng nghề truyền thống lâu năm tại Bình Định<br>\r\n➤ Đóng gói theo túi 0,5 kí<br>\r\n➤ Bảo quản: Ngăn mát tủ lạnh (3-4 ngày), ngăn đông (30 ngày)\r\n<br>\r\nĐược làm từ bột gạo nguyên chất. Sau khi xay, lắng bột, người thợ bằng sự khéo léo của mình sẽ cán bột ra thành tấm, lăn qua bột khô cho không bị dính rồi xắt thành sợi to hơn sợi bánh canh mì một chút. Điều khác biệt của bánh canh gạo và bánh canh mì đó là bánh canh gạo có độ mềm đặc trưng, dễ bị đứt gãy khi nấu và được làm bằng bột gạo còn bánh canh mì thì dai, không bị gãy khi nấu và được chế biến từ bột mì (khoai mì).\r\n<br>\r\nMón này có thể nấu được với chả cá, tôm + thịt, ghẹ (cua), xương heo (sường heo, xương cổ….) rất đa dạng và phong phú.<br>', 1, '500g', '2024-06-26 17:00:00', '2024-05-16 06:43:30', 0, 50, 'visible'),
(97, 'Sữa đặc ngôi sao phương nam giấy 380g, NSX luôn mới từ VINAMILK', '1715913912.png', 22500, 'Sữa Đặc Có Đường Ngôi Sao Phương Nam Hộp Giấy 380G đến từ Vinamilk<br>\r\n\r\n** Bạn yên tâm bên mình luôn gửi hàng date mới nhé, Hãy order bên mình ngay bạn ơi !<br>\r\n\r\n*** Sữa đặc Ngôi Sao Phương Nam là bí quyết không thể thiếu để pha ly cà phê sữa thơm ngon, đúng điệu nhờ vào độ sánh đặc, thơm béo.\r\n<br> >>>Nếu được kết hợp cùng cà phê nguyên chất rang mộc SACO COFFEE bạn sẽ có trên tay mình ly cà phê thơm ngon, hoà quyện giữa vị đậm đà của cà phê nguyên chất thơm nồng nàn và vị béo của sữa. \r\n<br>\r\nThông tin sản phẩm:<br>\r\n- Ngôi Sao Phương Nam là “Thương hiệu được chọn mua nhiều nhất”  được người tiêu dùng tin tưởng và sử dụng phổ biến trong các công thức chế biến như bánh flan, sinh tố, yogurt…<br>\r\n>>>  Đặc biệt, Ngôi Sao Phương Nam là bí quyết không thể thiếu để pha ly cà phê sữa thơm ngon, tuyệt hảo. <br> \r\n- Đặc điểm sữa đặc hộp giấy Vinamilk<br>\r\nĐây là sản phẩm sữa Creamer đặc có đường, trên mặt sữa có váng kem.  Sữa có hương vị thơm ngon, chất lượng, phù hợp thị hiếu của nhiều người tiêu dùng Việt.<br>\r\n- Thành phần sữa đặc có đường Vinamilk:<br>\r\nThành phần của sữa đặc xanh lá này gồm có: 2,7g chất đạm, 10,8g chất béo. Ngoài ra sản phẩm có hydro cacbonate 56,7g, . Năng lượng của hộp sữa này tương đương 334 Kcal<br>\r\nTrọng lượng: 380G<br>\r\n- Hương vị: Ngọt vừa<br>\r\n- Sản xuất Việt Nam<br>\r\n- Hạn sử dụng :1 năm kể từ ngày sản xuất<br>\r\n- Sản phẩm được sử dụng phù hợp cho mọi đối tượng sử dụng<br>.\r\n - Ưu điểm: Hộp giấy tiện dùng, dễ bảo quản.<br>\r\n* Lưu ý: Giống với các sản phẩm của thương hiệu khác, sữa đặc Ngôi sao Phương Nam không chứa chất bảo quản. Vì thế, bạn cần sử dụng hết sữa đặc trong vòng không quá 5 ngày (1 tuần nếu để trong ngăn mát tủ lạnh để tránh bị kiến bu) theo khuyến cáo của nhà sản xuất. <br>\r\n- Nếu chưa mở nắp, hãy để sản phẩm ở nơi khô ráo và thoáng mát, tránh ánh nắng trực tiếp. <br>', 1, '380g', '2024-06-20 17:00:00', '2024-05-16 06:45:04', 5, 50, 'visible'),
(98, 'Sữa bột Vinamilk CanxiPro 900g (Hộp thiếc) - Sữa bổ sung Canxi cho người già cao tuổi, Tốt cho xương', '1715913967.png', 371000, '• SỮA BỘT VINAMILK CANXIPRO 900G <br>\r\n\r\n• Cung cấp hệ dưỡng chất với tỉ lệ phù hợp giữa Canxi, Phốt Pho, Vitamin D hỗ trợ xây dựng hệ xương chắc khỏe; <br>\r\n\r\n• Bổ sungCollagen thủy phân, giúp ngừa thoái hóa khớp hiệu quả (nghiên cứu lâm sàng cho thấy khi dùng từ 5g-12g Collagen thủy phân mỗi ngày giúp giảm các triệu chứng thoái hóa khớp) <br>\r\n\r\n• Chất xơ hòa tan Inulin, Oligofructose, giúp hỗ trợ sức khỏe hệ tiêu hóa và giúp nhuận tràng<br>\r\n\r\nHẠN SỬ DỤNG 24 THÁNG<br>\r\n\r\nXUẤT XỨ VIỆT NAM<br>', 1, 'Hộp', '2024-07-25 17:00:00', '2024-05-16 06:46:44', 0, 23, 'visible'),
(99, 'Lốc 4 hộp sữa tươi tiệt trùng ít đường TH True MILK (110ml | 180ml)', '1715914054.png', 30000, 'Sữa tươi TH True Milk đảm bảo không sử dụng thêm hương liệu, mang vị ngon sữa tươi nguyên chất 100%, chứa nhiều vitamin và khoáng chất như Vitamin A, D, B1, B2, canxi, kẽm. Lốc 4 hộp sữa tươi tiệt trùng ít đường TH true MILK 110ml/ 180ml đóng thùng tiện lợi, tiết kiệm.\r\n<br>\r\nSữa tươi tiệt trùng TH true MILK được làm hoàn toàn từ nguồn sữa tươi sạch tại trang trại bò sữa của TH. <br>\r\nLy sữa tốt nhất được tạo nên bởi các yếu tố về giống bò sữa, quy trình chăm sóc, quy trình thú y, quy trình vắt sữa, quy trình phát hiện và cảnh báo tồn dư lượng thuốc thực vật bị nghiêm cấm, để trẻ em sẽ không có nguy cơ dậy thì sớm.<br>\r\nHiểu được điều đó, TH true MILK đã áp dụng các công nghệ hiện đại nhất thế giới, trong đó có điểm nhấn là đeo chip cho từng con bò sữa. Thiết bị này có thể phát hiện bệnh viêm vú trước tới 4 ngày, những con bò có thể bị viêm sẽ được tách khỏi đàn để không lấy sữa nữa.<br>\r\nCông nghệ này cũng giúp phát hiện lượng tồn dư kháng sinh của từng con bò. Nhờ vậy, sữa TH true MILK đảm bảo được chữ \"tươi\", \"sạch\" như đúng định vị của thương hiệu.<br>\r\nSử dụng công nghệ tiệt trùng UTH, đảm bảo loại bỏ các khuẩn có hại trong sữa, giữ được gần như trọn vẹn dưỡng chất và hương vị đặc trưng của sữa.\r\n<br>\r\n– Hoàn toàn từ sữa tươi sạch nguyên chất của Trang trại TH<br>\r\n– Được sản xuất theo một quy trình sạch, khép kín từ đồng cỏ đến bàn ăn<br>\r\n– Không sử dụng chất bảo quản<br>\r\n<br>\r\nHướng dẫn bảo quản và sử dụng:<br>\r\nBảo quản nơi khô ráo và thoáng mát.<br>\r\nSử dụng ngay sau khi mở.<br>\r\nNgon hơn khi uống lạnh.<br>\r\nSản phẩm có chứa sữa.<br>\r\nHSD: 180 ngày kể từ ngày sản xuất<br>\r\n\r\nThành phần dinh dưỡng trong 100ml:<br>\r\nNăng lượng: 70 kcal<br>\r\nChất béo: 3,2 g<br>\r\nChất đạm: 2,9 g<br>\r\nHydrat cacbon: 7,4 g<br>\r\nCanxi: 100 mg<br>\r\nCác vitamin và khoáng chất có sẵn trong sữa tươi<br>', 1, 'Lốc 4 hộp', '2024-08-02 17:00:00', '2024-05-16 06:48:35', 0, 5, 'visible');

-- --------------------------------------------------------

--
-- Table structure for table `product_catelogy`
--

CREATE TABLE `product_catelogy` (
  `catelogy_id` int NOT NULL,
  `product_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product_catelogy`
--

INSERT INTO `product_catelogy` (`catelogy_id`, `product_id`) VALUES
(7, 54),
(1, 1),
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(3, 31),
(2, 18),
(2, 20),
(2, 19),
(2, 21),
(2, 22),
(2, 23),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(3, 27),
(3, 28),
(3, 29),
(3, 30),
(3, 27),
(3, 32),
(3, 33),
(3, 34),
(3, 35),
(3, 36),
(4, 37),
(4, 38),
(4, 39),
(5, 40),
(5, 41),
(5, 42),
(1, 43),
(6, 44),
(6, 95),
(6, 96),
(8, 97),
(8, 98),
(8, 99);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `customer_id` int NOT NULL,
  `product_id` int NOT NULL,
  `star` float NOT NULL,
  `comment` varchar(550) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`customer_id`, `product_id`, `star`, `comment`, `created_at`) VALUES
(1, 1, 4.5, 'Hàng ngon nè chất lượng tốt', '2024-05-19 14:54:14'),
(5, 1, 4.5, 'cũng nngon', '2024-05-19 14:55:13'),
(6, 1, 4.5, 'Thây đnahs giá ok', '2024-05-19 15:01:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `catelogy`
--
ALTER TABLE `catelogy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `forgot_password`
--
ALTER TABLE `forgot_password`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `manufactures`
--
ALTER TABLE `manufactures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manufacture_id` (`manufacture_id`);

--
-- Indexes for table `product_catelogy`
--
ALTER TABLE `product_catelogy`
  ADD KEY `catelogy_id` (`catelogy_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `catelogy`
--
ALTER TABLE `catelogy`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `manufactures`
--
ALTER TABLE `manufactures`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forgot_password`
--
ALTER TABLE `forgot_password`
  ADD CONSTRAINT `forgot_password_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `order_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`manufacture_id`) REFERENCES `manufactures` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `product_catelogy`
--
ALTER TABLE `product_catelogy`
  ADD CONSTRAINT `product_catelogy_ibfk_1` FOREIGN KEY (`catelogy_id`) REFERENCES `catelogy` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `product_catelogy_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `rate_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
