-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 04:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ankit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_login_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_login_id`, `admin_name`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `advertisement_id` int(11) NOT NULL,
  `tasker_details_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_actual_price` int(11) DEFAULT NULL,
  `product_offer_price` int(11) NOT NULL,
  `product_description` longtext NOT NULL,
  `product_description_main` longtext NOT NULL,
  `product_more_description` longtext NOT NULL,
  `advertisement_date` date NOT NULL,
  `front_image` varchar(255) NOT NULL,
  `feature_product` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`advertisement_id`, `tasker_details_id`, `category_id`, `sub_category_id`, `product_name`, `product_quantity`, `product_actual_price`, `product_offer_price`, `product_description`, `product_description_main`, `product_more_description`, `advertisement_date`, `front_image`, `feature_product`) VALUES
(18, 1, 6, 18, 'Create a website like this', 500, 500, 499, 'hello', 'hello', '  ', '2021-02-19', 'Screenshot_(2).png', 1),
(19, 1, 6, 18, 'Ecommerce Website', 4, 10000, 12000, 'Create an ecommerce website ', 'Create an ecommerce website&nbsp;  ', 'Create an ecommerce website&nbsp;  ', '2021-02-20', 'Blue_Tshirt.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `all_bids`
--

CREATE TABLE `all_bids` (
  `all_bids_id` int(11) NOT NULL,
  `tasker_details_id` int(11) NOT NULL,
  `add_id` int(11) NOT NULL,
  `user_details_id` int(11) NOT NULL,
  `bid_status` int(11) NOT NULL,
  `bid_price` int(11) NOT NULL,
  `project_delivery` int(11) NOT NULL,
  `bid_date` datetime NOT NULL,
  `proposal_description` longtext NOT NULL,
  `payment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_bids`
--

INSERT INTO `all_bids` (`all_bids_id`, `tasker_details_id`, `add_id`, `user_details_id`, `bid_status`, `bid_price`, `project_delivery`, `bid_date`, `proposal_description`, `payment_date`) VALUES
(2, 1, 18, 1, 4, 500, 7, '2021-02-20 11:59:06', 'hihihii', '2021-03-12 02:46:06'),
(7, 1, 19, 1, 2, 12000, 7, '2021-02-20 03:22:45', 'this is proposal', '0000-00-00 00:00:00'),
(9, 1, 18, 7, 1, 499, 7, '2021-02-23 01:01:26', 'hello my name is rohan\r\n', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `basic_info`
--

CREATE TABLE `basic_info` (
  `basic_info_id` int(11) NOT NULL,
  `admin_login_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `company_mobile` bigint(20) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `company_working_hour` varchar(255) NOT NULL,
  `company_about_us_footer` longtext NOT NULL,
  `company_insta_link` longtext NOT NULL,
  `company_facebook_link` longtext NOT NULL,
  `company_youtube_link` longtext NOT NULL,
  `about_us_page` longtext NOT NULL,
  `contact_us_page` longtext NOT NULL,
  `company_privacy` longtext NOT NULL,
  `company_terms` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basic_info`
--

INSERT INTO `basic_info` (`basic_info_id`, `admin_login_id`, `company_name`, `company_email`, `company_mobile`, `company_address`, `company_working_hour`, `company_about_us_footer`, `company_insta_link`, `company_facebook_link`, `company_youtube_link`, `about_us_page`, `contact_us_page`, `company_privacy`, `company_terms`) VALUES
(1, 1, 'AppKit', 'appkit@gmail.com', 9999999999, 'Surat, Gujrat', 'Mon - Sun/10:00 AM - 11:00 PM', 'Best Freelancing Website                                          ', '', '', '', 'hkljl', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_date`) VALUES
(6, 'IT ', '2021-02-19 06:20:26pm ');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_reviews`
--

CREATE TABLE `contact_us_reviews` (
  `contact_us_reviews_id` int(11) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_review_date` datetime NOT NULL,
  `contact_phone` bigint(20) NOT NULL,
  `contact_message` longtext NOT NULL,
  `contact_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inside_images`
--

