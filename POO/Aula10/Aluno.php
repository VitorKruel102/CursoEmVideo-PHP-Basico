<?php 
require_once 'Pessoa.php';

class Aluno extends Pessoa {
    private $matricula;
    private $curso;

    // Métodos
    public function cancelarMatricula(){
        $this->setMatricula(false);
    }

    // Métodos Getters & Setters
    public function getMatricula() {
        return $this->matricula;
    }
    public function getCurso() {
        return $this->curso;
    }
    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
    public function setCurso($curso) {
        $this->curso = $curso;
        $this->setMatricula(true);
    }
}
