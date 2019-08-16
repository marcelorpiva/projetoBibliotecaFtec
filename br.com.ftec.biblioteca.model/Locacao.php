<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Locacao
 *
 * @author aline.zanin
 */
class Locacao {
    //put your code here
    private $livro;
    private $pessoa;
    private $dataRetirada;
    private $dataDevolucao;
    private $id;
    
    
    function __construct($livro, $pessoa, $dataRetirada, $dataDevolucao, $id) {
        $this->livro = $livro;
        $this->pessoa = $pessoa;
        $this->dataRetirada = $dataRetirada;
        $this->dataDevolucao = $dataDevolucao;
        $this->id = $id;
    }

    function getLivro() {
        return $this->livro;
    }

    function getPessoa() {
        return $this->pessoa;
    }

    function getDataRetirada() {
        return $this->dataRetirada;
    }

    function getDataDevolucao() {
        return $this->dataDevolucao;
    }

    function getId() {
        return $this->id;
    }

    function setLivro($livro) {
        $this->livro = $livro;
    }

    function setPessoa($pessoa) {
        $this->pessoa = $pessoa;
    }

    function setDataRetirada($dataRetirada) {
        $this->dataRetirada = $dataRetirada;
    }

    function setDataDevolucao($dataDevolucao) {
        $this->dataDevolucao = $dataDevolucao;
    }

    function setId($id) {
        $this->id = $id;
    }


}
