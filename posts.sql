CREATE TABLE `news`.`posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `imageType` varchar(45) DEFAULT NULL,
  `imageData` longblob,
  `createdBy` varchar(45) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `post` varchar(255) DEFAULT NULL,
  `creationDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci