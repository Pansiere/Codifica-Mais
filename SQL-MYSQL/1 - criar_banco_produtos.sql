CREATE DATABASE gestao_produtos;

USE gestao_produtos;

CREATE TABLE produtos (
    id INT auto_increment NOT NULL primary key,
    nome VARCHAR(50) NOT NULL,
    sku VARCHAR(50) NOT NULL,
    descricao TINYTEXT,
    categoria VARCHAR(50),
    preco FLOAT,
    unidade_medida VARCHAR (40),
    peso FLOAT,
    quantidade_estoque INT,
    fabricante VARCHAR(50),
    fornecedor VARCHAR(50),
    deleted_at TIMESTAMP DEFAULT NULL,
    create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);