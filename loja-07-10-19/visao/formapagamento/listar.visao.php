<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body>
        <h2 class="cadastroTitulo">Listar Forma de Pagamento</h2>
        <div id="caixaListarFormaPagamento"> 
        <table class="table" border="1">
            <thead>
                <th>ID</th>
                <th>DESCRIÇÃO</th>
                <th>VISUALIZAR</th>
                <th>DELETAR</th>
                <th>EDITAR</th>
            </thead>
            <?php foreach ($formapagamentos as $formapagamento): ?>
            <tr>
                <td><?=$formapagamento['idformapagamento']?></td>
                <td><?=$formapagamento['descricao']?></td>
                <td><a href="./formapagamento/ver/<?=$formapagamento['idformapagamento']?>">Ver</a></td>
                <td><a href=" ./formapagamento/deletar/<?=$formapagamento['idformapagamento']?>">Deletar</td>
                <td><a href="./formapagamento/editar/<?= $formapagamento['idformapagamento'] ?>">Editar</a></td>
            </tr>
            <?php endforeach ?>
        </table>
            
            <br><a href="./formapagamento/adicionarFormapagamento"><button id="btnListarFormaDePag">Nova Forma de Pagamento</button></a>
            </div>
        
    </body>
</html>

 