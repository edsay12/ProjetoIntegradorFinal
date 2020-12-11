<?php
$resultdados = new Conexao();

$dadopaciente = consultaSQL('pacientes', 'id_paciente', $_GET["id"]);

$dados1 = $resultdados->consultarBanco('SELECT * FROM profissionais');

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Editar pacientes</h1>
                    <h1 class="m-0"></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3"></div>

                <div class="col-6 alight-itens-center">

                    <?php foreach ($dadopaciente as $dados) { ?>
                        <form action="?pg=editarpacientes" method="POST">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nome</label>
                                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'] ?>" autofocus class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">rg</label>
                                <input type="text" name="rg" value="<?php echo $dados['rg'] ?>" class="form-control rg">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">cpf</label>
                                <input type="text" name="cpf" value="<?php echo $dados['cpf'] ?>" class="form-control cpf">
                            </div>
                            <label for="exampleFormControlInput1">Medico</label>
                            <select id="inputState" name="medico" class="form-control">

                                <?php foreach ($dados1 as $dadosusuarios) {  ?>
                              
                                    <option name="medico" selected> <?php  echo $dadosusuarios["especialidade"]  ?> / <?php  echo $dadosusuarios["nomemedico"]  ?> </option>
                                <?php  } ?>
                            </select>


                            <input type="hidden" name="id_paciente" value="<?php echo $dados['id_paciente'] ?>">
                            <div class="text-right">
                                <a href="cpanel.php?pg=editarpacientes" class='btn btn-primary'>voltar</a>
                                <button class="btn btn-danger">atualizar</button>
                            </div>

                        </form>
                    <?php }   ?>

                </div>










            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
</section>