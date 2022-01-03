<?php

require 'funcoes.php'; // passando nome do arquivo
// include não interrompe a execução se este comando não for executado

$contasCorrentes = [
    '098.297.206-75' => [
        'nome' => 'Adriano',
        'saldo' => 1000
    ],
    '123.456.789-10' => [
        'nome' => 'Pedro',
        'saldo' => 1500
    ],
    '019.876.543-21' => [
        'nome' => 'Marcus',
        'saldo' => 1800
    ]
];

// Fora de string: $conta['nome'] / dentro de string: $conta[nome]

transformaTitularMaiscula($contasCorrentes['098.297.206-75']);



echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
    exibeContaWeb($conta);
}
echo "</ul>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
            <dt>

                <h3><?= $conta['nome']; - $cpf ?></h3>
            </dt>
            <dd>
               Saldo:<?= $conta['saldo'] ?>
            </dd>
        <?php } ?>
    </dl>

</body>

</html>