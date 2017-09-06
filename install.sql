CREATE DATABASE `agenda`;
CREATE TABLE `agenda`.`amigos`(     `amigo_id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,     `nombre` VARCHAR(255) ,     `telefono` VARCHAR(255) ,     PRIMARY KEY (`amigo_id`)  );

/*[11:50:16 a.m.][  78 ms]*/ INSERT INTO `agenda`.`amigos`(`amigo_id`,`nombre`,`telefono`) VALUES ( NULL,'pepe','4582-5475');
/*[11:50:27 a.m.][  62 ms]*/ INSERT INTO `agenda`.`amigos`(`amigo_id`,`nombre`,`telefono`) VALUES ( NULL,'toto','4752-4125');
/*[11:50:37 a.m.][  32 ms]*/ INSERT INTO `agenda`.`amigos`(`amigo_id`,`nombre`,`telefono`) VALUES ( NULL,'cato','4582-6741');


