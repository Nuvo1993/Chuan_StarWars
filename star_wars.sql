-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2017 at 10:01 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `star_wars`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `name`) VALUES
(1, 'Star Wars Quiz 1');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_answer`
--

CREATE TABLE `quiz_answer` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `quiz_answer`
--

INSERT INTO `quiz_answer` (`id`, `question_id`, `answer`, `is_correct`) VALUES
(1, 1, 'Luke Skywalker', 1),
(2, 2, 'C-390', 1),
(3, 3, 'R2-D2', 1),
(4, 4, 'Darth Vader', 1),
(5, 5, 'Leia Organa', 1),
(6, 6, 'Owen Lars', 1),
(7, 7, 'Beru Whitesun Lars', 1),
(8, 8, 'R5-D4', 1),
(9, 9, 'Biggs Darklighter', 1),
(10, 10, 'Obi-Wan Kenobi', 1),
(11, 11, 'Alderaan', 1),
(12, 12, 'Yavin IV', 1),
(13, 13, 'Hoth', 1),
(14, 14, 'Dagobah', 1),
(15, 15, 'Bespin', 1),
(16, 16, 'Endor', 1),
(17, 17, 'Naboo', 1),
(18, 18, 'Coruscant', 1),
(19, 19, 'Kamino', 1),
(20, 20, 'Geonosis', 1),
(21, 21, 'Sentinel-class landing craft', 1),
(22, 22, 'Death Star', 1),
(23, 23, 'Millennium Falcon', 1),
(24, 24, 'Y-wing', 1),
(25, 25, 'X-wing', 1),
(26, 26, 'TIE Advanced x1', 1),
(27, 27, 'Executor', 1),
(28, 28, 'Slave 1', 1),
(29, 29, 'Imperial shuttle', 1),
(30, 30, 'EF76 Nebulon-B escort frigate', 1),
(31, 31, 'Sand Crawler', 1),
(32, 32, 'T-16 skyhopper', 1),
(33, 33, 'X-34 landspeeder', 1),
(34, 34, 'TIE starfighter', 1),
(35, 35, 'Snowspeeder', 1),
(36, 36, 'TIE bomber', 1),
(37, 37, 'AT-AT', 1),
(38, 38, 'AT-ST', 1),
(39, 39, 'Storm IV Twin-Pod cloud car', 1),
(40, 40, 'Sail barge', 1),
(41, 1, 'Dummy Answer', 0),
(42, 2, 'Dummy Answer', 0),
(43, 3, 'Dummy Answer', 0),
(44, 4, 'Dummy Answer', 0),
(45, 5, 'Dummy Answer', 0),
(46, 6, 'Dummy Answer', 0),
(47, 7, 'Dummy Answer', 0),
(48, 8, 'Dummy Answer', 0),
(49, 9, 'Dummy Answer', 0),
(50, 10, 'Dummy Answer', 0),
(51, 11, 'Dummy Answer', 0),
(52, 12, 'Dummy Answer', 0),
(53, 13, 'Dummy Answer', 0),
(54, 14, 'Dummy Answer', 0),
(55, 15, 'Dummy Answer', 0),
(56, 16, 'Dummy Answer', 0),
(57, 17, 'Dummy Answer', 0),
(58, 18, 'Dummy Answer', 0),
(59, 19, 'Dummy Answer', 0),
(60, 20, 'Dummy Answer', 0),
(61, 21, 'Dummy Answer', 0),
(62, 22, 'Dummy Answer', 0),
(63, 23, 'Dummy Answer', 0),
(64, 24, 'Dummy Answer', 0),
(65, 25, 'Dummy Answer', 0),
(66, 26, 'Dummy Answer', 0),
(67, 27, 'Dummy Answer', 0),
(68, 28, 'Dummy Answer', 0),
(69, 29, 'Dummy Answer', 0),
(70, 30, 'Dummy Answer', 0),
(71, 31, 'Dummy Answer', 0),
(72, 32, 'Dummy Answer', 0),
(73, 33, 'Dummy Answer', 0),
(74, 34, 'Dummy Answer', 0),
(75, 35, 'Dummy Answer', 0),
(76, 36, 'Dummy Answer', 0),
(77, 37, 'Dummy Answer', 0),
(78, 38, 'Dummy Answer', 0),
(79, 39, 'Dummy Answer', 0),
(80, 40, 'Dummy Answer', 0),
(81, 1, 'Dummy Answer', 0),
(82, 2, 'Dummy Answer', 0),
(83, 3, 'Dummy Answer', 0),
(84, 4, 'Dummy Answer', 0),
(85, 5, 'Dummy Answer', 0),
(86, 6, 'Dummy Answer', 0),
(87, 7, 'Dummy Answer', 0),
(88, 8, 'Dummy Answer', 0),
(89, 9, 'Dummy Answer', 0),
(90, 10, 'Dummy Answer', 0),
(91, 11, 'Dummy Answer', 0),
(92, 12, 'Dummy Answer', 0),
(93, 13, 'Dummy Answer', 0),
(94, 14, 'Dummy Answer', 0),
(95, 15, 'Dummy Answer', 0),
(96, 16, 'Dummy Answer', 0),
(97, 17, 'Dummy Answer', 0),
(98, 18, 'Dummy Answer', 0),
(99, 19, 'Dummy Answer', 0),
(100, 20, 'Dummy Answer', 0),
(101, 21, 'Dummy Answer', 0),
(102, 22, 'Dummy Answer', 0),
(103, 23, 'Dummy Answer', 0),
(104, 24, 'Dummy Answer', 0),
(105, 25, 'Dummy Answer', 0),
(106, 26, 'Dummy Answer', 0),
(107, 27, 'Dummy Answer', 0),
(108, 28, 'Dummy Answer', 0),
(109, 29, 'Dummy Answer', 0),
(110, 30, 'Dummy Answer', 0),
(111, 31, 'Dummy Answer', 0),
(112, 32, 'Dummy Answer', 0),
(113, 33, 'Dummy Answer', 0),
(114, 34, 'Dummy Answer', 0),
(115, 35, 'Dummy Answer', 0),
(116, 36, 'Dummy Answer', 0),
(117, 37, 'Dummy Answer', 0),
(118, 38, 'Dummy Answer', 0),
(119, 39, 'Dummy Answer', 0),
(120, 40, 'Dummy Answer', 0),
(121, 1, 'Dummy Answer', 0),
(122, 2, 'Dummy Answer', 0),
(123, 3, 'Dummy Answer', 0),
(124, 4, 'Dummy Answer', 0),
(125, 5, 'Dummy Answer', 0),
(126, 6, 'Dummy Answer', 0),
(127, 7, 'Dummy Answer', 0),
(128, 8, 'Dummy Answer', 0),
(129, 9, 'Dummy Answer', 0),
(130, 10, 'Dummy Answer', 0),
(131, 11, 'Dummy Answer', 0),
(132, 12, 'Dummy Answer', 0),
(133, 13, 'Dummy Answer', 0),
(134, 14, 'Dummy Answer', 0),
(135, 15, 'Dummy Answer', 0),
(136, 16, 'Dummy Answer', 0),
(137, 17, 'Dummy Answer', 0),
(138, 18, 'Dummy Answer', 0),
(139, 19, 'Dummy Answer', 0),
(140, 20, 'Dummy Answer', 0),
(141, 21, 'Dummy Answer', 0),
(142, 22, 'Dummy Answer', 0),
(143, 23, 'Dummy Answer', 0),
(144, 24, 'Dummy Answer', 0),
(145, 25, 'Dummy Answer', 0),
(146, 26, 'Dummy Answer', 0),
(147, 27, 'Dummy Answer', 0),
(148, 28, 'Dummy Answer', 0),
(149, 29, 'Dummy Answer', 0),
(150, 30, 'Dummy Answer', 0),
(151, 31, 'Dummy Answer', 0),
(152, 32, 'Dummy Answer', 0),
(153, 33, 'Dummy Answer', 0),
(154, 34, 'Dummy Answer', 0),
(155, 35, 'Dummy Answer', 0),
(156, 36, 'Dummy Answer', 0),
(157, 37, 'Dummy Answer', 0),
(158, 38, 'Dummy Answer', 0),
(159, 39, 'Dummy Answer', 0),
(160, 40, 'Dummy Answer', 0);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_category`
--

