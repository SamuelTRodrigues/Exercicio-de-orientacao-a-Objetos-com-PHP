<?php


class Conta
{
   private string $titular;
   private float $saldo ;
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
         if ($valorASacar > $this->saldo){
             echo "saldo indisponivel";
             return;
         }
             $this->saldo -= $valorASacar;
         
   }

   public function deposita(float $valorADepositar)
   {
       if ($valorADepositar < 0){
            echo "Valor precisa ser positivos";
            return;
       }
           $this->saldo += $valorADepositar;
       
   }

   public function transferir(float $valorATransferir, Conta $contaDestino): void
   {
        if($valorATransferir > $this->saldo){
            echo "Saldo indisponivel";
            return;
        } 
            $this->saca($valorATransferir);
            $contaDestino->deposita($valorATransferir);
        

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



}