<?php
class Usuario {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function criarUsuario($nome, $email, $senha) {
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
        $this->db->query($sql, [
            ':nome' => $nome,
            ':email' => $email,
            ':senha' => password_hash($senha, PASSWORD_DEFAULT)
        ]);
    }

    public function listarUsuarios() {
        return $this->db->query("SELECT * FROM tb_alunos")->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function verificarLogin($login, $senha){
        $sql = "SELECT login FROM tb_admin WHERE login = :login AND senha = :senha";
        $this->db->query($sql,
        [':nome' => $login,
         ':senha' => $senha
        ])->fecth(PDO::FETCH_ASSOC);
    }
}
