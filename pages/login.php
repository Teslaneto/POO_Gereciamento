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
        <!-- Tela de Carregamento -->
    <div id="loading">
        <img src="https://i.gifer.com/ZZ5H.gif" alt="Carregando...">
    </div>

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

            <script>
            // Simula um carregamento e exibe o conteúdo após 3 segundos
            window.addEventListener("load", function() {
                const loading = document.getElementById("loading");
                const content = document.getElementById("content");

                setTimeout(() => {
                    loading.style.display = "none"; // Remove a tela de carregamento
                    content.style.display = "block"; // Exibe o conteúdo principal
                }, 2000); // Tempo em milissegundos (3 segundos)
            });
        </script>
    </body>
</html>