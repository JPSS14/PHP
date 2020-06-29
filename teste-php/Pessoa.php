<?php
class Pessoa{
    private $nome;
    private $idade;

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome=$nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade=$idade;
    }
}

$p = new Pessoa();
$p->setNome("Joao");
$p->setIdade(22);
echo ("Olá Mundo! meu nome é ".$p->getNome()." e tenho ".$p->getIdade()." anos");