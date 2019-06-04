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
        
            Nome: <input type="text" name="nomeCategoria"><br>
            
            
            <br><button>Enviar</button>
        
        </form>
    </body>
</html>

