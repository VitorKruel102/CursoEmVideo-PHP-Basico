<?php 

class Pessoa {
    private $nome;
    private $idade;
    private $sexo;

    public function __construct(
        $nome,
        $idade,
        $sexo,
    ) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }

    // Métodos
    public function fazerAniv() {
        $this->setIdade($this->getIdade() + 1);
    }

}