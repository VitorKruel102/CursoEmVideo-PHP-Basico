<?php 

abstract class Animal {
    protected $peso;
    protected $idades;
    protected $membros;

    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();

    // Métodos Getters & Setters
    public function getPeso() {
        return $this->peso;
    }
    public function getIdades() {
        return $this->idades;
    }
    public function getMembros() {
        return $this->membros;
    }
    public function setPeso($peso) {
        $this->peso = $peso;
    }
    public function setIdades($idades) {
        $this->idades = $idades;
    }
    public function setMembros($membros) {
        $this->membros = $membros;
    }
}