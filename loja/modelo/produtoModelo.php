<?php

function adicionarProduto($nome, $codigo, $descricao, $valor, $categoria){
    $sql = "INSERT INTO produto (nome, codigo, descricao, valor, categoria) VALUES ('$nome', '$codigo', '$descricao', '$valor', '$categoria')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar o produto' .mysqli_error($cnx));}
    return 'Produto cadastrado com sucesso!';
    
}



