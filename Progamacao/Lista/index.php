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
$maiorQue6 = 0;
$menorQue6 = 0;

for ($i=0; $i < count($notas) ; $i++) { 
    $media = $media + $notas[$i];

    if ($notas[$i] > $maiorNota ) {
        $maiorNota = $notas[$i];
    }
    if ($notas[$i] < $menorNota ) {
        $menorNota = $notas[$i];
    }

    if ($notas[$i] >= 6) {
        $maiorQue6++;
    }else{
        $menorQue6++;
    }

}

$media = $media / $peso;


echo "A media da turma é ".$media;
echo "\nNotas maiores que 6 da turma é " . $maiorQue6;
echo "\nNotas menores que 6 da turma é " . $menorQue6;
echo "\nA maior nota da turma é " . $maiorNota;
echo  "\nA menor nota da turma é ".$menorNota;

#QUESTÃO 13

$numeros3 = [200, 8, 35, 42, 11, 27, 39];

$maior = $numeros3[0];
$segundoMaior = 0;

for ($i = 0; $i < count($numeros3); $i++) {

    if ($numeros3[$i] > $maior) {
        $maior = $numeros3[$i];
    }
    
    if ($numeros3[$i] > $segundoMaior && $numeros3[$i] < $maior) {
        $segundoMaior = $numeros3[$i];
    }
}

echo "\nMaior número: " . $maior;
echo "\nSegundo maior número: " . $segundoMaior;

#QUESTÃO 14


$numerosF = [2, 5, 2, 8, 5, 2, 10, 8, 5, 5];
$repetido = false;

for ($i=0; $i < count($numerosF) ; $i++) { 

    for ($j=1; $j < $i; $j++) { 
        if( $numerosF[$i] == $numerosF[$j] ){
                    $repetido = true;
        break;
        }

    }

    if ($repetido) {
        continue;
    }

    $quantidade = 0;

    for ($j=0; $j < count($numerosF) ; $j++) { 
        if ($numerosF[$i] == $numerosF[$j]) {
            $quantidade++;
        }
    }

    echo "\nNúmero: " . $numerosF[$i] . " Aparece  " . $quantidade . " Vezes ";
}


#Questão 15

$alunos = [
["nome" => "Ana", "nota1" => 8.0, "nota2" => 7.0],
["nome" => "Carlos", "nota1" => 5.0, "nota2" => 4.5],
["nome" => "Maria", "nota1" => 9.0, "nota2" => 9.5],
["nome" => "João", "nota1" => 6.0, "nota2" => 5.0],
["nome" => "Pedro", "nota1" => 3.0, "nota2" => 7.0]
];

foreach($alunos as $aluno){
    $media = ($aluno["nota1"] + $aluno["nota2"]) / 2;
    echo"\n------------------------------------------------";
    echo "\nNome: ". $aluno["nome"];
    echo "\nA média do Aluno é: " . $media;
    if ($media >= 6) {
        echo "\nAprovado!";
    }else{
        echo "\nReprovado!";
    }
}



#questão 16
$produtos = [
["nome" => "Teclado", "preco" => 120, "quantidade" => 5],
["nome" => "Mouse", "preco" => 60, "quantidade" => 0],
["nome" => "Monitor", "preco" => 900, "quantidade" => 3],
["nome" => "Cabo HDMI", "preco" => 35, "quantidade" => 0],
["nome" => "Headset", "preco" => 250, "quantidade" => 2]
];
$valorTotalDeEstoque = 0;

$produtoComMaiorValor = 0;

echo "\nPRODUTOS DISPONIVEIS\n";
foreach($produtos as $produto){
    if ($produto["quantidade"] > 0) {
        $precototal = ($produto["preco"] * $produto["quantidade"]);
            if ($precototal > $produtoComMaiorValor ) {
                $produtoComMaiorValor = $precototal;
            }
  
        echo "\n-----------------------------------\n";
        echo "\nNome:" . $produto["nome"];
        echo "\nPreço: " . $produto["preco"];
        echo "\nQuantidade: " . $produto["quantidade"];
        echo "\nPreço total: " . $precototal ;

        $valorTotalDeEstoque += $precototal;
    }else{
        echo "\n-----------------------------------\n";
        echo "\nSEM ESTOQUE ----> " . $produto["nome"] ;
    }
    
}
echo "\nProduto com maior valor no mercado: " . $produtoComMaiorValor;




#Questão 17

