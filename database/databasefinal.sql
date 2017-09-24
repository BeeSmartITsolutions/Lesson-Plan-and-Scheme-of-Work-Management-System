-- phpMyAdmin SQL Dump
-- version 2.9.0.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jan 12, 2017 at 12:35 PM
-- Server version: 5.0.27
-- PHP Version: 5.2.0
-- 
create Database `scheme`;
use scheme;

-- --------------------------------------------------------

-- 
-- Table structure for table `class`
-- 

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL auto_increment,
  `class` varchar(45) default NULL,
  PRIMARY KEY  (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `class`
-- 

INSERT INTO `class` (`class_id`, `class`) VALUES 
(1, 'senior one'),
(2, 'senior two');

-- --------------------------------------------------------

-- 
-- Table structure for table `lesson_plan`
-- 

CREATE TABLE `lesson_plan` (
  `plan_id` int(11) NOT NULL auto_increment,
  `number` varchar(45) NOT NULL,
  `Date` date NOT NULL,
  `timet` varchar(45) NOT NULL,
  `number_of_pupils` varchar(45) NOT NULL,
  `skills` varchar(45) NOT NULL,
  `competences` varchar(45) NOT NULL,
  `content` varchar(45) NOT NULL,
  `life_skills` varchar(45) NOT NULL,
  `values_indicators` varchar(45) NOT NULL,
  `reference` varchar(45) NOT NULL,
  `introduction_tr` varchar(45) NOT NULL,
  `presentation_tr` varchar(45) NOT NULL,
  `practice_tr` varchar(45) NOT NULL,
  `production_tr` varchar(45) NOT NULL,
  `introduction_pupil` varchar(100) NOT NULL,
  `presentation_pupil` varchar(100) NOT NULL,
  `practice_pupil` varchar(100) NOT NULL,
  `production_pupil` varchar(100) NOT NULL,
  `strength` varchar(45) NOT NULL,
  `weakness` varchar(45) NOT NULL,
  `way_forward` varchar(45) NOT NULL,
  `school_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `sub_topic_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `method_id` int(11) NOT NULL,
  `grammer` varchar(45) NOT NULL,
  `vocab` varchar(45) NOT NULL,
  `structur` varchar(45) NOT NULL,
  `comprehension` varchar(45) NOT NULL,
  PRIMARY KEY  (`plan_id`,`school_id`,`subject_id`,`teacher_id`,`class_id`,`sub_topic_id`,`topic_id`),
  KEY `fk_lesson_plan_school` (`school_id`),
  KEY `fk_lesson_plan_subject` (`subject_id`),
  KEY `fk_lesson_plan_teacher` (`teacher_id`),
  KEY `fk_lesson_plan_class` (`class_id`),
  KEY `fk_lesson_plan_sub_topic` (`sub_topic_id`),
  KEY `fk_lesson_plan_topic` (`topic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- 
-- Dumping data for table `lesson_plan`
-- 

INSERT INTO `lesson_plan` (`plan_id`, `number`, `Date`, `timet`, `number_of_pupils`, `skills`, `competences`, `content`, `life_skills`, `values_indicators`, `reference`, `introduction_tr`, `presentation_tr`, `practice_tr`, `production_tr`, `introduction_pupil`, `presentation_pupil`, `practice_pupil`, `production_pupil`, `strength`, `weakness`, `way_forward`, `school_id`, `subject_id`, `teacher_id`, `class_id`, `sub_topic_id`, `topic_id`, `method_id`, `grammer`, `vocab`, `structur`, `comprehension`) VALUES 
(20, 'NO1', '2017-01-10', '40 minutes', '67', 'fggh', 'fggyjh', 'yhghgh', 'jhhyy', 'ggyuul', 'tgyyuuu', 'yiuuo', 'yyuuo', 'tyyiuuou', 'yyiyuuu', 'yiyuuuo', 'yiyiuuo', 'oyiyuyuouo', 'yyiyiyuyu', 'tyyiyiyuyu', 'yiyiyiuuo', 'yiyiyuuouo', 2, 1, 1, 1, 2, 1, 1, 'Grammer', 'Vocaburary', 'structures', 'comprehension');

-- --------------------------------------------------------

-- 
-- Table structure for table `login`
-- 

CREATE TABLE `login` (
  `Login_id` int(20) NOT NULL auto_increment,
  `Login_number` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Type` text NOT NULL,
  `First_name` varchar(25) default NULL,
  `Last_name` varchar(25) default NULL,
  `Phone_number` varchar(14) default NULL,
  `image` varchar(225) default NULL,
  PRIMARY KEY  (`Login_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=237 ;

-- 
-- Dumping data for table `login`
-- 

INSERT INTO `login` (`Login_id`, `Login_number`, `Date`, `Username`, `Password`, `Type`, `First_name`, `Last_name`, `Phone_number`, `image`) VALUES 
(235, 'LN000235', '2015-01-20', 'luck', 'luck', 'Administrator', 'aine', 'luck', '0785453423', NULL),
(236, 'LN000236', '2015-01-20', 'deo', 'deo', 'User', 'ttyv', 'fcutvy', '0783909149', 'upload/ishakakelly3.JPG');

-- --------------------------------------------------------

-- 
-- Table structure for table `method`
-- 

CREATE TABLE `method` (
  `method_id` int(11) NOT NULL auto_increment,
  `method` varchar(45) default NULL,
  PRIMARY KEY  (`method_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `method`
-- 

INSERT INTO `method` (`method_id`, `method`) VALUES 
(1, 'hfn');

-- --------------------------------------------------------

-- 
-- Table structure for table `period`
-- 

CREATE TABLE `period` (
  `period_id` int(11) NOT NULL auto_increment,
  `period` varchar(45) NOT NULL,
  PRIMARY KEY  (`period_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `period`
-- 

INSERT INTO `period` (`period_id`, `period`) VALUES 
(1, 'Period one');

-- --------------------------------------------------------

-- 
-- Table structure for table `scheme`
-- 

CREATE TABLE `scheme` (
  `scheme_id` int(11) NOT NULL auto_increment,
  `skills` varchar(45) default NULL,
  `competences` varchar(45) default NULL,
  `content` varchar(45) default NULL,
  `activities` varchar(45) default NULL,
  `indictars` varchar(45) default NULL,
  `learning_aids` varchar(45) default NULL,
  `reference` varchar(45) default NULL,
  `remarks` varchar(45) default NULL,
  `term_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `method_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `sub_topic_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `week_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `period_id` int(11) NOT NULL,
  `number` varchar(45) NOT NULL,
  PRIMARY KEY  (`scheme_id`,`term_id`,`class_id`,`teacher_id`,`method_id`,`school_id`,`topic_id`,`sub_topic_id`,`year_id`,`week_id`,`subject_id`,`period_id`),
  KEY `fk_scheme_term` (`term_id`),
  KEY `fk_scheme_class` (`class_id`),
  KEY `fk_scheme_teacher` (`teacher_id`),
  KEY `fk_scheme_method` (`method_id`),
  KEY `fk_scheme_school` (`school_id`),
  KEY `fk_scheme_topic` (`topic_id`),
  KEY `fk_scheme_sub_topic` (`sub_topic_id`),
  KEY `fk_scheme_year` (`year_id`),
  KEY `fk_scheme_week` (`week_id`),
  KEY `fk_scheme_subject` (`subject_id`),
  KEY `fk_scheme_period` (`period_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `scheme`
-- 

INSERT INTO `scheme` (`scheme_id`, `skills`, `competences`, `content`, `activities`, `indictars`, `learning_aids`, `reference`, `remarks`, `term_id`, `class_id`, `teacher_id`, `method_id`, `school_id`, `topic_id`, `sub_topic_id`, `year_id`, `week_id`, `subject_id`, `period_id`, `number`) VALUES 
(6, 'ddf', 'GJHJ,KJ,', 'JKKKLK', 'JKKKLL', 'JKLL', 'computer', 'JKKLLL', 'good', 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, '453'),
(7, '', 'SD', '', 'SDD', 'DDD', 'FF', 'FF', 'FF', 0, 1, 1, 1, 1, 1, 2, 0, 0, 1, 0, ''),
(8, 'EF', 'UJUJJ', 'JHJ', 'FGFGG', 'FGGG', 'FFGGF', 'FFFG', 'FFGG', 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 'NO21'),
(9, 'EF', 'UJUJJ', 'JHJ', 'FGFGG', 'FGGG', 'FFGGF', 'FFFG', 'FFGG', 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 'NO9'),
(10, 'dhdjkjkgd', 'ffgghjh', 'dfghlll', 'gghgjhkjljl', 'gjghhjhjjkk', 'gjhjjjk', 'hjhjjkk', 'hjjk', 1, 2, 1, 1, 2, 1, 2, 1, 1, 1, 1, 'NO10'),
(11, 'fggh', 'hhj', 'hjhjjk', 'ghjnjk', 'ghjkljkljk', 'ghjjl', 'ghjhjl', 'gjhkjlnjkl', 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 'NO11');

-- --------------------------------------------------------

-- 
-- Table structure for table `school`
-- 

CREATE TABLE `school` (
  `school_id` int(11) NOT NULL auto_increment,
  `school` varchar(45) NOT NULL,
  PRIMARY KEY  (`school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `school`
-- 

INSERT INTO `school` (`school_id`, `school`) VALUES 
(1, 'ALLIANCE SEC SCHOOL'),
(2, 'KIBUBURA GIRLS');

-- --------------------------------------------------------

-- 
-- Table structure for table `sub_topic`
-- 

CREATE TABLE `sub_topic` (
  `sub_topic_id` int(11) NOT NULL auto_increment,
  `subtopic` varchar(45) NOT NULL,
  PRIMARY KEY  (`sub_topic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `sub_topic`
-- 

INSERT INTO `sub_topic` (`sub_topic_id`, `subtopic`) VALUES 
(1, ''),
(2, 'venn diagram');

-- --------------------------------------------------------

-- 
-- Table structure for table `subject`
-- 

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL auto_increment,
  `subject` varchar(45) NOT NULL,
  PRIMARY KEY  (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `subject`
-- 

INSERT INTO `subject` (`subject_id`, `subject`) VALUES 
(1, 'Chemistry');

-- --------------------------------------------------------

-- 
-- Table structure for table `teacher`
-- 

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL auto_increment,
  `teacher` varchar(45) default NULL,
  PRIMARY KEY  (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `teacher`
-- 

INSERT INTO `teacher` (`teacher_id`, `teacher`) VALUES 
(1, 'mugisha john');

-- --------------------------------------------------------

-- 
-- Table structure for table `term`
-- 

CREATE TABLE `term` (
  `term_id` int(11) NOT NULL auto_increment,
  `term` varchar(45) NOT NULL,
  PRIMARY KEY  (`term_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `term`
-- 

INSERT INTO `term` (`term_id`, `term`) VALUES 
(1, 'term two');

-- --------------------------------------------------------

-- 
-- Table structure for table `topic`
-- 

CREATE TABLE `topic` (
  `topic_id` int(11) NOT NULL auto_increment,
  `topic` varchar(45) NOT NULL,
  PRIMARY KEY  (`topic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `topic`
-- 

INSERT INTO `topic` (`topic_id`, `topic`) VALUES 
(1, 'set'),
(2, '');

-- --------------------------------------------------------

-- 
-- Table structure for table `week`
-- 

CREATE TABLE `week` (
  `week_id` int(11) NOT NULL auto_increment,
  `week` varchar(45) NOT NULL,
  PRIMARY KEY  (`week_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `week`
-- 

INSERT INTO `week` (`week_id`, `week`) VALUES 
(1, 'week two');

-- --------------------------------------------------------

-- 
-- Table structure for table `year`
-- 

CREATE TABLE `year` (
  `year_id` int(11) NOT NULL auto_increment,
  `year` varchar(45) NOT NULL,
  PRIMARY KEY  (`year_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `year`
-- 

INSERT INTO `year` (`year_id`, `year`) VALUES 
(1, '2017'),
(2, '');
