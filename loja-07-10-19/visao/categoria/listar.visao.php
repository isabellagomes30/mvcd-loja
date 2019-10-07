<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body>
        <h2 class="cadastroTitulo">Listar Categoria</h2>
        <div id="caixaListarCategorias"> 
        <table class="table" border="1">
            <thead>
                <th>ID</th>
                <th>NOME</th>
                <th>VISUALIZAR</th>
                <th>DELETAR</th>
                <th>EDITAR</th>
            </thead>
            <?php foreach ($categorias as $categoria): ?>
            <tr>
                <td><?=$categoria['idcategoria']?></td>
                <td><?=$categoria['descricao']?></td>
                <td><a href="./categoria/ver/<?=$categoria['idcategoria']?>">Ver</a></td>
                <td><a href=" ./categoria/deletar/<?=$categoria['idcategoria']?>">Deletar</td>
                <td><a href="./categoria/editar/<?= $categoria['idcategoria'] ?>">Editar</a></td>
            </tr>
            <?php endforeach ?>
        </table>
            <br><br><a href="./categoria/adicionarCategoria"><button class="btnListar">Nova Categoria</button></a>
            </div>
        

        
    </body>
</html>

 