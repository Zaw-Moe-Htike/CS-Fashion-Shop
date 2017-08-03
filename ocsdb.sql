-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2017 at 07:37 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `about_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_content`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `email` text NOT NULL,
  `item_name` text NOT NULL,
  `price` int(11) NOT NULL,
  `item_loc` text NOT NULL,
  `cart_date` date NOT NULL,
  `rm` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `email`, `item_name`, `price`, `item_loc`, `cart_date`, `rm`) VALUES
(59, 'zmh@gmail.com', 'AP Rover Liteknit', 47000, 'Shoe1.jpg', '2017-06-11', 0),
(70, 'tpw@gmail.com', 'Poptastic Sport', 75000, 'accessorie4.jpg', '2017-06-16', 1),
(71, 'tpw@gmail.com', 'Vaider', 72000, 'Shoe6.jpg', '2017-06-18', 1),
(72, 'tpw@gmail.com', 'Perfect Boyfriend', 100000, 'accessorie3.jpg', '2017-06-18', 1),
(73, 'tpw@gmail.com', 'Poptastic Sport', 75000, 'accessorie4.jpg', '2017-06-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_data`) VALUES
(3, 'Phone-09-123456'),
(4, 'Email-csfashionshop@gmail.com'),
(5, 'Address-No(1), Bahao Road, Ahlone Township, Yangon'),
(6, 'Fax-09-123456');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `faq_question` text NOT NULL,
  `faq_answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `faq_question`, `faq_answer`) VALUES
(2, 'What is your name?', 'My name Kelvin.'),
(3, 'How old are you?', 'I am twenty years old.'),
(4, 'Where do you live in?', 'I live in Yangon with my parents.'),
(5, 'What do you do?', 'I am a 4th year student of UCSY(University of Computer Studies Yangon).'),
(6, 'What sport do you like?', 'I like football.');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `item_name` text NOT NULL,
  `price` int(11) NOT NULL,
  `category` text NOT NULL,
  `brand_name` text NOT NULL,
  `discount` int(11) NOT NULL,
  `size` text NOT NULL,
  `date` date NOT NULL,
  `item_loc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `price`, `category`, `brand_name`, `discount`, `size`, `date`, `item_loc`) VALUES
