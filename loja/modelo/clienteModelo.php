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

function pegarClientePorId ($idCliente){
    $sql= "SELECT * FROM cliente where idCliente= $idCliente";
    $resultado= mysqli_query(conn(), $sql);
    $cliente= mysqli_fetch_assoc($resultado);
   
    return $cliente;
}

function deletarCliente($idCliente){
    $sql= "DELETE FROM cliente WHERE idCliente = $idCliente";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){
        die('Erro ao deletar cliente' . mysqli_error($cnx));
    }
    return 'Cliente deletado com sucesso!';
}


