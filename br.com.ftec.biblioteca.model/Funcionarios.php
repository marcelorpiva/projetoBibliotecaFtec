<?php
include_once './Pessoa.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funcionarios
 *
 * @author aline.zanin
 */
class Funcionarios extends Pessoa{
    //put your code here
    private $codigo;
    private $funcao;
    private $id;
    
    function __construct($codigo, $funcao, $id) {
        $this->codigo = $codigo;
        $this->funcao = $funcao;
        $this->id = $id;
    }

    
    function getCodigo() {
        return $this->codigo;
    }

    function getFuncao() {
        return $this->funcao;
    }

    function getId() {
        return $this->id;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setFuncao($funcao) {
        $this->funcao = $funcao;
    }

    function setId($id) {
        $this->id = $id;
    }  


}