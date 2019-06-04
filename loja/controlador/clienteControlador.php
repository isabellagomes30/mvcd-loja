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
            
            $errors= array();
            
            if  (validar_elementos_obrigatorios($nome, "nome") != NULL){
                $errors[]= validar_elementos_obrigatorios($nome, "nome");
            }
            if  (validar_elementos_obrigatorios($sobrenome, "sobrenome") != NULL){
                $errors[]= validar_elementos_obrigatorios($sobrenome, "sobrenome");
            }
            if  (validar_email($email, "email") != NULL){
                $errors[]= validar_email($email, "email");
            }
             if  (validar_elementos_obrigatorios($senha, "senha") != NULL){
                $errors[]= validar_elementos_obrigatorios($senha);
            }
            if  (validar_elementos_obrigatorios($confirmarsenha, "confirmarsenha") != NULL){
                $errors[]= validar_elementos_obrigatorios($confirmarsenha);
            }
            if  (validar_elementos_especificos($cpf, "cpf") != NULL){
                $errors[]= validar_elementos_especificos($cpf, "cpf");
            }
            if  (validar_elementos_especificos($datanasc, "datanaasc") != NULL){
                $errors[]= validar_elementos_especificos($datanasc);
            }
            
            if (count($errors) > 0){
                $dados= array();
                $dados["errors"]= $errors;
                exibir ("cliente/cadastro", $dados);
            } else{
               $msg = adicionarCliente($nome, $sobrenome, $email, $senha, $confirmarsenha, $cpf, $datanasc, $sexo);
               echo $msg;
              redirecionar("cliente/listarClientes");
            }
            }else {
                exibir ("cliente/cadastro");
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


function ver ($id){
    $dados["cliente"]= pegarClientePorId($id);
    exibir ("cliente/listar", $dados);
}
