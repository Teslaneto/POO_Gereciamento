<?php
require_once 'includes/config.php';
Session::start();

// Determina a página a ser carregada
$page = isset($_GET['page']) ? $_GET['page'] : 'login';
$file = "pages/$page.php";

// Verifica o status da sessão
if (Session::get('logado') !== 'SIM') {
    // Usuário não está logado, força carregar login
    include_once 'pages/login.php';
} else {
    // Usuário está logado, carrega a página solicitada
    if (file_exists($file)) {
        include_once 'includes/header.php';
        include_once $file;
        include_once 'includes/footer.php';
    } else {
        // Página não encontrada
        include_once 'includes/header.php';
        echo "<h1>Página não encontrada</h1>";
        include_once 'includes/footer.php';
    }
}
