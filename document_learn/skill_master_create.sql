CREATE TABLE IF NOT EXISTS `skill_masters` (
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `element_id` int(10) UNSIGNED NOT NULL,
    `title` varchar(40) NOT NULL,
    `description` varchar(40) NOT NULL,
    `updated_at` DATETIME NOT NULL,
    PRIMARY KEY (`id`)    
) ENGINE=Innodb DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;