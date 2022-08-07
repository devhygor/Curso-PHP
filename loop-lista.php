<?php

$idadeList = [21, 23, 19, 25, 30, 41, 10]; // array pode ser usada com o nome array() ou apenas com os chochetes []

for ($i = 0; $i < count($idadeList); $i++) { // ao inves de colocar a quantidade de itens que existe na lista, podemos usar a funçao count do php, pois ela ja conta sozinha quantos itens existe na variavel
    echo $idadeList[$i] . PHP_EOL;
}

