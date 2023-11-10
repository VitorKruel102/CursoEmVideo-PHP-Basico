<?php 
require_once 'Pessoa.php';

class Funcionario extends Pessoa {
    private $trabalhando;
    private $setor;

    // Métodos
    public function mudarTrabalhando($trabalho){
        $this->setTrabalhando($trabalho);
    }

    // Métodos Getters & Setters
    public function getTrabalhando() {
        return $this->trabalhando;
    }
    public function getSetor() {
        return $this->setor;
    }
    public function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }
    public function setSetor($setor) {
        $this->setor = $setor;
        $this->setTrabalhando(true);
    }
}
