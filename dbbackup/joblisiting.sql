-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2018 at 03:18 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joblisiting`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `category_description` text NOT NULL,
  `publication_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`category_id`, `category_name`, `category_description`, `publication_status`) VALUES
(1, 'IT and Programming', 'For 50 years, WWF has been protecting the future of nature. The world\'s leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.', 1),
(2, 'Education and Training', 'For 50 years, WWF has been protecting the future of nature. The world\'s leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.', 1),
(3, 'Account / Finance', 'For 50 years, WWF has been protecting the future of nature. The world\'s leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.', 1),
(4, 'Engineering and Architechture', 'For 50 years, WWF has been protecting the future of nature. The world\'s leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.', 1),
(5, 'Marketing/Sales', 'Convey meaning through color with a handful of color utility classes. Includes support for styling links with hover states, too.', 1),
(6, 'Customer Support/Call Centre', 'Convey meaning through color with a handful of color utility classes. Includes support for styling links with hover states, too.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `job_details`
--

CREATE TABLE `job_details` (
  `job_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `job_requirements` text NOT NULL,
  `vacancy_amount` int(11) NOT NULL,
  `published_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_details`
--

INSERT INTO `job_details` (`job_id`, `category_id`, `job_name`, `company_name`, `job_requirements`, `vacancy_amount`, `published_date`, `last_date`) VALUES
(4, 2, 'Senior Laravel Developer', 'Echo Soft Ltd.', '<p>\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. </p><p></p><ul><li>Omnis et enim aperiam inventore,</li><li> similique necessitatibus neque non!</li><li> Doloribus, consectetur adipisicing elit. Omnis</li><li> sfsconsectfg etur adiptrh</li><li> isicing elit. fg bfgconsectetur adipisicing</li></ul> elit is dgdconsectetur adipisicing dconsectetur adipisicing elit cdbdfonsectetur adipisicing Omnis <br><p></p>', 2, '2018-08-07 11:37:31', '2018-08-23 00:00:00'),
(9, 2, 'Senior Laravel Developer', 'Echo Soft Ltd.', '<p>\r\n\r\nOf course, since a Callable rule by itself is not a string, it isn’t a rule name either. That is a problem when you want to set error messages for them. In order to get around that problem, you can put such rules as the second element of an array, with the first one being the rule name: \r\n\r\n<br></p>', 2, '2018-08-07 12:01:17', '2018-08-15 00:00:00'),
(10, 3, 'Senior Laravel Developer', 'Echo Soft Ltd.', '<p>\r\n\r\nOf course, since a Callable rule by itself is not a string, it isn’t a rule name either. That is a problem when you want to set error messages for them. In order to get around that problem, you can put such rules as the second element of an array, with the first one being the rule name:\r\n\r\n<br></p>', 6, '2018-08-07 12:04:22', '2018-08-31 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`user_id`, `user_email`, `user_name`, `password`, `user_role`) VALUES
(1, 'admin@gmail.com', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `job_details`
--
ALTER TABLE `job_details`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `job_details`
--
ALTER TABLE `job_details`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
