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

}