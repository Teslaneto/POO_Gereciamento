<?php
// Autoload de classes
spl_autoload_register(function ($class) {
    include_once "classes/$class.php";
});

// Configurações gerais
define('BASE_URL', 'http://localhost/Escolar/');
define('DB_HOST', 'localhost');
define('DB_NAME', 'db_minhaescola');
define('DB_USER', 'root');
define('DB_PASS', '');

// Conexão com banco de dados
$db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS);
