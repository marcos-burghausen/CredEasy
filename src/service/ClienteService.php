<?php
namespace br\com\sicredi\src\service;
use br\com\sicredi\src\modelo\Cliente;

class ClienteService {

    public function listaTodosOsClientes() {
        // consulta os clientes no banco de dados...

        $jessica = new Cliente("Jéssica", '111.111.111-11');
        $marcos = new Cliente("Marcos", '222.222.222-22');
        $matheuzinho = new Cliente("Matheus Dresch", '333.333.333-33');
        $faria = new Cliente("Matheus Faria", '444.444.444-44');
        $moises = new Cliente("Moisés", '555.555.555-55');
        $vinicius = new Cliente("Vinícius", '666.666.666-66');

        $clientes = [
            $jessica->getCpf() => $jessica,
            $marcos->getCpf() => $marcos,
            $matheuzinho->getCpf() => $matheuzinho,
            $faria->getCpf() => $faria,
            $moises->getCpf() => $moises,
            $vinicius->getCpf() => $vinicius,
        ];

        return $clientes;
    }

}