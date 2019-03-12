<?php

 $valores= array(
     0=> $_POST["N1"],
     1=> $_POST["N2"],
     2=> $_POST["N3"],
     3=> $_POST["N4"],
     4=> $_POST["N5"],
 );
 
 $maior=0;
 
 for($i=0;$i<count($valores);$i++){
     if ($valores[$i] > $maior){
        $maior = $valores[$i];
        
        
    }
 }
 
 echo "O maior número: " .$maior ."<br>";
 
 for($i=0;$i<count($valores);$i++){
     if ($valores[$i] % 2 == 0){
         echo  $valores[$i]. " é par!" ."<br>";
     }
 }
 
