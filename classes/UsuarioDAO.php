<?php

include 'ClassConexao.php';

class UsuarioDAO {
    private $pdo;
    private $debug;
        
    public function __construct() {
        $this->pdo = new ClassConexao();      
        $this->debug = true;
    }
    
    public function AutenticarUsuario(string $usu, string $senha, int $permissao) {
        try {

            if ($permissao == 1) {
                $sql = "SELECT id, email FROM usuario WHERE permissao = :permissao AND email = :usuario AND password = :senha";

                $param = array(
                    ":permissao" => $permissao,
                    ":usuario" => $usu,
                    ":senha" => $senha
                );
            } else {
                $sql = "SELECT id, email FROM usuario WHERE email = :usuario AND password = :senha";

                $param = array(
                    ":usuario" => $usu,
                    ":senha" => $senha
                );
            }

            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);

            if ($dt != null) {
                $usuario = new Usuario();
                $usuario->setId($dt["id"]);
                $usuario->setEmail($dt["email"]);

                return $usuario;
            } else {
                return null;
            }
        } catch (PDOException $ex) {
            if ($this->debug) {
                echo "ERRO: {$ex->getMessage()} LINE: {$ex->getLine()}";
            }
            return null;
        }
    }
}
