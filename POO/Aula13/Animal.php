<?php 

abstract class AnimalTeste {
    protected $peso, $idade, $membros;

    // Método
    public abstract function emitirSom(); 

    // Métodos Getters & Setters
    public function getPeso() {
        return $this->peso;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getMembros() {
        return $this->membros;
    }
    public function setPeso($peso) {
        $this->peso = $peso;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function setMembros($membros) {
        $this->membros = $membros;
    }
}