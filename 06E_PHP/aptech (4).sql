-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 01:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aptech`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `abc2` (`p_id` INT, `p_salary` INT)   BEGIN
IF p_salary >= 0 THEN
BEGIN
UPDATE register  SET  salaray= salaray+P_salary WHERE id = p_id;
END;
ELSE
SELECT "negative valued not allowed";
END if;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `emp_data_inc` ()   BEGIN
UPDATE register SET Salaray = Salaray + 2000;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `emp_data_inc2` (`e_id` INT, `e_salary` INT)   BEGIN
UPDATE register SET Salaray = e_salary WHERE id = e_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `emp_data_inc3` (IN `e_id` INT, IN `e_salary` INT)   BEGIN

UPDATE register SET Salaray =  Salaray + e_salary  WHERE id = e_id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `xyz` (`p_id` INT, `p_salary` INT)   BEGIN
UPDATE register  SET  salaray= salaray+P_salary WHERE id = p_id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `emp_data`
-- (See below for the actual view)
--
CREATE TABLE `emp_data` (
`name` varchar(200)
,`city` varchar(200)
,`dept` varchar(200)
,`Salaray` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `f_name` varchar(400) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `salary` int(40) DEFAULT NULL,
  `f_id` int(10) NOT NULL,
  `sub` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`f_name`, `email`, `salary`, `f_id`, `sub`) VALUES
('fariha', 'ali@gmail.com', 50000, 1, 2),
('huzaifa', 'h12@gmail.com', 60000, 2, 3),
('aqsa', 'aqsagmail.com', 55000, 3, 2),
('rafiya', 'rafiya@gmail.com', 67000, 4, 1),
('sana', 'sanaa@gmail.com', 67000, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `for_trigger`
--

CREATE TABLE `for_trigger` (
  `id` int(11) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `hourly_pay` int(11) DEFAULT NULL,
  `year_pay` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `for_trigger`
--

INSERT INTO `for_trigger` (`id`, `Name`, `hourly_pay`, `year_pay`) VALUES
(1, 'ali', 270, 561600),
(2, 'Hamza', 200, NULL);

--
-- Triggers `for_trigger`
--
DELIMITER $$
CREATE TRIGGER `update_yearly_salary` BEFORE UPDATE ON `for_trigger` FOR EACH ROW SET NEW.year_pay = NEW.hourly_pay * 2080
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `person_data`
-- (See below for the actual view)
--
CREATE TABLE `person_data` (
`name` varchar(200)
,`Salaray` int(11)
,`dept` varchar(200)
);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT 'karachi',
  `gender` enum('male','female') DEFAULT NULL,
  `Salaray` int(11) NOT NULL,
  `dept` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `city`, `gender`, `Salaray`, `dept`) VALUES
(1, 'ali', 'ali@gmail.com', 'lahore', 'male', 62000, 'HR'),
(2, 'rafiya', 'rafiya@gmail.com', 'karachi', 'female', 72000, 'Faculty'),
(3, 'aqsa', 'aqsaali@gmail.com', 'multan', 'female', 40000, 'HR'),
(4, 'ali', 'ali@gmail.com', 'karachi', 'male', 102000, 'HR');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `Std_name` varchar(300) NOT NULL,
  `email` varchar(300) DEFAULT NULL,
  `city` varchar(200) DEFAULT 'karachi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `Std_name`, `email`, `city`) VALUES
(1, 'Ali', 'ali@gmail.com', 'karachi'),
(3, 'Huzaifa', 'Huzaifa@gmail.com', 'karachi'),
(4, 'aqsa', 'aqsa@gmail.com', 'karachi'),
(5, 'sana', 'san@gmail.com', 'karachi'),
(6, 'Meerab', 'meerab@gmail.com', 'karachi'),
(7, 'Laraib', 'Laraib', 'karachi');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sub_id` int(10) NOT NULL,
  `subjects` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sub_id`, `subjects`) VALUES
(1, 'physics'),
(2, 'chemistry'),
(3, 'maths');

-- --------------------------------------------------------

--
-- Structure for view `emp_data`
--
DROP TABLE IF EXISTS `emp_data`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `emp_data`  AS SELECT `register`.`name` AS `name`, `register`.`city` AS `city`, `register`.`dept` AS `dept`, `register`.`Salaray` AS `Salaray` FROM `register` WHERE `register`.`city` = 'karachi\'karachi''karachi\'karachi'  ;

-- --------------------------------------------------------

--
-- Structure for view `person_data`
--
DROP TABLE IF EXISTS `person_data`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `person_data`  AS SELECT `register`.`name` AS `name`, `register`.`Salaray` AS `Salaray`, `register`.`dept` AS `dept` FROM `register` WHERE `register`.`city` = 'karachi\'karachi''karachi\'karachi'  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`f_id`),
  ADD UNIQUE KEY `name` (`f_name`),
  ADD KEY `sub` (`sub`);

--
-- Indexes for table `for_trigger`
--
ALTER TABLE `for_trigger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `for_trigger`
--
ALTER TABLE `for_trigger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `sub_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`sub`) REFERENCES `subjects` (`sub_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
