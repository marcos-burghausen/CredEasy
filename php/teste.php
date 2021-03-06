<?php


class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float  $saldo;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this -> cpfTitular  = $cpfTitular;
        if(strlen($nomeTitular) < 5) {
            echo "O nome precisa ter pelo menos 5 caracteres";
            exit();
        }
        $this -> nomeTitular = $nomeTitular;
        $this -> saldo       = 0;
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

// $primeiraConta = new Conta();
// $primeiraConta -> cpfTitular = "123.456.789.10";
// $primeiraConta -> nomeTitular = "Marcos";
// $primeiraConta -> saldo = 500;
// print_r($primeiraConta);

// $segundaConta = new Conta();
// $segundaConta -> cpfTitular ="234.567.891-01";
// $segundaConta -> nomeTitular = "Rafael";
// $segundaConta -> saldo = 0;
// print_r($segundaConta);

// $primeiraConta -> sacar (50);
// print_r($primeiraConta);
// $primeiraConta -> depositar (100);
// print_r($primeiraConta);
// $primeiraConta -> transferir (200, $segundaConta);
// print_r($primeiraConta);
// print_r($segundaConta);

function cadastrarClientes(string $cpf, string $nomeCliente, float $saldo): array
{
    return [
        $cpf => [
            'nome'      => $nomeCliente,
            'saldo'     => $saldo,
            ]
        ];
}

$conta = cadastrarClientes('049.534.859-71', 'Marcos', 1000);

print_r($conta);
