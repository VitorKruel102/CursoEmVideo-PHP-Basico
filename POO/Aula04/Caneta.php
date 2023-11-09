<?php

class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    public function __construct($modelo, $cor, $ponta) { 
        // Pode modificar __construct --> NomeDaClass
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
        $this->tampar();
    }

    public function tampar() {
        $this->tampada = true;
    }
    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($novo_modelo) {
        $this->modelo = $novo_modelo;
    }
    public function getPonta() {
        return $this->ponta;
    }
    public function setPonta($nova_ponta) {
        $this->ponta = $nova_ponta;
    }
}