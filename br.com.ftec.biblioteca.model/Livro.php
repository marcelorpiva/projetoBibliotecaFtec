<?php
include_once './Pessoa.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Livro
 *
 * @author aline.zanin
 */
class Livro{
    //put your code here
    private $titulo;
    private $editora;
    private $autor;
    private $categoria;
    private $id;
    
    function __construct($titulo, $editora, $autor, $categoria, $id) {
        $this->titulo = $titulo;
        $this->editora = $editora;
        $this->autor = $autor;
        $this->categoria = $categoria;
        $this->id = $id;
    }
    
    function getTitulo() {
        return $this->titulo;
    }

    function getEditora() {
        return $this->editora;
    }

    function getAutor() {
        return $this->autor;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getId() {
        return $this->id;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setEditora($editora) {
        $this->editora = $editora;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setId($id) {
        $this->id = $id;
    }

}
