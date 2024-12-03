<?php

class Escolas
{
    private $db;

    public function __construct($db)
    {
       $this->db = $db; 
    }

    public function listarEscolas()
    {
        $query = "SELECT id, nome, endereco FROM tb_escola";
        $listarEscolas = $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);
        return $listarEscolas;
    }

    public function apagarEscola($id)
    {
        $query = "DELETE FROM tb_escola WHERE id = :id";
        $this->db->query($query,
        [
            ":id" => $id
        ]
        );
    }

    public function adicionarEscolas($nome, $inep, $endereco)
    {
        $query = "INSERT INTO tb_escola FROM (nome, inep, endereco) 
                  VALUES (:nome, :inep, :endereco)";
        $this->db->query($query,
        [
            ":nome" => $nome,
            ":inep" => $inep,
            ":endereco" => $endereco
        ]
        );
    }

}