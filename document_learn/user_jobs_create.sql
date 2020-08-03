CREATE TABLE IF NOT EXISTS `user_jobs` (
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_id` int(10) UNSIGNED NOT NULL,
    `job_id` int(10) UNSIGNED NOT NULL,
    `job_level` int(10) UNSIGNED NOT NULL,
    `created_at` DATETIME NOT NULL,
    `updated_at` DATETIME NOT NULL,
    PRIMARY KEY (`id`)    
) ENGINE=Innodb DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;