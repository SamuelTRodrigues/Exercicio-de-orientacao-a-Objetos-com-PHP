<?php

namespace Alura\Banco\Modelo\Conta;
abstract class Conta
{
   private string $titular;
   protected float $saldo ;
   private static $numeroDeContas = 0;

    public function __construct($titular)
    {
       $this->titular=$titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }
    public function __destruct()
    {
       self::$numeroDeContas--;
    }

   public function saca(float $valorASacar)
   {
       $tarifaSaque = $valorASacar * $this->percentualTarifa() ;
        $valorSaque = $valorASacar + $tarifaSaque;
         if ($valorSaque > $this->saldo){
             echo "saldo indisponivel";
             return;
         }
             $this->saldo -= $valorSaque;
         
   }

   public function deposita(float $valorADepositar)
   {
       if ($valorADepositar < 0){
            echo "Valor precisa ser positivos";
            return;
       }
           $this->saldo += $valorADepositar;
       
   }
    public function recuperaSaldo(): float
   {
        return $this->saldo;
   }
   public function recuperaNomeTitular():string
   {
    return $this->nomeTitular->getNome();
   }
   public function recuperaCpfTitular():string
   {
    return $this->cpf->getCpf();
   }
 
 
   public static function recuperaNumeroDeContas(): int
   {
        return self::$numeroDeContas;
   }
    
   abstract protected function percentualTarifa(): float;
  

}