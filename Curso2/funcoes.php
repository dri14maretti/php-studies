<?php

function sacar(array $conta, float $valor): array
{
    if ($valor > $conta['saldo']) {
        return $conta;
    }

    $conta['saldo'] -= $valor;
    return $conta;
}

function depositar(array $conta, float $valor): array
{
    if ($valor < 0) {
        return $conta;
    }

    $conta['saldo'] += $valor;
    return $conta;
}

// Passando valores por referência

function transformaTitularMaiscula(array &$conta)
{
    $conta['nome'] = strtoupper($conta['nome']);
}

function exibeContaWeb(array $conta): void
{
    echo "
    <li>
        <h2>Conta</h2>
        <h3>Titular: {$conta['nome']}</h3>
        <h3>Saldo: R$ {$conta['saldo']}</h3>
    </li>
    ";
}
