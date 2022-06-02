<?php


function cadastrarClientes(string $cpf, string $nomeCliente, string $emailCliente, string $senhaCliente, string $telefoneCliente, string $profissaoCliente, string $cepCliente, string $ruaCliente, string $numeroCliente, string $bairroCliente, string $cidadeCliente, string $estadoCliente): array
{
    return [
        $cpf => [
            'nome'      => $nomeCliente,
            'email'     => $emailCliente,
            'senha'     => $senhaCliente,
            'telefone'  => $telefoneCliente,
            'profissao' => $profissaoCliente,
            'cep'       => $cepCliente,
            'rua'       => $ruaCliente,
            'numero'    => $numeroCliente,
            'bairro'    => $bairroCliente,
            'cidade'    => $cidadeCliente,
            'estatdo'   => $estadoCliente
        ]
        ];
}