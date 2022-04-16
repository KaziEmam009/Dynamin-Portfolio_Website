-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 07:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lion`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(20) NOT NULL,
  `brand_image_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_image_name`) VALUES
(3, '1648504207-805.png'),
(4, '1648504224-165.png'),
(5, '1648504236-973.png'),
(6, '1648504244-832.png'),
(7, '1648504899-324.png'),
(8, '1648504936-700.png'),
(9, '1648504944-452.png'),
(10, '1648504951-184.png'),
(11, '1648504957-649.png'),
(12, '1648504963-700.png');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(100) NOT NULL,
  `guest_name` varchar(100) NOT NULL,
  `guest_email` varchar(1000) NOT NULL,
  `guest_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `guest_name`, `guest_email`, `guest_message`) VALUES
(1, 'kazi', 'iudhg@gg.com', 'iuyefh8yb u ggg3uhybg'),
(2, 'Seikh Nirzana', 'zana@gmail.com', 'valo ase valo thekoo.. nakasher Thikanay chithi Likho...'),
(3, 'kazi sara', 'sara@gmail.com', 'sal nai kuttar bagha nam,'),
(4, 'chadni', 'Chadni@biyahoiyagasey.comk', 'ytvuyuyvuvyut'),
(5, 'bdh', 'h@gmail.com', 'fn4uhin'),
(7, 'Katrina aktar alia', 'alia@gmail.com', 'vai, amake akta job daaan'),
(8, 'ami', 'ami@gmail.com', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `factarea`
--

CREATE TABLE `factarea` (
  `id` int(10) NOT NULL,
  `factarea_icon` varchar(100) NOT NULL,
  `factarea_amount` varchar(100) NOT NULL,
  `factarea_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `factarea`
--

INSERT INTO `factarea` (`id`, `factarea_icon`, `factarea_amount`, `factarea_title`) VALUES
(1, 'fa fa-bookmark', '245', 'FEATURE ITEM'),
(2, 'fa fa-thumbs-up', '445', 'ACTIVE PRODUCTS'),
(8, 'fa fa-calendar', '5', 'YEAR EXPERIENCE'),
(9, 'fa fa-users', '3K', 'OUR CLIENTS');

-- --------------------------------------------------------

--
-- Table structure for table `pic_setting`
--

CREATE TABLE `pic_setting` (
  `id` int(50) NOT NULL,
  `picture_name` varchar(50) NOT NULL,
  `picture_value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pic_setting`
--

INSERT INTO `pic_setting` (`id`, `picture_name`, `picture_value`) VALUES
(1, '1649962889-735.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(20) NOT NULL,
  `post_by` varchar(100) NOT NULL,
  `portfolio_title` varchar(100) NOT NULL,
  `portfolio_details` text NOT NULL,
  `portfolio_feature_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `post_by`, `portfolio_title`, `portfolio_details`, `portfolio_feature_photo`) VALUES
(8, 'h@gmail.com', 'echo Dark beauty', 'DARK BEAUTY', '1649010761-3714.jpg'),
(9, 'h@gmail.com', 'KAZI HAMBLE TRIANGLE', 'HAMBLE TRIANGLE', '1649011486-6400.jpg'),
(10, 'h@gmail.com', 'GILROY  script', 'GILROY LIMBO.', '1649012795-6301.jpg'),
(14, 'h@gmail.com', 'Botol', 'BOTOL r PIPE', '1649528763-7135.jpg'),
(15, 'h@gmail.com', ' CREATIVE EIUSMOD TEMPOR', 'j  ijnj ionojk ijnjg oj', '1649528816-3886.jpg'),
(16, 'h@gmail.com', 'GAIN THERE', 'UI/UX GAIN THERE', '1649528855-2592.jpg'),
(18, 'h@gmail.com', 'This Is My Best Work', 'yoo yoo', '1649531537-2583.jpg'),
(20, 'jamal@gmail.com', 'Recent work', ' lorem ipsum, ', '1649532019-9343.jpg'),
(21, 'h@gmail.com', 'kokop', 'yoo yoo', '1650049496-6833.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) NOT NULL,
  `service_icon` varchar(100) NOT NULL,
  `service_title` varchar(20) NOT NULL,
  `service_description` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_icon`, `service_title`, `service_description`, `status`) VALUES
(9, 'fa fa-bath', 'gvfa fa-bath', 'ywegygbtyfa fa-bathetyh4', 'active'),
(12, 'fa fa-id-badge', 'fa fa-id-', 'ygvbfvew hgvuyv th 3 uy', 'active'),
(13, 'fa fa-user-circle', 'fa fa-user', 'iuhgvuehr niuhh', 'active'),
(16, 'fa fa-bath', 'gvfa fa-bath', 'ywegygbtyfa fa-bathetyh4', 'active'),
(17, 'fa fa-id-badge', 'fa fa-id-', 'ygvbfvew hgvuyv th 3 uy', 'deactive'),
(18, 'fa fa-user-circle', 'fa fa-user', 'iuhgvuehr niuhh', 'active'),
(25, 'fa fa-ban', 'ban me', 'never', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(20) NOT NULL,
  `testimonial_text` text NOT NULL,
  `testimonial_name` varchar(50) NOT NULL,
  `testimonial_dasignation` varchar(100) NOT NULL,
  `testimonial_stars` int(1) NOT NULL,
  `testimonial_Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `testimonial_text`, `testimonial_name`, `testimonial_dasignation`, `testimonial_stars`, `testimonial_Image`) VALUES
(1, 'Hloo brother', 'Kazi Vai', 'COO', 4, '1'),
(2, 'Hloo brotherubef', 'Kazi Vai', 'COO', 4, '2'),
(9, ' An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result ', 'Yong Hoki', 'EO', 4, ''),
(10, ' An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result ', 'Yong Hoki', 'EO', 4, ''),
(11, 'Testimonials are one of the most important tools a company can use to show potential customers how valuable their products and services are. Testimonials are a short statement that describes how a product or service worked for a customer', 'Seikh Nirzana', 'FDO', 5, ''),
(12, 'Testimonials are one of the most important tools a company can use to show potential customers how valuable their products and services are. Testimonials are a short statement that describes how a product or service worked for a customer', 'Seikh Nirzana', 'FDO', 5, ''),
(13, 'i1yass did a great job. I have a PHP Laravel application that I had developed myself. I needed help to get the app back to a releasable state. i1yass was able to quickly identify the areas that needed attention and the app is now working well. I was able to communicate with i1yass through the Fivver portal and was very happy with the service.', 'XOXO', 'CEO', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `text_settings`
--

CREATE TABLE `text_settings` (
  `id` int(20) NOT NULL,
  `setting_name` varchar(100) NOT NULL,
  `setting_value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `text_settings`
--

INSERT INTO `text_settings` (`id`, `setting_name`, `setting_value`) VALUES
(1, 'owner_name', 'kazi Emam'),
(2, 'owner_bio', 'I am a web developer'),
(3, 'fb_link', 'https://www.facebook.com/kazi.emam.9'),
(4, 'tw_link', 'https://twitter.com/KaziEmam3'),
(5, 'owner_about', 'My skills is HTML-5, CSS-3, Bootstrap-5, JavaScript(ES-6), AJAX, OOP, JQuery, PHP, MySQL, Laravel, WordPress Theme and Plaging Development'),
(6, 'address', 'Dhaka, Bangladesh'),
(7, 'phone', '+880 1775536198'),
(8, 'email', 'kaziemam007@gmail.com'),
(9, 'instagram', 'https://www.instagram.com/kazi_emam_h_salman/'),
(10, 'about_edu', 'Diploma of Computer & Science');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `profile_img` varchar(150) NOT NULL DEFAULT 'defoultPP.png',
  `role` varchar(50) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email_address`, `password`, `gender`, `profile_img`, `role`) VALUES
(52, 'echo', 'echo@gmail.com', '15de21c670ae7c3f6f3f1f37029303c9', 'female', 'defoultPP.png', 'admin'),
(53, 'KAZI EMAM', 'kazi@gamil.com', '698d51a19d8a121ce581499d7b701668', 'male', 'defoultPP.png', 'admin'),
(54, 'Seikh Nirzana', 'zana@emam.com', '310dcbbf4cce62f762a2aaa148d556bd', 'female', 'defoultPP.png', 'admin'),
(55, 'mannaf', 'mannaf@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', 'defoultPP.png', 'admin'),
(56, 'emam', 'e@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', 'defoultPP.png', 'admin'),
(64, 'aa', 'aa@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'male', 'defoultPP.png', 'admin'),
(65, 'Nir Zana', 'h@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'male', 'zana.jpg', 'admin'),
(66, 'koko', 'koko@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'male', '66.jpg', 'admin'),
(67, 'jamal', 'jamal@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'male', '67.jpg', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factarea`
--
ALTER TABLE `factarea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pic_setting`
--
ALTER TABLE `pic_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text_settings`
--
ALTER TABLE `text_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `factarea`
--
ALTER TABLE `factarea`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pic_setting`
--
ALTER TABLE `pic_setting`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `text_settings`
--
ALTER TABLE `text_settings`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