$times = [
["nome" => "Time A", "vitorias" => 5, "empates" => 2, "derrotas" => 1],
["nome" => "Time B", "vitorias" => 4, "empates" => 4, "derrotas" => 0],
["nome" => "Time C", "vitorias" => 1, "empates" => 20, "derrotas" => 2],
["nome" => "Time D", "vitorias" => 7, "empates" => 3, "derrotas" => 2]
];

$melhorPontuacao = 0;
$empatesTime = 0;
$menorPontuacao = 9999999999999999999;
$pontuacaoTotal = 0;
$timeComMaisvitorias ="";
$maisVitorias = 0;
$melhorTime = "";
$piorTime = "";

foreach($times as $time){
    $pontuacaogeral = (($time["vitorias"] * 3) + $time["empates"]);
    $pontuacaovitoria = ($time["vitorias"]);
    if ($pontuacaogeral > $melhorPontuacao) {
        $melhorTime = $time["nome"];
        $melhorPontuacao = $pontuacaogeral;
    }else{
        if ($time["empates"] > $empatesTime ) {
            $empatesTime = $time["empates"];
            $melhorTime = $time["nome"];
            $melhorPontuacao = $pontuacaogeral;
        }
    }

    if ($pontuacaogeral < $menorPontuacao) {
    
        $menorPontuacao = $pontuacaogeral;
        $piorTime = $time["nome"];
    }
    if($pontuacaovitoria > $maisVitorias ){
        $maisVitorias = $pontuacaovitoria;
        $timeComMaisvitorias = $time["nome"];
    }
    $pontuacaoTotal += $pontuacaogeral;
}

echo "\n--------------------------------------------\n";
echo "\nTime com maior pontuação: " . $melhorTime;
echo "\nPontuação: " . $melhorPontuacao;
echo "\n--------------------------------------------\n";
echo "Time com Menor pontuação: " . $piorTime;
echo "\nPontuação: " . $menorPontuacao;
echo "\n--------------------------------------------\n";
echo "Time com maior vitorias: " . $timeComMaisvitorias;
echo "\nVitorias: " . $maisVitorias;
echo "\n--------------------------------------------\n";
echo "\nPontuação Geral: " . $pontuacaoTotal;




class Funcionario {

    public $nome;
    public $salario;
    public $cargo;

    public function __construct($nome, $salario, $cargo) {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->cargo = $cargo;
    }
}

$funcionarios = [

    new Funcionario("FUNCIONARIO A", 1200, "empregado"),
    new Funcionario("FUNCIONARIO B", 3555, "Adm"),
    new Funcionario("FUNCIONARIO C", 20000, "Gerente"),
    new Funcionario("FUNCIONARIO D", 9000, "empregado"),
    new Funcionario("FUNCIONARIO E", 400, "empregado")

];

$mediaSalarial = 0;
$maiorSalario = 0;
$menorSalario = 999999999;
$pessoasAcimaDaMedia = 0;

$maiorFuncionario = "";
$menorFuncionario = "";

foreach ($funcionarios as $funcionario) {

    $mediaSalarial += $funcionario->salario;

    if ($funcionario->salario > $maiorSalario) {
        $maiorSalario = $funcionario->salario;
        $maiorFuncionario = $funcionario->nome;
    }

    if ($funcionario->salario < $menorSalario) {
        $menorSalario = $funcionario->salario;
        $menorFuncionario = $funcionario->nome;
    }

    echo "\n--------------------------\n";
    echo "\nNome: " . $funcionario->nome;
    echo "\nSalario: " . $funcionario->salario;
    echo "\nCargo: " . $funcionario->cargo;
}

$mediaSalarial = $mediaSalarial / count($funcionarios);

echo "\n\n--------------------------";
echo "\nMédia salarial: " . $mediaSalarial;
echo "\nMaior salário: " . $maiorSalario;
echo "\nFuncionário: " . $maiorFuncionario;
echo "\nMenor salário: " . $menorSalario;
echo "\nFuncionário: " . $menorFuncionario;


foreach ($funcionarios as $funcionario) {

    if ($funcionario->salario > $mediaSalarial) {
        $pessoasAcimaDaMedia++;
    }
}

echo "\nFuncionários acima da média: " . $pessoasAcimaDaMedia;


