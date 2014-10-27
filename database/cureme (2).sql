-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2014 at 03:32 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cureme`
--

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
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `doctor_Id` int(3) NOT NULL AUTO_INCREMENT,
  `doc_Reg_Id` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `age` int(3) NOT NULL,
  `rank` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`doctor_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_Id`, `doc_Reg_Id`, `name`, `address`, `age`, `rank`, `email`, `password`) VALUES
(1, '29845', 'Aruna Sampath Yatigammana', 'City Clinic, Nuwara Eliya, Sri Lanka', 40, 'MBBS Sri Lanka', 'Arunasampath@gmail.com', '1234567');

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
  `salt` varchar(1024) NOT NULL,
  PRIMARY KEY (`patient_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_Id`, `active`, `patient_FName`, `patient_LName`, `email`, `address_No`, `address_Street`, `address_City`, `date_Of_Birth`, `mobile_Number`, `gender`, `date_Of_Registration`, `password`, `salt`) VALUES
(100000, 0, 'Tharindu', 'Ranathunga', 'tharindu.prf@gmail.com', 'TissaWewa West', 'Pandulagama', 'Anuradhapura', '1992-07-07', '0710554644', 'Male', '2014-10-06', '1234567', ''),
(100001, 0, 'Kalpani', 'Rasangika', 'kalpani', 'dasfa', 'adsfdsa', 'adsfdasf', '2014-10-01', 'dsfsad', 'sdafa', '2014-10-01', 'asdfasdf', 'adfdsafsad'),
(100003, 0, 'Gayani', 'Ranathunga', 'gmkulathunga@gmail.com', 'Thissawewa', 'West', 'Anuradhapura', '1997-05-01', '0710554644', 'Female', '2014-10-08', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', '&Îö¹¾C]É$uŒM´/¨u¶SrD“ÎÒÇ$˜cñ'),
(100004, 0, 'asdas', 'asda', 'asds@sada.ca', 'sad', 'sadad', 'Moneragala', '1992-01-02', '0710664555', 'Male', '2014-10-08', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', '¹·¥É\r>mHÇŽ×øˆ¢Ø7Åú°Bæý¨Jdž¾l'),
(100005, 0, 'sadsd', 'asda', 'asssssds@sada.ca', 'sadasd', 'adasd', 'Batticaloa', '1992-01-10', '0710664555', 'Male', '2014-10-08', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', '²DSDñæŸ"ÿ/§4÷e\rFý")Ö®h¥—*²é9'),
(100006, 0, 'sdsa', 'dasd', 'asdass@sada.ca', 'sadas', 'adsad', 'Matara', '1992-01-02', '0710554644', 'Male', '2014-10-08', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', '´_î>Êô¬Ïv–äÙ¾x’.¸l¡g.Ž„\0°ñÁ'),
(100007, 0, 'kaaaaaaaa', 'sdads', 'asdasdasdas@sada.ca', 'sda', 'dasda', 'Matara', '1990-01-02', '0710664555', 'Male', '2014-10-08', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', 'V{\\]Mþ—üÊú=¶Ò@ßM›³Ïf»¡lhÎhgí«ÆZ'),
(100008, 0, 'Nihal', 'asdsa', 'thasadas.prf@gmail.com', 'sadsada', 'asdasd', 'Mannar', '1995-01-12', '0710664555', 'Male', '2014-10-08', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', 'ô€îµî½ƒ|Òž=¤Üï€Gìrê&¤>«‚ZÏa'),
(100009, 0, 'asda', 'sada', 'tharinsaddu1.prf@gmail.com', 'sada', 'asda', 'Anuradhapura', '1992-10-12', '0710664555', 'Female', '2014-10-08', '…ˆ1\n˜gjöâ%cÁUž\Zâ…•’½Í3HgÅEÍ', 'µÎÃJÔŠvÝï,ô<àü>öÙì£#d''W'),
(100010, 0, 'Anjna', 'Poro', 'axevilladge@sada.ca', 'adadas', 'sadsada', 'Anuradhapura', '2014-10-01', '0710554644', 'Female', '2014-10-08', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', ')A½lÌwçŽNá”Š€\\¤.N>/ÿ“ÌÌ#›v'),
(100011, 0, 'Hiran', 'Weerasinghe', 'hirane1@live.com', 'No 3', 'Nuwarawewa Watta', 'Anuradhapura', '1992-05-05', '0712102378', 'Male', '2014-10-09', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', '~’³iæ-I]øŸl,¹£#‚Zi+n€\0v(Ç¬!Dís¹'),
(100012, 0, 'Menuka', 'Ishan', 'menuka@gmail.com', 'No 32', 'Methniwasa Ganthera', 'Matara', '1991-07-17', '0716642345', 'Male', '2014-10-14', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', '\nKÊ-URéZ-ÊqØiOfÑ³Ùd.ñ½‰Q““b‚Z´');

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
-- Table structure for table `pharmasist`
--

CREATE TABLE IF NOT EXISTS `pharmasist` (
  `pharmacy_Id` int(11) NOT NULL,
  `pharmacy_Name` varchar(45) DEFAULT NULL,
  `contact_Number` varchar(45) DEFAULT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `active` int(2) NOT NULL DEFAULT '0',
  `salt` varchar(1024) NOT NULL,
  `registration_Number` varchar(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `address_No` varchar(50) NOT NULL,
  `address_Street` varchar(50) NOT NULL,
  `address_City` varchar(50) NOT NULL,
  `date_Of_Registration` date NOT NULL,
  PRIMARY KEY (`pharmacy_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pharmasist`
--

INSERT INTO `pharmasist` (`pharmacy_Id`, `pharmacy_Name`, `contact_Number`, `password`, `email`, `active`, `salt`, `registration_Number`, `owner`, `address_No`, `address_Street`, `address_City`, `date_Of_Registration`) VALUES
(1000010, 'City Clinic', '0710554644', '123', 'tharindu.prfatgmail', 0, '', '', '', '', '', '', '0000-00-00'),
(1000011, 'CityClinic', '0710555464', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', 'gmkulathunga@gmail.com', 0, 'ðZ#¸„|Wj<\0qC,/‰;:_Ÿ~ý“oæýþ‰Ù­', 'pasda4646', 'Tharndu', 'Tissawewa', 'West', 'Hambantota', '2014-10-08'),
(1000012, 'Hemaz', '0252224243', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', 'tharindu.prf@live.com', 0, '˜…ŒˆŠcÅùæìY.àîYT¥$bÖ', 'ph45', 'Gamindu', 'No 5', 'New Bustand', 'Anuradhapura', '2014-10-09');

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
  ADD CONSTRAINT `fk_Payment_Pharmacy1` FOREIGN KEY (`Pharmacy_pharmacy_Id`) REFERENCES `pharmasist` (`pharmacy_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `fk_Prescription_Patient1` FOREIGN KEY (`Patient_patient_Id`) REFERENCES `patient` (`patient_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Prescription_Pharmacy1` FOREIGN KEY (`Pharmacy_pharmacy_Id`) REFERENCES `pharmasist` (`pharmacy_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