CREATE TABLE `quiz_category` (
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `quiz_category`
--

INSERT INTO `quiz_category` (`name`) VALUES
('People'),
('Planets'),
('Starships'),
('Vehicles');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_question`
--

CREATE TABLE `quiz_question` (
  `id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `question` text NOT NULL,
  `points` float NOT NULL DEFAULT '2.5',
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `quiz_question`
--

INSERT INTO `quiz_question` (`id`, `quiz_id`, `category_name`, `question`, `points`, `is_active`) VALUES
(1, 1, 'People', '_____ began his life as a moisture farmer but wanted to join the Rebel Alliance.', 2.5, 1),
(2, 1, 'People', 'Anakin Skywalker created this translator droid for his mother.', 2.5, 1),
(3, 1, 'People', 'This astromech was rewarded for bravery while repairing Queen Amidalas Nabooian Ship.', 2.5, 1),
(4, 1, 'People', 'This dark lord took Starkiller as an apprentice.', 2.5, 1),
(5, 1, 'People', 'This princess kissed her brother before Cersei Lannister.', 2.5, 1),
(6, 1, 'People', '___told look he would have to wait until the next harvest before he could joing the\r\nRebel Alliance.', 2.5, 1),
(7, 1, 'People', '___was Luke Skywalker\'s adoptive mother.', 2.5, 1),
(8, 1, 'People', 'Like this astromech, I have a bad motivator to come up with decent trivia as to why this droid made the database.', 2.5, 1),
(9, 1, 'People', '____ said \"It\'ll be like old times, Luke. They\'ll never stop us.\"', 2.5, 1),
(10, 1, 'People', 'This character had a love triss with Duchess Satine Kryze', 2.5, 1),
(11, 1, 'Planets', 'Leia tells Grand Moff Tarkin the Rebel base is on___.', 2.5, 1),
(12, 1, 'Planets', 'The Death Star tries to destroy the rebel base on___.', 2.5, 1),
(13, 1, 'Planets', 'Tauntans aside from being smelly are native to this planet ___.', 2.5, 1),
(14, 1, 'Planets', 'Luke Skywalker has a force dream from Obi-Wan to go visit Yoda on this planet___.', 2.5, 1),
(15, 1, 'Planets', 'Lando Calrissian was the leader of Cloud City in the skies of this planet___.', 2.5, 1),
(16, 1, 'Planets', 'On this forest moon is where the rebel alliance attacked to take down theshield generator protecting the second Death Star.', 2.5, 1),
(17, 1, 'Planets', 'On this planet the humans and native sea population were at odds until Jar-Jar Binks showed they were more alike then they thought.', 2.5, 1),
(18, 1, 'Planets', 'The Galactic Senate and Jedi Academy are on this city covered planet___.', 2.5, 1),
(19, 1, 'Planets', 'The clone army was created for the Republic by Sifo-Dyas on this planet.', 2.5, 1),
(20, 1, 'Planets', 'Jango Fett was killed on ___.', 2.5, 1),
(21, 1, 'Starships', 'Luke, Leia, and Han flew this stolen Imperial star ship to Endor.', 2.5, 1),
(22, 1, 'Starships', 'Many Rebel Alliance spies died getting the plans to this space station.', 2.5, 1),
(23, 1, 'Starships', 'This ship completed the Kessell run in less then 12 parsecs.', 2.5, 1),
(24, 1, 'Starships', 'This Rebel Alliance ship often makes bombing runs on Star Destoryers.', 2.5, 1),
(25, 1, 'Starships', 'Luke flew this type of ship when he destroyed the Death Star.', 2.5, 1),
(26, 1, 'Starships', 'Darth Vader flew this starship as his personal attack vehicle.', 2.5, 1),
(27, 1, 'Starships', 'This was Darth Vaders personal flag ship and was considered a Super Star Destroyer which crashed into the Death Star.', 2.5, 1),
(28, 1, 'Starships', 'This is Bobba Fetts personal ship.', 2.5, 1),
(29, 1, 'Starships', 'In A New Hope, Darth Vader arrived in this ship.', 2.5, 1),
(30, 1, 'Starships', 'Luke received treatment after his first battle with Darth Vader on this ship.', 2.5, 1),
(31, 1, 'Vehicles', 'On Tatooine, Jawas sell droids out of this giant vehicle.', 2.5, 1),
(32, 1, 'Vehicles', 'Biggs and Luke used to fly this vehicle through Beggar\'s Canyon back home.', 2.5, 1),
(33, 1, 'Vehicles', 'Luke Skywalker had to sell this speeder so he could purchase a ride to Alderran on the Millennium Falcon.', 2.5, 1),
(34, 1, 'Vehicles', 'When the Millennium Falcon came out of hyper space, they ran into this Galactic Empire vehicle that seemed to be lost.', 2.5, 1),
(35, 1, 'Vehicles', 'Luke Skywalker crashed this vehicle on Hoth before destorying an AT-AT.', 2.5, 1),
(36, 1, 'Vehicles', 'In Empire Strikes back the Empire introduces this bomber', 2.5, 1),
(37, 1, 'Vehicles', 'This ground based transport carrier destoryed the shield generator on Hoth.', 2.5, 1),
(38, 1, 'Vehicles', 'This light attack vehicle is known as the chicken walker.', 2.5, 1),
(39, 1, 'Vehicles', 'This car escorted Han and Leia to the Cloud City.', 2.5, 1),
(40, 1, 'Vehicles', 'Jabba the Hutt was road around on this vehicle when he would travel to the Great Pit of Carkoon where the Sarlaac Pit Monster lived.', 2.5, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_answer`
--
ALTER TABLE `quiz_answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id_fk` (`question_id`);

--
-- Indexes for table `quiz_category`
--
ALTER TABLE `quiz_category`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `quiz_question`
--
ALTER TABLE `quiz_question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quiz_id_fk` (`quiz_id`),
  ADD KEY `category_name_fk` (`category_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `quiz_answer`
--
ALTER TABLE `quiz_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
--
-- AUTO_INCREMENT for table `quiz_question`
--
ALTER TABLE `quiz_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `quiz_answer`
--
ALTER TABLE `quiz_answer`
  ADD CONSTRAINT `question_id_fk` FOREIGN KEY (`question_id`) REFERENCES `quiz_question` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quiz_question`
--
ALTER TABLE `quiz_question`
  ADD CONSTRAINT `category_name_fk` FOREIGN KEY (`category_name`) REFERENCES `quiz_category` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `quiz_id_fk` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
