<?php
require_once 'Lutador.php';
class Luta {
    private $desafiado, $desafiante, $rounds, $aprovada;
    
    function marcarLuta($l1, $l2){
        if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
            $this->setAprovada(true);
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        }else{
            $this->setAprovada(false);
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    function lutar(){
        if($this->getAprovada()){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor){
            case 0:
                echo "<p>Empate!</p>";
                $this->desafiado->empatarLuta();
                $this->desafiante->empatarLuta();
                break;
            case 1:
                echo "<p>" . $this->desafiado->getNome() . " ganhou!</p>";
                $this->desafiado->ganharLuta();
                $this->desafiante->perderLuta();
                break;
            case 2:
                echo "<p>" . $this->desafiante->getNome() . " ganhou!</p>";
                $this->desafiado->perderLuta();
                $this->desafiante->ganharLuta();
                break;
            }
        }else{
            echo "<p>Luta não pode acontecer</p>";
        }
    }
    function getDesafiado() {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiante;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovada() {
        return $this->aprovada;
    }

    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }


}
