<?php
$Escolas = new Escolas($db);
$dadosEscolas = $Escolas->listarEscolas();
?>
<h1 class="form-header text-center h4">Gerenciamento de Escolas</h1>
<button type="submit" class="button-dir btn btn-success btn-sm mr-2" name="addEscola" value="addEscola">Adicionar Escolar</button>
<div class="borde">
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="container">
                <table class="table table-hover col-md-15">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($dadosEscolas as $dados) {
                    ?>
                        <tr>
                            <?php
                            //ID DA TURMA
                            echo("<td>" .$dados['id']. "</td>");
                            //NOME DA SALA
                            echo("<td>" .$dados['nome']. "</td>");
                            //TURNO DO ALUNO
                            echo("<td>" .$dados['endereco']. "</td>");
                            
                            ?>
                            <td>
                                <div class="d-flex justify-content-start">
                                    <form action="../controllers/TurmaController.php" method="post">
                                        <?//PEGAR O ID DA TURMA E ATRIBUI AO name='id'?>
                                        <input  type="hidden" name="id"  value="<?= $dados['id']?>">
                                        <button 
                                        type="button" 
                                        class="btn btn-primary btn-sm mr-2" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#janelaVisualizar"
                                        data-id="<?= $dados['id'] ?>"
                                        data-nome="<?= $dados['nome'] ?>"
                                        data-turno="<?= $dados['endereco'] ?>"
                                    >
                                        Visualizar
                                    </button>                             

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

<script src="../assets/js/capturaDadosEscola.js"></script>
<!-- JANELA DE VISUALIZAÇÃO -->
<div class="modal fade" id="janelaVisualizar" tabindex="-1" aria-labelledby="janelaVisualizarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="janelaVisualizarLabel">Dados Turma:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>