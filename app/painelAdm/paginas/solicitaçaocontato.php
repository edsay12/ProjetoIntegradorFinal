<?php $resultdados = new Conexao();

$dados = $resultdados->consultarBanco('SELECT * FROM contato');

?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Solicitações de Marcação</h1>
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
                        <div class="card-header">



                            <!-- /.card-header -->


                            <table id="example1" class="table table-bordered table-striped">

                                <thead>
                                    <tr class="text-center">
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Mensagem</th>

                                        <th>Opções</th>

                                    </tr>
                                </thead>

                                <tbody>

                                    <?php foreach ($dados as $dadosusuarios) {  ?>
                                        <tr class="text-center">
                                            <td><?php echo $dadosusuarios["nome"]  ?></td>
                                            <td><?php echo $dadosusuarios["email"]  ?></td>
                                            <td><?php echo $dadosusuarios["mensagem"]  ?></td>



                                            <td>
                                                <a class="btn btn-outline-info icon-pen" href="?pg=contatovisu&id=<?php echo $dadosusuarios['id_contato'] ?>"></a>
                                                <a class="btn btn-outline-danger icon-delete_sweep" href="?pg=apagarcontato&id=<?php echo $dadosusuarios['id_contato'] ?>"></a>
                                            </td>
                                        <?php   }  ?>
                                        </tr>





                                </tbody>

                            </table>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Pontuario</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="app\painelAdm\dist\img\prontuc3a1rio-1-001.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
</div>