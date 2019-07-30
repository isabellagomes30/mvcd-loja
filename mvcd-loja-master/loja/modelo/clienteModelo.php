<?php

function adicionarCliente($nome, $email, $senha, $cpf, $datanasc, $sexo, $tipousuario){
    $sql = "INSERT INTO usuario (nomeUsuario, email, senha, cpf, datadenascimento, sexo, tipousuario) VALUES ('$nome', '$email', '$senha', '$cpf', '$datanasc', '$sexo', '$tipousuario')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar cliente' .mysqli_error($cnx));}
    return 'Cliente cadastrado com sucesso!';
    
}

function pegarTodosClientes (){
    $sql= "SELECT * FROM usuario";
    $resultado= mysqli_query(conn(), $sql);
    $clientes= array();
    while ($linha= mysqli_fetch_assoc($resultado)){
        $clientes[]= $linha;
    }
    return $clientes;
}

function pegarClientePorId ($idUsuario){
    $sql= "SELECT * FROM usuario where idUsuario= $idUsuario";
    $resultado= mysqli_query(conn(), $sql);
    $cliente= mysqli_fetch_assoc($resultado);
   
    return $cliente;
}

function deletarCliente($idUsuario){
    $sql= "DELETE FROM usuario WHERE idUsuario = $idUsuario";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){
        die('Erro ao deletar cliente' . mysqli_error($cnx));
    }
    return 'Cliente deletado com sucesso!';
}

function editarCliente($id, $nome, $email, $senha, $cpf, $datanasc, $sexo, $tipousuario){
   $sql = "UPDATE cliente SET nome = '$nome', email = '$email', senha = '$senha', cpf = '$cpf', datanasc = '$datanasc', sexo = '$sexo', tipousuario = '$tipousuario' WHERE id = $id" ;
   $resultado = mysqli_query($cnx = conn(), $sql);
   if(!$resultado) { die('Erro ao alterar cliente' . mysqli_error($cnx));}
   return 'Cliente alterado com sucesso!';
}

