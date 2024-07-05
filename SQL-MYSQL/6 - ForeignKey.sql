USE gestao_produtos;

ALTER TABLE `produtos` 
ADD FOREIGN KEY (categoria) REFERENCES categorias(id);