<?php
require_once 'EmprestimoService.php';
// namespace br\com\credeasy\

class Emprestimo
{
    private int    $id;
    private float  $valor;
    private float  $taxa_juros;
    private float  $valor_final;
    private string $data_solicitacao;
    private string $data_quitacao;
    private string $status;
    private string $cliente;  //referencia do cliente

    private static $numeroDeEmprestimos = 0;


    public function __construct(int $id, float $valor, float $taxa_juros, string $data_solicitacao, Cliente $cliente)
    {
        $this->id = $id;
        $this->valor = $valor;
        $this->taxa_juros = $taxa_juros;
        // $this->valor_final = $valor_final;
        $this->data_solicitacao = $data_solicitacao;
        // $this->data_quitacao = $data_quitacao;
        $this->status = 'SOLICITADO';
        $this->cpf_cliente = $cpf_cliente;

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

    public function getTaxaDeJuros()
    {
        return $this->taxa_juros;
    }

    public function getValorFinal()
    {
        return $this->valor_final;
    }

    public function getDataDaSolicitacao()
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