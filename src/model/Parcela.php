<?php

// namespace br\com\sicredi\CredEasy\model;

class Parcelas
{
    private int    $numero_parcela;
    private int    $idEmprestimo;
    private float  $valor;
    private string $data_vencimento;
    private string $data_pagamento;
    private float  $multa;
    private float  $valor_pago;
    private string $status;

    private $emprestimo;

    public function __construct(int $numero_parcela, int $idEmprestimo, float $valor,  string $data_vencimento, Emprestimo $emprestimo)
    {
        $this->numero_parcela  = $numero_parcela;
        $this->idEmprestimo    = $idEmprestimo;
        $this->valor           = $valor;
        $this->data_vencimento = $data_vencimento;
        $this->emprestimo      = $emprestimo;
        $this->status          = 'EM ABERTO';
    }


    //================getters================//
    public function getNumeroParcela()
    {
            return $this->numero_parcela;
    }
    
    public function getIdEmprestimo()
    {
            return $this->idEmprestimo;
    }

    public function getValor()
    {
        return $this->valor;
    }


    public function getDataVencimento()
    {
        return $this->data_vencimento;
    }

    public function getDataPagamento()
    {
        return $this->data_pagamento;
    }

    public function getMulta()
    {
        return $this->multa;
    }

    public function getValorPago()
    {
        return $this->valor_pago;
    }

    public function getStatus()
    {
        return $this->status;
    }


    //================setters================//
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function setNumero($numero)
    {
            $this->numero = $numero;
    }

    public function setDataVencimento($data_vencimento)
    {
        $this->data_vencimento = $data_vencimento;
    }

    public function setDataPagamento($data_pagamento)
    {
        $this->data_pagamento = $data_pagamento;
    }

    public function setMulta($multa)
    {
        $this->multa = $multa;
    }

    public function setValorPago($valor_pago)
    {
        $this->valor_pago = $valor_pago;
    }

    public function setStatus($status)
    {
        $this->status -> $status;
    }

    
}