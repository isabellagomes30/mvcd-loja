<?php

require("servico/validarServico.php");
require_once 'modelo/clienteModelo.php';

function cadastro () {
    if (ehPost()){
            $nome = $_POST["nome"];
            $sobrenome = $_POST["sobrenome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $confirmarsenha = $_POST["confirmarsenha"];
            $cpf = $_POST["cpf"];
            $datanasc = $_POST["datanasc"];
            $sexo = $_POST["sexo"];
            
       echo validar_elementos_obrigatorios($nome);    
       echo validar_elementos_obrigatorios($sobrenome);     
       echo validar_email($email);
       echo validar_elementos_obrigatorios($senha);
       echo validar_elementos_obrigatorios($confirmarsenha);
       echo validar_elementos_especificos($cpf);
       echo validar_elementos_especificos($datanasc);
      
       
    $msg = adicionarCliente($nome, $sobrenome, $email, $senha, $confirmarsenha, $cpf, $datanasc, $sexo);
    echo $msg;
    
    print_r($_POST);
    
}else{
    exibir("cliente/cadastro");

    }
}

function contato () {
    if (ehPost()){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $cpf = $_POST["cpf"];
            $telefone = $_POST["telefone"];
            $mensagem = $_POST["mensagem"];
            
            
       echo validar_elementos_obrigatorios($nome);
       echo validar_email($email);
       echo validar_elementos_especificos($cpf);
       echo validar_elementos_especificos($telefone); 
       echo validar_elementos_obrigatorios($mensagem);
            
    print_r($_POST);
    
}else{
    exibir("cliente/contato");

    }
}

function listarClientes (){
    $dados= array();
    $dados["clientes"]= pegarTodosClientes();
    exibir ("cliente/listar", $dados);
}



