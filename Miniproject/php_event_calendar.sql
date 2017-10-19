-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2017 at 05:49 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_event_calendar`
--

-- --------------------------------------------------------

--
-- Table structure for table `pec_admin_user_cals`
--

CREATE TABLE `pec_admin_user_cals` (
  `admin_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cal_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pec_calendars`
--

CREATE TABLE `pec_calendars` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` enum('user','group','url') DEFAULT 'user',
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `color` varchar(7) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `status` enum('on','off') DEFAULT 'on',
  `show_in_list` enum('0','1') DEFAULT NULL,
  `public` tinyint(3) UNSIGNED DEFAULT '0',
  `reminder_message_email` text,
  `reminder_message_popup` text,
  `access_key` varchar(32) DEFAULT NULL COMMENT 'ical subscribe access key',
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pec_calendars`
--

INSERT INTO `pec_calendars` (`id`, `type`, `user_id`, `name`, `description`, `color`, `admin_id`, `status`, `show_in_list`, `public`, `reminder_message_email`, `reminder_message_popup`, `access_key`, `created_on`, `updated_on`) VALUES
(1, 'user', 1, 'Default Calendar', 'This is a default calendar', '#3a87ad', NULL, 'on', '1', 1, '', '', '', '2014-03-20 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pec_default_reminders`
--

CREATE TABLE `pec_default_reminders` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `cal_id` int(11) UNSIGNED DEFAULT NULL,
  `type` enum('email','popup') DEFAULT NULL,
  `time` smallint(6) DEFAULT NULL,
  `time_type` enum('minute','hour','day','week') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pec_events`
--

CREATE TABLE `pec_events` (
  `id` int(10) UNSIGNED NOT NULL,
  `cal_id` int(10) UNSIGNED DEFAULT NULL,
  `type` enum('standard','multi_day') DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `start_time` char(5) DEFAULT NULL,
  `start_timestamp` int(10) UNSIGNED DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `end_time` char(5) DEFAULT NULL,
  `end_timestamp` int(10) UNSIGNED DEFAULT NULL,
  `repeat_type` enum('none','daily','everyWeekDay','everyMWFDay','everyTTDay','weekly','monthly','yearly') DEFAULT 'none',
  `repeat_interval` tinyint(3) UNSIGNED DEFAULT NULL,
  `repeat_count` tinyint(3) UNSIGNED DEFAULT '0',
  `repeat_start_date` date DEFAULT '0000-01-01',
  `repeat_end_on` date DEFAULT '0000-01-01',
  `repeat_end_after` int(11) DEFAULT '0',
  `repeat_never` tinyint(1) DEFAULT '0',
  `repeat_by` enum('repeat_by_day_of_the_month','repeat_by_day_of_the_week') DEFAULT NULL,
  `repeat_on_sun` tinyint(1) NOT NULL DEFAULT '0',
  `repeat_on_mon` tinyint(1) NOT NULL DEFAULT '0',
  `repeat_on_tue` tinyint(1) NOT NULL DEFAULT '0',
  `repeat_on_wed` tinyint(1) NOT NULL DEFAULT '0',
  `repeat_on_thu` tinyint(1) NOT NULL DEFAULT '0',
  `repeat_on_fri` tinyint(1) NOT NULL DEFAULT '0',
  `repeat_on_sat` tinyint(1) NOT NULL DEFAULT '0',
  `repeat_deleted_indexes` varchar(255) DEFAULT NULL,
  `title` text,
  `description` longblob,
  `allDay` varchar(10) DEFAULT NULL,
  `url` varchar(256) DEFAULT NULL,
  `color` varchar(15) DEFAULT NULL,
  `backgroundColor` varchar(20) DEFAULT NULL,
  `textColor` varchar(20) DEFAULT NULL,
  `borderColor` varchar(20) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `available` enum('0','1') DEFAULT '1',
  `privacy` enum('public','private') DEFAULT 'public',
  `image` varchar(100) DEFAULT NULL,
  `invitation` enum('1','0') DEFAULT '0',
  `invitation_event_id` int(10) UNSIGNED DEFAULT '0',
  `invitation_creator_id` int(10) UNSIGNED DEFAULT '0',
  `invitation_response` enum('yes','no','maybe','pending') DEFAULT 'pending',
  `free_busy` enum('free','busy') NOT NULL,
  `created_by` varchar(30) DEFAULT NULL,
  `modified_by` varchar(30) DEFAULT NULL,
  `created_on` varchar(19) DEFAULT NULL,
  `updated_on` varchar(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pec_events`