CREATE TABLE `inside_images` (
  `inside_images_id` int(11) NOT NULL,
  `advertisement_id` int(11) NOT NULL,
  `inside_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inside_images`
--

INSERT INTO `inside_images` (`inside_images_id`, `advertisement_id`, `inside_image`) VALUES
(23, 18, 'Screenshot_(2)1.png'),
(24, 18, 'Screenshot_(3).png'),
(25, 18, 'Screenshot_(5).png'),
(26, 19, 'bed.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `main_banner`
--

CREATE TABLE `main_banner` (
  `main_banner_id` int(11) NOT NULL,
  `admin_login_id` int(11) NOT NULL,
  `main_banner1` varchar(255) NOT NULL,
  `main_banner2` varchar(255) NOT NULL,
  `main_banner3` varchar(255) NOT NULL,
  `mini_banner1` varchar(255) NOT NULL,
  `mini_banner2` varchar(255) NOT NULL,
  `mini_banner3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_banner`
--

INSERT INTO `main_banner` (`main_banner_id`, `admin_login_id`, `main_banner1`, `main_banner2`, `main_banner3`, `mini_banner1`, `mini_banner2`, `mini_banner3`) VALUES
(2, 1, 'freelancing-770x3851.jpg', 'f.jpg', 'freelancing1.jpg', 'freelancing-770x3852.jpg', 'freelancing2.jpg', 'freelancing-770x3852.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchased_products`
--

CREATE TABLE `purchased_products` (
  `purchased_products_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `advertisement_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_buy_price` int(11) NOT NULL,
  `product_buy_quantity` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `order_total` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(255) NOT NULL,
  `checkout_name` varchar(255) NOT NULL,
  `checkout_mobile` bigint(20) NOT NULL,
  `checkout_address` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_category_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(255) NOT NULL,
  `sub_category_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_category_id`, `category_id`, `sub_category_name`, `sub_category_date`) VALUES
(18, 6, 'Web Development', '2021-02-19 06:20:41pm '),
(19, 6, 'Andriod Development', '2021-02-19 06:20:58pm '),
(20, 6, 'Full Stack Developer', '2021-02-20 10:21:17pm ');

-- --------------------------------------------------------

--
-- Table structure for table `tasker_details`
--

CREATE TABLE `tasker_details` (
  `tasker_details_id` int(11) NOT NULL,
  `tasker_name` varchar(255) NOT NULL,
  `tasker_email` varchar(255) NOT NULL,
  `tasker_password` varchar(255) NOT NULL,
  `tasker_date` datetime NOT NULL,
  `tasker_profile_pic` varchar(255) NOT NULL,
  `tasker_address` varchar(255) NOT NULL,
  `tasker_mobile` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasker_details`
--

INSERT INTO `tasker_details` (`tasker_details_id`, `tasker_name`, `tasker_email`, `tasker_password`, `tasker_date`, `tasker_profile_pic`, `tasker_address`, `tasker_mobile`) VALUES
(1, 'admin', 'admin@gmail.com', '123', '2021-02-20 12:31:12', 'rohan23.jpg', 'RZ-G-149,Sita Puri--II, GALI NO 5, NEW DELHI 45', 0);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `member_pic` varchar(255) NOT NULL,
  `about_member` varchar(255) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `member_position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_details_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_wallet_amount` int(11) NOT NULL,
  `user_date` date NOT NULL,
  `user_profile_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_details_id`, `user_name`, `user_email`, `user_password`, `user_wallet_amount`, `user_date`, `user_profile_pic`) VALUES
(1, 'admin', 'admin@gmail.com', '123456', 0, '2020-11-27', 'rohan24.jpg'),
(7, 'Rohan', 'rohan921310@gmail.com', '123456', 0, '2021-02-23', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_login_id`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`advertisement_id`);

--
-- Indexes for table `all_bids`
--
ALTER TABLE `all_bids`
  ADD PRIMARY KEY (`all_bids_id`);

--
-- Indexes for table `basic_info`
--
ALTER TABLE `basic_info`
  ADD PRIMARY KEY (`basic_info_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact_us_reviews`
--
ALTER TABLE `contact_us_reviews`
  ADD PRIMARY KEY (`contact_us_reviews_id`);

--
-- Indexes for table `inside_images`
--
ALTER TABLE `inside_images`
  ADD PRIMARY KEY (`inside_images_id`);

--
-- Indexes for table `main_banner`
--
ALTER TABLE `main_banner`
  ADD PRIMARY KEY (`main_banner_id`);

--
-- Indexes for table `purchased_products`
--
ALTER TABLE `purchased_products`
  ADD PRIMARY KEY (`purchased_products_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- Indexes for table `tasker_details`
--
ALTER TABLE `tasker_details`
  ADD PRIMARY KEY (`tasker_details_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_details_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `advertisement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `all_bids`
--
ALTER TABLE `all_bids`
  MODIFY `all_bids_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `basic_info`
--
ALTER TABLE `basic_info`
  MODIFY `basic_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us_reviews`
--
ALTER TABLE `contact_us_reviews`
  MODIFY `contact_us_reviews_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inside_images`
--
ALTER TABLE `inside_images`
  MODIFY `inside_images_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `main_banner`
--
ALTER TABLE `main_banner`
  MODIFY `main_banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchased_products`
--
ALTER TABLE `purchased_products`
  MODIFY `purchased_products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tasker_details`
--
ALTER TABLE `tasker_details`
  MODIFY `tasker_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
