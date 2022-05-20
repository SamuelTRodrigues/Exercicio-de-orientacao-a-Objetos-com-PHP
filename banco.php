<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;
$endereco = new Endereco('Curitiba', 'Santa Felicidade', 'Angelina', '639  Casa 01');

$samuel = new Titular(new CPF('123.456.789-10'), 'Samuel Rodrigues', $endereco) ;
$primeiraConta = new Conta($samuel);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); 

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$elliot = new Titular(new CPF('699.549.548-10'), 'Elliot', $endereco);
$segundaConta = new Conta($elliot);
var_dump($segundaConta);

$outroEndereco= new Endereco('a','b','c','1d');

$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
