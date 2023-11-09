<?php

class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct(
        $nome,
        $nacionalidade,
        $altura,
        $idade,
        $peso,
        $vitorias,
        $derrotas,
        $empates
    ) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->altura = $altura;
        $this->idade = $idade;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    // Métodos
    public function apresentar() {
        echo 'Lutador: '.$this->getNome();
        echo 'Origem: '.$this->getNacionalidade();
        echo $this->getIdade().'anos';
        echo $this->getAltura().'m de altura';
        echo 'Pesando: '.$this->getPeso()."kg";
        echo 'Ganhou: '.$this->getVitorias();
        echo 'Perdeu: '.$this->getDerrotas();
        echo 'Empatou: '.$this->getEmpates();
    }
    public function status() {
        echo $this->nome;
        echo 'É um peso: '.$this->getCategoria();
        echo $this->getVitorias()."vitórias";
        echo $this->getDerrotas()."derrotas";
        echo $this->getEmpates()."empates";
    }
    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta() {
        $this->setEmpates($this->getDerrotas() + 1);
    }

    // Métodos Getters & Setters
    public function getNome() {
        return $this->nome;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    public function getAltura() {
        return $this->altura;
    }
    public function getPeso() {
        return $this->peso;
    }
    public function getVitorias() {
        return $this->vitorias;
    }
    public function getDerrotas() {
        return $this->derrotas;
    }
    public function getEmpates() {
        return $this->empates;
    }
    public function getCategoria() {
        return $this->categoria;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }
    private function setCategoria() {
        if ($this->peso < 52.2) {
            $this->categoria = 'Inválido';
        } elseif ($this->peso <= 70.3) {
            $this->categoria = 'Leve';
        } elseif ($this->peso <= 83.9) {
            $this->categoria = 'Médio';
        } elseif ($this->peso <= 120.2) {
            $this->categoria = 'Pesado';
        } else {
            $this->categoria = 'Inválido';
        }
    }
    private function setVitorias($vitoria) {
        $this->vitorias = $vitoria;
    }
    private function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }
    private function setEmpates($empates) {
        $this->empates = $empates;
    }
}