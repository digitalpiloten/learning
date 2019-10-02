CREATE TABLE `settings` ( `id` INT NOT NULL AUTO_INCREMENT , `key` VARCHAR(255) NOT NULL , `value` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
CREATE TABLE `users` ( `id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , `avatarUrl` VARCHAR(255) NOT NULL , `firstname` VARCHAR(255) NOT NULL , `lastname` VARCHAR(255) NOT NULL , `usergroup` INT NOT NULL DEFAULT '1' , `description` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
CREATE TABLE `usergroups` ( `id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `color` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
INSERT INTO `usergroups` (`id`, `title`, `color`) VALUES (1, 'Benutzer', 'grey');
INSERT INTO `usergroups` (`id`, `title`, `color`) VALUES (2, 'Adminstrator', 'red');
ALTER TABLE `users` ADD FOREIGN KEY (`usergroup`) REFERENCES `usergroups`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
CREATE TABLE `permissions` ( `id` INT NOT NULL AUTO_INCREMENT , `usergroupId` INT NOT NULL , `key` VARCHAR(255) NOT NULL , `has` INT(1) NOT NULL DEFAULT '1' , PRIMARY KEY (`id`)) ENGINE = InnoDB;
ALTER TABLE `permissions` ADD FOREIGN KEY (`usergroupId`) REFERENCES `usergroups`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
INSERT INTO `permissions` (`id`, `usergroupId`, `key`, `has`) VALUES (NULL, '2', '*', '1');