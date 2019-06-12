<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Listar Categoria</h2>
        
        <table class="table" border="1">
            <thead>
                <th>NOME</th>
                <th>VISUALIZAR</th>
                <th>DELETAR</th>
            </thead>
            <?php foreach ($categorias as $categoria): ?>
            <tr>
                <td><?=$categoria['descricao']?></td>
                <td><a href="./categoria/ver/<?=$categoria['idcategoria']?>">Ver</a></td>
                <td><a href=" ./categoria/deletar/<?=$categoria['idcategoria']?>">Deletar</td>
            </tr>
            <?php endforeach ?>
        </table>
        <a href="./categoria/adicionarCategoria" class="btn btn-primary">Nova Categoria</a>
    </body>
</html>

 