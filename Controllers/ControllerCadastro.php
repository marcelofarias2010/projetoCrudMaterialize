<?php

include '../include/variaveis.php';
include '../classes/ClassCrud.php';

$Crud = new ClassCrud();

if ($Acao == "Cadastrar") {
    $Crud->insertDB('myguests', '?,?,?,?', array($Id, $Nome, $Sobrenome, $Email));
    echo "Cadastro Realizado com Sucesso!";
} else {
    $Crud->updateDB('myguests', 'firstname=?,lastname=?,email=?', 'id=?', array(
        $Nome,
        $Sobrenome,
        $Email,
        $Id));
    echo "Cadastro Editado com Sucesso!";
}

