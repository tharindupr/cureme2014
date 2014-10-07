-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2014 at 12:25 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cureme`
--
CREATE DATABASE IF NOT EXISTS `cureme` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cureme`;

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE IF NOT EXISTS `appoinment` (
  `appoinment_Id` int(11) NOT NULL,
  `appoinment_Date&Time` datetime DEFAULT NULL,
  `appoinment_Type` varchar(45) DEFAULT NULL,
  `confirmation_Flag` tinyint(1) DEFAULT NULL,
  `Patient_patient_Id` int(11) NOT NULL,
  PRIMARY KEY (`appoinment_Id`,`Patient_patient_Id`),
  KEY `fk_Appoinment_Patient_idx` (`Patient_patient_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_Id` varchar(45) NOT NULL,
  `comment_Content` varchar(45) DEFAULT NULL,
  `comment_Type` varchar(45) DEFAULT NULL,
  `Patient_patient_Id` int(11) NOT NULL,
  PRIMARY KEY (`comment_Id`,`Patient_patient_Id`),
  KEY `fk_Comment_Patient1_idx` (`Patient_patient_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `healthtip`
--

CREATE TABLE IF NOT EXISTS `healthtip` (
  `tip_Id` int(11) NOT NULL,
  `tip_Type` varchar(45) DEFAULT NULL,
  `tip_Content` varchar(45) DEFAULT NULL,
  `tip_Date&Time` datetime DEFAULT NULL,
  PRIMARY KEY (`tip_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `historyevent`
--

CREATE TABLE IF NOT EXISTS `historyevent` (
  `historyevent_id` varchar(45) NOT NULL,
  `event_date&time` datetime DEFAULT NULL,
  `event_type` varchar(45) DEFAULT NULL,
  `event_description` varchar(45) DEFAULT NULL,
  `Patient_patient_Id` int(11) NOT NULL,
  PRIMARY KEY (`historyevent_id`,`Patient_patient_Id`),
  KEY `fk_HistoryEvent_Patient1_idx` (`Patient_patient_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `patient_Id` int(11) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  `patient_FName` varchar(45) NOT NULL,
  `patient_LName` varchar(45) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `address_No` varchar(45) DEFAULT NULL,
  `address_Street` varchar(45) DEFAULT NULL,
  `address_City` varchar(45) DEFAULT NULL,
  `date_Of_Birth` date NOT NULL,
  `mobile_Number` varchar(45) DEFAULT NULL,
  `gender` varchar(6) NOT NULL,
  `date_Of_Registration` date DEFAULT NULL,
  `password` varchar(64) NOT NULL,
  PRIMARY KEY (`patient_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_Id`, `active`, `patient_FName`, `patient_LName`, `email`, `address_No`, `address_Street`, `address_City`, `date_Of_Birth`, `mobile_Number`, `gender`, `date_Of_Registration`, `password`) VALUES
(921456556, 0, 'Hiran', 'Weerasinghe', 'hirane1@gmail.com', 'No 7', 'Jaffna Junction', 'Anuradapura', '1992-05-10', '0710554644', 'Male', '2014-05-10', 'hiran123'),
(921477756, 0, 'Kalpani', 'rasangika', 'kalpani.prf@gmail.com', 'No 7', 'Pubudupura', 'Anuradapura', '1992-09-01', '0710556744', 'Male', '2014-05-10', 'kalpani123'),
(921891288, 0, 'Tharindu', 'Ranathunga', 'tharindu.prf@gmail.com', 'TissaWewa West', 'Pandulagama', 'Anuradhapura', '1992-07-07', '0710554644', 'Male', '2014-10-06', 'a2dc5262f171c7781f7e1d024738ae8e');

-- --------------------------------------------------------

--
-- Table structure for table `patient_has_healthtip`
--

CREATE TABLE IF NOT EXISTS `patient_has_healthtip` (
  `Patient_patient_Id` int(11) NOT NULL,
  `HealthTip_tip_Id` int(11) NOT NULL,
  PRIMARY KEY (`Patient_patient_Id`,`HealthTip_tip_Id`),
  KEY `fk_Patient_has_HealthTip_HealthTip1_idx` (`HealthTip_tip_Id`),
  KEY `fk_Patient_has_HealthTip_Patient1_idx` (`Patient_patient_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patient_session`
--

CREATE TABLE IF NOT EXISTS `patient_session` (
  `session_Id` varchar(45) NOT NULL,
  `patient_Id` varchar(45) DEFAULT NULL,
  `hash` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`session_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `payment_Id` int(11) NOT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `payment_date&time` datetime DEFAULT NULL,
  `Patient_patient_Id` int(11) NOT NULL,
  `Pharmacy_pharmacy_Id` int(11) NOT NULL,
  PRIMARY KEY (`payment_Id`,`Patient_patient_Id`,`Pharmacy_pharmacy_Id`),
  KEY `fk_Payment_Patient1_idx` (`Patient_patient_Id`),
  KEY `fk_Payment_Pharmacy1_idx` (`Pharmacy_pharmacy_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE IF NOT EXISTS `pharmacy` (
  `pharmacy_Id` int(11) NOT NULL,
  `pharmacy_Name` varchar(45) DEFAULT NULL,
  `expiration_Date` datetime DEFAULT NULL,
  `contact_Number` varchar(45) DEFAULT NULL,
  `Address` varchar(45) DEFAULT NULL,
  `pharmacy_regId` varchar(45) DEFAULT NULL,
  `password` varchar(64) NOT NULL,
  `district` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  PRIMARY KEY (`pharmacy_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `prescription_Id` int(11) NOT NULL,
  `prescription_Date&Time` datetime DEFAULT NULL,
  `prescription_Type` varchar(45) DEFAULT NULL,
  `Patient_patient_Id` int(11) NOT NULL,
  `Pharmacy_pharmacy_Id` int(11) NOT NULL,
  PRIMARY KEY (`prescription_Id`,`Patient_patient_Id`,`Pharmacy_pharmacy_Id`),
  KEY `fk_Prescription_Patient1_idx` (`Patient_patient_Id`),
  KEY `fk_Prescription_Pharmacy1_idx` (`Pharmacy_pharmacy_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prescriptionentry`
--

CREATE TABLE IF NOT EXISTS `prescriptionentry` (
  `entry_Id` varchar(45) NOT NULL,
  `drug_Name` varchar(45) DEFAULT NULL,
  `drug_Dosage` varchar(45) DEFAULT NULL,
  `drug_Times` varchar(45) DEFAULT NULL,
  `drug_Description` varchar(45) DEFAULT NULL,
  `Prescription_prescription_Id` int(11) NOT NULL,
  PRIMARY KEY (`entry_Id`,`Prescription_prescription_Id`),
  KEY `fk_PrescriptionEntry_Prescription1_idx` (`Prescription_prescription_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `question_Id` varchar(45) NOT NULL,
  `question_Type` varchar(45) DEFAULT NULL,
  `question_Content` varchar(45) DEFAULT NULL,
  `question_Date&Time` datetime DEFAULT NULL,
  `Patient_patient_Id` int(11) NOT NULL,
  `Answer` varchar(45) NOT NULL,
  PRIMARY KEY (`question_Id`,`Patient_patient_Id`),
  KEY `fk_Question_Patient1_idx` (`Patient_patient_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `report_Id` varchar(45) NOT NULL,
  `report_Type` varchar(45) DEFAULT NULL,
  `Date&Time` datetime DEFAULT NULL,
  `report_Link` varchar(45) DEFAULT NULL,
  `Patient_patient_Id` int(11) NOT NULL,
  PRIMARY KEY (`report_Id`,`Patient_patient_Id`),
  KEY `fk_Report_Patient1_idx` (`Patient_patient_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD CONSTRAINT `fk_Appoinment_Patient` FOREIGN KEY (`Patient_patient_Id`) REFERENCES `patient` (`patient_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_Comment_Patient1` FOREIGN KEY (`Patient_patient_Id`) REFERENCES `patient` (`patient_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `historyevent`
--
ALTER TABLE `historyevent`
  ADD CONSTRAINT `fk_HistoryEvent_Patient1` FOREIGN KEY (`Patient_patient_Id`) REFERENCES `patient` (`patient_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `patient_has_healthtip`
--
ALTER TABLE `patient_has_healthtip`
  ADD CONSTRAINT `fk_Patient_has_HealthTip_HealthTip1` FOREIGN KEY (`HealthTip_tip_Id`) REFERENCES `healthtip` (`tip_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Patient_has_HealthTip_Patient1` FOREIGN KEY (`Patient_patient_Id`) REFERENCES `patient` (`patient_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_Payment_Patient1` FOREIGN KEY (`Patient_patient_Id`) REFERENCES `patient` (`patient_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Payment_Pharmacy1` FOREIGN KEY (`Pharmacy_pharmacy_Id`) REFERENCES `pharmacy` (`pharmacy_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `fk_Prescription_Patient1` FOREIGN KEY (`Patient_patient_Id`) REFERENCES `patient` (`patient_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Prescription_Pharmacy1` FOREIGN KEY (`Pharmacy_pharmacy_Id`) REFERENCES `pharmacy` (`pharmacy_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `prescriptionentry`
--
ALTER TABLE `prescriptionentry`
  ADD CONSTRAINT `fk_PrescriptionEntry_Prescription1` FOREIGN KEY (`Prescription_prescription_Id`) REFERENCES `prescription` (`prescription_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `fk_Question_Patient1` FOREIGN KEY (`Patient_patient_Id`) REFERENCES `patient` (`patient_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `fk_Report_Patient1` FOREIGN KEY (`Patient_patient_Id`) REFERENCES `patient` (`patient_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
