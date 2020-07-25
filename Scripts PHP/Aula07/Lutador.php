<?php

class Lutador {
    private $nome, $nacionalidade, $categoria;
    private $idade, $vitorias, $derrotas, $empates;
    private $altura, $peso;
    
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
    
    function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getIdade() {
        return $this->idade;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    private function setCategoria() {
        if($this->getPeso() <= 52.2){
            $this->categoria = "Inválido";
        } else if($this->getPeso() <= 70.3){
            $this->categoria = "Leve";
        } else if($this->getPeso() <= 83.9){
            $this->categoria = "Médio";
        } else if($this->getPeso() <= 120.2){
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates) {
        $this->empates = $empates;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function apresentar() {
        echo "<p>---------------------</p>";
        echo "<p>CHEGOU A HORA! O lutador " . $this->getNome();
        echo " veio diretamente de " . $this->getNacionalidade();
        echo " tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . " Kg";
        echo "<br>Ele tem " . $this->getVitorias() . " vitórias, ";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates";
    }
    
    public function status() {
        echo "<p>---------------------</p>";
        echo "<p>" . $this->getNome() . " é im peso " . $this->getCategoria();
        echo " e já ganhou " . $this->getVitorias() . " vezes,";
        echo " perdeu " . $this->getDerrotas() . " vezes e ";
        echo " empatou " . $this->getEmpates() . " vezes!";
    }
    
    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    
    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }
}
