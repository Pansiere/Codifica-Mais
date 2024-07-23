USE gestao_produtos;

SELECT `nome`, `sku`, `descricao`, c.nome_categoria AS categoria, `preco`, u.nome_unidade_medida AS unidade_medida, `peso`, `quantidade_estoque`, `fabricante`, `fornecedor`, `create_at`, `update_at`
FROM produtos p
INNER JOIN categorias c ON p.categoria = c.id
INNER JOIN unidades_medidas u ON p.unidade_medida = u.id
WHERE p.categoria = 1 AND p.unidade_medida = 3;