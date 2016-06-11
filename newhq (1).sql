-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2016 at 08:53 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newhq`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesslevel`
--

CREATE TABLE IF NOT EXISTS `accesslevel` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accesslevel`
--

INSERT INTO `accesslevel` (`id`, `name`) VALUES
(4, 'Employee'),
(1, 'HR');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `id` int(11) NOT NULL,
  `androidtext` varchar(255) NOT NULL,
  `iostext` varchar(255) NOT NULL,
  `pem` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `androidtext`, `iostext`, `pem`, `name`) VALUES
(1, 'AIzaSyAtK86s_4J4gyZM9AHpxtHXGp59UDqSifs', '1234', '', 'Push Notification');

-- --------------------------------------------------------

--
-- Table structure for table `emailer`
--

CREATE TABLE IF NOT EXISTS `emailer` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emailer`
--

INSERT INTO `emailer` (`id`, `username`, `password`) VALUES
(1, 'd2lsbG5ldmVyZ3Jvd3Vw', 'd29obGlnMTIz');

-- --------------------------------------------------------

--
-- Table structure for table `hq_branch`
--

CREATE TABLE IF NOT EXISTS `hq_branch` (
  `id` int(11) NOT NULL,
  `language` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `branchid` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hq_conclusion`
--

CREATE TABLE IF NOT EXISTS `hq_conclusion` (
  `id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hq_conclusion`
--

INSERT INTO `hq_conclusion` (`id`, `order`, `name`) VALUES
(1, 1, 'Personal values'),
(2, 2, 'What an individual believes in'),
(3, 3, 'Managing time with respect to exercising'),
(4, 4, 'Managing time with respect to food habits'),
(5, 5, 'Vacations and weekends'),
(6, 6, 'Balancing physical and mental health'),
(7, 7, 'Managing deadlines'),
(8, 8, 'Managing stressful situations'),
(9, 9, 'Managing stressful situations'),
(10, 10, 'Awareness about policies in organization'),
(11, 11, 'Awareness about policies in organization'),
(12, 12, 'Views towards workplace'),
(13, 13, 'Views towards workplace'),
(14, 14, 'Views toward the Leadership team'),
(15, 15, 'Views toward the Leadership team'),
(16, 16, 'Handling work when someone is unable to come to  office/Confidence factor at work'),
(17, 17, 'Reviews and meetings'),
(18, 18, 'Interactions with the boss'),
(19, 19, 'Views towards the workplace'),
(20, 20, 'Telling others about work'),
(21, 21, 'Telling others about work'),
(22, 22, 'Telling others about work/Recommending your workplace'),
(23, 23, ''),
(24, 24, 'Studying besides work'),
(25, 25, 'Views towards workplace'),
(26, 26, 'Balance between rewards and review'),
(27, 27, 'Having a career path');

-- --------------------------------------------------------

--
-- Table structure for table `hq_conclusionfinalsuggestion`
--

CREATE TABLE IF NOT EXISTS `hq_conclusionfinalsuggestion` (
  `id` int(11) NOT NULL,
  `conclusion` varchar(255) NOT NULL,
  `conclusionsuggestion` text NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hq_conclusionfinalsuggestion`
--

INSERT INTO `hq_conclusionfinalsuggestion` (`id`, `conclusion`, `conclusionsuggestion`, `message`, `timestamp`) VALUES
(1, 'first', 'first desc', 'Thankyou', '2016-03-28 13:14:50');

-- --------------------------------------------------------

--
-- Table structure for table `hq_conclusionquestion`
--

CREATE TABLE IF NOT EXISTS `hq_conclusionquestion` (
  `id` int(11) NOT NULL,
  `conclusion` int(11) NOT NULL,
  `question` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hq_conclusionquestion`
--

INSERT INTO `hq_conclusionquestion` (`id`, `conclusion`, `question`) VALUES
(1, 1, 1),
(2, 1, 9),
(3, 2, 1),
(4, 2, 10),
(5, 3, 2),
(6, 3, 13),
(7, 4, 2),
(8, 4, 16),
(9, 5, 3),
(10, 5, 11),
(11, 6, 4),
(12, 6, 14),
(13, 7, 4),
(14, 7, 15),
(15, 8, 4),
(16, 8, 26),
(17, 9, 4),
(18, 9, 6),
(19, 10, 29),
(20, 10, 23),
(21, 11, 30),
(22, 11, 23),
(23, 12, 31),
(24, 12, 20),
(25, 13, 31),
(26, 13, 12),
(27, 14, 32),
(28, 14, 25),
(29, 15, 32),
(30, 15, 8),
(31, 16, 27),
(32, 16, 34),
(33, 17, 28),
(34, 17, 17),
(35, 18, 18),
(36, 18, 36),
(37, 19, 19),
(38, 19, 12),
(39, 20, 5),
(40, 20, 38),
(41, 21, 5),
(42, 21, 21),
(43, 22, 7),
(44, 22, 38),
(45, 23, 37),
(46, 23, 7),
(47, 24, 40),
(48, 24, 35),
(49, 25, 39),
(50, 25, 12),
(51, 26, 22),
(52, 26, 28),
(53, 27, 24),
(54, 27, 33);

-- --------------------------------------------------------

--
-- Table structure for table `hq_conclusionsuggestion`
--

CREATE TABLE IF NOT EXISTS `hq_conclusionsuggestion` (
  `conclusion` int(11) NOT NULL,
  `suggestion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hq_conclusionsuggestion`
--

INSERT INTO `hq_conclusionsuggestion` (`conclusion`, `suggestion`) VALUES
(1, 'test 5635435'),
(2, 'test 3'),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, ''),
(13, ''),
(14, ''),
(15, ''),
(16, ''),
(17, ''),
(18, ''),
(19, ''),
(20, ''),
(21, ''),
(22, ''),
(23, ''),
(24, ''),
(25, ''),
(26, ''),
(27, '');

-- --------------------------------------------------------

--
-- Table structure for table `hq_content`
--

CREATE TABLE IF NOT EXISTS `hq_content` (
  `id` int(11) NOT NULL,
  `pillar` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hq_content`
--

INSERT INTO `hq_content` (`id`, `pillar`, `image`, `timestamp`, `text`) VALUES
(1, 4, 'download_(1)1.jpg', '2015-10-31 09:24:48', 'abcdafr');

-- --------------------------------------------------------

--
-- Table structure for table `hq_department`
--

CREATE TABLE IF NOT EXISTS `hq_department` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `deptid` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hq_department`
--

INSERT INTO `hq_department` (`id`, `name`, `deptid`) VALUES
(1, 'HR', 'IT-12'),
(2, 'Marketing', 'dept1'),
(3, 'Finance', 'M12111'),
(4, 'Legal', ''),
(5, 'Finance', ''),
(6, 'HR', ''),
(7, 'Operations', ''),
(8, 'BD', ''),
(9, 'Finance ', ''),
(10, '', ''),
(11, 'IT', '');

-- --------------------------------------------------------

--
-- Table structure for table `hq_designation`
--

CREATE TABLE IF NOT EXISTS `hq_designation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hq_designation`
--

INSERT INTO `hq_designation` (`id`, `name`, `language`) VALUES
(1, 'HR Associate', '0'),
(2, 'Senior Design Associate', ''),
(3, 'Client Associate', '0'),
(4, 'Senior Client Associate', ''),
(5, 'Chief Fun Officer', ''),
(6, 'Design Associate', ''),
(7, 'Sr. Manager', ''),
(8, 'Developer', '');

-- --------------------------------------------------------

--
-- Table structure for table `hq_options`
--

CREATE TABLE IF NOT EXISTS `hq_options` (
  `id` int(11) NOT NULL,
  `question` int(11) NOT NULL,
  `representation` int(11) NOT NULL,
  `actualorder` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `order` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `optiontext` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=213 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hq_options`
--

INSERT INTO `hq_options` (`id`, `question`, `representation`, `actualorder`, `image`, `order`, `weight`, `optiontext`, `text`) VALUES
(1, 1, 1, 0, '401.png', '', '12.5', 'Getting recognized', 'Getting recognized'),
(3, 1, 1, 0, '402.png', '', '12.5', 'Enough money', 'Enough money'),
(4, 1, 1, 0, '403.png', '', '12.5', 'A happy workplace', 'A happy workplace'),
(5, 1, 1, 0, '404.png', '', '12.5', 'Time with family & friends', 'Time with family & friends'),
(6, 1, 1, 0, '405.png', '', '12.5', 'Success', 'Success'),
(7, 1, 1, 0, '406.png', '', '12.5', 'Independence', 'Independence'),
(8, 1, 1, 0, '407.png', '', '12.5', 'Support', 'Support'),
(9, 1, 1, 0, '408.png', '', '12.5', 'Community Service', 'Community Service'),
(10, 2, 1, 0, '12.png', '', '40', 'I take the same bus back home everyday', 'I take the same bus back home everyday'),
(11, 2, 1, 0, '11.png', '', '10', 'I secretly have a bunk bed in office', 'I secretly have a bunk bed in office'),
(12, 2, 1, 0, '9.png', '', '20', 'I wasn''t able to attend the last family function', 'I wasn''t able to attend the last family function'),
(13, 2, 1, 0, '10.png', '', '30', 'I manage to see the sun set almost everyday', 'I manage to see the sun set almost everyday'),
(14, 3, 1, 0, '15.png', '', '40', 'I only spend time with my family.', 'I only spend time with my family.'),
(15, 3, 1, 0, '14.png', '', '30', 'I manage to have fun but get some work done.', 'I manage to have fun but get some work done.'),
(16, 3, 1, 0, '16.png', '', '20', 'I do end up working when I am on a vacation.', 'I do end up working when I am on a vacation.'),
(17, 3, 1, 0, '13.png', '', '10', 'What vacation? There is so much work to do.', 'What vacation? There is so much work to do.'),
(18, 4, 1, 0, '17.png', '', '40', 'One thing at a time it is!', 'One thing at a time it is!'),
(19, 4, 1, 0, '20.png', '', '30', 'It''s simple. I manage both!', 'It''s simple. I manage both!'),
(20, 4, 1, 0, '18.png', '', '20', 'I am ''sooo out of practice''', 'I am ''sooo out of practice'''),
(21, 4, 1, 0, '19.png', '', '10', 'I can''t help thinking about work (Work in thought bubble)', 'I can''t help thinking about work (Work in thought bubble)'),
(22, 5, 1, 0, '21.png', '', '40', 'It''s going really well!', 'It''s going really well!'),
(23, 5, 1, 0, '23.png', '', '30', 'We all have good days and bad days.', 'We all have good days and bad days.'),
(24, 5, 1, 0, '24.png', '', '20', 'Some things need to change.', 'Some things need to change.'),
(25, 5, 1, 0, '22.png', '', '10', 'Let''s not even talk about work.', 'Let''s not even talk about work.'),
(26, 6, 1, 0, '26.png', '', '40', 'I''m not stressed. I get to learn something new.', 'I''m not stressed. I get to learn something new.'),
(27, 6, 1, 0, '28.png', '', '30', 'Not really an issue because I can always reach out to someone.', 'Not really an issue because I can always reach out to someone.'),
(28, 6, 1, 0, '25.png', '', '20', 'I''m not sure of who I can go to for help.', 'I''m not sure of who I can go to for help.'),
(29, 6, 1, 0, '27.png', '', '10', 'I don''t know what to do.', 'I don''t know what to do.'),
(30, 7, 1, 0, '29.png', '', '40', 'Sure! You should definitely apply. Send in your CV.', 'Sure! You should definitely apply. Send in your CV.'),
(31, 7, 1, 0, '32.png', '', '30', 'Not a bad idea.', 'Not a bad idea.'),
(33, 7, 1, 0, '31.png', '', '10', 'I''m not sure if you should apply right now.', 'I''m not sure if you should apply right now.'),
(34, 8, 1, 0, '35.png', '', '40', 'Yes, I know! Wow, that''s such good news!', 'Yes, I know! Wow, that''s such good news!'),
(35, 8, 1, 0, '33.png', '', '30', 'That''s nice, I guess.', 'That''s nice, I guess.'),
(36, 8, 1, 0, '36.png', '', '20', 'Okay. I don''t have much to say about this.', 'Okay. I don''t have much to say about this.'),
(37, 8, 1, 0, '34.png', '', '10', 'Why would someone reward us?', 'Why would someone reward us?'),
(38, 9, 1, 0, '38.png', '', '12.5', 'Freedom', 'Freedom'),
(39, 9, 1, 0, '39.png', '', '12.5', 'Integrity', 'Integrity'),
(40, 9, 1, 0, '43.png', '', '12.5', 'Team Work', 'Team Work'),
(41, 9, 1, 0, '42.png', '', '12.5', 'Relationships', 'Relationships'),
(42, 9, 1, 0, '40.png', '', '12.5', 'Job Security', 'Job Security'),
(43, 9, 1, 0, '37.png', '', '12.5', 'Recognition', 'Recognition'),
(44, 9, 1, 0, '41.png', '', '12.5', 'Social responsibility', 'Social responsibility'),
(45, 9, 1, 0, '44.png', '', '12.5', 'Personal growth', 'Personal growth'),
(46, 10, 1, 0, '48.png', '', '12.5', 'Respect from others', 'Respect from others'),
(47, 10, 1, 0, '45.png', '', '12.5', 'Appreciation', 'Appreciation'),
(48, 10, 1, 0, '52.png', '', '12.5', 'Financial stability', 'Financial stability'),
(49, 10, 1, 0, '50.png', '', '12.5', 'Social network (Friends and Family)', 'Social network (Friends and Family)'),
(50, 10, 1, 0, '49.png', '', '12.5', 'Helping the society', 'Helping the society'),
(51, 10, 1, 0, '46.png', '', '12.5', 'Pursuing hobbies', 'Pursuing hobbies'),
(52, 10, 1, 0, '47.png', '', '12.5', 'Work', 'Work'),
(53, 10, 1, 0, '51.png', '', '12.5', 'Good health', 'Good health'),
(54, 11, 1, 0, '54.png', '', '40', 'I can''t wait to have my morning cup of tea and start the day!', 'I can''t wait to have my morning cup of tea and start the day!'),
(55, 11, 1, 0, '55.png', '', '30', 'I need to check my mail first thing in the morning.', 'I need to check my mail first thing in the morning.'),
(56, 11, 1, 0, '56.png', '', '20', 'It''s a little hard to get out of bed.', 'It''s a little hard to get out of bed.'),
(57, 11, 1, 0, '53.png', '', '10', 'Can I go back in time to have the weekend again?', 'Can I go back in time to have the weekend again?'),
(58, 13, 1, 0, '66.png', '', '40', 'I have an exercise routine that I follow.', 'I have an exercise routine that I follow.'),
(59, 13, 1, 0, '67.png', '', '30', 'I exercise when I can. It depends on work.', 'I exercise when I can. It depends on work.'),
(60, 13, 1, 0, '68.png', '', '20', 'I have the time. What exercise should I be doing?', 'I have the time. What exercise should I be doing?'),
(61, 13, 1, 0, '65.png', '', '10', 'Exercise? I wish I had the time.', 'Exercise? I wish I had the time.'),
(62, 14, 1, 0, '72.png', '', '10', '"I don''t know what to do."', '"I don''t know what to do."'),
(63, 14, 1, 0, '71.png', '', '40', '"This happens at work. I know how to deal with this."', '"This happens at work. I know how to deal with this."'),
(64, 14, 1, 0, '70.png', '', '30', '"I will talk to the Counsellor. That helps."', '"I will talk to the Counsellor. That helps."'),
(65, 14, 1, 0, '69.png', '', '20', '"I need help. Who should I talk to?"', '"I need help. Who should I talk to?"'),
(66, 15, 1, 0, '76.png', '', '30', 'Let me finish what I''m doing. I''ll start once that is done.', 'Let me finish what I''m doing. I''ll start once that is done.'),
(67, 15, 1, 0, '75.png', '', '40', 'I need to finish this today. Let''s do this!', 'I need to finish this today. Let''s do this!'),
(68, 15, 1, 0, '74.png', '', '10', 'It''s due in the evening. Plenty of time left.', 'It''s due in the evening. Plenty of time left.'),
(69, 15, 1, 0, '73.png', '', '20', 'I can work on this while sending out those mails.', 'I can work on this while sending out those mails.'),
(70, 16, 1, 0, '80.png', '', '40', 'I follow a routine when I eat at work.', 'I follow a routine when I eat at work.'),
(71, 16, 1, 0, '79.png', '', '30', 'I eat whatever is available, even if its junk.', 'I eat whatever is available, even if its junk.'),
(72, 16, 1, 0, '78.png', '', '20', 'It''s faster and easier to have junk food.', 'It''s faster and easier to have junk food.'),
(73, 16, 1, 0, '77.png', '', '10', 'Eating in office? I wish I had the time!', 'Eating in office? I wish I had the time!'),
(74, 12, 1, 0, '57.png', '', '20', 'It matters to me', 'It matters to me'),
(75, 12, 1, 0, '58.png', '', '20', 'I get to learn something new', 'I get to learn something new'),
(76, 12, 1, 0, '61.png', '', '15', 'I like stability in life', 'I like stability in life'),
(77, 12, 1, 0, '59.png', '', '15', 'I love my team', 'I love my team'),
(78, 12, 1, 0, '64.png', '', '10', 'Money matters', 'Money matters'),
(79, 12, 1, 0, '60.png', '', '10', 'How else will people know me?', 'How else will people know me?'),
(80, 12, 1, 0, '62.png', '', '5', 'I have deadlines & targets', 'I have deadlines & targets'),
(81, 12, 1, 0, '63.png', '', '5', 'Why work?', 'Why work?'),
(82, 17, 1, 0, '84.png', '', '30', 'I am not sure of what to do. I can ask someone to tell me again though.', 'I am not sure of what to do. I can ask someone to tell me again though.'),
(83, 17, 0, 0, '83.png', '', '10', 'Please don''t pick me for this one.', 'Please don''t pick me for this one.'),
(84, 17, 1, 0, '82.png', '', '40', 'I know what to do. Not a problem.', 'I know what to do. Not a problem.'),
(85, 17, 1, 0, '81.png', '', '20', 'I don''t know what needs to be done. Who should I be asking?', 'I don''t know what needs to be done. Who should I be asking?'),
(86, 18, 1, 0, '87.png', '', '30', 'It''s a little awkward. What am I supposed to say?', 'It''s a little awkward. What am I supposed to say?'),
(87, 18, 1, 0, '85.png', '', '10', 'I would prefer to look at my phone.', 'I would prefer to look at my phone.'),
(88, 18, 1, 0, '86.png', '', '20', 'Why does the lift get stuck at a time like this? I don''t know what to do.', 'Why does the lift get stuck at a time like this? I don''t know what to do.'),
(89, 18, 1, 0, '88.png', '', '40', 'No problem! I get a chance to catch up with my boss.', 'No problem! I get a chance to catch up with my boss.'),
(90, 19, 1, 0, '92.png', '', '30', 'Some colleagues might want to be there.', 'Some colleagues might want to be there.'),
(91, 19, 1, 0, '91.png', '', '20', 'Colleagues for my party? Not so sure.', 'Colleagues for my party? Not so sure.'),
(92, 19, 1, 0, '90.png', '', '40', 'There are so many colleagues who would love to be there!', 'There are so many colleagues who would love to be there!'),
(93, 19, 1, 0, '89.png', '', '10', 'I am not sure of who I can call.', 'I am not sure of who I can call.'),
(94, 20, 1, 0, '98.png', '', '20', 'I''m part of a bigger family', 'I''m part of a bigger family'),
(95, 20, 1, 0, '100.png', '', '15', 'Normal', 'Normal'),
(96, 20, 1, 0, '99.png', '', '10', 'Like something wrong might happen', 'Like something wrong might happen'),
(97, 20, 1, 0, '93.png', '', '5', 'Like you don''t belong', 'Like you don''t belong'),
(98, 21, 1, 0, '104.png', '', '30', '"My colleagues were happy for me. Surprised my Boss didn''t say anything."', '"My colleagues were happy for me. Surprised my Boss didn''t say anything."'),
(99, 21, 1, 0, '103.png', '', '10', '"No one realized when I finished working on it."', '"No one realized when I finished working on it."'),
(100, 21, 1, 0, '102.png', '', '20', '"My colleagues were aware but didn''t really talk about it. Not such a big deal I guess."', '"My colleagues were aware but didn''t really talk about it. Not such a big deal I guess."'),
(101, 21, 1, 0, '101.png', '', '40', '"Everyone at work said I did a really good job!"', '"Everyone at work said I did a really good job!"'),
(102, 22, 1, 0, '108.png', '', '30', 'My rewards are at par with what the market offers', 'My rewards are at par with what the market offers'),
(103, 22, 1, 0, '107.png', '', '10', 'I''ve been rewarded much lesser than what the market offers', 'I''ve been rewarded much lesser than what the market offers'),
(104, 22, 1, 0, '106.png', '', '40', 'Wow! I''m a super achiever!', 'Wow! I''m a super achiever!'),
(105, 22, 1, 0, '105.png', '', '20', 'Not bad. Could have been better.', 'Not bad. Could have been better.'),
(106, 23, 1, 0, '111.png', '', '20', '"I don''t know too much about it. Who should I be asking?"', '"I don''t know too much about it. Who should I be asking?"'),
(107, 23, 1, 0, '112.png', '', '40', '"This happens often. I know all about it."', '"This happens often. I know all about it."'),
(108, 23, 1, 0, '109.png', '', '30', '"I know about this in brief. I got a mail this morning."', '"I know about this in brief. I got a mail this morning."'),
(109, 23, 1, 0, '110.png', '', '10', '"Appraisal Time? What''s it about?"', '"Appraisal Time? What''s it about?"'),
(110, 24, 1, 0, '116.png', '', '10', 'There are so many choices. It''s confusing.', 'There are so many choices. It''s confusing.'),
(111, 24, 1, 0, '115.png', '', '30', 'Am headed in the right direction.', 'Am headed in the right direction.'),
(112, 24, 1, 0, '114.png', '', '40', 'I''m doing what works for me!', 'I''m doing what works for me!'),
(113, 24, 1, 0, '113.png', '', '20', 'I am not sure if I am headed in the right direction.', 'I am not sure if I am headed in the right direction.'),
(114, 25, 1, 0, '120.png', '', '20', '"I don''t really know anything about it."', '"I don''t really know anything about it."'),
(115, 25, 1, 0, '119.png', '', '10', '"How does my life change?"', '"How does my life change?"'),
(116, 25, 1, 0, '118.png', '', '40', '"Yes, I know all about it. I know what needs to be done next too."', '"Yes, I know all about it. I know what needs to be done next too."'),
(117, 25, 1, 0, '117.png', '', '30', '"I know about what happened in the Meeting briefly."', '"I know about what happened in the Meeting briefly."'),
(118, 26, 1, 0, '124.png', '', '40', 'I have the rough notes with me. Let me make it again quickly.', 'I have the rough notes with me. Let me make it again quickly.'),
(119, 26, 1, 0, '123.png', '', '10', 'How could I delete that file? What was I thinking?', 'How could I delete that file? What was I thinking?'),
(120, 26, 1, 0, '122.png', '', '30', 'Let''s try and restart work.', 'Let''s try and restart work.'),
(121, 26, 1, 0, '121.png', '', '20', 'The presentation is in a few hours. What do I do?', 'The presentation is in a few hours. What do I do?'),
(122, 27, 1, 0, 'myteamtells.png', '', '20', 'My team tells me about what needs to be done next and how to go about it.', 'My team tells me about what needs to be done next and how to go about it.'),
(123, 27, 1, 0, 'icomplete.png', '', '40', 'I complete what has to be done on my own. Not a problem.', 'I complete what has to be done on my own. Not a problem.'),
(124, 27, 1, 0, 'myteamdoes.png', '', '10', 'My team does everything for me.', 'My team does everything for me.'),
(125, 27, 1, 0, 'ihandle.png', '', '30', 'I handle parts of the project with a colleague.', 'I handle parts of the project with a colleague.'),
(126, 28, 1, 0, '132.png', '', '40', 'Let''s have a look at our weekly updates to see how we have done.', 'Let''s have a look at our weekly updates to see how we have done.'),
(127, 28, 1, 0, '131.png', '', '30', 'Let me give you a brief summary for the month.', 'Let me give you a brief summary for the month.'),
(128, 28, 1, 0, '130.png', '', '20', 'This has not been one of our best months.', 'This has not been one of our best months.'),
(129, 28, 1, 0, '129.png', '', '10', 'There isn''t much to say about the month.', 'There isn''t much to say about the month.'),
(130, 29, 1, 0, '136.png', '', '30', '"They might ask us about it."', '"They might ask us about it."'),
(131, 29, 1, 0, '135.png', '', '40', '"Did you send in your feedback about how the policy can be changed? It helps!"', '"Did you send in your feedback about how the policy can be changed? It helps!"'),
(132, 29, 1, 0, '134.png', '', '10', '"We''ll know about the leave policy once it is changed."', '"We''ll know about the leave policy once it is changed."'),
(133, 29, 1, 0, '133.png', '', '20', '"I was asked about it. Do you think it matters?"', '"I was asked about it. Do you think it matters?"'),
(134, 30, 1, 0, '140.png', '', '30', '"I could give you a brief outline."', '"I could give you a brief outline."'),
(135, 30, 1, 0, '139.png', '', '20', '"You might want to ask someone else about that."', '"You might want to ask someone else about that."'),
(136, 30, 1, 0, '138.png', '', '10', '"Let''s not get into that right now."', '"Let''s not get into that right now."'),
(137, 30, 1, 0, '137.png', '', '40', '"Let me send you the mail with the information right away."', '"Let me send you the mail with the information right away."'),
(138, 31, 1, 0, '143.png', '', '12.5', 'My Chair', 'My Chair'),
(139, 31, 1, 0, '144.png', '', '12.5', 'Our cafeteria', 'Our cafeteria'),
(140, 31, 1, 0, '145.png', '', '12.5', 'Lighting', 'Lighting'),
(141, 31, 1, 0, '146.png', '', '12.5', 'Ventilation', 'Ventilation'),
(142, 31, 1, 0, '148.png', '', '12.5', 'Commute to work', 'Commute to work'),
(143, 31, 1, 0, '141.png', '', '12.5', 'Clean washrooms', 'Clean washrooms'),
(144, 31, 1, 0, '147.png', '', '12.5', 'Technology at work', 'Technology at work'),
(145, 31, 1, 0, '142.png', '', '12.5', 'Safety', 'Safety'),
(146, 32, 1, 0, '152.png', '', '20', 'So who exactly will be coming?', 'So who exactly will be coming?'),
(147, 32, 1, 0, '151.png', '', '10', 'I wonder why they will be coming.', 'I wonder why they will be coming.'),
(148, 32, 1, 0, '150.png', '', '30', 'This might be a chance to talk to some of them.', 'This might be a chance to talk to some of them.'),
(149, 32, 1, 0, '149.png', '', '40', 'We have had meet-ups with them before. This should be fun.', 'We have had meet-ups with them before. This should be fun.'),
(150, 33, 1, 0, '156.png', '', '30', 'Not sure if I have felt this way before.', 'Not sure if I have felt this way before.'),
(151, 33, 1, 0, '155.png', '', '10', 'I know exactly how that feels.', 'I know exactly how that feels.'),
(152, 33, 1, 0, '153.png', '', '20', 'I feel that way sometimes.', 'I feel that way sometimes.'),
(153, 33, 1, 0, '154.png', '', '40', 'What should I be saying? I don''t know how that feels.', 'What should I be saying? I don''t know how that feels.'),
(154, 34, 1, 0, '160.png', '', '10', 'I''ll wait till my Boss is back. Work can wait.', 'I''ll wait till my Boss is back. Work can wait.'),
(155, 34, 1, 0, '159.png', '', '20', 'I am not sure of what to do. Who can I talk to?', 'I am not sure of what to do. Who can I talk to?'),
(156, 34, 1, 0, '158.png', '', '30', 'I know what to do. If I need help, I can always ask someone.', 'I know what to do. If I need help, I can always ask someone.'),
(157, 34, 1, 0, '157.png', '', '40', 'I can run the show.', 'I can run the show.'),
(158, 35, 1, 0, '164.png', '', '10', '"Should I be doing the same?"', '"Should I be doing the same?"'),
(159, 35, 1, 0, '163.png', '', '20', '"Is the break needed?"', '"Is the break needed?"'),
(160, 35, 1, 0, '162.png', '', '40', '"Makes sense. It will be helpful."', '"Makes sense. It will be helpful."'),
(161, 35, 1, 0, '161.png', '', '30', '"Might work!"', '"Might work!"'),
(162, 36, 1, 0, '168.png', '', '20', '"Are you prepared for the meeting?"', '"Are you prepared for the meeting?"'),
(163, 36, 1, 0, '167.png', '', '10', '"I might take someone else."', '"I might take someone else."'),
(164, 36, 1, 0, '166.png', '', '40', '"I know this meeting will go well!"', '"I know this meeting will go well!"'),
(165, 36, 1, 0, '165.png', '', '30', '"All the best. Let''s do well."', '"All the best. Let''s do well."'),
(166, 37, 1, 0, '172.png', '', '10', '"You want to talk about work at a party?"', '"You want to talk about work at a party?"'),
(167, 37, 1, 0, '171.png', '', '30', '"Yes, I read about it too. I don''t think it''s true."', '"Yes, I read about it too. I don''t think it''s true."'),
(168, 37, 1, 0, '170.png', '', '20', '"I don''t know too much about this."', '"I don''t know too much about this."'),
(169, 37, 1, 0, '169.png', '', '40', '"I am sure it''s not true. Let me tell you why."', '"I am sure it''s not true. Let me tell you why."'),
(170, 38, 1, 0, '176.png', '', '40', 'There is so much I can talk to them about!', 'There is so much I can talk to them about!'),
(171, 38, 1, 0, '175.png', '', '10', 'Why do they ask so many questions?', 'Why do they ask so many questions?'),
(172, 38, 1, 0, '174.png', '', '20', 'There isn''t much to tell them.', 'There isn''t much to tell them.'),
(173, 38, 1, 0, '173.png', '', '30', 'I don''t mind telling them about work.', 'I don''t mind telling them about work.'),
(174, 39, 1, 0, '184.png', '', '20', 'Someone will respond', 'Someone will respond'),
(175, 39, 1, 0, '183.png', '', '10', 'Laugh along', 'Laugh along'),
(176, 39, 1, 0, '182.png', '', '40', 'Share your viewpoint', 'Share your viewpoint'),
(177, 39, 1, 0, '181.png', '', '30', 'Tell my company about it', 'Tell my company about it'),
(178, 40, 1, 0, '180.png', '', '20', 'Doing the course might help. Not too sure.', 'Doing the course might help. Not too sure.'),
(179, 40, 1, 0, '179.png', '', '40', 'I have been wanting to do this course. This is great!', 'I have been wanting to do this course. This is great!'),
(180, 40, 1, 0, '178.png', '', '10', 'There is a lot to do at work already. Will doing this course help?', 'There is a lot to do at work already. Will doing this course help?'),
(181, 40, 1, 0, '177.png', '', '30', 'I should be able to manage that with work.', 'I should be able to manage that with work.'),
(182, 20, 1, 0, '95.png', '', '20', 'Work is fun!', 'Work is fun!'),
(183, 20, 1, 0, '97.png', '', '15', 'You are in a room full of strangers', 'You are in a room full of strangers'),
(184, 20, 1, 0, '96.png', '', '10', 'Alone', 'Alone'),
(185, 20, 1, 0, '94.png', '', '5', 'Like you are waiting for 6:30 PM', 'Like you are waiting for 6:30 PM'),
(186, 41, 0, 0, '301.png', '', '', '', ''),
(187, 41, 0, 0, '302.png', '', '', '', ''),
(188, 41, 0, 0, '303.png', '', '', '', ''),
(189, 41, 0, 0, '304.png', '', '', '', ''),
(190, 42, 0, 0, '185.png', '', '', 'Company Transport', 'Company Transport'),
(191, 42, 0, 0, '186.png', '', '', 'Car Pooling', 'Car Pooling'),
(192, 42, 0, 0, '187.png', '', '', 'My Vehicle', 'My Vehicle'),
(193, 42, 0, 0, '188.png', '', '', 'Public Transport', 'Public Transport'),
(194, 43, 0, 0, '', '', '', 'que 1 option 1', 'que 1 option 1'),
(195, 43, 0, 0, '', '', '', 'que 1 option 2', 'que 1 option 2'),
(196, 43, 0, 0, '', '', '', 'que 1 option 3', 'que 1 option 3'),
(197, 43, 0, 0, '', '', '', 'que 1 option 4', 'que 1 option 4'),
(198, 44, 0, 0, '', '', '', 'que 2 option 1', 'que 2 option 1'),
(199, 44, 0, 0, '', '', '', 'que 2 option 2', 'que 2 option 2'),
(200, 44, 0, 0, '', '', '', 'que 2 option 3', 'que 2 option 3'),
(201, 44, 0, 0, '', '', '', 'que 2 option 4', 'que 2 option 4'),
(202, 45, 0, 0, '141.png', '', '', 'que 3 option 1', 'que 3 option 1'),
(203, 45, 0, 0, '2_(1).png', '', '', 'que 3 option 2', 'que 3 option 2'),
(204, 45, 0, 0, '341.png', '', '', 'que 3 option 3', 'que 3 option 3'),
(205, 45, 0, 0, '436.png', '', '', 'que 3 option 4', 'que 3 option 4'),
(206, 46, 0, 0, '1_(1).png', '', '', 'que 4 option 1', 'que 4 option 1'),
(207, 46, 0, 0, '2_(2).png', '', '', 'que 4 option 2', 'que 4 option 2'),
(208, 46, 0, 0, '3_(1)1.png', '', '', 'que 4 option 3', 'que 4 option 3'),
(209, 46, 0, 0, '4_(1)1.png', '', '', 'que 4 option 4', 'que 4 option 4'),
(210, 45, 0, 0, '5_(1)1.png', '', '', '', ''),
(211, 7, 1, 0, '30.png', '', '20', 'Are you sure you want to apply in my company?  ', 'Are you sure you want to apply in my company?  '),
(212, 41, 0, 0, '305.png', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hq_pillar`
--

CREATE TABLE IF NOT EXISTS `hq_pillar` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `order` varchar(255) NOT NULL,
  `expectedweight` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hq_pillar`
--

INSERT INTO `hq_pillar` (`id`, `name`, `weight`, `order`, `expectedweight`) VALUES
(1, 'Work-Life Blend', '0', '1', '0'),
(2, 'Employee Engagement', '0', '2', '0'),
(3, 'Driving Force', '0', '3', '30'),
(4, 'Health of an Individual', '0', '4', '0'),
(5, 'Interpersonal Relationships at Work', '0', '5', '0'),
(6, 'Rewards and Recognition', '0', '6', '0'),
(7, 'Sense of Ownership', '0', '7', '0'),
(8, 'Work Environment', '0', '8', '0'),
(9, 'Job Security', '0', '9', '0'),
(10, 'Alignment', '0', '10', '0'),
(11, 'CSR', '0', '0', '40');

-- --------------------------------------------------------

--
-- Table structure for table `hq_question`
--

CREATE TABLE IF NOT EXISTS `hq_question` (
  `id` int(11) NOT NULL,
  `pillar` int(11) NOT NULL,
  `noofans` int(11) NOT NULL,
  `order` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `text` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `optionselect` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hq_question`
--

INSERT INTO `hq_question` (`id`, `pillar`, `noofans`, `order`, `timestamp`, `text`, `type`, `date`, `optionselect`) VALUES
(1, 1, 1, '', '2016-05-10 11:39:04', 'You just met a genie who grants you four wishes. You choose:', '3', '2016-05-10', 4),
(2, 1, 1, '', '2016-05-10 11:39:23', 'You put in your best at work. We know you do. So, your life looks something like this:', '1', '2016-05-10', 1),
(3, 1, 1, '', '2016-05-10 11:39:23', 'You have managed to get that much awaited annual leave with family. Your vacation goes something like this:', '1', '2016-05-10', 1),
(4, 1, 1, '', '2016-05-10 11:39:23', 'Your health is as important as the next deadline.', '1', '2016-05-10', 1),
(5, 2, 1, '', '2016-05-10 11:39:23', 'You meet a school friend after a long time and he asks you, "How''s work?" You say:', '1', '2016-05-10', 1),
(6, 2, 1, '', '2016-05-10 11:39:23', 'You are in the middle of a project and things aren''t going your way.  What next?', '1', '2016-05-10', 1),
(7, 2, 1, '', '2016-05-10 11:39:23', 'Your friend approaches you for a job in your company. You are most likely to say this:', '1', '2016-05-10', 1),
(8, 2, 1, '', '2016-05-10 11:39:23', 'Congratulations! Your organization just won an award.', '1', '2016-05-10', 1),
(9, 3, 1, '', '2016-05-10 11:39:23', 'Some of the things that you value in life are :', '3', '2016-05-10', 4),
(10, 3, 1, '', '2016-05-10 11:39:23', 'You find yourself smiling because you are blessed with:', '3', '2016-05-10', 4),
(11, 3, 1, '', '2016-05-10 11:39:23', 'Yes, the weekend is over and Monday morning is back.', '1', '2016-05-10', 1),
(12, 3, 1, '', '2016-05-10 11:39:23', 'You work because:', '3', '2016-05-10', 1),
(13, 4, 1, '', '2016-05-10 11:39:23', 'To exercise or not to exercise…that is the question.', '1', '2016-05-10', 1),
(14, 4, 1, '', '2016-05-10 11:39:23', 'Say one day, there is just too much work. You are likely to think:', '1', '2016-05-10', 1),
(15, 4, 1, '', '2016-05-10 11:39:23', 'It''s the start of the day and you need to submit a report. You think:', '1', '2016-05-10', 1),
(16, 4, 1, '', '2016-05-10 11:39:23', 'Your food habits at work look like this:', '1', '2016-05-10', 1),
(17, 5, 1, '', '2016-05-10 11:39:23', 'You are in a team meeting where tasks are being allocated. You think:', '1', '2016-05-10', 1),
(18, 5, 1, '', '2016-05-10 11:39:23', 'You are stuck in the lift with your boss. Which of these is most likely to happen?', '1', '2016-05-10', 1),
(19, 5, 1, '', '2016-05-10 11:39:23', 'You are making a guest list for your birthday party. You think to yourself:', '1', '2016-05-10', 1),
(20, 5, 1, '', '2016-05-10 11:39:23', 'When you are at work, you feel:', '3', '2016-05-10', 1),
(21, 6, 1, '', '2016-05-10 11:39:23', 'When you tell your best friend about a project you just completed at work, you say:', '1', '2016-05-10', 1),
(22, 6, 1, '', '2016-05-10 11:39:23', 'You are talking to your family about the rewards you get at work and then you realize:', '1', '2016-05-10', 1),
(23, 6, 1, '', '2016-05-10 11:39:23', 'When it''s time for appraisals in office, you think:', '1', '2016-05-10', 1),
(24, 6, 1, '', '2016-05-10 11:39:23', 'One year from now, you see your life looking like this:', '1', '2016-05-10', 1),
(25, 7, 1, '', '2016-05-10 11:39:23', 'Your colleague tells you about the recent Board Meeting and you say:', '1', '2016-05-10', 1),
(26, 7, 1, '', '2016-05-10 11:39:23', 'You accidentally delete a presentation that needs to be made this afternoon. You think:', '1', '2016-05-10', 1),
(27, 7, 1, '', '2016-05-10 11:39:23', 'Your team member is unwell and you take over the project. What next?', '1', '2016-05-10', 1),
(28, 7, 1, '', '2016-05-10 11:39:23', 'Your boss is most likely to say this during your monthly review:', '1', '2016-05-10', 1),
(29, 8, 1, '', '2016-05-10 11:39:23', 'You''ve heard that your company is deciding to  change its leave policy. You tell your colleague this:', '1', '2016-05-10', 1),
(30, 8, 1, '', '2016-05-10 11:39:23', 'An intern walks up to you and asks you about some policies at work. You say this:', '1', '2016-05-10', 1),
(31, 8, 1, '', '2016-05-10 11:39:23', 'Here''s what is awesome about the place I work!', '3', '2016-05-10', 4),
(32, 8, 1, '', '2016-05-10 11:39:23', 'You are part of a gathering with the leadership team. You think:', '1', '2016-05-10', 1),
(33, 9, 1, '', '2016-05-10 11:39:23', 'Over dinner, your cousin tells you he almost thought he would lose his job yesterday. You think:', '1', '2016-05-10', 1),
(34, 9, 1, '', '2016-05-10 11:39:23', 'You have reached office and your boss calls saying he had to take leave urgently. You think:', '1', '2016-05-10', 1),
(35, 9, 1, '', '2016-05-10 11:39:23', 'Your colleague tells you he is taking a break to study & be eligible for a promotion. You think:', '1', '2016-05-10', 1),
(36, 9, 1, '', '2016-05-10 11:39:23', 'You are getting ready to leave office and meet an important client with your boss. You are most likely to hear this:', '1', '2016-05-10', 1),
(37, 10, 1, '', '2016-05-10 11:39:23', 'At a party, your friend asks you about something negative she has read in the papers about your company. You say:', '1', '2016-05-10', 1),
(38, 10, 1, '', '2016-05-10 11:39:23', 'When your relatives ask you about your work, you feel:', '1', '2016-05-10', 1),
(39, 10, 1, '', '2016-05-10 11:39:23', 'You come across a social media post that makes fun of the company you work for. You look at it and think:', '1', '2016-05-10', 1),
(40, 10, 1, '', '2016-05-10 11:39:23', 'Your Boss tells you about an online course to consider and you think:', '1', '2016-05-10', 1),
(41, 1, 1, '', '2016-05-10 12:24:04', 'How are you feeling today?', '4', '2016-05-10', 1),
(42, 1, 1, '', '2016-05-10 12:24:12', 'How do you get to work on most days?', '1', '2016-05-10', 1),
(43, 11, 1, '', '2016-05-10 12:38:54', 'ques  1', '5', '2016-05-10', 1),
(44, 11, 0, '', '2016-05-10 12:38:54', 'ques  2', '5', '2016-05-10', 1),
(45, 11, 0, '', '2016-05-10 12:38:54', 'ques  3', '5', '2016-05-10', 1),
(46, 11, 0, '', '2016-05-10 12:38:54', 'ques  4', '5', '2016-05-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hq_surveyoption`
--

CREATE TABLE IF NOT EXISTS `hq_surveyoption` (
  `id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `question` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hq_surveyoption`
--

INSERT INTO `hq_surveyoption` (`id`, `order`, `question`, `title`, `image`) VALUES
(1, 0, 3, 'option 1', ''),
(2, 0, 3, 'option 2', ''),
(3, 0, 4, 'o1', ''),
(4, 0, 4, 'o2', ''),
(5, 0, 4, 'o3', ''),
(6, 0, 4, 'o4', ''),
(7, 0, 5, '1', ''),
(8, 0, 5, '2', ''),
(9, 0, 5, '3', ''),
(10, 0, 5, '4', ''),
(11, 0, 8, 'ans 1', ''),
(12, 0, 8, 'ams2', ''),
(13, 0, 8, 'ans3', ''),
(14, 0, 8, 'ans4', ''),
(15, 0, 9, 'a1', ''),
(16, 0, 9, 'a2', ''),
(17, 0, 9, 'a3', ''),
(18, 0, 9, 'a4', ''),
(19, 0, 10, 'q1', ''),
(20, 0, 10, 'qq2', ''),
(21, 0, 10, 'q3', ''),
(22, 0, 10, 'q4', ''),
(23, 0, 1, 'test 1', ''),
(24, 0, 1, 'test2', ''),
(25, 0, 1, 'test3', ''),
(26, 0, 1, 'test 4', ''),
(27, 0, 10, 'q5', ''),
(28, 0, 3, 'option 3', ''),
(29, 0, 3, 'option 3', ''),
(30, 0, 1, 'test 5', ''),
(31, 0, 3, 'optipon 3', ''),
(32, 0, 3, 'option 4', '');

-- --------------------------------------------------------

--
-- Table structure for table `hq_surveyquestion`
--

CREATE TABLE IF NOT EXISTS `hq_surveyquestion` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `content` text NOT NULL,
  `survey` int(11) NOT NULL,
  `isrequired` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hq_surveyquestion`
--

INSERT INTO `hq_surveyquestion` (`id`, `type`, `starttime`, `endtime`, `content`, `survey`, `isrequired`) VALUES
(1, 3, '00:00:00', '00:00:00', '1 q', 1, 1),
(2, 2, '00:00:00', '00:00:00', '2 q', 1, 2),
(3, 3, '00:00:00', '00:00:00', '3 q', 1, 2),
(4, 4, '00:00:00', '00:00:00', 'q 4', 1, 1),
(5, 5, '00:00:00', '00:00:00', '5 q', 1, 1),
(6, 1, '00:00:00', '00:00:00', '6q', 1, 0),
(7, 2, '00:00:00', '00:00:00', '7 q', 1, 1),
(8, 3, '00:00:00', '00:00:00', '8 q', 1, 1),
(9, 4, '00:00:00', '00:00:00', '9 q', 1, 1),
(10, 5, '00:00:00', '00:00:00', '10 q', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hq_surveyquestionanswer`
--

CREATE TABLE IF NOT EXISTS `hq_surveyquestionanswer` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `question` int(11) NOT NULL,
  `option` text NOT NULL,
  `survey` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hq_surveyquestionanswer`
--

INSERT INTO `hq_surveyquestionanswer` (`id`, `user`, `question`, `option`, `survey`) VALUES
(1, 7, 1, 'C', 1),
(2, 7, 2, '2 option 2', 1),
(3, 7, 3, '3 option 2', 1),
(4, 7, 4, 'Nans', 1),
(5, 7, 5, 'U', 1),
(11, 16, 1, '', 1),
(12, 16, 2, 'a', 1),
(13, 16, 3, '', 1),
(14, 16, 4, 'o2', 1),
(15, 16, 5, '', 1),
(16, 16, 6, 'a', 1),
(17, 16, 7, 'a', 1),
(18, 16, 8, '', 1),
(19, 16, 9, 'a2', 1),
(20, 16, 10, '', 1),
(21, 15, 1, '', 1),
(22, 15, 2, 'hey', 1),
(23, 15, 3, '', 1),
(24, 15, 4, 'o1', 1),
(25, 15, 5, '', 1),
(26, 15, 6, 'chup kar', 1),
(27, 15, 7, 'gadhe', 1),
(28, 15, 8, '', 1),
(29, 15, 9, 'a2', 1),
(30, 15, 10, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hq_surveyquestionuser`
--

CREATE TABLE IF NOT EXISTS `hq_surveyquestionuser` (
  `id` int(11) NOT NULL,
  `survey` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hq_surveyquestionuser`
--

INSERT INTO `hq_surveyquestionuser` (`id`, `survey`, `email`, `status`, `userid`) VALUES
(1, 1, 'tushar@wohlig.com', 0, 7),
(2, 1, 'pooja.wohlig@gmail.com', 0, 15),
(3, 1, 'jagruti@wohlig.com', 0, 16),
(4, 1, 'chintan@wohlig.com', 0, 18);

-- --------------------------------------------------------

--
-- Table structure for table `hq_team`
--

CREATE TABLE IF NOT EXISTS `hq_team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `teamid` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hq_team`
--

INSERT INTO `hq_team` (`id`, `name`, `teamid`) VALUES
(1, 'HR team', ''),
(2, 'Marketing team', ''),
(3, 'Finance team', ''),
(4, 'Legal team', '');

-- --------------------------------------------------------

--
-- Table structure for table `hq_useranswer`
--

CREATE TABLE IF NOT EXISTS `hq_useranswer` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `pillar` int(11) DEFAULT NULL,
  `question` int(11) NOT NULL,
  `option` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `test` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=452 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hq_useranswer`
--

INSERT INTO `hq_useranswer` (`id`, `user`, `pillar`, `question`, `option`, `order`, `timestamp`, `test`) VALUES
(56, 7, 8, 30, 0, 0, '2016-04-28 09:01:46', 1),
(57, 7, 7, 27, 0, 0, '2016-04-28 09:01:50', 1),
(58, 7, 8, 29, 0, 0, '2016-04-28 09:02:06', 1),
(59, 7, 3, 12, 0, 0, '2016-04-28 09:02:09', 1),
(60, 16, 2, 6, 0, 0, '2016-04-28 09:03:44', 1),
(61, 7, 2, 7, 0, 0, '2016-04-30 05:55:59', 1),
(62, 7, 6, 21, 0, 0, '2016-04-30 05:56:13', 1),
(63, 72, 9, 34, 156, 0, '2016-04-30 08:22:35', 1),
(64, 72, 10, 40, 181, 0, '2016-04-30 08:22:54', 1),
(65, 72, 9, 35, 158, 0, '2016-04-30 08:23:07', 1),
(66, 72, 5, 19, 93, 0, '2016-04-30 08:23:24', 1),
(67, 72, 8, 31, 139, 0, '2016-04-30 08:23:45', 1),
(68, 72, 5, 18, 89, 0, '2016-04-30 08:24:03', 1),
(69, 72, 1, 41, 187, 0, '2016-04-30 08:24:14', 1),
(70, 72, 8, 29, 130, 0, '2016-04-30 08:24:40', 1),
(71, 74, 3, 11, 55, 0, '2016-04-30 08:45:35', 1),
(72, 70, 8, 31, 141, 0, '2016-04-30 09:14:11', 1),
(73, 70, 8, 31, 143, 0, '2016-04-30 09:14:11', 1),
(74, 70, 8, 31, 138, 0, '2016-04-30 09:14:11', 1),
(75, 70, 9, 36, 164, 0, '2016-04-30 09:14:16', 1),
(76, 70, 1, 42, 190, 0, '2016-04-30 09:14:21', 1),
(77, 70, 1, 41, 187, 0, '2016-04-30 09:14:25', 1),
(78, 70, 5, 19, 92, 0, '2016-04-30 09:14:29', 1),
(79, 70, 4, 14, 65, 0, '2016-04-30 09:14:32', 1),
(80, 70, 3, 10, 49, 0, '2016-04-30 09:14:39', 1),
(81, 70, 3, 10, 46, 0, '2016-04-30 09:14:39', 1),
(82, 70, 3, 10, 50, 0, '2016-04-30 09:14:39', 1),
(83, 70, 3, 10, 52, 0, '2016-04-30 09:14:39', 1),
(84, 70, 3, 11, 54, 0, '2016-04-30 09:14:42', 1),
(85, 70, 6, 22, 102, 0, '2016-04-30 09:14:45', 1),
(86, 70, 3, 9, 39, 0, '2016-04-30 09:14:52', 1),
(87, 70, 3, 9, 44, 0, '2016-04-30 09:14:52', 1),
(88, 70, 3, 9, 42, 0, '2016-04-30 09:14:52', 1),
(89, 70, 3, 9, 40, 0, '2016-04-30 09:14:52', 1),
(90, 70, 4, 13, 61, 0, '2016-04-30 09:14:56', 1),
(91, 70, 10, 40, 180, 0, '2016-04-30 09:14:59', 1),
(92, 70, 7, 27, 123, 0, '2016-04-30 09:15:02', 1),
(93, 70, 8, 32, 147, 0, '2016-04-30 09:15:29', 1),
(94, 70, 7, 26, 120, 0, '2016-04-30 09:15:34', 1),
(95, 70, 8, 30, 0, 0, '2016-04-30 09:15:39', 1),
(96, 70, 6, 21, 101, 0, '2016-04-30 09:15:43', 1),
(97, 70, 2, 6, 28, 0, '2016-04-30 09:15:46', 1),
(98, 70, 4, 16, 70, 0, '2016-04-30 09:15:48', 1),
(99, 70, 2, 8, 35, 0, '2016-04-30 09:15:51', 1),
(100, 70, 2, 7, 211, 0, '2016-04-30 09:15:54', 1),
(101, 70, 2, 5, 24, 0, '2016-04-30 09:15:56', 1),
(102, 70, 5, 18, 89, 0, '2016-04-30 09:15:59', 1),
(103, 70, 1, 1, 1, 0, '2016-04-30 09:16:04', 1),
(104, 70, 1, 1, 5, 0, '2016-04-30 09:16:04', 1),
(105, 70, 1, 1, 4, 0, '2016-04-30 09:16:04', 1),
(106, 70, 1, 1, 3, 0, '2016-04-30 09:16:04', 1),
(107, 70, 10, 39, 177, 0, '2016-04-30 09:16:07', 1),
(108, 70, 9, 33, 150, 0, '2016-04-30 09:16:10', 1),
(109, 70, 10, 38, 171, 0, '2016-04-30 09:16:13', 1),
(110, 70, 1, 4, 20, 0, '2016-04-30 09:16:17', 1),
(111, 70, 8, 29, 131, 0, '2016-04-30 09:16:19', 1),
(112, 70, 5, 17, 83, 0, '2016-04-30 09:16:23', 1),
(113, 70, 7, 28, 126, 0, '2016-04-30 09:16:27', 1),
(114, 70, 3, 12, 76, 0, '2016-04-30 09:16:30', 1),
(115, 70, 6, 23, 108, 0, '2016-04-30 09:16:33', 1),
(116, 70, 9, 34, 155, 0, '2016-04-30 09:16:38', 1),
(117, 70, 6, 24, 112, 0, '2016-04-30 09:16:45', 1),
(118, 70, 10, 37, 167, 0, '2016-04-30 09:16:52', 1),
(119, 70, 5, 20, 182, 0, '2016-04-30 09:17:03', 1),
(120, 70, 9, 35, 159, 0, '2016-04-30 09:17:19', 1),
(121, 70, 1, 2, 10, 0, '2016-04-30 09:17:25', 1),
(122, 70, 1, 3, 14, 0, '2016-04-30 09:17:29', 1),
(123, 70, 7, 25, 117, 0, '2016-04-30 09:17:38', 1),
(124, 70, 4, 15, 66, 0, '2016-04-30 09:17:42', 1),
(125, 70, 9, 35, 160, 0, '2016-04-30 09:17:50', 1),
(126, 78, 2, 5, 0, 0, '2016-04-30 09:18:52', 1),
(127, 78, 6, 22, 104, 0, '2016-04-30 09:18:56', 1),
(128, 78, 5, 18, 89, 0, '2016-04-30 09:19:04', 1),
(129, 78, 10, 39, 177, 0, '2016-04-30 09:19:08', 1),
(130, 78, 3, 10, 47, 0, '2016-04-30 09:19:15', 1),
(131, 78, 3, 10, 53, 0, '2016-04-30 09:19:15', 1),
(132, 78, 3, 10, 49, 0, '2016-04-30 09:19:16', 1),
(133, 78, 3, 10, 48, 0, '2016-04-30 09:19:16', 1),
(134, 78, 4, 15, 68, 0, '2016-04-30 09:19:19', 1),
(135, 78, 10, 38, 170, 0, '2016-04-30 09:19:23', 1),
(136, 78, 1, 2, 10, 0, '2016-04-30 09:19:26', 1),
(137, 78, 6, 23, 108, 0, '2016-04-30 09:19:30', 1),
(138, 78, 1, 41, 186, 0, '2016-04-30 09:19:38', 1),
(139, 78, 4, 16, 70, 0, '2016-04-30 09:19:42', 1),
(140, 78, 3, 11, 54, 0, '2016-04-30 09:19:46', 1),
(141, 78, 4, 14, 63, 0, '2016-04-30 09:19:59', 1),
(142, 78, 9, 34, 156, 0, '2016-04-30 09:20:06', 1),
(143, 78, 2, 7, 31, 0, '2016-04-30 09:20:09', 1),
(144, 78, 7, 25, 116, 0, '2016-04-30 09:20:12', 1),
(145, 78, 1, 3, 14, 0, '2016-04-30 09:20:16', 1),
(146, 78, 5, 20, 94, 0, '2016-04-30 09:20:19', 1),
(147, 78, 1, 42, 190, 0, '2016-04-30 09:20:23', 1),
(148, 78, 8, 29, 132, 0, '2016-04-30 09:20:27', 1),
(149, 78, 7, 27, 123, 0, '2016-04-30 09:20:29', 1),
(150, 79, 3, 9, 43, 0, '2016-04-30 09:24:06', 1),
(151, 79, 3, 9, 38, 0, '2016-04-30 09:24:06', 1),
(152, 79, 3, 9, 42, 0, '2016-04-30 09:24:06', 1),
(153, 79, 3, 9, 44, 0, '2016-04-30 09:24:06', 1),
(154, 79, 7, 26, 118, 0, '2016-04-30 09:24:12', 1),
(155, 79, 1, 42, 190, 0, '2016-04-30 09:24:15', 1),
(156, 79, 1, 2, 11, 0, '2016-04-30 09:24:19', 1),
(157, 79, 5, 20, 94, 0, '2016-04-30 09:24:24', 1),
(158, 79, 5, 18, 89, 0, '2016-04-30 09:24:30', 1),
(159, 79, 8, 31, 145, 0, '2016-04-30 09:24:34', 1),
(160, 79, 8, 31, 140, 0, '2016-04-30 09:24:34', 1),
(161, 79, 8, 31, 142, 0, '2016-04-30 09:24:34', 1),
(162, 79, 8, 31, 143, 0, '2016-04-30 09:24:34', 1),
(163, 79, 4, 14, 62, 0, '2016-04-30 09:24:38', 1),
(164, 79, 9, 33, 152, 0, '2016-04-30 09:24:41', 1),
(165, 79, 7, 28, 127, 0, '2016-04-30 09:24:45', 1),
(166, 79, 1, 4, 19, 0, '2016-04-30 09:24:48', 1),
(167, 79, 3, 10, 50, 0, '2016-04-30 09:24:53', 1),
(168, 79, 3, 10, 47, 0, '2016-04-30 09:24:53', 1),
(169, 79, 3, 10, 46, 0, '2016-04-30 09:24:53', 1),
(170, 79, 3, 10, 51, 0, '2016-04-30 09:24:53', 1),
(171, 79, 2, 7, 31, 0, '2016-04-30 09:24:56', 1),
(172, 79, 6, 24, 113, 0, '2016-04-30 09:25:00', 1),
(173, 79, 10, 39, 177, 0, '2016-04-30 09:25:03', 1),
(174, 79, 4, 13, 61, 0, '2016-04-30 09:25:07', 1),
(175, 79, 9, 36, 162, 0, '2016-04-30 09:25:12', 1),
(176, 79, 5, 17, 85, 0, '2016-04-30 09:25:15', 1),
(177, 79, 3, 11, 55, 0, '2016-04-30 09:25:18', 1),
(178, 79, 4, 16, 70, 0, '2016-04-30 09:25:24', 1),
(179, 79, 8, 30, 134, 0, '2016-04-30 09:25:27', 1),
(180, 79, 9, 34, 155, 0, '2016-04-30 09:25:48', 1),
(181, 79, 1, 3, 14, 0, '2016-04-30 09:25:53', 1),
(182, 79, 2, 8, 34, 0, '2016-04-30 09:26:02', 1),
(183, 79, 8, 32, 148, 0, '2016-04-30 09:26:05', 1),
(184, 79, 2, 5, 22, 0, '2016-04-30 09:26:10', 1),
(185, 79, 4, 15, 69, 0, '2016-04-30 09:26:14', 1),
(186, 79, 8, 29, 131, 0, '2016-04-30 09:26:30', 1),
(187, 79, 7, 27, 124, 0, '2016-04-30 09:27:46', 1),
(188, 79, 2, 6, 28, 0, '2016-04-30 09:27:54', 1),
(189, 79, 6, 21, 101, 0, '2016-04-30 09:27:57', 1),
(190, 79, 6, 23, 109, 0, '2016-04-30 09:28:00', 1),
(191, 79, 7, 25, 115, 0, '2016-04-30 09:28:02', 1),
(192, 79, 3, 12, 79, 0, '2016-04-30 09:28:06', 1),
(193, 79, 6, 22, 102, 0, '2016-04-30 09:28:10', 1),
(194, 79, 10, 37, 169, 0, '2016-04-30 09:28:13', 1),
(195, 79, 1, 41, 186, 0, '2016-04-30 09:28:16', 1),
(196, 79, 10, 38, 173, 0, '2016-04-30 09:28:19', 1),
(197, 79, 1, 1, 3, 0, '2016-04-30 09:28:24', 1),
(198, 79, 1, 1, 9, 0, '2016-04-30 09:28:24', 1),
(199, 79, 1, 1, 6, 0, '2016-04-30 09:28:24', 1),
(200, 79, 1, 1, 4, 0, '2016-04-30 09:28:24', 1),
(201, 79, 5, 19, 90, 0, '2016-04-30 09:28:31', 1),
(202, 79, 10, 40, 0, 0, '2016-04-30 09:28:34', 1),
(203, 79, 9, 35, 0, 0, '2016-04-30 09:28:36', 1),
(446, 15, 3, 9, 44, 0, '2016-05-10 11:50:17', 1),
(447, 15, 3, 9, 45, 0, '2016-05-10 11:50:17', 1),
(448, 15, 3, 9, 41, 0, '2016-05-10 11:50:17', 1),
(449, 15, 3, 9, 43, 0, '2016-05-10 11:50:17', 1),
(450, 15, 4, 13, 61, 0, '2016-05-10 11:50:27', 1),
(451, 15, 10, 40, 181, 0, '2016-05-10 11:50:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hq_userpillar`
--

CREATE TABLE IF NOT EXISTS `hq_userpillar` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `pillar` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hq_userpillar`
--

INSERT INTO `hq_userpillar` (`id`, `user`, `pillar`, `timestamp`) VALUES
(1, 14, 5, '2015-10-31 09:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `logintype`
--

CREATE TABLE IF NOT EXISTS `logintype` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintype`
--

INSERT INTO `logintype` (`id`, `name`) VALUES
(1, 'Facebook'),
(2, 'Twitter'),
(3, 'Email'),
(4, 'Google');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
  `image` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`image`, `id`) VALUES
('logo-hqu1.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `linktype` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`, `keyword`, `url`, `linktype`, `parent`, `isactive`, `order`, `icon`) VALUES
(1, 'Company Profile', '', '', 'site/viewusers', 1, 0, 1, 1, 'icon-user'),
(2, 'Branch', '', '', 'site/viewbranch', 1, 0, 1, 2, 'icon-dashboard'),
(3, 'Department', '', '', 'site/viewdepartment', 1, 0, 1, 3, 'icon-dashboard'),
(4, 'Dashboard', '', '', 'site/index', 1, 0, 1, 0, 'icon-dashboard'),
(5, 'Designation', '', '', 'site/viewdesignation', 1, 0, 1, 4, 'icon-dashboard'),
(6, 'Pillar', '', '', 'site/viewpillar', 1, 0, 1, 6, 'icon-dashboard'),
(7, 'Questions', '', '', 'site/viewquestion', 1, 0, 1, 7, 'icon-dashboard'),
(8, 'Options', '', '', 'site/viewoptions', 1, 0, 1, 8, 'icon-dashboard'),
(9, 'User Answers', '', '', 'site/viewuseranswer', 1, 0, 1, 8, 'icon-dashboard'),
(10, 'User Pillar', '', '', 'site/viewuserpillar', 1, 0, 1, 9, 'icon-dashboard'),
(11, 'Content', '', '', 'site/viewcontent', 1, 0, 1, 10, 'icon-dashboard'),
(12, 'Team', '', '', 'site/viewteam', 1, 0, 1, 5, 'icon-dashboard'),
(14, 'Start HQ', '', '', 'site/edittest?id=1', 1, 0, 1, 0, 'icon-dashboard'),
(15, 'Mini Survey', '', '', 'site/viewconclusionfinalsuggestion', 1, 0, 1, 7, 'icon-dashboard'),
(16, 'Config', '', '', 'site/viewconfig', 1, 0, 1, 15, 'icon-dashboard'),
(17, 'Create Surveys', '', '', 'site/viewsurveyquestion', 1, 0, 1, 16, 'icon-dashboard'),
(18, 'Survey Users', '', '', 'site/viewsurveyquestionuser', 1, 0, 1, 17, 'icon-dashboard'),
(19, 'Conclusion', '', '', 'site/viewconclusion1', 1, 0, 1, 18, 'icon-dashboard'),
(20, 'Logo', '', '', 'site/createlogo', 1, 0, 1, 19, 'icon-dashboard');

-- --------------------------------------------------------

--
-- Table structure for table `menuaccess`
--

CREATE TABLE IF NOT EXISTS `menuaccess` (
  `menu` int(11) NOT NULL,
  `access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menuaccess`
--

INSERT INTO `menuaccess` (`menu`, `access`) VALUES
(1, 1),
(4, 1),
(2, 1),
(3, 1),
(5, 1),
(6, 1),
(7, 1),
(12, 1),
(13, 1),
(14, 1),
(17, 0),
(18, 0),
(20, 1),
(15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE IF NOT EXISTS `statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`) VALUES
(1, 'Active'),
(2, 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `units` varchar(255) NOT NULL,
  `schedule` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `department` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `designation` int(11) NOT NULL,
  `check` int(11) NOT NULL,
  `team` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `enddate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `units`, `schedule`, `startdate`, `department`, `branch`, `designation`, `check`, `team`, `timestamp`, `enddate`) VALUES
(1, 'Your New Test ', '5', 4, '2016-04-12', 0, 0, 0, 0, 0, '2016-01-02 05:11:30', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `testpillarexpected`
--

CREATE TABLE IF NOT EXISTS `testpillarexpected` (
  `id` int(11) NOT NULL,
  `test` int(11) NOT NULL,
  `pillar` int(11) NOT NULL,
  `expectedvalue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testquestion`
--

CREATE TABLE IF NOT EXISTS `testquestion` (
  `id` int(11) NOT NULL,
  `test` int(11) NOT NULL,
  `question` int(11) NOT NULL,
  `datetimestatus` int(11) NOT NULL,
  `dateandtime` date NOT NULL,
  `sendstatus` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testquestion`
--

INSERT INTO `testquestion` (`id`, `test`, `question`, `datetimestatus`, `dateandtime`, `sendstatus`) VALUES
(99, 1, 1, 0, '0000-00-00', 0),
(100, 1, 2, 0, '0000-00-00', 0),
(101, 1, 3, 0, '0000-00-00', 0),
(102, 1, 4, 0, '0000-00-00', 0),
(103, 1, 5, 0, '0000-00-00', 0),
(104, 1, 6, 0, '0000-00-00', 0),
(105, 1, 7, 0, '0000-00-00', 0),
(106, 1, 8, 0, '0000-00-00', 0),
(107, 1, 9, 0, '0000-00-00', 0),
(108, 1, 10, 0, '0000-00-00', 0),
(109, 1, 11, 0, '0000-00-00', 0),
(110, 1, 12, 0, '0000-00-00', 0),
(111, 1, 13, 0, '0000-00-00', 0),
(112, 1, 14, 0, '0000-00-00', 0),
(113, 1, 15, 0, '0000-00-00', 0),
(114, 1, 16, 0, '0000-00-00', 0),
(115, 1, 17, 0, '0000-00-00', 0),
(116, 1, 18, 0, '0000-00-00', 0),
(117, 1, 19, 0, '0000-00-00', 0),
(118, 1, 20, 0, '0000-00-00', 0),
(119, 1, 21, 0, '0000-00-00', 0),
(120, 1, 22, 0, '0000-00-00', 0),
(121, 1, 23, 0, '0000-00-00', 0),
(122, 1, 24, 0, '0000-00-00', 0),
(123, 1, 25, 0, '0000-00-00', 0),
(124, 1, 26, 0, '0000-00-00', 0),
(125, 1, 27, 0, '0000-00-00', 0),
(126, 1, 28, 0, '0000-00-00', 0),
(127, 1, 29, 0, '0000-00-00', 0),
(128, 1, 30, 0, '0000-00-00', 0),
(129, 1, 31, 0, '0000-00-00', 0),
(130, 1, 32, 0, '0000-00-00', 0),
(131, 1, 33, 0, '0000-00-00', 0),
(132, 1, 34, 0, '0000-00-00', 0),
(133, 1, 35, 0, '0000-00-00', 0),
(134, 1, 36, 0, '0000-00-00', 0),
(135, 1, 37, 0, '0000-00-00', 0),
(136, 1, 38, 0, '0000-00-00', 0),
(137, 1, 39, 0, '0000-00-00', 0),
(138, 1, 40, 0, '0000-00-00', 0),
(139, 1, 41, 0, '0000-00-00', 0),
(140, 1, 42, 0, '0000-00-00', 0),
(141, 1, 43, 0, '0000-00-00', 0),
(142, 1, 44, 0, '0000-00-00', 0),
(143, 1, 45, 0, '0000-00-00', 0),
(144, 1, 46, 0, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `accesslevel` int(11) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `socialid` varchar(255) NOT NULL,
  `logintype` varchar(50) NOT NULL,
  `json` text NOT NULL,
  `gender` int(11) NOT NULL,
  `age` varchar(255) NOT NULL,
  `maritalstatus` int(11) NOT NULL,
  `designation` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `noofyearsinorganization` varchar(255) NOT NULL,
  `spanofcontrol` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `employeeid` varchar(255) NOT NULL,
  `branch` int(11) NOT NULL,
  `language` varchar(255) NOT NULL,
  `team` int(11) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `isfirst` varchar(255) NOT NULL,
  `isblock` int(11) DEFAULT NULL,
  `dob` date NOT NULL,
  `package` int(11) NOT NULL,
  `expirydate` date NOT NULL,
  `hashuser` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `accesslevel`, `timestamp`, `status`, `image`, `username`, `socialid`, `logintype`, `json`, `gender`, `age`, `maritalstatus`, `designation`, `department`, `noofyearsinorganization`, `spanofcontrol`, `description`, `employeeid`, `branch`, `language`, `team`, `salary`, `isfirst`, `isblock`, `dob`, `package`, `expirydate`, `hashuser`) VALUES
(1, 'wohlig', 'a63526467438df9566c508027d9cb06b', 'wohlig@wohlig.com', 1, '0000-00-00 00:00:00', 1, NULL, '0', '0', '0', '0', 0, '0', 0, 1, 1, '', '7', '															', '', 1, '0', 5, '', '1', 0, '0000-00-00', 4, '2016-05-11', ''),
(7, 'Tushar', 'a63526467438df9566c508027d9cb06b', 'tushar@wohlig.com', 4, '0000-00-00 00:00:00', 1, NULL, '0', '0', '0', '0', 0, '', 0, 1, 1, '10', '7', '', '', 1, '0', 5, '300000', '', 0, '0000-00-00', 4, '2016-05-11', ''),
(15, 'Pooja', 'a63526467438df9566c508027d9cb06b', 'pooja.wohlig@gmail.com', 4, '2014-10-17 06:22:29', 1, NULL, '', '', '0', '', 1, '', 0, 1, 1, '10', '4', '', '', 1, '1', 1, '600000', '', 0, '0000-00-00', 4, '2016-05-11', ''),
(16, 'Jagruti', 'a63526467438df9566c508027d9cb06b', 'jagruti@wohlig.com', 4, '2014-10-17 06:22:29', 1, NULL, '', '', '0', '', 0, '', 0, 1, 1, '10', '7', '', '', 1, '1', 1, '', '', 0, '0000-00-00', 4, '2016-05-11', ''),
(18, 'Chintan', 'f3abbf3960a3c7683c1a14eb176d1a28', 'chintan@wohlig.com', 4, '0000-00-00 00:00:00', 1, 'b17.jpg', '0', '0', '0', '0', 0, '25', 0, 1, 1, '12', '7', 'des111', 'emp111', 2, '0', 5, '900000', '', 0, '0000-00-00', 4, '2016-05-11', ''),
(19, 'etaert', '44324a9cd82b509dbdeb62a25cb73fd5', 'admin@accessworld.indfgd', 1, '2016-06-10 12:43:36', 1, '', '0', '0', '', '0', 0, '', 0, 0, 0, '', '', '', '', 0, '0', 1, '', '', NULL, '0000-00-00', 0, '0000-00-00', 'MTkmaHE=');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE IF NOT EXISTS `userlog` (
  `id` int(11) NOT NULL,
  `onuser` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `onuser`, `status`, `description`, `timestamp`) VALUES
(1, 1, 1, 'User Address Edited', '2014-05-12 06:50:21'),
(2, 1, 1, 'User Details Edited', '2014-05-12 06:51:43'),
(3, 1, 1, 'User Details Edited', '2014-05-12 06:51:53'),
(4, 4, 1, 'User Created', '2014-05-12 06:52:44'),
(5, 4, 1, 'User Address Edited', '2014-05-12 12:31:48'),
(6, 23, 2, 'User Created', '2014-10-07 06:46:55'),
(7, 24, 2, 'User Created', '2014-10-07 06:48:25'),
(8, 25, 2, 'User Created', '2014-10-07 06:49:04'),
(9, 26, 2, 'User Created', '2014-10-07 06:49:16'),
(10, 27, 2, 'User Created', '2014-10-07 06:52:18'),
(11, 28, 2, 'User Created', '2014-10-07 06:52:45'),
(12, 29, 2, 'User Created', '2014-10-07 06:53:10'),
(13, 30, 2, 'User Created', '2014-10-07 06:53:33'),
(14, 31, 2, 'User Created', '2014-10-07 06:55:03'),
(15, 32, 2, 'User Created', '2014-10-07 06:55:33'),
(16, 33, 2, 'User Created', '2014-10-07 06:59:32'),
(17, 34, 2, 'User Created', '2014-10-07 07:01:18'),
(18, 35, 2, 'User Created', '2014-10-07 07:01:50'),
(19, 34, 2, 'User Details Edited', '2014-10-07 07:04:34'),
(20, 18, 2, 'User Details Edited', '2014-10-07 07:05:11'),
(21, 18, 2, 'User Details Edited', '2014-10-07 07:05:45'),
(22, 18, 2, 'User Details Edited', '2014-10-07 07:06:03'),
(23, 7, 6, 'User Created', '2014-10-17 06:22:29'),
(24, 7, 6, 'User Details Edited', '2014-10-17 06:32:22'),
(25, 7, 6, 'User Details Edited', '2014-10-17 06:32:37'),
(26, 8, 6, 'User Created', '2014-11-15 12:05:52'),
(27, 9, 6, 'User Created', '2014-12-02 10:46:36'),
(28, 9, 6, 'User Details Edited', '2014-12-02 10:47:34'),
(29, 4, 6, 'User Details Edited', '2014-12-03 10:34:49'),
(30, 4, 6, 'User Details Edited', '2014-12-03 10:36:34'),
(31, 4, 6, 'User Details Edited', '2014-12-03 10:36:49'),
(32, 8, 6, 'User Details Edited', '2014-12-03 10:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `userquestionsend`
--

CREATE TABLE IF NOT EXISTS `userquestionsend` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `test` int(11) NOT NULL,
  `question` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userquestionsend`
--

INSERT INTO `userquestionsend` (`id`, `user`, `test`, `question`, `timestamp`) VALUES
(1, 7, 1, 6, '2015-08-08 07:15:43'),
(2, 15, 1, 6, '2015-08-08 07:15:45'),
(3, 16, 1, 6, '2015-08-08 07:15:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesslevel`
--
ALTER TABLE `accesslevel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emailer`
--
ALTER TABLE `emailer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hq_branch`
--
ALTER TABLE `hq_branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hq_conclusion`
--
ALTER TABLE `hq_conclusion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hq_conclusionfinalsuggestion`
--
ALTER TABLE `hq_conclusionfinalsuggestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hq_conclusionquestion`
--
ALTER TABLE `hq_conclusionquestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hq_content`
--
ALTER TABLE `hq_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hq_department`
--
ALTER TABLE `hq_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hq_designation`
--
ALTER TABLE `hq_designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hq_options`
--
ALTER TABLE `hq_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hq_pillar`
--
ALTER TABLE `hq_pillar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hq_question`
--
ALTER TABLE `hq_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hq_surveyoption`
--
ALTER TABLE `hq_surveyoption`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hq_surveyquestion`
--
ALTER TABLE `hq_surveyquestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hq_surveyquestionanswer`
--
ALTER TABLE `hq_surveyquestionanswer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hq_surveyquestionuser`
--
ALTER TABLE `hq_surveyquestionuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hq_team`
--
ALTER TABLE `hq_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hq_useranswer`
--
ALTER TABLE `hq_useranswer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hq_userpillar`
--
ALTER TABLE `hq_userpillar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logintype`
--
ALTER TABLE `logintype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testpillarexpected`
--
ALTER TABLE `testpillarexpected`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testquestion`
--
ALTER TABLE `testquestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userquestionsend`
--
ALTER TABLE `userquestionsend`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accesslevel`
--
ALTER TABLE `accesslevel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `emailer`
--
ALTER TABLE `emailer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hq_branch`
--
ALTER TABLE `hq_branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hq_conclusion`
--
ALTER TABLE `hq_conclusion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `hq_conclusionfinalsuggestion`
--
ALTER TABLE `hq_conclusionfinalsuggestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hq_conclusionquestion`
--
ALTER TABLE `hq_conclusionquestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `hq_content`
--
ALTER TABLE `hq_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hq_department`
--
ALTER TABLE `hq_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `hq_designation`
--
ALTER TABLE `hq_designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `hq_options`
--
ALTER TABLE `hq_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=213;
--
-- AUTO_INCREMENT for table `hq_pillar`
--
ALTER TABLE `hq_pillar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `hq_question`
--
ALTER TABLE `hq_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `hq_surveyoption`
--
ALTER TABLE `hq_surveyoption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `hq_surveyquestion`
--
ALTER TABLE `hq_surveyquestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `hq_surveyquestionanswer`
--
ALTER TABLE `hq_surveyquestionanswer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `hq_surveyquestionuser`
--
ALTER TABLE `hq_surveyquestionuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hq_team`
--
ALTER TABLE `hq_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hq_useranswer`
--
ALTER TABLE `hq_useranswer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=452;
--
-- AUTO_INCREMENT for table `hq_userpillar`
--
ALTER TABLE `hq_userpillar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `testpillarexpected`
--
ALTER TABLE `testpillarexpected`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `testquestion`
--
ALTER TABLE `testquestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=145;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `userquestionsend`
--
ALTER TABLE `userquestionsend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
