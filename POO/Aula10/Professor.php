<?php 
require_once 'Pessoa.php';

class Funcionario extends Pessoa {
    private $especialista;
    private $salario;

    // Métodos
    public function receberAumento($aumento){
        $this->getSalario($aumento);
    }

    // Métodos Getters & Setters
    public function getEspecialista() {
        return $this->especialista;
    }
    public function getSalario() {
        return $this->salario;
    }
    public function setEspecialista($trabalhando) {
        $this->trabalhando = $trabalhando;
    }
    public function setSalario($salario) {
        $this->salario = $salario;
    }
}
