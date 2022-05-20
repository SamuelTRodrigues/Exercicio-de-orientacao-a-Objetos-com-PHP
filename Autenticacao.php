<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Funcionario\Diretor;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor('Joao Gans', new CPF('123.654.789-10'), 10000);


$autenticador->tentaLogin($umDiretor, '1234');