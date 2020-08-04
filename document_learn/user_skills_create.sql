CREATE TABLE IF NOT EXISTS `user_skills` (
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_id` int(10) UNSIGNED NOT NULL,
    `skill_id` int(10) UNSIGNED NOT NULL,
    `created_at` DATETIME NOT NULL,
    `updated_at` DATETIME NOT NULL,
    PRIMARY KEY (`id`)    
) ENGINE=Innodb DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;