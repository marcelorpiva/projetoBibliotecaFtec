<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categorias
 *
 * @author aline.zanin
 */
class Categorias{
    //put your code here
    private $nome;
    private $descricao;
    private $id;
    
    function __construct($nome, $descricao, $id) {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->id = $id;
    }
    
    function getNome() {
        return $this->nome;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getId() {
        return $this->id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setId($id) {
        $this->id = $id;
    }

}