<?php
require("servico/validarServico.php");
require_once 'modelo/categoriaModelo.php';

function adicionarCategoria () {
    if (ehPost()){
        $nome = $_POST["nomeCategoria"];
            
        $errors= array();
            
        if  (validar_elementos_obrigatorios($nome, "nomeCategoria") != NULL){
             $errors[]= validar_elementos_obrigatorios($nome, "nomeCategoria");
        }    
      
    if (count($errors) > 0){
        $dados= array();
        $dados["errors"]= $errors;
        exibir ("categoria/formulario", $dados);
    } else{   
    $msg = categoria($nome);
    echo $msg;
    redirecionar("categoria/listarCategorias");
    }
}else{
    exibir("categoria/formulario");

    }
}

function listarCategorias (){
    $dados= array();
    $dados["categorias"]= pegarTodasCategorias();
    exibir ("categoria/listar", $dados);
}

function ver ($idCategoria){
    $dados["categoria"]= pegarCategoriaPorId($idCategoria);
    exibir ("categoria/visualizar", $dados);
}

function deletar ($idCategoria){
    $msg = deletarCategoria($idCategoria);
    redirecionar ("categoria/listarCategorias");
}

