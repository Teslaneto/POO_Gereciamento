<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    $Usuarios = new Usuario($db);
    $listaAlunos = $Usuarios->listarUsuarios();

    // var_dump($listaAlunos);
    echo "<pre>";
    print_r($listaAlunos);
    echo "</pre>";
    ?>
</body>
</html>