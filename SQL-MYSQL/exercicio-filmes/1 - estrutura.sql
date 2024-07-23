CREATE DATABASE IF NOT EXISTS codifica;

CREATE TABLE IF NOT EXISTS `codifica`.`filmes` (
    `titulo` VARCHAR(255) NOT NULL ,
    `titulo_original` VARCHAR(255) NOT NULL ,
    `classificacao` INT NOT NULL DEFAULT '0' ,
    `categoria` VARCHAR(255) NOT NULL ,
    `ano_lancamento` INT NOT NULL ,
    `nota` FLOAT(3,2) NOT NULL ,
    `duracao` INT NOT NULL
    ); 