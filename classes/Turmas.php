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



}