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
          
           
            Nome: <input type="text" name="nomeproduto"><br>
            <br>Preço: <input type="text" name="preco"><br>
            <br>Descrição: <input type="text" name="descricao"><br>
            <br>Imagem: <input type="text" name="imagem"><br>
            <br>Categoria<select name="categoria">
                <option value="default">Selecione uma categoria</option>
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?=$categoria['idcategoria']?>"><?=$categoria['descricao']?></option>
                <?php endforeach;?>
            </select>
            <br>Estoque mínimo : <input type="text" name="estoque_minimo"><br>
            <br>Estoque máximo: <input type="text" name="estoque_maximo"><br>
            
            <br><button>Enviar</button>
        
        </form>
    </body>
</html>