<?php

require_once 'src/Cpf.php';

class Cliente {
    private Cpf $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function getCpf(): Cpf
    {
        return $this->cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
}