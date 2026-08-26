<?php
// Utilizando while, calcule e exiba a soma de todos os números de 1 até 100.
// O programa deve apresentar apenas o resultado final.
// Soma total: 5050

$numero = 1;
$soma = 0;

while ($numero <= 100){
    $soma += $numero++;
}

echo "Soma total: " . $soma;