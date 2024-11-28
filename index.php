<?php
require_once 'includes/config.php';
Session::start();
// Controle simples para redirecionar páginas
$page = isset($_GET['page']) ? $_GET['page'] : 'login';
$file = "pages/$page.php";

if(Session::get('logado') === 'NAO' && Session::get('logado') !== 'SIM'){
    include_once 'pages/login.php';
}else if (file_exists($file)) {
    include_once 'includes/header.php';
    include_once $file;
    include_once 'includes/footer.php';
} else {
    echo "<h1>Página não encontrada</h1>";
}
