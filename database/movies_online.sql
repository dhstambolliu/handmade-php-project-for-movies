-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 12:45 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `subject` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `surname`, `email`, `phone`, `subject`) VALUES
(1, 'Dhimiter', 'Stambolliu', 'dhimiter.stambolliu@fshnstudent.info', '+355699900752', 'test'),
(2, 'Dhimiter', 'Stambolliu', 'dhimiter.stambolliu@fshnstudent.info', '+355699900752', 'Test'),
(3, 'Emri', 'Mbiemri', 'email@email.com', '+42255116', 'ky eshte nje test '),
(4, 'Emri', 'Mbiemri', 'email@email.com', '+15522669984', 'This is a test contact form for verification'),
(5, 'test', 'test', 'test@test.com', 'test', 'test'),
(6, 'test1', 'test1', 'test1@test.com', 'test', 'testtesttesttesttesttesttesttesttesttesttesttesttest'),
(7, 'Emri', 'Mbiemri', 'stambolliudhimiter@gmail.com', 'test', 'mesazh'),
(8, 'test', 'tes12154545', 'tmme@mmem.com', 'dpfkoosdsd', 'siodkdfd');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_text` text NOT NULL,
  `link` varchar(100) NOT NULL,
  `info` varchar(100) NOT NULL,
  `video` varchar(50) NOT NULL,
  `genre` varchar(15) NOT NULL,
  `IMBd` varchar(3) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `image`, `image_text`, `link`, `info`, `video`, `genre`, `IMBd`, `year`) VALUES
(1, '1.jpg', 'Title', 'Trailer Link', 'Info', 'Heartbeat1.mp4', 'comedy', '11.', 2040),
(3, 'Batman vs Robin (2015).jpg', 'Batman Vs Robin 2015', 'https://youtu.be/ICOmWEVuM1U', 'batman()', 'Batman_vs_Robin_(2015).mp4', 'animate', '7.1', 2015),
(4, 'freaks_2018.jpg', 'Freaks 2018', 'https://youtu.be/Fd2szjVdrpg', 'freaks()', 'freaks_2018.mp4', 'drama', '6.7', 2018),
(5, 'inner_ghost.jpg', 'Inner Ghost', 'https://youtu.be/Y55RmjPTfQo', 'innerghost()', 'inner_ghost.mp4', 'horror', '3.9', 2018),
(6, 'Joker 2019 FULLHD.jpg', 'Joker 2019', 'https://youtu.be/zAGVQLHvwOY', 'joker()', 'Joker _2019_FULLHD.mp4', 'drama', '8.5', 2019),
(7, 'once_upon_a_time_in_hollywood.jpg', 'Once Upon A Time', 'https://youtu.be/ELeMaP8EPAA', 'hollywood()', 'once_upon_a_time_in_hollywood.mp4', 'comedy', '7.7', 2019),
(8, 'peaky_blinders_sezoni_1.jpg', 'Sezoni 1 Episodi 1', 'https://youtu.be/jxMsy2bPo7s', 'peaky_blinders_sezoni_1_episodi_1()', '', 'serial', '8.2', 2014),
(9, 'peaky_blinders_sezoni_1.jpg', 'Sezoni 1 Episodi 2', 'https://youtu.be/t5D4-nTAWLY', 'peaky_blinders_sezoni_1_episodi_2()', '', 'serial', '8.4', 2014),
(10, 'peaky_blinders_sezoni_1.jpg', 'Sezoni 1 Episodi 3', 'https://youtu.be/0hr9lPqEAXg', 'peaky_blinders_sezoni_1_episodi_3()', '', 'serial', '8.4', 2014),
(11, 'queen marie of romania.jpg', 'Queen Marie Of Romania', 'https://youtu.be/xWWP-c4dv5M', 'queenmarie()', 'Queen Marie of Romania 2019.mp4', 'drama', '7.8', 2019),
(12, 'violent.year.jpg', 'A Most Violent Year', 'https://youtu.be/o87gG7ZlEAg', 'amostviolentyear()', 'A_Most_Violent_Year_2014.mp4', 'action', '7.0', 2014),
(13, 'uncut_gems.jpg', 'Uncut Gems', 'https://youtu.be/vTfJp2Ts9X8', 'uncutgems()', 'Uncut Gems.mp4', 'chrime', '7.6', 2019),
(14, 'the-boondock saints.png', 'The Boondock Saints', 'https://youtu.be/ydXojYfCF3I', 'boondock()', 'The Boondock Saints.mp4', 'action', '7.8', 1999),
(15, 'the_report.jpeg', 'The Report', 'https://youtu.be/VHmn9U3c0zA', 'report()', 'The Report.mp4', 'biography', '7.2', 2019),
(16, 'the_edge_of_seventeen.jpg', 'The Edge Of Seventeen', 'https://youtu.be/EB6Gecy6IP8', 'theedgeofseventeen()', 'The Edge Of Seventeen.mp4', 'comedy', '7.3', 2016),
(17, 'the irishman.jpeg', 'The Irishman', 'https://youtu.be/WHXxVmeGQUc', 'theirishman()', 'The Irishman.mp4', 'action', '7.9', 2019),
(18, 'the great war.jpg', 'The Great War', 'https://youtu.be/7HPKPCje4lw', 'thegreatwar()', 'The Great War 2019 fullhd.mp4', 'drama', '3.4', 2019),
(19, 'The Goldfinch 2019.jpg', 'The Goldfinch 2019', 'https://youtu.be/IcG06hZooHM', 'thegoldfinch()', 'The Goldfinch 2019.mp4', 'drama', '6.2', 2019),
(20, 'section-375.jpeg', 'Section 375', 'https://youtu.be/UWjxS8EJ4Z8', 'section375()', 'Section 375.mp4', 'chrime', '8.2', 2019),
(21, 'rambo_last_blood.jpg', 'Rambo Last Blood', 'https://youtu.be/4vWg5yJuWfs', 'rambo()', 'Rambo-Last Blood.mp4', 'action', '6.2', 2019),
(22, 'contagion_2011.jpg', 'Contagion 2011', 'https://www.youtube.com/watch?v=4sYSyuuLk5g', 'contagion_2011()', 'contagion_2011.mp4', 'action', '6.7', 2011),
(23, 'wild_tales.jpg', 'Wild Tales 2014', 'https://www.youtube.com/watch?v=Utq0aDEp084', 'wild_tales_2014()', '[Wild Tales].mp4', 'comedy', '8.1', 2014),
(24, 'peaky_blinders_sezoni_1.jpg', 'Sezoni 1 Episodi 4', '', 'peaky_blinders_sezoni_1_episodi_4()', '', 'serial', '8.7', 2014),
(25, 'peaky_blinders_sezoni_1.jpg', 'Sezoni 1 Episodi 5', '', 'peaky_blinders_sezoni_1_episodi_5()', '', 'serial', '9.0', 2014),
(26, 'peaky_blinders_sezoni_1.jpg', 'Sezoni 1 Episodi 6', '', 'peaky_blinders_sezoni_1_episodi_6()', '', 'serial', '9.2', 2014),
(27, 'gomorra_la_serie_1.jpg', 'Sezoni 1 Episodi 1', 'https://www.youtube.com/watch?v=FsMnW43n3AI', 'gomorra_sezoni_1_episodi_1()', '', 'serial', '8.1', 2014),
(28, 'gomorra_la_serie_1.jpg', 'Sezoni 1 Episodi 2', 'https://www.youtube.com/watch?v=FsMnW43n3AI', 'gomorra_sezoni_1_episodi_2()', '', 'serial', '8.4', 2014),
(29, 'gomorra_la_serie_1.jpg', 'Sezoni 1 Episodi 3', 'https://www.youtube.com/watch?v=FsMnW43n3AI', 'gomorra_sezoni_1_episodi_3()', 'gomorra_sezoni_1_episodi_3.mp4', 'serial', '8.1', 2014),
(30, 'gomorra_la_serie_1.jpg', 'Sezoni 1 Episodi 4', 'https://www.youtube.com/watch?v=FsMnW43n3AI', 'gomorra_sezoni_1_episodi_4()', 'gomorra_sezoni_1_episodi_4.mp4', 'serial', '8.3', 2014),
(31, 'gomorra_la_serie_1.jpg', 'Sezoni 1 Episodi 5', 'https://www.youtube.com/watch?v=FsMnW43n3AI', 'gomorra_sezoni_1_episodi_5()', 'gomorra_sezoni_1_episodi_5.mp4', 'serial', '8.1', 2014),
(32, 'gomorra_la_serie_1.jpg', 'Sezoni 1 Episodi 6', 'https://www.youtube.com/watch?v=FsMnW43n3AI', 'gomorra_sezoni_1_episodi_6()', 'gomorra_sezoni_1_episodi_6.mp4', 'serial', '8.4', 2014),
(33, 'gomorra_la_serie_1.jpg', 'Sezoni 1 Episodi 7', 'https://www.youtube.com/watch?v=FsMnW43n3AI', 'gomorra_sezoni_1_episodi_7()', '', 'serial', '8.3', 2014),
(34, 'gomorra_la_serie_1.jpg', 'Sezoni 1 Episodi 8', 'https://www.youtube.com/watch?v=FsMnW43n3AI', 'gomorra_sezoni_1_episodi_8()', '', 'serial', '8.2', 2014),
(35, 'gomorra_la_serie_1.jpg', 'Sezoni 1 Episodi 9', 'https://www.youtube.com/watch?v=FsMnW43n3AI', 'gomorra_sezoni_1_episodi_9()', '', 'serial', '8.7', 2014),
(36, 'gomorra_la_serie_1.jpg', 'Sezoni 1 Episodi 10', 'https://www.youtube.com/watch?v=FsMnW43n3AI', 'gomorra_sezoni_1_episodi_10()', '', 'serial', '8.6', 2014),
(37, 'gomorra_la_serie_1.jpg', 'Sezoni 1 Episodi 11', 'https://www.youtube.com/watch?v=FsMnW43n3AI', 'gomorra_sezoni_1_episodi_11()', '', 'serial', '9.0', 2014),
(38, 'gomorra_la_serie_1.jpg', 'Sezoni 1 Episodi 12', 'https://www.youtube.com/watch?v=FsMnW43n3AI', 'gomorra_sezoni_1_episodi_12()', '', 'serial', '9.1', 2014),
(39, 'peaky_blinders_sezoni_2.jpg', 'Sezoni 2 Episodi 1', 'https://www.youtube.com/watch?v=Z2NeGIDEmfo', 'peaky_blinders_sezoni_2_episodi_1()', '', 'serial', '8.6', 2014),
(40, 'the_wolf_hour.jpg', 'The Wolf Hour', 'https://www.youtube.com/watch?v=4im2NCE7WUQ', 'the_wolf_hour()', '', 'mister', '4.8', 2019),
(41, 'the_decline.jpg', 'The Decline', 'https://www.youtube.com/watch?v=Cc4SrtApxxA', 'the_decline()', 'the_decline.mp4', 'thriller', '6.3', 2020),
(42, 'escape_from_pretoria.jpg', 'Espace from Pretoria', 'https://www.youtube.com/watch?v=VfjoofUEcy0', 'escape_from_pretoria()', 'Escape from Pretoria 2020.mp4', 'thriller', '6.7', 2020),
(43, '1917.jpg', '1917', 'https://www.youtube.com/watch?v=gZjQROMAh_s', 'hd19_17()', '1917 2019 DVDSCR.mp4', 'drama', '8.4', 2019),
(44, 'theothers.jpg', 'The Others', 'https://www.youtube.com/watch?v=C7pKqaPtMiA', 'theothers()', 'theothers.mp4', 'horror', '7.6', 2001),
(45, 'made_in_france.jpg', 'Made In France', 'https://www.youtube.com/watch?v=XRTCxKPRr9s', 'made_in_france()', 'Made In France 2015.mp4', 'chrime', '6.2', 2015),
(46, 'peaky_blinders_sezoni_2.jpg', 'Sezoni 2 Episodi 2', '', 'peaky_blinders_sezoni_2_episodi_2()', '', 'serial', '8.5', 2014),
(47, 'peaky_blinders_sezoni_2.jpg', 'Sezoni 2 Episodi 3', 'https://www.youtube.com/watch?v=Z2NeGIDEmfo', 'peaky_blinders_sezoni_2_episodi_3()', 'peaky_blinders_sezoni_2_episodi_3.mp4', 'serial', '8.7', 2014),
(48, 'i_still_believe.jpg', 'I Still Believe', 'https://www.youtube.com/watch?v=YnxHyBbYwQQ', 'i_still_believe()', 'i_still_believe.mp4', 'romance', '6.2', 2020),
(49, 'vivarium.jpg', 'Vivarium', 'https://www.youtube.com/watch?v=U3Xy2x9NDrw', 'vivarium()', 'Vivarium 2020.mp4', 'horror', '5.9', 2019),
(50, 'outbreak.jpg', 'Outbreak', 'https://www.youtube.com/watch?v=AgZ5goJibn0', 'outbreak()', 'Outbreak 1995.mp4', 'action', '6.6', 1995),
(51, 'downhill.jpg', 'Downhill', 'https://www.youtube.com/watch?v=QcOsfZIwFIY', 'downhill()', 'downhill.mp4', 'comedy', '4.8', 2020),
(52, 'resistance.jpg', 'Resistance', 'https://www.youtube.com/watch?v=8aZBQCH8IT0', 'resistance()', 'Resistance 2020.mp4', 'biography', '5.4', 2020),
(53, 'bad_boys_for_life.jpg', 'Bad Boys For Life', 'https://www.youtube.com/watch?v=jKCj3XuPG8M', 'bad_boys_for_life()', 'Escape from Pretoria 2020.mp4', 'comedy', '7.1', 2020),
(54, 'el_camino.jpg', 'El Camino', 'https://www.youtube.com/watch?v=1JLUn2DFW4w', 'el_camino()', 'El_Camino_A_Breaking_Bad_Movie_2019.mp4', 'action', '7.4', 2019),
(55, 'mr_brooks.jpg', 'Mr. Brooks', 'https://www.youtube.com/watch?v=hXfbVIFc6t4', 'mr_brooks()', '1917 2019 DVDSCR.mp4', 'chrime', '7.3', 2007),
(56, 'richard_jewell.jpg', 'Richard Jewell', 'https://www.youtube.com/watch?v=gSMxBLlA8qY', 'richard_jewell()', 'Code_8_2019.mp4', 'biography', '7.5', 2019),
(57, 'little_women.jpg', 'Little Women', 'https://www.youtube.com/watch?v=AST2-4db4ic', 'little_women()', '', 'drama', '8.0', 2019),
(58, 'clemency.jpg', 'Clemency', 'https://www.youtube.com/watch?v=HzUhz2XkFfE', 'clemency()', '', 'drama', '6.4', 2019),
(59, 'impossible_monsters.jpg', 'Impossible Monsters', 'https://www.youtube.com/watch?v=krKOhF8y83U', 'impossible_monsters()', '[Wild Tales].mp4', 'thriller', '6.2', 2019),
(60, 'the_intruder.jpg', 'The Intruder', 'https://www.youtube.com/watch?v=aKXvex7b1Ew', 'the_intruder()', '', 'drama', '5.5', 2019),
(61, 'the_fare.jpg', 'The Fare', 'https://www.youtube.com/watch?v=hpqnUXMc1HA', 'the_fare()', '', 'mister', '5.9', 2018),
(63, 'trick.jpg', 'Trick', 'https://www.youtube.com/watch?v=kX87UogsuuE', 'trick()', '', 'horror', '5.6', 2019),
(64, 'military_wives.jpg', 'Military Wives', 'https://www.youtube.com/watch?v=lAGJBtAAIqA', 'military_wives()', 'Military Wives 2020.mp4', 'comedy', '6.5', 2019),
(65, 'underwater.jpg', 'Underwater', 'https://www.youtube.com/watch?v=Rszr56AH3Co', 'underwater()', 'Underwater 2020.mp4', 'action', '5.9', 2020),
(66, 'the_occupant.jpg', 'The Occupant', 'https://www.youtube.com/watch?v=DsHcN40GhCI', 'the_occupant()', 'The Occupant 2020.mp4', 'drama', '6.4', 2020),
(67, 'jarhead_law_of_return.jpg', 'Jarhead: Law of Return', 'https://www.youtube.com/watch?v=r0N997WtPgA', 'jarhead_law_of_return()', 'Jarhead_Law_Of Return_2019.mp4', 'action', '6.7', 2019),
(68, 'peaky_blinders_sezoni_2.jpg', 'Sezoni 2 Episodi 4', 'https://www.youtube.com/watch?v=Z2NeGIDEmfo', 'peaky_blinders_sezoni_2_episodi_4()', '', 'serial', '8.6', 2014),
(69, 'peaky_blinders_sezoni_2.jpg', 'Sezoni 2 Episodi 5', 'https://www.youtube.com/watch?v=Z2NeGIDEmfo', 'peaky_blinders_sezoni_2_episodi_5()', '', 'serial', '8.9', 2014),
(70, 'peaky_blinders_sezoni_2.jpg', 'Sezoni 2 Episodi 6', 'https://www.youtube.com/watch?v=Z2NeGIDEmfo', 'peaky_blinders_sezoni_2_episodi_6()', '', 'serial', '9.6', 2014),
(71, 'peaky_blinders_sezoni_3.jpg', 'Sezoni 3 Episodi 1', 'https://www.youtube.com/watch?v=t5D4-nTAWLY', 'peaky_blinders_sezoni_3_episodi_1()', '', 'serial', '8.3', 2016),
(72, 'peaky_blinders_sezoni_3.jpg', 'Sezoni 3 Episodi 2', 'https://www.youtube.com/watch?v=t5D4-nTAWLY', 'peaky_blinders_sezoni_3_episodi_2()', '', 'serial', '9.0', 2016),
(73, 'peaky_blinders_sezoni_3.jpg', 'Sezoni 3 Episodi 3', 'https://www.youtube.com/watch?v=t5D4-nTAWLY', 'peaky_blinders_sezoni_3_episodi_3()', '', 'serial', '8.8', 2016),
(74, 'peaky_blinders_sezoni_3.jpg', 'Sezoni 3 Episodi 4', 'https://www.youtube.com/watch?v=t5D4-nTAWLY', 'peaky_blinders_sezoni_3_episodi_4()', '', 'serial', '8.9', 2016),
(75, 'peaky_blinders_sezoni_3.jpg', 'Sezoni 3 Episodi 5', 'https://www.youtube.com/watch?v=t5D4-nTAWLY', 'peaky_blinders_sezoni_3_episodi_5()', '', 'serial', '8.5', 2016),
(76, 'peaky_blinders_sezoni_3.jpg', 'Sezoni 3 Episodi 6', 'https://www.youtube.com/watch?v=t5D4-nTAWLY', 'peaky_blinders_sezoni_3_episodi_6()', '', 'serial', '9.6', 2016),
(77, 'peaky_blinders_sezoni_4.jpg', 'Sezoni 4 Episodi 1', 'https://www.youtube.com/watch?v=whgdkjDJAjg', 'peaky_blinders_sezoni_4_episodi_1()', 'gomorra_sezoni_1_episodi_5.mp4', 'serial', '9.5', 2017),
(78, 'peaky_blinders_sezoni_4.jpg', 'Sezoni 4 Episodi 2', 'https://www.youtube.com/watch?v=whgdkjDJAjg', 'peaky_blinders_sezoni_4_episodi_2()', 'gomorra_sezoni_1_episodi_3.mp4', 'serial', '9.3', 2017),
(79, 'peaky_blinders_sezoni_4.jpg', 'Sezoni 4 Episodi 3', 'https://www.youtube.com/watch?v=whgdkjDJAjg', 'peaky_blinders_sezoni_4_episodi_3()', 'gomorra_sezoni_1_episodi_3.mp4', 'serial', '8.7', 2017),
(80, 'peaky_blinders_sezoni_4.jpg', 'Sezoni 4 Episodi 4', 'https://www.youtube.com/watch?v=whgdkjDJAjg', 'peaky_blinders_sezoni_4_episodi_4()', 'gomorra_sezoni_1_episodi_6.mp4', 'serial', '8.8', 2017),
(81, 'peaky_blinders_sezoni_4.jpg', 'Sezoni 4 Episodi 5', 'https://www.youtube.com/watch?v=whgdkjDJAjg', 'peaky_blinders_sezoni_4_episodi_5()', 'gomorra_sezoni_1_episodi_3.mp4', 'serial', '8.9', 2017),
(82, 'peaky_blinders_sezoni_4.jpg', 'Sezoni 4 Episodi 6', 'https://www.youtube.com/watch?v=whgdkjDJAjg', 'peaky_blinders_sezoni_4_episodi_6()', 'gomorra_sezoni_1_episodi_3.mp4', 'serial', '9.5', 2017),
(83, 'peaky_blinders_sezoni_5.jpg', 'Sezoni 5 Episodi 1', 'https://www.youtube.com/watch?v=Ruyl8_PT_y8', 'peaky_blinders_sezoni_5_episodi_1()', 'gomorra_sezoni_1_episodi_3.mp4', 'serial', '8.6', 2019),
(84, 'peaky_blinders_sezoni_5.jpg', 'Sezoni 5 Episodi 2', 'https://www.youtube.com/watch?v=Ruyl8_PT_y8', 'peaky_blinders_sezoni_5_episodi_2()', 'gomorra_sezoni_1_episodi_3.mp4', 'serial', '9.0', 2019),
(85, 'peaky_blinders_sezoni_5.jpg', 'Sezoni 5 Episodi 3', 'https://www.youtube.com/watch?v=Ruyl8_PT_y8', 'peaky_blinders_sezoni_5_episodi_3()', 'gomorra_sezoni_1_episodi_3.mp4', 'serial', '8.7', 2019),
(86, 'peaky_blinders_sezoni_5.jpg', 'Sezoni 5 Episodi 4', 'https://www.youtube.com/watch?v=Ruyl8_PT_y8', 'peaky_blinders_sezoni_5_episodi_4()', 'gomorra_sezoni_1_episodi_3.mp4', 'serial', '9.0', 2019),
(87, 'peaky_blinders_sezoni_5.jpg', 'Sezoni 5 Episodi 5', 'https://www.youtube.com/watch?v=Ruyl8_PT_y8', 'peaky_blinders_sezoni_5_episodi_5()', 'gomorra_sezoni_1_episodi_3.mp4', 'serial', '8.8', 2019),
(88, 'peaky_blinders_sezoni_5.jpg', 'Sezoni 5 Episodi 6', 'https://www.youtube.com/watch?v=Ruyl8_PT_y8', 'peaky_blinders_sezoni_5_episodi_6()', 'gomorra_sezoni_1_episodi_3.mp4', 'serial', '9.4', 2019),
(89, 'la_casa_de_papel_sezoni_1.jpg', 'Sezoni 1 Episodi 1', 'https://www.youtube.com/watch?v=hMANIarjT50', 'casa_de_papel_sezoni_1_episodi_1()', 'casa_de_papel_sezoni_1_episodi_1.mp4', 'serial', '8.4', 2017),
(90, 'la_casa_de_papel_sezoni_1.jpg', 'Sezoni 1 Episodi 2', 'https://www.youtube.com/watch?v=hMANIarjT50', 'casa_de_papel_sezoni_1_episodi_2()', 'casa_de_papel_sezoni_1_episodi_2.mp4', 'serial', '8.4', 2017),
(91, 'martyrs_2008.jpg', 'Martyrs', 'https://www.youtube.com/watch?v=whLR-LWitPc', 'martyrs_2008()', 'martyrs_2008.mp4', 'horror', '7.1', 2008),
(92, 'la_casa_de_papel_sezoni_1.jpg', 'Sezoni 1 Episodi 3', 'https://www.youtube.com/watch?v=hMANIarjT50', 'casa_de_papel_sezoni_1_episodi_3()', 'casa_de_papel_sezoni_1_episodi_3.mp4', 'serial', '8.2', 2017),
(93, 'la_casa_de_papel_sezoni_1.jpg', 'Sezoni 1 Episodi 4', 'https://www.youtube.com/watch?v=hMANIarjT50', 'casa_de_papel_sezoni_1_episodi_4()', 'casa_de_papel_sezoni_1_episodi_4.mp4', 'serial', '8.3', 2017),
(94, 'la_casa_de_papel_sezoni_1.jpg', 'Sezoni 1 Episodi 5', 'https://www.youtube.com/watch?v=hMANIarjT50', 'casa_de_papel_sezoni_1_episodi_5()', 'casa_de_papel_sezoni_1_episodi_5.mp4', 'serial', '8.4', 2017),
(95, 'la_casa_de_papel_sezoni_1.jpg', 'Sezoni 1 Episodi 6', 'https://www.youtube.com/watch?v=hMANIarjT50', 'casa_de_papel_sezoni_1_episodi_6()', 'casa_de_papel_sezoni_1_episodi_6.mp4', 'serial', '8.3', 2017),
(96, 'la_casa_de_papel_sezoni_1.jpg', 'Sezoni 1 Episodi 7', 'https://www.youtube.com/watch?v=hMANIarjT50', 'casa_de_papel_sezoni_1_episodi_7()', 'casa_de_papel_sezoni_1_episodi_7.mp4', 'serial', '8.4', 2017),
(97, 'la_casa_de_papel_sezoni_1.jpg', 'Sezoni 1 Episodi 8', 'https://www.youtube.com/watch?v=hMANIarjT50', 'casa_de_papel_sezoni_1_episodi_8()', 'casa_de_papel_sezoni_1_episodi_8.mp4', 'serial', '8.2', 2017),
(98, 'la_casa_de_papel_sezoni_1.jpg', 'Sezoni 1 Episodi 9', 'https://www.youtube.com/watch?v=hMANIarjT50', 'casa_de_papel_sezoni_1_episodi_9()', 'casa_de_papel_sezoni_1_episodi_9.mp4', 'serial', '8.7', 2017),
(99, 'la_casa_de_papel_sezoni_1.jpg', 'Sezoni 1 Episodi 10', 'https://www.youtube.com/watch?v=hMANIarjT50', 'casa_de_papel_sezoni_1_episodi_10()', 'casa_de_papel_sezoni_1_episodi_10.mp4', 'serial', '8.5', 2017),
(100, 'la_casa_de_papel_sezoni_1.jpg', 'Sezoni 1 Episodi 11', 'https://www.youtube.com/watch?v=hMANIarjT50', 'casa_de_papel_sezoni_1_episodi_11()', 'casa_de_papel_sezoni_1_episodi_11.mp4', 'serial', '8.3', 2017),
(101, 'la_casa_de_papel_sezoni_1.jpg', 'Sezoni 1 Episodi 12', 'https://www.youtube.com/watch?v=hMANIarjT50', 'casa_de_papel_sezoni_1_episodi_12()', 'casa_de_papel_sezoni_1_episodi_12.mp4', 'serial', '8.6', 2017),
(102, 'la_casa_de_papel_sezoni_1.jpg', 'Sezoni 1 Episodi 13', 'https://www.youtube.com/watch?v=hMANIarjT50', 'casa_de_papel_sezoni_1_episodi_13()', 'casa_de_papel_sezoni_1_episodi_13.mp4', 'serial', '9.0', 2017),
(103, 'la_casa_de_papel_sezoni_2.jpg', 'Sezoni 2 Episodi 1', 'https://www.youtube.com/watch?v=3DtZ8FE0bGs', 'casa_de_papel_sezoni_2_episodi_1()', 'casa_de_papel_sezoni_2_episodi_1.mp4', 'serial', '8.6', 2017),
(104, 'la_casa_de_papel_sezoni_2.jpg', 'Sezoni 2 Episodi 2', 'https://www.youtube.com/watch?v=3DtZ8FE0bGs', 'casa_de_papel_sezoni_2_episodi_2()', 'casa_de_papel_sezoni_2_episodi_2.mp4', 'serial', '8.5', 2017),
(105, 'la_casa_de_papel_sezoni_2.jpg', 'Sezoni 2 Episodi 3', 'https://www.youtube.com/watch?v=3DtZ8FE0bGs', 'casa_de_papel_sezoni_2_episodi_3()', 'casa_de_papel_sezoni_2_episodi_3.mp4', 'serial', '8.8', 2017),
(106, 'la_casa_de_papel_sezoni_2.jpg', 'Sezoni 2 Episodi 4', 'https://www.youtube.com/watch?v=3DtZ8FE0bGs', 'casa_de_papel_sezoni_2_episodi_4()', 'casa_de_papel_sezoni_2_episodi_4.mp4', 'serial', '8.8', 2017),
(107, 'la_casa_de_papel_sezoni_2.jpg', 'Sezoni 2 Episodi 5', 'https://www.youtube.com/watch?v=3DtZ8FE0bGs', 'casa_de_papel_sezoni_2_episodi_5()', 'casa_de_papel_sezoni_2_episodi_5.mp4', 'serial', '8.8', 2017),
(108, 'la_casa_de_papel_sezoni_2.jpg', 'Sezoni 2 Episodi 6', 'https://www.youtube.com/watch?v=3DtZ8FE0bGs', 'casa_de_papel_sezoni_2_episodi_6()', 'casa_de_papel_sezoni_2_episodi_6.mp4', 'serial', '9.4', 2017),
(109, 'la_casa_de_papel_sezoni_3.jpg', 'Sezoni 3 Episodi 1', 'https://www.youtube.com/watch?v=TFJwUwnShnA', 'casa_de_papel_sezoni_3_episodi_2()', 'casa_de_papel_sezoni_3_episodi_1.mp4', 'serial', '8.3', 2019),
(110, 'la_casa_de_papel_sezoni_3.jpg', 'Sezoni 3 Episodi 2', 'https://www.youtube.com/watch?v=TFJwUwnShnA', 'casa_de_papel_sezoni_3_episodi_2()', 'casa_de_papel_sezoni_3_episodi_2.mp4', 'serial', '8.4', 2019),
(111, 'la_casa_de_papel_sezoni_3.jpg', 'Sezoni 3 Episodi 3', 'https://www.youtube.com/watch?v=TFJwUwnShnA', 'casa_de_papel_sezoni_3_episodi_3()', 'casa_de_papel_sezoni_3_episodi_3.mp4', 'serial', '8.4', 2019),
(112, 'la_casa_de_papel_sezoni_3.jpg', 'Sezoni 3 Episodi 4', 'https://www.youtube.com/watch?v=TFJwUwnShnA', 'casa_de_papel_sezoni_3_episodi_4()', 'casa_de_papel_sezoni_3_episodi_4.mp4', 'serial', '8.1', 2019),
(113, 'la_casa_de_papel_sezoni_3.jpg', 'Sezoni 3 Episodi 5', 'https://www.youtube.com/watch?v=TFJwUwnShnA', 'casa_de_papel_sezoni_3_episodi_5()', 'casa_de_papel_sezoni_3_episodi_5.mp4', 'serial', '8.1', 2019),
(114, 'la_casa_de_papel_sezoni_3.jpg', 'Sezoni 3 Episodi 6', 'https://www.youtube.com/watch?v=TFJwUwnShnA', 'casa_de_papel_sezoni_3_episodi_6()', 'casa_de_papel_sezoni_3_episodi_6.mp4', 'serial', '8.3', 2019),
(115, 'la_casa_de_papel_sezoni_3.jpg', 'Sezoni 3 Episodi 7', 'https://www.youtube.com/watch?v=TFJwUwnShnA', 'casa_de_papel_sezoni_3_episodi_7()', 'casa_de_papel_sezoni_3_episodi_7.mp4', 'serial', '8.5', 2019),
(116, 'la_casa_de_papel_sezoni_3.jpg', 'Sezoni 3 Episodi 8', 'https://www.youtube.com/watch?v=TFJwUwnShnA', 'casa_de_papel_sezoni_3_episodi_8()', 'casa_de_papel_sezoni_3_episodi_8.mp4', 'serial', '9.5', 2019),
(117, 'la_casa_de_papel_sezoni_4.png', 'Sezoni 4 Episodi 1', 'https://www.youtube.com/watch?v=p_PJbmrX4uk', 'casa_de_papel_sezoni_4_episodi_1()', 'casa_de_papel_sezoni_4_episodi_1.mp4', 'serial', '7.6', 2020),
(118, 'la_casa_de_papel_sezoni_4.png', 'Sezoni 4 Episodi 2', 'https://www.youtube.com/watch?v=p_PJbmrX4uk', 'casa_de_papel_sezoni_4_episodi_2()', 'casa_de_papel_sezoni_4_episodi_2.mp4', 'serial', '7.3', 2020),
(119, 'la_casa_de_papel_sezoni_4.png', 'Sezoni 4 Episodi 3', 'https://www.youtube.com/watch?v=p_PJbmrX4uk', 'casa_de_papel_sezoni_4_episodi_3()', 'casa_de_papel_sezoni_4_episodi_3.mp4', 'serial', '7.2', 2020),
(120, 'la_casa_de_papel_sezoni_4.png', 'Sezoni 4 Episodi 4', 'https://www.youtube.com/watch?v=p_PJbmrX4uk', 'casa_de_papel_sezoni_4_episodi_4()', 'casa_de_papel_sezoni_4_episodi_4.mp4', 'serial', '7.8', 2020),
(121, 'la_casa_de_papel_sezoni_4.png', 'Sezoni 4 Episodi 5', 'https://www.youtube.com/watch?v=p_PJbmrX4uk', 'casa_de_papel_sezoni_4_episodi_5()', 'casa_de_papel_sezoni_4_episodi_5.mp4', 'serial', '7.3', 2020),
(122, 'la_casa_de_papel_sezoni_4.png', 'Sezoni 4 Episodi 6', 'https://www.youtube.com/watch?v=p_PJbmrX4uk', 'casa_de_papel_sezoni_4_episodi_6()', 'casa_de_papel_sezoni_4_episodi_6.mp4', 'serial', '7.6', 2020),
(123, 'la_casa_de_papel_sezoni_4.png', 'Sezoni 4 Episodi 7', 'https://www.youtube.com/watch?v=p_PJbmrX4uk', 'casa_de_papel_sezoni_4_episodi_7()', 'casa_de_papel_sezoni_4_episodi_7.mp4', 'serial', '8.4', 2020),
(124, 'la_casa_de_papel_sezoni_4.png', 'Sezoni 4 Episodi 8', 'https://www.youtube.com/watch?v=p_PJbmrX4uk', 'casa_de_papel_sezoni_4_episodi_8()', 'casa_de_papel_sezoni_4_episodi_8.mp4', 'serial', '8.4', 2020),
(125, '13_sins.jpg', '13 Sins', 'https://www.youtube.com/watch?v=vTNtyJIKTXk', 'sins_13()', '13_sins.mp4', 'thriller', '6.3', 2014),
(126, 'bull.jpg', 'Bull', 'https://www.youtube.com/watch?v=ZmO7rbB-VfY', 'bull()', 'bull.mp4', 'drama', '7.3', 2019),
(127, 'coffee_&_kareem.jpg', 'Coffee & Kareem', 'https://www.youtube.com/watch?v=hY9h5o0G_OE', 'coffee_and_kareem()', 'coffee_&_kareem.mp4', 'action', '5.1', 2020),
(128, 'conviction.jpg', 'Conviction', 'https://www.youtube.com/watch?v=NrPtr0aQx3s', 'conviction()', 'conviction.mp4', 'biography', '7.2', 2010),
(129, 'kogustaki_mucize.jpg', 'Kogustaki Mucize', 'https://www.youtube.com/watch?v=_PsuXKa2o2o', 'kogustaki_mucize()', 'kogustaki_mucize.mp4', 'drama', '8.3', 2019),
(130, 'ordinary_love.jpg', 'Ordinary Love', 'https://www.youtube.com/watch?v=P6ihjNXgMdk', 'ordinary_love()', 'ordinary_love.mp4', 'drama', '6.9', 2019),
(131, 'shooting_heroin.jpg', 'Shooting Heroin', 'https://www.youtube.com/watch?v=oj5p48qc7s0', 'shooting_heroin()', 'shooting_heroin.mp4', 'action', '8.1', 2020),
(132, 'star_trek.jpg', 'Star Trek', 'https://www.youtube.com/watch?v=iGAHnZ555nI', 'star_trek()', 'star_trek.mp4', 'action', '7.9', 2009),
(133, 'the_gentlemen.jpg', 'The Gentlemen', 'https://www.youtube.com/watch?v=Ify9S7hj480', 'the_gentlemen()', 'the_gentlemen.mp4', 'action', '8.0', 2019),
(134, 'el_chapo_sezoni_1.jpg', 'Sezoni 1 Episodi 1', 'https://www.youtube.com/watch?v=qDoyQDEOXuk', 'el_chapo_sezoni_1_episodi_1()', 'el_chapo_sezoni_1_episodi_1.mp4', 'serial', '7.8', 2017),
(135, 'el_chapo_sezoni_1.jpg', 'Sezoni 1 Episodi 2', 'https://www.youtube.com/watch?v=qDoyQDEOXuk', 'el_chapo_sezoni_1_episodi_2()', 'el_chapo_sezoni_1_episodi_2.mp4', 'serial', '8.0', 2017),
(136, 'el_chapo_sezoni_1.jpg', 'Sezoni 1 Episodi 3', 'https://www.youtube.com/watch?v=qDoyQDEOXuk', 'el_chapo_sezoni_1_episodi_3()', 'el_chapo_sezoni_1_episodi_3.mp4', 'serial', '8.4', 2017),
(137, 'el_chapo_sezoni_1.jpg', 'Sezoni 1 Episodi 4', 'https://www.youtube.com/watch?v=qDoyQDEOXuk', 'el_chapo_sezoni_1_episodi_4()', 'el_chapo_sezoni_1_episodi_4.mp4', 'serial', '8.2', 2017),
(138, 'el_chapo_sezoni_1.jpg', 'Sezoni 1 Episodi 5', 'https://www.youtube.com/watch?v=qDoyQDEOXuk', 'el_chapo_sezoni_1_episodi_5()', 'el_chapo_sezoni_1_episodi_5.mp4', 'serial', '7.8', 2017),
(139, 'el_chapo_sezoni_1.jpg', 'Sezoni 1 Episodi 6', 'https://www.youtube.com/watch?v=qDoyQDEOXuk', 'el_chapo_sezoni_1_episodi_6()', 'el_chapo_sezoni_1_episodi_6.mp4', 'serial', '7.9', 2017),
(140, 'el_chapo_sezoni_1.jpg', 'Sezoni 1 Episodi 7', 'https://www.youtube.com/watch?v=qDoyQDEOXuk', 'el_chapo_sezoni_1_episodi_7()', 'el_chapo_sezoni_1_episodi_7.mp4', 'serial', '8.0', 2017),
(141, 'el_chapo_sezoni_1.jpg', 'Sezoni 1 Episodi 8', 'https://www.youtube.com/watch?v=qDoyQDEOXuk', 'el_chapo_sezoni_1_episodi_8()', 'el_chapo_sezoni_1_episodi_8.mp4', 'serial', '7.7', 2017),
(142, 'el_chapo_sezoni_1.jpg', 'Sezoni 1 Episodi 9', 'https://www.youtube.com/watch?v=qDoyQDEOXuk', 'el_chapo_sezoni_1_episodi_9()', 'el_chapo_sezoni_1_episodi_9.mp4', 'serial', '8.0', 2017),
(143, 'el_chapo_sezoni_2.jpg', 'Sezoni 2 Episodi 1', 'https://www.youtube.com/watch?v=qDoyQDEOXuk', 'el_chapo_sezoni_2_episodi_1()', 'el_chapo_sezoni_2_episodi_1.mp4', 'serial', '8.0', 2017),
(144, 'el_chapo_sezoni_2.jpg', 'Sezoni 2 Episodi 2', 'https://www.youtube.com/watch?v=zeq1cBzgnzA', 'el_chapo_sezoni_2_episodi_2()', 'el_chapo_sezoni_2_episodi_2.mp4', 'serial', '8.0', 2017),
(145, 'el_chapo_sezoni_2.jpg', 'Sezoni 2 Episodi 3', 'https://www.youtube.com/watch?v=zeq1cBzgnzA', 'el_chapo_sezoni_2_episodi_3()', 'el_chapo_sezoni_2_episodi_2.mp4', 'serial', '8.1', 2017),
(146, 'el_chapo_sezoni_2.jpg', 'Sezoni 2 Episodi 4', 'https://www.youtube.com/watch?v=zeq1cBzgnzA', 'el_chapo_sezoni_2_episodi_4()', 'el_chapo_sezoni_2_episodi_2.mp4', 'serial', '8.3', 2017),
(147, 'el_chapo_sezoni_2.jpg', 'Sezoni 2 Episodi 5', 'https://www.youtube.com/watch?v=zeq1cBzgnzA', 'el_chapo_sezoni_2_episodi_5()', 'el_chapo_sezoni_2_episodi_5.mp4', 'serial', '7.7', 2017),
(148, 'el_chapo_sezoni_2.jpg', 'Sezoni 2 Episodi 6', 'https://www.youtube.com/watch?v=zeq1cBzgnzA', 'el_chapo_sezoni_2_episodi_6()', 'el_chapo_sezoni_2_episodi_6.mp4', 'serial', '7.6', 2017),
(149, 'el_chapo_sezoni_2.jpg', 'Sezoni 2 Episodi 7', 'https://www.youtube.com/watch?v=zeq1cBzgnzA', 'el_chapo_sezoni_2_episodi_7()', 'el_chapo_sezoni_2_episodi_7.mp4', 'serial', '7.7', 2017),
(150, 'el_chapo_sezoni_2.jpg', 'Sezoni 2 Episodi 8', 'https://www.youtube.com/watch?v=zeq1cBzgnzA', 'el_chapo_sezoni_2_episodi_8()', 'el_chapo_sezoni_2_episodi_8.mp4', 'serial', '7.7', 2017),
(151, 'el_chapo_sezoni_2.jpg', 'Sezoni 2 Episodi 9', 'https://www.youtube.com/watch?v=zeq1cBzgnzA', 'el_chapo_sezoni_2_episodi_9()', 'el_chapo_sezoni_2_episodi_9.mp4', 'serial', '8.0', 2017),
(152, 'el_chapo_sezoni_2.jpg', 'Sezoni 2 Episodi 10', 'https://www.youtube.com/watch?v=zeq1cBzgnzA', 'el_chapo_sezoni_2_episodi_10()', 'el_chapo_sezoni_2_episodi_10.mp4', 'serial', '8.2', 2017),
(153, 'el_chapo_sezoni_2.jpg', 'Sezoni 2 Episodi 11', 'https://www.youtube.com/watch?v=zeq1cBzgnzA', 'el_chapo_sezoni_2_episodi_11()', 'el_chapo_sezoni_2_episodi_11.mp4', 'serial', '8.0', 2017),
(154, 'el_chapo_sezoni_2.jpg', 'Sezoni 2 Episodi 12', 'https://www.youtube.com/watch?v=zeq1cBzgnzA', 'el_chapo_sezoni_2_episodi_12()', 'el_chapo_sezoni_2_episodi_12.mp4', 'serial', '8.6', 2017),
(155, 'el_chapo_sezoni_3.jpg', 'Sezoni 3 Episodi 1', 'https://www.youtube.com/watch?v=D5b_kd7RRdg', 'el_chapo_sezoni_3_episodi_1()', 'el_chapo_sezoni_3_episodi_1.mp4', 'serial', '8.0', 2018),
(156, 'el_chapo_sezoni_3.jpg', 'Sezoni 3 Episodi 2', 'https://www.youtube.com/watch?v=D5b_kd7RRdg', 'el_chapo_sezoni_3_episodi_2()', 'el_chapo_sezoni_3_episodi_2.mp4', 'serial', '8.0', 2018),
(157, 'el_chapo_sezoni_3.jpg', 'Sezoni 3 Episodi 3', 'https://www.youtube.com/watch?v=D5b_kd7RRdg', 'el_chapo_sezoni_3_episodi_3()', 'el_chapo_sezoni_3_episodi_3.mp4', 'serial', '7.9', 2018),
(158, 'el_chapo_sezoni_3.jpg', 'Sezoni 3 Episodi 4', 'https://www.youtube.com/watch?v=D5b_kd7RRdg', 'el_chapo_sezoni_3_episodi_4()', 'el_chapo_sezoni_3_episodi_4.mp4', 'serial', '8.0', 2018),
(159, 'el_chapo_sezoni_3.jpg', 'Sezoni 3 Episodi 5', 'https://www.youtube.com/watch?v=D5b_kd7RRdg', 'el_chapo_sezoni_3_episodi_5()', 'el_chapo_sezoni_3_episodi_5.mp4', 'serial', '7.8', 2018),
(160, 'el_chapo_sezoni_3.jpg', 'Sezoni 3 Episodi 6', 'https://www.youtube.com/watch?v=D5b_kd7RRdg', 'el_chapo_sezoni_3_episodi_6()', 'el_chapo_sezoni_3_episodi_6.mp4', 'serial', '7.8', 2018),
(161, 'el_chapo_sezoni_3.jpg', 'Sezoni 3 Episodi 7', 'https://www.youtube.com/watch?v=D5b_kd7RRdg', 'el_chapo_sezoni_3_episodi_7()', 'el_chapo_sezoni_3_episodi_7.mp4', 'serial', '7.9', 2018),
(162, 'el_chapo_sezoni_3.jpg', 'Sezoni 3 Episodi 8', 'https://www.youtube.com/watch?v=D5b_kd7RRdg', 'el_chapo_sezoni_3_episodi_8()', 'el_chapo_sezoni_3_episodi_8.mp4', 'serial', '8.0', 2018),
(163, 'el_chapo_sezoni_3.jpg', 'Sezoni 3 Episodi 9', 'https://www.youtube.com/watch?v=D5b_kd7RRdg', 'el_chapo_sezoni_3_episodi_9()', 'el_chapo_sezoni_3_episodi_9.mp4', 'serial', '7.4', 2018),
(164, 'el_chapo_sezoni_3.jpg', 'Sezoni 3 Episodi 10', 'https://www.youtube.com/watch?v=D5b_kd7RRdg', 'el_chapo_sezoni_3_episodi_10()', 'el_chapo_sezoni_3_episodi_10.mp4', 'serial', '8.1', 2018),
(165, 'el_chapo_sezoni_3.jpg', 'Sezoni 3 Episodi 11', 'https://www.youtube.com/watch?v=D5b_kd7RRdg', 'el_chapo_sezoni_3_episodi_11()', 'el_chapo_sezoni_3_episodi_11.mp4', 'serial', '7.9', 2018),
(166, 'el_chapo_sezoni_3.jpg', 'Sezoni 3 Episodi 12', 'https://www.youtube.com/watch?v=D5b_kd7RRdg', 'el_chapo_sezoni_3_episodi_12()', 'el_chapo_sezoni_3_episodi_12.mp4', 'serial', '7.7', 2018),
(167, 'el_chapo_sezoni_3.jpg', 'Sezoni 3 Episodi 13', 'https://www.youtube.com/watch?v=D5b_kd7RRdg', 'el_chapo_sezoni_3_episodi_13()', 'el_chapo_sezoni_3_episodi_13.mp4', 'serial', '8.0', 2018),
(168, 'miami_bici.jpg', 'Miami Bici', 'https://www.youtube.com/watch?v=zUOneia4y6A', 'miami_bici()', 'miami_bici.mp4', 'comedy', '6.6', 2020),
(169, 'a_bigger_splash.jpg', 'A Bigger Splash', 'https://www.youtube.com/watch?v=3zC13ekq1Sk', 'a_bigger_splash()', 'a_bigger_splash.mp4', 'drama', '6.4', 2015),
(170, 'kurier.jpg', 'Kurier', 'https://www.youtube.com/watch?v=RrWRSzUEcig', 'kurier()', 'kurier.mp4', 'action', '5.7', 2019),
(171, 'lottery_ticket.jpg', 'Lottery Ticket', 'https://www.youtube.com/watch?v=N2u5JvA5sCs', 'lottery_ticket()', 'lottery_ticket.mp4', 'comedy', '5.0', 2010);

-- --------------------------------------------------------

--
-- Table structure for table `seriale`
--

CREATE TABLE `seriale` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seriale`
--

