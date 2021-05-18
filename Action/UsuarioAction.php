<?php

session_start();

require '../Controllers/UsuarioController.php';
require '../classes/Usuario.php';

$usuarioController = new UsuarioController();

$req = filter_input(INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);

if ($req == "1") {
    $usu = filter_input(INPUT_POST, "txtUsuario", FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, "txtSenha", FILTER_SANITIZE_STRING);
    $permissao = 1;

    $usuario = $usuarioController->AutenticarUsuario($usu, $senha, $permissao);
    if (!empty($usuario)) {
        $_SESSION["id"] = $usuario->getId();
        
        $ex = explode(" ", $usuario->getEmail());
        $_SESSION["email"] = $ex[0];
        echo "ok";
    } else {
        echo "invalid";
    }
}
