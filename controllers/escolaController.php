<?php
require_once '../includes/config.php';
require_once '../classes/Turmas.php';

//Pages->Turmas.php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['id'];
    $apagar = $_POST['apagar'];
    $editar = $_POST['editar'];
    $visualizar = $_POST['visualizar'];

    if (isset($apagar)) {
        $apagarTurma = new Escolas($db);

        $apagarTurma->apagarEscola($id);
        header("Location: http://localhost:5000/?page=escolas");
        
    } else if (isset($editar)) {
        
    } else if (isset($visualizar)) {

    }
}
