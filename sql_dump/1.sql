 CREATE TABLE `keys` (
       `id` INT(11) NOT NULL AUTO_INCREMENT,
       `key` VARCHAR(40) NOT NULL,
       `level` INT(2) NOT NULL,
       `ignore_limits` TINYINT(1) NOT NULL DEFAULT '0',
       `is_private_key` TINYINT(1)  NOT NULL DEFAULT '0',
      `ip_addresses` TEXT NULL DEFAULT NULL,
       `date_created` INT(11) NOT NULL,
       PRIMARY KEY (`id`)
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

 CREATE TABLE `logs` (
       `id` INT(11) NOT NULL AUTO_INCREMENT,
       `uri` VARCHAR(255) NOT NULL,
       `method` VARCHAR(6) NOT NULL,
       `params` TEXT DEFAULT NULL,
       `api_key` VARCHAR(40) NOT NULL,
       `ip_address` VARCHAR(45) NOT NULL,
       `time` INT(11) NOT NULL,
       `rtime` FLOAT DEFAULT NULL,
       `authorized` VARCHAR(1) NOT NULL,
       `response_code` smallint(3) DEFAULT '0',
       PRIMARY KEY (`id`)
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

 CREATE TABLE `access` (
       `id` INT(11) unsigned NOT NULL AUTO_INCREMENT,
       `key` VARCHAR(40) NOT NULL DEFAULT '',
       `controller` VARCHAR(50) NOT NULL DEFAULT '',
       `date_created` DATETIME DEFAULT NULL,
       `date_modified` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
       PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

 CREATE TABLE `limits` (
       `id` INT(11) NOT NULL AUTO_INCREMENT,
       `uri` VARCHAR(255) NOT NULL,
       `count` INT(10) NOT NULL,
       `hour_started` INT(11) NOT NULL,
       `api_key` VARCHAR(40) NOT NULL,
       PRIMARY KEY (`id`)
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#save lottery betting  details 
 CREATE TABLE IF NOT EXISTS `game_lottery` (
  `game_id` int(11) NOT NULL AUTO_INCREMENT,
  `game_type` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `digit` int(2) NOT NULL,
  `bet` int(11) NOT NULL,
  `bet_amount` decimal(10,2) NOT NULL,
  `payout` decimal(10,2) NOT NULL,
  `timeslot` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`game_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;