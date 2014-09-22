ALTER TABLE `admin_access` ADD `multislider` INT(1) NOT NULL;
UPDATE `admin_access` SET `multislider` = '1';

CREATE TABLE `multislider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_name` varchar(32) NOT NULL,
  `date_added` datetime NOT NULL,
  `slider_position` varchar(15) NOT NULL,
  `slider_status` tinyint(1) NOT NULL DEFAULT '0',
  `slider_parameter` text NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `multislider_items` (
  `slider_id` int(5) NOT NULL,
  `slider_parameters` text NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`slider_id`),
  UNIQUE KEY `slider_id` (`slider_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
