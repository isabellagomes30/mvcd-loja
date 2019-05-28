<?php

function categoria ($nome){
    $sql = "INSERT INTO categoria (nome) VALUES ('$nome')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar a Categoria' .mysqli_error($cnx));}
    return 'Categoria cadastrado com sucesso!';
    
}



