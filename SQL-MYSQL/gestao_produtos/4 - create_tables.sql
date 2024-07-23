USE gestao_produtos;

CREATE TABLE categorias (
    id INT auto_increment NOT NULL primary key,
    nome_categoria VARCHAR(50) NOT NULL,
    deleted_at TIMESTAMP DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE unidades_medidas (
    id INT auto_increment NOT NULL primary key,
    nome_unidade_medida VARCHAR(50) NOT NULL,
    deleted_at TIMESTAMP DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE fabricantes (
    id INT auto_increment NOT NULL primary key,
    nome_fabricante VARCHAR(50) NOT NULL,
    deleted_at TIMESTAMP DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE fornecedores (
    id INT auto_increment NOT NULL primary key,
    nome_fornecedor VARCHAR(50) NOT NULL,
    deleted_at TIMESTAMP DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);