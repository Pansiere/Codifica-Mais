<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" />
    <title>Listagem de produtos</title>
</head>

<body>
    <section class="corpo">

        <h2>Novo item</h2>

        <section class="container-form">
            <form action="#" method="post">

                <div>
                    <p>Nome do item</p>
                    <input type="text" id="nome" name="nome" placeholder="Digite o nome do produto" value="abc" required>
                </div>

                <div>
                    <div>
                        <p>Descrição</p>
                        <input type="text" id="descricao" name="descricao" value="abc" placeholder="Digite uma descrição" required>
                    </div>
                    <div>
                        <p>Unidade de medida</p> <input type="text" id="preco" name="preco" value="abc" placeholder="Digite uma descrição" required>
                    </div>
                </div>

                <div>
                    <label for="descricao">Valor</label>
                    <input type="text" id="descricao" name="descricao" value="abc" placeholder="Digite uma descrição" required>

                    <label for="preco">Quantidade</label>
                    <input type="text" id="preco" name="preco" value="abc" placeholder="Digite uma descrição" required>
                </div>

                <input type="submit" name="editar" class="botao-cadastrar" value="Editar produto" />
            </form>
        </section>
    </section>
</body>

</html>