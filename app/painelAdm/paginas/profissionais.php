<?php $resultdados = new Conexao();

$dados = $resultdados->consultarBanco('SELECT * FROM profissionais');

?>





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Profissionais</h1>
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
                <div class="col">


                    <div class="card">



                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="cpanel.php?pg=cadastrodemedicos" class="btn btn-success">Cadastrar Profissional</a>





                            <table id="example1" class="table table-bordered table-striped">



                                <thead>
                                    <tr class="text-center">
                                        <th>Nome</th>
                                        <th>RG</th>
                                        <th>CPF</th>
                                        <th>Especialidade</th>

                                        <th>Opções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($dados as $dadosusuario) {
                                    ?>

                                        <tr class="text-center">
                                            <td><?php echo $dadosusuario["nomemedico"]  ?></td>
                                            <td><?php echo $dadosusuario["rg"]  ?></td>
                                            <td><?php echo $dadosusuario["cpf"]  ?></td>
                                            <td><?php echo $dadosusuario["especialidade"]  ?></td>


                                            <th>
                                                <a class="btn btn-outline-warning icon-pencil" href="?pg=editarprofissionais&id=<?php echo $dadosusuario['id_profi'] ?>"></a>
                                                <a class="btn btn-outline-danger icon-delete_sweep" href="?pg=apagarprofissionais&id=<?php echo $dadosusuario['id_profi'] ?>"></a>
                                            </th>
                                        </tr>
                                    <?php  } ?>

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
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