<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Editora
 *
 * @author aline.zanin
 */
class Editora{
    //put your code here
    private $nome;
    private $endereço;
    private $telefone;
    private $email;
    private $id;
    
    function __construct($nome, $endereço, $telefone, $email, $id) {
        $this->nome = $nome;
        $this->endereço = $endereço;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->id = $id;
    }

    
    function getNome() {
        return $this->nome;
    }

    function getEndereço() {
        return $this->endereço;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEmail() {
        return $this->email;
    }

    function getId() {
        return $this->id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEndereço($endereço) {
        $this->endereço = $endereço;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setId($id) {
        $this->id = $id;
    }


    
}
