<?php
require_once 'includes/config.php';

// Controle simples para redirecionar páginas
$page = isset($_GET['page']) ? $_GET['page'] : 'login';
$file = "pages/$page.php";

if (file_exists($file)) {
    include_once 'includes/header.php';
    include_once $file;
    include_once 'includes/footer.php';
} else {
    echo "<h1>Página não encontrada</h1>";
}
