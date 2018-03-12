#apocalyps-02142018.sql

drop table if exists Apocalypses;

CREATE TABLE `Apocalypses` (
  `ApocalypsesID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Type` varchar(50) DEFAULT NULL,
  `Origin` varchar(50) DEFAULT NULL,
  `Harbinger` varchar(50) DEFAULT NULL,
  `Description` text DEFAULT NULL, 
  `Date` datetime,
  `Survivor` int(10),
  PRIMARY KEY (`ApocalypsesID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

