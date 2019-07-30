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
        <h2>Cadastro</h2>
        <form action="" method="POST">
        
            Nome: <input type="text" name="nomeUsuario" value="<?=@$cliente['nomeUsuario']?>"><br> 
            <br>Email: <input type="text" name="email" value="<?=@$cliente['email']?>"><br>
            <br>Senha: <input type="password" name="senha" value="<?=@$cliente['senha']?>"><br>
            <br>CPF: <input type="text" name="cpf" value="<?=@$cliente['cpf']?>"><br>
            <br>Data de Nascimento: <input type="text" name="datadenascimento" value="<?=@$cliente['datadenascimento']?>"><br>
            <br>Sexo:<br>
            <br> <input type="radio" name="sexo" value="F" checked="checked"> Feminino<br>
            <br> <input type="radio" name="sexo" value="M"> Masculino<br>
            <br>Tipo de usuário:<br>
            <br> <input type="radio" name="tipousuario" value="Adm" checked="checked"> Administrador<br>
            <br> <input type="radio" name="tipousuario" value="user">Cliente<br>
            
            <br><button>Enviar</button>
        
        </form>
    </body>
</html>
