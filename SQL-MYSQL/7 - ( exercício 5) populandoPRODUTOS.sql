USE gestao_produtos;

INSERT INTO categorias (`nome_categoria`,`created_at`)
VALUES ('BLUSA', NOW()), ('PESOS', NOW()), ('CHINELO', NOW());

INSERT INTO unidades_medidas (`nome_unidade_medida`,`created_at`)
VALUES ('43', NOW()), ('KG', NOW()), ('GG', NOW());

INSERT INTO fabricantes (`nome_fabricante`,`created_at`)
VALUES ('PHP-maker', NOW()), ('fabi-codes', NOW()), ('TrabalhaEConfia', NOW());

INSERT INTO fornecedores (`nome_fornecedor`,`created_at`)
VALUES ('ImportaBR', NOW()), ('FreteRapido', NOW()), ('0-taxas', NOW());


INSERT INTO produtos (nome ,sku ,descricao, categoria, preco ,unidade_medida, peso, quantidade_estoque, fabricante, fornecedor, create_at)
VALUES ('Camisa_Polo', '123', 'Cor_preta', 1, 50, 3, 5, 30, 3, 2, NOW()),
('Havainas', '1234', 'Cor_branca', 3, 25, 1, 5, 20, 3, 3, NOW()),
('Anilha', '12342', 'Cor_preta', 2, 35, 2, 40, 50, 1, 1, NOW()),
('Camisa_Regata', '12213', 'Cor_branca', 1, 50, 3, 5, 30, 3, 2, NOW()),
('Camisa_Regata', '112323', 'Cor_preta', 1, 50, 4, 5, 30, 3, 2, NOW()),
('Camisa_Social', '12332', 'Cor_Cinza', 1, 80, 3, 5, 30, 3, 2, NOW());