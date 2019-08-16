<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Autores
 *
 * @author aline.zanin
 */
class Autores{
    //put your code here
    private $nome;
    private $id;
    
    function __construct($nome, $id) {
        $this->nome = $nome;
        $this->id = $id;
    }
    
    function getNome() {
        return $this->nome;
    }

    function getId() {
        return $this->id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setId($id) {
        $this->id = $id;
    }
}
