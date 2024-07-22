USE gestao_produtos;

INSERT INTO `gestao_produtos`.`categorias`(`nome_categoria`, `created_at`, `updated_at`)
VALUES ('blusa', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `gestao_produtos`.`unidades_medidas`(`nome_unidade_medida`, `created_at`, `updated_at`)
VALUES ('M', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `gestao_produtos`.`fabricantes`(`nome_fabricante`, `created_at`, `updated_at`)
VALUES ('FrabicaTal', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `gestao_produtos`.`fornecedores`(`nome_fornecedor`, `created_at`, `updated_at`)
VALUES ('ImportadosBR', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);