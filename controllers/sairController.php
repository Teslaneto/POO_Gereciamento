<?php
require_once '../classes/Session.php';
require_once '../includes/config.php';
// Iniciar a sessão
Session::start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$simS = $_POST['sim'];

if (isset($simS)) {
    Session::destroy();
    header('Location: http://localhost:5000');
    Session::set('logado', 'NAO');
    exit();
} else {
    // Caso a destruição da sessão falhe
    echo "Erro ao processar a saída.";
}

}


