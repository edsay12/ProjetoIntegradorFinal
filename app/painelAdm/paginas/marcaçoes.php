<?php $resultdados = new Conexao();

$dados = $resultdados->consultarBanco('SELECT * FROM eventos');

?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Consultas Marcadas</h1>

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





                            <table id="example1" class="table table-bordered table-striped">
                                <a href="cpanel.php?pg=pacientes" class="btn btn-success">Pacientes</a>


                                <thead>
                                    <tr class="text-center">

                                        <th>Paciente</th>
                                        <th>Médico</th>
                                        <th>Data</th>
                                       



                                        <th>Opções</th>

                                    </tr>
                                </thead>

                                <tbody>

                                    <?php foreach ($dados as $dadosusuarios) {  ?>
                                        <tr class="text-center">

                                            <td><?php echo $dadosusuarios["title"]  ?></td>
                                            <td><?php echo $dadosusuarios["medico"]  ?></td>
                                            <td><?php echo $dadosusuarios["start"]  ?></td>
                                          

                                            
                                            <td>
                                                <a class="btn btn-outline-danger icon-delete_sweep" href="?pg=apagarconsulta&id=<?php echo $dadosusuarios['id_eventos'] ?>"></a>
                                            </td>



                                        <?php   }  ?>
                                        </tr>





                                </tbody>

                            </table>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-gray">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> <i><b>Prontuário</b></i></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-4 text-center"><img src="app/assets/img/iconfinder_8_5027891.png" alt=""></div>
                                                <div class="col-7">
                                                    <h4>Clinica Escola Senac</h4>-Luiz Fernando Menezes <br>-Clinico Geral <br>-11/12/2020
                                                </div>
                                                ------------------------------------------------------------------------------------------------
                                                <div class="text-rigth"> Lorem ipsum dolor sit amet consectetur adipisicing elit. A quidem deleniti accusamus quisquam tempora molestias dolore aspernatur exercitationem quae, nihil minus ullam expedita, at dolor voluptatum soluta rem et quod.</div>



                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>

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