USE gestao_produtos;

INSERT INTO produtos (nome ,sku ,descricao, categoria, preco ,unidade_medida, peso, quantidade_estoque, fabricante, fornecedor, create_at)
VALUES ('Camisa_Polo', '123', 'Cor_Preta', 'Camisa', 50, 'GG', 5, 30, 'Codifica-mais', 'IDCAP', NOW()), ('Camisa_regata', '1234', 'Cor_branca', 'Camisa', 20, 'M', 3, 20, 'Codifica-mais', 'IDCAP', NOW()), ('Camisa_social', '12342', 'Cor_verde', 'Camisa', 35, 'G', 4, 50, 'Codifica-mais', 'IDCAP', NOW());