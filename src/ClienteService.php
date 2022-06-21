<?php
// namespace br\com\sicredi\CredEasy\service;

require_once 'model/Cliente.php';

// use br\com\sicredi\CredEasy\Model\Cliente;

class ClienteService {

    public function listaTodosOsClientes() {
        // consulta os clientes no banco de dados...

        $jessica = new Cliente("Jéssica", 'jessica@gmail.com', '111111', '111.111.111-11', '(51)11111-1111', 'professora', 5000, '93900-000', 'rua A', '11', 'bairro A', 'Ivoti', 'RS');
        $marcos = new Cliente("Marcos", 'marcos@gmail.com', '222222', '222.222.222-22', '(51)22222-2222', 'elétrotecnico', 5000, '93900-000', 'rua B', '22', 'bairro B', 'Ivoti', 'RS');
        $matheuzinho = new Cliente("Matheunho", 'matheunho@gmail.com', '333333', '333.333.333-33', '(51)33333-3333', 'estudante', 5000, '95150-000', 'rua ', '33', 'bairro C', 'Nova Petropolis', 'RS');
        $matheus = new Cliente("Matheus", 'matheus@gmail.com', '444444', '444.444.444-44', '(54)44444-4444', 'assistente', 5000, '93950-000', 'rua D', '44', 'bairro D', 'Dois Irmãos', 'RS');
        $moises = new Cliente("Moisés", 'moises@gmail.com', '5555565', '555.555.555-55', '(51)55555-5555', 'motoqueiro', 5000, '93995-000', 'rua E', '55', 'bairro E', 'Santa Maria Do Herval', 'RS');
        $vinicius = new Cliente("Vinícius", 'vinicius@gmail.com', '666666', '666.666.666-66', '(51)66666-6666', 'hoteleiro', 5000, '95150-000', 'rua F', '66', 'bairro F', 'Nova Petropolis', 'RS');

        $clientes = [
            $jessica->getCpf() => $jessica,
            $marcos->getCpf() => $marcos,
            $matheuzinho->getCpf() => $matheuzinho,
            $matheus->getCpf() => $matheus,
            $moises->getCpf() => $moises,
            $vinicius->getCpf() => $vinicius,
        ];

        return $clientes;
    }

}