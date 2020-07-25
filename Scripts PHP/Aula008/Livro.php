<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao {
    private $titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor;
    
    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;
    }

    
    function detalhes(){
        echo "<p>Título: </p>" . $this->getTitulo();
        echo "<p>Autor: </p>" . $this->getAutor();
        echo "<p>Total de Páginas: </p>" . $this->getTotPaginas();
        echo "<p>Página Atual: </p>" . $this->getPagAtual();
        echo "<p>Aberto? </p>" . $this->getAberto();
        echo "<p>Leitor: </p>" . $this->getLeitor();
    }
    
    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPaginas() {
        return $this->totPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }
    
    function abrir(){
        $this->setAberto(true);
    }
    function fechar(){
        $this->setAberto(false);
    }
    function folhear(){
        if($this->getAberto()){
            for($c = 0; $c <= $this->getTotPaginas(); $c++){
                
            }
        } else {
            echo "<p>O livro está fechado!</p>";
        }    
    }
    function avancarPag(){
        if($this->getAberto()){
            $this->setPagAtual($this->getPagAtual() + 1);
        } else {
            echo "<p>O livro está fechado!</p>";
        }      
    }
    function voltarPag(){
        if($this->getAberto()){
            $this->setPagAtual($this->getPagAtual() - 1);
        } else {
            echo "<p>O livro está fechado!</p>";
        }           
    }
}
