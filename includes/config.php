<?php
// Autoload de classes
spl_autoload_register(function ($className) {
    $file = __DIR__ . '/../classes/' . $className . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

// Configurações gerais
define('BASE_URL', 'http://localhost:5000');
define('DB_HOST', 'localhost');
define('DB_NAME', 'db_minhaescola');
define('DB_USER', 'root');
define('DB_PASS', 'root');

// Conexão com banco de dados
$db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS);

