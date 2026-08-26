<?php
// Utilizando for, percorra os números de 1 até 30.
// Para cada número, exiba se ele é par ou ímpar.
// 1 - Ímpar
// 2 - Par
// 3 - Ímpar

for ($contador = 1; $contador <= 50; $contador++){
    if($contador%2===0){
        echo $contador . " - Par\n";
    } else{
        echo $contador . " - Ímpar\n";
    }
}

