USE gestao_produtos;

SELECT `nome`, `sku`, `descricao`, `categoria`, `preco`, `unidade_medida`, `peso`, `quantidade_estoque`, f.nome_fabricante as fabricante, `fornecedor`, `create_at`, `update_at`
FROM produtos p
INNER JOIN fabricantes f ON p.fabricante = f.id
WHERE p.fabricante = 3;