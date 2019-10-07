<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body>
        
<h2 class="cadastroTitulo">Listar Endereços</h2>
       <div id="caixaListarEnderecos"> 
        <table class="table" border="1">
            
            <thead>
                <th>ID</th>
                <th>LOGRADOURO</th>
                <th>NÚMERO</th>
                <th>COMPLEMENTO</th>
                <th>BAIRRO</th>
                <th>CIDADE</th>
                <th>CEP</th>
                <th>VISUALIZAR</th>
                <th>DELETAR</th>
                <th>EDITAR</th>
            </thead>
            <?php foreach ($enderecos as $endereco): ?>
            <tr>
                <td><?=$endereco['idendereco']?></td>
                <td><?=$endereco['logradouro']?></td>
                <td><?=$endereco['numero']?></td>
                <td><?=$endereco['complemento']?></td>
                <td><?=$endereco['bairro']?></td>
                <td><?=$endereco['cidade']?></td>
                <td><?=$endereco['cep']?></td>
                <td><a href="./endereco/ver/<?=$endereco['idendereco']?>">Ver</a></td>
                <td><a href="./endereco/deletar/<?=$endereco['idendereco']?>/<?=$endereco['idusuario']?>">Deletar</a></td>
                <td><a href="./endereco/editar/<?= $endereco['idendereco'] ?>/<?=$endereco['idusuario']?>">Editar</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
   
 </body>
</html>
