-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2016 at 10:16 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eatfresh_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `security_question` varchar(500) NOT NULL,
  `security_answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `email`, `password`, `firstname`, `lastname`, `security_question`, `security_answer`) VALUES
(4, 'harpuneetghuman@hotmail.com', '123456', 'harpuneet', 'ghuman', 'What was your favorite sport in high school?', 'cricket');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `contact_number` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `subject`, `email`, `contact_number`, `description`, `date`) VALUES
(5, 'harpuneet', 'General inquiry', 'harpuneetghuman@hotmail.com', '6479368403', 'Hi, I wanted to get to know when are you opening in Chatham?', 'Nov 11, 2016');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `id` int(100) NOT NULL,
  `order_id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postal_code` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`id`, `order_id`, `first_name`, `last_name`, `street_address`, `city`, `postal_code`, `country`, `contact_number`, `email`) VALUES
(10, 1, 'harpuneet', 'ghuman', '725 partington avenue', 'windsor', 'n9b2n6', 'canada', '6479368403', 'harpuneetghuman@hotmail.com'),
(18, 2, 'ravinder', 'singh', '245 detroit street', 'windsor', 'n9b2n6', 'canada', '6479368403', 'ghumanharpuneet@gmail.com'),
(19, 3, 'adarsh', 'cheema', '198 joshephine', 'windsor', 'n8b2n5', 'canada', '6478525210', 'adarsh@gmail.com'),
(20, 4, 'atish', 'levate', '510 randolph', 'windsor', 'n8b6v5', 'canada', '6547894561', 'atish@yahoomail.com'),
(26, 5, 'navpreet', 'kaur', '724 josephine ave', 'windsor', 'n9b4v6', 'canada', '7149749749', 'navpreetkaur@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(100) NOT NULL,
  `food_item` varchar(200) NOT NULL,
  `food_type` varchar(200) NOT NULL,
  `calories` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `food_item`, `food_type`, `calories`, `description`, `price`) VALUES
(3, 'Taquito', 'Mexican ', '285', 'A Mexican food dish consisting of a small rolled-up tortilla and some type of filling including beef, cheese or chicken', '3.15'),
(5, 'Lasagna', 'Italian', '135', 'Layered pasta stuffed with mozarella cheese', '15.40'),
(6, 'Caesar Pita', 'Greek', '200', 'Caesar Sauce, Lettuce, Parmesan, Cheese, Croutons', '5.99'),
(7, 'Tostada', 'Mexican ', '148', 'Deep fried or toasted tortilla, flat or bowl-shaped ', '7.99'),
(8, 'Burrito', 'Mexican', '206', 'Tortilla with Mexican-style rice or plain rice, beans or refried beans, lettuce, salsa and meat', '6.50'),
(9, 'Carnitas', 'Mexican', '102', 'Braised or roasted pork served accompanied with chopped coriander leaves (cilantro) and diced onion, salsa, guacamole, tortillas, refried beans', '5.50'),
(10, 'Fettuccine Alfredo', 'Italian', '340', 'Fettuccine with parmesan in a white cream sauce', '16.84'),
(11, 'Penne Mattano pasta', 'Italian', '275', 'An assortment of seasonal fresh vegetables in a light fresh tomato sauce', '14.99'),
(12, 'Greek Salad', 'Greek', '135', 'Mixed greens with zesty feta cheese & calamata olives', '9.36'),
(13, 'Stracciatella Soup', 'Italian', '28', 'Parmesan cheese & egg combined in our chicken broth', '5.97'),
(14, 'Tossed Salad', 'Italian', '102', 'Mixed greens in olive oil, balsamic vinaigrette', '7.99'),
(15, 'Tortellinialla Panna', 'Italian', '480', 'Cheese filled tortellini in a spicy classic sauce with prosciutto, peas, fresh garlic & parmesan cheese', '19.20');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(100) NOT NULL,
  `food_item` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `order_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `food_item`, `price`, `quantity`, `order_id`) VALUES
(25, 'Burrito', '6.50', '1', 1),
(26, 'Caesar Pita', '5.99', '2', 1),
(27, 'Greek Salad', '9.36', '2', 1),
(41, 'Burrito', '6.50', '2', 2),
(42, 'Carnitas', '5.50', '1', 2),
(43, 'Burrito', '6.50', '2', 3),
(44, 'Carnitas', '5.50', '3', 3),
(45, 'Caesar Pita', '5.99', '3', 4),
(46, 'Fettuccine Alfredo', '16.84', '4', 4),
(55, 'Caesar Pita', '5.99', '4', 5),
(56, 'Burrito', '6.50', '2', 5);

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `id` int(100) NOT NULL,
  `order_id` int(100) NOT NULL,
  `order_total` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`id`, `order_id`, `order_total`, `status`) VALUES
(5, 1, '37.2', 'Completed'),
(12, 2, '18.5', 'Not completed'),
(13, 3, '29.5', 'Not completed'),
(14, 4, '85.33', 'Not completed'),
(20, 5, '36.96', 'Not completed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
