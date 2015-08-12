DROP TABLE IF EXISTS `events`;
CREATE TABLE `events`(
`id` INT PRIMARY KEY,
`name` VARCHAR(32),
`date` VARCHAR(64),
`time` VARCHAR(64),
`location` VARCHAR(32)
);

INSERT INTO `events` VALUES(1,'Mary - Mother of Jesus','24th October 2015','2pm - 5pm','CAC Hall, IIUM');
INSERT INTO `events` VALUES(2,'Fallen Nations','12th December 2015','8pm - 10pm','Experimental Hall, IIUM');
INSERT INTO `events` VALUES(3,'Blessed Lands','30th April 2015','8pm - 10pm','Moot Court, IIUM');
INSERT INTO `events` VALUES(4,'How To Crush Exams','1st January 2016','9am - 11am','Mini Auditorium, IIUM');