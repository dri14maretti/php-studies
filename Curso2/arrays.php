<?php

$conta1 = [
	'nome' => 'Adriano',
	'saldo' => 1000
];

$conta2 = [
	'nome' => 'Pedro',
	'saldo' => 1500
];

$conta3 = [
	'nome' => 'Marcus',
	'saldo' => 1800
];

$contasCorrentes = [$conta1, $conta2, $conta3];

foreach($contasCorrentes as $conta) {
	echo $conta['nome'] . PHP_EOL;
}