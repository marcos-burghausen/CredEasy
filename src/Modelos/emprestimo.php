<?php

class Emprestimo
{
    private string $id;
    private float  $valor;
    private float  $taxa_juros;
    private float  $valor_final;
    private date   $data_solicitacao;
    private date   $data_quitacao;
    private string $status;
    private string $cpf_cliente;

    private static $numeroDeEmprestimos = 0;


    public function __construct(string $id, float $valor, float $taxa_juros, float $valor_final, date $data_solicitacao, string $status, string $cpf_cliente)
    {
        $this->id = $id;
        $this->id = $valor;
        $this->id = $taxa_juros;
        $this->id = $valor_final;
        $this->id = $data_solicitacao;
        $this->id = $data_quitacao;
        $this->id = $status;
        $this->id = $cpf_cliente;

        self::$numeroDeEmprestimos++;
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

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setCpfCliente($cpf_cliente)
    {
        $this->cpf_cliente = $cpf_cliente;
    }

}