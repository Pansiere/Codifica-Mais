USE gestao_produtos;

SELECT f.nome_fornecedor, SUM(p.fornecedor = 1) AS total_quantidade_em_estoque
FROM produtos p
INNER JOIN fornecedores f ON p.fornecedor = f.id
WHERE p.fornecedor = 1;