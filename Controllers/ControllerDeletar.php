<?php
include '../classes/ClassCrud.php';

$Crud = new ClassCrud();
$IdUser = filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);

$Dell = $Crud->deleteDB("myguests", "id=?", array($IdUser));

if ($Dell){
    header("Location:../selecao.php");
}