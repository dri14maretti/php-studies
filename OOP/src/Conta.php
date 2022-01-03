<?php

class Conta {
    private $titular;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct($cliente)
    {
        $this->saldo = 0;

        $this->cliente = $cliente;
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valor): void {
        if($valor > $this->saldo) {
            echo "Saldo insuficiente";
        } else {
            $this->saldo -= $valor;
        }
    }

    public function depositar(float $valor): void {
        if($valor < 0) {
            echo "Valor inválido";
            return;
        }
        $this->saldo += $valor;
    }

    public function transferir(float $valor, Conta $conta): void {
        if($valor < 0) {
            echo "Valor inválido";
            return;
        }
        if($valor > $this->saldo) {
            echo "Saldo insuficiente";
            return;
        }
        $this->saldo -= $valor;
        $conta->saldo += $valor;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public static function getNumeroDeContas(): int {
        return self::$numeroDeContas;
    }
    
}