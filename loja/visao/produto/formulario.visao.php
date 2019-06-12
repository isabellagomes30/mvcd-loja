<!DOCTYPE html>
<html> 
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(ehPost()){
        foreach ($errors as $erro) {
            echo "$erro<br>";
        }
    }
?>
        <h2>Cadastro do Produto</h2>
        <form action="" method="POST">
          
            Preço: <input type="text" name="preco"><br>
            <br>Nome: <input type="text" name="nomeproduto"><br>
            <br>Descrição: <input type="text" name="descricao"><br>
            <br>Imagem: <input type="text" name="imagem"><br>
            <br>Estoque mínimo : <input type="text" name="estoque_minimo"><br>
            <br>Estoque máximo: <input type="text" name="estoque_maximo"><br>
            
            <br><button>Enviar</button>
        
        </form>
    </body>
</html>