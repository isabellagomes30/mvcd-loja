<?php

function adicionarProduto($nome, $codigo, $descricao, $valor, $categoria){
    $sql = "INSERT INTO produto (nome, codigo, descricao, valor, categoria) VALUES ('$nome', '$codigo', '$descricao', '$valor', '$categoria')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar o produto' .mysqli_error($cnx));}
    return 'Produto cadastrado com sucesso!';
    
}

function pegarTodosProdutos (){
    $sql= "SELECT * FROM produto";
    $resultado= mysqli_query(conn(), $sql);
    $produtos= array();
    while ($linha= mysqli_fetch_assoc($resultado)){
        $produtos[]= $linha;
    }
    return $produtos;
}



