<?php

class Turmas 
{
    private $db;

    public function __construct($db) 
    {
        $this->db = $db;
    }

    public function listarTurmas()
    {
        $sql = "SELECT id, nome, turno FROM tb_turmas";
        $resul = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $resul;
    }

    public function apagarTurma($id)
    {
        $sql = "DELETE FROM tb_turmas WHERE id = :id";
        $this->db->query($sql,
        [
            ":id" => $id
        ]
        );
    }

    public function editarTurma($id)
    {
        $sql = "UPDATE tb_turmas SET nome = :nome, Turno = :turno";
    }


    public function nomeProfessorTurma($id)
    {
        $sql = "SELECT tb_professores.nome 
                FROM tb_turmas
                INNER JOIN tb_professores 
                ON tb_turmas.id_professores = tb_professores.id WHERE tb_turmas.id
        ";
        $nomeProfessor = $this->db->query($sql,
                        [
                            ":id" => $id
                        ]
                        );
        return $nomeProfessor;
    }
}