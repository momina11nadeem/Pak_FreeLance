-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2017 at 02:22 AM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `free_lance`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(10) NOT NULL,
  `cat_name` text,
  `is_deleted` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `cat_name`, `is_deleted`) VALUES
(1, 'Web Development', 0),
(2, 'Mobile Development', 0),
(3, 'Creative Writting', 0),
(4, 'Seo and  Marketing', 0),
(5, 'Accounts and Finance', 0),
(6, 'Virtual Assisstance', 0);

-- --------------------------------------------------------

--
-- Table structure for table `interview_questions`
--

CREATE TABLE `interview_questions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `question1` varchar(255) DEFAULT NULL,
  `question2` varchar(255) DEFAULT NULL,
  `question3` varchar(255) DEFAULT NULL,
  `question4` text,
  `question5` varchar(255) DEFAULT NULL,
  `question6` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview_questions`
--

INSERT INTO `interview_questions` (`id`, `user_id`, `job_id`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`) VALUES
(5, 50, 5, NULL, NULL, NULL, 'ngjghjhhjh', NULL, NULL),
(6, 50, 7, NULL, NULL, NULL, 'Q1.mention your experiance?', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text,
  `catagory` int(20) NOT NULL,
  `skills` text,
  `price_from` int(20) DEFAULT NULL,
  `price_to` int(20) DEFAULT NULL,
  `description` text,
  `career_level` varchar(255) DEFAULT NULL,
  `payment_method` enum('fixed','hourly') NOT NULL,
  `duration` varchar(500) NOT NULL,
  `commitment` varchar(500) NOT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `title`, `catagory`, `skills`, `price_from`, `price_to`, `description`, `career_level`, `payment_method`, `duration`, `commitment`, `is_deleted`, `status`) VALUES
(1, 50, 'Seo of our company\'s website', 0, NULL, 15, 545, ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '0', 'fixed', '', '', 0, NULL),
(6, 50, 'I want a UI/UX of website with the help of booststrap', 0, NULL, 5000, 10000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '0', 'fixed', '', '', 0, NULL),
(7, 50, 'Sports website need to be fixed', 1, NULL, 1000, 1500, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '0', 'fixed', '', '', 0, NULL),
(8, 50, 'Need an interactive web design for E commerce website ', 0, NULL, NULL, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '0', 'fixed', '', '', 0, NULL),
(14, 50, 'Test Job', 1, NULL, 60000, 40000, 'this is the Description', NULL, 'fixed', 'more than 6 months', 'More than 30 hrs/week', 0, NULL),
(16, 50, 'MOMO ka project', 1, NULL, 5000, 79999, 'this is my description', 'Basic', 'fixed', 'more than 6 months', 'More than 30 hrs/week', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE `job_application` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name_job` text NOT NULL,
  `milestone` text NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `card_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_application`
--

INSERT INTO `job_application` (`id`, `job_id`, `user_id`, `name_job`, `milestone`, `price`, `description`, `card_number`) VALUES
(5, 1, 51, '', 'eeeeeeeeeeeeee', 444444444, '44444444', '4444444444444'),
(6, 2, 51, '', 'complete project', 5000, 'ejfwejbfjefbjkbfjwfb', '87878-5654878'),
(7, 6, 51, '', 'This is my mile stone', 3000, 'xxxxxxxxxxxxxxxxxxx', '11111111');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `level_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `level_name`) VALUES
(1, 'Basic'),
(2, 'Intermediate'),
(3, 'Expert');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skills_ID` int(11) NOT NULL,
  `skill_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(300) NOT NULL,
  `user_type` enum('client','employee') NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `skills` text NOT NULL,
  `company` text NOT NULL,
  `cnic` varchar(500) DEFAULT NULL,
  `credit_card` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `status` enum('inactive','active') NOT NULL DEFAULT 'active',
  `is_deleted` tinyint(1) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `user_type`, `email`, `password`, `description`, `skills`, `company`, `cnic`, `credit_card`, `phone`, `status`, `is_deleted`) VALUES
(50, 'maria', 'client', 'maria@gmail.com', 'c75d1f3375c52ae83116b65e51ed7d87', 'Lorem Ipsum', '', 'UOL', '3520214332082', '45454545454545', '03334745144', 'active', 0),
(51, 'momina', 'employee', 'momina@gmail.com', 'c75d1f3375c52ae83116b65e51ed7d87', 'Lorem Ipsum to the dummy text', 'Html5, Css3,Bootstrap,PHP,MySQL', '', '3520214332082', '123456789', '03334745144', 'active', 0),
(52, 'Tayyaba Ishfaq', 'employee', 'tayyaba@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'skjhvkjsdvjksdkjsdvnkjsdvkjsdbvjkssk', 'htm5', '', '352024589628459', '65847845154894', '03334745144', 'active', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interview_questions`
--
ALTER TABLE `interview_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skills_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `interview_questions`
--
ALTER TABLE `interview_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skills_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
