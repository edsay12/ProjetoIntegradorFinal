<?php
$resultdados = new Conexao();
$dados1 = $resultdados->consultarBanco('SELECT * FROM profissionais');
$dadopaciente = consultaSQL('pacientes', 'id_paciente', $_GET["id"]);



?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Marcar Consulta</h1>
                    <h1 class="m-0"></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->


    <?php foreach ($dadopaciente as $dados) { ?>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">

                <div>
                    <form id="novo_evento" action="cpanel.php?pg=eventos" method="post">
                        <!-- Nao por como disable pois pode nao funcionar -->
                        Paciente: <input class="form-control" type="text" name="nome" value="   <?php echo $dados['nome'] ?>" required /><br /><br />

                        Data da consulta: <input class="form-control" type="date" name="data" required /><br /><br />




                        <div class="form-group ">
                            <label name="medico" for="inputState">Especialidade/Médico:</label>


                            <select id="inputState" name="medico" class="form-control">
                                <?php foreach ($dados1 as $dadosusuarios) {   ?>

                                    <option name="medico" selected> <?php echo $dadosusuarios["especialidade"]  ?> / <?php echo $dadosusuarios["nomemedico"]  ?> </option>
                                <?php  } ?>
                            </select>

                        </div>

                        <div class="text-right" >
                            <button class="btn btn-secondary" type="submit"> Marcar Consulta </button>
                        </div>
                    </form>
                </div>

            </div>

        <?php }   ?>
        </div>



</div>





</div>
<!-- /.row -->
</div>

<!-- /.content -->
</div>


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
</section>

</div>
</div>