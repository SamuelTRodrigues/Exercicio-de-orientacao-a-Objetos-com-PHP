<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;

abstract class Funcionario extends Pessoa
{
    
    
    private float $salario;

    public function __construct(string $nome,CPF $cpf,float $salario)
    {
        parent::__construct($nome, $cpf);
       
    }
   
    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome=$nome;
    }
    public function recebeAumeto( float $valorAumento): void
    {
        if ($valorAumento < 0){
            echo "Aumento deve ser positivo";
            return;
        }
        $this->salario += $valorAumento;
    }
    public function recuperaSalario(): float
    {
        return $this->salario;
    }
    abstract public function calculaBonificacao(): float;

} 