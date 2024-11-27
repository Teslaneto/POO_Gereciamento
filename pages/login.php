<?php
// Iniciar a sessão
session_start();
// Se o formulário de login for enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if (!empty($login) && !empty($senha)) {
        $Usuario = new Usuario($db);

        if ($Usuario->verificarLogin($login, $senha)) {
            $_SESSION['msg'] = "<p>Seja Bem-vindo!</p>";
            $_SESSION['logado'] = "SIM";
        }else{
            $_SESSION['msg'] = "<p>Login ou Senha Incorretos!</p>";
            $_SESSION['logado'] = "NAO";
        }
    }else{
        $_SESSION['msg'] = "<p>Por favor, preencha todos os campos!</p>";
        $_SESSION['logado'] = "NAO";
    }
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style_tela1.css">
    <title>Meu Php</title>
    </head>
    <body> 
            <div id="Container">
                <div id="center">
                    <form action="" method="post">
                        <img  class="img1" src="img/Minha_Escola.png" alt="">
                            <div>
                                <input  class="email"  type="text" name="login" placeholder="informe o Login">
                            </div>
                            <div>
                                <input  class="senha" type="password" name="senha" placeholder="Informe a Senha">
                            </div>
                            
                            <a class="linkpro" href="acessoprofe.php"> Professores </a>
                            <input  class="submit" type="submit" value="Enviar">

                        </form>
                        <span><?php echo($_SESSION['msg']);?></span>
                </div>
            </div>
    </body>
</html>