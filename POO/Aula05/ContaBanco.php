<?php

class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    // Método Contrutor
    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
    }

    // Métodos
    public function abrirConta($tipo) {
        $this->setTipo($tipo);
        $this->setStatus(true);

        if ($tipo == 'CC') {
            $this->setSaldo(50);
        } elseif ($tipo == 'CP') {
            $this->setSaldo(150);
        }
    }
    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta com Dinheiro!</p>";
        } elseif ($this < 0) {
            echo "<p>Conta em débito!</p>";
        } else {
            $this->setStatus(false);
        }
    }
    public function depositar($valor) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor);
        } else {
            echo '<p>Impossível depositar</p>';
        }
    }
    public function sacar($valor) {
        if ($this->getStatus()) {
            if ($this->getSaldo() > $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
            } else {
                echo '<p>Saldo insuficiente.</p>';
            }
        } else {
            echo '<p>Impossível sacar.</p>';
        }
    }
    public function pagarMensal(){
        if ($this->getTipo() == 'CC') {
            $valor = 12;
        } elseif ($this->getTipo() == 'CP') {
            $valor = 20;
        }

        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $valor);
        } else {
            echo '<p>Impossível pagar.</p>';
        }
    }

    // Métodos Getter & Setter
    public function getnumConta() {
        return $this->numConta;
    }
    public function setnumConta($novo_numero) {
        $this->numConta = $novo_numero;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    public function getDono() {
        return $this->dono;
    }
    public function setDono($novo_dono) {
        $this->dono = $novo_dono;
    }
    public function getSaldo() {
        return $this->saldo;
    }
    public function setSaldo($novo_saldo) {
        $this->saldo = $novo_saldo;
    }
    public function getStatus() {
        return $this->status;
    }
    public function setStatus($novo_status) {
        $this->status = $novo_status;
    }
}


