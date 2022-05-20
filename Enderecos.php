<?php

require_once 'autoload.php';
use Alura\Banco\Modelo\Endereco;

$umEndereco = new Endereco('Curitiba', 'Centro', 'XV de novembro', '123');
$outroEndereco = new Endereco ('Rio de Janeiro','Copacabana','Rua Qualquer','123');

echo $umEndereco . PHP_EOL;
echo $outroEndereco;
