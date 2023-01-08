# SQL CLI FOR INIT DB

## Create db_member database

## Create member table

|
CREATE TABLE `db_member`.`member` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `lastname` VARCHAR(255) NOT NULL , `telephone` VARCHAR(10) NOT NULL , `username` VARCHAR(10) NOT NULL , `password` VARCHAR(10) NOT NULL , `status` VARCHAR(1) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
|
