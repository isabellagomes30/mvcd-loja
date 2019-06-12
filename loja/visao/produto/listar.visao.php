<h2>Listar Produtos</h2>
        
        <table class="table" border="1">
            <thead>
                <th>PREÇO</th>
                <th>NOME</th>
                <th>DESCRIÇÃO</th>
                <th>IMAGEM</th>
                <th>ESTOQUE MÍNIMO</th>
                <th>ESTOQUE MÁXIMO</th>
                <th>VISUALIZAR</th>
                <th>DELETAR</th>
            </thead>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?=$produto['preco']?></td>
                <td><?=$produto['nomeproduto']?></td>
                <td><?=$produto['descricao']?></td>
                <td><?=$produto['imagem']?></td>
                <td><?=$produto['estoque_minimo']?></td>
                <td><?=$produto['estoque_maximo']?></td>
                <td><a href="./produto/ver/<?=$produto['idproduto']?>">Ver</a></td>
                <td><a href="./produto/deletar/<?=$produto['idproduto']?>">Deletar</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <a href="./produto/adicionar" class="btn btn-primary">Novo Produto</a>
   