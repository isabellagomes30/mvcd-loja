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
                <tr>NOME</tr>
                <tr>SOBRENOME</tr>
                <tr>EMAIL</tr>
                <tr>SENHA</tr>
                <tr>CONFIRMAR SENHA</tr>
                <tr>CPF</tr>
                <tr>DATA DE NASCIMENTO</tr>
            </thead>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?=$cliente['nome']?></td>
                <td><?=$cliente['sobrenome']?></td>
                \\continua...
            </tr>
        </table>
        
       
    </body>
</html>