--

INSERT INTO `pec_events` (`id`, `cal_id`, `type`, `start_date`, `start_time`, `start_timestamp`, `end_date`, `end_time`, `end_timestamp`, `repeat_type`, `repeat_interval`, `repeat_count`, `repeat_start_date`, `repeat_end_on`, `repeat_end_after`, `repeat_never`, `repeat_by`, `repeat_on_sun`, `repeat_on_mon`, `repeat_on_tue`, `repeat_on_wed`, `repeat_on_thu`, `repeat_on_fri`, `repeat_on_sat`, `repeat_deleted_indexes`, `title`, `description`, `allDay`, `url`, `color`, `backgroundColor`, `textColor`, `borderColor`, `location`, `available`, `privacy`, `image`, `invitation`, `invitation_event_id`, `invitation_creator_id`, `invitation_response`, `free_busy`, `created_by`, `modified_by`, `created_on`, `updated_on`) VALUES
(1, 1, NULL, '2014-06-09', '11:30', 1402338600, '2014-06-09', '12:30', 1402342200, 'none', NULL, 0, '0000-01-01', '0000-01-01', 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, 'Click a date to create a new event and drag to change its date and time. Click on an existing event to modify. Click \"Show Standard Settings\" to set additional event properties.', NULL, NULL, NULL, NULL, '#3a87ad', NULL, '#3a87ad', NULL, '1', 'private', NULL, '0', 0, 0, 'pending', 'free', NULL, NULL, NULL, NULL),
(4, 1, NULL, '2017-03-06', '08:00', 1488783600, '2017-03-06', '09:00', 1488787200, 'none', NULL, 0, '0000-01-01', '0000-01-01', 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, 'kriya', NULL, NULL, NULL, NULL, '#3a87ad', NULL, '#3a87ad', NULL, '1', 'public', NULL, '0', 0, 0, 'pending', 'free', NULL, NULL, NULL, NULL),
(5, 1, NULL, '2017-03-07', '12:30', 1488886200, '2017-03-07', '13:30', 1488889800, 'none', NULL, 0, '0000-01-01', '0000-01-01', 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, 'login', NULL, NULL, NULL, NULL, '#3a87ad', NULL, '#3a87ad', NULL, '1', 'public', NULL, '0', 0, 0, 'pending', 'free', NULL, NULL, NULL, NULL),
(6, 1, NULL, '2017-03-01', '13:00', 1488369600, '2017-03-01', '14:00', 1488373200, 'none', NULL, 0, '0000-01-01', '0000-01-01', 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, 'Thiran', NULL, NULL, NULL, NULL, '#3a87ad', NULL, '#3a87ad', NULL, '1', 'public', NULL, '0', 0, 0, 'pending', 'free', NULL, NULL, NULL, NULL),
(8, 1, NULL, '2017-03-01', '13:00', 1488369600, '2017-03-01', '14:00', 1488373200, 'none', NULL, 0, '0000-01-01', '0000-01-01', 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, 'Nethunt', NULL, NULL, NULL, NULL, '#3a87ad', NULL, '#3a87ad', NULL, '1', 'public', NULL, '0', 0, 0, 'pending', 'free', NULL, NULL, NULL, NULL),
(10, 1, NULL, '2017-02-28', '15:00', 1488290400, '2017-02-28', '16:00', 1488294000, 'none', NULL, 0, '0000-01-01', '0000-01-01', 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, 'login', NULL, NULL, NULL, NULL, '#3a87ad', NULL, '#3a87ad', NULL, '1', 'public', NULL, '0', 0, 0, 'pending', 'free', NULL, NULL, NULL, NULL),
(11, 1, NULL, '2017-03-13', '20:30', 1489433400, '2017-03-13', '21:30', 1489437000, 'none', NULL, 0, '0000-01-01', '0000-01-01', 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, 'art', NULL, NULL, NULL, NULL, '#3a87ad', NULL, '#3a87ad', NULL, '1', 'public', NULL, '0', 0, 0, 'pending', 'free', NULL, NULL, NULL, NULL),
(12, 1, NULL, '2017-03-16', '21:30', 1489696200, '2017-03-16', '22:30', 1489699800, 'none', NULL, 0, '0000-01-01', '0000-01-01', 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, 'Kriya', '', '', '', NULL, '#f903a5', '', '#f903a5', 'Psg college of technology', '1', 'public', '', '0', 0, 0, 'pending', 'free', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pec_event_calendar_settings`
--

CREATE TABLE `pec_event_calendar_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pec_guests`
--

CREATE TABLE `pec_guests` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `response` enum('yes','no','maybe','pending') DEFAULT 'pending',
  `note` varchar(255) DEFAULT NULL,
  `user_guest_count` tinyint(3) UNSIGNED DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pec_mobile_calendar_settings`
--

CREATE TABLE `pec_mobile_calendar_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `theme` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pec_reminders`
--

CREATE TABLE `pec_reminders` (
  `id` int(11) NOT NULL,
  `event_id` int(11) UNSIGNED DEFAULT NULL,
  `is_repeating_event` enum('0','1') DEFAULT '0',
  `type` enum('email','popup') DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `time_unit` enum('minute','hour','day','week') DEFAULT NULL,
  `ts` timestamp NULL DEFAULT NULL,
  `remind_time` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pec_settings`
--

CREATE TABLE `pec_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `admin_id` int(10) UNSIGNED DEFAULT NULL,
  `shortdate_format` varchar(20) DEFAULT NULL,
  `longdate_format` varchar(20) DEFAULT NULL,
  `timeformat` enum('core','standard') DEFAULT NULL,
  `custom_view` tinyint(3) UNSIGNED DEFAULT NULL,
  `start_day` tinyint(1) DEFAULT '0',
  `default_view` varchar(20) DEFAULT NULL,
  `wysiwyg` enum('1','0') DEFAULT '0',
  `staff_mode` enum('0','1') DEFAULT '0',
  `calendar_mode` enum('vertical','timeline') DEFAULT 'vertical',
  `timeline_day_width` mediumint(8) UNSIGNED DEFAULT '360',
  `timeline_row_height` mediumint(8) UNSIGNED DEFAULT '28',
  `timeline_show_hours` tinyint(3) UNSIGNED DEFAULT '1',
  `timeline_mode` enum('horizontal','vertical') DEFAULT 'horizontal',
  `week_cal_timeslot_min` mediumint(8) UNSIGNED DEFAULT '30',
  `timeslot_height` tinyint(3) UNSIGNED DEFAULT '20',
  `week_cal_start_time` char(5) DEFAULT '00:00',
  `week_cal_end_time` char(5) DEFAULT '23:00',
  `week_cal_show_hours` tinyint(3) UNSIGNED DEFAULT '1',
  `event_tooltip` tinyint(3) UNSIGNED DEFAULT '1',
  `left_side_visible` tinyint(3) UNSIGNED DEFAULT '1',
  `language` varchar(64) DEFAULT 'English',
  `time_zone` varchar(4) DEFAULT '-12',
  `email_server` enum('PHPMailer','SendGrid') DEFAULT 'PHPMailer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pec_settings`
--

INSERT INTO `pec_settings` (`id`, `user_id`, `admin_id`, `shortdate_format`, `longdate_format`, `timeformat`, `custom_view`, `start_day`, `default_view`, `wysiwyg`, `staff_mode`, `calendar_mode`, `timeline_day_width`, `timeline_row_height`, `timeline_show_hours`, `timeline_mode`, `week_cal_timeslot_min`, `timeslot_height`, `week_cal_start_time`, `week_cal_end_time`, `week_cal_show_hours`, `event_tooltip`, `left_side_visible`, `language`, `time_zone`, `email_server`) VALUES
(1, 1, NULL, 'mm/dd/yyyy', 'DD, dd MM yyyy', 'core', NULL, 0, 'month', '0', '0', 'vertical', 360, 28, 1, 'horizontal', 30, 20, '00:00', '23:00', 1, 1, 1, 'English', '-12', 'PHPMailer');

-- --------------------------------------------------------

--
-- Table structure for table `pec_shared_calendars`
--

CREATE TABLE `pec_shared_calendars` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` enum('user','group','url') DEFAULT 'user',
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `cal_id` int(11) UNSIGNED DEFAULT NULL,
  `shared_user_id` int(11) DEFAULT NULL,
  `permission` enum('see','change') DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `color` varchar(7) DEFAULT NULL,
  `status` enum('on','off') DEFAULT 'on',
  `show_in_list` enum('0','1') DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pec_users`
--

CREATE TABLE `pec_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `access_key` varchar(32) DEFAULT NULL,
  `activated` tinyint(3) UNSIGNED DEFAULT '1',
  `admin_id` int(10) UNSIGNED DEFAULT NULL,
  `role` enum('super','admin','user') DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `active_calendar_id` varchar(512) NOT NULL DEFAULT '0',
  `company` varchar(50) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `timezone` varchar(30) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `theme` varchar(20) DEFAULT NULL,
  `kbd_shortcuts` tinyint(3) UNSIGNED DEFAULT '1',
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pec_users`
--

INSERT INTO `pec_users` (`id`, `access_key`, `activated`, `admin_id`, `role`, `first_name`, `last_name`, `active_calendar_id`, `company`, `username`, `password`, `email`, `timezone`, `language`, `theme`, `kbd_shortcuts`, `created_on`, `updated_on`) VALUES
(1, '1', 1, 1, 'super', 'Admin', 'Admin', '1', 'Higpitch', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin@gmail.com', '+6', 'English', 'default', 1, '2013-12-18 14:27:41', '2013-12-18 14:27:45');

-- --------------------------------------------------------

--
-- Table structure for table `pec_user_permissions`
--

CREATE TABLE `pec_user_permissions` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `permission` varchar(100) NOT NULL,
  `value` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pec_user_share_free_busy`
--

CREATE TABLE `pec_user_share_free_busy` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `shared_user_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pec_admin_user_cals`
--
ALTER TABLE `pec_admin_user_cals`
  ADD PRIMARY KEY (`admin_id`,`cal_id`);

--
-- Indexes for table `pec_calendars`
--
ALTER TABLE `pec_calendars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `pec_default_reminders`
--
ALTER TABLE `pec_default_reminders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `cal_id` (`cal_id`);

--
-- Indexes for table `pec_events`
--
ALTER TABLE `pec_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cal_id` (`cal_id`,`type`,`start_date`),
  ADD KEY `cal_id_2` (`cal_id`,`type`,`end_date`),
  ADD KEY `cal_id_3` (`cal_id`,`type`,`start_date`,`end_date`),
  ADD KEY `cal_id_4` (`cal_id`,`start_date`),
  ADD KEY `cal_id_5` (`cal_id`,`end_date`),
  ADD KEY `cal_id_6` (`cal_id`,`start_date`,`end_date`);

--
-- Indexes for table `pec_event_calendar_settings`
--
ALTER TABLE `pec_event_calendar_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pec_guests`
--
ALTER TABLE `pec_guests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `i_event_id` (`event_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pec_mobile_calendar_settings`
--
ALTER TABLE `pec_mobile_calendar_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pec_reminders`
--
ALTER TABLE `pec_reminders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `i_event_id` (`event_id`);

--
-- Indexes for table `pec_settings`
--
ALTER TABLE `pec_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `pec_shared_calendars`
--
ALTER TABLE `pec_shared_calendars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cal_id` (`cal_id`);

--
-- Indexes for table `pec_users`
--
ALTER TABLE `pec_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `i_username` (`username`),
  ADD KEY `fk_admin_id` (`admin_id`),
  ADD KEY `access_key` (`access_key`);

--
-- Indexes for table `pec_user_permissions`
--
ALTER TABLE `pec_user_permissions`
  ADD PRIMARY KEY (`user_id`,`permission`);

--
-- Indexes for table `pec_user_share_free_busy`
--
ALTER TABLE `pec_user_share_free_busy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `shared_user_id` (`shared_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pec_calendars`
--
ALTER TABLE `pec_calendars`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pec_default_reminders`
--
ALTER TABLE `pec_default_reminders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pec_events`
--
ALTER TABLE `pec_events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pec_event_calendar_settings`
--
ALTER TABLE `pec_event_calendar_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pec_guests`
--
ALTER TABLE `pec_guests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pec_mobile_calendar_settings`
--
ALTER TABLE `pec_mobile_calendar_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pec_reminders`
--
ALTER TABLE `pec_reminders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pec_settings`
--
ALTER TABLE `pec_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pec_shared_calendars`
--
ALTER TABLE `pec_shared_calendars`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pec_users`
--
ALTER TABLE `pec_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pec_user_share_free_busy`
--
ALTER TABLE `pec_user_share_free_busy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pec_admin_user_cals`
--
ALTER TABLE `pec_admin_user_cals`
  ADD CONSTRAINT `pec_admin_user_cals_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `pec_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pec_calendars`
--
ALTER TABLE `pec_calendars`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `pec_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pec_default_reminders`
--
ALTER TABLE `pec_default_reminders`
  ADD CONSTRAINT `pec_default_reminders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `pec_users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pec_default_reminders_ibfk_2` FOREIGN KEY (`cal_id`) REFERENCES `pec_calendars` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pec_events`
--
ALTER TABLE `pec_events`
  ADD CONSTRAINT `pec_events_ibfk_1` FOREIGN KEY (`cal_id`) REFERENCES `pec_calendars` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pec_event_calendar_settings`
--
ALTER TABLE `pec_event_calendar_settings`
  ADD CONSTRAINT `pec_event_calendar_settings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `pec_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pec_guests`
--
ALTER TABLE `pec_guests`
  ADD CONSTRAINT `pec_guests_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `pec_events` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pec_mobile_calendar_settings`
--
ALTER TABLE `pec_mobile_calendar_settings`
  ADD CONSTRAINT `pec_mobile_calendar_settings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `pec_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pec_reminders`
--
ALTER TABLE `pec_reminders`
  ADD CONSTRAINT `fk_event_id` FOREIGN KEY (`event_id`) REFERENCES `pec_events` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pec_reminders_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `pec_events` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pec_shared_calendars`
--
ALTER TABLE `pec_shared_calendars`
  ADD CONSTRAINT `fk_cal_id` FOREIGN KEY (`cal_id`) REFERENCES `pec_calendars` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pec_users`
--
ALTER TABLE `pec_users`
  ADD CONSTRAINT `fk_admin_id` FOREIGN KEY (`admin_id`) REFERENCES `pec_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pec_user_permissions`
--
ALTER TABLE `pec_user_permissions`
  ADD CONSTRAINT `pec_user_permissions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `pec_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pec_user_share_free_busy`
--
ALTER TABLE `pec_user_share_free_busy`
  ADD CONSTRAINT `pec_user_share_free_busy_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `pec_users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pec_user_share_free_busy_ibfk_2` FOREIGN KEY (`shared_user_id`) REFERENCES `pec_users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
