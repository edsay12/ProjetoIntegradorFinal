<?php
$resultdados = new Conexao();

$dadopaciente = consultaSQL('contato', 'id_contato', $_GET["id"]);

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
                        <form  >
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nome</label>
                                <input type="text" disabled name="nome" id="nome" value="<?php echo $dados['nome'] ?>" autofocus class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">email</label>
                                <input type="text" disabled name="email" value="<?php echo $dados['email'] ?>" class="form-control ">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">mensagem</label>
                                <textarea type="text" disabled name="mensagem" value="" class="form-control "> <?php echo $dados['mensagem'] ?></textarea>
                            </div>
                        
                            </select>


                            <div class="text-right">
                                <a href="cpanel.php?pg=solicitaçaocontato" class='btn btn-primary'>voltar</a>

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