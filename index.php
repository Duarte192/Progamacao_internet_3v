<?php


#QUESTÃO 1
$contador = 0;

while ($contador <= 50) {
    echo $contador . "\n";

    $contador++;
}

#QUESTÃO 2
for ($i=1; $i <= 30 ; $i++) { 
    if ($i%2 == 0 ) {
        echo $i . "- Par";
        echo "\n";
    }else{
        echo $i . "- Impar";
        echo "\n";
    }
}
#QUESTÃO 3
$num = 5;
for ($t=1; $t <= 10 ; $t++) { 
    echo $num . "X" . $t . "=" . $t * $num;
    echo "\n";
}

#QUESTÃO 4
$a = 0;
$somaTotal = 0;
while ($a <= 100) {
    $somaTotal = $a + $somaTotal;
    $a++;
}
echo "Soma Total: " . $somaTotal . "\n";

#QUESTÃO 5

$numero = 13;
$multiploDe5 =$numero % 5 == 0;
$multiploDe3 = $numero % 3 == 0;

if($multiploDe3 && $multiploDe5){
    echo "É multiplo de 3 e 5";
}
else if ($multiploDe3) {
    echo "É multiplo de 3 ";
}
else if ($multiploDe5) {
    echo "É multiplo de 5";
}

else{
    echo "Não é múltiplo de nenhum dos dois";
}

echo "\n";
#Questão 6

$a = 35;
$b = 52;
$c = 92;

if ($a > $b && $a > $c) {
    echo "O maior é A";
}
else if($b > $a && $b > $c ){
    echo "O maior é B";
}
else{
    echo "C é o maior";
}
echo "\n";
if ($a < $b && $a < $c) {
    echo "O menor é A";
}
else if($b < $a && $b < $c ){
    echo "O menor é B";
}
else{
    echo "C é o menor";
}


#Questão 7

$cont = 20;

while ($cont >= 0) {
    echo $cont . "\n";
    $cont--;
}

#Questão 8

$numb = 5;

for ($j=$numb; $j >= 0 ; $j--) { 
    
}


?>