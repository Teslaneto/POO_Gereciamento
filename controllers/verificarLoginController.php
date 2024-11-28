<?php
require_once '../classes/Session.php';
require_once '../includes/config.php';

Session::start();
if (Session::get('logado') == 'NAO' && Session::get('logado') != 'SIM') {
    header('Location: http://localhost:5000');
    exit;
}