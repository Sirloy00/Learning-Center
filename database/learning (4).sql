-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 09:37 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `name`, `msg`, `date`) VALUES
(33, 'Lester', 'Hello', '2018-09-30 09:04:14'),
(34, 'Jm', 'Hi', '2018-09-30 09:04:25'),
(35, 'Jm', 'Hi', '2018-09-30 09:16:07'),
(36, 'Jm', 'Hi', '2018-09-30 09:16:14');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `receiver_name` varchar(50) NOT NULL,
  `message` varchar(256) NOT NULL,
  `date_sent` varchar(50) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `images` varchar(256) NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  `message_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `receiver_name`, `message`, `date_sent`, `sender_id`, `images`, `sender_name`, `message_status`) VALUES
(6, 'Lester Ricafranca Rivarez', 'sleep pag may time', '2018/10/03 01:16:60am', 2, '', 'Nheil R. Rivarez', 'unread'),
(10, 'Lester Ricafranca Rivarez', 'hello world', '2018/10/03 01:16:39am', 3, '', 'Nheil R. Rivarez', 'unread'),
(11, 'Nheil R. Rivarez', 'hello world', '2018/10/03 01:16:39am', 0, '', 'Lester Ricafranca Rivarez', ''),
(12, 'Sophie A. Reyes', 'I think you should add some functionality to make your system powerful. Good job!', '2018/10/03 01:16:50am', 0, '', 'Lester Ricafranca Rivarez', 'unread'),
(13, 'Nheil R. Rivarez', 'sleep pag may time', '2018/10/03 01:16:60am', 0, '', 'Lester Ricafranca Rivarez', ''),
(14, 'Lester Ricafranca Rivarez', 'good moring goodmoring goodmoring goodmoring', '2018/10/03 01:15:50am', 3, '', 'Airnie G. Idea', 'unread'),
(16, 'jm valle Igtiben', 'yow', '2018/10/03 01:16:39am', 2, '', 'Jude Musico', 'unread'),
(33, 'Jm Eusebio Igtiben', 'jm kindly please submit your class card to me tomorrow.', '2018/10/17 12:21:12am', 4, 'uploads/107282images (5).jpg', 'Maria  Deca Monica', 'unread'),
(34, 'Maria  Deca Monica', 'Hello goodmorning maam may itatanong lang po ako ', '2018/10/17 12:22:44am', 6, 'uploads/947780kitten_cat_hat_playful_funny.jpg', 'Leandro Dkoalam Sarmiento', 'read'),
(35, 'Leandro Dkoalam Sarmiento', 'Ok ano po yun Sir?', '2018/10/17 12:25:20am', 4, 'uploads/107282images (5).jpg', 'Maria  Deca Monica', 'read'),
(36, 'administrator', 'Good afternoon admin may napansin lang po akong mali record ng studyante ko.', '2018/10/17 01:06:36am', 6, 'uploads/947780kitten_cat_hat_playful_funny.jpg', 'Leandro Dkoalam Sarmiento', 'unread'),
(38, 'Jm Eusebio Igtiben', 'hello', '2018/10/18 09:26:55pm', 6, 'uploads/947780kitten_cat_hat_playful_funny.jpg', 'Leandro Dkoalam Sarmiento', 'unread'),
(40, 'Victor Reyes Sotto', 'Hello sir', '2018/10/22 11:07:23pm', 6, 'uploads/947780kitten_cat_hat_playful_funny.jpg', 'Leandro Dkoalam Sarmiento', 'read'),
(41, 'Leandro Dkoalam Sarmiento', 'Hello', '2018/10/22 11:23:00pm', 2, 'uploads/399328356325cat_surprise_look_striped.jpg', 'Victor Reyes Sotto', 'read'),
(42, 'Leandro Dkoalam Sarmiento', 'A community of christ faithful in communion and mission and intergrates the local church, Cainta Catholic College proclaims the good news, of truth', '2018/10/22 11:24:14pm', 2, 'uploads/399328356325cat_surprise_look_striped.jpg', 'Victor Reyes Sotto', 'read'),
(43, 'Maria  Deca Monica', 'https://www.facebook.com/?ref=tn_tnmn', '2018/10/23 12:10:01am', 6, 'uploads/947780kitten_cat_hat_playful_funny.jpg', 'Leandro Dkoalam Sarmiento', 'read'),
(44, 'Victor Reyes Sotto', 'sample sample text', '2018/10/26 01:59:34pm', 6, 'uploads/947780kitten_cat_hat_playful_funny.jpg', 'Leandro Dkoalam Sarmiento', 'unread'),
(45, 'Leandro Dkoalam Sarmiento', 'this is my reply', '2018/10/26 02:03:04pm', 4, 'uploads/107282images (5).jpg', 'Maria  Deca Monica', 'read'),
(86, 'Maria  Deca Monica', 'hello', '2018/10/26 03:44:56pm', 6, 'uploads/947780kitten_cat_hat_playful_funny.jpg', 'Leandro Dkoalam Sarmiento', 'read'),
(87, 'Leandro Dkoalam Sarmiento', 'hi', '2018/10/26 03:51:03pm', 4, 'uploads/107282images (5).jpg', 'Maria  Deca Monica', 'read'),
(88, 'Victor Reyes Sotto', 'Hello', '2018/10/26 04:23:04pm', 6, 'uploads/947780kitten_cat_hat_playful_funny.jpg', 'Leandro Dkoalam Sarmiento', 'unread'),
(89, 'Maria  Deca Monica', 'sample', '2018/10/26 10:05:42pm', 6, 'uploads/947780kitten_cat_hat_playful_funny.jpg', 'Leandro Dkoalam Sarmiento', 'read'),
(90, 'Leandro Dkoalam Sarmiento', 'dd', '2018/10/27 12:28:33am', 4, 'uploads/107282images (5).jpg', 'Maria  Deca Monica', 'read'),
(91, 'Maria  Deca Monica', 'hello', '2018/10/27 12:34:28am', 2, 'uploads/399328356325cat_surprise_look_striped.jpg', 'Victor Reyes Sotto', 'read'),
(92, 'Victor Reyes Sotto', 'hi', '2018/10/27 12:35:07am', 4, 'uploads/107282images (5).jpg', 'Maria  Deca Monica', 'unread'),
(93, 'Victor Reyes Sotto', 'hi', '2018/10/27 12:35:07am', 4, 'uploads/107282images (5).jpg', 'Maria  Deca Monica', 'unread'),
(94, 'Victor Reyes Sotto', 'yow', '2018/10/27 12:35:36am', 4, 'uploads/107282images (5).jpg', 'Maria  Deca Monica', 'unread'),
(95, 'Victor Reyes Sotto', 'yow', '2018/10/27 12:35:36am', 4, 'uploads/107282images (5).jpg', 'Maria  Deca Monica', 'unread'),
(96, 'Victor Reyes Sotto', 'wew', '2018/10/27 12:35:54am', 4, 'uploads/107282images (5).jpg', 'Maria  Deca Monica', 'unread'),
(97, 'Victor Reyes Sotto', 'wew', '2018/10/27 12:35:54am', 4, 'uploads/107282images (5).jpg', 'Maria  Deca Monica', 'unread'),
(98, 'Victor Reyes Sotto', 'hey', '2018/10/27 12:36:50am', 4, 'uploads/107282images (5).jpg', 'Maria  Deca Monica', 'unread'),
(99, 'Victor Reyes Sotto', 'hello', '2018/10/27 12:37:11am', 4, 'uploads/107282images (5).jpg', 'Maria  Deca Monica', 'unread'),
(100, 'Leandro Dkoalam Sarmiento', 'this my reply again', '2018/10/27 12:37:45am', 4, 'uploads/107282images (5).jpg', 'Maria  Deca Monica', 'read'),
(102, 'Leandro Dkoalam Sarmiento', 'thank you', '2018/10/27 12:47:01am', 4, 'uploads/107282images (5).jpg', 'Maria  Deca Monica', 'read'),
(103, 'Leandro Dkoalam Sarmiento', 'wew', '2018/10/27 12:48:34am', 4, 'uploads/107282images (5).jpg', 'Maria  Deca Monica', 'read'),
(104, 'Maria  Deca Monica', 'KAMUSTA?ðŸ˜Š', '2018/10/27 01:38:27am', 2, 'uploads/399328356325cat_surprise_look_striped.jpg', 'Victor Reyes Sotto', 'read'),
(105, 'Maria  Deca Monica', 'sample', '2018/10/27 11:09:38am', 6, 'uploads/947780kitten_cat_hat_playful_funny.jpg', 'Leandro Dkoalam Sarmiento', 'read'),
(106, 'Leandro Dkoalam Sarmiento', 'Kamusta po?', '2018/10/28 02:16:54pm', 4, 'uploads/107282images (5).jpg', 'Maria  Deca Monica', 'unread'),
(107, 'Maria  Deca Monica', 'Ayos lang po', '2018/10/28 02:17:42pm', 6, 'uploads/947780kitten_cat_hat_playful_funny.jpg', 'Leandro Dkoalam Sarmiento', 'read'),
(108, 'Leandro Dkoalam Sarmiento', 'goodevening', '2018/10/29 12:04:21am', 4, 'uploads/107282images (5).jpg', 'Maria  Deca Monica', 'unread'),
(109, 'Maria  Deca Monica', 'sample reply', '2018/10/29 12:05:32am', 6, 'uploads/947780kitten_cat_hat_playful_funny.jpg', 'Leandro Dkoalam Sarmiento', 'read'),
(110, 'Leandro Dkoalam Sarmiento', 'sample reply', '2018/10/29 12:06:46am', 4, 'uploads/107282images (5).jpg', 'Maria  Deca Monica', 'unread'),
(111, 'Maria  Deca Monica', 'sample reply 2', '2018/10/29 12:13:36am', 6, 'uploads/947780kitten_cat_hat_playful_funny.jpg', 'Leandro Dkoalam Sarmiento', 'read'),
(112, 'Leandro Dkoalam Sarmiento', 'this is my reply', '2018/10/29 12:14:28am', 4, 'uploads/107282images (5).jpg', 'Maria  Deca Monica', 'unread'),
(113, 'Maria  Deca Monica', 'Hello Goodmorning ðŸ˜Š', '2018/10/29 01:52:32am', 6, 'uploads/947780kitten_cat_hat_playful_funny.jpg', 'Retzel Ricafranca Rivarez', 'read'),
(114, 'Retzel Ricafranca Rivarez', 'Goodmorning din ðŸ˜Š ', '2018/10/29 01:53:33am', 4, 'uploads/107282images (5).jpg', 'Maria  Deca Monica', 'read'),
(115, 'Maria  Deca Monica', 'goodmorning\r\n', '2018/11/10 10:51:00am', 6, 'uploads/947780kitten_cat_hat_playful_funny.jpg', 'Retzel Ricafranca Rivarez', 'read'),
(116, 'Maria  Deca Monica', 'sample reply', '2018/11/15 09:02:34pm', 6, 'uploads/73241bunny.jpg', 'Retzel Ricafranca Rivarez', 'unread'),
(117, 'Carlo D. Brua', 'Hey hahahahahahaha', '2018/11/17 04:08:46pm', 6, 'uploads/73241bunny.jpg', 'Retzel Ricafranca Rivarez', 'unread'),
(118, 'Maria  Deca Monica', 'hey', '2018/11/17 04:09:14pm', 6, 'uploads/73241bunny.jpg', 'Retzel Ricafranca Rivarez', 'unread'),
(119, 'Retzel Ricafranca Rivarez', 'Mr. Rivarz kindly uploads learning materials for BSCS4-A. Thank you', '2018/11/18 06:35:04pm', 1, 'uploads/admin.png', 'administrator', 'read'),
(120, 'Retzel Ricafranca Rivarez', 'hello', '2018/11/20 10:36:39pm', 4, 'uploads/107282images (5).jpg', 'Maria  Deca Monica', 'read'),
(121, 'Jethro Dikoalam Gamad', 'sir can ask your help?', '2018/11/22 12:36:17pm', 6, 'uploads/462898bunny.jpg', 'Retzel Ricafranca Rivarez', 'unread'),
(122, 'Retzel Ricafranca Rivarez', 'ano po yun sir?', '2018/11/22 12:42:22pm', 5, 'uploads/291395national_day_of_cats.jpg', 'Jethro Dikoalam Gamad', 'unread'),
(123, 'Jethro Dikoalam Gamad', 'my lectures ka ba na related sa php programming. pwede bang i upload para madownload ko?', '2018/11/22 12:44:37pm', 6, 'uploads/462898bunny.jpg', 'Retzel Ricafranca Rivarez', 'unread'),
(124, 'Jethro Dikoalam Gamad', 'sir jeth. kindly upload learning materials to your subject class BSCS4-A', '2018/11/22 12:45:46pm', 1, 'uploads/admin.png', 'administrator', 'unread'),
(125, 'administrator', 'ok sir.', '2018/11/22 12:46:26pm', 5, 'uploads/291395national_day_of_cats.jpg', 'Jethro Dikoalam Gamad', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(50) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `accounttype` varchar(256) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mi` varchar(20) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `username`, `password`, `accounttype`, `fname`, `mi`, `lname`, `images`) VALUES
(1, 'admin', 'admin', 'administrator', 'Lester', 'Ricafranca', 'Rivarez', 'uploads/lester.jpg'),
(2, 'john mark', 'jm', 'administrator', 'jm', 'valle', 'Igtiben', 'uploads/jm.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblclass`
--

CREATE TABLE `tblclass` (
  `class_id` int(11) NOT NULL,
  `classname` varchar(50) NOT NULL,
  `schoolyearid` int(11) NOT NULL,
  `yearlevel` varchar(50) NOT NULL,
  `department` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclass`
--

INSERT INTO `tblclass` (`class_id`, `classname`, `schoolyearid`, `yearlevel`, `department`) VALUES
(1, 'St.Jude', 2, 'Grade 8', 'Junior'),
(2, 'St. Jerome', 2, 'Grade 7', 'Senior'),
(3, 'St.John', 6, 'Grade 8', 'Junior');

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

CREATE TABLE `tblfeedback` (
  `id` int(11) NOT NULL,
  `sender_id` int(20) NOT NULL,
  `message` varchar(256) NOT NULL,
  `date_sent` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfeedback`
--

INSERT INTO `tblfeedback` (`id`, `sender_id`, `message`, `date_sent`) VALUES
(2, 4, 'goodjob', '2018/11/22 01:54:25am'),
(3, 4, '', '2018/11/22 01:55:45am');

-- --------------------------------------------------------

--
-- Table structure for table `tbllearningmaterials`
--

CREATE TABLE `tbllearningmaterials` (
  `id` int(11) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `images` varchar(256) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `sender_name` varchar(60) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `name` varchar(60) NOT NULL,
  `file` varchar(256) NOT NULL,
  `date_uploaded` varchar(50) NOT NULL,
  `description` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllearningmaterials`
--

INSERT INTO `tbllearningmaterials` (`id`, `class_name`, `images`, `sender_id`, `sender_name`, `subject`, `name`, `file`, `date_uploaded`, `description`) VALUES
(1, 'BSCS3-A', 'uploads/947780kitten_cat_hat_playful_funny.jpg', 6, 'Rivarez, Retzel Ricafranca', 'CS221 - Database Structure 2', 'sample', 'uploads/Grade 8 - 1st Quarter.docx', '2018/10/07 07:10:21pm', 'sample description'),
(3, 'BSCS4-A', 'uploads/947780kitten_cat_hat_playful_funny.jpg', 6, 'Rivarez, Retzel Ricafranca', 'CS221-Database Structure 2', 'sampl3', 'uploads/93097load here.docx', '2018/10/14 08:03:37pm', 'sample3'),
(4, 'BSCS4-A', 'uploads/107282images (5).jpg', 0, 'Monica, Maria  Deca', 'HUM411-Humanities 2', 'sample1', 'uploads/503460feasib study.docx', '2018/10/14 08:10:03pm', 'sample1'),
(5, 'BSCS4-A', 'uploads/947780kitten_cat_hat_playful_funny.jpg', 6, 'Rivarez, Retzel Ricafranca', 'CS221-Database Structure 2', 'sample4', 'uploads/6527438-bit character.xlsx', '2018/10/14 11:21:54pm', 'sample description'),
(6, 'BSCS4-A', 'uploads/107282images (5).jpg', 0, 'Monica, Maria  Deca', 'HUM411-Humanities 2', 'Grade 7 Curriculum', 'uploads/658525grade 7 - 1st quarter.doc', '2018/10/14 11:50:48pm', 'please read carefully'),
(7, 'BSCS3-A', 'uploads/947780kitten_cat_hat_playful_funny.jpg', 6, 'Rivarez, Retzel Ricafranca', 'CS221-Database Structure 2', 'sample name here', 'uploads/421668e-learning_success_determinants_brazilian_empirical_study.pdf', '2018/10/15 10:35:26pm', ' sample description here'),
(8, 'St.Jude', 'uploads/399328356325cat_surprise_look_striped.jpg', 0, 'Sotto, Victor Reyes', 'none-Komunikasyon at Pananaliksik sa Wika at Kulturang Filipino', 'name of file here', 'uploads/782998budget_of_work_arts.docx', '2018/10/16 12:59:34am', 'description here'),
(9, 'BSCS4-A', 'uploads/947780kitten_cat_hat_playful_funny.jpg', 6, 'Rivarez, Retzel Ricafranca', 'CS221-Database Structure 2', 'Example Name', 'uploads/112806doc1.docx', '2018/10/29 02:01:58am', ' Example Description');

-- --------------------------------------------------------

--
-- Table structure for table `tblnewsfeed`
--

CREATE TABLE `tblnewsfeed` (
  `newsfeed_id` int(11) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `message` varchar(500) NOT NULL,
  `images` varchar(256) NOT NULL,
  `date` varchar(256) NOT NULL,
  `sender_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblnewsfeed`
--

INSERT INTO `tblnewsfeed` (`newsfeed_id`, `subject`, `message`, `images`, `date`, `sender_name`) VALUES
(13, 'Thesis Defense', 'yung nakita mo sa calendar 2 weeks na lang defense nyo na  tapos di ka pa rin kayo tapos! hahaha', 'uploads/770800cat_surprise_look_striped.jpg', '2018/10/07 07:10:21pm', 'administrator'),
(14, 'College Semestral Break', 'To All College Student. Your semestral break is October 27 - Nov 4, 2018. \r\nEnjoy your semester break!', 'uploads/94761153107download.jpg', '2018/10/07 08:49:49pm', 'administrator'),
(16, 'Thesis Defense ', 'To all computer Science student. The thesis defense will be on october 25, 2018. Please be prepared! Thank you.', 'uploads/301725122833cainta.jpg', '2018/10/08 11:22:26pm', 'administrator'),
(17, 'Thesis Defense', 'To all computer science student. The final defense was exceded to november 26, 2018. Please fill all the necessary requirments. Thank you.', 'uploads/46083270729cainta.jpg', '2018/10/20 10:52:44am', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tblnotification`
--

CREATE TABLE `tblnotification` (
  `notification_id` int(11) NOT NULL,
  `images` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(256) NOT NULL,
  `date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblnotification`
--

INSERT INTO `tblnotification` (`notification_id`, `images`, `name`, `description`, `date_time`) VALUES
(2, 'uploads/325498bunny.jpg', 'Rivarez, Retzel Ricafranca', 'Changed his/her profile picture.', '2018/11/20 08:56:08pm'),
(3, 'uploads/547657kitten_cat_hat_playful_funny.jpg', 'Rivarez, Retzel Ricafranca', 'Changed his/her profile picture.', '2018/11/21 12:34:25am'),
(4, 'uploads/462898bunny.jpg', 'Rivarez, Retzel Ricafranca', 'Changed his/her profile picture.', '2018/11/22 10:53:14am');

-- --------------------------------------------------------

--
-- Table structure for table `tblquiz`
--

CREATE TABLE `tblquiz` (
  `quiz_id` int(11) NOT NULL,
  `quizsaved_id` int(20) NOT NULL,
  `question` varchar(256) NOT NULL,
  `option1` varchar(256) NOT NULL,
  `option2` varchar(256) NOT NULL,
  `option3` varchar(256) NOT NULL,
  `option4` varchar(256) NOT NULL,
  `correct_answer` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblquiz`
--

INSERT INTO `tblquiz` (`quiz_id`, `quizsaved_id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_answer`) VALUES
(2, 1, 'Kailan matatapos si lester rivarez sa kakaprogram nya para sa thesis?', 'November 10, 2018', 'November 15, 2018', 'November 20, 2018', 'November 15, 2018', 'November 15, 2018'),
(3, 1, 'What is HTML stands for?', 'hypertext markup link', 'hypertext markup location', 'hypertext markup language', 'hypertext module language', 'hypertext markup language'),
(4, 1, 'May 13th month pay bang makukuha si Lester Rivarez?', 'Meron', 'Wala', 'Umaasa ka lang', 'itanong mo na lang sa boss mo', 'itanong mo na lang sa boss mo'),
(5, 1, 'Makakagraudate ba si Lester Rivarez?', 'Oo', 'Hindi', 'Siguro', 'itanong mo na lang sa prof mo!', 'itanong mo na lang sa prof mo!'),
(6, 2, 'Sino pumatay kay rizal?', 'Jude', 'Jm', 'Lester', 'All of the above', 'All of the above'),
(7, 2, 'What is USB stands for?', 'Universal Studio Base', 'Universal Serial Bus', 'Universal Soldier Bus', 'not of the above', 'Universal Serial Bus'),
(10, 2, 'what is my age?', '20', '21', '29', '18', '21'),
(11, 2, 'what is http stands for?', 'hypertext markup language', 'hypertext make language', 'hypertext movie language', 'hipnosis moestres lavader', 'hypertext markup language'),
(13, 1, 'papasa ba kami sa thesis 2?', 'Ewan', 'oo', 'hindi', 'walang pakialam', 'ewan'),
(15, 6, 'sample question', 'option1', 'option2', 'option3', 'option4', 'option2'),
(16, 6, 'sino pumatay kay jose riza?', 'Jude', 'Jm', 'Wendel', 'Carlo', 'Jude'),
(17, 6, 'Saan masaya mamasyal?', 'luneta park', 'boracay', 'manila bay', 'pasig river', 'boracay'),
(18, 7, 'sample1 question', '2', '3', '4', '5', '5'),
(19, 7, 'sample question 2', '3', '6', '9 ', '12', '12'),
(20, 7, 'sample 3 question', '01', '10', '223', '22', '22'),
(21, 7, 'sample 4 question', 'a', 'b', 'c', 'd', 'd'),
(22, 9, 'bscs3a sample question 1', 'a', 'b', 'c', 'd', 'd'),
(23, 9, 'sample 2', 'c', 'd', 'e', 'f', 'f'),
(24, 9, 'sample 3', 'h', 'i', 'j', 'k', 'k'),
(25, 1, 'may idedefense ba?', 'syempre wala', 'baka meron', 'bala kayu dyan', 'depende sa kagrupo', 'bala kayu dyan'),
(27, 6, 'what is lester favorite color?', 'black', 'red', 'yellow', 'blue', 'black'),
(28, 1, 'What is the basic unit of matter?', 'h2o', 'co', 'na', 'ca', 'h2o'),
(29, 1, 'what is lester favorite pet?', 'dog', 'cat', 'bird', 'fish', 'dog'),
(30, 10, 'sample question', '1', '2', '3', '4', '4'),
(31, 10, 'sample questionaire 2', 'option 1', 'option 2', 'option 3', 'option 4', 'option 3'),
(32, 1, 'what is my age?', '10', '30', '40', '21', '21'),
(33, 15, 'ano pumatay kay rizal?', 'baril', 'salita', 'sulat', 'bala', 'bala');

-- --------------------------------------------------------

--
-- Table structure for table `tblsavedquiz`
--

CREATE TABLE `tblsavedquiz` (
  `id` int(11) NOT NULL,
  `uploader_id` int(11) NOT NULL,
  `uploader_name` varchar(100) NOT NULL,
  `quiz_title` varchar(100) NOT NULL,
  `quiz_description` varchar(200) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `date_time` varchar(100) NOT NULL,
  `quiz_duration` int(11) NOT NULL,
  `enabled` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsavedquiz`
--

INSERT INTO `tblsavedquiz` (`id`, `uploader_id`, `uploader_name`, `quiz_title`, `quiz_description`, `class_name`, `subject`, `date_time`, `quiz_duration`, `enabled`) VALUES
(1, 6, 'Retzel Ricafranca Rivarez', 'Sample Quiz', 'sample description', 'BSCS3-A', 'CS221 - Database Structure 2', '2018/11/09 02:03:17pm', 10, 'true'),
(6, 6, 'Retzel Ricafranca Rivarez', 'quiz 3', 'pakireview ng dinownload ko', 'BSCS4-A', 'CS221 - Database Structure 2', '2018/11/10 01:03:56pm', 50, 'true'),
(7, 6, 'Retzel Ricafranca Rivarez', 'Quiz 4', 'Please review the lesson . File name : reviewer.ppt', 'BSCS3-A', 'CS221 - Database Structure 2', '2018/11/13 11:07:37pm', 20, 'true'),
(8, 6, 'Retzel Ricafranca Rivarez', 'Quiz 5', 'Sample Description', 'BSCS4-A', 'CS221 - Database Structure 2', '2018/11/13 11:11:00pm', 30, 'true'),
(10, 4, 'Maria  Deca Monica', 'Quiz 1', 'mag review', 'BSCS4-A', 'HUM411 - Humanities 2', '2018/11/15 02:47:43am', 20, 'true'),
(11, 4, 'Maria  Deca Monica', 'quiz 2', 'sample 2', 'BSCS4-A', 'HUM411 - Humanities 2', '2018/11/21 12:59:53am', 10, 'false'),
(12, 6, 'Retzel Ricafranca Rivarez', 'Quiz 1', 'downloaad ', 'BSCS4-A', 'CS221 - Database Structure 2', '2018/11/21 09:21:53pm', 59, 'true'),
(13, 6, 'Retzel Ricafranca Rivarez', 'Quiz 3', 'sample', 'BSCS3-A', 'CS221 - Database Structure 2', '2018/11/21 09:23:11pm', 20, 'true'),
(14, 6, 'Retzel Ricafranca Rivarez', 'sample title', 'sample description', 'BSCS3-A', 'CS221 - Database Structure 2', '2018/11/21 09:25:51pm', 20, 'true'),
(15, 5, 'Jethro Dikoalam Gamad', 'Quiz 1', 'pakidownload ng filenmae: review.pptx. ', 'BSCS4-A', 'CS411 - Automata', '2018/11/22 12:39:18pm', 20, 'false'),
(16, 5, 'Jethro Dikoalam Gamad', 'Quiz 2', 'pakidownload ng file: name: automata.pptx and review ', 'BSCS4-A', 'CS411 - Automata', '2018/11/22 12:41:48pm', 30, 'true');

-- --------------------------------------------------------

--
-- Table structure for table `tblschoolyear`
--

CREATE TABLE `tblschoolyear` (
  `id` int(20) NOT NULL,
  `schoolyear` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblschoolyear`
--

INSERT INTO `tblschoolyear` (`id`, `schoolyear`) VALUES
(1, '2017-2018'),
(2, '2018-2019'),
(5, '2019-2020'),
(6, '2020-2021'),
(8, '2021-2022');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `id` int(50) NOT NULL,
  `images` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `mname` varchar(256) NOT NULL,
  `contact` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `student_number` int(50) NOT NULL,
  `or_number` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`id`, `images`, `lname`, `fname`, `mname`, `contact`, `address`, `username`, `password`, `student_number`, `or_number`) VALUES
(4, 'uploads/606535238051kitten_cat_hat_playful_funny.jpg', 'Igtiben', 'Jm', 'Eusebio', '098998', 'estrella', 'jm', 'jm', 20181234, 67890),
(6, 'uploads/193646107282images (5).jpg', 'Musico', 'Jude', 'M.', '0987655678', 'parola', 'jude', 'jude', 2015232, 9789),
(7, 'uploads/657129115057car_lights.jpg', 'Cimafranca', 'cheryl', 'F.', '0875567889', 'marik', 'cheryl', 'cheryl', 0, 0),
(8, 'uploads/609534842325national_day_of_cats.jpg', 'Sarmiento', 'Andy', 'S', '09876555', 'cainta', 'adviser', 'adviser', 20161234, 12898),
(9, 'uploads/639777199093car_lights.jpg', 'Brua', 'Carlo', 'D.', '009876', 'sta. Lucia', 'carlo', 'carlo', 20151234, 1234567),
(10, 'uploads/231419jm.jpg', 'Bryle', 'Ballion', 'B.', '097665444556', 'floodway', '2015-2345', 'bryle', 2016231, 4321),
(15, 'uploads/878182cat_surprise_look_striped.jpg', 'Rivrarez', 'Lester', 'Ricafranca', '09089897', 'pasig', 'lester', '12345', 0, 0),
(16, 'uploads/341970cat_face_furry_eyes.jpg', 'Gallono', 'June', 'Pio', '0997665', 'cainta rizal', 'user', '123456', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudentclass`
--

CREATE TABLE `tblstudentclass` (
  `studclass_id` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `year_level` varchar(20) NOT NULL,
  `studentid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `teacherid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudentclass`
--

INSERT INTO `tblstudentclass` (`studclass_id`, `classid`, `year_level`, `studentid`, `subjectid`, `teacherid`) VALUES
(3, 2, '2nd College', 4, 3, 6),
(4, 2, '1st College', 6, 4, 4),
(5, 3, '1st College', 6, 6, 2),
(6, 3, '1st College', 9, 4, 4),
(7, 2, 'Grade 8', 4, 1, 4),
(8, 1, 'Grade 8', 7, 6, 2),
(10, 1, 'Grade 7', 16, 8, 2),
(11, 5, '4th College', 9, 3, 6),
(12, 4, '4th College', 10, 1, 4),
(13, 4, '3rd College', 7, 3, 6),
(14, 2, 'Grade 9', 9, 8, 7),
(15, 2, 'Grade 9', 16, 8, 7),
(16, 2, 'Grade 9', 7, 8, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `s_id` int(11) NOT NULL,
  `subjectname` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `yearlevel` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`s_id`, `subjectname`, `Description`, `yearlevel`, `semester`) VALUES
(1, 'ENG 121', 'English literature 2', '1st college', '2nd semester'),
(3, 'CS221', 'Database Structure 2', '2nd College', '1st semester'),
(4, 'HUM411', 'Humanities 2', '4th College', '2nd semester'),
(5, 'CS411', 'Automata', '4th College', '2nd semester'),
(6, 'FIL112', 'Wika', '1st college', '1st semester'),
(8, 'none', 'Komunikasyon at Pananaliksik sa Wika at Kulturang Filipino', 'Grade 11', '1st semester');

-- --------------------------------------------------------

--
-- Table structure for table `tblteacher`
--

CREATE TABLE `tblteacher` (
  `id` int(50) NOT NULL,
  `images` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `mname` varchar(256) NOT NULL,
  `contact` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblteacher`
--

INSERT INTO `tblteacher` (`id`, `images`, `lname`, `fname`, `mname`, `contact`, `address`, `username`, `password`) VALUES
(2, 'uploads/399328356325cat_surprise_look_striped.jpg', 'Sotto', 'Victor', 'Reyes', '098765', 'cainta', 'teacher', 'teacher2'),
(4, 'uploads/107282images (5).jpg', 'Monica', 'Maria ', 'Deca', '09875554', 'cainta Rizal', 'username', 'pass'),
(5, 'uploads/291395national_day_of_cats.jpg', 'Gamad', 'Jethro', 'Dikoalam', '098765556', 'Cainta Rizal', 'jeth', 'jeth'),
(6, 'uploads/462898bunny.jpg', 'Rivarez', 'Retzel', 'Ricafranca', '09876668', 'Cainta Rizal', 'retzel', 'retzel'),
(7, 'uploads/306918kitten_cat_hat_playful_funny.jpg', 'Reyes', 'Antonio', 'Luna', '0978786544', 'parola cainta Rizal', 'teacher5', 'teacher5');

-- --------------------------------------------------------

--
-- Table structure for table `tblteacheradvisory`
--

CREATE TABLE `tblteacheradvisory` (
  `teachad_id` int(11) NOT NULL,
  `teacherid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblteacheradvisory`
--

INSERT INTO `tblteacheradvisory` (`teachad_id`, `teacherid`, `classid`, `subjectid`) VALUES
(1, 6, 4, 3),
(2, 5, 5, 5),
(3, 4, 5, 4),
(4, 6, 5, 3),
(5, 4, 5, 1),
(6, 2, 1, 6),
(7, 2, 3, 8),
(8, 7, 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tblteacherforum`
--

CREATE TABLE `tblteacherforum` (
  `id` int(11) NOT NULL,
  `message` varchar(256) NOT NULL,
  `date_sent` varchar(100) NOT NULL,
  `sender_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblteacherforum`
--

INSERT INTO `tblteacherforum` (`id`, `message`, `date_sent`, `sender_id`) VALUES
(1, 'sample', 'july 8 , 1997', 6),
(2, 'kamusta?', '2018/11/22 12:46:35am', 6),
(3, 'ito ok lang', '2018/11/22 12:48:44am', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbluserreg`
--

CREATE TABLE `tbluserreg` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `middle_name` varchar(250) NOT NULL,
  `last_ name` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_ac` varchar(250) NOT NULL,
  `user_estatus` tinyint(4) NOT NULL,
  `pc_code` varchar(250) NOT NULL,
  `new_pass` varchar(250) NOT NULL,
  `eu_code` varchar(250) NOT NULL,
  `new_email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluserreg`
--

INSERT INTO `tbluserreg` (`id`, `first_name`, `middle_name`, `last_ name`, `user_name`, `user_email`, `user_password`, `user_ac`, `user_estatus`, `pc_code`, `new_pass`, `eu_code`, `new_email`) VALUES
(1, 'Lester', 'Ricafranca', 'Rivarez', '2018143', 'lesterrivarez19@gmail.com', 'lester', '12345', 0, 'abc', 'rivarez', 'abc', 'lesterrivarez19@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblyearlevel`
--

CREATE TABLE `tblyearlevel` (
  `id` int(11) NOT NULL,
  `yearlevel` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblyearlevel`
--

INSERT INTO `tblyearlevel` (`id`, `yearlevel`, `description`) VALUES
(1, '1st college', 'BSCS1-B'),
(2, 'Grade 7', 'St. Benedict'),
(4, 'Grade 7', 'St. Jude'),
(5, 'Grade 8', 'St. John Paul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclass`
--
ALTER TABLE `tblclass`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbllearningmaterials`
--
ALTER TABLE `tbllearningmaterials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblnewsfeed`
--
ALTER TABLE `tblnewsfeed`
  ADD PRIMARY KEY (`newsfeed_id`);

--
-- Indexes for table `tblnotification`
--
ALTER TABLE `tblnotification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `tblquiz`
--
ALTER TABLE `tblquiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `tblsavedquiz`
--
ALTER TABLE `tblsavedquiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblschoolyear`
--
ALTER TABLE `tblschoolyear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudentclass`
--
ALTER TABLE `tblstudentclass`
  ADD PRIMARY KEY (`studclass_id`);

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tblteacher`
--
ALTER TABLE `tblteacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblteacheradvisory`
--
ALTER TABLE `tblteacheradvisory`
  ADD PRIMARY KEY (`teachad_id`);

--
-- Indexes for table `tblteacherforum`
--
ALTER TABLE `tblteacherforum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluserreg`
--
ALTER TABLE `tbluserreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblyearlevel`
--
ALTER TABLE `tblyearlevel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblclass`
--
ALTER TABLE `tblclass`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbllearningmaterials`
--
ALTER TABLE `tbllearningmaterials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tblnewsfeed`
--
ALTER TABLE `tblnewsfeed`
  MODIFY `newsfeed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tblnotification`
--
ALTER TABLE `tblnotification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblquiz`
--
ALTER TABLE `tblquiz`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tblsavedquiz`
--
ALTER TABLE `tblsavedquiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tblschoolyear`
--
ALTER TABLE `tblschoolyear`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tblstudentclass`
--
ALTER TABLE `tblstudentclass`
  MODIFY `studclass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tblteacher`
--
ALTER TABLE `tblteacher`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tblteacheradvisory`
--
ALTER TABLE `tblteacheradvisory`
  MODIFY `teachad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tblteacherforum`
--
ALTER TABLE `tblteacherforum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbluserreg`
--
ALTER TABLE `tbluserreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblyearlevel`
--
ALTER TABLE `tblyearlevel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
