<?php
require_once 'Animal.php';

class Ave extends Animal {
    private $corPena;

    // Métodos
    public function locomover() {
        echo '<p>Voando</p>';
    }
    public function alimentar() {
        echo '<p>Comendo Frutas</p>';
    }
    public function emitirSom() {
        echo '<p>Som de Ave</p>';
    }
    public function fazerNinho() {
        echo '<p>Contruiu um ninho</p>';
    }
    
    // Getters & Setters
    public function getCorPena() {
        return $this->corPena;
    }
    public function setCorPena($corPena) {
        $this->corPena = $corPena;
    }
}