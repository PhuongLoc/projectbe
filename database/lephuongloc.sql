-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 27 Décembre 2022 à 09:54
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `lephuongloc`
--

-- --------------------------------------------------------

--
-- Structure de la table `manufactures`
--

CREATE TABLE IF NOT EXISTS `manufactures` (
  `manu_id` int(11) NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`manu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(1, 'Samsung'),
(2, 'Sennheiser'),
(3, 'Apple'),
(4, 'MSI'),
(5, 'Logitech');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(20) NOT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `feature` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=90 ;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`, `created_at`) VALUES
(2, 'Smart Tivi Samsung 4K Crystal', 1, 1, 10500000, 'sam2.jfif', 'TV trí tuệ nhân tạo AI', 1, '2022-12-25 13:36:21'),
(3, 'Smart Tivi QLED 4K 55 inch Samsung', 1, 1, 15700000, 'vn-oled-s95b-qa55s95bakxxv-thumb-534358839.webp', 'Tivi Samsung', 0, '2022-12-25 13:35:40'),
(4, 'Smart Tivi Samsung 4k UA50AU9000', 1, 1, 11290000, 'sam3.jpg', 'TV trí tuệ nhân tạo AI ', 0, '2022-12-25 13:38:00'),
(5, 'Smart Tivi Samsung HD 32 inch', 1, 1, 6890000, 'sam4.jpg', 'Độ phân giải màn hình HD ', 0, '2022-12-25 13:41:28'),
(6, 'Tai nghe Sennheiser MX 400 II', 2, 2, 250000, 'tai-nghe-1.jpg', 'Tai nghe', 1, '2022-12-24 03:48:28'),
(7, 'Tai nghe Sennheiser IE 800', 2, 2, 23780000, 'tai-nghe-2.jpg', 'Tai nghe Sennheiser IE 800 là 1 trong những sản phẩm tai nghe công nghệ hot và đắt nhất trên thị trường hiện nay. Tuy đắt nhưng sản phẩm này lại được rất nhiều anh em săn đón. Tại sao lại như vậy? Chắc hẳn chiếc tai nghe nhạc này không phải dạng vừa. Hãy cùng META đi tìm hiểu chi tiết sản phẩm trong bài viết này nhé!', 1, '2022-10-28 11:59:15'),
(8, 'Tai nghe EPOS Sennheiser PC 7 USB', 2, 2, 1200000, 'tai-nghe-3.jpg', 'Kết nối với máy tính qua cổng USB, cắm là chạy, thật đơn giản\r\nÂm thanh khi nghe và nói rất rõ ràng với giả cả phải chăng.\r\nMicrophone hạn chế , giảm thiểu tiếng ồn xung quanh\r\nTai nghe khá nhẹ và thoải mái', 0, '2022-10-28 11:59:15'),
(9, 'Tai nghe Sennheiser HDR165', 2, 2, 3630000, 'tai-nghe-4.jpg', 'Tai nghe không dây Sennheiser HDR 165 có kiểu dáng đẹp mắt với tông màu đen sang trọng, kích thước nhỏ gọn, trọng lượng nhẹ khoảng 300g giúp bạn dễ dàng mang theo tới bất kỳ đâu để thỏa mãn niềm đam mê âm nhạc của mình. Tai nghe Sennheiser HDR165 truyền tín hiệu digital rất tốt và ổn định với khoảng cách lên đến tối đa 30m.', 1, '2022-10-28 11:59:15'),
(10, 'Tai nghe Sennheiser MX 375', 2, 2, 529000, 'tai-nghe-5.jpg', 'Tai nghe Sennheiser MX 375 với âm bass mạnh mẽ, chất lượng âm thanh trong sáng, trung thực, rõ ràng, đem đến cho người dùng những trải nghiệm âm thanh hoàn hảo, đáp ứng dải tần 20Hz - 22kHz cho âm thanh trầm bổng theo từng nốt nhạc.', 1, '2022-10-28 14:31:07'),
(11, 'iPhone 14 Pro Max', 3, 3, 35500000, 'iphone14promax.png', 'Apple iPhone 14 Pro Max', 1, '2022-12-24 03:23:37'),
(12, 'iPhone SE 2022', 3, 3, 12990000, 'iphonese.jpg', 'Màn hình: Kích thước 4.7 inch ', 0, '2022-12-24 03:26:59'),
(13, 'iPhone 13 Pro ', 3, 3, 26990000, 'iphone13pro.jpg', 'Iphone 13 Pro', 0, '2022-12-24 03:27:45'),
(14, 'iPhone XS MAX', 3, 3, 23990000, 'iphonexsmax.png', 'Iphone XSMAX', 1, '2022-12-24 03:28:56'),
(15, 'iPhone 12', 3, 3, 14990000, 'iphone12.jpg', 'Công nghệ màn hình OLED Super Retina.\r\n', 1, '2022-12-24 03:29:22'),
(27, 'iPhone 14', 3, 3, 21500000, 'iphone14.png', 'Iphone 14 ', 1, '2022-12-24 03:34:12'),
(28, 'iPhone 13 Mini', 3, 3, 17900000, 'iphone13mini.jfif', 'iPhone 13 Mini', 1, '2022-12-24 03:36:04'),
(16, 'Laptop Gaming MSI Katana GF66', 4, 4, 20990000, 'GF66-12U-3050-600x600-1.gif', 'Laptop MSI', 0, '2022-12-25 13:22:06'),
(17, 'Laptop Gaming MSI GF63 Thin 11SC 665VN', 4, 4, 17290000, 'GF63-Thin-11SC-665VN-664VN.jpg', 'Laptop MSI', 1, '2022-12-25 13:23:58'),
(18, 'Laptop Gaming MSI Bravo 15 B5DD 275VN', 4, 4, 19490000, 'Bravo-15-B5DD-275VN-600x600-1.jpg', 'Laptop MSI', 1, '2022-12-25 13:25:17'),
(19, 'Laptop Gaming MSI Crosshair 15', 4, 4, 36490000, '620vn-1-600x600-1.jpg', 'Laptop MSI', 0, '2022-12-25 13:26:14'),
(20, 'Laptop Gaming MSI Vector GP76', 4, 4, 62990000, '098VN-ava.gif', 'Laptop MSI', 1, '2022-12-25 13:27:14'),
(21, 'Chuột Gaming không dây Logitech G304', 5, 5, 890000, 'chuot-1.jpg', 'Đem đến sự lựa chọn có giá thành phù hợp dành cho các game thủ, chuột Logitech G304 được nâng cấp toàn diện so với các thế hệ trước nhờ sở hữu thiết kế đột phá, cảm biến HERO 12.000 mức DPI, hệ thống 6 nút lập trình để tùy chỉnh tính năng và công nghệ tương tác không dây vượt trội LIGHTSPEED.', 1, '2022-10-28 11:59:15'),
(22, 'Chuột Bluetooth Logitech M650', 5, 5, 849000, 'chuot-2.jpg', 'Với thiết kế tập trung vào người dùng, chuột không dây Logitech Signature M650 sẽ hứa hẹn cung cấp những trải nghiệm sử dụng thoải mái nhất. Sản phẩm nổi bật với tính năng cuộn SmartWheel, kết nối không dây liền mạch, nút bấm yên tĩnh và nút bên có thể tùy chỉnh.', 0, '2022-10-28 11:59:15'),
(23, 'Chuột có dây Logitech M90', 5, 5, 119000, 'chuot-3.jpg', 'Chuột Logitech M90 là giải pháp bền bỉ, đơn giản và hiệu quả để dùng cho văn phòng, góc làm việc hoặc góc học tập. Thiết bị được thiết kế theo phong cách nhẹ nhàng với hai tone màu xám – đen. Chiều dài dây 1,8 mét linh hoạt kết hợp cùng độ nhạy 1000 DPI chắc chắn sẽ giúp M90 phục vụ bạn một cách hiệu quả.', 1, '2022-10-28 11:59:15'),
(24, 'Chuột Gaming Logitech G502 Hero High Performance', 5, 5, 1759000, 'chuot-5.jpg', 'Với thiết kế đậm chất gaming và những nét cắt xẻ cực cá tính, chuột Logitech G502 HERO High Performance sẽ là trợ thủ đắc lực để game thủ có điều kiện phô diễn kỹ năng thượng thừa trong từng pha giao tranh gay cấn. Mọi chi tiết của sản phẩm như cảm biến quang học, hệ thống nút bấm, trọng lượng và đèn RGB đều được tối ưu hợp lý nhằm tạo điều kiện tốt nhất khi chơi game.', 1, '2022-10-28 13:39:35'),
(25, 'Chuột không dây Logitech MX Master 3', 5, 5, 2249000, 'chuot-4.jpg', 'Chuột không dây Logitech MX Master 3 được thiết kế với kiểu dáng hỗ trợ cử động cổ tay và bàn tay thoải mái nhất, có thể vận hành mượt mà trên nhiều bề mặt nhờ độ phân giải cảm biến lên tới 4000 DPI và hỗ trợ công nghệ Logitech Flow giúp duy trì tương tác với ba máy tính hoặc laptop riêng biệt.', 0, '2022-10-28 13:43:10');

-- --------------------------------------------------------

--
-- Structure de la table `protypes`
--

CREATE TABLE IF NOT EXISTS `protypes` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'Tivi'),
(2, 'Tai nghe'),
(3, 'Smartphone'),
(4, 'LapTop'),
(5, 'Chuột');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_id` int(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=49 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `role_id`) VALUES
(1, 'admin', '123', 'admin@gmail.com', 1),
(2, 'user1', '123', 'user1@gmail.com', 0),
(48, 'su123', '202cb962ac59075b964b07152d234b70', '111233@gmail.com', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
