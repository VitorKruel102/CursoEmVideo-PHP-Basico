<?php 
require_once 'Publicacao.php';

class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;


    public function __construct(
        $titulo,
        $autor,
        $totPaginas,
        $leitor
    ) {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($totPaginas);
        $this->setLeitor($leitor);
        $this->setAberto(false);
        $this->setPagAtual(0);
    }

    // Métodos Abstrados
    public function detalhes() {

    }
    public function abrir() {
        $this->setAberto(true);
    }
    public function fechar() {
        $this->setAberto(false);
    }
    public function folhear($pagina) {
        if ($pagina > $this->getTotPaginas()) {
            $this->setPagAtual(0);
        } else {
            $this->setPagAtual($pagina);
        }
    }
    public function avancarPag() {
        $this->pagAtual ++;
    }
    public function voltarPag() {
        $this->pagAtual --;
    }

    // Métodos Getters & Setters
    public function getTitulo() {
        return $this->titulo;
    }
    public function getAutor() {
        return $this->autor;
    }
    public function getTotPaginas() {
        return $this->totPaginas;
    }
    public function getPagAtual() {
        return $this->pagAtual;
    }
    public function getAberto() {
        return $this->aberto;
    }
    public function getLeitor() {
        return $this->leitor;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function setAutor($autor) {
        $this->autor = $autor;
    }
    public function setTotPaginas($paginas) {
        $this->totPaginas = $paginas;
    }
    public function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }
    public function setAberto($aberto) {
        $this->aberto = $aberto;
    }
    public function setLeitor($leitor) {
        $this->leitor = $leitor;
    }
}