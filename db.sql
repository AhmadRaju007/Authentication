CREATE TABLE `users` (
     `id` int(11) NOT NULL,
     `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
     `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;