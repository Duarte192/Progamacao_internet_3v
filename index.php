<?php


#QUESTÃO 1
$contador = 0;

while ($contador <= 50) {
    echo $contador . "\n";

    $contador++;
}

echo "-------------------------------------------------------------------------------------------------------\n\n\n";

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
echo "-------------------------------------------------------------------------------------------------------\n\n\n";

#QUESTÃO 3
$num = 5;
for ($t=1; $t <= 10 ; $t++) { 
    echo $num . "X" . $t . "=" . $t * $num;
    echo "\n";
}
echo "-------------------------------------------------------------------------------------------------------\n\n\n";

#QUESTÃO 4
$a = 0;
$somaTotal = 0;
while ($a <= 100) {
    $somaTotal = $a + $somaTotal;
    $a++;
}
echo "Soma Total: " . $somaTotal . "\n";

echo "-------------------------------------------------------------------------------------------------------\n\n\n";

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

echo "-------------------------------------------------------------------------------------------------------\n\n\n";

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

echo "-------------------------------------------------------------------------------------------------------\n\n\n";

#Questão 7

$cont = 20;

while ($cont >= 0) {
    echo $cont . "\n";
    $cont--;
}


echo "-------------------------------------------------------------------------------------------------------\n\n\n";

#Questão 8
$numeroF = 5;
echo $numeroF . " = ";
for ($j=$numeroF - 1; $j > 1 ; $j--) { 
    $numeroF = $numeroF * $j;
    echo $numeroF ." x ";
}
echo " = ";


echo "-------------------------------------------------------------------------------------------------------\n\n\n";

#Questão 9

$numero2 = 7;
$primo = true;

for ($i=2; $i < $numero2 ; $i++) { 
    if($numero2 % $i == 0){
        $primo = false;
        break;
    }
}
if ($primo) {
    echo "É primo!";
}else{
    echo "Não é primo!";
}

echo "-------------------------------------------------------------------------------------------------------\n\n\n";

#questão 10

$tamanho = 15;

$a = 0;
$b = 1;

echo "1 ";

for ($i=3; $i < $tamanho + 2 ; $i++) {  
    $c = $a + $b;

    echo $c . " ";

    $a = $b;
    $b = $c;
}

echo "-------------------------------------------------------------------------------------------------------\n\n\n";

#questão 11


$numeros = [45, 12, 89, 3, 67, 21, 100, 8, 55];
$maior = $numeros[0];
$menor = $numeros[0];

$maiorPos = 0 ;
$menorPos = 0 ;


for ($i=0; $i < count($numeros) ; $i++) { 
        if ($numeros[$i] > $maior ) {
        $maior = $numeros[$i];
        $maiorPos = $i;
    }
    if ( $numeros[$i] < $menor  ) {
        $menor = $numeros[$i];
        $menorPos = $i;
    }
}
echo "\n ";
echo "O maior" . $maior;
echo "\nPosição do maior " . $maiorPos;
echo "\n ";
echo "O Menor" . $menor;
echo "\nPosição do maior " . $menorPos;

    
#Questão 12


// Questão 12 — Estatísticas de uma turma
// Considere o vetor abaixo. Percorra-o e calcule:
// $notas = [7.5, 4.0, 8.5, 6.0, 9.0, 3.5, 10.0, 5.5];
// ● a média da turma;
// ● quantos alunos possuem nota maior ou igual a 6;
// ● quantos alunos possuem nota menor que 6;
// ● a maior nota;
// ● a menor nota.


$notas = [7.5, 4.0, 8.5, 6.0, 9.0, 3.5, 10.0, 5.5];

$media = 0;
$peso = count($notas);
$maiorNota = $notas[0];
$menorNota = $notas[0];

for ($i=0; $i < count($notas) ; $i++) { 
    $media = $media + $notas[$i];

    if ($notas[$i] > $maiorNota ) {
        $maiorNota = $notas[$i];
    }
    if ($notas[$i] < $menorNota ) {
        $menorNota = $notas[$i];
    }
}

$media = $media / $peso;




?>