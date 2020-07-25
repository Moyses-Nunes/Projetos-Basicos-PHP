<?php

class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "cc") {
            $this->setSaldo(50); 
        } elseif ($t == "cp") {
            $this->setSaldo(150);
        }
    }
    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "<p>ERRO! A conta ainda possui saldo.</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>ERRO! A conta está em débito</p>";
        } else {
            $this->setStatus(false);
        }
    }
    public function depositar($v) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
        } else {
            echo"<p>ERRO! Sua conta está fechada.</p>";
        }
    }
    public function sacar($v) {
        if (($this->getStatus()) && ($this->getSaldo() > $v)) {
            $this->setSaldo($this->getSaldo() - $v);
        } else {
            print'ERRO!';
        }
    }
    public function pagarMensal() {
        if ($this->getTipo() == "cc") {
            $this->getSaldo($this->getSaldo() + 12);
        } else {
            $this->getSaldo($this->getSaldo() + 20);
        }
    }
    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
    }
    function getNumConta() {
        return $this->numConta;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDono() {
        return $this->dono;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function getStatus() {
        return $this->status;
    }
    
    function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setDono($dono) {
        $this->dono = $dono;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function setStatus($status) {
        $this->status = $status;
    }




}
