<?php
require_once "Animal.php";

class Mamifero extends Animal {
    private $corPelo;

    // Métodos
    public function locomover() {
        echo '<p>Correndo</p>';
    }
    public function alimentar() {
        echo '<p>Mamando</p>';
    }
    public function emitirSom() {
        echo '<p>Som de Manífero</p>';
    }

    // Métodos Getters & Setters
    public function getCorPelo() {
        return $this->corPelo;
    }
    public function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }
}