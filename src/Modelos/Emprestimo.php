<?php

namespace br\com\CredEasy\src\modelo;
use br\com\CredEasy\src\Modelos\Cliente;

class Emprestimo
{
    private string $id;
    private float  $valor;
    private float  $taxa_juros;
    private float  $valor_final;
    private string $data_solicitacao;
    private string $data_quitacao;
    private string $status;
    private string $cliente;  //referencia do cliente

    private static $numeroDeEmprestimos = 0;


    public function __construct(float $valor, float $taxa_juros, string $data_solicitacao, Cliente $cliente)
    {
        // $this->id = $id;
        $this->valor = $valor;
        $this->taxa_juros = $taxa_juros;
        // $this->valor_final = $valor_final;
        $this->data_solicitacao = $data_solicitacao;
        // $this->data_quitacao = $data_quitacao;
        $this->status = 'SOLICITADO';
        $this->cliente = $cliente;

        self::$numeroDeEmprestimos++;
    }

    public function __destruct()
    {
        self::$numeroDeEmprestimos--;
    }


    //===============getters=================//
    public function getId()
    {
        return $this->id;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getTaxaJuros()
    {
        return $this->taxa_juros;
    }

    public function getValorFinal()
    {
        return $this->valor_final;
    }

    public function getDataSolicitacao()
    {
        return $this->data_solicitacao;
    }

    public function getDataQuitacao()
    {
        return $this->data_quitacao;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getCpfCliente()
    {
        return $this->cpf_cliente;
    }

    public static function getNumeroDeEmprestimos(): int
    {
        return self::$numeroDeEmprestimos;
    }

    //===============setters=================//
    // public function setId($id)
    // {
    //     $this->id = $id;
    // }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function setTaxaJuros($taxa_juros)
    {
        $this->taxa_juros = $taxa_juros;
    }

    public function setValorFinal($valor_final)
    {
        $this->valor_final = $valor_final;
    }

    public function setDataSolicitacao($data_solicitacao)
    {
        $this->data_solicitacao = $data_solicitacao;
    }

    public function setDataQuitacao($data_quitacao)
    {
        $this->data_quitacao = $data_quitacao;
    }

    public function setCpfCliente($cpf_cliente)
    {
        $this->cpf_cliente = $cpf_cliente;
    }

    public function aprovaEmprestimo()
    {
        if($this->status != "SOLICITADO") {
            echo "Só é possivel aprovar emprestimo solicitado" .PHP_EOL;
            exit();
        }
        $this->status = "APROVADO";
    }

    public function efetuarQuitacao(float $valor_final)
    {
        $valorFinalEmprestimo = $this->valor * ($this->taxa_juros / 100);
        if($valor_final < $this->valor) {
            echo "Valor final é menor que o valor mínimo esperado pela taxa de juros contratada: $valor_final" . PHP_EOL;
        }
        $this->status = 'QUITADO';
        $this->valor_final = $valor_final;
        $this->data_quitacao = 'dataDeHj';
    }

}
/*
//emprestimos jessica//
$jessica = new Cliente("Jéssica", 'jessica@gmail.com', '111111', '111.111.111-11', '(51)11111-1111', 'professora', 5000, '93900-000', 'rua A', '11', 'bairro A', 'Ivoti', 'RS');
$emprestimo1 = new Emprestimo(1500, 5, '10/05/2022', $jessica);
$emprestimo1->aprovaEmprestimo();
$emprestimo2 = new Emprestimo(1000, 3, '20/09/2021', $jessica);
$emprestimo2->efetuarQuitacao(1030);
print_r($emprestimo1);
print_r($emprestimo2);

//emprestimos marcos//
$marcos = new Cliente("Marcos", 'marcos@gmail.com', '222222', '222.222.222-22', '(51)22222-2222', 'elétrotecnico', 5000, '93900-000', 'rua B', '22', 'bairro B', 'Ivoti', 'RS');
$emprestimo3 = new Emprestimo(2500, 5, '01/05/2022', $marcos);
$emprestimo3->aprovaEmprestimo();
$emprestimo4 = new Emprestimo(2000, 3, '20/08/2021', $marcos);
$emprestimo4->efetuarQuitacao(2060);
print_r($emprestimo3);
print_r($emprestimo4);

//emprestimos matheunho//
$matheuzinho = new Cliente("Matheunho", 'matheunho@gmail.com', '333333', '333.333.333-33', '(51)33333-3333', 'estudante', 5000, '95150-000', 'rua ', '33', 'bairro C', 'Nova Petropolis', 'RS');
$emprestimo5 = new Emprestimo(1800, 5, '10/04/2022', $matheuzinho);
$emprestimo5->aprovaEmprestimo();
$emprestimo6 = new Emprestimo(1300, 3, '20/06/2021', $matheuzinho);
$emprestimo6->efetuarQuitacao(1339);
print_r($emprestimo5);
print_r($emprestimo6);

//emprestimos matheus//
$matheus = new Cliente("Matheus", 'matheus@gmail.com', '444444', '444.444.444-44', '(54)44444-4444', 'assistente', 5000, '93950-000', 'rua D', '44', 'bairro D', 'Dois Irmãos', 'RS');
$emprestimo7 = new Emprestimo(1100, 5, '10/032022', $matheus);
$emprestimo7->aprovaEmprestimo();
$emprestimo8 = new Emprestimo(1090, 3, '11/07/2021', $matheus);
$emprestimo8->efetuarQuitacao(1123);
print_r($emprestimo7);
print_r($emprestimo8);

//emprestimos moises//
$moises = new Cliente("Moisés", 'moises@gmail.com', '5555565', '555.555.555-55', '(51)55555-5555', 'motoqueiro', 5000, '93995-000', 'rua E', '55', 'bairro E', 'Santa Maria Do Herval', 'RS');
$emprestimo9 = new Emprestimo(1600, 5, '05/03/2022', $moises);
$emprestimo9->aprovaEmprestimo();
$emprestimo10 = new Emprestimo(1400, 3, '10/10/2021', $moises);
$emprestimo10->efetuarQuitacao(1442);
print_r($emprestimo9);
print_r($emprestimo10);

//emprestimos jessica//
$vinicius = new Cliente("Vinícius", 'vinicius@gmail.com', '666666', '666.666.666-66', '(51)66666-6666', 'hoteleiro', 5000, '95150-000', 'rua F', '66', 'bairro F', 'Nova Petropolis', 'RS');
$emprestimo11 = new Emprestimo(1900, 5, '10/02/2022', $vinicius);
$emprestimo11->aprovaEmprestimo();
$emprestimo12 = new Emprestimo(3000, 3, '25/05/2021', $vinicius);
$emprestimo12->efetuarQuitacao(3090);
print_r($emprestimo11);
print_r($emprestimo12);*/