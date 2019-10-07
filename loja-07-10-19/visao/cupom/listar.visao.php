<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body>
        <h2 class="cadastroTitulo">Listar Cupom</h2>
        <div id="caixaListarCupom"> 
        <table class="table" border="1">
            <thead>
                <th>ID</th>
                <th>NOME DO CUPOM</th>
                <th>DESCONTO</th>
                <th>VISUALIZAR</th>
                <th>DELETAR</th>
                <th>EDITAR</th>
            </thead>
            <?php foreach ($cupons as $cupom): ?>
            <tr>
                <td><?=$cupom['idcupom']?></td>
                <td><?=$cupom['nomecupom']?></td>
                <td><?=$cupom['desconto']?></td>
                <td><a href="./cupom/ver/<?=$cupom['idcupom']?>">Ver</a></td>
                <td><a href=" ./cupom/deletar/<?=$cupom['idcupom']?>">Deletar</td>
                <td><a href="./cupom/editar/<?= $cupom['idcupom'] ?>">Editar</a></td>
            </tr>
            <?php endforeach ?>
        </table>
            
             <br><a href="./cupom/adicionarCupom"><button class="btnListar">Novo Cupom</button></a>
            </div>
        
       
        
    </body>
</html>