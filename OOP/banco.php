<?php

require_once 'src/Conta.php';
require_once 'src/Cliente.php';

$primeiraConta = new Conta('123.456.789-10', 'João da Silva');
$primeiraConta->depositar(1000);
$primeiraConta->sacar(500);

echo $primeiraConta->getSaldo() . PHP_EOL;