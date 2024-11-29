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
        $apagarTurma = new Turmas($db);

        $apagarTurma->apagarTurma($id);
        header("Location: http://localhost:5000/?page=turmas");
        
    } else if (isset($editar)) {
        
    } else if (isset($visualizar)) {

    }
}
