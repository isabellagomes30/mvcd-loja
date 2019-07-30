<?php

function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "loja");
    //$cnx = mysqli_connect("localhost", "id10144298_world_of_books", "basededadosloja", "id10144298_loja");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
    
}

?>
