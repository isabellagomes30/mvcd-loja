<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body>
        
<h2 class="cadastroTitulo">Listar Produtos</h2>
       <div id="caixaListarProdutos"> 
        <table class="table" border="1">
            
            <thead>
                <th>PREÇO</th>
                <th>NOME</th>
                <th>DESCRIÇÃO</th>
                <th>IMAGEM</th>
                <th>ESTOQUE MÍNIMO</th>
                <th>ESTOQUE MÁXIMO</th>
                <th>VISUALIZAR</th>
                <th>DELETAR</th>
                <th>EDITAR</th>
            </thead>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?=$produto['preco']?></td>
                <td><?=$produto['nomeproduto']?></td>
                <td><?=$produto['descricao']?></td>
                <td><?=$produto['imagem']?></td>
                <td><?=$produto['estoque_minimo']?></td>
                <td><?=$produto['estoque_maximo']?></td>
                <td><a href="./produto/ver/<?=$produto['idproduto']?>">Ver</a></td>
                <td><a href="./produto/deletar/<?=$produto['idproduto']?>">Deletar</a></td>
                <td><a href="./produto/editar/<?= $produto['idproduto'] ?>">Editar</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
     
        <br><a href="./produto/adicionar"><button class="btnListar">Novo Produto</button></a>
   
 </body>
</html>