<?php

class Pessoa {
    private $nome, $idade, $sexo;
    
    function __construct($n, $i, $s) {
        $this->nome = $n;
        $this->idade = $i;
        $this->sexo = $s;
    }
    
    function fazerAniver(){
        $this->setIdade($this->getIdade() + 1); 
    }
    
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }


}
