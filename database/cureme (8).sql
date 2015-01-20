-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2015 at 05:42 AM
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
  `title` varchar(45) DEFAULT NULL,
  `confirmation_Flag` tinyint(1) DEFAULT NULL,
  `Patient_patient_Id` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(10) NOT NULL,
  `createdDate` datetime NOT NULL,
  PRIMARY KEY (`appoinment_Id`,`Patient_patient_Id`),
  KEY `fk_Appoinment_Patient_idx` (`Patient_patient_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`appoinment_Id`, `title`, `confirmation_Flag`, `Patient_patient_Id`, `description`, `date`, `time`, `createdDate`) VALUES
(12, 'I want to take medicnes', 1, 100010, 'I''m suffering from Cold', '2015-01-16', '7.30 AM', '2015-01-17 13:14:40'),
(13, 'Blood Suger', 1, 100003, 'i want ti check my sugar level', '2015-01-24', '6.30 PM', '2015-01-19 20:05:54'),
(14, 'test', 0, 100003, 'dasdasd', '2015-01-25', '6.00 AM', '2015-01-20 03:58:05');

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
  `doctor_FName` varchar(100) NOT NULL,
  `doctor_LName` varchar(100) NOT NULL,
  `address_No` varchar(20) NOT NULL,
  `address_Street` varchar(100) NOT NULL,
  `address_City` varchar(100) NOT NULL,
  `date_Of_Birth` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `rank` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_Number` int(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`doctor_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_Id`, `doc_Reg_Id`, `doctor_FName`, `doctor_LName`, `address_No`, `address_Street`, `address_City`, `date_Of_Birth`, `gender`, `rank`, `email`, `mobile_Number`, `password`) VALUES
(1, '29845-SL', 'Arunaa', 'Sampath', 'City Clinic', 'Lake road,', 'Nuwara Eliya.', '1980-07-26', 'Male', 'MBBS Sri Lanka', 'Arunasampath@gmail.com', 710879666, '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE IF NOT EXISTS `drug` (
  `Generic` varchar(60) NOT NULL,
  `Brand` varchar(5000) NOT NULL,
  PRIMARY KEY (`Generic`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`Generic`, `Brand`) VALUES
('Amoxicillin', 'Amoxil, Apo-Amoxi, DisperMax, Novamoxin, Trimox, Wymox'),
('Aspirin', '217, 217 Strong, 8-Hour Bayer, A.S.A., Acetylsalicylic Acid, Alka-Seltzer Effervescent, Alka-Seltzer Morning Relief, Alka-Seltzer Plus Flu Effervescent, Alka-Seltzer Plus Honey, Alka-Seltzer PM, Alpha-Phed, Anacin, APAC, APF Arthrinol, Arthrisin, Arthritis Pain Formula, Artria S.R., Ascriptin, Aspergum, Astrin, Axotal, Bayer, Buffaprin, Bufferin, Buffets II, Buffinol, Butalgen, Cama Arthritis Reliever, Corcidin with Codeine, Coryphen, Dristan Formula P, Duradyne, Easprin, Ecotrin, Empirin, Entrophen, Excedrin Extra Strength, Excedrin Migraine, Fiorgen PF, Fiorinal, Fiormor, Fortabs, Gelprin, Gemnisyn, Goody''s Extra Strength, Goody''s Headache, Halfprin, Headstart, Isobutal, Isolin, Isollyl, Laniroif, Lanorinal, Magnaprin, Maprin, Marnal, Measurin, Nervine, Night-Time Effervescent Cold, Norwich Aspirin, Novasen, P-A-C, Pravigard PAC, Presalin, Riphen, Robaxisal, Sal-Adult, Sal-Infant, Salatin, Saleto, Salocol, Soma Compound, Supac, Supasa, Synalgos-DC, Tecnal, TenolPlus, Therapy Bayer, Tri-Pain, Triaphen, Trigesic, Ursinus Inlay, Vanquils, Vibutal, Viro-Med, Zorprin'),
('Azithromycin', 'Zithromax'),
('Cetirizine', 'Zyrtec, Zyrtec-D'),
('Hydrochlorothiazide', 'Apo-Hydro, Diuchlor H, Esidrix, Hydro-D, HydroDIURIL, Hyzaar, Micardis, Neo-Codema, Novo-Hydrazide, Oretic, Teveten HCT, Uniretic, Urozide'),
('Lisinopril', 'Prinivil, Zestril'),
('Loratadine', 'Alavert, Claritin, Claritin-D'),
('Metformin', 'Avandamet, Glucophage, Metaglip, Riomet'),
('Omeprazole', 'Losec, Prilosec'),
('Simvastatin', 'Epistatin, Synvinolin, Zocor'),
('Telmisartan', 'Micardis');

-- --------------------------------------------------------

--
-- Table structure for table `healthtip`
--

CREATE TABLE IF NOT EXISTS `healthtip` (
  `tip_Id` int(11) NOT NULL,
  `tip_Type` varchar(45) DEFAULT NULL,
  `tip_Content` varchar(45) DEFAULT NULL,
  `tip_Date` date DEFAULT NULL,
  `tip_Time` time NOT NULL,
  PRIMARY KEY (`tip_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `healthtip`
--

INSERT INTO `healthtip` (`tip_Id`, `tip_Type`, `tip_Content`, `tip_Date`, `tip_Time`) VALUES
(1, 'Viral Fever', 'A new viral fever with a stomachache is sprea', '2014-11-14', '06:20:48'),
(2, 'Dengue Virus', 'Dengue is rapidly spreading in Colombo 07', '2014-11-14', '06:22:25'),
(3, 'Maleria', 'Spreading all over the country these days', '2014-11-15', '06:08:10'),
(4, 'swhg', 'hdskjchs', '2014-11-15', '09:05:58'),
(5, 'dd', 'dd', '2014-11-15', '09:09:38'),
(6, 'dd', 'rgbt', '2014-11-15', '09:13:10'),
(7, 'Hello', 'Test Tip', '2015-01-17', '04:16:16'),
(8, 'Diahrea', 'Diahrea is spreading rapidly please put your ', '2015-01-18', '08:02:14'),
(9, '', '', '2015-01-19', '05:31:09'),
(10, '', '', '2015-01-19', '05:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `historyevent`
--

CREATE TABLE IF NOT EXISTS `historyevent` (
  `historyevent_id` int(45) NOT NULL AUTO_INCREMENT,
  `event_date&time` datetime DEFAULT NULL,
  `event_type` varchar(45) DEFAULT NULL,
  `event_description` varchar(45) DEFAULT NULL,
  `Patient_patient_Id` int(11) NOT NULL,
  PRIMARY KEY (`historyevent_id`,`Patient_patient_Id`),
  KEY `fk_HistoryEvent_Patient1_idx` (`Patient_patient_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_Id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_Id` int(11) NOT NULL,
  `message_Subject` varchar(50) NOT NULL,
  `message_Containt` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`message_Id`,`patient_Id`),
  KEY `patient_Id` (`patient_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_Id`, `patient_Id`, `message_Subject`, `message_Containt`, `date`, `time`) VALUES
(1, 100003, 'my first message', 'this is only test message', '2015-01-20', '00:00:13'),
(2, 100003, 'my first message', 'this is only test message', '2015-01-20', '00:00:00'),
(3, 100008, 'my second message', 'this for patient number 100008', '0000-00-00', '00:00:00'),
(4, 100003, 'this is my third message', 'theird message boddy', '2015-01-20', '10:16:36'),
(5, 100003, 'last warrning', 'try with error handling', '2015-01-20', '10:21:58'),
(6, 100003, 'sadsadasdasdsa', 'asdasdasd', '2015-01-20', '06:22:07'),
(7, 100003, 'dsfdgfdgdfg', 'fdgdfg', '2015-01-20', '06:23:30'),
(8, 100017, 'Hello ', 'Please Contact me ASAP', '2015-01-20', '04:56:52');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `notitification_ID` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(100) NOT NULL,
  `patient_Id` int(11) NOT NULL,
  PRIMARY KEY (`notitification_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notitification_ID`, `content`, `patient_Id`) VALUES
(1, 'Your Appoinment Was Rejected', 0),
(2, 'Your Appoinment Was Rejected', 0),
(3, 'Your Appoinment Was Rejected', 0),
(7, 'Your Appoinment Was Rejected', 100003),
(8, 'You have received a prescription', 100003),
(9, 'You got a new Health Tip', 0),
(11, 'New appointment added', 100),
(12, 'New report submitted by patient ID 100003', 100),
(13, 'New appointment added', 100),
(14, 'New appointment added', 100),
(15, 'Your Appoinment Was Rejected', 100003),
(16, 'You have received a prescription', 100003),
(17, 'New report submitted by patient ID 100003', 100),
(18, 'You got a new Health Tip', 0),
(19, 'You got a new Health Tip', 0),
(20, 'New appointment added', 100),
(21, 'New report submitted by patient ID 100003', 100),
(22, 'Your Appoinment Was Rejected', 100003),
(23, 'New appointment added', 100),
(24, 'New appointment added', 100),
(25, 'New report submitted by patient ID 100017', 100);

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
(100001, 1, 'Kalpani', 'Rasangika', 'kalpani.prf@gmail.com', '69', 'Pandualagama', 'Anuradhapura', '2014-10-01', '0718101461', 'sdafa', '2014-10-01', 'ïy|ð-ûd–Ý]?Œv#Œœ=S,É^×¨˜¦O', '±t*´ÑðH…Ì­Ï÷\r¸ül˜Ž´Ðâp/ÐÕPë'),
(100003, 1, 'Mahesh', 'Viranga', 'gmkulathunga@gmail.com', 'Thissawewa', 'West', 'Anuradhapura', '1997-05-01', '0710554644', 'Male', '2014-10-08', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', '&Îö¹¾C]É$uŒM´/¨u¶SrD“ÎÒÇ$˜cñ'),
(100008, 0, 'Nihal', 'asdsa', 'thasadas.prf@gmail.com', 'sadsada', 'asdasd', 'Mannar', '1995-01-12', '0710664555', 'Male', '2014-10-08', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', 'ô€îµî½ƒ|Òž=¤Üï€Gìrê&¤>«‚ZÏa'),
(100010, 1, 'Anjna', 'Poro', 'axevilladge@sada.ca', 'adadas', 'sadsada', 'Anuradhapura', '2014-10-01', '0710554644', 'Female', '2014-10-08', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', ')A½lÌwçŽNá”Š€\\¤.N>/ÿ“ÌÌ#›v'),
(100012, 0, 'Menuka', 'Ishan', 'menuka@gmail.com', 'No 32', 'Methniwasa Ganthera', 'Matara', '1991-07-17', '0716642345', 'Male', '2014-10-14', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', '\nKÊ-URéZ-ÊqØiOfÑ³Ùd.ñ½‰Q““b‚Z´'),
(100014, 0, 'Sand Mihiri', 'Samarainghe', 'sanda@yahoo.com', 'SLITT', 'Malambe', 'Mannar', '1992-05-02', '0712102379', 'Female', '2015-01-18', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', 'Gl²ç‘c[c"®z“JŠøp—‚rÁa¢ãDÿÐ¶!'),
(100017, 1, 'Ravean', 'Perera', 'harith@gmail.com', 'Katukurunda', 'Station', 'Kalutara', '1991-06-12', '0710690555', 'Male', '2015-01-18', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', '{ËºjÆ±Îšùóp1/a=hoò«V#Ý?qUZP5'),
(100018, 0, 'Chamindu', 'Gunawaradane', 'chamindu.madushaka@gmail.com', 'Madhushanka', '8', 'Galle', '1991-07-15', '0681236548', 'Male', '2015-01-19', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', '–LÉæ$ÏA›Æ½T&eúŽ"&æÕ˜(.âÓ™"•îÍTÛ'),
(100019, 0, 'Supun', 'Harshana', 'supunharshana@gmail.com', '220/12,', 'New Tangalle Road', 'Matara', '1991-06-19', '0778462593', 'Male', '2015-01-19', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', '\rq±sôFãº]©!™Ó	¸©Ù—¢ØDÖ´''ò©ÌAŒ'),
(100020, 0, 'Dimuthu', 'Hemakumara', 'hemakumara123@hotmail.com', '"Sirimal Niwasa"', 'Sumedha mawatha,Bulathkohupitiya,', 'Kegalla', '1991-08-04', '0724569631', 'Male', '2015-01-19', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', '‰¸z–LfŠÚÐÀiáðeNUF~åUåNn…,\n]'),
(100021, 0, 'Kusum', 'Hettiarachchi', 'kusum.hettiarachchi@yahoo.com', '"Sadhaham Sewana",Malimbada,', 'Palatuwa.', 'Matara', '1960-10-19', '0719856261', 'Female', '2015-01-19', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', '¸˜.‰[Ü:êÃE‡ñ¼3_ÕÌþEõÃþBu9H€\r’'),
(100022, 0, 'Hiran', 'Weerasingha', 'herane@gmail.com', '90/2', 'Wawe', 'Anuradhapura', '1992-11-09', '0775126982', 'Male', '2015-01-19', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', '”ühã¦â·GK:‰/Ý$K:Ma¢riâñðI'),
(100023, 1, 'Kasun', 'Balasooriya', 'kmbck@gmail.com', 'No 5', 'Gelioya', 'Kandy', '1992-05-02', '0710511644', 'Male', '2015-01-20', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', 'úS	²½Áÿ%äGQo65?bäqatÌgM¶ž—uã');

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
(1000013, 'Shady Pharmacies', '0712106378', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', 'shady12@gmail.com', 1, '¿{tG¯´¸~ßß>ŒÑH#n¦rütžó­õ', 'ph60', 'Hiran Eranda', 'No 32', 'Chatham Street', 'Colombo', '2014-11-25'),
(1000014, 'City Clinic', '0710554644', '‹°Ïn¹±}}"´Vñ!%}Á%NfSpGcƒêwmô', 'tharindu.prf@live.com', 1, 'k¢nÀâÓö¸S>WÅ—×Ùâ\nQ÷I›³yàX,8âœÜ', 'ph45', 'Gamindu', 'No:50', 'Main Street', 'Nuwara Eliya', '2014-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `prescription_Id` int(11) NOT NULL,
  `prescription_Date` date DEFAULT NULL,
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
  `drug1_Name` varchar(45) DEFAULT NULL,
  `drug1_Dosage` varchar(45) DEFAULT NULL,
  `drug2_Name` varchar(45) DEFAULT NULL,
  `drug2_Dosage` varchar(45) DEFAULT NULL,
  `Prescription_prescription_Id` int(11) NOT NULL,
  PRIMARY KEY (`entry_Id`,`Prescription_prescription_Id`),
  KEY `fk_PrescriptionEntry_Prescription1_idx` (`Prescription_prescription_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE IF NOT EXISTS `prescriptions` (
  `prescription_Id` int(5) NOT NULL,
  `patient_Id` int(6) NOT NULL,
  `date` date NOT NULL,
  `drug1_name` varchar(100) NOT NULL,
  `drug1_dose` varchar(200) NOT NULL,
  `drug2_name` varchar(100) NOT NULL,
  `drug2_dose` varchar(200) NOT NULL,
  `drug3_name` varchar(100) NOT NULL,
  `drug3_dose` varchar(200) NOT NULL,
  `drug4_name` varchar(100) NOT NULL,
  `drug4_dose` varchar(200) NOT NULL,
  `drug5_name` varchar(100) NOT NULL,
  `drug5_dose` varchar(200) NOT NULL,
  `issued` int(5) NOT NULL,
  PRIMARY KEY (`prescription_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`prescription_Id`, `patient_Id`, `date`, `drug1_name`, `drug1_dose`, `drug2_name`, `drug2_dose`, `drug3_name`, `drug3_dose`, `drug4_name`, `drug4_dose`, `drug5_name`, `drug5_dose`, `issued`) VALUES
(1, 100001, '2015-01-16', 'Amoxicillin', '1 tablet for 3 times per day after meal', '', '', '', '', '', '', '', '', 1),
(2, 100003, '2015-01-16', 'Omeprazole', '20mg tablet before dinner', '', '', '', '', '', '', '', '', 1),
(3, 100003, '2015-01-16', 'Cetirizine', '1 tablet after dinner', 'Amoxicillin', '3 times per day 2 tablets each after meals', 'Telmisartan', '40mg tablet morning and night after meals', 'Azithromycin', '20mg after night', '', '', 0),
(4, 100003, '2015-01-17', 'Aspirin', '20mg after dinner for a week', '', '', '', '', '', '', '', '', 0),
(5, 100003, '2015-01-18', 'Loratadine', '20mg after dinner for a week', '', '', '', '', '', '', '', '', 1),
(6, 100003, '2015-01-18', 'New', 'One mg per day', '', '', '', '', '', '', '', '', 1),
(7, 100003, '2015-01-18', 'Drug 1', '10mp per day', '', '', '', '', '', '', '', '', 1),
(8, 100003, '2015-01-18', 'Amoxicillin ', '20mg twice a day', '', '', '', '', '', '', '', '', 0),
(9, 100003, '2015-01-18', 'Citricine ', '10 mg  Trice a day', '', '', '', '', '', '', '', '', 1),
(10, 100003, '2015-01-19', 'Aspirin', '20mg after dinner for a week', '', '', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `question_Id` int(45) NOT NULL AUTO_INCREMENT,
  `question_Content` varchar(45) DEFAULT NULL,
  `question_Date&Time` datetime DEFAULT NULL,
  `Patient_patient_Id` int(11) NOT NULL,
  `Answer` varchar(45) NOT NULL,
  `subject` varchar(65) DEFAULT NULL,
  PRIMARY KEY (`question_Id`,`Patient_patient_Id`),
  KEY `fk_Question_Patient1_idx` (`Patient_patient_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_Id`, `question_Content`, `question_Date&Time`, `Patient_patient_Id`, `Answer`, `subject`) VALUES
(1, 'ABCDE', '2014-10-28 03:25:10', 100003, 'ok I did', 'aaaa'),
(4, 'I have a dream', '2014-10-28 04:12:05', 100003, 'OK I''ll call you later', 'Hey'),
(5, 'sadasdfafaa', '2014-10-28 04:13:44', 100003, 'I answer', 'Question 2'),
(6, 'I have a big head ache', '2014-10-28 05:15:24', 100008, '', 'Cold'),
(7, 'I hadasda', '2014-10-28 09:40:55', 100003, '', 'Headache'),
(8, 'abcdefghij', '2014-11-10 17:39:57', 100003, '', 'abc'),
(9, 'Testing Conversation Details', '2015-01-18 03:50:58', 100001, '', 'Testing Conversation 01'),
(10, 'Testing Conversation Details', '2015-01-18 03:54:44', 100001, '', 'Testing Conversation 02'),
(11, 'Testing Conversation Details', '2015-01-18 03:55:09', 100001, '', 'Testing Conversation 03'),
(12, 'xzczx', '2015-01-18 06:18:13', 100003, '', 'zXz'),
(13, 'gfsdgfdsgdfs', '2015-01-19 12:38:20', 100003, 'sdfdsf', 'asfdsgdsg');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `report_Id` int(45) NOT NULL AUTO_INCREMENT,
  `report_Type` varchar(45) DEFAULT NULL,
  `created_Date` datetime DEFAULT NULL,
  `Patient_patient_Id` int(11) NOT NULL,
  `description` varchar(160) NOT NULL,
  `fileName` varchar(50) NOT NULL,
  PRIMARY KEY (`report_Id`,`Patient_patient_Id`),
  KEY `fk_Report_Patient1_idx` (`Patient_patient_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_Id`, `report_Type`, `created_Date`, `Patient_patient_Id`, `description`, `fileName`) VALUES
(14, 'Coloscopy Report', '2015-01-18 11:53:59', 100003, 'I got the report today morning', '13.jpg'),
(15, 'Auscultation Report', '2015-01-18 11:55:46', 100003, 'This is my Authorship Report', '14.jpg'),
(16, 'Coloscopy Report', '2015-01-18 11:58:56', 100010, 'I got this now please tell me this is ok.', '15.jpg'),
(17, 'Platelets Count', '2015-01-18 12:01:19', 100010, 'Pleatelets', '16.jpg'),
(18, 'Platelets Count', '2015-01-18 12:05:18', 100010, 'I took a full blood count', '17.jpg'),
(19, 'Urine Count', '2015-01-18 01:33:11', 100003, 'Test', '18.jpeg'),
(20, 'Auscultation Report', '2015-01-18 01:33:49', 100003, 'My Brain Test', '19.jpeg'),
(21, 'Coloscopy Report', '2015-01-18 01:34:05', 100003, 'My second Test', '20.jpeg'),
(22, 'Platelets Count', '2015-01-18 01:38:49', 100003, 'My Secon Pleatelets Count', '21.jpeg'),
(23, 'Urine Count', '2015-01-18 01:41:36', 100003, 'My Urine Test', '22.jpeg'),
(24, 'Platelets Count', '2015-01-18 08:32:43', 100003, 'Platelets Count', '23.jpeg'),
(25, 'Platelets Count', '2015-01-19 05:25:06', 100003, 'This a a full blood count', '24.jpeg'),
(26, 'Full Blood Count', '2015-01-19 12:36:56', 100003, 'sadsadasdsad', '25.jpeg'),
(27, 'Full Blood Count', '2015-01-20 05:00:14', 100017, 'It was late sorry', '26.jpeg');

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
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`patient_Id`) REFERENCES `patient` (`patient_Id`) ON DELETE CASCADE;

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
