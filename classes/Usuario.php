<?php


class Usuario {
    private $id;
    private $nome;
    private $email;
    private $password;
    private $permicao;
    
    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

        function getPermicao() {
        return $this->permicao;
    }

    function setPermicao($permicao) {
        $this->permicao = $permicao;
    }

        function getId() {
        return $this->id;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }


}
