<?php
require("servico/validarServico.php");
require_once 'modelo/categoriaModelo.php';

function adicionarCategoria () {
    if (ehPost()){
        $nome = $_POST["nomeCategoria"];
            
       echo validar_elementos_obrigatorios($nome);    
      
       
    $msg = categoria($nome);
    echo $msg;
    
    print_r($_POST);
    
}else{
    exibir("categoria/formulario");

    }
}

function listarCategorias (){
    $dados= array();
    $dados["categorias"]= pegarTodasCategorias();
    exibir ("categoria/listar", $dados);
}