<?php

function adicionarCliente($nome, $sobrenome, $email, $senha, $confirmarsenha, $cpf, $datanasc, $sexo){
    $sql = "INSERT INTO cliente (nome, sobrenome, email, senha, confirmarsenha, cpf, datanasc, sexo) VALUES ('$nome', '$sobrenome', '$email', '$senha', '$confirmarsenha', '$cpf', '$datanasc', '$sexo')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar clinte' .mysqli_error($cnx));}
    return 'Cliente cadastrado com sucesso!';
    
}

