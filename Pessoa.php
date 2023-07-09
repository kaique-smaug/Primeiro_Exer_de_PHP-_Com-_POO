<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Pessoa
 *
 * @author Kaique
 */

class Pessoa {
    //put your code here
    private $pessoa;
    private $idade;
    private $sexo;
    
    //Métodos públicos
    public function fazerAvatar() {
        
    }
    
    public function __construct($pe, $id, $s) {
        $this->pessoa = $pe;
        $this->idade = $id;
        $this->sexo = $s;
    }
    
    public function getPessoa($pe) {
        return $this->$pe;
    }

    public function getIdade($id) {
        return $this->$id;
    }

    public function getSexo($s) {
        return $this->$s;
    }

    public function setPessoa($p): void {
        $this->pessoa = $p;
    }

    public function setIdade($id): void {
        $this->idade = $id;
    }

    public function setSexo($s): void {
        $this->sexo = $s;
    }



}
