-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2017 at 08:17 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_yellowpage`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(2) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email_address` varchar(100) NOT NULL,
  `admin_password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email_address`, `admin_password`) VALUES
(1, 'abir', 'kaziabir36@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'monon', 'rafayet.monon@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(50) NOT NULL,
  `category_name` varchar(32) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `publication_status`) VALUES
(4, 'Event', 1),
(5, 'Health and Wellness', 1),
(6, 'Travel & Transport', 1),
(7, 'Professional Services', 1),
(8, 'Education & Training', 1),
(9, 'Properties & Rentals', 1),
(10, 'Home Improvement', 1),
(12, 'Home & Office Services', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `comments_id` int(20) NOT NULL,
  `service_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `publication_status` int(2) NOT NULL,
  `service_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`comments_id`, `service_id`, `user_id`, `comments`, `publication_status`, `service_email`) VALUES
(45, 27, 3, 'good', 1, 'kaziabir36@gmail.com'),
(46, 27, 3, 'good', 1, 'kaziabir36@gmail.com'),
(47, 27, 3, 'This is a testing', 1, 'kaziabir36@gmail.com'),
(48, 27, 13, 'Very good service', 1, 'kaziabir36@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `company_id` int(30) NOT NULL,
  `user_id` int(10) NOT NULL,
  `company_name` varchar(343) NOT NULL,
  `service` varchar(100) NOT NULL,
  `company_description` varchar(400) NOT NULL,
  `company_image` varchar(100) NOT NULL,
  `address` varchar(70) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `company_email` varchar(30) NOT NULL,
  `counter` int(200) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`company_id`, `user_id`, `company_name`, `service`, `company_description`, `company_image`, `address`, `contact_number`, `company_email`, `counter`, `publication_status`) VALUES
