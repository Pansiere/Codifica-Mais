<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" />
    <title>Listagem de produtos</title>
</head>

<body>

    <div class="corpo">
        <div class="botoes">
            <div class="botoes_novo_item">
                <p>Novo Item</p>
            </div>
            <div class="botoes_buscar_item">
                <p>Buscar item</p>
                <p>barra_buscador</p>
            </div>
        </div>

        <div class="produto">

            <div class="produto_linha_1">
                <div class="produto_linha_1_categoria">
                    <div class="produto_linha_1_categoria_categoria_e_id">
                        <p>#00001</p>
                        <p class="categoria">categoria</p>
                    </div>
                    <p>SKU: 123456</p>
                </div>
            </div>

            <div class="produto_linha_2">
                <p>Camisa codifica+</p>
                <p>Quantidade: 100</p>
            </div>

            <div class="produto_linha_3">
                <p class="editar">Editar</p>
                <P class="deletar">Deletar</P>
            </div>
        </div>
    </div>

</body>

</html>