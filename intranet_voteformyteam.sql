-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 11, 2013 at 11:52 AM
-- Server version: 5.5.30
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `intranet_voteformyteam`
--

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

DROP TABLE IF EXISTS `referrals`;
CREATE TABLE IF NOT EXISTS `referrals` (
  `referral_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `voter_email` varchar(250) NOT NULL,
  `referral_email` varchar(250) DEFAULT NULL,
  `voter_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`referral_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `team_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `team_name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

DROP TABLE IF EXISTS `voters`;
CREATE TABLE IF NOT EXISTS `voters` (
  `voter_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `voter_email` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`voter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`voter_id`, `voter_email`) VALUES
(1, 'buyer1_1355883955_per@lyonwebdev.com'),
(2, 'scott_1247461433_per@ignitei.com');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

DROP TABLE IF EXISTS `votes`;
CREATE TABLE IF NOT EXISTS `votes` (
  `vote_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `team_id` varchar(250) DEFAULT NULL,
  `voter_id` int(11) DEFAULT NULL,
  `voter_email` varchar(250) NOT NULL,
  `votes` int(11) NOT NULL,
  `time_voted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`vote_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`vote_id`, `team_id`, `voter_id`, `voter_email`, `votes`, `time_voted`) VALUES
(1, 'vote_team_a', NULL, 'buyer1_1355883955_per@lyonwebdev.com', 5, '2012-12-19 19:54:53'),
(3, 'vote_team_a', NULL, 'buyer1_1355883955_per@lyonwebdev.com', 4, '2012-12-19 20:48:43'),
(4, 'vote_team_a', NULL, 'buyer1_1355883955_per@lyonwebdev.com', 3, '2012-12-19 20:48:46'),
(5, 'vote_team_b', NULL, 'buyer1_1355883955_per@lyonwebdev.com', 3, '2012-12-19 21:40:13'),
(6, 'vote_team_b', NULL, 'buyer1_1355883955_per@lyonwebdev.com', 3, '2012-12-19 21:40:15'),
(7, 'vote_team_b', NULL, 'scott_1247461433_per@ignitei.com', 14, '2012-12-20 03:40:15');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
