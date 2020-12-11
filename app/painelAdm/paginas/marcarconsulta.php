
<?php $resultdados = new Conexao();

$dados = $resultdados->consultarBanco('SELECT * FROM profissionais');

?>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Marcar Consulta</h1>
                    
                </div>
            </div>


            <div class="row">
                <div class="col-1 mt-4"> </div>
                <div class="col-3 mt-4"> <img src="app/painelAdm/dist/img/medd.png" alt=""> </div>
                <div class="col-6  mb-3">
                    <!-- formulario -->
                    <form action="?pg=marcarconsulta" method="POST">
                        <div class="form-group">
                            <label for="inputAddress">Nome Completo do Paciente </label>
                            <input class="form-control" type="text" name="nome" placeholder="joaquin lopes ....">
                        </div>
                        <div class="row">
                            <div class="form-group  col-md-6">
                                <label for="inputEmail4">RG</label>
                                <input class="form-control rg" type="text"  name="rg"  placeholder="9.858.659" id="inputEmail4">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">CPF</label>
                                <input type="text"  name="cpf" class="form-control cpf" placeholder="133.151.154-56" id="inputPassword4">
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group   col-md-6">
                                <label  name="medico" for="inputState">Médicos</label>

                                
                                <select id="inputState" name="medico" class="form-control">
                                    <?php  foreach($dados as $dadosusuarios) {   ?>

                                    <option  name="medico" selected> <?php  echo $dadosusuarios["especialidade"]  ?> / <?php  echo $dadosusuarios["nomemedico"]  ?> </option>
                                 <?php  } ?>
                                </select>

                            </div>
                            <div class="form-group   col-md-6" name="data1" >
                                <label for="inputState">Data</label>
                                <input type="date"  name="data1" class="form-control " >
                                
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-lg btn-block"> Marcar<span class="icon-cheveron-right"></span> </button>
                        </div>
                    </form>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /parte do meio -->



</div>
<!-- /.final meio -->