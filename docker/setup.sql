USE mvcrustudy;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

INSERT INTO news (title , description) VALUES ('News 1','Description1');
INSERT INTO news (title , description) VALUES ('News 2','Description2');
INSERT INTO news (title , description) VALUES ('News 3','Description3');
