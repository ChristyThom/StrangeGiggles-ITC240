#strangegiggles02202018.sql

drop table if exists StrangeGigglesComics;

CREATE TABLE `StrangeGigglesComics` (
  `ComicID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ComicTitle` varchar(80) DEFAULT NULL,
  `ComicEdition` varchar(50) DEFAULT NULL,
  `ComicPublisher` varchar(80) DEFAULT NULL,
  `Date` varchar(50) DEFAULT NULL,
  `StoryArt` text DEFAULT NULL,
  `Lettering` text DEFAULT NULL,
  `Location` varchar(80) DEFAULT NULL,
  `Age` varchar(50) DEFAULT NULL,
  `Genre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ComicID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8

insert into StrangeGigglesComics
(NULL, "Scratch", "1", "DC", "August 2004", "Sam Keith", "Phil Balsman", "Batman, Scratch", "DC Universe", "any", "Superhero_Villain");

insert into StrangeGigglesComics
(NULL, "Pablos Inferno", "3", "Abismo", "2000", "Rhode Montijo", "Mark Giglio", "Pablo, Quetzal", "Mexico, Hell", "NULL", "NULL");

insert into StrangeGigglesComics
(NULL, "Giant Size Mini Comics Parables From Uncle Ron's Back Porch", "3", "Eclipse Comics", "1986", "Bill McKearn, Ron Hauge, Jim R Williams, Wayne Honath, Kenny Be, Theresa Henry, Steve Willis", "NULL", "Uncle Ron - Ronald Reagan", "NULL", "NULL", "Political");