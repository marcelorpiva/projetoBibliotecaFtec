<?php
include_once './Pessoa.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Alunos
 *
 * @author aline.zanin
 */
class Alunos extends Pessoa{
    //put your code here
    private $matricula;
    private $id;
    
    function __construct($matricula, $id) {
        $this->matricula = $matricula;
        $this->id = $id;
    }

    
    function getMatricula() {
        return $this->matricula;
    }

    function getId() {
        return $this->id;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setId($id) {
        $this->id = $id;
    }




}
