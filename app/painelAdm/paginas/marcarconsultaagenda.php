<?php
$resultdados = new Conexao();

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
                        Paciente/Medico: <input class="form-control" disabled type="text" name="nome" value="   <?php echo $dados['nome'] ?>" required /><br /><br />

                        Data da consulta: <input class="form-control" type="date" name="data" required /><br /><br />
                        <button class="btn btn-secondary" type="submit"> Cadastrar novo evento </button>
                    </form>
                </div>

            </div>

        </div>


    <?php }   ?>

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