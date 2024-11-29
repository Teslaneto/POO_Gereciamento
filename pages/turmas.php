<?php
$turmas = new Turmas($db);
$dadosTurmas = $turmas->listarTurmas();

?>
<h1 class="text-left color-h1">Turmas</h1>
<div class="borde">
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="container">
                <table class="table table-hover col-md-15">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Turno</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($dadosTurmas as $dados) {
                    ?>
                        <tr>
                            <?php
                            //ID DA TURMA
                            echo("<td>" .$dados['id']. "</td>");
                            //NOME DA SALA
                            echo("<td>" .$dados['nome']. "</td>");
                            //TURNO DO ALUNO
                            echo("<td>" .$dados['turno']. "</td>");
                            ?>
                            <td>
                                <div class="d-flex justify-content-start">
                                    <form action="../controllers/TurmaController.php" method="post">
                                        <?//PEGAR O ID DA TURMA E ATRIBUI AO name='id'?>
                                        <input  type="hidden" name="id"  value="<?= $dados['id']?>">
                                        <button type="button" class="btn btn-primary btn-sm mr-2" name="visualizar" value="visualizar">Visualizar</button>                              

                                        <button type="submit" class="btn btn-warning btn-sm mr-2" name="editar"     value="editar">Editar</button>
                                        <button type="submit" class="btn btn-danger btn-sm"       name="apagar"     value="apagar">Apagar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php } //FIM DO FOREACH LISTA?>
                    </tbody>
                </table>
            </div>
        </div>
</div>