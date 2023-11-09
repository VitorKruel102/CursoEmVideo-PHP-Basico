<?php
require_once 'Lutadores.php';

class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    // Métodos
    public function marcarLuta($lutador1, $lutador2) {
        if ($lutador1->getCategoria() == $lutador2->getCategoria() 
            && ($lutador1 != $lutador2)) {
            $this->setAprovada(true);
            $this->setDesafiado($lutador1);
            $this->setDesafiante($lutador2);
        } else {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }
    public function lutar() {
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);

            switch ($vencedor) {
                case 0 : // Empate
                    echo '<p>Empate!</p>';
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: // Desafiado Vence
                    echo '<p>Desafiado Vence!</p>';
                    $this->desafiado->empatarGanha();
                    $this->desafiante->empatarPerde();
                    break;
                case 2: // Desafiante Vence
                    echo '<p>Desafiante Vence!</p>';
                    $this->desafiado->empatarPerde();
                    $this->desafiante->empatarGanha();
                    break;
            }
        } else {
            echo '<p>Luta não pode acontecer.</p>';
        }
    }

    # Métodos Getters & Setters
    public function getDesafiado() {
        return $this->desafiado;
    }
    public function getDesafiante() {
        return $this->desafiante;
    }
    public function getRounds() {
        return $this->rounds;
    }
    public function getAprovada() {
        return $this->aprovada;
    }
    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }
    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }
    public function setRounds($rounds) {
        $this->rounds = $rounds;
    }
    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }
}