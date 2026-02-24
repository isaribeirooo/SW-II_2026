<?php
$a = 10;
$b = 5;

$soma = $a + $b;

echo "A soma é: $soma";

echo "<hr>";

// estruturas condicionais 
// if

if ($b > $a) {
    echo "B é maior que A";
} else {
    echo "B é menor que A";
}

echo "<hr>";

$n1 = 4;
$n2 = 5;
$n3 = 6;

$media = ($n1 + $n2 + $n3) / 3;

echo "sua média é: $media <br>";

if ($media > 5) {
    echo "aprovado";
} else {
    if ($media < 4) {
        echo "reprovado";
    } else {
        echo "recuperação";
    }
    
}

echo "<hr>";



$dia = 6;
switch ($dia) {
    case 1:
        echo "domingo";
        break;
    case 2:
        echo "segunda";
        break;
    case 3:
        echo "terça";
        break;
    case 4:
        echo "quarta";
        break;
    case 5:
        echo "quinta";
        break;
    case 6:
        echo "sexta";
        break;
    case 7:
        echo "sábado";
        break;

    default:
        echo "número inválido";
        break;
}

echo "<hr>";


for ($i=1; $i <= 10 ; $i++) { 
    echo "$i  ";
}

echo "<hr>";

$a = 1;
while ($a <= 10) {
    echo "$a  ";
    $a++;
}

echo "<hr>";

$x = 1;
do {
    echo "$x  ";
    $x++;
} while ($x <= 10);

echo "<hr>";

$nomes = ['fulano' , 'ciclano' , 'beltrano' , 'isadora'];
//echo $nomes; // :-(

$qtde = count($nomes);

echo $nomes[0];
echo "<br>";
echo $nomes[1];
echo "<br>";
echo $nomes[2];
echo "<hr>";

//for ($n=0; $n <= $qtde-1 ; $n++) { 
    //echo $nomes[$n] . "<br>";
//}

foreach ($nomes as $nome) {
    echo "$nome <br>";
}
?>