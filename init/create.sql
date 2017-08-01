CREATE TABLE IF NOT EXISTS `tm_calendarReminder` (
  `calendarReminderId` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `calendarId` int(11) unsigned NOT NULL COMMENT 'calendar event to which this reminder is associated',
  `deadlineNotificationId` int(11) unsigned NOT NULL COMMENT 'notification setting',
  `lastSend` datetime DEFAULT NULL COMMENT 'datetime when the notification was last sent',
  `memberId` int(11) unsigned NOT NULL COMMENT 'user which entered the notification',
  `to` int(11) unsigned NOT NULL COMMENT 'send notification to: 1  = only the assigned user 2 = invited user',
  PRIMARY KEY (`calendarReminderId`),
  KEY `deadlineNotificationId` (`deadlineNotificationId`),
  KEY `memberId` (`memberId`),
  KEY `calendarId` (`calendarId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='configuration of reminders of calendar events' AUTO_INCREMENT=1;

CREATE TABLE `b_tables` (
	`name` varchar(200),
	`bucket` varchar(200),
	`dataSizeBytes` int(11)
) ENGINE=InnoDB;

INSERT INTO `b_tables` (`name`, `bucket`, `dataSizeBytes`) VALUES ('pokus1', 'prvni', 123);
INSERT INTO `b_tables` (`name`, `bucket`, `dataSizeBytes`) VALUES ('pokus2', 'prvni', 234);
INSERT INTO `b_tables` (`name`, `bucket`, `dataSizeBytes`) VALUES ('pokus3', 'prvni', 345);
INSERT INTO `b_tables` (`name`, `bucket`, `dataSizeBytes`) VALUES ('pokus4', 'druhy', 456);
INSERT INTO `b_tables` (`name`, `bucket`, `dataSizeBytes`) VALUES ('pokus5', 'prvni', 567);
INSERT INTO `b_tables` (`name`, `bucket`, `dataSizeBytes`) VALUES ('pokus6', 'treti', 678);
INSERT INTO `b_tables` (`name`, `bucket`, `dataSizeBytes`) VALUES ('pokus7', 'treti', 789);
INSERT INTO `b_tables` (`name`, `bucket`, `dataSizeBytes`) VALUES ('pokus8', 'druhy', 890);
INSERT INTO `b_tables` (`name`, `bucket`, `dataSizeBytes`) VALUES ('pokus9', 'druhy', 901);
INSERT INTO `b_tables` (`name`, `bucket`, `dataSizeBytes`) VALUES ('pokus0', 'druhy',123);

CREATE TABLE `b_bucket` (
	`name` varchar(200),
	`project` varchar(200),
  `dataSizeBytes` int(11)
) ENGINE=InnoDB;

INSERT INTO `b_bucket` (`name`, `project`) VALUES ('prvni', 'prj1', 0);
INSERT INTO `b_bucket` (`name`, `project`) VALUES ('druhy', 'prj1', 0);
INSERT INTO `b_bucket` (`name`, `project`) VALUES ('treti', 'prj2', 0);

CREATE TABLE `b_project` (
	`name` varchar(200),
	`dataSizeBytes` int(11)
) ENGINE=InnoDB;

INSERT INTO `b_project` (`name`, `dataSizeBytes`) VALUES ('prj1', 0);
INSERT INTO `b_project` (`name`, `dataSizeBytes`) VALUES ('prj2', 0);

