<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Livro
 *
 * @author Kaique
 */
require_once ('Pessoa.php');
require_once ('Publicacao.php');

class Livro implements Publicacao {
    //put your code here
    private $titulo;
    private $autor;
    private $totalPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    //Métodos públicos
    public function detalhes() {
        echo '<p>Livro '. $this->getTitulo() .' escrito por '. $this->getAutor() .'</p>';
        echo '<br> Páginas '. $this->getTotalPaginas() . ' atual '. $this->getPagAtual();
        echo '<br> Sendo lido por'. $this->leitor;
    }
   
    public function __construct($t, $a, $tot, $le) {
        $this->titulo = $t;
        $this->autor = $a;
        $this->totalPaginas = $tot;
        $this->leitor = $le;
    }
    
    public function abrir() {
        $this->aberto = true;
    }
    
    public function fechar() {
        $this->aberto = false;
    }
    
    public function folhear($p = null) {
        
        if($this->getAberto() && $p > $this->getTotalPaginas()){
           $this->pagAtual = $this->getTotalPaginas();
        } else {
            $this->setPagAtual($this->getPagAtual() + $p);
        }
        
    }
    
    public function avancarPag() {
        $this->pagAtual ++;
    }
    
    public function voltarPag() {
        $this->pagAtual --;
    }
    public function getTitulo() {
        return $this->titulo;
    }
    
    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }


    public function getAutor() {
        return $this->autor;
    }

    public function getTotalPaginas() {
        return $this->totalPaginas;
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

    
    public function setAutor($autor): void {
        $this->autor = $autor;
    }

    public function setTotalPaginas($totalPaginas): void {
        $this->totalPaginas = $totalPaginas;
    }

    public function setPagAtual($pagAtual): void {
        $this->pagAtual = $pagAtual;
    }

    public function setAberto($aberto): void {
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }



}
