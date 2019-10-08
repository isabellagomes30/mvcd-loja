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
        <table class="table">
            
            <thead>
                <th class="thTodos">ID</th>
                <th class="thTodos">PREÇO</th>
                <th class="thTodos">NOME</th>
                <th class="thTodos">DESCRIÇÃO</th>
                <th class="thTodos">IMAGEM</th>
                <th class="thTodos">ESTOQUE MÍNIMO</th>
                <th class="thTodos">ESTOQUE MÁXIMO</th>
                <th class="thTodos">QUANTIDADE ESTOQUE</th>
                <th class="thTodos">VISUALIZAR</th>
                <th class="thTodos">DELETAR</th>
                <th class="thTodos">EDITAR</th>
            </thead>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td class="tdTodos"><?=$produto['idproduto']?></td>
                <td class="tdTodos"><?=$produto['preco']?></td>
                <td class="tdTodos"><?=$produto['nomeproduto']?></td>
                <td class="tdTodos"><?=$produto['descricao']?></td>
                <td class="tdTodos"><?=$produto['imagem']?></td>
                <td class="tdTodos"><?=$produto['estoque_minimo']?></td>
                <td class="tdTodos"><?=$produto['estoque_maximo']?></td>
                <td class="tdTodos"><?=$produto['quant_estoque']?></td>
                <td class="tdTodos"><a href="./produto/ver/<?=$produto['idproduto']?>">Ver</a></td>
                <td class="tdTodos"><a href="./produto/deletar/<?=$produto['idproduto']?>">Deletar</a></td>
                <td class="tdTodos"><a href="./produto/editar/<?= $produto['idproduto'] ?>">Editar</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
           
           <br><a href="./produto/adicionar" id="btnListar">Novo Produto</a>
        </div>
   
 </body>
</html>