(24, 13, 'Computer Source Service Centre', 'Service Provider', 'We give you a better service.', 'images/company_images/Computer.jpg', 'IDB,Dhaka', '017342345', 'testing1@gmail.com', 92, 1),
(25, 14, 'Samsung', 'Cell Phone Company', 'We provide best smart phones.', 'images/company_images/index.jpg', 'Sadar,Barisal', '016886567', 'testing2@gmail.com', 37, 1),
(26, 15, 'LG Butterfly', 'Television', 'We make best television.', 'images/company_images/images.jpg', 'Khulna', '01738263812', 'testing3@gmail.com', 4, 1),
(27, 16, 'Suzuki', 'Motor Bike', 'We provide best bike', 'images/company_images/1.jpg', 'Dhaka', '01629892811', 'test4@gmail.com', 4, 1),
(28, 18, 'Pajero', 'Car', 'We provide beautiful and good car', 'images/company_images/11.jpg', 'Dhaka', '0192803712', 'test5@gmail.com', 0, 1),
(29, 19, 'Guitar', 'Instrumetal', 'we provide very good quality guitar.', 'images/company_images/12.jpg', 'Chittaganj', '0156789987765', 'test6@gmail.com', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_division`
--

CREATE TABLE `tbl_division` (
  `division_id` int(2) NOT NULL,
  `division_name` varchar(32) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_division`
--

INSERT INTO `tbl_division` (`division_id`, `division_name`, `publication_status`) VALUES
(1, 'Dhaka', 1),
(2, 'Chittagong', 1),
(3, 'Rajshahi', 1),
(4, 'Sylhet', 1),
(5, 'Khulna', 1),
(6, 'Barisal', 1),
(7, 'Rangpur', 1),
(8, 'Mymensingh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(7) NOT NULL,
  `user_id` int(7) NOT NULL,
  `shipping_id` int(7) NOT NULL,
  `payment_id` int(7) NOT NULL,
  `order_total` float NOT NULL,
  `order_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `user_id`, `shipping_id`, `payment_id`, `order_total`, `order_date_time`) VALUES
(1, 13, 1, 1, 25.3, '2017-02-10 04:00:02'),
(2, 15, 2, 2, 25.3, '2017-02-10 16:13:28'),
(3, 13, 3, 3, 77100.6, '2017-02-13 07:19:24'),
(4, 13, 3, 4, 204725, '2017-02-13 09:59:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(7) NOT NULL,
  `product_id` int(7) NOT NULL,
  `company_id` int(7) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` float NOT NULL,
  `product_sales_quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `company_id`, `product_name`, `product_price`, `product_sales_quantity`) VALUES
(1, 1, 3, 24, 'HP 15-BA010AU AMD Quad Core ', 22, 1),
(2, 2, 3, 24, 'HP 15-BA010AU AMD Quad Core ', 22, 1),
(3, 3, 4, 24, 'HP 15-BA010AU AMD Quad Core', 22, 2),
(4, 3, 5, 24, 'HP AIO ProOne 400 G2 Core i5 2', 67000, 1),
(5, 4, 4, 24, 'HP 15-BA010AU AMD Quad Core', 22, 1),
(6, 4, 5, 24, 'HP AIO ProOne 400 G2 Core i5 2', 67000, 2),
(7, 4, 6, 24, 'HP All-In-One Brand PC AIO 20-', 44000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(7) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `payment_data_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_type`, `payment_data_time`) VALUES
(1, 'cash_on_delivery', '2017-02-10 04:00:02'),
(2, 'cash_on_delivery', '2017-02-10 16:13:28'),
(3, 'cash_on_delivery', '2017-02-13 07:19:24'),
(4, 'cash_on_delivery', '2017-02-13 09:59:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(20) NOT NULL,
  `company_id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `id` varchar(40) NOT NULL,
  `product_description` varchar(50) NOT NULL,
  `product_image` varchar(50) NOT NULL,
  `price` varchar(200) NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `company_id`, `user_id`, `product_name`, `id`, `product_description`, `product_image`, `price`, `product_quantity`) VALUES
(4, 24, 13, 'HP 15-BA010AU AMD Quad Core', '#002', 'Very good quality', 'images/product_image/New_Models-500x5003.jpg', '22,500', 9),
(5, 24, 13, 'HP AIO ProOne 400 G2 Core i5 2', '#003', ' Description  HP AIO ProOne 400 G2 touch desktop P', 'images/product_image/HP_AIO_pro.JPG', '67000', 17),
(6, 24, 13, 'HP All-In-One Brand PC AIO 20-', '#004', 'HP desktop all-in-one brand PC AIO 20-r225L has 1T', 'images/product_image/pavilion.JPG', '44000', 19),
(7, 24, 13, 'HP ProDesk 400 G3 Core i5', '#005', 'HP prodesk 400 G3 desktop computer has intel 6th g', 'images/product_image/hp_prodesk.JPG', '53000', 30),
(8, 24, 13, 'HP 280 G1 MT Core i3', '#006', 'HP 280 G1 MT desktop microtower PC has Intel core ', 'images/product_image/hp_280.JPG', '32000', 5),
(9, 24, 13, 'HP 18.5" Desktop PC 280 G1 MT ', '#007', 'HP desktop microtower PC 280 G1 MT has intel core ', 'images/product_image/hp18_280.JPG', '31000', 40),
(10, 24, 13, 'HP ProDesk 400 G3 Core i5', '#008', 'HP prodesk 400 G3 desktop computer has intel 6th g', 'images/product_image/hp_pro_desk_400.JPG', '53000', 11),
(11, 25, 14, 'Samsung Galaxy C9 Pro', '#001', 'Phase detection autofocus', 'images/product_image/Samsung-Galaxy-C9-Pro.jpg', '49900', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `service_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `sub_category_id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `division_id` int(10) NOT NULL,
  `company_name` varchar(32) NOT NULL,
  `service` varchar(100) NOT NULL,
  `service_description` varchar(200) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `service_email` varchar(20) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `counter` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`service_id`, `category_id`, `sub_category_id`, `user_id`, `division_id`, `company_name`, `service`, `service_description`, `address`, `mobile`, `service_email`, `publication_status`, `counter`) VALUES
(18, 12, 4, 13, 1, 'Dolphin Computers Limited', 'Computer', 'Here you will get all Computer things', '01/Dumki,M.K.Ali Hall', '0172391831', '', 1, 3),
(19, 12, 4, 13, 1, 'Computer Source Service', 'Computers', 'This is a very good computer shop', 'Dumkihfh', '01714357987', '', 1, 0),
(20, 12, 4, 13, 1, 'Ryans Computers', 'computer', 'We provide good quality products', 'IDB,Agargaon', '0178230238', '', 1, 0),
(21, 12, 4, 13, 1, 'Computer City Technologie', 'Computer', 'We provide very good service', 'Dhaka,Bangladesh', '0183923832', '', 1, 0),
(22, 12, 4, 13, 5, 'Star Tech & Engineering Ltd', 'Computers', 'Very good company for providing service', 'Khulna', '0164565734', '', 1, 0),
(23, 12, 4, 13, 1, 'Computer Village', 'Computer', 'We provice best service', 'Dhaka,Bangladesh', '01732380283', '', 1, 0),
(24, 12, 4, 13, 1, 'Smart Technology', 'Computer', 'We provice very good service', 'Dhaka,Bangladedsh', '01732983028', '', 1, 0),
(25, 12, 4, 13, 6, 'Global Brand', 'Computer', 'We are ready to give you best service', 'Sadar road,Barisal', '0173237892', '', 1, 0),
(26, 12, 4, 13, 2, 'Rishit Computers Limited', 'Computer', 'We are ready to give you best products', 'Patenga,Chittagonj', '0188932803', '', 1, 0),
(27, 4, 12, 3, 1, 'Photography', 'Candid Photograpy', 'We provide good service', 'Dhaka', '01739283928', 'kaziabir36@gmail.com', 1, 53),
(28, 4, 13, 3, 1, 'Test10', 'This is email test', 'This is email test', 'Badda', '01203128390128', 'kaziabir36@gmail.com', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(7) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `mobile_no` varchar(14) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip_code` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `full_name`, `mobile_no`, `email_address`, `company_name`, `address`, `city`, `zip_code`) VALUES
(1, 'Abir Hasan', '01737190646', 'kaziabir36@gmail.com', 'HP', 'Dumki Satani', 'Barisal', 8602),
(2, 'Monon', '018643566', 'rafayet@gmail.com', 'hddg', 'Dumki Satani', 'Barisal', 465),
(3, 'Abir', '01737190646', 'kaziabir36@gmail.com', 'fsdf', 'Dumki Satani', 'Barisal', 8602);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_category`
--

CREATE TABLE `tbl_sub_category` (
  `sub_category_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(32) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_sub_category`
--

INSERT INTO `tbl_sub_category` (`sub_category_id`, `category_id`, `sub_category_name`, `publication_status`) VALUES
(2, 12, 'Cameras', 1),
(3, 12, 'Laptops', 1),
(4, 12, 'Computers', 1),
(5, 12, 'Mobiles', 1),
(6, 12, 'Printers', 1),
(7, 12, 'Water Heaters', 1),
(8, 12, 'Water Purifiers', 1),
(9, 12, 'CCTV Cameras', 1),
(10, 12, 'Generators', 1),
(11, 12, 'Inverters', 1),
(12, 4, 'Candid Wedding Photographers', 1),
(13, 4, 'Games Show Event Organisers', 1),
(14, 4, 'Party & Banquet Hall', 1),
(15, 4, 'DJ Services', 1),
(16, 8, 'Digital Marketing Training', 1),
(17, 8, 'Laptop Repair Courses', 1),
(18, 8, 'SEO Training', 1),
(19, 8, 'Software Engineering Training', 1),
(20, 8, 'First Aid Training', 1),
(21, 8, '3D Movie Maker Training', 1),
(22, 8, 'ASP.Net Training', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(5) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(32) CHARACTER SET dec8 COLLATE dec8_bin NOT NULL,
  `mobile_number` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `f_name`, `l_name`, `email_id`, `password`, `mobile_number`) VALUES
(3, 'Abir', 'Hasan', 'kaziabir36@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1737190646),
(4, 'Rafayet', 'Monon', 'rafayet.monon@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1822222222),
(5, 'Md', 'Ibrahim', 'cklsadnoc@gmail.com', '01835bd0017abc106e9c1c2eb2b1a218', 123213123),
(6, 'Md', 'Ibrahim', 'cklsadnoc@gmail.com', '01835bd0017abc106e9c1c2eb2b1a218', 123213123),
(7, 'Abir', 'Ibrahim', 'rafayet.monon@gmail.com', '01835bd0017abc106e9c1c2eb2b1a218', 1822222222),
(8, 'Abir', 'Ibrahim', 'cklsadnoc@gmail.com', '01835bd0017abc106e9c1c2eb2b1a218', 1822222222),
(9, 'Md', 'Hasan', 'cklsadnoc@gmail.com', '01835bd0017abc106e9c1c2eb2b1a218', 1822222222),
(10, 'Abir', 'Hasan', 'abir@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 12345),
(12, '', '', '4', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(13, 'Test', '1', 'test1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1763349833),
(14, 'Test', '2', 'test2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1783200382),
(15, 'Test', '3', 'test3@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1832382380),
(16, 'Test', '4', 'test4@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2147483647),
(17, 'Test', '4', 'test4@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 183747474),
(18, 'Test', '5', 'test5@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1928472397),
(19, 'Test', '6', 'test6@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1723322231);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`comments_id`);

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `tbl_division`
--
ALTER TABLE `tbl_division`
  ADD PRIMARY KEY (`division_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `comments_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `company_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tbl_division`
--
ALTER TABLE `tbl_division`
  MODIFY `division_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
