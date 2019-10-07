<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./publico/css/app.css">
        
    </head>
    <body>
        
        <h2 class="cadastroTitulo">Ver detalhes do cliente</h2>
        
        <div id="visualizarCliente">           
        <p>Id: <?=$cliente['idUsuario']?></p>
        <p>Nome: <?=$cliente['nomeUsuario']?></p>
        <p>Email: <?=$cliente['email']?></p>
        <p>Senha: <?=$cliente['senha']?></p>
        <p>Cpf: <?=$cliente['cpf']?></p>
        <p>Data de Nascimento: <?=$cliente['datadenascimento']?></p>
        <p>Sexo: <?=$cliente['sexo']?></p>
        <p>Tipo usuário: <?=$cliente['tipoUsuario']?></p>
        <p>Endereço :</p> <a href="./endereco/adicionar/<?=$cliente['idUsuario']?>"><button id="btnNovoEndereco">Novo endereço</button></a>
      
         <br><a href="./cliente/listarClientes"><button class="btnVoltar">Voltar</button></a>
        </div>
        
        <?php
       require_once 'visao/endereco/listar.visao.php'; 
        ?>
        
    </body>
</html>