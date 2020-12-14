<?php $resultdados = new Conexao();

$dados = $resultdados->consultarBanco('SELECT * FROM pacientes');

?>



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


                        <!-- /.card-header -->
                        <div class="card-body">





                            <table id="example1" class="table table-bordered table-striped">
                                <a href="cpanel.php?pg=marcarconsulta" class="btn btn-success">Cadastrar Paciente</a>

                                <thead>
                                    <tr class="text-center">

                                        <th>Paciente</th>
                                        <th>RG</th>
                                        <th>CPF</th>
                                        <th>Data</th>
                                        <th>Recepcionista</th>
                                        <th>Prontuário</th>
                                        <th>Marcar Consulta</th>




                                        <th>Opções</th>

                                    </tr>
                                </thead>

                                <tbody>

                                    <?php foreach ($dados as $dadosusuarios) {  ?>
                                        <tr class="text-center">

                                            <td><?php echo $dadosusuarios["nome"]  ?></td>
                                            <td><?php echo $dadosusuarios["rg"]  ?></td>
                                            <td><?php echo $dadosusuarios["cpf"]  ?></td>
                                            <td><?php echo $dadosusuarios["dataAtualizacao"]  ?></td>

                                            <td>Jenny</th>
                                            <td> <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                                                    Prontuário
                                                </button>
                                            </td>



                                            <td>
                                                <a class="btn btn-outline-info" href="?pg=marcarconsultaagenda&id=<?php echo $dadosusuarios['id_paciente'] ?>">Marcar consulta</a>

                                            </td>
                                            <td>
                                                <a class="btn btn-outline-warning icon-pencil" href="?pg=editarpacientes&id=<?php echo $dadosusuarios['id_paciente'] ?>"></a>
                                                <a class="btn btn-outline-danger icon-delete_sweep" href="?pg=apagarpacientes&id=<?php echo $dadosusuarios['id_paciente'] ?>"></a>
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
                                                    <h4>Clínica Escola Senac</h4>-Josivan da Silva <br>-Clínico Geral <br>-17/12/2020
                                                </div>
                                                ------------------------------------------------------------------------------------------------
                                                <div class="text-rigth">Número do prontuário:8745524554
                                                    <br> Data de abertura:17/12/2020
                                                    <br>Nome completo: Reginaldo Silva Leite
                                                    <br>Data de nascimento:25/03/1985
                                                    <br>Gênero:Masculino
                                                    <br>Endereço: Avenida Prefeito Severino Cunha Primo, 30 - Jardim Paulista, Paulista - PE, 53407-000
                                                    <br>Telefone(s):(81) 3372-8250
                                                    <br>Escolaridade: Ensino Superior
                                                    <br>Ocupação:Professor
                                                    <br>Limitação: [ ] Cognitiva [ ] Locomoção [ ] Visão [ ] Audição [X] Outras:
                                                    <br>Alergia: Casca de amendoim <br>
            
                                                    <br>Médico(s) do paciente: Josivan da Silva
                                                    <br>Data:17/12/2020
                                                    <br>Avaliação: Paciente Reginaldo Silva Leite deu entrada na clinica as 13:32 no dia 17/12/2020 com vermelhidão e inchaço na pele, o paciente informol que tinha alergia a casca do emendoim, com o resultado dos exames foi adiministrado corticoides(Prednisona) de alegia.
                                                </div>



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