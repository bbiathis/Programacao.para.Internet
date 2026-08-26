<?php
// Crie uma variável $numero e atribua um valor inteiro a ela.
// Utilizando for, exiba a tabuada desse número de 1 até 10.
// 5 x 1 = 5
// 5 x 2 = 10
// ...
// 5 x 10 = 50
$numero = 30;
$resultado = 0; 

for ($conta = 1; $conta <= 10; $conta++){
    $resultado = $numero * $conta;
    echo $numero . " x " . $conta . " = " . $resultado . "\n";
}