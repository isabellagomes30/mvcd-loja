<?php

function categoria ($nome){
    $sql = "INSERT INTO categoria (nome) VALUES ('$nome')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar a Categoria' .mysqli_error($cnx));}
    return 'Categoria cadastrado com sucesso!';
    
}

function pegarTodasCategorias (){
    $sql= "SELECT * FROM categoria";
    $resultado= mysqli_query(conn(), $sql);
    $categorias= array();
    while ($linha= mysqli_fetch_assoc($resultado)){
        $categorias[]= $linha;
    }
    return $categorias;
}

