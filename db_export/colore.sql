-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Dic 19, 2024 alle 11:30
-- Versione del server: 10.11.6-MariaDB-0+deb12u1
-- Versione PHP: 8.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colore`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Colori`
--

CREATE TABLE `Colori` (
  `id` int(11) NOT NULL,
  `colore` varchar(7) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dump dei dati per la tabella `Colori`
--

INSERT INTO `Colori` (`id`, `colore`) VALUES
(1, '#FF5733'),
(2, '#33FF57'),
(3, '#3357FF'),
(4, '#F1C40F'),
(5, '#8E44AD'),
(6, '#E67E22'),
(7, '#2ECC71'),
(8, '#3498DB'),
(9, '#E74C3C'),
(10, '#9B59B6'),
(11, '#34495E'),
(12, '#16A085'),
(13, '#F39C12'),
(14, '#D35400'),
(15, '#C0392B'),
(16, '#BDC3C7'),
(17, '#7F8C8D'),
(18, '#2980B9'),
(19, '#27AE60'),
(20, '#8E44AD'),
(21, '#F4D03F'),
(22, '#E74C3C'),
(23, '#C0392B'),
(24, '#2980B9'),
(25, '#8E44AD'),
(26, '#FF1493'),
(27, '#00FF7F'),
(28, '#1E90FF'),
(29, '#32CD32'),
(30, '#FFD700'),
(31, '#8B008B'),
(32, '#FF4500'),
(33, '#228B22'),
(34, '#FF6347'),
(35, '#4682B4'),
(36, '#FFD700'),
(37, '#DDA0DD'),
(38, '#ADFF2F'),
(39, '#FF69B4'),
(40, '#7FFF00'),
(41, '#FF8C00'),
(42, '#E6E6FA'),
(43, '#CD5C5C'),
(44, '#4B0082'),
(45, '#FF00FF'),
(46, '#B22222'),
(47, '#A52A2A'),
(48, '#FFC0CB'),
(49, '#808080'),
(50, '#008080'),
(51, '#000080'),
(52, '#FF4500'),
(53, '#D2691E'),
(54, '#F4A460'),
(55, '#FF1493'),
(56, '#0FF'),
(57, '#F00'),
(58, '#0F0'),
(59, '#00F'),
(60, '#B0E0E6'),
(61, '#778899'),
(62, '#E6E6FA'),
(63, '#FFB6C1'),
(64, '#FFFFE0'),
(65, '#FFA07A'),
(66, '#8FBC8F'),
(67, '#E0FFFF'),
(68, '#F0E68C'),
(69, '#00BFFF'),
(70, '#E6E6FA'),
(71, '#FFDAB9'),
(72, '#FFDEAD'),
(73, '#FFFACD'),
(74, '#FFBFFF'),
(75, '#00CED1'),
(76, '#B0E0E6'),
(77, '#FFC0CB'),
(78, '#D8BFD8'),
(79, '#696969'),
(80, '#BEBEBE'),
(81, '#5F9EA0'),
(82, '#A2CD5A'),
(83, '#7B68EE'),
(84, '#9370DB'),
(85, '#DA70D6'),
(86, '#FF00FF'),
(87, '#FFE4E1'),
(88, '#FFEBCD'),
(89, '#F5F5F5'),
(90, '#E0FFFF'),
(91, '#F5F5DC'),
(92, '#FFF0F5'),
(93, '#FAFAD2'),
(94, '#F5DEB3'),
(95, '#FFE4B5'),
(96, '#DDA0DD'),
(97, '#C0C0C0'),
(98, '#AEEEEE'),
(99, '#B0C4DE'),
(100, '#4682B4'),
(101, '#F0F8FF'),
(102, '#FAEBD7'),
(103, '#00FFFF'),
(104, '#7FFFD4'),
(105, '#F0FFFF'),
(106, '#F5F5DC'),
(107, '#FFE4C4'),
(108, '#000000'),
(109, '#FFEBCD'),
(110, '#0000FF'),
(111, '#8A2BE2'),
(112, '#A52A2A'),
(113, '#DEB887'),
(114, '#5F9EA0'),
(115, '#7FFF00'),
(116, '#D2691E'),
(117, '#FF7F50'),
(118, '#6495ED'),
(119, '#FFF8DC'),
(120, '#DC143C'),
(121, '#00FFFF'),
(122, '#00008B'),
(123, '#008B8B'),
(124, '#B8860B'),
(125, '#A9A9A9'),
(126, '#006400'),
(127, '#A9A9A9'),
(128, '#BDB76B'),
(129, '#8B008B'),
(130, '#556B2F'),
(131, '#FF8C00'),
(132, '#9932CC'),
(133, '#8B0000'),
(134, '#E9967A'),
(135, '#8FBC8F'),
(136, '#483D8B'),
(137, '#2F4F4F'),
(138, '#00CED1'),
(139, '#9400D3'),
(140, '#FF1493'),
(141, '#00BFFF'),
(142, '#696969'),
(143, '#1E90FF'),
(144, '#B22222'),
(145, '#FFFAF0'),
(146, '#228B22'),
(147, '#FF00FF'),
(148, '#DCDCDC'),
(149, '#F8F8FF'),
(150, '#FFD700'),
(151, '#DAA520'),
(152, '#808080'),
(153, '#008000'),
(154, '#ADFF2F'),
(155, '#F0FFF0'),
(156, '#FF69B4'),
(157, '#CD5C5C'),
(158, '#4B0082'),
(159, '#FFFFF0'),
(160, '#F0E68C'),
(161, '#E6E6FA'),
(162, '#FFF0F5'),
(163, '#7CFC00'),
(164, '#FFFACD'),
(165, '#ADD8E6'),
(166, '#D3D3D3'),
(167, '#90EE90'),
(168, '#FFB6C1'),
(169, '#FFA07A'),
(170, '#20B2AA'),
(171, '#87CEFA'),
(172, '#778899'),
(173, '#B0C4DE'),
(174, '#FFFF00'),
(175, '#9ACD32'),
(176, '#F0E68C'),
(177, '#808000'),
(178, '#800000'),
(179, '#66CDAA'),
(180, '#32CD32'),
(181, '#98FB98'),
(182, '#8A2BE2'),
(183, '#FA8072'),
(184, '#F4A460'),
(185, '#2E8B57'),
(186, '#FF6347'),
(187, '#8B4513'),
(188, '#98FB98'),
(189, '#3CB371'),
(190, '#A0522D'),
(191, '#6A5ACD'),
(192, '#4682B4'),
(193, '#D2691E'),
(194, '#FF4500'),
(195, '#DDA0DD'),
(196, '#808080'),
(197, '#F0F8FF'),
(198, '#F5DEB3'),
(199, '#8B0000'),
(200, '#A9A9A9');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `Colori`
--
ALTER TABLE `Colori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `Colori`
--
ALTER TABLE `Colori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