(10, 'Short Sleeve', 10000, 'Clothings', 'Levis', 0, 'S,M,L,XL,XXL', '2017-06-01', 'clothing7.JPG'),
(15, 'Short-Sleeve T-Shirt', 12000, 'Clothings', 'Lacoste', 0, 'S,M,L,XL,XXL', '2017-06-01', 'clothing8.JPG'),
(16, 'Warped Dotty Tee', 19000, 'Clothings', 'RVCA', 0, 'S,M,L,XL,XXL', '2017-06-01', 'clothing9.JPG'),
(17, 'Sport Classic Tee', 15000, 'Clothings', 'Addidas', 0, 'S,M,L,XL,XXL', '2017-06-01', 'clothing10.JPG'),
(18, 'Stripe Polo', 30000, 'Clothings', 'RVCA', 0, 'S,M,L,XL,XXL', '2017-06-01', 'clothing11.JPG'),
(19, 'Tri-Blend Tee', 24000, 'Clothings', 'Retro', 0, 'S,M,L,XL,XXL', '2017-06-01', 'clothing12.JPG'),
(20, 'UA Camo Sackpack', 24000, 'Bags', 'Under Armour', 0, 'M', '2017-06-02', 'Bag1.jpg'),
(21, 'Heritage Kids', 32000, 'Bags', 'Herschel', 0, 'M', '2017-06-02', 'Bag2.jpg'),
(22, 'Pauletta Mini Backpack', 59000, 'Bags', 'Tommy Hilfiger', 0, 'M', '2017-06-02', 'Bag3.jpg'),
(23, 'Jewel 26L', 49000, 'Bags', 'Dakine', 0, 'M', '2017-06-02', 'Bag4.jpg'),
(24, 'Strength Plus Backpack', 26000, 'Bags', 'Addidas', 0, 'M', '2017-06-02', 'Bag5.jpg'),
(25, 'Pace Backpack', 30000, 'Bags', 'Addidas', 0, 'M', '2017-06-02', 'Bag6.jpg'),
(26, 'AP Rover Liteknit', 47000, 'Shoes', 'Native', 0, 'S,M,L,XL,XXL', '2017-06-02', 'Shoe1.jpg'),
(27, 'Old Skool DX', 55000, 'Shoes', 'Vans', 0, 'S,M,L,XL,XXL', '2017-06-02', 'Shoe2.jpg'),
(28, 'AP Rover Liteknit', 45000, 'Shoes', 'Native', 0, 'S,M,L,XL,XXL', '2017-06-02', 'Shoe3.jpg'),
(29, 'Old Skool', 45000, 'Shoes', 'Vans', 0, 'S,M,L,XL,XXL', '2017-06-02', 'Shoe4.jpg'),
(30, 'Vaider', 72000, 'Shoes', 'Supra', 0, 'S,M,L,XL,XXL', '2017-06-02', 'Shoe5.jpg'),
(31, 'Vaider', 72000, 'Shoes', 'Supra', 0, 'S,M,L,XL,XXL', '2017-06-02', 'Shoe6.jpg'),
(32, 'Baseline Passcase', 20000, 'Accessories', 'Timberland', 0, 'M', '2017-06-02', 'accessorie1.jpg'),
(33, 'Baseline Canvas Trifold', 19000, 'Accessories', 'Timberland', 0, 'M', '2017-06-02', 'accessorie2.jpg'),
(34, 'Perfect Boyfriend', 100000, 'Accessories', 'Fossil', 0, 'M', '2017-06-02', 'accessorie3.jpg'),
(35, 'Poptastic Sport', 75000, 'Accessories', 'Fossil', 0, 'M', '2017-06-02', 'accessorie4.jpg'),
(36, 'Bowery', 59000, 'Accessories', 'Spy', 0, 'M', '2017-06-02', 'accessorie5.jpg'),
(37, 'Flyer', 69000, 'Accessories', 'Spy', 0, 'M', '2017-06-02', 'accessorie6.jpg'),
(38, 'Wedge Trucker Hat', 19000, 'Accessories', 'Rip Curl', 0, 'M', '2017-06-02', 'accessorie7.jpg'),
(39, 'Silicon Bark Tucker Print 2.0', 24000, 'Accessories', 'Oakley', 0, 'M', '2017-06-02', 'accessorie8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order2`
--

CREATE TABLE `order2` (
  `order_id` int(11) NOT NULL,
  `email` text NOT NULL,
  `item_name` text NOT NULL,
  `price` int(11) NOT NULL,
  `item_loc` text NOT NULL,
  `order_date` date NOT NULL,
  `rm` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order2`
--

INSERT INTO `order2` (`order_id`, `email`, `item_name`, `price`, `item_loc`, `order_date`, `rm`) VALUES
(6, 'zmh@gmail.com', 'Vaider', 72000, 'Shoe5.jpg', '2017-06-11', 0),
(8, 'tpw@gmail.com', 'Perfect Boyfriend', 100000, 'accessorie3.jpg', '2017-06-16', 1),
(9, 'tpw@gmail.com', 'Vaider', 72000, 'Shoe5.jpg', '2017-06-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `email` text NOT NULL,
  `phone_no` text NOT NULL,
  `address` text NOT NULL,
  `type` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `phone_no`, `address`, `type`, `password`) VALUES
(7, 'Zaw Moe Htike', 'zmh@gmail.com', '09777778', 'Ahlone Township', 'User', 'zmh'),
(8, 'Zin Ye Htike', 'zyh@gmail.com', '09742168', 'Kamayut Township', 'Admin', 'zyh'),
(10, 'Naung Naung', 'nn@gmail.com', '09463478', 'North Dagon Township', 'User', 'nn'),
(11, 'Set Paing Htoo', 'sph@gmail.com', '09875623', 'Dagon Township', 'User', 'sph'),
(12, 'Thet Phyo Win', 'tpw@gmail.com', '09123876', 'Dagon Township', 'User', 'tpw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `order2`
--
ALTER TABLE `order2`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `order2`
--
ALTER TABLE `order2`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
