<?php
Session::start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="assets/css/telaLogin.css">
    <title>Meu Php</title>
    </head>
    <body> 
            <div id="Container">
                <div id="center">
                    <form action="./controllers/loginController.php" method="post">
                        <img  class="img1" src="assets/img/Minha_Escola.png" alt="">
                            <div>
                                <input  class="email"  type="text" name="login" placeholder="informe o Login">
                            </div>
                            <div>
                                <input  class="senha" type="password" name="senha" placeholder="Informe a Senha">
                            </div>
                            
                            <a class="linkpro" href="acessoprofe.php"> Professores </a>
                            <input  class="submit" type="submit" value="Enviar">

                        </form>
                        <span class="msg-aviso"><?php echo htmlspecialchars(Session::get('msg')); ?></span>
                </div>
            </div>
    </body>
</html>