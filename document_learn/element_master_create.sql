CREATE TABLE IF NOT EXISTS `element_masters` (
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `title` varchar(40) NOT NULL,
    `created_at` DATETIME NOT NULL,
    `updated_at` DATETIME NOT NULL,
    PRIMARY KEY (`id`)    
) ENGINE=Innodb DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;