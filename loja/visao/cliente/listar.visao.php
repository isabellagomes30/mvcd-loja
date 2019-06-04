<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Listar  Clientes</h2>
        
        <table class="table">
            <thead>
                <tr>NOME  </tr>
                <tr> SOBRENOME </tr>
                <tr> EMAIL </tr>
                <tr> SENHA </tr>
                <tr> CONFIRMAR SENHA </tr>
                <tr> CPF </tr>
                <tr> DATA DE NASCIMENTO </tr>
            </thead>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?=$cliente['nome']?></td>
                <td><?=$cliente['sobrenome']?></td>
                <td><?=$cliente['email']?></td>
                <td><?=$cliente['senha']?></td>
                <td><?=$cliente['confirmarsenha']?></td>
                <td><?=$cliente['cpf']?></td>
                <td><?=$cliente['datanasc']?></td>
            </tr>
            <?php endforeach ?>
        </table>
        <a href="./cliente/cadastro" class="btn btn-primary">Novo Cliente</a>
    </body>
</html>
