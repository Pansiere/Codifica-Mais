USE gestao_produtos;

ALTER TABLE produtos
MODIFY categoria INT,
MODIFY unidade_medida INT,
MODIFY fabricante INT,
MODIFY fornecedor INT;

ALTER TABLE produtos
ADD CONSTRAINT fk_categoria
FOREIGN KEY (categoria)
REFERENCES categorias(id);

ALTER TABLE produtos
ADD CONSTRAINT fk_unidade_medida
FOREIGN KEY (unidade_medida)
REFERENCES unidades_medidas(id);

ALTER TABLE produtos
ADD CONSTRAINT fk_fabricante
FOREIGN KEY (fabricante)
REFERENCES fabricantes(id);

ALTER TABLE produtos
ADD CONSTRAINT fk_fornecedor
FOREIGN KEY (fornecedor)
REFERENCES fornecedores(id);