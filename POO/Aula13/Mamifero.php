<?php 
require_once 'Animal.php';

class Mamifero extends AnimalTeste {
    protected $corPele;

    public function emitirSom() {
        echo '<p>Som de mamifero</p>';
    }

    // Métodos Getters & Setters
    public function getCorPele() {
        return $this->corPele;
    }
    public function setCorPele($corPele) {
        $this->corPele = $corPele;
    }
}
