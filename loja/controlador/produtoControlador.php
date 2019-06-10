<?php

require("servico/validarServico.php");
require_once 'modelo/produtoModelo.php';

function visualizar () {
    
    $dados = array ();
    $dados["nome"] = "Para todos os garotos que já amei";
    $dados["codigo"] = "1234";
    $dados["descricao"] = "Lara Jean guarda suas cartas de amor em uma caixa azul-petróleo que ganhou da mãe. Não são cartas que ela recebeu de alguém, mas que ela mesma escreveu. Uma para cada garoto que amou — cinco ao todo. São cartas sinceras, sem joguinhos nem fingimentos, repletas de coisas que Lara Jean não diria a ninguém, confissões de seus sentimentos mais profundos. Até que um dia essas cartas secretas são misteriosamente enviadas aos destinatários, e de uma hora para outra a vida amorosa de Lara Jean sai do papel e se transforma em algo que ela não pode mais controlar";
    $dados["valor"] = "39,90";
    $dados["categoria"] = "Infanto Juvenil";
    
    exibir("produto/visualizar" , $dados);
}

function adicionar () {
    if (ehPost()){
            $nome = $_POST["nomeproduto"];
            $codigo = $_POST["codigo"];
            $descricao = $_POST["descricao"];
            $valor = $_POST["valor"];
            $categoria = $_POST["categoria"];
        
            $errors= array();
            
            if  (validar_elementos_obrigatorios($nome, "nomeproduto") != NULL){
                $errors[]= validar_elementos_obrigatorios($nome, "nomeproduto");
            }
            if  (validar_elementos_especificos($codigo, "codigo") != NULL){
                $errors[]= validar_elementos_especificos($codigo, "codigo");
            }
            if  (validar_elementos_obrigatorios($descricao, "descricao") != NULL){
                $errors[]= validar_elementos_obrigatorios($descricao,"descricao");
            }
            if  (validar_elementos_especificos($valor, "valor") != NULL){
                $errors[]= validar_elementos_especificos($valor, "valor");
            }
            if  (validar_elementos_obrigatorios($categoria, "categoria") != NULL){
                $errors[]= validar_elementos_obrigatorios($categoria, "categoria");
            }
            
            if (count($errors) > 0){
                $dados= array();
                $dados["errors"]= $errors;
                exibir ("produto/formulario", $dados);
            } else{
                 $msg = adicionarProduto($nome, $codigo, $descricao, $valor, $categoria);
                 echo $msg;    
                 redirecionar("produto/listarProdutos");
            }
            }else{
                exibir("produto/formulario");

    }
}

function listarProdutos (){
    $dados= array();
    $dados["produtos"]= pegarTodosProdutos();
    exibir ("produto/listar", $dados);
}

function ver ($idProduto){
    $dados["produto"]= pegarProdutoPorId($idProduto);
    exibir ("produto/listar", $dados);
}
