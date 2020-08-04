CREATE TABLE IF NOT EXISTS `user_actions` (
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_id` int(10) UNSIGNED NOT NULL,
    `action_id` int(10) UNSIGNED NOT NULL,
    `status` int(10) UNSIGNED NOT NULL,
    `report` VARCHAR(1024) NOT NULL,
    `created_at` DATETIME NOT NULL,
    `updated_at` DATETIME NOT NULL,
    PRIMARY KEY (`id`)    
) ENGINE=Innodb DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;