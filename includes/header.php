<?php
Session::start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto POO PHP</title>
    <!--BOOSTRAP-->
    <link href="/Bootstrap/bootstrap-4.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="/Bootstrap/bootstrap-4.1.3-dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="assets/css/text.css">
    <link rel="stylesheet" type="text/css" href="assets/css/form_escola.css">
</head>
<body>
    <div>
        <ul class="nav">
            <img class="img1" src="assets/img/Minha_Escola.png" alt="logo">
            <li><a href="<?= BASE_URL?>?page=home">Home</a></li>
            <li><a href="<?= BASE_URL?>?page=turmas">Turmas</a></li>
            <li><a href="<?= BASE_URL?>?page=escolas">Escolas</a></li>
            <li><a href="<?= BASE_URL?>?page=professores">Professores</a></li>
            <li><a href="<?= BASE_URL?>?page=alunos">Alunos</a></li>
            <li><a href="<?= BASE_URL?>?page=sair">Sair</a></li>
        </ul>
    </div>
