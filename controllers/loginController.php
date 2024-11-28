<?php
require_once '../classes/Session.php';
require_once '../classes/Usuario.php';
require_once '../includes/config.php';

Session::start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


    if (!empty($login) && !empty($senha)) {
        $Usuario = new Usuario($db);

        if ($Usuario->verificarLogin($login, $senha)) {
            Session::set('msg', 'Seja Bem-vindo!');
            Session::set('logado', 'SIM');
            header('Location: http://localhost:5000/?page=home'); // Redirecionar para a página principal
            exit;
        } else {
            Session::set('msg', 'Login ou Senha Incorretos!'); 
            Session::set('logado', 'NAO');
            header('Location: http://localhost:5000/'); 
            exit;
        }
    } else {
        Session::set('msg', 'Por favor, preencha todos os campos!');
        Session::set('logado', 'NAO');
        header('Location: http://localhost:5000/'); 
        exit;
    }
}
?>
