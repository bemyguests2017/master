-- Date start 5 Aug 2017 *********
ALTER TABLE `users` CHANGE `mname` `mname` VARCHAR(128) NULL DEFAULT NULL;
ALTER TABLE `users` CHANGE `lname` `lname` VARCHAR(128) NOT NULL, CHANGE `username` `username` VARCHAR(128) NOT NULL, CHANGE `email` `email` VARCHAR(128) NOT NULL;
ALTER TABLE `users`  ADD `status` ENUM('active','deactivate','blocked','deleted') NOT NULL  AFTER `type`;

ALTER TABLE `users` CHANGE `title` `title` VARCHAR(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL, CHANGE `fname` `fname` VARCHAR(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL, CHANGE `mname` `mname` VARCHAR(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL, CHANGE `lname` `lname` VARCHAR(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL, CHANGE `status` `status` ENUM('active','deactivate','blocked','deleted') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'active';
ALTER TABLE `users` CHANGE `passoword` `password` VARCHAR(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;