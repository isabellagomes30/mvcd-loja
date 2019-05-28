<?php

function adicionarCliente($nome, $sobrenome, $email, $senha, $confirmarsenha, $cpf, $datanasc, $sexo){
    $sql = "INSERT INTO cliente (nome, sobrenome, email, senha, confirmarsenha, cpf, datanasc, sexo) VALUES ('$nome', '$sobrenome', '$email', '$senha', '$confirmarsenha', '$cpf', '$datanasc', '$sexo')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar cliente' .mysqli_error($cnx));}
    return 'Cliente cadastrado com sucesso!';
    
}

function pegarTodosClientes (){
    $sql= "SELECT * FROM cliente";
    $resultado= mysqli_query(conn(), $sql);
    $clientes= array();
    while ($linha= mysqli_fetch_assoc($resultado)){
        $clientes[]= $linha;
    }
    return $clientes;
}

