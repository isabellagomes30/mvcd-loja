<!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <title>Lista 2</title>
 </head>
 <body>
  
<?php

echo "Exercício 1 <br>";

$vetor_1 = array();

for ($i=0; $i < 50; $i++){
$vetor_1[$i] = 42;
     
}
echo "<pre>";
print_r($vetor_1);
echo "</pre>";
    
    
echo "<br> Exercício 2 <br>";

$vetor_2 = array();

for ($i=0; $i < 50; $i++){
    $vetor_2[$i] = $i+1;
    
}
echo "<pre>";
print_r($vetor_2);
echo "</pre>";


echo "<br> Exercício 3 <br>";

$vetor_3 = array();
$maior = 0;
$soma = 0;
        
for ($i=0; $i < 30; $i++){
    $vetor_3[$i] = $i;
    
    if ($vetor_3[$i] > $maior){
        $maior = $vetor_3[$i];
        $posicao = $i;
        
    }
    
    $soma = $vetor_3[$i] + $soma;
    $media = $soma/count ($vetor_3);
    
}

echo "O maior número é: ". $maior . "  Na posição: ". $posicao ."<br>";
echo "O valor da soma é: ". $soma."<br>";
echo "O valor da média é: " . $media. "<br>";



echo "<br> Exercício 4 <br>";

$vetor_4 = array();

for ($i=0; $i < 50; $i++){
    $vetor_4[$i] = $i*2;
    
}
echo "<pre>";
print_r($vetor_4);
echo "</pre>";


echo "<br> Exercício 5 <br>";
?>
     <select>
        <?php
            $vetor=array(
                0=>"Ana Laura",
                1=>"Yasmin",
                2=>"Thais",
                3=>"Isabella",
                4=>"Camilly",
                5=>"Samuel",
                6=>"Thiago",
                7=>"Maria",
                8=>"Thalia",
                9=>"Leticia",
            );
         
            for($i=0; $i < 10; $i++) {       
         ?>
         
         <option>
             <?php
             echo $vetor[$i];
             ?>
         </option>
         <?php
            }
         ?>
     </select>
 
 </body>
</html>