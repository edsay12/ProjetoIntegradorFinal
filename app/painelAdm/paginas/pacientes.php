<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pacientes</h1>
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
                            <h3 class="card-title far icon-calendar_today">
                                04 de Dezembro até 17 de Dezembro.
                            </h3>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">






                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>id</th>
                                        <th>Paciente</th>
                                        <th>RG</th>
                                        <th>CPF</th>
                                        <th>Recepicionista</th>
                                        <th>Prontuário</th>
                                        <th>Marcar Nova Consulta</th>
                                        <th>Açoes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <th>02</th>
                                        <th>Joao</th>
                                        <th>7.234.234</th>
                                        <th>123.123.123-23</th>
                                        <th>Jenny</th>
                                        <th>3</th>
                                        <th></th>
                                        <th>
                                            <a class="btn btn-outline-warning icon-pencil" href="?pg=usuario_editar&id=<?php echo $dadosusuarios['id_usuario'] ?>"></a>
                                            <a class="btn btn-outline-danger icon-delete_sweep" href="?pg=usuariodeletar&id=<?php echo $dadosusuarios['id_usuario'] ?>"></a>
                                        </th>
                                    </tr>


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