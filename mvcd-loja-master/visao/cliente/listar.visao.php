<h2>Listar  Clientes</h2>

<table class="table" border="1">
    <thead>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>SENHA</th>
        <th>CPF</th>
        <th>DATA DE NASCIMENTO </th>
        <th>SEXO</th>
        <th>TIPO USUÁRIO</th>
        <th>VISUALIZAR</th>
        <th>DELETAR</th>
    </thead>
    <tbody>
        <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $cliente['nomeUsuario'] ?></td>
                <td><?= $cliente['email'] ?></td>
                <td><?= $cliente['senha'] ?></td>
                <td><?= $cliente['cpf'] ?></td>
                <td><?= $cliente['datadenascimento'] ?></td> 
                <td><?= $cliente['sexo'] ?></td> 
                <td><?= $cliente['tipoUsuario'] ?></td> 
                <td><a href="./cliente/ver/<?= $cliente['idUsuario'] ?>">Ver</a></td>
                <td><a href="./cliente/deletar/<?= $cliente['idUsuario'] ?>">Deletar</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="./cliente/cadastro" class="btn btn-primary">Novo Usuário</a>