<?php
require_once '../classes/Session.php';
require_once '../includes/config.php';

Session::start();

if (!Session::get('logado') || Session::get('logado') != 'SIM') {
    // Redireciona para a página de login se a sessão não estiver válida
    header("Location: http://localhost:5000");
    exit();
}