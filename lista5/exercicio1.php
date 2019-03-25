<?php

$valores = array(
  $_GET["v1"],  
  $_GET["v2"], 
  $_GET["v3"], 
  $_GET["v4"], 
  $_GET["v5"]
);

$maior=0;

for ($i=0; $i < count($valores); $i++){
    
    if($valores[$i] > $maior){
        
        $maior = $valores[$i];
    }
    
};
echo $maior."<br>";

for ($i=0; $i < count($valores); $i++){
    
    if($valores[$i]%2==0){
        
        echo $valores[$i]. " é par!". "<br>";
    }
}

for ($i=0; $i < count($valores); $i++){
    
    if($valores[$i]%3==0 && $valores[$i]%5==0){
        
        echo $valores[$i]. " é múltiplo de 3 e 5!". "<br>";
    }else {
         echo $valores[$i]. " não é múltiplo de 3 e 5!". "<br>";
    }
}