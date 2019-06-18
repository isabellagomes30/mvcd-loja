<?php

function conn() {
    $cnx = mysqli_connect("localhost", "id7995291_ana", "lojabasededados", "id7995291_loja");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
    
}
