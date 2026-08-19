<?php


#QUESTÃO 1
$contador = 0;

while ($contador <= 50) {
    echo $contador;

    $contador++;
}

#QUESTÃO 2

for ($i=0; $i < 30 ; $i++) { 
    if ($i%2== 0) {
        echo `${$i} Par`;
    }else{
        echo `${$i} Impar`;
    }
}




?>