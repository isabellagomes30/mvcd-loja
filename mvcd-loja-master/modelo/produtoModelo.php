<?php

function adicionarProduto($nomeproduto, $preco, $descricao, $imagem, $categoria, $estoque_minimo, $estoque_maximo ){
    $sql = "INSERT INTO produtos (nomeproduto, preco, descricao, imagem, categoria, estoque_minimo, estoque_maximo) VALUES ('$nomeproduto', '$preco', '$descricao', '$imagem', '$categoria', '$estoque_minimo', '$estoque_maximo', 1)";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar o produto' .mysqli_error($cnx));}
    return 'Produto cadastrado com sucesso!';
    
}


function pegarTodosProdutos (){
    $sql= "SELECT * FROM produtos";
    $resultado= mysqli_query(conn(), $sql);
    $produtos= array();
    while ($linha= mysqli_fetch_assoc($resultado)){
        $produtos[]= $linha;
    }
    return $produtos;
}

function pegarProdutoPorId ($idProduto){
    $sql= "SELECT * FROM produtos where idProduto= $idProduto";
    $resultado= mysqli_query(conn(), $sql);
    $produto= mysqli_fetch_assoc($resultado);
   
    return $produto;
}

function deletarProduto($idProduto){
    $sql= "DELETE FROM produtos WHERE idProduto = $idProduto";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){
        die('Erro ao deletar produto' . mysqli_error($cnx));
    }
    return 'Produto deletado com sucesso!';
}



