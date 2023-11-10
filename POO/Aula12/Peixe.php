<?php
require_once 'Animal.php';

class Peixe extends Animal {
    private $corEscama;

    // Métodos
    public function locomover() {
        echo '<p>Nadando</p>';
    }
    public function alimentar() {
        echo '<p>Comendo substancia</p>';
    }
    public function emitirSom() {
        echo '<p>Peixe não faz som</p>';
    }
    public function soltarBolha() {
        echo '<p>Soltou uma bolha</p>';
    }
    
    // Getters & Setters
    public function getCorEscama() {
        return $this->corEscama;
    }
    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}