<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Listar Categoria</h2>
        
        <table class="table">
            <thead>
                <tr>NOME</tr>
                
            </thead>
            <?php foreach ($categorias as $categoria): ?>
            <tr>
                <td><?=$categoria['nome']?></td>
                <td><a href="./categoria/ver/<?=$categoria['idCategoria']?>">Ver</a></td>
                <td><a href=" ./categoria/deletar/<?=$categoria['idCategoria']?>">Deletar</td>
            </tr>
            <?php endforeach ?>
        </table>
        <a href="./categoria/adicionarCategoria" class="btn btn-primary">Nova Categoria</a>
    </body>
</html>

 