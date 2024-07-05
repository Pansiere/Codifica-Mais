USE gestao_produtos;

SELECT f.nome_fabricante as fabricante, `nome`, `sku`, `descricao`, `categoria`, `preco`, `unidade_medida`, `peso`, `quantidade_estoque`, `fornecedor`, `create_at`, `update_at`
FROM produtos p
INNER JOIN fabricantes f ON p.fabricante = f.id
WHERE p.fabricante = 3;