<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Troca
 *
 * @author aline.zanin
 */
class Troca {
    //put your code here
    private $pessoaDoacao;
    private $email;
    private $whatsApp;
    private $titulo;
    private $doacaoOuEmprestimo;
    private $id;
    
    function __construct($pessoaDoacao, $email, $whatsApp, $titulo, $doacaoOuEmprestimo, $id) {
        $this->pessoaDoacao = $pessoaDoacao;
        $this->email = $email;
        $this->whatsApp = $whatsApp;
        $this->titulo = $titulo;
        $this->doacaoOuEmprestimo = $doacaoOuEmprestimo;
        $this->id = $id;
    }

    function getPessoaDoacao() {
        return $this->pessoaDoacao;
    }

    function getEmail() {
        return $this->email;
    }

    function getWhatsApp() {
        return $this->whatsApp;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDoacaoOuEmprestimo() {
        return $this->doacaoOuEmprestimo;
    }

    function getId() {
        return $this->id;
    }

    function setPessoaDoacao($pessoaDoacao) {
        $this->pessoaDoacao = $pessoaDoacao;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setWhatsApp($whatsApp) {
        $this->whatsApp = $whatsApp;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDoacaoOuEmprestimo($doacaoOuEmprestimo) {
        $this->doacaoOuEmprestimo = $doacaoOuEmprestimo;
    }

    function setId($id) {
        $this->id = $id;
    }


}
