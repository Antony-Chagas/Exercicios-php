<?php

class Conta
{
    private float $saldo;
    
    public function __construct()
    {
        $this->saldo = 0;
    }
    public function getSaldo(): float|int
    {
        return $this->saldo;
    }
    public function setSaldo(float|int $saldo): void
    {
        $this->saldo = $saldo;
    }
     public function sacar(float|int $ValorASacar): void
     {
         if($ValorASacar < 0){
             throw new InvalidArgurmentException();
         }
         if ($ValorASacar > $this->saldo){
             throw new DomainException;
         }
        $this->saldo -=$ValorASacar;
     }
     public function depositar(float|int $valorDepositar): void
     {
        if($valorDepositar < 0){
            throw new Exception("Error Processing Request");
        }      
        $this->saldo +=$valorDepositar;
    
    }
}

$conta = new Conta();

$conta->depositar(1000);

$conta->sacar(350);

echo $conta->getSaldo() . PHP_EOL;