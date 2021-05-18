<?php

if(isset($_POST['Acao'])){
    $Acao = filter_input(INPUT_POST, 'Acao', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset ($_GET['Acao'])){
    $Acao = filter_input(INPUT_GET, 'Acao', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $Acao = "";
}

if(isset($_POST['Id'])){
    $Id = filter_input(INPUT_POST, 'Id', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Id'])){
    $Id = filter_input(INPUT_GET, 'Id', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $Id=0;
}

if(isset($_POST['nome'])){
    $Nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset ($_GET['nome'])){
    $Nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $Nome = "";
}

if(isset($_POST['sobrenome'])){
    $Sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset ($_GET['sobrenome'])){
    $Sobrenome = filter_input(INPUT_GET, 'sobrenome', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $Sobrenome = "";
}

if(isset($_POST['email'])){
    $Email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset ($_GET['email'])){
    $Email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $Email = "";
}
