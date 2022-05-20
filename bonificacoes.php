<?php


require_once 'autoload.php';

use Alura\Banco\Modelo\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, Desenvolvedor, Gerente, EditorVideo};

$umFuncionario = new Desenvolvedor('Samuel Rodrigues', 
new CPF('123.456.789-10'), 
1000);

$umaFuncionario = new Gerente('Agnes Teixeira', 
new CPF('987.654.321-10'), 
3000);
$umDiretor = new Diretor('Elliot Rodrigues',
new CPF('123.987.456-10'), 
5000);

$umEditor= new EditorVideo('Gaveta', new CPF('987.456.321-10'), 10000);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umaFuncionario);


echo $controlador->recuperaTotal();
