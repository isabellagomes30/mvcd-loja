<?php

require("servico/validarServico.php");
require_once 'modelo/produtoModelo.php';

function visualizar () {
    
    $dados = array ();
    $dados["nome"] = "Para todos os garotos que já amei";
    $dados["codigo"] = "1234";
    $dados["descricao"] = "Lara Jean guarda suas cartas de amor em uma caixa azul-petróleo que ganhou da mãe. Não são cartas que ela recebeu de alguém, mas que ela mesma escreveu. Uma para cada garoto que amou — cinco ao todo. São cartas sinceras, sem joguinhos nem fingimentos, repletas de coisas que Lara Jean não diria a ninguém, confissões de seus sentimentos mais profundos. Até que um dia essas cartas secretas são misteriosamente enviadas aos destinatários, e de uma hora para outra a vida amorosa de Lara Jean sai do papel e se transforma em algo que ela não pode mais controlar";
    $dados["preco"] = "39,90";
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
            
       echo validar_elementos_obrigatorios($nome);
       echo validar_elementos_especificos($codigo); 
       echo validar_elementos_obrigatorios($descricao);
       echo validar_elementos_especificos($valor); 
       echo validar_elementos_obrigatorios($categoria); 
       
    $msg = adicionarProduto($nome, $codigo, $descricao, $valor, $categoria);
    echo $msg;    
    
    print_r($_POST);
    
}else{
    exibir("produto/formulario");

    }
}

function listarProdutos (){
    $dados= array();
    $dados["produtos"]= pegarTodosProdutos();
    exibir ("produto/listar", $dados);
}
