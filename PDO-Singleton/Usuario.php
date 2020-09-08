<?php

class Usuario
{
    //   private $idUsuario;
    private $matricula;
    private $nomeUsuario;
    private $tipoConta;
    private $nome;
    private $telefone;
    private $celular;
    private $cpf;
    private $email;
    private $dataNascimento;

    // public function getIdUsuario(){
    //     return $this -> idUsuario;
    // }
    // public function setIdUsuario($idUsuario){
    //     $this -> idUsuario = $idUsuario;
    // }
    public function getMatricula()
    {
        return $this->matricula;
    }
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }
    public function getNomeUsuario()
    {
        return $this->nomeUsuario;
    }
    public function setNomeUsuario($nomeUsuario)
    {
        $this->nomeUsuario = $nomeUsuario;
    }
    public function getTipoConta()
    {
        return $this->tipoConta;
    }
    public function setId($tipoConta)
    {
        $this->tipoConta = $tipoConta;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
    public function getCelular()
    {
        return $this->celular;
    }
    public function setCelular($celular)
    {
        $this->celular = $celular;
    }
    public function getCpf()
    {
        return $this->cpf;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    
}
