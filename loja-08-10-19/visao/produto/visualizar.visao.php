<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./publico/css/app.css">
        
    </head>
    <body>
<h2 class="cadastroTitulo">Ver detalhes do produto</h2>
<div id="visualizarProduto">
<p>Id Produto: <?= $produto['idproduto'] ?></p>
<p>Id Categoria: <?= $produto['idcategoria'] ?></p>
<p>Preço: <?= $produto['preco'] ?></p>
<p>Nome: <?= $produto['nomeproduto'] ?></p>
<p>Descrição:<?= $produto['descricao'] ?></p>
<p>Imagem: <?= $produto['imagem'] ?></p>
<p>Estoque Mínimo: <?= $produto['estoque_minimo'] ?></p>
<p>Estoque Máximo: <?= $produto['estoque_maximo'] ?></p>
<p>Quantidade estoque: <?= $produto['quant_estoque'] ?></p>

 <br>
   <?php if (acessoPegarPapelDoUsuario() == 'Adm') { ?>
 <a href="./produto/listarProdutos"><button class="btnVoltar">Voltar</button></a>
  <?php } ?>
 <br><a href="./produto/comprar/<?= $produto['idproduto'] ?>"><button class="btnVoltar">Comprar</button></a>
</div>

  </body>
</html>