<?php 

$idade = 17;
$nome = "Hygor";
$numeroPessoas = 1;

echo "Olá mundo! \n";
echo "minha idade é: $idade anos \n";


echo PHP_EOL; // PHP_EOL é um comando para quebra de linha

echo "Olá $nome você so pode entrar, se tiver mais de 18 anos, ou tiver 16 anos e estar acompanhado.\n";

if ($idade >= 18) {
    echo "$nome você tem $idade anos. Pode entrar" . PHP_EOL; // o ponto é para concatenar
} else if ($idade >= 16 && $numeroPessoas > 1) {
    echo "Você tem $idade anos, está acompanhado(a), entao pode entrar.";
} else {
    echo "Você só tem $idade anos. E não pode entrar.";   
}

echo PHP_EOL;
echo "Adeus!";