<?php

for ($contador = 1; $contador < 100; $contador++) {
    if ($contador % 2 == 0) {      // Se o resto do contador dividido por 2 for igual == a 0 ele ira continuar e nao entrara na funçao do echo, onde so sera exibido se o resto da divisao for diferente de 0
        continue;
    }
    echo $contador . PHP_EOL;
}