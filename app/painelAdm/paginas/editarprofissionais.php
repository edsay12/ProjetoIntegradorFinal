<?php
$resultdados = new Conexao();

$dados1 = $resultdados->consultarBanco('SELECT * FROM especialidades');

$dadopaciente = consultaSQL('profissionais', 'id_profi', $_GET["id"]);



?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Editar profissional</h1>
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
                        <form action="?pg=editarprofissionais" method="POST">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nome:</label>
                                <input type="text" name="nomemedico" id="nomemedico" value="<?php echo $dados['nomemedico'] ?>" autofocus class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">RG:</label>
                                <input type="text" name="rg" value="<?php echo $dados['rg'] ?>" class="form-control rg">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">CPF:</label>
                                <input type="text" name="cpf" value="<?php echo $dados['cpf'] ?>" class="form-control cpf">
                            </div>
                            <label for="exampleFormControlInput1">Especialidade:</label>

                            <select id="inputState" name="especialidade" class="form-control">

                                <?php foreach ($dados1 as $dadosusuarios) {  ?>

                                    <option name="especialidade" selected> <?php echo $dadosusuarios["especialidade"]  ?> </option>
                                <?php  } ?>
                            </select>

                            <br>
                            <input type="hidden" name="id_profi" value="<?php echo $dados['id_profi'] ?>">
                            <div class="text-right">
                                <a href="cpanel.php?pg=profissionais" class='btn btn-primary'>Voltar</a>
                                <button class="btn btn-danger">Confirmar</button>
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