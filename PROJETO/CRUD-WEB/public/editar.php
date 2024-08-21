<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/editar.css" />
    <title>Editar Item</title>
</head>

<body>

    <div class="corpo">

        <h1>Editar Item #000001</h1>

        <form class="forma" action="index.php" method="post">

            <div class="nome_do_item">
                <p>Nome do item</p>

                <input type="text" id="nome" name="nome" value="nome do PHP aqui" required>
            </div>

            <div class="sku_e_udm">
                <div class="sku">
                    <p>SKU</p>

                    <input type="text" id="sku" name="sku" value="sku do PHP aqui" required>
                </div>

                <div class="udm">
                    <p>Unidade de Medida</p>

                    <input type="text" id="udm" name="udm" value="UDM do PHP aqui" required>
                </div>
            </div>

            <div class="valor_e_quantidade">
                <div class="valor">
                    <p>Valor</p>

                    <input type="text" id="valor" name="valor" value="valor do PHP aqui" required>
                </div>

                <div class="quantidade">
                    <p>Quantidade Estoque</p>

                    <input type="text" id="quantidade" name="quantidade" value="quantidade do PHP aqui" required>
                </div>
            </div>

            <div class="categoria">
                <label for="categoria">Categoria</label>
                <select id="categoria" name="categoria" required>
                    <option value="eletronicos">Eletrônicos</option>
                    <option value="eletrodomesticos">Eletrodomésticos</option>
                    <option value="moveis">Móveis</option>
                    <option value="decoaracao">Decoraação</option>
                    <option value="vestuario">Vestuário</option>
                    <option value="outros">Outros</option>
                </select>
            </div>

            <div class="botao-cadastrar">
                <input class="input-botao-cadastrar" type="submit" name="editar" value="Criar item" />
            </div>

        </form>


    </div>

</body>

</html>