CREATE TABLE `lh_webhook` ( `id` int(11) NOT NULL AUTO_INCREMENT, `event` varchar(50) NOT NULL, `bot_id` int(11) NOT NULL, `trigger_id` int(11) NOT NULL, `disabled` tinyint(1) NOT NULL, PRIMARY KEY (`id`), KEY `event_disabled` (`event`,`disabled`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;