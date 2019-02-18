<?php
   echo "Exercício 1 <br>";
   
    $n1=10;
    $n2=4;
    $n3=8;
    $n4=6;
  
   $media=($n1+$n2+$n3+$n4)/4;
   
   if ($media>=6) {
      echo "Aprovado"; 
   }else{
      echo"Reprovado";  
   }     

   echo "<br>";
   
    echo "<br>Exercício 2 <br>";
    
   $salario=1960;
   
   if ($salario<=1.000){
      $bonus=$salario*0.40;
   }else{
      $bonus=$salario*0.30; 
   }
   echo $salario ."<br>" ;
   echo $bonus+$salario;
   
   echo "<br>";
   
   echo "<br>Exercício 3 <br>";
   
    $med=7.5;
    $fre=0.75;
   
   if (($med>=6) && ($fre>=0.75)){
      echo "Aprovado"; 
   }else{
      echo"Reprovado";  
   } 
   
   echo "<br>";
   
   echo "<br>Exercício 4 <br>";
   
      for ($i=0; $i<=100; $i++){
        if ($i %2==0){
         echo $i ."<br>"; 
       }   
      }
      
     echo "<br>";
     
    echo "<br>Exercício 5 <br>";
    
    $nu1=8;
    $nu2=4;
    
        if ($nu1 > $nu2){
         echo $nu1 . " é maior"; 
       } else{
           echo $nu2 . " é maior";
       }  
      
       echo "<br>";
       
     echo "<br>Exercício 6 <br>";
    
    $num1=10;
    $num2=15;
    $num3=27;
    
        if (($num1 > $num2) && ($num1 > $num3)){
         echo $num1 . " é maior"; 
       } else{
           if (($num2 > $num1) && ($num2 > $num3)){
         echo $num2 . " é maior"; 
       } else{
           echo $num3 . " é maior";
       }  
        
       }  
       
       echo "<br>";
       
       echo "<br>Exercício 7 <br>";
       
       $nume1=8;
       $nume2=8;
    
       if ($nume1 == $nume2) {
           echo $nume1 ." é igual: " .$nume2;;
       } else{
           if ($nume1 > $nume2){
              echo $nume1 ." é maior que " .$nume2;
           }else{
           echo $nume2 ." é maior que " .$nume1;
       }
     }   
       
     echo "<br>";
     
     echo "<br>Exercício 8 <br>";
     
     $idade=19;
     
     if (($idade<18) or ($idade>60)){
         echo "Pagar: meia";
     }else{
         echo "Pagar: Inteira"; 
     }
     
     echo "<br>";
     
     echo "<br>Exercício 9 <br>";
    
    for($j=1;$j<=10;$j++){
      echo "Tabuada do ".$j."<br>";
    for($i=1;$i<=10;$i++){
       print $j." x ".$i." = ".($j*$i)."<br>";
    }
    echo "<br>";
    } 
