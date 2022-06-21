<?php
// namespace br\com\sicredi\CredEasy\model;

class Cliente
{
    private string $nome;
    private string $email;
    private string $senha;
    private string $cpf;
    private string $telefone;
    private string $profissao;
    private float  $renda;
    private string $cep;
    private string $rua;
    private string $numero;
    private string $bairro;
    private string $cidade;
    private string $estatdo;
    private float  $saldo;
    private static $numeroDeContas;

    
    public function __construct(string $nome, string $email, string $senha,string $cpf,string $telefone,string $profissao,float $renda,string $cep,string $rua,string $numero,string $bairro,string $cidade,string $estado)
    {
        $this -> validaNome($nome);
        
        $this -> nome      = $nome;
        $this -> email     = $email;
        $this -> senha     = $senha;
        $this -> cpf       = $cpf;
        $this -> telefone  = $telefone;
        $this -> profissao = $profissao;
        $this -> renda     = $renda;
        $this -> cep       = $cep;
        $this -> rua       = $rua;
        $this -> numero    = $numero;
        $this -> bairro    = $bairro;
        $this -> cidade    = $cidade;
        $this -> estado    = $estado;
        $this -> saldo     = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
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

    public function transferir($valorATransferir, Conta $contaDestino)
    {
        if($valorATransferir > $this->saldo) {
            echo "saldo insuficiente";
        } else {
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
        }
    }

    private function validaNome(string $nome)
    {
        if(strlen($nome) < 5) {
            echo "O nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }


   //==================getters==============//
   public function getNome(): string
   {
       return $this->nome;
   }

   public function getEmail(): string
    {
        return $this->email;
    }

    // public function getSenha(): float
    // {
    //     return $this->senha;
    // }

    public function getCpf(): string
    {
        return $this -> cpf;
    }

    
    public function getTelefone(): string
    {
        return $this->telefone;
    }
    
    public function getProfissao(): string
    {
        return $this->profissao;
    }
    
    public function getRenda(): float
    {
        return $this->renda;
    }
    
    public function getCep(): string
    {
        return $this->cep;
    }

    public function getRua(): string
    {
        return $this->rua;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getEstado(): string
    {
        return $this->estado;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public static function getNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

     //==================setters==============//
   public function setNome($nome)
   {
       $this->nome = $nome;
   }

   public function setEmail($email)
    {
        $this->email = $email;
    }

    // public function setSenha($senha)
    // {
    //     $this->senha = $senha;
    // }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
    
    public function setProfissao($profissao)
    {
        $this->profissao = $profissao;
    }
    
    public function setRenda($renda)
    {
        $this->renda = $renda;
    }
    
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    public function setRua($rua)
    {
        $this->rua = $rua;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    

}

