<?php

require '../classes/UsuarioDAO.php';

class UsuarioController {
    private $usuarioDAO;
    
    public function __construct() {
        $this->usuarioDAO = new UsuarioDAO();
    }
    
    public function AutenticarUsuario(string $usu, string $senha, int $permissao) {

        if (strlen($usu) >= 7 && strlen($senha) >= 7 && $permissao > 0) {
            //$senha = md5($senha);
            return $this->usuarioDAO->AutenticarUsuario($usu, $senha, $permissao);
        } else {
            return null;
        }
    }
}
