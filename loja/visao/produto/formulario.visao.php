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
        <form action="" method="POST">
        
            Nome: <input type="text" name="nomeproduto"><br>
            <br>Código: <input type="text" name="codigo"><br>
            <br>Descrição: <input type="text" name="descricao"><br>
            <br>Valor: <input type="text" name="valor"><br>
            <br>Categoria: <input type="text" name="categoria"><br>
            
            <br><button>Enviar</button>
        
        </form>
    </body>
</html>