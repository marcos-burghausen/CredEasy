<?php

function cadastrarClientes(string $cpf, string $nomeCliente, float $saldo): array
{
    return [
        $cpf => [
            'nome'      => $nomeCliente,
            'saldo'     => $saldo,
            ]
        ];
}

$conta = cadastrarClientes('049.534.859-71', 'Marcos', 1000);

print_r($conta);