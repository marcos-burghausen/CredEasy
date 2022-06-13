<?php

namespace br\com\CredEasy\src\modelo;

class Parcelas
{
    private float  $valor;
    private int    $numero;
    private        $data_vencimento;
    private        $data_pagamento;
    private float  $multa;
    private float  $valor_pago;
    private string $status;
    private string $emprestimo_id;

    public function __construct(float $valor, int $numero, $data_vencimento, string $status)
    {
        $this->valor           = $valor;
        $this->numero          = $numero;
        $this->data_vencimento = $data_vencimento;
        $this->status          = $status;
    }


    //================getters================//
    public function getValor()
    {
        return $this->valor;
    }

    public function getNumero()
    {
            return $this->numero;
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

    public function getEmprestimoId()
    {
        return $this->emprestimo_id;
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

    public function setEmprestimoId()
    {
        $this->emprestimo_id = $emprestimo_id;
    }

    
}