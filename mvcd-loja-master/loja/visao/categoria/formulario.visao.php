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
        <h2>Cadastro de Categoria</h2>
        <form action="" method="POST">
        
            Nome: <input type="text" name="descricao"><br>
            
            
            <br><button>Enviar</button>
        
        </form>
    </body>
</html>

