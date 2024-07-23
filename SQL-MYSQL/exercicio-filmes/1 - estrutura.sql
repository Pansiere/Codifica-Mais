CREATE DATABASE IF NOT EXISTS codifica;

CREATE TABLE IF NOT EXISTS `codifica`.`filmes` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `titulo` VARCHAR(255) NOT NULL ,
    `titulo_original` VARCHAR(255) NOT NULL ,
    `classificacao` INT NOT NULL DEFAULT '0' ,
    `categoria` TEXT NOT NULL ,
    `ano_lancamento` INT NOT NULL ,
    `nota` DECIMAL(3,1) NOT NULL ,
    `duracao` INT NOT NULL,
    PRIMARY KEY (`id`)
    ); 