<?php
class Usuario {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function listarUsuarios() {
        return $this->db->query("SELECT * FROM tb_alunos")->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function verificarLogin($login, $senha) {
        $sql = "SELECT login FROM tb_admin WHERE login = :login AND senha = :senha";
        $result = $this->db->query(
            $sql,
            [
                ':login' => $login,
                ':senha' => $senha
            ]
        )->fetch(PDO::FETCH_ASSOC);
    
        // Retorna verdadeiro se encontrou o usuário, falso caso contrário
        return $result !== false;
    }
}
