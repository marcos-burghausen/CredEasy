<?php
require_once 'Emprestimo.php';
require_once '../cliente/Cliente.php';

// namespace br\com\credeasy\src\service; 
// use br\com\credeasy\src\modelo\Emprestimo;
$jessica = new Cliente("Jéssica", 'jessica@gmail.com', '111111', '111.111.111-11', '(51)11111-1111', 'professora', 5000, '93900-000', 'rua A', '11', 'bairro A', 'Ivoti', 'RS');

class EmprestimoService {

    public function listaTodosOsEmprestimos() {
        // consulta os clientes no banco de dados...

        
        //emprestimos jessica//
        $emprestimo1 = new Emprestimo(1, 1500, 5, '10/05/2022', $jessica);
        $emprestimo1->aprovaEmprestimo();
        $emprestimo2 = new Emprestimo(2, 1000, 3, '20/09/2021', $jessica);
        $emprestimo2->efetuarQuitacao(1030);
        /*// print_r($emprestimo1);
        // print_r($emprestimo2);

        //emprestimos marcos//
        $emprestimo3 = new Emprestimo(3,02500, 5, '01/05/2022', '222.222.222-22');
        $emprestimo3->aprovaEmprestimo();
        $emprestimo4 = new Emprestimo(4, 2000, 3, '20/08/2021', '222.222.222-22');
        $emprestimo4->efetuarQuitacao(2060);
        // print_r($emprestimo3);
        // print_r($emprestimo4);

        //emprestimos matheunho//
        $emprestimo5 = new Emprestimo(5, 1800, 5, '10/04/2022', '333.333.333-33');
        $emprestimo5->aprovaEmprestimo();
        $emprestimo6 = new Emprestimo(6, 1300, 3, '20/06/2021', '333.333.333-33');
        $emprestimo6->efetuarQuitacao(1339);
        // print_r($emprestimo5);
        // print_r($emprestimo6);

        //emprestimos matheus//
        $emprestimo7 = new Emprestimo(7, 1100, 5, '10/032022', '444.444.444-44');
        $emprestimo7->aprovaEmprestimo();
        $emprestimo8 = new Emprestimo(8, 1090, 3, '11/07/2021', '444.444.444-44');
        $emprestimo8->efetuarQuitacao(1123);
        // print_r($emprestimo7);
        // print_r($emprestimo8);

        //emprestimos moises//
        $emprestimo9 = new Emprestimo(9, 1600, 5, '05/03/2022', '555.555.555-55');
        $emprestimo9->aprovaEmprestimo();
        $emprestimo10 = new Emprestimo(10, 1400, 3, '10/10/2021', '555.555.555-55');
        $emprestimo10->efetuarQuitacao(1442);
        // print_r($emprestimo9);
        // print_r($emprestimo10);

        //emprestimos jessica//
        $emprestimo11 = new Emprestimo(11, 1900, 5, '10/02/2022', '666.666.666-66');
        $emprestimo11->aprovaEmprestimo();
        $emprestimo12 = new Emprestimo(12, 3000, 3, '25/05/2021', '666.666.666-66');
        $emprestimo12->efetuarQuitacao(3090);
        // print_r($emprestimo11);
        // print_r($emprestimo12);
        */

        $emprestimos = [
            $emprestimo1->getCpfCliente() => $emprestimo1,
            $emprestimo2->getCpfCliente() => $emprestimo2,
            $emprestimo3->getCpfCliente() => $emprestimo3,
            $emprestimo4->getCpfCliente() => $emprestimo4,
            $emprestimo5->getCpfCliente() => $emprestimo5,
            $emprestimo6->getCpfCliente() => $emprestimo6,
            $emprestimo7->getCpfCliente() => $emprestimo7,
            $emprestimo8->getCpfCliente() => $emprestimo8,
            $emprestimo9->getCpfCliente() => $emprestimo9,
            $emprestimo10->getCpfCliente() => $emprestimo10,
            $emprestimo11->getCpfCliente() => $emprestimo11,
            $emprestimo12->getCpfCliente() => $emprestimo12,
        ];

        return $emprestimos;
    }
}