INSERT INTO `seriale` (`id`, `title`, `link`, `image`) VALUES
(1, 'Peaky Blinders', 'peaky_blinders.php', 'peaky_blinders_tv_series.jpg'),
(2, 'Gomorra', 'gomorra.php', 'gomorra_la_serie.jpg'),
(3, 'La Casa De Papel', 'casadepapel.php', 'la_casa_de_papel.jpg'),
(4, 'El Chapo', 'el_chapo.php', 'el_chapo_tv_series.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(30) NOT NULL,
  `tokenExpire` varchar(30) NOT NULL,
  `birthday` date NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `token`, `tokenExpire`, `birthday`, `role`) VALUES
(32, 'Admin', 'User', 'adminuser@gmail.com', '$2y$10$m5U9eKzRxpJytV0WA9So9.Xlw0YtDoEhrklYKkrkdv6dkCw/nIoRy', '', '2020-04-03 23:04:52', '1991-02-02', 1),
(44, 'Normal User', 'User', 'normaluser@gmail.com', '$2y$10$WTmMDrdCz.HQtq1SKpGOnu8ilsorQ3p1X2ZP0pdqbKUPLtYEk2gMa', '', '', '2000-02-02', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seriale`
--
ALTER TABLE `seriale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `seriale`
--
ALTER TABLE `seriale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
