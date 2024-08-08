-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 12:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diagnosis`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `createdAt` date NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `fullname`, `phone`, `date`, `time`, `doctor`, `status`, `description`, `createdAt`, `user_id`) VALUES
(1, 'Mike Dean', '+2348067676767', '2024-06-26', 'morning', '', 'pending', 'I am not feeling too well', '2024-06-23', 2);

-- --------------------------------------------------------

--
-- Table structure for table `coditions`
--

CREATE TABLE `coditions` (
  `id` int(255) NOT NULL,
  `conditionName` varchar(255) NOT NULL,
  `temperature` varchar(255) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `symptoms` varchar(1000) NOT NULL,
  `medicalHistory` varchar(1000) NOT NULL,
  `socialHistory` varchar(1000) NOT NULL,
  `createdAt` datetime NOT NULL,
  `treatment` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coditions`
--

INSERT INTO `coditions` (`id`, `conditionName`, `temperature`, `diagnosis`, `symptoms`, `medicalHistory`, `socialHistory`, `createdAt`, `treatment`) VALUES
(2, 'Pyelonephritis', '38.0 to 39.5', 'Acute Pyelonephritis', 'Fever, Chills, Nausea, Vomiting, Malaise, Fatigue, Abdominal Pain', 'Previous Urinary Tract Infections, pregnancy, Diabetes', 'Poor Personal Hygiene Practices, substance use, high sexual activity ', '2024-06-13 00:00:00', 'Oral Antibiotics: Ciprofloxacin, Levofloxacin, Trimethoprim-sulfamethoxazole (for mild cases).\r\nHydration: Adequate fluid intake to ensure proper kidney function and flush out bacteria.\r\nPain Management: Analgesics such as acetaminophen or ibuprofen.\r\nRe-evaluation after completing antibiotic therapy.'),
(3, 'Pyelonephritis', '38.0 to 39.5', 'Acute Pyelonephritis', 'Fever, Chills, Nausea, Vomiting, Malaise, Fatigue, Abdominal Pain', 'Previous Urinary Tract Infections, pregnancy, Diabetes', 'Poor Personal Hygiene Practices, substance use, high sexual activity ', '2024-06-13 00:00:00', 'Oral Antibiotics: Ciprofloxacin, Levofloxacin, Trimethoprim-sulfamethoxazole (for mild cases).\r\nHydration: Adequate fluid intake to ensure proper kidney function and flush out bacteria.\r\nPain Management: Analgesics such as acetaminophen or ibuprofen.\r\nRe-evaluation after completing antibiotic therapy.'),
(4, 'Malaria', '36.5 to 37.5', 'Uncomplicated Malaria', 'High Fever, muscle pains, fatigue, nausea, vomiting, jaundice, headache', 'Previous Malaria Infections, pregnancy', 'Substance Use, Recreational Activities, Access to clean water', '2024-06-13 00:00:00', 'Artemisinin-based Combination Therapies (ACTs): Artemether-lumefantrine, Artesunate-amodiaquine.\r\nUse of Insecticide-Treated Bed Nets (ITNs): To prevent mosquito bites.\r\nIndoor Residual Spraying (IRS): Regular spraying of insecticides inside homes.'),
(5, 'Malaria', '40.5 - 45', 'Fever', 'High Fever, muscle pains, fatigue, nausea, vomiting, jaundice, headache, Seizures, Jaundice', 'Previous Malaria Infections, pregnancy', 'Substance Use, Recreational Activities, Access to clean water', '2024-06-13 00:00:00', 'Intravenous Artesunate or Quinine: For initial management, followed by a complete course of oral ACTs.\r\nSupportive Care: Including fluids, blood transfusions, and managing complications such as cerebral malaria or acute respiratory distress syndrome (ARDS).\r\nUse of Insecticide-Treated Bed Nets (ITNs): To prevent mosquito bites.\r\nIndoor Residual Spraying (IRS): Regular spraying of insecticides inside homes.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matNo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `matNo`, `password`, `cpassword`, `status`) VALUES
(1, 'Admin', 'admin@edmc.com', 'none', 'password', 'password', 'active'),
(2, 'User', 'user@edmc.com', 'useredmc2024', 'password', 'password', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coditions`
--
ALTER TABLE `coditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coditions`
--
ALTER TABLE `coditions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