foreach ($funcionarios as $funcionario) {

    $salarioAntigo = $funcionario->salario;

    if ($funcionario->salario < 2000) {

        $funcionario->salario = $funcionario->salario * 1.15;

    } elseif ($funcionario->salario <= 5000) {

        $funcionario->salario = $funcionario->salario * 1.10;

    } else {

        $funcionario->salario = $funcionario->salario * 1.05;
    }

    echo "\nNome: " . $funcionario->nome;
    echo "\nSalário antigo: " . $salarioAntigo;
    echo "\nSalário novo: " . $funcionario->salario;
    echo "\n--------------------------";
}

class Produto {
    public $nome;
    public $preco;
    public $quantidade;

    public function __construct($nome,$preco,$quantidade){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade =$quantidade;
    }
}
$produtos = [
    new Produto ("Arroz", 15,50),
    new Produto ("feijão", 6,50),
    new Produto ("macarrão", 3,100),
    new Produto ("1kg - carne", 30,50),
    new Produto ("1kg - Queijo", 15,50)
];
 echo "\n------------------Produtos--------------------\n";
$produtoComMaiorValor = "";
$maiorValor = 0;
$economizado = 0;
$valorfinal = 0;
foreach($produtos as $produto){
    $subtotal = $produto -> preco * $produto -> quantidade;
    $precoSemDesconto = $produto -> preco;
    if ($subtotal > $maiorValor) {
    $maiorValor = $subtotal;
    $produtoComMaiorValor = $produto->nome;
}
    $desconto = "";
    if ($subtotal <= 200) {

        $desconto = "0%";
    }
    else if ($subtotal <= 500) {
        $produto -> preco = $produto -> preco * 0.95;
        $desconto = "5%";
    }else if($subtotal <= 1000){
        $produto -> preco = $produto -> preco * 0.90;
        $desconto = "10%";
    }else{
        $produto -> preco = $produto -> preco * 0.85;
        $desconto = "15%";
    }
    $economizado += ($precoSemDesconto - $produto->preco) * $produto->quantidade;
    $subtotal = $produto -> preco * $produto -> quantidade;
    echo "\n-------------------------------------------------------\n";
    echo "\nNome: " . $produto -> nome;
    echo "\nPreço: "  . "$" .$produto -> preco;
    echo "\nSubtotal: "  . "$" . $subtotal;
    echo "\nPreço sem desconto: "  . "$" . $precoSemDesconto;
    echo "\nO desconto foi de: " . $desconto;
    $valorfinal += $produto -> preco * $produto -> quantidade;
}
echo "\n-------------------------------------------------------\n";
    echo "\n Foi economizado: " . "$" . $economizado ;
    echo "\n Valor final:"  . "$" . $valorfinal;
    echo"\n Produto Com maior Gasto: " . $produtoComMaiorValor;
    echo "\nPreço:" . $maiorValor;



$candidatos = [
["numero" => 10, "nome" => "Ana", "votos" => 0],
["numero" => 20, "nome" => "Carlos", "votos" => 0],
["numero" => 30, "nome" => "Maria", "votos" => 0]
];
echo "\n-----------------------------------------Votação----------------------------------------\n";
$votos = [10, 20, 10, 30, 30, 30, 20, 10, 50, 30, 20, 30, 50, 10];
$votosValidos = 0;
$votosGerais = 0;
foreach($candidatos as &$candidato){
    $numero = $candidato["numero"];
    foreach($votos as $voto){
        if($voto == $numero){
            $candidato["votos"] ++;
            $votosValidos++;
            $votosGerais++;
        }
    }
    echo "\nO candidato " .$candidato["nome"]." Tem ". $candidato["votos"] ." votos" ;
}
$votosNulos = 0;
foreach ($votos as $voto) {
    unset($candidato);
    $encontrou = false;

    foreach ($candidatos as $candidato) {
        if ($voto == $candidato["numero"]) {
            $encontrou = true;
            break;
        }
    }
    if (!$encontrou) {
        $votosNulos++;
        $votosGerais++;
    }
}
$vencedorP = 0;
$vencedor = "";
foreach($candidatos as $candidato){

    $porcentagem = ($candidato["votos"] / $votosValidos) * 100;
    if ($porcentagem > $vencedorP) {
        $vencedorP = $porcentagem;
        $vencedor = $candidato["nome"];
    }

    echo "\nO candidato: " . $candidato["nome"] .
         " tem um percentual de " . number_format($porcentagem, 2) . "% de votos";
    
}




echo "\nVotos Válidos: " . $votosValidos;
echo "\nVotos nulos: " . $votosNulos;
echo "\nVotos Gerais: " . $votosGerais;
echo "\n O VENCENDOR DAS ELEIÇÕES É: " . $vencedor;
?>