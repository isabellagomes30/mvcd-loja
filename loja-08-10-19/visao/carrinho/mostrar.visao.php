<!DOCTYPE html>
<html> 
    <head>
        <meta charset="UTF-8">
        <title></title>
       <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet"> 
    </head>
    <body>
           
                <h4 class="cadastroTitulo" >Meu carrinho <span></span></h4>
                
                <div id="caixaCarrinho">
                    
                <?php echo $erros;?>
                <?php foreach ($produtos as $produto):?>
                <p><a href="./produto/ver/<?=$produto["idproduto"]?>"><?=$produto["nomeproduto"]?></a><span>$<?= $produto["preco"]?></span> <a href="sacola/removerProduto/<?=$produto["idproduto"]?>" id="remover">Remover Produto</a></p>
                <?php endforeach;?>
                <hr>
                <div id="caixa2Carrinho">
                <h4>Total <span><b>R$ <?= $total ?></b></span></h4>
                
                <a href="sacola/limparCarrinho" class="campoCarrinho">Limpar Carrinho</a><br>
                <a href="produto/listarProdutos" class="campoCarrinho">Continuar Comprando</a>
            
                </div>
                </div>
        
    </body>
</html>