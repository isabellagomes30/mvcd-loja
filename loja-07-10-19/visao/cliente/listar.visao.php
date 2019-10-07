<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body>
<h2 class="cadastroTitulo">Listar  Clientes</h2>
<div id="caixaListarClientes">
<table class="table" border="1">
    <thead>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>SENHA</th>
        <th>CPF</th>
        <th>DATA DE NASCIMENTO </th>
        <th>SEXO</th>
        <th>TIPO USUÁRIO</th>
        <th>VISUALIZAR</th>
        <th>DELETAR</th>
		<th>EDITAR</th>
    </thead>
    <tbody>
        <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $cliente['idUsuario'] ?></td> 
                <td><?= $cliente['nomeUsuario'] ?></td> 
                <td><?= $cliente['email'] ?></td>
                <td><?= $cliente['senha'] ?></td>
                <td><?= $cliente['cpf'] ?></td>
                <td><?= $cliente['datadenascimento'] ?></td> 
                <td><?= $cliente['sexo'] ?></td> 
                <td><?= $cliente['tipoUsuario'] ?></td> 
                <td><a href="./cliente/ver/<?= $cliente['idUsuario'] ?>">Ver</a></td>
                <td><a href="./cliente/deletar/<?= $cliente['idUsuario'] ?>">Deletar</a></td>
		<td><a href="./cliente/editar/<?= $cliente['idUsuario'] ?>">Editar</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    
    <br><a href="./cliente/cadastro"><button class="btnListar">Novo Usuário</button></a>
    </div>



 </body>
</html>