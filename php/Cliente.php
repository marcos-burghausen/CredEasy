<?php


class Cliente
{
    private string $nomeTitular;
    private string $emailTitular;
    private string $senhaTitular;
    private string $cpfTitular;
    private string $telefoneTitular;
    private string $profissaoTitular;
    private float  $rendaTitular;
    private string $cepTitular;
    private string $ruaTitular;
    private string $numeroTitular;
    private string $bairroTitular;
    private string $cidadeTitular;
    private string $estatdoTitular;
    private float  $saldo;

    public function __construct(string $nomeTitular, string $emailTitular, string $senhaTitular,string $cpfTitular,string $telefoneTitular,string $profissaoTitular,float $rendaTitular,string $cepTitular,string $ruaTitular,string $numeroTitular,string $bairroTitular,string $cidadeTitular,string $estadoTitular)
    {
        $this -> validaNome($nomeTitular);
        $this -> nomeTitular      = $nomeTitular;
        $this -> emailTitular     = $emailTitular;
        $this -> senhaTitular     = $senhaTitular;
        $this -> telefoneTitular  = $telefoneTitular;
        $this -> profissaoTitular = $profissaoTitular;
        $this -> rendaTitular     = $rendaTitular;
        $this -> cepTitular       = $cepTitular;
        $this -> ruaTitular       = $ruaTitular;
        $this -> numeroTitular    = $numeroTitular;
        $this -> bairroTitular    = $bairroTitular;
        $this -> cidadeTitular    = $cidadeTitular;
        $this -> estadoTitular    = $estadoTitular;
        $this -> saldo            = 0;
    }

    public function sacar (float $valorASacar)
    {
        if($valorASacar > $this->saldo) {
            echo "saldo indisponivel";
        } else {
            $this-> saldo -= $valorASacar;
        }
    }

    public function depositar(float $valorADepositar)
    {
        if($valorADepositar <= 0) {
            echo "O valor precisa ser maio que zero";
        } else {
            $this -> saldo += $valorADepositar;
        }
    }

    public function transferir($valorATransferir, Conta $contaDestino):void
    {
        if($valorATransferir > $this->saldo) {
            echo "saldo insuficiente";
        } else {
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
        }
    }

    private function validaNome(string $nomeTitular)
    {
        if(strlen($nomeTitular) < 5) {
            echo "O nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }


                                           //===============     
    public function recuperarCpfTitular(): string        //==   
    {                                                     //==  
        return $this -> cpfTitular;                        //==
    }                                                       //==
                                                            //==
    public function recuperarNomeTitular(): string            //==
    {                                                           //==  pra visualizar os atributos
        return $this -> nomeTitular;                          //==
    }                                                       //==
                                                            //==
    public function recuperarSaldo(): float                 //==
    {                                                     //==
        return $this->saldo;                            //==
    }                                                 //==
                                        //===============
    

}

