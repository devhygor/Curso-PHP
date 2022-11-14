<?php

$idade_lista = [21, 23, 19, 25, 30, 41, 10];

echo 'quantidade de itens na lista ', count($idade_lista) . PHP_EOL;

for ($i = 0; $i < count($idade_lista); $i++) {
    echo $idade_lista[$i] . PHP_EOL;
}