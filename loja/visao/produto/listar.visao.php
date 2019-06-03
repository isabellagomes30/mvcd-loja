<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Listar Produtos</h2>
        
        <table class="table">
            <thead>
                <tr>NOME  </tr>
                <tr> CÓDIGO </tr>
                <tr> DESCRIÇÃO </tr>
                <tr> VALOR </tr>
                <tr> CATEGORIA </tr>
            </thead>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?=$produto['nome']?></td>
                <td><?=$produto['codigo']?></td>
                <td><?=$produto['descricao']?></td>
                <td><?=$produto['valor']?></td>
                <td><?=$produto['categoria']?></td>
            </tr>
            <?php endforeach ?>
        </table>
        <a href="./produto/adicionar" class="btn btn-primary">Novo Produto</a>
    </body>
</html>

 